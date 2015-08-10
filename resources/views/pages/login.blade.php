

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
						<li></li>
						<li></li>
						<li>Background</li>
						<li></li>
						<li></li>
						<li>Submit</li>
					</ul>
				</div>
			</div>
				<fieldset>
					<div class="row no-gutters">
						<div class="col-lg-6 col-md-8 col-md-offset-2 col-lg-offset-3 bg-white">
							<div class="headfont heavyfont upperfont text-center ft-1 tx-white bg-lightblue pd-h-3 pd-v-3">
								WELCOME!
							</div>
							<div class="bodyfont tx-center ft-4 pd-h-3 pd-v-3">
								<strong>The People Project</strong> is connecting the country's best political staffers and policy wonks with jobs and appointments which need those unique skills that only experience can provide.  <br><br>Registration is all it takes to start having your profile sent to the top political HR shops in the country. It's also <em>completely free</em>.  All you need to do is verify you are you through LinkedIn and complete the quick survey that follows.
							</div>
							<div class="tx-center pd-h-3 pd-v-3">
							    <a href="login" class="button dtran pd-v-5 pd-h-3 tx-center tx-white bg-lightblue bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Build your Profile</span>
								</a>
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



<!--

Connect through linkedin

Login - LinkedIn, Facebook, Twitter, self-created (?)
First Name [required]
Last Name [required]
Email [required]
Mobile [optional or required?]
Twitter Handle [optional]

6. Work Environment:
Government
NGO
Legislative
Campaign

Field of Experience
Policy/Analysis
Technical
Communications/Media
Research
Design/Graphic
7. Years of Experience: [required]
1-3
3-5
5-8
8-15
15 plus
8. Languages: Spanish, French, Chinese (mandarin), Chinese (cantonese), Arabic, Japanese, other [optional - any/all]
(proficiency: None, some, fluent, native) [conditional: required for any language selected]
[Identity questions - Optional]
9. Do you self identify with one or more of the following: (check all that apply) [optional - select any/all that apply]
American Indian or Alaskan Native
Asian
Black or African American
Hispanic or Latino
Native Hawaiian or Pacific Islander
White 
LGBTQ
Veteran status
10. Do you self identify as one or more of the following:  [optional - select any/all that apply]
Vietnam Era Veteran
Disabled Veteran
Special Disabled Veteran
Other Protected Veteran
Recently Separated Veteran
Armed Forces Service Medal Veterans

11. Gender: M, F, Other, Choose not to answer [select 1]
12. Highest Level of Education Completed [select 1]
High School
Technical Certification
Associates
Some undergraduate work
Undergraduate degree
Some Post Graduate
Post Graduate

Additional professional certifications [open ended text box?]

13. Software/Program proficiency (if applicable) [Drop-down menus sorted by category?]
Microsoft Office
Salesforce
NGPVAN
LexisNexis
Python
Stata
R
SAS
SQL
SPSS
GIS
Hadoop
Ruby
Perl
HTML
Java
PHP
Legistorm
Bloomberg Gov
CQ 
IQ
Westlaw
Intertrack
Quorum
14. Skills that aren’t software or programming 
Media:
Press release writing
Speech writing, op-ed writing, etc.
15. Policy areas/Issue area Expertise



-->
