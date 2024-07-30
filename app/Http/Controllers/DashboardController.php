<?php

namespace App\Http\Controllers;


use App\Exports\ExcelExport;
use App\Models\Registration;
use App\Models\PaymentHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class DashboardController extends Controller
{
    public $faceRM, $onlineRM, $totRM, $faceLM, $onlineLM, $totLM, $faceTM, $onlineTM, $totTM, $faceNM, $onlineNM, $totNM,$sumFace, $sumOnline, $totalReg;

    public function dashboard(){
        $faceRM = DB::table('registrations')->where('reg_type', 'regFace')->where('membership', 'RM')->count();
        $onlineRM = DB::table('registrations')->where('reg_type', 'regOnline')->where('membership', 'RM')->count();
        $totRM = DB::table('registrations')->where('membership', 'RM')->count();

        $faceLM = DB::table('registrations')->where('reg_type', 'regFace')->where('membership', 'LM')->count();
        $onlineLM = DB::table('registrations')->where('reg_type', 'regOnline')->where('membership', 'LM')->count();
        $totLM = DB::table('registrations')->where('membership', 'LM')->count();

        $faceTM = DB::table('registrations')->where('reg_type', 'regFace')->where('membership', 'TM')->count();
        $onlineTM = DB::table('registrations')->where('reg_type', 'regOnline')->where('membership', 'TM')->count();
        $totTM = DB::table('registrations')->where('membership', 'TM')->count();

        $faceNM = DB::table('registrations')->where('reg_type', 'regFace')->where('membership', 'NON-MEMBER')->count();
        $onlineNM = DB::table('registrations')->where('reg_type', 'regOnline')->where('membership', 'NON-MEMBER')->count();
        $totNM = DB::table('registrations')->where('membership', 'NON-MEMBER')->count();



        $sumFace = DB::table('registrations')->where('reg_type', 'regFace')->count();
        $sumOnline = DB::table('registrations')->where('reg_type', 'regOnline')->count();
        $totalReg = DB::table('registrations')->count();

        return view("user_account.dashboard", compact('sumFace', 'sumOnline', 'totalReg', 
        'faceRM', 'onlineRM', 'totRM',
        'faceLM', 'onlineLM', 'totLM',
        'faceTM', 'onlineTM', 'totTM',
        'faceNM', 'onlineNM', 'totNM',));
    }
    public function viewMemReg (){
        // $reg = Registration::all()->orderBy('id');
        $reg = DB::table('registrations')->orderBy('id', 'DESC')->get();
        
        // dd($reg->toArray());
        return view ("user_account.viewMemReg", ['reg' => $reg]);
    }

    public function exportExcel(){
        // dd("working");
        return Excel::download(new ExcelExport, 'export-excel.xlsx');
    }

    
}