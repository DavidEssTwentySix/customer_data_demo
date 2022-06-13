@extends('layouts.main')


@section('title', 'Customer Records')


@section('content')


<div class="customer-list">
<table id="customers-table">
	<thead>
		<tr>
			<th></th>
			<th>Name</th>
			<th>Company</th>
			<th>City</th>
			<th>Country</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
@foreach($customers as $customer)
	<tr>
	<td>
		<form action="{{ route('displayCustomer', $customer->id ) }}" method="POST">
			@csrf
			<button input="submit">View</button>
		</form>
	</td>
	<td>{{ $customer->str_fname . " " . $customer->str_lname  }} </td>
	<td>{{ $customer->str_cname }} </td>
	<td>{{ $customer->str_city }} </td>
	<td>{{ $customer->str_country }} </td>
	<td>
		<form action="{{ route('deleteCustomer', $customer->id ) }}" method="POST">
			@method('DELETE')
			@csrf
			<button input="submit">Delete</button>
		</form>
	
	</td>
	</tr>
@endforeach
	</tbody>
</table>
</div> <!-- eo customer list -->


@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8">
		   $(document).ready( function () {
			$('#customers-table').DataTable();
			} );;
</script>

@endsection
  
  
  

