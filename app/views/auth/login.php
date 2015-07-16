{% extends 'templates/default.php' %}

{% block title %}Login{% endblock %}

{% block content %}
  <div class="container">
    <div class="container">
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
  </div>
{% endblock %}
