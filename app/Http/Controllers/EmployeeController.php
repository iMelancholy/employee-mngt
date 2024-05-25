<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employ.index');
    } 

    public function store(Request $request)
    {
        // $firstname = $request->input('firstname');
        // $lastname = $request->input('lastname');
        // $middlename = $request->input('middlename');
        // $address = $request->input('address');
        // $country = $request->input('country');
        // $city = $request->input('city');
        // $zip = $request->input('zip');
        // $age = $request->input('age');
        // $birthday = $request->input('birthday');
        // $hired_date = $request->input('hired_date');
        // $department = $request->input('department');

        // $data = array('firstname'=>$firstname);
        // $data = array('lastname'=>$lastname);
        // $data = array('middlename'=>$middlename);
        // $data = array('address'=>$address);
        // $data = array('country'=>$country);
        // $data = array('city'=>$city);
        // $data = array('zip'=>$zip);
        // $data = array('age'=>$age);
        // $data = array('birthday'=>$birthday);
        // $data = array('hired_date'=>$hired_date);
        // $data = array('department'=>$department);

        // DB::table('employee_tbl')->insert($data);

        // echo "Record inserted successfully.<br/>";
        // echo '<a href = "/insert">Click Here</a> to go back.';

        // $request->validate([
        //     'firstname' => 'required|max:255|string',
        //     'lastname' => 'required|max:255|string',
        //     'middlename' => 'required|max:255|string',
        //     'phone' => 'required|max:255',
        //     'address' => 'required|max:255|string',
        //     'city' => 'required|max:255|string',
        //     'zip' => 'required|max:255',
        //     'age' => 'required|max:255',
        //     'birthday' => 'required',
        //     'hired_date' => 'required',
        //     'department' => 'required|max:255|string',
        // ]);

        // employee::index([
        //     'firstname' => $request->firstname,
        //     'lastname' => $request->lastname,
        //     'middlename' => $request->middlename,
        //     'phone' => $request->phone,
        //     'address' => $request->address,
        //     'country' => $request->country,
        //     'city' => $request->city,
        //     'zip' => $request->zip,
        //     'age' => $request->age,
        //     'birthday' => $request->birthday,
        //     'hired_date' => $request->hired_date,
        //     'department' => $request->department,
        // ]);

        $request->validate([
            'firstname' => 'required|max:255|string',
            'lastname' => 'required|max:255|string',
            'phone' => 'required|max:255',
            'hired_date' => 'required'
        ]);

        employee::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'hired_date' => $request->hired_date
        ]);

        return redirect('employ/index')->with('status','Employee Created');
    }

    public function create()
    {
        return view('employ.create');
    }

}
