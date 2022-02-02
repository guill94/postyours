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

/* components/_nav.html.twig */
class __TwigTemplate_efbbfb2bd11d758eb52418183ba7e42ff7cbe9446c1f804b6cda0f2e9fc782ad extends Template
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
        echo "<nav class=\"navbar navbar-expand-sm navbar-light bg-dark mb-4\"  aria-label=\"Third navbar example\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">PostMe</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample03\" aria-controls=\"navbarsExample03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

<div class=\"collapse navbar-collapse ml-auto\" id=\"navbarsExample03\">

\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t
\t\t\t\t";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 13
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Admin</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_image");
            echo "\">Poster</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href='";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "'>Mon compte</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href='";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "'>Déconnexion</a>
\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 28
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 35
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "components/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  97 => 32,  91 => 29,  88 => 28,  82 => 25,  76 => 22,  70 => 19,  67 => 18,  64 => 17,  58 => 14,  55 => 13,  53 => 12,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/_nav.html.twig", "C:\\Users\\guill\\Desktop\\picshare2\\templates\\components\\_nav.html.twig");
    }
}
