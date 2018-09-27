@extends('layouts.template')

@section('main-panel')
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Soal</h4>
          <form class="form-sample">
              <div class="form-group">
                <label for="exampleInputEmail1">Pertanyaan</label>
                <blockquote class="blockquote">
                  <p class="mb-0">{{ $task ->pertanyaan }}</p>
                </blockquote>
              </div>
            <p class="card-description">
              Jawaban
            </p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">A</label>
                  <div class="col-sm-11">
                    <blockquote class="blockquote">
                      <p class="mb-0">{{ $task ->jawabanA }}</p>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">B</label>
                  <div class="col-sm-11">
                    <blockquote class="blockquote">
                      <p class="mb-0">{{ $task ->jawabanB }}</p>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">C</label>
                  <div class="col-sm-11">
                    <blockquote class="blockquote">
                      <p class="mb-0">{{ $task ->jawabanC }}</p>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-1 col-form-label">D</label>
                  <div class="col-sm-11">
                    <blockquote class="blockquote">
                      <p class="mb-0">{{ $task ->jawabanD }}</p>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>

            <br>
            {{-- <button type="submit" class="btn btn-success mr-2">Ubah</button> --}}
            <div class="template-demo">
            <a href="{{ url()->previous() }}" class=""><button type="button" class="btn btn-light btn-md"><i class="mdi mdi-keyboard-return"></i> Kembali</button></a>
            <a href="{{ route('task.edit',$task->id) }}" class=""><button type="button" class="btn btn-primary btn-md"><i class="mdi mdi-pencil"></i> Ubah</button></a>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script type="text/javascript">
    $(()=>{
      swal('Berhasil','data telah dideskripsi','success');
    });
  </script>
@endsection