<?php
    require_once './vendor/autoload.php';
    use App\classes\StudentInfo;
    $student = new StudentInfo();
    $viewStudent = $student->viewStudent();
    if(isset($_GET['id'])){
        $student->deleteStudent($_GET['id']);
    }

?>

<div align="center">
    <hr />
    <a href="index.php">ADD STUDENT</a> ||
    <a href="view-student.php">VIEW STUDENT</a>
    <hr />
</div>

<table border="1" align="center" width="780">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Email Address</th>
        <th>Phone Number</th>
        <th>Action</th>
    </tr>
    <?php while ($student = mysqli_fetch_assoc($viewStudent)){ ?>
    <tr>
        <td><?php echo $student['id'];?></td>
        <td><?php echo $student['first_name'].' '.$student['last_name'];?></td>
        <td><?php echo $student['father_name'];?></td>
        <td><?php echo $student['mother_name'];?></td>
        <td><?php echo $student['email'];?></td>
        <td><?php echo $student['phone'];?></td>
        <td><a href="update-student.php?id=<?php echo $student['id'];?>">Edit</a>/<a href="?status=delete&id=<?php echo $student['id']; ?>">Delete</a></td>
    </tr> <?php } ?>
</table>