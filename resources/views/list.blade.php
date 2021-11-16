<!DOCTYPE html>
<html>
<head>
<style>
    p.velkyfrajer{
        font-size: 20px;
        font-family: "Roboto", sans-serif;
        margin: 0 auto;
    }

    div.raketa{
        border: 5px solid darkgray;
        background-color: gray;
        padding: 10px;
        margin: 10px;
    }
    body{
        margin: auto;
        width: 60%;
        border: 5px solid gray;
        background-color: dimgray;
        padding: 10px;
    }

    .container {
        border: 3px solid black;
        border-radius: 10px;
        width: 60%;
        padding: 20px;
        display: none;
        text-align: center;

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
        border: 3px solid black;

    }
</style>

</head>
<body>


<div class="raketa">
    <p class="velkyfrajer">Ste prihlásený ako : {{$prihlasenie->meno}}</p>

</div>

<div class="container">

    Q1 what is 100+200?<hr>
    <img src="pic1.jpg" width="300" height="400">
    <p>                      </p>
    <input type="radio" name="question1" id="correct1">300<br>
    <input type="radio" name="question1">400<br>
    <input type="radio" name="question1">150<br>
    <input type="radio" name="question1">600<br>
    <button class="next" onclick="next(1)">NEXT</button>

</div>

<div class="container">
    Q2 what is 100+300?<hr>
    <img src="pic1.jpg" width="300" height="400">
    <p>                      </p>
    <input type="radio" name="question2" >300<br>
    <input type="radio" name="question2" id="correct2">400<br>
    <input type="radio" name="question2">150<br>
    <input type="radio" name="question2">600<br>
    <button class="next" onclick="next(2)">NEXT</button>

</div>

<div class="container">
    Q3 what is 300+200?<hr>
    <img src="pic1.jpg" width="300" height="400">
    <p>                      </p>
    <input type="radio" name="question3" >300<br>
    <input type="radio" name="question3">400<br>
    <input type="radio" name="question3">150<br>
    <input type="radio" name="question3" id="correct3">500<br>
    <button onclick="result()">SUBMIT QUIZ</button>
</div>
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

        alert("your score is: "+ score);
    }
</script>

</body>
</html>
