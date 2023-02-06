<?php
    function connectToDatabase()
    {

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'cestmadb';

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
         }
         catch (PDOException $e) {
            $mysql = mysqli_connect('localhost', 'root', '');
            $sql = "CREATE DATABASE cestmadb";
            if($mysql->query($sql))
            {
                $conn = mysqli_connect('localhost', 'root', '', 'cestmadb');
                $sql1 = "CREATE TABLE logs(
                    logid VARCHAR(10) NOT NULL PRIMARY KEY ,
                    username VARCHAR(30) NOT NULL,
                    pwd VARCHAR(300) NOT NULL,
                    stat VARCHAR(30) NOT NULL 
                )";
               mysqli_query($conn, $sql1);
                
            }
         }




         return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
    }
        

    function createUser($username, $pwd){
        try{
            
            $conn = connectToDatabase();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("INSERT INTO logs (logid, username, pwd, stat) 
            VALUES (:id, :uname, :passw, :statu)");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':uname', $username);
            $stmt->bindParam(':passw', $pwd);
            $stmt->bindParam(':statu', $stat);

            $id = "1";
            $stat = "business";
            $pwd = password_hash($pwd, PASSWORD_DEFAULT);
            $stmt->execute();

        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        

        return $id;
    }

    function verifyLogin($username, $pwd)
    {
        $verify = 0;
        try{
            $conn = connectToDatabase();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT logid, username, pwd, stat FROM logs WHERE username=:uname");
            $stmt->bindParam(':uname', $username);
            $stmt->execute();
            $user = $stmt->fetch();            
            if ($user && password_verify($pwd, $user['pwd']))
            {
                header("Location:  ./business.php");     
           }
            else
            {
             echo "fake \n";   
            
            }

        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

  


    }

    function checkSession ($path) {

        $expireAfter = 200000; 
    
        if(isset($_SESSION['last_action'])){
            
        
            $secondsInactive = time() - $_SESSION['last_action'];
            
            $expireAfterSeconds = $expireAfter * 10;
            
            if($secondsInactive >= $expireAfterSeconds){
                
                session_unset();
                session_destroy();
                header("Location:".$path);
            }
        }
        $_SESSION['last_action'] = time(); 
        $url=$_SERVER['REQUEST_URI'];
        $timeOut = ($expireAfter*10)+1; 
        header("Refresh: $timeOut; URL=$url"); 
    }

    function logOut() 
    {
        session_start();
        session_destroy();
        header('Location: homePage.php');
        exit;
    }