<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pilotticket;
use App\Ziakticket;
use App\User;
use Hash;
use App\Absolvent;


class BossController extends Controller
{
    public function boss_main_screen(){
      

/*
        $new=new User;
        $new->name='riaditel1';
        $new->f_name='Riaditel';
        $new->l_name='Riaditel';
        $new->password = Hash::make('heslo123');
        $new->role=3;
        $new->email='riaditel@gmail.com';
        $new->save();





        $new=new User;
        $new->name='pilot1';
        $new->f_name='Pilot';
        $new->l_name='Pilot';
        $new->password = Hash::make('heslo123');
        $new->role=2;
        $new->email='pilot@gmail.com';
        $new->save();




        $new=new User;
        $new->name='ziak1';
        $new->f_name='Ziak';
        $new->l_name='Ziak';
        $new->password = Hash::make('heslo123');
        $new->role=2;
        $new->email='ziak@gmail.com';
        $new->save();
*/
        return view('boss.main_screen');

    }








    public function all_pilots(){
        $all_pilots=User::where('role',2)->orderBy('f_name')->get();
        //return $all_pilots;
        return view('boss.all_pilots')->with('all_pilots',$all_pilots);
    }




    public function one_pilot_show($id){
        $pilot=User::find($id);


        if($pilot->role!==2){
                return redirect()->route('boss_all_pilots');
        }elseif($pilot==NULL){
            return redirect()->route('boss_all_pilots');
        }

        return view('boss.one_pilot')->with('pilot',$pilot);
    }



    public function add_pilot(){
        return view('boss.add_pilot');
    }



    public function one_pilot_delete(Request $request,$id) {

        
        $pilot=User::find($id);

        $f_name=$pilot->f_name;
        $l_name=$pilot->l_name;

        $role=$pilot->role;
        $pilot_name=$f_name.' '.$l_name;

    $pilot->delete();


    if($role==2){
        return redirect()->route('boss_all_pilots')->with('pilot_deleted',$pilot_name);
    }else{
        return redirect()->route('boss_all_ziaci')->with('pilot_deleted',$pilot_name);
    }
    


    }

    






    public function boss_update_field(Request $request){
        $user=User::find($request->user_id);

        $what_val=$request->what_val;


        $user->$what_val=$request->f_name;
        $user->save();

        return response()->json(['success' => 1]);
    }




    public function all_ziaci(){

        $all_ziaci=User::where('role',1)->orderBy('f_name')->get();
        //return $all_pilots;
        return view('boss.all_ziaci')->with('all_ziaci',$all_ziaci);

    }




    public function one_ziak_show($id){
        $pilot=User::find($id);


        if($pilot->role!==1){
                return redirect()->route('boss_all_ziaci');
        }elseif($pilot==NULL){
            return redirect()->route('boss_all_ziaci');
        }

        return view('boss.one_ziak')->with('pilot',$pilot);
    }






    public function add_ziak(){
        return view('boss.add_ziak');
    }



    public function add_member_post(Request $request){
        $user= new User;
        $user->f_name=$request->f_name;
        $user->l_name=$request->l_name;
        $user->rod_cislo=$request->rod_cislo;
        $user->dat_nar=$request->dat_nar;
        $user->ulica=$request->ulica;
        $user->c_ulice=$request->c_ulice;
        $user->city=$request->city;
        $user->psc=$request->psc;
        $user->phone_1=$request->phone_1;
        $user->phone_2=$request->phone_2;
        $user->email=$request->email;
       
        if($request->role_hit==2){
            $user->role=2;
        }elseif($request->role_hit==1){
            $user->role=1;
        }

        $user->password=Hash::make('heslo123');

        $nick_1=$request->f_name;
        $nick_1=$nick_1[0];
        $nick_1=strtolower($nick_1);

        $nick_2=strtolower($request->l_name);

        $nick=$nick_1.$nick_2;


        $is_used=User::where('name',$nick)->first();

        //$all_test=User::all();



        if($is_used!==NULL){
           $extra_random= rand(11, 999);
            $nick=$nick.$extra_random;
        }



        $user->name=$nick;

        $user->save();


        $pilot_name=$request->f_name.' '.$request->l_name;

        if($request->role_hit==2){
            return redirect()->route('boss_all_pilots')->with('pilot_added',$pilot_name);
        }elseif($request->role_hit==1){
            return redirect()->route('boss_all_ziaci')->with('pilot_added',$pilot_name);
        }









    }

