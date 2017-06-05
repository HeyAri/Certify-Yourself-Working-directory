<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include 'templates/head.php';
?>

<body>
    <section id="menu-0">
        <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
            <div class="container">
                <div class="mbr-table">
                    <div class="mbr-table-cell">
                        <div class="navbar-brand">
                            <a href="HTTP://center4certs.org" class="navbar-logo">
                                <img src="assets/images/c4c-logo-2000x1241.png" alt="Center For Certification" title="Center For Certification">
                            </a>
                            <a class="navbar-caption" href="index.php">Center For Certification</a>
                        </div>
                    </div>
                </div>
            </div>
            <div align="left"><br />
                <button class="btn btn-primary" onClick="window.print()">Print your certificate</button>
            </div>
        </nav>
    </section>
    <section>
        <center>
            <table width="1000" height="768" border="0" cellpadding="2" cellspacing="2" background="images/C4C-<?php echo $_POST['certColor']; ?>.png">
            	<tr>
            		<td width="958" align="center">
                        <h3><font face="klarissa_contourregular"><?php echo $_POST['certDate'] ?></font><br /></h3>
                    		<img src="images/spacer.gif" width="415" height="106"><br>
            			<h2><font face="klarissa_contourregular"><?php echo  $_POST['certification']; ?></font><br /></h2>
            				<img src="images/spacer.gif" width="413" height="98"><br>
            			<h1><font face="klarissa_contourregular"><?php echo  $_POST['fullName']; ?></font><br /></h1>
                	</td>
            	</tr>
            </table>
        </center>
    </section>
<?php

    require 'includes/PHPMailer-master/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->setFrom('dr-cert@center4certs.org', 'Dr. Cert');         // How you wanna see it in your inbox
    $mail->addAddress('chiou.kai@gmail.com','Justin Chiou');        // Whom it's being sent to
    // $mail->addAddress('ari@aris.work');                          // Name is also optional
    // $mail->addReplyTo('info@example.com', 'Information');        // In case you wanna send to client
    // $mail->addAttachment('/var/tmp/file.tar.gz');                // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');           // Optional name
    $mail->isHTML(true);                                            // Set email format to HTML
    $mail->Subject = 'Someone Certified Themselves!';
    $mail->Body    = $_POST['fullName'].' certified him/herself.';
    $mail->AltBody = $_POST['fullName'].' certified him/herself.';  // non-HTML clients
    if(!$mail->send()) {
        echo 'Message could not be sent.<br />';
        echo 'Mailer Error: ' . $mail->ErrorInfo;                   // Shows at the bottom of the page
    } else {
        echo 'Message has been sent';                               // Shows at the bottom of the page
    }

    include 'templates/footer.php';

?>
