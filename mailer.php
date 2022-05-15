<?php
require_once'dbh.php';
require_once'config.php';
require_once('PHPMailer/PHPMailerAutoload.php');
require_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');


function sendBulkMail () {

//Passing `true` enables PHPMailer exceptions
$mail = new PHPMailer(true);

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'business110.web-hosting.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contact@fundreza.com';                 // SMTP username
$mail->Password = 'Charles9845';                                  // SMTP password
$mail->SMTPSecure = 'TLS';                            // Enable SSL encryption, `ssl` also accepted
$mail->Port = 587;
$mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
$mail->setFrom('contact@fundreza.com', 'Bulk mailer test');
$mail->addReplyTo('contact@fundreza.com', 'Bulk mailer test');

$mail->Subject = 'PHPMailer Simple database mailing list test';

//Same body for all messages, so set this before the sending loop
//If you generate a different body for each recipient (e.g. you're using a templating system),
//set it inside the loop
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Welcome, please complete your registration process!!!';
$mail->Body    = "<html>
                    <body style='background:#f9f9f9;'>
                    
                    <div style='padding: 2em;margin: 1em auto 2em auto;font-family: arial;color: #7a7a7a;'>
                        <p>Hello, welcome to Fundreza Co. Ltd. A company and platform that enables you to raise funds for your just causes.
                       
                        <p style='margin-top: 2rem'>Copy or type this above to verify your email address</p>
                    </div>
                        <div style='font-size:12px;font-family:verdana;float:right;margin:3em 1em 3m 0;color:#555454;font-style:italic;'>Best regards from Fundreza <br>  Registration Team</div>
                    </div>
                    </body>
                </html>";
$result = array('charlesmuoka1@gmail.com','charlesdigitalwealth@gmail.com','juanromeroj1962@gmail.com','dwopa123@gmail.com');

foreach ($result as $emailaddress) {
    $mail->addAddress($emailaddress);
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    if(!$mail->send()) {
        echo 'send fail';
    } else {
        echo 'mail sent';
        //Clear all addresses and attachments for the next iteration
        $mail->clearAddresses();
        $mail->clearAttachments();
         
    }
    
}
}



function sendregistrationMail($Email,$emailCode,$emailUname) {

$mail = new PHPMailer(true);
   
$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'business110.web-hosting.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contact@fundreza.com';                 // SMTP username
$mail->Password = 'Charles9845';                           // SMTP password
$mail->SMTPSecure = 'TLS';                            // Enable SSL encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('contact@fundreza.com', 'Registration Success');
$mail->addAddress($Email, $emailUname);     // Add a recipient
$mail->addReplyTo('contact@fundreza.com', 'Registration Success');

$mail->setFrom('contact@fundreza.com', 'Registration Success');
$mail->addAddress($Email, $emailUname);     // Add a recipient
$mail->addReplyTo('contact@fundreza.com', 'Registration Success');

$remote  = @$_SERVER['REMOTE_ADDR'];
$browser = isset($_SERVER['HTTP_USER_AGENT'])? $_SERVER['HTTP_USER_AGENT'] : null;
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
$result  = array('country'=>'', 'city'=>'');
if(filter_var($client, FILTER_VALIDATE_IP)){
    $ip = $client;
}elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $ip = $forward;
}else{
    $ip = $remote;
}
$geoDetails = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));

$userCountry = $geoDetails['geoplugin_countryName'];


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Welcome, please complete your registration process!!!';
$mail->Body    = "<html>
                    <body style='background:#f9f9f9;'>
                    
                    <div style='padding: 2em;margin: 1em auto 2em auto;font-family: arial;color: #7a7a7a;'>
                        <p>Hello <span style='font-weight:bold'>$emailUname</span>, welcome to Fundreza Co. Ltd. A company and platform that enables you to raise funds for your just causes.
                        <span style='color:#555;font-weight:bold'><br> Below are your registration details to verify if this is you.</span></p>
                        <div style='margin: 1rem'> Your Ip Address is <b>$remote</b></div>
                        <div style='margin: 1rem'> Your Registration Country is <b>$userCountry</b></div>
                        <div style='margin: 1rem'> Your broswer details are <b>$browser</b></div>
                        <h4 style='color:#001737;font-weight: bold;text-align:center;margin:5% auto;background-colo: orange'>
                        <div style='margin-bottom: 1rem'>Your email verification code is:</div>
                            <span style='background-color: orange;color:#001737;padding: .8rem 1.4rem;'>$emailCode
                        </h4>
                        <p style='margin-top: 2rem'>Copy or type this above to verify your email address</p>
                    </div>
                        <div style='font-size:12px;font-family:verdana;float:right;margin:3em 1em 3m 0;color:#555454;font-style:italic;'>Best regards from Fundreza <br>  Registration Team</div>
                    </div>
                    </body>
                </html>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    if(!$mail->send()) {
        header("location:https://my.fundreza.com/createaccount");
    } else {
        $_SESSION['emailCode'] = $emailCode;
        $_SESSION['Email'] = $Email;
        $_SESSION['emailUname'] = $emailUname;
        header("location:https://my.fundreza.com/verify-email");
         
    }

}


