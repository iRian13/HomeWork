<?php

namespace App\classes;


class StudentInfo
{
    private $con;
    public function __construct()
    {
        $this->con = mysqli_connect('localhost','root','','irian');
    }
    public function addStudentInfo(){
        extract($_POST);
        $sql = "INSERT INTO students (first_name, last_name, father_name, mother_name, email, phone) VALUES ('$first_name', '$last_name', '$father_name', '$mother_name', '$email', '$phone')";
        if(mysqli_query($this->con, $sql)){
            $message = "Student Added Successfully";
            return $message;
        } else {
            echo "Query Problem".mysqli_error($this->con);
        }
    }
    public function viewStudent(){
        $sql = "SELECT * FROM students";
        if($getStudent = mysqli_query($this->con, $sql)){
            return $getStudent;
        } else {
            $message= "Query Problem".mysqli_error($this->con);
            return $message;
        }
    }
    public function updateInfo($id){
        extract($_POST);
        $sql = "UPDATE students SET first_name = '$first_name', last_name = '$last_name', father_name = '$father_name', mother_name = '$mother_name', email = '$email', phone = '$phone' WHERE id = '$id' ";
        if(mysqli_query($this->con, $sql)){
            header("location: view-student.php");
            exit();
        }else {
            $message = "Query Problem".mysqli_error($this->con);
            return $message;
        }

    }
    public function deleteStudent($id){
        $sql = "DELETE FROM students WHERE id = '$id'";
        if(mysqli_query($this->con, $sql)){
            header('location: view-student.php');
        } else {
            die("Query Problem".mysqli_error($this->con));
        }

    }
}