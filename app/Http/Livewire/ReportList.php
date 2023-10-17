<?php

namespace App\Http\Livewire;

use App\Models\Rapport;
use Livewire\Component;

class ReportList extends Component
{
    public $reports = [];

    public function loadReports()
    {
        // Effectuez une requête GET vers l'API Laravel pour récupérer la liste des rapports
        $response = Http::get('http://127.0.0.1:8000/api/rapports');
        
        $this->reports = $response->json();
    }
    
    public function render()
    {
        $reports = $this->reports;
        return view('livewire.report-list', ['reports'=>$reports]);
    }
}
