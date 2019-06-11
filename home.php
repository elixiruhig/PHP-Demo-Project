
<html>
    <head>
        <title>Home</title>
    </head>
    
    <?php
include_once 'config.php';
$result = $conn->query("select * from emp3");
?>
    <body>
        <table border="solid 2px">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Post</th>
                <th>Salary</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            <?php
                if($result->num_rows > 0){
                    while($row=$result->fetch_assoc()){
                        echo '<tr>';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['name'].'</td>';
                        echo '<td>'.$row['age'].'</td>';
                        echo '<td>'.$row['post'].'</td>';
                        echo '<td>'.$row['salary'].'</td>';
                        echo '<td>'.$row['phone'].'</td>';
                        echo "<td><a href='edit.php?id=$row[id]'>Edit</a>|<a href='delete.php?id=$row[id]'>Delete</a></td>";
                        echo '</tr>';
                    }
                }
            ?>
        </table>
        <br />
        <br />
        <a href="add.html">Add new data</a>
    </body>

</html>
