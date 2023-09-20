@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/portfolios" class="btn btn-primary">Kembali</a>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form method="POST" action="{{ route('portfolios.update', $portfolio->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    @error('title')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Judul"
                            value="{{ $portfolio->title }}">
                    </div>
                    @error('description')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $portfolio->description }}</textarea>
                    </div>
                    @error('image')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $portfolio->image }}" alt="">
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
