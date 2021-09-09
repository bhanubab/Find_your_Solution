<div class="col-md-10 col-sm-9">
             	<div class="alert"><?php echo $row['content']; ?></div>
              <div class="row">
                <div class="col-xs-9">
                  <h4><span class="label label-info"> <?php echo $row['date_posted']; ?></span></h4><h4>
                  <small style="font-family:courier,'new courier';" class="text-muted">Posted By:<a href="#" class="text-muted"><?php echo $posted_by; ?></a></small>
               

<div class="col-xs-3"><a href="delete_post.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-trash"></i> Delete</a></div>