<?php
$ini = parse_ini_file('./config/config.ini');
if (!$ini) {
    echo 'Не удалось загрузить конфигурацию';
    die();
}
?>
<!DOCTYPE html>
<head>

	<meta charset="utf-8">

	<title><?php print $ini['meta_title']; ?></title>
    <meta name="description" content="<?php print $ini['meta_description']; ?>"/>
    <meta name="keywords" content="<?php print $ini['meta_keywords']; ?>"/>

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="libs/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="libs/animate/animate.css">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Счётчик обратный -->
    <link rel="stylesheet" href="libs/countdown/jquery.countdown.css"/>

    <!-- Бесконечный скроллинг -->
    <link rel="stylesheet" href="libs/liMarquee/liMarquee.css"/>
	
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/media.css">

</head>

<body>

<!-- Фиксированный TOP  -->
    <div class="top_line">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/logo.png" alt="logo"/>
                    <p>
                        <span class="mobile_ver_hidden">
                            <span class="mobile_gor_hidden"><a href="tel:<?php print $ini['tel_1_call']; ?>"><?php print $ini['tel_1_visible']; ?></a></span>
                            <span><a href="tel:<?php print $ini['tel_2_call']; ?>"><?php print $ini['tel_2_visible']; ?></a></span>
                            <span><a href="tel:<?php print $ini['tel_3_call']; ?>"><?php print $ini['tel_3_visible']; ?></a></span>
                        </span>

                        <span class="mobile_ver_visible">
                            <span><a href="tel:+375291820116">Vel 182-01-16</a></span>
                            <span><a href="tel:+375295651204">MTS 565-12-04</a></span>
                        </span>

                        <a href="#order_form_floor" class="page-scroll">Заказать звонок</a>
                        <a href="Price-GGS-kupiles-by.xlsx" download>Скачать прайс</a>

                    </p>
                </div>
            </div>
        </div>
    </div>
