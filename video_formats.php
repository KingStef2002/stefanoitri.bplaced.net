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

        <div class="w-100vw flex flex-column md-flex-row">
            <video controls="" width="25%" height="auto">
                <source src="assets/videos/m152_2.mp4" type="video/mp4">
            </video>
            <div class="p-2 pl-4 w-75pc">
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
                <br>
                <h3 class="white pb-1">Verwendung:</h3>
                <p class="white">Wird am meisten im Web eingesetzt.</p>
            </div>
        </div>

        <div class="w-100vw flex flex-column md-flex-row">
            <video controls="" width="25%" height="auto">
                <source src="assets/videos/m152_2.mov" type="video/quicktime">
            </video>
            <div class="p-2 pl-4 w-70pc">
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
                <p class="white">Verwendung:</p>
                <p>Wird für Videoschnitt verwendet</p>
            </div>

        </div>

        <div class="w-100vw flex flex-column md-flex-row">
            <video controls="" width="25%" height="auto">
                <source src="assets/videos/m152_2.ogg" type="video/ogg">
            </video>
            <div class="p-2 pl-4 w-70pc">
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
                <p class="white">Verwendung:</p>
                <p>Wird zum streamen verwendet</p>
                <br>
            </div>

        </div>

        <div class="w-100vw flex flex-column md-flex-row">
            <video controls="" width="25%" height="auto">
                <source src="assets/videos/m152_2.avi" type="video/avi">
            </video>
            <div class="p-2 pl-4 w-50pc">
                <h3 class="white pb-1">AVI</h3>
                <p class="white">Grösse: 252 MB</p>
                <p class="white">Vorteile:</p>
                <p class="white">
                    •	Weite Verbreitung<br>
                    •	Kein Streaming<br>
                </p>
                <br>
                <p class="white">Nachteile:</p>
                <p class="white">
                    •	Unflexibel<br>
                </p>
                <br>
                <h3 class="white pb-1">Verwendung:</h3>
                <p class="white">Es kann an vielen Orten verwendet werden, ausser beim Streaming.</p>
            </div>

        </div>
        <br>
        <br>

        <h2 class="white fs-l2 lh-2 md-fs-xl1 md-lh-1  ">Audio Formate</h2>
        <br>

        <div class="w-100vw flex flex-column md-flex-row">
            <audio controls="">
                <source src="assets/audio/cat_sound.mp3" type="audio/mp3">
            </audio>
            <div class="p-2 pl-4 w-50pc">
                <h3 class="white pb-1">MP3</h3>
                <p class="white">Grösse: 66.3 KB</p>
                <p class="white">Vorteile:</p>
                <p class="white">
                    •	Weite Verbreitung<br>
                    •	Kann komprimiert werden mit wenig verlust<br>
                    •	Weitreichende unterstützung<br>
                </p>
                <br>
                <p class="white">Nachteile:</p>
                <p class="white">
                    •	Verlustbehaftete Komprimierung<br>
                </p>
                <br>
                <h3 class="white pb-1">Verwendung:</h3>
                <p class="white">Dies wird fast überall verwendet.<br> Es ist dass bekannteste Audio Format.</p>
            </div>
        </div>

        <div class="w-100vw flex flex-column md-flex-row">
            <audio controls="">
                <source src="assets/audio/cat_sound.ogg" type="audio/ogg">
            </audio>
            <div class="p-2 pl-4 w-50pc">
                <h3 class="white pb-1">OGG</h3>
                <p class="white">Grösse: 53.6 KB</p>
                <p class="white">Vorteile:</p>
                <p class="white">
                    •	Lizenfrei<br>
                    •	Kleine Dateigrösse<br>
                </p>
                <br>
                <p class="white">Nachteile:</p>
                <p class="white">
                    •	Keine grosse bekanntheit<br>
                    •	Wird nicht von vielen unterstützt<br>
                </p>
                <br>
                <h3 class="white pb-1">Verwendung:</h3>
                <p class="white">Wenn nicht viel Speicher vorhanden ist, ist dieses Format perfekt geeignet.</p>
            </div>
        </div>

        <div class="w-100vw flex flex-column md-flex-row">
            <audio controls="">
                <source src="assets/audio/cat_sound.wav" type="audio/wav">
            </audio>
            <div class="p-2 pl-4 w-50pc">
                <h3 class="white pb-1">WAV</h3>
                <p class="white">Grösse: 521 KB</p>
                <p class="white">Vorteile:</p>
                <p class="white">
                    •	Kein Verlust beim komprimierenbr<br>
                    •	Einfache Bearbeitung<br>
                </p>
                <br>
                <p class="white">Nachteile:</p>
                <p class="white">
                    •	Dateien sehr gross (hier 10x grösser)<br>
                </p>
                <br>
                <h3 class="white pb-1">Verwendung:</h3>
                <p class="white">
                    Wenn die Qualität wichtiger ist als der Speicher sollte dieses Format gewählt werden.<br>
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
