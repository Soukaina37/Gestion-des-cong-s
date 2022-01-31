<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Http\Response;

class CongeViewController extends Controller {

public function index(){
    $conges = DB::select('select * from conges');
return view('dashboard');
}

public function store(Request $request)
{
    DB::table('conges')->insert([
            'taper' = $request->type_vac;
            'annee' = $request->annee;
            'de'    = $request->date_debut;
           'jusqua' = $request->date_fin;
          'adjoint' = $request->adjoint;
          'id_user' = Auth::user()->id;
        ]);
        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }
            


}
