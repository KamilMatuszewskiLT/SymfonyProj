<?php

/* student/update.html.twig */
class __TwigTemplate_605daf3f181ad970e990d545bf28f055105a238973d6d462c7440cd2e504c88b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/update.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/update.html.twig"));

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
        echo "    <div class=\"row\">
        <div class=\"column30\">
        <a href=\"/student/display\">Go back</a>
        <a href=\"/student/update/";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "/pdf\">Print to PDF</a>

        <table id=\"studentData\" class=\"table\">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
            </tr>
            <tr>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "name", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "address", array()), "html", null, true);
        echo "</td>
            </tr>
        </table>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allClasses"] ?? $this->getContext($context, "allClasses")));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 21
            echo "            ";
            if ($this->getAttribute($context["class"], "isAttending", array())) {
                // line 22
                echo "                <div style=\"font-size: 20px;\">
                    <p style=\"margin-left: 14px;\">
                        Is attending
                        ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
                echo ".
                        <br/>
                        Add mark:
                        <a id=\"deleter\" href=\"/student/addMark/";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "id", array()), "html", null, true);
                echo "/1\">1</a>
                        <a id=\"deleter\" href=\"/student/addMark/";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "id", array()), "html", null, true);
                echo "/2\">2</a>
                        <a id=\"deleter\" href=\"/student/addMark/";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "id", array()), "html", null, true);
                echo "/3\">3</a>
                        <a id=\"deleter\" href=\"/student/addMark/";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "id", array()), "html", null, true);
                echo "/4\">4</a>
                        <a id=\"deleter\" href=\"/student/addMark/";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "id", array()), "html", null, true);
                echo "/5\">5</a>
                        <a id=\"deleter\" href=\"/student/addMark/";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "id", array()), "html", null, true);
                echo "/6\">6</a>
                        <br/>
                        <a id=\"deleter\" href=\"/student/update/";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "id", array()), "html", null, true);
                echo "/rm\">Remove from class.</a>
                    </p>
                </div><br/>
            ";
            } else {
                // line 39
                echo "                <div style=\"font-size: 20px;\">
                    <p style=\"margin-left: 14px;\">
                        Is not attending
                        ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
                echo ".
                        <br/>
                        <a id=\"deleter\" href=\"/student/update/";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "id", array()), "html", null, true);
                echo "/add\">Add to class.</a>
                    </p>
                </div><br/>
            ";
            }
            // line 48
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
        <div class=\"column30\">
        <table id=\"table1\" class=\"table\">
            <tr>
                <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(0)\" value=\"Class\"></th>
                <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(1)\" value=\"Mark\"></th>
                <th>Delete</th>
            </tr>
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["marks"] ?? $this->getContext($context, "marks")));
        foreach ($context['_seq'] as $context["_key"] => $context["mark"]) {
            // line 58
            echo "                <tr>
                    <td class=\"className\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["mark"], "classId", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["mark"], "markValue", array()), "html", null, true);
            echo "</td>
                    <td><a id=\"deleter\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mark_delete", array("markId" => $this->getAttribute($context["mark"], "markId", array()), "studId" => $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()))), "html", null, true);
            echo "\">X</a></th>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </table>
        </div>
        <div>
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            echo "                <div class=\"flash-notice\">
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
        // line 74
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 74,  215 => 69,  212 => 68,  208 => 67,  203 => 64,  194 => 61,  190 => 60,  186 => 59,  183 => 58,  179 => 57,  169 => 49,  163 => 48,  154 => 44,  149 => 42,  144 => 39,  135 => 35,  128 => 33,  122 => 32,  116 => 31,  110 => 30,  104 => 29,  98 => 28,  92 => 25,  87 => 22,  84 => 21,  80 => 20,  74 => 17,  70 => 16,  66 => 15,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"column30\">
        <a href=\"/student/display\">Go back</a>
        <a href=\"/student/update/{{ student.id }}/pdf\">Print to PDF</a>

        <table id=\"studentData\" class=\"table\">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
            </tr>
            <tr>
                <td>{{ student.id }}</td>
                <td>{{ student.name }}</td>
                <td>{{ student.address }}</td>
            </tr>
        </table>
        {% for class in allClasses %}
            {% if class.isAttending %}
                <div style=\"font-size: 20px;\">
                    <p style=\"margin-left: 14px;\">
                        Is attending
                        {{ class.name }}.
                        <br/>
                        Add mark:
                        <a id=\"deleter\" href=\"/student/addMark/{{ student.id }}/{{ class.id }}/1\">1</a>
                        <a id=\"deleter\" href=\"/student/addMark/{{ student.id }}/{{ class.id }}/2\">2</a>
                        <a id=\"deleter\" href=\"/student/addMark/{{ student.id }}/{{ class.id }}/3\">3</a>
                        <a id=\"deleter\" href=\"/student/addMark/{{ student.id }}/{{ class.id }}/4\">4</a>
                        <a id=\"deleter\" href=\"/student/addMark/{{ student.id }}/{{ class.id }}/5\">5</a>
                        <a id=\"deleter\" href=\"/student/addMark/{{ student.id }}/{{ class.id }}/6\">6</a>
                        <br/>
                        <a id=\"deleter\" href=\"/student/update/{{ student.id }}/{{ class.id }}/rm\">Remove from class.</a>
                    </p>
                </div><br/>
            {% else %}
                <div style=\"font-size: 20px;\">
                    <p style=\"margin-left: 14px;\">
                        Is not attending
                        {{ class.name }}.
                        <br/>
                        <a id=\"deleter\" href=\"/student/update/{{ student.id }}/{{ class.id }}/add\">Add to class.</a>
                    </p>
                </div><br/>
            {% endif %}
        {% endfor %}
        </div>
        <div class=\"column30\">
        <table id=\"table1\" class=\"table\">
            <tr>
                <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(0)\" value=\"Class\"></th>
                <th><input class=\"sortButton\" type=\"button\" onclick=\"sortTable(1)\" value=\"Mark\"></th>
                <th>Delete</th>
            </tr>
            {% for mark in marks %}
                <tr>
                    <td class=\"className\">{{ mark.classId }}</td>
                    <td>{{ mark.markValue }}</td>
                    <td><a id=\"deleter\" href=\"{{ path('mark_delete', { 'markId' : mark.markId, 'studId' : student.id }) }}\">X</a></th>
                </tr>
            {% endfor %}
        </table>
        </div>
        <div>
            {% for message in app.flashes('notice') %}
                <div class=\"flash-notice\">
                    {{ message }}
                    <a style=\"vertical-align: super; font-size: 14px; background: red; color: white;\" href=\"#\" onclick=\"window.location.reload(true);\">
                        X</a>
                </div>
            {% endfor %}

        {% endblock %}", "student/update.html.twig", "C:\\wamp64\\bin\\php\\php7.2.4\\DBExample\\app\\Resources\\views\\student\\update.html.twig");
    }
}
