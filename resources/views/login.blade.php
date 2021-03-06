<!DOCTYPE html>
<html lang="en" dir="rtl">


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/rtl/pages/examples/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 20:34:31 GMT -->
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Online statistics</title>
	<!-- Favicon-->
	<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">

	<!-- Plugins Core Css -->
	<link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">

	<!-- Custom Css -->
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/pages/extra_pages.css')}}" rel="stylesheet" />
	<style>
		.contact100-form-checkbox .form-check .form-check-label,
		.wrap-input100 .material-icons {
			text-align: right;
		}
	</style>
</head>

<body class="login-page rtl">
	<div class="limiter">
		<div class="container-login100 page-background1">



			<div class="wrap-login100" >
            <center>
@if (session('status'))
  <div class="alert alert-success">
    {{ session('status') }}
  </div>
@endif
@if (session('warning'))
  <div class="alert alert-warning">
    {{ session('warning') }}
  </div>
@endif

                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block mt-3 mb-0">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                @if (count($errors) > 0)
                <div class="alert alert-danger mt-0 mb-0">
                    <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif

                </center>
				<form action="{{route('checklogin',country())}}" method="POST" class="login100-form validate-form">
                    @csrf

					<span class="login100-form-logo">
						<img alt="" src="{{asset('assets/images/prof.jpg')}}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						تسجيل الدخول
					</span>

					<div class="wrap-input100 validate-inpu1t" data-validate="Enter username">
						<input class="input100" type="email" name="email" placeholder="الايميل" autofocus>
						<i class="material-icons focus-input1001">email</i>
					</div>
					<div class="wrap-input100 validate-input1" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="كلمة المرور">
						<i class="material-icons focus-input1001">lock</i>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							تسجيل دخول
						</button>
					</div>
					<div class="row">
						<div class="col-lg-5">
							<div class="text-center p-t-50">
								<a class="h3" style="color:white;" href="{{route('register',country())}}">
									انشاء حساب جديد
								</a>
							</div>
						</div>
						<div class="col-lg-1"></div>
						<div class="col-lg-6">
							<div class="text-center p-t-50">
								<a class="h3" style="color:white;" href="{{route('email',country())}}">
									هل نسيت كلمة المرور؟
								</a>

								<!-- <a class="h3" id="location1" style="color:white;" href="{{url('/email')}}">
									هل نسيت كلمة المرور؟
								</a> -->
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

	<script>
var x = document.getElementById("location1");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude;
}

getLocation()
</script>

	<!-- Plugins Js -->

	<script src="{{asset('assets/js/app.min.js')}}"></script>

	<!-- Extra page Js -->
	<script src="{{asset('assets/js/pages/examples/pages.js')}}"></script>

</body>


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/rtl/pages/examples/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 20:34:31 GMT -->
</html>