    public function boss_logout(Request $request){
        Auth::logout();
        return redirect()->route('main_screen');
    }





    public function show_pilot_tickets(){
        $all=Pilotticket::orderBy('created_at','desc')->get();
        $pilots=User::where('role',2)->orderBy('f_name')->get();    

        return view('boss.show_pilot_tickets')->with('all',$all)->with('pilots',$pilots);
    }




    public function add_pilot_ticket(){
        $pilots=User::where('role',2)->where('has_ticket',0)->orderBy('f_name')->get();
        
        return view('boss.add_pilot_ticket')->with('pilots',$pilots);
    }


    public function add_pilot_ticket_post(Request $request){
        $new=new Pilotticket;
        $new->user_id=$request->pilot_id;


        $user_check=User::find($request->pilot_id);
        $user_check->has_ticket=1;
        $user_check->save();

        $new->preukaz_type=$request->typ_preukazu;
        $new->preukaz_num=$request->preukaz_num;


        $new->sep=$request->sep;
        $new->sep_to=$request->platnost_sep;


        $new->mep=$request->mep;
        $new->mep_to=$request->platnost_mep;



        $new->z137t=$request->z137t;
        $new->z137t_to=$request->platnost_z137t;



        
        $new->fi=$request->fi;
        $new->fi_to=$request->platnost_fi;
        

        $new->zdrav_sp1=$request->zdrav1;
        $new->zdrav_sp1_to=$request->platnost_zdrav1;
        

        $new->zdrav_sp2=$request->zdrav2;
        $new->zdrav_sp2_to=$request->platnost_zdrav2;
        
        
        $new->radio_has=$request->radio;
        $new->radio_type=$request->radio_type;
        $new->radio_num=$request->radio_num;
        $new->radio_unl=$request->radio_unl;
        $new->radio_to=$request->radio_to;


        
        
        $new->save();
        
        $all=Pilotticket::orderBy('created_at','desc')->get();
        $pilots=User::where('role',2)->orderBy('f_name')->get();    

        return redirect()->route('show_pilot_tickets')->with('preukaz_added','preukaz_added');


    }

    public function update_pilot_ticket_post(Request $request){


        $new=Pilotticket::find($request->preukaz_id);
        $new->preukaz_type=$request->typ_preukazu;
        $new->preukaz_num=$request->preukaz_num;


        $new->sep=$request->sep;
        $new->sep_to=$request->platnost_sep;


        $new->mep=$request->mep;
        $new->mep_to=$request->platnost_mep;



        $new->z137t=$request->z137t;
        $new->z137t_to=$request->platnost_z137t;



        
        $new->fi=$request->fi;
        $new->fi_to=$request->platnost_fi;
        

        $new->zdrav_sp1=$request->zdrav1;
        $new->zdrav_sp1_to=$request->platnost_zdrav1;
        

        $new->zdrav_sp2=$request->zdrav2;
        $new->zdrav_sp2_to=$request->platnost_zdrav2;
        
        
        $new->radio_has=$request->radio;
        $new->radio_type=$request->radio_type;
        $new->radio_num=$request->radio_num;
        $new->radio_unl=$request->radio_unl;
        $new->radio_to=$request->radio_to;
 

        
        
        $new->save();
        

        return redirect()->route('show_pilot_tickets')->with('preukaz_updated','preukaz_updated');

    }
    


    public function delete_pilot_ticket_post(Request $request){

        $del=Pilotticket::find($request->to_del);
        $user=User::find($del->user_id);
        $user->has_ticket=0;
        $user->save();
        $del->delete();



        return redirect()->route('show_pilot_tickets')->with('preukaz_deleted','preukaz_deleted');

    }









    public function show_ziak_tickets(){

        $all=Ziakticket::orderBy('created_at','desc')->get();
        $pilots=User::where('role',1)->orderBy('f_name')->get();    

        return view('boss.show_ziak_tickets')->with('all',$all)->with('pilots',$pilots);
        
    }


    public function add_ziak_ticket(){

        $pilots=User::where('role',1)->where('has_ticket',0)->orderBy('f_name')->get();
        
        return view('boss.add_ziak_tickets')->with('pilots',$pilots);

    }


