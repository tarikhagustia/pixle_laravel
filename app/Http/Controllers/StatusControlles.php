<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class StatusControlles extends Controller
{
  public function update(Request $request)
  {
    $data = [
      'user_id' => Auth::user()->id,
      'status' => $request->status
    ];
    DB::table('status_users')->insert($data);
    return redirect('home/');
  }
}
