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
				  	{!! Form::open(['route' => 'forgot-password', 'method' => 'post', 'id' => 'formValidation', 'class' => 'form-horizontal']) !!}
				  		<div class="form-group form-floating mb-3 {{ $errors->first('email') ? 'has-error' : '' }}">
			    				{!! Form::text('email', old('email'), ['id' => 'email', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.email')]) !!}
			    				{!! Form::label("email", trans('validation.attributes.email'), ["class"=>"small"]) !!}
			  	        <span class="help-block">{{ $errors->first('email', ':message') }}</span>
				    	</div>
			    		<div class="form-group">
			    			<div class="col-md-12 text-right">
			    				<div class="d-grid">
			    					{!! Form::submit(trans('auth.title.password_recovery'), ['class' => 'btn btn-primary']) !!}
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
