<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use App\Models\reclamation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class etudiantController extends Controller
{
    public function return_etudiant()
    {
        return view('loginEtudiant');
    }

    public function info_etudiant(Request $request)
    {
        $etudiants = etudiant::whereEmail($request->email)->wherePassword($request->password)->first();
        if ($etudiants == null) {
            return view('loginEtudiant')->with(['message' => 'login ou mot de passe incorrecte']);
        } else {

            $etudiant = etudiant::where('email', '=', $request->email)->get();

            $password = $request->password;
            $reclamation3 = DB::table('etudiants')
                ->select('prenom', 'nom', 'num_dossier', 'matiere', 'semestre', 'typeEvaluation', 'commentaire')
                ->join('reclamations', 'reclamations.user_id', '=', 'etudiants.id')
                ->where('password', $password)->get();
            $i = 0;
            return view('etudiant', compact('etudiant', 'i', 'reclamation3'));
        }
    }

    public function destroy($id)
    {
        reclamation::destroy($id);
        return view('/loginEtudiant');
    }

    public function saveReclamation(Request $request)
    {
        $request->validate(['semestre' => 'required', 'matiere' => 'required', 'typeEvaluation' => 'required', 'commentaire' => 'required']);

        $savee = new reclamation;
        $savee->semestre = $request->input('semestre');
        $savee->matiere = $request->input('matiere');
        $savee->typeEvaluation = $request->input('typeEvaluation');
        $savee->commentaire = $request->input('commentaire');
        $savee->professeur = $request->input('professeur');
        $savee->user_id = $request->input('user_id');
        $savee->save();

        if ($savee == null) {
            return "rien enregistree";
        } else {
            $etudiant = etudiant::where('email', '=', $request->email)->get();
            $reclamations = reclamation::where('user_id', '=', $request->user_id)->get();
            $i = 0;
            return view('etudiant', compact('i'))->with(['message' => 'Réclamation enregistrée avec succes', 'etudiant' => $etudiant, 'reclamations' => $reclamations]);
        }
    }
}
