<?php

namespace App\Http\Controllers;

use id;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company(){
        $companies= Company::paginate(5);
       return view('backend.pages.company.list',compact('companies'));
    }

    public function form(){
        return view('backend.pages.company.create');
     }

     public function store(Request $request)
     {
         $request->validate([
             'name'=>'required'

         ]);


         Company::create([

              'name'=>$request->name,
              'email'=>$request->email,
              'phone'=>$request->phone,
              'total_employee'=>$request->total_employee

          ]);

          return redirect()->route('company')->with('msg','Company Created successfully.');
     }


     public function edit($id)
     {
         $companies=Company::find($id);
         return view('backend.pages.company.edit',compact('companies'));
     }

     public function update(Request $request,$id)
     {
         $request->validate([
             'name'=>'required'

         ]);

         $companies=Company::find($id);
         $companies->update([

              'name'=>$request->name,
              'email'=>$request->email,
              'phone'=>$request->phone,
              'total_employee'=>$request->total_employee

          ]);

          return redirect()->route('company')->with('msg','Company Updated successfully.');
     }


     public function delete($id)
     {

        $companies=Company::find($id);

        $companies->delete();


     return redirect()->route('company')->with('msg','Company deleted successfully.');

      }


}