    public function add_ziak_ticket_post(Request $request){

        $new=new Ziakticket;
        $new->user_id=$request->pilot_id;


        $user_check=User::find($request->pilot_id);
        $user_check->has_ticket=1;
        $user_check->save();

        $new->preukaz_type=$request->typ_preukazu;
        $new->preukaz_num=$request->preukaz_num;


        $new->sep=$request->sep;
        $new->sep_to=$request->platnost_sep;


       

        $new->zdrav_sp1=$request->zdrav1;
        $new->zdrav_sp1_to=$request->platnost_zdrav1;
        

        $new->zdrav_sp2=$request->zdrav2;
        $new->zdrav_sp2_to=$request->platnost_zdrav2;
        
        
        $new->radio_has=$request->radio;
        $new->radio_type=$request->radio_type;
        $new->radio_num=$request->radio_num;
        $new->radio_unl=$request->radio_unl;
        $new->radio_to=$request->radio_to;


        
        
        $new->save();
        
        $all=Ziakticket::orderBy('created_at','desc')->get();
        $pilots=User::where('role',1)->orderBy('f_name')->get();    

        return redirect()->route('show_ziak_tickets')->with('preukaz_added','preukaz_added');


    }


    public function update_ziak_ticket_post(Request $request){

        $new=Ziakticket::find($request->preukaz_id);
        $new->preukaz_type=$request->typ_preukazu;
        $new->preukaz_num=$request->preukaz_num;


        $new->sep=$request->sep;
        $new->sep_to=$request->platnost_sep;
 

        $new->zdrav_sp1=$request->zdrav1;
        $new->zdrav_sp1_to=$request->platnost_zdrav1;
        

        $new->zdrav_sp2=$request->zdrav2;
        $new->zdrav_sp2_to=$request->platnost_zdrav2;
        
        
        $new->radio_has=$request->radio;
        $new->radio_type=$request->radio_type;
        $new->radio_num=$request->radio_num;
        $new->radio_unl=$request->radio_unl;
        $new->radio_to=$request->radio_to;
 

        
        
        $new->save();
        

        return redirect()->route('show_ziak_tickets')->with('preukaz_updated','preukaz_updated');



    }


    public function delete_ziak_ticket_post(Request $request){


        $del=Ziakticket::find($request->to_del);
        $user=User::find($del->user_id);
        $user->has_ticket=0;
        $user->save();
        
        $del->delete();



        return redirect()->route('show_ziak_tickets')->with('preukaz_deleted','preukaz_deleted');

    }




    public function change_password(){
        return view('boss.change_password');
    }




    public function change_password_post(Request $request){




        
        




        $user=User::where('role',3)->first();




        if(Hash::check($request->old_pass,$user->password)){

            


                if($request->new_pass == $request->new_pass2){
                    $user->password = Hash::make($request->new_pass2);
                    $user->save();
                    return redirect()->route('boss_main_screen')->with('pass_change_good','pass_change_good');
                }else{
                    return redirect()->route('boss.change_password')->with('not_match_pass','not_match_pass');
                }

        }else{

            return redirect()->route('boss.change_password')->with('bad_old_pass','bad_old_pass');

        }


   



    }






    public function show_absolvents(){

        $all=Absolvent::orderBy('created_at','desc')->get();

        return view('boss.show_absolvents')->with('all',$all);

    }



    public function add_absolvent(){
    
        return view('boss.add_absolvent');
    
    }


    public function add_absolvent_post(Request $request){


        $to_upd=new Absolvent;
        $to_upd->f_name=$request->f_name;
        $to_upd->l_name=$request->l_name;
        $to_upd->phone_num=$request->phone;
        $to_upd->email=$request->email;
        $to_upd->save();


        return redirect()->route('boss.show_absolvents')->with('absolvent_added','absolvent_added');

    }





    public function update_absolvent_post(Request $request){


        $to_upd=Absolvent::find($request->to_upd);
        $to_upd->f_name=$request->f_name;
        $to_upd->l_name=$request->l_name;
        $to_upd->phone_num=$request->phone;
        $to_upd->email=$request->email;
        $to_upd->save();

 
        return redirect()->route('boss.show_absolvents')->with('absolvent_updated','absolvent_updateed');

    }



    public function delete_absolvent_post(Request $request){


        $to_upd=Absolvent::find($request->to_del);
        $to_upd->delete();
        return redirect()->route('boss.show_absolvents')->with('absolvent_deleted','absolvent_deleted');

        
    }



    


    



    
}
