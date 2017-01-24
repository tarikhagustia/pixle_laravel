<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class Halaman extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        return view('halaman');
    }
    public function editor()
    {
      return view('editor');
    }
}
