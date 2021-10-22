@extends('frontend_layout')


@section('topstyle')

<style>

#choose_role_div .btn{
    width:150px;
}

.hover_pilot{
    text-decoration:none;
    color:#636b6f;
}

.hover_pilot:visited{
    color:#636b6f;
}

.hover_pilot:hover{
    font-weight:900;
    color:#636b6f;
}



</style>




@endsection





@section('content')


<div class="content">
                <div class="title m-b-md">
                    AIRPASS
                </div>

<div id="choose_role_div" style="text-align:center">
<a href="{{route('boss_main_screen')}}"><button class="btn btn-secondary">Späť</button></a><br><br>     



@if(session('pilot_deleted'))

        <div class="alert alert-dark" role="alert">
           Pilot {{session('pilot_deleted')}} zmazaný!

        </div>

        @endif



        @if(session('pilot_added'))

        <div class="alert alert-dark" role="alert">
           Pilot {{session('pilot_added')}} pridaný!

        </div>

        @endif



       <h2>Zoznam pilotov</h2><br> 
       @foreach($all_pilots as $pilot)
        <p><a class="hover_pilot" href="{{route('boss_one_pilot_show',['id'=>$pilot->id])}}">{{$pilot->f_name}} {{$pilot->l_name}}</p>

       @endforeach
<br>

@endsection