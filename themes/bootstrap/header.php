<?php if (!defined('FLUX_ROOT')) exit; ?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<?php if (isset($metaRefresh)): ?><meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" /><?php endif ?>
		<title><?php echo Flux::config('SiteTitle'); if (isset($title)) echo ": $title" ?></title>
        <link rel="icon" type="image/x-icon" href="./favicon.ico" />
		<link href="<?php echo $this->themePath('css/flux/unitip.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
		<?php if (Flux::config('EnableReCaptcha')): ?><script src='https://www.google.com/recaptcha/api.js'></script><?php endif ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $this->themePath('css/flux.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link href="<?php echo $this->themePath('css/sticky-footer-navbar.css') ?>" rel="stylesheet">
	</head>
	<body>
        <!-- Fixed navbar -->
        <?php include $this->themePath('main/navbar.php', true) ?>

        <div class="container">
		<?php //include 'main/sidebar.php' ?>
        <?php //include 'main/loginbox.php' ?>

        <?php if (Flux::config('DebugMode') && @gethostbyname(Flux::config('ServerAddress')) == '127.0.0.1'): ?>
            <p class="notice">Please change your <strong>ServerAddress</strong> directive in your application config to your server's real address (e.g., myserver.com).</p>
        <?php endif ?>

        <!-- Messages -->
        <?php if ($message=$session->getMessage()): ?>
            <p class="message"><?php echo htmlspecialchars($message) ?></p>
        <?php endif ?>

        <!-- Sub menu -->
        <?php include $this->themePath('main/submenu.php', true) ?>

        <!-- Page menu -->
        <?php include $this->themePath('main/pagemenu.php', true) ?>

        <!-- Credit balance -->
        <?php //if (in_array($params->get('module'), array('donate', 'purchase'))) include 'main/balance.php' ?>
