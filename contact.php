<?php 
if(isset($_POST['submit'])){
    $to = "nareshsahoo053@gmail.com"; // this is your Email address
    $from = $_POST['cf-email']; // this is the sender's Email address
    $full_Name = $_POST['cf-name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $full_Name . " wrote the following:" . "\n\n" . $_POST['cf-message'];
    $message2 = "Here is a copy of your message " . $full_Name . "\n\n" . $_POST['cf-message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail sent successfully!! " . $full_Name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    else {
        echo "sending failed !!";
    }
?>

<!--

<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html> 
Original answer
I wasn't quite sure as to what the question was, but am under the impression that a copy of the message is to be sent to the person who filled in the form.

Here is a tested/working copy of an HTML form




-->


       