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

/* main/home.html.twig */
class __TwigTemplate_c5d4eb94028871ace5998da4e08541c845ae36a4cf159ec593fe7b6f3e263d7c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'central' => [$this, 'block_central'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/home.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "main/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_central($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        // line 4
        echo "  
";
        // line 5
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 6
            echo "    <div class=\"row my-5 justify-content-center\">
        <div class=\"col text-center\">
            <div class=\"card border-0\">
                <div class=\"card-body\">
                    <div class=\"card-title\">
                        <h3 class=\"mb-4\">We all have wishes to fulfill before dying !</h3>
                    </div>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-md-4 col\">
                            <p class=\"small color-text\"><strong>W<i>ish</i></strong> is the application to create your pre-mortem list. </p> <button type=\"button\" onclick=location.href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
            echo "\" class=\"btn btn-primary border-0 my-4\"><b>Tried it's free</b></button><br> </span> <span><img src=\"http://assets.stickpng.com/images/588798a7bc2fc2ef3a186015.png\" style= width:410px/> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
";
        }
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 24
            echo "    <div class=\"row my-5 justify-content-center\">
        <div class=\"col text-center\">
            <div class=\"card border-0\">
                <div class=\"card-body\">
                    <div class=\"card-title\">
                        <h3 class=\"mb-4\">Hello ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "username", [], "any", false, false, false, 29), "html", null, true);
            echo " , do you have any new wishes to register?</h3>
                    </div>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-md-4 col\">
                            <button type=\"button\" onclick=location.href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
            echo "\" class=\"btn btn-primary border-0 my-4\"><b>GO</b></button>          
                        </div>
                    </div>
                </div>
            </div>
        </div>
";
        }
        // line 40
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  111 => 33,  104 => 29,  97 => 24,  95 => 23,  84 => 15,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block central %}
  
{% if not is_granted('ROLE_USER') %}
    <div class=\"row my-5 justify-content-center\">
        <div class=\"col text-center\">
            <div class=\"card border-0\">
                <div class=\"card-body\">
                    <div class=\"card-title\">
                        <h3 class=\"mb-4\">We all have wishes to fulfill before dying !</h3>
                    </div>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-md-4 col\">
                            <p class=\"small color-text\"><strong>W<i>ish</i></strong> is the application to create your pre-mortem list. </p> <button type=\"button\" onclick=location.href=\"{{ path('add') }}\" class=\"btn btn-primary border-0 my-4\"><b>Tried it's free</b></button><br> </span> <span><img src=\"http://assets.stickpng.com/images/588798a7bc2fc2ef3a186015.png\" style= width:410px/> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endif %}
{% if is_granted('ROLE_USER') %}
    <div class=\"row my-5 justify-content-center\">
        <div class=\"col text-center\">
            <div class=\"card border-0\">
                <div class=\"card-body\">
                    <div class=\"card-title\">
                        <h3 class=\"mb-4\">Hello {{app.user.username}} , do you have any new wishes to register?</h3>
                    </div>
                    <div class=\"row justify-content-center\">
                        <div class=\"col-md-4 col\">
                            <button type=\"button\" onclick=location.href=\"{{ path('add') }}\" class=\"btn btn-primary border-0 my-4\"><b>GO</b></button>          
                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endif %}


{% endblock %}


", "main/home.html.twig", "C:\\wamp64\\www\\symfony\\templates\\main\\home.html.twig");
    }
}
