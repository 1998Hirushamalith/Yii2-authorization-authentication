<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Congratulations!</h1>

        <!-- Configure Yii 2 application name ,id and time zone -->
        <?= date('Y-m-d H:i:s'); ?>

        <p class="lead">You have successfully entered our Yii-powered application.</p>

        <p><a class="btn btn-lg btn-dark" href="https://www.yiiframework.com">Get started with our product & services</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Blog</h2>

                <p> Blogs have evolved from simple online journals...</p>

                <p><a class="btn btn-outline-primary" href="http://localhost/projects/basic/web/blog">See More &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>News & Feeds</h2>

                <p>How to run a blog from your smartphone...</p>

                <p><a class="btn btn-outline-success" href="https://www.verizon.com/articles/blogging-from-your-smartphone/">Discover More &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Upcomming Features</h2>

                <p>The mobile phones of the future are expected...</p>

                <p><a class="btn btn-outline-secondary" href="https://www.uswitch.com/mobiles/guides/future-of-mobile-phones/"> Go & see &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
