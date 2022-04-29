<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Register - Publiq</title>

    <!-- Favicons-->

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/img/favicon.png') }}" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('frontend/assets/img/img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('frontend/assets/img/img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('frontend/assets/img/img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('frontend/assets/img/img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('frontend/assets/img/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/img/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/img/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/img/css/vendors.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('frontend/assets/img/css/custom.css') }}" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="{{ asset('frontend/assets/img/js/modernizr.js') }}"></script>

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<nav>
		<ul class="cd-primary-nav">
			<li><a href="index.html" class="animated_link">Home</a></li>
			<li><a href="quotation-wizard-version.html" class="animated_link">Quote Version</a></li>
			<li><a href="review-wizard-version.html" class="animated_link">Review Version</a></li>
			<li><a href="registration-wizard-version.html" class="animated_link">Registration Version</a></li>
			<li><a href="about.html" class="animated_link">About Us</a></li>
			<li><a href="contacts.html" class="animated_link">Contact Us</a></li>
		</ul>
	</nav>
	<!-- /menu -->

	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					<a href="index.html" id="logo"><img src="{{ asset('frontend/assets/img/img/publiq logo.png') }}" alt="" width="108" height="35"></a>
					<div id="social">
						<ul>
							<li><a href="#0"><i class="icon-facebook"></i></a></li>
							<li><a href="#0"><i class="icon-twitter"></i></a></li>
							<li><a href="#0"><i class="icon-google"></i></a></li>
							<li><a href="#0"><i class="icon-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->
					<div>
						<figure><img src="{{ asset('frontend/assets/img/login page icon.png') }}" alt="" class="img-fluid"></figure>
						<ul>
							<li class="points"><i class="fa fa-check-circle"></i><span> Stay connected with the world around you!.</span></li>
							<li class="points"><i class="fa fa-check-circle"></i><span> Making friends is the easiest thing to do when you’re a member of Pubilq.</span></li>
							<li class="points"><i class="fa fa-check-circle"></i><span> Meet like-minded people from your country on this website. </span></li>
							<li class="points"><i class="fa fa-check-circle"></i><span> Chat with people from all over the world and share your ideas.</span></li>
							<li class="points"><i class="fa fa-check-circle"></i><span> You can follow people and stay connected with there activty.</span></li>
							<li class="points"><i class="fa fa-check-circle"></i><span> You can Subscribe people and read their paid & free content</span></li>
						</ul>
					</div>
					<div class="copy">© 2022 www.publiq.com</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
					<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form action="{{ route('user-details.store') }}" method="POST">
							@csrf
							@method('POST')
                            <input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question"><strong>1/2</strong>Please fill with your details</h3>
									<div class="form-group">
										<input type="text" name="firstname" class="form-control required @error('firstname') is-invalid @enderror" placeholder="First Name">
                                        @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
									<div class="form-group">
										<input type="text" name="lastname" class="form-control required @error('lastname') is-invalid @enderror" placeholder="Last Name">
                                        @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
									<div class="form-group">
										<input type="email" name="email" class="form-control required" placeholder="Your Email">
									</div>
									<div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide" name="country">
												<option value="">Your Country</option>
												<option value="Europe">Europe</option>
												<option value="Asia">Asia</option>
												<option value="North America">North America</option>
												<option value="South America">South America</option>
												<option value="Oceania">Oceania</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											<div class="form-group">
												<input type="number" name="age" class="form-control" placeholder="Age">
											</div>
										</div>
										<div class="col-9">
											<div class="form-group radio_input">
												<label class="container_radio">Male
													<input type="radio" name="gender" value="Male" class="required">
													<span class="checkmark"></span>
												</label>
												<label class="container_radio">Female
													<input type="radio" name="gender" value="Female" class="required">
													<span class="checkmark"></span>
												</label>
											</div>
										</div>
									</div>
									<!-- /row -->
									<div class="form-group terms">
										<label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a>
											<input type="checkbox" name="terms" value="Yes" class="required">
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
								<!-- /step-->


								<div class="submit step">
										<h3 class="main_question"><strong>2/2</strong>How did you hear about our company?</h3>
										<div class="form-group">
											<label class="container_check version_2">Google Search Engine
												<input type="checkbox" name="question_2" value="Google Search Engine" class="required" onchange="getVals(this, 'question_2');">
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="container_check version_2">A friend of mine
												<input type="checkbox" name="question_2" value="A friend of mine" class="required" onchange="getVals(this, 'question_2');">
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="container_check version_2">Print Advertise
												<input type="checkbox" name="question_2" value="Print Advertise" class="required" onchange="getVals(this, 'question_2');">
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="container_check version_2">Newspaper
												<input type="checkbox" name="question_2" value="Newspaper" class="required" onchange="getVals(this, 'question_2');">
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="form-group">
											<label class="container_check version_2">Other
												<input type="checkbox" name="question_2" value="Other" class="required" onchange="getVals(this, 'question_2');">
												<span class="checkmark"></span>
											</label>
										</div>
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Prev</button>
								<button type="button" name="forward" class="forward">Next</button>
								<button type="submit" name="process" class="submit">Submit</button>
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
			</div>
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- COMMON SCRIPTS -->
	<script src="{{ asset('frontend/assets/img/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/img/js/common_scripts.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/img/js/velocity.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/img/js/functions.js') }}"></script>

	<!-- Wizard script -->
	<script src="{{ asset('frontend/assets/img/js/survey_func.js') }}"></script>


</body>
</html>
