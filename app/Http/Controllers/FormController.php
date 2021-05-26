<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
class FormController extends Controller
{
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'username' => 'required|min:4|max:50',
            'email' => 'required|min:5|max:50',
            'password' => 'required|min:6|max:20',
        ]);
        $player = new Player();
        $player->username = $request->input('username');
        $player->email = $request->input('email');
        $player->password = $request->input('password');
        $player->save();
        return response()->json([
            "message" => "record created"
        ], 201);
    }

    public function all_players() {
        $players = Player::get()->toJson(JSON_PRETTY_PRINT);
        return response($players, 200);
    }

    public function new_players(Request $request) {
        $player = new Player;
        $player->username = $request->username;
        $player->email = $request->email;
        $player->password = $request->password;
        $player->save();

        return response()->json([
            "message" => "record created"
        ], 201);
    }

    public function get_players($id) {
        if (Player::where('id', $id)->exists()) {
            $player = Player::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($player, 200);
        } else {
            return response()->json([
                "message" => "no players"
            ], 404);
        }
    }


    public function delete_players ($id) {
        if(Player::where('id', $id)->exists()) {
            $player = Player::find($id);
            $player->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "player not found"
            ], 404);
        }
    }

}
