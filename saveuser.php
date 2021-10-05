<?php
include("config.php");

            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];

            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $course = $_POST['course'];

            $position = $_POST['position'];
            $skills = $_POST['skills'];

            $targetDir = "uploads/";
            $fileName = basename($_FILES["file"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


            $username = $_POST['username'];
            $password = $_POST['password'];
            $encrypted = password_hash($password, PASSWORD_DEFAULT);



            // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg','gif','pdf');


            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                    // Insert image file name into database

                    if (isset($_GET['id'])) {
                        $userid = $_GET['id'];

                        var_dump($userid);

                        $query = "UPDATE users SET lastname = '".$lname."' ,firstname ='".$fname."',middlename = '".$mname."',birthday = '".$birthday."',
                        address = '".$address."',course = '".$course."',position = '".$position."',skills = '".$skills."',photo = '".$fileName."',
                        username = '".$username."',password = '".$password."',encrypted = '".$encrypted."',date_add = now() WHERE id = $userid";
                        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
                        if($result){
                            echo"<script>alert('Updated Successfully!.');window.location.replace('profile.php')</script>";
                        }

                    }else{

                        $query = "INSERT INTO users (lastname,firstname,middlename,birthday,address,course,position,skills,photo,username,password,encrypted,date_add)
                        VALUES ('".$lname."','".$fname."','".$mname."','".$birthday."','".$address."','".$course."','".$position."','".$skills."','".$fileName."','".$username."','".$password."','".$encrypted."',now())";
                        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
                        if($result){
                            echo"<script>alert('Account Created Succesffuly!.');window.location.replace('index.php')</script>";
                        }

                    }



                }else{
                    $statusMsg = "Sorry, there was an error uploading your file.";
                }
            }else{
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
            }




            





?>