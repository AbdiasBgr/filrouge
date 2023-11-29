<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Consultation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConsultationRequest;
use App\Http\Requests\UpdateConsultationRequest;

class ConsultationController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'message' => 'required',
        ]);

        // Récupérer l'utilisateur authentifié
        $user = auth()->user();

        // Créer la demande de consultation associée à l'utilisateur
        $consultation = new Consultation([
            'message' => $request->message,
            'nom' => $user->name, // Mettre à jour le champ "nom" avec le nom de l'utilisateur
            'telephone' => $user->telephone, // Mettre à jour le champ "telephone"

        ]);

        $user->consultations()->save($consultation);

        // Ajoutez une redirection ou un message de confirmation ici
        return redirect()->route('dashboard')->with('success', 'Votre demande de consultation a été soumise avec succès.');
    }

    public function showForm()
    {
        return view('pages.consultation');
    }
}
