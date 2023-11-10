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

/* professeur/index.html.twig */
class __TwigTemplate_3a933f9a93468344e302cc6a2a1064c7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "professeur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "professeur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Professeur
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_titlenumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlenumber"));

        // line 9
        echo "        Professeur
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <div class=\"col-12\">
            <div class=\"card my-4\">
                <table class=\"table table-dark\">
                    <thead>
                        <tr>
                            <th scope=\"col\">#</th>
                            <th scope=\"col\">Libelle</th>
                            <th scope=\"col\">Professeur</th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ProfesseurNotArchived"]) || array_key_exists("ProfesseurNotArchived", $context) ? $context["ProfesseurNotArchived"] : (function () { throw new RuntimeError('Variable "ProfesseurNotArchived" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 27
            echo "                            <tr>
                                <th scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</th>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "libelle", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "Professeur", [], "any", false, false, false, 30), "nomComplet", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </tbody>
                    </table>
            </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "professeur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  120 => 30,  116 => 29,  112 => 28,  109 => 27,  105 => 26,  91 => 14,  84 => 13,  76 => 9,  69 => 8,  61 => 5,  54 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}
    Professeur
{% endblock %}

{% block titlenumber %}
        Professeur
{% endblock %}


{% block content %}
    <div class=\"col-12\">
            <div class=\"card my-4\">
                <table class=\"table table-dark\">
                    <thead>
                        <tr>
                            <th scope=\"col\">#</th>
                            <th scope=\"col\">Libelle</th>
                            <th scope=\"col\">Professeur</th>
                        </tr>
                    </thead>

                    <tbody>
                        {% for module in ProfesseurNotArchived %}
                            <tr>
                                <th scope=\"row\">{{module.id}}</th>
                                <td>{{module.libelle}}</td>
                                <td>{{module.Professeur.nomComplet}}</td>
                            
                            </tr>
                        {% endfor %}
                    </tbody>
                    </table>
            </div>

{% endblock %}
", "professeur/index.html.twig", "/home/nouha/Bureau/Workspace/EXOSYMBAIL/symf_mae_cdsd_2024/templates/professeur/index.html.twig");
    }
}
