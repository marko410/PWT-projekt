<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Hash;
use App\Ziakticket;
use App\User;

class StudentController extends Controller
{
    public function student_main_screen(){
        return view('ziak.main_screen');

        
    }

    public function student_logout(Request $request){
        Auth::logout();
        return redirect()->route('main_screen');
    }





    public function student_preukaz(){
        $user=Auth::user();
        $preukaz=Ziakticket::where('user_id',$user->id)->first();

        return view('ziak.preukaz')->with('user',$user)->with('preukaz',$preukaz);
    }







    public function student_osobne_udaje(){
        $pilot=Auth::user();


        return view('ziak.udaje')->with('pilot',$pilot);
    }



    public function student_osobne_udaje_post(Request $request){
        $user=User::find(Auth::user()->id);

        $what_val=$request->what_val;


        $user->$what_val=$request->f_name;
        $user->save();

        return response()->json(['success' => 1]);
    }







    public function zmena_hesla(){
        return view('ziak.heslo');
    }



    public function zmena_hesla_post(Request $request){
        
        $user=Auth::user();




        if(Hash::check($request->old_pass,$user->password)){

            


                if($request->new_pass == $request->new_pass2){
                    $user->password = Hash::make($request->new_pass2);
                    $user->save();
                    return redirect()->route('student_main_screen')->with('pass_change_good','pass_change_good');
                }else{
                    return redirect()->route('student_zmena_hesla')->with('not_match_pass','not_match_pass');
                }

        }else{

            return redirect()->route('student_zmena_hesla')->with('bad_old_pass','bad_old_pass');

        }
    }
}
