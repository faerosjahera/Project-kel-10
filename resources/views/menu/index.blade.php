@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
        <div class="card-header">Menu</div>
        <!-- @foreach($menus as $menu)
                <p>{{$menu->nama_menu}}</p>
            @endforeach -->
        <div class="card-body">
                <table class="table">
                <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @if(count($menus)>0)
                @foreach($menus as $key=>$nama_menu)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$nama_menu->nama_menu}}</td>
                    <td>
                        <a href="{{url('Menu/'.$nama_menu.'/edit')}}"><button class="btn btn-outline-success">Edit</button></a>
                    </td>
                    <td>
                        <a href=" "><button class= "btn btn-outline-danger">Delete</button></a>
                    </td>
                </tr>
                @endforeach
                @else
                <td>
                    Tidak ada Menu
                </td>
                @endif
            </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
</div>
@endsection

