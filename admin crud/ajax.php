<?php
require_once('connect.php');
if($_REQUEST['operation'] != ''){
	if($_REQUEST['operation'] == 'create'){
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$email = $_REQUEST['email'];
		$gender = $_REQUEST['gender'];
		$age = $_REQUEST['age'];
		$CreateSql = "INSERT INTO `crud` (first_name, last_name, email_id, gender, age) VALUES ('$fname', '$lname', '$email', '$gender', '$age')";
		$res = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
	}
	if($_REQUEST['operation'] == 'delete'){
		$id = $_REQUEST['id'];
		$DelSql = "DELETE FROM `crud` WHERE id=$id";
		$res = mysqli_query($connection, $DelSql);
	}
}

$ReadSql = "SELECT * FROM `crud`";
$res = mysqli_query($connection, $ReadSql);
?>
<tbody> 
<?php 
while($r = mysqli_fetch_assoc($res)){
?>
	<tr> 
		<th scope="row"><?php echo $r['id']; ?></th> 
		<td><?php echo $r['first_name'] . " " . $r['last_name']; ?></td> 
		<td><?php echo $r['email_id']; ?></td> 
		<td><?php echo $r['gender']; ?></td> 
		<td><?php echo $r['age']; ?></td> 
		<td>
			<a href="javascript:void(0);" onclick="ajax_edit('edit', <?php echo $r['id']; ?>);"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

			<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $r['id']; ?>">Delete</button>

			<!-- Modal -->
			  <div class="modal fade" id="myModal<?php echo $r['id']; ?>" role="dialog">
			    <div class="modal-dialog">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Delete File</h4>
			        </div>
			        <div class="modal-body">
			          <p>Are you sure?</p>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			          <a href="javascript:void(0);" onclick="ajax('delete', <?php echo $r['id']; ?>);"><button type="button" class="btn btn-danger"> Yes..! Delete</button></a>
			        </div>
			      </div>
			      
			    </div>
			  </div>
		</td>
	</tr> 
<?php } ?>
</tbody>