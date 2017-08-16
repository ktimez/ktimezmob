<ul>
<li><a href="{{route('home')}}" style="text-transform:capitalize;">Home</a></li>
<li>
<a href="{{ route('cats',['catname'=>'Tech News'])}}" style="text-transform:capitalize;">Tech News </a>
</li>

<li>
<a href="{{ route('cats',['catname'=>'Android'])}}" style="text-transform:capitalize;">Smartphones</a>
<ul>
<li><a href="{{ route('cats',['catname'=>'Android'])}}" style="text-transform:capitalize;">Android</a></li>
<li><a href="{{ route('cats',['catname'=>'IOS'])}}" style="text-transform:capitalize;">IOS</a></li>
<li><a href="{{ route('cats',['catname'=>'Windows Phone'])}}" style="text-transform:capitalize;">Windows Phone</a></li>
</ul>
</li>

<li>
<a href="{{ route('cats',['catname'=>'Linux'])}}" style="text-transform:capitalize;">Computers</a>
<ul>
<li><a href="{{ route('cats',['catname'=>'Windows'])}}" style="text-transform:capitalize;">Windows</a></li>
<li><a href="{{ route('cats',['catname'=>'Linux'])}}" style="text-transform:capitalize;">Linux</a></li>
<li><a href="{{ route('cats',['catname'=>'Mac OS'])}}" style="text-transform:capitalize;">Mac OS</a></li>
</ul>
</li>

<li>
<a href="{{ route('cats',['catname'=>'Web Dev'])}}" style="text-transform:capitalize;">Tutorials</a>
<ul>
<li><a href="{{ route('cats',['catname'=>'Hacking'])}}" style="text-transform:capitalize;">Hacking</a></li>
<li><a href="{{ route('cats',['catname'=>'Web Dev'])}}" style="text-transform:capitalize;">Web Dev</a></li>
<li><a href="{{ route('cats',['catname'=>'Dev Ops'])}}" style="text-transform:capitalize;">Dev Ops</a></li>
<li><a href="{{ route('cats',['catname'=>'Troubleshooting'])}}" style="text-transform:capitalize;">Troubleshooting</a></li>
<li><a href="{{ route('cats',['catname'=>'How To'])}}" style="text-transform:capitalize;">How To</a></li>								
</ul>
</li>

<li>
<a href="#" style="text-transform:capitalize;">About us</a>
</li>
</ul>