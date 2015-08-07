{% extends 'email/templates/default.php' %}

{% block lead %}
  You requested a password change
{% endblock %}

{% block content %}
  Click this link to reset your password: {{ baseUrl }}{{ urlFor('password.reset') }}?email={{ user.email }}&identifier={{ identifier|url_encode }}
{% endblock %}
