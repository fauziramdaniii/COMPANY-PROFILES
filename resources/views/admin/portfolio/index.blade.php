@extends('layouts.admin2')

@section('content')
    @include('sweetalert::alert')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data portfolio</h4>
                        <a href="portfolios/create" class="btn mb-2 btn-primary">Tambah Data</a>
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
                                    @foreach ($portfolios as $portfolio)
                                        <tr class="text-center">

                                            <td> {{ $i++ }}</td>
                                            <td> {{ $portfolio->title }}</td>
                                            <td> {{ $portfolio->description }}</td>
                                            <td>
                                                <img src="/image/{{ $portfolio->image }}" alt="" class="img-fluid"
                                                    width="60">
                                            </td>
                                            <td>
                                                <a href="{{ route('portfolios.edit', $portfolio->id) }}"
                                                    class="btn mb-1 btn-warning">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('portfolios.destroy', $portfolio->id) }}"
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
