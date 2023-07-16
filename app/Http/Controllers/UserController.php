<?php

namespace App\Http\Controllers;

use App\Models\User;
//use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('auth.register');
;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name'=>$request->name,
            'telp'=>$request->telp,
            'email'=>$request->email,
            'password'=>$request->password
        ];

        User::create($data);
        return redirect()->to('tes');
    }

    public function show(string $id)
    {
    return 'hi';
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
    dd('edit');
    }

    /**
     * Update the specified resource in storage.
     */
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
