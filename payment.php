<?php
$pdo = new PDO("mysql:host=localhost;dbname=lion", "root", "");
$groupId = mt_rand(10000,99999);   
    $courseFees = 1099;
    if($_POST['participant'] == 3){
        $courseFees = 900*$_POST['numberOfUser'];
    }else if($_POST['participant'] == 2){
        $courseFees = 999;
    }else{
        $courseFees = 1099;
    };
for($i = 0; $i < count($_POST['full_name']); $i++){
    $data = [
        'full_name'      => $_POST['full_name'][$i],
        'phone'          => $_POST['phone_number'][$i],
        'email'          => $_POST['email'][$i],
        'city'           => $_POST['city'][$i],
        'gender'         => $_POST['gender'][$i],
        'age'            => $_POST['age'][$i],
        'qualification'  => $_POST['qualification'][$i],
        'occupation'     => $_POST['occupation'][$i],
        'language'       => $_POST['language'][$i],
        'batch'          => $_POST['batch'][$i],
        'total_amount'   => $courseFees,
        'payment_status' => '',
        'participant'    => $_POST['numberOfUser'],
        'txnid'          =>'',
        'mode'           =>'',
        'payment_date_time' =>'',
        'groupId' =>$groupId,
    ];

    $sql = "INSERT INTO users (full_name, phone, email, city, gender, age, qualification, occupation, language, batch, total_amount, payment_status, participant, txnid, mode, payment_date_time, groupId) VALUES (:full_name, :phone, :email, :city, :gender, :age, :qualification, :occupation, :language, :batch, :total_amount, :payment_status, :participant, :txnid, :mode, :payment_date_time, :groupId)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);
}
define('MERCHANT_KEY', 'nRXlgiEl');
define('SALT', '2OE8KJKSiE');
define('PAYU_BASE_URL', 'https://secure.payu.in');    //Testing url Use in development mode
//define('PAYU_BASE_URL', 'https://secure.payu.in');  //actual URL Use in production mode
//http://localhost/lion_new/payment.php
define('SUCCESS_URL', 'http://localhost/lion_new/response.php');  //order sucess url replace with your complete url
define('FAIL_URL', 'http://localhost/lion_new/response.php');    //add complete url 
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$email = $_POST['email'][0];
$mobile = $_POST['phone_number'][0];
$firstName = $_POST['full_name'][0];
$totalCost = $courseFees;
$hash         = '';
$hash_string = MERCHANT_KEY."|".$txnid."|".$totalCost."|"."productinfo|".$firstName."|".$email."|||||||||||".SALT;
$hash = strtolower(hash('sha512', $hash_string));
$action = PAYU_BASE_URL . '/_payment'; 
 
?>
<form action="<?php echo $action; ?>" method="post" name="payuForm" id="payuForm" style="display: none">
    <input type="hidden" name="key" value="<?php echo MERCHANT_KEY ?>" />
    <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
    <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
    <input name="amount" type="number" value="<?php echo $totalCost; ?>" />
    <input type="hidden" name="firstname" id="firstname" value="<?php echo $firstName; ?>" />
    <input type="email" name="email" id="email" value="<?php echo $email; ?>" />
    <input type="hidden" name="phone" value="<?php echo $mobile; ?>" />
    <textarea name="productinfo"><?php echo "productinfo"; ?></textarea>
    <input type="hidden" name="surl" value="<?php echo SUCCESS_URL; ?>" />
    <input type="hidden" name="furl" value="<?php echo  FAIL_URL?>"/>
    <input type="hidden" name="service_provider" value="payu_paisa"/>
    <input type="hidden" name="city" id="city" value="<?php echo $groupId; ?>"/>
</form>

<script type="text/javascript">
    var payuForm = document.forms.payuForm;
    payuForm.submit();
</script>
