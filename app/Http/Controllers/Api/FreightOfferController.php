<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FreightOffer\FreightOfferFormRequest;
use App\Models\FreightOffer;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class FreightOfferController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = FreightOffer::query();
            $perPage = 10;
            $page = $request->input('page', 1);
            $search = $request->input('search');

            if ($search) {
                $query->whereRaw("price LIKE '%" . $search . "%'")
                    ->orWhereRaw("weight LIKE '%" . $search . "%'")
                    ->orWhereRaw("description LIKE '%" . $search . "%'")
                    ->orWhereRaw("status LIKE '%" . $search . "%'");
            }
            $total = $query->count();

            $result = $query->offset(($page - 1) * $perPage)->limit($perPage)->get();
            return response()->json([
                "status_code" => 200,
                "status_message" => " Toutes les offres de frets sont récupérés",
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
        $freightOffer = FreightOffer::find($id);
        if ($freightOffer) {
            return response()->json([
                "status_code" => 200,
                "status_message" => " L'offre de fret existe",
                "data" => $freightOffer,
            ]);
        } else {
            return response()->json([
                "status_code" => 400,
                "status_message" => " Aucune offre de fret ne correspond",
            ]);
        }
    }

    public function store(FreightOfferFormRequest $request)
    {
        try {
            $freightOffer = new FreightOffer();
            $freightOffer->price = $request->price;
            $freightOffer->weight = $request->weight;
            $freightOffer->description = $request->description;
            $freightOffer->statut = $request->statut;
            $freightOffer->fk_transport_announcement_id = $request->fk_transport_announcement_id;
            $freightOffer->fk_shipper_id = $request->fk_shipper_id;

            $freightOffer->save();

            return response()->json([
                "status_code" => 200,
                "status_message" => " L'offret de fret est créé",
                "data" => $freightOffer
            ]);
        }catch (HttpResponseException $e){
            return response()->json($e);
        }
    }

    public function update(FreightOfferFormRequest $request, FreightOffer $freightOffer)
    {
        try
        {
            $freightOffer->price = $request->price;
            $freightOffer->weight = $request->weight;
            $freightOffer->description = $request->description;
            $freightOffer->statut = $request->statut;
            $freightOffer->fk_transport_announcement_id = $request->fk_transport_announcement_id;
            $freightOffer->fk_shipper_id = $request->fk_shipper_id;

            $freightOffer->save();
            return response()->json([
                "status_code" => 200,
                "status_message" => " L'offret de fret est modifiée",
                "data" => $freightOffer
            ]);

        }catch (HttpResponseException $e){
            return response()->json($e);
        }
    }

    public function delete(FreightOffer $freightOffer)
    {
        try {
            $freightOffer->delete();
            return response()->json([
                "status_code"=>200,
                "status_message"=>" L'offret de fret est supprimé",
            ]);
        }catch (HttpResponseException $e){
            return response()->json($e);
        }
    }
}
