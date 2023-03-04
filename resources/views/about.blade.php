<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{url('asset/img/Anantkaal.jpg')}}">
    <title>About Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>

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
.logo svg{
  height: 45px;
  width: 45px;
}
.logo svg path:nth-child(1){
  stroke: #e1e1e1;
}
.logo svg path:nth-child(2){
  stroke: #fff;
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

.about-head-text{
    display: flex;
    /* align-items: center; */
    font-weight: 700;
    font-size: 85px;
    /* line-height: 140px; */
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #F25F24;
    
}
.sec-heading{
    font-style: normal;
    font-weight: 700;
    font-size: 52px;
    line-height: 62px;
    display: flex;
    align-items: center;
    letter-spacing: 0.07em;
    text-transform: uppercase;
    color: #CE91FF;
}

.p-text{
    font-style: normal;
    font-weight: 600;
    font-size: 35px;
    line-height: 50px;
    display: flex;
    align-items: center;
    text-transform: capitalize;
    color: #777777;
}
.last-text{
    font-style: normal;
    font-weight: 700;
    font-size: 72px;
    line-height: 74px;
    letter-spacing: 0.01em;
    text-transform: capitalize;
    color: #8672ED;
    text-align: center;

}
.btn-end{
  background-color: #FFE76D;
  width: 200px;
  height: 52px; 
  text-align: center; 
  font-style: normal; 
  font-weight: 700;
  font-size: 18px; 
  line-height: 28px; 
  color: #333333; 
  border: none;
}
.btn-end:hover{
  
      background-color:#CE91FF;
      transition: 0.2s;
  
}
#sec-1{
  background: #FFED9A;
}
#sec-3{
  background: #F1EBE5;
}
.btn-smb{
  display: flex;
  font-style: normal;
  font-weight: 600;
  font-size: 40px;
  line-height: 50px;
  text-transform: capitalize;
  color: #F25F24;
  background: none;
  border: none;
}


@media only screen and (max-width: 642px){
  #sec-1{
    width: 642px;
  }
  #sec-2{
    width: 642px;
  }
  #sec-3{
    width: 642px;
  }



}



    </style>
