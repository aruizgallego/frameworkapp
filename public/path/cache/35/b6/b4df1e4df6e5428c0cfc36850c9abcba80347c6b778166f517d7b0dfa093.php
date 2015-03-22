<?php

/* welcome.twig */
class __TwigTemplate_35b6b4df1e4df6e5428c0cfc36850c9abcba80347c6b778166f517d7b0dfa093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css\">

    <!-- Custom CSS -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
    </head>
    <body style=\"padding-top: 30px;padding-left: 30px;\">
        <h1>FRAMEWORK ALEJANDRO RUIZ</h1>
        <div class=\"row\">
          <div class=\"col-sm-4\">
            <p><strong>Menú</strong></p>
            <ul class=\"nav nav-pills nav-stacked\">
              <li class=\"active\"><a href=\"http://framework.dev/home/\">Método por defecto</a></li>
              <li><a href=\"http://framework.dev/home/response\">Método con Response</a></li>
              <li><a href=\"http://framework.dev/home/json-response\">Método que usa Json Response</a></li>
              <li><a href=\"http://framework.dev/home/twig\">Método que usa Twig</a></li>
              <li><a href=\"http://framework.dev/home/smarty\">Método que usa Smarty</a></li>
              <li><a href=\"http://framework.dev/home/service1\">Método que usa Servicio simple del Container</a></li>
              <li><a href=\"http://framework.dev/home/service2\">Método que usa Servicio con dependencias</a></li>
              <li><a href=\"http://framework.dev/home/clasification\">Método que accede a la BBDD</a></li>
                <li><a href=\"http://framework.dev/home/i18n\">Método que usa i18n</a></li>
            </ul>
          </div>
          <div class=\"col-sm-8\">
                <h2>Default Method</h2>
                <p>Este es el metodo que se ejctuta por defecto.</p>
            </div>
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "welcome.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