function  accountverificationSuccess($Email,$emailUname) {

$mail = new PHPMailer(true);
   
$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'business110.web-hosting.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contact@fundreza.com';                 // SMTP username
$mail->Password = 'Charles9845';                           // SMTP password
$mail->SMTPSecure = 'TLS';                            // Enable SSL encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('contact@fundreza.com', 'Account Activation Success');
$mail->addAddress($Email, $emailUname);     // Add a recipient
$mail->addReplyTo('contact@fundreza.com', 'Account Activation Success');

$mail->setFrom('contact@fundreza.com', 'Account Activation Success');
$mail->addAddress($Email, $emailUname);     // Add a recipient
$mail->addReplyTo('contact@fundreza.com', 'Account Activation Success');

$remote  = @$_SERVER['REMOTE_ADDR'];
$browser = isset($_SERVER['HTTP_USER_AGENT'])? $_SERVER['HTTP_USER_AGENT'] : null;
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
$result  = array('country'=>'', 'city'=>'');
if(filter_var($client, FILTER_VALIDATE_IP)){
    $ip = $client;
}elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $ip = $forward;
}else{
    $ip = $remote;
}
$geoDetails = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));

$userCountry = $geoDetails['geoplugin_countryName'];


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Congratulations!!!, your account is activated!!!';
$mail->Body    = "<html>
                    <body style='background:#f9f9f9;'>
                    
                    <div style='padding: 2em;margin: 1em auto 2em auto;font-family: arial;color: #7a7a7a;'>
                        <p>Hello <span style='font-weight:bold'>$emailUname</span>, your email has been successfully verified.<br> Please verify your Mobile Number below
                        <span style='color:#555;font-weight:bold'><br> Below are your registration details to verify if this is you.</span></p>
                        <div style='margin: 1rem'> Your Ip Address is <b>$remote</b></div>
                        <div style='margin: 1rem'> Your Registration Country is <b>$userCountry</b></div>
                        <div style='margin: 1rem'> Your broswer details are <b>$browser</b></div>
                        <p style='margin-top: 2rem;font-weight: bold;color: #22a349;'>Continue your fundraising campaign to raise funds for your urgent causes</p>
                    </div>
                        <div style='font-size:12px;font-family:verdana;float:right;margin:3em 1em 3m 0;color:#555454;font-style:italic;'>Best regards from Fundreza <br>  Registration Team</div>
                    </div>
                    </body>
                </html>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    if(!$mail->send()) {
        $_SESSION['emailCode'] = $emailCode;
        $_SESSION['Email'] = $Email;
        $_SESSION['emailUname'] = $emailUname;
        header("location:https://my.fundreza.com/verify-email");
      
    } else {
        $_SESSION['emailCode'] = $emailCode;
        $_SESSION['Email'] = $Email;
        $_SESSION['emailUname'] = $emailUname;
        header("location:https://my.fundreza.com/verify-mobile");
         
    }

}

    
 
function passwordReset($Emailo,$uname) {

$mail = new PHPMailer(true);
   
$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'business110.web-hosting.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contact@fundreza.com';                 // SMTP username
$mail->Password = 'Charles9845';                           // SMTP password
$mail->SMTPSecure = 'TLS';                            // Enable SSL encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('contact@fundreza.com', 'Password Reset Success');
$mail->addAddress($Emailo,$uname);     // Add a recipient
$mail->addReplyTo('contact@fundreza.com', 'Password Reset Success');

$mail->setFrom('contact@fundreza.com', 'Password Reset Success');
$mail->addAddress($Emailo,$uname);     // Add a recipient
$mail->addReplyTo('contact@fundreza.com', 'Password Reset Success');

$remote  = @$_SERVER['REMOTE_ADDR'];
$browser = isset($_SERVER['HTTP_USER_AGENT'])? $_SERVER['HTTP_USER_AGENT'] : null;
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
$result  = array('country'=>'', 'city'=>'');
if(filter_var($client, FILTER_VALIDATE_IP)){
    $ip = $client;
}elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $ip = $forward;
}else{
    $ip = $remote;
}
$geoDetails = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));

