{% extends 'templates/default.php' %}

{% block title %}Recover password{% endblock %}

{% block content %}
  <div class="container">
    <div class="container">
      <h3>Enter your email address to start your password recovery</h3>
      <form action="{{ urlFor('password.recover.post') }}" method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Email" {% if request.post('email') %}value= "{{ request.post('email') }}"{% endif %}>
          {% if errors.has('Email') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Email') }}</div> {% endif %}
        </div>
        <button type="submit" class="btn btn-default">Request reset</button>
        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
      </form>
    </div>
  </div>
{% endblock %}
