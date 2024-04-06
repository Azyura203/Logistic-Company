<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="LogisticHome.css">
</head>
<body class="bg-img">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <center>
    <?php
    require_once 'LogisticDB.php'; // Include the file containing database connection details

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Create a new mysqli connection
        $conn = new mysqli($host, $user, $pass, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to fetch user data from the database
        $stmt = $conn->prepare("SELECT email, password FROM userinfo WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        // Check if there is a matching user in the database
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($db_email, $db_password);
            $stmt->fetch();

            // Verify if the provided password matches the one stored in the database
            if ($password == $db_password) {
                echo "<h1 class='hi'>","Login successful!", "</h1>";
                // You can redirect the user to a different page or perform any other actions here
            } else {
                echo "<h1>","Incorrect password","</h1>";
            }
        } else {
            echo "<h1>","User not found!", "</h1>";
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>
    </center>

</body>
</html>