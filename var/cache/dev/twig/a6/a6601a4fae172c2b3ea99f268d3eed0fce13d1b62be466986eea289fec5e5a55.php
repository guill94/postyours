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

/* home/show.html.twig */
class __TwigTemplate_eaacf2592dade754e67bb1c65efe2bfe6b81851443a08708ab8a7d99e8a3d637 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "

<div class=\"container\">
    <h1 class=\"text-center\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>

    
    <div>
        <div class=\"container\">
                            
            <img class=\"card-img-top\" width='50px' height='auto' src=\"/upload/images/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 15, $this->source); })()), "imageName", [], "any", false, false, false, 15), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
                          
                            
            <div class=\"mt-4\">
                    <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
                    <p><strong>Catégorie :</strong> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 20, $this->source); })()), "category", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                    <p>
                        <small>Postée ";
        // line 22
        echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 22, $this->source); })()), "createdAt", [], "any", false, false, false, 22));
        echo "</small></br>
                        ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23) == twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23))) {
            // line 24
            echo "                        <small>Par vous</small>
                        ";
        } else {
            // line 26
            echo "                        <small>Par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "firstname", [], "any", false, false, false, 26), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "lastname", [], "any", false, false, false, 26), "html", null, true);
            echo "</small>
                        ";
        }
        // line 28
        echo "                        
                    </p>

                    ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31) == twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31))) {
            // line 32
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_image", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Modifier</a><span> | </span>
                    <a href=\"#\" onclick=\"event.preventDefault(); 
                    confirm('Êtes-vous certain de supprimer cette image ?') && document.getElementById('image_delete').submit();\"
                    >
                        Supprimer
                    </a>

                    <form id=\"image_delete\" action=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_image", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("imageDelete"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    </form>
                    ";
        }
        // line 44
        echo "            </div>
        </div>
    </div> 

        ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            echo "            <section class=\"mt-5\">
                <div>
                    ";
            // line 51
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 51, $this->source); })()), 'form');
            echo "
                </div>    
            </section> 
        ";
        }
        // line 55
        echo "
    
        <section class=\"mb-5\">
            ";
        // line 58
        if (((isset($context["showComments"]) || array_key_exists("showComments", $context) ? $context["showComments"] : (function () { throw new RuntimeError('Variable "showComments" does not exist.', 58, $this->source); })()) != null)) {
            // line 59
            echo "                <div class=\"comments-border\">
                    
                    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["showComments"]) || array_key_exists("showComments", $context) ? $context["showComments"] : (function () { throw new RuntimeError('Variable "showComments" does not exist.', 61, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["showComment"]) {
                // line 62
                echo "                        
                        <div class='comment-border pl-2 mt-3'> 
                            <div class=\"comment-container\">
                                <small class=\"\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["showComment"], "user", [], "any", false, false, false, 65), "firstname", [], "any", false, false, false, 65), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["showComment"], "user", [], "any", false, false, false, 65), "lastname", [], "any", false, false, false, 65), "html", null, true);
                echo " :</small><br/>
                                    <p> ";
                // line 66
                echo twig_escape_filter($this->env, $context["showComment"], "html", null, true);
                echo " </p>
                                <small class=\"mt-2\">Postée ";
                // line 67
                echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["showComment"], "createdAt", [], "any", false, false, false, 67));
                echo "</small>
                                ";
                // line 68
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68) == twig_get_attribute($this->env, $this->source, $context["showComment"], "user", [], "any", false, false, false, 68))) {
                    // line 69
                    echo "                                    <small class=\"ml-2\"><a href=\"#\" onclick=\"event.preventDefault(); 
                                    confirm('Êtes-vous certain de supprimer ce commentaire ?') && document.getElementById('image_delete').submit();\"
                                    >
                                        Supprimer
                                    </a></small>

                                    <form id=\"image_delete\" action=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_comment", ["id" => twig_get_attribute($this->env, $this->source, $context["showComment"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                    echo "\" method=\"post\">
                                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("commentDelete"), "html", null, true);
                    echo "\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    </form>
                                ";
                }
                // line 80
                echo "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['showComment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                </div>
            ";
        } else {
            // line 85
            echo "                <p>Pas encore de commentaire";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85) != twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85))) {
                echo ", soyez le premier ou la première !";
            }
            echo "</p>
            ";
        }
        // line 87
        echo "        </section>  
    
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 87,  253 => 85,  249 => 83,  241 => 80,  234 => 76,  230 => 75,  222 => 69,  220 => 68,  216 => 67,  212 => 66,  206 => 65,  201 => 62,  197 => 61,  193 => 59,  191 => 58,  186 => 55,  179 => 51,  175 => 49,  173 => 48,  167 => 44,  160 => 40,  156 => 39,  145 => 32,  143 => 31,  138 => 28,  130 => 26,  126 => 24,  124 => 23,  120 => 22,  115 => 20,  111 => 19,  102 => 15,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{image.title}}{% endblock %}

{% block body %}


<div class=\"container\">
    <h1 class=\"text-center\">{{image.title}}</h1>

    
    <div>
        <div class=\"container\">
                            
            <img class=\"card-img-top\" width='50px' height='auto' src=\"/upload/images/{{image.imageName}}\" alt=\"{{image.title}}\">
                          
                            
            <div class=\"mt-4\">
                    <p>{{image.description}}</p>
                    <p><strong>Catégorie :</strong> {{image.category.name}}</p>
                    <p>
                        <small>Postée {{image.createdAt | ago}}</small></br>
                        {% if app.user == image.user %}
                        <small>Par vous</small>
                        {% else %}
                        <small>Par {{ image.user.firstname }} {{ image.user.lastname }}</small>
                        {% endif %}
                        
                    </p>

                    {% if app.user == image.user %}
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
                    {% endif %}
            </div>
        </div>
    </div> 

        {% if app.user %}
            <section class=\"mt-5\">
                <div>
                    {{form(formulaire)}}
                </div>    
            </section> 
        {% endif %}

    
        <section class=\"mb-5\">
            {% if showComments != null %}
                <div class=\"comments-border\">
                    
                    {% for showComment in showComments %}
                        
                        <div class='comment-border pl-2 mt-3'> 
                            <div class=\"comment-container\">
                                <small class=\"\">{{showComment.user.firstname}} {{showComment.user.lastname}} :</small><br/>
                                    <p> {{showComment}} </p>
                                <small class=\"mt-2\">Postée {{showComment.createdAt | ago}}</small>
                                {% if app.user == showComment.user %}
                                    <small class=\"ml-2\"><a href=\"#\" onclick=\"event.preventDefault(); 
                                    confirm('Êtes-vous certain de supprimer ce commentaire ?') && document.getElementById('image_delete').submit();\"
                                    >
                                        Supprimer
                                    </a></small>

                                    <form id=\"image_delete\" action=\"{{ path('delete_comment', {id: showComment.id}) }}\" method=\"post\">
                                        <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('commentDelete') }}\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    </form>
                                {% endif %}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                <p>Pas encore de commentaire{% if app.user != image.user %}, soyez le premier ou la première !{% endif %}</p>
            {% endif %}
        </section>  
    
    
</div>
{% endblock %}
", "home/show.html.twig", "C:\\Users\\guill\\Desktop\\picshare2\\templates\\home\\show.html.twig");
    }
}
