<?php 
require_once('../imports/menudata.php');
?>
<html>
<head>
<link href="style.css" rel="stylesheet" />
</head>
<body>
	<div id="navcontainer">
		<!--MAIN MENU-->
		<ul class="top-level">
		<?php
		foreach ($aMenu as $page){ ?>
			<li>
				<a href="<?php echo $page['url']; ?>"><?php echo $page['name']; ?></a>
				<!--CHECKS IF LIST ITEM HAS SUB PAGES-->
				<?php if(isset($page['subpages'])){ ?>
					<ul class="second-level">
						<?php foreach ($page['subpages'] as $subpage){ ?>
						<li>
							<a href="<?php echo $subpage['url']; ?>"><?php echo $subpage['name']; ?></a>
							<!--CHECKS IF SUB-LIST ITEM HAS SUB PAGES-->
							<?php if(isset($subpage['subpages'])){ ?>
								<ul class="third-level">
									<?php foreach ($subpage['subpages'] as $subpage){ ?>
									<li>
										<a href="<?php echo $subpage['url']; ?>"><?php echo $subpage['name']; ?></a>
									</li>
									<?php } ?>
								</ul>
							<?php } ?>
						</li>
						<?php } ?>
					</ul>
				<?php } ?>
			</li>
			<?php
		} ?>
		</ul>
	</div>
</body>
</html>