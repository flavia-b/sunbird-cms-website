<div class="tj-overlay hide"></div>

<!--Content Page-->
<?php if($this->_type != 'error'): ?>
<div class="wrapper">
	<?php if ($this->countModules('header')): ?>
		<header id="header" class="tjbase-header">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="header" style="tjbase" />
				</div>
			</div>
		</header>
	<?php endif; ?>

	<?php if ($this->countModules('banner')): ?>
		<div id="banner" class="tjbase-banner">
			<jdoc:include type="modules" name="banner" style="tjbase" />
		</div>
	<?php endif; ?>


	<?php if ($this->countModules('submenu-1')): ?>
		<div id="submenu-1" class="tjbase-submenu-1">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="submenu-1" style="tjbase" />
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($this->countModules('submenu-2')): ?>
		<div id="submenu-2" class="tjbase-submenu-2">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="submenu-2" style="tjbase" />
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($this->countModules('breadcrumb')): ?>
		<div id="breadcrumb" class="tjbase-breadcrumb" role="contentinfo">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="breadcrumb" style="tjbase" />
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="blank"></div>
	<div id="message-component" class="tjbase-message" role="alert">
		<div class="container">
			<jdoc:include type="message" />
		</div>
	</div>

	<?php if ($this->countModules('maintop')): ?>
		<div id="maintop" class="tjbase-maintop" role="contentinfo">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="maintop" style="tjbase" />
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($this->countModules('showcase')): ?>
		<div id="showcase" class="tjbase-showcase" role="contentinfo">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="showcase" style="tjbase" />
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($this->countModules('featured-top')): ?>
		<div id="featured-top" class="tjbase-featured-top" role="contentinfo">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="featured-top" style="tjbase" />
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div id="mainbodyblock" class="tjbase-mainbodyblock">
		<div class="container">
			<div id="mainbody" class="row tjbase-mainbody" >
				<?php if ($this->countModules('sidebar-left')): ?>
					<div id="maincontent" class="col-xs-12 col-sm-<?php echo $mainBodyWidth;?> col-sm-push-<?php echo $sidebarLeftWidth; ?>" role="main">
						<?php if ($this->countModules('content-top')): ?>
							<div id="content-top" class="tjbase-content-top">
								<div class="row">
									<jdoc:include type="modules" name="content-top" style="tjbase" />
								</div>
							</div>
						<?php endif; ?>
						<div id="content" class="tjbase-content">
							<jdoc:include type="component" />
						</div>
						<?php if ($this->countModules('content-bottom')): ?>
							<div id="content-bottom" class="tjbase-content-bottom">
								<div class="row">
									<jdoc:include type="modules" name="content-bottom" style="tjbase" />
								</div>
							</div>
						<?php endif; ?>
					</div>
					<aside id="sidebarLeft" class="tjbase-sidebar-left col-xs-12 col-sm-<?php echo $sidebarLeftWidth; ?> col-sm-pull-<?php echo $mainBodyWidth;?>" role="complementary">
						<jdoc:include type="modules" name="sidebar-left" style="tjbase" />
					</aside>
				<?php endif; ?>
				<?php if (!$this->countModules('sidebar-left')): ?>
					<div id="maincontent" class="col-xs-12 col-sm-<?php echo $mainBodyWidth;?>" role="main">
						<?php if ($this->countModules('content-top')): ?>
							<div id="content-top" class="tjbase-content-top">
								<div class="row">
									<jdoc:include type="modules" name="content-top" style="tjbase" />
								</div>
							</div>
						<?php endif; ?>
						<div id="content" class="tjbase-content">
							<jdoc:include type="component" />
						</div>
						<?php if ($this->countModules('content-bottom')): ?>
							<div id="content-bottom" class="tjbase-content-bottom">
								<div class="row">
									<jdoc:include type="modules" name="content-bottom" style="tjbase" />
								</div>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php if ($this->countModules('sidebar-right')): ?>
					<aside id="sidebarRight" class="tjbase-sidebar-right col-xs-12 col-sm-<?php echo $sidebarRightWidth; ?>" role="complementary">
						<jdoc:include type="modules" name="sidebar-right" style="tjbase" />
					</aside>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php if ($this->countModules('featured-bottom')): ?>
		<div id="featured-bottom" class="tjbase-featured-bottom" role="contentinfo">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="featured-bottom" style="tjbase" />
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($this->countModules('mainbottom')): ?>
		<div id="mainbottom" class="tjbase-mainbottom" role="contentinfo">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="mainbottom" style="tjbase" />
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($this->countModules('bottomline')): ?>
		<div id="bottomline" class="tjbase-bottomline" role="contentinfo">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="bottomline" style="tjbase" />
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($this->countModules('footer')): ?>
		<div id="footer" class="tjbase-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="footer" style="tjbase" />
					<div class="text-center">
								<?php if($facebookLink){ ?>
									<div class="px-4 d-inline-block">
										<a href="<?php echo $facebookLink; ?>" target="_blank"><i class="fa fa-facebook h4-font-size text-white"></i></a>	
								</div>
							<?php } ?>
								<?php if($twitterLink){ ?>
										<div class="px-4 d-inline-block">
										<a href="<?php echo $twitterLink; ?>" target="_blank"><i class="fa fa-twitter h4-font-size"></i></a>	
								</div>
							<?php } ?>
							<?php if($pinterestLink){ ?>
									<div class="px-4 d-inline-block">
										<a href="<?php echo $pinterestLink; ?>" target="_blank"><i class="fa fa-pinterest h4-font-size text-white"></i></a>	
									</div>
								</div>
							<?php } ?>
							<?php if($linkedinLink){ ?>
									<div class="px-4 d-inline-block">
										<a href="<?php echo $linkedinLink; ?>" target="_blank"><i class="fa fa-linkedin h4-font-size text-white"></i></a>	
									</div>
								</div>
							<?php } ?>
							<?php if($youTubeLink){ ?>
									<div class="px-4 d-inline-block">
										<a href="<?php echo $youTubeLink; ?>" target="_blank"><i class="fa fa-youtube h4-font-size text-white"></i></a>	
									</div>
								</div>
							<?php } ?>
							<?php if($googlePlusLink){ ?>
									<div class="px-4 d-inline-block">
										<a href="<?php echo $googlePlusLink; ?>" target="_blank"><i class="fa fa-google-plus h4-font-size text-white"></i></a>	
									</div>
								</div>
							<?php } ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($this->countModules('footer')): ?>
		<div id="footer" class="tjbase-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="footer" style="tjbase" />
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($this->countModules('copyright')): ?>
		<footer id="copyright" class="tjbase-copyright" role="contentinfo">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="copyright" style="tjbase" />
				</div>
			</div>
		</footer>
	<?php endif; ?>

	<?php if ($this->countModules('debug')): ?>
		<div id="debug" class="tjbase-debug hide hidden">
			<jdoc:include type="modules" name="debug" style="tjbase" />
		</div>
	<?php endif; ?>
