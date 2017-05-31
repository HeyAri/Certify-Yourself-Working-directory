<?php include 'templates/head.php'; ?>
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
                            <a class="navbar-caption" href="index.php">
                                Center For Certification
                            </a>
                        </div>
                    </div>
                    <div class="mbr-table-cell">
                        <button class="navbar-toggler pull-xs-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                            <div class="hamburger-icon"></div>
                        </button>
                        <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-xl" id="exCollapsingNavbar">
                            <li class="nav-item dropdown">
                                <a class="nav-link link" href="index.php" aria-expanded="false">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link" href="termsandconditions.php" aria-expanded="false">Terms and Conditions</a>
                            </li>
                        </ul>
                        <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                            <div class="close-icon"></div>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-1" style="background-image: url(assets/images/certificate-hero-2000x1500.png); padding-top: 120px; padding-bottom: 120px;">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(126, 155, 159);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-xs-center">
                    <h3 class="mbr-section-title display-2">Center For Certification</h3>
                    <div class="lead">
                        <p><strong>Certify Yourself</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section article mbr-section__container" id="content1-2" style="background-color: rgb(0, 0, 0); padding-top: 20px; padding-bottom: 20px;">
        <div class="ssk-group" align="right">
            <a href="" class="ssk ssk-facebook"></a>
            <a href="" class="ssk ssk-twitter"></a>
            <a href="" class="ssk ssk-google-plus"></a>
            <a href="" class="ssk ssk-pinterest"></a>
            <a href="" class="ssk ssk-email"></a>
        </div>
    </section>
    <section class="mbr-section article mbr-section__container" id="content1-2" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 lead">
                    <p>For years we have heard people say, "That guy is certifiable". Well we decided those people deserve to be truly and officially accredited.&nbsp;</p><br>
                    <p align="center">Are you certifiable?</p>
                    <p>&nbsp;</p>
                    <p>If so, Just fill out the form below, pick your certification topic, and print out your certificate. Accreditation is awarded on a lifetime basis. There are no pesky renewal fees, continuing education or other associations required. All we ask is that you notify us upon your death so that we may keep our records accurate.</p>
                    <p>&nbsp;</p>
                    <p>Do you have questions? <a href="mailto:Dr-Cert@center4certs.org">Email us</a> and we will get back to you...</p>
                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section" id="form1-3" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">

        <?php
            // this starts the session
            session_start();
        ?>
        <div  align="center">
            <legend>Certify Yourself</legend>
        </div>
        <form class="form-vertical" align="left" id="myForm" type="GET" action="certificate.php"  method="POST">
            <table width="100%" align="center">
                <tr>
                    <td>
                        <label class="col-md-4 control-label" for="fullName">Full Name</label>
                        <div class="col-md-4">
                            <input id="fullName" name="fullName" type="text" placeholder="First Last" class="form-control input-md" required type="text">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <div class="col-md-4">
                            <input id="email" name="email" placeholder="name@domain.com" class="form-control input-md" required type="text">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="col-md-4 control-label" for="cert">Certification Desired</label>
                        <div class="col-md-4">
                            <select id="cert" name="cert" class="form-control">
                                <option selected>Select your certification</option>
                                <option value="Certifiable Apologist">Certifiable Apologist</option>
                                <option value="Certified Ass">Certified Ass</option>
                                <option value="Certified Bitch">Certified Bitch</option>
                                <option value="Certified Bad Influence">Certified Bad Influence</option>
                                <option value="Certified Brainiac">Certified Brainiac</option>
                                <option value="Certifiably Clueless">Certifiably Clueless</option>
                                <option value="Certified Dick">Certified Dick</option>
                                <option value="Certified Do Gooder">Certified Do Gooder</option>
                                <option value="Certified Douche">Certified Douche</option>
                                <option value="Certifiable Egghead">Certifiable Egghead</option>
                                <option value="Certified Egotist">Certified Egotist</option>
                                <option value="Certified Freakazoid">Certified Freakazoid</option>
                                <option value="Certified Idiot">Certified Idiot</option>
                                <option value="Certifiably Insane">Certifiably Insane</option>
                                <option value="Certified Joker">Certified Joker</option>
                                <option value="Certifiable Lunatic">Certifiable Lunatic</option>
                                <option value="Certified Misanthrope">Certified Misanthrope</option>
                                <option value="Certified Miscreant">Certified Miscreant</option>
                                <option value="Certified Nutcase">Certified Nutcase</option>
                                <option value="Certifiable Pig">Certifiable Pig</option>
                                <option value="Certified Player">Certified Player</option>
                                <option value="Certified Procrastinator">Certified Procrastinator</option>
                                <option value="Certified Punster">Certified Punster</option>
                                <option value="Certified Reprobate">Certified Reprobate</option>
                                <option value="Certified Rock God">Certified Rock God</option>
                                <option value="Certified Sex God<">Certified Sex God</option>
                                <option value="Certifiable Sports Fanatic">Certifiable Sports Fanatic</option>
                                <option value="Certifiably Terminal">Certifiably Terminal</option>
                            </select>
                        </div>
                        <br>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="col-md-4 control-label" for="cert">You Selected</label>
                        <div class="col-md-4">
                            <input type="text" name="certification" id="certification" placeholder="Or type yours in here" class="form-control input-md" required>
                        </div>
                        <br>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="col-md-4 control-label" for="cert">Certificate Color</label>
                        <div class="col-md-4">
                            <select id="color" name="color" class="form-control">
                                <option selected>Select your certificate border color</option>
                                <option value="images/C4C-blk.png">Plain old black</option>
                                <option value="images/C4C-royal.png">Plain old blue</option>
                                <option value="images/C4C-grn.png">Plain old green</option>
                                <option value="images/C4C-red.png">Plain old red</option>
                                <option value="images/C4C_grn_brn.png">Plain-ish green</option>
                                <option value="images/C4C_curly.png">Regular ornate</option>
                                <option value="images/C4C_gold.png">Super ornate</option>
                            </select>
                        </div>
                        <br>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- Multiple Radios -->
                        <label class="col-md-4 control-label" align="left" for="human">I am a human</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="human-0" style="margin-left: 0px;">Yes, I am human</label>
                                <input name="human" id="human-0" value="1" type="radio" required style="margin-left:20px;">
                            </div>
                            <div class="radio">
                                <label for="human-1" style="margin-left: 0px;">No, I am a robot</label>
                                <input name="human" id="human-1" value="2" type="radio" data-toggle="tooltip" title="Wrong answer, R2D2..." style="margin-left:20px;">
                            </div>
                        </div>
                        <br>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- Button -->
                        <div class="form-group" align="right">
                            <div class="col-md-4" align="center">
                                <button id="submit" name="submit" class="btn btn-primary" align="center" value="Generate Certificate">Get Your Certificate</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!-- make sure we send our variables through this form page to the next one -->
            <input type="hidden" name="certDate" value="<?php echo  $_SESSION['certDate']; ?>">
            <input type="hidden" name="fullName" value="<?php echo  $_SESSION['fullName']; ?>">
            <input type="hidden" name="email" value="<?php echo  $_SESSION['email']; ?>">
            <input type="hidden" name="cert" value="<?php echo  $_SESSION['certification']; ?>">
            <input type="hidden" name="color" value="<?php echo  $_SESSION['color']; ?>">
        </form>
    </section>
    <section class="mbr-section mbr-parallax-background" id="testimonials4-5" style="background-image: url(assets/images/certificate-hero-2000x1500.png); padding-top: 120px; padding-bottom: 120px;">
        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(146, 146, 157);"></div>
        <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2">What Our Fantastic Certifi-ees Say</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-section mbr-section-nopadding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mbr-testimonial card mbr-testimonial-lg">
                            <div class="card-block">
                                <p>“People have been telling me for years that I'm a 'certifiable nutcase'. Since my doctors would not issue a certificate, I came to the Center For Certification. I now have the proof of my nutcase-iness framed and hanging on my wall!”</p>
                            </div>
                            <div class="mbr-author card-footer">
                                <div class="mbr-author-img"><img src="assets/images/mbr-160x106.jpg" class="img-circle"></div>
                                <div class="mbr-author-name">Anonymous</div>
                                <small class="mbr-author-desc">User</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section mbr-section-md-padding" id="social-buttons3-4" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;"></section>
<?php include 'templates/footer.php'; ?>
