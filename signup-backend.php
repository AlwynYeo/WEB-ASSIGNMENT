<?php
require('database.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $password_confirmation = $_POST["password_confirmation"];

        $errors = [];

        (strlen($username == null)) ? $errors["username.required"] = "Username is required." : null;
        (strlen($password == null)) ? $errors["password.required"] = "Password is required." : null;
        (strlen($firstname == null)) ? $errors["firstname.required"] = "Please enter your First name." : null;
        (strlen($lastname == null)) ? $errors["lastname.required"] = "Please enter your Last name." : null;

        (strlen($username) > 15) ? $errors["username.length"] = "Username must not be exceeded than 15 characters.": null;
        (strlen($password) <= 4) ? $errors["password.length"] = "Password must have at least 5 characters" : null;
        ($password_confirmation !== $password) ? $errors["password.match"] = "Your password is unmatched." : null;

        $sql = "SELECT * FROM users WHERE username = '" .$username. "'";
        $result = $conn->prepare($sql);

        if ($result->num_rows == 1) {
            $errors["username.taken"] = "The name " . $username . " has been registered by another user.";
        }
        if (!count($errors)) {
            $encryptedpassword = md5($password);
            $signupSQL = "INSERT INTO `users` (id, username, password, firstname, lastname) VALUES (null, ?, ?, ?, ?)";
            $userSQL = $conn->prepare($signupSQL);
            $userSQL->bind_param("ssss", $username, $encryptedpassword, $firstname, $lastname);
            $userSQL->execute();
            $userSQL->close();
            $conn->close();

            header("Location: login.php");
            exit;


        }
    }
}