<?php

namespace App\Http\Controllers;

use App\Models\Doctore;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DoctoreRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DoctoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $doctores = Doctore::paginate();

        return view('admin.doctores.index', compact('doctores'))
            ->with('i', ($request->input('page', 1) - 1) * $doctores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $doctore = new Doctore();

        return view('doctores.create', compact('doctore'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctoreRequest $request): RedirectResponse
    {
        Doctore::create($request->validated());

        return Redirect::route('doctores.index')
            ->with('success', 'Doctore created successfully.');
    }

    /**
     * Display the specified resource.
     */
   

    public function show(Doctore $doctore){
        return view('admin.doctores.show', compact('doctore'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctore $doctore)
    {
        return view('admin.doctores.edit', compact('doctore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctore $doctore)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
        $doctore->nombre = $request->get('nombre');

        $doctore->save();
        return Redirect::route('doctores.index')
        ->with('success', 'Doctore edited successfully.');
    }

    public function destroy(Doctore $doctore) 
    {
        $doctore->delete();
        return Redirect::route('doctores.index')
            ->with('success', 'Doctore deleted successfully');
    }
}
