@extends('frontend_layout')


@section('topstyle')


<style>
#form_main{
    width:50%;
    margin:0 auto;
    display:none;
    text-align:center;
}


#choose_role_div{
    display:none;
}


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



                <div style="text-align:center">

                <a href="{{route('choose_login')}}"><button id="prihlasenie_trigger" class="btn btn-secondary">Prihlásenie</button></a>

                </div>



                

                




                    
                </div>
            </div>
        </div>
@endsection

