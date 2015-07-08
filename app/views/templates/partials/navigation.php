<!-- <div class="container-fluid"> -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">GoodWork</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{ urlFor('home') }}">Home<span class="sr-only">(current)</span></a></li>
          {% if auth %}

          {% else %}
            <li><a href="{{ urlFor('register') }}">Register</a></li>
            <li><a href="{{ urlFor('login') }}">Login</a></li>
          {% endif %}
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Login</a></li>
              <li><a href="#">Register</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>

        </ul>
        {% if auth %}
          <ul class="nav navbar-nav navbar-right">
          <li><img src="{{ auth.getAvatarUrl({size: 30}) }}" alt="Your avatar" style="padding: 10px; border-radius: 60%;"/></li>
          <li><a href="#">Welcome {{auth.getFullNameOrUsername }}!</a></li>
          <li><a href="{{ urlFor('logout') }}">Log out</a></li>
          </ul>
        {% else %}
          <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Welcome to GoodWork!</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </ul>
        {% endif %}
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<!-- </div> -->
