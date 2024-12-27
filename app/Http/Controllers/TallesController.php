<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talles = DB::table('guia_talles')->get();
        $parametros =[
            "talles" => $talles
        ];
        return view('guia_talles', $parametros);
    }
}
