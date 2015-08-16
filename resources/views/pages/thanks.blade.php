

@extends('globals.wrapper')



@section('content')

<style>

</style>
<div id="tpp-wrapper">
	<div class="background-colorizer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 tx-center pd-v-3">
				<img style="max-width:200px;" src='img/white_logo.png'/>
			</div>
		</div>
		<form id="tpp-register">
			<div class="row">
				<div class="col-lg-6 col-md-8 col-md-offset-2 col-lg-offset-3">
					<ul id="progressbar">
						<li class="active">Register</li>
						<li class="active"></li>
						<li class="active"></li>
						<li class="active">Background</li>
						<li class="active"></li>
						<li class="active"></li>
						<li class="active">Submit</li>
					</ul>
				</div>
			</div>
				<fieldset>
					<div class="row no-gutters">
						<div class="col-lg-6 col-md-8 col-md-offset-2 col-lg-offset-3 bg-white">
							<div class="headfont heavyfont upperfont text-center ft-1 tx-white bg-lightblue pd-h-3 pd-v-3">
								THANK YOU!
							</div>
							<div class="bodyfont tx-center ft-4 pd-h-3 pd-v-1">
							You're now one of our early testers.  We'll send out an email when we're ready to launch!
							</div>
						</div>
					</div>
				</fieldset>
			</div>			
		</form>
		<div class="clearfix pd-v-1"></div>
		</div>
	</div>
</div>

@endsection

@include('globals.footer')
