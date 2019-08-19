<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;

class ProductController extends Controller
{

    public function add_product()
    {
        return view('add_product');
    }

    public function save_product(Request $request)
    {
        $Product = new Product();
        $Product->name=$request->name;
        $Product->description=$request->description;
        $Product->created_by=Auth::id();
        $Product->del_flag=0;
        $Product->created_at=\Carbon\Carbon::now();
        $Product->updated_at=null;
        $Product->save();

    } 

    public function check_product_duplicate(Request $request)
    {
        if(Auth::id()!=null)
        {
            if(($request->name!="") && ($request->name!=null))
            {
                $Product=Product::where('name',$request->name)->get();;
                if($Product->isEmpty())
                {
                    return "okay";
                }
                else
                {
                    return $Product;
                }
                //check from db
            }
        }
    }

}
