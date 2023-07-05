<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\CommentFormRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Exceptions\HttpResponseException;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Comment::query();
            $perPage = 10;
            $page = $request->input('page', 1);
            $search = $request->input('search');

            if ($search) {
                $query->whereRaw("mark LIKE '%" . $search . "%'")
                      ->orWhereRaw("comment LIKE '%" . $search . "%'");
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
        $comment = Comment::find($id);
        if ($comment) {
            return response()->json([
                "status_code" => 200,
                "status_message" => " Le commentaire existe",
                "data" => $comment,
            ]);
        } else {
            return response()->json([
                "status_code" => 400,
                "status_message" => " Aucun commentaire ne correspond",
            ]);
        }
    }

    public function store(CommentFormRequest $request)
    {
        try {
            $comment = new Comment();
            $comment->mark = $request->mark;
            $comment->comment = $request->comment;
            $comment->fk_contract_transport_id = $request->fk_contract_transport_id;

            $comment->save();

            return response()->json([
                "status_code" => 200,
                "status_message" => " Le commentaire est crée",
                "data" => $comment
            ]);
        }catch (HttpResponseException $e){
            return response()->json($e);
        }
    }

    public function update(CommentFormRequest $request, Comment $comment)
    {
        try
        {
            $comment->mark = $request->mark;
            $comment->comment = $request->comment;
            $comment->fk_contract_transport_id = $request->fk_contract_transport_id;

            $comment->save();
            return response()->json([
                "status_code" => 200,
                "status_message" => " Le commentaire est modifiée",
                "data" => $comment
            ]);

        }catch (HttpResponseException $e){
            return response()->json($e);
        }
    }

    public function delete(Comment $comment)
    {
        try {
            $comment->delete();
            return response()->json([
                "status_code"=>200,
                "status_message"=>"Le commentaire est supprimé",
            ]);
        }catch (HttpResponseException $e){
            return response()->json($e);
        }
    }
}
