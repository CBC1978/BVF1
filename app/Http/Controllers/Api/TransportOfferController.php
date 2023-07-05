<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransportOffer\TransportOfferFormRequest;
use App\Models\TransportOffer;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class TransportOfferController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = TransportOffer::query();
            $perPage = 10;
            $page = $request->input('page', 1);
            $search = $request->input('search');

            if ($search) {
                $query->whereRaw("price LIKE '%" . $search . "%'")
                    ->orWhereRaw("status LIKE '%" . $search . "%'");
            }
            $total = $query->count();

            $result = $query->offset(($page - 1) * $perPage)->limit($perPage)->get();
            return response()->json([
                "status_code" => 200,
                "status_message" => "Toutes les offres de transport sont récupérées",
                "current_page" => $page,
                "last_page" => ceil($total / $perPage),
                "data" => $result,
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function get($id)
    {
        $transportOffer = TransportOffer::find($id);
        if ($transportOffer) {
            return response()->json([
                "status_code" => 200,
                "status_message" => "L'offre de transport existe",
                "data" => $transportOffer,
            ]);
        } else {
            return response()->json([
                "status_code" => 400,
                "status_message" => "Aucune offre de transport ne correspond",
            ]);
        }
    }

    public function store(TransportOfferFormRequest $request)
    {
        try {
            $transportOffer = new TransportOffer();
            $transportOffer->fk_freight_announcement_id = $request->fk_freight_announcement_id;
            $transportOffer->fk_carrier_id = $request->fk_carrier_id;
            $transportOffer->price = $request->price;
            $transportOffer->status = $request->status;

            $transportOffer->save();

            return response()->json([
                "status_code" => 200,
                "status_message" => "L'offre de transport est créée",
                "data" => $transportOffer
            ]);
        } catch (HttpResponseException $e) {
            return response()->json($e);
        }
    }

    public function update(TransportOfferFormRequest $request, TransportOffer $transportOffer)
    {
        try {
            $transportOffer->fk_freight_announcement_id = $request->fk_freight_announcement_id;
            $transportOffer->fk_carrier_id = $request->fk_carrier_id;
            $transportOffer->price = $request->price;
            $transportOffer->status = $request->status;

            $transportOffer->save();
            return response()->json([
                "status_code" => 200,
                "status_message" => "L'offre de transport est modifiée",
                "data" => $transportOffer
            ]);

        } catch (HttpResponseException $e) {
            return response()->json($e);
        }
    }

    public function delete(TransportOffer $transportOffer)
    {
        try {
            $transportOffer->delete();
            return response()->json([
                "status_code" => 200,
                "status_message" => "L'offre de transport est supprimée",
            ]);
        } catch (HttpResponseException $e) {
            return response()->json($e);
        }
    }
}
