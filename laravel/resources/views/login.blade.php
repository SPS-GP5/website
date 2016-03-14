@extends('layouts.master')

@section('title')
Login
@stop

@section('content')
<!-- ==== HEADERWRAP ==== -->
<div id="headerwrap" class="login-headerwrap" id="home" name="home">
	<header class="clearfix">
		<h1><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></h1>
		<p>Login.</p>
	</header>       
</div><!-- /headerwrap -->
<div class="container">
	<div class="row white">
		<br>
		<h1 class="centered">Einloggen oder registrieren</h1>
		<hr>
		<form action="/login" method="post" class="form-horizontal centered login-form">
	        {{ csrf_field() }}
	        <div class="form-group">
	            <label class="col-sm-4" for="email">Email</label>
	            <div class="col-sm-8">
	                <input type="text" class="form-control" name="email">
	            </div>
	        </div>
	        <div class="form-group">
	            <label class="col-sm-4" for="password">Passwort</label>
	            <div class="col-sm-8">
	                <input type="password" class="form-control" name="password">
	            </div>
	        </div>
	        <div class="form-group">
	        	<button type="submit" class="btn btn-default pull-right login-button">Login</button>
	        </div>
	    </form>
	</div><!-- row -->
</div><!-- container -->
<!-- ==== GREYWRAP ==== -->
<div id="greywrap">
    <div class="row">
        <div class="col-lg-12 callout">
            <span class="glyphicon glyphicon-hand-up big-icon" aria-hidden="true"></span>
            <h2>Noch keinen Account?</h2>
            <p><a class="btn btn-success" href="#">Hier registrieren</a></p>
        </div><!-- col-lg-4 -->
    </div><!-- row -->
</div><!-- greywrap -->
@stop
