
<?php
    require_once "./vendor/autoload.php";
    use App\classes\StudentInfo;
    $student = new StudentInfo();
    $getStudentInfo = $student->viewStudent();
    $viewStudent = mysqli_fetch_assoc($getStudentInfo);

    if(isset($_POST['btn'])){
        $student->updateInfo($_GET['id']);
    }

?>
<div align="center">
    <hr />
    <a href="index.php">ADD STUDENT</a> ||
    <a href="view-student.php">VIEW STUDENT</a>
    <hr />
</div>

<form action="" method="post">
    <table align="center">
        <tr>
            <th>First Name</th>
            <td><input type="text" name="first_name" value="<?php echo $viewStudent['first_name']?>"/></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><input type="text" name="last_name" value="<?php echo $viewStudent['last_name']?>"/></td>
        </tr>
        <tr>
            <th>Father's Name</th>
            <td><input type="text" name="father_name" value="<?php echo $viewStudent['father_name']?>"/></td>
        </tr>
        <tr>
            <th>Mother's Name</th>
            <td><input type="text" name="mother_name" value="<?php echo $viewStudent['mother_name']?>"/></td>
        </tr>
        <tr>
            <th>Email Address</th>
            <td><input type="text" name="email" value="<?php echo $viewStudent['email']?>"/></td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td><input type="text" name="phone" value="<?php echo $viewStudent['phone']?>"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="UPDATE" /></td>
        </tr>
    </table>
</form>
