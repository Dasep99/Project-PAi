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
                <h4 class="card-title">Data User</h4>
                <p class="card-description">
                    <a href="{{route('register.create')}}"class="btn btn-primary btn-sm ml-auto"> Tambah User</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                            <th> Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($user as $index => $data)
                            <tr>

                                <td>{{ $index + $user->firstItem() }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->jurusan}}</td>
                                <td>
                                    <div class="form-button-action">
                                        <a href=""
                                           class="btn btn-warning editbtn btn-sm ml-auto">
                                            Edit
                                        </a>
                                        <form action="" method="POST"
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
                {{ $user->links() }}
            </div>

        </div>
    </div>
@endsection
