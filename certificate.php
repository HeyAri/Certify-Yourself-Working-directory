<?php
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

    // Email pinging Admin
    // $headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
    // $recipient	= "ari@aris.work";
    // $recipient  = "justin%40thrivera.io";
    // $subject	= "Someone Certified Themselves";
    // $message    = "Hello World!";
    // $message	= wordwrap($certification, 1024);
    // $headers	= "From: $fullName <$email>\n";
    // mail($recipient, $subject, $message, $headers);
    // mail($recipient, $subject, $message);

    $to      = 'justin@thrivera.io';
    $subject = 'Someone Certified Themselves';
    $message = 'hello';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    include 'templates/footer.php';

?>
