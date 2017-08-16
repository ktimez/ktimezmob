<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Ktimez.com - Mobile Version</title>
<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{mix('css/all.css')}}" rel="stylesheet">    
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

</head>
<body>  
<div class="container" style="border:0px solid ;height:120px;margin-top:0px;padding:0px 0px;">
<div class="row" style="padding:0px;margin:0px;width:100%;background-color:#03a9f4;background-size: 100% 100%;">
<div class="col-lg-12" style="padding:0px;margin:0px;">
<div style="border:0px solid ;height:138px;background-position:100%;">
<center><img src="{{asset('images/ktimezlogo.png')}}"  height="80"  width="280" align="center" style="margin:auto;"></center>
</div>
</div>
<div class="col-lg-12" style="padding:0px;margin:0px;">
<div class="row" style="border:0px solid ;margin-top:-22px;padding:2px 5px;">
<div class="col-xs-6">
<div class="language">

</div>
</div>
<div class="col-xs-6" style="padding-bottom:4px;">
<div class="search pull-right" style="margin-top:-3px;">
<form method="GET" action="search.php" >
<input type="text" placeholder="search..." class="search" id="search" name="search">
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
<div class="col-lg-12" style="border:0px solid;margin:0px;padding:0px 0px;border-bottom:2px solid #03a9f4;border-top:2px solid #007ac1;">
<div id='cssmenu'>
@include('menu')
</div>
</div>
</div>
</div>
<!-- /header container-->
<!--================ CONTENT =================-->
<div class="container" style="border:0px solid;padding:0px 15px;margin-top:2px;background-color:#f8f8f8;">

<div class="row" style="padding:0px;border:0px solid ;margin-top:1px;margin-bottom:0px;">
<div class="col-lg-12" style="margin:0px;padding:0px;border:0px solid ;">

</div>
</div>
<div class="row"  style="padding:2px 2px;margin:0px -15px;">

<div class="col-lg-12"  style="padding:0px;border:0px solid ;">
<div style="overflow:hidden;">
<img src="{{route('images',['img'=>$sliders[0]->featured])}}" width="100%"  style="height:100%" />
</div>
</div>
<div class="col-lg-12"  style="padding:0px;border:0px solid ;">   
<div class="main_title" style="margin-top:0px;">

<a href="{{route('post',['slug'=>$sliders[0]->slug])}}" style="font-size:11px;">{{str_limit($sliders[0]->title, 100)}}</a>
</div>
</div>

</div>
<div class="row" style="padding:0px;border:0px solid ;margin-top:1px;margin-bottom:0px;background-color:#03a9f4;color:#fff;">
<div class="col-lg-12" style="margin:0px;padding:0px;border:0px solid ;">

<table style="width:100%;border:0px solid ;">

@foreach($sliders as $slider)
 @if ($loop->first)
        @continue
 @endif

<tr class="main_articles">
<td style="width:105px;height:105px;padding-left:4px;border:0px solid ;">
<img src="{{ route('images',['img'=>$slider->featured,'h'=>120,'w'=>90])}}" />
<style>
.comment_arrow1{
height:30px;
width:30px;
border-radius:50%;
margin-top:-25px;
margin-right:0px;
position:relative;
z-index:9999;
float:right;
color:#fff;
background-color:#1f78d9;
}

</style>
<div class="comment_arrow1" style="padding-top:2px;">
<center>
1
</center>
<img src="images/arrow22.png" style="margin-left:5px;margin-top:-12px;">
</div>

</td>
<td class="news_list" style="padding-left:8px;top:0px;border:0px solid ;height:auto; margin:0px; ">
<a style="color:#fff;float:left;font-weight:400;margin-top:-20px;" href="{{ route('post',['slug'=>$slider->slug])}}" style="font-size:11px;">{{str_limit($slider->title, 100)}}</a>

</td>
</tr>
@endforeach

</table>

</div>
</div>

<!--  ============================ more  ================================================ -->
<hr>
<div class="row" style="margin:0px -15px;" id="pagination_articles_recents">
<div class="col-lg-12" style="background:#03a9f4;padding:5px; color:#fff; font-size:16px; font-weight:bold;padding-left:13px;">popular</div>

