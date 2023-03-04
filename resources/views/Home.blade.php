<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="{{url('asset/img/Anantkaal.jpg')}}">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body{
            font-family: Mulish;
        }
        #BuildDiv1{
        left: 0px;
        top: 57px;
        font-style: normal;
        font-weight: 900;
        font-size: 90px;
        line-height: 100px;
/* or 117% */

/* display: flex; */
        align-items: center;
        letter-spacing: 0.1em;
        text-transform: uppercase;

/* White */

        color: #FFFFFF;
        }
        #BuildDiv2{
            left: 810px;
            top: 470px;

/* Headline XL */

/* font-family: 'Mulish'; */
        font-style: normal;
        font-weight: 700;
        font-size: 72px;
        line-height: 74px;
/* or 103% */

/* display: flex; */
        align-items: center;
        text-align: right;
        letter-spacing: 0.07em;
        text-transform: uppercase;

        color: #FFE76D;

}
#BuildDiv3{
  /* position: absolute; */
/* width: 793px; */
/* height: 74px; */
left: 0px;
top: 764px;

/* Headline XL */

/* font-family: 'Mulish'; */
font-style: normal;
font-weight: 700;
font-size: 62px;
line-height: 74px;
/* identical to box height, or 103% */

display: flex;
align-items: center;
letter-spacing: 0.07em;
text-transform: uppercase;

/* White */

color: #FFFFFF;

text-shadow: 4px 4px 0px #907DD5;
}
.btn-1{
    display: flex;
    border: none;
    background: none;
    color: #FFFFFF;
}
.btn-1:hover{
    color: #FFE76D;
    transition: 0.2s;
}
.svg-3:hover{
    fill: #FFE76D;
    transition: 0.2s; 
}

    /* navbar start */
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
  margin-top: 1020px;
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
    /* navbar end  */
.btn-2{
    border: none;
    
}    
    /* Image Slider  start*/

    .Its {
	padding: 2rem 0;
 }
 
 
 
 .It_slider {
	margin: 20px 0;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	font-size: 16px;
	font-weight: bold;
 }
 
 a {
   cursor: pointer;
 }
 
 a:hover {
   font-size: 18px;
   color: #F25F24;
   border-bottom: solid 2px #F25F24;
 }
 
 .It {
   margin: 20px 0;
   display: grid;
   grid-template: repeat(1, 100px)/repeat(8, 1fr);
   gap: 1px;
   justify-content: space-between;
 }
 
 .Itimg {
   height: 90px;
   width: 90px;
   display: flex;
 }
 
 .active {
   font-size: 18px;
   color: #F25F24;
   border-bottom: solid 2px #F25F24;
 }


     /* Image Slider End */
     .p-text{
    font-style: normal;
    font-weight: 500;
    font-size: 19px;
    line-height: 50px;
    display: flex;
    align-items: start;
    text-transform: capitalize;
    color: #777777;
}  
.btn-end{
    background-color: #FFE76D;
    border: none;
    width: 250px;
    height: 52px;
    font-size:20px;
    font-weight: 700;
    align-items: center;
    color: #333333;
}

.btn-end:hover{
    background-color:#CE91FF;
    transition: 0.7s;
}
.btn-2{
    background-color: #B1FFC5;
    color: #555555;
    width: 420px;
    height: 100px;
   display: flex;
   align-items: center;

}


#btn-txt-1{
    font-size: 40px;
    text-align: center;
    font-weight: 700;
    padding-top: 20px;
    color: #555555;
}
.svg-1:hover{
    fill: #B1FFC5;
    transition: 0.2s;
}
#btn-txt-1:hover{
    color: #FFFFFF;
    transition: 0.2s;
}

