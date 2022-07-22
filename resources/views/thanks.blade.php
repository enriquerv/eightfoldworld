@extends('layout.principal')

@section('title')
	{{ $view_title }}
@endsection

@section('styles')
@endsection

@section('content')
	<div class="row">
		<section class="container-custom thanks-page">
			<div class="row h-100 align-items-center">
				<div class="col-md-12 text-center">
					{!! $response !!}

					<div class="row justify-content-center">
						<div class="col-md-3">
							<div class="d-grid">
								<a href="{{ URL::to("/") }}" class="btn btn-secondary">
									<span class="btn-text text-capitalize"><i class="fa fa-arrow-left"></i> Volver</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection

@section('scripts')
@endsection
