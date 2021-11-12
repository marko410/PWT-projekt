@include('nav')

@if(count($prihlaseniee)>0)
    @foreach($prihlaseniee as $prihlasenie)
        <p>Meno hráča: {{$prihlasenie->meno}}</p>
    @endforeach

    <p>

    </p>
    <table>
        <tr>
            <td>ID </td>
            <td>Meno hráča </td>
            <td>Dátum </td>
        </tr>
        @foreach($prihlaseniee as $prihlasenie)
            <tr>
                <td>{{$prihlasenie->id}}</td>
                <td>{{$prihlasenie->meno}}</td>
                <td>{{$prihlasenie->created_at}}</td>
                <td><a href="{{route('select', ['id'=>$prihlasenie->id])}}">Detail</a> </td>
                <td><a href="{{route('delete', ['id'=>$prihlasenie->id])}}">Vymazat</a> </td>
                <td><a href="{{route('update-form', ['id'=>$prihlasenie->id])}}">Aktualizovat</a> </td>
            </tr>
        @endforeach
    </table>
@else
    Neexistujú žiadne úlohy
@endif

<div>
    <p class="menicko: ">Meno hráča: {{$prihlasenie->meno}}</p>

</div>
