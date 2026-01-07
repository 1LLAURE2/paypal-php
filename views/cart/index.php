<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require_once("../html/head.php")
    ?>

    <title>Multikart - Cart</title>
</head>

<body class="theme-color-1">


    <!-- header start -->
    <?php
        require_once("../html/header.php")
    ?>
    <!-- header end -->


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>cart</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <input type="hidden" id="vent_total" name="vent_total" value="0">

    <!--section CARD-->
    <?php
        require_once("pnlcart.php");
    ?>
    <!--section CARD-->

    <!-- section CHECKOUT -->
    <?php
        require_once("pnlcheckout.php");
    ?>
    <!-- section CHECKOUT -->

    <?php
        require_once("modal.php")
    ?>

    <!-- footer start -->
    <?php
        require_once("../html/footer.php")
    ?>
    <!-- footer end -->

    <!-- JS -->
    <?php
        require_once("../html/js.php");
    ?>
    <script type="text/javascript" src="cart.js"></script>
</body>

</html>