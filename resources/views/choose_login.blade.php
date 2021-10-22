@extends('frontend_layout')


@section('topstyle')


<style>



#choose_role_div .btn{
    width:100px;
}


@media only screen and (max-width: 767px){
    #form_main{
    width:70%;
    }

}


</style>



@endsection

@section('content')
            <div class="content">
                <div class="title m-b-md">
                    AIRPASS
                </div>





                <div id="choose_role_div" style="text-align:center">
        
                <br>
                <a href="{{route('main_login_form_screen',['id'=>3])}}"><button id="prihlasenie_trigger_riaditel" class="btn btn-secondary">Riaditeľ</button></a><br><br>
                <a href="{{route('main_login_form_screen',['id'=>2])}}"><button id="prihlasenie_trigger_pilot" class="btn btn-secondary">Pilot</button></a><br><br>
                <a href="{{route('main_login_form_screen',['id'=>1])}}"><button id="prihlasenie_trigger_ziak" class="btn btn-secondary">Žiak</button></a><br>

                </div>

                



                    
                </div>
            </div>
        </div>
@endsection


