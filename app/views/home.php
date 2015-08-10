{% extends 'templates/default.php' %}

{% block title %}Home{% endblock %}

{% block content %}
  <div class="container">


    <div class="jumbotron home">
      <div style="padding-left: 20px;">

        {% if auth.email %}
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        {% else %}
          <p>

            <button type="button" class="btn btn-primary btn-lg" id="home-animation-modal-toggle" data-toggle="modal" data-target="#myModal"></button>
            <object width="768" height="432"><param name="movie" value="http://www.filz.us/files/0faa76b8/134/IntroGW.swf"><embed src="http://www.filz.us/files/1f4e650a/3fe/IntroGW.swf" width="768" height="432"></embed></object>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Login</h4>
                  </div>
                  <div class="modal-body">
                    <form action="{{ urlFor('login.post') }}" method="post">
                      <div class="form-group">
                        <label for="identifier">Username/email</label>
                        <input type="text" class="form-control" id="identifier" name="identifier" placeholder="Username/email">
                        {% if errors.has('Identifier') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Identifier') }}</div> {% endif %}
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        {% if errors.has('Password') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Password') }}</div> {% endif %}
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" name="remember" id="remember"> Remember me</label>
                      </div>
                      <button type="submit" class="btn btn-default">Login</button>

                      <a href="{{ urlFor('password.recover') }}">Forgot your password?</a>
                      <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
                    </form>
                  </div>
                  <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div> -->
                </div>
              </div>
            </div>
          </p>
        {% endif %}
      </div>
    </div>
    <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img data-src="holder.js/100%x200" alt="100%x200" src="http://samuelchristopher.github.io/gw-home-pg/assets/images/categories/student/bg.gif" data-holder-rendered="true" style=" width: 100%; display: block;">
              <div class="caption">
                <h3>Students</h3>
                <p>Not knowing where to go? Register with us and we will guide you.</p>
                <p><a href="{{ urlFor('register') }}" class="btn btn-primary" role="button">Register</a> <a href="{{ urlFor('login') }}" class="btn btn-default" role="button">Login</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img data-src="holder.js/100%x200" alt="100%x200" src="https://samuelchristopher.github.io/gw-home-pg/assets/images/categories/graduate/bg.gif" data-holder-rendered="true" style=" width: 100%; display: block;">
              <div class="caption">
                <h3>Job seekers</h3>
                <p>Having trouble looking for a job? That's where we come in.</p>
                <p><a href="{{ urlFor('register') }}" class="btn btn-primary" role="button">Register</a> <a href="{{ urlFor('login') }}" class="btn btn-default" role="button">Login</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img data-src="holder.js/100%x200" alt="100%x200" src="http://samuelchristopher.github.io/gw-home-pg/assets/images/categories/employer/bg.gif" data-holder-rendered="true" style=" width: 100%; display: block;">
              <div class="caption">
                <h3>Employers</h3>
                <p>Having difficulty looking for the right work force? Register with us to view our skilled workforce.</p>
                <p><a href="{{ urlFor('register') }}" class="btn btn-primary" role="button">Register</a> <a href="{{ urlFor('login') }}" class="btn btn-default" role="button">Login</a></p>
              </div>
            </div>
          </div>
        </div>
  </div>
{% endblock %}
