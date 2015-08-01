

@extends('globals.wrapper')

@include ('globals.header')

@section('content')

<div class="container">
	<form id="registration">
		<div class="col-md-4 col-md-offset-4">

			<div class="form-group">
				<label for="reg_username" class="sr-only">Email address</label>
				<input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
			</div>
			<div class="form-group">
				<label for="reg_password" class="sr-only">Password</label>
				<input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
			</div>
			<div class="form-group">
				<label for="reg_password_confirm" class="sr-only">Password Confirm</label>
				<input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
			</div>
			
			<div class="form-group">
				<label for="reg_email" class="sr-only">Email</label>
				<input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
			</div>
			<div class="form-group">
				<label for="reg_fullname" class="sr-only">Full Name</label>
				<input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name">
			</div>
			
			<div class="form-group login-group-checkbox">
				<input type="radio" class="" name="reg_gender" id="male" placeholder="username">
				<label for="male">male</label>
				
				<input type="radio" class="" name="reg_gender" id="female" placeholder="username">
				<label for="female">female</label>
			</div>
			
			<div class="form-group login-group-checkbox">
				<input type="checkbox" class="" id="reg_agree" name="reg_agree">
				<label for="reg_agree">i agree with <a href="#">terms</a></label>
			</div>

			
			<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>


		</div>
	</form>
</div>




@endsection

@include('globals.footer')



<!--

Connect through linkedin

Experience
Use the sliders to list your professional experience in each sector.
Politics/Campaigns
Federal Legislature (The Hill)
Federal Government
State Legislature
State Government


What kind of work have you been doing?
Communications & Press
Digital / Design / Email
Technology / Coding
Policy / Analysis
Field 
Development / Fundraising

As a Progressive _____, we want to make sure our organizations are filled with diverse people and perspectives/
What issues have you worked in?  Click all that apply.


How would you describe yourself? Click all that apply.
White / Caucasian
Asian Pacific Islander
Asian 
African American
African
South American / Latino
Western European
Other [BOX]

We know the conversation on gender is still evolving, so we're leaving it to you to descibe yourself.  The box will autofill with suggestions as you type.


If you feel comfortable, you may also provide your sexual orientation.


What issues have you worked on?


What issues would you LIKE TO WORK ON in your career?


What software tools have you used?  Click all the apply.


If you have ever coded anything, please check the languages you feel proficient in. 










-->