.btn-2:hover{
    background-color: #CE91FF;
    transition: 0.2s; 
}
.btn-int{
    border: none; 
    background: none;
    align-items: center;
}
.btn-int:hover{
    color: #F25F24;
    transition: 0.2s;
}
.svg-2:hover{
    fill: #F25F24;
    transition: 0.2s;
}
.btn-tribe{
    border: none;
    align-items: center;
    display: flex;
    background: none;
    font-size: 30px;
    font-weight: 700;
    text-transform: capitalize;
    color: #F25F24;
    padding-left: 530px;

}
.btn-tribe:hover{
    color: #249CFF;
    transition: 0.2s;
}
.svg-4:hover{
    fill: #249CFF;
    transition: 0.2s;
}

.container{
  width:900px;
}

#Head-main-txt{
  font-size: 136px; 
  font-weight: 900;
}

#img-map{
  margin-top: -150px;
}

#mission-txt{
  color: #339D95; margin-top: -220px;
}

#why-txt{
  width: 569px;
  height: 449px;
  font-style: 
  normal; 
  font-weight: 700;
  font-size: 114px;
  line-height: 140px;
  display: flex; 
  align-items: flex-start; 
  letter-spacing: 0.1em;
  text-transform: uppercase; 
  color: #CE91FF; 
  transform: rotate(-90deg);
}

#sec-1{
  background: linear-gradient(197.87deg, #7B9FF2 0.43%, #A688E2 75.43%);
}

#sec-2{
  background: #B1FFC5;
}


#sec-3{
  background: #F5D2D3;
}

#sec-4{
  background: #F1EBE5;
}
.btn-3{
  border: none;
}

@media only screen and (max-width: 991px){
     
  #Head-main-txt{
    font-size: 70px;
  }
  #img-map{
    margin-top: -132px;
  }
  #mission-txt{
    margin-top: -157px;
  }
  .btn-tribe{
    font-size: 16px;
  }
  .btn-1{
    font-size: 48px;
  }
  #per-txt{
    margin-left: 190px;
    margin-top: -533px;
    width: 38%;
  }
  .p-text{
    font-size: 19px;
  }

}





@media only screen and (max-width: 850px){
  #Head-main-txt{
    font-size: 70px;
  }
  .btn-1{
    font-size: 55px;
  }
  #img-map{
    margin-top: -116px;
  }
  #mission-txt{
    margin-top: -181px;
  }
  .btn-tribe{
    padding-left: 480px;
    font-size: 15px;
  }
}
@media only screen and (max-width: 797px){
  #per-txt{
    margin-top: -370px;
    margin-left: 61px;
    width: 38%;
  }
  #why-txt{
    margin-top: -180px;
    font-size: 70px;
    height: 519px;
    width: 438px;
  }
  .p-text{
    font-size: 19px;
    line-height: 25px;
  }
}

@media only screen and (max-width: 767px){
  .btn-tribe{
    padding-left: 360px;
  }
  #mission-txt{
    margin-top: -123px;
  }
  #img-map{
    margin-top: -105px;
  }
  .container{
   max-width: none;
   width: 505px;
  }
  .It{
    grid-template: repeat(1, 100px)/repeat(4, 1fr);
  }
  .btn-1{
    font-size: 41px;
  }
  .svg-3{
    width: 123px;
    height: 43px;
  }
}
@media only screen and (max-width: 613px){
  .btn-tribe{
    padding-left: 261px;

  }
  .svg-4{
    height: 400px;
    width: 91px;
  }
}

@media only screen and (max-width: 503px){
    .btn-tribe{
      padding-left: 189px;
    }
    #img-map {
    margin-top: -84px;
    }
    #mission-txt {
    margin-top: -108px;
   }
   .container{
    width: 456px;
   }    
   .btn-1{
    font-size: 26px;
   }
   .container{
    width: 456px;
   }
   #sec-1{
    width: 503px;
   }
   #sec-2{
    width: 503px;
   }
   #sec-3{
    width: 503px;
   }
   #sec-4{
    width: 503px;
   }
   #sec-5{
    width: 503px;
   }
   .btn-2{
    width: 220px;
    height: 70px;
   }
   .svg-1{
    width: 53px;
    height: 23px;
   }
   #Head-main-txt{
    font-size: 40px;
   }
   #btn-txt-1{
    font-size: 20px;
   }
}

    </style>
