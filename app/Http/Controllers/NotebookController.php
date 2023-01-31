<?php

namespace App\Http\Controllers;

use App\Models\Notebook;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Response
    {
        return new Response(Notebook::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): Response
    {
        $request->validate([
            'full_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required'
        ]);
        $notebook = Notebook::create($request->all());
        return new Response($notebook);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Notebook $notebook
     * @return \Illuminate\Http\Response
     */
    public function show(Notebook $notebook): Response
    {
        return new Response($notebook);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Notebook $notebook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notebook $notebook): Response
    {
        $request->validate([
            'full_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required'
        ]);
        $notebook->update($request->all());
        return new Response($notebook, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Notebook $notebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notebook $notebook): Response
    {
        $notebook->delete();
        return new Response(null, 204);
    }
}
