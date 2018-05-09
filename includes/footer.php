<!-- Including JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!-- Including bootstrap bundle CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<!-- Including Materialize JS file -->
<script type="text/javascript" src="assets/js/materialize.js"> </script>

<script src="https://cdn.jsdelivr.net/kute.js/1.5.0/kute.min.js"></script> <!-- core KUTE.js -->

<script src="https://cdn.jsdelivr.net/kute.js/1.5.0/kute-svg.min.js"></script> <!-- SVG Plugin -->
<!-- Including SVG  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="assets/js/grid.js"></script>

<script src="assets/js/search.js"></script>

<!-- <script src="assets/js/scrollawarehover.js"></script> -->

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Including input Animation Js -->
<script type="text/javascript" src="assets/js/input-animation.js"> </script>
<!-- Including bootstrap datepicker js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<!-- Slider JS File -->
<script type="text/javascript" src="assets/js/slider.js"> </script>


<!-- Main JS File -->
<script type="text/javascript" src="assets/js/main.js"> </script>

<!-- Menu Slider Js File -->
<!-- <script type="text/javascript" src="assets/js/menu-slider.js"> </script> -->

<script>
	$(function() {
		Grid.init();
	});
		$('#start-date').datepicker({
	});
		$('#end-date').datepicker({
	});



	// $(document).ready(function(){
	//   $('.process-slider').slick({
	//     // autoplay : true,
	//     // autoplaySpeed: 5000,
	//     prevArrow:"<i id='prevProcess' class='a-left control-c  slick-prev fas fa-arrow-left'></i> ",
 //   		nextArrow:"<i id='nextProcess' class='a-left control-c  slick-next fas fa-arrow-right'></i>"

	//   });
	// });
	</script>
	<script>
		(function() {
			// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
			if (!String.prototype.trim) {
				(function() {
					// Make sure we trim BOM and NBSP
					var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
					String.prototype.trim = function() {
						return this.replace(rtrim, '');
					};
				})();
			}

			[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
				// in case the input is already filled..
				if( inputEl.value.trim() !== '' ) {
					classie.add( inputEl.parentNode, 'input--filled' );
				}

				// events:
				inputEl.addEventListener( 'focus', onInputFocus );
				inputEl.addEventListener( 'blur', onInputBlur );
			} );

			function onInputFocus( ev ) {
				classie.add( ev.target.parentNode, 'input--filled' );
			}

			function onInputBlur( ev ) {
				if( ev.target.value.trim() === '' ) {
					classie.remove( ev.target.parentNode, 'input--filled' );
				}
			}
		})();


// var lastScrollTop = 0;
// $(window).scroll(function(event){
//    var st = $(this).scrollTop();
//    if (st > lastScrollTop){
//         slideNumber(i += 1);
//    } else {
//        slideNumber(i -= 1);
//    }
//    lastScrollTop = st;
// });

 $("#customSlider").on('wheel', function(event) {
    if (event.originalEvent.deltaY  < 0) {
        slideNumber(i -= 1);
        console.log(i);
    }
    else {
        slideNumber(i += 1);
        console.log(i);
    }
});


</script>




</body>
</html>