<?php
    require_once './vendor/autoload.php';
    use App\classes\StudentInfo;
    $addStudentInfo = '';
    if(isset($_POST['btn'])) {
        $student = new StudentInfo();
        $addStudentInfo = $student->addStudentInfo();

    }

?>
<div align="center">
<hr />
<a href="index.php">ADD STUDENT</a> ||
<a href="view-student.php">VIEW STUDENT</a>
<hr />
</div>
<h2><?php echo $addStudentInfo;?></h2>
<form action="" method="post">
    <table align="center">
        <tr>
            <th>First Name</th>
            <td><input type="text" name="first_name" /></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="last_name" /></td>
        </tr>
        <tr>
            <th>Father's Name</th>
            <td><input type="text" name="father_name" /></td>
        </tr>
        <tr>
            <th>Mother's Name</th>
            <td><input type="text" name="mother_name" /></td>
        </tr>
        <tr>
            <th>Email Address</th>
            <td><input type="text" name="email" /></td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td><input type="text" name="phone" /></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="SUBMIT" /></td>
        </tr>
    </table>
</form>