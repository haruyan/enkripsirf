@extends('layouts.template')

@section('main-panel')
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Kelola Soal</h5>
          @if(Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
          @elseif(Session::has('destroy'))
            <div class="alert alert-warning">{{ Session::get('destroy') }}</div>
          @endif
          <div class="table-responsive">
            <table class="table center-aligned-table">
              <thead>
                <tr>
                  <th class="border-bottom-0">Soal No</th>
                  <th class="border-bottom-0">Lihat Soal</th>
                  <th class="border-bottom-0">Ubah Soal</th>
                  <th class="border-bottom-0">Hapus Soal</th>
                  <th class="border-bottom-0"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tasks as $index => $task)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td><a href="{{ route('task.show',$task->id) }}" class="btn btn-outline-success btn-md"><i class="mdi mdi-folder-open"></i> Lihat</a></td>
                        <td>
                          <a href="{{ route('task.edit',$task->id) }}" class="btn-block"><button type="button" class="btn btn-outline-primary btn-md"><i class="mdi mdi-pencil"></i> Ubah</button></a>
                          {{-- 
                          <a href="{{ route('task.edit',$task->id) }}" class="btn btn-outline-primary btn-md"><i class="mdi mdi-pencil"></i> Ubah</a> --}}
                        </td>
                        <td>
                          {!!  Form::open(array('route'=>['task.destroy',$task->id],'method'=>'DELETE')) !!}
                              {!! Form::button('<i class="mdi mdi-delete"></i> Delete',['class'=>'btn btn-outline-danger btn-md','type'=>'submit']) !!}
                          {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script type="text/javascript">
    $(()=>{
      if({!! Session::has('message') !!}){
        swal('Berhasil','data telah dienkripsi','success');
      }
    });
  </script>
  <script type="text/javascript">
    $(()=>{
      if({!! Session::has('destroy') !!}){
        swal('Peringatan','data telah dihapus','warning');
      }
    });
  </script>
@endsection