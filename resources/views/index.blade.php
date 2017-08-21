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
<body style="background-color:#e2e1e0;">  
<div class="container" style="border:0px solid ;height:120px;margin-top:0px;padding:0px 0px;">
<div class="row" style="padding:0px;margin:0px;width:100%;background-color:#ffffff;background-size: 100% 100%;">
<div class="col-lg-12" style="padding:0px;margin:0px;">
<div style="border:0px solid ;height:138px;background-position:100%;">
<center><a href="{{route('home')}}"><img src="{{asset('images/ktimezlogo.png')}}" class="img img-responsive" height="80"  width="280" align="center" style="margin:auto;"></a></center>
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
<div class="col-lg-12" style="border:0px solid;margin:0px;padding:0px 0px;border-bottom:2px solid #03a9f4;border-top:2px solid #03a9f4;">
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
<div class="row"  style="padding:2px 2px;margin:0px -15px;width:inherit;">

<div class="col-lg-12"  style="padding:0px;border:0px solid ;">
<div style="overflow:hidden;">
<img src="{{route('images',['img'=>$latests[0]->featured])}}" width="100%"  style="height:100%" />
</div>
</div>
<div class="col-lg-12"  style="padding:0px;border:0px solid ;">   
<div class="main_title" style="margin-top:5px;">
<a href="{{route('post',['slug'=>$latests[0]->slug])}}" style="font-size:16px;font-weight:bold;">{{str_limit($latests[0]->title, 100)}}</a>
</div>
</div>
</div>
<div class="row" style="padding:0px;border:0px solid ;margin-top:1px;margin-bottom:0px;color:#fff;">
<div class="col-lg-12" style="margin:0px;padding:0px;border:0px solid ;">

<table style="width:100%;border:0px solid ;">

@foreach($latests as $latest)
 @if ($loop->first)
        @continue
 @endif
<tr class="main_articles">
<td style="width:105px;height:105px;padding-left:4px;border:0px solid ;">
<img src="{{ route('images',['img'=>$latest->featured,'h'=>120,'w'=>90])}}" />
</td>
<td class="news_list" style="padding-left:8px;top:0px;border:0px solid ;height:auto; margin:0px; ">
<a style="color:#fff;float:left;font-weight:400;margin-top:-20px;" href="{{ route('post',['slug'=>$latest->slug])}}" style="font-size:11px;">{{str_limit($latest->title, 100)}}</a>

</td>
</tr>
@endforeach
</table>
</div>
</div>

<!--  ============================ more  ================================================ -->
<div class="row" style="margin:0px -15px;" id="pagination_articles_recents">
<div class="col-lg-12" style="background:#03a9f4;padding:5px; color:#fff; font-size:16px; font-weight:bold;padding-left:13px;">popular</div>

<div class="col-lg-12" style="padding:0px;padding-left:2px;padding-left:2px;border-bottom:0px solid #aaa;">
<table style="width:100%;border:0px solid red;">  
@foreach($popular as $pop)    
<tr style="padding-bottom:5px;padding-top:5px;border-bottom:1px solid #aaa;">
<td style="width:125px;height:110px;padding-left:5px;border:0px solid red;">
<img src="{{route('images',['img'=>$pop->featured,'h'=>120,'w'=>90]) }}" height="" style="" />
</td>
<td class="news_list" style="padding-left:8px;top:0px;border:0px solid red;height:100px; margin:0px; ">							
<a style="color:#03a9f4;float:left;font-weight:400;font-weight:bold;margin-top:-20px;" href="{{ route('post',['slug'=>$pop->slug])}}">{{ str_limit($pop->title,100)}}</a>					        
</td>
</tr>
@endforeach
<tr>					
<td colspan="2">
<center>
<div class="pagination" style="margin-top:-10px;">
<span><a href="#"><<</a></span>
&nbsp;
<span class="pages"><strong class='on'><a href="#">1</a></strong>
<span class='sep'> </span>
<span class="pages"><a href='#'>2</a></span></div>
&nbsp;
<span><a href="#">>></a></span>
</center>						
</td>
</tr>							
</table>
</div>	
</div>
<div class="row" style="padding:7px;margin-top:0px;border:0px solid red;">
<div class="col-lg-12" style="margin-top:15px;">

<img src="images/ad-header.png" width="100%" height="50px" style="border-radius:0px;">

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
{{--  apps link here  --}}
</a>
</div>
</div>
<!--  ################### end of subfooter ###################-->
<div class="row" style="padding:0px 5px; background-color:#000;border:0px solid ;">
<div class="col-xs-12" style="padding:0px; border:0px solid;">
<div style="padding-top:30px;right:0px;margin-left:20px;"><img src="images/ktimez.jpg" class="img img-responsive" width="135px"></div>
<div style="padding:4px;font-size:12px;font-weight:normal;color:#fff;">&copy; {{ date('Y') }} Ktimez All rights reserved. </div>
</div>
</div>
</div>
<!-- /CONTENT ============-->
<script type='text/javascript' src="{{mix('js/all.js')}}"></script>   

</body>
</html>