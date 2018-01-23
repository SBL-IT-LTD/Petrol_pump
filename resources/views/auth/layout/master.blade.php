<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pettropump| Authentication</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/authAsset/style.css')}}" rel="stylesheet">

   <link rel="icon"   href="{{asset('assets/img/logo2.PNG')}}" />
  

    <!-- Scripts -->

<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style> 

.loading-main{position:fixed;width:100%;bottom:0;top:0;left:0;right:0;z-index:9999;    background: #191919;display:flex;justify-content:center;align-items:center}

@keyframes mask{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}.spin{display:inline-block;position:relative;font-size:100px;width:1em;height:1em;border-radius:50%;background:#123456;box-shadow:inset 0 0 0 .12em rgba(0,0,0,0.2),0 0 0 .12em rgba(255,255,255,0.1);background:-webkit-linear-gradient(#D8C018 50%,#2ACED6 50%),linear-gradient(#D61419 50%,#1C5A07 50%);background:-webkit-linear-gradient(#D8C018 50%,#2ACED6 50%),-webkit-linear-gradient(#D61419 50%,#1C5A07 50%);background:linear-gradient(#D8C018 50%,#2ACED6 50%),linear-gradient(#D61419 50%,#1C5A07 50%);background-size:50% 100%,50% 100%;background-position:0 0,100% 0;background-repeat:no-repeat;opacity:.7;animation:mask 1s infinite linear}.spin:after{content:"";position:absolute;border:.12em solid rgba(255,255,255,0.3);position:absolute;top:25%;left:25%;width:50%;height:50%;border-radius:inherit}

.main-container{
    margin-left:0px ! important; 
    padding-top: 0px ! important;
}
 .title{
    text-align: center;
    width: 100%
 }


.loading-main>img{
  transition: all 1s ease;
  position: fixed;
  top: auto;
  width: 250px;  
  animation: flyin .8s 1;
   -webkit-animation-fill-mode: forwards;  
    animation-fill-mode: forwards;
    transform:  rotate(-25deg);  
}





 
</style>

</head>
<body>
<!--  ////////////////////////////
     ///////LOADING EFFECT///////
    ////////////////////////////-->



<!-- <section class='loading-main'>
<img src="{{asset('asset/img/plane.png')}}">
 <div class='spin'></div>
  
</section> -->

<!--JavaScript-->

 <script>
$(window).bind("load", function() {
  
  
setTimeout(function(){ 

$(".loading-main>img").css('animation','flyout 1s 1');

 }, 1000);
 
setTimeout(function(){ 

$(".loading-main").fadeOut(500);

 }, 1000);

}); 
 </script>




    <div id="app">
  
        @yield('content')
    </div>

    <!-- Scripts -->
   
<script type="text/javascript" src="{{asset('assets/authAsset/particle.js')}}"></script>
</body>
</html>
