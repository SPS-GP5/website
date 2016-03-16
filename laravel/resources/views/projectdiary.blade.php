@extends('layouts.master')

@section('title')
Projekttagebuch
@stop

@section('navbar-elements')
@include('layouts.intern-navbar-elements')
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
                <p><a class="btn btn-primary btn-lg btn-block create-diaryentry-button centered" href="/intern/projectdiary/create">Neuen Eintrag erstellen <span class="glyphicon glyphicon-plus icon-left-padding" aria-hidden="true"></span></a></p>
                <h1 class="centered">Gesamtübersicht</h1>
                <hr>
                <table class="table table-hover projectdiary-overview-table centered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="text-centered">Gesamtstunden</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Michael Ester</td>
                            <td class="text-centered">13,5</td>
                        </tr>
                        <tr>
                            <td>Michael Ester</td>
                            <td class="text-centered">13,5</td>
                        </tr>
                        <tr>
                            <td>Michael Ester</td>
                            <td class="text-centered">13,5</td>
                        </tr>
                        <tr>
                            <td>Michael Ester</td>
                            <td class="text-centered">13,5</td>
                        </tr>
                    </tbody>
                </table>
                <h1 class="centered">Einzelübersicht</h1>
                <hr>
                <select class="form-control select-member centered">
                    <option>Michael Ester</option>
                    <option>Michael Ester</option>
                    <option>Michael Ester</option>
                    <option>Michael Ester</option>
                    <option>Michael Ester</option>
                </select>
                <table class="table table-hover projectdiary-overview-table centered margin-bottom-50">
                    <thead>
                        <tr>
                            <th>Datum</th>
                            <th>Stunden</th>
                            <th>Beschreibung</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>23.04.2016</td>
                            <td>1,5</td>
                            <td>Website entwickelt</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</div>
@stop

