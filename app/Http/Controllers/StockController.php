<?php

namespace App\Http\Controllers;

use App\Drug;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function getStock(){
        $stock=Stock::all();
        return view('stock.stock',compact('stock'));
    }

    public function addStock(){
        $drugs=Drug::all();
        return view('stock.add_stock',compact('drugs'));
    }


    public function saveStock(Request $request){
        $stock=Stock::where('drug_code',$request->drug_code)->exists();
        if($stock){
            $currentStock=Stock::where('drug_code',$request->drug_code)->first();
            $totalQuantity=$currentStock->quantity + $request->quantity;
            $updateStock=Stock::where('drug_code',$request->drug_code)->update([
               'quantity'=> $totalQuantity
            ]);

            if($updateStock){
                return redirect()->route('stock')->with('message','Stock successfully added');
            }
            else{
                return redirect()->route('stock')->with('error','Something went wrong while adding stock, please contact admin');
            }

        }
        else{
            return redirect()->route('stock')->with('error','Drug code do not exists');
        }
    }


}
