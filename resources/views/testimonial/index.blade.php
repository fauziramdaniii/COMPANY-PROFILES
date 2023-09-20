@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <h4 class="alert-heading">Well done!</h4>
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Testimoni</h4>
                        <a href="testimonials/create" class="btn mb-1 btn-primary">Tambah Data</a>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($testimonials as $testimonial)
                                        <tr>

                                            <td> {{ $i++ }}</td>
                                            <td> {{ $testimonial->title }}</td>
                                            <td> {{ $testimonial->description }}</td>
                                            <td>
                                                <img src="/image/{{ $testimonial->image }}" alt="" class="img-fluid"
                                                    width="60">
                                            </td>
                                            <td>
                                                <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                                                    class="btn mb-1 btn-warning">Edit</a>
                                                <form action="{{ route('testimonials.destroy', $testimonial->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn mb-1 btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