</head>
<body>
    <section id="sec-1">

       <div class="container">
        <div class="" id="BuildDiv1">
        <p class="fon" style="color: #FFFFFF; font-weight:800;">WE</p>
        <p style="color: #FFFFFF; font-weight:800;">BUILD</p>
        <p style="color: #FFE76D; font-weight:800;">BETTER</p>
       </div>
        <div class="" id="BuildDiv2">
            <p style="color: #FFE76D; font-weight:700;">AGILE</p>
            <p style="color: #B1FFC5; font-weight:700;">DYNAMIC</p>
            <p style="color: #F1EBE5; font-weight:700;">EFFICIENT</p>
            <!-- <img class="img-fluid" src="Vector 2 (1).jpg"/> -->
          </div>
          <div id="BuildDiv3">
            <button class="btn-1" onclick="window.location.href ='product';"><p>JOIN THE NETWORK</p>
            <span>
            <svg class="svg-3"  width="143" height="63" viewBox="0 0 143 83" fill="none" xmlns="http://www.w3.org/2000/svg">
<g filter="url(#filter0_d_658_12959)">
<path d="M95.3249 1L85.8271 10.4865L116.678 41.3682L85.8271 72.2498L95.3249 81.7364L135.741 41.3682L95.3249 1Z" fill="white" class="svg-3"/>
</g>
<g filter="url(#filter1_d_658_12959)">
<path d="M57.4113 1L47.9136 10.4865L78.7643 41.3682L47.9136 72.2498L57.4113 81.7364L97.827 41.3682L57.4113 1Z" fill="white" class="svg-3"/>
</g>
<g filter="url(#filter2_d_658_12959)">
<path d="M19.4977 1L10 10.4865L40.8507 41.3682L10 72.2498L19.4977 81.7364L59.9135 41.3682L19.4977 1Z" fill="white" class="svg-3"/>
</g>
<defs>
<filter id="filter0_d_658_12959" x="85.8271" y="1" width="56.9136" height="81.7363" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="7" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.564706 0 0 0 0 0.490196 0 0 0 0 0.835294 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_658_12959"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_658_12959" result="shape"/>
</filter>
<filter id="filter1_d_658_12959" x="47.9136" y="1" width="56.9136" height="81.7363" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="7" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.564706 0 0 0 0 0.490196 0 0 0 0 0.835294 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_658_12959"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_658_12959" result="shape"/>
</filter>
<filter id="filter2_d_658_12959" x="10" y="1" width="56.9136" height="81.7363" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="7" dy="1"/>
<feComposite in2="hardAlpha" operator="out"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.564706 0 0 0 0 0.490196 0 0 0 0 0.835294 0 0 0 1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_658_12959"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_658_12959" result="shape"/>
</filter>
</defs>
</svg>
            </span> 
            </button>
          </div>  

       </div>

    </section>
    <section>
        <div class="container">
      <div id="Head-main-txt" class="h1 text-center mt-5 mb-5">ANANTKAAL</div>
        </div>
      </section>

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
      <section>
        <div class="container">
         <div>
           <h4 class="h1" style="color:#CE91FF;">Have An Idea?</h4>
           <p class="h6"> We build products from scratch</p>
           <h4 class="h1" style="color:#FFA342;">Have some Idea?</h4>
           <p class="h6"> We will make it “work”</p>
           <h4 class="h1" style="color:#55CBCD;">Stuck Midway?</h4>
           <p class="h6">
             We have extra hands and
             expertiset<br/> get your project
             to the finish line
            </p>
            <button class="btn-2 mt-3" onclick="window.location.href ='contact';"><svg class="svg-1" width="109" height="53" style="margin-top: 10px;" viewBox="0 0 139 83" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M95.3249 1L85.8271 10.4865L116.678 41.3682L85.8271 72.2498L95.3249 81.7364L135.741 41.3682L95.3249 1Z" fill="#CE91FF" class="svg-1"/>
