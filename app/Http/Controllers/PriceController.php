<?php

namespace App\Http\Controllers;

use App\Drug;
use App\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{


    public function getPrices(){
        $prices=Price::all();
        return view('prices.prices',compact('prices'));
    }

    public function addPrice(){
        $drugs=Drug::all();
        return view('prices.add_price',compact('drugs'));
    }

    public function savePrice(Request $request){
        $priceExist=Price::where('drug_code',$request->drug_code)->exists();
        if($priceExist){
            return redirect()->route('prices')->with('error','Price already exists, please update it if thats what you wish for');
        }
        else{
            $price=new Price();
            $price->drug_code=$request->drug_code;
            $price->price=$request->price;
            if($price->save()){
                return redirect()->route('prices')->with('message','Price successfully added');
            }
            else{
                return redirect()->route('prices')->with('error','Something went wrong while adding price');
            }
        }
    }

    public function editPrice($id){
        $price=Price::find($id);
        return view('prices.edit_price',compact('price'));
    }

    public function updatePrice(Request $request){
        $priceExist=Price::where('id',$request->id)->exists();
        if($priceExist){
            $priceUpdate=Price::where('id',$request->id)->update([
               'price'=>$request->price
            ]);

            if($priceUpdate){
                return redirect()->route('prices')->with('message','Price successfully updated');
            }
            else{
                return redirect()->route('prices')->with('error','Something went wrong while updating price, please contact admin');
            }
        }
    }
}
