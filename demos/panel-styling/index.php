<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel styling - jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../../js/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
	<style>
		/* Adjust the width of the left reveal menu. */
		#demo-page #left-panel.ui-panel {
			width: 15em;
		}
		#demo-page #left-panel.ui-panel-closed {
			width: 0;
		}
		#demo-page .ui-panel-page-content-position-left,
		.ui-panel-dismiss-open.ui-panel-dismiss-position-left {
			left: 15em;
			right: -15em;
		}
		#demo-page .ui-panel-animate.ui-panel-page-content-position-left.ui-panel-page-content-display-reveal {
			left: 0;
			right: 0;
			-webkit-transform: translate3d(15em,0,0);
			-moz-transform: translate3d(15em,0,0);
			transform: translate3d(15em,0,0);
		}

		/* Combined listview collapsible menu. */
		/* Unset negative margin bottom on the listviews. */
		#left-panel .ui-panel-inner > .ui-listview { margin-bottom: 0; }
		/* Unset top and bottom margin on collapsible set. */
		#left-panel .ui-collapsible-set { margin: 0; }
		/* The first collapsible contains the collapsible set. Make it fit exactly in the collapsible content. */
		#left-panel .ui-panel-inner > .ui-collapsible > .ui-collapsible-content { padding-top: 0; padding-bottom: 0;  border-bottom: none; }
		/* Remove border top if a collapsible comes after a listview. */
		#left-panel .ui-panel-inner  > .ui-collapsible > .ui-collapsible-heading .ui-btn,
		#left-panel .ui-collapsible.ui-first-child .ui-collapsible-heading .ui-btn { border-top: none; }
		/* Give the first collapsible heading the same padding, i.e. same height, as the list items. */
		#left-panel .ui-collapsible-heading .ui-btn-inner { padding: .7em 40px .7em 15px; }
		/* Give the other collapsible headings the same padding and font-size as the list divider. */
		#left-panel .ui-collapsible-set .ui-collapsible-heading .ui-btn-inner { padding: .5em 40px .5em 15px; font-size: 14px; }

		/* Styling of the close button in both panels. */
		#demo-page .ui-panel-inner > .ui-listview .ui-first-child {
			background: #eee;
		}

		/* Reveal menu shadow on top of the list items */
		#demo-page .ui-panel-display-reveal {
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			box-shadow: none;
		}
		#demo-page .ui-panel-page-content-position-left {
			-webkit-box-shadow: -5px 0px 5px rgba(0,0,0,.15);
			-moz-box-shadow: -5px 0px 5px rgba(0,0,0,.15);
			box-shadow: -5px 0px 5px rgba(0,0,0,.15);
		}

		/* Setting a custom background image. */
		#demo-page.ui-page-theme-a,
		#demo-page .ui-panel-wrapper {
			background-image: url(../_assets/img/bg-pattern.png);
			background-repeat: repeat-x;
			background-position: left bottom;
		}

		/* Styling of the page contents */
		.article p {
			margin: 0 0 1em;
			line-height: 1.5;
		}
		.article p img {
			max-width: 100%;
		}
		.article p:first-child {
			text-align: center;
		}
		.article small {
			display: block;
			font-size: 75%;
			color: #c0c0c0;
		}
		.article p:last-child {
			text-align: right;
		}
		.article a.ui-btn {
			margin-right: 2em;
		}
		@media all and (min-width:769px) {
			.article {
				max-width: 994px;
				margin: 0 auto;
				padding-top: 4em;
				-webkit-column-count: 2;
				-moz-column-count: 2;
				column-count: 2;
				-webkit-column-gap: 2em;
				-moz-column-gap: 2em;
				column-gap: 2em;
			}
			/* Fix for issue with buttons and form elements
			if CSS columns are used on a page with a panel. */
			.article a.ui-btn {
				-webkit-transform: translate3d(0,0,0);
			}
		}
	</style>
</head>
<body>

