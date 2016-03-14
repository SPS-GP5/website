@extends('layouts.master')

@section('title')
Registrieren
@stop

@section('content')
<div id="headerwrap" class="small-headerwrap">
	<header class="clearfix">
		<h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h1>
		<p>Registrieren.</p>
	</header>       
</div>
@if ($errors->any())
<div class='flash alert-danger'>
    <ul class="panel-body">
        @foreach ( $errors->all() as $error )
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
	<div class="row white">
		<br>
		<h1 class="centered">Registrieren</h1>
		<hr>
		<form action="/register" method="post" class="form-horizontal centered login-form">
	        {{ csrf_field() }}
	        <div class="form-group">
	            <label class="col-sm-4" for="firstname">Vorname</label>
	            <div class="col-sm-8">
	                <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
	            </div>
	        </div>
	        <div class="form-group">
	            <label class="col-sm-4" for="lastname">Nachname</label>
	            <div class="col-sm-8">
	                <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
	            </div>
	        </div>
	        <div class="form-group">
	            <label class="col-sm-4" for="email">Email</label>
	            <div class="col-sm-8">
	                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
	            </div>
	        </div>
	        <div class="form-group">
	            <label class="col-sm-4" for="password">Passwort</label>
	            <div class="col-sm-8">
	                <input type="password" class="form-control" name="password">
	            </div>
	        </div>
            <div class="form-group">
	            <label class="col-sm-4" for="password">Passwort bestätigen</label>
	            <div class="col-sm-8">
	                <input type="password" class="form-control" name="password_confirmation">
	            </div>
	        </div>
	        <div class="form-group">
	        	<button type="submit" class="btn btn-default pull-right form-submit-button">Registrieren</button>
	        </div>
	    </form>
	</div>
</div>
@stop
