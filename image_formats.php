<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('basehead.php') ?>
</head>

<?php include_once('header.php'); ?>

<section class="min-h-50vh flex items-start">
    <div class="mx-5 md-mx-l5">
        <h2 class="white fs-l2 lh-2 md-fs-xl1 md-lh-1">Bild Formate</h2>
        <br>

        <div class="w-75vw flex flex-wrap items-stretch resp-grid">
            <div class="col-4">
                <h3 class="white pb-1">JPEG</h3>
                <img src="assets/images/image_comparison.jpg" alt="">
                <h3 class="white pb-1">Grösse: 10.4 MB</h3>
                <h3 class="white pb-1">Vorteile:</h3>
                <p class="white">
                    •	Alle Betriebssystem unterstützen JPEG<br>
                    •	Bekannt<br>
                </p>
                <br>
                <h3 class="white pb-1">Nachteile:</h3>
                <p class="white">
                    •	Unterstützt keine Transparenz<br>
                    •	Verlustbehaftete Kompression<br>
                </p>
                <br>
                <h3 class="white pb-1">Verwendung:</h3>
                <p class="white">Bei kleinen Dateigrössen.</p>
            </div>

            <div class="col-4">
                <h3 class="white pb-1">JPEG (low)</h3>
                <img src="assets/images/image_comparison_low.jpg" alt="">
                <h3 class="white pb-1">Grösse: 262 KB</h3>
                <h3 class="white pb-1">10% von Originalem Bild</h3>
                <p class="white">Man sieht noch viele Informationen, dafür dass es nur noch 10% sind.</p>
                <p class="white">Aber man sieht auch den Unterschied.</p>
            </div>

            <div class="col-4">
                <h3 class="white pb-1">Gif</h3>
                <img src="assets/images/image_comparison.gif" alt="">
                <h3 class="white pb-1">Grösse: 5.1 MB</h3>
                <h3 class="white pb-1">Vorteile:</h3>
                <p class="white">
                    •	Kleine Dateigrösse<br>
                    •   Unterstützt Animationen<br>
                </p>
                <br>
                <h3 class="white pb-1">Nachteile:</h3>
                <p class="white">
                    •	Nur 256 Farben<br>
                </p>
                <br>
                <h3 class="white pb-1">Verwendung:</h3>
                <p class="white">Oft im Web. <br>Dieses Format wird auch für Videos verwendet.</p>
            </div>

            <div class="col-4">
                <h3 class="white pb-1">BMP</h3>
                <img src="assets/images/image_comparison.bmp" alt="">
                <h3 class="white pb-1">Grösse: 34.8 MB</h3>
                <h3 class="white pb-1">Vorteile:</h3>
                <p class="white">
                    •	Einfach Strukturiert (Bildpunkte)<br>
                    •   Schnelle bearbeitung<br>
                    •   Hohe kompression<br>
                </p>
                <br>
                <h3 class="white pb-1">Nachteile:</h3>
                <p class="white">
                    •	Hohe Dateigrössen<br>
                    •   Verlustbehaftete Kompression<br>
                </p>
            </div>

            <div class="col-4">
                <h3 class="white pb-1">PNG</h3>
                <img src="assets/images/image_comparison.png" alt="">
                <h3 class="white pb-1">Grösse: 10.4 MB</h3>
                <h3 class="white pb-1">Vorteile:</h3>
                <p class="white">
                    •	Verlustfreie Kompression<br>
                    •   Unterstützt Transparenz<br>
                    •   Verliert keine Informationen beim erneuten Speichern<br>
                </p>
                <br>
                <h3 class="white pb-1">Nachteile:</h3>
                <p class="white">
                    •	Hohe Dateigrössen<br>
                    •   Nicht überall unterstützt<br>
                </p>
                <br>
                <h3 class="white pb-1">Verwendung:</h3>
                <p class="white">Oft im Web. <br>
                    Wird verwendet wenn Transparenz gebraucht wird.<br>
                    Auch wenn komprimiert werden muss
                </p>
            </div>
        </div>
    </div>
</section>

<?php include_once('footer.php'); ?>

</html>
