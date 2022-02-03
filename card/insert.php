<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['uname']) && isset($_POST['email']) &&
        isset($_POST['city']) && isset($_POST['phone']) &&
        isset($_POST['msg'])) {
        
        $username = $_POST['uname'];
        $password = $_POST['email'];
        $gender = $_POST['city'];
        $email = $_POST['phone'];
        $phoneCode = $_POST['msg'];
        
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "healthissue";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM contact WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO contact(uname,email,city,phone,msg) values(?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssis",$uname, $email, $city, $phone,$msg);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>