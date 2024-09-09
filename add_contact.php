<?php 
require_once("functions/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("head.php"); ?>
<body>
    <?php include_once("nav.php"); ?>
    <div class="container">
    <h3 class='text-center mb-4' >Add New Contact </h3>
    <form action="/save_contact.php" method="post">
  <div class="mb-3">
    <label> Name</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">Phone Number</label>
    <input type="text" class="form-control" name="phone" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>

