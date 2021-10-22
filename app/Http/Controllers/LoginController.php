<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;


class LoginController extends Controller
{


    


    public function main_screen(){

        /*
            $new=new User;
            $new->name='jkovacik';
            $new->f_name='Július';
            $new->l_name='Kováčik';
            $new->password = Hash::make('heslo123');
            $new->role=3;
            $new->email='kovacik.duso@gmail.com';
            $new->save();

*/
       
        
        


        



        if (Auth::check()){

            if(Auth::user()->role==3){
                return redirect()->route('boss_main_screen');
            }

            
            if(Auth::user()->role==2){
                return redirect()->route('pilot_main_screen');
            }


            
            if(Auth::user()->role==1){
                return redirect()->route('student_main_screen');
            }
            
        }

    
        return view('main_login');
    }


    public function choose_login(){
        return view('choose_login');
    }



    public function main_screen_login(){
        return view('main_login_kick');
    }


    public function main_login_form_screen($id){
        return view('login_form_screen')->with('id',$id);
    }


    public function main_login_screen_post(Request $request){
       
        $put_name=$request->name;


        $who=$request->who;



        $x_user=User::where('name',$put_name)->first();


        if($x_user && Hash::check($request->password,$x_user->password)){
                if($x_user->role==3){

                        if($who!=3){
                            return redirect()->back()->with('bad_credentials','bad_credentials');
                        }

                    auth()->loginUsingId($x_user->id);
                    return redirect()->route('boss_main_screen');



                }elseif($x_user->role==2){

                    if($who!=2){
                        return redirect()->back()->with('bad_credentials','bad_credentials');
                    }

                    auth()->loginUsingId($x_user->id);
                    return redirect()->route('pilot_main_screen');
                }elseif($x_user->role==1){

                    
                    if($who!=1){
                        return redirect()->back()->with('bad_credentials','bad_credentials');
                    }
                    auth()->loginUsingId($x_user->id);
                    return redirect()->route('student_main_screen');
                }
        }else{

           
            return redirect()->route('main_login_form_screen',['id'=>$request->who])->with('bad_credentials','bad_credentials');
        }
        


    }
}
