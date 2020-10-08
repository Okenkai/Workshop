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

/* base.html.twig */
class __TwigTemplate_b2126c8fbc8e5fb34af4fa2e376e6fc4c09007e15b4a7396aab06045c1c0b239 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    </head>
    <body>
    ";
        // line 25
        if (((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "attributes", [], "any", false, false, false, 25), "get", [0 => "_route"], "method", false, false, false, 25)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "login") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))) || (is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "attributes", [], "any", false, false, false, 25), "get", [0 => "_route"], "method", false, false, false, 25)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "register") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))))) {
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "     <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <!-- <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\"><img src=\"assets/img/navbar-logo.svg\" alt=\"\" /></a>-->
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fas fa-bars ml-1\"></i>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ml-auto\">
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"/\">Acceuil</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"/magasinBio\">Magasins bio</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"/enseigne\">Enseignes Eco-responsable</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"restaurant\">Restaurant bio</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"/parrainage\">Parrainage</a></li>
                        <li class=\"nav-item\">    
                            <form class=\"navbar-form navbar-right\" role=\"search\"> 
                                <div class=\"form-group\"> 
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\"> 
                                </div> 
                                <button type=\"button\" class=\"btn btn-default\">
                                    <span class=\"glyphicon glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
                                </button> 
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    ";
        }
        // line 56
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <meta charset=\"utf-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
            <meta name=\"description\" content=\"\" />
            <meta name=\"author\" content=\"\" />
            <title>Mon Bio</title>
            <link rel=\"icon\" type=\"image/x-icon\" href=";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        echo " />
            <!-- Font Awesome icons (free version)-->
            <script src=\"https://use.fontawesome.com/releases/v5.13.0/js/all.js\" crossorigin=\"anonymous\"></script>
            <!-- Google fonts-->
            <link href=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Montserrat:400,700"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" />
            <link href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" />
            <link href=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href=";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
            <link href=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/loginStyle.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "            <!-- Bootstrap core JS-->
            <script src=";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
            <!-- Third party plugin JS-->
            <script src=";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"), "html", null, true);
        echo "></script>
            <!-- Contact form JS-->
            <script src=";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mail/jqBootstrapValidation.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/mail/contact_me.js"), "html", null, true);
        echo "></script>
            <!-- Core theme JS-->
            <script src=";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 67,  238 => 65,  234 => 64,  229 => 62,  224 => 60,  220 => 59,  217 => 58,  207 => 57,  189 => 56,  177 => 21,  173 => 20,  168 => 18,  164 => 17,  160 => 16,  153 => 12,  146 => 7,  136 => 6,  117 => 5,  105 => 69,  102 => 57,  99 => 56,  68 => 27,  65 => 26,  63 => 25,  59 => 23,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <meta charset=\"utf-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
            <meta name=\"description\" content=\"\" />
            <meta name=\"author\" content=\"\" />
            <title>Mon Bio</title>
            <link rel=\"icon\" type=\"image/x-icon\" href={{ asset(\"assets/img/favicon.ico\")}} />
            <!-- Font Awesome icons (free version)-->
            <script src=\"https://use.fontawesome.com/releases/v5.13.0/js/all.js\" crossorigin=\"anonymous\"></script>
            <!-- Google fonts-->
            <link href={{ asset(\"https://fonts.googleapis.com/css?family=Montserrat:400,700\")}} rel=\"stylesheet\" type=\"text/css\" />
            <link href={{ asset(\"https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic\")}} rel=\"stylesheet\" type=\"text/css\" />
            <link href={{ asset(\"https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700\")}} rel=\"stylesheet\" type=\"text/css\" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href={{ asset(\"css/styles.css\")}} rel=\"stylesheet\" />
            <link href={{ asset(\"css/loginStyle.css\")}} rel=\"stylesheet\" />
        {% endblock %}
    </head>
    <body>
    {% if app.request.attributes.get('_route') starts with 'login' or app.request.attributes.get('_route') starts with 'register'  %}
    {% else %}
     <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark fixed-top\" id=\"mainNav\">
            <div class=\"container\">
                <!-- <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\"><img src=\"assets/img/navbar-logo.svg\" alt=\"\" /></a>-->
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fas fa-bars ml-1\"></i>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav text-uppercase ml-auto\">
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"/\">Acceuil</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"/magasinBio\">Magasins bio</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"/enseigne\">Enseignes Eco-responsable</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"restaurant\">Restaurant bio</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"/parrainage\">Parrainage</a></li>
                        <li class=\"nav-item\">    
                            <form class=\"navbar-form navbar-right\" role=\"search\"> 
                                <div class=\"form-group\"> 
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\"> 
                                </div> 
                                <button type=\"button\" class=\"btn btn-default\">
                                    <span class=\"glyphicon glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
                                </button> 
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    {% endif %}
        {% block body %}{% endblock %}
        {% block javascripts %}
            <!-- Bootstrap core JS-->
            <script src={{ asset(\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\")}}></script>
            <script src={{ asset(\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js\")}}></script>
            <!-- Third party plugin JS-->
            <script src={{ asset(\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js\")}}></script>
            <!-- Contact form JS-->
            <script src={{ asset(\"assets/mail/jqBootstrapValidation.js\")}}></script>
            <script src={{ asset(\"assets/mail/contact_me.js\")}}></script>
            <!-- Core theme JS-->
            <script src={{ asset(\"js/scripts.js\")}}></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/alex/symfonyWorkspace/WorkshopB3/templates/base.html.twig");
    }
}
