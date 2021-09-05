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

/* registration/modifyMyProfile.html.twig */
class __TwigTemplate_fe1dc1034e10a2121d6cf273d318183a78ca0214b6c957f2460b214e040c3eb5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/modifyMyProfile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/modifyMyProfile.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "registration/modifyMyProfile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_central($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        // line 6
        echo "<h1 style=\"text-align:center\">Modifier Account</h1>
<hr>
<div class=\"row\" style=\"    margin-left: 25%;\">

<div class=\"col-4 mb-4\">
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modifyForm"]) || array_key_exists("modifyForm", $context) ? $context["modifyForm"] : (function () { throw new RuntimeError('Variable "modifyForm" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
<div >
";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifyForm"]) || array_key_exists("modifyForm", $context) ? $context["modifyForm"] : (function () { throw new RuntimeError('Variable "modifyForm" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'row');
        echo "
</div>
<div >
";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifyForm"]) || array_key_exists("modifyForm", $context) ? $context["modifyForm"] : (function () { throw new RuntimeError('Variable "modifyForm" does not exist.', 16, $this->source); })()), "prenom", [], "any", false, false, false, 16), 'row');
        echo "
</div>
<div >
";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifyForm"]) || array_key_exists("modifyForm", $context) ? $context["modifyForm"] : (function () { throw new RuntimeError('Variable "modifyForm" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'row');
        echo "
</div>

<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
  Valider
</button>


</div>
<div class=\"col-4 \">
<h1>My Wishes</h1>
 ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wishes"]) || array_key_exists("wishes", $context) ? $context["wishes"] : (function () { throw new RuntimeError('Variable "wishes" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 31
            echo " <ul>

 <li><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifyMyWish", ["id" => twig_get_attribute($this->env, $this->source, $context["w"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</a></li>
</ul>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
</div>
  </div>
<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Confirmation</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
      <p>Mot de passe requis avant modification</p>

   
    <div >

    
<input type=\"checkbox\" id=\"scales\" name=\"check\" value=\"true\"
        >
  <label for=\"scales\">Are you sure ?</label>

  

      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
    </div>
    </div>
  </div>
</div>
";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modifyForm"]) || array_key_exists("modifyForm", $context) ? $context["modifyForm"] : (function () { throw new RuntimeError('Variable "modifyForm" does not exist.', 69, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/modifyMyProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 69,  125 => 36,  114 => 33,  110 => 31,  106 => 30,  92 => 19,  86 => 16,  80 => 13,  75 => 11,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}



{% block central %}
<h1 style=\"text-align:center\">Modifier Account</h1>
<hr>
<div class=\"row\" style=\"    margin-left: 25%;\">

<div class=\"col-4 mb-4\">
{{ form_start(modifyForm)}}
<div >
{{ form_row(modifyForm.nom)}}
</div>
<div >
{{ form_row(modifyForm.prenom)}}
</div>
<div >
{{ form_row(modifyForm.email)}}
</div>

<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
  Valider
</button>


</div>
<div class=\"col-4 \">
<h1>My Wishes</h1>
 {% for w in wishes %}
 <ul>

 <li><a href=\"{{ path('modifyMyWish',{id : w.id })}}\">{{w.title }}</a></li>
</ul>
 {% endfor %}

</div>
  </div>
<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Confirmation</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
      <p>Mot de passe requis avant modification</p>

   
    <div >

    
<input type=\"checkbox\" id=\"scales\" name=\"check\" value=\"true\"
        >
  <label for=\"scales\">Are you sure ?</label>

  

      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
    </div>
    </div>
  </div>
</div>
{{ form_end(modifyForm)}}
{% endblock %}", "registration/modifyMyProfile.html.twig", "C:\\wamp64\\www\\symfony\\templates\\registration\\modifymyProfile.html.twig");
    }
}
