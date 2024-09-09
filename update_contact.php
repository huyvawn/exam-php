<?php 
require_once("functions/db.php");
$id=$_GET["id"];
$sql="select * from contacts where id=$id;";
$contact=findById($sql);
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("head.php"); ?>
<body>
    <?php include_once("nav.php"); ?>
    <div class="container">
    <h3 class='text-center mb-4' >Update Contact </h3>
    <form action="/save_update_contact.php" method="post">
    <div class="mb-3">
    <label> Id</label>
    <input readonly type="text" class="form-control" name="id" require="required" value="<?php echo $contact["id"];?>">
  </div>
  <div class="mb-3">
    <label> Name</label>
    <input type="text" class="form-control" name="name" require="required" value="<?php echo $contact["name"];?>">
  </div>
  <div class="mb-3">
    <label  class="form-label">Phone Number</label>
    <input type="text" class="form-control" name="phone" require="required" value="<?php echo $contact["phone_number"];?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>

