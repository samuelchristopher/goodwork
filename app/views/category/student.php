{% extends 'templates/default.php' %}

{% block title %}Student{% endblock %}

{% block content %}
  <style>
    .section {
      display: none;
      opacity: 0;
    }

    .section.current {
      display: block;
      opacity: 1;
    }
  </style>
  <div class="container">
    <div class="jumbotron">
      <div style="padding-left: 20px;">
        <h1>Hello Student!</h1>
        <p>This is where you will be, for the rest of your student life. So get comfortable :)</p>
        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
      </div>
    </div>

    <ul class="nav nav-tabs" id="tabs">
      <li role="presentation" class="active"><a href="#schools" class="tab-link">Schools</a></li>
      <li role="presentation"><a href="#consultance" class="tab-link">Consultance</a></li>
      <li role="presentation"><a href="#qualifications" class="tab-link">Your Qualifications</a></li>
    </ul>

    <div id="schools">
      <div class="page-header">
        <h1>Top Schools <small>{{ auth.country }}</small></h1>
      </div>

      {% if edus is empty %}
        <p>
          No partnered schools in {{ auth.country }} as of today. Sorry :(
        </p>
      {% else %}
        {% for edu in edus %}
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-body">
                {% if edu.getName %} <h2>{{edu.getName}}</h2> {% endif %}<br>
                <p>
                  <strong>Principal</strong> ~ {{edu.principal_name}}
                </p>
              </div>
              <div class="panel-footer">
                 <button type="button" class="btn btn-primary"><a style="color: white;" href="{{ urlFor('school.profile', {institutionName: edu.institution_name})}}">More information</a></button>
              </div>
            </div>
          </div>
        {% endfor %}
      {% endif %}
      <div style="height: 200px;"></div>
    </div>

    <div id="consultance">
      <div class="page-header">
        <h1>Enter your email and a message to start the consultance process <small>You may be assigned a consultor based on your message</small></h1>
      </div>
      <form action="{{ urlFor('category.student.post') }}" method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Your email">
          {% if errors.has('Email') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Email') }}</div> {% endif %}
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <input type="text" class="form-control" id="message" name="message" placeholder="Message">
          {% if errors.has('Message') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Message') }}</div> {% endif %}
        </div>
        <button type="submit" class="btn btn-default">Book consultant</button>
        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
      </form>

    </div>

    <div class="row" id="qualifications">
      <div class="page-header">
        <h1>This your qualifications page <small>Your qualifications can be updated in your <a href="{{ urlFor('account.profile') }}">update profile</a> page</small></h1>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">My qualifications</h3>
          </div>
          <div class="panel-body">
            {{ auth.qualifications }}
          </div>
        </div>
      </div>
    </div>

{% endblock %}
