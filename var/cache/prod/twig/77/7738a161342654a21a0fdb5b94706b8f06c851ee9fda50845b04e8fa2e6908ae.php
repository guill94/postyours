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

/* home/index.html.twig */
class __TwigTemplate_14b597097cc22fdd4fe8050584c9f8fee7e42e4a92c94d5b09fa372796c7a254 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
    .example-wrapper { margin: 2em 2em;  font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 class=\"text-center\">Accueil ( ";
        // line 12
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["images"] ?? null)), "html", null, true);
        echo " images )</h1>

    <div class=\"row\">
        <div class=\"col-xl-2\">
            <h3>Filtrer</h3>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulaire"] ?? null), 'form');
        echo "
        </div>
        <div class=\"col-xl-9\">
            <div class=\"row\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 22
            echo "                    <div class=\"col-md-3 mt-2\">
                    
                            <div class=\"card mr-1\" style=\"width:;\">
                                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_image_show", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">
                                    <img class=\"card-img-top\" width='200px' height='180px' src=\"/upload/images/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "imageName", [], "any", false, false, false, 26), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                                </a>
                                
                                <div class=\"card-body\">
                                    <h4><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_image_show", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</a></h4>
                                        <p>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 31)), "truncate", [0 => 25, 1 => "..."], "method", false, false, false, 31), "html", null, true);
            echo "</p>
                                        <p><strong>Catégorie :</strong> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "category", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                                        <p>
                                        <small>Postée ";
            // line 34
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["image"], "createdAt", [], "any", false, false, false, 34));
            echo "</small></br>
                                        <small>Par ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "user", [], "any", false, false, false, 35), "firstname", [], "any", false, false, false, 35), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "user", [], "any", false, false, false, 35), "lastname", [], "any", false, false, false, 35), "html", null, true);
            echo "</small></p>
                                </div>
                            </div>
            
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </div>
        </div>
    </div>
    ";
        // line 44
        if ((($context["pagination"] ?? null) == true)) {
            // line 45
            echo "        <ul class=\"pagination\">
            <li class=\"page-item ";
            // line 46
            echo (((($context["page"] ?? null) == 1)) ? ("disabled") : (""));
            echo "\">
                <a class=\"page-link\" href=\"";
            // line 47
            (((($context["page"] ?? null) > 1)) ? (print (twig_escape_filter($this->env, ("?page=" . (($context["page"] ?? null) - 1)), "html", null, true))) : (print ("")));
            echo "\">Précédent</a>
            </li>
            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_round((($context["total"] ?? null) / ($context["limit"] ?? null)), 0, "ceil")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 50
                echo "                
                <li class=\"page-item ";
                // line 51
                echo (((($context["page"] ?? null) == $context["item"])) ? ("active") : (""));
                echo " \">
                    <a class=\"page-link\" href=\"?page=";
                // line 52
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</a>
                </li>
                
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            <li class=\"page-item ";
            echo (((($context["page"] ?? null) == twig_round((($context["total"] ?? null) / ($context["limit"] ?? null)), 0, "ceil"))) ? ("disabled") : (""));
            echo "\">
                    <a class=\"page-link\" href=\"";
            // line 57
            (((($context["page"] ?? null) == twig_round((($context["total"] ?? null) / ($context["limit"] ?? null)), 0, "ceil"))) ? (print ("")) : (print (twig_escape_filter($this->env, ("?page=" . (($context["page"] ?? null) + 1)), "html", null, true))));
            echo "\">Suivant</a>
            </li>
        </ul>
    ";
        }
        // line 61
        echo "    
</div>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 61,  183 => 57,  178 => 56,  166 => 52,  162 => 51,  159 => 50,  155 => 49,  150 => 47,  146 => 46,  143 => 45,  141 => 44,  136 => 41,  122 => 35,  118 => 34,  113 => 32,  109 => 31,  103 => 30,  94 => 26,  90 => 25,  85 => 22,  81 => 21,  74 => 17,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\Users\\guill\\Desktop\\picshare2\\templates\\home\\index.html.twig");
    }
}
