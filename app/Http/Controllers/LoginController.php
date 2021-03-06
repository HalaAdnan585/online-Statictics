<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use App\User;//model
use App\VerifyUser;
use App\Mail\VerifyMail;
use App\Day;
use DB;
use App;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function checkLogin(Request $request){

        $rules = [
            'email' => ['required', 'email'],
            'password' => ['required', 'regex:/(^([a-zA-z0-9]+)?$)/u', 'min:8','max:50']
          ];
    
          $customMessages = [
              'email.required' => ' الايميل يجب ان لا يترك فارغاً.',
              'email.email' => 'الايميل غير متاح!',
              'password.required' => 'كلمة المرور يجب ان لا تترك فارغة.',
              'password.regex' => 'كلمة المرور يجب ان تحتوي على أحرف و ارقام فقط.',
              'password.min' => 'كلمة المرور يجب ان لا تقل عن 8 احرف',
              'password.max' => 'كلمة المرور يجب ان لا تزيد عن 50 احرف'
          ];
    
          $this->validate($request, $rules, $customMessages);

            $user_data = array(
                'email'  => $request->input('email'),
                'password' => $request->input('password'),
                'verified'=>'1'
            );

            if(Auth::attempt($user_data)){

               if(Auth::user()->privilige=="مواطن"){
                    return redirect(route('citizen',country()));
                }else if(Auth::user()->privilige=="موظف"){
                    return redirect(route('index',country()));
                }
            
            }else{
                return back()->with('error', 'خطأ في تسجيل الدخول.');
            }

    }


    public function register()
    {
          $now = date('Y-m-d');
        $city=Day::select('place','start','end')->where('start','<=',$now)->where('end','>=',$now)->first();
        $cityAll=Day::select('place','start','end')->get();

        return view('register',['city'=>$city,'cityAll'=>$cityAll]);
    }

    public function checkRegister(Request $request){

        $rules = [
            'firstName' => ['required', 'regex:/(^([\p{Arabic} ]+)?$)/u', 'min:2','max:15'],
            'secondName' => ['required', 'regex:/(^([\p{Arabic} ]+)?$)/u', 'min:2','max:15'],
            'thirdName' => ['required', 'regex:/(^([\p{Arabic} ]+)?$)/u', 'min:2','max:15'],
            'fourthName' => ['required', 'regex:/(^([\p{Arabic} ]+)?$)/u', 'min:2','max:15'],
            'id' => ['required', 'regex:/(^([0-9 ]+)?$)/u', 'size:9','unique:users'],
            // 'city' => ['required', 'regex:/(^([\p{Arabic} ]+)?$)/u'],
            'mobile' => ['required', 'regex:/(^([0-9 ]+)?$)/u', 'size:10','unique:users'],
            'email' => ['required', 'email','unique:users'],
            'password' => ['required', 'regex:/(^([a-zA-z0-9 ]+)?$)/u', 'min:8','max:25']

          ];
    
          $customMessages = [
           'firstName.required' => ' الاسم الاول يجب ان لا يترك فارغاً.',
           'secondName.required' => ' الاسم الثاني يجب ان لا يترك فارغاً.',
           'thirdName.required' => ' الاسم الثالث يجب ان لا يترك فارغاً.',
           'fourthName.required' => ' الاسم الرابع يجب ان لا يترك فارغاً.',

           'firstName.regex' => 'الاسم الاول يجب ان يحتوي على أحرف  فقط.',
           'secondName.regex' => 'الاسم الثاني يجب ان يحتوي على أحرف  فقط.',
           'thirdName.regex' => 'الاسم الثالث يجب ان يحتوي على أحرف  فقط.',
           'fourthName.regex' => 'الاسم الرابع يجب ان يحتوي على أحرف  فقط.',

           'firstName.min' => 'الاسم الاول يجب ان لا يقل عن  حرفين',
           'secondName.min' => 'الاسم الثاني يجب ان لا يقل عن  حرفين',
           'thirdName.min' => 'الاسم الثالث يجب ان لا يقل عن  حرفين',
           'fourthName.min' => 'الاسم الرابع يجب ان لا يقل عن  حرفين',

           'firstName.max' => 'الاسم الاول يجب ان لا يزيد عن 15 حرف',
           'secondName.max' => 'الاسم الثاني يجب ان لا يزيد عن 15 حرف',
           'thirdName.max' => 'الاسم الثالث يجب ان لا يزيد عن 15 حرف',
           'fourthName.max' => 'الاسم الرابع يجب ان لا يزيد عن 15 حرف',

           'id.required' => ' الرقم الوطني يجب ان لا يترك فارغاً.',
           'id.regex' => ' الرقم الوطني يجب ان يتكون من ارقام فقط.',
           'id.size' => ' الرقم الوطني يجب ان يتكون من 9 خانات.',

        //   'city.required' =>'المحافظه يجب ان لا يترك فارغ',
        //   'city.regex' =>'المحافظه يجب ان يحتوي على احرف فقط',

           'phoneNum.required' => ' رقم الهاتف يجب ان لا يترك فارغاً.',
           'phoneNum.regex' => ' رقم الهاتف يجب ان يتكون من ارقام فقط.',
           'phoneNum.size' => ' رقم الهاتف يجب ان يتكون من 10 خانات.',

            'email.required' => ' الايميل يجب ان لا يترك فارغاً.',
            'email.email' => 'الايميل غير متاح!',

            'password.required' => 'كلمة المرور يجب ان لا تترك فارغة.',
            'password.regex' => 'كلمة المرور يجب ان تحتوي على أحرف و ارقام فقط.',
            'password.min' => 'كلمة المرور يجب ان لا تقل عن 8 احرف',
            'password.max' => 'كلمة المرور يجب ان لا تزيد عن 25 احرف',

              
          ];
    
          $this->validate($request, $rules, $customMessages);
          $now = date('Y-m-d');
           $city=App\Day::select('place')->where('start','<=',$now)->where('end','>=',$now)->first();
          
            $user = new User;
            $firstName= $request->input('firstName');
            $secondName= $request->input('secondName');
            $thirdName= $request->input('thirdName');
            $fourthName= $request->input('fourthName');

            $user->name = $firstName . " " . $secondName . " " . $thirdName . " " . $fourthName;
            $user->id= $request->input('id');
           $user->place=$city->place;
            $user->mobile= $request->input('mobile');
            $user->email= $request->input('email');
            $user->password= Hash::make($request->input('password'));
            $user->privilige= "مواطن";

            if($user->save()){
                $verifyUser = VerifyUser::create([
                'user_id' => $user->id,
                'token' => sha1(time())
                ]);
                // \Mail::to($user->email)->send(new VerifyMail($user));
                
                $to_name = $firstName . " " . $secondName . " " . $thirdName . " " . $fourthName;
                $to_email = $request->input('email');
                // $data = array('users'=>$users);
                \Mail::send('emails.verifyUser', ['user'=>$user], function($message) use ($to_name, $to_email) {
                    $message->to($to_email, $to_name)->subject('conformation email');
                    $message->from('onlinestatistics585@gmail.com','conformation email');
                });

                return redirect(route('confirmation',country()))->with('status', 'أرسلنا لك رمز التفعيل. تحقق من بريدك الإلكتروني وانقر على الرابط للتحقق.');
            
            }else{
                return back()->with('error', 'خطأ في انشاء الحساب.');
            }

    }
     public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $status = "تم التحقق من بريدك الإلكتروني. يمكنك الآن تسجيل الدخول.";
            } else {
                $status = "تم التحقق من بريدك الإلكتروني بالفعل. يمكنك الآن تسجيل الدخول.";
            }
        } else {
            return redirect(route('login',country()))->with('warning', "آسف لا يمكن تحديد البريد الإلكتروني الخاص بك.");
        }
        return redirect(route('login',country()))->with('status', $status);
    }

    public function email()
    {
        return view('email');
    }

    public function checkEmail(Request $request)
    {
        $rules = [
            'email' => ['required', 'email'],

          ];
    
          $customMessages = [
            'email.required' => ' الايميل يجب ان لا يترك فارغاً.',
            'email.email' => 'الايميل غير متاح!'
              
          ];
    
          $this->validate($request, $rules, $customMessages);

            $mail = new PHPMailer(true);
            $key=rand(100000,900000);
            $msg="<p>رمز تأكيد كلمو المرور : ".$key."</p>";
                
                
            try {
                $mail->isSMTP();
                $mail->CharSet = 'utf-8';
                $mail->SMTPAuth =true;
                $mail->SMTPSecure = "tls";
                $mail->Host = "smtp.gmail.com"; 
                $mail->Port = 587; 
                $mail->Username = "higher.studies999@gmail.com"; 
                $mail->Password = "ymgeuujqvawlbnef";
                $mail->setFrom("higher.studies999@gmail.com" ,"Higher Studies");
                $mail->Subject = "م/تأكيد كلمة المرور";
                $mail->MsgHTML($msg);
                $mail->addAddress("sadiqibrahim949@gmail.com");
                // $mail->addAddress($request->input('email'));
                // $mail->addAddress("higher.studies@uobasrah.eduiq");
                $mail->send();
            } catch (Exception $e) {
                dd($e);
            }

            return redirect('/confirmation');
            
    }

    public function confirmation()
    {
        return view('confirmation');
    }


}
