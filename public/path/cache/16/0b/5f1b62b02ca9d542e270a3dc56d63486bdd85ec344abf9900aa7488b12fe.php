<?php

/* users.twig */
class __TwigTemplate_160b5f1b62b02ca9d542e270a3dc56d63486bdd85ec344abf9900aa7488b12fe extends Twig_Template
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
              <li><a href=\"http://framework.dev/home/twig\">Método que usa Twig</a></li>
              <li><a href=\"http://framework.dev/home/smarty\">Método que usa Smarty</a></li>
              <li><a href=\"http://framework.dev/home/service1\">Método que usa Servicio simple del Container</a></li>
              <li><a href=\"http://framework.dev/home/service2\">Método que usa Servicio con dependencias</a></li>
              <li class=\"active\"><a href=\"http://framework.dev/home/clasification\">Método que accede a la BBDD</a></li>
                <li><a href=\"http://framework.dev/home/i18n\">Método que usa i18n</a></li>
            </ul>
          </div>
          <div class=\"col-sm-8\">
                <h2>Users MYSQL</h2>
                    <table class=\"table table-bordered\">
                        <tr>
                            <th>Host</th><th>User</th><th>Password</th>
                        </tr>
                        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "                            <tr>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "Host", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "User", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "Password", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </table>
            </div>
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 42,  70 => 39,  66 => 38,  62 => 37,  59 => 36,  55 => 35,  19 => 1,);
    }
}
