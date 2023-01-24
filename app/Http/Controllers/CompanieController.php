<?php

namespace App\Http\Controllers;

use App\Models\Compaine;
use Illuminate\Http\Request;

class CompanieController extends Controller
{
    
    public function index()
    {
        $companys  = Compaine::latest()->paginate(5);
        return view('' , compact('companys'));
    }

    public function create()
    {
        return view('');
    }


    public function store(Request $request)
    {
        $request->validate ([
            'name' => 'required',
            'email' => 'required',
            'website' => 'required'

        ]);

        $product  = Compaine::create($request->all());
             return redirect()->route('')
            ->with('success', 'company add successfully');
    }



    public function show($id)
    {
        return view('' , compact('companys'));
    }


    public function edit($id)
    {
        return view('' , compact('companys'));
    }



    public function update(Request $request, Company $company)
    {
     
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'website' => 'required',

        ]);

        $company->update($request->all());
        return redirect()->route('')
            ->with('success', 'company updated successfully');
    }

  
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('')
        ->with('success', 'company deleted successfully');
    }
}
