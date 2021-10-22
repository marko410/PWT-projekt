<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Pilotticket;
use App\User;
use Hash;

class PilotController extends Controller
{
    public function pilot_main_screen(){
        return view('pilot.main_screen');

        
    }

    public function pilot_logout(Request $request){
        Auth::logout();
        return redirect()->route('main_screen');
    }



    public function pilot_preukaz(){
        $user=Auth::user();
        $preukaz=Pilotticket::where('user_id',$user->id)->first();

        return view('pilot.preukaz')->with('user',$user)->with('preukaz',$preukaz);
    }



    public function pilot_ziaci(){

        $all_ziaci=User::where('role',1)->orderBy('f_name')->get();
        //return $all_pilots;
        return view('pilot.ziaci')->with('all_ziaci',$all_ziaci);
    }



    public function one_ziak_show($id){
        $pilot=User::find($id);


        return view('pilot.one_ziak')->with('pilot',$pilot);
    }



    public function pilot_osobne_udaje(){
        $pilot=Auth::user();


        return view('pilot.udaje')->with('pilot',$pilot);
    }



    public function pilot_osobne_udaje_post(Request $request){
        $user=User::find(Auth::user()->id);

        $what_val=$request->what_val;


        $user->$what_val=$request->f_name;
        $user->save();

        return response()->json(['success' => 1]);
    }



    public function zmena_hesla(){
        return view('pilot.heslo');
    }



    public function zmena_hesla_post(Request $request){
        
        $user=Auth::user();




        if(Hash::check($request->old_pass,$user->password)){

            


                if($request->new_pass == $request->new_pass2){
                    $user->password = Hash::make($request->new_pass2);
                    $user->save();
                    return redirect()->route('pilot_main_screen')->with('pass_change_good','pass_change_good');
                }else{
                    return redirect()->route('pilot_zmena_hesla')->with('not_match_pass','not_match_pass');
                }

        }else{

            return redirect()->route('pilot_zmena_hesla')->with('bad_old_pass','bad_old_pass');

        }
    }

    

}
