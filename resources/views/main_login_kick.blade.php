@extends('frontend_layout')


@section('topstyle')


<style>
#form_main{
    width:50%;
    margin:0 auto;
    
    text-align:center;
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




        @if(session('no_role'))

        <div class="alert alert-danger" role="alert">
            Na danú stránku nemáte právomoci. Prihláste sa ako {{session('no_role')}}.

        </div>

        @endif



        @if(session('bad_credentials'))

<div class="alert alert-danger" role="alert">
    Nesprávne prihlasovacie údaje.

</div>

@endif

           


                <form id="form_main" method="POST" action="{{route('main_screen_login_post')}}">
                <div class="links">



                    <h2>Prihlásenie</h2> 

                @csrf

                <label>Meno</label>    
                <input type="text" name="name" class="form-control"><br>

                <label>Heslo</label>    
                <input type="password" name="password" class="form-control">
                <br>

                <button class="btn btn-secondary">Prihlásiť</button>


                </form>


                    
                </div>
            </div>
        </div>
@endsection



