<?php 
/**Template name: Home Template*/ 
get_header(); 



?>
<!-- HOME -->
<div id="home" class="col-12 d-flex justify-content-center align-items-center w-100 box-video">
    <video autoplay loop muted playsinline class="video">
        <source src="<?php echo get_template_directory_uri()?>/assets/img/video1.mp4" type="video/mp4">
    </video>
    <h3 class="text-video string1">AMONG THE UNDULATING LANDSCAPE</h3><br>
    <h3 class="text-video string2">AND BREATHTAKING BEAUTY OF THE CATSKILLS</h3><br>
    <h2 class="text-video string3">welcome, all</h2><br>
    <button onclick="document.location='#oder'" class="btn-video">
        <p class="botton-text btn-text-video">
            BOOK YOUR STAY!
        </p>
    </button>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-top">
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100">
    <p class="about text">This home and everything in it was selected specifically to create an atmosphere for friends and family to gather and<br>celebrate and share and laugh and eat too much and drink too much and<br>live in this beautiful world, together.</p>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-bottom">
</div>
<!-- ABOUT -->
<div class="col-10 d-flex justify-content-center align-items-center w-100 p-0 m-0">
    <img class="interior" src="<?php echo get_template_directory_uri()?>/assets/img/interior.jpg" alt="img">
</div>
<div id="about-us" class="col-10 d-flex flex-wrap justify-content-start align-items-center w-100 about-us-col">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <p class="about">
        <?php the_content(); ?>
    </p>
    <?php endwhile; ?>
    <?php else: ?>
    <p>
        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    </p>
    <?php endif; ?>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 col-we">
    <img class="interior" src="<?php echo get_template_directory_uri()?>/assets/img/we.jpg" alt="img">
</div>
<!--GALLERY-->
<div id="gallery" class="col-10 d-flex justify-content-center align-items-center w-100 linear-we">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100">
    <img class="interior gal1" src="<?php echo get_template_directory_uri()?>/assets/img/gallery1.jpg" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100">
    <img class="interior gal2" src="<?php echo get_template_directory_uri()?>/assets/img/gallery2.jpg" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100">
    <img class="interior gal3" src="<?php echo get_template_directory_uri()?>/assets/img/gallery3.jpg" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100">
    <img class="interior gal4" src="<?php echo get_template_directory_uri()?>/assets/img/gallery4.jpg" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100">
    <img class="interior gal5" src="<?php echo get_template_directory_uri()?>/assets/img/gallery5.jpg" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100">
    <img class="interior gal6" src="<?php echo get_template_directory_uri()?>/assets/img/gallery6.jpg" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100">
    <img class="interior gal7" src="<?php echo get_template_directory_uri()?>/assets/img/gallery7.jpg" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100">
    <img class="interior gal8" src="<?php echo get_template_directory_uri()?>/assets/img/gallery8.jpg" alt="img">
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-after-gallery">
</div>
<div id="before-after" class="col-10 d-flex flex-wrap justify-content-start align-items-center w-100 h2-col">
    <h2 class="greenhouse-text">
        THE GREENHOUSE
    </h2>
</div>
<div id="before-after" class="col-10 d-flex flex-wrap justify-content-start align-items-center w-100">
    <p class="about">
        it took two years to get from what it was to what it is now
    </p>
</div>
<div id="before-after" class="col-10 d-flex flex-wrap justify-content-start align-items-center w-100 h3-col">
    <h3>
        <strong>USE THE SLIDER TO SEE BEFORE AND AFTER</strong>
    </h3>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-before-barn">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100">
    <img class="interior gal1" src="<?php echo get_template_directory_uri()?>/assets/img/ba1.png" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100">
    <img class="interior gal2" src="<?php echo get_template_directory_uri()?>/assets/img/ba2.png" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100">
    <img class="interior gal3" src="<?php echo get_template_directory_uri()?>/assets/img/ba3.png" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100">
    <img class="interior gal4" src="<?php echo get_template_directory_uri()?>/assets/img/ba4.png" alt="img">
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-after-gallery">
</div>
<div class="col-10 d-flex flex-wrap justify-content-start align-items-center w-100 barn-col">
    <h2>
        THE BARN HOUSE BEFORE
    </h2>
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100 p-0 m-0">
    <img class="interior gal1" src="<?php echo get_template_directory_uri()?>/assets/img/barn1.png" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100 p-0 m-0">
    <img class="interior gal2" src="<?php echo get_template_directory_uri()?>/assets/img/barn2.png" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100 p-0 m-0">
    <img class="interior gal3" src="<?php echo get_template_directory_uri()?>/assets/img/barn3.png" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100 p-0 m-0">
    <img class="interior gal4" src="<?php echo get_template_directory_uri()?>/assets/img/barn4.png" alt="img">
