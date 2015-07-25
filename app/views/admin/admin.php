{% extends 'templates/default.php' %}

{% block title %}Admin{% endblock %}

{% block content %}
  <div class="container">
    <div class="jumbotron">
      <div style="padding-left: 20px;">
        <h1>Add School</h1>
      </div>
    </div>

    <form action="{{ urlFor('admin.post') }}" method="post">
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email" {% if request.post('email') %} value="{{ request.post('email') }}" {% endif %}>
        {% if errors.has('Email') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Email') }}</div> {% endif %}
      </div>

      <div class="form-group">
        <label for="institution_name">Institution name</label>
        <input type="text" class="form-control" id="institution_name" name="institution_name" placeholder="Institution name" {% if request.post('institution_name') %} value="{{ request.post('institution_name') }}" {% endif %}>
        {% if errors.has('Institution name') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Institution name') }}</div> {% endif %}
      </div>

      <div class="form-group">
        <label for="principal_name">Principal name</label>
        <input type="text" class="form-control" id="principal_name" name="principal_name" placeholder="Principal name" {% if request.post('principal_name') %} value="{{ request.post('principal_name') }}" {% endif %}>
        {% if errors.has('Principal name') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Principal name') }}</div> {% endif %}
      </div>

      <div class="form-group">
        <label for="website">Website</label>
        <input type="text" class="form-control" id="website" name="website" placeholder="e.g. stgeorges.edu.bn" {% if request.post('website')%} value="{{ request.post('website')}} " {% endif %}>
        {% if errors.has('Website') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Website') }}</div> {% endif %}
      </div>

      <div class="form-group">
        <label for="phone_number">Phone number</label>
        <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Phone number" {% if request.post('phone_number')%} value="{{ request.post('phone_number')}} " {% endif %}>
        {% if errors.has('Phone number') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Phone number') }}</div> {% endif %}
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address" {% if request.post('address') %} value="{{ request.post('address') }}" {% endif %}>
        {% if errors.has('Address') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Address') }}</div> {% endif %}
      </div>

      <div class="form-group">
        <label for="country">Country</label>
        <select name="country" class="form-control future_ambition_select" id="country">
          <option value="Brunei">Brunei</option>
          <option value="Cambodia">Cambodia</option>
          <option value="East Timor">East Timor</option>
          <option value="Indonesia">Indonesia</option>
          <option value="Laos">Laos</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Myanmar">Myanmar</option>
          <option value="Philippines">Philippines</option>
          <option value="Singapore">Singapore</option>
          <option value="Thailand">Thailand</option>
          <option value="Vietnam">Vietnam</option>
        </select>
        {% if errors.has('Country') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Country') }}</div> {% endif %}
      </div>


      <button type="submit" class="btn btn-default">Submit</button>
      <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
    </form>

    <div class="" style="height: 50px;">

    </div>
  </div>
{% endblock %}
