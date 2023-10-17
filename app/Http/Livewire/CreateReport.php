<?php

namespace App\Http\Livewire;

use App\Models\Rapport;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CreateReport extends Component
{
    public $corps;
    public function createReport()
    {
        // Validez et sauvegardez le rapport en base de données
        Http::post('http://127.0.0.1:8000/api/rapports', [
            'corps' => $this->corps,
        ]);

        // Effacez les champs du formulaire après la création
        $this->corps = '';

        // Émettre un message de succès
        session()->flash('message', 'Le rapport a été créé avec succès.');
    }

    public function render()
    {
        return view('livewire.create-report');
    }
}