</div>
<div class="col-sm-5 col-10 d-flex justify-content-center align-items-center w-100 linear-after-gallery">
</div>
<!-- GUIDE -->
<div id="guide" class="col-10 d-flex flex-wrap justify-content-start align-items-center w-100">
    <h3>
        AN INCOMPLETE GUIDE TO THE CATSKILLS
    </h3>
</div>
<div class="col-10 d-flex flex-wrap justify-content-start align-items-center w-100">
    <h3>
        <strong>WHERE <em>WE</em> LIKE TO GO AND WHAT <em>WE</em> LIKE TO DO IN AND AROUND TANNERSVILLE</strong>
    </h3>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 col-guide-img">
    <img class="interior" src="<?php echo get_template_directory_uri()?>/assets/img/guide1.png" alt="img">
</div>
<div class="row d-flex flex-wrap justify-content-center align-items-start w-100">
    <div class="col-10 d-flex flex-wrap justify-content-around align-items-start w-100">
        <div class="col-sm col-12 d-flex flex-wrap justify-content-start align-items-start col-sights mr-4">
            <?php $the_query = new WP_Query('p=50'); ?>
            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
            <h1>
                <?php the_title(); ?>
            </h1>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata();?>
        </div>
        <div class="col-sm col-12 d-flex flex-wrap justify-content-start align-items-start col-eats">
            <?php $the_query = new WP_Query('p=52'); ?>
            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
            <h1>
                <?php the_title(); ?>
            </h1>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata();?>
        </div>
        <div class="col-sm col-12 d-flex flex-wrap justify-content-start align-items-start col-else ml-4">
            <?php $the_query = new WP_Query('p=54'); ?>
            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
            <h1 class="title">
                <?php the_title(); ?>
            </h1>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata();?>
        </div>
    </div>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 col-guide2">
    <img class="interior" src="<?php echo get_template_directory_uri()?>/assets/img/guide3.png" alt="img">
</div>
<div class="col-10 d-flex flex-wrap justify-content-start align-items-center w-100">
    <p class="about">
        This is a depiction of the wildlife we have seen so far. Be safe out there.
    </p>
</div>
<!-- STAY -->
<div id="stay" class="col-10 d-flex justify-content-center align-items-center w-100 linear-stay">
</div>
<div class="col-10 d-flex flex-wrap justify-content-center align-items-center w-100">
    <h3>
        LOCATED IN TANNERSVILLE, NY, 2 HOURS NORTH OF NEW YORK CITY
    </h3>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100">
    <button onclick="document.location='#oder'" class="btn-stay">
        <p class="botton-text">
            BOOK YOUR STAY!
        </p>
    </button>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-stay">
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 col-kitchen-img">
    <img class="interior" src="<?php echo get_template_directory_uri()?>/assets/img/kitchen.jpg" alt="img">
</div>
<div class="col-10 d-flex flex-wrap justify-content-center align-items-center w-100 col-feautered">
    <h3>
        AS FEATURED IN
    </h3>
</div>
<div class="col-5 col-sm-4 d-flex justify-content-center align-items-center w-100">
    <img class="brend brend-1" src="<?php echo get_template_directory_uri()?>/assets/img/apartmenttherapy.png" alt="img">
</div>
<div class="col-5 col-sm-4 d-flex justify-content-center align-items-center w-100">
    <img class="brend brend-2" src="<?php echo get_template_directory_uri()?>/assets/img/remodelista.png" alt="img">
</div>
<div class="col-5 col-sm-4 d-flex justify-content-center align-items-center w-100">
    <img class="brend brend-3" src="<?php echo get_template_directory_uri()?>/assets/img/west_elm.png" alt="img">
</div>
<div class="col-5 col-sm-4 d-flex justify-content-center align-items-center w-100">
    <img class="brend brend-4" src="<?php echo get_template_directory_uri()?>/assets/img/andnorth.png" alt="img">
</div>
<div class="col-5 col-sm-4 d-flex justify-content-center align-items-center w-100">
    <img class="brend brend-5" src="<?php echo get_template_directory_uri()?>/assets/img/mydomaine.png" alt="img">
</div>
<div class="col-5 col-sm-4 d-flex justify-content-center align-items-center w-100">
    <img class="brend brend-6" src="<?php echo get_template_directory_uri()?>/assets/img/airbnb.png" alt="img">
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-brend">
</div>
<div class="col-10 d-flex  justify-content-center align-items-center w-100">
    <h3 class="available">
        OUR HOUSE IS ALSO AVAILABLE FOR
    </h3>
