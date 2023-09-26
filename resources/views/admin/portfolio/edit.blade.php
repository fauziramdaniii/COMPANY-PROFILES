@extends('layouts.admin2')

@section('content')
    @include('sweetalert::alert')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Form</h4>
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
                        <label>Gambar</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-danger btn-block" href="/admin/portfolios">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
