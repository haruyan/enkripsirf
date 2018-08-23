@extends('layouts.template')

@section('main-panel')
  <div class="row">

    <div class="col-md-7 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title display-2">Selamat Datang</h4>

          <h4 class="card-title">Petunjuk</h4>
              
            <p>
              Silahkan pilih menu <a href="{{ route('task.index') }}">Kelola</a> untuk mengelola soal
              <br>
              Silahkan pilih menu <a href="{{ route('task.create') }}">Tambah data</a> untuk menambahkan soal baru
            </p>                  
        </div>
      </div>
    </div>

  </div>
@endsection