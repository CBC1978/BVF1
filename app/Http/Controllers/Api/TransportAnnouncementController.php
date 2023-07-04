<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransportAnnouncememt\TransportAnnouncementFormRequest;
use App\Models\TransportAnnouncement;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class TransportAnnouncementController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = TransportAnnouncement::query();
            $perPage = 10;
            $page = $request->input('page', 1);
            $search = $request->input('search');

            if ($search) {
                $query->whereRaw("origin LIKE '%" . $search . "%'")
                    ->orWhereRaw("destination LIKE '%" . $search . "%'")
                    ->orWhereRaw("description LIKE '%" . $search . "%'")
                    ->orWhereRaw("vehicule_type LIKE '%" . $search . "%'");
            }
            $total = $query->count();

            $result = $query->offset(($page - 1) * $perPage)->limit($perPage)->get();
            return response()->json([
                "status_code" => 200,
                "status_message" => " Toutes les annonces de transport sont récupérés",
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
        $transportAnnouncement = TransportAnnouncement::find($id);
        if ($transportAnnouncement) {
            return response()->json([
                "status_code" => 200,
                "status_message" => " L'annonce de transport existe",
                "data" => $transportAnnouncement,
            ]);
        } else {
            return response()->json([
                "status_code" => 400,
                "status_message" => " Aucune annonce transport ne correspond",
            ]);
        }
    }

    public function store(TransportAnnouncementFormRequest $request)
    {
        try {
            $transportAnnouncement = new TransportAnnouncement();
            $transportAnnouncement->origin = $request->origin;
            $transportAnnouncement->destination = $request->destination;
            $transportAnnouncement->limit_date = $request->limit_date;
            $transportAnnouncement->vehicule_type = $request->vehicule_type;
            $transportAnnouncement->weight = $request->weight;
            $transportAnnouncement->description = $request->description;
            $transportAnnouncement->fk_carrier_id = $request->fk_carrier_id;

            $transportAnnouncement->save();

            return response()->json([
                "status_code" => 200,
                "status_message" => " L'annonce de transport est créé",
                "data" => $transportAnnouncement
            ]);
        }catch (HttpResponseException $e){
            return response()->json($e);
        }
    }

    public function update(TransportAnnouncementFormRequest $request, TransportAnnouncement $transportAnnouncement)
    {
        try
        {
            $transportAnnouncement->origin = $request->origin;
            $transportAnnouncement->destination = $request->destination;
            $transportAnnouncement->limit_date = $request->limit_date;
            $transportAnnouncement->vehicule_type = $request->vehicule_type;
            $transportAnnouncement->weight = $request->weight;
            $transportAnnouncement->description = $request->description;
            $transportAnnouncement->fk_carrier_id = $request->fk_carrier_id;

            $transportAnnouncement->save();
            return response()->json([
                "status_code" => 200,
                "status_message" => " L'annonce de transport est modifiée",
                "data" => $transportAnnouncement
            ]);

        }catch (HttpResponseException $e){
            return response()->json($e);
        }
    }

    public function delete(TransportAnnouncement $transportAnnouncement)
    {
        try {
            $transportAnnouncement->delete();
            return response()->json([
                "status_code"=>200,
                "status_message"=>" L'annonce de transport est supprimé",
            ]);
        }catch (HttpResponseException $e){
            return response()->json($e);
        }
    }
}
