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

    <?php

        // this starts the session
        session_start();

        // little script to pull the current date/time; can also be done via JavaScript or 100 other ways
        include($_SERVER['DOCUMENT_ROOT']."/includes/now.fn");

        // this pulls input variables from the session form
        $_SESSION['fullName']		= $_POST['fullName'];
        $_SESSION['email']			= $_POST['email'];
        $_SESSION['certification'] 	= $_POST['certification'];
        $_SESSION['color'] 			= $_POST['color'];

    ?>
        <center>
            <table width="1000" height="768" border="0" cellpadding="2" cellspacing="2" background="
            <?php echo  $_SESSION['color']; ?>">
            	<tr>
            		<td width="958" align="center">
                    	<h3><font face="klarissa_contourregular"><?php echo date('jS \of F\, Y'); ?></font><br /></h3>
                    		<img src="images/spacer.gif" width="415" height="106"><br>
            			<h2><font face="klarissa_contourregular"><?php echo  $_SESSION['certification']; ?></font><br /></h2>
            				<img src="images/spacer.gif" width="413" height="98"><br>
            			<h1><font face="klarissa_contourregular"><?php echo  $_SESSION['fullName']; ?></font><br />
                        </h1>
                	</td>
            	</tr>
            </table>
        </center>
    </section>

<?php

    // Email pinging Admin
    $headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
    $headers	.= "From: $fullName <$email>\n";
    $recipient	= "heyari@aris.work";
    $subject	= "Someone Certified Themselves";
    $message	= wordwrap($certification, 1024);
    mail($recipient, $subject, $message, $headers);

    include 'templates/footer.php';

?>
