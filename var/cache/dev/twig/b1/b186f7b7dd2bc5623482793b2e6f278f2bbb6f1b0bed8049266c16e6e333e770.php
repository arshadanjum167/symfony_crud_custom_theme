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

/* layout/scripts.html.twig */
class __TwigTemplate_8060b3439e7338bc3eab7c4b85b7f627bf87a1aaa03affaf4e5cc76bfdd70391 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/scripts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/scripts.html.twig"));

        // line 1
        echo "<!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/modernizr/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/js-storage/js.storage.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/js-cookie/src/js.cookie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/pace/pace.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/metismenu/dist/metisMenu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/switchery-npm/index.js"), "html", null, true);
        echo "\"></script>
<!-- ================== Select2 Scripts ==================-->
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/components/select2-init.js"), "html", null, true);
        echo "\"></script>
<!-- ================== Datepicker SCRIPTS ==================-->
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/components/bootstrap-datepicker-init.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/components/bootstrap-date-range-picker-init.js"), "html", null, true);
        echo "\"></script>

<!-- bootstrap file input -->
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/bootstrap-fileinput/bootstrap-fileinput.js"), "html", null, true);
        echo "\"></script>
<!-- Owl Carousel -->
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/owl-carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!-- Fancybox -->
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/fancybox/jquery.fancybox.pack.js?v=2.1.5.js"), "html", null, true);
        echo "\"></script>
<!-- Custom Scroll bar file -->
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/components/custom-scrollbar.js"), "html", null, true);
        echo "\"></script>
<!--TabSlider-->
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/tabslider/jquery.scrolling-tabs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/tabslider/st-demo.js"), "html", null, true);
        echo "\"></script>
<!-- Checkbox All Select Script -->
<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/checkbox/jquery.checkboxall-1.0.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/components/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/components/jquery.validate.msg.js"), "html", null, true);
        echo "\"></script>
<!-- ================== GLOBAL APP SCRIPTS ==================-->
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/global/app.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).ready(function() {
        \$(\"a.example1\").fancybox();
    });
    
    setTimeout(function(){
        \$('.alert-dismissable').slideUp();
    },3000);

    \$('.onClickCloseFalse').click(function(event){
        event.stopPropagation();
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout/scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 37,  151 => 35,  147 => 34,  143 => 33,  138 => 31,  134 => 30,  129 => 28,  125 => 27,  120 => 25,  115 => 23,  110 => 21,  104 => 18,  100 => 17,  96 => 16,  92 => 15,  88 => 14,  83 => 12,  79 => 11,  74 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ================== GLOBAL VENDOR SCRIPTS ==================-->
<script src=\"{{asset('/assets/vendor/modernizr/modernizr.custom.js') }}\"></script>
<script src=\"{{asset('/assets/vendor/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"{{asset('/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{asset('/assets/vendor/js-storage/js.storage.js') }}\"></script>
<script src=\"{{asset('/assets/vendor/js-cookie/src/js.cookie.js') }}\"></script>
<script src=\"{{asset('/assets/vendor/pace/pace.js') }}\"></script>
<script src=\"{{asset('/assets/vendor/metismenu/dist/metisMenu.js') }}\"></script>
<script src=\"{{asset('/assets/vendor/switchery-npm/index.js') }}\"></script>
<!-- ================== Select2 Scripts ==================-->
<script src=\"{{asset('/assets/vendor/select2/select2.min.js') }}\"></script>
<script src=\"{{asset('/assets/js/components/select2-init.js') }}\"></script>
<!-- ================== Datepicker SCRIPTS ==================-->
<script src=\"{{asset('/assets/vendor/moment/min/moment.min.js') }}\"></script>
<script src=\"{{asset('/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js') }}\"></script>
<script src=\"{{asset('/assets/vendor/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>
<script src=\"{{asset('/assets/js/components/bootstrap-datepicker-init.js') }}\"></script>
<script src=\"{{asset('/assets/js/components/bootstrap-date-range-picker-init.js') }}\"></script>

<!-- bootstrap file input -->
<script src=\"{{asset('/assets/vendor/bootstrap-fileinput/bootstrap-fileinput.js') }}\"></script>
<!-- Owl Carousel -->
<script src=\"{{asset('/assets/vendor/owl-carousel/js/owl.carousel.min.js') }}\"></script>
<!-- Fancybox -->
<script type=\"text/javascript\" src=\"{{asset('/assets/vendor/fancybox/jquery.fancybox.pack.js?v=2.1.5.js') }}\"></script>
<!-- Custom Scroll bar file -->
<script src=\"{{asset('/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}\"></script>
<script src=\"{{asset('/assets/js/components/custom-scrollbar.js') }}\"></script>
<!--TabSlider-->
<script src=\"{{asset('/assets/vendor/tabslider/jquery.scrolling-tabs.js') }}\"></script>
<script src=\"{{asset('/assets/vendor/tabslider/st-demo.js') }}\"></script>
<!-- Checkbox All Select Script -->
<script src=\"{{asset('/assets/vendor/checkbox/jquery.checkboxall-1.0.js') }}\"></script>
<script src=\"{{asset('/assets/js/components/jquery.validate.min.js') }}\"></script>
<script src=\"{{asset('/assets/js/components/jquery.validate.msg.js') }}\"></script>
<!-- ================== GLOBAL APP SCRIPTS ==================-->
<script src=\"{{asset('/assets/js/global/app.js') }}\"></script>
<script>
    \$(document).ready(function() {
        \$(\"a.example1\").fancybox();
    });
    
    setTimeout(function(){
        \$('.alert-dismissable').slideUp();
    },3000);

    \$('.onClickCloseFalse').click(function(event){
        event.stopPropagation();
    });
</script>
", "layout/scripts.html.twig", "/var/www/html/apps/simple_crud_symfony_custom_theme/templates/layout/scripts.html.twig");
    }
}
