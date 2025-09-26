<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    
    public function index() {

        $search = request('search');

        if($search) {

            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $events = Event::all();
        }        
    
        return view('welcome',['events' => $events, 'search' => $search]);

    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {

        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;

        }

        $user = auth()->user();
        
        if (!$user) {
            return redirect('/login')->with('error', 'Você precisa estar logado para criar um evento!');
        }
        
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');

    }

    public function show($id) {

        $event = Event::findOrFail($id);
        
        $eventOwner = $event->user;
        
        if (!$eventOwner) {
            return redirect('/')->with('error', 'Evento não possui proprietário válido!');
        }

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
        
    }

    public function dashboard() {

        $user = auth()->user();
        
        if (!$user) {
            return redirect('/login')->with('error', 'Você precisa estar logado para acessar o dashboard!');
        }

        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);

    }

}