</div>
<div class="col-10 d-flex flex-wrap justify-content-center align-items-center w-100">
    <h3 class="available">
        RETREATS
    </h3>
</div>
<div class="col-10 d-flex flex-wrap justify-content-center align-items-center w-100">
    <h3 class="available">
        PHOTOSHOOTS
    </h3>
</div>
<div class="col-10 d-flex flex-wrap justify-content-center align-items-center w-100">
    <p class="about available">
        CAMPAIGNS
    </p>
</div>
<div class="col-10 d-flex flex-wrap justify-content-center align-items-center w-100 mb-4">
    <p class="about available">
        COLLABORATIONS
    </p>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100">
    <button onclick="document.location='#oder'" class="btn-contact">
        <p class="botton-text">
            CONTACT
        </p>
    </button>
</div>
<div class="col-10 d-flex flex-wrap justify-content-center align-items-center w-100 mb-4">
    <h3 class="instagram">
        FOLLOW US ON INSTAGRAM <a href="#">@THEHUNTERGREENHOUSE</a>
    </h3>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-contact">
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 mb-2">
    <h3>
        WHAT OUR GUESTS ARE SAYING
    </h3>
</div>
<div class="col-10 d-flex justify-content-start align-items-center w-100 mb-2">
    <p class="about">
        "Our stay at the Hunter Greenhouse was absolutely amazing. We had the best time relaxing with friends over good wine and great food in a beautiful space that we literally wanted to move into and never leave....." - <em>Alyssa</em>
    </p>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-contact">
</div>
<div class="col-10 d-flex justify-content-start align-items-center w-100 mb-2">
    <p class="about">
        "Based on the photos, I had high expectations for the space, but it somehow still went above and beyond what was expected. The home is not only insanely beautiful, Danielle and Ely have gone above and beyond with the small details - candles, extra blankets, games, records, beautiful kitchen items, etc. This home is a dream!" - <em>Amber</em>
    </p>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-contact">
</div>
<div class="col-10 d-flex justify-content-start align-items-center w-100 mb-2">
    <p class="about">
        "We arrived to your house, and found a home. Thank you for all of your hard work + vision in creating + sharing ‘The Hunter Greenhouse’. Our stay exceeded all of our expectations and made for a weekend we will never forget." - <em>Richard</em>
    </p>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-contact">
</div>
<div class="col-10 d-flex justify-content-start align-items-center w-100 mb-2">
    <p class="about">
        "Staying at Danielle + Ely's place was truly magically. With all the snow and the large windows it felt like we spent the weekend in a snow globe. Everything in the house was put together with so much love and attention to detail..." - <em>Kathrin</em>
    </p>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-contact">
</div>
<div class="col-10 d-flex justify-content-start align-items-center w-100">
    <p class="about">
        "The Greenhouse is such a special place. Danielle and Ely went above and beyond. From the moment we booked, to the time we checked out, everything was perfect. The home is centrally located to town, some of the best hikes, waterfalls and restaurants. They clearly have an eye for design, but also know how to give their guests the full airbnb experience with thoughtful recommendations, prompt communication and so much more. We can't wait to return!" - <em>Naysa</em>
    </p>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 mb-2">
    <button onclick="document.location='#oder'">
        <p class="botton-text">
            BOOK YOUR STAY!
        </p>
    </button>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-brend">
</div>
<!-- FAVORITE THINGS -->
<div id="favorite" class="col-10 d-flex justify-content-start align-items-center w-100 mt-3">
    <h3>
        THESE ARE A FEW OF OUR FAVORITE THINGS
    </h3>
