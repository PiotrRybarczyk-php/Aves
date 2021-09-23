<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<?php $captcha = '6LcEAPUaAAAAALF4L9uVvZeF6MvOs8KKKv8uXgvU'; ?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="assets/front/css/qgrid.css" rel="stylesheet" />
    <link href="assets/front/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/front/css/style.css" rel="stylesheet" />
    <title>Toyota Aves</title>
</head>

<body>
    <header class="huge_block" style="background-image:url(assets/front/img/picture-1.jpeg)">
        <div class="content_block-2 aves_padding" id="shit">
            <div class="flex_box" style="height:156px;">
                <span style="display:flex;align-items:flex-end;"><img class="aves_logo" src="assets/front/icons/logo-white.svg"></span>
                <div class="flex_filler" id="fill-1"></div>
                <div class="white_box">
                    <img class="white_logo" src="assets/front/icons/zdunska_wola.png">
                </div>
            </div>
            <div class="flex_box flex_align_e" id="btn-block">
                <button class="btn_aves">zapisz się</button>
            </div>
            <div class="flex_box" style="height:405px;">
                <div class="contact_block flex_mob_e">
                    <h1>MASZ PYTANIA? SKONTAKTUJ SIĘ Z NAMI POPRZEZ FORMULARZ KONTAKTOWY</h1>
                    <form>
                        <input type="text" name="t1" placeholder="LOREM IPSUM">
                        <input type="text" name="t2" placeholder="LOREM IPSUM">
                        <input type="text" name="t3" placeholder="LOREM IPSUM">
                        <div class="btn_flex"><button class="btn_aves-inv">zapisz się</button></div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <main>
        <?php if (isset($_SESSION['response_text'])) : ?>
            <div class="fixed_bar" id="fixbar">
                <div class="session_reply" style="background-color:<?= $_SESSION['response_color']; ?>">
                    <button onclick="hide_bar()">x</button>
                    <h1><?= $_SESSION['response_text']; ?></h1>
                </div>
            </div>
            <?php unset($_SESSION['response_text']); ?>
            <?php unset($_SESSION['response_color']); ?>
        <?php endif; ?>
        <div class="huge_block" id="reduced-bg" style="background-image:url(assets/front/icons/logo.svg)">
            <div class="content_block-2 aves_padding">
                <div class="flex_box" style="height:342px;">
                    <h1 class="aves_title">WYBIERZ TOYOTĘ <i>YARIS CROSS</i> STWORZONĄ DLA CIEBIE</h1>
                </div>
                <div class="grid-3 gtab-2 gmob-1" style="min-height:737px;">
                    <div class="item_1">
                        <div class="pic" style="background-image:url(assets/front/img/picture-2.jpg)">
                            <div><label>Premiere Edition</label></div>
                        </div>
                        <div class="gold_line"></div>
                        <div class="desc">
                            Wyrazisty design połączony z najwyższym komfortem i zaawansowaną technologią.
                            Ekskluzywna wersja Premiere Edition pozwoli Ci się wyróżnić z tłumu.
                        </div>
                        <div class="list">
                            <line>
                                <span class="dot"></span>
                                <p>18'' felgi aluminiowe z oponami 215/50 R18</p>
                            </line>
                            <line>
                                <span class="dot"></span>
                                <p>Tapicerka skórzana z perforacją</p>
                            </line>
                            <line>
                                <span class="dot"></span>
                                <p>Wyświetlacz projekcyjny na przedniej szybie</p>
                            </line>
                            <line>
                                <span class="dot"></span>
                                <p>(HUD)<br>Elektrycznie unoszone drzwi bagażnika otwierane bezdotykowo</p>
                            </line>
                        </div>
                    </div>
                    <div class="item_1">
                        <div class="pic" style="background-image:url(assets/front/img/picture-3.png)">
                            <div><label>Executive</label></div>
                        </div>
                        <div class="gold_line"></div>
                        <div class="desc">
                            Wyrafinowana i świetnie wyposażona wersja Executive przyciąga uwagę. Przytulna i przemyślana
                            kabina zachwyca prawdziwie miejską finezją.
                        </div>
                        <div class="list">
                            <line>
                                <span class="dot"></span>
                                <p>18'' felgi aluminiowe z oponami 215/50 R18</p>
                            </line>
                            <line>
                                <span class="dot"></span>
                                <p>Tapicerka materiałowa z elementami skóry w kolorze czarnym</p>
                            </line>
                            <line>
                                <span class="dot"></span>
                                <p>Zaawansowany asystent parkowania Toyota Teammate w Pakiecie Smart</p>
                            </line>
                            <line>
                                <span class="dot"></span>
                                <p>Monitor panoramiczny z systemem kamer 360 stopni (Panoramic View Monitor) w Pakiecie
                                    Smart</p>
                            </line>
                        </div>
                    </div>
                    <div class="item_1">
                        <div class="pic" style="background-image:url(assets/front/img/picture-4.jpg)">
                            <div><label>Adventure</label></div>
                        </div>
                        <div class="gold_line"></div>
                        <div class="desc">
                            Przygotowana na każdą okoliczność wersja Adventure została zaprojektowana dla użytkowników
                            prowadzących aktywny tryb życia. Wnętrze inspirowane kolorami natury zachęca do wypraw w
                            teren.
                        </div>
                        <div class="list">
                            <line>
                                <span class="dot"></span>
                                <p>18'' felgi aluminiowe z oponami 215/50 R18</p>
                            </line>
                            <line>
                                <span class="dot"></span>
                                <p>Tapicerka materiałowa z elementami skóry w kolorze czarnym i złotymi przeszyciami</p>
                            </line>
                            <line>
                                <span class="dot"></span>
                                <p>Osłona przedniego i tylnego zderzaka</p>
                            </line>
                            <line>
                                <span class="dot"></span>
                                <p>Relingi dachowe</p>
                            </line>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="huge_block" style="background-image:url(assets/front/img/picture-8.jpg)">
            <div class="shadow_block aves_padding" id="bc-special">

                <div class="flex_box" style="height:315px;">
                    <h1 class="aves_title">SAMOCHÓD, NA KTÓRY <i>WARTO CZEKAĆ</i></h1>
                </div>
                <div class="flex_box odd" style="min-height:419px;">
                    <div class="flex_box flex_50">
                        <div class="listing_pic" style="background-image:url(assets/front/img/a2-full.png);"></div>
                    </div>
                    <div class="flex_box flex_50">
                        <div class="listing_content">
                            <h1>SAMOCHÓD, NA KTÓRY <i>WARTO CZEKAĆ</i></h1>
                            <desc>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus pretium iaculis.
                                Aliquam auctor vehicula metus ac placerat. Duis et sapien diam. Cras condimentum dapibus
                                quam nec tristique. Aenean vel imperdiet felis. Sed vitae eros in ipsum gravida
                                malesuada.
                                Nulla blandit justo sit amet urna dignissim eleifend. Pellentesque porttitor risus
                                iaculis
                                orci dapibus, vitae tincidunt justo laoreet. Ut volutpat interdum egestas. Fusce ex
                                erat,
                                porta in neque id, consectetur convallis eros. Donec sit amet dolor augue. Suspendisse
                                lectus lectus, faucibus ut facilisis in, ultricies ut mauris dui.
                            </desc>
                        </div>
                    </div>
                </div>
                <div class="flex_box even" style="min-height:419px;">
                    <div class="flex_box flex_50">
                        <div class="listing_content">
                            <h1>SAMOCHÓD, NA KTÓRY <i>WARTO CZEKAĆ</i></h1>
                            <desc>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus pretium iaculis.
                                Aliquam auctor vehicula metus ac placerat. Duis et sapien diam. Cras condimentum dapibus
                                quam nec tristique. Aenean vel imperdiet felis. Sed vitae eros in ipsum gravida
                                malesuada.
                                Nulla blandit justo sit amet urna dignissim eleifend. Pellentesque porttitor risus
                                iaculis
                                orci dapibus, vitae tincidunt justo laoreet. Ut volutpat interdum egestas. Fusce ex
                                erat,
                                porta in neque id, consectetur convallis eros. Donec sit amet dolor augue. Suspendisse
                                lectus lectus, faucibus ut facilisis in, ultricies ut mauris dui.
                            </desc>
                        </div>
                    </div>
                    <div class="flex_box flex_mob_e flex_50">
                        <div class="listing_pic" style="background-image:url(assets/front/img/a1-full.png);"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white_block aves_padding">
            <div class="flex_box odd" style="min-height:419px;">
                <div class="flex_box flex_50">
                    <div class="listing_pic" style="background-image:url(assets/front/img/a2-full.png);"></div>
                </div>
                <div class="flex_box flex_50">
                    <div class="listing_content inv_text">
                        <h1>SAMOCHÓD, NA KTÓRY <i>WARTO CZEKAĆ</i></h1>
                        <desc>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus pretium iaculis.
                            Aliquam auctor vehicula metus ac placerat. Duis et sapien diam. Cras condimentum dapibus
                            quam nec tristique. Aenean vel imperdiet felis. Sed vitae eros in ipsum gravida
                            malesuada.
                            Nulla blandit justo sit amet urna dignissim eleifend. Pellentesque porttitor risus
                            iaculis
                            orci dapibus, vitae tincidunt justo laoreet. Ut volutpat interdum egestas. Fusce ex
                            erat,
                            porta in neque id, consectetur convallis eros. Donec sit amet dolor augue. Suspendisse
                            lectus lectus, faucibus ut facilisis in, ultricies ut mauris dui.
                        </desc>
                    </div>
                </div>
            </div>
            <div class="flex_box even" style="min-height:419px;">
                <div class="flex_box flex_50">
                    <div class="listing_content">
                        <h1>SAMOCHÓD, NA KTÓRY <i>WARTO CZEKAĆ</i></h1>
                        <desc>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus pretium iaculis.
                            Aliquam auctor vehicula metus ac placerat. Duis et sapien diam. Cras condimentum dapibus
                            quam nec tristique. Aenean vel imperdiet felis. Sed vitae eros in ipsum gravida
                            malesuada.
                            Nulla blandit justo sit amet urna dignissim eleifend. Pellentesque porttitor risus
                            iaculis
                            orci dapibus, vitae tincidunt justo laoreet. Ut volutpat interdum egestas. Fusce ex
                            erat,
                            porta in neque id, consectetur convallis eros. Donec sit amet dolor augue. Suspendisse
                            lectus lectus, faucibus ut facilisis in, ultricies ut mauris dui.
                        </desc>
                    </div>
                </div>
                <div class="flex_box flex_mob_e flex_50">
                    <div class="listing_pic" style="background-image:url(assets/front/img/a1-full.png);"></div>
                </div>
            </div>

        </div>

        <div class="medium_block" style="background-image:url(assets/front/img/picture-5.jpg);">
            <div class="shadow_block aves_padding">
                <div class="flex_box" style="height:214px;">
                    <h1 class="aves_title">REZERWACJA ONLINE W <i>CZTERECH KROKACH</i></h1>
                </div>
                <div class="grid-4 gtab-2 gmob-1" id="extra-pad">
                    <div class="item_2">
                        <div class="icon_block">
                            <img src="assets/front/icons/ast.svg">
                        </div>
                        <div class="content_block">
                            <h1>REZERWACJA ONLINE W TRZECH KROKACH</h1>
                            <div class="gold_line"></div>
                            <desc>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper augue
                                convallis, imperdiet diam id, commodo lorem. Sed quis fringilla leo. Sed malesuada, leo
                                vitae rutrum eleifend, elit ex.
                            </desc>
                        </div>
                    </div>
                    <div class="item_2">
                        <div class="icon_block">
                            <img src="assets/front/icons/ast.svg">
                        </div>
                        <div class="content_block">
                            <h1>REZERWACJA ONLINE W TRZECH KROKACH</h1>
                            <div class="gold_line"></div>
                            <desc>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper augue
                                convallis, imperdiet diam id, commodo lorem. Sed quis fringilla leo. Sed malesuada, leo
                                vitae rutrum eleifend, elit ex.
                            </desc>
                        </div>
                    </div>
                    <div class="item_2">
                        <div class="icon_block">
                            <img src="assets/front/icons/ast.svg">
                        </div>
                        <div class="content_block">
                            <h1>REZERWACJA ONLINE W TRZECH KROKACH</h1>
                            <div class="gold_line"></div>
                            <desc>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper augue
                                convallis, imperdiet diam id, commodo lorem. Sed quis fringilla leo. Sed malesuada, leo
                                vitae rutrum eleifend, elit ex.
                            </desc>
                        </div>
                    </div>
                    <div class="item_2">
                        <div class="icon_block">
                            <img src="assets/front/icons/ast.svg">
                        </div>
                        <div class="content_block">
                            <h1>REZERWACJA ONLINE W TRZECH KROKACH</h1>
                            <div class="gold_line"></div>
                            <desc>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper augue
                                convallis, imperdiet diam id, commodo lorem. Sed quis fringilla leo. Sed malesuada, leo
                                vitae rutrum eleifend, elit ex.
                            </desc>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="huge_block" style="background-image:url(assets/front/img/picture-8.jpg)">
            <div class="up_shadow aves_padding">
                <div class="flex_box" style="height:214px;">
                    <h1 class="aves_title"><i>KONTAKT</i></h1>
                </div>
                <div class="flex_box flex_mob_e" style="height:536px;">
                    <div class="contact_form">
                        <form method="POST" action="mailer/thankyou.php" id="contact-form">
                            <div class="block">
                                <h1>MASZ PYTANIA? SKONTAKTUJ SIĘ Z NAMI POPRZEZ FORMULARZ KONTAKTOWY</h1>
                                <input type="email" id="email" name="email" placeholder="ADRES E-MAIL" required>
                                <input type="text" name="tel" placeholder="NR TELEFONU" required>
                                <input type="text" name="subject" placeholder="WYBIERZ TEMAT WIADOMOŚCI" required>
                                <div class="checkbox_space">
                                    <input type="checkbox" class="form_check" name="rodo1" id="rodo1" required>
                                    <p>Akceptuję <a href="assets/Aves Polityka.pdf" target="blank">regulamin</a></p>
                                </div>
                            </div>
                            <div class="block">
                                <textarea required class="form_textarea" rows="7" placeholder="TREŚĆ WIADOMOŚCI" name="message"></textarea>
                                <div class="btn_flex-2"><button type="submit" value="Submit" class="btn_aves-inv">zapisz się</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="flex_box flex_c">
            <div class="car_pop" style="background-image:url(assets/front/img/alpha-car.png);"></div>
        </div>
    </footer>
    <script type="text/javascript" src="assets/front/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/front/js/lc_lightbox.lite.js"></script>
    <script type="text/javascript" src="assets/front/js/lightbox.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?= $captcha; ?>"></script>

    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('<?= $captcha; ?>', {
                action: 'homepage'
            }).then(function(token) {

            });
        });
    </script>
    <script type="text/javascript">
        $('#contact-form').submit(function(event) {
            event.preventDefault();
            var email = $('#email').val();
            grecaptcha.ready(function() {
                grecaptcha.execute('<?= $captcha; ?>', {
                    action: 'mailer/thankyou'
                }).then(function(token) {
                    $('#contact-form').prepend('<input type="hidden" name="token" value="' + token + '">');
                    $('#contact-form').unbind('submit').submit();
                });;
            });
        });
    </script>

    <script>
        var navbar_on = false;
        var lazyLoadInstance = new LazyLoad({
            elements_selector: ".lazy"
        });

        function hide_bar() {
            document.getElementById('fixbar').style.display = 'none';
        }

        window.onload = function() {
            //put here all library functions
        };
    </script>
</body>

</html>