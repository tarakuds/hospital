<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
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
                    <form action="processbill.php" method="post">

                    <h2>PLANS</h2>
                    
                    <div class="col-1">
                        <div>
                            <p><strong> Basic</strong></p>
                        </div>

                        <div>
                            <p>10,000</p>
                        </div>

                        <div>
                            <p><input type="radio" name="options" value="10000" id="10000">PAY</p>
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
                            <p><input type="radio" name="options" value="50000" id="50000">PAY</p>
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
                            <p><input type="radio" name="options" value="100000" id="100000">PAY</p>
                        </div>

                    </div>
                    <div>
                        <input type="text" name="name" id="">name
                        <input type="text" name="email" id="">email
                    </div>

                    <div>   
                    <!-- <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                     <button type="button" onClick="payWithRave()">Pay Now</button> -->
                        <button type="submit" name="submit">PROCEED</button>
                        <button type="submit" name="Cancel">CANCEL</button>
                    </div>

                    </form>

            </div>

            
    </main>
   
</body>
</html>

<!-- <script>
    const API_publicKey = "<ADD YOUR PUBLIC KEY HERE>";

    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: "user@example.com",
            amount: 2000,
            customer_phone: "234099940409",
            currency: "NGN",
            txref: "rave-123456",
            meta: [{
                metaname: "flightID",
                metavalue: "AP1234"
            }],
            onclose: function() {},
            callback: function(response) {
                var txref = response.tx.txRef; // collect txRef returned and pass to a                  server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.tx.chargeResponseCode == "00" ||
                    response.tx.chargeResponseCode == "0"
                ) { 
                    // redirect to a success page
                    redirect_to("successpaid.php");
                } else {
                    // redirect to a failure page.
                    redirect_to("nopay.php")
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }
</script>
</body>
</html> -->