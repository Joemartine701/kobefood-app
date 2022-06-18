@extends('admin.home')

@section('body')
<div class="row">
	<div class="col-md-12">
		<!-- MULTI CHARTS -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title" style="padding-left: 45%;">{{ __('Dashboard') }}</h3>
				<div class="right">
					<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
					<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
				</div>
			</div>
			<div class="panel-body">
				<div id="visits-trends-chart" class="ct-chart">
					{{ __('You are logged in!') }}
					<p>Welcome {{ Auth::user()->name }} , feel at home when you view and upload for more details...</p>
				</div>
			</div>
		</div>
		<!-- END MULTI CHARTS -->
	</div>
</div>

@endsection