<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listview Filter &amp; Autodividers - jQuery Mobile Demos</title>
	<link rel="stylesheet"  href="../../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../../_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../../../favicon.ico">

	<script src="../../../js/jquery.js"></script>
	<script src="../../_assets/js/"></script>
	<script src="../../../js/"></script>
</head>
<body>
<div data-role="page">

	<div data-role="header" class="jqm-header">
		<h1>Listview Filter &amp; Autodividers</h1>
		<a href="#" class="jqm-search-link" data-icon="search" data-iconpos="notext">Search</a>
		<?php include( '../../search.php' ); ?>
	</div><!-- /header -->

	<div data-role="content" class="jqm-content">

			<h2>Auto-divider listviews</h2>
			<p>The auto-divider option is a convenient way to automatically add dividers for each letter by adding the <code> data-autodividers="true"</code> attribute. This is designed to work in conjunction with the listview filter feature so as items are filtered away, dividers that don't have any visible items will also be hidden.</p>

			<h3>Filter, Autodividers</h3>

			<div data-demo-html="true">
				<ul data-role="listview" data-filter-theme="d" data-divider-theme="c" data-filter="true" data-autodividers="true">
					<li><a href="index.html">Adam Kinkaid</a></li>
					<li><a href="index.html">Alex Wickerham</a></li>
					<li><a href="index.html">Avery Johnson</a></li>
					<li><a href="index.html">Bob Cabot</a></li>
					<li><a href="index.html">Caleb Booth</a></li>
					<li><a href="index.html">Christopher Adams</a></li>
					<li><a href="index.html">Culver James</a></li>
					<li><a href="index.html">David Walsh</a></li>
					<li><a href="index.html">Drake Alfred</a></li>
					<li><a href="index.html">Elizabeth Bacon</a></li>
					<li><a href="index.html">Emery Parker</a></li>
					<li><a href="index.html">Enid Voldon</a></li>
					<li><a href="index.html">Francis Wall</a></li>
					<li><a href="index.html">Graham Smith</a></li>
					<li><a href="index.html">Greta Peete</a></li>
					<li><a href="index.html">Harvey Walls</a></li>
					<li><a href="index.html">Mike Farnsworth</a></li>
					<li><a href="index.html">Murray Vanderbuilt</a></li>
					<li><a href="index.html">Nathan Williams</a></li>
					<li><a href="index.html">Paul Baker</a></li>
					<li><a href="index.html">Pete Mason</a></li>
					<li><a href="index.html">Rod Tarker</a></li>
					<li><a href="index.html">Sawyer Wakefield</a></li>
				</ul>
			</div><!--/demo-html -->

			<h3>Inset filter, Autodividers</h3>

			<div data-demo-html="true">
				<ul data-role="listview" data-inset="true" data-filter-theme="d" data-divider-theme="c" data-filter="true" data-autodividers="true">
					<li><a href="index.html">Adam Kinkaid</a></li>
					<li><a href="index.html">Alex Wickerham</a></li>
					<li><a href="index.html">Avery Johnson</a></li>
					<li><a href="index.html">Bob Cabot</a></li>
					<li><a href="index.html">Caleb Booth</a></li>
					<li><a href="index.html">Christopher Adams</a></li>
					<li><a href="index.html">Culver James</a></li>
					<li><a href="index.html">David Walsh</a></li>
					<li><a href="index.html">Drake Alfred</a></li>
					<li><a href="index.html">Elizabeth Bacon</a></li>
					<li><a href="index.html">Emery Parker</a></li>
					<li><a href="index.html">Enid Voldon</a></li>
					<li><a href="index.html">Francis Wall</a></li>
					<li><a href="index.html">Graham Smith</a></li>
					<li><a href="index.html">Greta Peete</a></li>
					<li><a href="index.html">Harvey Walls</a></li>
					<li><a href="index.html">Mike Farnsworth</a></li>
					<li><a href="index.html">Murray Vanderbuilt</a></li>
					<li><a href="index.html">Nathan Williams</a></li>
					<li><a href="index.html">Paul Baker</a></li>
					<li><a href="index.html">Pete Mason</a></li>
					<li><a href="index.html">Rod Tarker</a></li>
					<li><a href="index.html">Sawyer Wakefield</a></li>
				</ul>
			</div><!--/demo-html -->

	</div><!-- /content -->

	<div data-role="footer" class="jqm-footer">
		<p class="jqm-version"></p>
		<p>Copyright 2013 The jQuery Foundation</p>
	</div><!-- /footer -->

</div><!-- /page -->
</body>
</html>