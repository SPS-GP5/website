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
                @if(Auth::user()->role == 2)
                <p><a class="btn btn-primary btn-lg btn-block create-diaryentry-button centered" href="/intern/projectdiary/create">Neuen Eintrag erstellen <span class="glyphicon glyphicon-plus icon-left-padding" aria-hidden="true"></span></a></p>
                @endif
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
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->lastname . ' ' . $user->firstname }}</td>
                            <td class="text-centered">{{ $sum[$user->id] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h1 class="centered">Einzelübersicht</h1>
                <hr>
                <select class="form-control select-member centered" id="userselect" onchange="javascript:loadUserTable()">
                    @foreach($users as $user)
                    <option value="{{ $user->id }}" @if(Auth::user()->id == $user->id) selected @endif>{{$user->lastname . ' ' . $user->firstname }}</option>
                    @endforeach
                </select>
                <table class="table table-hover projectdiary-overview-table centered margin-bottom-50">
                    <thead>
                        <tr>
                            <th>Datum</th>
                            <th>Stunden</th>
                            <th>Beschreibung</th>
                        </tr>
                    </thead>
                    <tbody id="projectdiary-useroverview"></tbody>
                </table>
            </div>
        </div> 
    </div>
</div>

<script type="text/javascript">
function loadUserTable() {
    var selected_wg_id = $("#userselect").find('option').eq($("#userselect")[0].selectedIndex).val();

    $.ajax({
        async: false,
        type: 'GET',
        url: "/intern/projectdiary/getUserEntries/" + selected_wg_id,
        success: function(data) {
            $("#projectdiary-useroverview").html(data);
        }
    });
}

loadUserTable();
</script>
@stop

