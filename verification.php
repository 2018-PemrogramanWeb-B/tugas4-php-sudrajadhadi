<?php
session_start();
?>

<!DOCTYPE html>
<body>
<?php
$user = $pass ="";
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $user = test_input($_POST["user"]);
        $pass = test_input($_POST["pass"]);

        if($user == "gelombang05@gmail.com" && $pass == "0124740") {
            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;
            header("location:time.php");
        }
        else {
            header("location:form.php");
        }
    }



    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
</body>
</html>
