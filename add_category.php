<html>
<head>
    <title>Add Category</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add_category.php" method="post" name="form5">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        
        
        include_once("config.php");
                 
        $result = mysqli_query($mysqli, "INSERT INTO category_tb(name) VALUES('$name')");
        
        echo "User added successfully. <a href='view_category.php'>View Category</a>";
    }
    ?>
</body>
</html>