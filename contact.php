	<!-- //Inner-Page-Content -->
<?php include('header.php');


if(isset($_REQUEST['submitcontact']))
{

$to = 'ataindigoicon@gmail.com'; // note the comma

// Subject
$subject = 'Al Prince Contact Form Query';

// Message
$message = '
<html>
<head>
  <title>Al Prince</title>
</head>
<body>
  <p>Hi Admin,<br>'.$_REQUEST['name'].' Contact from Al Prince Contact Form.</p>
  <table>
    <tr>
      <th>Title</th><th>Detail</th>
    </tr>
    <tr>
      <td>Name</td><td>'.$_REQUEST['name'].'</td>
    </tr>
    <tr>
      <td>Email</td><td>'.$_REQUEST['email'].'</td>
    </tr>
    <tr>
      <td>Phone</td><td>'.$_REQUEST['phone'].'</td>
    </tr>
    <tr>
      <td>Message</td><td>'.$_REQUEST['message'].'</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
 $headers[] = 'From: Al Prince <info@alprince.com>';
/*$headers[] = 'Cc: birthdayarchive@example.com';
$headers[] = 'Bcc: birthdaycheck@example.com';
*/
// Mail it
$mail = mail($to, $subject, $message, implode("\r\n", $headers));


}

?>

	<!-- Contact -->
	<div class="contact">
		<div class="container">
		<?php if(isset($mail)){echo "Message Sent Successfully";}?>
			<form class="contact_form" method="post">

				<div class="message">
					<div class="col-md-6 col-sm-6 grid_6 c1">
						<input type="text" class="text" name="name" placeholder="Name" required="" >
						<input type="email" class="text" name="email" placeholder="Email" required="" >
						<input type="text" class="text" name="phone" placeholder="Phone" required="" >
					</div>

					<div class="col-md-6 col-sm-6 grid_6 c1">
						<textarea placeholder="Message" required="" name="message"></textarea>
					</div>
					<div class="clearfix"> </div>
				</div>

				<input type="submit" class="more_btn" name="submitcontact" value="Send Message">
			</form>
		</div>
	</div>
	<!-- //Contact -->

	
	<!-- LOCATIN -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22702.22744502486!2d11.113366067229226!3d44.662878362361056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc3eca9065c15%3A0x12ec8a03aadae866!2s40019+Sant&#39;Agata+Bolognese+BO%2C+Italy!5e0!3m2!1sen!2sin!4v1451281303075" allowfullscreen></iframe>
	</div>
	<!-- //LOCATIN -->
<?php include('footer.php');?>

	
	<!-- Footer -->
 