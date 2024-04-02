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

/* base_login.html.twig */
class __TwigTemplate_000e8456d27d78d425a877016f09a976 extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/sketchy/bootstrap.min.css\">
    ";
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 61
        echo "
   
</head>
";
        // line 64
        $this->displayBlock('header', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "
<hr class=\"divider\">


</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        
        <style>
            
            .divider {
                margin-top: 2rem;
                margin-bottom: 2rem;
                border: none;
                border-top: 1px solid #eee;
                margin-bottom: 20px;
            }

            .badge-cart {
                background-color: orange;
                color: white;
                font-size: 18px;
            }

            .search-form {
                display: flex;
                align-items: center;
            }

            .search-input {
                margin-right: 10px;
            }

            .footer {
                background-color: #f8f9fa;
                padding: 30px 0;
            }

            .footer .row {
                margin-top: 20px;
            }

            .footer h5 {
                margin-bottom: 20px;
            }

            .footer ul {
                padding-left: 0;
                list-style: none;
            }

            .footer li {
                margin-bottom: 10px;
            }
            
        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 65
        echo "    <nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
            <div class=\"container-fluid d-flex justify-content-center\">
                <a class=\"nav-item mx-2\" href=\"http://127.0.0.1:8000/\">
                    <img src=\"data:image/png;base64,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\">
                </a>
            </div>
            

            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>




            <form>
                <a class=\"btn btn-secondary\"  href=\"/";
        // line 82
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82)) ? ("logout") : ("login"));
        echo "\" @click=\"isOpen = false\">
                    ";
        // line 83
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83)) ? ("logout") : ("login"));
        echo "
                </a>
            </form>
        </div>
        </div>
    </nav>
    <hr class=\"divider\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base_login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  231 => 92,  213 => 83,  209 => 82,  190 => 65,  180 => 64,  121 => 11,  111 => 10,  92 => 5,  76 => 93,  74 => 92,  71 => 91,  69 => 64,  64 => 61,  62 => 10,  59 => 9,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/sketchy/bootstrap.min.css\">
    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}

    {% block stylesheets %}
        
        <style>
            
            .divider {
                margin-top: 2rem;
                margin-bottom: 2rem;
                border: none;
                border-top: 1px solid #eee;
                margin-bottom: 20px;
            }

            .badge-cart {
                background-color: orange;
                color: white;
                font-size: 18px;
            }

            .search-form {
                display: flex;
                align-items: center;
            }

            .search-input {
                margin-right: 10px;
            }

            .footer {
                background-color: #f8f9fa;
                padding: 30px 0;
            }

            .footer .row {
                margin-top: 20px;
            }

            .footer h5 {
                margin-bottom: 20px;
            }

            .footer ul {
                padding-left: 0;
                list-style: none;
            }

            .footer li {
                margin-bottom: 10px;
            }
            
        </style>
    {% endblock %}

   
</head>
{% block header %}
    <nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
            <div class=\"container-fluid d-flex justify-content-center\">
                <a class=\"nav-item mx-2\" href=\"http://127.0.0.1:8000/\">
                    <img src=\"data:image/png;base64,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\">
                </a>
            </div>
            

            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>




            <form>
                <a class=\"btn btn-secondary\"  href=\"/{{ app.user ? 'logout' : 'login' }}\" @click=\"isOpen = false\">
                    {{ app.user ? 'logout' : 'login'}}
                </a>
            </form>
        </div>
        </div>
    </nav>
    <hr class=\"divider\">
{% endblock %}

{% block body %}{% endblock %}

<hr class=\"divider\">


</body>
</html>
", "base_login.html.twig", "D:\\zalo\\asm2_mrThanh\\templates\\base_login.html.twig");
    }
}
