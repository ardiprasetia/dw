<html>
<head>
    <title>Add writer</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add_writer.php" method="post" name="form5">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr><tr> 
                <td>birth</td>
                <td><input type="text" name="birth"></td>
            </tr><tr> 
                <td>birt plcae</td>
                <td><input type="text" name="place"></td>
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
        $birth = $_POST['birth'];
        $place = $_POST['place'];
        
        include_once("config.php");
                 
        $result = mysqli_query($mysqli, "INSERT INTO writer_tb(name,birthdate,date_place) VALUES('$name','$birth,'$place)");
        
        echo "User added successfully. <a href='view_writer.php'>View writer</a>";
    }
    ?>
</body>
</html>