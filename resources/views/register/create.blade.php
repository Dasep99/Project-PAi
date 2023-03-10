@extends('templates.default')
@section('content')




            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <h4 class="card-title">Form Tambah User</h4>
                            <form action="{{route('register.store')}}" method="POST" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="name" name="name" required
                                    @error('name') is-invalid @enderror>

                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control "  name="jenis_kelamin" required>
                                        <option >Pilih</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control "  name="jurusan" required>
                                        <option >Pilih</option>
                                        <option >TI A Angkatan 1</option>
                                        <option >TI B Angkatan 1</option>
                                        <option >TI A Angkatan 2</option>
                                        <option >TI B Angkatan 2</option>
                                        <option >TM Angkatan 1</option>
                                        <option >TM Angkatan 2</option>
                                        <option >TE Angkatan 1</option>
                                        <option >TE Angkatan 2</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control "  name="role" required>
                                        <option >Pilih</option>
                                        <option>Admin</option>
                                        <option>User</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Simpan</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->


@endsection
