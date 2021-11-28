<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../resources/css/main.css">



    <style>
        @import url('http://fonts.cdnfonts.com/css/balthazar');
        p.velkyfrajer{

            /*font-size: 20px;
            font-family: "Roboto", sans-serif;
            margin: 0 auto;*/
            font-size: 20px;
            text-align: center;
            font-family: 'Balthasar', sans-serif;

            background: -webkit-linear-gradient(#f17109, #b004da);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        div.raketa{
            /*border: 5px solid darkgray;
            background-color: gray;
            padding: 10px;
            margin: 10px;*/
            position: relative;
            width: 100%;
            right:43%;
        // background-color: rgba(0, 0, 255, 0.1);
            margin-top: 5px;
            height: 30px;
        //padding: 0px;

        }
        body{
            background-image: url("bcg.jpeg");
            /*margin: auto;
            width: 60%;
            border: 5px solid gray;
            background-color: dimgray;
            padding: 10px;*/
        }

        .container {
            border: 3px solid pink;
            border-radius: 10px;
            width: 60%;
            padding: 20px;
            display: none;
            text-align: center;
            background-color: rgba(0, 0, 255, 0.1);

            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }

        button {
            margin-top: 10px;
        }
        img{

            justify-content: right;
            margin-bottom: 50px;
            left: 50%;
            border: 3px solid pink;

        }
        div.textik{
            font-size: 35px;
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
            margin-bottom: 45px;
            display:block;
            text-align: center;
            justify-content: center;
            position: relative;
            width: 40%;
            right: -28%;

            border-radius: 25px;
            border: 2px solid pink;
        }

        .radio-toolbar {
            margin: 10px;
        //display: block;

        }
        input.styl{

        }

        .radio-toolbar input[type="radio"] {
            opacity: 0;
            position: fixed;
            width: 20px;
            height: 20px;

        }

        .radio-toolbar label {
            display: inline-block;
            background: hotpink;
            padding: 10px 20px;
            font-family: sans-serif, B;
            font-size: 16px;
            border: 2px solid pink;
            border-radius: 4px;
            width:180px;
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







    </style>

</head>
@include('nav')
<body>


<div class="raketa">
    <p class="velkyfrajer">Ste prihlásený ako - {{$prihlasenie->meno}}</p>

</div>

<div class="container">

    <div class="textik">Kde sa tvorí žlč?</div><hr>
    <img src="obrázok1.jpg" width="450" height="400">

    <div class="kon2">
    <div class="radio-toolbar">
        <input class="styl" type="radio" id="correct1" name="odpoved1" value="Odpoved 1" >
        <label for="Odpoved1">V pečeni</label><br>

        <input class="styl" type="radio" id="Odpoved2"  name="odpoved1"  value="Odpoved 2">
        <label for="Odpoved2">V žlčníku</label><br>

        <input class="styl" type="radio" id="Odpoved3"  name="odpoved1" value="Odpoved 3">
        <label for="Odpoved3">V pankrease</label><br>

        <input class="styl" type="radio" id="Odpoved4"  name="odpoved1" value="Odpoved 4">
        <label for="Odpoved4">V žlčových uzlíkoch</label><br>
    </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(1)">NEXT</button>

</div>

<div class="container">
    <div class="textik">Vydychovaný vzduch obsahuje najviac?</div><hr>
    <img src="obrázok2.jpg" width="450" height="400">

    <div class="kon2">
    <div class="radio-toolbar">
        <input class="styl" type="radio" id="Odpoved1" name="odpoved2" value="Odpoved 1" >
        <label for="Odpoved1">Kyslíku</label><br>

        <input class="styl" type="radio" id="Odpoved2"  name="odpoved2" value="Odpoved 2">
        <label for="Odpoved2">Oxidu uhličitého</label><br>

        <input class="styl" type="radio" id="correct2"  name="odpoved2" value="Odpoved 3" >
        <label for="Odpoved3">Dusíku</label><br>

        <input class="styl" type="radio" id="Odpoved4"  name="odpoved2" value="Odpoved 4">
        <label for="Odpoved4">Vodnej pary</label><br>
    </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(2)">NEXT</button>

</div>
<!--<otazka3-->
<div class="container">
    <div class="textik">Koľko litrov krvi prečerpá za deň ľudské srdce?</div><hr>
    <img src="obrázok3.jpg" width="450" height="400">

    <div class="kon2">
    <div class="radio-toolbar">
        <input class="styl" type="radio" id="Odpoved1"  name="odpoved3" value="Odpoved 1"  >
        <label for="Odpoved1">4500</label><br>

        <input class="styl" type="radio" id="Odpoved2"  name="odpoved3" value="Odpoved 2">
        <label for="Odpoved2">5500</label><br>

        <input class="styl" type="radio" id="Odpoved3"  name="odpoved3" value="Odpoved 3">
        <label for="Odpoved3">6500</label><br>

        <input class="styl" type="radio" id="correct3"  name="odpoved3" value="Odpoved 4">
        <label for="Odpoved4">7500</label><br>
    </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(3)">NEXT</button>
            onclick="result()">Vyhodnotiť</button>

</div>
<!--<otazka4-->

<div class="container">
    <div class="textik">Ktorý z týchto orgánov ľudského tela nie je párový??</div><hr>
    <img src="obrázok4.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved4" value="Odpoved 1"  >
            <label for="Odpoved1">Močovod</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved4" value="Odpoved 2">
            <label for="Odpoved2">Oblička</label><br>

            <input class="styl" type="radio" id="correct4"  name="odpoved4" value="Odpoved 3">
            <label for="Odpoved3">Týmus(detská žľaza)</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved4" value="Odpoved 4">
            <label for="Odpoved4">Pľúca</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(4)">NEXT</button>

</div>


<!--<otazka5-->

<div class="container">
    <div class="textik">Ktorá krvná skupina má vo svete najvyššie zastúpenie medzi obyvateľstvom??</div><hr>
    <img src="obrázok5.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved5" value="Odpoved 1"  >
            <label for="Odpoved1">A</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved5" value="Odpoved 2">
            <label for="Odpoved2">B</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved5" value="Odpoved 3">
            <label for="Odpoved3">AB</label><br>

            <input class="styl" type="radio" id="correct5"  name="odpoved5" value="Odpoved 4">
            <label for="Odpoved4">0</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(5)">NEXT</button>

</div>

<!--<otazka6-->

<div class="container">
    <div class="textik">Koľko rôznych vôní rozozná náš čuch?</div><hr>
    <img src="obrázok6.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved6" value="Odpoved 1"  >
            <label for="Odpoved1">20 000</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved6" value="Odpoved 2">
            <label for="Odpoved2">30 000</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved6" value="Odpoved 3">
            <label for="Odpoved3">40 000</label><br>

            <input class="styl" type="radio" id="correct6"  name="odpoved6" value="Odpoved 4">
            <label for="Odpoved4">50 000</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(6)">NEXT</button>

</div>

<!--<otazka7-->

<div class="container">
    <div class="textik">Ľudský tep sa spomalí v okamihu, keď sa tvár dotkne vody. Ako sa nazýva tento jav?</div><hr>
    <img src="obrázok7.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved7" value="Odpoved 1"  >
            <label for="Odpoved1">Reflex topiacich sa</label><br>

            <input class="styl" type="radio" id="correct7"  name="odpoved7" value="Odpoved 2">
            <label for="Odpoved2">Potápačský reflex</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved7" value="Odpoved 3">
            <label for="Odpoved3">Obranný vodný reflex</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved7" value="Odpoved 4">
            <label for="Odpoved4">Dýchací reflex</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(7)">NEXT</button>

</div>

<!--<otazka8-->

<div class="container">
    <div class="textik">Väzivový útvar, ktorý sa nachádza na lebke malých detí v prvých dvoch rokoch života, sa nazýva:</div><hr>
    <img src="obrázok8.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="correct8"  name="odpoved8" value="Odpoved 1"  >
            <label for="Odpoved1">Fontanela</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved8" value="Odpoved 2">
            <label for="Odpoved2">Fixinela</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved8" value="Odpoved 3">
            <label for="Odpoved3">Fabio Quagliarella</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved8" value="Odpoved 4">
            <label for="Odpoved4">Cranionella</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(8)">NEXT</button>

</div>
<!--<otazka9-->

<div class="container">
    <div class="textik">Ktoré zuby nenájdete v mliečnom chrupe?</div><hr>
    <img src="obrázok9.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved9" value="Odpoved 1"  >
            <label for="Odpoved1">Rezáky</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved9" value="Odpoved 2">
            <label for="Odpoved2">Očné zuby</label><br>

            <input class="styl" type="radio" id="correct9"  name="odpoved9" value="Odpoved 3">
            <label for="Odpoved3">Črenové zuby</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved9" value="Odpoved 4">
            <label for="Odpoved4"> Stoličky</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(9)">NEXT</button>

</div>

<!--<otazka10-->

<div class="container">
    <div class="textik">Počet stavcov chrbtice človeka je rovnaký ako u žirafy. Koľko ich máme?</div><hr>
    <img src="obrázok10.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved10" value="Odpoved 1"  >
            <label for="Odpoved1">25</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved10" value="Odpoved 2">
            <label for="Odpoved2">30</label><br>

            <input class="styl" type="radio" id="correct10"  name="odpoved10" value="Odpoved 3">
            <label for="Odpoved3">33</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved10" value="Odpoved 4">
            <label for="Odpoved4">38</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(10)">NEXT</button>

</div>

<!--<otazka11-->

<div class="container">
    <div class="textik">Kde nájdeme najmenšie kosti a svaly v ľudskom tele?</div><hr>
    <img src="obrázok11.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved11" value="Odpoved 1"  >
            <label for="Odpoved1">V srdci</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved11" value="Odpoved 2">
            <label for="Odpoved2">V panve</label><br>

            <input class="styl" type="radio" id="correct11"  name="odpoved11" value="Odpoved 3">
            <label for="Odpoved3">V uchu</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved11" value="Odpoved 4">
            <label for="Odpoved4">V kolene</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(11)">NEXT</button>

</div>

<!--<otazka12-->

<div class="container">
    <div class="textik">Akú kosť vidíte na obrázku?</div><hr>
    <img src="obrázok12.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved12" value="Odpoved 1"  >
            <label for="Odpoved1">Miechu</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved12" value="Odpoved 2">
            <label for="Odpoved2">Rebrá</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved12" value="Odpoved 3">
            <label for="Odpoved3">Kľúčnu kosť</label><br>

            <input class="styl" type="radio" id="correct12"  name="odpoved12" value="Odpoved 4">
            <label for="Odpoved4">Hrudnú kosť</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(12)">NEXT</button>

</div>

<!--<otazka13-->

<div class="container">
    <div class="textik">Na obrázku vidíme prístroj, ktorý sa nazýva:</div><hr>
    <img src="obrázok13.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved13" value="Odpoved 1"  >
            <label for="Odpoved1">EKG</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved13" value="Odpoved 2">
            <label for="Odpoved2"> Inhalátor</label><br>

            <input class="styl" type="radio" id="correct13"  name="odpoved13" value="Odpoved 3">
            <label for="Odpoved3">Dialýza</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved13" value="Odpoved 4">
            <label for="Odpoved4">Lymfodrenážny prístroj</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(13)">NEXT</button>

</div>

<!--<otazka14-->

<div class="container">
    <div class="textik">Ako sa nazýva kosť na obrázku?</div><hr>
    <img src="obrázok14.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved14" value="Odpoved 1"  >
            <label for="Odpoved1">Lakťová kosť</label><br>

            <input class="styl" type="radio" id="correct14"  name="odpoved14" value="Odpoved 2">
            <label for="Odpoved2">Vretenná kosť</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved14" value="Odpoved 3">
            <label for="Odpoved3">Ramenná kosť</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved14" value="Odpoved 4">
            <label for="Odpoved4">Hubovitá kosť</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(14)">NEXT</button>

</div>

<!--<otazka15-->

<div class="container">
    <div class="textik">Ako sa nazýva kosť na obrázku?</div><hr>
    <img src="obrázok15.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved15" value="Odpoved 1"  >
            <label for="Odpoved1">Holenná kosť</label><br>

            <input class="styl" type="radio" id="correct15"  name="odpoved15" value="Odpoved 2">
            <label for="Odpoved2">Lýtková kosť</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved15" value="Odpoved 3">
            <label for="Odpoved3">Kompaktná kosť</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved15" value="Odpoved 4">
            <label for="Odpoved4">Okostica</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(15)">NEXT</button>

</div>

<!--<otazka16-->

<div class="container">
    <div class="textik">Kto nie je z uvedených oprávnený predpisovať lieky?</div><hr>
    <img src="obrázok16.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved16" value="Odpoved 1"  >
            <label for="Odpoved1">Zubár</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved16" value="Odpoved 2">
            <label for="Odpoved2">Veterinár</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved16" value="Odpoved 3">
            <label for="Odpoved3">Sekundárny lekár</label><br>

            <input class="styl" type="radio" id="correct16"  name="odpoved16" value="Odpoved 4">
            <label for="Odpoved4">Terapeut</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(16)">NEXT</button>

</div>


<!--<otazka17-->

<div class="container">
    <div class="textik">Koľko svalov sa musí zapojiť pri úsmeve?</div><hr>
    <img src="obrázok17.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved17" value="Odpoved 1"  >
            <label for="Odpoved1">6</label><br>

            <input class="styl" type="radio" id="correct17"  name="odpoved17" value="Odpoved 2">
            <label for="Odpoved2">17</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved17" value="Odpoved 3">
            <label for="Odpoved3">25</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved17" value="Odpoved 4">
            <label for="Odpoved4">33</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(17)">NEXT</button>

</div>

<!--<otazka18-->

<div class="container">
    <div class="textik">Ako nazývame ochorenie, ktoré sa prejavuje niekoľkosekundovými zástavami dýchania počas noci?</div><hr>
    <img src="obrázok18.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved18" value="Odpoved 1"  >
            <label for="Odpoved1">Narkolepsia</label><br>

            <input class="styl" type="radio" id="correct18"  name="odpoved18" value="Odpoved 2">
            <label for="Odpoved2">Spánkové apnoe</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved18" value="Odpoved 3">
            <label for="Odpoved3">Spánková paralýza</label><br>

            <input class="styl" type="radio" id="Odpoved4"  name="odpoved18" value="Odpoved 4">
            <label for="Odpoved4">Nočná mora</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(18)">NEXT</button>

</div>

<!--<otazka19-->

<div class="container">
    <div class="textik">Otorinolaryngológ je odborníkom na:</div><hr>
    <img src="obrázok19.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved19" value="Odpoved 1"  >
            <label for="Odpoved1">Ochorenia ústnej sliznice</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved19" value="Odpoved 2">
            <label for="Odpoved2">Ochorenia pľúc</label><br>

            <input class="styl" type="radio" id="Odpoved3"  name="odpoved19" value="Odpoved 3">
            <label for="Odpoved3">Chronické ochorenia všetkého druhu</label><br>

            <input class="styl" type="radio" id="correct19"  name="odpoved19" value="Odpoved 4">
            <label for="Odpoved4">Ochorenia uší, nosa, hrtana a hltana</label><br>
        </div>
    </div>
    <button class="glow-on-hover" class="next" onclick="next(19)">NEXT</button>

</div>


<!--<otazka20-->

<div class="container">
    <div class="textik">Ktorý faktor sa najviac podieľa na vzniku ochorení pľúc?</div><hr>
    <img src="obrázok20.jpg" width="450" height="400">

    <div class="kon2">
        <div class="radio-toolbar">
            <input class="styl" type="radio" id="Odpoved1"  name="odpoved20" value="Odpoved 1"  >
            <label for="Odpoved1">Strava s vysokým obsahom tuku</label><br>

            <input class="styl" type="radio" id="Odpoved2"  name="odpoved20" value="Odpoved 2">
            <label for="Odpoved2">Strava s vysokým obsahom sodíka</label><br>

            <input class="styl" type="radio" id="correct20"  name="odpoved20" value="Odpoved 3">
            <label for="Odpoved3"> Fajčenia</label><br>

            <input class="styl" type="radio" id="Odpoved4 "  name="odpoved20" value="Odpoved 4">
            <label for="Odpoved4">Konzumácia alkoholu</label><br>
        </div>
    </div>
    <button class="glow-on-hover"  onclick="result()">Vyhodnotiť</button>

</div>


<!--koniec-->


<script>
    // displaying the first block of question
    document.getElementsByClassName('container')[0].style.display = "block";

    // DEFINING THE NEXT FUNCTION
    function next(id) {
        document.getElementsByClassName('container')[id-1].style.display = "none";
        document.getElementsByClassName('container')[id].style.display = "block";
    }
    //getting final result

    function result() {
        var score = 0;
        if (document.getElementById('correct1').checked) {
            score++;
        }
        if (document.getElementById('correct2').checked) {
            score++;
        }
        if (document.getElementById('correct3').checked) {
            score++;
        }
        if (document.getElementById('correct4').checked) {
            score++;
        }
        if (document.getElementById('correct5').checked) {
            score++;
        }
        if (document.getElementById('correct6').checked) {
            score++;
        }
        if (document.getElementById('correct7').checked) {
            score++;
        }
        if (document.getElementById('correct8').checked) {
            score++;
        }
        if (document.getElementById('correct9').checked) {
            score++;
        }
        if (document.getElementById('correct10').checked) {
            score++;
        }
        if (document.getElementById('correct11').checked) {
            score++;
        }
        if (document.getElementById('correct12').checked) {
            score++;
        }
        if (document.getElementById('correct13').checked) {
            score++;
        }
        if (document.getElementById('correct14').checked) {
            score++;
        }
        if (document.getElementById('correct15').checked) {
            score++;
        }
        if (document.getElementById('correct16').checked) {
            score++;
        }
        if (document.getElementById('correct17').checked) {
            score++;
        }
        if (document.getElementById('correct18').checked) {
            score++;
        }
        if (document.getElementById('correct19').checked) {
            score++;
        }
        if (document.getElementById('correct20').checked) {
            score++;
        }

        alert("your score is: "+ score);

    }



</script>

</body>
</html>
