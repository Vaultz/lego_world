﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<title>three.js webgl - geometry - minecraft</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="stylesheet" href="CSS/style.css"/>
	</head>
    <body>

        <div id="container"><br /><br /><br /><br /><br />Generating world...</div>
        <div id="info"><a href="http://threejs.org" target="_blank" rel="noopener">three.js</a> - <a href="http://www.minecraft.net/" target="_blank" rel="noopener">minecraft</a> demo. featuring <a href="http://painterlypack.net/" target="_blank" rel="noopener">painterly pack</a><br />(left click: forward, right click: backward)</div>
				<input type="text" id="playerInput" name="playerInput" value="">
		<!-- loading debugger -->
		<script src="JS/log4javascript-1.4.13/log4javascript.js"></script>
		<script>
			var logger = log4javascript.getDefaultLogger();
			if(typeof logger !== 'undefined')	{
				console.log("LOG4J: Logger successfully loaded !");
				logger.info(new Error().stack+" : Logger open");
			}
			else console.log("LOG4J: Error while loading logger...")
		</script>

		<!-- threeJS file-->
        <script src="JS/threeJS/three.js"></script>
        <script src="JS/threeJS/FirstPersonControls.js"></script>
        <script src="JS/threeJS/Detector.js"></script>
        <script src="JS/threeJS/stats.min.js"></script>

        <!-- project files-->
        <script src="JS/Perlin.js"></script>
        <script src="JS/WorldGenerator.js"></script>
        <script src="JS/WindowEvent.js"></script>
        <script src="JS/init.js"></script>
        <script src="JS/RenderingLoop.js"></script>
        <script src="JS/main.js"></script>

    </body>
</html>
