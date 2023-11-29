<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller

{

    public function submitForm(Request $request)
    {
    

    // Validation des données du formulaire
    $request->validate([
        'nom' => 'required|string',
        'email' => 'required|email',
        'telephone' => 'required|string',
        'societe' => 'nullable|string',
        'message' => 'nullable|string',
    ]);

    // Création d'une nouvelle instance du modèle Contact et enregistrement des données
    Contact::create([
        'nom' => $request->nom,
        'email' => $request->email,
        'telephone' => $request->telephone,
        'societe' => $request->societe,
        'message' => $request->message,
    ]);

    // Redirection vers la page de confirmation
    return redirect()->route('contact.confirmation');

    }
    public function showConfirmation()
    {
        return view('contact.confirmation');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
