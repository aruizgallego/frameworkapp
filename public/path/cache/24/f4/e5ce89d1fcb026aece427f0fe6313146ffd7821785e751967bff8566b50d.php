<?php

/* menu.html */
class __TwigTemplate_24f4e5ce89d1fcb026aece427f0fe6313146ffd7821785e751967bff8566b50d extends Twig_Template
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
<p><strong>Menú</strong></p>
<ul class=\"nav nav-pills nav-stacked\">
  <li class=\"active\"><a href=\"http://framework.dev/home/\">Método por defecto</a></li>
  <li><a href=\"http://framework.dev/home/response\">Método con Response</a></li>
  <li><a href=\"http://framework.dev/home/json-response\">Método que usa Json Response</a></li>
  <li><a href=\"http://framework.dev/home/smarty\">Método que usa Twig</a></li>
  <li><a href=\"http://framework.dev/home/twig\">Método que usa Smarty</a></li>
  <li><a href=\"http://framework.dev/home/service1\">Método que usa Servicio simple del Container</a></li>
  <li><a href=\"http://framework.dev/home/service2\">Método que usa Servicio con dependencias</a></li>
  <li><a href=\"http://framework.dev/home/clasification\">Método que accede a la BBDD</a></li>
    <li><a href=\"http://framework.dev/home/i18n\">Método que usa i18n</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "menu.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
