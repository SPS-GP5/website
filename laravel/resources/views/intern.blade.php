@extends('layouts.master')

@section('title')
Interner Bereich
@stop

@section('navbar-elements')
@include('layouts.intern-navbar-elements')
@stop

@section('content')
<section class="section-divider textdivider divider3">
	<div class="container">
	    <h1>INTERNER BEREICH</h1>
	    <hr>
	    <p>Hier befindet sich der Dokumentenaustausch und das Projekttagebuch.</p>
	</div>
</section>

<div id="greywrap">
    <div class="row">
        <div class="col-lg-4 callout">
            <span class="glyphicon glyphicon-hdd big-icon" aria-hidden="true"></span>
            <h2>Dokumentenaustausch</h2>
            <p><a class="btn btn-success" href="#">Zum Dokumentenaustausch</a></p>
            <p>Hier können Dateien hochgeladen werden und sind somit für alle Benutzer verfügbar.</p>
        </div>
            
        <div class="col-lg-4 callout">
            <span class="glyphicon glyphicon-book big-icon" aria-hidden="true"></span>
            <h2>Projekttagebuch</h2>
            <p><a class="btn btn-success" href="#" disabled>noch nicht verfügbar</a></p>
            <p>You can use this theme with your iPhone, iPad or MacBook Pro. This theme is retina ready and that is awesome.</p>
        </div>
        
        <div class="col-lg-4 callout">
            <span class="glyphicon glyphicon-tasks big-icon" aria-hidden="true"></span>
            <h2>Terminverwaltung</h2>
            <p><a class="btn btn-success" href="#" disabled>noch nicht verfügbar</a></p>
            <p>We don't make sites, we craft themes with love & passion. That is our most valued secret. We only do thing that we love.</p>
        </div>
    </div>
</div>
@stop

