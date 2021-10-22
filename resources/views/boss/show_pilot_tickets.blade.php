@extends('frontend_layout')


@section('topstyle')

<style>

#choose_role_div .btn{
    width:175px;
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


.form_special{
    width:50%;
    margin:0 auto;
    
    text-align:center;
}





@media only screen and (max-width: 767px){
    .form_special{
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

<div id="choose_role_div" style="text-align:center">
<a href="{{route('boss_main_screen')}}"><button class="btn btn-secondary">Späť</button></a><br><br>     



@if(session('pilot_deleted'))

        <div class="alert alert-dark" role="alert">
           Pilot {{session('pilot_deleted')}} zmazaný!

        </div>

        @endif



        @if(session('preukaz_added'))

        <div class="alert alert-dark" role="alert">
           Preukaz pridaný!

        </div>

        @endif


        @if(session('preukaz_updated'))

        <div class="alert alert-dark" role="alert">
           Preukaz aktualizovaný!

        </div>

        @endif



        @if(session('preukaz_deleted'))

<div class="alert alert-dark" role="alert">
   Preukaz zmazaný!

</div>

@endif
        
        <div style='text-align:center'><a href="{{route('add_pilot_ticket')}}">
        <button class="btn btn-secondary">Pridať nový preukaz</button></a></div><br>
           

       <h2>Zoznam preukazov pilotov</h2><br>


<style>

.sub_box{
  border-bottom: 1px solid #d3d6d8;
  border-left: 1px solid #d3d6d8;
  border-right: 1px solid #d3d6d8;
  margin-bottom:20px;
  padding:10px;
  display:none;
  position:relative;
}

.preukaz_box{
  cursor:pointer;
}


.preukaz_plus{
  display:inline-block;color:#6c757d;position:absolute;top:17px;right:10px;
}

.preukaz_minus{
  display:none;color:#6c757d;position:absolute;top:17px;right:10px;
}




.delete_preu_button{
  position: absolute !important;
bottom: 8px !important;
right: 95px !important;
}



.delete_preu_button_m{
  display:none;
}



@media only screen and (max-width: 767px){
    .sub_box{
    padding-bottom:75px;

    }


    .delete_preu_button{
      display:none;
    }
    
    
    .delete_preu_button_m{
      display:block;
        text-align:center;
        margin-top:20px;
    }

}

</style>

       @foreach($all as $ticket)
  




    <div class="preukaz_upper_box">



       <div class="alert alert-secondary preukaz_box" data-id="{{$ticket->id}}" style="margin-bottom:0;position:relative" role="alert" id="preukaz_box_{{$ticket->id}}">
  <span style="color:red;position:absolute;left:10px">
  @php
  
 $go_hint=0; 
 



 if($ticket->sep==1 && $ticket->sep_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->sep_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91)
 {
    $go_hint++;
 }
 }





 if($ticket->mep==1 && $ticket->mep_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->mep_to);


 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91)
 {
    $go_hint++;
 }

 }




 if($ticket->z137t==1 && $ticket->z137_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->z137t_to);


 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91)
 {
    $go_hint++;
 }

 }



 if($ticket->fi==1 && $ticket->fi_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->fi_to);


 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91)
 {
    $go_hint++;
 }

 }



 if($ticket->zdrav_sp1==1 && $ticket->zdrav_sp1_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->zdrav_sp1_to);


 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91)
 {
    $go_hint++;
 }
 }






 if($ticket->zdrav_sp2==1 && $ticket->zdrav_sp2_to!==NULL){


 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->zdrav_sp2_to);


 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91)
 {
    $go_hint++;
 }

 }



if($ticket->radio_unl==2 && $ticket->radio_has==1 && $ticket->radio_to!==NULL){

  $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->radio_to);


 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91)
 {
    $go_hint++;
 }





}



if($go_hint>0){
  echo 'Pozor !';
}

 




  @endphp
  
  
  
  </span>
  
  
  
  
  
  
  {{$ticket->user->f_name}} {{$ticket->user->l_name}} 
  
  <span class="preukaz_plus" id="preukaz_plus_{{$ticket->id}}"><i class="fa fa-plus"></i></span>
  <span class="preukaz_minus" id="preukaz_minus_{{$ticket->id}}"><i class="fa fa-minus"></i></span>

  
  
      </div>



      <div class="sub_box" id="preukaz_sub_box_{{$ticket->id}}">


      <form method="POST" action="{{route('delete_pilot_ticket_post')}}" id="delete_preukaz_{{$ticket->id}}">
      @csrf
