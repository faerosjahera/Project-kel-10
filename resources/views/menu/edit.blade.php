@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(Session::has('message'))
                <div class = "alert alert-success">
                    {{ Session::get('message') }}
                </div>
                @endif
                <form action="{{route('Menu.update',[$menu->id_menu])}}" method="post">
                    @csrf
                    {{ method_field('PUT')}}
            <div class="card">
                <div class="card-header">Update Menu</div>

                <div class="card-body">
                    <div class = "form-group">
                        <label for="nama_menu">Menu</label>
                        <input type="text" name="nama_menu" class="form-control" value="{{$menu->nama_menu}}@error('nama_menu') is-invalid @enderror"
                        value= "{{$nama_menu->nama_menu}}">
                        
                        @error('nama_menu')
                        <span class= "invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button class="btn btn-outline-primary mt-3">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection