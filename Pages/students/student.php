<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icon -->
    <link rel="icon" href="../../Images/favicon.ico" type="image/icon type">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- Css File -->
    <link rel="stylesheet" href="../../Css/owl.carousel.css">
    <link rel="stylesheet" href="../../Css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../../Css/student/student.css">
    <title>College Management System: Home </title>
</head>

<body onload="RenderDate()">

    <!-- Top Header && Content Header/Profile Header Start -->
    <?php include '../Header Footer/menubar.php'; ?>
    <!-- Top Header && Content Header/Profile Header End -->


    <!-- Content Body Start -->
    <section>
        <div class="main-container">
            <!-- Home >> Dashboard Section -->
            <div class="body container-body-1st">
                <div class="dashboard">
                    <div class="first">Home &#8811; Dashboard</div>
                    <div class="end">Event</div>
                </div>
                <div class="input-menu">
                    <input type="text" placeholder="Menu Lookup..">
                </div>
            </div>

            <!-- Student About Green Section -->
            <div class="body container-body-2nd">
                <div class="dashboard">
                    <span class="dashboard-heading">Welcome, <span>Rohan Mondal</span> (You are currently enrolled in
                        <span>2018 - CU - INT BCAMCA - CA - 4 SEM and are Studying 6</span> Subjects(Lecture, Tutorial
                        and Practical))</span>
                </div>
            </div>

            <!-- Under Body Hole Content Section -->
            <div class="body container-body-3rd">
                <div class="body-3rd">
                    <!-- Top Grides/Boxes Section -->
                    <div class="body-3rd-menu-container">
                        <div class="menu body-3rd-menu-container-1st">
                            <div class="menu-content">
                                <span>
                                    <h3><a href="#">APPLY DUTY/MEDICAL LEAVE</a></h3>
                                    <a href="#">Apply Duty/Medical Leave online</a>
                                </span>
                            </div>
                        </div>
                        <div class="menu body-3rd-menu-container-2nd">
                            <div class="menu-content">
                                <span>
                                    <h3><a href="#">GATE PASS</a></h3>
                                    <a href="#">Student required this Gate Pass whenever he/she enter/left the
                                        university.</a>
                                </span>
                            </div>
                        </div>
                        <div class="menu body-3rd-menu-container-3rd">
                            <div class="menu-content">
                                <span>
                                    <h3><a href="#">ATTENDANCE</a></h3>
                                    <a href="#">Check your daily or weekly attendance, the number of absents or
                                        presents.</a>
                                </span>
                            </div>
                        </div>
                        <div class="menu body-3rd-menu-container-4th">
                            <div class="menu-content">
                                <span>
                                    <h3><a href="#">TIME TABLE</a></h3>
                                    <a href="#">The coursewise rime table for the respective semester can be viewed.</a>
                                </span>
                            </div>
                        </div>
                        <div class="menu body-3rd-menu-container-5th">
                            <div class="menu-content">
                                <span>
                                    <h3><a href="#">MARKS</a></h3>
                                    <a href="#">Couesewise marks in Practicals/Theories/Sessionals/Assigments in
                                        accordance with the semester can be viewed.</a>
                                </span>
                            </div>
                        </div>
                        <div class="menu body-3rd-menu-container-6th">
                            <div class="menu-content">
                                <span>
                                    <h3><a href="#">FINE</a></h3>
                                    <a href="#">All the fines which are due and which are paid can be checked.</a>
                                </span>
                            </div>
                        </div>
                        <div class="menu body-3rd-menu-container-7th">
                            <div class="menu-content">
                                <span>
                                    <h3><a href="#">FEE</a></h3>
                                    <a href="#">The fees related information i.e paid, paid date etc can be checked.</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Grides/Alert,Calender,Idea Box Section -->
                    <div class="body-3rd-dashboard">
                        <!-- Left Side -->
                        <div class="body-3rd-dashboard-alert">
                            <!-- Recent Activity Section -->
                            <div class="alert-recentActivity">
                                <div class="arrowicon">
                                    <span><img src="../../Images/grey-box-arrow.png"></span>
                                    <h1>Recent Activity</h1>
                                </div>
                                <div class="noticeSec">
                                    <div class="d">
                                        <div class="checkbox">
                                            <span id="notice" onclick="showPanel(0);">
                                                <div class="span"></div>Notices
                                            </span>
                                            <span id="uploaded" onclick="showPanel(1);">
                                                <div class="span"></div>Latest Uploaded Resources
                                            </span>
                                        </div>
                                        <div class="notice-items">

                                            <!-- Notices Section -->
                                            <div class="items items-1">  
                                                <ul class="daily-notice" id="addNotice">
                                                    <li>
                                                        <p class="date">12-Jun-20</p>
                                                        <img src="../../Images/red-bullet.png">
                                                        <a href="#" id="li" onclick="clickToShow();">
                                                            <p class="pst">Print Fee Receipt Print Fee Receipt Print Fee Receipt Print Fee Receipt</p>
                                                            <p class="pnd">coexam <img src="../../Images/new.gif"></p>
                                                        </a>
                                                        <span><a href="#"><img src="../../Images/download.gif"></a></span>
                                                    </li>

                                                </ul>
                                                <a href="#" class="lastchild">Show all Notices</a>
                                            </div>

                                            <!-- Notices pop up Section -->
                                            <div class="notice-pop-up-box">
                                                <div>
                                                    <span>Notice Description</span>
                                                    <img src="../../Images/close_btn.gif" title="Close"
                                                        onclick="clickToShow();">
                                                </div>
                                                <table>
                                                    <tr>
                                                        <td>Subject:</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Department:</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Visible From: 2020-10-05 &nbsp;&nbsp;&nbsp;&nbsp; Visible To: 2020-10-20</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Description:</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <!-- Update Section -->
                                            <div class="items items-2">
                                                <ul class="daily-notice" id="addUpdate">
                                                    <!-- <li>
                                                        <p class="date">12-Jun-20</p>
                                                        <img src="../../Images/red-bullet.png">
                                                        <a href="#" id="li">
                                                            Fee Due for: 1 SEM(JULY TO DEC 18) Print Fee Receipt Print Fee Receipt
                                                        </a>
                                                        <span><a href="#"><img src="../../Images/download.gif"></a></span>
                                                    </li> -->

                                                </ul>
                                                <a href="#" class="lastchild">Resource Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Alerts Section -->
                            <div class="alert-alerts">
                                <div class="arrowicon">
                                    <span><img src="../../Images/grey-box-arrow.png"></span>
                                    <h1>Alerts</h1>
                                </div>
                                <!-- Alert Dashboard -->
                                <div class="noticeSec">
                                    <ul id="alerts">
                                        <li><a href="#">Fee Due for: 1 SEM(JULY TO DEC 18) Print Fee Receipt</a>
                                            <ul id="alerts2">
                                                <li><a href="#">Print Academic Fee</a></li>
                                                <li><a href="#">Print Hostel Fee</a></li>
                                                <li><a href="#">Print Transport Fee</a></li>
                                                <li><a href="#">Print All Fee</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Fee Due for: 1 SEM(JULY TO DEC 18) Print Fee Receipt</a>
                                            <ul id="alerts2">
                                                <li><a href="#">Print Academic Fee</a></li>
                                                <li><a href="#">Print Hostel Fee</a></li>
                                                <li><a href="#">Print Transport Fee</a></li>
                                                <li><a href="#">Print All Fee</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul id="show-alerts-btn">
                                        <li><a href="#">Show all Alerts</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Patented Ides Section -->
                            <div class="alert-patented">
                                <div class="arrowicon">
                                    <span><img src="../../Images/grey-box-arrow.png"></span>
                                    <h1>Patented Ides</h1>
                                </div>
                                <div class="noticeSec ">
                                    <!-- Carousel TODO: -->
                                    <ul class="carousel owl-carousel owl-theme">
                                        <li class="pic">
                                            
                                        </li>
                                        <li class="pic"> Your Content 2</li>
                                        <li class="pic"> Your Content 3</li>
                                        <li class="pic"> Your Content 4</li>
                                        <li class="pic"> Your Content 5</li>
                                        <li class="pic"> Your Content 6</li>
                                        <li class="pic"> Your Content 7</li>
                                        <li class="pic"> Your Content 8</li>
                                    </ul>
                                    <a href="#" class="readNotice">Read all..</a>
                                </div>

                            </div>

                            <!-- Calender Section -->
                            <div class="alert-calenders">
                                <div class="arrowicon">
                                    <span><img src="../../Images/grey-box-arrow.png"></span>
                                    <h1>Academic Calendar</h1>
                                </div>
                                <div class="calender-body">
                                    <div class="calender">
                                        <div class="month">
                                            <div class="prev" onclick="moveDate('prev')">
                                                <span>&#10094</span>
                                            </div>
                                            <div class="det">
                                                <h2 id="month"></h2>
                                            </div>
                                            <div class="next" onclick="moveDate('next')">
                                                <span>&#10095</span>
                                            </div>
                                        </div>
                                        <div class="weekends">
                                            <div>Sun</div>
                                            <div>Mon</div>
                                            <div>Tue</div>
                                            <div>Wed</div>
                                            <div>Thu</div>
                                            <div>Fri</div>
                                            <div>Sat</div>
                                        </div>
                                        <div class="days"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side -->
                        <div class="body-3rd-dashboard-ideabox">
                            <!-- Idea Box -->
                            <div class="alert-idea">
                                <div class="idea-ion">
                                    <h1"><img src="../../Images/idea_box.png"> Idea
                                        Box</h1>
                                </div>
                                <div class="text-content">
                                    <form action="">
                                        <textarea name="" id="" cols="30" rows="10"
                                            placeholder="Thoughtful ideas are valued, respected and encouraged. The purpose of the idea box is to generate constructive ideas, suggestions, and brainstorms from you.Our aim is to help you achieve innovation excellence inside your own university by making innovation resources, answers, and best practices accessible for the greater good."></textarea>
                                        <a href="#" title="Click To Send">Send Idea</a>
                                    </form>
                                </div>

                            </div>

                            <!-- Opportunity Activity -->
                            <div class="alert-oper">
                                <div class="arrowicon">
                                    <img src="../../Images/grey-box-arrow.png">
                                    <h1>Opportunity Activity</h1>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li><a href="#">Easy Patent Policy<img src="../../Images/new.gif"></a></li>
                                        <li><a href="#">PIE Form<img src="../../Images/new.gif"></a></li>
                                    </ul>
                                </div>
                                <div class="blackbar"><a href="#">Read More..</a></div>
                            </div>

                            <!-- Download Section -->
                            <div class="alert-download">
                                <div class="arrowicon">
                                    <img src="../../Images/grey-box-arrow.png">
                                    <h1>Download Section</h1>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li><a href="#">Show all Download Secrion</a></li>
                                    </ul>
                                </div>
                                <div class="blackbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Content Body End -->


    <!-- Footer Start -->
    <?php include '../Header Footer/footer.php'; ?>
    <!-- Footer End -->


    <!-- Back To Top Section Start -->
    <a href="#top" class="back-to-top">
        <div>
            <img src="https://hp.chitkara.edu.in//Storage/Images/arrow-up1.png">
            <div>BACK TO TOP</div>
        </div>
    </a>
    <!-- Back To Top Section End -->




    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../../Javascript/owl.carousel.min.js"></script>
    <script src="../../Javascript/main.js"></script>
</body>

</html>