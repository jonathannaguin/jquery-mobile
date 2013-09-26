<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Toolbar - jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../../js/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
</head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="true">

	<div data-role="header" class="jqm-header">
		<h2><a href="../" title="jQuery Mobile Demos home"><img src="../_assets/img/jquery-logo.png" alt="jQuery Mobile"></a></h2>
		<p>Demos <span class="jqm-version"></span></p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->

	<div data-role="content" class="jqm-content">

		<h1>Toolbar</h1>
		
		<h2>Headers</h2>

		<p>The header is a toolbar at the top of the page that usually contains the page title text and optional buttons positioned to the left and/or right of the title for navigation or actions.
			</p>

		<h2>Header markup</h2>

		<p>The title text is normally an H1 heading element but it's possible to use any heading level (H1-H6) to allow for semantic flexibility. All heading levels are styled identically by default to maintain visual consistency.</p>

			<div data-demo-html="true">
				<div data-role="header">
				<h1>Page Title</h1>
				</div>
			</div><!-- /demo-html -->

		<h2>Fixed position</h2>

		<p>The header can be set to fixed position by adding the <code>data-position="fixed"</code> to the header. See <a href="../fixed-toolbars/">fixed toolbars</a>.</p>

			
		<h2>Fullscreen position</h2>

		<p>The header can be set to fullscreen fixed position that overlays the toolbars over the content by adding the <code>data-fullscreen="true"</code> to a fixed header. See <a href="../fixed-toolbars/bars-fullscreen.php">fullscreen toolbars</a>.</p>


		<h2>Theme</h2>
		<p>The <code>header</code> toolbar is themed with the "a" swatch by default (black in the default theme) but you can easily set the theme swatch color.</p>

			<div data-demo-html="true">
				<div data-role="header" data-theme="b">
				<h1>Page Title</h1>
				</div>
			</div><!-- /demo-html -->

		<p> Headers can optionally be positioned as <a href="bars-fixed.php">fixed</a> so they remain at the top of the screen at all times instead of scrolling with the page.</p>

		<h2>Buttons</h2>

		<p>The header plugin looks for immediate children of the header container, and automatically sets the first link in the left button slot and the second link in the right. In this example, the 'Cancel' button will appear in the left slot and 'Save' will appear in the right slot based on their sequence in the source order. </p>

			<div data-demo-html="true">
				<div data-role="header">
					<a href="#" data-icon="delete">Cancel</a>
				<h1>My App</h1>
					<a href="#" data-icon="check">Save</a>
				</div>
			</div><!-- /demo-html -->

		<h2>Making buttons visually stand out</h2>

		<p>Buttons automatically adopt the swatch color of the bar they sit in, so a link in a header bar with the "a" color will also be styled as "a" colored buttons. To make a button visually stand out add a <code> data-theme</code> attribute to set the button swatch for contrast.</p>

			<div data-demo-html="true">
				<div data-role="header">
					<a href="#" data-icon="delete">Cancel</a>
				<h1>Edit Contact</h1>
					<a href="#" data-icon="check" data-theme="b">Save</a>
				</div>
			</div><!-- /demo-html -->

		<h2>Button position classes</h2>

		<p>The button position can also be controlled by adding classes to the button anchors, rather than relying on source order. This is especially useful if you only want a button in the right slot. To specify the button position, add the class of <code>ui-btn-left</code> or <code>ui-btn-right</code> to the anchor.</p>

			<div data-demo-html="true">
				<div data-role="header" >
				<h1>Page Title</h1>
					<a href="#" data-icon="gear" class="ui-btn-right">Options</a>
				</div>
			</div><!-- /demo-html -->

		<h2>Buttons in toolbars without a heading</h2>

		<p>The heading in the header bar has some margin that will give the bar its height. If you choose not to use a heading, you will need to add an element with <code>class="ui-title"</code> so that the bar can get the height and display correctly.</p>

			<div data-demo-html="true">
				<div data-role="header" >
					<a href="#" data-icon="gear" class="ui-btn-right">Options</a>
					<span class="ui-title"></span>
				</div>
			</div><!-- /demo-html -->

		<h2>Adding Back buttons</h2>

		<p>jQuery Mobile has a feature to automatically create and append "back" buttons to any header, though it is disabled by default. This is primarily useful in chromeless installed applications, such as those running in a native app webview. The framework automatically generates a "back" button on a header when the page plugin's <code>addBackBtn</code> option is true. This can also be set via markup if the page div has a <code>data-add-back-btn="true"</code> attribute. </p>

		<p>If you use the attribute <code>data-rel="back"</code> on an anchor, any clicks on that anchor will mimic the back button, going back one history entry and ignoring the anchor's default href. This is particularly useful when linking back to a named page, such as a link that says "home", or when generating "back" buttons with JavaScript, such as a button to close a dialog. When using this feature in your source markup, <strong>be sure to provide a meaningful href that actually points to the URL of the referring page. This will allow the feature to work for users in C-Grade browsers.</strong></p>
                <p>If you just want a reverse transition without actually going back in history, you should use the <code>data-direction="reverse"</code> attribute.</p>

		<h2>Customizing the back button text</h2>

		<p>If you'd like to configure the back button text, you can either use the <code>data-back-btn-text="previous"</code> attribute on your page element, or set it programmatically via the page plugin's options: <br /><code>$.mobile.page.prototype.options.backBtnText = "previous";</code></p>

		<h3>Default back button style</h3>
		<p>If you'd like to configure the back button role-theme, you can use: <br /><code>$.mobile.page.prototype.options.backBtnTheme = "a";</code><br />
		If you're doing this programmatically, set this option inside the mobileinit event handler.</p>

		<h2>Custom header configurations</h2>
		<p>If you need to create a header that doesn't follow the default configuration, simply wrap your custom styled markup in any container, such as <code>div</code>. The plugin won't apply the automatic button logic to the wrapped content inside the header container so you can write custom styles for laying out the content in your header.</p>

		<p>It's also possible to create custom bars without using the header data-role at all. For example, start with any container and add the <code>ui-bar</code> class to apply standard bar padding and add the <code>ui-bar-b</code> class to assign the bar swatch styles from your theme. (The "b" can be any swatch letter.)</p>

			<div data-demo-html="true">
				<div class="ui-bar ui-bar-b">
					<h3>I'm just a div with bar classes and a mini inline <a href="#" data-role="button" data-inline="true" data-mini="true">Button</a></h3>
				</div>
			</div><!-- /demo-html -->

			<p>Note that <code>.ui-bar</code> should not be added to header or footer bars that span the full width of the page, as the additional padding will cause a full-width element to break out of its parent container. To add padding inside of a full-width toolbar, wrap the toolbar's contents in an element and apply the padding to that element instead.</p>

			<p>By writing some simple styles, it's easy to build message bars like this:</p>
				<!-- Yes, the inline styles aren't recommended in a real system but they are used to simply illustrate how to tweak CSS -->
					<div class="ui-bar ui-bar-e">

						<h3 style="display:inline-block; width:92%; margin-top:5px;">This is an alert message. </h3><div style="display:inline-block; width:8%; margin-top:0px; text-align:right;"><a href="#" data-role="button" data-icon="delete" data-inline="true" data-iconpos="notext">Dismiss</a></div><p style="font-size:85%; margin:-.3em 0 1em;">And here's some additional text in a paragraph.</p>
					</div>

		<h2>Footers</h2>

		<p>The footer is a toolbar at the bottom of the page that can contain a wide range of content, from form elements to navbars.
			</p>

		<h2>Footer markup</h2>

		<p>The <code>footer</code> bar has the same basic structure as the <a href="../headers/">header</a> except it uses the <code> data-role</code> attribute value of <code>footer</code>. The <code>footer</code> toolbar will be themed with the "a" swatch by default (black in the default theme) but you can easily set the theme swatch color.</p>

			<div data-demo-html="true">
				<div data-role="footer" class="ui-bar">
					<a href="#" data-icon="plus">Add</a>
					<a href="#" data-icon="arrow-u">Up</a>
					<a href="#" data-icon="arrow-d">Down</a>
				</div>
			</div><!-- /demo-html -->

		<p>The page footer is very similar to the header in terms of options and configuration. The primary difference is that the footer is designed to be less structured than the header to allow more flexibility, so the framework doesn't automatically reserve slots for buttons to the left or right as it does in headers. Since footers do not have the same prescriptive markup conventions as headers, we recommend using layout <a href="../grids/">grids</a> or writing custom styles to achieve the design you want.</p>

			<p>Any link or valid <a href="../button-markup/">button markup</a> added to the footer will automatically be turned into a button. To save space, buttons in toolbars are automatically set to inline styling so the button is only as wide as the text and icons it contains.  </p>

			<p>By default, toolbars don't have any padding to accommodate nav bars and other widgets. To include padding on the bar, add a <code>class="ui-bar"</code> to the footer.</p>

			</p>Note that <code>.ui-bar</code> should not be added to header or footer bars that span the full width of the page, as the additional padding will cause a full-width element to break out of its parent container. To add padding inside of a full-width toolbar, wrap the toolbar's contents in an element and apply the padding to that element.</p>

		<h2>Grouped buttons</h2>

		<p>To group buttons into a button set, wrap the links in an element with <code> data-role=&quot;controlgroup&quot;</code> and <code>data-type=&quot;horizontal&quot;</code> attributes.</p>

