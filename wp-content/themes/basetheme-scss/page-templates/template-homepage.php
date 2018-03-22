<?php
/*

Template Name: template homepage

*/

get_header(); ?>

<div id="wrapper" class="page-wrapper">

  <div id="pinContainer">
  	<div id="slideContainer">
  		<section class="panel panelOne">
  			<div class="entrance-wrapper">
          <div class="container">
            <div class="row">
              <div class="col col-12 col-md-4 mx-auto paddingTop">
                <div class="wow fadeIn backOne" data-wow-delay="2s" data-wow-duration="2s">
                    <p class="main-content">Start the process off right. Join the mission thats changing technology.</p>
              </div>
              </div>
              <div class="col col-12 col-md-8 mx-auto text-center paddingTop">

                <div class="something-box">

                  <!-- <a class="button button-front" href="#">Start The Journey Here</a> -->

                </div>

              </div>

            </div>

          </div>


        </div>
  		</section>
  		<section class="panel panelTwo">

  		</section>
  		<section class="panel panelThree">

  		</section>
  		<section class="panel panelFour">

        <div class="center-content mx-auto text-center paddingTop">

          <h1>Hello</h1>
          <h2>Something Here up in here</h2>

        </div>

  		</section>
  	</div>
    <script>
    $(function () { // wait for document ready
      // init
      var controller = new ScrollMagic.Controller();

      // define movement of panels
      var wipeAnimation = new TimelineMax()
      // animate to second panel
      .to("#slideContainer", 0.5, {z: -190, delay: 3})		// move back in 3D space
      .to("#slideContainer", 0.5,   {x: "-25%"})	// move in to first panel
      .to("#slideContainer", 0.5, {z: 0})				// move back to origin in 3D space
      // animate to third panel
      .to("#slideContainer", 0.5, {z: -150, delay: 1})
      .to("#slideContainer", .5,   {x: "-50%"})
      .to("#slideContainer", 0.5, {z: 0})
      // animate to forth panel
      .to("#slideContainer", 0.5, {z: -150, delay: 1})
      .to("#slideContainer", .5,   {x: "-75%"})
      .to("#slideContainer", 2, {z: 0});
      wipeAnimation.repeat(1).yoyo(true).repeatDelay(0.5).play(0.5);


      // create scene to pin and link animation
      new ScrollMagic.Scene({
        triggerElement: "#pinContainer",
        triggerHook: "onLeave",
        duration: 0,
      })
      .setPin("#pinContainer")
      .setTween(wipeAnimation)
      .addTo(controller);
    });

    </script>
  </div>

  <div class="second-section">

        <section class="panel1 panelA white">

          <!-- <div>

              <?php if( have_rows('panel1_carousel') ): ?>

                  	<ul class="slides">

                  	<?php while( have_rows('panel1_carousel') ): the_row();

                  		// vars
                  		$text = get_sub_field('slide_heading');
                  		$content = get_sub_field('slide_content');
                  		$image = get_sub_field('slide_image');

                  		?>


                        <li class="slide">

                          <div class="box-wrapper mx-auto text-center">
                          <img src="<?php echo $image; ?>" alt="image slide">
                          <h1><?php echo $text ?></h1>
                          <div class="card-content">
                            <?php echo $content; ?>
                          </div>

                        </div>

                        </li>



                  	<?php endwhile; ?>

                  	</ul>

        <?php endif; ?>

          </div> -->

        </section>
        <section class="panel1 panelB whitesmoke">

        </section>
        <section class="panel1 panelC whitesmoke">

        </section>
        <section class="panel1 panelD midnightblue">

        </section>
        <script>
          $(function () { // wait for document ready
            // init
            var controller = new ScrollMagic.Controller({
              globalSceneOptions: {
                triggerHook: 'onLeave'
                offset: "100%",
              }
            });

            // get all slides
            var slides = document.querySelectorAll("section.panel1");

            // create scene for every slide
            for (var i=0; i<slides.length; i++) {
              new ScrollMagic.Scene({
                  triggerElement: slides[i]
                })
                .setPin(slides[i])
                .addTo(controller);
            }
          });
        </script>

  </div>


</div>

<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       150,
      callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    }
  );
  wow.init();
  // document.getElementById('moar').onclick = function() {
  //   var section = document.createElement('section');
  //   section.className = 'section--purple wow fadeInDown';
  //   this.parentNode.insertBefore(section, this);
  // };

</script>


<?php get_footer(); ?>
