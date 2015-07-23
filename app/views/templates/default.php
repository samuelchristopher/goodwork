<!DOCTYPE html>
<html>
  <head>
    <!-- GOODWORK IS A PATENTED ENTITY OWNED BY SAMUEL PAUL CHRISTOPHER -->
    <!-- This is the sole work of Samuel Paul Christopher. All rights reserved. NOTE: PLAGARISM OF THIS PROJECT IS PUNISHABLE BY LAW. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodWork | {% block title %}{% endblock %}</title>
    <link rel="stylesheet" href="\bower_components\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
    <style media="screen">
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
    <div style="height: 60px;"></div>
    {% include 'templates/partials/footer.php' %}
    <!-- Scripts -->
    <!-- jQuery -->
    <script src="/bower_components/jquery/dist/jquery.min.js" charset="utf-8"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/npm.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        setTimeout(function() {
          $('.global').fadeOut("slow",function(){
            $(this).remove();
          });
        }, 4500);
      });
    </script>
  </body>
</html>
