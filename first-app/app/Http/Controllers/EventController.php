<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Events;
use Illuminate\Console\Scheduling\Event;

class EventController extends Controller
{
    public function index(){
        
        $events = Events::all();

        return view('welcome', ['events'=>$events]);
    }

    public function create(){
        return view('events.create');
    }

    public function show($id){
        $event = Events::findOrFail($id);
        return view('events.show', ['event'=>$event]);
    }

    public function store(Request $request){
        $event = new Events;
    
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        // image upload
        if($request->hasFile('image') && $request->file('image')->isValid() ){
            
            $requestImage = $request->image;
            $extension = $requestImage->extension();

            /* montabdo nome único da imagem */
            $imageName = 
                md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                
            /* Salvando foto física no servidor */
            $requestImage->move(public_path('img/events'), $imageName);

            /* Atualizando para a classe o novo nome da imagem */ 
            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
}
