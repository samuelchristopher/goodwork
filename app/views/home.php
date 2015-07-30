{% extends 'templates/default.php' %}

{% block title %}Home{% endblock %}

{% block content %}
  <div class="container">


    <div class="jumbotron">
      <div style="padding-left: 20px;">
        <h1>GoodWork Home!</h1>
        <p>Helping the nation, one person at a time. Your next!</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
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
