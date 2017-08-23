<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Ktimez.com - Mobile Version | {{$post->title}}  </title>
<link rel="shortcut icon" href="{{asset('images/favicon.png')}}"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$post->title}}" />
{{--  <meta property="og:description" content="{{str_limit($post->title, 100)}}..." />  --}}
<meta property="og:url" content="http://ktimez.com/post/{{$post->slug}}" />
<meta property="og:site_name" content="Ktimez" />
{{--  <meta property="og:section" content="{{ }}" />  --}}
<meta property="og:image" content="{{route('images',['img'=>$post->featured]) }}" />

<link href="{{mix('css/all.css')}}" rel="stylesheet">
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- ga code -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-104400261-1', 'auto');
ga('send', 'pageview');
</script>
<!-- end of ga -->
<style stype="text/css">
.internal_article .puce{width:8px;height:11px;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;}
</style>
</head>
<body style="background-color:#e2e1e0;">
<!--===================== HEADER ===========-->
<div class="container" style="border:0px;height:120px;margin-top:0px;padding:0px 0px;">
<div class="row" style="padding:0px;margin:0px;width:100%;background-color:#ffffff;background-size: 100% 100%;">
<div class="col-lg-12" style="padding:0px;margin:0px;">
<div style="border:0px;height:138px;background-position:100%;">
<center><a href="{{route('home')}}"><img src="{{asset('images/ktimezlogo.png')}}" class="img img-responsive" height="80"  width="280" align="center" style="margin:auto;border:none;"></a></center>
</div>
</div>
<div class="col-lg-12" style="padding:0px;margin:0px;">
<div class="row" style="border:0px;margin-top:-22px;padding:2px 5px;">
<div class="col-xs-6">
<div class="language">
</div>
</div>
<div class="col-xs-6" style="padding-bottom:4px;">
<div class="search pull-right" style="margin-top:-3px;">
<form method="GET" action="#">
<input type="text" style="color:#000;" placeholder="search..." class="search" id="searching" name="search">
<input type="hidden" name="page" value="search"/>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container" style="padding:0px 0px;margin-top:20px;border:0px solid;">
<div class="row" style="padding:0px 0px;margin:0px;">
<div class="col-lg-12" style="border:0px solid;margin:0px;padding:0px 0px;border-bottom:2px solid #03a9f4;border-top:2px solid #03a9f4;">
<div id='cssmenu'>
@include('menu')
</div>
</div>
</div>
</div>
<!-- end of header-->
<!--================ CONTENT=================-->
<div class="container" style="border:0px solid ;padding:0px 15px;margin-top:2px;background-color:#f8f8f8;">

<div class="row"  style="padding:2px 2px;margin:0px -15px;">
<div class="col-lg-12"  style="padding:4px 4px;">
<div class="title_rubrique" >
<a href="#" style="font-size:20px;color:#2075cf;text-decoration:none;margin-bottom:5px;">{{$post->title}} </a><br>                  
<table style="width:100%;">
<tr>
<td>
<a href="#">
<span class="glyphicon glyphicon-time"></span>
@php
use Carbon\Carbon;
echo Carbon::parse($post->created_at)->diffForHumans();
@endphp</a> by <a href="#" class="gh_tab_articledetails_author">{{ $post->posted_by}}</a>   <span class="glyphicon glyphicon-eye-open"></span>&nbsp;<a href="#">{{$post->views}}</a><br>
</td> 
</tr>
<tr> 
<td class="text-center">
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<div class="addthis_inline_share_toolbox"></div>      
</td>
</tr>
</table>    
</div>
<center><img class="spip_logo spip_logos" alt="" src="{{route('images',['img'=>$post->featured]) }}" width="95%"  style='height:auto;margin-top:12px;' /></center>
</div>
</div>
<div class="row" style="margin:0px -15px;border:0px;">
<div class="col-lg-12" style="padding:10px;color:#333333;">
<div class="internal_article">
      {!! $post->body !!}
</div>
</div>
</div>
<hr>
<div class="row" style="padding:7px;">
<div class="col-lg-12">
</div>
</div>
<div class="row" style="padding:0px 5px; background-color:#000;border:0px solid ;">
<div class="col-xs-12" style="padding:0px; border:0px solid ;">
<div style="padding-top:30px;right:0px;margin-left:20px;"><img src="{{asset('images/ktimez.jpg')}}" width="135px"></div>
<div style="padding:4px;font-size:14px;font-weight:normal;color:#fff;margin-left:20px;">&copy; 2017  ktimez.com  All rights reserved. </div>
</div>
</div>
</div>
<!--=======  END OF CONTENT =====-->
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type='text/javascript' src="{{mix('js/all.js')}}"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-598f3674a7d6cfde"></script> 
</body>
</html>