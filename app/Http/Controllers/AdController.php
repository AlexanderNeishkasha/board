<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Ad;
use Illuminate\Support\Facades\Auth;


class AdController extends Controller
{
    public function edit($id = null) {
        if (isset($id) && $ad = Ad::find($id)) return view('edit', ['ad' => $ad]);
        return view('edit');
    }

    public function show($id) {
        if (!$ad = Ad::find($id)) {
            return abort(404);
        }
        return view('ad', ['ad' => $ad]);
    }

    public function add(Request $request) {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:500'
        ]);
        $ad = Ad::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'author_name' => Auth::user()->name
        ]);
        return redirect("/{$ad->id}");
    }

    public function remove($id) {
        Ad::destroy($id);
        return redirect()->intended('/');
    }

    public function editad(Request $request, $id) {
        $ad = Ad::find($id);
        $ad->title = $request->input('title');
        $ad->description = $request->input('description');
        $ad->updated_at = time();
        $ad->save();
        return redirect("/{$ad->id}");
    }
}
