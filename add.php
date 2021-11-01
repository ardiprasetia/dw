<html>
<head>
    <title>Add Books</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Category Id</td>
                <td><input type="text" name="category"></td>
            </tr>
            <tr> 
                <td>Writer Id</td>
                <td><input type="text" name="writer"></td>
            </tr>
            <tr> 
                <td>Publication Year</td>
                <td><input type="text" name="publication"></td>
            </tr>
            <tr> 
                <td>Image</td>
                <td><input type="text" name="img"></td>
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
        $category = $_POST['category'];
        $writer = $_POST['writer'];
        $publication = $_POST['publication'];
        $img = $_POST['img'];
        
        
        include_once("config.php");
                 
        $result = mysqli_query($mysqli, "INSERT INTO book_tb(name,category_id,writer_id,publication_year,img) VALUES('$name','$category','$writer','$publication','$img')");
        
        echo "User added successfully. <a href='index.php'>View UseBooksrs</a>";
    }
    ?>
</body>
</html>