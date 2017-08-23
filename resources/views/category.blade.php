<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Ktimez.com - Mobile Version - {{$catname}}</title>
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
<body  style="border:1 px solid ;padding:0px;background-color:#e2e1e0;">
<!--================ HEADER =================-->
<div class="container" style="border:0px solid ;height:120px;margin-top:0px;padding:0px 0px;">
<div class="row" style="padding:0px;margin:0px;width:100%;background-color:#ffffff;background-size: 100% 100%;">
<div class="col-lg-12" style="padding:0px;margin:0px;">
<div style="border:0px solid ;height:138px;background-position:100%;">
<center><a href="{{route('home')}}"><img src="{{asset('images/ktimezlogo.png')}}"  height="105"  width="240" align="center" style="margin:auto;border:none;"></a></center>
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
<form method="GET" action="spip.php" style="">
<input type="text" placeholder="Search..." class="search" id="searching" name="search">
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
<!--================== CONTENT===============-->
<div class="container" style="border:0px solid ;padding:0px 15px;margin-top:2px;background-color:#f8f8f8;">
<div class="row" style="padding:4px 0px;margin-top:3px;margin-left:0px;margin-right:0px;border-top:0px solid #03a9f4;border-bottom:1px solid #1562b6;background-color:#f8f8f8;color:#007ac1;">
<div class="col-xs-12" style="padding-left:3px;font-size:17px;text-transform:uppercase;">{{$catname}}</div>
</div>
<div class="row"  style="padding:2px 2px;margin:0px -15px;">
<div class="col-lg-12"  style="padding:4px 0px;">
<div class="title_rubrique" >
<a href="{{ route('post',['slug'=>$categories[0]->slug])}}" style="font-size:16px;font-weight:bold;color:#03a9f4;">{{str_limit($categories[0]->title, 100)}}</a>
</div>
<img src="{{route('images',['img'=>$categories[0]->featured])}}" width="100%"  style="height:100%" /> 
</div>
</div>
<div class="row" style="margin:0px -20px;">
<div class="col-lg-12" style="padding:0px;padding-left:2px;padding-left:2px;border-bottom:0px solid #aaa;">
<table style="width:100%;border:0px solid ;">

@foreach($categories as $post)
 @if ($loop->first)
        @continue
 @endif
<tr style="padding-bottom:5px;padding-top:5px;border-bottom:1px solid #aaa;">
<td style="width:125px;height:110px;padding-left:5px;border:0px solid ;">
<img src="{{ route('images',['img'=>$post->featured,'h'=>120,'w'=>90])}}" height=""/>
</td>
<td class="news_list" style="padding-left:8px;top:0px;border:0px solid ;height:100px; margin:0px; ">							
<a style="color:#025884;float:left;font-weight:400;font-weight:bold;margin-top:-20px;" href="{{ route('post',['slug'=>$post->slug])}}">{{str_limit($post->title, 100)}}</a>					        
</td>
</tr>
@endforeach	
<tr>					
<td colspan="2">
<center><div class="pagination" style="margin-top:-10px;"><a name='pagination_articles_recents' id='pagination_articles_recents'></a>
<span
class="pages"><strong class='on'>1</strong><span
class='sep'> | </span
><a href="#" class='lien_pagination' rel='nofollow'>2</a><span
class='sep'></div>
</center>
</td>
</tr>						
</table>
</div>
</div>
<div class="row" style="padding:2px 0px;border:0px solid ;">
<div class="col-lg-12" style="padding:0px;">		
<img src="{{asset('images/ad-header.png')}}" width="100%" height="50px" style="border-radius:0px;">
</div>
</div>
<div class="row" style="padding:7px;">
<div class="col-lg-12">
</div>
</div>
<div class="row" style="padding:0px 5px; background-color:#000;border:0px solid ;">
<div class="col-xs-12" style="padding:0px; border:0px solid ;">
<div style="padding-top:30px;right:0px;margin-left:20px;"><img src="{{asset('images/ktimez.jpg')}}" class="img img-responsive" width="135px"></div>
<div style="padding:4px;font-size:14px;font-weight:normal;color:#807e7f;margin-left:20px;">&copy; {{date('Y')}} Ktimez.com All rights reserved </div>
</div>
</div>
</div>
<!--======  END CONTENT ======-->
<script type='text/javascript' src="{{mix('js/all.js')}}"></script>          
</body>
</html>