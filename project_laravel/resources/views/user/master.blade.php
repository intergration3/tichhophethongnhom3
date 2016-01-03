<?php
session_start();
if(!empty($_SESSION['userid']))
{
header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>BV-Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="{!! url('public/user/css/bootstrap.css') !!}" rel="stylesheet">
<link href="{!! url('public/user/css/bootstrap-responsive.css') !!}" rel="stylesheet">
<link href="{!! url('public/user/css/style.css') !!}" rel="stylesheet">
<link href="{!! url('public/user/css/flexslider.css') !!}" type="text/css" media="screen" rel="stylesheet"  />
<link href="{!! url('public/user/css/jquery.fancybox.css') !!}" rel="stylesheet">
<link href="{!! url('public/user/css/cloud-zoom.css') !!}" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="assets/ico/favicon.html">
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
  function setURL(url){
            document.getElementById('ifr').src = url;
        }
</script>

<script>
      $(document).ready(function() {
      
      $('#henlich').click(function()
      {
      var username=$("#username").val();
      var password=$("#password").val();
        var dataString = 'username='+username+'&password='+password;
      $.ajax({
            type: "POST",
            url: "ajaxLogin.php",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...');},
            success: function(data){
            if(data)
            {
            $("body").load("home.php").hide().fadeIn(1500).delay(6000);
            }
            }
            });
      return false;
      });
      });
    </script>


</head>
<body>
<!-- Header Start -->
<header>
  @include('user.blocks.header')
  <div class="container">
    @include('user.blocks.nav')
    
</header>
<!-- Header End -->

<!-- <div id="maincontainer"> -->
  <!-- Slider Start-->
  <!-- @include('user.blocks.slider') -->
  <!-- Slider End-->
  
  <!-- Section Start-->

  <!-- Section End-->
  
  <!-- Featured Product-->
  <!-- iframe -->
  <iframe src="" id="ifr" width='100% px' height='500px' frameborder="0" name="iframe_a">
  <p>Your browser does not support iframes.</p>
  </iframe>
  
  

<!-- Footer -->
<!-- <footer id="footer">
  <section class="footersocial">
    <div class="container">
      <div class="row">
        <div class="span3 aboutus">
          <h2>Về chúng tôi </h2>
          <p>BV-Online là một dự án bệnh viện online cho phép người dùng theo dõi, quản lý và tìm hiểu các thông tin về sức khỏe.<br>
            <br>
            - Phi Dung Khôi -</p>
        </div>
        <div class="span3 contact">
          <h2>Liên hệ </h2>
          <ul>
            <li class="phone"> 0984242920</li>
            <li class="mobile"> 043578157</li>
            <li class="email"> phipv@gmail.com</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="footerlinks">
    <div class="container">
      <div class="info">
        <ul>
          <li><a href="#">Privacy Policy</a>
          </li>
          <li><a href="#">Terms &amp; Conditions</a>
          </li>
          <li><a href="#">Affiliates</a>
          </li>
          <li><a href="#">Newsletter</a>
          </li>
        </ul>
      </div>
      <div id="footersocial">
        <a href="#" title="Facebook" class="facebook">Facebook</a>
        <a href="#" title="Twitter" class="twitter">Twitter</a>
        <a href="#" title="Linkedin" class="linkedin">Linkedin</a>
        <a href="#" title="rss" class="rss">rss</a>
        <a href="#" title="Googleplus" class="googleplus">Googleplus</a>
        <a href="#" title="Skype" class="skype">Skype</a>
        <a href="#" title="Flickr" class="flickr">Flickr</a>
      </div>
    </div>
  </section>
  
  <a id="gotop" href="http://www.mafiashare.net">Back to top</a>
</footer> -->
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{!! url('public/user/js/jquery.js') !!}"></script>
<script src="{!! url('public/user/js/bootstrap.js') !!}"></script>
<script src="{!! url('public/user/js/respond.min.js') !!}"></script>
<script src="{!! url('public/user/js/application.js') !!}"></script>
<script src="{!! url('public/user/js/bootstrap-tooltip.js') !!}"></script>
<script defer src="{!! url('public/user/js/jquery.fancybox.js') !!}"></script>
<script defer src="{!! url('public/user/js/jquery.flexslider.js') !!}"></script>
<script type="text/javascript" src="{!! url('public/user/js/jquery.tweet.js') !!}"></script>
<script  src="{!! url('public/user/js/cloud-zoom.1.0.2.js') !!}"></script>
<script  type="text/javascript" src="{!! url('public/user/js/jquery.validate.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/user/js/jquery.carouFredSel-6.1.0-packed.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/user/js/jquery.mousewheel.min.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/user/js/jquery.touchSwipe.min.js') !!}"></script>
<script type="text/javascript"  src="{!! url('public/user/js/jquery.ba-throttle-debounce.min.js') !!}"></script>
<script defer src="{!! url('public/user/js/custom.js') !!}"></script>
</body>
</html>