<input type="hidden" name="to_del" value="{{$ticket->id}}">
      </form>

        <div class="delete_preu_button">
      <button onclick="event.preventDefault();document.getElementById('delete_preukaz_{{$ticket->id}}').submit();" class="btn btn-danger "><i class="fa fa-times"></i> Odstrániť preukaz</button>
    </div>


  
<form method="POST" id='form_pilot' class="form_special" action="{{route('update_pilot_ticket_post')}}">

@csrf
    

<!-- meno part -->

       <p> Typ preukazu:


<select name="typ_preukazu" class="form-control">


<option value="ATPL" @if($ticket->preukaz_type=='ATPL') selected @endif >ATPL</option>
<option value="CPL" @if($ticket->preukaz_type=='CPL') selected @endif >CPL</option>
<option value="PPL" @if($ticket->preukaz_type=='PPL') selected @endif >PPL</option>

    </select>



</p>
  

<input type="hidden" name="preukaz_id" value="{{$ticket->id}}">



  <p> Číslo preukazu: 
       
       <input type="text" class="form-control" placeholder="Číslo preukazu" name="preukaz_num" value="{{$ticket->preukaz_num}}">
  
  </p>



  <p style="width:40%;display:inline-block"> SEP:


<select name="sep" class="form-control">


<option value="1" @if($ticket->sep==1) selected @endif >Áno</option>
<option value="2" @if($ticket->sep==2) selected @endif>Nie</option>


    </select>



</p>



  <p style="width:40%;display:inline-block
  
  @php
 if($ticket->sep==1 && $ticket->sep_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->sep_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo ';color: orange';
 }

 else if($difference <= 1)
 {
    echo ';color: red';
 }


 }
 @endphp   
  
  
  
  
  
  
  "> Platnosť SEP:
       
       <input
       
       
@php
 if($ticket->sep==1 && $ticket->sep_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->sep_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo 'style="border:1px solid orange"';
 }else if($difference <= 1)
 {
  echo 'style="border:1px solid red"';
 }
 }
 @endphp      
       
       
       
       
        type="text" class="form-control platnost_sep" value="{{$ticket->sep_to}}" name="platnost_sep">
  
  </p>




  
  <p style="width:40%;display:inline-block"> MEP:


<select name="mep" class="form-control">


<option value="1" @if($ticket->mep==1) selected @endif >Áno</option>
<option value="2" @if($ticket->mep==2) selected @endif >Nie</option>


    </select>



</p>



  <p style="width:40%;display:inline-block
  
  @php
 if($ticket->mep==1 && $ticket->mep_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->mep_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo ';color: orange';
 }

 else if($difference <= 1)
 {
    echo ';color: red';
 }


 }
 @endphp   
  
  
  "> Platnosť MEP:
       
       <input 
       
       @php
 if($ticket->mep==1 && $ticket->mep_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->mep_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo 'style="border:1px solid orange"';
 }else if($difference <= 1)
 {
  echo 'style="border:1px solid red"';
 }
 }
 @endphp  
       
       
        type="text" class="form-control platnost_mep" value="{{$ticket->mep_to}}" name="platnost_mep">
  
  </p>




  
  <p style="width:40%;display:inline-block"> Z137T:


<select name="z137t" class="form-control">


<option value="1" @if($ticket->z137t==1) selected @endif >Áno</option>
<option value="2" @if($ticket->z137t==2) selected @endif >Nie</option>


    </select>



</p>



  <p style="width:40%;display:inline-block
  
  @php
 if($ticket->z137t==1 && $ticket->z137t_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->z137t_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo ';color: orange';
 }

 else if($difference <= 1)
 {
    echo ';color: red';
 }


 }
 @endphp

  
  "> Platnosť Z137T:
       
       <input   
       
       @php
 if($ticket->z137t==1 && $ticket->z137t_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->z137t_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo 'style="border:1px solid orange"';
 }else if($difference <= 1)
 {
  echo 'style="border:1px solid red"';
 }
 }
 @endphp  type="text" class="form-control platnost_z137t" name="platnost_z137t" value="{{$ticket->z137t_to}}">
  
  </p>





  <p style="width:40%;display:inline-block"> FI:


<select name="fi" class="form-control">


<option value="1" @if($ticket->fi==1) selected @endif >Áno</option>
<option value="2" @if($ticket->fi==2) selected @endif >Nie</option>


    </select>



