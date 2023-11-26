<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee(){
        $employees= Employee::paginate(5);
       return view('backend.pages.employee.list',compact('employees'));

    }

    public function form(){
        return view('backend.pages.employee.create');
     }

     public function store(Request $request)
     {
         $request->validate([
             'name'=>'required'

         ]);


         Employee::create([

              'name'=>$request->name,
              'company'=>$request->company_name,
              'email'=>$request->email,
              'phone'=>$request->phone

          ]);

          return redirect()->route('employee')->with('msg','Employee Created successfully.');
     }


     public function edit($id)
     {
         $employees=Employee::find($id);
         return view('backend.pages.employee.edit',compact('employees'));
     }


     public function update(Request $request,$id)
     {
         $request->validate([
             'name'=>'required'

         ]);

         $employees=Employee::find($id);
         $employees->update([

              'name'=>$request->name,
              'company'=>$request->company_name,
              'email'=>$request->email,
              'phone'=>$request->phone

          ]);

          return redirect()->route('employee')->with('msg','Employee Updated successfully.');
     }

     public function delete($id)
     {

        $employees=Employee::find($id);

        $employees->delete();


     return redirect()->route('employee')->with('msg','Employee deleted successfully.');

      }


}
