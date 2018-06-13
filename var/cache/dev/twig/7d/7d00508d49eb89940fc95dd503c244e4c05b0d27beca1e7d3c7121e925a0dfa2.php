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

        echo " 

<table style=\"font-size: 20px;\" id=\"studentData\" class=\"table\">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
    </tr>
    <tr>
        <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "</th>
        <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "name", array()), "html", null, true);
        echo "</th>
        <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "address", array()), "html", null, true);
        echo "</th>
    </tr>
</table>
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allClasses"] ?? $this->getContext($context, "allClasses")));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 17
            echo "    ";
            if ($this->getAttribute($context["class"], "isAttending", array())) {
                // line 18
                echo "        <div style=\"font-size: 20px;\"><p style=\"margin-left: 14px;\"> Is attending ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
                echo ". <br />
        ";
            } else {
                // line 20
                echo "        <div style=\"font-size: 20px;\"><p style=\"margin-left: 14px;\"> Is not attending ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
                echo ". <br />
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
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
        return array (  86 => 20,  80 => 18,  77 => 17,  73 => 16,  67 => 13,  63 => 12,  59 => 11,  40 => 2,  11 => 1,);
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

<table style=\"font-size: 20px;\" id=\"studentData\" class=\"table\">
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
        <div style=\"font-size: 20px;\"><p style=\"margin-left: 14px;\"> Is attending {{ class.name }}. <br />
        {% else %}
        <div style=\"font-size: 20px;\"><p style=\"margin-left: 14px;\"> Is not attending {{ class.name }}. <br />
    {% endif %}
{% endfor %}
{% endblock %}", "student/studentPDF.html.twig", "C:\\wamp64\\bin\\php\\php7.2.4\\DBExample\\app\\Resources\\views\\student\\studentPDF.html.twig");
    }
}
