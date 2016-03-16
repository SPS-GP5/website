<li><a href="#home" class="smoothScroll">Home</a></li>
<li><a href="#introduction" class="smoothScroll"> Einführung</a></li>
<li><a href="#roboter" class="smoothScroll"> Roboter</a></li>
<li><a href="#requirements" class="smoothScroll"> Anforderungen</a></li>
<li><a href="#team" class="smoothScroll"> Team</a></li>
<li><a href="#contact" class="smoothScroll"> Kontakt</a></li>
<li><a href="/intern">Interner Bereich</a></li>
@if(Auth::check())<li><a href="/logout">Ausloggen ({{ Auth::user()->firstname . ' ' . Auth::user()->lastname}})</a></li>@endif