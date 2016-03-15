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
	    <p>Hier befindet sich der Dokumentenaustausch, das Projekttagebuch sowie die Terminverwaltung.</p>
	</div>
</section>

<div id="greywrap">
    <div class="row">
        <div class="col-lg-4 callout">
            <span class="glyphicon glyphicon-hdd big-icon" aria-hidden="true"></span>
            <h2>Dokumentenaustausch</h2>
            <p><a class="btn btn-success" href="/intern/documents">Zum Dokumentenaustausch</a></p>
            <p>Hier werden diverse Dokumente bereitgestellt, die heruntergeladen werden können.</p>
        </div>
            
        <div class="col-lg-4 callout">
            <span class="glyphicon glyphicon-book big-icon" aria-hidden="true"></span>
            <h2>Projekttagebuch</h2>
            <p><a class="btn btn-success" href="/intern/projectdiary">Zum Projekttagebuch</a></p>
            <p>Hier werden die Arbeitsstunden der Projektmitglieder eingetragen und werden in einer Übersicht dargestellt.</p>
        </div>
        
        <div class="col-lg-4 callout">
            <span class="glyphicon glyphicon-tasks big-icon" aria-hidden="true"></span>
            <h2>Terminverwaltung</h2>
            <p><a class="btn btn-success" href="#" disabled>noch nicht verfügbar</a></p>
            <p>Hier können die Meilensteine des Projekts eingetragen werden, die auf der Startseite angezeigt werden.</p>
        </div>
    </div>
</div>
@stop

