<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SSL-Certificates</title>
        <meta
            name="description"
            content="HostiGate® best shared hosting india offers premium monthly hosting plans with 24x7 support & 99.9% Uptime. Get your website hosted from just Rs.49/month"
        />
        <meta
            name="keywords"
            content="best shared hosting india, monthly shared hosting plans, 99.9% uptime, website hosted"
        />
        <link rel="canonical" href="https://www.hostigate.com/ssl" />
        <meta property="og:locale" content="en_US" />
    </head>

    <!-- Header Include File -->
    <?php include("header.php"); ?>
    <!-- Header Include File end -->

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }
        /* SSL page styles */
        .ssl * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .ssl {
            font-family: "Gotham SSm A", "Gotham SSm B", Arial, sans-serif !important;
        }
        /* header */
        .header {
            height: 50vh;
            width: 100%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            background-image: url("https://images-hg.b-cdn.net/assets/ssl-hero.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

            .hero-baner {
                width: 100%;
                height: 100%;
            }
        }

        /* ssl certificate features */
        .ssl-features {
            padding-top: 80px;
            padding-bottom: 80px;
            text-align: center;

            background-color: #003d59;
            color: white;
            background-image: url("https://images-hg.b-cdn.net/assets/feature-bg-top.svg"),
                url("https://images-hg.b-cdn.net/assets/feature-bg-bottom.svg");
            background-size: 30%;
            background-repeat: no-repeat;
            background-position: top right, bottom left;

            .boxed {
                display: flex;
                flex-direction: column;
                gap: 40px;
            }

            .ssl-features-list {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 40px;
                margin-top: 30px;

                .feature-list-item {
                    background: rgba(255, 255, 255, 0.1);
                    backdrop-filter: blur(5.5px);
                    border-radius: 12px;
                    padding: 40px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    gap: 30px;
                    text-align: center;
                    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);

                    cursor: pointer;

                    & img {
                        width: 90px;
                        height: 90px;
                        object-fit: cover;

                        background-color: white;
                        padding: 20px;
                        border-radius: 50%;
                    }

                    &:hover {
                        transform: scale(1.05);
                    }

                    .body-regular {
                        line-height: 1.2;
                    }
                }
            }
        }

        /* table styles */
        .ssl-pricing {
            padding-top: 80px;
            padding-bottom: 80px;

            display: flex;
            flex-direction: column;
            gap: 30px;

            .heading-secondary,
            .body-regular {
                text-align: center;
            }

            .ssl-pricing-plans {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 5rem;
                margin-top: 30px;
                flex-wrap: wrap;

                .pricing-plan {
                    display: flex;
                    flex-direction: column;
                    background: white;
                    backdrop-filter: blur(5.5px);

                    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;

                    flex-basis: 40%;

                    .pricing-plan-head {
                        background-color: #003d59;
                        color: white;
                        padding: 30px;
                        width: 100%;
                        text-align: center;

                        display: flex;
                        flex-direction: column;
                        gap: 20px;

                        .pricing-plan-value {
                            display: flex;
                            justify-content: center;
                            & span {
                                font-size: 55px;
                                font-weight: regular;
                            }

                            & sup {
                                font-size: 20px;
                            }
                        }

                        .pricing-plan-heading {
                            font-size: 20px;
                        }
                    }

                    .pricing-plan-body {
                        display: flex;
                        flex-direction: column;
                        align-items: flex-start;
                        padding: 30px;
                        gap: 40px;

                        .dropdown {
                            display: none;
                        }

                        .plan-features {
                            display: flex;
                            flex-direction: column;
                            gap: 25px;

                            .plan-feature-item {
                                display: flex;
                                align-items: center;
                                gap: 10px;

                                .feature-item-icon {
                                    width: 20px;

                                    & img {
                                        width: 100%;
                                    }
                                }

                                .feature-item-content {
                                    font-weight: 500;
                                }
                            }
                        }

                        .btn-pricing {
                            text-decoration: none;
                            padding: 10px 40px;
                            width: 100%;
                            border-radius: 30px;
                            background-color: #167070;
                            color: white;
                            font-size: 20px;
                            align-self: center;
                            font-weight: 500;
                            transition: all 0.2s;
                            text-align: center;

                            &:hover {
                                transform: translateY(-1px);
                            }

                            &:active {
                                transform: translateY(1px);
                            }
                        }
                    }
                }
            }
        }
        /* why ssl certificates are essential */
        .ssl-why {
            padding-top: 80px;
            padding-bottom: 80px;
            background-color: white;

            .heading-secondary {
                text-align: center;
                /* color: white; */
            }

            .boxed {
                display: flex;
                flex-direction: column;
                gap: 40px;

                .ssl-why-list {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 40px;
                    margin-top: 20px;

                    .ssl-why-list-item {
                        background: rgba(0, 61, 89, 0.1);
                        backdrop-filter: blur(5.5px);
                        border-radius: 12px;
                        padding: 40px;
                        display: flex;
                        align-items: center;
                        gap: 30px;
                        text-align: center;
                        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
                        cursor: pointer;

                        &:hover {
                            transform: scale(1.05);
                        }

                        .icon-container {
                            flex-basis: 20%;

                            .why-list-icon {
                                width: 100%;
                            }
                        }

                        .why-list-content {
                            flex-basis: 80%;
                            display: flex;
                            flex-direction: column;
                            justify-content: flex-start;
                            gap: 20px;
                            text-align: left;
                        }
                    }
                }
            }
        }

        /* cta */

        .ssl-cta {
            padding-top: 80px;
            padding-bottom: 80px;

            .boxed {
                display: flex;
                justify-content: space-between;
                align-items: center;

                .ssl-cta-heading {
                    font-size: 40px;
                }

                .btn-ssl {
                    text-decoration: none;
                    padding: 20px 40px;
                    border-radius: 30px;
                    background-color: #003d59;
                    color: white;
                    font-size: 20px;
                    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
                    font-weight: 600;

                    &:hover {
                        transform: scale(1.05);
                        background-color: white;
                        color: #003d59;
                    }
                }
            }
        }

        /* global classes */

        .boxed {
            max-width: 1250px;
            margin: 0 auto;
        }

        .padding {
            padding-top: 50px;
            padding-left: 100px;
            padding-right: 100px;
        }

        .heading-secondary {
            font-size: 2rem;
        }

        /* Media Queries */

        @media screen and (max-width: 1200px) {
            /* ssl certificate features */
            .ssl-features {
                .ssl-features-list {
                    grid-template-columns: repeat(2, 1fr);
                }
            }
        }

        @media screen and (max-width: 992px) {
            .padding {
                padding-left: 60px;
                padding-right: 60px;
            }

            .button-group {
                display: grid !important;
            }

            .ssl-cta {
                .boxed {
                    flex-direction: column;
                    text-align: center;
                    gap: 40px;
                }
            }

            .ssl-why {
                .boxed {
                    .ssl-why-list {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }
            }
        }

        @media screen and (max-width: 768px) {
            .padding {
                padding-left: 50px;
                padding-right: 50px;
            }

            .ssl-pricing {
                .data-col {
                    display: flex;
                }

                .col1 {
                    display: table-cell;
                }
            }
        }

        @media screen and (max-width: 600px) {
            .header {
                background-size: cover;
                height: 16vh;
            }

            .padding {
                padding-left: 20px;
                padding-right: 20px;
            }

            .ssl-pricing {
                padding-top: 50px;
                padding-bottom: 50px;
                gap: 20px;

                .ssl-pricing-plans {
                    margin-top: 10px;

                    gap: 30px;

                    .pricing-plan {
                        flex-basis: 100%;
                    }
                }
            }

            /* ssl certificate features */
            .ssl-features {
                padding-top: 50px;
                padding-bottom: 50px;
                gap: 20px;

                .boxed {
                    gap: 25px;
                }

                .ssl-features-list {
                    grid-template-columns: repeat(1, 1fr);
                    margin-top: 10px;
                    gap: 30px;
                }
            }

            .ssl-why {
                padding-top: 50px;
                padding-bottom: 30px;

                .boxed {
                    gap: 25px;
                    .ssl-why-list {
                        grid-template-columns: repeat(1, 1fr);
                        margin-top: 10px;
                        gap: 30px;
                    }
                }
            }

            .ssl-cta {
                padding-top: 50px;
                padding-bottom: 50px;

                .boxed {
                    .ssl-cta-heading {
                        font-size: 30px;
                    }
                }
            }
        }

        /* pricing drop down styles */
        /* The container must be positioned relative: */
        .custom-select {
            position: relative;
            font-family: "Gotham SSm A", "Gotham SSm B", Arial, sans-serif !important;

            width: 100%;
            display: none;
        }

        .custom-select select {
            display: none; /*hide original SELECT element: */
        }

        .select-selected {
            background-color: #003d59;
            color: #fcfcfc;
        }

        .plan-price-custom {
            font-size: 30px;
            font-weight: 600;
            color: #003d59;
        }

        /* Style the arrow inside the select element: */
        .select-selected:after {
            position: absolute;
            content: "";
            top: 16px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #fff transparent transparent transparent;
        }

        /* Point the arrow upwards when the select box is open (active): */
        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
        }

        /* style the items (options), including the selected item: */
        .select-items div,
        .select-selected {
            padding: 10px 10px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
        }

        /* Style items (options): */
        .select-items {
            position: absolute;
            background-color: #fcfcfc;
            color: #003d59;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
            border-radius: 4px;
            margin-top: 2px;
        }

        /* Hide the items when the select box is closed: */
        .select-hide {
            display: none;
        }

        .select-items div:hover,
        .same-as-selected {
            background-color: #003d59;
            color: #fcfcfc;
        }
    </style>

    <body>
        <div class="ssl">
            <!-- header placeholder -->
            <section class="header padding">
                <div class="boxed"></div>
            </section>

            <!-- pricing plans -->
