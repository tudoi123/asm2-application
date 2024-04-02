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

/* registration/register.html.twig */
class __TwigTemplate_3ab1bbdc27996fca3cff5f3ed6a0fdc2 extends Template
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
        return "base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base_login.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
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
    .register-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    
    .register-form {
        width: 400px;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .register-form h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group label {
        display: block;
        font-weight: bold;
    }
    
    .form-group input[type=\"email\"],
    .form-group input[type=\"password\"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    
    .form-group input[type=\"checkbox\"] {
        display: inline-block;
        width: auto;
        margin-top: 5px;
    }
    
    .register-form button[type=\"submit\"] {
        display: block;
        width: 100%;
        padding: 8px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    
    .register-link {
        text-align: center;
        margin-top: 20px;
    }
    
    </style>
<div class=\"register-container\">
    <form method=\"post\" class=\"register-form\">
        <h1>Please register</h1>
        ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group\">
            <label for=\"inputEmail\">Email</label>
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "email", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "email", "required" => "required"]]);
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"inputPassword\">Password</label>
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "plainPassword", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "new-password", "required" => "required"]]);
        echo "
        </div>
        <div class=\"form-group\">
            <label>
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "agreeTerms", [], "any", false, false, false, 83), 'widget');
        echo " Agree to Terms
            </label>
        </div>
        <button type=\"submit\" class=\"btn btn-primary btn-block\">Register</button>
        <div class=\"register-link\">
            Already have an account? <a href=\"login\">Log in</a>
        </div>
        ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), 'form_end');
        echo "
    </form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
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
        return array (  186 => 90,  176 => 83,  169 => 79,  162 => 75,  156 => 72,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_login.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
<style>
    .register-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    
    .register-form {
        width: 400px;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .register-form h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group label {
        display: block;
        font-weight: bold;
    }
    
    .form-group input[type=\"email\"],
    .form-group input[type=\"password\"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    
    .form-group input[type=\"checkbox\"] {
        display: inline-block;
        width: auto;
        margin-top: 5px;
    }
    
    .register-form button[type=\"submit\"] {
        display: block;
        width: 100%;
        padding: 8px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    
    .register-link {
        text-align: center;
        margin-top: 20px;
    }
    
    </style>
<div class=\"register-container\">
    <form method=\"post\" class=\"register-form\">
        <h1>Please register</h1>
        {{ form_start(registrationForm) }}
        <div class=\"form-group\">
            <label for=\"inputEmail\">Email</label>
            {{ form_widget(registrationForm.email, { 'attr': {'class': 'form-control', 'autocomplete': 'email', 'required': 'required'} }) }}
        </div>
        <div class=\"form-group\">
            <label for=\"inputPassword\">Password</label>
            {{ form_widget(registrationForm.plainPassword, { 'attr': {'class': 'form-control', 'autocomplete': 'new-password', 'required': 'required'} }) }}
        </div>
        <div class=\"form-group\">
            <label>
                {{ form_widget(registrationForm.agreeTerms) }} Agree to Terms
            </label>
        </div>
        <button type=\"submit\" class=\"btn btn-primary btn-block\">Register</button>
        <div class=\"register-link\">
            Already have an account? <a href=\"login\">Log in</a>
        </div>
        {{ form_end(registrationForm) }}
    </form>
</div>
{% endblock %}
", "registration/register.html.twig", "D:\\zalo\\asm2_mrThanh\\templates\\registration\\register.html.twig");
    }
}
