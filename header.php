<?php
if (!isset($_COOKIE['selectedCurrency'])) {
    setcookie('selectedCurrency', 'INR', time() + (86400 * 30), "/"); // 30 days
}
?>

<head>

    <!-- Style sheet files. -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="icon" href="https://images-hg.b-cdn.net/images/logo.svg" alt="hostigate" />
    <link rel="apple-touch-icon" href="https://images-hg.b-cdn.net/images/logo.svg" alt="hostigate" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./fonts/fonts.css" />
    <script src="https://images-hg.b-cdn.net/js/modernizr-2.6.2.min.js"></script>
    <script src="https://images-hg.b-cdn.net/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/b2b7d27ef0.js" crossorigin="anonymous"></script>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '662684129201423');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=662684129201423&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <style>
        body {
            font-family: 'Gotham SSm A', 'Gotham SSm B', Arial, sans-serif !important;
        }

        #usd {
            display: none;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GNKBFYB1F4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-GNKBFYB1F4');
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4929334107088379" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.hg-mob-nav.accordion-toggle').click(function() {
                $(this).next('.accordion-content').slideToggle('slow');
                $(".accordion-content").not($(this).next()).slideUp('slow');
                $('.hg-mob-nav.accordion-toggle').not($(this)).removeClass('active');
                $(this).toggleClass('active');
            });

            if ($(window).width() < 768) {
                elementWidth = $(window).width();
                $(".hg-slide-left").css('right', elementWidth + 100 + '%');

                elementHeight = $(window).height();
                $(".hg-slide-left").css('height', elementHeight + 77);
            }
            $(".hg-hamb").click(function() {
                $('.hg-slide-left').show();
                $('.hg-slide-left').animate({
                    'right': 0
                }, 'slow');
                $(".homepage-products").hide();
            });
            $(".hg-cross-nav").click(function() {
                $('.hg-slide-left').animate({
                    'right': elementWidth + 35
                }, 'slow');
                $(".homepage-products").show();
                $('.hg-info-container').hide();
            });
            $("#hg-mob-last").click(function() {
                $(".hg-slide-left").animate({
                    scrollTop: $(document).height()
                }, 1000);
            });

        });

        //TOGGLING NESTED ul
        $(".drop-down .selected a").click(function() {
            $(".drop-down .options ul").toggle();
        });
        $(".drop-down-two .selected a").click(function() {
            $(".drop-down-two .options ul").toggle();
        });
        $(".drop-down-three .selected a").click(function() {
            $(".drop-down-three .options ul").toggle();
        });
        $(".drop-down-four .selected a").click(function() {
            $(".drop-down-four .options ul").toggle();
        });

        //SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
        $(".drop-down .options ul li a").click(function() {
            var text = $(this).html();
            $(".drop-down .selected a span").html(text);
            $(".drop-down .options ul").hide();
        });
        $(".drop-down-two .options ul li a").click(function() {
            var text = $(this).html();
            $(".drop-down-two .selected a span").html(text);
            $(".drop-down-two .options ul").hide();
        });
        $(".drop-down-three .options ul li a").click(function() {
            var text = $(this).html();
            $(".drop-down-three .selected a span").html(text);
            $(".drop-down-three .options ul").hide();
        });
        $(".drop-down-four .options ul li a").click(function() {
            var text = $(this).html();
            $(".drop-down-four .selected a span").html(text);
            $(".drop-down-four .options ul").hide();
        });
        $(document).ready(function() {
            $("#default_one").click(function() {
                $(this).parent().toggleClass("active");
            })
            $("#select_first li").click(function() {
                var currentele = $(this).html();
                $("#default_one li").html(currentele);
                $(this).parents(".wrapone").removeClass("active");
            });

        });

        $(document).ready(function() {
            $("#default_singapore").click(function() {
                $(this).parent().toggleClass("active");
            })
            $("#select_first_singapore li").click(function() {
                var currentele = $(this).html();
                $("#default_singapore li").html(currentele);
                $(this).parents(".wrapone-singapore").removeClass("active");
            });

        });

        $(document).ready(function() {
            $("#default_two").click(function() {
                $(this).parent().toggleClass("active");
            })

            $("#select_second li").click(function() {
                var currentele = $(this).html();
                $("#default_two li").html(currentele);
                $(this).parents(".wraptwo").removeClass("active");
            })
        });

        $(document).ready(function() {
            $("#default_three").click(function() {
                $(this).parent().toggleClass("active");
            })

            $("#select_third li").click(function() {
                var currentele = $(this).html();
                $("#default_three li").html(currentele);
                $(this).parents(".wrapthree").removeClass("active");
            })
        });

        $(document).ready(function() {
            $("#default_four").click(function() {
                $(this).parent().toggleClass("active");
            })

            $("#select_four li").click(function() {
                var currentele = $(this).html();
                $("#default_four li").html(currentele);
                $(this).parents(".wrapfour").removeClass("active");
            })
        });


        $(document).ready(function() {
            $("#default_singapore_two").click(function() {
                $(this).parent().toggleClass("active");
            })
            $("#select_singapore_second li").click(function() {
                var currentele = $(this).html();
                $("#default_singapore_two li").html(currentele);
                $(this).parents(".wraptwo_singapore").removeClass("active");
            });

        });
        $(document).ready(function() {
            $("#default_three_singapore").click(function() {
                $(this).parent().toggleClass("active");
            })
            $("#select_third_singapore li").click(function() {
                var currentele = $(this).html();
                $("#default_three_singapore li").html(currentele);
                $(this).parents(".wrapthree_singapore").removeClass("active");
            });

        });

        $(document).ready(function() {
            $("#default_four_sinapore").click(function() {
                $(this).parent().toggleClass("active");
            })
            $("#select_four_singapore li").click(function() {
                var currentele = $(this).html();
                $("#default_four_sinapore li").html(currentele);
                $(this).parents(".wrapfour_singapore").removeClass("active");
            });

        });

        $(document).ready(function() {
            $("#default_india_one").click(function() {
                $(this).parent().toggleClass("active");
            })
            $("#select_first_india li").click(function() {
                var currentele = $(this).html();
                $("#default_india_one li").html(currentele);
                $(this).parents(".wrapone_india").removeClass("active");
            });

        });

        $(document).ready(function() {
            $("#default_two_india").click(function() {
                $(this).parent().toggleClass("active");
            })
            $("#select_second_india li").click(function() {
                var currentele = $(this).html();
                $("#default_two_india li").html(currentele);
                $(this).parents(".wraptwo_india").removeClass("active");
            });

        });

        $(document).ready(function() {
            $("#default_three_india").click(function() {
                $(this).parent().toggleClass("active");
            })
            $("#select_third_india li").click(function() {
                var currentele = $(this).html();
                $("#default_three_india li").html(currentele);
                $(this).parents(".wrapthree_india").removeClass("active");
            });

        });

        $(document).ready(function() {
            $("#default_four_india").click(function() {
                $(this).parent().toggleClass("active");
            })
            $("#select_four_india li").click(function() {
                var currentele = $(this).html();
                $("#default_four_india li").html(currentele);
                $(this).parents(".wrapfour_india").removeClass("active");
            });

        });

        $(document).ready(function() {
            $("#default_four_germany").click(function() {
                $(this).parent().toggleClass("active");
            })
            $("#select_four_germany li").click(function() {
                var currentele = $(this).html();
                $("#default_four_germany li").html(currentele);
                $(this).parents(".wrapfour_germany").removeClass("active");
            });

        });





        $(document).ready(function() {
            $('.SubmitButtonfours_india').click(function() {
                var url_value_ind = $('ul#default_four_india li .option p').attr('data-type');
                //alert(url_value_ind);
                window.open("https://" + url_value_ind + "", "_self")
            });


            $('.SubmitButtonthree_india').click(function() {
                var url_value_ind = $('ul#default_three_india li .option p').attr('data-type');
                //alert(url_value_ind);
                window.open("https://" + url_value_ind + "", "_self")
            });


            $('.SubmitButtontwo_india').click(function() {
                var url_value_ind = $('ul#default_two_india li .option p').attr('data-type');
                //alert(url_value_ind);
                window.open("https://" + url_value_ind + "", "_self")
            });

            $('.SubmitButtonone_india').click(function() {
                var url_value_ind = $('ul#default_india_one li .option p').attr('data-type');
                //alert(url_value_ind);
                window.open("https://" + url_value_ind + "", "_self")
            });

            $('.SubmitButtonfour_singapore').click(function() {
                var url_value_ind = $('ul#default_four_sinapore li .option p').attr('data-type');
                //alert(url_value_ind);
                window.open("https://" + url_value_ind + "", "_self")
            });

            $('.SubmitButtonthree_singapore').click(function() {
                var url_value_ind = $('ul#default_three_singapore li .option p').attr('data-type');
                //alert(url_value_ind);
                window.open("https://" + url_value_ind + "", "_self")
            });

            $('.SubmitButtonsingaporetwo').click(function() {
                var url_value_ind = $('ul#default_singapore_two li .option p').attr('data-type');
                //alert(url_value_ind);
                window.open("https://" + url_value_ind + "", "_self")
            });

            $('.SubmitButtonsingapore').click(function() {
                var url_value_ind = $('ul#default_singapore li .option p').attr('data-type');
                //alert(url_value_ind);
                window.open("https://" + url_value_ind + "", "_self")
            });



            $('.SubmitButtonfour_germany').click(function() {
                var url_value_ind = $('ul#default_four_germany li .option p').attr('data-type');
                //alert(url_value_ind);
                window.open("https://" + url_value_ind + "", "_self")
            });


            $('.SubmitButtontwo').click(function() {
                var url_value_ind = $('ul#default_two li .option p').attr('data-type');
                //alert(url_value_ind);
                window.open("https://" + url_value_ind + "", "_self")
            });

            $('.SubmitButtonfour').click(function() {
                var url_value_ind = $('ul#default_four li .option p').attr('data-type');
                //alert(url_value_ind);
                window.open("https://" + url_value_ind + "", "_self")
            });

            $('.SubmitButtonthree').click(function() {
                var url_value_ind = $('ul#default_three li .option p').attr('data-type');
                //alert(url_value_ind);
                window.open("https://" + url_value_ind + "", "_self")
            });

            $('.SubmitButtontwoind').click(function() {
                var url_value_ind = $('ul#default_two li .option p').attr('data-type');
                //alert(url_value_ind);
                window.open("https://" + url_value_ind + "", "_self")
            });
            $('.SubmitButtonone').click(function() {
                var url_value_four = $('.option p').attr('data-type');
                //alert(url_value_four);
                window.open("https://" + url_value_four + "", "_self")
            });
        });
    </script>
    <script>
        $('.SubmitButton').click(function() {
            var urldata = $('#dropDownId :selected').val();
            window.open("https://" + urldata + "")
        });
    </script>


