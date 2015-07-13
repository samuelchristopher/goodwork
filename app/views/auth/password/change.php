{% extends 'templates/default.php' %}

{% block title %}Change Password{% endblock %}

{% block content %}
  <div class="container">
    <div class="container">
      <form action="{{ urlFor('password.change.post') }}" method="post">
        <div class="form-group">
          <label for="password_old">Old password</label>
          <input type="password" class="form-control" id="password_old" name="password_old" placeholder="Old password">
          {% if errors.has('Old password') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Old password') }}</div> {% endif %}
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          {% if errors.has('Password') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Password') }}</div> {% endif %}
        </div>
        <div class="form-group">
          <label for="password_confirm">Confirm password</label>
          <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm password">
          {% if errors.has('Confirm password') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Confirm password') }}</div> {% endif %}
        </div>
        <button type="submit" class="btn btn-default">Change</button>
        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
      </form>
    </div>
  </div>
{% endblock %}
