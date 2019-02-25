
<!DOCTYPE HTML>
<html>
<?php
$this->load->view('layout/header');
?>
<body>

<div class="colorlib-loader"></div>

<div id="page">
    <div class="fixed-top">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu nav-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div id="colorlib-logo"><a href="<?php echo base_url(); ?>index.php/home">Bemics</a></div>
                        </div>
                        <div class="col-md-10 text-right menu-1">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>about">About</a></li>
                                <li><a href="<?php echo base_url(); ?>portfolio">Portfolio</a></li>
                                <li class="active"><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <aside id="colorlib-hero" class="colorlib-degree-bg">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(<?php echo base_url(); ?>/flayout/images/content/contact.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <div >
                                        <span class="icon"><i class="flaticon-cutlery"></i></span>
                                        <h1>Contact Us</h1>
                                        <div class="desc2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"></div>
                </a>
            </div>
        </div>
    </aside>

    <div id="colorlib-services">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <h2>Contact Information</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-info-wrap-flex">
                                <div class="con-info">
                                    <p><span><i class="icon-location-2"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
                                </div>
                                <div class="con-info">
                                    <p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                </div>
                                <div class="con-info">
                                    <p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                </div>
                                <div class="con-info">
                                    <p><span><i class="icon-globe"></i></span> <a href="#">yourwebsite.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <h2>Get In Touch</h2>
                    <form action="#">
                        <div class="row form-group">
                            <div class="col-md-6">
                                 <label for="fname">First Name</label>
                                <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                            </div>
                            <div class="col-md-6">
                                 <label for="lname">Last Name</label>
                                <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                 <label for="email">Email</label>
                                <input type="text" id="email" class="form-control" placeholder="Your email address">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                 <label for="subject">Subject</label>
                                <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                 <label for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Your message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary  btn-lg btn-learn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    $this->load->view('layout/footer_content');
    ?>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<?php
$this->load->view('layout/footer');
?>

</body>
</html>

