@extends('layouts.admin2')

@section('content')
    @include('sweetalert::alert')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data testimonial</h4>
                        <a href="testimonials/create" class="btn mb-2 btn-primary">Tambah Data</a>
                        <div class="table-responsive">
                            <table id="example" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($testimonials as $testimonial)
                                        <tr class="text-center">

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
                                            </td>
                                            <td>
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
