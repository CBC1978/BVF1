<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FreightAnnouncement\FreightAnnouncementFormRequest;
use App\Models\FreightAnnouncement;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class FreightAnnouncementController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = FreightAnnouncement::query();
            $perPage = 10;
            $page = $request->input('page', 1);
            $search = $request->input('search');

            if ($search) {
                $query->whereRaw("origin LIKE '%" . $search . "%'")
                    ->orWhereRaw("destination LIKE '%" . $search . "%'")
                    ->orWhereRaw("description LIKE '%" . $search . "%'")
                    ->orWhereRaw("volume LIKE '%" . $search . "%'");
            }
            $total = $query->count();

            $result = $query->offset(($page - 1) * $perPage)->limit($perPage)->get();
            return response()->json([
                "status_code" => 200,
                "status_message" => "Toutes les annonces de fret sont récupérées",
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
        $freightAnnouncement = FreightAnnouncement::find($id);
        if ($freightAnnouncement) {
            return response()->json([
                "status_code" => 200,
                "status_message" => "L'annonce de fret existe",
                "data" => $freightAnnouncement,
            ]);
        } else {
            return response()->json([
                "status_code" => 400,
                "status_message" => "Aucune annonce de fret ne correspond",
            ]);
        }
    }

    public function store(FreightAnnouncementFormRequest $request)
    {
        try {
            $freightAnnouncement = new FreightAnnouncement();
            $freightAnnouncement->origin = $request->origin;
            $freightAnnouncement->destination = $request->destination;
            $freightAnnouncement->limit_date = $request->limit_date;
            $freightAnnouncement->weight = $request->weight;
            $freightAnnouncement->volume = $request->volume;
            $freightAnnouncement->description = $request->description;
            $freightAnnouncement->fk_shipper_id = $request->fk_shipper_id;

            $freightAnnouncement->save();

            return response()->json([
                "status_code" => 200,
                "status_message" => "L'annonce de fret est créée",
                "data" => $freightAnnouncement
            ]);
        } catch (HttpResponseException $e) {
            return response()->json($e);
        }
    }

    public function update(FreightAnnouncementFormRequest $request, FreightAnnouncement $freightAnnouncement)
    {
        try {
            $freightAnnouncement->origin = $request->origin;
            $freightAnnouncement->destination = $request->destination;
            $freightAnnouncement->limit_date = $request->limit_date;
            $freightAnnouncement->weight = $request->weight;
            $freightAnnouncement->volume = $request->volume;
            $freightAnnouncement->description = $request->description;
            $freightAnnouncement->fk_shipper_id = $request->fk_shipper_id;

            $freightAnnouncement->save();
            return response()->json([
                "status_code" => 200,
                "status_message" => "L'annonce de fret est modifiée",
                "data" => $freightAnnouncement
            ]);

        } catch (HttpResponseException $e) {
            return response()->json($e);
        }
    }

    public function delete(FreightAnnouncement $freightAnnouncement)
    {
        try {
            $freightAnnouncement->delete();
            return response()->json([
                "status_code" => 200,
                "status_message" => "L'annonce de fret est supprimée",
            ]);
        } catch (HttpResponseException $e) {
            return response()->json($e);
        }
    }
}
