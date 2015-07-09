{% extends 'templates/default.php' %}

{% block title %}{{ user.getFullNameOrUsername }}{% endblock %}

{% block content %}
  <style media="screen">
    .panel-default>.panel-heading  {
      background-image: none;
    }
  </style>
  <div class="container">
    <div class="jumbotron">
      <div style="padding-left: 20px;display: flex;">
        <h1 style="order: 1;padding-left: 20px;">{{ user.username }}</h1>
        <p><img src="{{ user.getAvatarUrl({size: 50}) }}" alt="Profile picture for {{ user.getFullNameOrUsername }}" style="border-radius: 60%;margin-top: 34px;" /></p>
      </div>
    </div>
    <div class="page-header">
      <h1>{{ user.getFullNameOrUsername }}'s details</h1>
    </div>


    <div class="row">
      {% if user.getFullName %}
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Full Name</h3>
            </div>
            <div class="panel-body">
              {{ user.getFullName }}
            </div>
          </div>
        </div>
      {% endif %}
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Contact</h3>
          </div>
          <div class="panel-body">
            {{ user.email }}
          </div>
        </div>
      </div>
    </div>



  </div>
{% endblock %}
