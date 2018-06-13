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

        echo " 
<a href=\"/student/display\">Go back</a><a href=\"/student/update/";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "/pdf\">Print to PDF</a>

<table style=\"font-size: 20px;\" id=\"studentData\" class=\"table\">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
    </tr>
    <tr>
        <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "</th>
        <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "name", array()), "html", null, true);
        echo "</th>
        <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "address", array()), "html", null, true);
        echo "</th>
    </tr>
</table>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allClasses"] ?? $this->getContext($context, "allClasses")));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 18
            echo "    ";
            if ($this->getAttribute($context["class"], "isAttending", array())) {
                // line 19
                echo "        <div style=\"font-size: 20px;\"><p style=\"margin-left: 14px;\"> Is attending ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
                echo ". <br /><a id=\"deleter\" href=\"/student/update/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "id", array()), "html", null, true);
                echo "/rm\">Remove from class.</a></p></div><br />
        ";
            } else {
                // line 21
                echo "        <div style=\"font-size: 20px;\"><p style=\"margin-left: 14px;\"> Is not attending ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "name", array()), "html", null, true);
                echo ". <br /><a id=\"deleter\" href=\"/student/update/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["class"], "id", array()), "html", null, true);
                echo "/add\">Add to class.</a></p></div><br />
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "        <div class=\"flash-notice\">
            ";
            // line 26
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
        return "student/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 26,  112 => 25,  108 => 24,  94 => 21,  84 => 19,  81 => 18,  77 => 17,  71 => 14,  67 => 13,  63 => 12,  51 => 3,  40 => 2,  11 => 1,);
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
<a href=\"/student/display\">Go back</a><a href=\"/student/update/{{ student.id }}/pdf\">Print to PDF</a>

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
        <div style=\"font-size: 20px;\"><p style=\"margin-left: 14px;\"> Is attending {{ class.name }}. <br /><a id=\"deleter\" href=\"/student/update/{{ student.id }}/{{ class.id }}/rm\">Remove from class.</a></p></div><br />
        {% else %}
        <div style=\"font-size: 20px;\"><p style=\"margin-left: 14px;\"> Is not attending {{ class.name }}. <br /><a id=\"deleter\" href=\"/student/update/{{ student.id }}/{{ class.id }}/add\">Add to class.</a></p></div><br />
    {% endif %}
{% endfor %}
{% for message in app.flashes('notice') %}
        <div class=\"flash-notice\">
            {{ message }} <a style=\"vertical-align: super; font-size: 14px; background: red; color: white;\" href=\"#\" onclick=\"window.location.reload(true);\"> X</a>
        </div>
{% endfor %}
{% endblock %}", "student/update.html.twig", "C:\\wamp64\\bin\\php\\php7.2.4\\DBExample\\app\\Resources\\views\\student\\update.html.twig");
    }
}
