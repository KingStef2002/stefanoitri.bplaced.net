<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('basehead.php') ?>
</head>

<?php include_once('header.php'); ?>

<section class="min-h-50vh flex items-start">
    <div class="mx-5 md-mx-l5">
        <div>
            <h2 class="white fs-l2 lh-2 md-fs-xl1 md-lh-1">Scroll Activated Animation</h2>
            <br>
            <div id="replacing"></div>
        </div>

        <script>
            let generatedCount = 0;
            let divElement = document.getElementById("replacing");

            document.addEventListener("scroll", onScroll);

            function fillDocument() {
                for (let index = 0; index < 100; index++) {
                    generatedCount++;

                    let newElement = document.createElement("h2");
                    //newElement.classList.add("white");
                    newElement.style.color = getRandomColor();
                    newElement.innerHTML = `Test ${generatedCount}`
                    divElement.appendChild(newElement);
                }
            }

            function getRandomColor() {
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }

            function onScroll() {
                if (window.innerHeight + window.scrollY + 500 > document.body.clientHeight) {
                    fillDocument();
                }
            }

            fillDocument();
        </script>
    </div>
</section>

<?php include_once('footer.php'); ?>

</html>
