<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class randomSurvei extends Controller
{
    public function randomSurvei()
    {

        $linkSurvei = ['https://bit.ly/SurveiSk1Rafif', 'https://bit.ly/SurveiSk2Rafif', 'https://bit.ly/SurveiSk3Rafif' , 'https://bit.ly/SurveiSk4Rafif','https://bit.ly/SurveiSk5Rafif','https://bit.ly/SurveiSk6Rafif', 'https://bit.ly/SurveiSk7Rafif', 'https://bit.ly/SurveiSk8Rafif' ];
        $number= rand(0,7);
        $url= $linkSurvei[$number];
    	// mengirim data pegawai ke view po
    	return Redirect::to($url);

    }

    public function randomSurvei2(Request $request)
    {
        $responden=$request->responden;

        $dbresponden = DB::table('responden')->where('responden',$responden)->get()->first();

        if($dbresponden==null){
            $linkSurvei = ['https://bit.ly/SurveiSk1Rafif',  'https://bit.ly/SurveiSk3Rafif' , 'https://bit.ly/SurveiSk4Rafif' ];
                $number= rand(0,2);
                $url= $linkSurvei[$number];

            DB::table('responden')->insert([
                'responden'=>$responden,
                'link_survei'=>$url

            ]);
        }

        else{
            $url=$dbresponden->link_survei;
        }
        return Redirect::to($url);

    }
}
