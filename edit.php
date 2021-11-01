<?php
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $name=$_POST['name'];
    $category = $_POST['category'];
    $writer=$_POST['writer'];
    $publication = $_POST['publication'];
    $img = $_POST['img'];
        

    $result = mysqli_query($mysqli, "UPDATE book_tb SET name='$name',category_id='$category',writer_id='$writer', publication_year = '$publication', img = '$img' WHERE id=$id");
    

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM book_tb WHERE id=$id");
 
while($book_data = mysqli_fetch_array($result))
{
    $name = $book_data['name'];
    $category = $book_data['category_id'];
    $writer = $book_data['writer_id'];
    $publication = $book_data['publication_year'];
    $img = $book_data['img'];
}
?>
<html>
<head>    
    <title>Edit Book Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Category</td>
                <td><input type="text" name="category" value=<?php echo $category;?>></td>
            </tr>
            <tr> 
                <td>Writer</td>
                <td><input type="text" name="writer" value=<?php echo $writer;?>></td>
            </tr>
            <tr> 
                <td>Publication Year</td>
                <td><input type="text" name="publication" value=<?php echo $publication;?>></td>
            </tr>
            <tr> 
                <td>Image</td>
                <td><input type="text" name="img" value=<?php echo $img;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>