<path d="M57.4113 1L47.9136 10.4865L78.7643 41.3682L47.9136 72.2498L57.4113 81.7364L97.827 41.3682L57.4113 1Z" fill="#CE91FF" class="svg-1"/>
<path d="M19.4977 1L10 10.4865L40.8507 41.3682L10 72.2498L19.4977 81.7364L59.9135 41.3682L19.4977 1Z" fill="#CE91FF" class="svg-1"/>
</svg>
<p id="btn-txt-1">Let's Talk !</p> <span ><svg class="svg-1" width="109" height="53" style="margin-top: 10px; margin-right: -50px;" viewBox="0 0 139 83" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M95.3249 1L85.8271 10.4865L116.678 41.3682L85.8271 72.2498L95.3249 81.7364L135.741 41.3682L95.3249 1Z" fill="#CE91FF" class="svg-1"/>
<path d="M57.4113 1L47.9136 10.4865L78.7643 41.3682L47.9136 72.2498L57.4113 81.7364L97.827 41.3682L57.4113 1Z" fill="#CE91FF" class="svg-1"/>
<path d="M19.4977 1L10 10.4865L40.8507 41.3682L10 72.2498L19.4977 81.7364L59.9135 41.3682L19.4977 1Z" fill="#CE91FF" class="svg-1"/>
</svg></span></button>
          </div>
        </div>
      </section><br><br>
      <section>
        <div class="container">
         <p class="h4">We’ve solved problems across industries</p><br>
         <div>
            <div class="row">
                <div class="col-lg-4">
                    <p>Diamond</p>
                    <p>B2B Softwares</p>
                    <p>Biotech</p>
                </div>
                <div class="col-lg-4">
                    <p>Consumer Tech</p>
                    <p>Agriculture</p>
                    <p>Security</p>
                </div>
                <div class="col-lg-4 text-center ">
                    
                </div>
            </div>
            
         </div>
        </div>
      </section>
      <section id="sec-5">
        <button class="btn-3" onclick="window.location.href ='OurWork';"><img class="img-fluid" src="{{url('asset/img/HoProduct.png')}}"></button>
      </section>
      <section><br><br>
        <div class="container">
            <p class="h1" style="font-weight: 700;">Our Tech Stack</p><br>
            <p class="h4">We’re Integrated Solution Providers<br>for all your product development needs</p>
        </div>

        <section class="Its">
            <div class="container">
      
             
      
              <!-- Slider -->
              <div class="It_slider">
                  <a class="link">Software</a>
                  <a class="link">Hardware</a>
                  <a class="link">Product</a>
                  <a class="link">Management Software</a>
              </div>
              
              
      <!--           Software -->
                <div class="It">
                  <img class="Itimg" src="{{url('asset/img/Android Studio.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Flutter.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Php.png')}}">
                  <img class="Itimg" src="{{url('asset/img/Laravel.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/API.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Paython.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/HTML.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Css.png')}}" > 
                  <img class="Itimg" src="{{url('asset/img/mongodb.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Mysql.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Aws.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Js.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Firebase.png')}}" >
                
                </div>
      <!--           Hardware -->
                 <div class="It">
                  <img class="Itimg" src="{{url('asset/img/Altium.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Eagle.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Stmcube.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Arduino.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Rasp-berrypi.png')}}">
                  <img class="Itimg" src="{{url('asset/img/Plc.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Aws-iot.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Azure.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Picseries.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Easyeda.png')}}" >
                  
                </div>
      <!--           Product -->
                 <div class="It">
                  <img class="Itimg" src="{{url('asset/img/AutoCad.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Eagle (2).png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Figma.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Adobe.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Fusion.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Plc (2).png')}}" > 
                 </div>
                
      <!--          Management Software  -->
                 <div class="It">
                  <img class="Itimg" src="{{url('asset/img/Github.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Gitlab.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Slack.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Jira.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Microsoft.png')}}">
                  <img class="Itimg" src="{{url('asset/img/Asana.png')}}" >
                  <img class="Itimg" src="{{url('asset/img/Trello.png')}}">
                </div>
               
           
               <div>
                <button class="btn-int">
                <span class="h3">Schedule Developer Interview</span>
                <span>
                <svg  width="51" height="26" viewBox="0 0 51 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M34.0527 0L30.2622 3.74776L42.5745 15.9479L30.2622 28.1481L34.0527 31.8958L50.1823 15.9479L34.0527 0Z" fill="#777777" class="svg-2" />
