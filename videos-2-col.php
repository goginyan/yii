<?php include_once("header.php") ?>

    <!--header info-->
    <section class="header-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-left">
                    <h5>Videos</h5>
                    <p><a href="index.php">Home</a>videos</p>
                </div>

                <div class="col-sm-3 pull-right info-select">
                    <div class="select_wrapper width2">
                        <select name="select1" class="custom" onchange="this.form.submit();">
                            <option value="volvo">Latest added</option>
                            <option value="saab">Most Popular</option>
                            <option value="mercedes">Featured Videos</option>
                        </select>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <!--header info-->
    <!--Video wrapper-->
    <div class="videos-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="video-post v-col-2">
                        <img src="images/cover/2-col/cover1.png" alt="" class="img-responsive"/>
                        <a href="video-details.php"><span class="vd-button"></span></a>
                        <h2>Mollis Sollicitudin Condimentum Vestibulum</h2>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="video-post v-col-2">
                        <img src="images/cover/2-col/cover2.png" alt="" class="img-responsive"/>
                        <a href="video-details.php"><span class="vd-button"></span></a>
                        <h2>Praesent commodo cursus magna, vel scelerisque nisl</h2>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="video-post v-col-2">
                        <img src="images/cover/2-col/cover3.png" alt="" class="img-responsive"/>
                        <a href="video-details.php"><span class="vd-button"></span></a>
                        <h2>nisl consectetur et</h2>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="video-post v-col-2">
                        <img src="images/cover/2-col/cover4.png" alt="" class="img-responsive"/>
                        <a href="video-details.php"><span class="vd-button"></span></a>
                        <h2>Etiam Fringilla Tortor Euismod</h2>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="video-post v-col-2">
                        <img src="images/cover/2-col/cover5.png" alt="" class="img-responsive"/>
                        <a href="video-details.php"><span class="vd-button"></span></a>
                        <h2>viral video: Adipiscing Sit Amet</h2>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="video-post v-col-2">
                        <img src="images/cover/2-col/cover6.png" alt="" class="img-responsive"/>
                        <a href="video-details.php"><span class="vd-button"></span></a>
                        <h2>Aenean eu leo quam. Pellentesque ornare sem</h2>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="video-post v-col-2">
                        <img src="images/cover/2-col/cover7.png" alt="" class="img-responsive"/>
                        <a href="video-details.php"><span class="vd-button"></span></a>
                        <h2>Praesent commodo cursus magna, vel scelerisque nisl consectetur et</h2>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="video-post v-col-2">
                        <img src="images/cover/2-col/cover8.png" alt="" class="img-responsive"/>
                        <a href="video-details.php"><span class="vd-button"></span></a>
                        <h2>Little Girl on a Swing</h2>
                    </div>
                </div>
                <div class="col-md-12 pre-next">
                    <div class="video-preview">
                    </div>
                    <div class="video-next">
                    </div>
                    <div class="pagination text-center">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>...</li>
                            <li><a href="#">65</a></li>
                            <ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Video wrapper-->

    <!--Button Area-->
    <div class="footer-signup">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow wr-sign-up fadeInUp" data-wow-delay="0.9s">
                    <div class="wr-newsletter orange-background text-center">
                        <form name="sentMessage" id="subscribe-form" novalidate>

                            <input type="email" id="email" placeholder="enter your email and hit enter to subscribe" required data-validation-required-message="Please enter your email address.">


                            <input type="submit" />

                        </form>
                    </div>
                </div>
                <div class="col-sm-6  wr-buynow wow fadeInDown" data-wow-delay="0.9s">
                    <div class="buy-now  text-center">
                        <a href="#" class="yellow-background wr-btn wr-btn-default">by this theme right now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End Button Area-->

<?php include_once("footer.php") ?>