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
        $reclamations3 = reclamation::where('semestre', '=', 'semestre 3')->get();
        $reclamations4 = reclamation::where('semestre', '=', 'semestre 4')->get();
        if ($administration == null) {
            return view('loginAdministration')->with(['message' => 'login ou mot de passe incorrecte']);
        } else {
            return view('administration')->with(['administration' => $administration, 'reclamations' => $reclamations, 'reclamations3' => $reclamations3, 'reclamations4' => $reclamations4]);
        }
    }

    public function imprimer()
    {
        $reclamations = DB::select('select * from etudiants as e, reclamations as r where e.id = r.user_id');
        return view('imprimer')->with(['reclamations' => $reclamations]);
    }

    public function imprimer3()
    {
        $reclamations = reclamation::where('semestre', '=', 'semestre 3')->get();
        return view('imprimer3')->with(['reclamations' => $reclamations]);
    }

    public function imprimer4()
    {
        $reclamations = reclamation::where('semestre', '=', 'semestre 4')->get();
        return view('imprimer4')->with(['reclamations' => $reclamations]);
    }

    public function deconnecter(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/loginAdministration');
    }
}
