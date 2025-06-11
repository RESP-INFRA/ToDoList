<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
      /**
     * Affiche la liste des taches
     */
    public function index()
    {

        $projets = Projet::all();
        return view('projet.index', compact('projets'));

    }


    /**
     * return le formulaire de creation d'une tache
     */
    public function create()
    {

        return view('projet.create');

    }


    /**
     * Enregistre une nouvelle tache dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'tache'=>'required'
        ]);


        $projet = new Projet([
            'tache' => $request->get('tache')
            
        ]);


        $projet->save();
        return redirect('/')->with('success', 'Tache Ajoutée avec succès');

    }


    /**
     * Affiche les détails d'une tache spécifique
     */

    public function show($id)
    {

        $projet = Projet::findOrFail($id);
        return view('projet.show', compact('projet'));

    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $projet = Projet::findOrFail($id);

        return view('projet.edit', compact('projet'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'tache'=>'required'

        ]);




        $projet = Projet::findOrFail($id);
        $projet->tache = $request->get('tache');
       


        $projet->update();

        return redirect('/')->with('success', 'Tache Modifiée avec succès');

    }




    /**
     * Supprime la tache dans la base de données
     */
    public function destroy($id)
    {

        $projet = Projet::findOrFail($id);
        $projet->delete();

        return redirect('/')->with('success', 'Tache Supprimée avec succès');

    }

}

