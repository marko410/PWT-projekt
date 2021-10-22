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



@if(session('absolvent_added'))

        <div class="alert alert-dark" role="alert">
           Absolvent pridaný

        </div>

        @endif



        @if(session('absolvent_updated'))

        <div class="alert alert-dark" role="alert">
           Absolvent aktualizovaný

        </div>

        @endif



        @if(session('absolvent_deleted'))

        <div class="alert alert-dark" role="alert">
           Absolvent zmazaný

        </div>

        @endif



       
        
        <div style='text-align:center'><a href="{{route('boss.add_absolvent')}}">
        <button class="btn btn-secondary">Pridať absolventa</button></a></div><br>
           

       <h2>Zoznam absolventov</h2><br>


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
position:absolute;
bottom:10px;
right:20px;
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
    
    
    .form_special p{
        width:100% !important;
    }

}

</style>

       @foreach($all as $ticket)
  




    <div class="preukaz_upper_box">



       <div class="alert alert-secondary preukaz_box" data-id="{{$ticket->id}}" style="margin-bottom:0;position:relative" role="alert" id="preukaz_box_{{$ticket->id}}">
  {{$ticket->f_name}} {{$ticket->l_name}} 
  
  <span class="preukaz_plus" id="preukaz_plus_{{$ticket->id}}"><i class="fa fa-plus"></i></span>
  <span class="preukaz_minus" id="preukaz_minus_{{$ticket->id}}"><i class="fa fa-minus"></i></span>

  
  
      </div>



      <div class="sub_box" id="preukaz_sub_box_{{$ticket->id}}">


      <form method="POST" action="{{route('boss.delete_absolvent_post')}}" id="delete_preukaz_{{$ticket->id}}">
      @csrf
<input type="hidden" name="to_del" value="{{$ticket->id}}">
      </form>




<div class="delete_preu_button">
<button onclick="event.preventDefault();document.getElementById('delete_preukaz_{{$ticket->id}}').submit();" class="btn btn-danger "><i class="fa fa-times"></i> Odstrániť</button>
</div>






        
  


  
<form method="POST" id='form_pilot' class="form_special" action="{{route('boss.update_absolvent_post')}}">

@csrf
    


<p style="width:40%;display:inline-block"> Meno:
       
       <input type="text" class="form-control" value="{{$ticket->f_name}}" name="f_name">
  
  </p>



  <p style="width:40%;display:inline-block"> Priezvisko:
       
       <input type="text" class="form-control" value="{{$ticket->l_name}}" name="l_name">
  
  </p>




  <p style="width:40%;display:inline-block"> Telefón:
       
       <input type="text" class="form-control" value="{{$ticket->phone_num}}" name="phone">
  
  </p>



  <p style="width:40%;display:inline-block"> Email:
       
       <input type="text" class="form-control" value="{{$ticket->email}}" name="email">
  
  </p>




  <input type="hidden" name="to_upd" value="{{$ticket->id}}">

 


  <br>

  <button id='submit_button' class="btn btn-secondary">Uložiť</button>




</form>


<div class="delete_preu_button_m">
<button onclick="event.preventDefault();document.getElementById('delete_preukaz_{{$ticket->id}}').submit();" class="btn btn-danger "><i class="fa fa-times"></i> Odstrániť</button>
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
