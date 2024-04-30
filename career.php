	<!-- //Inner-Page-Content -->
<?php include('header.php');

 



















if(isset($_REQUEST['submitcontact']))
{
$time = strtotime(date('h:i:s'));
$cvimage = $time.$_FILES['cvimage']['name'];
$profileimage = $_SERVER['DOCUMENT_ROOT']."".str_replace("career.php","",$_SERVER['SCRIPT_NAME'])."cvs/".$cvimage; 

		if(move_uploaded_file($_FILES["cvimage"]["tmp_name"],$profileimage))
		{
			
		}
 
$to = "danish.172@gmail.com";
$subject = "New Application For Al-Prince Job";
$from = "admin@alprince.com";
$headers = "From: ".$_REQUEST['name']."<".$from.">\r\n";
$headers .= "MIME-Version: 1.0\r\n"
  ."Content-Type: multipart/mixed; boundary=\"1a2a3a\"";
 
$message .= "If you can see this MIME than your client doesn't accept MIME types!\r\n"
  ."--1a2a3a\r\n";
 
$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
  ."Content-Transfer-Encoding: 7bit\r\n\r\n";
  
  $message .= "<p>Hi Admin,<br>".$_REQUEST['name']." send resume from Al Prince Contact Form.</p>
  <table>
    <tr>
      <th>Title</th><th>Detail</th>
    </tr>
    <tr>
      <td>Apply For</td><td>".$_REQUEST['applyfor']."</td>
    </tr>
    <tr>
      <td>Name</td><td>".$_REQUEST['name']."</td>
    </tr>
    <tr>
      <td>Email</td><td>".$_REQUEST['email']."</td>
    </tr>
    <tr>
      <td>Phone</td><td>".$_REQUEST['phone']."</td>
    </tr>
    <tr>
      <td>Message</td><td>".$_REQUEST['message']."</td>
    </tr>
  </table>";
  
  
  $message .= "\r\n"
  ."--1a2a3a\r\n";
 
$file = file_get_contents("cvs/".$cvimage);
 
$message .= "Content-Type: image/jpg; name=\"".$cvimage."\"\r\n"
  ."Content-Transfer-Encoding: base64\r\n"
  ."Content-disposition: attachment; file=\"".$cvimage."\"\r\n"
  ."\r\n"
  .chunk_split(base64_encode($file))
  ."--1a2a3a--";
 
// Send email
 
$success = mail($to,$subject,$message,$headers);
   if (!$success) {
  $msg = "Mail to " . $to . " failed .";
   }else {
  $msg = "Success : Mail was send successfully.";
   }





}

?>

	<!-- Contact -->
	<div class="contact">
		<div class="container">
		
		<div class="col-md-6">

		<h2 class="career">Available Jobs</h2>
		
		<ul class="establish careerleft">
					<li>Asst Director</li>
					<li>Asst Manager</li>
					<li>Sr. Accountant</li>
					<li>Office Boy</li>
 				</ul>
		
		</div>
		
		<div class="col-md-6 col-sm-6 grid_6">
		<?php if(isset($msg)){echo $msg;}?>
			<form class="contact_form career" method="post" enctype="multipart/form-data">

				<div class="message">
					<div class="col-md-12 col-sm-12 grid_12 c1">
						<select name="applyfor" required="" class="form-control">
							<option value=""> -- Select Job -- </option>
							<option value="Asst Director">Asst Director</option>
							<option value="Asst Manager">Asst Manager</option>
							<option value="Sr. Accountant">Sr. Accountant</option>
							<option value="Office Boy">Office Boy</option>
						</select><br />
						<input type="text" class="text" name="name" placeholder="Email" required="" >
						<input type="email" class="text" name="email" placeholder="Email" required="" >
						<input type="text" class="text" name="phone" placeholder="Phone" required="" >
					</div>

					<div class="col-md-12 col-sm-12 grid_12 c1" style="float:right">
					<input type="file" name="cvimage" />
						<textarea placeholder="Message" required="" name="message"></textarea>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				
				<div class="col-md-12 col-sm-12 grid_12 c1" style="float:right">
				<input type="submit" class="more_btn" name="submitcontact" value="Send Message">
			
			</div>

			</form>
			</div>
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
 