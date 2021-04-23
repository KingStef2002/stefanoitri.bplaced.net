<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('basehead.php') ?>
</head>

<?php include_once('header.php'); ?>

<section class="min-h-100vh flex justify-start items-center">
    <div class="mx-5 md-mx-l5">
        <div id="wrapper" class="p-4 h-25vh w-50vw">
            <h2 class="white fs-l2">Animiertes Gif</h2>
            <img class="max-h-l10" src="assets/images/tastatur.gif" alt="gif">
        </div>
        <br>

        <div id="wrapper" class="p-4 h-25vh w-50vw">
            <h2 class="white fs-l2">SVG Animation</h2>
            <svg viewBox="0 0 700 200">
                <path class="loading" d="m20,30 h600" />
                <path d="m620,10 v40 l20,-20z" fill="#306f91" />
            </svg>
        </div>
        <br>

        <div id="wrapper" class="p-4 h-25vh w-50vw">
            <h2 class="white fs-l2">Canvas</h2>
            <canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">
                Your browser does not support the HTML canvas tag.</canvas>
            <script>
                var c = document.getElementById("myCanvas");
                var ctx = c.getContext("2d");

                var grd = ctx.createRadialGradient(75,50,5,90,60,100);
                grd.addColorStop(0,"red");
                grd.addColorStop(0,"blue");
                grd.addColorStop(1,"green");

                ctx.fillStyle = grd;
                ctx.fillRect(10,10,150,80);
            </script>
        </div>
        <br>
        <br>
        <br>

        <div>
            <h2 class="white fs-l2">Transformation Effekt</h2>
            <p class="white">
                Effekte welche etwas neigen, rotieren oder skalieren.<br>
                Z.B: Effekt 6; hier wird die Box gedreht.
            </p>
        </div>

        <div>
            <h2 class="white fs-l2">Translation Effekt</h2>
            <p class="white">
                Effekte die etwas verschieben.<br>
                Z.B: Effekt 4; hier wird die Box seitlich nach Unten verschoben.
            </p>
        </div>

        <div>
            <h2 class="white fs-l2">Transition Effekt</h2>
            <p class="white">
                Effekte die eine gewisse Zeit brauchen.<br>
                Diese Effekte können auch Übergänge genannt werden.<br>
                Z.B: Effekt 6; hier wird beim drauf zeigen, die Box innerhalb einer gewissen Zeit gedreht und gesenkt.<br>
                Und nachdem die Box wieder verlassen wurde, findet der umgekehrte Prozess statt.<br>
                Effekt 7; hier geht die Box in gewissen Abständen von links nach rechts.
            </p>
        </div>


        <div id="wrapper" class="p-4 w-50vw">
            <h2 class="white fs-l2 lh-2 md-fs-l5 md-lh-1">CSS Animations</h2>
            <div class="element effekt1">
                <h2>Effekt 1</h2>
            </div>
            <br>

            <div class="element effekt2">
                <h2>Effekt 2</h2>
            </div>
            <br>

            <div class="element effekt3">
                <h2>Effekt 3</h2>
            </div>
            <br>

            <div class="element effekt4">
                <h2>Effekt 4</h2>
            </div>
            <br>

            <div class="element effekt5">
                <h2>Effekt 5</h2>
            </div>
            <br>

            <div class="element effekt6">
                <h2>Effekt 6</h2>
            </div>
            <br>

            <div class="element effekt7">
                <h2>Effekt 7</h2>
            </div>
            <br>
        </div>
    </div>
</section>

<?php include_once('footer.php'); ?>

</html>
