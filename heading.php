<link href="javascript/java.js">
<div class="row">
      <div class="col-md-2">
      </div>
		<div class="col-md-5">
				<?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			?>
			<hr>
			<p><font color="white"> Name : <?php echo $row['firstname']." ".$row['lastname']; ?><span class="margin-p"> </span> Gender : <?php echo $row['gender'];?><span class="margin-p"> </span>  Group : Public </P>
			<hr>
		</div>
      <div class="col-md-5">
			<form method="post" action="post.php">
						<textarea name="content" placeholder="Share your Public Story Here"></textarea>
						<br>
						<hr>
						<button class="btn btn-success"><i class="icon-share"></i> Share </button>
			</form>
      </div>
    </div> 