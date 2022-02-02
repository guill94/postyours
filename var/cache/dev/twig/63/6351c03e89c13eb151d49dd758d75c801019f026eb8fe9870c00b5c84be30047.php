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

/* account/index.html.twig */
class __TwigTemplate_7ced4615c32a932feced8322e4b551ff7a2ad83bb98c9208bb7da945a31bdf73 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
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

        echo "Mon compte (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "firstname", [], "any", false, false, false, 3), "html", null, true);
        echo ")";
        
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
    <h1 class=\"text-center\">Mon compte</h1>
    <p class=\"text-center\">Bienvenue ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "firstname", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>

    


 <div class=\"row mt-5\">
    <div class=\"col-xl-2\">
        <h3>Filtrer</h3>
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 21, $this->source); })()), 'form');
        echo "
        <p class=\"mt-5 text-center\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_password");
        echo "\">Modifier mon mot de passe</a></p>
    </div>
    <div class=\"col-xl-9\">
        <div class=\"row\">
            ";
        // line 26
        if ((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 28
                echo "                    <div class=\"col-md-3 mt-2\">
                    
                            <div class=\"card mr-1\" style=\"width:;\">
                                <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_image_show", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">
                                    <img class=\"card-img-top\" width='200px' height='180px' src=\"/upload/images/";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "imageName", [], "any", false, false, false, 32), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 32), "html", null, true);
                echo "\">
                                </a>
                                
                                <div class=\"card-body\">
                                    <h3><a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_image_show", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 36), "html", null, true);
                echo "</a></h3>
                                        <p>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 37)), "truncate", [0 => 25, 1 => "..."], "method", false, false, false, 37), "html", null, true);
                echo "</p>
                                        <p>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "category", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                echo "</p>
                                        <p><small>Posté ";
                // line 39
                echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["image"], "createdAt", [], "any", false, false, false, 39));
                echo "</small></p>
                                        <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_image", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">Modifier</a><span> | </span>
                                        <a href=\"#\" onclick=\"event.preventDefault(); 
                                        confirm('Êtes-vous certain de supprimer cette image ?') && document.getElementById('image_delete').submit();\"
                                        >
                                            Supprimer
                                        </a>

                                        <form id=\"image_delete\" action=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_image", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" method=\"post\">
                                            <input type=\"hidden\" name=\"csrf_token\" value=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("imageDelete"), "html", null, true);
                echo "\">
                                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        </form>
                                </div>
                            </div>
            
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            ";
        } else {
            // line 57
            echo "            <p class=\"text-center\">Aucune image postée</p>
            ";
        }
        // line 59
        echo "        </div>
    </div>
</div>
        
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 59,  195 => 57,  192 => 56,  178 => 48,  174 => 47,  164 => 40,  160 => 39,  156 => 38,  152 => 37,  146 => 36,  137 => 32,  133 => 31,  128 => 28,  123 => 27,  121 => 26,  114 => 22,  110 => 21,  99 => 13,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte ({{app.user.firstname}}){% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 2em 2em;  font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1 class=\"text-center\">Mon compte</h1>
    <p class=\"text-center\">Bienvenue {{app.user.firstname}}</p>

    


 <div class=\"row mt-5\">
    <div class=\"col-xl-2\">
        <h3>Filtrer</h3>
        {{form(formulaire)}}
        <p class=\"mt-5 text-center\"><a href=\"{{ path('account_password') }}\">Modifier mon mot de passe</a></p>
    </div>
    <div class=\"col-xl-9\">
        <div class=\"row\">
            {% if images %}
                {% for image in images %}
                    <div class=\"col-md-3 mt-2\">
                    
                            <div class=\"card mr-1\" style=\"width:;\">
                                <a href=\"{{ path('home_image_show', {id: image.id}) }}\">
                                    <img class=\"card-img-top\" width='200px' height='180px' src=\"/upload/images/{{image.imageName}}\" alt=\"{{image.title}}\">
                                </a>
                                
                                <div class=\"card-body\">
                                    <h3><a href=\"{{ path('home_image_show', {id: image.id}) }}\">{{image.title}}</a></h3>
                                        <p>{{image.description | u.truncate(25, '...')}}</p>
                                        <p>{{image.category.name}}</p>
                                        <p><small>Posté {{image.createdAt | ago}}</small></p>
                                        <a href=\"{{ path('edit_image', {id: image.id}) }}\">Modifier</a><span> | </span>
                                        <a href=\"#\" onclick=\"event.preventDefault(); 
                                        confirm('Êtes-vous certain de supprimer cette image ?') && document.getElementById('image_delete').submit();\"
                                        >
                                            Supprimer
                                        </a>

                                        <form id=\"image_delete\" action=\"{{ path('delete_image', {id: image.id}) }}\" method=\"post\">
                                            <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('imageDelete') }}\">
                                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        </form>
                                </div>
                            </div>
            
                    </div>
                {% endfor %}
            {% else %}
            <p class=\"text-center\">Aucune image postée</p>
            {% endif %}
        </div>
    </div>
</div>
        
    
{% endblock %}
", "account/index.html.twig", "C:\\Users\\guill\\Desktop\\picshare2\\templates\\account\\index.html.twig");
    }
}
