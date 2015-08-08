<!DOCTYPE html>
<html>
  <head>
    <!-- GOODWORK IS A PATENTED ENTITY OWNED BY SAMUEL PAUL CHRISTOPHER, ZAIMI RAMLEE, NEIL JOSHUA and RONAN CHUA -->
    <!-- This is the sole work of Samuel Paul Christopher, Zaimi Ramlee, Neil Joshua and Ronan Chua. All rights reserved. NOTE: PLAGARISM OF THIS PROJECT IS PUNISHABLE BY LAW. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodWork | {% block title %}{% endblock %}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <style>
    #home-animation-modal-toggle {
      position: absolute;
      z-index: 2;
      background: none;
      width: 768px;
      height: 432px;
      border: none;
      display: flex;
    }
    .jumbotron.home {
      background: none;
      display: flex;
      justify-content: center;
    }
    #userQualifications {
      position: absolute;
      left: 105px;
      bottom: 100px
    }
    body > div > footer {
      position: fixed;
      left: 0;
    }
    .panel-default>.panel-heading  {
      background-image: none;
    }

    #consultance {
      display: none;
    }
    .navbar-default {
      background-color: #f8f8f8;
      border-color: #e7e7e7;
      background-image: none;
      -webkit-box-shadow: none;
      box-shadow: none;
      border: none;
    }
    .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.open>a {
      background-image: none;
      box-shadow: none;
    }
    .btn-default{
      background-image: none;
      box-shadow: none;
    }
    select[multiple].future_ambition_select {
      height: 245px;
      margin-bottom: 20px;
    }
    .btn-primary {
      background-image: none;
      box-shadow: none;
    }
    .global {
      position: absolute;
      top: 0;
      width: 100%;
      z-index: 999;
      background-color: rgba(135, 216, 205, 0.82);
    }
    .notice {
      padding: 2.75rem 0;
      text-align: center;
      margin: 0;
      color: white;
      font-size: 1.25rem;
      font-weight: 700;
      letter-spacing: 1px;
    }
    .alert {
      background-image: none;
      margin-top: 10px;
      box-shadow: none;
    }
    .dropdown-menu>li>a:hover{
      background-image: none;
    }
    </style>
  </head>
  <body>

    {%  include 'templates/partials/messages.php' %}
    {%  include 'templates/partials/navigation.php' %}

    {% block content%} {% endblock %}
    <div style="height: 200px;"></div>
    {% include 'templates/partials/footer.php' %}
    <!-- Scripts -->
    <!-- jQuery -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        setTimeout(function() {
          $('.global').fadeOut("slow",function(){
            $(this).remove();
          });
        }, 4500);

        $('#userQualifications').on('click', function() {
          $('#showQualifications').toggle(500);
        });

        $('li .tab-link').on('click', function() {
          var target = $(this).attr('href');
          var active = $('#tabs li.active a');
          var liActive = $('#tabs li.active');
          var linkShowing = $(active).closest('.tab-link');
          var showing = $(linkShowing).attr('href');
          var time = 300;

          if (target === showing) {

          } else {
            $(liActive).removeClass('active');
            var li = $(this).closest('li');
            li.addClass('active');

            $(showing).toggle();
            $(target).toggle();
          }

        });
      });
    </script>
  </body>
</html>
