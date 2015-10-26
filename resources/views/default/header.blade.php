<header>
	<div class="navbar">
    <nav>
      <div class="nav-wrapper brown lighten-1">
        <a href="{{asset('/')}}" class="brand-logo"><img src="{{asset('images/logo-nav.png')}}" alt=""></a>
        <ul class="right hide-on-med-and-down">
			<li><a href="" class="search-btn"><i class="material-icons">search</i></a></li>
			<li><a href="">Đăng kí</a></li>
			<li><a href="">Đăng nhập</a></li>
        </ul>
      </div>
    </nav>
    
  </div>
  <nav class="search-bar">
<div class="nav-wrapper brown lighten-3">
  <form id="searchForm" action="{{asset('search')}}" method="GET">
    <div class="input-field">
      <input id="search" type="text" name="name">
      <label for="search"><i class="material-icons">search</i></label>
    </div>
  </form>
</div>
</nav>
  
</header>


