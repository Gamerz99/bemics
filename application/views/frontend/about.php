
<!DOCTYPE HTML>
<html>
<?php
$this->load->view('layout/header1');
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
                                <li><a href="<?php echo base_url(); ?>index.php/home">Home</a></li>
                                <li class="active"><a href="<?php echo base_url(); ?>index.php/about">About</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/portfolio">Portfolio</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/contact">Contact</a></li>
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
                <li style="background-image: url(<?php echo base_url(); ?>/flayout/images/slides/img_bg_2.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <div >
                                        <span class="icon"><i class="flaticon-cutlery"></i></span>
                                        <h1>About Us</h1>
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
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Strategy Meets Art</h2>
                    <p>Visual content converts faster than words alone. How’s that for ROI?
                        Content marketing strategies powered by dynamic media outperform all others, and with a variety of visual assets supporting your marketing, we turn your brand into an ROI engine.
                        Attract a larger audience, nurture high-intent prospects and enhance customer engagement with design that matters.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 text-center animate-box">
                            <div class="services">
									<span class="icon">
										<i class="flaticon-gym"></i>
									</span>
                                <div class="desc">
                                    <h3>Creativity</h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center animate-box">
                            <div class="services">
									<span class="icon">
										<i class="flaticon-weightlifting"></i>
									</span>
                                <div class="desc">
                                    <h3>Design</h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center animate-box">
                            <div class="services">
									<span class="icon">
										<i class="flaticon-martial-arts"></i>
									</span>
                                <div class="desc">
                                    <h3>Demand</h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center animate-box">
                            <div class="services">
									<span class="icon">
										<i class="flaticon-gloves"></i>
									</span>
                                <div class="desc">
                                    <h3>Support</h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <div class="services-img" style="background-image: url(<?php echo base_url(); ?>flayout/images/content/home1.jpg);"></div>
                        </div>
                        <div class="col-md-6 animate-box">
                            <div class="services-img" style="background-image: url(<?php echo base_url(); ?>flayout/images/content/home2.jpg);"></div>
                        </div>
                        <div class="col-md-6 animate-box">
                            <div class="services-img" style="background-image: url(<?php echo base_url(); ?>flayout/images/content/home3.jpg);"></div>
                        </div>
                    </div>
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
$this->load->view('layout/footer1');
?>

</body>
</html>

