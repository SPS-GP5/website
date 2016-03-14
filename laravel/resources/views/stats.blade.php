@extends('layouts.master')

@section('title')
stats
@stop

@section('navbar-elements')
<li><a href="#home" class="smoothScroll">Zur&uuml;ck zur Website</a></li>
@stop

@section('content')
<!-- ==== HEADERWRAP ==== -->
<div id="headerwrap" class="login-headerwrap" id="home" name="home">
	<header class="clearfix">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

		<h1><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></h1>
		<p>Statistiken der Gruppe 05</p>
	</header>       
</div><!-- /headerwrap -->
<div class="container">
	<div class="row white">
	 	<br>
		<h1 class="centered">Gesamt&uuml;bersicht</h1>
		<br>
		<div id="firstChart" style="height: 250px;"></div>
		<br>
	</div><!-- row -->
</div><!-- container -->
<!-- ==== GREYWRAP ==== -->
<div id="greywrap">
	<div class="container">
		<div class="row">
			<br>
			<h2>Einzel&uuml;bersicht</h2>
			<br>
			<div id="secondChart" style="height: 250px;"></div>
			<br>
		</div><!-- row -->
	</div><!-- greywrap -->
</div>


<script>
    
    function temp() {
        var arr = [];

        @foreach ( $statsview as $stat )
            arr.push({
                label: "{{ $stat->lastName }}",
                value: "{{ $stat->timeSpentS }}"
            });
        @endforeach
      
        return arr;
    }

    function temp1() {
        var arr = [];

        @foreach ( $statsview as $stat )
            arr.push({
                year: "{{ $stat->lastName }}",
                value: "{{ $stat->timeSpentS }}"
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

    new Morris.Bar({
        // ID of the element in which to draw the chart.
        element: 'secondChart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: temp1(),
        // The name of the data record attribute that contains x-values.
        xkey: 'year',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Value']
    });
</script>
@stop
