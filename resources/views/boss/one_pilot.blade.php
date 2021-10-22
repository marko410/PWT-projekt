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
<a href="{{route('boss_all_pilots')}}"><button style="width:220px" class="btn btn-secondary"><i class="fa fa-users" aria-hidden="true"></i> Späť na všetkých pilotov</button></a><br><br>     
       <h2>Pilot <span id="f_name_head">{{$pilot->f_name}}</span> <span id="l_name_head">{{$pilot->l_name}}</span></h2><br> 


    <!-- meno part -->
       <p> Meno: <span class="to_change" style="cursor:pointer">
       
       
       
       <input data-label="f_name" type="text" class="input_change" name="f_name"
       
       value="{{$pilot->f_name}}"
       
        style="display:none">

        <span data-label="f_name" class="save_input" style="display:none">Uložiť</span>
       
       
       
       <span class="text_change">{{$pilot->f_name}}</span> </span>
       
       
       
       </p>



       <!-- priezvisko part -->


       <p> Priezvisko: <span class="to_change" style="cursor:pointer">
       
       
       
       <input data-label="l_name" type="text" class="input_change" name="l_name"
       
       value="{{$pilot->l_name}}"
       
        style="display:none">

        <span data-label="l_name" class="save_input" style="display:none">Uložiť</span>
       
       
       
       <span class="text_change">{{$pilot->l_name}}</span> </span>
       
       
       
       </p>



<p> Prihlasovacie meno: {{$pilot->name}}


</p>

<!-- rod_cislo part -->


<p> Rodné číslo: <span class="to_change" style="cursor:pointer">
       
       
       
       <input data-label="rod_cislo" type="text" class="input_change" name="rod_cislo"
       
       value="{{$pilot->rod_cislo}}"
       
        style="display:none">

        <span data-label="rod_cislo" class="save_input" style="display:none">Uložiť</span>
       
       
       
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
       
       
       
       <input data-label="dat_nar" type="text" class="input_change" name="dat_nar"
       
       value="{{$pilot->dat_nar}}"
       
        style="display:none">

        <span data-label="dat_nar" class="save_input" style="display:none">Uložiť</span>
       
       
       
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
       
       
       
       <input data-label="ulica" type="text" class="input_change" name="ulica"
       
       value="{{$pilot->ulica}}"
       
        style="display:none">

        <span data-label="ulica" class="save_input" style="display:none">Uložiť</span>
       
       
       
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
       
       
       
       <input data-label="c_ulice" type="text" class="input_change" name="c_ulice"
       
       value="{{$pilot->c_ulice}}"
       
        style="display:none">

        <span data-label="c_ulice" class="save_input" style="display:none">Uložiť</span>
       
       
       
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
       
       
       
       <input data-label="city" type="text" class="input_change" name="city"
       
       value="{{$pilot->city}}"
       
        style="display:none">

        <span data-label="city" class="save_input" style="display:none">Uložiť</span>
       
       
       
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
       
       
       
       <input data-label="psc" type="text" class="input_change" name="psc"
       
       value="{{$pilot->psc}}"
       
        style="display:none">

        <span data-label="psc" class="save_input" style="display:none">Uložiť</span>
       
       
       
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
       
       
       
       <input data-label="phone_1" type="text" class="input_change" name="phone_1"
       
       value="{{$pilot->phone_1}}"
       
        style="display:none">

        <span data-label="phone_1" class="save_input" style="display:none">Uložiť</span>
       
       
       
       <span class="text_change">
       
       
       @if($pilot->phone_1==NULL)
-----

       @else
       {{$pilot->phone_1}}

       @endif
       
       </span> </span>
       
  
       
       </p>

        <!-- phone_2 part -->


<p> Telefón2: <span class="to_change" style="cursor:pointer">
       
       
       
       <input data-label="phone_2" type="text" class="input_change" name="phone_2"
       
       value="{{$pilot->phone_2}}"
       
        style="display:none">

        <span data-label="phone_2" class="save_input" style="display:none">Uložiť</span>
       
       
       
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
       
       
       
       <input data-label="email" type="text" class="input_change" name="email"
       
       value="{{$pilot->email}}"
       
        style="display:none">

        <span data-label="email" class="save_input" style="display:none">Uložiť</span>
       
       
       
       <span class="text_change">
       
       @if($pilot->email==NULL)
-----

       @else
       {{$pilot->email}}

       @endif
       
       </span> </span>
       
  
       
       </p>





<form method="POST" action="{{route('boss_one_pilot_delete',['id'=>$pilot->id])}}">


@csrf
       <button class="btn btn-danger"><i class="fa fa-user-times"></i> Zmazať pilota</button>
</form>


       <form method="POSt" id="hit_form">
        @csrf


       </form>
      
<br>

@endsection



@section('subscripts')

<script>

$(document).ready(function(){

    $(".text_change").click(function(){
    $(this).hide();
    $(this).siblings(".input_change").show();
    $(this).siblings(".save_input").show();
});








$(".save_input").click(function(){
    
    var changed_val=$(this).siblings(".input_change").first().val();



    $(this).siblings(".text_change").html(changed_val);



    $(this).siblings(".text_change").show();



    $(this).siblings(".input_change").hide();



    $(this).hide();


    let _token   = $('#hit_form').find('input[name=_token]').attr("value");
    let input_which =  $(this).data('label');

    $.ajax({
      url: "{{route('boss_update_field')}}",
      type:"POST",
      data:{
        what_val: input_which,  
        f_name: changed_val,
        user_id: {{$pilot->id}},
        _token: _token
      },
      success: function(response)
      {
          //var jsonData = JSON.parse(response);

          
          if (response.success == "1")
          {

             
                console.log('were cool');


                if(input_which=='f_name'){
                    $("#f_name_head").html(changed_val);
                }else if(input_which=='l_name'){
                  $("#l_name_head").html(changed_val);
                }
            
          }
          else
          {
             


            console.log('wrong');



          }
     }
     });






    
});





});


</script>


@endsection
