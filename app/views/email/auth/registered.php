{% extends 'email/templates/default.php' %}

{% block lead %}
  Almost there!
{% endblock %}

{% block content %}
  <p>To finish registering,</p>
  <p>Please do activate your account using this link: {{ baseUrl }}{{ urlFor('activate') }}?email={{ user.email }}&identifier={{ identifier|url_encode }}</p>
{% endblock %}
