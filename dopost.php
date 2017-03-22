<?php
include('db.php');
echo "<h3>View posted data:</h3>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";
echo "<h3>View individual data:</h3>";
echo $_POST['name'] . "<br />";
echo $_POST['email'] . "<br />";
echo $_POST['address'] . "<br />";
$name = $_POST['name'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$intr1 = $_POST['intr1'];
$intr2 = $_POST['intr2'];
$address = $_POST['address'];
$province = $_POST['province'];


if (isset($_POST['submit'])) {
    $sql = "INSERT INTO register (register_name,register_email,register_sex,register_interest,register_interest2,register_address,provinces) VALUES ('$name','$email','$sex','$intr1','$intr2','$address',$province)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<html>
<head>
<meta charset="utf-8">
<title>ผลการลงทะเบียน</title>

</head>
<body>
<br>
<button class="button" style="vertical-align:middle" name="info" onclick="linkto();"><span>USER DATA</span></button>
<script>
    function linkto() {
         window.location='http://angsila.cs.buu.ac.th/~58160259/887371/lab07/show_register.php';
    }
</script>
</body>
</html>