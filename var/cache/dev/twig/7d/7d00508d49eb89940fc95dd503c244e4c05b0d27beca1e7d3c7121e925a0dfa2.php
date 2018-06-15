<?php

/* student/studentPDF.html.twig */
class __TwigTemplate_67a06dc6f3feeeaac67424c5bcc703b88db9711bbe359d60e89b99daf00b4562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/studentPDF.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/studentPDF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/studentPDF.html.twig"));

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

        <table id=\"studentData\" class=\"table\">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
            </tr>
            <tr>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "</th>
                <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "name", array()), "html", null, true);
        echo "</th>
                <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "address", array()), "html", null, true);
        echo "</th>
            </tr>
        </table>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allClasses"] ?? $this->getContext($context, "allClasses")));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 19
            echo "            ";
            if ($this->getAttribute($context["class"], "isAttending", array())) {
                // line 20
                echo "                <div style=\"font-size: 20px;\">
                    <p style=\"margin-left: 14px;\">
                        Is attending
                        ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
                echo ".
                        <br/>
                    </p>
                </div><br/>
            ";
            } else {
                // line 28
                echo "                <div style=\"font-size: 20px;\">
                    <p style=\"margin-left: 14px;\">
                        Is not attending
                        ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
                echo ".
                        <br/>
                    </p>
                </div><br/>
            ";
            }
            // line 36
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
        <div class=\"column30\">
        <table class=\"table\">
            <tr>
                <th>Class</th>
                <th>Mark</th>
            </tr>
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["marks"] ?? $this->getContext($context, "marks")));
        foreach ($context['_seq'] as $context["_key"] => $context["mark"]) {
            // line 45
            echo "                <tr>
                    <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["mark"], "classId", array()), "html", null, true);
            echo "</th>
                    <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["mark"], "markValue", array()), "html", null, true);
            echo "</th>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </table>
        </div>
        <div>
        ";
        
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
        return array (  143 => 50,  134 => 47,  130 => 46,  127 => 45,  123 => 44,  114 => 37,  108 => 36,  100 => 31,  95 => 28,  87 => 23,  82 => 20,  79 => 19,  75 => 18,  69 => 15,  65 => 14,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
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
        {% endblock %}", "student/studentPDF.html.twig", "C:\\wamp64\\bin\\php\\php7.2.4\\DBExample\\app\\Resources\\views\\student\\studentPDF.html.twig");
    }
}
