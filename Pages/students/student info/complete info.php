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
    <link rel="stylesheet" type="text/css" href="../../../Css/student/student.css">
    <link rel="stylesheet" type="text/css" href="../../../Css/student/student info css/complete info.css">
    <title>College Management System: Complete Student Info </title>
</head>

<body>
    
    <!-- Top Header && Content Header/Profile Header Start -->
    <?php include '../../Header Footer/menubar2.php'; ?>
    <!-- Top Header && Content Header/Profile Header End -->

    <!-- Content Body Start -->
    <section>
        <div class="main-container">
            <div class="body">
                <div class="container-1">
                    <span>Student Info &#8811; Complete Info</span>
                </div>
                <div class="container-2">
                    <div class="container">
                        <div class="container-content-1">
                            <p>Student Detail:</p>
                            <p><u>Name:</u> <span>ROHAN MONDAL</span></p>
                            <p><u>Class:</u> <span>2018 - CU - INT BCAMCA - CA - 4 SEM (BCA-MCA 2018)</span></p>
                            <p><u>Admission Date:</u> <span>03-Aug-18</span></p>
                        </div>
                        <div class="container-content-2">
                            <div class="buttons">
                                <span class="button-1" onclick="showTabs(0);">
                                    <div class="span"></div>Personal Info
                                </span>
                                <span class="button-2" onclick="showTabs(1);">
                                    <div class="span"></div>Parents Info
                                </span>
                                <span class="button-3" onclick="showTabs(2);">
                                    <div class="span"></div>Course Info
                                </span>
                                <span class="button-4" onclick="showTabs(3);">
                                    <div class="span"></div>Administrative Info
                                </span>
                                <span class="button-5" onclick="showTabs(4);">
                                    <div class="span"></div>Schedule Info
                                </span>
                                <span class="button-6" onclick="showTabs(5);">
                                    <div class="span"></div>Resource Detail
                                </span>
                                <span class="button-7" onclick="showTabs(6);">
                                    <div class="span"></div>Marks
                                </span>
                                <span class="button-8" onclick="showTabs(7);">
                                    <div class="span"></div>Attendance
                                </span>
                                <span class="button-9" onclick="showTabs(8);">
                                    <div class="span"></div>Final Results
                                </span>
                                <span class="button-10" onclick="showTabs(9);">
                                    <div class="span"></div>Grade Info
                                </span>
                                <span class="button-11" onclick="showTabs(10);">
                                    <div class="span"></div>Attendance Register
                                </span>
                                <span class="button-12" onclick="showTabs(11);">
                                    <div class="span"></div>Fees
                                </span>
                            </div>
                            <div class="tabs">
                                <div class="tab-1"></div>
                                <div class="tab-2"></div>
                                <div class="tab-3"></div>
                                <div class="tab-4"></div>
                                <div class="tab-5"></div>
                                <div class="tab-6"></div>
                                <div class="tab-7"></div>
                                <div class="tab-8"></div>
                                <div class="tab-9"></div>
                                <div class="tab-10"></div>
                                <div class="tab-11"></div>
                                <div class="tab-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content Body End -->

    <!-- Footer Start -->
    <?php include '../../Header Footer/footer.php'; ?>
    <!-- Footer End -->


    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        var buttons = document.querySelectorAll('.container .container-content-2 .buttons span');
        var tabs = document.querySelectorAll('.container .container-content-2 .tabs div');
        var span = document.querySelectorAll('.container .container-content-2 .buttons span div');

        function showTabs(index) {
            buttons.forEach(function (node) {
                node.style.backgroundColor = "";
                node.style.borderBottom = "";
                node.style.padding = "";
            });
            buttons[index].style.backgroundColor = "white";
            buttons[index].style.borderBottom = "none";
            buttons[index].style.padding = "0 5px 1px";

            span.forEach(function (node) {
                node.style.backgroundColor = "";
            });
            span[index].style.backgroundColor = "rgba(255, 125, 4, 0.8)";

            tabs.forEach(function (node) {
                node.style.display = "none";
            });
            tabs[index].style.display = "block";
        }
        showTabs(0)
    </script>
</body>


</html>