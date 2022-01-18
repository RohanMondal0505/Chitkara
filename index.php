<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icon -->
    <link rel="icon" href="https://hp.chitkara.edu.in//Storage/Images/favicon.ico" type="image/icon type">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- Css File -->
    <link rel="stylesheet" href="./Css/owl.carousel.css">
    <link rel="stylesheet" href="./Css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="./Css/index.css">
    <title>College Management System: Login </title>
</head>

<body>
    <div class="container-main">
    
        <div class="logo">
            <img src="./Images/cu_logo.png" alt="chitkara logo">
        </div>

        <div class="container">
            <div class="container-items">
                <div class="left-container">
                    <div class="banner-images">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <h3>Chitkara University ranked amongst the top 25 universities of the country in the prestigious ARIIA 2020 ranking</h3>
                                <p>We are extremely proud to announce that Chitkara University has been ranked...</p>
                                <img src="./Images/MHRD-Spotlight.jpg" alt="Banner Image">
                            </div>
                            <div class="item">
                                <h3>Chitkara University ranks 4th among the top Private & Deemed Multidisciplinary Universities in North Zone by The Week-Hansa Research Survey 2020</h2>
                                <img src="./Images/theweek.jpg" alt="Banner Image">
                            </div>
                            <div class="item">
                                <h3>Chitkara University achieves great ranking in the Times Engineering Institutes Ranking 2020</h2>
                                <p>Once again, standing tall and shining bright, Chitkara University upholds its unassailable...</p>
                                <img src="./Images/Spotlight.jpg" alt="Banner Image">
                            </div>
                            <div class="item">
                                <h3>Chitkara University ranks among the top 10 private engineering institutes in North India by Businessworld engineering ranking 2020</h2>
                                <p>It is indeed a matter of great honor that Chitkara</p>
                                <img src="./Images/Spotlight1.jpg" alt="Banner Image">
                            </div>
                            <div class="item">
                                <h3>Research and Development Activities of Chitkara University, Himachal Pradesh</h3>
                                <img src="./Images/rnd.jpg" alt="Banner Image">
                            </div>
                        </div>
                        <div class="nav-pause-btn">
                            <button type="button" class="pause-btn" id="btn1">
                                <i class="fas fa-pause"></i>
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <a href="#" class="nav-read">Read all Spotlight >></a>
                    </div>
                </div>
                <div class="right-container">
                    <div class="form-container">
                        <div class="form-body">
                            <div class="form-logo">
                                <h4>Log In</h4>
                            </div>

                            <div class="form-elements">
                                <!-- <form action="" method="post"> -->
                                    <div class="username-field">
                                        <label for="username">USERNAME</label><br>
                                        <input type="text" id="username" name="username" >
                                    </div>

                                    <div class="password-field">
                                        <label for="password">PASSWORD</label><br>
                                        <input type="password" id="password" name="password">
                                    </div>

                                    <div class="select-field">

                                        <div class="institute-field">
                                            <label for="institute">INSTITUTE</label><br>
                                            <select name="institute" id="institute">
                                                <option value="null">Select</option>
                                                <option value="CBS">CBS</option>
                                                <option value="CSBS">CSBS</option>
                                                <option value="CSHS">CSHS</option>
                                                <option value="CSOET">CSOET</option>
                                                <option value="CSPS">CSPS</option>
                                                <option value="CUCN">CUCN</option>
                                                <option value="CUSBS">CUSBS</option>
                                                <option value="CUSCA">CUSCA</option>
                                                <option value="CUSHM">CUSHM</option>
                                            </select>
                                        </div>

                                        <div class="session-field">
                                            <label for="session">SESSION</label><br>
                                            <select name="session" id="session">
                                                <option value="null">Select</option>
                                                <option value="2008-09">2008-09</option>
                                                <option value="2009-10">2009-10</option>
                                                <option value="2010-11">2010-11</option>
                                                <option value="2011-12">2011-12</option>
                                                <option value="2012-13">2012-13</option>
                                                <option value="2013-14">2013-14</option>
                                                <option value="2014-15">2014-15</option>
                                                <option value="2015-16">2015-16</option>
                                                <option value="2016-17">2016-17</option>
                                                <option value="2017-18">2017-18</option>
                                                <option value="2018-19">2018-19</option>
                                                <option value="2019-20">2019-20</option>
                                                <option value="2020-21">2020-21</option>
                                                <option value="2021-22">2021-22</option>
                                            </select>
                                        </div>

                                    </div>

                                    <!-- FIXME: -->
                                    <div class="recaptcha-field">                                            <!-- 6LeGkLwZAAAAAEDdha7A11q2Q7cA0doJWcHyTi6z -->
                                            <div class="g-recaptcha brochure__form__captcha captcha" data-sitekey="6LcXqLwZAAAAANqXq16gymKUWFvJ5-nenrJamJyC"></div>
                                    </div>

                                    <div class="button-field">
                                        <a href="./Pages/students/student.php"><input type="submit" id="submit" name="submit" value="Login"></a>
                                    </div>
                                    <div class="forgot-field">
                                        <div><a href="./Pages/admin/forgot.php">FORGOT PASSWORD</a></div>
                                    </div>
                                <!-- </form> -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./Javascript/owl.carousel.min.js"></script>
    <script src="./Javascript/index.js"></script>
</body>

</html>