<?php
session_start();
echo "Bienvenu sur ton compte ". $_SESSION['pseudo'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>R Play</title>
    <link rel="icon" sizes="144x144" href="/img/RainyPlay_Logo.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.scss">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div id="project-wrapper">
	<div id="project-container">
		<div id="overlay"></div>
		<div id="content">
			<h2>Throne</h2>
			<h3>Bring Me The Horizon</h3>
			<input type="range" value="30" />
			<div id="controls">
				<div class="column"><i class="fa fa-refresh" aria-hidden="true"></i></div>
				<div class="column"><i class="fa fa-step-backward" aria-hidden="true"></i></div>
				<div class="column"><i class="fa fa-play play-btn fa-fw" aria-hidden="true"></i></div>
				<div class="column"><i class="fa fa-step-forward" aria-hidden="true"></i></div>
				<div class="column active"><i class="fa fa-random" aria-hidden="true"></i></div>
			</div>
		</div>
	</div>
</div>
<h1 id="dailyui">009</h1>

</body>

</html>