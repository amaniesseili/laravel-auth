<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
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
        return view('admin.projects.create');
        
    }
    

    //Funzione per recuperare e salvare un nuovo progetto nel database
    public function store( ProjectStoreRequest $request){
        //valida i dati del modulo 
        $data = $request->validated();//validated ritorna i dati gia validati di laravel

        //crea e salva il progetto 
        $project = Project::create($data);

        //reindirizzo alla pagina dello show
        return redirect()->route('admin.projects.show', $project->id);
        
    }

    public function edit($id) {
        $project = project::findOrFail($id);

        return view("admin.projects.edit", compact("project"));
    }


    //recuperare i dati 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image'=> 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            
        ]);

        $project = Project::findOrFail($id);
        $project->image = $validatedData['image'];
        $project->title = $validatedData['title'];
        $project->description = $validatedData['description'];

        

        $project->update($validatedData);

        return redirect()->route('admin.projects.show');
    }


}
