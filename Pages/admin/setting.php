<?php include "./common/head.php" ?>
<link rel="stylesheet" href="./css/setting.css">
<title>DashBoard : Setting</title>
</head>
<?php include "./common/sidebar.php" ?>


<div class="bar-container">
    <h1>Setting</h1>
    <div class="bar">
        <ul>
            <li onclick="showTime(0)"><span href="#">Session</span>
                <div></div>
            </li>
            <li onclick="showTime(1)"><span href="#">Batch</span>
                <div></div>
            </li>
        </ul>
    </div>
</div>

<main>
    <div class="tabs-div session-container">
        <div class="mini-bar">
            <h2>All Sessions</h2>
            <button><i class="fas fa-plus"></i>Add</button>
        </div>
        <div class="setting-details-container">

        </div>
    </div>

    <div class="tabs-div batch-container">
    </div>
</main>


<script src="../../Javascript/admin-from.js"></script>

<?php include "./common/footer.php" ?>