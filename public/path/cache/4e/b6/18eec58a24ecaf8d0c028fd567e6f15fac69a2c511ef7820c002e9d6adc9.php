<?php

/* bye.twig */
class __TwigTemplate_4eb618eec58a24ecaf8d0c028fd567e6f15fac69a2c511ef7820c002e9d6adc9 extends Twig_Template
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
        echo "
<!DOCTYPE html>
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
              <li><a href=\"http://framework.dev/home/\">Método por defecto</a></li>
              <li><a href=\"http://framework.dev/home/response\">Método con Response</a></li>
              <li><a href=\"http://framework.dev/home/json-response\">Método que usa Json Response</a></li>
              <li class=\"active\"><a href=\"http://framework.dev/home/twig\">Método que usa Twig</a></li>
              <li><a href=\"http://framework.dev/home/smarty\">Método que usa Smarty</a></li>
              <li><a href=\"http://framework.dev/home/service1\">Método que usa Servicio simple del Container</a></li>
              <li><a href=\"http://framework.dev/home/service2\">Método que usa Servicio con dependencias</a></li>
              <li><a href=\"http://framework.dev/home/clasification\">Método que accede a la BBDD</a></li>
                <li><a href=\"http://framework.dev/home/i18n\">Método que usa i18n</a></li>
            </ul>
          </div>
          <div class=\"col-sm-8\">
                <h2>Twig Page, ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!</h2>
            </div>
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "bye.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 30,  19 => 1,);
    }
}