<path d="M3.79047 0L0 3.74776L12.3123 15.9479L0 28.1481L3.79047 31.8958L19.9201 15.9479L3.79047 0Z" fill="#777777" class="svg-2"/>
<path d="M18.9213 0L15.1309 3.74776L27.4432 15.9479L15.1309 28.1481L18.9213 31.8958L35.051 15.9479L18.9213 0Z" fill="#777777" class="svg-2"/>
</svg>
                </span>
                </button>
              </div>
              </div>
      </section>
      </section>
      <section id="sec-2">
        <div class="container">
            <span class="mt-5 h2" style="color: #555555; 
            font-weight:700; font-size: 46px; line-height: 104px;">Growing Ever Stronger</span>
            <div class="row ">
              <div class="col-lg-4 text-start p-5 ">
                <span class="text-start"  style="color: #555555; font-style: normal;
                font-weight: 600; font-size: 36px; line-height: 1px;">15+</span> <br/>
                  <span style="color: #555555; font-style: normal;
                  font-weight: 600; font-size: 20px; line-height: 28px;">Clients Served
                </span>
        
              </div>
              <div class="col-lg-4 text-start p-5">
                <span style="color: #555555; font-style: normal;
                font-weight: 600; font-size: 36px; line-height: 1px;">90%</span> <br/>
                 <span style="color: #555555; font-style: normal;
                 font-weight: 600; font-size: 20px; line-height: 28px;"> Client Satisfaction
                </span>
              </div>
               <div class="col-lg-4 text-start p-5">
                <span style="color: #555555; font-style: normal;
                 font-weight: 600; font-size: 36px; line-height: 1px;">6 </span><br/>
                 <span style="color: #555555;  font-style: normal;
                 font-weight: 600; font-size: 20px; line-height: 28px;"> Applications Built
                </span>
              </div>
            </div>
            <div class="row ">
              <div class="col-lg-4 text-start p-5">
                <span style="color: #555555;  font-style: normal;
                font-weight: 600; font-size: 36px; line-height: 1px;">21</span> <br/>
                  <span style="color: #555555; font-style: normal;
                  font-weight: 600; font-size: 20px; line-height: 28px;">Team Members
                </span>
        
              </div>
              <div class="col-lg-4 text-start p-5">
                <span style="color: #555555; font-style: normal;
                font-weight: 600; font-size: 36px; line-height: 1px;">5 </span><br/>
                  <span style="color: #555555; font-style: normal;
                  font-weight: 600; font-size: 20px; line-height: 28px;">Avg. months/project
                </span>
              </div>
               <div class="col-lg-4 text-start p-5">
                <span style="color: #555555;  font-style: normal;
                font-weight: 600; font-size: 36px; line-height: 1px;">8</span> <br/>
                 <span style="color: #555555; font-style: normal;
                 font-weight: 600; font-size: 20px; line-height: 28px;"> Industries Impacted
                </span>
              </div>
            </div>
          </div>
      </section><br><br>
      <section>
        <div class="container">
        <div class="row">
         <div class="col-lg-2 text-end" >   
        <h1 id="why-txt" >Why Us</h1>
        </div>
        
        <div id="per-txt" class="col-lg-4 text-start">
            <p class="p-text">Trusted by Clients</p>
            <p class="p-text">Crystal Clear Communication</p>
            <p class="p-text">Transparent Workflow</p>
            <p class="p-text">Quality over Quantity</p>
            <p class="p-text">Experienced Team</p>
            <p class="p-text">Dedicated Project Manager</p>
            <p class="p-text">Post Project Support</p>
            <p class="p-text">Minimal Development Costs</p>
        </div>
        </div>
    </div><br>
      </section><br>
      <section id="sec-3">
        <div class="container">
            <h1 style="color: #6477F4; top: 148px; padding-top: 90px;">Join Our Journey</h1>
         <img id="img-map" class="img-fluid"  src="{{url('asset/img/map.png')}}">
        <h3 id="mission-txt" >We’re on a mission to<br>
            ____________________<br>____________________</h3>
        <button class="btn-tribe" onclick="window.location.href ='about';">We’re building<br>our own tribe!<span><svg class="svg-4" width="126" height="71" viewBox="0 0 126 81" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M85.3249 0L75.8271 9.48652L106.678 40.3682L75.8271 71.2498L85.3249 80.7364L125.741 40.3682L85.3249 0Z" fill="#F25F24" class="svg-4"/>
