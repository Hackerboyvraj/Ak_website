<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="{{url('asset/img/Anantkaal.jpg')}}">
  <title>Our Work</title>
  <style>
    ul {
      list-style-type: none;
      list-style: none;
    }

    a {
      text-decoration: none;
    }

    .visually-hidden {
      position: absolute;
      height: 1px;
      width: 1px;
      white-space: nowrap;
      clip-path: inset(-50%);
      clip: rect(0 0 0 0);
      overflow: hidden;
    }

    .main-header {
      display: flex;
      width: 100%;
      align-items: center;
      justify-content: space-between;
      padding: 5px 15px;
      background-color: #FFFFFF;
      color: #fff;
      height: 64px;
    }

    .logo svg {
      height: 45px;
      width: 45px;
    }

    .logo svg path:nth-child(1) {
      stroke: #e1e1e1;
    }

    .logo svg path:nth-child(2) {
      stroke: #fff;
    }

    .menu-toggle-btn {
      background: transparent;
      border: 0;
      cursor: pointer;
    }

    .menu-toggle-btn path {
      stroke-width: 1px;
      transform-box: fill-box;
      transition: 250ms;
      transform-origin: center;
    }

    .menu-toggle-btn[aria-expanded="true"] path:nth-child(1) {
      opacity: 0;
      transform: rotate(45deg);
    }

    .menu-toggle-btn[aria-expanded="true"] path:nth-child(2) {
      transform: rotate(45deg);
    }

    .menu-toggle-btn[aria-expanded="true"] path:nth-child(3) {
      transform: translateY(-5px) rotate(-45deg);
    }

    .primary-navigation {
      position: absolute;
      top: 64px;
      color: #fff;

      right: 0px;
      width: 400px;
    }

    .primary-navigation a {
      position: relative;
      width: 100%;
      display: inline-block;
      padding: 10px 15px;
      color: #fff;
      border-bottom: 1px solid #111;
      transition: 250ms;
    }

    .primary-navigation a:hover,
    .primary-navigation a:focus {
      color: #ff6500;
      letter-spacing: 2px;
    }

    .primary-navigation a:hover:before,
    .primary-navigation a:focus:before {
      width: 100%;
    }

    .primary-navigation a:before {
      content: "";
      height: 1px;
      width: 0%;
      background-color: #ff6500;
      transition: 250ms;
      position: absolute;
      bottom: 0;
      left: 0;
    }

    .primary-navigation[data-state="opened"] {

      display: block;
      animation: navigationOpenAnimation 250ms ease-in-out forwards;
    }

    .primary-navigation[data-state="closing"] {
      animation: navigationCloseAnimation 250ms ease-in-out forwards;
    }

    .primary-navigation[data-state="closed"] {
      display: none;
    }

    @keyframes navigationOpenAnimation {
      0% {
        clip-path: circle(0% at top right);
      }

      100% {
        clip-path: circle(250% at top right);
      }
    }

    @keyframes navigationCloseAnimation {
      0% {
        clip-path: circle(250% at top right);
      }

      100% {
        clip-path: circle(0% at top right);
      }
    }

    @-webkit-keyframes navigationOpenAnimation {
      0% {
        clip-path: circle(0% at top right);
      }

      100% {
        clip-path: circle(250% at top right);
      }
    }

    @-webkit-keyframes navigationCloseAnimation {
      0% {
        clip-path: circle(250% at top right);
      }

      100% {
        clip-path: circle(0% at top right);
      }
    }

    @media only screen and (max-width: 991px) {

      .svg-1 {
        width: 160px;
        height: 160px;
      }

      .svg-2 {
        height: 160px;
        width: 160px;
        margin-left: 300px;
        margin-top: -190px;
      }

    }

    @media only screen and (max-width: 600px) {

      .svg-1 {
        width: 100px;
        height: 100px;
        margin-left: 70px;
      }

      .svg-2 {
        width: 100px;
        height: 100px;
        margin-left: 250px;
        margin-top: -133px;
      }

    }

    @media only screen and (max-width: 400px) {
      .svg-1 {
        width: 100px;
        height: 100px;
        margin-left: 70px;
      }

      .svg-2 {
        width: 100px;
        height: 100px;
        margin-left: 185px;
        margin-top: -133px;
      }

    }

    @media only screen and (max-width: 340px) {
      .svg-1 {
        width: 100px;
        height: 100px;
        margin-left: 26px;
      }

      .svg-2 {
        width: 100px;
        height: 100px;
        margin-left: 144px;
        margin-top: -131px;
      }

    }

    @media only screen and (max-width: 280px) {
      .svg-1 {
        width: 100px;
        height: 100px;
        margin-left: 2px;
      }

      .svg-2 {
        width: 100px;
        height: 100px;
        margin-left: 107px;
        margin-top: -131px;
      }

    }

    .Hot_Listing_row {
      display: flex;
      flex-wrap: wrap;
      margin: -4px;
    }

    .Hot_Listing_row>div {
      margin-top: 40px;
      padding: 21px;
      width: 33.33%;
    }

    .Hot_Listing_main_block .number_list_arrow {
      padding: 30px 0 50px 0;
    }

    .hot_listing_page .web_btn a {
      padding: 8px 5px;
      border-radius: 4px;
      font-size: 11px;
    }

  </style>
</head>

