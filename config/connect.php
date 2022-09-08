<?php session_start();
date_default_timezone_set('Asia/Bangkok');

function Connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stu6439010019";
    try {
        $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $dbname,
         $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
function Execute($sql)
{
    if ($sql != "") {
        $conn = Connect();
        try {
            return $conn->exec($sql);
        } catch (PDOException $e) {
            echo "Execute failed: " . $e->getMessage();
        }
    }
}
function Result($sql)
{
    if ($sql != "") {
        $conn = Connect();
        try {
            $sth = $conn->query($sql);
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Result failed: " . $e->getMessage();
        }
    }
}

// function checkSession()
// {
//     if (isset($_SESSION['UserOnline']) == false) {
//         header('location:index.php');
//     }
// }
