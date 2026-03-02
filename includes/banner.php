<section class="banner">
    <div class="container">
        <div class="content d-flex gap-2 gap-md-3 flex-column align-items-center align-items-md-start justify-content-center">
            <h1 class="sec-hd wow animate__animated animate__bounceInLeft">
                <?php echo $pageTitle; ?>
            </h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb flex-row card rounded-3 wow animate__animated animate__bounceInRight">

                    <li><i class="icon fa-regular fa-house pe-1"></i></li>
                    <li class="breadcrumb-item"><a class="para-main" href="index.php">Home</a></li>
                    <li class="breadcrumb-item para-main active" aria-current="page"><?php echo $pageTitle; ?></li>
                </ol>
            </nav>
        </div>
    </div>
</section>