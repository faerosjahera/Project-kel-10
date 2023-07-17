@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
        <div class="card-header">Menu</div>
        @foreach($menus as $menu)
                <p>{{$menu->nama_menu}}</p>
            @endforeach
        <div class="card-body">
                <table class="table">
                <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
                @if(count($menus)>0)
                @foreach($menus as $key=>$nama_menu)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$nama_menu->nama_menu}}</td>
                    <td>
                        <a href="{{route('Menu.edit',[$nama_menu->id])}}"><button class="btn btn-outline-success">Edit</button>
                    </a>
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
            </table>
        </div>
    </div>
    </div>
    </div>
</div>
@endsection

