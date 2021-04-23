<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('basehead.php'); ?>
</head>

<?php include_once('header.php') ?>

<section id="home" class="min-h-50vh flex justify-start items-center">
    <div class="mx-5 md-mx-l5">
        <h2 class="white fs-l2 lh-2 md-fs-xl1 md-lh-1">Kontakt:</h2>
        <form class="" method="post" action="#">
            <br>
            <div class="">
                <div class="">
                    <input class="input" type="text" name="name" id="name" value="" placeholder="Name">
                </div>
                <div class="">
                    <input class="input" type="email" name="email" id="email" value="" placeholder="Email">
                </div>
                <div class="">
                    <textarea class="textarea" name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                </div>
                <div class="">
                    <ul class="actions">
                        <li>
                            <input id="submit" name="submit" type="submit" value="Send Message" class="button bg-indigo">
                        </li>
                        <li><input class="button" type="reset" value="Reset"></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include_once('footer.php') ?>

</html>
