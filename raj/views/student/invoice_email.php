<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>

* {
    margin: 0;
    padding: 0;
    font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    box-sizing: border-box;
    font-size: 14px;
}

img {
    max-width: 100%;
}

body {
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: none;
    width: 100% !important;
    height: 100%;
    line-height: 1.6;
}

table td {
    vertical-align: top;
}

/* -------------------------------------
    BODY & CONTAINER
------------------------------------- */
body {
    background-color: #f6f6f6;
}

.body-wrap {
    background-color: #f6f6f6;
    width: 100%;
}

.container {
    display: block !important;
    max-width: 600px !important;
    margin: 0 auto !important;
    /* makes it centered */
    clear: both !important;
}

.content {
    max-width: 600px;
    margin: 0 auto;
    display: block;
    padding: 20px;
}

.main {
    background: #fff;
    border: 1px solid #e9e9e9;
    border-radius: 3px;
}

.content-wrap {
    padding: 20px;
}

.content-block {
    padding: 0 0 20px;
}

.header {
    width: 100%;
    margin-bottom: 20px;
}

.footer {
    width: 100%;
    clear: both;
    color: #999;
    padding: 20px;
}
.footer a {
    color: #999;
}
.footer p, .footer a, .footer unsubscribe, .footer td {
    font-size: 12px;
}

h1, h2, h3 {
    font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    color: #000;
    margin: 40px 0 0;
    line-height: 1.2;
    font-weight: 400;
}

h1 {
    font-size: 32px;
    font-weight: 500;
}

h2 {
    font-size: 24px;
}

h3 {
    font-size: 18px;
}

h4 {
    font-size: 14px;
    font-weight: 600;
}

p, ul, ol {
    margin-bottom: 10px;
    font-weight: normal;
}
p li, ul li, ol li {
    margin-left: 5px;
    list-style-position: inside;
}

a {
    color: #1ab394;
    text-decoration: underline;
}

.profile_button{
    background-color: white;
    color: black;
    border: 2px solid rgb(72,0,87,0.7);
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 20px;
}

.btn-primary {
    text-decoration: none;
    color: #FFF;
    background-color: #1ab394;
    border: solid #1ab394;
    border-width: 5px 10px;
    line-height: 2;
    font-weight: bold;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    border-radius: 5px;
    text-transform: capitalize;
}
.last {
    margin-bottom: 0;
}

.first {
    margin-top: 0;
}

.aligncenter {
    text-align: center;
}

.alignright {
    text-align: right;
}

.alignleft {
    text-align: left;
}

.clear {
    clear: both;
}

.alert {
    font-size: 16px;
    color: #fff;
    font-weight: 500;
    padding: 20px;
    text-align: center;
    border-radius: 3px 3px 0 0;
}
.alert a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    font-size: 16px;
}
.alert.alert-warning {
    background: #f8ac59;
}
.alert.alert-bad {
    background: #ed5565;
}
.alert.alert-good {
    background: #1ab394;
}

.invoice {
    margin: 40px auto;
    text-align: left;
    width: 80%;
}
.invoice td {
    padding: 5px 0;
}
.invoice .invoice-items {
    width: 100%;
}
.invoice .invoice-items td {
    border-top: #eee 1px solid;
}
.invoice .invoice-items .total td {
    border-top: 2px solid #333;
    border-bottom: 2px solid #333;
    font-weight: 700;
}

@media only screen and (max-width: 640px) {
    h1, h2, h3, h4 {
        font-weight: 600 !important;
        margin: 20px 0 5px !important;
    }

    h1 {
        font-size: 22px !important;
    }

    h2 {
        font-size: 18px !important;
    }

    h3 {
        font-size: 16px !important;
    }

    .container {
        width: 100% !important;
    }

    .content, .content-wrap {
        padding: 10px !important;
    }

    .invoice {
        width: 100% !important;
    }
}
    </style>
</head>
<body>
<table class="body-wrap">
    <tbody><tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="content-wrap aligncenter">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td class="content-block">
                                        <img src="https://www.theglobalscholarship.org/website_assets/sc%20logo.png" style="max-width: 30%">
                                        <h2>THANKS FOR YOUR REGISTRATION</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <table class="invoice">
                                            <tbody>
                                            <tr>
                                                <td><?php echo $invoiceEmail['student_name']?><br>Invoice #<?php echo $invoiceEmail['invoice_id']?><br><?php echo date('M d Y',strtotime($invoiceEmail['date']))?><br>Razorpay Payment Id: <?php echo $invoiceEmail['payment_id']?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                        <tr>
                                                            <td>The Global Scholarship Registration 2021</td>
                                                            <td class="alignright">Rs. <?php echo $invoiceEmail['amount']?></td>
                                                        </tr>
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Total</td>
                                                            <td class="alignright">Rs. <?php echo $invoiceEmail['amount']?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <a class= "profile_button" href="https://www.theglobalscholarship.org/student-login?redirect-to=https://www.theglobalscholarship.org/personal-details">Update Profile</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block" style="border:2px dotted rgb(72,0,87,0.7); padding: 0px">
                                        <h1>Your Unique Referral Link</h1>
                                        <div>
                                            
                                            <h4>Refer Your Friends And Get Rs. <?php echo $invoiceEmail['earn_amount']?> On Every Registration</h4>
                                            <p>Limited time offer</p>
                                            <p style="background: rgb(72,0,87,0.7); color: #ffffff" >https://www.theglobalscholarship.org/student-register?rcode=<?php echo $invoiceEmail['referral_code']?></p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </td>
                    </tr>
                </tbody>
            </table>
                <div class="footer">
                   <table width="100%">
                        <tbody>
                            <tr>
                                    <td class="aligncenter content-block">
                                        O/o Triwits Technologies Pvt. Ltd., Vijayapura, Karnataka-586103
                                    </td>
                                </tr>
                        <tr>
                            <td class="aligncenter content-block">Questions? Email <a href="mailto:">support@theglobalscholarship.org</a></td>
                        </tr>
                        
                        <tr>
                            <td class="aligncenter content-block">or Call <a href="tel:+918892278892">+91-8892278892</a> / <a href="tel:+919916056303">+91-9916056303</a></td>
                        </tr>
                        
                        
                    </tbody>
                </table>
                </div></div>
        </td>
        <td></td>
    </tr>
</tbody></table>
</body>
</html>
