<?php
include("assets/includes/connection.php");

if(isset($_POST['btnsave']))
{
$sqlinsert="INSERT INTO student(student_name,student_address,student_no,tp_no,dob,nic_no)
value('".mysqli_real_escape_string($con,$_POST['txtid'])."',
'".mysqli_real_escape_string($con,$_POST['txtname'])."',
'".mysqli_real_escape_string($con,$_POST['txtadd'])."',
'".mysqli_real_escape_string($con,$_POST['tpno'])."',
'".mysqli_real_escape_string($con,$_POST['txtdob'])."',
'".mysqli_real_escape_string($con,$_POST['txtnic'])."')";

$result=mysqli_query($con,$sqlinsert)or die("Error in sql insert section :".mysqli_error($con));
}

if (isset ($_GET['option']))
{
if ($_GET ['option']=="add")
{
?>
<button><a href="//127.0.0.1/ims/index.php?pg=student.php&option=view">View</a></button>
<form name="first student" id="frmstudent" action="" method="post" class="form_inline">
    <div class="row">
        <div class="col-lg-6">
            <label>student name</label>
            <input type="text" name="txtid" id="txtid" class="form-control">
        </div>
        <div class="col-lg-6">
            <label>student address</label>
            <input type="text" name="txtname" id="txtname" class="form-control">
        </div>
    </div>
    <?php
$sqlstudentno="select student_no from student order by student_no desc";
$result=mysqli_query ($con,$sqlstudentno) or die ("error in sql student_no:".mysqli_error($con));
$row=mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)>=1)
{
$student_no=$row['student_no'];
$student_no=++$student_no;
}
else
{
$student_no="ST0001";
}
?>
    <div class="row">
        <div class="col-lg-6">
            <label>student no</label>
            <input type="text" name="txtadd" id="txtadd" class="form-control" value="<?php echo $student_no; ?>" readonly>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label>tpno</label>
                <input type="text" name="tpno" id="tpno" class="form-control">
            </div>
        </div>
        <div class="col-lg-6">
            <label>dob</label>
            <input type="date" name="txtdob" id="txtdob" class="form-control">
        </div>
        <div class="col-lg-6">
            <label>nic no</label>
            <input type="text" name="txtnic" id="txtnic" class="form-control">
        </div>
        <div class="col-lg-6">
            <input type="submit" name="btnsave" id="btnsave" value=save class="btnsuccess" class="form-control">
        </div>
</form>
<?php
}
else if ($_GET ['option']=="view")
{
echo '<button><a href="index.php?pg=student.php&option=add" class="btn btn info">Create new record </a></button>';
$sqlview ="select * from student";
$result =mysqli_query($con,$sqlview) or die("error in sql view:".mysqli_error($con));
?>
<table class="table" ui-jq="footable" ui-options='{
"paging": {
"enabled": true
},
"filtering": {
"enabled": true
},
"sorting": {
"enabled": true
}}'>
    <tr>
        <th>student name</th>
        <th>student no</th>
        <th>student address</th>
        <th>tp no</th>
        <th>dob</th>
        <th>nic no</th>
        <th>Action</th>
    </tr>

    <?php
while($row=mysqli_fetch_assoc($result))
{
echo'<tr><td>'.$row['student_name'].'</td>
<td>'.$row['student_address'].'</td>
<td>'.$row['student_no'].'</td>
<td>'.$row['tp_no'].'</td>
<td>'.$row['dob'].'</td>
<td>'.$row['nic_no'].'</td> 
<td><button><a href="index.php?pg=student.php&option=find&student_no='.$row['student_no'].'">view</a></button>
<button><a href="">edit</a></button>
<button><a href="">Delete</a></button></td> 
</tr>';
}

echo '</table>';

}
else if ($_GET ['option']=="find")
{
$student_no=$_GET['student_no'];
$sqlfind="select* from student where student_no='$student_no'";
$result=mysqli_query($con,$sqlfind)or die("error in sql find section:".mysqli_error($con));
$row=mysqli_fetch_assoc($result);
?>
    <table>
        <tr>
            <td>student_name</td>
            <td>
                <?php echo $row['student_name']; ?>
            </td>
        </tr>
        <tr>
            <td>student_address</td>
            <td>
                <?php echo $row['student_address']; ?>
            </td>
        </tr>
        <tr>
            <td>student_no</td>
            <td>
                <?php echo $row['student_no']; ?>
            </td>
        </tr>
        <tr>
            <td>tp_no</td>
            <td>
                <?php echo $row['tp_no']; ?>
            </td>
        </tr>
        <tr>
            <td>dob</td>
            <td>
                <?php echo $row['dob']; ?>
            </td>
        </tr>
        <tr>
            <td>nic_no</td>
            <td>
                <?php echo $row['nic_no']; ?>
            </td>
        </tr>
    </table>
    }} ?>