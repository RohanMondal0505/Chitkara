<?php include "./common/head.php" ?>
<link rel="stylesheet" href="./css/student.css">
<title>DashBoard : StudentT</title>
</head>
<?php include "./common/sidebar.php" ?>

<div class="bar-container">
    <h1>Students</h1>
    <div class="bar">
        <ul>
            <li onclick="showTime(0)"><span href="#">Lists</span>
                <div></div>
            </li>
            <li onclick="showTime(1)"><span href="#">Add</span>
                <div></div>
            </li>
            <li onclick="showTime(2)"><span href="#">Search</span>
                <div></div>
            </li>
        </ul>
    </div>
</div>

<main>
    <div class="tabs-div list-container">
        <div class="search-bar">
            <form action="" class="search-from">
                <div class="from-elements">
                    <label for="instituted">Instituted</label>
                    <select name="instituted" id="instituted">
                        <option value="" selected>Select</option>
                        <option value="BCA">BCA</option>
                        <option value="MCA">MCA</option>
                    </select>
                </div>
                <div class="from-elements">
                    <label for="batch">Batch</label>
                    <select name="batch" id="batch">
                        <option value="" selected>Select</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                <div class="from-elements">
                    <input type="button" value="Search">
                </div>
            </form>
        </div>

        <div class="table-container">
            <table cellpadding="5px" border="10px">
                <thead>
                    <th>Roll No.</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Batch</th>
                    <th>Category</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>State</th>
                    <th>Student No.</th>
                    <th>Parent No.</th>
                    <th>Mentor</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1813987016</td>
                        <td>Rohan Mondal</td>
                        <td>MCA</td>
                        <td>2018</td>
                        <td>GC</td>
                        <td>Male</td>
                        <td>rohanmondal1438@gmail.com</td>
                        <td>West-Bangle</td>
                        <td>9434436201</td>
                        <td>9679943396</td>
                        <td>Rohan Mondal</td>
                        <td>
                            <i class="far fa-eye"></i>
                            <i class="far fa-edit"></i>
                            <i class="far fa-trash-alt"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>1813987017</td>
                        <td>Rudranarayan Chatterjee</td>
                        <td>MCA</td>
                        <td>2018</td>
                        <td>GC</td>
                        <td>Male</td>
                        <td>rudranarayanchatterjee1920@gmail.com</td>
                        <td>West-Bangle</td>
                        <td>9874563210</td>
                        <td>9321065478</td>
                        <td>Rudranarayan Chatterjee</td>
                        <td>
                            <i class="far fa-eye"></i>
                            <i class="far fa-edit"></i>
                            <i class="far fa-trash-alt"></i>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="tabs-div add-container">
        <form class="add-form" action="" enctype="multipart/form-data" method="get">
            <div class="form-element">
                <label for="student_id">Student Id</label>
                <input type="text" id="student_id" name="student_id" placeholder="Student Id" autocomplete="off">
            </div>
            <div class="form-element">
                <label for="f_name">Student Name</label>
                <div>
                    <input type="text" id="f_name" name="f_name" placeholder="First Name" autocomplete="off">
                    <input type="text" id="l_name" name="l_name" placeholder="Last Name" autocomplete="off">
                </div>
            </div>
            <div class="form-element">
                <label for="instituted2">Instituted</label>
                <select name="instituted2" id="instituted2">
                    <option value="" selected disabled>Select Instituted</option>
                    <option value="BCA">BCA</option>
                    <option value="MCA">MCA</option>
                    <option value="BBA">BBA</option>
                    <option value="CSC">CSC</option>
                    <option value="MBA">MBA</option>
                </select>
            </div>
            <div class="form-element">
                <label for="batch2">Batch</label>
                <select name="batch2" id="batch2">
                    <option value="" selected disabled>Select Batch</option>
                    <option value="2015">2015</option>
                    <option value="">2016</option>
                    <option value="">2017</option>
                    <option value="">2018</option>
                    <option value="">2019</option>
                    <option value="">2020</option>
                    <option value="">2021</option>
                    <option value="">2022</option>
                </select>
            </div>
            <div class="form-element">
                <label for="session">Session</label>
                <select name="session" id="session">
                    <option value="" selected disabled>Select Session</option>
                    <option value="">2015-2016</option>
                    <option value="">2016-2017</option>
                    <option value="">2017-2018</option>
                    <option value="">2018-2019</option>
                    <option value="">2019-2020</option>
                    <option value="">2020-2021</option>
                    <option value="">2021-2022</option>
                </select>
            </div>
            <div class="form-element">
                <label for="semester">Semester</label>
                <select name="semester" id="semester">
                    <option value="" selected disabled>Select Semester</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                </select>
            </div>
            <div class="form-element">
                <label for="DOB">DOB</label>
                <input type="date" name="DOB" id="DOB">
            </div>
            <div class="form-element">
                <label for="blood_group">Blood Group</label>
                <select name="blood_group" id="blood_group">
                    <option value="" selected disabled>Select Blood Group</option>
                    <option value="">A</option>
                    <option value="">B</option>
                    <option value="">AB</option>
                    <option value="">O</option>
                </select>
            </div>
            <div class="form-element">
                <label for="category">Category</label>
                <select name="category" id="category">
                    <option value="" selected disabled>Select Category</option>
                    <option value="">GC</option>
                    <option value="">OBC</option>
                    <option value="">ST</option>
                    <option value="">SC</option>
                </select>
            </div>
            <div class="form-element">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="" selected disabled>Select Gender</option>
                    <option value="">Male</option>
                    <option value="">Female</option>
                    <option value="">Other</option>
                </select>
            </div>
            <div class="form-element">
                <label for="s_number">Number</label>
                <input type="text" name="s_number" id="s_number" placeholder="Student Number" autocomplete="off">
            </div>
            <div class="form-element">
                <label for="s_email">Email ID</label>
                <input type="email" name="s_email" id="s_email" placeholder="Student Email" autocomplete="off">
            </div>
            <div class="form-element">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" placeholder="Student Address" autocomplete="off">
            </div>
            <div class="form-element">
                <label for="city">City</label>
                <input type="text" name="city" id="city" placeholder="Student City" autocomplete="off">
            </div>
            <div class="form-element">
                <label for="state">State</label>
                <input type="text" name="state" id="state" placeholder="Student State" autocomplete="off">
            </div>
            <div class="form-element">
                <label for="pin">Pin Code</label>
                <input type="text" name="pin" id="pin" placeholder="Student Pin Code" autocomplete="off">
            </div>
            <div class="form-element">
                <label for="registration_date">Registration Date</label>
                <input type="date" name="registration_date" id="registration_date">
            </div>
            <div class="form-element">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="form-element">
                <input type="submit" value="Submit Data" name="submit">
            </div>
        </form>
    </div>

    <div class="tabs-div search-container">

    </div>
</main>

<script src="../../Javascript/admin-from.js"></script>

<?php include "./common/footer.php" ?>