<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carlending;

class CarController extends Controller
{
    public function saveCarlending(Request $request){
        if($request->id){
            $new = Carlending::find($request->id);
        }else{
            $new = new Carlending;
        }
        $new->brand = $request->brand;
        $new->model = $request->model;
        $new->year_bought = $request->year_bought;
        $new->status = $request->status;
        $res = $new->save();
        return $res;
    }
    public function getCarlendings(){
        return Carlending::all();
    }
    public function deleteCarlending(Request $request){
        Carlending::where('id', $request->id)->delete();
        return 1;
    }
}
