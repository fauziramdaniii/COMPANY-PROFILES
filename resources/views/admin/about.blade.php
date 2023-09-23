@extends('layouts.app')
@section('content')
    <div class="container">
        @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <h4 class="alert-heading">Well done!</h4>
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form method="POST" action="/about/{{ $about->id }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    @error('judul')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul"
                            value="{{ $about->judul }}">
                    </div>

                    @error('sub_judul')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="Sub Judul"
                            value="{{ $about->sub_judul }}">
                    </div>

                    @error('description_1')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi 1</label>
                        <textarea name="description_1" id="description_1" cols="30" rows="10" class="form-control">{{ $about->description_1 }}</textarea>
                    </div>

                    @error('description_2')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi 2</label>
                        <textarea name="description_2" id="description_2" cols="30" rows="10" class="form-control">{{ $about->description_2 }}</textarea>
                    </div>

                    @error('strength_1')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Kelebihan 1</label>
                        <textarea name="strength_1" id="strength_1" cols="30" rows="10" class="form-control">{{ $about->strength_1 }}</textarea>
                    </div>

                    @error('strength_2')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Kelebihan 2</label>
                        <textarea name="strength_2" id="strength_2" cols="30" rows="10" class="form-control">{{ $about->strength_2 }}</textarea>
                    </div>

                    @error('strength_3')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Kelebihan 3</label>
                        <textarea name="strength_3" id="strength_3" cols="30" rows="10" class="form-control">{{ $about->strength_3 }}</textarea>
                    </div>

                    @error('strength_4')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Kelebihan 4</label>
                        <textarea name="strength_4" id="strength_4" cols="30" rows="10" class="form-control">{{ $about->strength_4 }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
