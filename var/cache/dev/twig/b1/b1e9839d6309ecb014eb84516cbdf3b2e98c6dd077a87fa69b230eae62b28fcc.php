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

/* layout/css.html.twig */
class __TwigTemplate_c1fc84b8bd261a543feac0e1bac0ea4cc3d70b05b7f854350061850897460c2f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/css.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/css.html.twig"));

        // line 1
        echo "<!-- ================== GOOGLE FONTS ==================-->
<link href=\"https://fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext\" rel=\"stylesheet\">
<!--<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">-->
<!-- ======================= GLOBAL VENDOR STYLES ========================-->
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendor/bootstrap.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/metismenu/dist/metisMenu.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/switchery-npm/index.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\">
<!-- ======================= Favicon ===========================-->
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        echo "\">
<!-- ======================= LINE AWESOME ICONS ===========================-->
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons/line-awesome.min.css"), "html", null, true);
        echo "\">
<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
<!-- ======================= DRIP ICONS ===================================-->
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons/dripicons.min.css"), "html", null, true);
        echo "\">
<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
<!-- ======================= font Awesome ICONIC FONTS =================-->    
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
<!-- ======================= PAGE LEVEL VENDOR STYLES ========================-->
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
<!-- Owl Carousel -->
<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/owl-carousel/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/owl-carousel/css/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/owl-carousel/css/owl.transitions.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- Tab Slider -->
<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tabslider/jquery.scrolling-tabs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tabslider/st-demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- ======================= Datepicker STYLES ========================-->
<link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-datepicker/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
<!-- Bootstrap file Input -->
<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-fileinput/bootstrap-fileinput.css"), "html", null, true);
        echo "\">
<!-- ======================= GLOBAL COMMON STYLES ============================-->
<!--fancybox-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fancybox/jquery.fancybox.css?v=2.1.5"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/common/main.bundle.css"), "html", null, true);
        echo "\">
<!-- ======================= LAYOUT TYPE ===========================-->
<link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/layouts/vertical/core/main.css"), "html", null, true);
        echo "\">
<!-- ======================= MENU TYPE ===========================================-->
<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/layouts/vertical/menu-type/default.css"), "html", null, true);
        echo "\">
<!-- ======================= THEME COLOR STYLES ===========================-->
<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/layouts/vertical/themes/theme-d.css"), "html", null, true);
        echo "\">
<!-- ======================= STYLES ===========================-->
<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout/css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 47,  158 => 45,  153 => 43,  148 => 41,  143 => 39,  139 => 38,  133 => 35,  128 => 33,  124 => 32,  119 => 30,  115 => 29,  110 => 27,  106 => 26,  102 => 25,  97 => 23,  92 => 21,  87 => 19,  82 => 17,  77 => 15,  72 => 13,  67 => 11,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ================== GOOGLE FONTS ==================-->
<link href=\"https://fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext\" rel=\"stylesheet\">
<!--<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">-->
<!-- ======================= GLOBAL VENDOR STYLES ========================-->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/vendor/bootstrap.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/metismenu/dist/metisMenu.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/switchery-npm/index.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}\">
<!-- ======================= Favicon ===========================-->
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('assets/img/favicon.ico') }}\">
<!-- ======================= LINE AWESOME ICONS ===========================-->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/icons/line-awesome.min.css') }}\">
<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/icons/material-design-iconic-font.min.css') }}\">
<!-- ======================= DRIP ICONS ===================================-->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/icons/dripicons.min.css') }}\">
<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/icons/material-design-iconic-font.min.css') }}\">
<!-- ======================= font Awesome ICONIC FONTS =================-->    
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/icons/font-awesome/css/font-awesome.css') }}\">
<!-- ======================= PAGE LEVEL VENDOR STYLES ========================-->
<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/select2/select2.min.css') }}\">
<!-- Owl Carousel -->
<link href=\"{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/vendor/owl-carousel/css/owl.theme.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/vendor/owl-carousel/css/owl.transitions.css') }}\" rel=\"stylesheet\">
<!-- Tab Slider -->
<link href=\"{{ asset('assets/vendor/tabslider/jquery.scrolling-tabs.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('assets/vendor/tabslider/st-demo.css') }}\" rel=\"stylesheet\">
<!-- ======================= Datepicker STYLES ========================-->
<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap-datepicker/bootstrap-datepicker.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap-daterangepicker/daterangepicker.css') }}\">
<!-- Bootstrap file Input -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap-fileinput/bootstrap-fileinput.css') }}\">
<!-- ======================= GLOBAL COMMON STYLES ============================-->
<!--fancybox-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/fancybox/jquery.fancybox.css?v=2.1.5') }}\" />
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/common/main.bundle.css') }}\">
<!-- ======================= LAYOUT TYPE ===========================-->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/layouts/vertical/core/main.css') }}\">
<!-- ======================= MENU TYPE ===========================================-->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/layouts/vertical/menu-type/default.css') }}\">
<!-- ======================= THEME COLOR STYLES ===========================-->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/layouts/vertical/themes/theme-d.css') }}\">
<!-- ======================= STYLES ===========================-->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
", "layout/css.html.twig", "/var/www/html/apps/simple_crud_symfony_custom_theme/templates/layout/css.html.twig");
    }
}
