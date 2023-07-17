<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PemesananController extends Controller
{
    public function index(): Response
    {
    dd('index');
    }

    public function create()
    {
        return view('pemesanan.create');
    }

    public function store(Request $request): RedirectResponse
    {
    dd('store');
    }

    // public function show(string $id): Response
    // {
    // dd('show');
    // }

    public function edit(string $id): Response
    {
    dd('edit');
    }

    public function update(Request $request, string $id): RedirectResponse
    {
    dd('update');
    }

    public function destroy(string $id): RedirectResponse
    {
    dd('store');
    }
}
