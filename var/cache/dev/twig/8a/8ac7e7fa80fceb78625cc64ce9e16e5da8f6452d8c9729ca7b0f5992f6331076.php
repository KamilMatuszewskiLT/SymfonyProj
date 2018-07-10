<?php

/* student/update.html.twig */
class __TwigTemplate_775db7cb597bc61e4ec112fa97dfd327d77f3262e067dbe4bea10e4e08c0156b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"column30\">
        <a href=\"/student/display\">Go back</a>
        <a href=\"/student/update/";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 6, $this->source); })()), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 15, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 16, $this->source); })()), "name", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 17, $this->source); })()), "address", array()), "html", null, true);
        echo "</td>
            </tr>
        </table>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allClasses"]) || array_key_exists("allClasses", $context) ? $context["allClasses"] : (function () { throw new Twig_Error_Runtime('Variable "allClasses" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 21
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["class"], "isAttending", array())) {
                // line 22
                echo "                <div style=\"font-size: 20px;\">
                    <p style=\"margin-left: 14px;\">
                        Is attending
                        ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "name", array()), "html", null, true);
                echo ".
                        <br/>
                        Add mark:
                        <a id=\"deleter\" href=\"/student/addMark/";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 28, $this->source); })()), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "id", array()), "html", null, true);
                echo "/1\">1</a>
                        <a id=\"deleter\" href=\"/student/addMark/";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 29, $this->source); })()), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "id", array()), "html", null, true);
                echo "/2\">2</a>
                        <a id=\"deleter\" href=\"/student/addMark/";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 30, $this->source); })()), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "id", array()), "html", null, true);
                echo "/3\">3</a>
                        <a id=\"deleter\" href=\"/student/addMark/";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 31, $this->source); })()), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "id", array()), "html", null, true);
                echo "/4\">4</a>
                        <a id=\"deleter\" href=\"/student/addMark/";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 32, $this->source); })()), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "id", array()), "html", null, true);
                echo "/5\">5</a>
                        <a id=\"deleter\" href=\"/student/addMark/";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 33, $this->source); })()), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "id", array()), "html", null, true);
                echo "/6\">6</a>
                        <br/>
                        <a id=\"deleter\" href=\"/student/update/";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 35, $this->source); })()), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "id", array()), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "name", array()), "html", null, true);
                echo ".
                        <br/>
                        <a id=\"deleter\" href=\"/student/update/";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 44, $this->source); })()), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "id", array()), "html", null, true);
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
                <th>Class</th>
                <th>Mark</th>
                <th>Delete</th>
            </tr>
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marks"]) || array_key_exists("marks", $context) ? $context["marks"] : (function () { throw new Twig_Error_Runtime('Variable "marks" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mark"]) {
            // line 58
            echo "                <tr>
                    <td class=\"className\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mark"], "classId", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mark"], "markValue", array()), "html", null, true);
            echo "</td>
                    <td><a id=\"deleter\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mark_delete", array("markId" => twig_get_attribute($this->env, $this->source, $context["mark"], "markId", array()), "studId" => twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 61, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">X</a></th>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
                <table id=\"averagesTable\" class=\"table\">
                    <tr>
                        <th>Class</th>
                        <th>Average</th>
                    </tr>
                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["averages"]) || array_key_exists("averages", $context) ? $context["averages"] : (function () { throw new Twig_Error_Runtime('Variable "averages" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["classes"]) {
            // line 71
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["classes"]);
            foreach ($context['_seq'] as $context["class"] => $context["average"]) {
                // line 72
                echo "                        <tr>
                            <td>";
                // line 73
                echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                echo "</td>
                            <td>";
                // line 74
                echo twig_escape_filter($this->env, $context["average"], "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['class'], $context['average'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                </table>

        </table>
        </div>
        <div>
            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 83, $this->source); })()), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 84
            echo "                <div class=\"flash-notice\">
                    ";
            // line 85
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    <a class=\"flash-notice-X\" href=\"#\" onclick=\"window.location.reload(true);\">
                        X</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avdump"]) || array_key_exists("avdump", $context) ? $context["avdump"] : (function () { throw new Twig_Error_Runtime('Variable "avdump" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 91
            echo "    ";
            echo twig_escape_filter($this->env, $context["x"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
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
        return array (  285 => 93,  276 => 91,  271 => 90,  260 => 85,  257 => 84,  253 => 83,  246 => 78,  240 => 77,  231 => 74,  227 => 73,  224 => 72,  219 => 71,  215 => 70,  207 => 64,  198 => 61,  194 => 60,  190 => 59,  187 => 58,  183 => 57,  173 => 49,  167 => 48,  158 => 44,  153 => 42,  148 => 39,  139 => 35,  132 => 33,  126 => 32,  120 => 31,  114 => 30,  108 => 29,  102 => 28,  96 => 25,  91 => 22,  88 => 21,  84 => 20,  78 => 17,  74 => 16,  70 => 15,  58 => 6,  53 => 3,  44 => 2,  15 => 1,);
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
                <th>Class</th>
                <th>Mark</th>
                <th>Delete</th>
            </tr>
            {% for mark in marks %}
                <tr>
                    <td class=\"className\">{{ mark.classId }}</td>
                    <td>{{ mark.markValue }}</td>
                    <td><a id=\"deleter\" href=\"{{ path('mark_delete', { 'markId' : mark.markId, 'studId' : student.id }) }}\">X</a></th>
                </tr>
            {% endfor %}

                <table id=\"averagesTable\" class=\"table\">
                    <tr>
                        <th>Class</th>
                        <th>Average</th>
                    </tr>
                    {% for classes in averages %}
                    {% for class, average in classes %}
                        <tr>
                            <td>{{ class }}</td>
                            <td>{{ average }}</td>
                        </tr>
                    {% endfor %}
                    {% endfor %}
                </table>

        </table>
        </div>
        <div>
            {% for message in app.flashes('notice') %}
                <div class=\"flash-notice\">
                    {{ message }}
                    <a class=\"flash-notice-X\" href=\"#\" onclick=\"window.location.reload(true);\">
                        X</a>
                </div>
            {% endfor %}
    {% for x in avdump %}
    {{ x }}
    {%  endfor %}

        {% endblock %}", "student/update.html.twig", "C:\\wamp64\\bin\\php\\php7.2.4\\DBExample\\app\\Resources\\views\\student\\update.html.twig");
    }
}
