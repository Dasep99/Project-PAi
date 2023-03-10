@extends('templates.default')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Total Data Habits</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                No
                            </th>

                            <th>
                                Nama
                            </th>

                            <th>
                                Nama Habits
                            </th>

                            <th>
                                Deadline
                            </th>
                            <th>
                                Total
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kategori as $index => $data)
                            <tr>
                                <td>
                             {{$index + $kategori->firstItem()}}
                                </td>
                                <td>
                                    {{$data->user->name}}
                                </td>

                                <td>
                                    {{$data->nama_kategori}}
                                </td>


                                    <td><label class="badge badge-danger">  {{$data->deadline}}</label></td>

                        @endforeach

                        </tbody>
                    </table>

                </div>
                {{ $datahabits->links() }}
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Habits Harian</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                No
                            </th>
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
                        @foreach($datahabits as  $index => $data)
                            <tr>
                                <td>
                                    {{$index + $datahabits->firstItem()}}
                                </td>
                                <td>
                                    {{$data->user->name}}
                                </td>
                                <td>
                                    {{$data->kategori->nama_kategori}}
                                </td>

                                <td><label class="badge badge-info">  {{$data->tanggal}}</label></td>

                                @if($status == 'on')
                                    <td><label class="badge badge-danger">  {{$data->status}}</label></td>
                                @else
                                    <td><label class="badge badge-success">  {{$data->status}}</label></td>
                                @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                                {{ $datahabits->links() }}
            </div>
        </div>
    </div>

@endsection
