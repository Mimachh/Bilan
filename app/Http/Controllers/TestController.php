<?php

namespace App\Http\Controllers;

use App\Models\Natalité;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $nombre = Natalité::where('id', 1)->first();
        return view('natalite.index', ['nombre' => $nombre]);
    }
}
