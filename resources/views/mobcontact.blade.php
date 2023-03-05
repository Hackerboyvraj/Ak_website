<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{url('asset/img/Anantkaal.jpg')}}">
    <title>Contact </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
    .form-control{
    border: none;
    border-bottom: 2px solid #D6D6D6;

}

.btn-1{
    background-color: #FFED9A;
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
#bg-col{
  background-color: #FFED9A;
}  
@media only screen and (max-width: 583px){
  #bg-col{
    width: 583px;
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
                        <p class="mid-font">Address</p>
                        <p>302, The galleria,<br>
                            Pal,<br>
                            Surat</p>
                        <p class="mid-font">Ph no.39058345830</p>
                        <p class="mid-font">Email ID</p>
                        <a href="https://goo.gl/maps/fYdaBRyTZcEH2DFM7">View Location On Map</a><br><br>
                        <a href="https://www.linkedin.com/company/theanantkaal/posts"><img class="socialimg" src="{{url('asset/img/linkdin.png')}}" alt="Linkdin"></a>
                        <a href="theanantkaal@gmail.com"><img class="socialimg" src="{{url('asset/img/Smsbox.png')}}" alt="Emailbox"></a>
                        <a href="https://twitter.com/theanantkaal"><img class="socialimg" src="{{url('asset/img/Twitter.png')}}" alt="Twitter"></a>
                        <a href="https://www.instagram.com/anantkaal_tech/?hl=en"><img class="socialimg" src="{{url('asset/img/Instagram.png')}}" alt="Instagram"></a>
                        <a href="https://www.facebook.com/people/The-Anantkaal/100090355764420/"><img class="socialimg" src="{{url('asset/img/Facebook.png')}}" alt="Facebook"></a>
                        <a href="https://wa.me/+918000420648"><img class="socialimg" src="{{url('asset/img/Whatsapp.png')}}" alt="Whatsapp"></a>
                    </div>
            </section><br>



    <div id="bg-col"><br><br>
        <h1 class="text-center">STRAIGHT TO BUSINESS</h1>
        <h4 class="text-center">You can schedule a call</h4>
        <h4 class="text-center">after filling this form</h4><br><br>
    </div>
    <section>
    <form action="/contact" method="post">
            @csrf
        <div class="container"><br><br>
            
            <input class="form-control" type="text" name="Yourname" placeholder="Your Name"><br>

                <h6>What do you need? Check all that apply*</h6>
                <input  type="checkbox" name="It" value="Hardware">Hardware
                <br>
                <input type="checkbox" name="It" value="Software">Software
                <br>
                <input type="checkbox" name="It" value="Software">Manufacturing at Scale
                <br>
                <input type="checkbox" name="It" value="Other">Other
                <br>
                   
                   
                   
                <br>

                <div>

                <input class="form-control" type="text" name="spacify" placeholder="(spacify)"><br>

                <input class="form-control" type="text" name="phone" placeholder="Phone. No.*"><br>

                <input class="form-control" type="text" name="email" placeholder="Email Address.*"><br>

                <input class="form-control" type="text" name="need" placeholder="<name>, please describe what you need done in as much detail as possible*"><br>

                <input class="form-control" type="text" name="work" placeholder="<name>, have you done any work on this that you can show us? "><br>        
          
                </div>
             
            <div> 
            <p>e.g. an existing product, designs, wire-frames, notes etc.</p>

            <div>
            <label for="inputTag">
            Select Image <br/>
            <img src="{{url('asset/img/attech.jpg')}}">
            <input style="display: none;" id="inputTag" type="file"/>
            <br/>
            <span id="imageName"></span>
            </label>
            </div>
               
            

            </div>

            <section>
                <div class="container">
                    <p>when do we need to begin?*</p>
                    <input type="checkbox" name="begin" value="immediatly">Immediatly<br>
                    <input type="checkbox" name="begin" value="Within Two Weeks">Within Two Weeks<br>
                    <input type="checkbox" name="begin" value="Between Two Weeks - A Month">Between Two Weeks - A Month<br>
                    <input type="checkbox" name="begin" value="Not Sure">Not Sure<br><br>
                    
                    <p>What's your budget for this project?*</p>
                    <input type="checkbox" name="budget" value="Less than $ 1500">Less than $ 1500<br>
                    <input type="checkbox" name="budget" value="$ 1,501 - $ 5,000">$ 1,501 - $ 5,000<br>
                    <input type="checkbox" name="budget" value="$ 5,001 - $ 10,000">$ 5,001 - $ 10,000<br>
                    <input type="checkbox" name="budget" value="Over $10,000e">Over $10,000e<br><br>

                    <p>Finally name, how did you hear about us?</p>
                    <input type="checkbox" name="about" value="Reference">Reference <br>
                    <input type="checkbox" name="about" value="Linkedin">Linkedin<br>
                    <input type="checkbox" name="about" value="Twitter">Twitter<br>
                    <input type="checkbox" name="about" value="Facebook">Facebook<br>
                    <input type="checkbox" name="about" value="Google">Google<br>
                    <input type="checkbox" name="about" value="Instagram">Instagram<br>
                    <input type="checkbox" name="about" value="Online Circle">Online Circle<br>
                    <input type="checkbox" name="about" value="Other">Other<br><br>

                    <button class="btn-1 mb-5" value="submit">Let's Get in Touch !</button>
                </div>
</form>
            </section>
            
            @include('Footer')

        <script>
        let input = document.getElementById("inputTag");
        </script>

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