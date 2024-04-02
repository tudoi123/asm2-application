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

/* post/_form.html.twig */
class __TwigTemplate_3c0611f817be7c6a1df984b5c7c72539 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/_form.html.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    <form action=\"/edit-post\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"title\">Title</label>
            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"Enter title\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"introduce\">Introduce</label>
            <textarea class=\"form-control\" id=\"introduce\" name=\"introduce\" rows=\"5\" placeholder=\"Enter introduce\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })()), "introduce", [], "any", false, false, false, 9), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"body\">Body</label>
            <textarea class=\"form-control\" id=\"body\" name=\"body\" rows=\"10\" placeholder=\"Enter body\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 13, $this->source); })()), "body", [], "any", false, false, false, 13), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"end\">End</label>
            <input type=\"text\" class=\"form-control\" id=\"end\" name=\"end\" placeholder=\"Enter end\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()), "end", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"name\">Name</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Enter name\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"image\">Image</label>
            <input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\">
        </div>
        
        <button type=\"submit\" class=\"btn btn-primary\">Update</button>
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "post/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  96 => 21,  89 => 17,  82 => 13,  75 => 9,  68 => 5,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block form %}
    <form action=\"/edit-post\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"title\">Title</label>
            <input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"Enter title\" value=\"{{ post.title }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"introduce\">Introduce</label>
            <textarea class=\"form-control\" id=\"introduce\" name=\"introduce\" rows=\"5\" placeholder=\"Enter introduce\">{{ post.introduce }}</textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"body\">Body</label>
            <textarea class=\"form-control\" id=\"body\" name=\"body\" rows=\"10\" placeholder=\"Enter body\">{{ post.body }}</textarea>
        </div>
        <div class=\"form-group\">
            <label for=\"end\">End</label>
            <input type=\"text\" class=\"form-control\" id=\"end\" name=\"end\" placeholder=\"Enter end\" value=\"{{ post.end }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"name\">Name</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Enter name\" value=\"{{ post.name }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"image\">Image</label>
            <input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\">
        </div>
        
        <button type=\"submit\" class=\"btn btn-primary\">Update</button>
    </form>
{% endblock %}
", "post/_form.html.twig", "D:\\zalo\\asm2_mrThanh\\templates\\post\\_form.html.twig");
    }
}
