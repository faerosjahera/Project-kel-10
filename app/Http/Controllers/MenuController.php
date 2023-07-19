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
        $menus = Menu::latest()->paginate(1);
        return view('menu.index', compact('menus'));
        }
    public function create()
        {
            return view('menu.create');
        }
    public function store(Request $request)
        {

        $this->validate($request,[
            'nama_menu'=>'required',
            'harga'=>'required|integer',
            'image'=>'required|mimes:png,jpg,jpeg'
                ]);

            $image =$request->file('image');
            $nama_menu = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/image');
            $image->move($destinationPath,$nama_menu);


        Menu::create([
            'nama_menu' => $request->get('nama_menu'),
            'harga'=> $request->get('harga'),
            'image'=> $nama_menu
            ]);
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
            $this->validate($request,[
            'nama_menu'=>'required',
            'harga'=>'required|integer',
            'image'=>'required|mimes:png,jpg,jpeg'
        ]);
            
            $menu = Menu::find($id);
            $nama_menu = $menu->image;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $nama_menu = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/image');
                $image->move($destinationPath,$nama_menu);
            }
            $menu->nama_menu = $request->get('nama_menu');
            $menu->harga = $request->get('harga');
            $menu->image = $nama_menu;
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

