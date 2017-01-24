<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class sendEmail extends Controller
{
    //
    public function send(Request $request)
    {
      // dd($request->nama_anda);
      $data = [
        'email_name' => $request->nama_anda,
        'email_to' => $request->email_anda,
        'email_text' => $request->catatan
      ];
      DB::table('new_table')->insert($data);
      //  $users = DB::select('select * from new_table');
      //  var_dump($users);
    }
}
