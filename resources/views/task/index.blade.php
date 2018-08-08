@extends('layouts.template')

@section('content')
  <div class="container">

      <section class="bar pb-0">
        <div class="row">
          <div class="col-md-12">
            <div class="heading">
              <h3>Kelola Soal</h3>
            </div>
          </div>
        </div>
        
        <div class="row bar mb-0">
        <div id="customer-orders" class="col-md-12">
          
          <div class="box mt-0 mb-lg-0">
            @if(Session::has('message'))
                  <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th {{-- style="width: 244px;" --}}>Edit</th>
                    <th>Lihat</th>
                    <th>Hapus</th>
                  </tr>
                </thead>
                <tbody>

                        @foreach ($tasks as $index => $task)
                            <tr>
                                <th width="300">{{ $index+1 }}</th>
                                {{-- <td>{{ link_to_route('task.show',$task->title,[$task->id]) }}</td> --}}
                                <td width="300">
                                        <a href="{{ route('task.edit',$task->id) }}" class="btn-block"><button type="button" class="btn btn-template-lightblue"><i class="fa fa-edit"></i> Edit</button></a>
                                </td>
                                <td width="300">
                                <a href="{{ route('task.show',$task->id) }}" class="btn-block"><button type="button" class="btn btn-template-white"><i class="fa fa-edit"></i> View</button></a>
                                {{-- {{ link_to_route('task.show', 'View',[$task->id],['class'=>'btn btn-template-lightblue']) }} --}}
                                </td>
                                <td width="300">
                                    <button type="button" class="btn btn-danger btn-block" on-click="destroy()">Hapus</button>
                                    {{-- {!!  Form::open(array('route'=>['task.destroy',$task->id],'method'=>'DELETE')) !!}
                                        {!! Form::button('<i class="fa fa-trash"></i> Delete',['class'=>'btn btn-template-red','type'=>'submit']) !!}
                                    {!! Form::close() !!} --}}
                                </td>
                            </tr>
                        @endforeach
                  {{-- @foreach($tasks as $index => $task)
                  <tr>
                    <th>{{ $index+1 }}</th>
                    <td>{{ link_to_route('task.edit','Edit',[$task->id],['class'=>'btn btn-template-white']) }}</td>
                    <td><a href="{{ route('task.create') }}" class="btn btn-template-outlined"><i class="fa fa-edit"></i> Edit</a></td>
                  </tr>
                  @endforeach --}}

                  {{-- <tr>
                    <th>1</th>
                    <td><a href="{{ route('manager.create') }}" class="btn btn-template-outlined"><i class="fa fa-edit"></i> Edit</a></td>
                    <td><a href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-template-outlined-black"><i class="fa fa-trash"></i> Hapus</a></td>
                  </tr> --}}
                  
                  
                 
                  <tr>
                    <td></td>
                    <td colspan="3" style="padding-top: 40px;"><a href="{{ route('task.create') }}" class="btn btn-template-main"><i class="fa fa-plus"></i> Tambah Data</a>
                      {{-- {{ HTML::decode(link_to_route('manager.create','<i class="fa fa-plus"></i> Tambah data',null,['class' => 'btn btn-template-white'])) }} --}}
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        {{-- 
        <div class="col-md-5 mt-4 mt-md-0">
          <!-- CUSTOMER MENU -->
          <div class="panel panel-default sidebar-menu">
            <div class="panel-heading">
              <h3 class="h4 panel-title">Pilih Mata Pelajaran</h3>
            </div>
            <div class="panel-body">
              <ul class="nav nav-pills flex-column text-sm">
                <li class="nav-item"><a href="customer-orders.html" class="nav-link active">Matematika</a></li>
                <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">Bahasa Indonesia</a></li>
                <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">Bahasa Inggris</a></li>
                <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">IPA</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> --}}
      </section>
      
  </div>
@endsection


@section('title')
    Manager - Admin
@endsection

@section('top-side menu')
    <ul class="breadcrumb d-flex justify-content-end">
        <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item">

            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i> 
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
                        
        </li>
    </ul>
@endsection

@section('subtitle') {{-- user type --}}
    Admin
@endsection

@section('modal')
  <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <form action="customer-orders.html" method="get">
            <div class="form-group">
              <input id="email_modal" type="text" placeholder="email" class="form-control">
            </div>
            <div class="form-group">
              <input id="password_modal" type="password" placeholder="password" class="form-control">
            </div>
            <p class="text-center">
              <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
            </p>
          </form>
          <p class="text-center text-muted">Not registered yet?</p>
          <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
        </div>
      </div>
    </div>
  </div>
@endsection
