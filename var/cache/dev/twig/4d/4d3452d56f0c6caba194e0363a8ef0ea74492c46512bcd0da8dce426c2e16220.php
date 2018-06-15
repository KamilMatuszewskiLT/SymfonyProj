<?php

/* student/display.html.twig */
class __TwigTemplate_5a05de10e9019b9205159b530afc067a458b8600fdd2af7ceb6b21bb0d8a3dc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/display.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/display.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/display.html.twig"));

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
        echo "    <a href=\"/class/display\">Add new class</a>
    <div class=\"row\">
        <div class=\"column\">
            <div id=\"saveForm\" class=\"simpleform\">
                ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>

            <table id=\"table1\" class=\"table\">
                <tr>
                    <th>Sort by:</th>
                    <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(1)\" value=\"Id\"></th>
                    <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(2)\" value=\"Name\"></th>
                    <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(3)\" value=\"Address\"></th>
                    <th>Delete from DB</th>
                    <th style=\"width: 70px;\"></th>
                </tr>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 22
            echo "                    <tr>
                        <td style=\"background-color: initial;\"></td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "Id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "Name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "Address", array()), "html", null, true);
            echo "</td>
                        <td style=\"text-align: center; background-color: initial;\">
                            <a id=\"deleter\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_delete", array("id" => $this->getAttribute($context["x"], "Id", array()))), "html", null, true);
            echo "\">X</a>
                        </td>
                        <td style=\"text-align: center; background-color: initial;\">
                            <a id=\"deleter\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_update", array("id" => $this->getAttribute($context["x"], "Id", array()))), "html", null, true);
            echo "\">Edit</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                <br/>
            </table>
        </div>
        <div class=\"column\">
            <div class=\"row\">
                <table id=\"table2\" class=\"table column10\">
                    <tr>
                        <th>
                            <h2>Student</h2>
                        </th>
                    </tr>
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 47
            echo "                        <tr>
                            <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo "</th>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </table>
                <table id=\"table3\" class=\"table column20\">
                    <tr>
                        <th>
                            <h2>Class</h2>
                        </th>
                    </tr>
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classes"] ?? $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 59
            echo "                        <tr>
                            <th>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
            echo "</th>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </table>
            </div>
        </div>
    </div>
    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            echo "        <div class=\"flash-notice\">
            ";
            // line 69
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            <a style=\"vertical-align: super; font-size: 14px; background: red; color: white;\" href=\"#\" onclick=\"window.location.reload(true);\">
                X</a>
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
        return "student/display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 69,  179 => 68,  175 => 67,  169 => 63,  160 => 60,  157 => 59,  153 => 58,  144 => 51,  135 => 48,  132 => 47,  128 => 46,  115 => 35,  105 => 31,  99 => 28,  94 => 26,  90 => 25,  86 => 24,  82 => 22,  78 => 21,  63 => 9,  59 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
    <a href=\"/class/display\">Add new class</a>
    <div class=\"row\">
        <div class=\"column\">
            <div id=\"saveForm\" class=\"simpleform\">
                {{ form_start(form) }}
                {{ form_widget(form) }}
                {{ form_end(form) }}
            </div>

            <table id=\"table1\" class=\"table\">
                <tr>
                    <th>Sort by:</th>
                    <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(1)\" value=\"Id\"></th>
                    <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(2)\" value=\"Name\"></th>
                    <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(3)\" value=\"Address\"></th>
                    <th>Delete from DB</th>
                    <th style=\"width: 70px;\"></th>
                </tr>
                {% for x in data %}
                    <tr>
                        <td style=\"background-color: initial;\"></td>
                        <td>{{ x.Id }}</td>
                        <td>{{ x.Name }}</td>
                        <td>{{ x.Address }}</td>
                        <td style=\"text-align: center; background-color: initial;\">
                            <a id=\"deleter\" href=\"{{ path('student_delete', { 'id' : x.Id }) }}\">X</a>
                        </td>
                        <td style=\"text-align: center; background-color: initial;\">
                            <a id=\"deleter\" href=\"{{ path('student_update', { 'id' : x.Id }) }}\">Edit</a>
                        </td>
                    </tr>
                {% endfor %}
                <br/>
            </table>
        </div>
        <div class=\"column\">
            <div class=\"row\">
                <table id=\"table2\" class=\"table column10\">
                    <tr>
                        <th>
                            <h2>Student</h2>
                        </th>
                    </tr>
                    {% for student in students %}
                        <tr>
                            <th>{{ student.name }}</th>
                        </tr>
                    {% endfor %}
                </table>
                <table id=\"table3\" class=\"table column20\">
                    <tr>
                        <th>
                            <h2>Class</h2>
                        </th>
                    </tr>
                    {% for class in classes %}
                        <tr>
                            <th>{{ class.name }}</th>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
    {% for message in app.flashes('notice') %}
        <div class=\"flash-notice\">
            {{ message }}
            <a style=\"vertical-align: super; font-size: 14px; background: red; color: white;\" href=\"#\" onclick=\"window.location.reload(true);\">
                X</a>
        </div>
    {% endfor %}
{% endblock %}", "student/display.html.twig", "C:\\wamp64\\bin\\php\\php7.2.4\\DBExample\\app\\Resources\\views\\student\\display.html.twig");
    }
}
