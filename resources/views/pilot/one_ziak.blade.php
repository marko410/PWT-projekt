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
<a href="{{route('pilot_ziaci')}}"><button style="width:220px" class="btn btn-secondary"><i class="fa fa-users" aria-hidden="true"></i> Späť na všetkých žiakov</button></a><br><br>     
       <h2>Žiak <span id="f_name_head">{{$pilot->f_name}}</span> <span id="l_name_head">{{$pilot->l_name}}</span></h2><br> 


    <!-- meno part -->
       <p> Meno: <span class="to_change" style="cursor:pointer">
       
       
       
       
       <span class="text_change">{{$pilot->f_name}}</span> </span>
       
       
       
       </p>



       <!-- priezvisko part -->


       <p> Priezvisko: <span class="to_change" style="cursor:pointer">
       
       
       
       
       <span class="text_change">{{$pilot->l_name}}</span> </span>
       
       
       
       </p>

<!-- rod_cislo part -->


<p> Rodné číslo: <span class="to_change" style="cursor:pointer">
       
       
       
      
       
       
       <span class="text_change">
       
       @if($pilot->rod_cislo==NULL)
-----

       @else
       {{$pilot->rod_cislo}}

       @endif
       
       
       </span> </span>
       
  
       
       </p>
       
       <!-- datum_narodenia part -->


<p> Dátum narodenia: <span class="to_change" style="cursor:pointer">
       
       
   
       
       <span class="text_change"> 
        @if($pilot->dat_nar==NULL)
-----

       @else
       {{$pilot->dat_nar}}

       @endif
       
       </span> </span>
       
  
       
       </p>
       
       <!-- ulica part -->


<p> Ulica: <span class="to_change" style="cursor:pointer">
       
       
    
       
       
       <span class="text_change">
       @if($pilot->ulica==NULL)
-----

       @else
       {{$pilot->ulica}}

       @endif
       
       </span> </span>
       
  
       
       </p>
       
       <!-- c_ulice part -->


<p> Číslo domu: <span class="to_change" style="cursor:pointer">
       
       
       
   
       
       <span class="text_change">
       
       @if($pilot->c_ulice==NULL)
-----

       @else
       {{$pilot->c_ulice}}

       @endif
       
       
       </span> </span>
       
  
       
       </p>

       <!-- city part -->


<p> Mesto: <span class="to_change" style="cursor:pointer">
       
       

       
       <span class="text_change">
       
       @if($pilot->city==NULL)
-----

       @else
       {{$pilot->city}}

       @endif
       
       
       </span> </span>
       
  
       
       </p>

         <!-- psc part -->


<p> PSČ: <span class="to_change" style="cursor:pointer">
       
       
       
  
       
       <span class="text_change">
       
       @if($pilot->psc==NULL)
-----

       @else
       {{$pilot->psc}}

       @endif
       
       
       </span> </span>
       
  
       
       </p>

 <!-- phone_1 part -->


<p> Telefón1: <span class="to_change" style="cursor:pointer">
       
   
       
       @if($pilot->phone_1==NULL)
-----

       @else
       {{$pilot->phone_1}}

       @endif
       
       </span> </span>
       
  
       
       </p>

        <!-- phone_2 part -->


<p> Telefón2: <span class="to_change" style="cursor:pointer">
       
    
       
       <span class="text_change">
       
       @if($pilot->phone_2==NULL)
-----

       @else
       {{$pilot->phone_2}}

       @endif
       
       </span> </span>
       
  
       
       </p>

        <!-- email part -->


<p> Email: <span class="to_change" style="cursor:pointer">
       
       
       
      
       
       <span class="text_change">
       
       @if($pilot->email==NULL)
-----

       @else
       {{$pilot->email}}

       @endif
       
       </span> </span>
       
  
       
       </p>




@endsection



@section('subscripts')


@endsection