<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
   

    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  font-family: 'Poppins', sans-serif;
}
ul{
    list-style-type: none;
    list-style: none;
}
a{
  text-decoration: none;
}
.visually-hidden{
  position: absolute;
  height: 1px;
  width: 1px;
  white-space: nowrap;
  clip-path: inset(-50%); 
  clip: rect(0 0 0 0);
  overflow: hidden;
}
.main-header{
  display: flex;
  width: 100%;
  align-items: center;
  justify-content: space-between;
  padding: 5px 15px;
  background-color: #FFFFFF;
  color: #fff;
  height: 64px;
}

.menu-toggle-btn{
  background: transparent;
  border: 0;
  cursor: pointer;
}
.menu-toggle-btn path{
  stroke-width: 1px;
  transform-box: fill-box;
  transition: 250ms;
  transform-origin: center;
}
.menu-toggle-btn[aria-expanded="true"] path:nth-child(1){
  opacity: 0;
  transform: rotate(45deg);
}
.menu-toggle-btn[aria-expanded="true"] path:nth-child(2){
  transform: rotate(45deg);
}
.menu-toggle-btn[aria-expanded="true"] path:nth-child(3){
  transform: translateY(-5px) rotate(-45deg);
}

.primary-navigation{
  position: absolute;
  top: 64px;
  
  color: #fff;
  
  right: 0px;
  width: 400px;
}
.primary-navigation a{
  position: relative;
  width: 100%;
  display: inline-block;
  padding: 10px 15px;
  color: #fff;
  border-bottom: 1px solid #111;
  transition: 250ms;
}
.primary-navigation a:hover,
.primary-navigation a:focus{
  color: #ff6500;
  letter-spacing: 2px;
}
.primary-navigation a:hover:before,
.primary-navigation a:focus:before{
  width: 100%;
}
.primary-navigation a:before{
  content: "";
  height: 1px;
  width: 0%;
  background-color: #ff6500;
  transition: 250ms;
  position: absolute;
  bottom: 0;
  left: 0;
}
.primary-navigation[data-state="opened"]{
  display: block;
  animation: navigationOpenAnimation 250ms ease-in-out forwards;
}
.primary-navigation[data-state="closing"]{
  animation: navigationCloseAnimation 250ms ease-in-out forwards;
}
.primary-navigation[data-state="closed"]{
 display: none;
}

@keyframes navigationOpenAnimation{
  0%{
    clip-path: circle(0% at top right);
  }
  100%{
    clip-path: circle(250% at top right);
  }
}

@keyframes navigationCloseAnimation{
  0%{
    clip-path: circle(250% at top right);
  }
  100%{
    clip-path: circle(0% at top right);
  }
}
@-webkit-keyframes navigationOpenAnimation{
  0%{
    clip-path: circle(0% at top right);
  }
  100%{
    clip-path: circle(250% at top right);
  }
}

@-webkit-keyframes navigationCloseAnimation{
  0%{
    clip-path: circle(250% at top right);
  }
  100%{
    clip-path: circle(0% at top right);
  }
}

  
.mid-font{
   font-size: x-large;  
}
.right-box{
    float: right;
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 0px;
    gap: 16px;
    margin-top: -280px;
    margin-right: 350px;
}
.socialimg{
    width: 32px;
    height: 32px;
}
#head-text{
    font-style: normal;
    font-weight: 700;
    font-size: 72px;
    line-height: 74px;
    display: flex;
    align-items: center;
    letter-spacing: 0.07em;
    text-transform: uppercase;
    color: #000000;
}
.form-control{
    border: none;
    border-bottom: 2px solid #D6D6D6;

}
.btn-1{
    background-color: #D6D6D6;
    border: none;
    border-radius: 5px;
    height: 50px;
    width: 200px;
    font-weight: 700;
    size: 24px;
    line-height: 28px;
    text-align: center;
    color: #000000;
    
}
@media only screen and (max-width: 991px){
           .right-box{
            margin-top: 3px;
            margin-right: 70px;
           } 
        }
@media only screen and (max-width: 986px){
        

}
      
@media only screen and (max-width: 384px){ 
    .primary-navigation{
          width: 300px;
    }
}  
@media only screen and (max-width: 280px){   
    .right-box {
    margin-top: 3px;
    margin-right: -12px;
}
}   
               



    </style>

