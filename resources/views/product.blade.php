<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <link rel="icon" type="image/x-icon" href="{{url('asset/img/Anantkaal.jpg')}}">
    <title>Product</title>
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
    /* nevbar end */

.img-set{
  width: 500px;
  height: 400px;
}   
.container{
  width: 900px;
} 

#sec-1{
  background-image:url('asset/img/product_bg.png'); 
  height: 400px; 
  background-repeat: no-repeat; 
  width: 100%;
}
@media only screen and (max-width: 700px){
   .img-set{
    height: 200px;
    width: 270px;

  
    
   }
   .container{
    width: 450px;
   }
  }

  @media only screen and (max-width: 450px){
   
  
   .container{
    width: 300px;
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
              <li><a href="/contact" style="background-color: #F25F24; color: #000000; border: none;">CONTACT US</a></li>
              <li><a href="/Home" style="background-color: #DDDDDD; color: #000000; border: none;">CAREERS</a></li>
            </ul>
          </nav>
        </header>
      
      </section>
    <section id="sec-1">
       <h1 class="text-center" style="color: #FFFFFF; font-weight: 700; padding-top: 90px;">DIAMOND POLISHING MACHINE</h1>
       <h3 class="text-center" style="color: #FFFFFF; font-weight: 700; padding-top: 30px;">BUILT FOR BRILLIANCE</h3>
    </section>
       
    </div>   
    </div>
    </div>
   </section>
   <section >
      <div class="container P-5">
      <h2>About</h2>
       
        As the diamond industry continues to evolve, the need for automation is increasingly apparent. One such technology that has proven to be<br> 
        a game-changer in the field of diamond polishing is the fully automatic diamond polishing machine, made by yours truly. </p>
   
        <h2>Challenges</h2>
    
    <p>Manual diamond polishing has many such as:</p>
    <p>1. Lack of precision and consistency</p>
    <p>2. Lower quality product and a lower price for the diamond</p>
    <p>3. High cost of labordifficult to scale up production</p>
    <p>4. Risk of injury to the workers</p><br><br>
    <p>Overall,manual diamond polishing is a slow, labor-inensive and costly process that can lead to lower quality diamonds, higher production<br>
    costs, and safety and enviromental concerns</p>
    </div>     
   </section>
   <section style="background: #333333; height: 264px;">
    <div class="container">
    <h2 style="color: #FFFFFF; padding-top: 50px;">Our Impact</h2>
    <p  style="color: #FFFFFF; padding-top: 20px;">Increased client production capablities<span style="color: #FFFFFF; font-size: x-large;"> 2X</span></p>
    <p  style="color: #FFFFFF;">Lowering production cost by<span style="color: #FFFFFF; font-size: x-large;"> 21%</span></p>
  </div>
   </section><br>
   <section>
    <div class="container">
    <h2>Our Solution</h2>
   <p>This State-of-the-art machine is capable of polishing full pavilion factes and 16/8 crown diamonds with unparalleled symmerty.its<br>
     advanced technology and precision engineering allow for a level of accuracy and consistency that was previously unattainable through<br> 
     manual methods.
    </p>
  </div>
    <div class="container" >
      <img class="img-set"  src="{{url('asset/img/i4.png')}}">
      <img class="img-set mt-5"   src="{{url('asset/img/i4.png')}}">
    </div>
    
    <div class="container">
    <p>One of the key benefits of the fully automatic diamond polishing machine is its ability to significantly increase production capabilities. With<br>
      its advanced capabilities, clients are able to produce up to twice as many diamonds as they could with traditional methods. This increased<br>
      production can lead to significant cost savings and increased revenue for the client.<br><br>

      In addition to increasing production capabilities, the fully automatic diamond polishing machine also has the potential to significantly lower<br>
      production costs. By reducing the need for manual labor and increasing the efficiency of the polishing process, the machine can lower<br>
      costs by as much as 21%. This makes it an extremely cost-effective solution for diamond polishing.<br><br>
      The fully automatic diamond polishing machine is also highly robust and reliable. Its advanced technology and precision engineering<br>
      ensure that it is able to withstand the rigors of daily use in a diamond polishing facility.<br><br>
      This technology is the future of diamond polishing and it is an efficient and cost-effective solution to the diamond polishing industry.</p>
    </div>
    
    <div class="container">
        <img class="img-set"  src="{{url('asset/img/i4.png')}}">
    </div>
  </section>   <br><br> 
    
    
    
    <div class="container">
    <div class="row">
    <div class="col-lg-6">  
    <div class="settext" style="padding-top: 130px;">  
    <h2>The Best Part</h2>
     As the diamond industry continues to evolve, the need for<br>
     automation is increasingly apparent. One such technology<br>
     that has proven to be a game-changer in the field of<br>
     diamond polishing is the fully automatic diamond polishing<br>
     machine, made by yours truly.
    </div> 
    </p>
   </div>
   <div class="col-lg-6">
  <img class="img-set" src="{{url('asset/img/i4.png')}}" alt="placeholder" >
  </div>
  </div>
  </div><br><br><br>
    
  
  <section>
    <div class="container">
    <h1>Our Clients Loved It !</h1><br>
    <div class="row">
    <div class="col-lg-6">  
     <p style="font-size: x-large;">Splendid Work ! </p>
     <p>
      We were struggling to keep up with demand for<br>
      our diamonds due to the limitations of our old<br>
      polishing equipment. Anantkaal built us a<br>
      custom diamond polishing machine that has not<br>
      only increased our production capabilities but<br>
      also lowered our production costs. The machine<br>
      is easy to operate, reliable and robust, the level<br>
      of precision and consistency it provides is<br>
      outstanding. We highly recommend Anantkaal<br>
      to anyone looking for a diamond polishing<br>
      machine that can take their business to the next<br>
      level."
     </p>
     <p style="font-size: x-large; ">Client Name</p>
     <p>Designation, Company</p>
    </div>
    <div class="col-lg-6">  
    <p style="font-size: x-large;">Splendid Work ! </p>
    <p>
      We were struggling to keep up with demand for<br>
      our diamonds due to the limitations of our old<br>
      polishing equipment. Anantkaal built us a<br>
      custom diamond polishing machine that has not<br>
      only increased our production capabilities but<br>
      also lowered our production costs. The machine<br>
      is easy to operate, reliable and robust, the level<br>
      of precision and consistency it provides is<br>
      outstanding. We highly recommend Anantkaal<br>
      to anyone looking for a diamond polishing<br>
      machine that can take their business to the next<br>
      level."
    </p>
    <p style="font-size: x-large;">Client Name</p>
     <p>Designation, Company</p>
    </div>
    </div>
  </section>
  <section>
    <button style="border: none;"><img src="{{url('asset/img/ppc.png')}}" style="height: 320; width: 100%;"></button>
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