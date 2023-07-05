<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shipper\ShipperEditRequest;
use App\Http\Requests\Shipper\ShipperFormRequest;
use App\Models\Shipper;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Shipper::query();
            $perPage = 10;
            $page = $request->input('page', 1);
            $search = $request->input('search');

            if ($search) {
                $query->whereRaw("company_name LIKE '%" . $search . "%'");
            }
            $total = $query->count();

            $result = $query->offset(($page - 1) * $perPage)->limit($perPage)->get();
            return response()->json([
                "status_code" => 200,
                "status_message" => "Tous leChargeurs sont récupérés",
                "current_page" => $page,
                "last_page" => ceil($total / $perPage),
                "items" => $result,
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function get($id)
    {
        $shipper = Shipper::find($id);
        if ($shipper) {
            return response()->json([
                "status_code" => 200,
                "status_message" => "Chargeur existe",
                "shipper" => $shipper,
            ]);
        } else {
            return response()->json([
                "status_code" => 400,
                "status_message" => "Aucun Chargeur ne correspond",
            ]);
        }
    }

    public function store(ShipperFormRequest $request)
    {
        try {
            $shipper = new Shipper();
            $shipper->fk_user_id = $request->fk_user_id;
            $shipper->company_name = $request->company_name;
            $shipper->address = $request->address;
            $shipper->phone = $request->phone;

            $shipper->save();

            return response()->json([
                "status_code" => 200,
                "status_message" => "Chargeur est créé",
                "data" => $shipper
            ]);
        } catch (HttpResponseException $e) {
            return response()->json($e);
        }
    }

    public function update(ShipperEditRequest $request, $id)
    {
        $shipper = Shipper::find($id);
        try {
            $shipper->fk_user_id = $request->fk_user_id;
            $shipper->company_name = $request->company_name;
            $shipper->address = $request->address;
            $shipper->phone = $request->phone;

            $shipper->save();
            return response()->json([
                "status_code" => 200,
                "status_message" => "Chargeur est modifié",
                "data" => $shipper
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function delete(Shipper $shipper)
    {
        try {
            $shipper->delete();
            return response()->json([
                "status_code" => 200,
                "status_message" => "Chargeur est supprimé",
                "data" => $shipper
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
}