</div>
<div class="col-12 d-flex flex-wrap justify-content-center align-items-center w-100">
    <div class="row d-flex justify-content-around align-items-center w-100">
        <div class="col-sm-3 col-10 d-flex justify-content-center align-items-center w-100 favor1-col">
            <img class="interior favor1" src="<?php echo get_template_directory_uri()?>/assets/img/favorites-things1.jpg" alt="img">
        </div>
        <div class="col-sm-3 col-10 d-flex justify-content-center align-items-center w-100">
            <img class="interior favor1" src="<?php echo get_template_directory_uri()?>/assets/img/favorites-things2.jpg" alt="img">
        </div>
        <div class="col-sm-3 col-10 d-flex justify-content-center align-items-center w-100 favor3-col">
            <img class="interior favor1" src="<?php echo get_template_directory_uri()?>/assets/img/favorites-things3.jpg" alt="img">
        </div>
        <div class="w-100"></div>
        <div class="col-sm-3 col-10 d-flex justify-content-center align-items-center w-100 favor1-col">
            <img class="interior favor1" src="<?php echo get_template_directory_uri()?>/assets/img/favorites-things4.jpg" alt="img">
        </div>
        <div class="col-sm-3 col-10 d-flex justify-content-center align-items-center w-100">
            <img class="interior favor1" src="<?php echo get_template_directory_uri()?>/assets/img/favorites-things5.jpg" alt="img">
        </div>
        <div class="col-sm-3 col-10 d-flex justify-content-center align-items-center w-100 favor3-col">
            <img class="interior favor1" src="<?php echo get_template_directory_uri()?>/assets/img/favorites-things6.jpg" alt="img">
        </div>
    </div>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-favor-bottom">
</div>
<!-- BRANDS WE LOVE -->
<div class="col-10 d-flex justify-content-start align-items-center w-100">
    <h3>
        BRANDS WE LOVE, TRUST, AND SUPPORT
    </h3>
</div>
<div class="col-5 col-sm-4 d-flex justify-content-center align-items-center w-100">
    <img class="brend" src="<?php echo get_template_directory_uri()?>/assets/img/parachute_logo.png" alt="img">
</div>
<div class="col-5 col-sm-4 d-flex justify-content-center align-items-center w-100">
    <img class="brend" src="<?php echo get_template_directory_uri()?>/assets/img/hudson+valley+logo.png" alt="img">
</div>
<div class="col-5 col-sm- d-flex justify-content-center align-items-center w-100">
    <img class="brend" src="<?php echo get_template_directory_uri()?>/assets/img/Cafe+logo.png" alt="img">
</div>
<div class="col-5 col-sm- d-flex justify-content-center align-items-center w-100">
    <img class="brend" src="<?php echo get_template_directory_uri()?>/assets/img/Fireclay+tile.png" alt="img">
</div>
<div class="col-5 col-sm- d-flex justify-content-center align-items-center w-100">
    <img class="brend" src="<?php echo get_template_directory_uri()?>/assets/img/marshall.png" alt="img">
</div>
<div class="col-5 col-sm- d-flex justify-content-center align-items-center w-100">
    <img class="brend" src="<?php echo get_template_directory_uri()?>/assets/img/West_Elm_logo.png" alt="img">
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-lovebrend">
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100">
    <img class="interior" src="<?php echo get_template_directory_uri()?>/assets/img/foto-before-contform.jpg" alt="img">
</div>
<div id="oder" class="col-10 d-flex justify-content-start align-items-center w-100">
    <h3 class="text-before-form">
        WE LIKE MAIL! SEND US A MESSAGE AND WE'LL GET BACK TO YOU AS SOON AS WE CAN ♥
    </h3>
</div>
<!--ODER-->
<div class="col-12 d-flex justify-content-center align-items-center w-100">
    <form method="post" class="needs-validation">
        <div class="form-row">
            <div class="col-10 col-name">
                <label class="about text-name">Name*</label>
            </div>
            <div class="col-6 mb-3 pr-2">
                <input name="user_first_name" type="text" name="user_name" class="form-control" id="validationCustom03" required>
                <label class="about after-field" for="validationCustom01">First Name</label>
            </div>
            <div class="col-6 mb-3 pl-2">
                <input name="user_last_name" type="text" class="form-control" id="validationCustom03" required>
                <label class="about after-field" for="validationCustom01">Last Name</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col-10 col-name">
                <label class="about text-name" for="inputEmail4">Email Address*</label>
            </div>
            <div class="col-12">
                <input name="user_email" type="email" class="form-control" id="inputEmail4" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-10 col-subject">
                <label class="about text-name" for="validationCustom01">Subject*</label>
            </div>
            <div class="col-12">
                <input name="subject" type="text" class="form-control" id="validationCustom03" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-10 col-subject">
                <label class="about text-name" for="validationCustom01">Message*</label>
            </div>
            <div class="col-12">
                <input name="message" type="text" class="form-control message-form" id="validationCustom03" required>
            </div>
        </div>
        <div class="col-10 d-flex justify-content-start align-items-center w-100">
            <button type="submit" class="btn-form">
                <p class="about text-btn-form">
                    Submit
                </p>
            </button>
        </div>
    </form>
</div>
<div class="col-10 d-flex justify-content-center align-items-center w-100 linear-end">
</div>
<?php
get_footer(); ?>