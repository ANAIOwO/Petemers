 <style>
   * {
     box-sizing: border-box;
   }
 </style>
 @extends('layouts.usernavbarlayout')

 <head>
   @section('head')
   <title>選擇服務</title>
   <link rel="shortcut icon" href="#" />
   <link rel="stylesheet" href="../css/service.css" type="text/css" />
   @Endsection
 </head>

 @section('content')

 <body>
   <div class="loader">
     <img src="../images/loader.gif" alt="Loading..." />
   </div>
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="../images/service1.jpg" class="d-block w-100">
       </div>
       <div class="carousel-item">
         <img src="../images/service2.jpg" class="d-block w-100">
       </div>
       <div class="carousel-item">
         <img src="../images/service3.jpg" class="d-block w-100">
       </div>
       <br>
       <br>
       <br>
       <br>
       <br>
       <div class="row">
         <div class="column">
           <!--into petappointment page -->
           <div class="cardbutton">
             <img src="images/appointmentbutton-comp3.jpg" alt="">
             <div class="info">
               <button type='button' class="butt" onclick="javascript: location.href='/appointment/create'">點擊掛號</button>
               <p>進入掛號表單</p>
             </div>
           </div>
         </div>

         <!--into Medical record page-->
         <div class="column">
           <div class="cardbutton">
             <img src="images/Medicalrecord-comp.jpg" alt="">
             <div class="info">
               <button type='button' class="butt" onclick="javascript: location.href='checkmedicalrecord'">查看病歷</button>
               <button type='button' class="butt" onclick="javascript: location.href='checkappointment'">看診預約</button>
               <p>進入寵物病歷</p>
             </div>
           </div>
         </div>
       </div>
       <div class="carousel-content">
        <h2>選擇您需要的服務</h2>
      </div>
     </div>
   </div>
   <strong>
     <h2>選擇您需要的服務</h2>
   </strong>
   <div class="row2">

     <!--into petappointment page -->
     <div class="cardbutton2">
       <img src="images/appointmentbutton-comp3.jpg" alt="">
       <div class="info">
         <input type='button' class="butt" class="butt" value='點擊掛號' onclick="javascript: location.href='/appointment/create'">
         <p>進入掛號表單</p>
       </div>
     </div>


     <!--into Medical record page-->

     <div class="cardbutton2">
       <img src="images/Medicalrecord-comp.jpg" alt="">
       <div class="info">
         <input type='button' class="butt" value='查看病歷' onclick="javascript: location.href='medicalrecord'">
         <input type='button' class="butt" value='看診預約' onclick="javascript: location.href='checkappointment'">
         <p>進入寵物病歷</p>
       </div>
     </div>

   </div>

   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
   </div>

   <script>
     window.addEventListener("load", function() {
       const loader = document.querySelector(".loader");
       loader.className += " hidden"; //class "loader hidden"
     });
   </script>
 </body>
 @Endsection