</head>
<body>
    
        
            <header class="main-header">
              <a href="#" style="margin-left: 100px;">ANANTKAAL</a>
              <nav>
                <button class="menu-toggle-btn" 
                        aria-targe="primary-navigation" 
                        aria-expanded="false" 
                        aria-controls="primary-navigation">
                  <span class="visually-hidden">Menu</span>
                  <svg aria-hidden="true" height="35" width="35" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16"><path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3H2"/><path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 8H2"/><path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 13H2"/></svg>
                </button>
                <ul data-state="closed" class="primary-navigation" id="primary-navigation">
                  <li><a href="/Home" style="background-color: #FFED9A; color: #000000; border: none;">Home</a></li>
                  <li><a href="/OurWork" style="background-color: #CE91FF; color: #000000; border: none;">OUR WORK</a></li>
                  <li><a href="/about" style="background-color: #B1FFC5; color: #000000; border: none;">ABOUT US</a></li>
                  <li><a href="#" style="background-color: #F5D2D3; color: #000000; border: none;">BLOG</a></li>
                  <li><a href="contact" style="background-color: #F25F24; color: #000000; border: none;">CONTACT US</a></li>
                  <li><a href="#" style="background-color: #DDDDDD; color: #000000; border: none;">CAREERS</a></li>
                </ul>
              </nav>
            </header>
           
    
    <section>
        <div class="container">
            <div class="left-box">
            <p class="h1" >We're Ready,Let's Do This.</p>
            <p class="mid-font">Address</p>
            <p>301, The galleria,<br>
               Pal,<br>
               Surat</p>
            <p class="mid-font">Ph no.39058345830</p>   
            <p class="mid-font">Email ID</p>
            <p class="mid-font" style="color: #F25F24;">View Location On Map</p>
        </div>
        <div class="right-box">
           
         <a href="#sorry"><img class="socialimg" src="{{url('asset/img/linkdin.png')}}" alt="Linkdin"></a>
         <a href="#sorry"><img class="socialimg" src="{{url('asset/img/Smsbox.png')}}" alt="Emailbox"></a>
         <a href="#sorry"><img class="socialimg" src="{{url('asset/img/Twitter.png')}}" alt="Twitter"></a>
         <a href="#sorry"><img class="socialimg" src="{{url('asset/img/Instagram.png')}}" alt="Instagram"></a>
         <a href="#sorry"><img class="socialimg" src="{{url('asset/img/Facebook.png')}}" alt="Facebook"></a> 
         <a href="#sorry"><img class="socialimg" src="{{url('asset/img/Whatsapp.png')}}" alt="Whatsapp"></a> 
        </div>
        </div>
        <br>
        <br>
    </section>
    <section>
        <form action="/contact" method="post">
            @csrf
        <div class="container">
            <p id="head-text">Follow order of<br>mobile contact form</p>
            <input class="form-control" type="text" name="yourname" placeholder="Your Name">
            <div class="row mt-5" >
            <div class="col-lg-4">
          
                <!-- <input class="form-control" type="text" name="need" placeholder="What Do You Need?"> -->
            </div>

            <div class="col-lg-4">
                <input  type="checkbox" name="It[]" value="Hardware">Hardware
               </div>

               <div class="col-lg-4">
                <input type="checkbox" name="It[]" value="Manufacturing At Scale">Manufacturing At Scale
               </div>

               
            </div>
            <div class="row " >
                 <div class="col-lg-4">
                    <input class="form-control" type="text" name="Whatdo" placeholder="What Do You Need?">
                </div> 
    
                <div class="col-lg-4">
                    <input type="checkbox" name="It[]" value="Software">Software
                   </div>
    
                   <div class="col-lg-4">
                    <input type="checkbox" name="It[]" value="Other">Other
                   </div>
                   
                   
                </div><br>
                <input class="form-control" type="text" name="phone" placeholder="Phone. No."><br>

                <input class="form-control" type="text" name="detail" placeholder="Describe Your Needs In Max Detail"><br>

                <input class="form-control" type="text" name="refrence" placeholder="Please Show Us Work Done So Far On This As Reference"><br>

                <input class="form-control" type="text" name="begin" placeholder="When Do We Need To Begin?"><br>

                <input class="form-control" type="text" name="budget" placeholder="Finally, Your Budget:"><br>

                <button class="btn-1 mb-5" value="submit">Let's Get in Touch !</button>
            </div>
            
            
        </div>
        </form>
    </section>


    <script>
        const menuToggleBtn = document.querySelector(".menu-toggle-btn");
      const primaryNav = document.querySelector(".primary-navigation");
      
      menuToggleBtn.addEventListener('click',() => {
        let isNavOpen = menuToggleBtn.getAttribute('aria-expanded') === 'true';
        isNavOpen ? primaryMenuClose() : primaryMenuOpen();
      })
      
      function primaryMenuOpen(){
        menuToggleBtn.setAttribute('aria-expanded','true');
        primaryNav.setAttribute('data-state','opened');
      }
      function primaryMenuClose(){
        menuToggleBtn.setAttribute('aria-expanded','false');
        primaryNav.setAttribute('data-state','closing');
        primaryNav.addEventListener('animationend',() => {
          primaryNav.setAttribute('data-state','closed');
        },{once:true})
      }
      </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
   
</body>
</html>