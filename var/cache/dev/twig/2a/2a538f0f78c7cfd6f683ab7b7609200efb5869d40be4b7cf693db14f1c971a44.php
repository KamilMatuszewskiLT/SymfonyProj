<?php

/* classes/display2.html.twig */
class __TwigTemplate_afe51f26e7547da8538d3a8a443f1c9a630df2fcf3a3dc6b65ea902bf0094c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "classes/display2.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classes/display2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "classes/display2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <a href=\"/student/display\">Add new student</a>
    ";
        // line 4
        if (($context["form"] ?? $this->getContext($context, "form"))) {
            // line 5
            echo "    <div id=\"saveForm\" class=\"simpleform\">
        ";
            // line 6
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
        ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
        ";
            // line 8
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
    </div>
    ";
        }
        // line 11
        echo "    <table id=\"table1\" class=\"table\">
        <tr>
            <th>Sort by:</th>
            <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(1)\" value=\"Id\"></th>
            <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(2)\" value=\"Name\"></th>
            <th>Delete from DB</th>
        </tr>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 19
            echo "            <tr>
                <td style=\"background-color: initial;\"></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "Id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "Name", array()), "html", null, true);
            echo "</td>
                <td style=\"text-align: center; background-color: initial;\">
                    <a id=\"deleter\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_delete", array("id" => $this->getAttribute($context["x"], "Id", array()))), "html", null, true);
            echo "\">X</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        <br/>
    </table>
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            echo "        <div class=\"flash-notice\">
            ";
            // line 32
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " <a style=\"vertical-align: super; font-size: 14px; background: red; color: white;\" href=\"#\" onclick=\"window.location.reload(true);\"> X</a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "classes/display2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  115 => 31,  111 => 30,  107 => 28,  97 => 24,  92 => 22,  88 => 21,  84 => 19,  80 => 18,  71 => 11,  65 => 8,  61 => 7,  57 => 6,  54 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <a href=\"/student/display\">Add new student</a>
    {% if form %}
    <div id=\"saveForm\" class=\"simpleform\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    </div>
    {% endif %}
    <table id=\"table1\" class=\"table\">
        <tr>
            <th>Sort by:</th>
            <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(1)\" value=\"Id\"></th>
            <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(2)\" value=\"Name\"></th>
            <th>Delete from DB</th>
        </tr>
        {% for x in data %}
            <tr>
                <td style=\"background-color: initial;\"></td>
                <td>{{ x.Id }}</td>
                <td>{{ x.Name }}</td>
                <td style=\"text-align: center; background-color: initial;\">
                    <a id=\"deleter\" href=\"{{ path('class_delete', { 'id' : x.Id }) }}\">X</a>
                </td>
            </tr>
        {% endfor %}
        <br/>
    </table>
    {% for message in app.flashes('notice') %}
        <div class=\"flash-notice\">
            {{ message }} <a style=\"vertical-align: super; font-size: 14px; background: red; color: white;\" href=\"#\" onclick=\"window.location.reload(true);\"> X</a>
        </div>
    {% endfor %}
{% endblock %}", "classes/display2.html.twig", "C:\\wamp64\\bin\\php\\php7.2.4\\DBExample\\app\\Resources\\views\\classes\\display2.html.twig");
    }
}
