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

    <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#schools">Schools</a></li>
      <li role="presentation"><a href="#consultance">Consultance</a></li>
      <li role="presentation"><a href="#">Your Qualifications</a></li>
    </ul>

    <div class="section current">
      <div class="page-header">
        <h1>Top Schools <small>{{ auth.country }}</small></h1>
      </div>

      {% if edus is empty %}
        <p>
          No partnered schools in {{ auth.country }} as of today. Sorry :(
        </p>
      {% else %}
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
                 <button type="button" class="btn btn-primary"><a style="color: white;" href="{{ urlFor('school.profile', {institutionName: edu.institution_name})}}">More information</a></button>
              </div>
            </div>
          </div>
        {% endfor %}
      {% endif %}
    </div>

    <div class="section">
      <form action="{{ urlFor('category.student.post') }}" method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Your email">
          {% if errors.has('Email') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Email') }}</div> {% endif %}
        </div>
        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
          {% if errors.has('Subject') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Subject') }}</div> {% endif %}
        </div>
        <button type="submit" class="btn btn-default">Book consultant</button>
        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
      </form>

    </div>
  </div>
{% endblock %}
