<?php
defined('EXEC') or die;
include $main->root.'/views/controller.php';
?>
<html>
	<head>
	<link href="/panel/css/style.css" rel="stylesheet">
	<link href="/panel/css/fontello.css" rel="stylesheet">
	</head>
	<body>
		<div id="leftPanel">
		<?php print Render::view($includePath.'menu',true);?>
		</div>
		<div id="dashBoard">
			<div id="topPanel">
			<?php print $page;?>
			</div>
		</div>
	</body>
</html>