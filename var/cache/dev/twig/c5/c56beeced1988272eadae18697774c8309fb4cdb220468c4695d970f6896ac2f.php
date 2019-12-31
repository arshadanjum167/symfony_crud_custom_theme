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

/* layout/sidebar.html.twig */
class __TwigTemplate_b1d3c97ead7fedfe66ef57c1e4a1289d1234b6f24de61909a5f340821ccc0eeb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/sidebar.html.twig"));

        // line 1
        echo "
<aside class=\"sidebar sidebar-left\"> 
    <div class=\"sidebar-content\">
        <div class=\"aside-toolbar\">
            <ul class=\"site-logo\">
                <li>
                    <!-- START LOGO -->
                    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_default");
        echo "\">
                        <div class=\"logo\">
                            ";
        // line 11
        echo "                            <sup class=\"text-white ml-2 text-uppercase\">Admin</sup>
                        </div>
                        <!--<span class=\"brand-text ml-1\">Sajaji - Admin</span>-->
                    </a>
                    <!-- END LOGO -->
                </li>
            </ul>
        </div>
        <nav class=\"main-menu\">
            <ul class=\"nav metismenu\">
                <li class=\"\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_default");
        echo "\"><i class=\"icon dripicons-meter\"></i><span>Dashboard</span></a></li>
                <li class=\"\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\"><i class=\"la la-tags\"></i><span>Product</span></a></li>
            </ul>
        </nav>
    </div>
</aside>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  69 => 21,  57 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<aside class=\"sidebar sidebar-left\"> 
    <div class=\"sidebar-content\">
        <div class=\"aside-toolbar\">
            <ul class=\"site-logo\">
                <li>
                    <!-- START LOGO -->
                    <a href=\"{{path('admin_default')}}\">
                        <div class=\"logo\">
                            {#<img src=\"{{asset('assets/img/logo.png')}}\"/>#}
                            <sup class=\"text-white ml-2 text-uppercase\">Admin</sup>
                        </div>
                        <!--<span class=\"brand-text ml-1\">Sajaji - Admin</span>-->
                    </a>
                    <!-- END LOGO -->
                </li>
            </ul>
        </div>
        <nav class=\"main-menu\">
            <ul class=\"nav metismenu\">
                <li class=\"\"><a href=\"{{path('admin_default')}}\"><i class=\"icon dripicons-meter\"></i><span>Dashboard</span></a></li>
                <li class=\"\"><a href=\"{{path('product_index')}}\"><i class=\"la la-tags\"></i><span>Product</span></a></li>
            </ul>
        </nav>
    </div>
</aside>", "layout/sidebar.html.twig", "/var/www/html/apps/simple_crud_symfony_custom_theme/templates/layout/sidebar.html.twig");
    }
}
