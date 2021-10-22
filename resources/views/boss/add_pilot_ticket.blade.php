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
       <h2>Pridanie nového preukazu pre pilota</span></h2><br> 



<form method="POST" id='form_pilot' class="form_special" action="{{route('add_pilot_ticket_post')}}">

@csrf
    <!-- meno part -->
       <p> Pilot:


        <select name="pilot_id" class="form-control">


        @foreach($pilots as $pilot)
        <option value="{{$pilot->id}}">{{$pilot->f_name}} {{$pilot->l_name}}</option>

        @endforeach
            </select>
       
       
       
       </p>

<!-- meno part -->

       <p> Typ preukazu:


<select name="typ_preukazu" class="form-control">


<option value="ATPL">ATPL</option>
<option value="CPL">CPL</option>
<option value="PPL">PPL</option>

    </select>



</p>
  





  <p> Číslo preukazu: 
       
       <input type="text" class="form-control" placeholder="Číslo preukazu" name="preukaz_num">
  
  </p>



  <p style="width:40%;display:inline-block"> SEP:


<select name="sep" class="form-control" id="sep_field">


<option value="1">Áno</option>
<option value="2">Nie</option>


    </select>



</p>






  <p style="width:40%;display:inline-block"> Platnosť SEP:
       
       <input type="text" class="form-control" name="platnost_sep" id="platnost_sep">
  
  </p>




  
  <p style="width:40%;display:inline-block"> MEP:


<select name="mep" class="form-control" id="mep_field">


<option value="1">Áno</option>
<option value="2">Nie</option>


    </select>



</p>



  <p style="width:40%;display:inline-block"> Platnosť MEP:
       
       <input type="text" class="form-control" name="platnost_mep" id="platnost_mep">
  
  </p>








  
  <p style="width:40%;display:inline-block"> Z137T:


<select name="z137t" class="form-control" id="z137t_field">


<option value="1">Áno</option>
<option value="2">Nie</option>


    </select>



</p>



  <p style="width:40%;display:inline-block"> Platnosť Z137T:
       
       <input type="text" class="form-control" name="platnost_z137t" id="platnost_z137t">
  
  </p>





  <p style="width:40%;display:inline-block"> FI:


<select name="fi" class="form-control" id="fi_field">


<option value="1">Áno</option>
<option value="2">Nie</option>


    </select>



</p>



  <p style="width:40%;display:inline-block"> Platnosť FI:
       
       <input type="text" class="form-control" name="platnost_fi" id="platnost_fi">
  
  </p>







  
  <p style="width:40%;display:inline-block"> Zdravotná spôsobilosť 1:


<select name="zdrav1" class="form-control" id="zdr_1_field">


<option value="1">Áno</option>
<option value="2">Nie</option>


    </select>



</p>



  <p style="width:40%;display:inline-block"> Platnosť ZS1:
       
       <input type="text" class="form-control" name="platnost_zdrav1" id="platnost_zdrav1">
  
  </p>







    
  <p style="width:40%;display:inline-block"> Zdravotná spôsobilosť 2:


<select name="zdrav2" class="form-control" id="zdr_2_field">


<option value="1">Áno</option>
<option value="2">Nie</option>


    </select>



</p>



  <p style="width:40%;display:inline-block"> Platnosť ZS2:
       
       <input type="text" class="form-control" name="platnost_zdrav2" id="platnost_zdrav2">
  
  </p>























  <p style="width:40%;display:inline-block"> Preukaz rádiofonistu:


<select name="radio" class="form-control radio_class">


<option value="1">Áno</option>
<option value="2">Nie</option>


    </select>



</p>



<p style="width:40%;display:inline-block"> Druh pr. rádiofonistu:


<select name="radio_type" class="form-control radio_type">


<option value="Všeobecný">Všeobecný</option>
<option value="OFS II">OFS II</option>
<option value="Obmedz. osv.">Obmedz. osv.</option>
<option value="LPSI">LPSI</option>



    </select>



</p>



  <p style="width:40%;display:inline-block"> Číslo pr. rádiofonistu:
       
       <input type="text" class="form-control radio_num" name="radio_num">
  
  </p>



  <p style="width:40%;display:inline-block"> Platnosť pr. rádiofonistu:


<select name="radio_unl" class="form-control radio_unl" id="radio_unl">


<option value="1">Neobmedzená</option>
<option value="2">Obmedzená</option>


    </select>



</p>



<p style="width:40%;display:inline-block"> Platnosť pr. rádiofonistu do:
       
       <input type="text" class="form-control platnost_radio'" name="radio_to" id="platnost_radio" disabled>
  
  </p>



  


  <br>

  <button id='submit_button' class="btn btn-secondary">Pridať preukaz</button>




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
    console.log('good');

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




<script>

    $("#sep_field").change(function(){
                           
             if($(this).val()=="1"){
                           $("#platnost_sep").prop("disabled", false);
           }else{
                           $("#platnost_sep").prop("disabled", true);
          }
                           
                           
   });



$("#mep_field").change(function(){
                       
         if($(this).val()=="1"){
                       $("#platnost_mep").prop("disabled", false);
       }else{
                       $("#platnost_mep").prop("disabled", true);
      }
                       
                       
});



$("#z137t_field").change(function(){
                       
         if($(this).val()=="1"){
                       $("#platnost_z137t").prop("disabled", false);
       }else{
                       $("#platnost_z137t").prop("disabled", true);
      }
                       
                       
});




$("#fi_field").change(function(){
                       
         if($(this).val()=="1"){
                       $("#platnost_fi").prop("disabled", false);
       }else{
                       $("#platnost_fi").prop("disabled", true);
      }
                       
                       
});



$("#fi_field").change(function(){
                       
         if($(this).val()=="1"){
                       $("#platnost_fi").prop("disabled", false);
       }else{
                       $("#platnost_fi").prop("disabled", true);
      }
                       
                       
});




$("#zdr_1_field").change(function(){
                       
         if($(this).val()=="1"){
                       $("#platnost_zdrav1").prop("disabled", false);
       }else{
                       $("#platnost_zdrav1").prop("disabled", true);
      }
                       
                       
});




$("#zdr_2_field").change(function(){
                       
         if($(this).val()=="1"){
                       $("#platnost_zdrav2").prop("disabled", false);
       }else{
                       $("#platnost_zdrav2").prop("disabled", true);
      }
                       
                       
});


</script>






@endsection
