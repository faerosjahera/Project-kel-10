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
     $menus = Menu::OrderBy('nama_menu','desc')->get();
     return view('menu.index', compact('menus'));
    }
    public function create()
    {
        return view('menu.create');
    }
    public function store(Request $request)
    {

        $this->validate($request,['nama_menu'=>'required|min:3']);

     Menu::create([
        'nama_menu' => $request->get('nama_menu')]);
     return redirect()->back()->with('message','Menu berhasil di tambahkan');

    }
    public function show(string $id): Response
    {
    dd('show');
    }
    public function edit(string $id)
    {
        $menu= Menu::find($id);
        return view ('menu.edit',compact('menu'));
    }
    public function update(Request $request, string $id)
    {
        $this->validate($request,['nama_menu'=>'required|min:3']);
        
        $menu = Menu::find($id);
        $menu->nama_menu = $request->get('nama_menu');
        $menu->save();
        return redirect()->route('Menu.index')->with('message','Menu berhasil di update');
    }
    public function destroy(string $id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('Menu.index')->with('message','Menu berhasil terhapus');
    }
}

