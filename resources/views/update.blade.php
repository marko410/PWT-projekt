@include('nav')
<form method="post action={{route('update')}}">
    Uloha:<br>
    <input type="text" name="meno" value="{{$prihlasenie->meno}}"><br>
    <!--Zodpovedná osoba: <br>-->
   <?php //<!-- <input type="text"name="skore" value="{{$prihlasenie->skore}}"><br>-->?>
    <input type="hidden" name="id" value="{{$prihlasenie->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="Aktualizovat">


</form>