</div>
<!--/Content Page-->

<?php else: ?>

<!--Error Page-->
<div class="wrapper">
	<?php 
		$modules = JModuleHelper::getModules( 'header' );
		$attribs['style'] = 'tjbase';
		if ($modules): ?>
		<header id="header" class="tjbase-header">
			<div class="container">
				<div class="row">
					<?php
						foreach ($modules AS $module ) {
							echo JModuleHelper::renderModule( $module, $attribs );
						}
					?>
				</div>
			</div>
		</header>
	<?php endif; ?>

	
	<div id="mainbodyblock" class="tjbase-mainbodyblock">
		<div class="container">
			<div id="mainbody" class="row tjbase-mainbody" >
				<?php  if ($this->error->getCode() == '404') {
					echo $error404;
				} else {
					echo $error500;
				} ?>
			</div>
		</div>
	</div>
	
	<?php 
		$modules = JModuleHelper::getModules( 'footer' );
		$attribs['style'] = 'tjbase';
		if ($modules): ?>
		<footer id="copyright" class="tjbase-copyright" role="contentinfo">
			<div class="container">
				<div class="row">
				<?php
					foreach ($modules AS $module ) {
						echo JModuleHelper::renderModule( $module, $attribs );
					}
					?>
				</div>
			</div>
		</footer>
	<?php endif; ?>
<?php endif; ?>
<!--/Error Page-->