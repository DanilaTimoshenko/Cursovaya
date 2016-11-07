<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<nav class="collapse navbar-collapse navbar-right" role="navigation">
		<div class="main-menu">
			<ul class="nav navbar-nav navbar-right">
				<?/*
				<li>
					<a href="index.html" >Home</a>
				</li>
				<li><a href="about.html">About</a></li>
				<li><a href="service.html">Service</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
					<div class="dropdown-menu">
						<ul>
							<li><a href="404.html">404 Page</a></li>
							<li><a href="gallery.html">Gallery</a></li>
						</ul>
					</div>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
					<div class="dropdown-menu">
						<ul>
							<li><a href="blog-fullwidth.html">Blog Full</a></li>
							<li><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
							<li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>
						</ul>
					</div>
				</li>
				<li><a href="contact.html">Contact</a></li>
			*/?>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

			</ul>
		</div>
	</nav>
<?endif?>