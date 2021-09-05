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

/* template.html.twig */
class __TwigTemplate_84cfdab085dda7545515ee80343bf8173d1947f46146a5e4e58ab8f4ab0cc914 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'central' => [$this, 'block_central'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\">
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>WiSH</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" />
    <style>
    
   @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');

 body {
     font-family: 'Rubik', sans-serif;
     height: 100% !important;
     background-color: #F8F9FB !important
 }

 .container-fluid {
     margin-top: 101px;
     color: #000 !important
 }

 .card {
     background-color: #F8F9FB !important
 }

 p {
     font-size: calc(12px + (14 - 12) * ((100vw - 360px) / (1600 - 360))) !important;
     display: fkex
 }

 h3 {
     font-size: calc(24px + (30 - 24) * ((100vw - 360px) / (1600 - 360))) !important
 }

 .social {
     font-size: 21px !important
 }

 .color-text {
     color: #757575 !important
 }

 button {
     font-size: calc(12px + (13 - 12) * ((100vw - 360px) / (1600 - 320))) !important;
     background-color: #2CA6FB !important;
     padding-left: calc(20px + (28 - 20) * ((100vw - 360px) / (1600 - 360))) !important;
     padding-right: calc(20px + (28 - 20) * ((100vw - 360px) / (1600 - 360))) !important;
     padding-top: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important;
     padding-bottom: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important
 }

 button:focus {
     -moz-box-shadow: none !important;
     -webkit-box-shadow: none !important;
     box-shadow: none !important;
     outline-width: 0
 }

 footer {
     color: #caced1 !important
 }

 li {
     margin-top: 20px;
     margin-bottom: 20px
 }

 .Careers {
     cursor: pointer;
     color: #1E88E5
 }

 .row-1 {
     background-color: #1E242A !important
 }

 .row-2 {
     background-color: #28323C !important
 }
    

    </style>
</head>
<body  >

    <header >
    ";
        // line 102
        echo "        <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
            <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"https://w-festival.com/templates/w-festival/images/w-fest-2021-logo.png\"style=\"max-width:90px\"/></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavbar\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a><span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">    
                        <a class=\"nav-link\" href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wish");
        echo "\">Wish</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
        echo "\">Ajouter Wish</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about_us");
        echo "\">About Us</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                    </li>
                </ul>
            </div>
            <div class=\"navbar-nav\" >
                ";
        // line 127
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 128
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fa fa-user-o fa-4\"></i></a>
                    <a class=\"nav-link\" href=\"";
            // line 129
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"><i class=\"fa fa-sign-in fa-4\" aria-hidden=\"true\"></i></a>
                ";
        }
        // line 130
        echo "\t
                ";
        // line 131
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 132
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ChangeProfil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i></a>
                    <a href=\"";
            // line 133
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i></a>
                ";
        }
        // line 134
        echo "\t\t\t\t\t
            </div>
        </nav>
        ";
        // line 137
        $context["maroute"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "request", [], "any", false, false, false, 137), "attributes", [], "any", false, false, false, 137), "get", [0 => "_route"], "method", false, false, false, 137);
        // line 138
        echo "    </header>
    <div class=\"container-fluid pb-0 mb-0 justify-content-center text-light \">
      ";
        // line 141
        echo "      
      ";
        // line 142
        $this->displayBlock('central', $context, $blocks);
        // line 145
        echo "       <br><br><br>
    </div>
        <footer>
            <div class=\"row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2\">
                <div class=\"col-12\">
                    <div class=\"row my-4 row-1 no-gutters\">
                        <div class=\"col-sm-3 col-auto text-center\"><small>&#9400; <strong>W<i>ish</i></strong> Software</small></div>
                        <div class=\"col-md-3 col-auto \"></div>
                        <div class=\"col-md-3 col-auto\"></div>
                        <div class=\"col my-auto text-md-left text-right \"> <small> no-dead@wishbeforedying.com   <span><a href=\"#\" target=\"_bank\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a></span></small> </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 142
    public function block_central($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        // line 143
        echo "      
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 143,  263 => 142,  237 => 145,  235 => 142,  232 => 141,  228 => 138,  226 => 137,  221 => 134,  216 => 133,  211 => 132,  209 => 131,  206 => 130,  201 => 129,  196 => 128,  194 => 127,  186 => 122,  180 => 119,  174 => 116,  168 => 113,  162 => 110,  152 => 103,  149 => 102,  65 => 20,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto|Varela+Round\">
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>WiSH</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon.ico') }}\" />
    <style>
    
   @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');

 body {
     font-family: 'Rubik', sans-serif;
     height: 100% !important;
     background-color: #F8F9FB !important
 }

 .container-fluid {
     margin-top: 101px;
     color: #000 !important
 }

 .card {
     background-color: #F8F9FB !important
 }

 p {
     font-size: calc(12px + (14 - 12) * ((100vw - 360px) / (1600 - 360))) !important;
     display: fkex
 }

 h3 {
     font-size: calc(24px + (30 - 24) * ((100vw - 360px) / (1600 - 360))) !important
 }

 .social {
     font-size: 21px !important
 }

 .color-text {
     color: #757575 !important
 }

 button {
     font-size: calc(12px + (13 - 12) * ((100vw - 360px) / (1600 - 320))) !important;
     background-color: #2CA6FB !important;
     padding-left: calc(20px + (28 - 20) * ((100vw - 360px) / (1600 - 360))) !important;
     padding-right: calc(20px + (28 - 20) * ((100vw - 360px) / (1600 - 360))) !important;
     padding-top: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important;
     padding-bottom: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important
 }

 button:focus {
     -moz-box-shadow: none !important;
     -webkit-box-shadow: none !important;
     box-shadow: none !important;
     outline-width: 0
 }

 footer {
     color: #caced1 !important
 }

 li {
     margin-top: 20px;
     margin-bottom: 20px
 }

 .Careers {
     cursor: pointer;
     color: #1E88E5
 }

 .row-1 {
     background-color: #1E242A !important
 }

 .row-2 {
     background-color: #28323C !important
 }
    

    </style>
</head>
<body  >

    <header >
    {#  path('name') #}
        <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
            <a href=\"{{ path('home') }}\"><img src=\"https://w-festival.com/templates/w-festival/images/w-fest-2021-logo.png\"style=\"max-width:90px\"/></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavbar\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('home') }}\">Home</a><span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">    
                        <a class=\"nav-link\" href=\"{{ path('wish') }}\">Wish</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('add') }}\">Ajouter Wish</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('about_us') }}\">About Us</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
                    </li>
                </ul>
            </div>
            <div class=\"navbar-nav\" >
                {% if not is_granted('ROLE_USER') %}
                    <a class=\"nav-link\" href=\"{{ path('app_login') }}\"><i class=\"fa fa-user-o fa-4\"></i></a>
                    <a class=\"nav-link\" href=\"{{ path('app_register') }}\"><i class=\"fa fa-sign-in fa-4\" aria-hidden=\"true\"></i></a>
                {% endif %}\t
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ path('app_ChangeProfil',{id : app.user.id }) }}\"><i class=\"fa fa-edit\"></i></a>
                    <a href=\"{{ path('app_logout') }}\"><i class=\"fa fa-sign-out\"></i></a>
                {% endif %}\t\t\t\t\t
            </div>
        </nav>
        {% set maroute = app.request.attributes.get('_route')%}
    </header>
    <div class=\"container-fluid pb-0 mb-0 justify-content-center text-light \">
      {# zone modifiable #}
      
      {% block central %}
      
      {% endblock %}
       <br><br><br>
    </div>
        <footer>
            <div class=\"row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2\">
                <div class=\"col-12\">
                    <div class=\"row my-4 row-1 no-gutters\">
                        <div class=\"col-sm-3 col-auto text-center\"><small>&#9400; <strong>W<i>ish</i></strong> Software</small></div>
                        <div class=\"col-md-3 col-auto \"></div>
                        <div class=\"col-md-3 col-auto\"></div>
                        <div class=\"col my-auto text-md-left text-right \"> <small> no-dead@wishbeforedying.com   <span><a href=\"#\" target=\"_bank\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a></span></small> </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>", "template.html.twig", "C:\\wamp64\\www\\symfony\\templates\\template.html.twig");
    }
}
