<?php 
include"dbcon.php";

///////////////////////////////////////////
//////////////////////////////////////////
/////////////////////////////////////////
///// INSERT DATA AND SEND MESSAGES ////
///////////////////////////////////////
//////////////////////////////////////
/////////////////////////////////////










/// STORE MESSAGES INTO ARRAYS 
$errors= array();
$success= array();


// IF DATA POSTED THEN CALL THE RIGHT FUNCTION

// IF SOMEONE ORDER A TABLE THE CALL BOOK FUNCTON
if(isset($_POST['book']))
{
	book();
}

// BOOK FUCNTION

function book ()
{
	// DECLARE VARIABLE AND STORE DATA 
	global $con, $success,$errors ;

	$name= ($_POST['name']);
	$email= ($_POST['email']);
	$phone = ($_POST['phone']);
	$date= ($_POST['date']);
	$time= ($_POST['time']);
	$people = ($_POST['people']);
	$message = ($_POST['message']);
	

	$subject = 'Someone Have Been Ordered a Table Check Dashboard for More Info ...';

	// INSERT DATA INTO DATABASE

	$qry= "INSERT INTO orders (name, email, phone, res_date, res_time, people, message) VALUES ('$name', '$email', '$phone', '$date', '$time', '$people', '$message')";
	$qry = mysqli_query($con, $qry);

	// IF NOTHING WRONG SEND MESSAGE

	if($qry) 
	{

		$toMail = "contact@saley.ma";
		$header = "From: " . $name . "<". $email .">\r\n";
		$subject = "Someone Preordered A table Please check Dashboard for More info ";
		mail($toMail, $subject, $message, $header);
		array_push($success, " We Have Received Your Order And We Will Contact You Soon");
	}else
	{
		// IF THERE IS SOMETHING WRONG PUSH ERROR MESSAGE 

		array_push($errors, "Something Went Wrong Please Try Again");
	}

}


// IF SOMEONE ORDER A TABLE THE CALL BOOK FUNCTON
if (isset($_POST['send']))
{
	contactUs();
}
 // CONTACT FUNCTION

function contactUs() 
{
	global $con, $success,$errors ;

	$name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

              // Recipient email
    $toMail = "contact@saley.ma";

              // Build email header
    $header = "From: " . $name . "<". $email .">\r\n";
    $send_mail = mail($toMail,$subject, $message, $header);
              // Send email
    if($send_mail) 
    {

    	$querry = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    	$sql = mysqli_query($con, $querry);

        if(!$sql) 
        {
        	die("MySQL query failed.");
        } else 
        {
        	array_push($success, "We Have Recieved Your Message And We Will Contact You As Soon As Possible");
        }
    } else 
    {
    	array_push($errors, "Something Went Wrong Please Try Again");
    	
    }
}


// IF SOMEONE ORDER A TABLE THE CALL BOOK FUNCTON
if(isset($_POST['subscribe']))
{
	subscribers();
}


// SUBSCRIBERS FUCNTION 

function subscribers()
{

	global $con, $success,$errors ;

	$email = $_POST["email"];
    $query= "INSERT INTO subscribers (email) VALUES ('$email')";
    $sql = mysqli_query($con, $query);

    if (!$sql)
    {
    	array_push($errors, "Something Went Wrong Please try Again ...") ;
              
    }else 
    {
    	array_push($errors, "You Have Been Subscribed Successfully, Welcome To Saley Inc News Letter") ;
          
    }

}



function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div style="font:16px red italic ;" class="error">';
			foreach ($errors as $error){
				echo $error .'<br>'. '<br>';
			}
		echo '</div>';
	}
}

function display_success() {
	global $success;

	if (count($success) > 0){
		echo '<div style="font:16px red italic ;" class="error">';
			foreach ($success as $suc){
				echo $suc .'<br>'. '<br>';
			}
		echo '</div>';
	}
}




////////////////////////////////////////////
///////////////////////////////////////////
/////// FETCH DATA FROM DATABASE /////////
/////////////////////////////////////////
////////////////////////////////////////

//DISPLAY ORDERS

/*
function displayOrders () {
	global $con, $success,$errors ;

	$qry = "SELECT * FROM orders DESC";
	$res = mysqli_query($con, $qry);
	$rows = mysqli_fetch_array($res);

	foreach ($rows as $row) 
	{
	 
	}

}

// DISPLAY CONTACT REQUEST


function displayContact () {
	global $con, $success,$errors ;

	$qry = "SELECT * FROM contact DESC";
	$res = mysqli_query($con, $qry);
	$rows = mysqli_fetch_array($res);

	foreach ($rows as $row) 
	{
	 
	}

}

// DISPLAY SUBSCRIBERS


function displaySubscribers () {
	global $con, $success,$errors ;

	$qry = "SELECT * FROM subscribers DESC";
	$res = mysqli_query($con, $qry);
	$rows = mysqli_fetch_array($res);

	foreach ($rows as $row) 
	{
	 
	}

}

*/

?>