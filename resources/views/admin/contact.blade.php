@extends('layouts.admin2')

@section('content')
    @include('sweetalert::alert')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Post Contact</h4>
                <form method="POST" class="forms-sample" action="/admin/contact/{{ $contact->id }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    @error('name')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Nama Perusahaan</label>
                        <input type="text" class="form-control" name="name" placeholder="Judul"
                            value="{{ $contact->name }}">
                    </div>
                    @error('description')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $contact->description }}</textarea>
                    </div>
                    @error('alamat')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                            value="{{ $contact->alamat }}">
                    </div>
                    @error('email')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email"
                            value="{{ $contact->email }}">
                    </div>
                    @error('telepon')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="text" class="form-control" name="telepon" placeholder="Telepon"
                            value="{{ $contact->telepon }}">
                    </div>
                    @error('maps')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Maps Embed</label>
                        <textarea name="maps" id="maps" cols="30" rows="10" class="form-control">{{ $contact->maps }}</textarea>
                    </div>
                    @error('logo')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <img src="/image/{{ $contact->logo }}" alt="">
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="logo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
