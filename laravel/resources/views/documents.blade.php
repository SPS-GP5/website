@extends('layouts.master')

@section('title')
Dokumentenaustausch
@stop

@section('navbar-elements')
@include('layouts.intern-navbar-elements')
@stop

@section('content')
<section class="section-divider textdivider divider3">
	<div class="container">
	    <h1>DOKUMENTENAUSTAUSCH</h1>
	    <hr>
	    <p>bla bla blab lab labla blablab labbal</p>
	</div>
</section>

<div class="container">
    <div class="row white">
        <br>
        <h1 class="centered">Dokumentenaustausch</h1>
        <hr>
        <div class="documents">
            <div class="row">
                @if (count($files) > 0)
                    @foreach ($files as $file)
                    <div class="col-lg-12 document-row">
                        <div class="document-area">
                            <div class="row">
                                <div class="col-lg-10">
                                    <h3 class="document-title">{{ $file['name'] }}</h3>
                                </div>
                                <div class="col-lg-2">
                                    <h3 class="document-download"><a href="{{ url($file['path']) }}"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                <div class="col-lg-12 document-row">
                    <h3 class="document-title">Keine Dateien derzeit vorhanden</h3>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@stop

