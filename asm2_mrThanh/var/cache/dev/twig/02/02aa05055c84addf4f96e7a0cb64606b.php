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

/* post/new.html.twig */
class __TwigTemplate_a55e2d0e1421b626a9b02db373a88811 extends Template
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
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "post/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Post";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    body {
        font-family: sans-serif;
      }
      
      h1 {
        text-align: center;
      }
      
      form {
        margin: 0 auto;
        width: 500px;
      }
      
      input, textarea {
        margin-bottom: 10px;
      }
      
      input[type=\"submit\"] {
        background-color: #000;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
      }
      
    </style>
    <h1>Create new Post</h1>

    <form action=\"/new-post\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"title\">Title</label>
            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"Enter title\">
        </div>
        <div class=\"form-group\">
            <label for=\"introduce\">Introduce</label>
            <textarea class=\"form-control\" id=\"introduce\" name=\"introduce\" rows=\"5\" placeholder=\"Enter introduce\"></textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"body\">Body</label>
            <textarea class=\"form-control\" id=\"body\" name=\"body\" rows=\"10\" placeholder=\"Enter body\"></textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"end\">End</label>
            <input type=\"text\" class=\"form-control\" id=\"end\" name=\"end\" placeholder=\"Enter end\">
        </div>
        <div class=\"form-group\">
            <label for=\"name\">Name</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Enter name\">
        </div>
        <div class=\"form-group\">
            <label for=\"image\">Image</label>
            <input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\">
        </div>
        <div class=\"form-group\">
            <label for=\"dateAt\">DateAt</label>
            <input type=\"date\" class=\"form-control\" id=\"dateAt\" name=\"dateAt\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Create</button>
    </form>

    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_index");
        echo "\">back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "post/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  151 => 67,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title %}New Post{% endblock %}

{% block body %}
<style>
    body {
        font-family: sans-serif;
      }
      
      h1 {
        text-align: center;
      }
      
      form {
        margin: 0 auto;
        width: 500px;
      }
      
      input, textarea {
        margin-bottom: 10px;
      }
      
      input[type=\"submit\"] {
        background-color: #000;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
      }
      
    </style>
    <h1>Create new Post</h1>

    <form action=\"/new-post\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"title\">Title</label>
            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"Enter title\">
        </div>
        <div class=\"form-group\">
            <label for=\"introduce\">Introduce</label>
            <textarea class=\"form-control\" id=\"introduce\" name=\"introduce\" rows=\"5\" placeholder=\"Enter introduce\"></textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"body\">Body</label>
            <textarea class=\"form-control\" id=\"body\" name=\"body\" rows=\"10\" placeholder=\"Enter body\"></textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"end\">End</label>
            <input type=\"text\" class=\"form-control\" id=\"end\" name=\"end\" placeholder=\"Enter end\">
        </div>
        <div class=\"form-group\">
            <label for=\"name\">Name</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Enter name\">
        </div>
        <div class=\"form-group\">
            <label for=\"image\">Image</label>
            <input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\">
        </div>
        <div class=\"form-group\">
            <label for=\"dateAt\">DateAt</label>
            <input type=\"date\" class=\"form-control\" id=\"dateAt\" name=\"dateAt\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Create</button>
    </form>

    <a href=\"{{ path('app_post_index') }}\">back to list</a>
{% endblock %}
", "post/new.html.twig", "D:\\zalo\\asm2_mrThanh\\templates\\post\\new.html.twig");
    }
}
