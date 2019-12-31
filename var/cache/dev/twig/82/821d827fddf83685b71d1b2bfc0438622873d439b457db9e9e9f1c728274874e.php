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

/* layout/header.html.twig */
class __TwigTemplate_edf1a7b2c8a32f114c14de94a3cb21d178a28226e44daafb45cdd46900b9e2c5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        // line 1
        echo "
<!-- TOP TOOLBAR WRAPPER -->
<nav class=\"top-toolbar navbar navbar-mobile navbar-tablet\">
    <ul class=\"navbar-nav nav-left\">
        <li class=\"nav-item\">
            <a href=\"javascript:void(0)\" data-toggle-state=\"aside-left-open\">
            <i class=\"icon dripicons-align-left\"></i>
            </a>
        </li>
    </ul>
    <ul class=\"navbar-nav nav-center site-logo\">
        <li>
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_default");
        echo "\">
                <div class=\"logo_mobile\">
                    ";
        // line 16
        echo "                    <sup class=\"text-white ml-2 text-uppercase\">Admin</sup>
                </div>
                <!--<span class=\"brand-text\">Workernet</span>-->
            </a>
        </li>
    </ul>
    <ul class=\"navbar-nav nav-right\">
        <li class=\"nav-item\">
            <a href=\"javascript:void(0)\" data-toggle-state=\"mobile-topbar-toggle\">
            <i class=\"icon dripicons-dots-3 rotate-90\"></i>
            </a>
        </li>
    </ul>
</nav>
<nav class=\"top-toolbar navbar navbar-desktop flex-nowrap\">
    <ul class=\"navbar-nav nav-right\">
        
            
        
        <li class=\"nav-item dropdown mr-3\">
            <a  class=\"nav-link nav-pill user-avatar\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
            ";
        // line 38
        echo "            <i style=\"color:#7598c1 !important\" class=\"la la-navicon\"></i>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-accout\">
                <div class=\"dropdown-header pb-3\">
                    <div class=\"media d-user\">
                        ";
        // line 44
        echo "                        <div class=\"media-body\">
                            <h5 class=\"mt-0 mb-0\">Admin</h5>
                            <span></span>
                        </div>
                    </div>
                </div>
                ";
        // line 51
        echo "                ";
        // line 52
        echo "                ";
        // line 53
        echo "                <a class=\"dropdown-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"icon dripicons-lock\"></i> Logout</a>
            </div>
        </li>
    </ul>
</nav>
<!-- END TOP TOOLBAR WRAPPER -->

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 53,  102 => 52,  100 => 51,  92 => 44,  85 => 38,  62 => 16,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!-- TOP TOOLBAR WRAPPER -->
<nav class=\"top-toolbar navbar navbar-mobile navbar-tablet\">
    <ul class=\"navbar-nav nav-left\">
        <li class=\"nav-item\">
            <a href=\"javascript:void(0)\" data-toggle-state=\"aside-left-open\">
            <i class=\"icon dripicons-align-left\"></i>
            </a>
        </li>
    </ul>
    <ul class=\"navbar-nav nav-center site-logo\">
        <li>
            <a href=\"{{path('admin_default')}}\">
                <div class=\"logo_mobile\">
                    {#<img src=\"{{asset('assets/img/logo.png')}}\"/>#}
                    <sup class=\"text-white ml-2 text-uppercase\">Admin</sup>
                </div>
                <!--<span class=\"brand-text\">Workernet</span>-->
            </a>
        </li>
    </ul>
    <ul class=\"navbar-nav nav-right\">
        <li class=\"nav-item\">
            <a href=\"javascript:void(0)\" data-toggle-state=\"mobile-topbar-toggle\">
            <i class=\"icon dripicons-dots-3 rotate-90\"></i>
            </a>
        </li>
    </ul>
</nav>
<nav class=\"top-toolbar navbar navbar-desktop flex-nowrap\">
    <ul class=\"navbar-nav nav-right\">
        
            
        
        <li class=\"nav-item dropdown mr-3\">
            <a  class=\"nav-link nav-pill user-avatar\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
            {#<img src=\"\" class=\"w-35 h-35 rounded-circle\" alt=\"Profile Image\" height=\"35px\">#}
            <i style=\"color:#7598c1 !important\" class=\"la la-navicon\"></i>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-accout\">
                <div class=\"dropdown-header pb-3\">
                    <div class=\"media d-user\">
                        {#<img class=\"align-self-center mr-3 w-40 h-40 rounded-circle\" src=\"\" alt=\"Profile Image\">#}
                        <div class=\"media-body\">
                            <h5 class=\"mt-0 mb-0\">Admin</h5>
                            <span></span>
                        </div>
                    </div>
                </div>
                {#<a class=\"dropdown-item\" href=\"{{ url('/admin/default/myprofile') }}\"><i class=\"icon dripicons-user\"></i> My Profile</a>#}
                {#<a class=\"dropdown-item\" href=\"{{ route('admin.showChangePassowrd') }}\"><i class=\"icon dripicons-gear\"></i> Change Password</a>#}
                {#<!--<a class=\"dropdown-item\" href=\"../../pages/profile/change-admin-code.php\"><i class=\"icon dripicons-gear\"></i> Change Admin Code</a>#}
                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"><i class=\"icon dripicons-lock\"></i> Logout</a>
            </div>
        </li>
    </ul>
</nav>
<!-- END TOP TOOLBAR WRAPPER -->

", "layout/header.html.twig", "/var/www/html/apps/simple_crud_symfony_custom_theme/templates/layout/header.html.twig");
    }
}
