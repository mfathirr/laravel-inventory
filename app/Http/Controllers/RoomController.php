<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $user = User::all();
        return view('ruangan.index', compact('rooms', 'user'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['nomor_ruangan'] = 'Ruangan'.' '.random_int(100, 999);
        Room::create($input);
        return redirect('/room'); 
    }

    public function show($id) {
        $room = Room::find($id);
        return view('ruangan.detail', compact('room'));
    }

    public function edit($id)
    {
        $room = Room::find($id);
        $user = User::all();
        return view('ruangan.edit', compact('room', 'user'));
    }

    public function update(Request $request, $id)
    {
        $room = Room::find($id);
        $input = $request->all();
        $room->update($input);
        return redirect('/room');
    }


}
