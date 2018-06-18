<?php

/* student/studentPDF.html.twig */
class __TwigTemplate_67a06dc6f3feeeaac67424c5bcc703b88db9711bbe359d60e89b99daf00b4562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/studentPDF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/studentPDF.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "        </title>
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "</th>
                            <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "name", array()), "html", null, true);
        echo "</th>
                            <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "address", array()), "html", null, true);
        echo "</th>
                        </tr>
                    </table>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allClasses"] ?? $this->getContext($context, "allClasses")));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 25
            echo "                        ";
            if ($this->getAttribute($context["class"], "isAttending", array())) {
                // line 26
                echo "                            <div style=\"font-size: 20px;\">
                                <p style=\"margin-left: 14px;\">
                                    Is attending
                                    ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
                echo ".
                                    <br/>
                                </p>
                            </div><br/>
                        ";
            } else {
                // line 34
                echo "                            <div style=\"font-size: 20px;\">
                                <p style=\"margin-left: 14px;\">
                                    Is not attending
                                    ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
                echo ".
                                    <br/>
                                </p>
                            </div><br/>
                        ";
            }
            // line 42
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </div>
                <div class=\"column30\">
                    <table class=\"table\">
                        <tr>
                            <th>Class</th>
                            <th>Mark</th>
                        </tr>
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["marks"] ?? $this->getContext($context, "marks")));
        foreach ($context['_seq'] as $context["_key"] => $context["mark"]) {
            // line 51
            echo "                            <tr>
                                <th>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["mark"], "classId", array()), "html", null, true);
            echo "</th>
                                <th>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["mark"], "markValue", array()), "html", null, true);
            echo "</th>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </table>
                </div>
                <div>
                </body>
            </html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  145 => 6,  131 => 56,  122 => 53,  118 => 52,  115 => 51,  111 => 50,  102 => 43,  96 => 42,  88 => 37,  83 => 34,  75 => 29,  70 => 26,  67 => 25,  63 => 24,  57 => 21,  53 => 20,  49 => 19,  35 => 7,  33 => 6,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"/>
        <title>
            {% block title %}Welcome!{% endblock %}
        </title>
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
                <div>
                </body>
            </html>", "student/studentPDF.html.twig", "C:\\wamp64\\bin\\php\\php7.2.4\\DBExample\\app\\Resources\\views\\student\\studentPDF.html.twig");
    }
}
