<svg class="hidden">
	<symbol id="icon-search" viewBox="0 0 24 24">
		<title>search</title>
		<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
	</symbol>
	<symbol id="icon-cross" viewBox="0 0 24 24">
		<title>cross</title>
		<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
	</symbol>
	
</svg>
<main class="main-wrap">
	<header class="main-header">
		<div class="search-wrap">
			<button id="btn-search" class="btn btn--search"><svg class="icon icon--search"><use xlink:href="#icon-search"></use></svg></button>
		</div>
	</header>
	
</main>
<!-- /main-wrap -->


<div class="search">
	<button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
	<form class="search__form" action="">
		<input class="search__input" name="search" type="search" placeholder="" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" />
		<span class="search__info">Hit enter to search or ESC to close</span>
	</form>
	<div class="search__related">
		<div class="search__suggestion">
			<h3>May We Suggest?</h3>
			<p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes #yesyes #aliens #green</p>
		</div>
		<div class="search__suggestion">
			<h3>Needle, Where Art Thou?</h3>
			<p>#broken #lost #good #red #funny #lala #hilarious #catgif #blue #nono #why #yes #yesyes #aliens #green #drone</p>
		</div>
	</div>
</div><!-- /search -->