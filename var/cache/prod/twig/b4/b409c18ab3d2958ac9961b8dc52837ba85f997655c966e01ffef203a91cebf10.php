<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/_footer.html.twig */
class __TwigTemplate_37153b0d0bc8df8d4d7b52efd3b0e11edc6abad2a54c9bab23ea38419bd63143 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<footer class=\"bg-light text-center text-lg-start\">
  <!-- Copyright -->
  <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
    © 2022
    <a class=\"text-dark ml-2\" href=\"#\">Mentions légales</a>
    <a class=\"text-dark ml-2\" href=\"#\">À propos</a>
  </div>
  <!-- Copyright -->
</footer>";
    }

    public function getTemplateName()
    {
        return "components/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_footer.html.twig", "C:\\Users\\guill\\Desktop\\picshare2\\templates\\components\\_footer.html.twig");
    }
}
