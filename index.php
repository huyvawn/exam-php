<?php 
require_once("functions/db.php");
$sql="select * from contacts;";
$contacts = select($sql);
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("head.php"); ?>
<body>
    <?php include_once("nav.php"); ?>
    <div class="container">
        <h3 class='text-center mb-4' >Your Contact Books</h3>
        <div class="text-center mb-4">
                <a href="/add_contact.php"><button class="btn btn-success">Add New Contact</button></a>
                </div>
    <table class="table table-bordered table-striped">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Telephone</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        <?php foreach($contacts as $item):?>
                            <tr>
                                <td><?php echo $item["id"];?></td>
                                <td><?php echo $item["name"];?></td>
                                <td><?php echo $item["phone_number"];?></td>
                                <td>
                                    <a href="/update_contact.php?id=<?php echo $item["id"]; ?>">
                                    <div class="btn btn-primary">Edit</div> </a>
                                   <a onclick="return confirm('You want to delete this contact?')" href="delete.php?id=<?php echo $item["id"]; ?>"> 
                                    <button class="btn btn-danger">Delete</button></a>
                                </td>
                             </tr>
                        <?php endforeach;?>    
                    </tbody>
                </table>
                
    </div>                        
</body>
</html>