<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
?>
<!-- banner starts here-->
<section class="FaqSection">
	<div class="FaqInnerArea">
		<?php
		include('phplib/db_config.php');
		$result=mysqli_query($con,'select * from xll_faq');
		while($row=mysqli_fetch_array($result))
		{
		?>
		<h4>Q. <?php echo $row['faq_question']; ?></h4>
		<p>A. <?php echo $row['faq_answer']; ?></p>
		<?php
		}
		?>
		</div>
</section>
<!-- banner ends here-->

<br>
<!-- footer -->
<?php include('include/footer.php'); ?> 
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
</body>
</html>