<body>
  <div>
    <section>

      <header class="main-header">

        <a href="/Home" style="margin-left: 100px;">ANANTKAAL</a>
        <nav>
          <button class="menu-toggle-btn" aria-targe="primary-navigation" aria-expanded="false" aria-controls="primary-navigation">
            <span class="visually-hidden">Menu</span>
            <svg aria-hidden="true" height="35" width="35" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
              <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3H2" />
              <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 8H2" />
              <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 13H2" />
            </svg>
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
  </div>
  <section style="background-color: #FFED9A; margin-top: 270px;">
    <div class="container text-center ">
      <div class="pt-4 ">
        <p class="fw-bold fs-1 text-uppercase">Building The Future</p>
      </div>
      <div class="pb-4">
        <p class="fw-bold fs-5 text-uppercase">Our Portfolio of Success</p>
      </div>
    </div>
  </section>



  <section>

    <div class="container mt-5" >
    <div class="row" >
     <div class="col-lg-4" style="display: contents;">
    

        @if($extraData['type'] == "Software")
          <img style="height: 200px;" src="{{url('asset/img/select-software.svg')}}">
          <img style="cursor: pointer; height: 200px;" onclick="showHardware()" src="{{url('asset/img/unselect-hardware.svg')}}">
          <br>
        @else
          <img style="cursor: pointer; height: 200px;" onclick="showSoftware()" src="{{url('asset/img/unselect-software.svg')}}">
          <img style="height: 200px;"  src="{{url('asset/img/select-hardware.svg')}}">
        @endif
     </div>  
      
          
        <!--   <div  class="select-software" onclick="showSoftware()">
          <img src="{{url('asset/img/select-software.svg')}}">
          </div>

          <div class="select-software" onclick="showSoftware()">
          <img src="{{url('asset/img/unselect-hardware.svg')}}">
        </div><br> -->
      

               
       
        <div class="col-lg-6">
          <div class="input-group ">
            <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="basic-addon1" fdprocessedid="d7ie8">
            <span class="input-group-text" id="basic-addon1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
              </svg>
            </span>
          
          </div><br><br>
        
          <div>
            <select style="width: 100%; height: 40px;">
              <option>category 1</option>
              <option>category 2</option>
            </select>
          </div><br><br>
         
            
            <select style="width: 100%; height: 40px;">
              <option>category 1</option>
              <option>category 2</option>
            </select>
            </div>
            </div>
          </div>
      


      <div class="container">
      <div class="Hot_Listing_row">
        @foreach($ourWork as $work)
        <div class="col-lg-4">
          <div class="card">
            <img src="{{$work['image']}}" class="card-img-top" alt="DiamondImg">
            <div class="card-body">
              <h5 class="card-title">{{$work['title']}}</h5>
              <p class="card-text">{{$work['subtitle']}}</p>
            </div>
            <ul>
              <li>Hardware</li>
              <li>Diamond Industry</li>
              <li>Surat</li>
            </ul>
          </div>
        </div>
        @endforeach
      </div>









  </section>

  <section class="mt-5" style="background-color: #CE91FF;">
    <div class="container  text-center p-5">
      <svg xmlns="http://www.w3.org/2000/svg" width="9em" height="9em" viewBox="0 0 24 24">
        <path fill="yellow" d="M14.58 16.59L19.17 12l-4.59-4.59L16 6l6 6l-6 6l-1.42-1.41m-6 0L13.17 12L8.58 7.41L10 6l6 6l-6 6l-1.42-1.41m-6 0L7.17 12L2.58 7.41L4 6l6 6l-6 6l-1.42-1.41Z" />
      </svg>
      <span class="fs-1 fw-bold" style="color: aliceblue;">Big Idea? Tell Us !</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="9em" height="9em" viewBox="0 0 24 24">
        <path fill="currentColor" d="M14.58 16.59L19.17 12l-4.59-4.59L16 6l6 6l-6 6l-1.42-1.41m-6 0L13.17 12L8.58 7.41L10 6l6 6l-6 6l-1.42-1.41m-6 0L7.17 12L2.58 7.41L4 6l6 6l-6 6l-1.42-1.41Z" />
      </svg>
    </div>
  </div>




  </section>
  @include('Footer')


  <script>
    const menuToggleBtn = document.querySelector(".menu-toggle-btn");
    const primaryNav = document.querySelector(".primary-navigation");

    function testFun() {
      alert("Hardware")
    }

    menuToggleBtn.addEventListener('click', () => {
      let isNavOpen = menuToggleBtn.getAttribute('aria-expanded') === 'true';
      isNavOpen ? primaryMenuClose() : primaryMenuOpen();
    })

    function primaryMenuOpen() {
      menuToggleBtn.setAttribute('aria-expanded', 'true');
      primaryNav.setAttribute('data-state', 'opened');
    }

    function primaryMenuClose() {
      menuToggleBtn.setAttribute('aria-expanded', 'false');
      primaryNav.setAttribute('data-state', 'closing');
      primaryNav.addEventListener('animationend', () => {
        primaryNav.setAttribute('data-state', 'closed');
      }, {
        once: true
      })
    }


    function showSoftware(){
      window.location.href = "/OurWork?type=Software";
    }

    function showHardware(){
       window.location.href = "/OurWork?type=Hardware";
    }
  </script>



</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



<script>


</script>

</html>