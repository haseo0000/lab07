<?php
include('db.php');
$query = "SELECT * FROM register natural join provinces WHERE register.provinces = provinces.PROVINCE_ID";
$result = $conn->query($query);
if (!$result) die($conn->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>รายชื่อผู้ลงทะเบียน</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
</style>
</head>
<body>

<div class="container">
  <center><a><b><FONT FACE = "TH SarabunPSK " SIZE ="6" COLOR= "BLACK">รายชื่อผู้ลงทะเบียน</a></b></FONT></center>          
  <table class="table table-bordered" >
    <thead>
      <tr>
        <th>ลำดับ</th>
        <th>ชื่อ-นามสกุล</th>
        <th>อีเมล์</th>
        <th>เพศ</th>
        <th>ความสนใจ</th>
        <th>ที่อยู่</th>
        <th>จังหวัด</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $result->fetch_array()) { ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['register_name']; ?></td>
        <td><?php echo $row['register_email']; ?></td>
        <td><?php echo $row['register_sex']; ?></td>
        <td><?php echo $row['register_interest']; ?><?php if ($row['register_interest'] != '') echo "<br>"; ?><?php echo $row['register_interest2']; ?></td>
        <td><?php echo $row['register_address']; ?></td>
        <td><?php echo $row['PROVINCE_NAME']; ?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
<center><button class="button" style="vertical-align:middle" name="info" onclick="linkto();"><span>Register</span></button></center>
 
<script>
    function linkto() {
         window.location='http://angsila.cs.buu.ac.th/~58160259/887371/lab07/register_form.php';
    }
</script>
<?php  
$conn->close();
?>
</body>
</html>