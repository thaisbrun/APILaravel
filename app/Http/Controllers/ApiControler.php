<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Service2;

class ApiControler extends Controller
{
    public function listApi(){
        return response()->json(Service::all());
    }

    public function createApi(Request $request){
        $item = Service2::create($request->all());
        return response()->json($item);
    }

    public function deleteApi($primarykey){
        $service2 = Service2::find($primarykey);
        if($service2){
            $service2->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }
}