$userCountry = $geoDetails['geoplugin_countryName'];


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Password Reset Success';
    $mail->Body    = "<html>
                        <body style='background:#ffffff;'>
                        
                        
                        <div style='padding: 2em;margin: 1em auto 2em auto;font-family: arial;'>
                            <p>Hi again $uname, your password has been suucessfully changed, you can now login <br> If this action was not taken by you please let us know by sending us a message to contact@fundreza.com <br> <br>We are glad that us trust us and we will do our very best to keep this trust alive.
                            </p>
                            
                            <div style='font-size:12px;font-family:verdana;float:right;margin:3em 1em 3em 0;color:#555454;font-style:italic;'>Best regards from Fundreza <br>  Registration Team</div>
                        </div>
                        <img src='fundreza.com/images/sslcheckout.png' style='width:100%;height:18em;'/>
                        </body>
                    </html>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    if(!$mail->send()) {
        header("location:resetpassword");
      
    } else {
        $_SESSION['emailCode'] = $emailCode;
        $_SESSION['Email'] = $Email;
        $_SESSION['emailUname'] = $emailUname;
        header("location:login");
         
    }

}


    
    
function investFundsMail($Email,$investmentType,$investAmount,$uname) {
    
    $mail = new PHPMailer(true);
       
    $mail->SMTPDebug = 0;                               // Enable verbose debug output
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'business110.web-hosting.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'invest@fundreza.com';                 // SMTP username
    $mail->Password = 'Charles9845';                           // SMTP password
    $mail->SMTPSecure = 'SSL';                            // Enable SSL encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('invest@fundreza.com', 'Investment Notification');
    $mail->addAddress($Email, $uname);     // Add a recipient
    $mail->addReplyTo('invest@fundreza.com', 'Investment Notification');
    
    $mail->setFrom('invest@fundreza.com', 'Investment Notification');
    $mail->addAddress($Email, $uname);     // Add a recipient
    $mail->addReplyTo('invest@fundreza.com', 'Investment Notification');

    
    $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Subject = 'Investment Notification';
    $mail->Body    = "<img src='fundreza.com/images/stocks3.png'style='height:8rem;width:100%;' /><br><p style='color: #555555;'>Hello <span style='font-weight:bold;color: brown'>$uname</span>, we have received your investment request and are happy to tell you that your request to invest in <span style='font-weight:bold'> $investmentType </span> with the sum of <span style='font-weight:bold'> $investAmount </span> is accepted. <br><br> We are glad that you trust us and we will do our best to keep this trust alive<br><br>
    
    <div style='font-weight:bold;color: gray'>PSS: Your investment will only become activate when your deposit is confirmed</div>
    </p>
    <div style='color: #555555;'>We prefer making your investment deposit with Crytptocurrency especially Bitcoin, reason for this is already outline in our <a href='fundreza.com/terms'>termsofservice</a>, but will still accept investment deposit using other deposit channel</div>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        if(!$mail->send()) {
        } else {
            
        }
    }



    function sendtopleadersregMail($Email,$uname) {
        header("location:verifymail");
        exit();
    }


    function upgradeAccountMail($Email,$auctionType,$auctAmount,$uname) {
    
        $mail = new PHPMailer(true);
           
        $mail->SMTPDebug = 0;                               // Enable verbose debug output
        
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'business110.web-hosting.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'invest@fundreza.com';                 // SMTP username
        $mail->Password = 'Charles9845';                           // SMTP password
        $mail->SMTPSecure = 'SSL';                            // Enable SSL encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
    
        $mail->setFrom('invest@fundreza.com', 'Investment Notification');
        $mail->addAddress($Email, $uname);     // Add a recipient
        $mail->addReplyTo('invest@fundreza.com', 'Investment Notification');
        
        $mail->setFrom('invest@fundreza.com', 'Investment Notification');
        $mail->addAddress($Email, $uname);     // Add a recipient
        $mail->addReplyTo('invest@fundreza.com', 'Investment Notification');
    
        
        $mail->isHTML(true);                                  // Set email format to HTML
        
        $mail->Subject = 'Investment Notification';
        $mail->Body    = "<img src='fundreza.com/images/stocks3.png'style='height:8rem;width:100%;' /><br><p style='color: #555555;'>Hello <span style='font-weight:bold;color: brown'>$uname</span>, we have received your investment request and are happy to tell you that your request to invest in <span style='font-weight:bold'> $investmentType </span> with the sum of <span style='font-weight:bold'> $investAmount </span> is accepted. <br><br> We are glad that you trust us and we will do our best to keep this trust alive<br><br>
        
        <div style='font-weight:bold;color: gray'>PSS: Your investment will only become activate when your deposit is confirmed</div>
        </p>
        <div style='color: #555555;'>We prefer making your investment deposit with Crytptocurrency especially Bitcoin, reason for this is already outline in our <a href='fundreza.com/terms'>termsofservice</a>, but will still accept investment deposit using other deposit channel</div>";
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            if(!$mail->send()) {
            } else {
                
            }
        }



