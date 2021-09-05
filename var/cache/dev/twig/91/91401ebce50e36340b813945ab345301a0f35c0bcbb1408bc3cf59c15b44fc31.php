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

/* main/wish.html.twig */
class __TwigTemplate_5a55ab537d348c92a5cbd56995f560b43ecbcc75f2f6459864217d75e30e4c8b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/wish.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/wish.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "main/wish.html.twig", 1);
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
<div class=\"col-8\" style=\"box-shadow : 0 0.5em 5em -0.125em #00947e, 0 0px 0 1px #00947e;
    margin-left: 15%;
    margin-right: 15%;
    border-radius:12px;
    padding:2%\">
  <h1 style=\"text-align:center; margin-bottom:2%\">My WISH</h1>
  
<table class=\"table\">
  <tr> 
    <th scope=\"col\">Title</th>
    <th scope=\"col\">Description</th>
    <th scope=\"col\">Author</th>
    <th scope=\"col\">Date de création</th>
    <th scope=\"col\">modify</th>
    <th scope=\"col\">Delete</th>
  </tr>
  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wishes"]) || array_key_exists("wishes", $context) ? $context["wishes"] : (function () { throw new RuntimeError('Variable "wishes" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 22
            echo "  
  <tr>
    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "description", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "author", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "dateCreated", [], "any", false, false, false, 27), "m/d/Y, H:i:s"), "html", null, true);
            echo "</td>
\t\t<td>
\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifyMyWish", ["id" => twig_get_attribute($this->env, $this->source, $context["w"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-outline-warning\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t</a>
\t\t</td>
\t\t<td>
\t\t\t<a onclick=\"return confirm('Supprimer :";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "title", [], "any", false, false, false, 34), "html", null, true);
            echo " ?')\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteMyWish", ["id" => twig_get_attribute($this->env, $this->source, $context["w"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">
\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t</a>
\t\t</td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</table>


</div>
  
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/wish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 40,  120 => 34,  112 => 29,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 22,  87 => 21,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block central %}
  
<div class=\"col-8\" style=\"box-shadow : 0 0.5em 5em -0.125em #00947e, 0 0px 0 1px #00947e;
    margin-left: 15%;
    margin-right: 15%;
    border-radius:12px;
    padding:2%\">
  <h1 style=\"text-align:center; margin-bottom:2%\">My WISH</h1>
  
<table class=\"table\">
  <tr> 
    <th scope=\"col\">Title</th>
    <th scope=\"col\">Description</th>
    <th scope=\"col\">Author</th>
    <th scope=\"col\">Date de création</th>
    <th scope=\"col\">modify</th>
    <th scope=\"col\">Delete</th>
  </tr>
  {% for w in wishes %}
  
  <tr>
    <td>{{w.title }}</td>
    <td>{{w.description }}</td>
    <td>{{w.author }}</td>
    <td>{{w.dateCreated|date(\"m/d/Y, H:i:s\")}}</td>
\t\t<td>
\t\t\t<a href=\"{{ path('modifyMyWish',{id : w.id })}}\" class=\"btn btn-outline-warning\">
\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t</a>
\t\t</td>
\t\t<td>
\t\t\t<a onclick=\"return confirm('Supprimer :{{ w.title }} ?')\" href=\"{{ path('deleteMyWish',{id : w.id })}}\" class=\"btn btn-danger\">
\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t</a>
\t\t</td>
  </tr>
  {% endfor %}
</table>


</div>
  
  
{% endblock %}
", "main/wish.html.twig", "C:\\wamp64\\www\\symfony\\templates\\main\\wish.html.twig");
    }
}
