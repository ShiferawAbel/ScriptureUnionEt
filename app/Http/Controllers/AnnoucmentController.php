<?php

namespace App\Http\Controllers;

use App\Models\Annoucment;
use Illuminate\Http\Request;

class AnnoucmentController extends Controller
{
    public function index() {
        $annoucments = Annoucment::all();
        return view('annoucments.index', compact('annoucments'));
    }
    
    public function create() {
        return view('annoucments.create');
    }
        
    public function show(Annoucment $annoucment) 
    {
        return view('annoucments.show', compact('annoucment'));
    }
}
