<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css"> <!-- datatables -->
  </head>
  <body>
  <nav>
  <a href="{{ route('index') }}"><h2>Customer Data</h2></a>
  <ul>
    <li><a href="{{ route('index') }}">List</a></li>
    <li><a href="{{ route('add_customer') }}">Add</a></li>
  </ul>
</nav>
  
	@yield('content')
  
  
	@yield('scripts')
  </body>
</html>