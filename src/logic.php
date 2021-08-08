<?php
if(isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['radio']))
{
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['pass'] = $_POST['pass'];
    $_SESSION['radio'] = $_POST['radio'];
    if (isset($_SESSION["name"]) && isset($_SESSION["pass"]) && isset($_SESSION['radio'])) {
        $name = htmlspecialchars($_SESSION['name']);
        $pass = htmlspecialchars($_SESSION['pass']);
        $radio = htmlspecialchars($_SESSION['radio']);
        setcookie("name", $name, time() + 180);
        setcookie("radio", $radio, time() + 180);
        if(preg_match('/^[A-Za-z0-9]*$/', $name))
        {
            switch ($radio)
            {
                case "1":
                {
                    echo "Welcome to user page";
                    break;
                }
                case "2":
                {
                    echo "Welcome to admin page";
                    break;
                }
                case "3":
                {
                    echo "Welcome to manager page";
                    break;
                }
            }
        }
        else
        {
            echo "Enter letters or number";
            echo '<input type="button" onclick="history.go(-1);" value="Back to the Log in">';
        }
    }
}