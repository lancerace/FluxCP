<?php if (!defined('FLUX_ROOT')) {
    exit;
} ?>
</div>
<!--  <div class="card maincard"-->
</div>
<!-- row -->
<div class="row mt-3">
  <!--Panel-->
  <div class="col mr-3 z-depth-3">
    <div class="row cardroundedheader">
      <div class="col">
        <div class="text-center mr-5">
          <img src=<?php echo $this->themePath('img/poring.jpg') ?> class="img-fluid" alt="poring.jpg">
          <h4 style="line-height:60px;">Revo-classic</h4>
        </div>
        <hr>
      </div>
    </div>
    <div class="row cardroundedfooter">
      <div class="col pl-4">
          <div class="cardfooterfont">
        Our server is based on Revo-classic version. Thriving to bring challenging and fun environment for all players.
          </div>
      </div>
    </div>
  </div>

  <div class="col ml-3 z-depth-3">
    <div class="row cardroundedheader">
      <div class="col">
        <div class="text-center mr-5">
          <img src=<?php echo $this->themePath('img/poring.jpg') ?> class="img-fluid" alt="poring.jpg">
          <h4 style="line-height:60px;">Low Rates</h4>
        </div>
        <hr>
      </div>
    </div>
    <div class="row cardroundedfooter">
      <div class="col pl-4">
        <div class="cardfooterfont">
    Server rates will be 2.5/2.5/1.5. Providing challenging community to keep your adventure going.
        </div>
      </div>
    </div>
  </div>

</div>

<div class="row mt-3 z-depth-3">
  <!--Panel-->
  <div class="col mr-3">
    <div class="row cardroundedheader">
      <div class="col">
        <div class="text-center mr-5">
          <img src=<?php echo $this->themePath('img/poring.jpg') ?> class="img-fluid" alt="poring.jpg">
          <h4 style="line-height:60px;">Mechanic</h4>
        </div>
        <hr>
      </div>
    </div>
    <div class="row cardroundedfooter">
      <div class="col pl-4">
          <div class="cardfooterfont">
    Asia Ragnarok mechanic follows the correct monster stats and attack calculation.
          </div>
      </div>
    </div>
  </div>

  <div class="col ml-3 z-depth-3">
    <div class="row cardroundedheader">
      <div class="col">
        <div class="text-center mr-5">
          <img src=<?php echo $this->themePath('img/poring.jpg') ?> class="img-fluid" alt="poring.jpg">
          <h4 style="line-height:60px;">Database</h4>
        </div>
        <hr>
      </div>
    </div>
    <div class="row cardroundedfooter">
      <div class="col pl-4">
        <div class="cardfooterfont">
     Our data are based on RE:Start Database, so do reference the data from there if you are planning your battle ahead!
        </div>
      </div>
    </div>
  </div>

</div>
















</div> <!--left section box-->


<div class="col-6 col-md-4">
  <div class="row">
    <div class="col-18 col-md-12">
      <div class="card">
        <h3 class="card-header primary-color white-text">Server Status</h3>
        <div class="card-body">
          <?php include $this->themePath('server/status.php', true) ?>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-18 col-md-12">
      <a class="btn btn-default btn-lg" ripple-radius>DOWNLOAD</a>
    </div>
  </div>

  <!--media icon -->
  <div class="row mt-3">
    <div class="col-18 col-md-12">
      <div class="card">
        <h3 class="card-header teal lighten-2 white-text">Facebook</h3>
        <div class="card-body">
          <iframe class="embed-responsive z-depth-1" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAsia-Ragnarok-2142515232693868%2F%3Fmodal%3Dadmin_todo_tour&tabs&width=340&height=220&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
            width="340" height="210" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
      </div>
    </div>
  </div> <!-- <div class="row mt-3"> -->
</div><!--col-6 col-md-4" -->

</div> <!--content wrapper -->
</div><!-- container fluid !-->
</div><!--div id="bgimg">-->



<!--[if lt IE 9]>
		<script src="<?php echo $this->themePath('js/ie9.js') ?>" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitpngfix.js') ?>"></script>
		<![endif]-->

<script type="text/javascript" src="<?php echo $this->themePath('js/jquery-3.3.1.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo $this->themePath('js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo $this->themePath('js/mdb.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo $this->themePath('js/popper.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo $this->themePath('js/flux.datefields.js') ?>"></script>
<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitip.js') ?>"></script>

<script type="text/javascript">

	$(document).ready(function() {
		var inputs = 'input[type=text],input[type=password],input[type=file]';
		$(inputs).focus(function() {
			$(this).css({
				'background-color': '#f9f5e7',
				'border-color': '#dcd7c7',
				'color': '#726c58'
			});
		});
		$(inputs).blur(function() {
			$(this).css({
				'backgroundColor': '#ffffff',
				'borderColor': '#dddddd',
				'color': '#444444'
			}, 500);
		});
		$('.menuitem a').hover(
			function() {
				$(this).fadeTo(200, 0.85);
				$(this).css('cursor', 'pointer');
			},
			function() {
				$(this).fadeTo(150, 1.00);
				$(this).css('cursor', 'normal');
			}
		);
		$('.money-input').keyup(function() {
			var creditValue = parseInt($(this).val() / <?php echo Flux::config('CreditExchangeRate') ?>, 10);
			if (isNaN(creditValue))
				$('.credit-input').val('?');
			else
				$('.credit-input').val(creditValue);
				}).keyup();
				$('.credit-input').keyup(function() {
				  var moneyValue = parseFloat($(this).val() * <?php echo Flux::config('CreditExchangeRate') ?>);
				  if (isNaN(moneyValue))
				    $('.money-input').val('?');
				  else
				    $('.money-input').val(moneyValue.toFixed(2));
				}).keyup();

				// In: js/flux.datefields.js
		processDateFields();
	});

	function reload() {
		window.location.href = '<?php echo $this->url ?>';
	}
</script>

<script type="text/javascript">
	function updatePreferredServer(sel) {
		var preferred = sel.options[sel.selectedIndex].value;
		document.preferred_server_form.preferred_server.value = preferred;
		document.preferred_server_form.submit();
	}

	function updatePreferredTheme(sel) {
		var preferred = sel.options[sel.selectedIndex].value;
		document.preferred_theme_form.preferred_theme.value = preferred;
		document.preferred_theme_form.submit();
	}

	// Preload spinner image.
	var spinner = new Image();
	spinner.src = '<?php echo $this->themePath('img/spinner.gif ') ?>';

	function refreshSecurityCode(imgSelector) {
		$(imgSelector).attr('src', spinner.src);

		// Load image, spinner will be active until loading is complete.
		var clean = <?php echo Flux::config('UseCleanUrls') ? 'true' : 'false' ?>;
		var image = new Image();
		image.src = "<?php echo $this->url('captcha') ?>" + (clean ? '?nocache=' : '&nocache=') + Math.random();

		$(imgSelector).attr('src', image.src);
	}

	function toggleSearchForm() {
		//$('.search-form').toggle();
		$('.search-form').slideToggle('fast');
	}
</script>

<?php if (Flux::config('EnableReCaptcha') && Flux::config('ReCaptchaTheme')): ?>
<script type="text/javascript">
	var RecaptchaOptions = {
		theme: '<?php echo Flux::config('
		ReCaptchaTheme ') ?>'
	};
</script>
<?php endif ?>

</body>

</html>
