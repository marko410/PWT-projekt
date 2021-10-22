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
       <h2>Pridanie nového pilota</span></h2><br> 



<form method="POST" id='form_pilot' class="form_special" action="{{route('boss_add_member_post')}}">

@csrf
    <!-- meno part -->
       <p> Meno *: 
       
            <input type="text" id='name_field' class="form-control" placeholder="Meno" name="f_name">
       
       
       
       </p>



       <p> Priezvisko *: 
       
       <input type="text" id='surname_field' class="form-control" placeholder="Priezvisko" name="l_name">
  
  </p>




  <p> Rodné číslo: 
       
       <input type="text" class="form-control" placeholder="Rodné číslo" name="rod_cislo">
  
  </p>



  <p> Dátum narodenia:
       
       <input type="text" class="form-control" placeholder="Dátum narodenia" name="dat_nar">
  
  </p>


  <p> Ulica:
       
       <input type="text" class="form-control" placeholder="Ulica" name="ulica">
  
  </p>



  <p> Číslo domu:
       
       <input type="text" class="form-control" placeholder="Číslo domu" name="c_ulice">
  
  </p>



  <p> Mesto:
       
       <input type="text" class="form-control" placeholder="Mesto" name="city">
  
  </p>



  <p> PSČ:
       
       <input type="text" class="form-control" placeholder="PSČ" name="psc">
  
  </p>




  <p> Telefón1:
       
       <input type="text" class="form-control" placeholder="Telefón 1" name="phone_1">
  
  </p>



  <p> Telefón2:
       
       <input type="text" class="form-control" placeholder="Telefón 2" name="phone_2">
  
  </p>



  <p> Email:
       
       <input type="text" class="form-control" placeholder="Email" name="email">
  
  </p>


  <input type="hidden" name="role_hit" value="2">



  <button id='submit_button' class="btn btn-secondary">Pridať pilota</button>




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


@endsection