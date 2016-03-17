@extends('layouts.master')

@section('title')
Projekttagebuch
@stop

@section('navbar-elements')
@include('layouts.intern-navbar-elements')
@stop

@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<section class="section-divider textdivider divider3">
	<div class="container">
	    <h1>PROJEKTTAGEBUCH</h1>
	    <hr>
	</div>
</section>
<div class="container">
    <div class="row white" >
        <br>
            <div class="row">
                @if(Auth::user()->role == 2)
					<p>
						<a class="btn btn-primary btn-lg btn-block create-diaryentry-button centered" href="/intern/projectdiary/create">
							Neuen Eintrag erstellen 
							<span class="glyphicon glyphicon-plus icon-left-padding" aria-hidden="true"></span>
						</a>
					</p>
                @endif
			</div>
			<h1 class="centered">Gesamtübersicht</h1>
			<br>
			<table class="table">
				<colgroup>
					<col width="33%"> 
					<col width="66%">
				</colgroup>
				<tr>
					<td>
						<div class="morris-hover" id="firstChart" style="height: 350px;"></div>
					</td>
					<td>
						<table class="table table-hover">
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
					</td>
				</tr>
			</table>
			</div>
			<div class="row">
			<h1 class="centered">Einzelübersicht</h1>
			<hr>		
			<select class="form-control select-member centered" id="userselect" onchange="javascript:loadUserTable()">
				@foreach($husers as $user)
					<option value="{{ $user->id }}" @if(Auth::user()->id == $user->id) selected @endif>{{$user->lastname . ' ' . $user->firstname }}</option>
				@endforeach
			</select>
			<div class="morris-hover" id="secondChart" style="height: 250px;"></div>
			<br><br><br><br>
			<table class="table table-hover projectdiary-overview-table centered margin-bottom-50">
				<thead>
					<tr>
						<th class="text-centered" style="width: 15%">Datum</th>
						<th class="text-centered" style="width: 15%">Stunden</th>
						<th class="text-centered" style="width: 70%">Beschreibung</th>
					</tr>
				</thead>
				<tbody id="projectdiary-useroverview"></tbody>
			</table>
			</div>
    </div>
</div>

<script type="text/javascript">

function loadUserTable() {
    var selected_wg_id = $("#userselect").find('option').eq($("#userselect")[0].selectedIndex).val();

    $.ajax({
        async: true,
        type: 'GET',
        url: "/intern/projectdiary/getUserEntries/" + selected_wg_id,
        success: function(data) {
            $("#projectdiary-useroverview").html(data[0]);
			updateMorris(data[1]);
        }
    });
}

loadUserTable();
 
function updateMorris(data) {

	//console.log(data);
	var arr = [];
	
	$("#secondChart").empty();
	
	for (var i = 0; i < data.length; i++) {
		var date = data[i]["date"];
		var newdate = date.split(".").reverse().join("-");

		arr.push({
			year: newdate,
			value: data[i]["hours"]
		});
	}

	new Morris.Line({
		// ID of the element in which to draw the chart.
		element: 'secondChart',
		// Chart data records -- each entry in this array corresponds to a point on
		// the chart.
		data: arr,
		// The name of the data record attribute that contains x-values.
		xkey: 'year',
		// A list of names of data record attributes that contain y-values.
		ykeys: ['value'],
		// Labels for the ykeys -- will be displayed when you hover over the
		// chart.
		labels: ['Stunden']
	});
}

function temp() {
	var arr = [];

	@foreach($users as $user)
		arr.push({
			label: "{{ $user->lastname }}",
			value: "{{ $sum[$user->id] }}"
		});
	@endforeach

	return arr;
}

new Morris.Donut({
	// ID of the element in which to draw the chart.
	element: 'firstChart',
	// Chart data records -- each entry in this array corresponds to a point on
	// the chart.
	data: temp(),
	// The name of the data record attribute that contains x-values.
	xkey: 'label',
	// A list of names of data record attributes that contain y-values.
	ykeys: ['value'],
	// Labels for the ykeys -- will be displayed when you hover over the
	// chart.
	labels: ['Value']
});

</script>
@stop

