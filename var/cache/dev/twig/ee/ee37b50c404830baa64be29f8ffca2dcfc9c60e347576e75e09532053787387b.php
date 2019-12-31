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

/* admin/product/index.html.twig */
class __TwigTemplate_f18bf4fc60ed2d67f8469039d9fcad4a93d2038053fb4bde844cf27d62e43357 extends \Twig\Template
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
        return "layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $this->parent = $this->loadTemplate("layout/base.html.twig", "admin/product/index.html.twig", 1);
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

        echo "Product index";
        
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
        echo "
<div class=\"content\">
";
        // line 8
        $this->loadTemplate("admin/product/_header.html.twig", "admin/product/index.html.twig", 8)->display($context);
        // line 9
        echo "<section class=\"page-content container-fluid\">
<div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                    <div class=\"card-body p-0\">
                        <div class=\"table-responsive\">
                        <table class=\"table\" id=\"example1\">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th class=\"text-center\">actions</th>
                                    ";
        // line 23
        echo "                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 27
            echo "                                <tr>
                                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                    ";
            // line 35
            echo "                                    <td class=\"table-field-actions text-center\">
                                            <div class=\"btn-group\">
                                                <a href=\"#\" data-toggle=\"dropdown\" class=\"btn btn-default btn-sm btn-icon-only transparent\" title=\"\">
                                                    <i class=\"icon dripicons-dots-3 zmdi-hc-fw\"></i>
                                                </a>
                                                <div class=\"dropdown-menu dropdown-icon-menu dropdown-menu-right\">
                                                    <a class=\"dropdown-item\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\"><i class=\"zmdi zmdi-eye zmdi-hc-fw text-secondary\"></i> View</a>
                                                    <a class=\"dropdown-item\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"><i class=\"zmdi zmdi-edit zmdi-hc-fw text-secondary\"></i> Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                                <tr>
                                    <td colspan=\"4\">no records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 52,  157 => 48,  146 => 42,  142 => 41,  134 => 35,  130 => 30,  126 => 29,  122 => 28,  119 => 27,  114 => 26,  109 => 23,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/base.html.twig' %}

{% block title %}Product index{% endblock %}

{% block body %}

<div class=\"content\">
{% include 'admin/product/_header.html.twig' %}
<section class=\"page-content container-fluid\">
<div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                    <div class=\"card-body p-0\">
                        <div class=\"table-responsive\">
                        <table class=\"table\" id=\"example1\">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th class=\"text-center\">actions</th>
                                    {#<th>actions</th>#}
                                </tr>
                            </thead>
                            <tbody>
                            {% for product in products %}
                                <tr>
                                    <td>{{ product.id }}</td>
                                    <td>{{ product.title }}</td>
                                    <td>{{ product.price }}</td>
                                    {#<td>
                                        <a href=\"{{ path('product_show', {'id': product.id}) }}\">show</a>
                                        <a href=\"{{ path('product_edit', {'id': product.id}) }}\">edit</a>
                                    </td>#}
                                    <td class=\"table-field-actions text-center\">
                                            <div class=\"btn-group\">
                                                <a href=\"#\" data-toggle=\"dropdown\" class=\"btn btn-default btn-sm btn-icon-only transparent\" title=\"\">
                                                    <i class=\"icon dripicons-dots-3 zmdi-hc-fw\"></i>
                                                </a>
                                                <div class=\"dropdown-menu dropdown-icon-menu dropdown-menu-right\">
                                                    <a class=\"dropdown-item\" href=\"{{ path('product_show', {'id': product.id}) }}\"><i class=\"zmdi zmdi-eye zmdi-hc-fw text-secondary\"></i> View</a>
                                                    <a class=\"dropdown-item\" href=\"{{ path('product_edit', {'id': product.id}) }}\"><i class=\"zmdi zmdi-edit zmdi-hc-fw text-secondary\"></i> Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"4\">no records found</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>

    
{% endblock %}
", "admin/product/index.html.twig", "/var/www/html/apps/simple_crud_symfony_custom_theme/templates/admin/product/index.html.twig");
    }
}
