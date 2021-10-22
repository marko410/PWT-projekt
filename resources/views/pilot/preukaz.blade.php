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

<div id="choose_role_div" style="text-align:center">
<a href="{{route('pilot_main_screen')}}"><button style="width:220px" class="btn btn-secondary">Späť</button></a><br><br>     
       <h2>Preukazy</h2><br> 






       @if($preukaz==NULL)


<p>Nemáte žiadne preukazy.</p>


       @else


      
       <p> 
       <strong>Typ preukazu: </strong> 
       @if($preukaz->preukaz_type!==NULL)
       {{$preukaz->preukaz_type}}
        @else
        -
        @endif
       </p>



       <p> 
       <strong>Číslo preukazu: </strong> 
       @if($preukaz->preukaz_num!==NULL)
       {{$preukaz->preukaz_num}}
        @else
        -
        @endif
       </p>



       <p> 
       <strong>SEP: </strong> 
       @if($preukaz->sep==1)
       Áno
        @elseif($preukaz->sep==2)
        Nie
        @else
        -
        @endif
       </p>




       <p

@php
if($preukaz->sep==1 && $preukaz->sep_to!==NULL){
$current = strtotime(date("d-m-Y"));
$date    = strtotime($preukaz->sep_to);

$datediff = $date - $current;
$difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
{
  echo 'style="color: orange"';
}

else if($difference <= 1)
{
  echo 'style="color: red"';
}


}
@endphp



>
       <strong>Platnosť SEP do: </strong> 
       @if($preukaz->sep_to!==NULL)
       {{$preukaz->sep_to}}
        @else
        -
        @endif
       </p>





       <p> 
       <strong>MEP: </strong> 
       @if($preukaz->mep==1)
       Áno
        @elseif($preukaz->mep==2)
        Nie
        @else
        -
        @endif
       </p>



       <p

@php
if($preukaz->mep==1 && $preukaz->mep_to!==NULL){
$current = strtotime(date("d-m-Y"));
$date    = strtotime($preukaz->mep_to);

$datediff = $date - $current;
$difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
{
  echo 'style="color: orange"';
}

else if($difference <= 1)
{
  echo 'style="color: red"';
}


}
@endphp



>
       <strong>Platnosť MEP do: </strong> 
       @if($preukaz->mep_to!==NULL)
       {{$preukaz->mep_to}}
        @else
        -
        @endif
       </p>



       <p>
       <strong>Z137T: </strong> 
       @if($preukaz->z137t==1)
       Áno
        @elseif($preukaz->z137t==2)
        Nie
        @else
        -
        @endif
       </p>






       <p

@php
if($preukaz->z137t==1 && $preukaz->z137t_to!==NULL){
$current = strtotime(date("d-m-Y"));
$date    = strtotime($preukaz->z137t_to);

$datediff = $date - $current;
$difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
{
  echo 'style="color: orange"';
}

else if($difference <= 1)
{
  echo 'style="color: red"';
}


}
@endphp

>
       <strong>Platnosť Z137T do: </strong> 
       @if($preukaz->z137t_to!==NULL)
       {{$preukaz->z137t_to}}
        @else
        -
        @endif
       </p>








       <p>
       <strong>FI: </strong> 
       @if($preukaz->fi==1)
       Áno
        @elseif($preukaz->fi==2)
        Nie
        @else
        -
        @endif
       </p>






       <p

@php
if($preukaz->fi==1 && $preukaz->fi_to!==NULL){
$current = strtotime(date("d-m-Y"));
$date    = strtotime($preukaz->fi_to);

$datediff = $date - $current;
$difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
{
  echo 'style="color: orange"';
}

else if($difference <= 1)
{
  echo 'style="color: red"';
}


}
@endphp


>
       <strong>Platnosť FI do: </strong> 
       @if($preukaz->fi_to!==NULL)
       {{$preukaz->fi_to}}
        @else
        -
        @endif
       </p>





       <p> 
       <strong>Zdrav. Spôsobilosť 1. : </strong> 
       @if($preukaz->zdrav_sp1==1)
       Áno
        @elseif($preukaz->zdrav_sp1==2)
        Nie
        @else
        -
        @endif
       </p>






       <p

@php
if($preukaz->zdrav_sp1==1 && $preukaz->zdrav_sp1_to!==NULL){
$current = strtotime(date("d-m-Y"));
$date    = strtotime($preukaz->zdrav_sp1_to);

$datediff = $date - $current;
$difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
{
  echo 'style="color: orange"';
}

else if($difference <= 1)
{
  echo 'style="color: red"';
}


}
@endphp


>
       <strong>Platnosť Zdrav. Spôsobilosť 1. do: </strong> 
       @if($preukaz->zdrav_sp1_to!==NULL)
       {{$preukaz->zdrav_sp1_to}}
        @else
        -
        @endif
       </p>




       <p> 
       <strong>Zdrav. Spôsobilosť 2. : </strong> 
       @if($preukaz->zdrav_sp2==1)
       Áno
        @elseif($preukaz->zdrav_sp2==2)
        Nie
        @else
        -
        @endif
       </p>






       <p

@php
if($preukaz->zdrav_sp2==1 && $preukaz->zdrav_sp2_to!==NULL){
$current = strtotime(date("d-m-Y"));
$date    = strtotime($preukaz->zdrav_sp2_to);

$datediff = $date - $current;
$difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
{
  echo 'style="color: orange"';
}

else if($difference <= 1)
{
  echo 'style="color: red"';
}


}


@endphp

>
       <strong>Platnosť Zdrav. Spôsobilosť 2. do: </strong> 
       @if($preukaz->zdrav_sp2_to!==NULL)
       {{$preukaz->zdrav_sp2_to}}
        @else
        -
        @endif
       </p>


       <p> 
       <strong>Preukaz rádiofonistu : </strong> 
       @if($preukaz->radio_has==1)
       Áno
        @elseif($preukaz->radio_has==2)
        Nie
        @else
        -
        @endif
       </p>



       <p> 
       <strong>Typ preukazu rádiofonistu : </strong> 
       @if($preukaz->radio_type!==NULL)
       {{$preukaz->radio_type}}
        @else
        -
        @endif
       </p>




       <p> 
       <strong>Číslo preukazu rádiofonistu : </strong> 
       @if($preukaz->radio_num!==NULL)
       {{$preukaz->radio_num}}
        @else
        -
        @endif
       </p>




       <p> 
       <strong>Platnosť preukazu rádiofonistu : </strong> 
       @if($preukaz->radio_unl==1)
       Neobmedzená
        @elseif($preukaz->radio_unl==2)
        Obmedzená
        @else
        -
        @endif
       </p>



       @if($preukaz->radio_unl==2)
       <p


@php
if($preukaz->radio_unl==2 && $preukaz->radio_has==1 && $preukaz->radio_to!==NULL){
$current = strtotime(date("d-m-Y"));
$date    = strtotime($preukaz->radio_to);

$datediff = $date - $current;
$difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
{
  echo 'style="color: orange"';
}

else if($difference <= 1)
{
  echo 'style="color: red"';
}


}
@endphp



>
       <strong>Platnosť preukazu rádiofonistu do: </strong> 
       @if($preukaz->radio_to!==NULL)
       Neobmedzená
        {{$preukaz->radio_to}}
        @else
        -
        @endif
       </p>



       @endif





       
       
       






       @endif


<br>

@endsection



@section('subscripts')

@endsection
