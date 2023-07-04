<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarrierEditRequest;
use App\Http\Requests\CarrierFormRequest;
use App\Models\Carrier;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
    public function index(Request $request){
        try {
            $query = Carrier::query();
            $perPage = 10;
            $page = $request->input('page',1);
            $search = $request->input('search');

            if ($search){
                $query->whereRaw("company_name LIKE '%".$search."%'");
            }
            $total = $query->count();

            $result = $query->offset(($page-1)*$perPage)->limit($perPage)->get();
            return response()->json([
                "status_code"=>200,
                "status_message"=>" Tous les transporteurs sont récupérés",
                "current_page"=>$page,
                "last_page"=>ceil($total/$perPage),
                "items"=>$result,
            ]);
        }catch (\Exception $e){
            return response()->json($e);
        }
    }

    public function get($id){

        $carrier = Carrier::find($id);
        if ($carrier){
            return response()->json([
                "status_code"=>200,
                "status_message"=>" Le transporteur existe",
                "carrier"=>$carrier,
            ]);
        }else{
            return response()->json([
                "status_code"=>400,
                "status_message"=>" Aucun transporteur ne correspond",
            ]);
        }
    }

    public function store(CarrierFormRequest $request){

        try {
            $carrier = new Carrier();
            $carrier->company_name = $request->company_name;
            $carrier->address = $request->address;
            $carrier->phone = $request->phone;
            $carrier->fk_user_id = $request->fk_user_id;

            $carrier->save();

            return response()->json([
                "status_code"=>200,
                "status_message"=>" Le transporteur est créé",
                "data"=>$carrier
            ]);
        }catch (HttpResponseException $e){
            return response()->json($e);
        }
    }

    public function update(CarrierEditRequest $request,  $id)
    {
        $carrier = Carrier::find($id);
        try {
            $carrier->company_name = $request->company_name;
            $carrier->address = $request->address;
            $carrier->phone = $request->phone;

            $carrier->save();
            return response()->json([
                "status_code"=>200,
                "status_message"=>" Le transporteur est modifié",
                "data"=>$carrier
            ]);
        }catch (\Exception $e){
            return response()->json($e);
        }
    }

    public function delete(Carrier $carrier)
    {
        try {
            $carrier->delete();
            return response()->json([
                "status_code"=>200,
                "status_message"=>" Le transporteur est supprimé",
                "data"=>$carrier
            ]);
        }catch (\Exception $e){
            return response()->json($e);
        }
    }

}
