<?php include('include/home_header.php'); 

$status = $_POST["status"];
$firstname = $_POST["firstname"];
$amount = $_POST["amount"];
$txnid = $_POST["txnid"];
$posted_hash = $_POST["hash"];
$key = $_POST["key"];
$productinfo = $_POST["productinfo"];
$email = $_POST["email"];
$groupId = $_POST["city"];
$salt = "GQs7yium";
 
if (isset($_POST["additionalCharges"])) {
    $additionalCharges = $_POST["additionalCharges"];
    $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
} else {
 
    $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
}
$hash = hash("sha512", $retHashSeq);
 
if ($hash != $posted_hash) {
   $msg = "Invalid Transaction. Please try again";
} else {
    $msg = "<h3>Your order status is " . $status . ".</h3>";
}

$pdo = new PDO("mysql:host=localhost;dbname=lion", "root", "");

$data = [
    'payment_status' => $status,
    'txnid' => $txnid,
    'mode' => $_POST['bankcode'],
    'payment_date_time' => $_POST['addedon'],
    'groupId' => $groupId,
];
$sql = "UPDATE users SET payment_status=:payment_status, txnid=:txnid, mode=:mode, payment_date_time=:payment_date_time  WHERE groupId=:groupId";
$stmt= $pdo->prepare($sql);
$update = $stmt->execute($data);

if($update){
	$stmt = $pdo->prepare("select * FROM users WHERE groupId=:groupId");
	$stmt->execute(['groupId' => $groupId]); 
	$users = $stmt->fetchAll();
}
$mainSection = '';
$header = '<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
            <tr>
                <td align="center" valign="top">
                    <table border="1" cellpadding="10" cellspacing="0" width="600" id="emailContainer">
                        <tr>
                            <td align="center" valign="top" colspan="10" >
                               <strong>Participant Details</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Gender</td>
                            <td>Age Group</td>
                            <td>City</td>
                            <td>Qualification</td>
                            <td>Occupation</td>
                            <td>Language</td>
                            <td>Batch</td>
                        </tr>';
            foreach ($users as $value) {
			$mainSection .= "<tr><td>".$value['full_name']."</td><td>".$value['email']."</td><td>".$value['phone_number']."</td><td>".$value['gender']."</td><td>".$value['age']."</td><td>".$value['city']."</td><td>".$value['qualification']."</td><td>".$value['occupation']."</td><td>".$value['language']."</td><td>".$value['batch']."</td></tr>";
				    }
             $footer =  '<tr>
                            <td align="center" valign="top" colspan="10">
                                <strong>Participant Details</strong>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">Total Participant</td>
                            <td colspan="2">Total Amount</td>
                            <td colspan="3">Payment Status</td>
                            <td colspan="2">Date</td>
                        </tr>
                        <tr>
                            <td colspan="3">'.$_POST['amount'].'</td>
                            <td colspan="2">'.$_POST['amount'].'</td>
                            <td colspan="3">'.$_POST["status"].'</td>
                            <td colspan="2">'.$_POST['addedon'].'</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>';
	$myhtml = $header.$mainSection.$footer;
	$subject = "Lion Quest - Participant Details";
	$toadmin = "kamalshrm97@gmail.com";
    // Always set content-type when sending HTML email
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// More headers
	$headers .= 'From: <noreply@lionsquestinindia.org>' .'Lion Quest';
	mail($toadmin,$subject,$myhtml,$headers);
?>
<div class="template_home master_wrapper customewrap" >  
   <section id="" class="relative ">
      <div class="aboutbanner relative">
      </div>
      <div class="clearfix"></div>
   </section>
<section class="ls columns_padding_25 section_padding_top_50 section_padding_bottom_50" style="padding: 50px 0px;">
	<div class="container contact_us_page">
		<div class="row text-center">
			<div class="col-md-10 col-md-offset-1 to_animate" data-animation="scaleAppear">
				<div class="text-center">
					<?php if($_POST["status"] == 'success'){  ?>
				        <img width="50px" src="assets/images/success.png">
				        <h4 class="text-success">SUCCESS</h4>
				    <?php } else{  ?>
				    	<img width="50px" src="assets/images/failure.png">
				        <h4 class="text-danger">FAILURE</h4>
				    <?php }  ?>
				</div>
				<div class="col-md-8 col-md-offset-2" style="border: 1px solid #eee; box-shadow: 1px 1px 10px #eee; padding: 15px;">
				   <table class="table table-responsive">
				        <tbody><tr>
				            <td>Transaction Number</td>
				            <td><span class="txnm"><?php echo $_POST['txnid'];?></span></td>
				        </tr>
				        <tr>
				            <td>Order Id</td>
				            <td><span class="fulname"><?php echo $_POST['mihpayid'];?></span></td>
				        </tr>
				        <tr>
				            <td>Amount</td>
				            <td><span class="amount"><?php echo $_POST['amount'];?></span></td>
				        </tr>
				        <tr>
				            <td>Payment Status</td>
				            <td>
				            	<?php if($_POST['status'] == 'success'){  ?>
							        <span class="address" style="color:green">SUCCESS</span>
							    <?php } else{  ?>
							    	<span class="address" style="color:red">FAILURE</span>
							    <?php }  ?>
				            </td>
				        </tr>
				         <?php if($_POST['bankcode'] != ''){  ?>               
				        <tr>
				            <td>Bank CODE</td>
				            <td>
							    <span class="address"><?php echo $_POST['bankcode'];?></span>
				            </td>
				        </tr>
				        <?php } ?>
				        <?php if($_POST['addedon'] != ''){  ?>
				        <tr>
				            <td>Transaction Date</td>
				            <td>
							   <span class="address"><?php echo $_POST['addedon'];?></span>
				            </td>
				        </tr>
				        <?php }  ?>
				        <tr>
				            <td>Transaction Id</td>
				            <td>
				            	<span class="country"><?php echo $_POST['payuMoneyId'];?></span>
				            </td>
				        </tr>
				       <!--  <tr>
				            <td>Message</td>
				            <td><span class="pincode"><?php //echo $msg;?></span></td>
				        </tr> -->
				    </tbody></table>
				</div>		
			</div>
		</div>
	</div>
</section>
</div>
<?php include('include/footer.php'); ?>