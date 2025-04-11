<?php

    include 'connection.php';

    $query = "SELECT * FROM users";
    $data = mysqli_query($con, $query);

?>

<html>
    <head>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        padding: 40px;
        text-align: center;
    }

    h1 {
        color: #343a40;
        margin-bottom: 30px;
    }

    table {
        margin: 0 auto;
        border-collapse: collapse;
        width: 80%;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #dee2e6;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    form {
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        width: 50%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    input[type="text"],
    input[type="email"] {
        width: 90%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    input[type="submit"] {
        padding: 10px 20px;
        background-color: #28a745;
        border: none;
        color: white;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

    </head>
    <body>
        <h1>User List</h1>
        <?php
            if(mysqli_num_rows($data) > 0){
                echo "<table>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>";
                while($row = mysqli_fetch_assoc($data)){
                    echo "<tr>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['message']."</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No data found.</p>";
            }
        ?>

        <br><br>
        <form action="delete.php" method="post">
            <input type="email" id="del" name="del" placeholder="Enter email to delete" required>
            <input type="submit" value="DELETE">
        </form>

        <br><br>
        <form action="update.php" method="post">
            <input type="email" id="uemail" name="uemail" placeholder="Enter email to update" required>
            <input type="text" id="uname" name="uname" placeholder="Enter updated name" required>
            <input type="text" id="umsg" name="umsg" placeholder="Enter updated message" required>
            <input type="submit" value="UPDATE">
        </form>
    </body>
</html>
