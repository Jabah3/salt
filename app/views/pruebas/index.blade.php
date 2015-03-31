<html lang="en" ng-app="library" ng-controller="PageHeadController" class="ng-scope">

<head>
<!--
<style type="text/css">
@charset "UTF-8";
[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){
	display:none !important;
}
ng\:form{
	display:block;
}
</style>-->

<base href="/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="fragment" content="!">
<meta name="description" content="Building Blocks is ZURB's growing resource of code snippets that you can easily drop into Foundation, the world's most-advanced responsive, front-end framework.">
<meta name="keywords" content="ZURB, ZURB Foundation, Foundation, front-end framework, responsive framework, responsive, framework, code blocks, code bits, code snippets, code patterns, design patterns, code library, code tips, UI, user interface, interface, interactions, interaction design, web design, web development, HTML/CSS, HTML, CSS, JavaScript, JS, implementation, front-end, frontend">
<meta content="authenticity_token" name="csrf-param">
<meta content="kgq4PUzqhYiWTzd/9rjVXUJ/+zx75krf/haTUw4GXA4=" name="csrf-token">

<link rel="icon" href="/favicon-blue.ico" type="image/x-icon">

<link href="http://s1.library.zurb.com/assets/application-627199f362489bd9bf15bf0e3f42cd28.css" media="screen" rel="stylesheet">
<!--<script src="http://s1.library.zurb.com/assets/application-0ec6dfd7158a3b7adc29062ee4f72ae0.js"></script>-->



<!--<script async="" src="//www.google-analytics.com/analytics.js"></script>-->

	<!--
	<script>
        $(document).ready(function(){
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          
          ga('create', 'UA-2195009-2', 'auto');
          ga('create', 'UA-2195009-58', 'auto', {'name': 'library'});
          ga('create', 'UA-2195009-33', 'auto', {'name': 'university'});
          ga('send', 'pageview');
          ga('library.send', 'pageview')
          ga('university.send', 'pageview')
          // ga('create', 'UA-2195009-45', 'auto', {'name': 'friday15'});
          // ga('create', 'UA-2195009-31', 'auto', {'name': 'word'});
          // ga('create', 'UA-2195009-38', 'auto', {'name': 'patternTap'});
          // ga('create', 'UA-2195009-52', 'auto', {'name': 'buildingBlocks'});
          // ga('create', 'UA-2195009-41', 'auto', {'name': 'responsive'});
          // ga('create', 'UA-2195009-44', 'auto', {'name': 'quips'});
          //ga('send', 'pageview');  <-- run this on ui-router stateChangeSuccess
        });
    </script>
<meta class="foundation-mq">
-->
</head>


<body class="has-off-canvas">



<div class="dark off-canvas left off-canvas left" ng-class="{'is-active': active}" ng-transclude="" zf-offcanvas="" position="left" id="off-canvas" zf-closable="offcanvas">
	<a zf-close="" class="close-button ng-scope">×</a>

	<ul class="ng-scope">
	<li class="title">Library</li>
	<li class="patterntap"><a href="http://patterntap.com/" target="_self">Pattern Tap</a></li>
	<li class="buildingblocks current" ui-sref-active="current"><a ui-sref="building-blocks" ui-sref-opts="{ reload: true }" href="/building-blocks">Building Blocks</a></li>
	<li class="responsive"><a href="http://zurb.com/responsive" target="_self">Responsive</a></li>
	<li class="triggers"><a href="http://zurb.com/triggers" target="_self">Triggers</a></li>
	<li class="quips"><a href="http://zurb.com/quips" target="_self">Quips</a></li>
	<li class="word"><a href="http://zurb.com/word" target="_self">Word</a></li>
	<li class="friday15" ui-sref-active="current"><a ui-sref="friday15" ui-sref-opts="{ reload: true }" href="/friday15">Friday 15</a></li> 
	</ul>

	<div id="mobile-hr" class="ng-scope"></div>

	<ul class="ng-scope">
	<li class="title">University</li>
	<li><a href="http://zurb.com/university/" target="_self">Home</a></li>
	<li><a href="http://zurb.com/university/courses" target="_self">Courses</a></li>
	<li><a href="http://zurb.com/university/lessons" target="_self">Lessons</a></li>
	<li><a href="http://zurb.com/library" target="_self">Library</a></li>
	<li><a href="http://zurb.com/tavern" target="_self">Tavern</a></li>
	</ul>

	<div id="mobile-hr" class="ng-scope"></div>

	<ul class="ng-scope">
	<li class="title">More ZURB Goodness</li>
	<li><a href="http://patterntap.com/">Pattern Tap</a></li>
	<li><a href="http://foundation.zurb.com/">Foundation</a></li>
	<li><a href="http://zurb.com/jobs" target="_self">Job Board</a></li>
	</ul>

	<div id="mobile-hr" class="ng-scope"></div>

	<ul id="mobile-stack" class="ng-scope">
	<li class="logo"><a ng-href="http://zurb.com" target="_self" href="http://zurb.com"><img alt="Zurb logo" src="http://s1.library.zurb.com/assets/zurb-logo-4665d5ba69154f2e4827b36f40af9aa7.png"></a></li><li>
	</li><li class="title stack"><a href="http://zurb.com/about" target="_self">About</a></li>
	<li class="title stack"><a href="http://zurb.com/blog" target="_self">Blog</a></li>
	<li class="title stack"><a href="http://zurb.com/contact" target="_self">Contact</a></li>
	<li><a href="http://zurb.com/studios" target="_self"><h1>Studios</h1><p>Helping startups win since '98.</p></a></li>
	<li><a href="http://foundation.zurb.com/"><h1>Foundation</h1><p>World's most advanced responsive framework.</p></a></li>
	<li><a href="http://zurb.com/apps" target="_self"><h1>Design Apps</h1><p>Tools to radpidly prototype and iterate.</p></a></li>
	<li><a href="http://zurb.com/university" target="_self"><h1>University</h1><p>Online training for smarter product design.</p></a></li>
	</ul>

