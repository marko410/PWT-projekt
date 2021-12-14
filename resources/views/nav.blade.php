
<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="../resources/css/main.css">
    <style>
        body {
            margin: 0;
            font-family: Balthasar sans-serif;
        }

        a{
            text-align: center;
            font-family: 'Balthasar', sans-serif;

            background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .topnav {
            overflow: hidden;
            background-color: rgba(0, 0, 255, 0.1);
        }

        .topnav a {
            float: left;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ff94a3;
            color: black;
        }

        .topnav a.active {
         //   background-color: #04AA6D;
            color: black;
        }
        div.paticka{
            z-index: 1000;
            background-color: rgba(0, 0, 255, 0.2);
            position: fixed;
            bottom: 0%;
            width:100%;

        }
        p.pata{
            position: relative;
            bottom: 1%;
            text-align: left;
            left: 1%;
            font-size: 15px;



            font-family: 'Balthasar', sans-serif;

            background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

       }

    </style>
</head>
<body>
<div class="topnav">

    <a class="active" href="{{route('insert-form')}}">Quíz</a>

   @if((\Illuminate\Support\Facades\DB::table('prihlasenie')->count())>0)  <?php //ak máš prázdnu databázu, zobrazí blade prázdna?>
        <a href=" {{ route('select-all')}}">Rebríček</a>
    @else
        <a class="active" href="{{route('prazdna')}}">Quíz</a>
    @endif
</div>
</body>


<div class="paticka"><footer><p class="pata">C all rights reserved</p></footer></div>

</html>
