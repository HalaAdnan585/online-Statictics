<!DOCTYPE html>
<html>
<head>
    <title>Online Statistics</title>
</head>
<body>
<h2>مرحبا بكم في الموقع {{$user->name}}</h2>
<br/>
,{{$user->email}}معرف البريد الإلكتروني المسجل الخاص بك هو
الرجاء الضغط على الرابط أدناه للتحقق من حساب البريد الإلكتروني الخاص بك



<br/>
<a href="{{route('verify', $user->verifyUser->token)}}">التحقق من البريد الإلكتروني</a>
</body>
</html>
