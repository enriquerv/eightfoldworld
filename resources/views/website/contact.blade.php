@extends('layout.principal')

@section('title', trans($active.'.title'))

@section('styles')
@endsection

@section('content')
    <div class="container-custom">
        <div class="row mb-3 mb-md-4">
            <div class="col-md-12">
                <h1>{{ trans($active.'.title') }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => 'contact', 'method' => 'post', 'id' => 'formValidation', 'class' => 'form-horizontal']) !!}
                    <div class="form-group mb-3 {{ $errors->first('name') ? 'has-error' : '' }}">
                        <div class="col-md-12">
                                  {!! Form::text('name', old('name'), ['id' => 'name', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.name')]) !!}
                            <span class="help-block">{{ $errors->first('name', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group mb-3 {{ $errors->first('email') ? 'has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('email', old('email'), ['id' => 'email', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.email')]) !!}
                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group mb-3 {{ $errors->first('phone') ? 'has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::text('phone', old('phone'), ['id' => 'phone', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.phone')]) !!}
                            <span class="help-block">{{ $errors->first('phone', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group mb-3 {{ $errors->first('message') ? 'has-error' : '' }}">
                        <div class="col-md-12">
                            {!! Form::textarea('message', old('message'), ['id' => 'message', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.message')]) !!}
                            <span class="help-block">{{ $errors->first('message', ':message') }}</span>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="col-md-12 text-end">
                            {!! Form::submit(trans($active.'.send'), ['class' => 'btn btn-secondary']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('website.formvalidation.contact')
@endsection
