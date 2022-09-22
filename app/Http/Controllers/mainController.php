<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\correctAnswer;
use App\Models\finalMark;
use Auth;

class mainController extends Controller
{


    public function exam(Request $req){

       $correct_mark    = 0;
       $negative_mark   = 0;

        $question1 = correctAnswer::where("answer", $req->single1)->count();

        if ($question1 > 0) {
            $correct_mark += 0.25;
        }else{
            $negative_mark += 0.05;
        }


        $question2 = 0;
        for ($i=0; $i < count($req->multiple) ; $i++) { 
            $question2 += correctAnswer::where("answer", $req->multiple[$i])->count();
        }

        if ($question2 > 0) {
            $correct_mark += 0.25;
        }else{
            $negative_mark += 0.05;
        }




        $option_3_a = correctAnswer::where("answer", $req->option_a)->count();
        $option_3_b = correctAnswer::where("answer", $req->option_b)->count();
        $option_3_c = correctAnswer::where("answer", $req->option_c)->count();

        if ($option_3_a > 0) {
            $correct_mark += 0.25;
        }else{
            $negative_mark += 0.05;
        }

        if ($option_3_b > 0) {
            $correct_mark += 0.25;
        }else{
            $negative_mark += 0.05;
        }

        if ($option_3_c > 0) {
            $correct_mark += 0.25;
        }else{
            $negative_mark += 0.05;
        }

        $final = new finalMark();
        $final->user_id = Auth::id();
        $final->answer = $correct_mark-$negative_mark;
        $final->save();

        return view("leaderboard", compact("correct_mark","negative_mark"));

    }


    public function showResult(){

        $final = finalMark::orderby("answer","DESC")->get();

        return view("showAllresult", compact("final"));
    }

}
