<!DOCTYPE html>
<html>
    <head>
    	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="{!! url('public/user/css/bootstrap.css') !!}" rel="stylesheet">
<link href="{!! url('public/user/css/bootstrap-responsive.css') !!}" rel="stylesheet">
<link href="{!! url('public/user/css/style.css') !!}" rel="stylesheet">
<link href="{!! url('public/user/css/flexslider.css') !!}" type="text/css" media="screen" rel="stylesheet"  />
<link href="{!! url('public/user/css/jquery.fancybox.css') !!}" rel="stylesheet">
<link href="{!! url('public/user/css/cloud-zoom.css') !!}" rel="stylesheet">
@include('user.blocks.header')
    	<div class="container">
    	@include('user.blocks.nav')
  		</div>
        <title>Chuẩn đoán bệnh</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <center><h2>Triệu chứng bệnh:</h2></center>
    </head>
    <body>

        <div class="col-lg-4 col-lg-offset-4">
            <div class="form-group">
                <input type="text" id="search-input" class="form-control" placeholder="Search" onkeydown="down()" onkeyup="up()">
            </div>
            <div class="col-lg-12" id="search-results">

            </div>
        </div>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="{{asset('js/search.js')}}"></script>

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