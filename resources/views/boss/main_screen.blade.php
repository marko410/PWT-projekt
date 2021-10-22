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




                




<div id="choose_role_div" style="text-align:center;padding-bottom:50px">
        
        <br>
        <a href="{{route('boss_all_pilots')}}"><button class="btn btn-secondary">Piloti</button></a><br><br>
       <a href="{{route('boss_add_pilot')}}"> <button class="btn btn-secondary">Pridať pilota</button></a><br><br>
       <a href="{{route('show_pilot_tickets')}}"> <button class="btn btn-secondary">Preukazy pilotov</button></a><br><br>
        
        <!--<button class="btn btn-secondary">Odobrať pilota</button><br><br>-->


       
        <a href="{{route('boss_all_ziaci')}}"> <button class="btn btn-secondary">Žiaci</button></a><br><br>
        <a href="{{route('boss_add_ziak')}}"><button class="btn btn-secondary">Pridať žiaka</button></a><br><br>
        <a href="{{route('show_ziak_tickets')}}"> <button class="btn btn-secondary">Preukazy žiakov</button></a><br><br>
       
        <!-- <button class="btn btn-secondary">Odobrať žiaka</button><br><br>-->



        
        <a href="{{route('boss.show_absolvents')}}"> <button class="btn btn-secondary">Absolventi</button></a><br><br>



        <a href="{{route('boss.change_password')}}"> <button class="btn btn-secondary">Zmena hesla</button></a><br><br>


        <p><span style="cursor:pointer" onclick="event.preventDefault();document.getElementById('logout_form').submit();" id="logout_btn"><strong>Odhlásiť sa</strong></span></p>
        <form id="logout_form" style="display:none" action="{{route('boss_logout')}}" method="POST">
            @csrf

        </form>

        </div>


@endsection
