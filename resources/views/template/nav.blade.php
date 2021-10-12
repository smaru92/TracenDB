<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="/">트레센 DB</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item {{ Request::is('skill') ? 'active' : '' }}">
				<a class="nav-link" href="/skill">스킬 <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item {{ Request::is('person') ? 'active' : '' }}">
				<a class="nav-link" href="/person">우마무스메</a>
			</li>
			<li class="nav-item {{ Request::is('cards') ? 'active' : '' }}">
				<a class="nav-link" href="#">서포트카드</a>
			</li>
			<li class="nav-item {{ Request::is('support') ? 'active' : '' }}">
				<a class="nav-link" href="#">선택지도우미</a>
			</li>
		</ul>
	</div>
</nav>
