@extends('layout.layout-login')

@section('title', trans('auth.title.password_recovery'))

@section('styles')
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="card card-login shadow-lg border-0 rounded-lg mt-5">
          <div class="card-header">
            <a href="{{ URL::to("/") }}">
              <img src="http://placehold.it/200x50.svg?text=BrandLogo" alt="logo" class="img-fluid svg d-block m-auto">
            </a>
          </div>
          <div class="card-body">
            {!! Form::open(['method' => 'post', 'id' => 'formValidation', 'class' => 'form-horizontal']) !!}
              <div class="form-group form-floating mb-3 {{ $errors->first('password') ? 'has-error' : '' }}">
                {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.password')]) !!}
                {!! Form::label("password", trans('validation.attributes.password'), ["class"=>"small"]) !!}
                <span class="help-block">{{ $errors->first('password', ':message') }}</span>
              </div>
              <div class="form-group form-floating mb-3 {{ $errors->first('password_confirm') ? 'has-error' : '' }}">
                {!! Form::password('password_confirm', ['id' => 'password_confirm', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.password_confirm')]) !!}
                {!! Form::label("password_confirm", trans('validation.attributes.password_confirm'), ["class"=>"small"]) !!}
                <span class="help-block">{{ $errors->first('password_confirm', ':message') }}</span>
              </div>
              <div class="form-group">
                <div class="col-sm-12 text-right">
                  <div class="d-grid">
                    {!! Form::submit(trans('auth.title.password_change'), ['class' => 'btn btn-primary']) !!}
                  </div>
                </div>
              </div>
            {!! Form::close() !!}
          </div>
          <div class="card-footer text-center py-3">
            <p class="m-0 text-center small">
              <a href="{{ URL::to("login") }}">
                <i class="fa fa-arrow-left"></i> Volver
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
	@include('auth.formvalidation.login')
@endsection
