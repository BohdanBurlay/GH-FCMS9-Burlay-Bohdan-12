<?php
$data = require_once('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container my-menu-logo-div">
            <a class="navbar-brand" href="#">
                <?php
                foreach ($data['siteLogo'] as $value) {
                    echo '<img src=" ' . $value['siteLogoSrc'] . '" alt=" ' . $value['siteLogoAlt'] . ' " class="' . $value['siteLogoClass'] . '">';
                }
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon my-menu-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav my-menu-list ml-auto flex-md-row flex-sm-row flex-lg-row flex-lg-row flex-xl-row flex-column justify-content-sm-center justify-content-md-center">

                    <?php
                    foreach ($data['mainMenu'] as $menuItem) {
                        ?>
                        <?php
                        if ($menuItem['img']) {
                            echo '<li class="' . $menuItem['liClass'] . '"> <a class="' . $menuItem['aClass'] . '"> <img src="' . $menuItem['imgSrc'] . '" alt="' . $menuItem['imgAlt'] . '" class="' . $menuItem['imgClass'] . '"></a> </li>'; //'<img src=" ' .$value['siteLogoSrc']. '" alt=" '.$value['siteLogoAlt'].' " class="' .$value['siteLogoClass']. '">';
                        }
                        echo '<li class="' . $menuItem['liClass'] . '"> <a class="' . $menuItem['aClass'] . '">  ' . $menuItem['title'] . ' </a> </li>';

                        ?>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide my-slider" data-ride="carousel">
        <ol class="carousel-indicators my-ind">
            <?php
            foreach ($data['currentMainSlide'] as $item) {
                ?>
                <li data-target="<?php echo $item['dataTarget'] ?>"
                    data-slide-to="<?php echo $item['dataSlide'] ?>"
                    class="<?php
                    if ($item['isActive']) {
                        echo 'active';
                    }
                    ?>"></li>
                <?php
            }
            ?>
        </ol>
        <div class="carousel-inner my-carousel">
            <?php
            foreach ($data['mainSlider'] as $item) {
                ?>
                <div class="<?php
                echo $item['slideClass'];
                if ($item['isActive']) {
                    echo ' active';
                }
                ?>">
                    <div class="<?php echo $item['slideClassWrap'] ?>">
                        <h1 class="<?php echo $item['titleClass'] ?>">
                            <span class="<?php echo $item['spanClass'] ?>"><?php echo $item['main'] ?></span>
                            <?php echo $item['second'] ?></h1>
                        <p class="<?php echo $item['pClass'] ?>"><?php echo $item['description'] ?></p>
                        <a href="<?php echo $item['link']['url'] ?>" class="<?php echo $item['link']['linkClass'] ?>">
                            <?php echo $item['link']['text'] ?></a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <a class="carousel-control-prev my-carousel-control" href="#carouselExampleIndicators" role="button"
           data-slide="prev">
            <span class="carousel-control-prev-icon my-icon-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next my-carousel-control" href="#carouselExampleIndicators" role="button"
           data-slide="next">
            <span class="carousel-control-next-icon my-icon-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
<main>
    <section class="wrapper-div">
        <?php
        foreach ($data['sectionText'] as $sectionT) {
            ?>
            <h2><?php echo $sectionT['sectionTitle'] ?></h2>
            <p><?php echo $sectionT['sectionP'] ?></p>
            <?php
        }
        ?>
        <div class="container-fluid">
            <div class="row wrap-row">

                <?php
                foreach ($data['sectionContent'] as $sectionItem) {
                    ?>
                    <div class="<?php echo $sectionItem['divClass'] ?>">
                        <div class="<?php echo $sectionItem['imgDiv']['class'] ?>">
                            <img src="<?php echo $sectionItem['imgDiv']['imgSrc'] ?>"
                                 alt="<?php echo $sectionItem['imgDiv']['alt'] ?>"
                                 class="<?php echo $sectionItem['imgDiv']['imgClass'] ?>">
                        </div>
                        <h3><?php echo $sectionItem['sectionElementsTitle'] ?></h3>
                        <p><?php echo $sectionItem['sectionElementsP'] ?></p>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
        <?php
        foreach ($data['learnMore'] as $datum) {
            ?>
            <a href="<?php echo $datum['href'] ?>"
               class="<?php echo $datum['class'] ?>"><?php echo $datum['text'] ?></a>
            <?php
        }
        ?>
    </section>
    <div class="wrap-main-div">
        <?php
        foreach ($data['articleContent'] as $articleItem) {
            ?>
            <article class="<?php echo $articleItem['class'] ?>">
                <h3><?php echo $articleItem['mainText'] ?></h3>
                <p><?php echo $articleItem['secondText'] ?></p>

                <?php
                foreach ($data['learnMore'] as $datum) {
                    ?>
                    <a href="<?php echo $datum['href'] ?>"
                       class="<?php echo $datum['class'] ?>"><?php echo $datum['text'] ?></a>
                    <?php
                }
                ?>
            </article>
            <?php
        }
        ?>

    </div>
    <div class="wrap-main-div chap-div">
        <?php
        foreach ($data['articleData'] as $articleItem) {
            ?>
            <article class="<?php echo $articleItem['class'] ?>">
                <h3><?php echo $articleItem['mainText'] ?></h3>
                <p><?php echo $articleItem['secondText'] ?></p>

                <?php
                foreach ($data['learnMore'] as $datum) {
                    ?>
                    <a href="<?php echo $datum['href'] ?>"
                       class="<?php echo $datum['class'] ?>"><?php echo $datum['text'] ?></a>
                    <?php
                }
                ?>
            </article>
            <?php
        }
        ?>
    </div>

    <div class="slider-part">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators my-slider-ind">
                <?php
                foreach ($data['currentWrapSlide'] as $item) {
                    ?>
                    <li data-target="<?php echo $item['dataTarget'] ?>"
                        data-slide-to="<?php echo $item['dataSlide'] ?>"
                        class="<?php
                        if ($item['isActive']) {
                            echo 'active';
                        }
                        ?>"></li>
                    <?php
                }
                ?>
            </ol>

            <div class="carousel-inner my-carusel">
                <?php
                foreach ($data['secondSlider'] as $datum) {
                    ?>
                    <div class="<?php echo $datum['slideClass'] ?><?php
                    if ($datum['isActive']) {
                        echo ' active';
                    }
                    ?>">
                        <img src="<?php echo $datum['slideImgSrc'] ?>" alt="<?php echo $datum['slideImgAlt'] ?>"
                             class="<?php echo $datum['slideImgClass'] ?>">
                        <h3 class="<?php echo $datum['titleClass'] ?>"><span class="<?php echo $datum['spanClass'] ?>">
                                <?php echo $datum['spanText'] ?> </span> <?php echo $datum['mainText'] ?></h3>
                        <p class=" <?php echo $datum['pClass'] ?>">
                            <?php echo $datum['pText'] ?>
                            <span class="<?php echo $datum['pSpanClass'] ?>">
                                <?php echo $datum['pSpanText'] ?></span> <?php echo $datum['pMainText'] ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
            <a class="carousel-control-prev arrows arrows-left" href="#carouselExampleIndicators" role="button"
               data-slide="prev">
                <span class="carousel-control-prev-icon my-arrow-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next arrows arrows-right" href="#carouselExampleIndicators" role="button"
               data-slide="next">
                <span class="carousel-control-next-icon my-arrow-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <section class="my-srv-block">
        <?php
        foreach ($data['sectionInform'] as $datum) {
            ?>
            <h2><?php echo $datum['sectionTitle'] ?></h2>
            <p><?php echo $datum['sectionP'] ?></p>
            <?php
        }
        ?>
        <div class="container main-conteiner">
            <div class="row my-row">
                <?php
                foreach ($data['contentInf'] as $datum) {
                    ?>
                    <div class="<?php echo $datum['wrapClass'] ?>">
                        <div class="<?php echo $datum['imgDiv'] ?>">
                            <img src="<?php echo $datum['imgSrcLink'] ?>" alt="<?php echo $datum['ingAlt'] ?>">
                        </div>
                        <article class="<?php echo $datum['contPart'] ?>">
                            <h3><?php echo $datum['contentH'] ?></h3>
                            <p><?php echo $datum['contentP'] ?></p>
                        </article>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="meeting-section">
        <?php
        foreach ($data['sectionWordsContent'] as $sectionWordItem) {
            ?>
            <h2><?php echo $sectionWordItem['sectionTitle'] ?></h2>
            <p><?php echo $sectionWordItem['sectionText'] ?></p>
            <?php
        }
        ?>

        <!--<h2>Meet our team
        </h2>
        <p>Nam varius accumsan elementum. Aliquam fermentum eros in suscipit scelerisque.</p>-->
        <div class="container-fluid gallery">
            <div class="row no-gutters">
                <?php
                foreach ($data['galeryRow1'] as $datum) {
                    ?>
                    <div class="<?php echo $datum['mainDivClass'] ?>"><img src="<?php echo $datum['imgSrc'] ?>"
                                                                           alt="<?php echo $datum['imgAlt'] ?>">
                        <div class="<?php echo $datum['overBlock'] ?>"><h2>
                                <?php echo $datum['name'] ?></h2></div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="row no-gutters">
                <?php
                foreach ($data['galeryRow2'] as $datum) {
                    ?>
                    <div class="<?php echo $datum['mainDivClass'] ?>"><img src="<?php echo $datum['imgSrc'] ?>"
                                                                           alt="<?php echo $datum['imgAlt'] ?>">
                        <div class="<?php echo $datum['overBlock'] ?>"><h2>
                                <?php echo $datum['name'] ?></h2></div>
                    </div>
                    <?php
                }
                ?>
            </div>
    </section>
    <section class="cary-vas-div">
        <?php
        foreach ($data['sectionWords'] as $sectionWord) {
            ?>
            <h2><?php echo $sectionWord['sectionTitle'] ?></h2>
            <p><?php echo $sectionWord['sectionP'] ?></p>
            <?php
        }
        ?>
        <div class="container price-row d-flex">
            <?php
            foreach ($data['card'] as $datum) {
                ?>
                <div class="<?php echo $datum['classDiv'] ?>">
                    <h3><?php echo $datum['price'] ?></h3>
                    <p class="<?php echo $datum['pClass'] ?>"><?php echo $datum['pContent'] ?></p>
                    <p class="<?php echo $datum['secondP'] ?>"><?php echo $datum['secondPContent'] ?></p>
                    <button type="<?php echo $datum['type'] ?>"
                            class="<?php echo $datum['buttonClass'] ?>"><?php echo $datum['buttonContent'] ?>
                        <img src="<?php echo $datum['imgSrc'] ?>" alt="<?php echo $datum['imgAlt'] ?>"
                             class="<?php echo $datum['imgClass'] ?>"></button>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
    <div class="container-fluid my-map">
        <div class="row">
            <?php
            foreach ($data['descriptionDiv'] as $datum) {
                ?>
                <div class="<?php echo $datum['divClass'] ?>">
                    <article class="<?php echo $datum['articleClass'] ?>">
                        <h3><?php echo $datum['articleHContent'] ?></h3>
                        <p><?php echo $datum['articlePContent'] ?></p>
                        <?php
                        foreach ($data['learnMore'] as $datum) {
                            ?>
                            <a href="<?php echo $datum['href'] ?>"
                               class="<?php echo $datum['class'] ?>"><?php echo $datum['text'] ?></a>
                            <?php
                        }
                        ?>
                    </article>
                </div>
                <?php
            }
            ?>
            <?php
            foreach ($data['imgDivContent'] as $datum) {
                ?>
                <div class="<?php echo $datum['divClassName'] ?>">
                    <img src="<?php echo $datum['imgSrc'] ?>" alt="<?php echo $datum['imgAlt'] ?>">
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <section class="perter-block">
        <?php
        foreach ($data['wrapInformationContent'] as $datum) {
            ?>

            <h2 class="<?php echo $datum['titleClass'] ?>"><?php echo $datum['titleMainContent'] ?>
                <span class="<?php echo $datum['spanClass'] ?>"><?php echo $datum['spanContent'] ?></span>
                <?php echo $datum['titleMainContentAtter'] ?></h2>
            <a href="<?php echo $datum['linkHref'] ?>"
               class="<?php echo $datum['linkClass'] ?>"><?php echo $datum['linkContent'] ?></a>
            <?php
        }
        ?>
    </section>
</main>
<footer>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container footer-navbar">

            <a class="navbar-brand d-flex nav-items" href="#">
                <?php
                foreach ($data['navFooter'] as $navItem) {
                    ?>
                    <img src="<?php echo $navItem['imgSrc'] ?>" alt="<?php echo $navItem['imgAlt'] ?>"
                         class="<?php echo $navItem['imgClass'] ?>">
                    <h2 class="<?php echo $navItem['titleContClass'] ?>"><?php echo $navItem['titleWords'] ?></h2>
                    <?php
                }
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon my-menu-footer-icon footer-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav my-menu-footer-list flex-column ml-auto flex-md-row flex-sm-row flex-row justify-content-between">
                    <?php
                    foreach ($data['navFooterLi'] as $datum) {
                        ?>
                        <li class="<?php echo $datum['liClass'] ?>">
                            <a class="<?php echo $datum['menuItemLinkClass'] ?>"
                               href="<?php echo $datum['menuItemHref'] ?>">
                                <?php echo $datum['menuItemContent'] ?> </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</footer>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>