<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('basehead.php') ?>
</head>

<?php include_once('header.php'); ?>

<section class="min-h-50vh flex items-start">
    <div class="mx-5 md-mx-l5">
        <h2 class="white fs-l2 lh-2 md-fs-xl1 md-lh-1">Testing</h2>
        <br>

        <h3 class="white pb-1">Mobile</h3>
        <table class="table w-75vw">
            <thead>
            <tr>
                <th class="white">Test Nr.</th>
                <th class="white">Beschreibung</th>
                <th class="white">Erwartetes Resultat</th>
                <th class="white">Effektives Resultat</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>1</th>
                <td>
                    Wird die Navigation als Menu bar angezeigt?
                </td>
                <td>Ja</td>
                <td>Ja</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>
                    Werden die Videos gleichzeitig gestartet?
                </td>
                <td>Ja</td>
                <td>Ja</td>
            </tr>
            </tbody>
        </table>
        <br>


        <h3 class="white pb-1">Desktop</h3>
        <table class="table w-75vw">
            <thead>
            <tr>
                <th class="white">Test Nr.</th>
                <th class="white">Beschreibung</th>
                <th class="white">Erwartetes Resultat</th>
                <th class="white">Effektives Resultat</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>1</th>
                <td>
                    Werden neue Elemente generiert beim Scrollen auf der Scroll Animation Seite?
                </td>
                <td>Ja</td>
                <td>Ja</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>
                    Sind die ersten 3 Videos im sichtbaren Bereich?
                </td>
                <td>Ja</td>
                <td>Ja</td>
            </tr>
            </tbody>
        </table>
        <br>

        <h3 class="white fs-l2 pb-1">Browserkompatibilität</h3>
        <p class="white">Getestet: Kann die Homepage angezeigt werden?</p>
        <br>

        <div class="w-75vw flex flex-wrap items-stretch resp-grid">
            <div class="col-4">
                <h3 class="white pb-1">Firefox (bestanden)</h3>
                <img src="assets/images/firefox_test.PNG" alt="">
            </div>

            <div class="col-4">
                <h3 class="white pb-1">Chrome (bestanden)</h3>
                <img src="assets/images/chrome_test.PNG" alt="">
            </div>

            <div class="col-4">
                <h3 class="white pb-1">Edge (bestanden)</h3>
                <img src="assets/images/edge_test.PNG" alt="">
            </div>
        </div>
    </div>
</section>

<?php include_once('footer.php'); ?>

</html>
