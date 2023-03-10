@extends('templates.default')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Total Habits Harian</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>

                            <th>
                                Nama
                            </th>

                            <th>
                                Nama Habits
                            </th>

                            <th>
                                Tanggal
                            </th>
                            <th>
                                Status
                            </th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>{{$users->name}}</td>


                      <td>{{$kategori->nama_kategori}}</td>
                  </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
