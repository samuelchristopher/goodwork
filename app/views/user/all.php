{% extends 'templates/default.php' %}

{% block title %}All users{% endblock %}

{% block content %}
  <div class="container">
    <div class="page-header">
      <h1>All users</h1>
    </div>

    {% if users is empty %}
      <p>No registered users.</p>
    {% else %}
    <div class="row">
      {% for user in users %}
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">
              {{ user.username }}{% if user.getFullName %} (<em>{{user.getFullName}}</em>){% endif %}
            </div>
            <div class="panel-footer">
              <button type="button" class="btn btn-primary"><a style="color: white;" href="{{ urlFor('user.profile', {username: user.username})}}">Profile >></a></button>
            </div>
          </div>
        </div>
      {% endfor %}
    </div>
    {% endif %}
  </div>
{% endblock %}