</head>
<body>
  <section>
        
    <header class="main-header">
        
        <a href="/Home" style="margin-left: 100px;">ANANTKAAL</a>
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
            <li><a href="/Home" style="background-color: #F5D2D3; color: #000000; border: none;">BLOG</a></li>
            <li><a href="/mobcontact" style="background-color: #F25F24; color: #000000; border: none;">CONTACT US</a></li>
            <li><a href="/Home" style="background-color: #DDDDDD; color: #000000; border: none;">CAREERS</a></li>
          </ul>
        </nav>
      </header>
    
    </section>
        <section>
            <div class="container text-center">
                <p class="about-head-text" >We Build Solutions</p>
            </div>
            <div class="container ">
                <div class="row">
                    <div class="col-lg-6 ">
                   <h2 class="sec-heading">Vision</h2>
                   <p>Our Vision is To empower our customers<br>
                    to achieve their goals by providing<br>
                    reliable and quality solutions with<br>
                    technology and innovation 
                    </p>
                    </div>
                <div class="col-lg-6 ">
                    <h2 class="sec-heading ">Mission</h2>
                    <p>To help entrepreneurs and creative<br>
                        thinkers convert their ideas into reality<br>
                        through the power of emotional<br>
                        intelligence by providing world class<br>
                        facilities to our team.<br><br>
                        To deliver world-class products and<br>
                        services at competitive rates.
                         </p>
                </div>
           </div>
       </div>
            
        </section>
        <section id="sec-1">
            <div class="container">
              <div class="row ">
                <div class="col-lg-6 mt-5" style="font-style: normal;font-weight: 700;font-size: 56px;line-height: 64px;letter-spacing: 0.01em;text-transform: capitalize;color: #555555;">
                  <p>What Is Phase I</p>
                </div>
                <div class="col-lg-6">
                  <!-- <p>Join Our Journey</p> -->
                </div>
              </div>
              <div class="row ">
                <div class="col-lg-6 mt-5" style="font-family: 'Mulish';
                font-style: normal;
                font-weight: 700;
                font-size: 40px;
                line-height: 50px;
                text-transform: capitalize;
                
                color: #339D95;
                ">
                  <p>Phase 1 Means<br/>__________________<br/>__________________</p>
                </div>
                <div class="col-lg-6">
                  <!-- <p>Join Our Journey</p> -->
                </div>
              </div>
          
          
              <div class="row text-center">
                <div class="col-lg-6">
                  <!-- <p>Join Our Journey</p> -->
                </div>
                <div class="col-lg-6 mt-5"><button class="btn-smb" style="
                display: flex;
                font-style: normal;
                font-weight: 600;
                font-size: 40px;
                line-height: 50px;
                text-transform: capitalize;
                
              
                
                color: #F25F24;
                ">
                  Shoot A Message To Know Us Better
                  <svg xmlns="http://www.w3.org/2000/svg" width="400" height="130" viewBox="0 0 24 24"><path fill="currentColor" d="M14.58 16.59L19.17 12l-4.59-4.59L16 6l6 6l-6 6l-1.42-1.41m-6 0L13.17 12L8.58 7.41L10 6l6 6l-6 6l-1.42-1.41m-6 0L7.17 12L2.58 7.41L4 6l6 6l-6 6l-1.42-1.41Z"/></svg>
                  </button>
                </div>
              </div>
            </div>
          </section>
          <section style="background-color: #FFFFFF; "><br>
            <div class="container">
              <span class="mb-5 mt-5 h2" style="color: #1BB99D; 
              font-weight: 600; font-size: 36px; line-height: 64px;">Growing Ever Stronger</span>
              <div class="row ">
                <div class="col-lg-4 text-start p-5">
                  <span class="text-start"  style="color: #1BB99D; font-style: normal;
                  font-weight: 600; font-size: 36px; line-height: 0px;">15+</span> <br/>
                    <span style="color: #1BB99D; font-style: normal;
                    font-weight: 600; font-size: 20px; line-height: 28px;">Clients Served
                  </span>
          
                </div>
                <div class="col-lg-4 text-start p-5">
                  <span style="color: #1BB99D; font-style: normal;
                  font-weight: 600; font-size: 36px; line-height: 0px;">90%</span> <br/>
                   <span style="color: #1BB99D; font-style: normal;
                   font-weight: 600; font-size: 20px; line-height: 28px;"> Client Satisfaction
                  </span>
                </div>
                 <div class="col-lg-4 text-start p-5">
                  <span style="color: #1BB99D; font-style: normal;
                   font-weight: 600; font-size: 36px; line-height: 0px;">6 </span><br/>
                   <span style="color: #1BB99D;  font-style: normal;
                   font-weight: 600; font-size: 20px; line-height: 28px;"> Applications Built
                  </span>
                </div>
              </div>
              <div class="row ">
                <div class="col-lg-4 text-start p-5">
                  <span style="color: #1BB99D;  font-style: normal;
                  font-weight: 600; font-size: 36px; line-height: 0px;">21</span> <br/>
                    <span style="color: #1BB99D; font-style: normal;
                    font-weight: 600; font-size: 20px; line-height: 28px;">Team Members
                  </span>
          
                </div>
                <div class="col-lg-4 text-start p-5">
                  <span style="color: #1BB99D; font-style: normal;
                  font-weight: 600; font-size: 36px; line-height: 0px;">5 </span><br/>
                    <span style="color: #1BB99D; font-style: normal;
                    font-weight: 600; font-size: 20px; line-height: 28px;">Avg. months/project
                  </span>
                </div>
                 <div class="col-lg-4 text-start p-5">
                  <span style="color: #1BB99D;  font-style: normal;
                  font-weight: 600; font-size: 36px; line-height: 0px;">8</span> <br/>
                   <span style="color: #1BB99D; font-style: normal;
                   font-weight: 600; font-size: 20px; line-height: 28px;"> Industries Impacted
                  </span>
                </div>
              </div>
            </div>
          </section>
          <section id="sec-2">
            <div>
              <button style="border: none;"><img class="img-fluid" src="{{url('asset/img/ppc2.png')}}" ></button>
            </div>
          </section><br><br>
    
        <section>
            <div class="container" >
              <!-- <div class="col-lg-6 text-end"> -->
                <img class="img-fluid" src="{{url('asset/img/Values.png')}}" style="width: 100px;height: 520px";/>
              <!-- </div> -->
              <!-- <div class="col-lg-6"> -->
                <div class="text-set" style="    margin-left: 140px;
                margin-top: -520px;">
                <p class="p-text">Clear Communication </p>
                <p class="p-text">Transparency</p>
                <p class="p-text">Quality > Quantity </p>
                <p class="p-text">Collaboration</p>
                <p class="p-text">Accountability </p>
                <p class="p-text">Innovation</p>
                <p class="p-text">Efficiency</p>
                <p class="p-text">Integrity</p>
              </div>
              </div>
              </div>
          </section><br><br>
          <section id="sec-3">
            <div class="container text-center"><br>
              <div class="mt-5">
                <p class=""  style="color: #8672ED;
                font-style: normal;
                font-weight: 700;
                font-size: 56px;
                /* line-height: 74px; */
                letter-spacing: 0.01em;
                text-transform: capitalize;
                ">Let’s get to Work.</p>
              </div>
              <button class="btn-end">Start A Project</button>
            </div><br><br>
              
          </section>
          @include('Footer')

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