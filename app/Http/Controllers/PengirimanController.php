<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
class PengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
    dd('index');
    }
    public function create(): Response
    {
    dd('create');
    }
    public function store(Request $request): RedirectResponse
    {
    dd('store');
    }
    public function show(string $id): Response
    {
    dd('show');
    }
    public function edit(string $id): Response
    {
    dd('edit');
    }
    public function update(Request $request, string $id): RedirectResponse
    {
    dd('update');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
    dd('store');
    }
}
