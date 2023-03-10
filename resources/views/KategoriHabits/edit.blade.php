@extends('templates.default')
@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Edit Kategori Habit</h4>

                <form action="{{ route('KategoriHabits.update', $kategori->id) }}" method="POST" class="forms-sample">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Habit</label>
                        <input type="text" class="form-control" name="nama_kategori" required
                               value="{{ $kategori->nama_kategori }}"
                               @error('kategori')
                               is-invalid
                            @enderror>
                        @error('kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Deadline</label>
                        <input type="date" class="form-control" name="deadline" required
                               value="{{ $kategori->deadline }}"
                               @error('deadline')
                               is-invalid
                            @enderror>
                        @error('deadline')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ route('KategoriHabits.index') }}" class="btn btn-warning">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
