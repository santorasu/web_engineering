<?php
include 'home.php';

$query = "SELECT * FROM userinfo";
$data = mysqli_query($con, $query);
?>

<html>
<head>
    <style>
        table, tr, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>List</h1>

    <?php
    if (mysqli_num_rows($data) > 0) { 
        echo "<table>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        </tr>";
        
        while ($row = mysqli_fetch_assoc($data)) {
            echo "<tr><td>" . $row['name'] . "</td><td>"
                . $row['email'] . "</td><td>"
                . $row['message'] . "</td></tr>";
        }
        
        echo "</table>";
    } else {
        echo "<p>No records found.</p>"; 
    }
    ?>

    <br><br>
    <form action="delete.php" method='post'>
        <input type="text" id='del' name= "del" placeholder= 'Enter your email'>
        <input type="submit" value='DELETE'>
    </form>

    <br><br>
    <h2>Update User Information</h2>
    <form action="update.php" method="post">
        <input type="text" name="email" placeholder="Enter email to update" required><br><br>
        <input type="text" name="name" placeholder="Enter new full name" required><br><br>
        <input type="text" name="message" placeholder="Enter new message" required><br><br>
        <input type="submit" value="UPDATE">
    </form>
</body>
</html>
