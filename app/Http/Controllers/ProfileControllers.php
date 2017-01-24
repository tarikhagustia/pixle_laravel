<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ProfileControllers extends Controller
{
    public function simpan_data(Request $request)
    {
      $id = $request->id;
      $data = User::find($id);
      $data->name = $request->name;
      $data->email = $request->email;
      if ($request->password != null) {
        $data->password = bcrypt($request->password);
      }
      $data->save();
      return redirect()->back();
    }
    public function simpan_foto(Request $request)
    {
      // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
      $user = User::find(Auth::user()->id);
      $file       = $request->file('gambar');
      $fileName   = $file->getClientOriginalName();
      $request->file('gambar')->move("images/", $fileName);
      $user->images = "images/".$fileName;
      $user->save();
      return redirect()->back();
    }
}
