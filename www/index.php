<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
    <style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>User Data</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
        </tr>

        <?php
        $data = [
            ['id' => 1, 'username' => 'Alice', 'email' => 'alice@example.com'],
            ['id' => 2, 'username' => 'Bob', 'email' => 'bob@example.com'],
            ['id' => 3, 'username' => 'Charlie', 'email' => 'charlie@example.com'],
            ['id' => 4, 'username' => 'David', 'email' => 'david@example.com'],
            // Add more data as needed...
        ];

        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        ?>

    </table>

</body>
</html>
