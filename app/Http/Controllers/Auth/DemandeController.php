<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Conge;

class DemandeController extends Controller{

public function store(Request $request)
{
 if ($request ->ajax()){
     if (Conges::where('conges',($request->id_user))-> exists()){
         return response

        'type_vac' => $request->type_vac,
        'date_debut' => $request->date_debut,
        'date_fin' => $request->date_fin,
        'annee' => $request->annee,
        'adjoint' => $request->adjoint
    ]);

    return redirect('/dashboard');

}}