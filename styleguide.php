<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('basehead.php') ?>
</head>

<?php include_once('header.php'); ?>

<section id="home" class="min-h-100vh flex justify-start items-center">
    <div class="mx-5 md-mx-l5">
        <h2 class="white fs-l2 lh-2 md-fs-xl1 md-lh-1  ">Styleguide</h2>
        <br>
        <br>

        <div class="flex justify-between w-75vw">
            <div class="w-25vw">
                <h3 class="white pb-1">Hintergrundfarbe:</h3>
                <div class="bg-black bc-white border-solid h-25vh flex justify-center items-center">
                    <p class="white content-center">Schwarz</p>
                </div>
            </div>

            <div class="w-25vw">
                <h3 class="white pb-1">Primärfarbe:</h3>
                <div class="bg-white bc-white border-solid h-25vh flex justify-center items-center">
                    <p class="black content-center">Weiss</p>
                </div>
            </div>

            <div class="w-25vw">
                <h3 class="white pb-1">Sekundärfarbe:</h3>
                <div class="bg-indigo bc-white border-solid h-25vh flex justify-center items-center">
                    <p class="white content-center">Indigo</p>
                </div>
            </div>
        </div>
        <br>

        <h3 class="white pb-1">Schriftart:</h3>
        <p class="white">Muli, sans-serif</p>
        <br>

        <h3 class="white pb-1">Logo:</h3>
        <div class=" bc-white border-solid">
            <img class="max-h-l5 p-1 pl-4" src="assets/images/logo.png" />
        </div>
        <br>

        <h3 class="white pb-1">Schaltflächen:</h3>
        <p class="white">
            Bei Wichtigen, die Primärfarbe als Hintergrundfarbe. Bei allen anderen die Sekundärfarbe verwenden.<br>
            Die Form soll rechteckig und mit Abrundungen versehen sein. Der Text soll einen hohen Kontrast zu der Hintergrundfarbe haben.
            Die Farbe soll dunkler werden, wenn man darauf ist.
        </p>
        <br>

        <h3 class="white pb-1">Abstände:</h3>
        <p class="white">
            Die Seite soll in Sektionen unterteilt sein.<br>
            Diese haben einen Abstand (Padding allen Seiten) von 1.25 Rem.<br>
            Die Seite verwendet die ganze Breite.
        </p>
        <br>

        <h3 class="white pb-1">Header und Footer:</h3>
        <p class="white">
            •	Der Header besteht aus dem Logo (links) und dem Navigationsmenu (rest).<br>
            •   Der Footer beinhaltet auch das Logo aber kleiner. Im Footer sind ausserdem wichtige Seiten wie die Urheberrechtsseite und das Impressum.<br>
        </p>
        <br>

        <a class="button no-underline bg-indigo" href="styleguide_example.php">Example</a>
    </div>
</section>

<?php include_once('footer.php'); ?>

</html>
