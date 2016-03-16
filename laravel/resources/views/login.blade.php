@extends('layouts.master')

@section('title')
Login
@stop

@section('navbar-elements')
@include('layouts.navbar-elements')
@stop

@section('content')
<div id="headerwrap" class="small-headerwrap">
	<header class="clearfix">
		<h1><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></h1>
		<p>Login.</p>
	</header>       
</div>
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
		<h1 class="centered">Einloggen oder registrieren</h1>
		<hr>
		<form action="/login" method="post" class="form-horizontal centered login-form">
	        {{ csrf_field() }}
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
	        	<button type="submit" class="btn btn-default pull-right form-submit-button">Login</button>
	        </div>
	    </form>
	</div>
</div>

<div id="greywrap">
    <div class="row">
        <div class="col-lg-12 callout">
            <span class="glyphicon glyphicon-hand-up big-icon" aria-hidden="true"></span>
            <h2>Noch keinen Account?</h2>
            <p><a class="btn btn-success" href="/register">Hier registrieren</a></p>
        </div>
    </div>
</div>
@stop
