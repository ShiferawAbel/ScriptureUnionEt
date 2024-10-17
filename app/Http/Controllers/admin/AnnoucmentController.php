<?php

namespace App\Http\Controllers\admin;

use App\Models\Annoucment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AnnoucmentController extends Controller
{
    public function index() {
        $annoucments = Annoucment::orderBy('created_at', 'asc')->get();
        return view('admin.annoucments.index', compact('annoucments'));
    }
    public function create() 
    {
        return view('admin.annoucments.create');
    } 
    public function store(Request $request) 
    {
        $data = $request->validate([
            'headline' => 'required',
            'body' => 'required',
            'thumbnail' => 'required',
        ]);
        if ($request->file('thumbnail')) {
            $file = $request->file('thumbnail');
            $full_path = $file->store('annoucemnts', 'public');
        }
        $annoucment = Annoucment::create($data);
        $annoucment['thumbnail'] = $full_path;
        $annoucment->save();
        return redirect(route('admin.annoucemnts.show', $annoucment));
    }

    public function show(Annoucment $annoucment)
    {
        return view('admin.annoucments.show', compact('annoucment'));
    }

    public function edit(Annoucment $annoucment)
    {
        return view('admin.annoucments.edit', compact('annoucment'));
    }

    public function update(Request $request, Annoucment $annoucment)
    {
        $data = $request->validate([
            'headline' => 'required',
            'body' => 'required',
            'thumbnail' => 'image',
        ]);
        $annoucment->update($request->except('thumbnail'));
        if ($request->file('thumbnail')) {
            File::delete(public_path('storage/'.$annoucment->thumbnail));
            $file = $request->file('thumbnail');
            $full_path = $file->store('annoucments', 'public');
            $annoucment['thumbnail'] = $full_path;
        }
        $annoucment->save();
        return redirect(route('admin.annoucments.show', $annoucment));
    }
    
    public function destroy(Annoucment $annoucment)
    {
        File::delete(public_path('storage/'.$annoucment->thumbnail));
        $annoucment->delete();
        return redirect(route('admin.annoucments.index'));
    }
}
