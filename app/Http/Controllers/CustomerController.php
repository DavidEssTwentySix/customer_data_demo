<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
		
		$customers = Customer::all();
		
		return view('customer_data.index', [
			'customers' => $customers
		]);
	}
	
	public function add() {
		return view('customer_data.add');
	}
	
	public function store(){    
		
		$this->validate(request(), [
			'user' => 'required',  //not user visible
			'company-name' => 'required|max:50',
			'first-name' => 'required|max:50',
			'last-name' => 'required|max:50',
			'add-ln1' => 'required|max:50',
			'add-city' => 'required|max:50',
			'add-country' => 'required|max:50',
			'add-zip' => 'required|max:50|postal_code:GB,US,DE,FR',
			'add-phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
			],
			[
			'company-name.required' => 'Please enter a company name',
			'first-name.required' => 'Please enter a first name',
			'last-name.required' => 'Please enter a surname',
			'add-ln1.required' => 'Please enter an address',
			'add-city.required' => 'Please enter the city',
			'add-country.required' => 'Please enter the country',
			'add-zip.required' => 'Please enter the zip/postal code',
			'add-zip.postal_code' => 'Invalid zip/postal code',
			'add-phone.required' => 'Please enter a telephone number',
			'add-phone.regex' => 'Telephone number contains invalid characters',
			'add-phone.min' => 'Telephone number has too few digits',
			
			]);
		
		
		Customer::create([
			'int_user' => request('user'),
			'str_cname' => request('company-name'),
			'str_fname' => request('first-name'),
			'str_lname' => request('last-name'),
			'str_addr1' => request('add-ln1'),
			'str_addr2' => request('add-ln2'),
			'str_city' => request('add-city'),
			'str_country' => request('add-country'),
			'str_pcode' => request('add-zip'),
			'str_telephone' => request('add-phone'),
		]);
		
		return  redirect('/');
	}
	
	public function delete($id){
		
		$customer = Customer::where('id', $id)->first();
		
		$customer->delete();
		
		return  redirect('/');
		
	}
	
	public function display($id){
		
		
		$customer = Customer::where('id', $id)->first();
		
		return view('customer_data.bcard', [
			'customer' => $customer
		]);
		
		
		return 'Display customer' . $id;
		
	}
}