</p>



  <p style="width:40%;display:inline-block
  
  @php
 if($ticket->fi==1 && $ticket->fi_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->fi_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo ';color: orange';
 }

 else if($difference <= 1)
 {
    echo ';color: red';
 }


 }
 @endphp
  
  
  
  "> Platnosť FI:
       
       <input 
       
       @php
 if($ticket->fi==1 && $ticket->fi_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->fi_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo 'style="border:1px solid orange"';
 }else if($difference <= 1)
 {
  echo 'style="border:1px solid red"';
 }
 }
 @endphp
       
       
       
       
        type="text" class="form-control platnost_fi" name="platnost_fi" value="{{$ticket->fi_to}}">
  
  </p>







  
  <p style="width:40%;display:inline-block"> Zdravotná spôsobilosť 1:


<select name="zdrav1" class="form-control">




<option value="1" @if($ticket->zdrav_sp1==1) selected @endif >Áno</option>
<option value="2" @if($ticket->zdrav_sp1==2) selected @endif >Nie</option>


    </select>



</p>



  <p style="width:40%;display:inline-block
  
  @php
 if($ticket->zdrav_sp1==1 && $ticket->zdrav_sp1_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->zdrav_sp1_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo ';color: orange';
 }

 else if($difference <= 1)
 {
    echo ';color: red';
 }


 }
 @endphp
  
  
  
  
  "> Platnosť ZS1:
       
       <input 
       
       @php
 if($ticket->zdrav_sp1==1 && $ticket->zdrav_sp1_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->zdrav_sp1_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo 'style="border:1px solid orange"';
 }else if($difference <= 1)
 {
  echo 'style="border:1px solid red"';
 }
 }
 @endphp
       
       
       
       type="text" class="form-control platnost_zdrav1" name="platnost_zdrav1" value="{{$ticket->zdrav_sp1_to}}">
  
  </p>







    
  <p style="width:40%;display:inline-block"> Zdravotná spôsobilosť 2:


<select name="zdrav2" class="form-control">


<option value="1" @if($ticket->zdrav_sp2==1) selected @endif >Áno</option>
<option value="2" @if($ticket->zdrav_sp2==2) selected @endif >Nie</option>


    </select>



</p>



  <p style="width:40%;display:inline-block
  
  
  @php
 if($ticket->zdrav_sp2==1 && $ticket->zdrav_sp2_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->zdrav_sp2_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo ';color: orange';
 }

 else if($difference <= 1)
 {
    echo ';color: red';
 }


 }
 @endphp
  
  
  
  "> Platnosť ZS2:
       
       <input
       
       @php
 if($ticket->zdrav_sp2==1 && $ticket->zdrav_sp2_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->zdrav_sp2_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo 'style="border:1px solid orange"';
 }else if($difference <= 1)
 {
  echo 'style="border:1px solid red"';
 }
 }
 @endphp
       
       
       
        type="text" class="form-control platnost_zdrav2" name="platnost_zdrav2" value="{{$ticket->zdrav_sp2_to}}">
  
  </p>
























  <p style="width:40%;display:inline-block"> Preukaz rádiofonistu:


<select name="radio" class="form-control radio_class">


<option value="1" @if($ticket->radio_has==1) selected @endif>Áno</option>
<option value="2" @if($ticket->radio_has==2) selected @endif>Nie</option>


    </select>

 

</p>



<p style="width:40%;display:inline-block"> Druh pr. rádiofonistu:


<select name="radio_type" class="form-control radio_type" @if($ticket->radio_has==2) disabled @endif>


<option value="Všeobecný" @if($ticket->radio_type=='Všeobecný') selected @endif >Všeobecný</option>
<option value="OFS II" @if($ticket->radio_type=='OFS II') selected @endif >OFS II</option>

<option value="Obmedz. osv." @if($ticket->radio_type=='Obmedz. osv.') selected @endif >Obmedz. osv.</option>
<option value="LPSI" @if($ticket->radio_type=='LPSI') selected @endif >LPSI</option>



    </select>



</p>



  <p style="width:40%;display:inline-block"> Číslo pr. rádiofonistu:
       
       <input type="text" @if($ticket->radio_has==1) value="{{$ticket->radio_num}}" @endif 
       
       
       
       class="form-control radio_num" name="radio_num" 
       
       
       
       @if($ticket->radio_has==2) disabled @endif
       
       
       
       >
  
  </p>



  <p style="width:40%;display:inline-block"> Platnosť pr. rádiofonistu:


