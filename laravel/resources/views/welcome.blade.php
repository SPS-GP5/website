@extends('layouts.master')

@section('title')
Welcome
@stop

@section('navbar-elements')
@include('layouts.home-navbar-elements')
@stop

@section('content')
<div id="headerwrap" class="start-headerwrap" id="home" name="home">
    <header class="clearfix">
        <h1><span class="glyphicon glyphicon-road" aria-hidden="true"></span></h1>
        <p class="start-headline">G5BOT</p>
    </header>
</div>

<div class="container start-introduction" id="introduction" name="introduction">
    <div class="row white">
    <br>
        <h1 class="centered">EINFÜHRUNG IN DAS PROJEKT</h1>
        <hr>
        
        <div class="col-lg-6">
            <p>Im Zuge dieses Projektes soll ein autonom fahrender Roboter konstruier und eine Steuerungssoftware erstellt werden. Die Roboterhardware wurde dazu in Form eines Baukastens vom Auftraggeber zur Verfügung gestellt. Es handelt sich bei dieser Hardware um Lego Mindstorms Bauteile, wobei die zentrale Komponente der EV3 Brick ist, welcher die Steuerungslogik enthält und die erstellte Software ausführen kann. Es ist dem Auftragnehmer nicht erlaubt, die verfügbaren Teile - mit Ausnahme der EV3 Firmware - zu modifizieren. Als Firmware kommt MonoBrick zum Einsatz.</p>
        </div>
        
        <div class="col-lg-6">
            <p>Die Aufgabe für den Roboter besteht darin, sich in einem nach außen abgeschotteten Labyrinth zu orientieren und die Hello Kitty Figur zu finden. Es werden Punkte erspielt, indem wie bei PacMan „Kugeln“ eingesammelt werden wobei gesammelte Kugeln drastisch mehr wert sind, wenn man die Hello Kitty Figur bereits eingesammelt hat. Nach einer gewissen Zeit wird das Spiel beendet und das Ergebnis durch Zählen und Werten der „Kugeln“ bestimmt. Sollten alle „Kugeln“ und die Figur vor Ablauf der Zeit eingesammelt worden sein, wird das Spiel vorzeitig beendet.</p>
        </div>
    </div>
</div>

<div id="greywrap">
    <div class="row">
        <h2 class="centered">NICHT-ZIELE DES PROJEKTS</h2>
        <hr>
        <br>
        <br>
        <div class="col-lg-4 callout">
            <span class="glyphicon glyphicon-random big-icon" aria-hidden="true"></span>
            <h3>Unabhängigkeit vom Einsatzort</h3>
            <p>Die Funktionalität muss in dem definierten Umfeld (Labyrinth) gegeben sein. Außerhalb kann der Roboter nicht eingesetzt werden.</p>
        </div>
        <div class="col-lg-4 callout">
            <span class="glyphicon glyphicon-shopping-cart big-icon" aria-hidden="true"></span>
            <h3>Abladen der gesammelten Gegenstände</h3>
            <p>Die aufgenommenen Kugeln sowie die Hello Kitty Figur müssen nicht vom Roboter selbst wieder abgeladen werden können.</p>
        </div>
        <div class="col-lg-4 callout">
            <span class="glyphicon glyphicon-eye-open big-icon" aria-hidden="true"></span>
            <h3>Erkennen, ob noch Kugeln am Spielfeld sind</h3>
            <p>Der Roboter muss nicht dazu in der Lage sein zu erkennen, ob noch sammelbare Objekte im Labyrinth zu finden sind.</p>
        </div>
    </div>
</div>

<div class="margin-top-50">
    <div id="container" id="roboter" name="roboter">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 centered">
                    <img class="img-responsive" src="/img/prototyp.jpg" align="">
                </div>
                <div class="col-lg-4">
                    <h2>G5BOT</h2>
                    <p>Hier sieht man unseren ersten Prototypen. Komponenten wie zum Beispiel einen Greifer werden im Laufe des Projekts noch hinzugefügt.</p>
                </div>                  
            </div>
        </div>
        <br>
        <br>
    </div>
</div>

<section class="section-divider textdivider divider3" id="requirements" name="requirements">
    <div class="container">
        <h1>ANFORDERUNGEN</h1>
        <hr>
        <p>Farbunterscheidung | Reaktion auf erkannte Farben | Bewegungsaktionen | Abgrenzungserkennung</p>
        <p>Aufnehmen und halten von „Kugeln“ | Aufnehmen und halten der „Hello Kitty“ Figur</p>
    </div>
</section>

