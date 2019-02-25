
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
                                <li class="active"><a href="<?php echo base_url(); ?>portfolio">Portfolio</a></li>
                                <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
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
                <li style="background-image: url(<?php echo base_url(); ?>/flayout/images/content/portfolio.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <div >
                                        <span class="icon"><i class="flaticon-cutlery"></i></span>
                                        <h1>Portfolio</h1>
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
                <div class="col-md-12">
                    <?php
                    if(!empty($portfolios)){
                        foreach ($portfolios as $portfolio) { ?>
                            <a href="<?php echo base_url(); ?>/flayout/images/portfolio/<?php echo $portfolio['image'] ?>" class="gallery-img image-popup animate-box" style="background-image: url(<?php echo base_url(); ?>/flayout/images/portfolio/<?php echo $portfolio['image'] ?>);">
                                <span class="icon"><i class="icon-plus2"></i></span>
                            </a>
                        <?php
                        }
                    } ?>
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

