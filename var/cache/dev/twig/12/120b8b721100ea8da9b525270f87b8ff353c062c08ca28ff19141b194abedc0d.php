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
class __TwigTemplate_5382588283465e503e70ca73fab2996780a39e8d06ec8db1ea5bfae57d84a889 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 2em 2em;  font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 class=\"text-center mb-5\">Accueil</h1>

    <div class=\"row\">
        <div class=\"col-xl-2\">
            <h3>Filtrer</h3>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 17, $this->source); })()), 'form');
        echo "
        </div>
        <div class=\"col-xl-9\">
            <div class=\"row\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 21, $this->source); })()));
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
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["image"], "updatedAt", [], "any", false, false, false, 34));
            echo "</small></br>
                                        
                                        ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36) == twig_get_attribute($this->env, $this->source, $context["image"], "user", [], "any", false, false, false, 36))) {
                // line 37
                echo "                                        <small>Par vous</small>
                                        ";
            } else {
                // line 39
                echo "                                        <small>Par ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "user", [], "any", false, false, false, 39), "firstname", [], "any", false, false, false, 39), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "user", [], "any", false, false, false, 39), "lastname", [], "any", false, false, false, 39), "html", null, true);
                echo "</small>
                                        ";
            }
            // line 41
            echo "                                </div>
                            </div>
            
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </div>
            
            <div class=\"mt-5\">
                ";
        // line 49
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 49, $this->source); })()) == true)) {
            // line 50
            echo "                    <ul class=\"pagination\">
                        <li class=\"page-item ";
            // line 51
            echo ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 51, $this->source); })()) == 1)) ? ("disabled") : (""));
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 52
            ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 52, $this->source); })()) > 1)) ? (print (twig_escape_filter($this->env, ("?page=" . ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 52, $this->source); })()) - 1)), "html", null, true))) : (print ("")));
            echo "\">Précédent</a>
                        </li>
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 54, $this->source); })()) / (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 54, $this->source); })())), 0, "ceil")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 55
                echo "                            
                            <li class=\"page-item ";
                // line 56
                echo ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 56, $this->source); })()) == $context["item"])) ? ("active") : (""));
                echo " \">
                                <a class=\"page-link\" href=\"?page=";
                // line 57
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
            // line 61
            echo "                        <li class=\"page-item ";
            echo ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 61, $this->source); })()) == twig_round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 61, $this->source); })()) / (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 61, $this->source); })())), 0, "ceil"))) ? ("disabled") : (""));
            echo "\">
                                <a class=\"page-link\" href=\"";
            // line 62
            ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 62, $this->source); })()) == twig_round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 62, $this->source); })()) / (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 62, $this->source); })())), 0, "ceil"))) ? (print ("")) : (print (twig_escape_filter($this->env, ("?page=" . ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 62, $this->source); })()) + 1)), "html", null, true))));
            echo "\">Suivant</a>
                        </li>
                    </ul>
                ";
        }
        // line 66
        echo "            </div>
        </div>
    </div>
    
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  228 => 66,  221 => 62,  216 => 61,  204 => 57,  200 => 56,  197 => 55,  193 => 54,  188 => 52,  184 => 51,  181 => 50,  179 => 49,  174 => 46,  164 => 41,  156 => 39,  152 => 37,  150 => 36,  145 => 34,  140 => 32,  136 => 31,  130 => 30,  121 => 26,  117 => 25,  112 => 22,  108 => 21,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 2em 2em;  font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 class=\"text-center mb-5\">Accueil</h1>

    <div class=\"row\">
        <div class=\"col-xl-2\">
            <h3>Filtrer</h3>
            {{form(formulaire)}}
        </div>
        <div class=\"col-xl-9\">
            <div class=\"row\">
                {% for image in images %}
                    <div class=\"col-md-3 mt-2\">
                    
                            <div class=\"card mr-1\" style=\"width:;\">
                                <a href=\"{{ path('home_image_show', {id: image.id}) }}\">
                                    <img class=\"card-img-top\" width='200px' height='180px' src=\"/upload/images/{{image.imageName}}\" alt=\"{{image.title}}\">
                                </a>
                                
                                <div class=\"card-body\">
                                    <h4><a href=\"{{ path('home_image_show', {id: image.id}) }}\">{{image.title}}</a></h4>
                                        <p>{{image.description | u.truncate(25, '...')}}</p>
                                        <p><strong>Catégorie :</strong> {{image.category.name}}</p>
                                        <p>
                                        <small>Postée {{image.updatedAt | ago}}</small></br>
                                        
                                        {% if app.user == image.user %}
                                        <small>Par vous</small>
                                        {% else %}
                                        <small>Par {{ image.user.firstname }} {{ image.user.lastname }}</small>
                                        {% endif %}
                                </div>
                            </div>
            
                    </div>
                {% endfor %}
            </div>
            
            <div class=\"mt-5\">
                {% if pagination == true %}
                    <ul class=\"pagination\">
                        <li class=\"page-item {{ (page == 1) ? 'disabled' : ''}}\">
                            <a class=\"page-link\" href=\"{{ (page > 1) ? '?page=' ~ (page - 1) : '' }}\">Précédent</a>
                        </li>
                        {% for item in 1..((total / limit) | round (0, 'ceil')) %}
                            
                            <li class=\"page-item {{ (page == item) ? 'active' : ''}} \">
                                <a class=\"page-link\" href=\"?page={{item}}\">{{item}}</a>
                            </li>
                            
                        {% endfor %}
                        <li class=\"page-item {{ (page == ((total / limit) | round (0, 'ceil'))) ? 'disabled' : ''}}\">
                                <a class=\"page-link\" href=\"{{ ( page  == ((total / limit) | round (0, 'ceil')) ) ? '' : '?page=' ~ (page + 1) }}\">Suivant</a>
                        </li>
                    </ul>
                {% endif %}
            </div>
        </div>
    </div>
    
</div>


{% endblock %}
", "home/index.html.twig", "C:\\Users\\Guillaume Burgnies\\Desktop\\postyours\\templates\\home\\index.html.twig");
    }
}
