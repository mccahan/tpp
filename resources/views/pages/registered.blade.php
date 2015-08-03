

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
						<li>Background</li>
						<li>Submit</li>
					</ul>
				</div>
			</div>
				<fieldset>
					<div class="row no-gutters">
						<div class="col-lg-6 col-md-8 col-md-offset-2 col-lg-offset-3 bg-white">
							<div class="headfont heavyfont upperfont text-center ft-1 tx-white bg-lightblue pd-h-3 pd-v-3">
								THANKS!
							</div>
							<div class="bodyfont tx-center ft-4 pd-h-3 pd-v-3">
								You've confirmed with LinkedIn, so to continue the signup process, just click the button below and fill out the necessary information.
							</div>
							<div class="tx-center pd-h-3 pd-v-3">
							    <a name="next" class="next action-button button dtran pd-v-5 pd-h-3 tx-center tx-white bg-lightblue bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Keep Going!</span>
								</a>
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="row  no-gutters">
						<div class="col-lg-6 col-md-8 col-md-offset-2 col-lg-offset-3 bg-white">
							<div class="headfont heavyfont upperfont text-center ft-1 tx-white bg-lightblue pd-h-3 pd-v-3">
								Fields
							</div>
							<div class="bodyfont tx-center ft-4 pd-h-3 pd-v-3">
								In which of these fields have you worked and for how long?
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 tx-sm-left slider-title">Government</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-year" data-slider-id="s1-a1" type="text" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s1-a1">0 years</div>
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 tx-sm-left slider-title">NGO</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-year" data-slider-id="s1-a2" type="text" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s1-a2">0 years</div>
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">Legislative/Hill</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-year" data-slider-id="s1-a3" type="text" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s1-a3">0 years</div>
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">Campaign</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-year" data-slider-id="s1-a4" type="text" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs  slider-count" for="s1-a4" >0 years</div>
							</div>

							<div class="tx-center pd-h-3 pd-v-3">
							    <a name="previous" class="previous action-button button dtran pd-v-5 pd-h-3 tx-center tx-white bg-lightblue bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Back</span>
								</a>
								<a name="next" class="next action-button button dtran pd-v-5 pd-h-3 tx-center tx-white bg-lightblue bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Next</span>
								</a>
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="row  no-gutters">
						<div class="col-lg-6 col-md-8 col-md-offset-2 col-lg-offset-3 bg-white">
							<div class="headfont heavyfont upperfont text-center ft-1 tx-white bg-lightblue pd-h-3 pd-v-3">
								Experience
							</div>
							<div class="bodyfont tx-center ft-4 pd-h-3 pd-v-3">
								What kind of experience do you have and for how long?
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">Policy & Analysis</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-year" data-slider-id="s2-a1" type="text" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs  slider-count" for="s2-a1">0 years</div>
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">Technical</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-year" data-slider-id="s2-a2" type="text" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s2-a2">0 years</div>
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">Comms/Media</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-year" data-slider-id="s2-a3" type="text" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s2-a3">0 years</div>
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">Research</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-year" data-slider-id="s2-a4" type="text"data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s2-a4" >0 years</div>
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">Design/Graphic</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-year" data-slider-id="s2-a5" type="text" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s2-a5" >0 years</div>
							</div>

							<div class="tx-center pd-h-3 pd-v-3">
							    <a name="previous" class="previous action-button button dtran pd-v-5 pd-h-3 tx-center tx-white bg-lightblue bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Back</span>
								</a>
								<a name="next" class="next action-button button dtran pd-v-5 pd-h-3 tx-center tx-white bg-lightblue bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Next</span>
								</a>
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="row  no-gutters">
						<div class="col-lg-6 col-md-8 col-md-offset-2 col-lg-offset-3 bg-white">
							<div class="headfont heavyfont upperfont text-center ft-1 tx-white bg-lightblue pd-h-3 pd-v-3">
								Languages
							</div>
							<div class="bodyfont tx-center ft-4 pd-h-3 pd-v-3">
								What is your proficiency with the following languages?
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">Spanish</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-lang" data-slider-id="s3-a1" type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s3-a1">None</div>
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">French</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-lang" data-slider-id="s3-a2" type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s3-a2">None</div>
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">Mandarin</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-lang" data-slider-id="s3-a3" type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s3-a3">None</div>
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">Cantonese</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-lang" data-slider-id="s3-a4" type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s3-a4" >None</div>
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">Arabic</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-lang" data-slider-id="s3-a5" type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s3-a5" >None</div>
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">Japanese</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-lang" data-slider-id="s3-a6" type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s3-a6" >None</div>
							</div>
							<div class="slider-wrap row">
								<div class="col-sm-3 slider-title">Other</div>
								<div class="col-sm-6 pd-h-2">
									<input class="slider-lang" data-slider-id="s3-a7" type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="0"/>
								</div>
								<div class="col-sm-2 hidden-xs slider-count" for="s3-a7" >None</div>
							</div>
							<div class="tx-center pd-h-3 pd-v-3">
							    <a name="previous" class="previous action-button button dtran pd-v-5 pd-h-3 tx-center tx-white bg-lightblue bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Back</span>
								</a>
								<a name="next" class="next action-button button dtran pd-v-5 pd-h-3 tx-center tx-white bg-lightblue bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Next</span>
								</a>
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="row no-gutters">
						<div class="col-lg-6 col-md-8 col-md-offset-2 col-lg-offset-3 bg-white">
							<div class="headfont heavyfont upperfont text-center ft-1 tx-white bg-lightblue pd-h-3 pd-v-3">
								Proficiencies
							</div>
							<div class="bodyfont tx-center ft-4 pd-h-3 pd-v-3">
								What Technology languages or tools are you particularly confident with?	
							</div>
							<div class="check-responses  pd-h-3 pd-v-3">
								<input type="checkbox" id="q1-a1">
								<input type="checkbox" id="q1-a2">
								<input type="checkbox" id="q1-a3">
								<input type="checkbox" id="q1-a4">
								<input type="checkbox" id="q1-a5">
								<input type="checkbox" id="q1-a6">
								<input type="checkbox" id="q1-a7">
								<input type="checkbox" id="q1-a8">
								<input type="checkbox" id="q1-a9">
								<input type="checkbox" id="q1-a10">
								<input type="checkbox" id="q1-a11">
								<input type="checkbox" id="q1-a12">
								<input type="checkbox" id="q1-a13">
								<input type="checkbox" id="q1-a14">						
								<input type="checkbox" id="q1-a15">
								<input type="checkbox" id="q1-a16">
								<input type="checkbox" id="q1-a17">
								<input type="checkbox" id="q1-a18">						
								<input type="checkbox" id="q1-a19">
								<input type="checkbox" id="q1-a20">
								<input type="checkbox" id="q1-a21">
								<input type="checkbox" id="q1-a22">						
								<input type="checkbox" id="q1-a23">
								<input type="checkbox" id="q1-a24">
								<input type="checkbox" id="q1-a25">
								<label for="q1-a1">Javascript</label>
								<label for="q1-a2">Microsoft Office</label>
								<label for="q1-a3">Salesforce</label>
								<label for="q1-a4">NGPVAN</label>
								<label for="q1-a5">LexisNexis</label>
								<label for="q1-a6">Python</label>
								<label for="q1-a7">Stata</label>
								<label for="q1-a8">R</label>
								<label for="q1-a9">SAS</label>
								<label for="q1-a10">SQL</label>
								<label for="q1-a11">SPSS</label>
								<label for="q1-a12">GIS</label>
								<label for="q1-a13">Hadoop</label>
								<label for="q1-a14">Ruby</label>
								<label for="q1-a15">Perl</label>
								<label for="q1-a16">HTML</label>
								<label for="q1-a17">Java</label>
								<label for="q1-a18">PHP</label>
								<label for="q1-a19">Legistorm</label>
								<label for="q1-a20">Bloomberg Gov</label>
								<label for="q1-a21">CQ</label>
								<label for="q1-a22">IQ</label>
								<label for="q1-a23">Westlaw</label>
								<label for="q1-a24">Intertrack</label>
								<label for="q1-a25">Quorum</label>
							</div>
							<div class="tx-center pd-h-3 pd-v-3">
							    <a name="previous" class="previous action-button button dtran pd-v-5 pd-h-3 tx-center tx-white bg-lightblue bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Back</span>
								</a>
								<a name="next" class="next action-button button dtran pd-v-5 pd-h-3 tx-center tx-white bg-lightblue bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Next</span>
								</a>
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="row no-gutters">
						<div class="col-lg-6 col-md-8 col-md-offset-2 col-lg-offset-3 bg-white">
							<div class="headfont heavyfont upperfont text-center ft-1 tx-white bg-lightblue pd-h-3 pd-v-3">
								Self-Identification
							</div>
							<div class="bodyfont tx-center ft-4 pd-h-3 pd-v-3">
								Do you self identify as one or more of the following (check all that apply)?
							</div>
							<div class="check-responses  pd-h-3 pd-v-3">
								<input type="checkbox" id="q2-a1">
								<input type="checkbox" id="q2-a2">
								<input type="checkbox" id="q2-a3">
								<input type="checkbox" id="q2-a4">
								<input type="checkbox" id="q2-a5">
								<input type="checkbox" id="q2-a6">
								<input type="checkbox" id="q2-a7">
								<label for="q2-a1">American Indian or Alaskan Native</label>
								<label for="q2-a2">Asian</label>
								<label for="q2-a3">Black or African American</label>
								<label for="q2-a4">Hispanic or Latino</label>
								<label for="q2-a5">Native Hawaiian or Pacific Islander</label>
								<label for="q2-a6">White</label>
								<label for="q2-a7">LGBTQ</label>
							</div>
							<div class="bodyfont tx-center ft-4 pd-h-3 pd-v-3">
								Do you self identify as one or more of the following veteran statuses (check all that apply)?	
							</div>
							<div class="check-responses  pd-h-3 pd-v-3">
								<input type="checkbox" id="q2-a8">
								<input type="checkbox" id="q2-a9">
								<input type="checkbox" id="q2-a10">
								<input type="checkbox" id="q2-a11">
								<input type="checkbox" id="q2-a12">
								<input type="checkbox" id="q2-a13">
								<input type="checkbox" id="q2-a14">	
								<label for="q2-a8">Vietnam Era Veteran</label>
								<label for="q2-a9">Armed Forces Service Medal Veterans</label>
								<label for="q2-a10">Disabled Veteran</label>
								<label for="q2-a11">Special Disabled Veteran</label>
								<label for="q2-a12">Other Protected Veteran</label>
								<label for="q2-a13">Recently Separated Veteran</label>
							</div>
							<div class="bodyfont tx-center ft-4 pd-h-3 pd-v-3">
								How do you self-identify with regard to gender?	
							</div>
							<div class="check-responses-single  pd-h-3 pd-v-3">
								<input type="checkbox" id="q2-a15">
								<input type="checkbox" id="q2-a16">
								<input type="checkbox" id="q2-a17">
								<input type="checkbox" id="q2-a18">
								<label for="q2-a15">Male</label>
								<label for="q2-a16">Female</label>
								<label for="q2-a17">Other</label>
								<label for="q2-a18">Choose not to answer</label>
							</div>
							<div class="tx-center pd-h-3 pd-v-3">
							    <a name="previous" class="previous action-button button dtran pd-v-5 pd-h-3 tx-center tx-white bg-lightblue bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Back</span>
								</a>
								<a name="next" class="next action-button button dtran pd-v-5 pd-h-3 tx-center tx-white bg-lightblue bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Next</span>
								</a>
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<div class="row no-gutters">
						<div class="col-lg-6 col-md-8 col-md-offset-2 col-lg-offset-3 bg-white">
							<div class="headfont heavyfont upperfont text-center ft-1 tx-white bg-lightblue pd-h-3 pd-v-3">
								Education
							</div>
							<div class="bodyfont tx-center ft-4 pd-h-3 pd-v-3">
								What is the highest level of education you have received?
							</div>
							<div class="check-responses-single  pd-h-3 pd-v-3">
								<input type="text" id="q3-a1">
								<label value="1" for="q3-a1">High School</label>
								<label value="2" for="q3-a1">Technical Certification</label>
								<label value="3" for="q3-a1">Associates</label>
								<label value="4" for="q3-a1">Some undergraduate work</label>
								<label value="5" for="q3-a1">Undergraduate degree</label>
								<label value="6" for="q3-a1">Some Post Graduate</label>
								<label value="7" for="q3-a1">Post Graduate</label>
							</div>
							<div class="tx-center pd-h-3 pd-v-3">
							    <a name="previous" class="previous action-button button dtran pd-v-5 pd-h-3 tx-center tx-white bg-lightblue bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Back</span>
								</a>
								<a name="submit" class="next action-button button dtran pd-v-5 pd-h-3 tx-center tx-white bg-navy bg-hv-white tx-hv-blue no-dec">
									<span class="headfont upperfont heavyfont no-dec ft-3">Submit</span>
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
