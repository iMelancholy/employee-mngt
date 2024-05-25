<?php

namespace App\Http\Controllers;

use App\Models\employ;
use Illuminate\Http\Request;

class employcontroller extends Controller
{
    public function index()
    {
        $employ = employ::get();
        return view('employ.index', compact('employ'));
    }

    public function create()
    {
        return view('employ.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'phone' => 'required',
            'dob' => 'required'
        ]);

        employ::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'dob' => $request->dob
        ]);

        return redirect('employ')->with('status','Employee Add');
    }

    public function edit(int $id)
    {
        $employ = employ::findOrFail($id);
        // return $employ;
        return view('employ.edit', compact('employ'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'phone' => 'required',
            'dob' => 'required'
        ]);

        employ::findOrFail($id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'dob' => $request->dob
        ]);

        return redirect()->back()->with('status','Employee Update');
    }

    public function destroy(int $id)
    {
        $employ = employ::findOrFail($id);
        $employ->delete();

        return redirect()->back()->with('status','');
    }

    
}
