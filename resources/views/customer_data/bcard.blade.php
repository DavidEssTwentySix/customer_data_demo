@extends('layouts.main')

@section('title', 'Customer Details')

@section('content')
<h1>{{ $customer->str_fname ." ". $customer->str_lname }} </h1>

<div class="card-body">
	<div class="card-segment card-address">
		<ul>
			<li>{{ $customer->str_cname }} </li>
			<li>{{ $customer->str_addr1 }}</li>
			<li>{{ $customer->str_addr2 }}</li>
			<li>{{ $customer->str_city  }}</li>
			<li>{{ $customer->str_country }}</li>
			<li>{{ $customer->str_pcode }}</li>
			<li>{{ $customer->str_telephone }}</li>
		</ul>
	</div>
	<div class="card-segment card-map">
		<iframe
		  width="500"
		  height="300"
		  referrerpolicy="no-referrer-when-downgrade"
		  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBV8b3JCsVRuwnggQxM3HswwOR4xCEmZvU&q={{ str_replace(' ', '', $customer->str_pcode) }}"
		  allowfullscreen>
		</iframe>
	</div>
</div><!-- eo card body -->






@endsection