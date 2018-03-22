<?php
/*

Template Name: template home

*/

?>

<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<style media="screen">

#pinContainer {
  width: 100%;
  height: 100%;
  overflow: hidden;
  -webkit-perspective: 1000;
          perspective: 1000;
}
#slideContainer {
  width: 400%; /* to contain 4 panels, each with 100% of window width */
  height: 100%;
}
.panel {
  height: 100vh;
  width: 25%; /* relative to parent -> 25% of 400% = 100% of window width */
  float: left;
}

.royalblue {
background-color: royalblue;
}

.whitesmoke{
background-color: whitesmoke;
}

</style>

<div id="wrapper" class="page-wrapper">

    <div id="pinContainer">
    	<div id="slideContainer">
    		<section class="panel royalblue">
    			<b>ONE</b>
    		</section>
    		<section class="panel whitesmoke">
    			<b>TWO</b>
    		</section>
    		<section class="panel royalblue">
    			<b>THREE</b>
    		</section>
    		<section class="panel whitesmoke">
    			<b>FOUR</b>
    		</section>
    	</div>
    </div>
    <script>
    	$(function () { // wait for document ready
    		// init
    		var controller = new ScrollMagic.Controller();

    		// define movement of panels
    		var wipeAnimation = new TimelineMax()
    			// animate to second panel
    			.to("#slideContainer", 0.5, {z: -150})		// move back in 3D space
    			.to("#slideContainer", 1,   {x: "-25%"})	// move in to first panel
    			.to("#slideContainer", 0.5, {z: 0})				// move back to origin in 3D space
    			// animate to third panel
    			.to("#slideContainer", 0.5, {z: -150, delay: 1})
    			.to("#slideContainer", 1,   {x: "-50%"})
    			.to("#slideContainer", 0.5, {z: 0})
    			// animate to forth panel
    			.to("#slideContainer", 0.5, {z: -150, delay: 1})
    			.to("#slideContainer", 1,   {x: "-75%"})
    			.to("#slideContainer", 0.5, {z: 0});

    		// create scene to pin and link animation
    		new ScrollMagic.Scene({
    				triggerElement: "#pinContainer",
    				triggerHook: "onLeave",
    				duration: "500%"
    			})
    			.setPin("#pinContainer")
    			.setTween(wipeAnimation)
    			.addIndicators() // add indicators (requires plugin)
    			.addTo(controller);
    	});
    </script>


</div>






<?php get_footer(); ?>
