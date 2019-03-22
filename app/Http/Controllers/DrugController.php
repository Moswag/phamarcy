<?php

namespace App\Http\Controllers;

use App\Drug;
use App\Stock;
use Illuminate\Http\Request;

class DrugController extends Controller
{

    public function addDrug(){
        return view('drug.add_drug');
    }

    public function saveDrug(Request $request){
        $drug=new Drug();
        $drug->drug_code=$request->drug_code;
        $drug->name=$request->name;
        $drug->direction_of_use=$request->direction_of_use;
        if($drug->save()){
            $stock=Stock::where('drug_code',$request->drug_code)->exists();
            if($stock){
                return redirect()->route('drugs')->with('message','Drug successfully added')->with('drugs_active',true);
            }
            else{
                $drugStock=new Stock();
                $drugStock->drug_code=$request->drug_code;
                $drugStock->quantity=0;
                if($drugStock->save()){
                    return redirect()->route('drugs')->with('message','Drug successfully added')->with('drugs_active',true);
                }
                else{
                    return redirect()->route('drugs')->with('error','Something went wrong when initialising stock')->with('drugs_active',true);
                }
            }

        }
    }

    public function viewDrugs(){
        $drugs=Drug::all();
        return view('drug.drugs',compact('drugs'))->with('drugs_active',true);
    }


    public function editDrug($id){
        $drug=Drug::find($id);
        return view('drug.edit_drug',compact('drug'));

    }

    public function getDeleteDrug($id){
        return view('drug.delete_drug',compact('id'));
    }

    public function deleteDrug($id){
        $drug=Drug::find($id)->delete();
        if($drug){
            return redirect()->route('drugs')->with('message','Drug successfully deleted');
        }
        else{
            return redirect()->route('drugs')->with('error','Drug failed to be deleted, contact admin');
        }

    }

    public function updateDrug(Request $request){
        $drug=Drug::where('id',$request->id)->update([
           'name'=>$request->name,
            'direction_of_use'=>$request->direction_of_use
        ]);

        if($drug){
            return redirect()->route('drugs')->with('message','Drug successfully updated');
        }
        else{
            return redirect()->route('drugs')->with('error','Drug failed to update');
        }
    }
    //
}