</div>









<div class="grid-frame vertical">

	<div class="main-nav grid-content shrink" style="padding: 0;">
		<div class="hide-for-small-only">
			<div class="menu-group dark">
				<div class="menu-group-left">
					<ul class="menu-bar dark">
					<li class="university-logo">
					<a ng-href="http://zurb.com/university" target="_self" href="http://zurb.com/university">
					<h1>ZURB</h1><h2>University</h2></a></li>
					</ul>
				</div>

				<div class="menu-group-right">
					<ul class="menu-bar dark">
					<li><a href="http://zurb.com/university/courses" target="_self">Courses</a></li>
					<li><a href="http://zurb.com/university/lessons" target="_self">Lessons</a></li>
					<li class="active-library"><a ui-sref="library" ui-sref-opts="{ reload: true }" href="/library">Library</a></li>
					<li><a href="http://zurb.com/tavern" target="_self">Tavern</a></li>
					<li><a href="http://zurb.com/jobs" target="_self">Job Board</a></li>
					<li>
					</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="show-for-small-only">
			<ul class="menu-bar dark">
			<li class="mobile university-logo"><a zf-toggle="off-canvas"><img alt="Offcanvas" src="http://s1.library.zurb.com/assets/offcanvas-4f16c8ebbe8f6ff230ef987e59670ca6.png"><h1>ZURB</h1><h2>University</h2></a></li>
			</ul>
		</div>
	</div>







	<div class="grid-block main-body">
		<div class="left-sidebar hide-for-small-only">

			<ul class="property-nav">
			<li class="library" ui-sref-active="current">
			<a ui-sref="library" ui-sref-opts="{ reload: true }" href="/library"><img alt="Library dark" src="http://s1.library.zurb.com/assets/library-dark-b0c76921463a5162f13dbcd4db786ebe.png">LIBRARY</a>
			</li>
			<li class="patterntap" ui-sref-active="current">
			<a ui-sref="patterntap" ui-sref-opts="{ reload: true }" href="/patterntap"><img alt="Patterntap dark" src="http://s1.library.zurb.com/assets/patterntap-dark-418d9f899ed66e82285be066a56d1774.png">PATTERN TAP</a>
			</li>
			<li class="buildingblocks current" ui-sref-active="current">
			<a ui-sref="building-blocks" ui-sref-opts="{ reload: true }" href="/building-blocks"><img alt="Buildingblocks dark" src="http://s1.library.zurb.com/assets/buildingblocks-dark-89ab4c86805f4f9764fbc47611c0a878.png">BUILDING BLOCKS</a>
			</li>
			<li class="responsive" ui-sref-active="current">
			<a ui-sref="responsive" ui-sref-opts="{ reload: true }" href="/responsive"><img alt="Responsive dark" src="http://s1.library.zurb.com/assets/responsive-dark-54e3951e8af9b3bdf362e07600b7493d.png">RESPONSIVE</a>
			</li>
			<li class="triggers" ui-sref-active="current">
			<a ui-sref="triggers" ui-sref-opts="{ reload: true }" href="/triggers"><img alt="Trigger dark" src="http://s1.library.zurb.com/assets/trigger-dark-a8b027db7d09b7bb23bdb7a41b6fdc40.png">TRIGGERS</a>
			</li>
			<li class="quips" ui-sref-active="current">
			<a ui-sref="quips" ui-sref-opts="{ reload: true }" href="/quips"><img alt="Quips dark" src="http://s1.library.zurb.com/assets/quips-dark-fc982394f5ddbf56f700cde080edc498.png">QUIPS</a>
			</li>
			<li class="word" ui-sref-active="current">
			<a ui-sref="words" ui-sref-opts="{ reload: true }" href="/word"><img alt="Word dark" src="http://s1.library.zurb.com/assets/word-dark-9daa31043a06408a20bb0efb8bc7d161.png">WORD</a>
			</li>
			<li class="friday15" ui-sref-active="current">
			<a ui-sref="friday15" ui-sref-opts="{ reload: true }" href="/friday15"><img alt="Friday15 dark" src="http://s1.library.zurb.com/assets/friday15-dark-0e14a2059bf6af271f5d49503e44d5ce.png">FRIDAY15</a>
			</li>
			 
			</ul>
		</div>
	</div>


</div>






</body>
</html>