<?php require "pricing/ssl.php"; ?>

            <!-- ssl certficate features -->
            <section class="ssl-features padding">
                <div class="boxed">
                    <h2 class="heading-secondary">SSL Certificate Features</h2>

                    <div class="ssl-features-list">
                        <div class="feature-list-item">
                            <img
                                src="https://images-hg.b-cdn.net/assets/ssl-feature-1.png"
                                alt=""
                                class="feature-icon"
                            />
                            <h3
                                class="heading-tertiary"
                                style="font-size: 25px"
                            >
                                Unlimited Servers
                            </h3>
                            <p class="body-regular" style="font-size: 15px">
                                SSL certificates can be installed on multiple
                                servers. It provides security to a web domain
                                and that data is protected.
                            </p>
                        </div>
                        <div class="feature-list-item">
                            <img
                                src="https://images-hg.b-cdn.net/assets/ssl-feature-2.png"
                                alt=""
                                class="feature-icon"
                            />
                            <h3
                                class="heading-tertiary"
                                style="font-size: 25px"
                            >
                                Multi-Domain SSL
                            </h3>
                            <p class="body-regular" style="font-size: 15px">
                                Secure all your domains with one plan. The
                                Wildcard SSL Certificate covers your primary
                                domain as well as other sub-domains.
                            </p>
                        </div>
                        <div class="feature-list-item">
                            <img
                                src="https://images-hg.b-cdn.net/assets/ssl-feature-3.png"
                                alt=""
                                class="feature-icon"
                            />
                            <h3
                                class="heading-tertiary"
                                style="font-size: 25px"
                            >
                                Recognizability
                            </h3>
                            <p
                                class="body-regular"
                                style="font-size: 15px; padding-top: 25px"
                            >
                                Compatible with 99.9% of web browsers ensuring
                                whichever mode the customers use, the network
                                connection is always secured
                            </p>
                        </div>
                        <div class="feature-list-item">
                            <img
                                src="https://images-hg.b-cdn.net/assets/ssl-feature-4.png"
                                alt=""
                                class="feature-icon"
                            />
                            <h3
                                class="heading-tertiary"
                                style="font-size: 25px"
                            >
                                24/7 Tech Support
                            </h3>
                            <p class="body-regular" style="font-size: 15px">
                                A dedicated team of technical experts is
                                available round-o-clock to resolve your queries
                                and issues quickly and hassle-free.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- why ssl certificate is essential -->
            <section class="ssl-why padding">
                <div class="boxed">
                    <h2 class="heading-secondary">
                        Why SSL Certificate is Essential
                    </h2>

                    <div class="ssl-why-list">
                        <div class="ssl-why-list-item">
                            <div class="icon-container">
                                <img
                                    src="https://images-hg.b-cdn.net/assets/why-ssl-1.png"
                                    alt=""
                                    class="why-list-icon"
                                />
                            </div>
                            <div class="why-list-content">
                                <h3 class="heading-tertiary">Credibility</h3>
                                <p class="body-regular">
                                    Gains customer's trust with a secured site
                                    and https:// prefix
                                </p>
                            </div>
                        </div>
                        <div class="ssl-why-list-item">
                            <div class="icon-container">
                                <img
                                    src="https://images-hg.b-cdn.net/assets/why-ssl-2.png"
                                    alt=""
                                    class="why-list-icon"
                                />
                            </div>
                            <div class="why-list-content">
                                <h3 class="heading-tertiary">Warranty</h3>
                                <p class="body-regular">
                                    Full warranty for the offered product
                                    throughout the validity period
                                </p>
                            </div>
                        </div>
                        <div class="ssl-why-list-item">
                            <div class="icon-container">
                                <img
                                    src="https://images-hg.b-cdn.net/assets/why-ssl-3.png"
                                    alt=""
                                    class="why-list-icon"
                                />
                            </div>
                            <div class="why-list-content">
                                <h3 class="heading-tertiary">Security</h3>
                                <p class="body-regular">
                                    Protects sensitive information and secures
                                    online transactions
                                </p>
                            </div>
                        </div>
                        <div class="ssl-why-list-item">
                            <div class="icon-container">
                                <img
                                    src="https://images-hg.b-cdn.net/assets/why-ssl-4.png"
                                    alt=""
                                    class="why-list-icon"
                                />
                            </div>
                            <div class="why-list-content">
                                <h3 class="heading-tertiary">Sub-Domains</h3>
                                <p class="body-regular">
                                    Wildcard SSL Certificate secures your
                                    sub-domains as well
                                </p>
                            </div>
                        </div>
                        <div class="ssl-why-list-item">
                            <div class="icon-container">
                                <img
                                    src="https://images-hg.b-cdn.net/assets/why-ssl-5.png"
                                    alt=""
                                    class="why-list-icon"
                                />
                            </div>
                            <div class="why-list-content">
                                <h3 class="heading-tertiary">SEO Ranking</h3>
                                <p class="body-regular">
                                    Obtain higher search rankings and website
                                    traffic with SSL
                                </p>
                            </div>
                        </div>
                        <div class="ssl-why-list-item">
                            <div class="icon-container">
                                <img
                                    src="https://images-hg.b-cdn.net/assets/why-ssl-6.png"
                                    alt=""
                                    class="why-list-icon"
                                />
                            </div>
                            <div class="why-list-content">
                                <h3 class="heading-tertiary">Builds Trust</h3>
                                <p class="body-regular">
                                    Green padlock sign on address bar which
                                    indicates web page is secure
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- cta section -->
            <section class="ssl-cta padding">
                <div class="boxed">
                    <h2 class="ssl-cta-heading">
                        Ready to get started? <br />
                        It's quick and easy process!
                    </h2>

                    <a href="https://www.hostigate.com/contact" class="btn-ssl">Contact Us</a>
                </div>
            </section>
        </div>

        <!-- dropdown javascript -->
        <script>
            var x, i, j, l, ll, selElmnt, a, b, c;
            /* Look for any elements with the class "custom-select": */
            x = document.getElementsByClassName("custom-select");
            l = x.length;
            for (i = 0; i < l; i++) {
                selElmnt = x[i].getElementsByTagName("select")[0];
                ll = selElmnt.length;
                /* For each element, create a new DIV that will act as the selected item: */
                a = document.createElement("DIV");
                a.setAttribute("class", "select-selected");
                a.innerHTML =
                    selElmnt.options[selElmnt.selectedIndex].innerHTML;
                x[i].appendChild(a);
                /* For each element, create a new DIV that will contain the option list: */
                b = document.createElement("DIV");
                b.setAttribute("class", "select-items select-hide");
                for (j = 1; j < ll; j++) {
                    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
                    c = document.createElement("DIV");
                    c.innerHTML = selElmnt.options[j].innerHTML;
                    c.addEventListener("click", function (e) {
                        /* When an item is clicked, update the original select box,
        and the selected item: */
                        var y, i, k, s, h, sl, yl;
                        s =
                            this.parentNode.parentNode.getElementsByTagName(
                                "select"
                            )[0];
                        sl = s.length;
                        h = this.parentNode.previousSibling;
                        for (i = 0; i < sl; i++) {
                            if (s.options[i].innerHTML == this.innerHTML) {
                                s.selectedIndex = i;
                                h.innerHTML = this.innerHTML;
                                y =
                                    this.parentNode.getElementsByClassName(
                                        "same-as-selected"
                                    );
                                yl = y.length;
                                for (k = 0; k < yl; k++) {
                                    y[k].removeAttribute("class");
                                }
                                this.setAttribute("class", "same-as-selected");
                                break;
                            }
                        }
                        h.click();
                    });
                    b.appendChild(c);
                }
                x[i].appendChild(b);
                a.addEventListener("click", function (e) {
                    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
                    e.stopPropagation();
                    closeAllSelect(this);
                    this.nextSibling.classList.toggle("select-hide");
                    this.classList.toggle("select-arrow-active");
                });
            }

            function closeAllSelect(elmnt) {
                /* A function that will close all select boxes in the document,
  except the current select box: */
                var x,
                    y,
                    i,
                    xl,
                    yl,
                    arrNo = [];
                x = document.getElementsByClassName("select-items");
                y = document.getElementsByClassName("select-selected");
                xl = x.length;
                yl = y.length;
                for (i = 0; i < yl; i++) {
                    if (elmnt == y[i]) {
                        arrNo.push(i);
                    } else {
                        y[i].classList.remove("select-arrow-active");
                    }
                }
                for (i = 0; i < xl; i++) {
                    if (arrNo.indexOf(i)) {
                        x[i].classList.add("select-hide");
                    }
                }
            }

            /* If the user clicks anywhere outside the select box,
then close all select boxes: */
            document.addEventListener("click", closeAllSelect);
        </script>

        <!-- Footer Include File -->
        <?php include("footer.php"); ?>
        <!-- Footer Include File end -->
    </body>
</html>
