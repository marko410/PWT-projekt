@include('nav')
@if($prihlasenie)
    ID:{{$prihlasenie->id}}<br>
    Meno: {{$prihlasenie->meno}}<br>
    <?php  // Skore: {{$prihlasenie->skore}}<br>?>
@else
    0 bodov
@endif