<div class="col-lg-12" style="padding:0px;padding-left:2px;padding-left:2px;border-bottom:0px solid #aaa;">
<table style="width:100%;border:0px solid red;">  
@foreach($popular as $pop)    
<tr style="padding-bottom:5px;padding-top:5px;border-bottom:1px solid #aaa;">
<td style="width:125px;height:110px;padding-left:5px;border:0px solid red;">
<img src="{{route('images',['img'=>$pop->featured,'h'=>120,'w'=>90]) }}" height="" style="" />
<style>
.comment_arrow{
height:30px;
border-radius: 50%; 
width:30px;
border:0px solid;
margin-top:15px;
margin-right:0px;
position:relative;
z-index:9999;
float:right;
color:#fff;
background-color:#1f78d9;
}

</style>
<div class="comment_arrow" style="padding-top:3px;">
<center>

10

</center>
<img src="images/arrow22.png" style="margin-left:5px;margin-top:-12px;">
</div>

</td>
<td class="news_list" style="padding-left:8px;top:0px;border:0px solid red;height:100px; margin:0px; ">							
<a style="color:#03a9f4;float:left;font-weight:400;font-weight:bold;margin-top:-20px;" href="{{ route('post',['slug'=>$pop->slug])}}">{{ str_limit($pop->title,100)}}</a>					        
</td>
</tr>
@endforeach
<tr>					
<td colspan="2">
<center><div class="pagination" style="margin-top:-10px;"><a name='pagination_articles_recents' id='pagination_articles_recents'></a>
<span class="pages"><strong class='on'>1</strong><span
class='sep'> | </span
><a href='#' class='lien_pagination' rel='nofollow'>2</a></span></div></center>						
</td>
</tr>							
</table>
</div>	
</div>
<div class="row" style="padding:7px;margin-top:0px;border:0px solid red;">
<div class="col-lg-12" style="margin-top:15px;">

<img src="images/adshere.png" width="100%" height="250px" style="border-radius:0px;">

</div>
</div>
<div class="row" style="padding:2px 0px;border:0px solid red;">
<div class="col-lg-12" style="padding-top:4px;padding-bottom:4px;color:#2b7bda; font-size:16px; font-weight:bold;padding-left:13px;">
SEARCH HERE
</div>
</div>
<div class="row" style="padding:7px;">
<div class="col-lg-12">
<center>
<div class="search_footer" style="margin:auto;">
<form method="GET" action="#" style="">
<input type="text" placeholder="Shakisha..." id="searching" name="search">
<input type="hidden" name="page" value="mv2_recherche"/>
</form>
</div>
</center>
</div>
</div>
<!--  #################### ktimez app ###########################-->
<div class="row" style="padding:0px 0px;">
<div class="col-lg-12" style="padding:0px;">
</a>
</div>
</div>
<!--  ############################################### end of ktimez app ads ###############################################-->
<!--  ############################################### subfooter ###############################################-->
<div class="row" style="padding:0px 0px;">
<div class="col-lg-12" style="padding:0px;">
<!-- <a href="https://play.google.com/store/apps/details?id=com.ktimez.app&hl=en" target="_blank">-->
</a>
</div>
</div>
<!--  ################### end of subfooter ###################-->
<div class="row" style="padding:0px 5px; background-color:#000;border:0px solid ;">
<div class="col-xs-7" style="padding:0px; border:0px solid;">
<div style="padding-top:30px;right:0px;margin-left:20px;"><img src="images/ktimez.jpg" width="135px"></div>
<div style="padding:4px;font-size:14px;font-weight:normal;color:#fff;margin-left:20px;">&copy; 2017 Ktimez All rights reserved. </div>
</div>
<div class="col-xs-5" style="color:#fff;padding-top:22px;border:0px solid ;text-decoration:none;font-size:12px;">
<div class="footer_down">
</div>
</div>
</div>
</div>
<!-- /CONTENT ============-->
<script type='text/javascript' src="{{mix('js/all.js')}}"></script>   

</body>
</html>