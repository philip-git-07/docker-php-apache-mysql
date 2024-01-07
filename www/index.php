<!DOCTYPE html>
<html>
<head>
    <title>Philip Thomas | BitCot Task</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <?php echo "<h1>Hi! I'm Philip</h1>"; ?>
        <?php echo "<h3>This is PHP demo</h3>"; ?>

        <?php
        $conn = mysqli_connect('php-app-rds.cd22cmyu0ea0.us-east-2.rds.amazonaws.com', 'PHILIP', 'Philip123', "php-app-rds");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = 'SELECT * FROM Person';
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        echo '<table class="table table-striped">';
        echo '<thead><tr><th></th><th>id</th><th>name</th></tr></thead>';
        while ($value = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<tr>';
            echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
            foreach ($value as $element) {
                echo '<td>' . $element . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';

        // Release result set
        mysqli_free_result($result);

        // Close connection
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
