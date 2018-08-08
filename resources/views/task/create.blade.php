@extends('layouts.template')



@section('title')
    Create - Admin
@endsection

@section('top-side menu')
    <ul class="breadcrumb d-flex justify-content-end">
        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
        <li class="breadcrumb-item">

            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
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

@section('content')
  <div class="container">

    <section class="bar pb-0">
      <div class="row">
        <div class="col-md-12">
          <div class="heading">
            <h3>Buat Soal</h3>
          </div>
        </div>
      </div>
      
      <section class="bar pt-0">
      <div class="row">
        
        <div class="col-md-8 mx-auto">
            {!! Form::open(array('route'=>'task.store')) !!}
            @csrf
                        <div class='form-group'>
                            {!! Form::label('title','Enter Title') !!}
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>

                        <div class='form-group'>
                            {!! Form::label('body','Enter Body') !!}
                            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
                        </div>

                        <div class='form-group'>
                            {!! Form::button('<i class="fa fa-save"></i> Create',['type'=>'submit','class'=>'btn btn-pprimary']) !!}
                        </div>
                    {!! Form::close() !!}


            @if( count( $errors ) > 0 )
                  <ul class='alert alert-danger'>
                      @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
            @endif
      </div>
    </section>
      
    </section>
    
  </div>
@endsection
