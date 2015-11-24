<header>
	<div class="navbar">
    <nav>
      <div class="nav-wrapper brown lighten-1">
        <a href="{{asset('/')}}" class="brand-logo"><img src="{{asset('images/logo-nav.png')}}" alt=""></a>
        <ul class="right hide-on-med-and-down">
			<li><a href="" class="search-btn"><i class="material-icons">search</i></a></li>
      @if(!Auth::check())
			<li><a class="modal-trigger" href="#registermodal">Đăng kí</a></li>
			<li><a class="modal-trigger" href="#loginmodal">Đăng nhập</a></li>
      @else
      <li style="padding-left: 5px; padding-right: 5px;">{{Auth::user()->fullname}}</li>
      <li><a href="/auth/signout">Đăng xuất</a></li>
      @endif
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
<div id="loginmodal" class="modal">
  {!! Form::open(array('url'=>'auth/legacy',"method"=>"post","id"=>"loginForm")) !!}
  <div class="modal-content">
    <h4>Đăng nhập</h4>
    <div class="row">
      <div class="input-field col s12">
        {!! Form::email('email','',array('id'=>"email", 'class'=>'validate')) !!}
        {!! Form::label('email','Email') !!}
      </div>
      <div class="input-field col s12">
        {!! Form::password('password','',array('id'=>"password", 'class'=>'validate')) !!}
        {!! Form::label('password','Mật khẩu') !!}
      </div>
    </div>
  </div>
    <div class="modal-footer">
    <div class="row">
      <div class="col s12">
        <div style="height: 45px; line-height: 45px; float: right; margin-left: 10px;">Đăng nhập bằng Facebook</div>
        <a href="auth/facebook" style="float: right;">
         <img src="{{asset('images/Facebook-icon.png')}}" style="width: 50px;" alt="">
        </a>
       
      </div>
    </div>
    <a href="#!" class=" modal-action modal-close btn-flat">Đóng</a>
    {!! Form::submit('Đăng nhập',array('class'=>'btn-flat')) !!}

  </div>
  {!! Form::close() !!}
</div>
<div id="registermodal" class="modal">
  {!! Form::open(array('url'=>'register',"method"=>"post","id"=>"registerForm")) !!}
  <div class="modal-content">
    <h4>Đăng kí</h4>
    <div class="row">
      <div class="input-field col s12">
        {!! Form::email('email','',array('id'=>"email", 'class'=>'validate')) !!}
        {!! Form::label('email','Email') !!}
        @if  ($errors->has('email')) <p><div class="alert" role="alert">{!! $errors->first('email') !!}</div></p>@endif
      </div>
      <div class="input-field col s12">
        {!! Form::password('password','',array('id'=>"password", 'class'=>'validate')) !!}
        {!! Form::label('password','Mật khẩu') !!}
        @if ($errors->has('password')) <p><div class="alert" role="alert">{!! $errors->first('password') !!}</div> </p>@endif
      </div>
      <div class="input-field col s12">
        {!! Form::password('cpassword','',array('id'=>"cpassword", 'class'=>'validate')) !!}
        {!! Form::label('cpassword','Nhập lại Mật khẩu') !!}
        @if ($errors->has('cpassword'))<p> <div class="alert" role="alert">{!! $errors->first('cpassword') !!}</div></p>@endif
      </div>
      <div class="input-field col s12">
        {!! Form::text('fullname','',array('id'=>"fullname", 'class'=>'validate')) !!}
        {!! Form::label('fullname','Tên đầy đủ') !!}
        @if ($errors->has('fullname'))<p><div class="alert" role="alert">{!! $errors->first('fullname') !!}</div></p>@endif
      </div>
    </div>
  </div>
    <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close btn-flat">Đóng</a>
    {!! Form::submit('Đăng kí',array('class'=>'btn-flat')) !!}

  </div>
  {!! Form::close() !!}
</div>




