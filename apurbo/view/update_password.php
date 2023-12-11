<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $newPassword = $_POST['password'];

        $validChars = '@#$%';
        if (strlen($password) >= 8) {
            return strpbrk($password, $validChars) !== false;
        
        return false;
            if ($result) {
                echo "Password updated successfully!";
            } else {
                echo "Failed to update password.";
            }
        } else {
            echo "Invalid password. It must be at least eight (8) characters and contain at least one of the special characters (@, #, $, %).";
        }
    } else {
        echo "Invalid request.";
    }
} else {
    echo "Invalid request method.";
}
?>
