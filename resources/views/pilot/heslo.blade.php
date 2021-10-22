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
<a href="{{route('pilot_main_screen')}}"><button class="btn btn-secondary">Späť</button></a><br><br>     
       <h2>Zmena hesla</span></h2><br> 





       @if(session('bad_old_pass'))

<div class="alert alert-dark" role="alert">
   Staré heslo nie je správne!

</div>

@endif



@if(session('not_match_pass'))

<div class="alert alert-dark" role="alert">
   Nové heslo nie je zopakované správne!

</div>

@endif


<form method="POST" id='form_pilot' class="form_special" action="{{route('pilot_zmena_hesla_post')}}">

@csrf
    <!-- meno part -->
       <p> Staré heslo* : 
       
            <input type="password" id='oldpass_field' class="form-control" placeholder="Staré heslo" name="old_pass">
       
       
       
       </p>



       <p> Nové heslo* : 
       
       <input type="password" id='newpass_field' class="form-control" placeholder="Nové heslo" name="new_pass">
  
  </p>




  <p> Zopakujte nové heslo* : 
       
       <input type="password"  id="newpass2_field" class="form-control" placeholder="Zopakujte nové heslo" name="new_pass2">
  
  </p>



  <input type="hidden" name="email" value="{{Auth::user()->email}}">



  <button id='submit_button' class="btn btn-secondary">Zmeniť heslo</button>




</form>
      
<br>

@endsection



@section('subscripts')

<script>

$(document).ready(function() {
    $('#submit_button').click(function(){

         event.preventDefault();
             let oldpass = $("#oldpass_field").val();
             let newpass = $("#newpass_field").val();
             let newpass2 = $("#newpass2_field").val();


          if(oldpass == '' || newpass == '' || newpass2 == ''){
             alert('Vyplňte všetky povinné polia označené *');
          }else{
               document.getElementById('form_pilot').submit();
          }

         


    });
});

</script>


@endsection