@include('nav')

    <!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="../resources/css/main.css">
    <style>
        @import url('http://fonts.cdnfonts.com/css/balthazar');

        body{
            background-image: url("bcg.jpeg");
        }

        p.pismo{
            font-size: 20px;
            text-align: center;
            font-family: 'Balthasar', sans-serif;

            background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        table{
        border: 3px  pink;
        width: 100%;
        background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }


div.kontajner{
   background-color: rgba(0, 0, 255, 0.1);

    padding: 10px;
    margin: center;
    margin-top: 25px;
    right:-4%;
    text-align: center;
    align-items: center;
    justify-content: center;
    position: relative;
    width:90%;
  

    border-radius: 25px;
    border: 2px solid pink;
}
        div.kon2{
        /* border: 5px solid pink; */
            background-color: rgba(0, 0, 255, 0.1);
            padding: 10px;
            margin: 10px;
            margin-bottom: 45px;
            display: block;
            text-align: left;
            justify-content: center;
            position: relative;
            width: 50%;
            right: -22%;
      

            border-radius: 25px;
            border: 2px solid pink;
        }

        @media only screen and (max-width: 600px) {
 

            div.kon2 {
            width:100%;
            right:0;
            margin: 0;
            padding:0;
            top:-7px;

                }

                div.kontajner{
                    right: -6%;
                    width: 80%;
                    margin-top: 9px;


                }
 

}



    </style>

</head>

<body>
<div class="kontajner">
    <div class="kon2">@if(count($prihlaseniee)>0)
            <table>
                <tr>
                    <td><p class="pismo">Meno</p></td>
                    <td><p class="pismo">Skore</p></td>
                </tr>
    @foreach($prihlaseniee as $prihlasenie)

        <!-- <p class="pismo"> {{$prihlasenie->meno}}</p> -->
        <table>
    <table>
        <tr>
            <td>Poradie</td>
            <td>Meno</td>
            <!-- <td>Dátum pridania</td> -->
            <td>Skóre</td>
        </tr>

      
            <tr>
                <td>{{$prihlasenie->id}}</td>
                <td>{{$prihlasenie->meno}}</td>
                <!-- <td>{{$prihlasenie->created_at}}</td> -->
                <td>{{$prihlasenie->score}}</td>
            </tr>
            <br><br>
            <hr>
    </table>
      

    @endforeach
    </div>
</div>
    <p>

    </p>
    <!--<table>
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
-->
<div>
    <!--  <p class="menicko: ">Meno hráča: {{$prihlasenie->meno}}</p> -->

</div>
</body>
</html>