<!-- END Фиксированный TOP  -->

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Пиломатериалы собственного производства</h1>
                    <div class="under_line"></div>
                </div>
            </div>
            <div class="row">

                <!-- Форма заказа  -->
                <div class="col-md-5">
                    <div class="order_form">
                        <form id="order_form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Ваше имя *" required="">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="tel" placeholder="Ваш телефон *" required="">
                            </div>
                            <div id="success"></div>
                            <button type="submit" class="btn">заказать</button>
                        </form>
                    </div>
                </div>
                <!-- END Форма заказа  -->

                <!-- Блок Акция  -->
                <div class="col-md-7">
                    <div class="stock">
                        <h2>Внимание! Акция!</h2>
                        <p><?php print $ini['action_up']; ?></p>
                        <p><?php print $ini['action_under']; ?></p>
                        <div id="countdown" class="countdownHolder"></div>
                        <p id="note"></p>
                    </div>
                </div>
                <!-- END Блок Акция  -->

            </div>
        </div>
    </header>

    <!-- Секция " Продукция "  -->
    <section id="production">
        <div class="container">
            <div class="row">
                <h2>Наша продукция</h2>
                <div class="under_line black"></div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="production_block">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="img/production/01.jpeg" alt="Обрезная доска"/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h3><?php print $ini['title_1']; ?></h3>
                                <p><?php print $ini['inner_1']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="production_block">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="img/production/02.jpg" alt="Обрезная доска"/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h3><?php print $ini['title_2']; ?></h3>
                                <p><?php print $ini['inner_2']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="production_block">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="img/production/03.jpg" alt="Обрезная доска"/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h3><?php print $ini['title_3']; ?></h3>
                                <p><?php print $ini['inner_3']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="production_block">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="img/production/04.jpg" alt="Обрезная доска"/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h3><?php print $ini['title_4']; ?></h3>
                                <p><?php print $ini['inner_4']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="production_block">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="img/production/05.png" alt="Обрезная доска"/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h3><?php print $ini['title_5']; ?></h3>
                                <p><?php print $ini['inner_5']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="production_block">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="img/production/06.jpg" alt="Обрезная доска"/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h3><?php print $ini['title_6']; ?></h3>
                                <p><?php print $ini['inner_6']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="production_block">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="img/production/07.jpg" alt="Обрезная доска"/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h3><?php print $ini['title_7']; ?></h3>
                                <p><?php print $ini['inner_7']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="production_block">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="img/production/08.jpg" alt="Обрезная доска"/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h3><?php print $ini['title_8']; ?></h3>
                                <p><?php print $ini['inner_8']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="production_block">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="img/production/09.jpg" alt="Обрезная доска"/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h3><?php print $ini['title_9']; ?></h3>
                                <p><?php print $ini['inner_9']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="production_block">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <img src="img/production/010.jpg" alt="Обрезная доска"/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h3><?php print $ini['title_10']; ?></h3>
                                <p><?php print $ini['inner_10']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END Секция " Продукция "  -->

    <!-- Секция " Можно Построить "  -->
    <section id="build">
        <div class="container">
            <div class="row">
                <h2>Можно построить</h2>
                <div class="under_line black"></div>
                <div class="col-md-12">
                    <div class="build_block">
                        <div class="row">
                                        <!-- БЛОК - 1 -  -->
                            <div class="col-md-4 col-sm-12">
                                <div class="block_name">
                                    <img src="img/production/bania.jpg" alt="#"/>
                                    <span>БАНЯ</span>
                                    <p class="mobile_build_hidden"><?php print $ini['build_about_1']; ?></p>
                                </div>
                            </div>
                                        <!-- БЛОК - 2 -  -->
                            <div class="col-md-4 col-sm-12">
                                <div class="block_name">
                                    <img src="img/production/besedka.jpg" alt="#"/>
                                    <span>БЕСЕДКИ</span>
                                    <p class="mobile_build_hidden"><?php print $ini['build_about_2']; ?></p>
                                </div>
                            </div>
                                        <!-- БЛОК - 3 -  -->
                            <div class="col-md-4 col-sm-12">
                                <div class="block_name">
                                    <img src="img/production/dom.jpg" alt="#"/>
                                    <span>Садовые Дома</span>
                                    <p class="mobile_build_hidden"><?php print $ini['build_about_3']; ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Секция " Можно Построить "  -->

    <!-- Секция " Горящие предложения "  -->
    <section id="hot">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Горящие предложения</h2>
                    <div class="under_line black"></div>
                </div>
            </div>

            <!-- HOT - 1 -  -->
            <div class="hot">
                <div class="row">
                    <div class="col-md-6 mid-resize">
                        <img src="img/production/brusok_hot.jpg" alt="#"/>
                    </div>
                    <div class="col-md-6">
                        <h3><?php print $ini['hot_title_1']; ?></h3>
                        <p><?php print $ini['hot_about_1']; ?></p>
                        <span>Цена :  <strong><?php print $ini['hot_cash_1']; ?></strong></span>
                        <div class="hot_btn">
                            <a href="#order_form_floor" class="btn page-scroll">Заказать</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- HOT - 2 -  -->
            <div class="hot">
                <div class="row">
                    <div class="col-md-6 mid-resize">
                        <img src="img/production/02.jpg" alt="#"/>
                    </div>
                    <div class="col-md-6">
                        <h3><?php print $ini['hot_title_2']; ?></h3>
                        <p><?php print $ini['hot_about_2']; ?></p>
                        <span>Цена :  <strong><?php print $ini['hot_cash_2']; ?></strong></span>
                        <div class="hot_btn">
                            <a href="#order_form_floor" class="btn page-scroll">Заказать</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- HOT - 3 -  -->
            <div class="hot">
                <div class="row">
                    <div class="col-md-6 mid-resize">
                        <img src="img/production/06.jpg" alt="#"/>
                    </div>
                    <div class="col-md-6">
                        <h3><?php print $ini['hot_title_3']; ?></h3>
                        <p><?php print $ini['hot_about_3']; ?></p>
                        <span>Цена :  <strong><?php print $ini['hot_cash_3']; ?></strong></span>
                        <div class="hot_btn">
                            <a href="#order_form_floor" class="btn page-scroll">Заказать</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END Секция " Горящие предложения "  -->

    <!-- Секция " Преимущества компании "  -->
    <section id="benefit">
        <div class="container">
            <div class="row">
                <h2>Преимущества компании</h2>
                <div class="under_line black"></div>
            </div>
            <div class="row">
                <div class="col-md-6"><p><i class="fa fa-truck"></i><span>Собственное производство</span></p></div>
                <div class="col-md-6"><p><i class="fa fa-thumbs-up"></i><span>Пиломатериалы всегда в наличии</span></p></div>
                <div class="col-md-6"><p><i class="fa fa-tree"></i><span>Качественный лес</span></p></div>
                <div class="col-md-6"><p><i class="fa fa-desktop"></i><span>Возможность индивидуального заказа (пилит под заказ)</span></p></div>
            </div>
        </div>
    </section>
    <!-- END Секция " Преимущества компании "  -->

    <!-- Секция " Преимущества компании "  -->
    <section id="order">
        <div class="container">
            <div class="row">
                <h2>Как заказать</h2>
                <div class="under_line black"></div>
            </div>
            <div class="row">
                <div class="order_block_main">
                    <div class="col-md-12">
                        <div class="order_block"><i class="fa fa-mobile"></i><br/>Звонок</div>
                        <div class="order_block"><i class="fa fa-long-arrow-right"></i></div>
                        <div class="order_block"><i class="fa fa-money"></i><br/>Оплата</div>
                        <div class="order_block"><i class="fa fa-long-arrow-right"></i></div>
                        <div class="order_block"><i class="fa fa-car"></i><br/>Доставка или самовывоз</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Секция " Преимущества компании "  -->

    <!-- Отзывы клиентов Section -->
    <section id="recall">
        <div class="container">
            <div class="row">
                <h2>Отзывы клиентов</h2>
                <div class="under_line black"></div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="comments">
                        <i class="fa fa-quote-left fa-2x"></i>
                        <?php print $ini['comment_1']; ?> <!-- - Клиент №1 - -->
                    </div>
                    <div class="comments">
                        <i class="fa fa-quote-left fa-2x"></i>
                        <?php print $ini['comment_2']; ?><!-- - Клиент №2 - -->
                    </div>
                    <div class="comments">
                        <i class="fa fa-quote-left fa-2x"></i>
                        <?php print $ini['comment_3']; ?><!-- - Клиент №3 - -->
                    </div>
                </div>

                <div class="col-md-6 mobile_comment_hidden">
                    <div class="comments">
                        <i class="fa fa-quote-left fa-2x"></i>
                        <?php print $ini['comment_4']; ?><!-- - Клиент №4 - -->
                    </div>
                    <div class="comments">
                        <i class="fa fa-quote-left fa-2x"></i>
                        <?php print $ini['comment_5']; ?><!-- - Клиент №5 - -->
                    </div>
                    <div class="comments">
                        <i class="fa fa-quote-left fa-2x"></i>
                        <?php print $ini['comment_6']; ?><!-- - Клиент №6 - -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--END Отзывы клиентов Section -->

    <!-- Секция " Скроллинг клиентов "  -->
    <section id="scrolling">
        <div class="container-fluid">
            <div class="row">
                <h2>Наши клиенты</h2>
                <div class="under_line black"></div>
            </div>
        </div>
        <div class="our_clients_main">
            <div class="str3 str_wrap">
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/1c0ae2205709722b62e843abc0471a55_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/01f1a05053c6242fcfa23075e5b963c1_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/6f43b5263fbba79c5962514b85d34738_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/8b6e33345ac8d5ffd9cf0d107a7d9e9d_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/9b2c4b44fb86522964124ed80d03c5e8_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/1c0ae2205709722b62e843abc0471a55_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/01f1a05053c6242fcfa23075e5b963c1_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/6f43b5263fbba79c5962514b85d34738_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/8b6e33345ac8d5ffd9cf0d107a7d9e9d_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/9b2c4b44fb86522964124ed80d03c5e8_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/1c0ae2205709722b62e843abc0471a55_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/01f1a05053c6242fcfa23075e5b963c1_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/6f43b5263fbba79c5962514b85d34738_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/8b6e33345ac8d5ffd9cf0d107a7d9e9d_S.jpg"></a>
                <a href="#"><img src="http://masscode.ru/media/k2/items/cache/9b2c4b44fb86522964124ed80d03c5e8_S.jpg"></a>
            </div>
        </div>
    </section>
    <!-- END Секция " Преимущества компании "  -->

    <!-- Карта яндекса "  -->
    <section>
            <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=71AIJnXjHvkd1gN8vw7E7iHLW4YopGML&amp;&height=450"></script>
    </section>
    <!-- End Карта яндекса "  -->

    <!-- Секция " Контактные данные "  -->
    <section id="contacts">
        <div class="container">
            <div class="row">
                <h2>Контактные данные</h2>
                <div class="under_line black"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <address>
                    <strong>ООО "ГлобалГарантСтрой"</strong><br>
                    223053, Республика Беларусь,<br>
                    Минская область, Минский район, д. Боровляны,<br>
                    ул. 40 лет Победы, д. 27/4, офис 505
                </address>
                <h4>Телефон/факс:</h4>
                <a href="tel:<?php print $ini['tel_1_call']; ?>"><?php print $ini['tel_1_visible']; ?></a>
                <h4>Мобильные:</h4>
                <a href="tel:<?php print $ini['tel_2_call']; ?>"><?php print $ini['tel_2_visible']; ?> (Velcom)</a><br>
                <a href="tel:<?php print $ini['tel_2_call']; ?>"><?php print $ini['tel_3_visible']; ?> (МТС)</a>
                <h4>Электронная почта:</h4>
                <a href="mailto:<?php print $ini['mail']; ?>"><?php print $ini['mail']; ?></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form id="order_form_floor">
                        <div class="form-group">
                            <input type="text" class="form-control floor_control" name="name" placeholder="Ваше имя *" required="">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control floor_control" name="tel" placeholder="Ваш телефон *" required="">
                        </div>
                        <div id="success_floor"></div>
                        <button type="submit" class="btn">заказать</button>
                    </form>
            </div>
        </div>

    </section>
    <!-- END Секция " Контактные данные "  -->

	<div class="hidden"></div>


    <!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

	<script src="libs/modernizr/modernizr.js"></script>
	<script src="libs/waypoints/waypoints.min.js"></script>
	<script src="libs/animate/animate-css.js"></script>
	<script src="libs/plugins-scroll/plugins-scroll.js"></script>
    <script src="libs/liMarquee/jquery.liMarquee.js"></script>
    <script src="libs/countdown/jquery.countdown.js"></script>
	
	<script src="js/common.js"></script>
	
</body>
</html>