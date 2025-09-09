<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventContact extends Controller
{
   public function index() {
        return view('contact.create');
    }
}
