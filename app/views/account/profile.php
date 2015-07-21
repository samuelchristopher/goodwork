{% extends 'templates/default.php' %}

{% block title %}Update profile{% endblock %}

{% block content %}
  <div class="container">
    <div class="container">
      <form action="{{ urlFor('account.profile.post') }}" method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ request.post('email') ? request.post('email') : auth.email }}">
          {% if errors.has('Email') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Email') }}</div> {% endif %}
        </div>
        <div class="form-group">
          <label for="first_name">First name</label>
          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="{{ request.post('first_name') ? request.post('first_name') : auth.first_name }}">
          {% if errors.has('First name') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('First name') }}</div> {% endif %}
        </div>
        <div class="form-group">
          <label for="last_name">Last name</label>
          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="{{ request.post('last_name') ? request.post('last_name') : auth.last_name }}">
          {% if errors.has('Last name') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Last name') }}</div> {% endif %}
        </div>
        <button type="submit" class="btn btn-default">Update</button>
        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
      </form>
    </div>
  </div>
{% endblock %}
