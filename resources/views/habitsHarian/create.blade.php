@extends('templates.default')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Habits Harian</h4>

                <form action="{{route('HabitsHarian.store')}}" method="POST" class="form-inline">
                    @csrf

                 @if($data < $kategori)
                        @for($i = 0; $i < $kategori; $i++)
                            <div>
                                <input type="date" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="tanggal[]" required>



                                    <div class="input-group mb-2 mr-sm-2">
                                        <select name="kategori_habits_id[]" class="form-control" id="inlineFormInputGroupUsername2" required>
                                        @foreach($kategoris as $row)
                                        <option value="{{$row->id}}">{{$row->nama_kategori}}</option>
                                        @endforeach
                                        </select>
                                    </div>




                                <div class="form-check mx-sm-2">
                                    <label class="form-check-label" >
                                        <input type="checkbox" class="form-check-input" name="status[]"  >
                                    </label>
                                </div>
                            </div>
                        @endfor
                        <div>  <button type="submit" class="btn btn-primary mb-2">Simpan</button></div>

                    @else
                        <tr>
                            <td colspan="6" class="text-center">Data Masih Kosong</td>
                        </tr>
                 @endif


                </form>
            </div>
        </div>
    </div>


@endsection

