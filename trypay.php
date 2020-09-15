<?php
    include("nav/nav.php");
?>

<form action="" method="post">
    <div>
        <h2>PAY YOUR BILL</h2>
    </div>
    <div>
        <p>NAME: <input type="text" name="name" id=""></p>
        <p>Email: <input type="text" name="email" id=""></p>
    </div>
   
   
  <button type="button" style="cursor:pointer;" value="Pay Now" name="submit" id="submit">Pay Now</button>
</form>

<?php
 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $pay = $_POST['options'];

    $_SESSION['options'] = $pay;

//  }else{
//     echo "transaction cancelled";
//     redirect_to("paybill.php");
}
?>


<script type="text/javascript" src="http://flw-pms-dev.eu-west-1.elasticbeanstalk.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
<script>
     document.addEventListener("DOMContentLoaded", function(event) {
  document.getElementById("submit").addEventListener("click", function(e) {
    var PBFKey = "FLWPUBK-aa82cac8ee08f5bb206f937db274081a-X";
    
    getpaidSetup({
      PBFPubKey: PBFKey,
      customer_email: "user@example.com",
      customer_firstname: "Temi",
      customer_lastname: "Adelewa",
      custom_description: "Pay Internet",
      custom_logo: "http://localhost/communique-3/skin/frontend/ultimo/communique/custom/images/logo.svg",
      custom_title: "Communique Global System",
      amount: 2000,
      customer_phone: "234099940409",
      country: "NG",
      currency: "NGN",
      txref: "rave-123456",
      integrity_hash: "6800d2dcbb7a91f5f9556e1b5820096d3d74ed4560343fc89b03a42701da4f30",
      onclose: function() {},
      callback: function(response) {
        var flw_ref = response.tx.flwRef; // collect flwRef returned and pass to a                  server page to complete status check.
        console.log("This is the response returned after a charge", response);
        if (
          response.tx.chargeResponseCode == "00" ||
          response.tx.chargeResponseCode == "0"
        ) {
          // redirect to a success page
        } else {
          // redirect to a failure page.
        }
      }
    });
  });
});



</script>