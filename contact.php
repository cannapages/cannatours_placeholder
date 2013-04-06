<?php require('header.php') ?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span8 offset2">
          <div class="row-fluid main_container">
            <div class="span12">
							<?php require('partials/canna_heading.php') ?>
							<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
									<li class="active"><a href="#basic" data-toggle="tab">Tourists</a></li>
									<li><a href="#business" data-toggle="tab">Business Owners</a></li>
									<li><a href="#investors" data-toggle="tab" id="investor_link">Investors</a></li>
							</ul>
							<div id="my-tab-content" class="tab-content">
									<div class="tab-pane active" id="basic">
										<?php require('forms/basic_contact_form.php') ?>
									</div>
									<div class="tab-pane" id="business">
										<?php require('forms/facility_contact_form.php') ?>
									</div>
									<div class="tab-pane" id="investors">
										<?php require('forms/investor_contact_form.php') ?>
									</div>
							</div>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

<?php if(isset($_GET['intent'])) {?>
<script>
	$(document).ready( function() {
		$("#investor_link").click();
	})
</script>
<?php } ?>

<?php require('footer.php') ?>
