<?php
    function connectToDatabase()
    {

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'dbs';

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
         }
         catch (PDOException $e) {
            $mysql = mysqli_connect('localhost', 'root', '');
            $sql = "CREATE DATABASE dbs";
            if($mysql->query($sql))
            {
                $conn = mysqli_connect('localhost', 'root', '', 'dbs');
                $sql1 = "CREATE TABLE logs(
                    logid VARCHAR(10) NOT NULL PRIMARY KEY ,
                    email VARCHAR(30) NOT NULL,
                    pwd VARCHAR(300) NOT NULL,
                    stat VARCHAR(30) NOT NULL 
                )";
                $sql2 = "CREATE TABLE businessinfos(
                    logid VARCHAR(10) NOT NULL PRIMARY KEY ,
                    companyName VARCHAR(30) NOT NULL,
                    postcode VARCHAR(10) NOT NULL,
                    address VARCHAR(30) NOT NULL,
                    phone VARCHAR(15) NOT NULL
                )";
                $sql3 = "CREATE TABLE venues(
                    venueid VARCHAR(10) NOT NULL PRIMARY KEY ,
                    logid VARCHAR(10) NOT NULL,
                    venuename VARCHAR(30) NOT NULL,
                    address VARCHAR(30) NOT NULL,
                    postcode VARCHAR(10) NOT NULL,
                    type VARCHAR(15) NOT NULL
                )";
              

                mysqli_query($conn, $sql1);
                mysqli_query($conn, $sql2);   
                mysqli_query($conn, $sql3);   
                          
            }
         }
         return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
        

    function createUser($email, $pwd, $name, $phone, $postcode, $address){
        try{

            $verify = false;
            
            $id = rand(1,9999999);
            $stat = "business";
            $pwd = password_hash($pwd, PASSWORD_DEFAULT);

            $conn = connectToDatabase();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("INSERT INTO logs (logid, email, pwd, stat) 
            VALUES (:id, :email, :passw, :statu)");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':passw', $pwd);
            $stmt->bindParam(':statu', $stat);
            $stmt->execute();


            $stmt2 = $conn->prepare("INSERT INTO businessinfos (logid, companyName, phone, postcode, address) 
            VALUES (:lid, :comp, :phone, :postcode, :address)");
              $stmt2->bindParam(':lid', $id);
              $stmt2->bindParam(':comp', $name);
              $stmt2->bindParam(':phone', $phone);
              $stmt2->bindParam(':postcode', $postcode);
              $stmt2->bindParam(':address', $address);
              $stmt2->execute();

              session_start();
              $_SESSION['id'] = $id;
              $_SESSION['business'] =  $stat;
              $_SESSION['name'] =  $name;
              header('Location:  ../business/businessLandingPage.php?id='.$id);

        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }

    function verifyLogin($email, $pwd)
    {
        $verify = 0;
        try{
            $conn = connectToDatabase();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT logid, email, pwd, stat FROM logs WHERE email=:email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch();            
            if ($user && password_verify($pwd, $user['pwd']))
            { 
                if($user['stat'] == "admin")
                {
                    session_start();
                    $_SESSION['id'] = $user['logid'];
                    $_SESSION['uadmin'] =  $user['stat'];
                    header('Location: admin.php?id='.$user['logid']);
                }
                else
                {
                    $stmt2 = $conn->prepare("SELECT companyName FROM businessinfos WHERE logid=:id");
                    $stmt2->bindParam(':id', $user['logid']);
                    $stmt2->execute();
                    $infos = $stmt2->fetch(); 
                session_start();
                $_SESSION['id'] = $user['logid'];
                $_SESSION['business'] =  $user['stat'];
                $_SESSION['name'] =  $infos['companyName'];

                header('Location: ../business/businessLandingPage.php?id='.$user['logid']);
                }
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
        header('Location: ../public/landingPage.php');
        exit;
    }


    function createAdmin($email, $pwd){
        try{
            
            $id = "15";
            $stat = "admin";
            $pwd = password_hash($pwd, PASSWORD_DEFAULT);

            $conn = connectToDatabase();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("INSERT INTO logs (logid, email, pwd, stat) 
            VALUES (:id, :email, :passw, :statu)");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':passw', $pwd);
            $stmt->bindParam(':statu', $stat);
            $stmt->execute();

        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
    }

    function createVenue($logid, $VenueName, $address, $postcode, $type)
    {
        try{
            $conn = connectToDatabase();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("INSERT INTO venues (venueid, logid, venuename, address, postcode, type) 
            VALUES (:id, :logid, :venuename, :address, :postcode, :type)");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':logid', $logid);
            $stmt->bindParam(':venuename', $VenueName);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':postcode', $postcode);
            $stmt->bindParam(':type', $type);
            $id = rand(1,9999999);
            $stmt->execute();
            
            $myfile = fopen("testfile.txt", "w");
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }   
    }

    function addQuestion($question, $type)
    {
        try{
            $conn = connectToDatabase();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("INSERT INTO questions (question, type) 
            VALUES (:question, :type)");
            $stmt->bindParam(':question', $question);
            $stmt->bindParam(':type', $type);
            $stmt->execute();           
            
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }


    function viewVenues($id)
    {
            $conn = connectToDatabase();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM venues WHERE logid=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $res = $stmt->fetchAll();
            return $res;
       
    }

    function updateVenue($venueID)
    {
        
    }

    function updateBusinessDetails($id, $cname, $post, $address, $phone, $pwd)
    {
        $conn = connectToDatabase();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       

        $sql1 = "UPDATE businessinfos SET companyName=:cname, postcode=:post, address=:address, phone=:phone WHERE logid=:id";
        $stmt = $conn->prepare($sql1);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':cname', $cname);
        $stmt->bindParam(':post', $post);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();

        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $sql2 = "UPDATE logs SET pwd=:pwd WHERE logid=:id";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bindParam(':id', $id);
        $stmt2->bindParam(':pwd', $pwd);
        $stmt2->execute();

        echo "hehe updated";
    }
