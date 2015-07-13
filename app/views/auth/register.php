{% extends 'templates/default.php' %}

{% block title %}Register{% endblock %}

{% block content %}
  <div class="container">


    <div class="container">
      <form action="{{ urlFor('register.post') }}" method="post">
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Email" {% if request.post('email') %} value="{{ request.post('email') }}" {% endif %}>
          {% if errors.has('Email') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Email') }}</div> {% endif %}
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" {% if request.post('username') %} value="{{ request.post('username') }}" {% endif %}>
          {% if errors.has('Username') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Username') }}</div> {% endif %}
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
        <!-- <hr> -->
        <!-- <h1>GoodWork details</h1>
        <label for="category">Category</label>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="student" value="student" checked>
            Student
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="graduate" value="graduate">
            Graduate
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="training" value="training" >
            Seeking Training
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="employer" value="employer" >
            Employer
          </label>
        </div>

        <label for="future_ambition">Future Ambition</label>
        <select multiple class="form-control future_ambition_select" id="future_ambition">
          <!-- Options from http://jobsearch.about.com/od/best-jobs/fl/types-of-jobs.htm -->
          <!-- <option>Accountant</option>
          <option>Actor</option>
          <option>Administrative Assistant / Secretary</option>
          <option>Advertising</option>
          <option>Alaska Fishing Jobs</option>
          <option>Aircraft Dispatcher</option>
          <option>Aircraft Mechanic</option>
          <option>Airline Pilot</option>
          <option>Animal Careers</option>
          <option>Architecture</option>
          <option>Athletic Trainer</option>
          <option>Art Appraiser</option>
          <option>Art Auctioneer</option>
          <option>Bank Teller</option>
          <option>Book Publicist</option>
          <option>Book Publishing</option>
          <option>Call Center Jobs</option>
          <option>Career Counselor</option>
          <option>Consultant</option>
          <option>Computer Programmer</option>
          <option>Criminal Justice</option>
          <option>Databases</option>
          <option>Doctor</option>
          <option>EFL Teaching Jobs</option>
          <option>Emergency 911 Dispatcher</option>
          <option>Emergency Medical Services</option>
          <option>Federal Law Enforcement</option>
          <option>Financial Advisor</option>
          <option>Flight Attendant</option>
          <option>Freelance Editor</option>
          <option>Freelance Writer</option>
          <option>Funeral Director</option>
          <option>Fundraiser</option>
          <option>Game Industry</option>
          <option>Genealogist</option>
          <option>Government Jobs</option>
          <option>Hair Stylist</option>
          <option>Human Resources</option>
          <option>Insurance Agent</option>
          <option>Investment Banker</option>
          <option>Lawyer</option>
          <option>Management</option>
          <option>Meteorologist</option>
          <option>Military</option>
          <option>Mobile App Developer</option>
          <option>Museum</option>
          <option>Music Conductor</option>
          <option>NASCAR Driver</option>
          <option>Nonprofit Job</option>
          <option>Nurse</option>
          <option>Paramedic</option>
          <option>Patient Advocate</option>
          <option>Personal Fitness Trainer</option>
          <option>Pharmacist</option>
          <option>Police Officer</option>
          <option>Professional Artist</option>
          <option>Programming</option>
          <option>Public Relations</option>
          <option>Psychologist</option>
          <option>Retail</option>
          <option>Sales</option>
          <option>Ski Instructor</option>
          <option>School Jobs</option>
          <option>Social Work</option>
          <option>Substitute Teacher</option>
          <option>Teacher</option>
          <option>Teaching Abroad</option>
          <option>Teaching Online</option>
          <option>Veterinarian</option>
          <option>Waiter</option>
          <option>Web Developer</option>
          <option>Wedding Planner</option>
          <option>Writer / Editor</option>
          <option>Zoo Director</option>
        </select> -->

        <button type="submit" class="btn btn-default">Submit</button>
                <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
      </form>
    </div>
  </div>
{% endblock %}
