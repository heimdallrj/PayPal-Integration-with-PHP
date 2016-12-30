<?php
/**
 *
 * @package PayPal Integration with PHP
 * @author Ind(_thinkholic) | 2015-01
 *
 * @credits http://www.phpgang.com/how-to-integrate-payment-system-with-paypal_249.html
 * @credits http://jdmweb.com/how-to-easily-integrate-a-paypal-checkout-with-php
 * @credits https://developer.paypal.com/docs/classic/paypal-payments-standard/integration-guide/Appx_websitestandard_htmlvariables/
 *
 */

# App Configs 
$baseURL = '<put base url here>'; // Base URL

# PayPal API Configs
$apiURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; // SandBox Paypal API URL (Live URL: https://www.paypal.com/cgi-bin/webscr)
$merchantID = '<put merchant email ID here>';

# PayPal UI Parms
$cppHeaderImage = 'https://www.paypalobjects.com/webstatic/developer/logo2_paypal_developer_1x.png';

# Redirect Configs
$returnURL = $baseURL.'/success.php';
$cancelURL = $baseURL.'/fail.php';

# Transaction Info (Custom)
$transactionID = 'TRANSACTION_CODE';

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Integration with PHP (Demo)</title>
    <link rel="stylesheet" href="">
</head>

<body>

    <h1>PayPal Integration with PHP (Demo)</h1>
    <p><a href="https://developer.paypal.com/docs/classic/paypal-payments-standard/integration-guide/Appx_websitestandard_htmlvariables/" target="_blank">PayPal Developer Docs</a></p>
    <hr />
    
    <h4>Welcome, Guest User</h4>
    
    <div class="cart">
        
        <div class="product">
                
            <p class="name">PayPal Sandbox Payment Prodcut</p>
            
            <p class="price">Price: 10 USD</p>
            
            <form id="PayPla_Checkout" action="<?php print $apiURL; ?>" method="post">
            
            	<input type="hidden" name="cmd" value="_xclick">
            
                <input type="hidden" name="business" value="<?php print $merchantID; ?>">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="handling" value="0">
                
                <input type="hidden" name="no_shipping" value="1">
                
                <input type="hidden" name="cpp_header_image" value="<?php print $cppHeaderImage; ?>">
                
                <input type="hidden" name="custom" value="<?php print $transactionID; ?>">
                
                <input type="hidden" name="item_name" value="Item Label">
                <input type="hidden" name="item_number" value="<?php print $transactionID; ?>">
                <input type="hidden" name="amount" value="10">
                           
                <input type="hidden" name="cancel_return" value="<?php print $cancelURL; ?>">
                <input type="hidden" name="return" value="<?php print $returnURL; ?>">
                <input type="hidden" name="cbt" value="Return to Merchant">
                
                <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                
                <p><img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"></p>
                
            </form> 
            
        </div> <!--/product-->
        
    </div> <!--/cart-->

</body>
</html>
