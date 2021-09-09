<?php
include('dbcon.php');
$member_id = $_POST['member_id'];
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$birthdate = $_POST['birthdate'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$status = $_POST['status'];
$work = $_POST['work'];
$religion = $_POST['religion'];

$conn->query("update members set username = '$username',firstname = '$firstname',lastname='$lastname',gender='$gender',address='$address',
birthdate='$birthdate',mobile='$mobile',email='$email',status='$status',work='$work',religion='$religion' where member_id = '$member_id'
");


	if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
}
		?>
<script>
	window.location = 'edit_profile.php<?php echo '?id='.$member_id; ?>';
</script>