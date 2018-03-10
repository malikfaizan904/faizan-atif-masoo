<?php
    if( isset( $_POST['Save_btn'] ) ):
        $firstname = $_POST['firstName_box'];
        $lastname = $_POST['lastName_box'];
        $address = $_POST['address_box'];
        $phone = $_POST['phone_box'];
        $email = $_POST['email_box'];
        $date1 = $_POST['date1_box'];
        $job1 = $_POST['jobtitle1_box'];
        $description1 = $_POST['description1_box'];
        $date2 = $_POST['date2_box'];
        $job2 = $_POST['jobtitle2_box'];
        $description2 = $_POST['description2_box'];
        $month1 = $_POST['month1_box'];
        $degreetitle1 = $_POST['degreetitle1_box'];
        $description3 = $_POST['description3_box'];
        $month2 = $_POST['month2_box'];
        $degreetitle2 = $_POST['degreetitle2_box'];
        $description4 = $_POST['description4_box'];
        $skill1 = $_POST['skill1_box'];
        $skill2 = $_POST['skill2_box'];
        $skill3 = $_POST['skill3_box'];
        $skill4 = $_POST['skill4_box'];
        $skill5 = $_POST['skill5_box'];
        $activity = $_POST['activity_box'];

    $hostname='localhost';
    $db_username='root';
    $pasword='';
    $db_name='cv-information';
    //create connection

    $conn= mysqli_connect($hostname,$db_username,$pasword,$db_name);
    if(!$conn){
        die("connestion failed".mysqli_error($conn));
    }
    //insert query
        $query = "INSERT INTO cvdata ( First_Name, Last_Name, Address, Phone, Email, Date1, Job_Title1, Description1, Date2, Job_Title2, Description2, Month1, Degree_Title1, Description3, Month2, Degree_Title2, Description4, Skill_One, Skill_Two, Skill_Three, Skill_Four, Skill_Five, Activities )
                                    VALUES ( '$firstname', '$lastname', '$address', '$phone', '$email', '$date1', '$job1', '$description1', '$date2', '$job2','$description2', '$month1', '$degreetitle1', '$description3', '$month2', '$degreetitle2', '$description4', '$skill1', '$skill2', '$skill3', '$skill4', '$skill5', '$activity' )";
    //execute query
    $result=mysqli_query($conn,$query);
    if(!$result){
        die("query failed".mysqli_error($conn));
    }
    else{
        echo "course insert succesfuly";
    }
endif

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="text-center">
    <h3>Enter your data here to generate your cv!</h3>

    <form action="" method="post">
        <div class="container ">
            <div class="form-inline row justify-content-center align-items-center">
                <label for="fName"><b>First Name:</b></label>
                <input type="text" name="firstName_box" class="form-control" placeholder="Enter First Name here"><br>
                <label for="lName"><b>Last Name:</b></label>
                <input type="text" name="lastName_box" class="form-control" placeholder="Enter Last Name here"><br>
            </div>
            <div class="container">
                <label for="address"><b>Address:</b></label>
                <input type="text" name="address_box" class="form-control" placeholder="Enter Address here">
                <label for="phone"><b>Phone:</b></label>
                <input type="text" name="phone_box" class="form-control" placeholder="Enter Phone here">
            </div>
            <div class="container">
                <label for="email"><b>Email:</b></label>
                <input type="email" name="email_box" class="form-control" placeholder="Enter Email here">
            </div>
        </div>
        <hr color="white">
        <div class="container">
            <p>
            To replace this text with your own, just click it and start typing. Briefly state your career objective, 
            or summarize what makes you stand out. Use language from the job description as keywords.
            </p>
        </div>
        <div class="container">
            <h3>Experience:</h3>
            <div class="container-fluid">
                <label for="dates"><b>Date From - To:</b></label>
                <input type="date" name="date1_box" class="form-control" placeholder="Enter Date here">
                <label for="jobTitle"><b>Job Title, Company:</b></label>
                <input type="text" name="jobtitle1_box" class="form-control" placeholder="Enter Job Title here">
                <label for="description"><b>Description:</b></label>
                <input type="text" name="description1_box" class="form-control" placeholder="Enter Job Description here">
                <label for="dates"><b>Date From - To:</b></label>
                <input type="date" name="date2_box" class="form-control" placeholder="Enter Date here">
                <label for="jobTitle"><b>Job Title, Company:</b></label>
                <input type="text" name="jobtitle2_box" class="form-control" placeholder="Enter Job Title here">
                <label for="description"><b>Description:</b></label>
                <input type="text" name="description2_box" class="form-control" placeholder="Enter Job Description here">
            </div>
        </div>
        <div class="container">
            <h3>Education:</h3>
            <div class="container-fluid">
                <label for="month"><b>Month Year:</b></label>
                <input type="month" name="month1_box" class="form-control" placeholder="Enter Month here">
                <label for="degreeTitle"><b>Degree Title, School:</b></label>
                <input type="text" name="degreetitle1_box" class="form-control" placeholder="Enter Degree Title, School here">
                <label for="description"><b>Description:</b></label>
                <input type="text" name="description3_box" class="form-control" placeholder="Enter Degree Description here">
                <label for="month"><b>Month Year:</b></label>
                <input type="month" name="month2_box" class="form-control" placeholder="Enter Month here">
                <label for="degreeTitle"><b>Degree Title, School:</b></label>
                <input type="text" name="degreetitle2_box" class="form-control" placeholder="Enter Degree Title, School here">
                <label for="description"><b>Description:</b></label>
                <input type="text" name="description4_box" class="form-control" placeholder="Enter Degree Description here">
            </div>
        </div>
        <div class="container">
            <h3>Skills:</h3>
            <div class="container">
                <h4>Please enter your skills here!</h4>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="skill1_box" class="form-control" placeholder="Enter Skill # 1 here"><br>
                            <input type="text" name="skill2_box" class="form-control" placeholder="Enter Skill # 2 here"><br>
                        </div>
                        <div class="col">
                            <input type="text" name="skill3_box" class="form-control" placeholder="Enter Skill # 3 here"><br>
                            <input type="text" name="skill4_box" class="form-control" placeholder="Enter Skill # 4 here"><br>
                            <input type="text" name="skill5_box" class="form-control" placeholder="Enter Skill # 5 here"><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h3>Activities:</h3>
            <div class="container-fluid">
                <textarea name="activity_box" id="comment" class="form-control" rows="5" placeholder="Enter Activities here.."></textarea>
            </div>
        </div>
        <div class="container ">
            
                <button key="isset" name="Save_btn" class="btn ">Submit</button>
                <button class="btn ">Generate</button>
            
        </div>
    </form>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>