<?php
    include("nav/nav.php");
    include("function/redirect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">

    <title>Pay Bill | SNH </title>
</head>
<body>
    <main>
            <h2>PAY BILLS</h2>
            <P>Kindly select your preferred plan</P>

            <div class="main_container">
                    <form action="#" method="post">

                    <h2>PLANS</h2>
                    
                    <div class="col-1">
                        <div>
                            <p><strong> Basic</strong></p>
                        </div>

                        <div>
                            <p>10,000</p>
                        </div>

                        <div>
                            <p><input type="radio" name="options" id="10000">PAY</p>
                        </div>

                    </div>


                    <div class="col-2">
                    <div>
                            <p><strong> Standard</strong></p>
                        </div>

                        <div>
                            <p>50,000</p>
                        </div>

                        <div>
                            <p><input type="radio" name="options" id="50000">PAY</p>
                        </div>

                    </div>


                    <div class="col-3">
                    <div>
                            <p><strong> Premium </strong></p>
                        </div>

                        <div>
                            <p>100,000</p>
                        </div>

                        <div>
                            <p><input type="radio" name="options" id="100000">PAY</p>
                        </div>

                    </div>
                    <div>
                        <input type="text" name="name" id="">name
                        <input type="text" name="email" id="">email
                    </div>

                    <div>   
                    <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                     <button type="button" onClick="payWithRave()">Pay Now</button>
                        <button type="submit" name="submit">PROCEED</button>
                        <button type="submit" name="Cancel">CANCEL</button>
                    </div>

                    </form>

                    </div>

            
</main>

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
      amount: 50000,
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
          redirect_to("successpaid.php");

        } else {
          // redirect to a failure page.
          redirect_to("nopay.php");
        }
      }
    });
  });
});



</script>

          

    <!-- / -->
    
</body>
</html>