</head>

<body class="hg-india IN">

    <section class="top-header">
        <div class="container">
            <ul class="top-bar-menu">

                <li><a href="#"><i class="fa fa-phone"></i> 98858 82642</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> sales@hostigate.com </a></li>
                <li><a href="#"><i class="fa fa-headphones"></i> Support</a></li>
                <li><span><a href="https://my.hostigate.com/login"> <i class="fa fa-lock"></i>Login</a></span></li>
               
                <nav class="navbar navbar-expand-lg ">
                    
                        <ul class="navbar-nav">
                        <div class="dropdown">
                                <button type="button" class="dropdown-toggle currency-change" data-toggle="dropdown">
                                    <img src="img/india.png" alt="">INR
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" onclick="setCurrency('INR')" href="#"> <img src="img/india.png" alt="">INR</a>
                                    <a class="dropdown-item" onclick="setCurrency('USD')" href="#"> <img src="img/united-states.png" alt="">USD</a>
                                </div>
                            </div>
                        </ul>
                    </div>
                </nav>
            </ul>
        </div>
    </section>

    <header>
        <div class="menu-area">
            <div class="container">
                <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand" href="index.php"> <img src="img/logo.svg" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Domains
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="domain-registration.php">Domain Registration</a>

                                    <a class="dropdown-item" href="https://my.hostigate.com/cart.php?a=add&domain=transfer">Domain Transfer</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Web Hosting
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="shared-hosting.php">Shared Hosting</a>

                                    <a class="dropdown-item" href="wordpress-hosting.php">WordPress Optimized</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Reseller
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="reseller-hosting.php">Reseller Hosting</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    SSL
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="ssl-certificate.php">Positive SSL</a>

                                </div>
                            </li>

                           

                            






                        </ul>
                    </div>
                </nav>
            </div>
        </div><!-- nav-menu -->
    </header>

