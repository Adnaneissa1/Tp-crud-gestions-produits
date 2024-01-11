<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    private $stagiaires = [
        ['id' => 1, 'nom' => 'adnan', 'prenom' => 'issa', 'class' => 'dev202', 'email' => 'adn@gmail.com'],
        ['id' => 2, 'nom' => 'amjad', 'prenom' => 'boudar', 'class' => 'dev205', 'email' => 'amjd@gmail.com'],
        ['id' => 3, 'nom' => 'abdo', 'prenom' => 'driss', 'class' => 'dev201', 'email' => 'abdo@gmail.com']
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stagiaire.index', ['stagiaires' => $this->stagiaires]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stagiaire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newStagiaire = [
            'id' => count($this->stagiaires) + 1, 
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'class' => $request->input('class'),
            'email' => $request->input('email'),
        ];

        $this->stagiaires[] = $newStagiaire;

        return view('stagiaire.index', ['stagiaires' => $this->stagiaires]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (array_key_exists($id - 1, $this->stagiaires)) {
            $stagiaire = $this->stagiaires[$id - 1];
            return view('stagiaire.show', ['stagiaire' => $stagiaire]);
        } else {
            abort(404); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        if (array_key_exists($id - 1, $this->stagiaires)) {
            $stagiaire = $this->stagiaires[$id - 1];
            return view('stagiaire.edit', ['stagiaire' => $stagiaire]);
        } else {
            abort(404);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        if (array_key_exists($id - 1, $this->stagiaires)) {
            $this->stagiaires[$id - 1]['nom'] = $request->input('nom');
            $this->stagiaires[$id - 1]['prenom'] = $request->input('prenom');
            $this->stagiaires[$id - 1]['class'] = $request->input('class');
            $this->stagiaires[$id - 1]['email'] = $request->input('email');

            return view('stagiaire.index', ['stagiaires' => $this->stagiaires]);
        } else {
            abort(404);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // FormController.php

    public function destroy($id)
    {
        if (array_key_exists($id - 1, $this->stagiaires)) {
            unset($this->stagiaires[$id - 1]);

            $this->stagiaires = array_values($this->stagiaires);

            return view('stagiaire.index', ['stagiaires' => $this->stagiaires]);
        } else {
            abort(404);
        }
    }

}

