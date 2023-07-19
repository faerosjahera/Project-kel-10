@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        @if(Session::has('message'))
        <div class= "alert alert-success">{{Session::get('message')}}</div>
        @endif
        <div class="card">
        <div class="card-header">All Menu</div>
        <!-- @foreach($menus as $menu)
                <p>{{$menu->nama_menu}}</p>
            @endforeach -->
        <div class="card-body">

                <table class="table">
                <thead class="thead-dark">
                <tr>
                <th scope="col">Image</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Harga</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @if(count($menus)>0)
                @foreach($menus as $key=>$nama_menu)
                <tr>
                    <td><img src="{{asset('image')}}/{{$menu->image}}" width="100"></td>
                    <td>{{$menu->nama_menu}}</td>
                    <td>{{$menu->harga}}</td>
                    <td>
                        <a href="{{route('Menu.edit',[$nama_menu->id_menu])}}"><button class="btn btn-outline-success">Edit</button></a>
                    </td>
                    <td>
                        <form onsubmit="return confirm('Yakin Hapus Menu?')" action="{{route('Menu.destroy',[$nama_menu->id_menu])}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" name="submit" class= "btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <td>
                    Belum ada menu
                </td>
                @endif
            </tbody>
            </table>
            {{ $menus->links() }}
        </div>
    </div>
    </div>
    </div>
</div>
@endsection

