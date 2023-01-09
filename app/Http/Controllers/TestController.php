<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Natalité;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class TestController extends Controller
{
    private $counter = 12;
    public $nombre;

    public function index()
    {
        $januaryFirst = 1672527600;
        $today = strtotime(Carbon::now());
        $today_true_hour = $today + 3600;
        
        $number_day = ($today_true_hour - $januaryFirst) / 86400;



        $birth = 0;
        $birth_by_day = 86400;
        $birth_counter = $birth + ($number_day * $birth_by_day);

        


        
        return view('natalite.index', [
            'birth_counter' => $birth_counter,
            'number_day' => $number_day,
        ]);

    }


    public function create()
    {
        return view('natalite.create');
    }


   
        

    

} 