<path d="M9.49771 0L0 9.48652L30.8507 40.3682L0 71.2498L9.49771 80.7364L49.9135 40.3682L9.49771 0Z" fill="#F25F24" class="svg-4"/>
<path d="M47.4113 0L37.9136 9.48652L68.7643 40.3682L37.9136 71.2498L47.4113 80.7364L87.827 40.3682L47.4113 0Z" fill="#F25F24" class="svg-4"/>
</svg></span></button>
        </div><br><br>
      </section>

      <section class="mt-5">
        <div class="container">
          <header class="h1">Our Clients loved It !</header>
          <div class="row">
            <div class="col-lg-6">
              <header class="h4">Splendid Work ! </header>
              <div>
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
                level.
              </div>
              <header class="h4 mt-2 mb-1">Clients Name</header>
              <p>Designation, Company </p>
            </div>
            <div class="col-lg-6">
              <header class="h4">Splendid Work !</header>
              <div>
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
                level.
              </div>
              <header class="h4 mt-2 mb-1">Clients Name</header>
              <p>Designation, Company </p>
            </div>
      
          </div>
        </div>
      </section>
      <section id="sec-4">
        <div class="container text-center">
          <div class="mt-5"><br><br>
            <p class=""  style="color: #8672ED;
            font-style: normal;
            font-weight: 700;
            font-size: 62px;
            /* line-height: 74px; */
            letter-spacing: 0.01em;
            text-transform: capitalize;
            ">Let’s get to Work.</p>
          </div>
          <button type="button" class="btn-end" onclick="window.location.href ='mobcontact';">Start A Project</button><br><br><br>
        </div>
          
      </section>
      <!-- @include('Footer')   -->



      <script>
        const content = document.querySelectorAll('.It');
        const tab = document.querySelectorAll('.link');
        const slider = document.querySelector('.It_slider');
        
        function hideTabContent() {
        content.forEach(item => {
        item.style.display = 'none';
        });
        tab.forEach(item => {
        item.classList.remove('active');
        });
        }
        
        function showTabContent(i = 0) {
        content[i].style.display = 'grid';
        tab[i].classList.add('active');
        }
        
        
        hideTabContent();
        showTabContent();
        
        slider.addEventListener("click", (e) => {
        const target = e.target
        if (target) {
        tab.forEach((item, i) => {
              if (target == item) {
                  hideTabContent();
                  showTabContent(i);
              }
          })
        }
        })
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
