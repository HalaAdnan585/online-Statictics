<!DOCTYPE html>
<html lang="en" dir="rtl">


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/rtl/pages/examples/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 20:34:31 GMT -->
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Online Statistics</title>
	<!-- Favicon-->
	<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
	<link href="{{asset('assets/js/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css')}}" rel="stylesheet" />
    <!-- Multi Select Css -->
    <link href="{{asset('assets/js/bundles/multiselect/css/multi-select.css')}}" rel="stylesheet">

	<!-- Plugins Core Css -->
	<link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/js/bundles/materialize-rtl/materialize-rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/form.min.css')}}" rel="stylesheet">

	<!-- Custom Css -->
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/pages/extra_pages.css')}}" rel="stylesheet" />

	<link href="{{asset('assets/css/styles/all-themes.css')}}" rel="stylesheet" />
	<style>
		.contact100-form-checkbox .form-check .form-check-label,
		.wrap-input100 .material-icons {
			text-align: right;
		}
		.default-select option{
			color:#000;
		}
	</style>
</head>

<body class="login-page rtl">
	<div class="limiter">
		<div class="container-login100 page-background1">



			<div class="wrap-login100" style="width: 700px !important;">
            <center>

                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block mt-3 mb-0">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                @if (count($errors) > 0)

                    @foreach($errors->all() as $error)
					<div class="alert alert-danger mt-0 mb-2">
					{{ $error }}
					</div>
                    @endforeach

                @endif

                </center>
				<form action="{{route('checkRegister',country())}}" method="POST" class="login100-form validate-form">
                    @csrf

					<span class="login100-form-logo">
						<img alt="" src="{{asset('assets/images/prof.jpg')}}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						 انشاء حساب
					</span>

					<div class="row">
						<div class="col-lg-6">
							<div class="wrap-input100">
								<div class="wrap-input100 " data-validate="Enter username">
									<input class="input100" type="text" name="firstName" placeholder="الاسم الاول" value="{{ old('firstName') }}" autofocus>
									<i class="material-icons focus-input1001">person</i>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="wrap-input100 ">
								<div class="wrap-input100 " data-validate="Enter username">
									<input class="input100" type="text" name="secondName" placeholder="الاسم الثاني" value="{{ old('secondName') }}" >
									<i class="material-icons focus-input1001">person</i>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="wrap-input100 ">
								<div class="wrap-input100 " data-validate="Enter username">
									<input class="input100" type="text" name="thirdName" placeholder="الاسم الثالث" value="{{ old('thirdName') }}" >
									<i class="material-icons focus-input1001">person</i>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="wrap-input100 ">
								<div class="wrap-input100 " data-validate="Enter username">
									<input class="input100" type="text" name="fourthName" placeholder="الاسم الرابع"  value="{{ old('fourthName') }}">
									<i class="material-icons focus-input1001">person</i>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="wrap-input100 ">
								<div class="wrap-input100 " data-validate="Enter username">
									<input class="input100" type="text" name="id" placeholder="الرقم الوطني" value="{{ old('id') }}">
									<i class="material-icons focus-input1001">person</i>
								</div>
							</div>
						</div>

						<div class="col-lg-6">

						<div class="wrap-input100 ">
						  <div class="form-group default-select">
								<!--<select class="form-control" name="city" style="background:transparent;color:#fff;border-bottom: 2px solid rgba(255,255,255,0.24);" >-->
								<!--<option disabled selected>أختر المحافظة</option>-->
								<!--		<option {{ (old('city') =='القدس')? "selected" : '' }} >القدس</option>-->
								<!--		<option {{ (old('city') =='جنين')? "selected" : '' }} >جنين</option>-->
								<!--		<option {{ (old('city') =='طوباس')? "selected" : '' }} >طوباس</option>-->
								<!--		<option {{ (old('city') =='طولكرم')? "selected" : '' }} >طولكرم</option>-->
								<!--		<option {{ (old('city') =='نابلس')? "selected" : '' }} >نابلس</option>-->
								<!--		<option {{ (old('city') =='قلقيلية')? "selected" : '' }} >قلقيلية</option>-->
								<!--		<option {{ (old('city') =='سلفيت')? "selected" : '' }} >سلفيت</option>-->
								<!--		<option {{ (old('city') =='رام الله والبيرة')? "selected" : '' }} >رام الله والبيرة</option>-->
								<!--		<option {{ (old('city') =='أريحا')? "selected" : '' }} >أريحا</option>-->
								<!--		<option {{ (old('city') =='بيت لحم')? "selected" : '' }} >بيت لحم</option>-->
								<!--		<option {{ (old('city') =='الخليل')? "selected" : '' }} >الخليل</option>-->
								<!--</select>-->
								<input class="input100" type="text" placeholder="انتا الان تسجل ضمن محافظة {{ $city->place }}" disabled value="{{ $city->place }}">
                             </div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="wrap-input100 ">
								<div class="wrap-input100" data-validate="Enter username">
									<input class="input100" type="text" name="mobile" placeholder="رقم الهاتف" value="{{ old('mobile') }}" >
									<i class="material-icons focus-input1001">call</i>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="wrap-input100 ">
								<div class="wrap-input100 " data-validate="Enter username">
									<input class="input100" type="text" name="email" placeholder="الايميل"  value="{{ old('email') }}">
									<i class="material-icons focus-input1001">email</i>
							   </div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<div class="wrap-input100 ">
								<div class="wrap-input100 " data-validate="Enter password">
									<input class="input100" type="password" name="password" placeholder="كلمة المرور" value="{{ old('password') }}">
									<i class="material-icons focus-input1001">lock</i>
								</div>
							</div>
						</div>


					</div>
        <div class="text-center p-t-50" style="margin-bottom: 15px">
                        <a class="h3" style="color:white;">
                            انتا الان تسجل ضمن محافظة {{ $city->place }}
                            لعرض أيام المحافظات اضغط
                        </a>
                       <a class="h3" id="myModal"  data-toggle="modal" data-target=".bd-example-modal-lg" style="color:white;cursor: pointer">  هنا</a>
                    </div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							حفظ
						</button>
					</div>
					<div class="text-center p-t-50">
						<a class="h3" style="color:white;" href="{{route('login',country())}}">
							 تسجيل دخول
						</a>
						
						<!-- <a class="h3" id="location" style="color:white;" href="{{url('/login')}}">
							 location
						</a> -->
					</div>
					
				</form>
			</div>
		</div>
	</div>
	    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <table class="table table-bordered" id="myTable">
                <thead>
                <tr>
                    <th class="text-center" style="width:1%">اسم المحافظه</th>
                    <th class="text-center" style="width:1%">موعد بدء ادخال البيانات</th>
                    <th class="text-center" style="width:1%">اخر موعد لادخال البيانات</th>
                </tr>
                </thead>
                <tbody>
                   
                    @foreach($cityAll as $item)
                    <tr>
                        <th scope="row" class="text-center">{{ $item->place }}</th>
                        <td>{{$item->start}}</td>
                        <td>{{$item->end}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
	<script>
	  $('#myModal').modal('show');
var x = document.getElementById("location");

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
	<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
	<script src="{{asset('assets/js/bundles/multiselect/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js')}}"></script>
	<script src="{{asset('assets/js/form.min.js')}}"></script>
</body>


<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/rtl/pages/examples/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 20:34:31 GMT -->
</html>
