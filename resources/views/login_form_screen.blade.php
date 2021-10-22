@extends('frontend_layout')


@section('topstyle')


<style>


#form_main{
    width:50%;
    margin:0 auto;
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



                
                @if(session('bad_credentials'))

<div class="alert alert-danger" role="alert">
    Nesprávne prihlasovacie údaje.

</div>

@endif


@if(session('no_role'))

<div class="alert alert-danger" role="alert">
    Na danú stránku nemáte právomoci. Prihláste sa ako {{session('no_role')}}.

</div>

@endif
                


                <form id="form_main" method="POST" action="{{route('main_screen_login_post')}}">
                <div class="links">

                
                <br>


                    <h2>Prihlásenie  
                        @if($id==3)
                                    (riaditeľ)
                        @elseif($id==2)
                            (pilot)
                        @elseif($id==1)
                            (žiak)
                        

                        @endif
                    </h2> 

                @csrf

                <label>Meno</label>    
                <input type="text" name="name" class="form-control"><br>

                <label>Heslo</label>    
                <input type="password" name="password" class="form-control">
                <input type="hidden" name="who" class="form-control" value="{{$id}}">
                <br>

                <button type="submit" class="btn btn-secondary">Prihlásiť</button>

                

               <br>


               
                </form>
       
                    
                </div>

                <br><br>
                <a href="{{route('choose_login')}}"><button class="btn btn-secondary" id="go_back_choose_role">Späť</button></a>
            </div>
        </div>
         
@endsection


