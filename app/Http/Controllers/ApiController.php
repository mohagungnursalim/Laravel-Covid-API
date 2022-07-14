<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{


    public function index(Request $request)
    {


        $response = Http::withHeaders([
            'X-RapidAPI-Key'=> '5b4251984amsh0fbcfd02a1103e1p1d2795jsnaacaa5a32f18',
            'X-RapidAPI-Host' => 'covid-19-coronavirus-statistics.p.rapidapi.com'

        ])->get('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/total',[
            "country" => "Indonesia"
        ]);

        $listdata = $response['data'];
      
        // return $listdata;
        return view('welcome',compact('listdata'));
    }

    






    // public function kawalcorona()
    // {
    //     $response = Http::get('https://api.kawalcorona.com/indonesia');
    //     $data = $response->json();
      
    //     foreach ($data as $covid) {
    //         [
    //           'positif' => $covid['positif'], 
    //           'sembuh' => $covid['sembuh'],   
    //           'meninggal' => $covid['meninggal'] 
    //        ];
    //     };

    //     return view('covid', [
    //         'title' => 'Covid-19',
    //         'pos' => $covid['positif'],
    //         'sem' => $covid['sembuh'],
    //         'men' => $covid['meninggal']
    //     ]);
    // }

    
}
