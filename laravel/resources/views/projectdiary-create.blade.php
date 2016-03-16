@extends('layouts.master')

@section('title')
Stundenaufzeichnung erstellen
@stop

@section('navbar-elements')
@include('layouts.intern-navbar-elements')
@stop

@section('head')
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
@stop

@section('content')
<section class="section-divider textdivider divider3">
	<div class="container">
	    <h1>PROJEKTTAGEBUCH</h1>
	    <hr>
	</div>
</section>

<div class="container">
    <div class="row white">
        <br>
        @if($errors->any())
            <p class="alert alert-danger">
                <b>{{ trans_choice('messages.error_occured', sizeof($errors->all())) }}</b>
                <br/>
                @foreach($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </p>
        @endif
        @if(isset($created))
            <p class="alert alert-success">
                <b>Die Stundenaufzeichnung wurde erfolgreich gespeichert.</b>
            </p>
        @endif
        <div class="projectdiary centered">
            <div class="row">
                <h1 class="centered">Stundenaufzeichnung erstellen</h1>
                <hr>
                <form action="/intern/projectdiary/create" method="post" class="form-horizontal centered login-form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-4" for="user">Mitglied</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{ Auth::user()->lastname . ' ' . Auth::user()->firstname }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4" for="date">Datum</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="date" id="datepicker" value="{{ old('date') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4" for="hours">Stunden</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="hours" value="{{ old('hours') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4" for="description">Beschreibung</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default pull-right form-submit-button">Erstellen</button>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</div>

<script type="text/javascript">
$("#datepicker").datepicker();
$("#datepicker").datepicker("option", "dateFormat", "dd.mm.yy");
$("#datepicker").datepicker("setDate" , "{{ date('d.m.Y') }}");
$("#datepicker").datepicker("option", "firstDay" , 1);
$("#datepicker").datepicker("option", "monthNames" , ['Januar','Februar','März','April','Mai','Juni', 'Juli','August','September','Oktober','November','Dezember']);
$("#datepicker").datepicker("option", "dayNamesMin" , ['So','Mo','Di','Mi','Do','Fr','Sa']);
</script>
@stop

