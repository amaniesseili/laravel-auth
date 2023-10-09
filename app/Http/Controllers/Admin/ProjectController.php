<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project; //importo il Model del progetto 

class ProjectController extends Controller
{
    //Funzione per visualizzare l'elenco dei progetti
    public function index(){

        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));

    }
    
    //Funzione per visualizzare i dettagli di un singolo progettpo
    public function show($id){

        $project = Project::findOrFail($id);
        return view('admin.projects.show', compact('project'));
        
    }
    

    //Funzione per visualizzare il modulo di creazione du un nuovo progetto
    public function create(){
        return view('admin.project.create');
        
    }
    

    //Funzione per recuperare e salvare un nuovo progetto nel database
    public function store(Request $request){
        //valida i dati del modulo 
        $data = $request->validate([
            'image'=>"required|max:255",
            'title'=>"required|max:255",
            'description'=>"required",
        ]);

        //crea e salva il progetto 
        $project = Project::create($data);

        //reindirizzo alla pagina dello show
        return redirect()->route('admin.projects.show', $project->id);

        


        
    }
}
