<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UsersFormRequest;
use App\Models\Users;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Users::query();
            $perPage = 10;
            $page = $request->input('page', 1);
            $search = $request->input('search');

            if ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('first_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('user_phone', 'LIKE', '%' . $search . '%')
                    ->orWhere('email', 'LIKE', '%' . $search . '%')
                    ->orWhere('username', 'LIKE', '%' . $search . '%');
            }
            $total = $query->count();

            $result = $query->offset(($page - 1) * $perPage)->limit($perPage)->get();
            return response()->json([
                "status_code" => 200,
                "status_message" => "Tous les utilisateurs ont été récupérés",
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
        $user = Users::find($id);
        if ($user) {
            return response()->json([
                "status_code" => 200,
                "status_message" => "L'utilisateur existe",
                "data" => $user,
            ]);
        } else {
            return response()->json([
                "status_code" => 400,
                "status_message" => "Aucun utilisateur ne correspond",
            ]);
        }
    }

    public function store(UsersFormRequest $request)
    {
        try {
            $user = new Users();
            $user->name = $request->input('name');
            $user->first_name = $request->input('first_name');
            $user->user_phone = $request->input('user_phone');
            $user->email = $request->input('email');
            $user->username = $request->input('username');
            $user->password = Hash::make($request->input('password'));
            $user->role = $request->input('role');

            $user->save();

            return response()->json([
                "status_code" => 200,
                "status_message" => "L'utilisateur a été créé",
                "data" => $user
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function update(UsersFormRequest $request, Users $user)
    {
        try {
            $user->name = $request->input('name');
            $user->first_name = $request->input('first_name');
            $user->user_phone = $request->input('user_phone');
            $user->email = $request->input('email');
            $user->username = $request->input('username');
            $user->password = Hash::make($request->input('password'));
            $user->role = $request->input('role');

            $user->save();
            return response()->json([
                "status_code" => 200,
                "status_message" => "L'utilisateur a été modifié",
                "data" => $user
            ]);

        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    public function delete(Users $user)
    {
        try {
            $user->delete();
            return response()->json([
                "status_code" => 200,
                "status_message" => "L'utilisateur a été supprimé",
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
}
