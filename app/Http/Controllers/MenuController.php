<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $menus = Menu::latest()->get();
     return view('menu.index', compact('menus'));
    }
    public function create()
    {
        return view('menu.create');
    }
    public function store(Request $request)
    {
     Menu::create([
        'nama_menu' => $request->get('nama_menu')
     ]);
     return redirect()->back()->with('message','Menu berhasil di tambahkan');

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

