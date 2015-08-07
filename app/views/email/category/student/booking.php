{% extends 'email/templates/default.php' %}

{% block lead %}
  Booking from {{ email }}
{% endblock %}

{% block content %}
  <p>
    {{subject}}
  </p>
{% endblock %}
