<?php include('config.php'); ?>

<html>
<head>
<title>Records</title>
</head>
<body>

<?php
$sql = "SELECT * FROM `user_info`";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
?>   
<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Contact</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php    
    while($data = $result->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $data['id'];?></td>
        <td><?php echo $data['Name']; ?></td>
        <td><?php echo $data['Age']; ?></td>
        <td><?php echo $data['PhoneNo']; ?></td>
        <td> <a href="edit.php?id=<?php echo $data['id'];?>">Edit</a> </td>
        <td> <a href="delete.php?id=<?php echo $data['id'];?>">Delete</a></td>
    </tr>
    <?php } ?>
    </tbody>
    
<?php } ?>
</table>   
</body>   
</html>