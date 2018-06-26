<?php

/* student/studentPDF.html.twig */
class __TwigTemplate_50d7816386182c0426588004344ec27522cce00e3849140f2ed94976ec97365b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/studentPDF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/studentPDF.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>
            #";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 6, $this->source); })()), "id", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 6, $this->source); })()), "name", array()), "html", null, true);
        echo "
        </title>
    </head>
    <body>
        <div class=\"row\">
            <div class=\"column30\">
                <table id=\"studentData\" class=\"table\">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                    </tr>
                    <tr>
                        <th>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 19, $this->source); })()), "id", array()), "html", null, true);
        echo "</th>
                        <th>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 20, $this->source); })()), "name", array()), "html", null, true);
        echo "</th>
                        <th>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 21, $this->source); })()), "address", array()), "html", null, true);
        echo "</th>
                    </tr>
                </table>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allClasses"]) || array_key_exists("allClasses", $context) ? $context["allClasses"] : (function () { throw new Twig_Error_Runtime('Variable "allClasses" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 25
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["class"], "isAttending", array())) {
                // line 26
                echo "                        <div style=\"font-size: 20px;\">
                            <p style=\"margin-left: 14px;\">
                                Is attending
                                ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "name", array()), "html", null, true);
                echo ".
                                <br/>
                            </p>
                        </div><br/>
                    ";
            } else {
                // line 34
                echo "                        <div style=\"font-size: 20px;\">
                            <p style=\"margin-left: 14px;\">
                                Is not attending
                                ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "name", array()), "html", null, true);
                echo ".
                                <br/>
                            </p>
                        </div><br/>
                    ";
            }
            // line 42
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>
            <div class=\"column30\">
                <table class=\"table\">
                    <tr>
                        <th>Class</th>
                        <th>Mark</th>
                    </tr>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marks"]) || array_key_exists("marks", $context) ? $context["marks"] : (function () { throw new Twig_Error_Runtime('Variable "marks" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mark"]) {
            // line 51
            echo "                        <tr>
                            <th>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mark"], "classId", array()), "html", null, true);
            echo "</th>
                            <th>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mark"], "markValue", array()), "html", null, true);
            echo "</th>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </table>
            </div>
        </div>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "student/studentPDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  127 => 53,  123 => 52,  120 => 51,  116 => 50,  107 => 43,  101 => 42,  93 => 37,  88 => 34,  80 => 29,  75 => 26,  72 => 25,  68 => 24,  62 => 21,  58 => 20,  54 => 19,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>
            #{{ student.id }}-{{ student.name }}
        </title>
    </head>
    <body>
        <div class=\"row\">
            <div class=\"column30\">
                <table id=\"studentData\" class=\"table\">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                    </tr>
                    <tr>
                        <th>{{ student.id }}</th>
                        <th>{{ student.name }}</th>
                        <th>{{ student.address }}</th>
                    </tr>
                </table>
                {% for class in allClasses %}
                    {% if class.isAttending %}
                        <div style=\"font-size: 20px;\">
                            <p style=\"margin-left: 14px;\">
                                Is attending
                                {{ class.name }}.
                                <br/>
                            </p>
                        </div><br/>
                    {% else %}
                        <div style=\"font-size: 20px;\">
                            <p style=\"margin-left: 14px;\">
                                Is not attending
                                {{ class.name }}.
                                <br/>
                            </p>
                        </div><br/>
                    {% endif %}
                {% endfor %}
            </div>
            <div class=\"column30\">
                <table class=\"table\">
                    <tr>
                        <th>Class</th>
                        <th>Mark</th>
                    </tr>
                    {% for mark in marks %}
                        <tr>
                            <th>{{ mark.classId }}</th>
                            <th>{{ mark.markValue }}</th>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </body>
</html>", "student/studentPDF.html.twig", "C:\\wamp64\\bin\\php\\php7.2.4\\DBExample\\app\\Resources\\views\\student\\studentPDF.html.twig");
    }
}
