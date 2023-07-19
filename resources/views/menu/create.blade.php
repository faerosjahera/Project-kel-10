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
                <form action="{{route('Menu.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
            <div class="card">

                <div class="card-header">Tambah Menu Baru</div>

                <div class="card-body">
                    <div class = "form-group">
                        <label for="nama_menu">Nama Menu</label>
                        <input type="text" name="nama_menu" class="form-control md-3 @error('nama_menu') is-invalid @enderror">

                        @error('nama_menu')
                        <span class= "invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class = "form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control md-3 @error('harga') is-invalid @enderror"">
                        @error('harga')
                        <span class= "invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class = "form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control md-3 @error('image') is-invalid @enderror"">
                        @error('image')
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