<?php
require_once('db.php');

// Delete Logic
if (isset($_GET['delete'])) {
    $deleteId = $_GET['delete'];
    $deleteQuery = "DELETE FROM emp WHERE id = $deleteId";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        header("Location: profile_list.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

$query = "SELECT * FROM emp";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile List</title>
</head>
<body>
    <h1>Profile List</h1>

    <?php
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr><th>Name</th><th>Contact</th><th>Username</th><th>Action</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['contact'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>";

                if (isset($row['id'])) {
                    echo "<a href='profile_list.php?delete={$row['id']}'>Delete</a>";
                    echo "<a href='update_profile.php?id={$row['id']}'>Update</a>";
                } else {
                    echo "N/A";
                }

                echo "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No profiles found.";
        }
    } else {
        echo "Error fetching records: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
</body>
</html>
