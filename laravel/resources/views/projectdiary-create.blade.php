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
<script src="/js/main.js"></script>
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
        <div class="projectdiary centered">
            <div class="row">
                <h1 class="centered">Stundenaufzeichnung erstellen</h1>
                <hr>
                <form action="/intern/projectdiary/create" method="post" class="form-horizontal centered login-form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-4" for="user">Mitglied</label>
                        <div class="col-sm-8">
                            <select name="user" class="form-control">
                                <option>Michael Ester</option>
                                <option>Michael Ester</option>
                                <option>Michael Ester</option>
                                <option>Michael Ester</option>
                                <option>Michael Ester</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4" for="date">Datum</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4" for="hours">Stunden</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4" for="description">Beschreibung</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password">
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
loadWgUsers('checkable');

$("#datepicker").datepicker();
$("#datepicker").datepicker("option", "dateFormat", "dd.mm.yy");
$("#datepicker").datepicker("setDate" , "{{ date('d.m.Y') }}");
</script>
@stop

