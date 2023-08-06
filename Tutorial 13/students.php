<!DOCTYPE html>
<html>
<head>
    <title>Students Details</title>
</head>
<body>
    <h1>Students Details</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
        session_start();
        $connection = mysqli_connect("localhost","root","","university");

        $query = "SELECT * FROM students";
        $query_run = mysqli_query($connection, $query);
        
        ?>
        <tr>
        <td><b>ID</b></td>
        <td><?php echo $row['id']; ?></td>
    </tr>
    <tr>
        <td><b>Name</b></td>
        <td><?php echo $row['name']; ?></td>
    </tr>
    <tr>
        <td><b>Email</b></td>
        <td><?php echo $row['email']; ?></td>
    </tr>
    <tr>
        <td><b>Password</b></td>
        <td><?php echo $row['password']; ?></td>
    </tr>
    </table>
</body>
</html>