{% extends 'templates/default.php' %}

{% block title %}{{ edu.institution_name }}{% endblock %}

{% block content %}
  <style media="screen">
    .panel-default>.panel-heading  {
      background-image: none;
    }
  </style>
  <div class="container">
    <div class="jumbotron">
      <div style="padding-left: 20px;display: flex;">
        <h1 style="order: 1;padding-left: 20px;">{{ edu.institution_name }}</h1>
      </div>
    </div>
    <div class="page-header">
      <h1>{{ edu.institution_name }}'s details</h1>
    </div>


    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Country</h3>
          </div>
          <div class="panel-body">
            {{ edu.country }}
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Address</h3>
          </div>
          <div class="panel-body">
            {{ edu.address }}
          </div>
        </div>
      </div>

      {% if edu.website %}
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Website</h3>
            </div>
            <div class="panel-body">
              {{ edu.website }}
            </div>
          </div>
        </div>
      {% endif %}

      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Phone number</h3>
          </div>
          <div class="panel-body">
            {{ edu.phone_number }}
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Principal name</h3>
          </div>
          <div class="panel-body">
            {{ edu.principal_name }}
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Contact</h3>
          </div>
          <div class="panel-body">
            {{ edu.email }}
          </div>
        </div>
      </div>
    </div>



  </div>
{% endblock %}
