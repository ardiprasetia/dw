<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM book_tb ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add New Book</a><br/><br/>
<a href="add_category.php">Add New Category</a><br/><br/>
<a href="add.php">Add New Writer</a><br/><br/>
<a href="view_category.php">view category</a><br/><br/>
<a href="view_writer.php">view writer</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>ID</th>
        <th>Name</th> 
        <th>Category Id</th>
        <th>Writer Id</th>
        <th>Publication year</th>
        <th>Img</th>
    </tr>
    <?php  
    while($book_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$book_data['id']."</td>";
        echo "<td>".$book_data['name']."</td>";
        echo "<td>".$book_data['category_id']."</td>";    
        echo "<td>".$book_data['writer_id']."</td>";  
        echo "<td>".$book_data['publication_year']."</td>";  
        echo "<td>".$book_data['img']."</td>";  
        echo "<td><a href='edit.php?id=$book_data[id]'>Edit</a> | <a href='delete.php?id=$book_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>