<?php

namespace App\Http\Controllers;

use App\Drug;
use App\Price;
use App\Sales;
use App\Stock;
use Illuminate\Http\Request;

class SalesController extends Controller
{

    public function getSales(){
        $sales=Sales::all();
        return view('sales.sales',compact('sales'));
    }

    public function getSellPage(){
        $drugs=Drug::all();
        return view('sales.sell_drug',compact('drugs'));
    }

    public function sellDrug(Request $request){
        $priceExists=Price::where('drug_code',$request->drug_code)->exists();
        if($priceExists){
            $getDrugQuantity=Stock::where('drug_code',$request->drug_code)->first();
            if($getDrugQuantity->quantity >$request->quantity) {
                $drug = Drug::where('drug_code', $request->drug_code)->first();
                $price = Price::where('drug_code', $request->drug_code)->first();
                $quantity = $request->quantity;
                return view('sales.confirm_sell_of_drug', compact('drug', 'quantity', 'price'));
            }
            else{
                return redirect()->route('sell')->with('error','Drug is out of stock, please reduce quantity or wait for reorder');
            }

        }
        else{
            return redirect()->route('sell')->with('error','Price is not set for this drug first, contact system admin');
        }

    }

    public function confirmSellOfDrug(Request $request){
        $sales=new Sales();
        $sales->drug_code=$request->drug_code;
        $sales->quantity=$request->quantity;
        $sales->at_price=$request->at_price;
        $sales->total_amount=$request->total_amount;
        $sales->teller_name=auth()->user()->name.' '.auth()->user()->surname;
        if($sales->save()){
            $getDrugQuantity=Stock::where('drug_code',$request->drug_code)->first();
            $updateStock=Stock::where('drug_code',$request->drug_code)->update([
                'quantity'=>$getDrugQuantity->quantity - $request->quantity
            ]);
            if($updateStock){
                return redirect()->route('sell')->with('message','Drug successfully sold');
            }
            else{
                return redirect()->route('sell')->with('error','Something went wrong while updating stock levels, please contact admin');
            }

        }
        else{
            return redirect()->route('sell')->with('error','Something went wrong while recording the sale of the drug');
        }
    }

}
