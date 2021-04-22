<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('basehead.php') ?>
</head>

<?php include_once('header.php'); ?>

<section id="home" class="min-h-100vh flex justify-start items-start">
    <div class="mx-5 md-mx-l5">
        <h2 class="white fs-l2 lh-2 md-fs-xl1 md-lh-1  ">Video Formate</h2>
        <br>
        <br>
        <a class="button no-underline bg-indigo" onclick="syncVideos()">Sync all videos</a>
        <a class="button no-underline bg-indigo" onclick="stopSync()">Stop sync</a>
        <br>

        <div class="h-25vh flex">
            <video controls="" width="auto" height="100%">
                <source src="assets/videos/m152_2.mp4" type="video/mp4">
            </video>
            <div class="p-2 pl-4 w-50pc">
                <h3 class="white pb-1">MP4</h3>
                <p class="white">Grösse: 253 MB</p>
                <p class="white">Vorteile:</p>
                <p class="white">
                    •	Starke Kompression ohne erkennbaren Qualitätsverlust<br>
                    •   Web-Standard<br>
                    •   Vielseitig einsetzbar<br>
                </p>
                <br>
                <p class="white">Nachteile:</p>
                <p class="white">
                    •	Ungeeignet für Streaming<br>
                </p>
            </div>
        </div>

        <div class="h-25vh flex">
            <video controls="" width="auto" height="100%">
                <source src="assets/videos/m152_2.mov" type="video/quicktime">
            </video>
            <div class="p-2 pl-4 w-50pc">
                <h3 class="white pb-1">Mov</h3>
                <p class="white">Grösse: 252 MB</p>
                <p class="white">Vorteile:</p>
                <p class="white">
                    •	Standard für professionellen Videoschnitt<br>
                </p>
                <br>
                <p class="white">Nachteile:</p>
                <p class="white">
                    •	Nur auf wenigen Endgeräten abspielbar<br>
                    •	Qualitätsverlust durch komprimierung<br>
                </p>
                <br>
                <p class="white">Verwendungszweck:</p>
                <p>Wird für Videoschnitt verwendet</p>
            </div>

        </div>

        <div class="h-25vh flex">
            <video controls="" width="auto" height="100%">
                <source src="assets/videos/m152_2.ogg" type="video/ogg">
            </video>
            <div class="p-2 pl-4 w-50pc">
                <h3 class="white pb-1">OGG</h3>
                <p class="white">Grösse: 257 MB</p>
                <p class="white">Vorteile:</p>
                <p class="white">
                    •	Plattformvielfalt<br>
                    •   Offener Quellcode<br>
                    •   Einfache Bedienung<br>
                    •   5.1 Surroundinformationen – Lückenlose Wiedergabe<br>
                </p>
                <br>
                <p class="white">Nachteile:</p>
                <p class="white">
                    •	Hohen Bitratenbereiche<br>
                </p>
                <br>
                <p class="white">Verwendungszweck:</p>
                <p>Wird zum streamen verwendet</p>

            </div>

        </div>

        <div class="h-25vh flex">
            <video controls="" width="auto" height="100%">
                <source src="assets/videos/m152_2.avi" type="video/avi">
            </video>
            <div class="p-2 pl-4 w-50pc">
                <h3 class="white pb-1">AVI</h3>
                <p class="white">Grösse: 252 MB</p>
                <p class="white">Vorteile:</p>
                <p class="white">
                    •	Weite Verbreitung<br>
                </p>
                <br>
                <p class="white">Nachteile:</p>
                <p class="white">
                    •	Unflexibel<br>
                </p>
            </div>

        </div>


    </div>
</section>

<?php include_once('footer.php'); ?>
<script>
    function syncVideos() {
        var time = document.getElementsByTagName("video")[0].currentTime
        for (let videoElement of document.getElementsByTagName("video")) {
            videoElement.pause();
            videoElement.currentTime = time;
            videoElement.controls = false;
        }

        for (let videoElement of document.getElementsByTagName("video")) {
            videoElement.play();
        }
    }

    function stopSync() {
        for (let videoElement of document.getElementsByTagName("video")) {
            videoElement.pause();
            videoElement.controls = true;
        }
    }
</script>
</html>
