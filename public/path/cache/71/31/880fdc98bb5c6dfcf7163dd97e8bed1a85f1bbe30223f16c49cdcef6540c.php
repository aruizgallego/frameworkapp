<?php

/* header.html */
class __TwigTemplate_7131880fdc98bb5c6dfcf7163dd97e8bed1a85f1bbe30223f16c49cdcef6540c extends Twig_Template
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
        echo "<ul>
\t<li><a href=\"framework.dev/home/response\">Método con Response</a></li>
\t<li><a href=\"framework.dev/home/json-response\">Método que usa Json Response</a></li>
\t<li><a href=\"framework.dev/home/smarty\">Método que usa Twig</a></li>
\t<li><a href=\"framework.dev/home/twig\">Método que usa Smarty</a></li>
\t<li><a href=\"framework.dev/home/service1\">Método que usa Servicio simple del Container</a></li>
\t<li><a href=\"framework.dev/home/service2\">Método que usa Servicio con dependencias</a></li>
\t<li><a href=\"framework.dev/home/clasification\">Método que accede a la BBDD</a></li>
    <li><a href=\"framework.dev/home/i18n\">Método que usa i18n</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
