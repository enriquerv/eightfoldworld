@extends('layout.layout-login')

@section('title', $login_title = trans('auth.title.login'))

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
						  {!! Form::open(['route' => 'login', 'method' => 'post', 'id' => 'formValidation', 'class' => 'form-horizontal']) !!}
							  {!! Form::hidden('previous', $previous) !!}
							  <div class="form-group mb-3 form-floating {{ $errors->first('email') ? 'has-error' : '' }}">
									{!! Form::text('email', old('email'), ['id' => 'email', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.enter_email')]) !!}
								  {!! Form::label("email", trans('validation.attributes.email'), ["class"=>"small mb-1"]) !!}
								  <span class="help-block">{{ $errors->first('email', ':message') }}</span>
							  </div>
							  <div class="form-group mb-3 form-floating {{ $errors->first('password') ? 'has-error' : '' }}">
								  {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.enter_password')]) !!}
								  {!! Form::label("password", trans('validation.attributes.password'), ["class"=>"small mb-1"]) !!}
								  <span class="help-block">{{ $errors->first('password', ':message') }}</span>
							  </div>

							  <div class="form-group mb-3 form-row">
								  <div class="col-md-12 text-right">
								  	<div class="d-grid">
									  	{!! Form::submit(trans('auth.title.login'), ['class' => 'btn btn-primary']) !!}
									  </div>
								  </div>
							  </div>
						  {!! Form::close() !!}
					</div>
					<div class="card-footer text-center py-3">
						<p class="m-0 text-center small">
							{{ link_to_route('forgot-password', trans('auth.title.password_recovery_text')) }}
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
