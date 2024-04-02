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

/* new/index.html.twig */
class __TwigTemplate_c3cb8ddc7dea2ee72f58d3c666cbba25 extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "new/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "new/index.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/lux/bootstrap.min.css\">
    ";
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 125
        echo "
    
</head>
<body>
    ";
        // line 129
        $this->displayBlock('header', $context, $blocks);
        // line 197
        echo "



";
        // line 201
        $this->displayBlock('body', $context, $blocks);
        // line 348
        echo "







    <hr class=\"divider\">
    
    ";
        // line 358
        $this->displayBlock('footer', $context, $blocks);
        // line 379
        echo "    

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
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

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        
        <style>
            .navbar-nav .nav-item {
                margin-right: 20px;
            }
        
            .navbar-nav .nav-item:last-child {
                margin-right: 0;
            }
        
            /* Style the search form */
            .search-form {
                margin-left: auto;
                display: flex;
                align-items: center;
            }
        
            .search-input {
                margin-right: 10px;
            }
        
            /* Style the cart icon */
            .nav-link-cart {
                display: flex;
                align-items: center;
                margin-left: 10px;
            }
        
            /* Style the login/logout button */
            .login-logout-btn {
                margin-left: 10px;
            }
        
            /* Update the footer styles */
            .footer {
                background-color: #343a40;
                color: white;
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
            .nav-link {
               
                padding-right: 20px;
              }
            .collapse navbar-collapse{
                
                    justify-content: center;
                    
                
            }
            .divider {
                margin-top: 2rem;
                margin-bottom: 2rem;
                border: none;
                border-top: 1px solid #eee;

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

    // line 129
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 130
        echo "    <nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
            
                <a class=\"nav-link\" href=\"http://127.0.0.1:8000\">
                  <img src=\"data:image/png;base64,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\">
                </a>
         
            
            <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarColor02\">

                <ul class=\"navbar-nav mx-auto\">
                    
                    <li class=\"nav-item mx-1 \">
                        <a class=\"nav-link\" href=\"macbook\">Mac</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"ipad\">Ipad</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"iphone\">Iphone</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"watch\">Watch</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"airpods\">Airpods</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"contactnew\">Contact</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"postnew\">News</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"orderstatus\">Order Status</a>
                    </li>
                </ul>
               
                
                <ul class=\"navbar-nav\">
                    <form class=\"d-flex\" action=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"GET\" style=\"margin-right: 40px;\">
                        <input class=\"form-control me-sm-0\" type=\"search\" name=\"keyword\" placeholder=\"Search\" required>
                        <button class=\"btn btn-secondary my-2 my-sm-0 mx-2\" type=\"submit\">Search</button>
                    </form>
                </ul>
                  
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item mx-2\">
                        <a class=\"nav-link\" href=\"/cart\" style=\"margin-right: 40px;\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
                                <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
                            </svg>
                        </a>
                    </li>
                </ul>
               
                <form>
                    <a class=\"btn btn-secondary\" href=\"/";
        // line 187
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "user", [], "any", false, false, false, 187)) ? ("logout") : ("login"));
        echo "\" @click=\"isOpen = false\">
                        ";
        // line 188
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188)) ? ("logout") : ("login"));
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

    // line 201
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 202
        echo "<style>
    /* Custom styles for the news page */
    .news-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start; /* Align items to the top */
        margin: 20px;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .news-image {
        flex: 0 0 40%;
        text-align: center;
    }

    .news-img {
        max-width: 100%;
        max-height: 200px; /* Reduced image height */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .news-details {
        flex: 0 0 58%; /* Adjusted to fit the new image size */
        padding-left: 20px; /* Added padding for separation */
    }

    .news-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
    }

    .news-introduction {
        font-size: 20px;
        color: #555;
        margin-bottom: 15px;
    }

    .news-body {
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 20px;
        color: #333;
    }

    .news-author {
        font-size: 16px;
        margin-bottom: 10px;
        color: #888;
    }

    .news-date {
        font-size: 14px;
        color: #888;
    }

    /* Added some spacing for the product cards */
    .products-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px;
    }

    .product-card {
        flex-basis: calc(50% - 20px); /* Two cards per row */
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        text-decoration: none;
        color: #333;
    }

    .product-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
    }

    .product-title {
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }
    .product-old {
        padding: 13px;
        font-size: 13px;
        
        text-align: center;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
        margin: 0;
        padding: 0;
    }

    header {
        
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    header h1 {
        margin: 0;
        font-size: 36px;
        font-weight: bold;
    }

    header p {
        margin: 0;
        font-size: 18px;
    }
</style>
<header>
    <h1>News Page</h1>
    
</header>
<div class=\"products-container\">
    ";
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 336, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 337
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detailnew", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 337)]), "html", null, true);
            echo "\" class=\"card product-card\">
        <img src=\"";
            // line 338
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "method", false, false, false, 338))), "html", null, true);
            echo "\" class=\"product-image\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 338), "html", null, true);
            echo "\">
        <div class=\"card-body\">
            <h5 class=\"product-title\">";
            // line 340
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 340), "html", null, true);
            echo "</h5>
        </div>
        <p class=\"product-old\">Tác giả: ";
            // line 342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getname", [], "method", false, false, false, 342), "html", null, true);
            echo ", Ngày đăng: ";
            ((twig_get_attribute($this->env, $this->source, $context["product"], "dateAt", [], "any", false, false, false, 342)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "dateAt", [], "any", false, false, false, 342), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>

    </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 358
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 359
        echo "    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h5>Thông tin Apple Store</h5>
                    <p>Chào mừng bạn đến với chi nhánh Apple Store Quận Bình Thạch! Chúng tôi tự hào là một trong những cửa hàng điện tử hàng đầu, mang đến cho khách hàng những trải nghiệm công nghệ tuyệt vời.</p>
                    <p>Với sản phẩm chất lượng, dịch vụ chuyên nghiệp và đội ngũ nhân viên tận tâm, chúng tôi cam kết mang đến cho khách hàng sự hài lòng tuyệt đối.</p>
                </div>
                <div class=\"col-md-6\">
                    <h5>Thông tin liên hệ</h5>
                    <ul class=\"list-unstyled\">
                        <li>Địa chỉ: 205 Nguyễn Xí, Phường 26, Bình Thạnh, Thành phố Hồ Chí Minh</li>
                        <li>Điện thoại: 0866251347</li>
                        <li>Email: quyetdvbs00079@fpt.edu.vn</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "new/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  556 => 359,  546 => 358,  535 => 346,  523 => 342,  518 => 340,  511 => 338,  506 => 337,  502 => 336,  366 => 202,  356 => 201,  337 => 188,  333 => 187,  313 => 170,  271 => 130,  261 => 129,  140 => 13,  130 => 12,  111 => 7,  97 => 379,  95 => 358,  83 => 348,  81 => 201,  75 => 197,  73 => 129,  67 => 125,  65 => 12,  62 => 11,  56 => 7,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/lux/bootstrap.min.css\">
    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}

    {% block stylesheets %}
        
        <style>
            .navbar-nav .nav-item {
                margin-right: 20px;
            }
        
            .navbar-nav .nav-item:last-child {
                margin-right: 0;
            }
        
            /* Style the search form */
            .search-form {
                margin-left: auto;
                display: flex;
                align-items: center;
            }
        
            .search-input {
                margin-right: 10px;
            }
        
            /* Style the cart icon */
            .nav-link-cart {
                display: flex;
                align-items: center;
                margin-left: 10px;
            }
        
            /* Style the login/logout button */
            .login-logout-btn {
                margin-left: 10px;
            }
        
            /* Update the footer styles */
            .footer {
                background-color: #343a40;
                color: white;
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
            .nav-link {
               
                padding-right: 20px;
              }
            .collapse navbar-collapse{
                
                    justify-content: center;
                    
                
            }
            .divider {
                margin-top: 2rem;
                margin-bottom: 2rem;
                border: none;
                border-top: 1px solid #eee;

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
<body>
    {% block header %}
    <nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
            
                <a class=\"nav-link\" href=\"http://127.0.0.1:8000\">
                  <img src=\"data:image/png;base64,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\">
                </a>
         
            
            <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarColor02\">

                <ul class=\"navbar-nav mx-auto\">
                    
                    <li class=\"nav-item mx-1 \">
                        <a class=\"nav-link\" href=\"macbook\">Mac</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"ipad\">Ipad</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"iphone\">Iphone</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"watch\">Watch</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"airpods\">Airpods</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"contactnew\">Contact</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"postnew\">News</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"orderstatus\">Order Status</a>
                    </li>
                </ul>
               
                
                <ul class=\"navbar-nav\">
                    <form class=\"d-flex\" action=\"{{ path('search') }}\" method=\"GET\" style=\"margin-right: 40px;\">
                        <input class=\"form-control me-sm-0\" type=\"search\" name=\"keyword\" placeholder=\"Search\" required>
                        <button class=\"btn btn-secondary my-2 my-sm-0 mx-2\" type=\"submit\">Search</button>
                    </form>
                </ul>
                  
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item mx-2\">
                        <a class=\"nav-link\" href=\"/cart\" style=\"margin-right: 40px;\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
                                <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
                            </svg>
                        </a>
                    </li>
                </ul>
               
                <form>
                    <a class=\"btn btn-secondary\" href=\"/{{ app.user ? 'logout' : 'login' }}\" @click=\"isOpen = false\">
                        {{ app.user ? 'logout' : 'login'}}
                    </a>
                </form>
            </div>
        </div>
    </nav>

    <hr class=\"divider\">
{% endblock %}




{% block body %}
<style>
    /* Custom styles for the news page */
    .news-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start; /* Align items to the top */
        margin: 20px;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .news-image {
        flex: 0 0 40%;
        text-align: center;
    }

    .news-img {
        max-width: 100%;
        max-height: 200px; /* Reduced image height */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .news-details {
        flex: 0 0 58%; /* Adjusted to fit the new image size */
        padding-left: 20px; /* Added padding for separation */
    }

    .news-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
    }

    .news-introduction {
        font-size: 20px;
        color: #555;
        margin-bottom: 15px;
    }

    .news-body {
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 20px;
        color: #333;
    }

    .news-author {
        font-size: 16px;
        margin-bottom: 10px;
        color: #888;
    }

    .news-date {
        font-size: 14px;
        color: #888;
    }

    /* Added some spacing for the product cards */
    .products-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px;
    }

    .product-card {
        flex-basis: calc(50% - 20px); /* Two cards per row */
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        text-decoration: none;
        color: #333;
    }

    .product-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
    }

    .product-title {
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }
    .product-old {
        padding: 13px;
        font-size: 13px;
        
        text-align: center;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
        margin: 0;
        padding: 0;
    }

    header {
        
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    header h1 {
        margin: 0;
        font-size: 36px;
        font-weight: bold;
    }

    header p {
        margin: 0;
        font-size: 18px;
    }
</style>
<header>
    <h1>News Page</h1>
    
</header>
<div class=\"products-container\">
    {% for product in products %}
    <a href=\"{{ path('app_detailnew', {'id': product.getId()}) }}\" class=\"card product-card\">
        <img src=\"{{ asset('image/' ~ product.getImage()) }}\" class=\"product-image\" alt=\"{{ product.getTitle() }}\">
        <div class=\"card-body\">
            <h5 class=\"product-title\">{{ product.getTitle() }}</h5>
        </div>
        <p class=\"product-old\">Tác giả: {{ product.getname() }}, Ngày đăng: {{ product.dateAt ? product.dateAt|date('Y-m-d H:i:s') : '' }}</p>

    </a>
    {% endfor %}
</div>
{% endblock %}








    <hr class=\"divider\">
    
    {% block footer %}
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h5>Thông tin Apple Store</h5>
                    <p>Chào mừng bạn đến với chi nhánh Apple Store Quận Bình Thạch! Chúng tôi tự hào là một trong những cửa hàng điện tử hàng đầu, mang đến cho khách hàng những trải nghiệm công nghệ tuyệt vời.</p>
                    <p>Với sản phẩm chất lượng, dịch vụ chuyên nghiệp và đội ngũ nhân viên tận tâm, chúng tôi cam kết mang đến cho khách hàng sự hài lòng tuyệt đối.</p>
                </div>
                <div class=\"col-md-6\">
                    <h5>Thông tin liên hệ</h5>
                    <ul class=\"list-unstyled\">
                        <li>Địa chỉ: 205 Nguyễn Xí, Phường 26, Bình Thạnh, Thành phố Hồ Chí Minh</li>
                        <li>Điện thoại: 0866251347</li>
                        <li>Email: quyetdvbs00079@fpt.edu.vn</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    {% endblock %}
    

</body>
</html>
", "new/index.html.twig", "D:\\zalo\\asm2_mrThanh\\templates\\new\\index.html.twig");
    }
}