<div class="container" id="team" name="team">
<br>
    <div class="row white centered margin-bottom-30">
        <h1 class="centered">UNSER TEAM</h1>
        <hr>
        <br>
        <br>
        <div class="col-lg-12 centered">
            <img class="img img-circle" src="/img/team/gruber.jpg" height="120px" width="120px" alt="">
            <br>
            <h4><b>Mathias Gruber</b></h4>
            <a href="#" class="icon icon-twitter"></a>
            <a href="#" class="icon icon-facebook"></a>
            <a href="#" class="icon icon-flickr"></a>
            <p>Projektleiter | Hardwaredesign</p>
        </div>
    </div>
    <div class="row white centered margin-bottom-30">
        <div class="col-lg-3 centered">
            <img class="img img-circle" src="/img/team/kocaj.jpg" height="120px" width="120px" alt="">
            <br>
            <h4><b>Alen Kocaj</b></h4>
            <a href="#" class="icon icon-twitter"></a>
            <a href="#" class="icon icon-facebook"></a>
            <a href="#" class="icon icon-flickr"></a>
            <p>Softwareentwicklung</p>
        </div>
        <div class="col-lg-3 centered">
            <img class="img img-circle" src="/img/team/stigler.jpg" height="120px" width="120px" alt="">
            <br>
            <h4><b>Daniel Stigler</b></h4>
            <a href="#" class="icon icon-twitter"></a>
            <a href="#" class="icon icon-facebook"></a>
            <a href="#" class="icon icon-flickr"></a>
            <p>Softwareentwicklung</p>
        </div>
        <div class="col-lg-3 centered">
            <img class="img img-circle" src="/img/team/kaderle.jpg" height="120px" width="120px" alt="">
            <br>
            <h4><b>Tobias Kaderle</b></h4>
            <a href="#" class="icon icon-twitter"></a>
            <a href="#" class="icon icon-facebook"></a>
            <a href="#" class="icon icon-flickr"></a>
            <p>Hardwaredesign</p>
        </div>
        <div class="col-lg-3 centered">
            <img class="img img-circle" src="/img/team/keller.jpg" height="120px" width="120px" alt="">
            <br>
            <h4><b>Patrick Keller</b></h4>
            <a href="#" class="icon icon-twitter"></a>
            <a href="#" class="icon icon-facebook"></a>
            <a href="#" class="icon icon-flickr"></a>
            <p>Qualitätssicherung | Korrektur</p>
        </div>
    </div>
    <div class="row white centered">
        <div class="col-lg-3 centered">
            <img class="img img-circle" src="/img/team/merker.jpg" height="120px" width="120px" alt="">
            <br>
            <h4><b>Lilly Kathalina Merker</b></h4>
            <a href="#" class="icon icon-twitter"></a>
            <a href="#" class="icon icon-facebook"></a>
            <a href="#" class="icon icon-flickr"></a>
            <p>Dokumentation | Qualitätssicherung</p>
        </div>
        <div class="col-lg-3 centered">
            <img class="img img-circle" src="/img/team/liedl.jpg" height="120px" width="120px" alt="">
            <br>
            <h4><b>Elisabeth Liedl</b></h4>
            <a href="#" class="icon icon-twitter"></a>
            <a href="#" class="icon icon-facebook"></a>
            <a href="#" class="icon icon-flickr"></a>
            <p>Dokumentation</p>
        </div>
        <div class="col-lg-3 centered">
            <img class="img img-circle" src="/img/team/oberauer.jpg" height="120px" width="120px" alt="">
            <br>
            <h4><b>Michael Oberauer</b></h4>
            <a href="#" class="icon icon-twitter"></a>
            <a href="#" class="icon icon-facebook"></a>
            <a href="#" class="icon icon-flickr"></a>
            <p>Koordinationsgruppenmitglied<br>Dokumentation</p>
        </div>
        <div class="col-lg-3 centered">
            <img class="img img-circle" src="/img/team/ester.jpg" height="120px" width="120px" alt="">
            <br>
            <h4><b>Michael Ester</b></h4>
            <a href="#" class="icon icon-twitter"></a>
            <a href="#" class="icon icon-facebook"></a>
            <a href="#" class="icon icon-flickr"></a>
            <p>Qualitätssicherung | Korrektur</p>
        </div>
    </div>
</div>   

<section class="section-divider textdivider divider-hagenberg" id="contact" name="contact">
    <div class="container">
        <h1>ENTWICKELT IN HAGENBERG, OBERÖSTERREICH</h1>
        <hr>
        <p>FH Hagenberg</p>
        <p>Softwarepark 11</p>
        <p>4232 Hagenberg / Austria</p>
        <p><a class="icon" href="https://www.fh-ooe.at/campus-hagenberg/" target="_blank"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></p>
    </div>
</section>
@stop
