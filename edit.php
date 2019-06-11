<html>
    <head>
        <title>Edit data</title>
    </head>
    
    <?php
        include_once 'config.php';
        if(isset($_POST['update'])){
            $id = filter_input(INPUT_POST,'id');
            $name = filter_input(INPUT_POST, 'name');
            $age = filter_input(INPUT_POST, 'age');
            $post = filter_input(INPUT_POST, 'post');
            $salary = filter_input(INPUT_POST, 'salary');
            $phone = filter_input(INPUT_POST, 'phone');
            
            $sql = "update emp3 set name='$name',age='$age',post='$post',salary='$salary',phone='$phone' where id='$id'";
            $conn->query($sql);
            header("Location:home.php");
        }
    ?>
    
    <body>
        
        <?php
        include_once 'config.php';
        $id1 = filter_input(INPUT_GET, 'id');
        $sql = "select * from emp3 where id='$id1'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row= $result->fetch_assoc()){
                $name = $row['name'];
                $age = $row['age'];
                $post = $row['post'];
                $salary = $row['salary'];
                $phone = $row['phone'];
            }
        }
        ?>
        
        <div align="center">
            <h1>Edit Data</h1>
            <form action="edit.php" name="editform" method="post">
                <table border="0" cellspacing="10px">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value=<?php echo $name?>></td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td><input type="number" name="age" value=<?php echo $age?>></td>
                    </tr>
                    <tr>
                        <td>Post</td>
                        <td><input type="text" name="post" value=<?php echo $post?>></td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td><input type="text" name="salary" value=<?php echo $salary?>></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input type="text" name="phone" value=<?php echo $phone?>></td>
                    </tr>
                </table>
                <input type="submit" name="update" value="Update">
            </form>
        </div>
    </body>
</html>