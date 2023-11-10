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

/* classe/index.html.twig */
class __TwigTemplate_ff023efc2260e169f65abd62720d173d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titlenumber' => [$this, 'block_titlenumber'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "classe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "classe/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Classe
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_titlenumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlenumber"));

        // line 8
        echo "        Classe
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <div class=\"col-12\">
            <div class=\"card my-4\">
                <table class=\"table table-dark\">
                    <thead>
                        <tr>
                            <th scope=\"col\">#</th>
                            <th scope=\"col\">Libelle</th>
                            <th scope=\"col\">Niveau</th>
                            <th scope=\"col\">Filiere</th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classesNotArchived"]) || array_key_exists("classesNotArchived", $context) ? $context["classesNotArchived"] : (function () { throw new RuntimeError('Variable "classesNotArchived" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 26
            echo "                            <tr>
                                <th scope=\"row\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</th>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "nomClasse", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["classe"], "filiere", [], "any", false, false, false, 29), "libelle", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["classe"], "niveau", [], "any", false, false, false, 30), "libelle", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </tbody>
                    </table>
            </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "classe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 33,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  110 => 26,  106 => 25,  91 => 12,  84 => 11,  76 => 8,  69 => 7,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Classe
{% endblock %}

{% block titlenumber %}
        Classe
{% endblock %}

{% block content %}
    <div class=\"col-12\">
            <div class=\"card my-4\">
                <table class=\"table table-dark\">
                    <thead>
                        <tr>
                            <th scope=\"col\">#</th>
                            <th scope=\"col\">Libelle</th>
                            <th scope=\"col\">Niveau</th>
                            <th scope=\"col\">Filiere</th>
                        </tr>
                    </thead>

                    <tbody>
                        {% for classe in classesNotArchived %}
                            <tr>
                                <th scope=\"row\">{{classe.id}}</th>
                                <td>{{classe.nomClasse}}</td>
                                <td>{{classe.filiere.libelle}}</td>
                                <td>{{classe.niveau.libelle}}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                    </table>
            </div>

{% endblock %}
", "classe/index.html.twig", "/home/nouha/Bureau/Workspace/EXOSYMBAIL/symf_mae_cdsd_2024/templates/classe/index.html.twig");
    }
}
