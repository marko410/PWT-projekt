<!DOCTYPE html>
<html>
<head>

<meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="../resources/css/main.css">
    <link href="node_modules/sweetalert2/dist/sweetalert2.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <style>





        @import url('http://fonts.cdnfonts.com/css/balthazar');
        p.velkyfrajer{

            font-size: 20px;
            position: relative;
            margin-top:auto;
            text-align: center;
            font-family: 'Balthasar', sans-serif;

            background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        div.raketa{
            border: 5px solid pink;
            border-radius: 10px;
           background-color:rgba(0, 0, 255, 0.1);
            padding: 10px;
            margin: 5px;
            position: relative;
            text-align: center;
            width:90%;
            right:-3%;
        // background-color: rgba(0, 0, 255, 0.1);

          //  margin-left: auto;
            height: 20px;
        //padding: 0px;

        }
        body{
            background-image: url("bcg.jpeg");
/*
            margin: auto;
            width: 60%;
            border: 5px solid gray;
            background-color: dimgray;
            padding: 10px;*/
        }

        .container {
            border: 3px solid pink;
            border-radius: 10px;
            width: 80%;
            padding: 20px;
            display: none;
            text-align: center;
            background-color: rgba(0, 0, 255, 0.1);
            margin-top:25%;
            margin-bottom:50%;
            position: absolute;
            top:10px;
            left: 50%;
            margin-right: auto;
            margin-left: auto;
            transform: translate(-50%, -50%)

        }

        button {
            margin-top: 8px;
            margin-right: auto;
            margin-left: auto;
        }
        img{

            justify-content: right;
            margin-bottom: 5px;
            left: 50%;
            border: 3px solid pink;

        }
        div.textik{
            font-size: 25px;
            text-align: center;
            font-family: 'Balthasar', sans-serif;

            background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        /*submit button style*/

        div.kon2{
        // border: 5px solid pink;
            background-color: rgba(0, 0, 255, 0.1);
            padding: 10px;
            margin: 10px;
            margin-bottom: 10px;
            display:block;
            text-align: center;
            justify-content: center;
            position: relative;
            width: 50%;
            margin-inline: auto;

            border-radius: 25px;
            border: 2px solid pink;
        }

        .radio-toolbar {


            margin: 7px;
        //display: block;

        }
        input.styl{

        }

        .radio-toolbar input[type="radio"] {
            max-width:100%;
            opacity: 0;
            position:fixed;
            width: 20px;
            height: 20px;
           /* right:30%*/

        }

        .radio-toolbar label {
            max-width:100%;
            display: inline-block;
            background: hotpink;
            padding: 10px 20px;
            font-family: sans-serif, B;
            font-size: 16px;
            text-align: center;
            border: 2px solid pink;
            border-radius: 4px;
            width: 40%;
            margin-bottom: 3px;
        }

        .radio-toolbar label:hover {
            background-color: pink;
        }

        .radio-toolbar input[type="radio"]:focus + label {
            border: 2px dashed pink;
        }

        .radio-toolbar input[type="radio"]:checked + label {
            background-color: pink;
            border-color: hotpink;
        }


audio.jou{
    opacity:100;
    volume: 0.05;
}




@media only screen and (max-width: 600px) {

    .container{
        width: 90%;
        top:315px;
    }

div.kon2 {
    width:100%;
    right:0;
    margin: 0;
    padding:0;
    top:-7px;

}

div.raketa{
top:-21px;

}



}

img.tlacidloZvuk{
   margin:1%;
}


    </style>

</head>
@include('nav')
<body>




<!--<audio controls autoplay class="jou">

    <source src="najvacsa_pecka.mp3" type="audio/mpeg">
</audio>-->
<img class="tlacidloZvuk" onclick="VypniMuzicku()" src="M_On.gif" width="3%">  <!--tlacidlo zvuk-->
<audio id="vypaluvacka" src="najvacsa_pecka.mp3" preload="auto"></audio> <!--vlozenie pesni??ky-->

<script>

        var KdePakTyPtacku = document.getElementById("vypaluvacka");
        KdePakTyPtacku.volume=0.2;
        KdePakTyPtacku.play(); <!--start pesnicky-->


    function VypniMuzicku(){ <!--vypnutie pesni??ky-->
        var KdePakTyPtacku = document.getElementById("vypaluvacka");
        if(KdePakTyPtacku.volume===0.2){
            KdePakTyPtacku.volume=0.0;
        }else{
            KdePakTyPtacku.volume=0.2
        }

    }

</script>


<div class="container">
<div class="raketa">  <!-- zobrazenie prihl??sen??ho  -->
    <p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>

</div>

    <div class="kon2">


        <div class="textik">Kde sa tvor?? ??l???</div><hr>  <!--otazky-->

        <img src="obr??zok1.jpg" style="max-width:50%; height:170px;">
 <div class="radio-toolbar">
     <!--<otazka1-->
        <input class="styl" type="radio" id="correct1" name="odpoved1" value="Odpoved 1" >
        <label for="Odpoved1">V pe??eni</label><br>
        <input class="styl" type="radio" id="Odpoved2"  name="odpoved1"  value="Odpoved 2">
        <label for="Odpoved2">V ??l??n??ku</label><br>

        <input class="styl" type="radio" id="Odpoved3"  name="odpoved1" value="Odpoved 3">
        <label for="Odpoved3">V pankrease</label><br>

        <input class="styl" type="radio" id="Odpoved4"  name="odpoved1" value="Odpoved 4">
        <label for="Odpoved4">V ??l??ov??ch uzl??koch</label><br>
        <button class="glow-on-hover" class="next" onclick="next(1)">NEXT</button>
    </div>
    </div>
    </div>

</div>

<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>
    <div class="kon2">
        <div class="textik">Vydychovan?? vzduch obsahuje najviac?</div><hr>
    <img src="obr??zok2.jpg"style="max-width:50%; height:170px;">
    <div class="radio-toolbar">
        <input class="styl" type="radio" id="Odpoved1" name="odpoved2" value="Odpoved 1" >
        <label for="Odpoved1">Kysl??ku</label><br>

        <input class="styl" type="radio" id="Odpoved2"  name="odpoved2" value="Odpoved 2">
        <label for="Odpoved2">Oxidu uhli??it??ho</label><br>

        <input class="styl" type="radio" id="correct2"  name="odpoved2" value="Odpoved 3" >
        <label for="Odpoved3">Dus??ku</label><br>

        <input class="styl" type="radio" id="Odpoved4"  name="odpoved2" value="Odpoved 4">
        <label for="Odpoved4">Vodnej pary</label><br>
        <button class="glow-on-hover" class="next" onclick="next(2)">NEXT</button>
    </div>
    </div>


</div>

<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>
    <div class="kon2">
        <div class="textik">Ko??ko litrov krvi pre??erp?? za de?? ??udsk?? srdce?</div><hr>
        <img src="obr??zok3.jpg" style="max-width:50%; height:170px;">
    <div class="radio-toolbar">

       <input class="styl" type="radio" id="Odpoved1"  name="odpoved3" value="Odpoved 1"  >
        <label for="Odpoved1">4500</label><br>

        <input class="styl" type="radio" id="Odpoved2"  name="odpoved3" value="Odpoved 2">
        <label for="Odpoved2">5500</label><br>

        <input class="styl" type="radio" id="Odpoved3"  name="odpoved3" value="Odpoved 3">
        <label for="Odpoved3">6500</label><br>

        <input class="styl" type="radio" id="correct3"  name="odpoved3" value="Odpoved 4">
        <label for="Odpoved4">7500</label><br>
        <button class="glow-on-hover" class="next" onclick="next(3)">NEXT</button>
    </div>
    </div>



</div>


<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>


    <div class="kon2">
        <div class="textik">Ktor?? z t??chto org??nov ??udsk??ho tela nie je p??rov????</div><hr>
    <img src="obr??zok4.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved4" value="Odpoved 1"  >
            <label for="Odpoved1">Mo??ovod</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved4" value="Odpoved 2">
            <label for="Odpoved2">Obli??ka</label><br>

            <input class="styl" type="radio" id="correct4"  name="odpoved4" value="Odpoved 3">
            <label for="Odpoved3">T??mus(detsk?? ????aza)</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved4" value="Odpoved 4">
            <label for="Odpoved4">P????ca</label><br>
            <button class="glow-on-hover" class="next" onclick="next(4)">NEXT</button>
        </div>
    </div>


</div>




<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>

    <div class="kon2">
        <div class="textik">Ktor?? krvn?? skupina m?? vo svete najvy????ie zast??penie medzi obyvate??stvom??</div><hr>
    <img src="obr??zok5.jpg" style="max-width:50%; height:170px;">

        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved5" value="Odpoved 1"  >
            <label for="Odpoved1">A</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved5" value="Odpoved 2">
            <label for="Odpoved2">B</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved5" value="Odpoved 3">
            <label for="Odpoved3">AB</label><br>

            <input class="styl" type="radio" id="correct5"  name="odpoved5" value="Odpoved 4">
            <label for="Odpoved4">0</label><br>
            <button class="glow-on-hover" class="next" onclick="next(5)">NEXT</button>
        </div>
    </div>


</div>



<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>


    <div class="kon2">
        <div class="textik">Ko??ko r??znych v??n?? rozozn?? n???? ??uch?</div><hr>
    <img src="obr??zok6.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved6" value="Odpoved 1"  >
            <label for="Odpoved1">20 000</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved6" value="Odpoved 2">
            <label for="Odpoved2">30 000</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved6" value="Odpoved 3">
            <label for="Odpoved3">40 000</label><br>

            <input class="styl" type="radio" id="correct6"  name="odpoved6" value="Odpoved 4">
            <label for="Odpoved4">50 000</label><br>
            <button class="glow-on-hover" class="next" onclick="next(6)">NEXT</button>
        </div>
    </div>


</div>



<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>

    <div class="kon2">
        <div class="textik">??udsk?? tep sa spomal?? v okamihu, ke?? sa tv??r dotkne vody. Ako sa naz??va tento jav?</div><hr>
    <img src="obr??zok7.jpg" style="max-width:50%; height:170px;">

        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved7" value="Odpoved 1"  >
            <label for="Odpoved1">Reflex topiacich sa</label><br>

            <input class="styl" type="radio" id="correct7"  name="odpoved7" value="Odpoved 2">
            <label for="Odpoved2">Pot??pa??sk?? reflex</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved7" value="Odpoved 3">
            <label for="Odpoved3">Obrann?? vodn?? reflex</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved7" value="Odpoved 4">
            <label for="Odpoved4">D??chac?? reflex</label><br>
            <button class="glow-on-hover" class="next" onclick="next(7)">NEXT</button>
        </div>
    </div>


</div>



<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>

    <div class="kon2">
        <div class="textik">V??zivov?? ??tvar, ktor?? sa nach??dza na lebke mal??ch det?? v prv??ch dvoch rokoch ??ivota, sa naz??va:</div><hr>
    <img src="obr??zok8.jpg" style="max-width:50%; height:170px;">

        <div class="radio-toolbar">
            <input class="styl" type="radio" id="correct8"  name="odpoved8" value="Odpoved 1"  >
            <label for="Odpoved1">Fontanela</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved8" value="Odpoved 2">
            <label for="Odpoved2">Fixinela</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved8" value="Odpoved 3">
            <label for="Odpoved3">Fabio Quagliarella</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved8" value="Odpoved 4">
            <label for="Odpoved4">Cranionella</label><br>
            <button class="glow-on-hover" class="next" onclick="next(8)">NEXT</button>
        </div>
    </div>


</div>


<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>

    <div class="kon2">
        <div class="textik">Ktor?? zuby nen??jdete v mlie??nom chrupe?</div><hr>
    <img src="obr??zok9.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved9" value="Odpoved 1"  >
            <label for="Odpoved1">Rez??ky</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved9" value="Odpoved 2">
            <label for="Odpoved2">O??n?? zuby</label><br>

            <input class="styl" type="radio" id="correct9"  name="odpoved9" value="Odpoved 3">
            <label for="Odpoved3">??renov?? zuby</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved9" value="Odpoved 4">
            <label for="Odpoved4"> Stoli??ky</label><br>
            <button class="glow-on-hover" class="next" onclick="next(9)">NEXT</button>

        </div>
    </div>

</div>


<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>


    <div class="kon2">
        <div class="textik">Po??et stavcov chrbtice ??loveka je rovnak?? ako u ??irafy. Ko??ko ich m??me?</div><hr>
    <img src="obr??zok10.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved10" value="Odpoved 1"  >
            <label for="Odpoved1">25</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved10" value="Odpoved 2">
            <label for="Odpoved2">30</label><br>

            <input class="styl" type="radio" id="correct10"  name="odpoved10" value="Odpoved 3">
            <label for="Odpoved3">33</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved10" value="Odpoved 4">
            <label for="Odpoved4">38</label><br>
            <button class="glow-on-hover" class="next" onclick="next(10)">NEXT</button>

        </div>
    </div>

</div>



<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>

    <div class="kon2">
        <div class="textik">Kde n??jdeme najmen??ie kosti a svaly v ??udskom tele?</div><hr>
    <img src="obr??zok11.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved11" value="Odpoved 1"  >
            <label for="Odpoved1">V srdci</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved11" value="Odpoved 2">
            <label for="Odpoved2">V panve</label><br>

            <input class="styl" type="radio" id="correct11"  name="odpoved11" value="Odpoved 3">
            <label for="Odpoved3">V uchu</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved11" value="Odpoved 4">
            <label for="Odpoved4">V kolene</label><br>
            <button class="glow-on-hover" class="next" onclick="next(11)">NEXT</button>
        </div>
    </div>


</div>



<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>


    <div class="kon2">
        <div class="textik">Ak?? kos?? vid??te na obr??zku?</div><hr>
    <img src="obr??zok12.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved12" value="Odpoved 1"  >
            <label for="Odpoved1">Miechu</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved12" value="Odpoved 2">
            <label for="Odpoved2">Rebr??</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved12" value="Odpoved 3">
            <label for="Odpoved3">K??????nu kos??</label><br>

            <input class="styl" type="radio" id="correct12"  name="odpoved12" value="Odpoved 4">
            <label for="Odpoved4">Hrudn?? kos??</label><br>
            <button class="glow-on-hover" class="next" onclick="next(12)">NEXT</button>
        </div>
    </div>


</div>



<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>


    <div class="kon2">
        <div class="textik">Na obr??zku vid??me pr??stroj, ktor?? sa naz??va:</div><hr>
    <img src="obr??zok13.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved13" value="Odpoved 1"  >
            <label for="Odpoved1">EKG</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved13" value="Odpoved 2">
            <label for="Odpoved2"> Inhal??tor</label><br>

            <input class="styl" type="radio" id="correct13"  name="odpoved13" value="Odpoved 3">
            <label for="Odpoved3">Dial??za</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved13" value="Odpoved 4">
            <label for="Odpoved4">Lymfodren????ny pr??stroj</label><br>
            <button class="glow-on-hover" class="next" onclick="next(13)">NEXT</button>

        </div>
    </div>

</div>



<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>


    <div class="kon2">
        <div class="textik">Ako sa naz??va kos?? na obr??zku?</div><hr>
    <img src="obr??zok14.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved14" value="Odpoved 1"  >
            <label for="Odpoved1">Lak??ov?? kos??</label><br>

            <input class="styl" type="radio" id="correct14"  name="odpoved14" value="Odpoved 2">
            <label for="Odpoved2">Vretenn?? kos??</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved14" value="Odpoved 3">
            <label for="Odpoved3">Ramenn?? kos??</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved14" value="Odpoved 4">
            <label for="Odpoved4">Hubovit?? kos??</label><br>
            <button class="glow-on-hover" class="next" onclick="next(14)">NEXT</button>
        </div>
    </div>


</div>



<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>


    <div class="kon2">
        <div class="textik">Ako sa naz??va kos?? na obr??zku?</div><hr>
    <img src="obr??zok15.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved15" value="Odpoved 1"  >
            <label for="Odpoved1">Holenn?? kos??</label><br>

            <input class="styl" type="radio" id="correct15"  name="odpoved15" value="Odpoved 2">
            <label for="Odpoved2">L??tkov?? kos??</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved15" value="Odpoved 3">
            <label for="Odpoved3">Kompaktn?? kos??</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved15" value="Odpoved 4">
            <label for="Odpoved4">Okostica</label><br>
            <button class="glow-on-hover" class="next" onclick="next(15)">NEXT</button>

        </div>
    </div>

</div>



<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>


    <div class="kon2">
        <div class="textik">Kto nie je z uveden??ch opr??vnen?? predpisova?? lieky?</div><hr>  <!--otazky-->
    <img src="obr??zok16.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved16" value="Odpoved 1"  >
            <label for="Odpoved1">Zub??r</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved16" value="Odpoved 2">
            <label for="Odpoved2">Veterin??r</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved16" value="Odpoved 3">
            <label for="Odpoved3">Sekund??rny lek??r</label><br>

            <input class="styl" type="radio" id="correct16"  name="odpoved16" value="Odpoved 4">
            <label for="Odpoved4">Terapeut</label><br>
            <button class="glow-on-hover" class="next" onclick="next(16)">NEXT</button>
        </div>
    </div>


</div>




<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>


    <div class="kon2">
        <div class="textik">Ko??ko svalov sa mus?? zapoji?? pri ??smeve?</div><hr>  <!--otazky-->
    <img src="obr??zok17.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved17" value="Odpoved 1"  >
            <label for="Odpoved1">6</label><br>

            <input class="styl" type="radio" id="correct17"  name="odpoved17" value="Odpoved 2">
            <label for="Odpoved2">17</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved17" value="Odpoved 3">
            <label for="Odpoved3">25</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved17" value="Odpoved 4">
            <label for="Odpoved4">33</label><br>
            <button class="glow-on-hover" class="next" onclick="next(17)">NEXT</button>
        </div>
    </div>


</div>


<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>

    <div class="kon2">
        <div class="textik">Ako naz??vame ochorenie, ktor?? sa prejavuje nieko??kosekundov??mi z??stavami d??chania po??as noci?</div><hr>
    <img src="obr??zok18.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved18" value="Odpoved 1"  >
            <label for="Odpoved1">Narkolepsia</label><br>

            <input class="styl" type="radio" id="correct18"  name="odpoved18" value="Odpoved 2">
            <label for="Odpoved2">Sp??nkov?? apnoe</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved18" value="Odpoved 3">
            <label for="Odpoved3">Sp??nkov?? paral??za</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved18" value="Odpoved 4">
            <label for="Odpoved4">No??n?? mora</label><br>
            <button class="glow-on-hover" class="next" onclick="next(18)">NEXT</button>

        </div>
    </div>

</div>



<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>


    <div class="kon2">
        <div class="textik">Otorinolaryngol??g je odborn??kom na:</div><hr>
    <img src="obr??zok19.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved19" value="Odpoved 1"  >
            <label for="Odpoved1">Ochorenia ??stnej sliznice</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved19" value="Odpoved 2">
            <label for="Odpoved2">Ochorenia p????c</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved19" value="Odpoved 3">
            <label for="Odpoved3">Chronick?? ochorenia v??etk??ho druhu</label><br>

            <input class="styl" type="radio" id="correct19"  name="odpoved19" value="Odpoved 4">
            <label for="Odpoved4">Ochorenia u????, nosa, hrtana a hltana</label><br>
            <button class="glow-on-hover" class="next" onclick="next(19)">NEXT</button>
        </div>
    </div>


</div>

<!--<otazka20-->
<audio id="hitovica" src="melody.wav" preload="auto"></audio>
<form method="post" action="{{route('list3')}}">

<div class="container">
<div class="raketa">
<p class="velkyfrajer"  style="text-align:center" >Ste prihl??sen?? ako - {{$prihlasenie->meno}} </p>
</div>


    <div class="kon2">
        <div class="textik">Ktor?? faktor sa najviac podie??a na vzniku ochoren?? p????c?</div><hr>
    <img src="obr??zok20.jpg" style="max-width:50%; height:170px;">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved20" value="Odpoved 1"  >
            <label for="Odpoved1">Strava s vysok??m obsahom tuku</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved20" value="Odpoved 2">
            <label for="Odpoved2">Strava s vysok??m obsahom sod??ka</label><br>

            <input class="styl" type="radio" id="correct20"  name="odpoved20" value="Odpoved 3">
            <label for="Odpoved3"> Faj??enia</label><br>

            <input class="styl" type="radio" id="Odpoved4 "  name="odpoved20" value="Odpoved 4">
            <label for="Odpoved4">Konzum??cia alkoholu</label><br>

 <input type="hidden"   name="score" id="kkk"  value=""/>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

    <button type="submit" class="glow-on-hover" onclick="result()" > Koniec </button>


        </div>
    </div>


</div>
</form>

<!--koniec-->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // zobrazenie ot??zok
    document.getElementsByClassName('container')[0].style.display = "block";

    // zobrazenie nasleduj??cej ot??zky
    function next(id) {
        document.getElementsByClassName('container')[id-1].style.display = "none";
        document.getElementsByClassName('container')[id].style.display = "block";
    }


    function result() {  //zobrazi?? v??sledok
        var hitovica1 = document.getElementById("hitovica");
            hitovica1.play();


        var skore = 0;   //funkcia po????tanie bodov
        if (document.getElementById('correct1').checked) {
           //score++;
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct2').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }

        if (document.getElementById('correct3').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct4').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct5').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct6').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct7').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct8').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct9').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct10').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct11').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct12').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct13').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct14').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct15').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct16').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct17').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct18').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;
        }
        if (document.getElementById('correct19').checked) {
            skore=skore+2;
            document.getElementById('kkk').value = skore;
        }

        if (document.getElementById('correct20').checked) {
            skore=skore+1;
            document.getElementById('kkk').value = skore;

        }




        if (skore >= 17) {
            Swal.fire({  //node.js zobrazenie
                title: 'Pacient pre??il',
                text: 'tvoje skore : ' + skore,
                imageUrl: 'https://i0.wp.com/www.printmag.com/wp-content/uploads/2021/02/4cbe8d_f1ed2800a49649848102c68fc5a66e53mv2.gif?fit=476%2C280&ssl=1',
                imageSize: "200*200",
                imageWidth:220,
            }).then(function(){

                window.location="rebricek";
            })
        }
        if (skore <= 16 && skore>=10) {
            Swal.fire({
                title: 'Pacient e??te d??cha',
                text: 'tvoje skore : ' + skore,
                imageUrl: 'https://cdn.hornbach.sk/data/shop/D04/001/780/491/703/032/DV_8_10141178_01_4c_DE_20191206175111.jpg',
                imageSize: "200*200",
                imageWidth:220,
            }).then(function(){
                window.location="rebricek";
            })
        }
        if (skore <= 9) {
            Swal.fire({
                title: 'Pacient zomrel',
                text: 'tvoje skore : ' + skore,
                imageUrl: 'https://mp3zvuky.cz/wp-content/uploads/2019/01/krava.jpg',
                imageSize: "200*200",
                imageWidth:220,

            }).then(function(){
                window.location="rebricek";
            })
        }

    }



</script>

</body>
</html>
