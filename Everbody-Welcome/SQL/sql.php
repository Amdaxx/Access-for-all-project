<?php
   function connectToDatabase()
   {    

    /*
       $servername = 'localhost';
       $username = 'root';
       $password = '';
       $dbname = 'LASTDBXX';

       

       try {
           $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
        }
        catch (PDOException $e) {
    
               $conn = mysqli_connect($servername, $username, '', $dbname);
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
                   type VARCHAR(15) NOT NULL ,
                   numberofaudits NOT NULL
               )";
               $sql4 = "CREATE TABLE questions(
                   question VARCHAR(50) NOT NULL
                   )";
               $sql5 = "CREATE TABLE audits(
                   venueid VARCHAR(10) NOT NULL ,
                   question VARCHAR(50) NOT NULL ,
                   answer VARCHAR(3) NOT NULL ,
                   comment VARCHAR(40) ,
                   proof VARCHAR(30) ,
                   auditnumber INTEGER NOT NULL 
               )";
               mysqli_query($conn, $sql1);
               mysqli_query($conn, $sql2);   
               mysqli_query($conn, $sql3);   
               mysqli_query($conn, $sql4);   
               mysqli_query($conn, $sql5);
                         
           }
          */

        $servername = 'afpproject-server.mysql.database.azure.com';
        $dbname = 'afadb';
        $username = 'tkgwwyrhag';
        $password = 'Blackdown12345';
        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      
        //return new mysqli('afpproject-server.mysql.database.azure.com', 'tkgwwyrhag', 'Blackdown12345', 'afadb');

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
              header('Location:../business/businessLandingPage.php?id='.$id);
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
                    header('Location: ../admin/adminLandingPage.php?id='.$user['logid']);
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
        header('Location: /Everbody-Welcome/public/landingPage.php');
        exit;
    }



    function createVenue($logid, $VenueName, $address, $postcode, $city, $type)
    {
        try{
            $premium = "NO";
            $conn = connectToDatabase();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $numberofaudit = 0;
            $stmt = $conn->prepare("INSERT INTO venues (venueid, logid, venuename, address, postcode, city, type, premium, numberofaudits) 
            VALUES (:id, :logid, :venuename, :address, :postcode, :city, :type, :premium, :numaudit)");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':logid', $logid);
            $stmt->bindParam(':venuename', $VenueName);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':postcode', $postcode);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':premium', $premium);
            $stmt->bindParam(':numaudit', $numberofaudit);
            $id = rand(1,9999999);
            $stmt->execute();
            header('Location: ../business/businessLandingPage.php');
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

    function viewBusiness()
    {
            $conn = connectToDatabase();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM businessinfos");
            $stmt->execute();
            $res = $stmt->fetchAll();
            return $res;
    }


    function viewVenues2($id)
    {
            $conn = connectToDatabase();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM venues WHERE venueid=:id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $res = $stmt->fetchAll();
            return $res;
       
    }


    function updateBusinessDetails($id, $cname, $post, $address, $phone)
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
        header('Location:../business/businessLandingPage.php');
    }

    function displayBusinessDetails($id)
    {
        $conn = connectToDatabase();
        $sql = "SELECT * FROM businessinfos WHERE logid=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $res = $stmt->fetchAll();
        
        $sql1 = "SELECT * FROM logs WHERE logid=:id";
        $stmt2 = $conn->prepare($sql1);
        $stmt2->bindParam(':id', $id);
        $stmt2->execute();
        $res2 = $stmt2->fetchAll();

        $sql3 = "SELECT count(*) FROM venues WHERE logid=:id"; 
        $result3 = $conn->prepare($sql3); 
        $result3->bindParam(':id', $id);
        $result3->execute(); 
        $count = $result3->fetchColumn(); 

        $result = array($res[0]['companyName'], $res[0]['postcode'], $res[0]['address'], $res[0]['phone'], $res2[0]['email'], $count);
        return $result;
    }

    function updatePassword($id, $pwd)
    {
        $conn = connectToDatabase();
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $sql = "UPDATE logs SET pwd=:pwd WHERE logid=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->execute();
    }

  

    function updateVenue($id, $vname, $post, $address, $type)
    {
        $conn = connectToDatabase();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql1 = "UPDATE venues SET venuename=:vname, postcode=:post, city=:city, address=:address, type=:type WHERE venueid=:id";
        $stmt = $conn->prepare($sql1);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':vname', $vname);
        $stmt->bindParam(':post', $post);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':type', $type);
        $stmt->execute();
        header('Location:../business/viewVenues.php?id='.$id);
    }

 
    function readQuestions()
    {
        $conn = connectToDatabase();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM questions");
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }

    function recordGeneralSurvey($venueid, $data, $auditnumber) 
    {
        $conn = connectToDatabase();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        foreach($data as $row)
        {
            $stmt = $conn->prepare("INSERT INTO generalsurveyresults (venueid, question, answer, auditnumber) 
            VALUES (:venueid, :question, :answer, :auditnumber)");
            $stmt->bindParam(':venueid', $venueid);
            $stmt->bindParam(':question', $row['question']);
            $stmt->bindParam(':answer', $row['response']);
            $stmt->bindParam(':auditnumber', $auditnumber);
            $stmt->execute();
        }
            $type = "General Survey";
            $date = date('d-m-y h:i:s');
            $stmt = $conn->prepare("INSERT INTO recordaudits (venueid, auditnumber, type, dates) 
            VALUES (:venueid, :auditnumber, :type, :dates)");
            $stmt->bindParam(':venueid', $venueid);
            $stmt->bindParam(':auditnumber', $auditnumber);
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':dates', $date);
            $stmt->execute();

            $sql1 = "UPDATE venues SET numberofaudits=:numberofaudits WHERE venueid=:id";
            $stmt2 = $conn->prepare($sql1);
            $stmt2->bindParam(':id', $venueid);
            $stmt2->bindParam(':numberofaudits', $auditnumber);
            $stmt2->execute();

            header('Location: ../business/generalSurveyResults.php?venueid=' . $venueid . '&number=' . $auditnumber);
        }

    function recordAdvancedSurvey($venueid, $data, $auditnumber) 
    {

        $conn = connectToDatabase();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        foreach($data as $row)
        {
            $stmt = $conn->prepare("INSERT INTO audits (venueid, question, answer, comment, proof, auditnumber) 
            VALUES (:venueid, :question, :answer, :comment, :proof, :auditnumber)");
            $stmt->bindParam(':venueid', $venueid);
            $stmt->bindParam(':question', $row['question']);
            $stmt->bindParam(':answer', $row['response']);
            $stmt->bindParam(':comment', $row['comment']);
            $stmt->bindParam(':proof', $row['proof']);
            $stmt->bindParam(':auditnumber', $auditnumber);
            $stmt->execute();
        }

        $type = "Advanced Survey";
        $date = date('d-m-y h:i:s');
        $stmt = $conn->prepare("INSERT INTO recordaudits (venueid, auditnumber, type, dates) 
        VALUES (:venueid, :auditnumber, :type, :dates)");
        $stmt->bindParam(':venueid', $venueid);
        $stmt->bindParam(':auditnumber', $auditnumber);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':dates', $date);
        $stmt->execute();

        $sql1 = "UPDATE venues SET numberofaudits=:numberofaudits WHERE venueid=:id";
        $stmt2 = $conn->prepare($sql1);
        $stmt2->bindParam(':id', $venueid);
        $stmt2->bindParam(':numberofaudits', $auditnumber);
        $stmt2->execute();

        header('Location:../business/pastaudits.php');      
    }

    function getGeneralSurveyResult($venueid, $auditnumber)
    {
        $conn = connectToDatabase();
        $sql = "SELECT * FROM generalsurveyresults  WHERE venueid=:id AND auditnumber=:auditnumber ";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $venueid);
        $stmt->bindParam(':auditnumber', $auditnumber);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }

    function getNumberOfAudits($venueid)
    {
        $conn = connectToDatabase();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT numberofaudits FROM venues WHERE venueid=:venueid");
        $stmt->bindParam(':venueid', $venueid);
        $stmt->execute();
        $res = $stmt->fetch();
        return $res['numberofaudits'];
    }


    function deleteVenue()
    {
        
    }

    function getAudits($venueid)
    {
        $conn = connectToDatabase();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM recordaudits WHERE venueid=:id");
        $stmt->bindParam(':id', $venueid);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }

    function displayAllVenues()
    {
        $conn = connectToDatabase();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM venues WHERE numberofaudits!=0");
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }

 
    function getAllVenues()
    {
        $conn = connectToDatabase();
        $stmt = $conn->prepare("SELECT * FROM venues");
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }
    
    function filterVenues($type, $city, $postcode)
    {
        $conn = connectToDatabase();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (isset($type) && isset($city) && isset($postcode)) {
            // All three variables are set
            // Perform your search function with all three variables
            $stmt = $conn->prepare("SELECT * FROM venues WHERE type=:type, city=:city, postcode=:postcode ");
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':postcode', $postcode);
            $stmt->execute();
            $res = $stmt->fetchAll();
            return $res;

        } elseif (isset($type) && isset($city)) {
            // Only $var1 and $var2 are set
            // Perform your search function with $var1 and $var2
            $stmt = $conn->prepare("SELECT * FROM venues WHERE type=:type, city=:city ");
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':city', $city);        
            $stmt->execute();
            $res = $stmt->fetchAll();
            return $res;    
        } elseif (isset($type) && isset($postcode)) {
            // Only $var1 and $var3 are set
            // Perform your search function with $var1 and $var3
            $stmt = $conn->prepare("SELECT * FROM venues WHERE type=:type, postcode=:postcode ");
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':postcode', $postcode);
            $stmt->execute();
            $res = $stmt->fetchAll();
            return $res;
        } elseif (isset($city) && isset($postcode)) {
            // Only $var2 and $var3 are set
            // Perform your search function with $var2 and $var3
            $stmt = $conn->prepare("SELECT * FROM venues WHERE city=:city, postcode=:postcode ");
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':postcode', $postcode);
            $stmt->execute();
            $res = $stmt->fetchAll();
            return $res;
        } elseif (isset($type)) {
            // Only $var1 is set
            // Perform your search function with $var1
            $stmt = $conn->prepare("SELECT * FROM venues WHERE type=:type");
            $stmt->bindParam(':type', $type);
            $stmt->execute();
            $res = $stmt->fetchAll();
            return $res;
        } elseif (isset($city)) {
            // Only $var2 is set
            // Perform your search function with $var2
            $stmt = $conn->prepare("SELECT * FROM venues WHERE city=:city ");
            $stmt->bindParam(':city', $city);
            $stmt->execute();
            $res = $stmt->fetchAll();
            return $res;
        } elseif (isset($postcode)) {
            // Only $var3 is set
            // Perform your search function with $var3
            $stmt = $conn->prepare("SELECT * FROM venues WHERE postcode=:postcode ");
            $stmt->bindParam(':postcode', $postcode);
            $stmt->execute();
            $res = $stmt->fetchAll();
            return $res;
        } else {
            // None of the variables are set
            // Handle this case as appropriate for your application
            getAllVenues();
        }
    }


    function searchVenueByName($name)
    {
        $conn = connectToDatabase();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM venues WHERE venuename=:name");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;

    }

    function goPremium($venueid)
    {
        $premium = "YES";
        $conn = connectToDatabase();
        $sql1 = "UPDATE venues SET premium=:premium WHERE venueid=:venueid";
        $stmt = $conn->prepare($sql1);
        $stmt->bindParam(':premium', $premium);
        $stmt->bindParam(':venueid', $venueid);
        $stmt->execute();
    }

    function viewQuestions($surveytype)
    {
        $conn = connectToDatabase();
        $sql = "SELECT * FROM questions  WHERE surveytype=:surveytype";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':surveytype', $surveytype);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }


    function addQuestion($question, $type, $surveytype)
    {   
        $conn = connectToDatabase();
        $stmt = $conn->prepare("INSERT INTO questions (question, type, surveytype) 
        VALUES (:question, :type, :surveytype)");
        $stmt->bindParam(':question', $question);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':surveytype', $surveytype);
        $stmt->execute();
    }

    function deleteQuestion($question, $type, $surveytype)
    {
        $conn = connectToDatabase();
        $sql = "DELETE FROM questions  WHERE question=:question AND type=:type AND surveytype=:surveytype";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':question', $question);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':surveytype', $surveytype);
        $stmt->execute();
    }