<div data-role="page" class="jqm-demos" id="demo-intro">

    <div data-role="header" class="jqm-header">
		<h2><a href="../" title="jQuery Mobile Demos home"><img src="../_assets/img/jquery-logo.png" alt="jQuery Mobile"></a></h2>
		<p>Demos <span class="jqm-version"></span></p>
        <a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
        <a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
    </div><!-- /header -->

    <div data-role="content" class="jqm-content">

        <h1>Panel styling</h1>

        <p>In this demo we show you how to:</p>

        <ul>
            <li>Change the width of a panel.</li>
            <li>Create a panel navmenu with listviews and collapsibles.</li>
            <li>Change the shadow of a reveal menu so it is on top of the list items.</li>
        	<li>Set a background image for a page that contains a panel.</li>
            <li>Give the page a responsive layout with CSS columns.</li>
        </ul>
        
        <p>Click the "view source" button to see the CSS and markup of this demo and open the demo to see the result.</p>

        <a href="#demo-page" data-role="button" data-inline="true" data-mini="true" data-icon="carat-r" data-iconpos="right">Open demo</a>

        <div data-demo-html="#demo-page" data-demo-css="true"></div><!--/demo-html -->

    </div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
		<p>Copyright 2013 The jQuery Foundation</p>
	</div><!-- /footer -->

<?php include( '../jqm-panels.php' ); ?>

</div><!-- /page -->

<div data-role="page" id="demo-page">

    <div data-role="header">
        <h1>Bikes</h1>
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" data-shadow="false" data-iconshadow="false">Menu</a>
    </div><!-- /header -->

    <div data-role="content">

    	<div class="article">
    		<p><img src="../_assets/img/bike.jpg" alt="Fixed Gear bike"></p>

            <h2>Fixed Gear</h2>

            <p>A fixed-gear or fixed-wheel bicycle, commonly known as a fixie, is a bicycle that has a drivetrain with no freewheel mechanism. The freewheel was developed early in the history of bicycle design but the fixed-gear bicycle remained the standard track racing design. More recently the 'fixie' has become a popular alternative among mainly urban cyclists, offering the advantages of simplicity compared with the standard multi-geared bicycle.</p>

            <p><small>Source: Wikipedia</small></p>

            <p><a href="#right-panel" data-role="button" data-inline="true" data-mini="true" data-shadow="false">Share</a></p>

		</div><!-- /article -->

    </div><!-- /content -->

    <div data-role="panel" id="left-panel">

        <ul data-role="listview">
        	<li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
        	<li data-role="list-divider">Menu</li>
        	<li data-icon="back"><a href="#demo-intro" data-rel="back">Demo intro</a></li>
        </ul>

        <div data-role="collapsible" data-inset="false" data-iconpos="right">

          <h3>Categories</h3>

          <div data-role="collapsible-set" data-inset="false" data-iconpos="right">

            <div data-role="collapsible">

              <h3>Bikes</h3>

              <ul data-role="listview">
                <li><a href="#">Road</a></li>
                <li><a href="#">ATB</a></li>
                <li><a href="#">Fixed Gear</a></li>
                <li><a href="#">Cruiser</a></li>
              </ul>

            </div><!-- /collapsible -->

            <div data-role="collapsible">

              <h3>Cars</h3>

              <ul data-role="listview">
                <li><a href="#">SUV</a></li>
                <li><a href="#">Sport</a></li>
                <li><a href="#">Convertible</a></li>
              </ul>

            </div><!-- /collapsible -->

            <div data-role="collapsible">

              <h3>Boats</h3>

              <ul data-role="listview">
                <li><a href="#">Runabout</a></li>
                <li><a href="#">Motorboat</a></li>
                <li><a href="#">Sailboat</a></li>
                </li>
              </ul>

            </div><!-- /collapsible -->

		  </div><!-- /collapsible-set -->

  		</div><!-- /collapsible -->

    </div><!-- /panel -->

    <div data-role="panel" id="right-panel" data-display="overlay" data-position="right">

        <ul data-role="listview" data-icon="false">
        	<li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
        	<li data-role="list-divider">Share this page</li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Google +</a></li>
            <li><a href="#">Mail</a></li>
        </ul>

    </div><!-- /panel -->

</div><!-- /page -->
</body>
</html>
