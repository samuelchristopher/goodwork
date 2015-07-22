{% extends 'templates/default.php' %}

{% block title %}Student{% endblock %}

{% block content %}
  <div class="container">
    <div class="jumbotron">
      <div style="padding-left: 20px;">
        <h1>Hello Student!</h1>
        <p>This is where you will be, for the rest of your student life. So get comfortable :)</p>
        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
      </div>
    </div>

    <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#">Schools</a></li>
      <li role="presentation"><a href="#">Consultance</a></li>
      <li role="presentation"><a href="#">Your Qualifications</a></li>
    </ul>

    <div class="" id="schools">
      <div class="page-header">
        <h1>Top Schools <small>{{ auth.country }}</small></h1>
      </div>
    </div>


    {% for edu in edus %}
      <div class="col-md-4" style="padding: 0;">
        <div class="panel panel-default">
          <div class="panel-body">
            {% if edu.getName %} <h2>{{edu.getName}}</h2> {% endif %}<br>
            <p>
              <strong>Principal</strong> ~ {{edu.principal_name}}
            </p>
          </div>
          <div class="panel-footer">
             <button type="button" class="btn btn-primary"><a style="color: white;" href="{{ urlFor('user.profile', {username: user.username})}}">Profile</a></button>
          </div>
        </div>
      </div>
    {% endfor %}
  </div>
{% endblock %}
