<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function addDepartment(){
        return view('department.add_department');
    }

    public function saveDepartment(Request $request){
        $department=new Department();
        $department->name=$request->name;
        $department->department_code=$request->dep_code;
        $department->save();
    }

    public function editDepartment($id){
        $deprtment=Department::find($id);
        return view('drug.edit_drug',compact('deprtment'));
    }

    public function updateDepartment(Request $request){
        $department=Department::where('id',$request->id)->update([
            'name'=>$request->name

        ]);
    }

    public function viewDepartment(){
        $departments=Department::all();
        return view('drug.departments',compact('departments'));
    }

    public function deleteDepartment($id){
        $dep=Department::find($id)->delete();
        return redirect()->route('departments')->with('message','Department successfully deleted');
    }
}
