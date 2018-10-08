<?php
define('PATH_JQUERY', 'https://code.jquery.com/jquery-1.10.2.min.js');
define('PATH_BOOTSTRAP', 'assets/js/bootstrap.min.js');
define('PATH_JQUERY_CD', 'assets/js/jquery.countdown.min.js');
define('END_DATA', '2019/01/01');
define('DESIGNER_NAME', '2019/01/01');

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="utf - 8\\">';
echo '<meta http-equiv="X - UA - Compatible" content="IE = edge">';
echo '<meta name="viewport" content="width = device - width, initial - scale = 1.0">';
echo '<meta name="description" content="Free coming soon template with jQuery countdown">';
echo '<title>Webuild - Free Bootstrap coming soon template with countdown</title>"';
echo '<link href="assets/css/bootstrap.css" rel="stylesheet">';
echo '<link href="assets/css/bootstrap-theme.css\" rel=\"stylesheet\">';
echo '<link href="assets/css/font-awesome.css\" rel=\"stylesheet\">';
echo '<link href="assets/css/style.css\" rel=\"stylesheet\">';
echo '</head>';
echo '<body>';
echo '<div id="wrapper">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-md-12">';
echo '<h1>WeBuild</h1>';
echo '<h2 class="subtitle">We\'re working hard to improve our website and we\'ll ready to launch after</h2>';
echo '<div id="countdown"></div>';
echo '<form class="form-inline signup" role="form">';
echo '<div class="form-group">';
echo '<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">';
echo '</div>';
echo '<button type="submit" class="btn btn-theme">Get notified!</button>';
echo '</form>';
echo '<div class="social">';
echo '<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
echo '<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
echo '<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>';
echo '<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="row contctform">';
echo '<div class="col-md-8 col-md-offset-2">';
echo '<h3>Contact Us</h3>';
echo '<div id="sendmessage">Your message has been sent. Thank you!</div>';
echo '<div id="errormessage"></div>';
echo '</div>';
echo '<form action="" method="post" role="form" class="contactForm">';
echo '<div class="col-md-4 col-md-offset-2">';
echo '<div class="form">';
echo '<div class="form-group">';
echo '<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />';
echo '<div class="validation"></div>';
echo '</div>';
echo '<div class="form-group">';
echo '<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />';
echo '<div class="validation"></div>';
echo '</div>';
echo '<div class="form-group">';
echo '<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />';
echo '<div class="validation"></div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-4">';
echo '<div class="form">';
echo '<div class="form-group">';
echo '<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>';
echo '<div class="validation"></div>';
echo '</div>';
echo '<div class="text-center"><button type="submit" class="btn btn-theme">Send Message</button></div>';
echo '</div>';
echo '</div>';
echo '</form>';
echo '</div>';
echo '<div class="row">';
echo '<div class="col-lg-6 col-lg-offset-3">';
echo '<p class="copyright">&copy; xxxxxxxxxx - All Rights Reserved</p>';
echo '<div class="credits">Designed by ' . DESIGNER_NAME;
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<script src="' . PATH_JQUERY . '"></script>';
echo '<script src="' . PATH_BOOTSTRAP . '"></script>';
echo '<script src="' . PATH_JQUERY_CD . '"></script>';
echo '<script type="text/javascript">';
echo '$(\'#countdown\').countdown(\'END_DATA\', function(event) {';
echo '$(this).html(event.strftime(\'%w weeks %d days <br /> %H:%M:%S\'));';
echo '});';
echo '</script>';
echo '</body>';
echo '</html>';







?>


