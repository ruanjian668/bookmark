<!DOCTYPE html>
<html>
<head>
	<title><?php echo unmark_phrase('Sorry, Could Not Add this Mark'); ?></title>
	<link href="https://cdn.jsdelivr.net/gh/gdtool/testing/assets/css/fonts.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/unmark.css">
	<link rel="icon" type="image/ico" href="/favicon.ico">
</head>
<body class="unmark-solo" id="unmark-login">
	<div id="error-wrapper">
		<div id="error-icon"><img src="https://cdn.jsdelivr.net/gh/gdtool/testing/assets/images/icons/logo.png" /></div>
		<h1>Yikes!</h1>
		<p><?php print current($errors); ?></p>
		<p><?php echo unmark_phrase('This mark could not be added to your stream.')?></p>
		<p><a href="/">BACK</a>
	</div>
</body>
</html>