<select name="radio_unl" class="form-control radio_unl" @if($ticket->radio_has==2) disabled @endif>


<option value="1" @if($ticket->radio_unl==1) selected @endif >Neobmedzená</option>
<option value="2" @if($ticket->radio_unl==2) selected @endif>Obmedzená</option>


    </select>



</p>



<p style="width:40%;display:inline-block

@php
 if($ticket->radio_has==1 && $ticket->radio_unl==2 && $ticket->radio_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->radio_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo ';color:orange';
 }else if($difference <= 1)
 {
  echo ';color:red';
 }
 }
 @endphp




"> Platnosť pr. rádiofonistu do:
       
       <input
       
       
       @php
 if($ticket->radio_has==1 && $ticket->radio_unl==2 && $ticket->radio_to!==NULL){
 $current = strtotime(date("d-m-Y"));
 $date    = strtotime($ticket->radio_to);

 $datediff = $date - $current;
 $difference = floor($datediff/(60*60*24));
if($difference < 91 && $difference > 1)
 {
    echo 'style="border:1px solid orange"';
 }else if($difference <= 1)
 {
  echo 'style="border:1px solid red"';
 }
 }
 @endphp
       
       
       
       
       
       
        type="text" class="form-control platnost_radio" name="radio_to" 


       @if($ticket->radio_has==1 && $ticket->radio_unl==2) value="{{$ticket->radio_to}}" @endif 
       @if($ticket->radio_has==2) disabled @endif
       @if($ticket->radio_has==1 && $ticket->radio_unl==1) disabled @endif
       >
  
  </p>



  

  


  <br>

  <button id='submit_button' class="btn btn-secondary">Aktualizovať preukaz</button>




</form>




<div class="delete_preu_button_m">
<button onclick="event.preventDefault();document.getElementById('delete_preukaz_{{$ticket->id}}').submit();" class="btn btn-danger "><i class="fa fa-times"></i> Odstrániť preukaz</button>
</div>
      
      </div>



    </div>


@endforeach
</div>



<br>

@endsection



@section('subscripts')

<script>

$(".preukaz_box").click(function(){

    var id=$(this).data('id');

    if($("#preukaz_sub_box_"+id).is(':visible')){
      $(".sub_box").slideUp();

      $(this).children('.preukaz_plus').show();
      $(this).children('.preukaz_minus').hide();


    }else{
      $(".sub_box").slideUp();
      $(".preukaz_minus").hide();
      $(".preukaz_plus").show();
      
      $(this).children('.preukaz_plus').hide();
      $(this).children('.preukaz_minus').show();
$("#preukaz_sub_box_"+id).slideDown();

    }

    


});


</script>


<script>
$( ".platnost_sep" ).datepicker({dateFormat: "dd-mm-yy"});
$( ".platnost_mep" ).datepicker({dateFormat: "dd-mm-yy"});
$( ".platnost_z137t" ).datepicker({dateFormat: "dd-mm-yy"});
$( ".platnost_fi" ).datepicker({dateFormat: "dd-mm-yy"});
$( ".platnost_zdrav1" ).datepicker({dateFormat: "dd-mm-yy"});
$( ".platnost_zdrav2" ).datepicker({dateFormat: "dd-mm-yy"});
$( ".platnost_radio" ).datepicker({dateFormat: "dd-mm-yy"});
</script>



<script>


$(".radio_class").change(function(){


  if($(this).val()==1){
    $(this).parent().siblings('p').children('.radio_type, .radio_num, .radio_unl').prop("disabled", false);

    if($(this).parent().siblings('p').children('.radio_unl').val()==1){
      $(this).parent().siblings('p').children('.platnost_radio').prop("disabled", true);
    }else{
      $(this).parent().siblings('p').children('.platnost_radio').prop("disabled", false);
    }
    
  }else{
    $(this).parent().siblings('p').children('.radio_type, .radio_num, .radio_unl, .platnost_radio').prop("disabled", true);
  }

  


});

</script>




<script>


$( ".radio_unl" ).change(function() {
 
 let val=$(this).val();

 if(val==1){
  $(this).parent().siblings('p').children('.platnost_radio').prop('disabled', true);
    
 }else if(val==2){
  $(this).parent().siblings('p').children('.platnost_radio').prop('disabled', false);
 }

});


</script>



@endsection
