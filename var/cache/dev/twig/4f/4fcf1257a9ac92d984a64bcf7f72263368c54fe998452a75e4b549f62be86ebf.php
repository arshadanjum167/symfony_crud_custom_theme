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

/* security/login.html.twig */
class __TwigTemplate_a65a8f962d5f380d1d478910b9f0a1c5f4495c9025dc7f599aaa815abb839dba extends \Twig\Template
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
        return "layout/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("layout/login.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<form method=\"post\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        ";
        // line 10
        echo "        <h2>Admin Panel</h2>
    </div>
    <div class=\"login-box-body text-center\">
        <h2 class=\"mb-3\">Login</h2>
        <p class=\"mb-4\">Enter your credentials to access the panel</p>

            ";
        // line 16
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageKey", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageData", [], "any", false, false, false, 17), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 19
        echo "
            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "                <div class=\"mb-3\">
                    You are logged in as ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "username", [], "any", false, false, false, 22), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                </div>
            ";
        }
        // line 25
        echo "
            <div class=\"form-group text-center\">
                <label for=\"inputEmail\">Email</label>
                <input type=\"email\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
            </div>
            <label for=\"inputPassword\">Password</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

            <input type=\"hidden\" name=\"_csrf_token\"
                value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
            >

            ";
        // line 47
        echo "
            <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
                Sign in
            </button>
            <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Register</a>
        
    </div>
</div>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 51,  145 => 47,  139 => 34,  130 => 28,  125 => 25,  117 => 22,  114 => 21,  112 => 20,  109 => 19,  103 => 17,  101 => 16,  93 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/login.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
<form method=\"post\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        {#<img src=\"{{ asset('assets/img/logo-white.png') }}\" alt=\"Logo\"/>#}
        <h2>Admin Panel</h2>
    </div>
    <div class=\"login-box-body text-center\">
        <h2 class=\"mb-3\">Login</h2>
        <p class=\"mb-4\">Enter your credentials to access the panel</p>

            {% if error %}
                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}

            {% if app.user %}
                <div class=\"mb-3\">
                    You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                </div>
            {% endif %}

            <div class=\"form-group text-center\">
                <label for=\"inputEmail\">Email</label>
                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
            </div>
            <label for=\"inputPassword\">Password</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

            <input type=\"hidden\" name=\"_csrf_token\"
                value=\"{{ csrf_token('authenticate') }}\"
            >

            {#
                Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                See https://symfony.com/doc/current/security/remember_me.html

                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                    </label>
                </div>
            #}

            <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
                Sign in
            </button>
            <a href=\"{{ path('app_register') }}\">Register</a>
        
    </div>
</div>
</form>
{% endblock %}
", "security/login.html.twig", "/var/www/html/apps/simple_crud_symfony_custom_theme/templates/security/login.html.twig");
    }
}
