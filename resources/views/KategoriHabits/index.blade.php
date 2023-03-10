@extends('templates.default')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Kategori Habit</h4>
                <p class="card-description">
                    <a href="{{route('KategoriHabits.create')}}"class="btn btn-primary btn-sm ml-auto"> Tambah Data</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Habit</th>
                            <th>Deadline</th>
                            <th> Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($kategori as $index => $data)
                            <tr>

                                <td>{{ $index + $kategori->firstItem() }}</td>
                                <td>{{ $data->nama_kategori }}</td>
                                <td><label class="badge badge-danger">{{$data->deadline}}</label></td>
                                <td>
                                    <div class="form-button-action">
                                        <a href="{{route('KategoriHabits.edit', $data->id)}}"
                                           class="btn btn-warning editbtn btn-sm ml-auto">
                                            Edit
                                        </a>
                                        <form action="{{route('KategoriHabits.destroy', $data->id)}}" method="POST"
                                              class=" d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                Hapus
                                            </button>


                                        </form>

                                    </div>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Data Masih Kosong</td>
                            </tr>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $kategori->links() }}
            </div>

        </div>
    </div>
@endsection
