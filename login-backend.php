<?php
require('database.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_POST["submit"])) {

        $errors = [];

        (strlen($username == null)) ? $errors['username.required'] = "Username is required to login.</br>" : null;
        (strlen($password == null)) ? $errors['password.required'] = "Password is required to login.</br>" : null;
        if (!count($errors)) {
            $sql = "SELECT * FROM users WHERE username = ?";
            $checkUser = $conn->prepare($sql);
            $checkUser->bind_param('s', $username);
            $checkUser->execute();
            $result = $checkUser->get_result();
            if ($result->num_rows == 1) {
                while ($userInfo[] = $result->fetch_assoc()) {
                    if ($userInfo[0]['password'] !== md5($password)) {
                        $errors["password.incorrect"] = "Your password is incorrect!";
                    } else {
                        session_start();
                        $_SESSION["logged.in"] = $username;
                        header("Location: Economy.php");
                        exit;

                    }

                }
                $checkUser->close();
                $conn->close();
            } else {
                $errors["username.not.found"] = "Username is not found!";
            }
        }
    }
}


