<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class homepagecontroller extends Controller
{
    public function index(){
        $etudiants = DB::select('select * from etudiants');

        return view('bonsoir', compact('etudiants'));
    }
    public function ajoute_etudiant(Request $request){
   
        $nom = request('nom');
        $prenom = request('prenom');
        $date = request('date');
       // dd("$nom et $prenom");
        DB::insert('insert into etudiants (prenom, nom, date) values (?, ?, ?)', [$prenom, $nom, $date]);


        return redirect('/');       
    }
    public function supprimer_etudiant($id){
        
        DB::delete('delete from etudiants where id = ?', [$id]);
        return redirect('/bonsoir');       


    }
    public function modifier_etudiant($id){
        $etudiants = DB::select("select * from etudiants where id = $id");
       return view('edit_etudiant',compact('etudiants'));
    }
    public function edit(Request $request){
        $nom = request('nom');
        $prenom = request('prenom');
        $date = request('date');
        $id = request('id');

        DB::table('etudiants')
        ->where('id', $id)
        ->update(['nom' => $nom,'prenom' => $prenom,'date' => $date]);


        return redirect('/bonsoir'); 
    }
}