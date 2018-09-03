@extends('layouts.template')

@section('main-panel')
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Ubah Soal</h4>
          
           {!! Form::model($task,array('route'=>['task.update',$task->id],'method'=> 'PUT')) !!}
            {{-- @method('PUT') --}}
            @csrf
                        <div class='form-group'>
                          <label for="pertanyaan">Pertanyaan</label>
                          {!! Form::textarea('pertanyaan',null,['class'=>'form-control', 'placeholder'=>'Masukkan pertanyaan', 'rows'=> '6']) !!}
                        </div>

                        <p class="card-description">
                          Jawaban
                        </p>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-1 col-form-label">A</label>
                              <div class="col-sm-11">
                                {!! Form::text('jawabanA',null,['class'=>'form-control','placeholder'=>'Jawaban A']) !!}
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-1 col-form-label">B</label>
                              <div class="col-sm-11">
                                {!! Form::text('jawabanB',null,['class'=>'form-control','placeholder'=>'Jawaban B']) !!}
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-1 col-form-label">C</label>
                              <div class="col-sm-11">
                                {!! Form::text('jawabanC',null,['class'=>'form-control','placeholder'=>'Jawaban C']) !!}
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-1 col-form-label">D</label>
                              <div class="col-sm-11">
                                {!! Form::text('jawabanD',null,['class'=>'form-control','placeholder'=>'Jawaban D']) !!}
                              </div>
                            </div>
                          </div>
                        </div>

                        <br>

                        <div class="template-demo">
                        <a href="{{ route('task.index') }}" class=""><button type="button" class="btn btn-light btn-md"><i class="mdi mdi-cancel"></i> Batal</button></a>
                        <a href="{{ route('task.index') }}" class=""><button type="submit" class="btn btn-warning btn-md"><i class="mdi mdi-autorenew"></i> Simpan Perubahan</button></a>
                        </div>

                        {{-- <div class='form-group'>
                            {!! Form::button('<i class="mdi mdi-save"></i> Ubah',['type'=>'submit','class'=>'btn btn-success mr-2']) !!}
                        </div> --}}

                    {!! Form::close() !!}


            @if( count( $errors ) > 0 )
                  <ul class='alert alert-danger'>
                      @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
            @endif
        </div>
      </div>
    </div>
  </div>
@endsection