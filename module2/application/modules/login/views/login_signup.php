<html>
    <head>
        <title><?php echo $this->lang->line('main_title');?> - <?php echo $this->lang->line('sign_in'); ?></title>
		
		<!-- BOOTSTRAP STYLES-->
		<link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet" />
		<!-- FONTAWESOME STYLES-->
		<link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet" />
		<!-- CUSTOM STYLES-->
		<link href="<?= base_url() ?>assets/css/custom.css" rel="stylesheet" />

<script>
function Click(){
document.getElementById('linkToClick2').click();
document.getElementById('linkToClick').click();
}
</script>

<script>
function autogetUsername(){
document.getElementById("usernameid").value = "admin";
document.getElementById("passwordid").value = "admin";
}
</script>

	</head>
	<body onload="setTimeout('Click();',0);">
		<div class="container">
			<div class="row text-center ">
				<div class="col-md-12">
					<br /><br />
					<h2><?php echo $this->lang->line('main_title'); ?></h2>
					<h5>( <?=$this->lang->line('login_yourself_to_get_access');?> )</h5>
					<br />
				</div>
			</div>
			<div class="row ">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong><?=$this->lang->line('enter_details_to_login');?></strong>
						</div>
						<?php if(isset($error)) { ?><div class="alert alert-danger"><?=$error;?></div><?php } ?>
						<?php if(isset($message)) { ?><div class="alert alert-info"><?=$message;?></div><?php } ?>
						<div class="panel-body">
							<?php echo form_open('login/valid_signin'); ?>   
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
								<input type="text" name="username" id="usernameid" class="form-control" placeholder="<?=$this->lang->line('your_username');?>" />
								<?php echo form_error('username','<div class="alert alert-danger">','</div>'); ?>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
								<input type="password" class="form-control" name="password" id="passwordid" placeholder="<?=$this->lang->line('your_password');?>" />
								<?php echo form_error('password','<div class="alert alert-danger">','</div>'); ?>
							</div>
							<button id= "linkToClick2" type="submit" style="display: none;" onclick="autogetUsername()">Auto</button>
							<button id= "linkToClick" type="submit" name="submit" class="btn btn-primary"><?php echo $this->lang->line('sign_in');?></button>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>				
		</div>
	</body>
</html>