function withdrawFundsMail($Email,$investmentType,$withdrawAmount,$uname) {
    
    $mail = new PHPMailer(true);
       
    $mail->SMTPDebug = 0;                               // Enable verbose debug output
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'business110.web-hosting.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'invest@fundreza.com';                 // SMTP username
    $mail->Password = 'Charles9845';                           // SMTP password
    $mail->SMTPSecure = 'SSL';                            // Enable SSL encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('invest@fundreza.com', 'Withdrawal Request');
    $mail->addAddress($Email, $uname);     // Add a recipient
    $mail->addReplyTo('invest@fundreza.com', 'Withdrawal Request');
    
    $mail->setFrom('invest@fundreza.com', 'Withdrawal Request');
    $mail->addAddress($Email, $uname);     // Add a recipient
    $mail->addReplyTo('invest@fundreza.com', 'Withdrawal Request');


    $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Subject = 'Withdrawal Request Notification';
    $mail->Body    = "<img src='fundreza.com/images/logopng' style='height:7rem;width:100%;'/><br><p style='color:#7a7a7a;'>Hello <span style='color:brown;font-weight:bold;'>$uname</span>, we have received your withdrawal request and are happy to tell you that your request is processing. <div>PSS: Withdrawal requests are processed not more that 3 days of receiving the request</div> <br><br> We are glad that you trust us and we will do our best to keep this trust </p>"
    ;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        if(!$mail->send()) {
        } else {
          
        }
    }




function loanRequest($loanAmount,$interestRate,$loanStatus,$loanReason,$loanDuration,$Email,$uname) {

    $mail = new PHPMailer(true);
       
    $mail->SMTPDebug = 0;                               // Enable verbose debug output
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'business110.web-hosting.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'loans@fundreza.com';                 // SMTP username
    $mail->Password = 'Charles9845';                           // SMTP password
    $mail->SMTPSecure = 'SSL';                            // Enable SSL encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('loans@fundreza.com', 'Loan Request');
    $mail->addAddress($Email, $uname);     // Add a recipient
    $mail->addReplyTo('loans@fundreza.com', 'Loan Request');
    
    $mail->setFrom('loans@fundreza.com', 'Loan Request');
    $mail->addAddress($Email, $uname);     // Add a recipient
    $mail->addReplyTo('loans@fundreza.com', 'Loan Request');


    $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Subject = 'Loan Request';
    $mail->Body    = "<img src='fundreza.com/images/loanbg.jpg' style='height: 6em;width:100%;' /><br><p style='color:#7a7a7;'>Hello <span style='font-weight:bold;color:brown'>$uname</span>, we have received your loan request of the amount <span style='font-weight:bold;'>$loanAmount</span> for the purpose of <span style='font-weight:bold;'>$loanReason </span> at an interest rate of <span style='font-weight:bold;'> $interestRate </span> for a duration of <span style='font-weight:bold;'> $loanDuration </span>.<br> We are happy to tell you that your loan request status is <span style='font-weight:bold;'> $loanStatus </span> <br> <br>We are glad that you trust us and we will do our best to keep this trust alive</ class='fas fa-handshake'></i></p>
    <br><div> Best Regards <br> .......<div>Retirement Planner Ltd <br> Loan Team</div></div>";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        if(!$mail->send()) {
        } else {
            
        }
    }
    


    ?>