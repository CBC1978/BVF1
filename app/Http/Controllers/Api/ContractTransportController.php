<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContractTransport\ContractTransportFormRequest;
use App\Models\ContractTransport;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class ContractTransportController extends Controller
{
    protected $fillable = [
        'agreement_date',
        'fk_freight_offert_id',
        'fk_transport_offer_id',
    ];

    public function index(Request $request)
    {
        try {
            $query = ContractTransport::query();
            $perPage = 10;
            $page = $request->input('page', 1);
            $search = $request->input('search');

            if ($search) {
                // Ajoutez ici les conditions de recherche si nécessaire
            }

            $total = $query->count();
            $result = $query->offset(($page - 1) * $perPage)->limit($perPage)->get();

            return response()->json([
                "status_code" => 200,
                "status_message" => "Tous les contrats de transport sont récupérés",
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
        $contractTransport = ContractTransport::find($id);
        if ($contractTransport) {
            return response()->json([
                "status_code" => 200,
                "status_message" => "Le contrat de transport existe",
                "data" => $contractTransport,
            ]);
        } else {
            return response()->json([
                "status_code" => 400,
                "status_message" => "Aucun contrat de transport ne correspond",
            ]);
        }
    }

    public function store(ContractTransportFormRequest $request)
    {
        try {
            $contractTransport = new ContractTransport();
            $contractTransport->agreement_date = $request->agreement_date;
            $contractTransport->fk_freight_offert_id = $request->fk_freight_offert_id;
            $contractTransport->fk_transport_offer_id = $request->fk_transport_offer_id;

            $contractTransport->save();

            return response()->json([
                "status_code" => 200,
                "status_message" => "Le contrat de transport est créé",
                "data" => $contractTransport,
            ]);
        } catch (HttpResponseException $e) {
            return response()->json($e);
        }
    }

    public function update(ContractTransportFormRequest $request, ContractTransport $contractTransport)
    {
        try {
            $contractTransport->agreement_date = $request->agreement_date;
            $contractTransport->fk_freight_offert_id = $request->fk_freight_offert_id;
            $contractTransport->fk_transport_offer_id = $request->fk_transport_offer_id;

            $contractTransport->save();

            return response()->json([
                "status_code" => 200,
                "status_message" => "Le contrat de transport est modifié",
                "data" => $contractTransport,
            ]);
        } catch (HttpResponseException $e) {
            return response()->json($e);
        }
    }

    public function delete(ContractTransport $contractTransport)
    {
        try {
            $contractTransport->delete();
            return response()->json([
                "status_code" => 200,
                "status_message" => "Le contrat de transport est supprimé",
            ]);
        } catch (HttpResponseException $e) {
            return response()->json($e);
        }
    }

}
