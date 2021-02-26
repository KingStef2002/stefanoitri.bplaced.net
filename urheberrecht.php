<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hook</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shorthandcss@1.1.1/dist/shorthand.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:200,300,400,500,600,700,800,900&display=swap" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.css"/>
    <script src="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.js" defer></script>
    <script>
        window.addEventListener("load", function(){window.wpcc.init({"colors":{"popup":{"background":"#f6f6f6","text":"#000000","border":"#555555"},"button":{"background":"#555555","text":"#ffffff"}}, "content":{"href":"/datenschutz.php"},"border":"normal","corners":"normal","padding":"small","margin":"large","fontsize":"large"})});
    </script>
</head>

<body class="bg-black muli">
    <nav class="w-100pc flex flex-column md-flex-row md-px-10 py-5 bg-black">
        <div class="flex justify-between">
            <a href="index.php" class="flex items-center p-2 mr-4 no-underline">
                <img class="max-h-l2 w-auto" src="assets/images/logo.png" />
            </a>
            <a data-toggle="toggle-nav" data-target="#nav-items" href="#"
                class="flex items-center ml-auto md-hidden indigo-lighter opacity-50 hover-opacity-100 ease-300 p-1 m-3">
                <i data-feather="menu"></i>
            </a>
        </div>
        <div id="nav-items" class="hidden flex sm-w-100pc flex-column md-flex md-flex-row md-justify-end items-center">
            <a href="#home" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Home</a>
            <a href="#features" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Features</a>
            <a href="#pricing" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Pricing</a>
            <a href="#blog" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Blog</a>
            <a href="#" class="button bg-white black fw-600 no-underline mx-5">Register</a>
        </div>
    </nav>
    
    <section id="home" class="min-h-50vh flex justify-start items-center">
        <div class="mx-5 md-mx-l5">
            <h3 class="white">Nenne 3 verschiedene Arten von Werken welche Urheberrechtlich geschützt werden?</h3>
            <p class="white">
                •	Fotografische, filmische und andere visuelle oder audiovisuelle Werke<br>
                •   Werke der Musik und andere akustische Werke<br>
                •   Werke der Baukunst
            </p>
            <br>

            <h3 class="white">Welche Nutzungsrechte hat ein Urheber?</h3>
            <p class="white">
                •	Werkexemplare wie Druckerzeugnisse, Ton-, Tonbild- oder Datenträger herzustellen<br>
                •   Werkexemplare anzubieten, zu veräussern oder sonst wie zu verbreiten<br>
                •   Durch Radio, Fernsehen oder ähnliche Einrichtungen, auch über Leitungen, zu senden
            </p>
            <br>

            <h3 class="white">Wie lange ist die Schutzdauer bei Computerprogrammen?</h3>
            <p class="white">50 Jahre nach dem Tod des Urhebers.</p>
            <br>

            <h3 class="white">Wann trat das Urheberrechtsgesetz in der Schweiz in Kraft?</h3>
            <p class="white">Das Gesetz trat am 1. Juli 1993 in Kraft.</p>
            <br>

            <h3 class="white">Welche Angaben müssen Betreiber von einer Webseite über sich machen?</h3>
            <p class="white">
                •	Vorname/Name bei natürlichen Personen bzw. vollständige Firma bei Unternehmen<br>
                •   Postadresse<br>
                •   E-Mail-Adresse<br>
                •   Optional: Telefonnummer sowie Faxnummer
            </p>
            <br>

            <h3 class="white">Welche Interessen schützt das Urheberrechtsgesetz?</h3>
            <p class="white">Die wirtschaftlichen und persönlichkeitsrechtlichen Interessen</p>
            <br>
            <h3 class="white">Welche Möglichkeiten gibt es ein Bild auf der Eigenen Webseite zu verwenden?</h3>
            <p class="white">Mann muss der Urheber selbst sein oder mit dem Urheber eine schriftliche Vereinbarung haben.</p>
            <br>
            <h3 class="white">Können auch mehrere Personen Urheber eines Werkes sein?</h3>
            <p class="white">Ja, sie teilen sich dann die Urheberschaft</p>
            <br>
            <h3 class="white">Was kann ein Urheber machen, wenn er in seinen Rechten verletzt wird?</h3>
            <p class="white">
                •	eine drohende Verletzung zu verbieten<br>
                •   eine bestehende Verletzung zu beseitigen<br>
                •   die beklagte Person zu verpflichten, die Herkunft der in ihrem Besitz befindlichen, widerrechtlich hergestellten oder in Verkehr gebrachten Gegenstände anzugeben.
            </p>
            <br>
            <h3 class="white">Wann sind Texte auch Urheberrechtlich geschützt?</h3>
            <p class="white">Wenn sie über einen bestimmten Grad an schöpferischer Leistung verfügen.</p>
            <br>
        </div>
    </section>

    <!-- footer -->
    <footer class="p-5 md-p-l5 bg-indigo-lightest-10">
        <div class="flex flex-wrap">
            <div class="md-w-25pc mb-10">
                <img src="assets/images/logo.png" class="w-l5" alt="">
                <div class="white opacity-70 fs-s2 mt-4 md-pr-10">
                    <p>Soluta voluptate et optio. Eos quasi impedit sapiente aliquid eius eligendi at. Necessitatibus
                        magni et sed quod quas minima.</p>
                    <br>
                    <p>Soluta voluptate et optio. Eos quasi impedit sapiente aliquid eius eligendi at. Necessitatibus
                        magni et sed quod quas minima.</p>
                </div>
            </div>
            <div class="w-100pc md-w-50pc">
                <div class="flex justify-around">
                    <div class="w-33pc md-px-10 mb-10">
                        <h5 class="white">Company</h5>
                        <ul class="list-none mt-5 fs-s2">
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">About
                                    Us</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Jobs</a>
                            </li>
                            <li class="my-3"><a href="#"
                                    class="white opacity-70 no-underline hover-underline">Contact</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Media</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-33pc md-px-10 mb-10">
                        <h5 class="white">Product</h5>
                        <ul class="list-none mt-5 fs-s2">
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">About
                                    Us</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Jobs</a>
                            </li>
                            <li class="my-3"><a href="#"
                                    class="white opacity-70 no-underline hover-underline">Contact</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Media</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-33pc md-px-10 mb-10">
                        <h5 class="white">Support</h5>
                        <ul class="list-none mt-5 fs-s2">
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">About
                                    Us</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Jobs</a>
                            </li>
                            <li class="my-3"><a href="#"
                                    class="white opacity-70 no-underline hover-underline">Contact</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Media</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-100pc md-w-25pc">
                <div class="flex w-75pc md-w-100pc mx-auto">
                    <input type="text"
                        class="input flex-grow-1 bw-0 fw-200 bg-indigo-lightest-10 white ph-indigo-lightest focus-white opacity-80 fs-s3 py-5 br-r-0"
                        placeholder="Email Address">
                    <button class="button bg-indigo indigo-lightest fw-300 fs-s3 br-l-0">Start</button>
                </div>
                <div class="flex justify-around my-8">
                    <a href="#" class="relative p-5 bg-indigo br-round white hover-scale-up-1 ease-400"><i
                            data-feather="twitter" class="absolute-center h-4"></i></a>
                    <a href="#" class="relative p-5 bg-indigo br-round white hover-scale-up-1 ease-400"><i
                            data-feather="facebook" class="absolute-center h-4"></i></a>
                    <a href="#" class="relative p-5 bg-indigo br-round white hover-scale-up-1 ease-400"><i
                            data-feather="instagram" class="absolute-center h-4"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <a class="fixed top-50pc right-0 p-3 bg-indigo white hover-scale-up-1 ease-300 no-underline" href="https://gum.co/tifJM" target="_blank">
        <i class="w-4" data-feather="download"></i>
    </a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>