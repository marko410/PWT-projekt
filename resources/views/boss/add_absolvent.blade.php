@extends('frontend_layout')


@section('topstyle')

<style>

.form_special{
    width:50%;
    margin:0 auto;
    
    text-align:center;
}





@media only screen and (max-width: 767px){
    .form_special{
    width:70%;
    }

    
    .form_special p{
        width:100% !important;
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
<a href="{{route('boss.show_absolvents')}}"><button class="btn btn-secondary">Späť</button></a><br><br>     
       <h2>Pridanie nového absolventa</span></h2><br> 
  


<form method="POST" id='form_pilot' class="form_special" action="{{route('boss.add_absolvent_post')}}">

@csrf
   



<p style="width:40%;display:inline-block"> Meno* :
       
       <input type="text" class="form-control" name="f_name" id="name_field">
  
  </p>



  <p style="width:40%;display:inline-block"> Priezvisko* :
       
       <input type="text" class="form-control" name="l_name" id="surname_field">
  
  </p>




  <p style="width:40%;display:inline-block"> Telefón:
       
       <input type="text" class="form-control" name="phone">
  
  </p>



  <p style="width:40%;display:inline-block"> Email:
       
       <input type="text" class="form-control" name="email">
  
  </p>
  


  <br>

  <button id='submit_button' class="btn btn-secondary">Pridať absolventa</button>



 
</form>
      
<br>

@endsection



@section('subscripts')

<script>

$(document).ready(function() {
    $('#submit_button').click(function(){

         event.preventDefault();
             let fname = $("#name_field").val();
             let lname = $("#surname_field").val();


          if(fname == '' || lname == ''){
             alert('Vyplňte všetky povinné polia označené *');
          }else{
               document.getElementById('form_pilot').submit();
          }

         


    });
});

</script>

<script>
$( "#platnost_sep" ).datepicker({dateFormat: "dd-mm-yy"});
$( "#platnost_mep" ).datepicker({dateFormat: "dd-mm-yy"});
$( "#platnost_z137t" ).datepicker({dateFormat: "dd-mm-yy"});
$( "#platnost_fi" ).datepicker({dateFormat: "dd-mm-yy"});
$( "#platnost_zdrav1" ).datepicker({dateFormat: "dd-mm-yy"});
$( "#platnost_zdrav2" ).datepicker({dateFormat: "dd-mm-yy"});
$( "#platnost_radio" ).datepicker({dateFormat: "dd-mm-yy"});
</script>



<script>


$( "#radio_unl" ).change(function() {
 
 let val=$(this).val();

 if(val==1){
     $("#platnost_radio").prop('disabled', true);
    
 }else if(val==2){
    $("#platnost_radio").prop('disabled', false);
 }

});





</script>





<script>


$(".radio_class").change(function(){
    //console.log('good');

  if($(this).val()==1){
    $(this).parent().siblings('p').children('.radio_type, .radio_num, .radio_unl').prop("disabled", false);

    if($(this).parent().siblings('p').children('.radio_unl').val()==1){
      $(this).parent().siblings('p').children('.platnost_radio').prop("disabled", true);
    }else{
      $(this).parent().siblings('p').children('.platnost_radio').prop("disabled", false);
      
    }
    
  }else{
    $(this).parent().siblings('p').children('.radio_type, .radio_num, .radio_unl, #platnost_radio').prop("disabled", true);
  }

  


});

</script>


@endsection
