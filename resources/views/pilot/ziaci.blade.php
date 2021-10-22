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
<a href="{{route('pilot_main_screen')}}"><button class="btn btn-secondary">Späť</button></a><br><br>     






       <h2>Zoznam žiakov</h2><br> 
       @foreach($all_ziaci as $pilot)
        <p><a class="hover_pilot" href="{{route('one_ziak_show',['id'=>$pilot->id])}}">{{$pilot->f_name}} {{$pilot->l_name}}</p>

       @endforeach
<br>

@endsection