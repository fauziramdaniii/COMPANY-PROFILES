@extends('layouts.admin2')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Master Clients</h4>
                        <a href="clients/create" class="btn mb-1 btn-primary">Tambah Data</a>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="text-center">
                                    <tr>
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
                                    @foreach ($clients as $client)
                                        <tr class="text-center">
                                            <td> {{ $i++ }}</td>
                                            <td> {{ $client->title }}</td>
                                            <td> {{ $client->description }}</td>
                                            <td>
                                                <img src="/image/{{ $client->image }}" alt="" class="img-fluid"
                                                    width="60">
                                            </td>
                                            <td class="text-right">
                                                <a href="{{ route('clients.edit', $client->id) }}"
                                                    class="btn btn-info btn-rounded btn-md">Edit </a>
                                            </td>
                                            <td class="text-left">
                                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-rounded btn-md">Hapus</button>
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
