<?php
    function connectToDatabase()
    {
        $connect = mysqli_connect('localhost', 'root', '', 'access_for_all_db') 
        or die("Connection Failed:" .mysqli_connect_error());
        return $connect;
    }
        
    function checkLogin()
    {
        
    }

    function createNewLogin()
    {
        $conn = connectToDatabase();
        $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $firstname, $lastname, $email);

        // set parameters and execute
        $firstname = "John";
        $lastname = "Doe";
        $email = "john@example.com";
        $stmt->execute();
    }

    function addQuestionToSurvey()
    {

    }

    function removeQuestionFromSurvey()
    {

    }


    function checkSession ($path) {

        //Expire the session if user is inactive for 30
        //minutes or more.
        $expireAfter = 200000; //this value is in minutes
    
        //Check the interval since "last action" session
        if(isset($_SESSION['last_action'])){
            
            //Figure out how many seconds have passed
            //since the user was last active.
            $secondsInactive = time() - $_SESSION['last_action'];
            
            //Convert our minutes into seconds.
            $expireAfterSeconds = $expireAfter * 10;
            
            //Check to see if they have been inactive for too long.
            if($secondsInactive >= $expireAfterSeconds){
                //User has been inactive for too long.
                //Kill their session.
                session_unset();
                session_destroy();
                header("Location:".$path);//return to the login page
            }
        }
        $_SESSION['last_action'] = time(); //this variable is set for the very first time upon login
        $url=$_SERVER['REQUEST_URI'];//to obtain the current page
        $timeOut = ($expireAfter*10)+1; //1 second after the max session allowed. 
        header("Refresh: $timeOut; URL=$url"); //refresh the screen
    }

    function logOut() 
    {
        session_start();
        session_destroy();
        header('Location: homePage.php');
        exit;
    }