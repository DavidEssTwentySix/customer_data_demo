@extends('layouts.main')

@section('title', 'Add New Customer')

@section('content')
<h1>Create New Customer Record</h1>

 
<form method="POST" action="{{ route('newRecord') }}">
@include('errors.formerror')		
@csrf 
	<div class="form-new">
	
		<!-- HARD CODED USER -->
		<input name= "user" type="hidden" value=1 />
		
		<label for="company-name">Company Name:</label>
		<input class="input-text" name="company-name" value="{{ old('company-name') }}"  />
		
		<label for="first-name">First Name:</label>
		<input class="input-text" name="first-name" value="{{ old('first-name') }}"  />
		
		<label for="last-name">Last Name:</label>
		<input class="input-text" name="last-name" value="{{ old('last-name') }}"  />
		
		
		<label for="add-ln1">Address Line 1:</label>
		<input class="input-text" name="add-ln1" value="{{ old('add-ln1') }}" />
		
		<label for="add-ln2">Address Line 2(optional):</label>
		<input class="input-text" name="add-ln2" value="{{ old('add-ln2') }}" />
		
		<label for="add-citye">City:</label>
		<input class="input-text" name="add-city" value="{{ old('add-city') }}"  />
		
		<label for="add-country">Country:</label>
		<input class="input-text" name="add-country" value="{{ old('add-country') }}"  />
		
		<label for="add-zip">ZIP/Postal Code:</label>
		<input class="input-text" name="add-zip" value="{{ old('add-zip') }}"  />
		
		<label for="add-phone">Telephone:</label>
		<input class="input-text" name="add-phone" value="{{ old('add-phone') }}"  />
			<div class="frm-buttons">
				<button type="submit" class="add-btn">Add Customer Record</button>
			</div>
			
		
		
		
	</div>
</form>
@endsection
  
