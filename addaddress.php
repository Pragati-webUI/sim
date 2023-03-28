<?php include('header.php'); ?>
<div class="ttm-page-title-row">
    <div class="ttm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading ttm-textcolor-white">
                        <h2 class="title">Add Address</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrapper ttm-bgcolor-grey">
            <span>
                <a title="Homepage" href="index.php">Home</a>
            </span>
            <span class="current">Add Address</span>
        </div>
    </div>
</div>
<!--page start-->
<div class="page">
    <!-- page-title -->
    <!-- page-title end-->

    <section class="ttm-row p-0 res-991-p-0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-white z-index-2 spacing-13 box-shadow_2">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                            <div class="ttm-col-wrapper-bg-layer-inner"></div>
                        </div>
                        <div class="layer-content text-center">
                            <div class="mb-30 res-991-mb-0">
                                <h2 class="mb-0">Reach us out</h2>
                                <p>write your query</p>
                            </div>
                            <form action="#" class="contact_form_2 wrap-form clearfix" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                            <span class="text-input"><input name="email" type="text" value="" placeholder="Your Email" required="required"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number" required="required"></span>
                                        </label>
                                        <label>
                                            <span class="text-input"><textarea name="Address" rows="3" placeholder="Address" required="required"></textarea></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-35">
                                    <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-round ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="google_map" class="google_map">
            <div class="map_container">
                <div id="map" class="map_1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3315.008402642112!2d-117.92116288442168!3d33.81209623779368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcd7d12b3b5e6b%3A0x2ef62f8418225cfa!2sDisneyland%20Park!5e0!3m2!1sen!2sin!4v1595387640221!5m2!1sen!2sin"></iframe>
                </div>
            </div>
        </div>
    </section>

</div>
<!--site-main end-->

<?php include('footer.php'); ?>