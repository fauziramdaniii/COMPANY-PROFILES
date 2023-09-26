@extends('layouts.admin2')

@section('content')
    @include('sweetalert::alert')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Post About</h4>
                <form method="POST" class="forms-sample" action="/admin/about/{{ $about->id }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    @error('judul')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul"
                            value="{{ $about->judul }}">
                    </div>

                    @error('sub_judul')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="sub_judul">Sub Judul</label>
                        <input type="text" class="form-control" id="sub_judul" placeholder="Sub Judul" name="sub_judul"
                            value="{{ $about->sub_judul }}">
                    </div>

                    @error('description_1')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="description_1">Deskripsi 1</label>
                        <textarea class="form-control" id="description_1" rows="4" name="description_1">{{ $about->description_1 }}</textarea>
                    </div>

                    @error('description_2')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="description_2">Deskripsi 2</label>
                        <textarea class="form-control" id="description_2" rows="4" name="description_2">{{ $about->description_2 }}</textarea>
                    </div>

                    @error('strength_1')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="strength_1">Kelebihan 1</label>
                        <textarea class="form-control" id="strength_1" rows="4" name="strength_1">{{ $about->strength_1 }}</textarea>
                    </div>

                    @error('strength_2')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="strength_2">Kelebihan 2</label>
                        <textarea class="form-control" id="strength_2" rows="4" name="strength_2">{{ $about->strength_2 }}</textarea>
                    </div>

                    @error('strength_3')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="strength_3">Kelebihan 3</label>
                        <textarea class="form-control" id="strength_3" rows="4" name="strength_3">{{ $about->strength_3 }}</textarea>
                    </div>

                    @error('strength_4')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="strength_4">Kelebihan 4</label>
                        <textarea class="form-control" id="strength_4" rows="4" name="strength_4">{{ $about->strength_4 }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