<code>&lt;div data-role=&quot;controlgroup&quot; data-type=&quot;horizontal&quot;&gt;</code>

		<p>This creates a grouped set of buttons:</p>

			<div data-role="footer" class="ui-bar">
				<div data-role="footer" class="ui-bar">
					<div data-role="controlgroup" data-type="horizontal">
						<a href="#" data-icon="plus">Add</a>
						<a href="#" data-icon="arrow-u">Up</a>
						<a href="#" data-icon="arrow-d">Down</a>
					</div>
				</div>
			</div>

		<h2>Adding form elements</h2>

		<p><a href="../forms/">Form</a> elements and other content can also be added to toolbars. Here is an example of a <a href="../selects/">select</a> menu inside a footer bar. We recommend using mini-sized form elements in toolbars by adding the <code>data-mini="true"</code> attribute:</p>

			<div data-role="footer" class="ui-bar">
				<label for="select-choice-1">Shipping:</label>
				<select name="select-choice-1" id="select-choice-1" data-theme="a" data-mini="true">
					<option value="standard">Standard: 7 day</option>
					<option value="rush">Rush: 3 days</option>
					<option value="express">Express: next day</option>
					<option value="overnight">Overnight</option>
				</select>
			</div>

				<h2>Fixed &amp; Persistent footers</h2>
				<p>In situations where the footer is a global navigation element, you may want it to appear <a href="../fixed-toolbars/">fixed</a> so it doesn't scroll out of view. It's also possible to make a fixed toolbar <a href="../fixed-toolbars/footer-persist-a.php">persistent</a> so it appears to not move between <a href="../transitions/" data-ajax="false">page transitions</a>. This can be accomplished by using the persistent footer feature included in jQuery Mobile.</p>

				<p>To make a footer persistent between transitions, add the <code>data-id</code> attribute to the footer of all relevant pages and use the same <code>id</code> value for each. For example, by adding <code>data-id="myfooter"</code> to the current page and the target page, the framework will keep the footer anchors in the same spot during the page animation. <strong>This effect will only work correctly if the header and footer toolbars are set to <code>data-position="fixed"</code> so they are in view during the transition.</strong></p>

	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
		<p>Copyright 2013 The jQuery Foundation</p>
	</div><!-- /footer -->

<?php include( '../jqm-panels.php' ); ?>

</div><!-- /page -->
</body>
</html>
