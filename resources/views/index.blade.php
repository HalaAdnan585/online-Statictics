<!DOCTYPE html>
<html>
@extends('template.navbar')

<!-- Mirrored from www.radixtouch.in/templates/admin/lorax/source/rtl/pages/dashboard/dashboard3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Nov 2020 20:17:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Online Statistics</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/js/bundles/materialize-rtl/materialize-rtl.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/form.min.css')}}" rel="stylesheet"/>
    <!-- Custom Css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{asset('assets/css/styles/all-themes.css')}}" rel="stylesheet"/>
    <style>
        select {
            display: block !important;
        }

        .squareInput,
        .squareSelect {
            padding-right: 10px !important;
            margin-top: 30px !important;
            color: black !important;
            height: 40px !important;
            width: 95% !important;
            border: solid 1px #999 !important;
            font-size: 14px !important;
            padding-left: 10px !important;
            border-radius: 10px !important;
            /* #2184be----اللون الاخضر */
        }

        .squareInput:focus,
        .squareSelect:focus {
            border: solid 1px red !important;
        }

        .squareSelect {
            width: 99% !important;
            color: #999 !important;
        }

        label {
            position: absolute !important;
            top: -7px !important;
            font-size: 12px !important;
            white-space: nowrap !important;
            background: #fff !important;
            text-align: left !important;
            right: 15px !important;
            padding: 0 5px !important;
            color: #999 !important;
            pointer-events: none !important;
            margin-top: 15px !important;
        }
    </style>
</head>
<body class="light rtl side-closed submenu-closed">
<section class="content">
    <div class="body table-responsive">
        <table class="table table-bordered" id="myTable"
               style="overflow-x: scroll !important;min-width:300% !important;">
            <thead>
            <tr>
                <th class="text-center" style="width:1%">رقم الفرد</th>
                <th class="text-center" style="width:10%">الاسم الرباعي</th>
                <th class="text-center" style="width:5%">العمر بالسنوات الكامله(الاطفال الاقل من سنه يوضع 0)</th>
                <th class="text-center" style="width:6%">العلاقه برب الاسره</th>
                <th class="text-center" style="width:4%">الجنس</th>
                <th class="text-center" style="width:5%">الجنسيه الاصليه</th>
                <th class="text-center" style="width:5%">رقم الهويه</th>
                <th class="text-center" style="width:4%">مكان اقامه الام وقت الولاده</th>
                <th class="text-center" style="width:4%">مكان الاقامه المعتاده الحاليه</th>
                <th class="text-center" style="width:5%">مده الاقامه في مكان الاقامه الحاليه المعتاده بالسنوات الكامله</th>
                <th class="text-center" style="width:5%">مكان الاقامه المعتاده السابقه للحاليه(ان وجدت)</th>
                <th class="text-center" style="width:10%">سبب تغيير مكان الاقامه السابق</th>
                <th class="text-center" style="width:4%">الديانه</th>
                <th class="text-center" style="width:7%">حاله اللجوء</th>
                <th class="text-center" style="width:7%">نتيجه لحاله صحيه هل لديه صعوبه في...؟</th>
                <th class="text-center" style="width:7%">التامين الصحي</th>
                <th class="text-center" style="width:5%">هل يعاني من اي مرض مزمن بحسب تشخيص طبي,ويتلقى علاج بشكل مستمر
                </th>
            </tr>
            </thead>
            <tbody>
            {{$num=0}}
            @foreach($datas as $data)
                {{$num++}}
            <tr>
                <th class="text-center" >{{$num}}</th>
                <th class="text-center" >{{$data->fullName}}</th>
                <th class="text-center" >{{$data->age}}</th>
                <th class="text-center" >{{$data->relationShip}}</th>
                <th class="text-center" >{{$data->gender}}</th>
                <th class="text-center" >{{$data->nationality}}</th>
                <th class="text-center" >{{$data->id}}</th>
                <th class="text-center" >{{$data->placeOfMotherTimeInvidualBirth}}</th>
                <th class="text-center" >{{$data->place}}</th>
                <th class="text-center" >{{$data->periodAt_theCurrent_residenceIn_fullTime}}</th>
                <th class="text-center" >{{$data->previous_place}}</th>
                <th class="text-center" >{{$data->reason_change_residence}}</th>
                <th class="text-center" >{{$data->religion}}</th>
                <th class="text-center" >{{$data->asylum_status}}</th>
                <th class="text-center" >{{$data->healthy_condition_difficulties}}</th>
                <th class="text-center" >{{$data->health_insurance}}</th>
                <th class="text-center" >{{$data->disease}}</th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script src="{{asset('assets/js/form.min.js')}}"></script>
<script src="{{asset('assets/js/table.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('assets/js/admin.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/form-wizard.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/basic-form-elements.js')}}"></script>
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
<!-- Knob Js -->
</body>
</html>

