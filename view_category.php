<?php
include_once("config.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM category_tb ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Category</title>
</head>
 
<body>
<a href="index.php">Back Home</a><br/><br/>
<a href="add_category.php">Add New Category</a><br/><br/>
    <table width='80%' border=1>
 
    <tr>
        <th>ID</th>
        <th>Name</th> 
    </tr>
    <?php  
    while($book_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$book_data['id']."</td>"; 
        echo "<td>".$book_data['name']."</td>"; 
        echo "<td><a href='edit.php?id=$book_data[id]'>Edit</a> | <a href='delete.php?id=$book_data[id]'>Delete</a></td>
        </tr>";        
    }
    ?>
    </table>
</body>
</html>