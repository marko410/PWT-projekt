@extends('frontend_layout')


@section('topstyle')

<style>

#choose_role_div .btn{
    width:150px;
}

</style>




@endsection





@section('content')


<div class="content">
                <div class="title m-b-md">
                    AIRPASS
                </div>



                
                @if(session('pass_change_good'))

<div class="alert alert-dark" role="alert">
   Heslo úspešne zmenené!

</div>

@endif

<div id="choose_role_div" style="text-align:center">
        
        <br>
        <a href="{{route('pilot_preukaz')}}"><button class="btn btn-secondary">Preukazy</button></a><br><br>
        <a href="{{route('pilot_ziaci')}}"><button class="btn btn-secondary">Žiaci</button></a><br><br>
        <a href="{{route('pilot_osobne_udaje')}}"><button class="btn btn-secondary">Osobné údaje</button></a><br><br>


        
        


        <a href="{{route('pilot_zmena_hesla')}}"><button class="btn btn-secondary">Zmena hesla</button></a><br><br>


        <p><span style="cursor:pointer" onclick="event.preventDefault();document.getElementById('logout_form').submit();" id="logout_btn"><strong>Odhlásiť sa</strong></span></p>
        <form id="logout_form" style="display:none" action="{{route('pilot_logout')}}" method="POST">
            @csrf

        </form>

        </div>


@endsection
