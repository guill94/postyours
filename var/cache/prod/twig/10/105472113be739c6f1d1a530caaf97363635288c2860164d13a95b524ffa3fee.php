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

/* @LiipImagine/Form/form_div_layout.html.twig */
class __TwigTemplate_d710355c56a1a9ff41168129f8adfbe3c6ca953dce062f056e9e8309adc0f3cb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'liip_imagine_image_widget' => [$this, 'block_liip_imagine_image_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
    }

    public function block_liip_imagine_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        ob_start(function () { return ''; });
        // line 3
        echo "        ";
        if (($context["image_path"] ?? null)) {
            // line 4
            echo "            <div>
                ";
            // line 5
            if (($context["link_url"] ?? null)) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ((($context["link_filter"] ?? null)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["link_url"] ?? null), ($context["link_filter"] ?? null))) : (($context["link_url"] ?? null))), "html", null, true);
                echo "\" ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["link_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
            }
            // line 8
            echo "
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(($context["image_path"] ?? null), ($context["image_filter"] ?? null)), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["image_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " />

                ";
            // line 11
            if (($context["link_url"] ?? null)) {
                // line 12
                echo "                    </a>
                ";
            }
            // line 14
            echo "            </div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        $___internal_16ccafe2791ac0b2b46133f50e3f992b9cad921dfe473fc316e59cb8d59d23b4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_16ccafe2791ac0b2b46133f50e3f992b9cad921dfe473fc316e59cb8d59d23b4_);
    }

    public function getTemplateName()
    {
        return "@LiipImagine/Form/form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 2,  107 => 17,  104 => 16,  100 => 14,  96 => 12,  94 => 11,  77 => 9,  74 => 8,  56 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@LiipImagine/Form/form_div_layout.html.twig", "C:\\Users\\guill\\Desktop\\picshare2\\vendor\\liip\\imagine-bundle\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
