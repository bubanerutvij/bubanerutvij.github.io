<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="CryptoCoin is a powerful Bitcoin Crypto Currency Wallet and Mining Template with full of customization options and features" />
        <!-- Fav Icon  -->
        <link rel="shortcut icon" href="images/favicon.png" />
        <!-- Site Title  -->
        <title>Contact - VW</title>
        <!-- Vendor Bundle CSS -->
        <link rel="stylesheet" href="assets/css/vendor.bundle.css" />
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="assets/css/style5152.css?ver=1.0" />
        <link rel="stylesheet" id="layoutstyle" href="assets/css/theme5152.css?ver=1.0" />

        <script>
            (function (i, s, o, g, r, a, m) {
                i["GoogleAnalyticsObject"] = r;
                (i[r] =
                    i[r] ||
                    function () {
                        (i[r].q = i[r].q || []).push(arguments);
                    }),
                    (i[r].l = 1 * new Date());
                (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m);
            })(window, document, "script", "../../www.google-analytics.com/analytics.js", "ga");

            ga("create", "UA-91615293-2", "auto");
            ga("send", "pageview");
        </script>
    </head>
    <body>
        <!-- Header -->
        <header class="site-header header-s1 is-sticky">
            <!-- Navbar -->
            <?php include('lib/header.php') ;?>
            <!-- End Navbar -->
        </header>

        <!-- Section -->
        <div class="formbold-main-wrapper"  style="background-image:url('images/contact-bg.jpeg');">
            <div class="formbold-form-wrapper">
                <form action="" method="POST" id="form">
                    <h3 class="text-center mt-5"><b>Enquire Now !!!</b></h3>
                    <div class="formbold-mb-5">
                        <label for="name" class="formbold-form-label"> Full Name </label>
                        <input type="text" name="name" id="name" placeholder="Full Name" class="formbold-form-input" />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="phone" class="formbold-form-label"> Phone Number </label>
                        <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="formbold-form-input" />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="email" class="formbold-form-label"> Email Address </label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" class="formbold-form-input" />
                    </div>
                    <div class="formbold-mb-5">
                        <label placeholder="course">Select Course</label>
                        <select id="inputState" name="course" class="form-control">
                            <option value="Elementary to Intermidiate">Elementary to Intermidiate</option>
                        </select>
                    </div>

                    <div class="formbold-mb-5">
                        <input class="form-control" placeholder="Do You Have A Demat Account ?" disabled />

                        <div class="row mt-3">
                            <div class="col-sm-10 flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="demat" value="Yes" />
                                    <label class="form-check-label" for="gridRadios1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check" style="margin-left: 10px;">
                                    <input class="form-check-input" type="radio" name="demat" value="No" />
                                    <label class="form-check-label" for="gridRadios2">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="formbold-mb-5">
                        <input class="form-control" placeholder="Do You Have Trading Experience ?" disabled />

                        <div class="row mt-3">
                            <div class="col-sm-10 flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="TradeExp" value="Yes" />
                                    <label class="form-check-label" for="gridRadios1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check" style="margin-left: 10px;">
                                    <input class="form-check-input" type="radio" name="TradeExp" value="No" />
                                    <label class="form-check-label" for="gridRadios2">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="formbold-mb-5">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Enquiry</label>
                            <textarea class="form-control" name="inquiry" id="exampleFormControlTextarea1" rows="4" required></textarea>
                        </div>
                    </div>

                    <div>
                        <button class="formbold-btn">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- End Section -->

      <?php include('lib/footer.php') ;?>
        <div id="preloader"><div id="status">&nbsp;</div></div>

        <script src="assets/js/jquery.bundle.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
