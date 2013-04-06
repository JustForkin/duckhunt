<html>
<head>

	<?php

			if($_GET['env'] == 'dev') {
				echo '<script type="text/javascript" src="externalLib/fullYUI3.1.js"></script>';
			}
			else {
				echo '<script type="text/javascript" src="http://yui.yahooapis.com/combo?3.1.0/build/yui/yui.js&3.1.0/build/oop/oop.js&3.1.0/build/event-custom/event-custom.js&3.1.0/build/dom/dom.js&3.1.0/build/pluginhost/pluginhost.js&3.1.0/build/node/node.js&3.1.0/build/event/event.js&3.1.0/build/node/align-plugin.js&3.1.0/build/attribute/attribute.js&3.1.0/build/async-queue/async-queue.js&3.1.0/build/base/base.js&3.1.0/build/anim/anim.js&3.1.0/build/plugin/plugin.js&3.1.0/build/cache/cache.js&3.1.0/build/collection/collection.js&3.1.0/build/classnamemanager/classnamemanager.js&3.1.0/build/intl/intl.js&3.1.0/build/dump/dump.js&3.1.0/build/substitute/substitute.js&3.1.0/build/widget/widget.js&3.1.0/build/console/lang/console.js&3.1.0/build/console/console.js&3.1.0/build/console/console-filters.js&3.1.0/build/cookie/cookie.js&3.1.0/build/json/json.js&3.1.0/build/dataschema/dataschema.js&3.1.0/build/datatype/lang/datatype.js&3.1.0/build/datatype/lang/datatype-date.js&3.1.0/build/datatype/datatype.js&3.1.0/build/querystring/querystring-stringify-simple.js&3.1.0/build/queue-promote/queue-promote.js&3.1.0/build/io/io.js&3.1.0/build/datasource/datasource.js&3.1.0/build/event/event-synthetic.js&3.1.0/build/history/history.js&3.1.0/build/imageloader/imageloader.js&3.1.0/build/loader/loader.js&3.1.0/build/event-simulate/event-simulate.js&3.1.0/build/node/node-event-simulate.js&3.1.0/build/dd/dd.js&3.1.0/build/node-focusmanager/node-focusmanager.js&3.1.0/build/node-menunav/node-menunav.js&3.1.0/build/widget/widget-stdmod.js&3.1.0/build/widget/widget-stack.js&3.1.0/build/widget/widget-position.js&3.1.0/build/widget/widget-position-constrain.js&3.1.0/build/widget/widget-position-align.js&3.1.0/build/overlay/overlay.js&3.1.0/build/profiler/profiler.js&3.1.0/build/querystring/querystring.js&3.1.0/build/querystring/querystring-parse-simple.js&3.1.0/build/async-queue/async-queue.js&3.1.0/build/dom/selector-css3.js&3.1.0/build/node/shim-plugin.js&3.1.0/build/slider/slider.js&3.1.0/build/sortable/sortable.js&3.1.0/build/stylesheet/stylesheet.js&3.1.0/build/swfdetect/swfdetect.js&3.1.0/build/swf/swf.js&3.1.0/build/widget/widget-parent.js&3.1.0/build/widget/widget-child.js&3.1.0/build/tabview/tabview.js&3.1.0/build/widget/widget-locale.js&3.1.0/build/widget-anim/widget-anim.js&3.1.0/build/test/test.js&3.1.0/build/tabview/tabview-plugin.js"></script>';
			}
	?>

	<script>
		<?php

			echo 'window.AppConf = {};' ;

			$serverRoot = "http://duckhunt.grosbouddha.com";


			if($_GET['env'] == 'dev') {

				if(isset($_GET['url'])) {
					$serverRoot = $_GET['url'] ;
				}
				else {
					$serverRoot = "http://localhost/~grosbouddha/duck_hunt_sync";
				}

				echo "window.AppConf.serverRoot = '$serverRoot' ; " ;
			}
			if(isset($_GET['bootstrap'])) {

				$bootstrapLevel = $_GET['bootstrap'];
				echo "window.AppConf.bootstrapLevel = '$bootstrapLevel' ; " ;
			}

			if(isset($_GET['debug'])) {

				$debug = $_GET['debug'];
				echo "window.AppConf.debug = $debug ; " ;
			}


		?>
	</script>



	<!--
	-->

	<script type="text/javascript" src="src/AppConf.js"></script>

	<script type="text/javascript" src="externalLib/cake.js"></script>
	<script type="text/javascript" src="externalLib/soundManager/soundmanager2.js"></script>



	<script type="text/javascript" src="src/ImagePreloader.js"></script>
	<script type="text/javascript" src="src/FontWriter.js"></script>

	<script type="text/javascript" src="src/Publisher.js"></script>
	<script type="text/javascript" src="src/SoundManager.js"></script>
	<script type="text/javascript" src="src/FirstScreen.js"></script>
	<script type="text/javascript" src="src/Decor.js"></script>
	<script type="text/javascript" src="src/board/BulletBoard.js"></script>
	<script type="text/javascript" src="src/board/ScoreBoard.js"></script>
	<script type="text/javascript" src="src/board/RoundBoard.js"></script>
	<script type="text/javascript" src="src/board/KilledDucksBoard.js"></script>
	<script type="text/javascript" src="src/Duck.js"></script>
	<script type="text/javascript" src="src/Dog.js"></script>
	<script type="text/javascript" src="src/DuckManager.js"></script>
	<script type="text/javascript" src="src/MessageManager.js"></script>

	<script type="text/javascript" src="src/GameState.js"></script>
	<script type="text/javascript" src="src/GameManager.js"></script>
	<script type="text/javascript" src="src/main.js"></script>




	<link rel="stylesheet" type="text/css" href="statics/main.css" />

	<title>Duck Hunt</title>

</head>
<body>
	<div id="mainGameSceneContainer" class="gameSceneContainer"></div>
</body>
</html>