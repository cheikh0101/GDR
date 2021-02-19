<?php

namespace App\Http\Controllers;

use App\Models\reclamation;
use Illuminate\Http\Request;
use App\Models\administration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class administrationController extends Controller
{
    public function return_administration()
    {
        return view('loginAdministration');
    }

    public function info_administration(Request $request)
    {
        $administration = administration::whereEmail($request->email)->wherePassword($request->password)->first();
        $reclamations = DB::select('select * from etudiants as e, reclamations as r where e.id = r.user_id');
        $reclamations3 = DB::table('etudiants')
            ->select('prenom', 'nom', 'num_dossier', 'matiere', 'semestre', 'typeEvaluation', 'commentaire', 'professeur')
            ->join('reclamations', 'reclamations.user_id', '=', 'etudiants.id')
            ->where('semestre', '=', 'semestre 3')->get();
        $reclamations4 = DB::table('etudiants')
            ->select('prenom', 'nom', 'num_dossier', 'matiere', 'semestre', 'typeEvaluation', 'commentaire', 'professeur')
            ->join('reclamations', 'reclamations.user_id', '=', 'etudiants.id')
            ->where('semestre', '=', 'semestre 4')->get();

        $reclamationthiam = DB::table('reclamations')
            ->select('matiere', 'semestre', 'typeEvaluation', 'commentaire', 'professeur')
            ->where('professeur', '=', 'mouhamadou thiam')->get();

        $reclamationpapadiop = DB::table('etudiants')
            ->select('prenom', 'nom', 'num_dossier', 'matiere', 'semestre', 'typeEvaluation', 'commentaire', 'professeur')
            ->join('reclamations', 'reclamations.user_id', '=', 'etudiants.id')
            ->where('professeur', '=', 'papa diop')->get();

        $reclamationcheikhsarr = DB::table('etudiants')
            ->select('prenom', 'nom', 'num_dossier', 'matiere', 'semestre', 'typeEvaluation', 'commentaire', 'professeur')
            ->join('reclamations', 'reclamations.user_id', '=', 'etudiants.id')
            ->where('professeur', '=', 'cheikh sarr')->get();

        if ($administration == null) {
            return view('loginAdministration')->with(['message' => 'login ou mot de passe incorrecte']);
        } else {
            $i = 0;
            return view('administration', compact('i', 'reclamationthiam', 'reclamationpapadiop', 'reclamationcheikhsarr'))->with(['administration' => $administration, 'reclamations' => $reclamations, 'reclamations3' => $reclamations3, 'reclamations4' => $reclamations4]);
        }
    }

    public function imprimer()
    {
        $reclamations = DB::select('select * from etudiants as e, reclamations as r where e.id = r.user_id');
        $i = 0;
        return view('imprimer', compact('i'))->with(['reclamations' => $reclamations]);
    }

    public function imprimer3()
    {
        $reclamations = DB::table('etudiants')
            ->select('prenom', 'nom', 'num_dossier', 'matiere', 'semestre', 'typeEvaluation', 'commentaire')
            ->join('reclamations', 'reclamations.user_id', '=', 'etudiants.id')
            ->where('semestre', '=', 'semestre 3')->get();
        $i = 0;
        return view('imprimer3', compact('i'))->with(['reclamations' => $reclamations]);
    }

    public function imprimer4()
    {
        $reclamations = DB::table('etudiants')
            ->select('prenom', 'nom', 'num_dossier', 'matiere', 'semestre', 'typeEvaluation', 'commentaire')
            ->join('reclamations', 'reclamations.user_id', '=', 'etudiants.id')
            ->where('semestre', '=', 'semestre 4')->get();

        $i = 0;
        return view('imprimer4', compact('i'))->with(['reclamations' => $reclamations]);
    }

    public function deconnecter(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/loginAdministration');
    }
}
