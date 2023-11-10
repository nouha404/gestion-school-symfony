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

/* base.html.twig */
class __TwigTemplate_8146b44ecbccb662407633099240c93f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'titlenumber' => [$this, 'block_titlenumber'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "</head>

<body class=\"g-sidenav-show  bg-gray-200\">
  <aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark\" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
      <i class=\"fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
      <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/material-dashboard/pages/dashboard \" target=\"_blank\">
        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-ct.png"), "html", null, true);
        echo "\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
        <span class=\"ms-1 font-weight-bold text-white\">Gestion School</span>
      </a>
    </div>
    <hr class=\"horizontal light mt-0 mb-2\">
    <div class=\"collapse navbar-collapse  w-auto  max-height-vh-100\" id=\"sidenav-collapse-main\">
      <ul class=\"navbar-nav\">

        <!--Classe-->
        <li class=\"nav-item\">
          <a class=\"nav-link text-white\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_classe");
        echo "\" >
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"nav-link-text ms-1\"></i>
              <span>Classe</span>
            </div>
            
          </a>

        </li>
        
        <!--Personne-->
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_professeur");
        echo "\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">table_view</i>
            </div>
            <span class=\"nav-link-text ms-1\">Professeur</span>
          </a>
        </li>
        

      </ul>
    </div>
    
    
  </aside>
  <main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">
    <!-- Navbar -->
    <nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl\" id=\"navbarBlur\" navbar-scroll=\"true\">
      <div class=\"container-fluid py-1 px-3\">
        <nav aria-label=\"breadcrumb\">
          <h6 class=\"font-weight-bolder mb-0\"> ";
        // line 87
        $this->displayBlock('titlenumber', $context, $blocks);
        echo "</h6>
        </nav>
        <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
          <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
            <div class=\"input-group input-group-outline\">
              <label class=\"form-label\">Type here...</label>
              <input type=\"text\" class=\"form-control\">
            </div>
          </div>
          
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class=\"container-fluid py-4\">
      <div class=\"row min-vh-80 h-100\">
        <div class=\"col-12\">
        ";
        // line 104
        $this->displayBlock('content', $context, $blocks);
        // line 107
        echo "          
        </div>
    </div>
    
  </div>
  </main>
  
  
  ";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 135
        echo "</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/apple-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\">
   
    <title>";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  
    <!--     Fonts and icons     -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700\" />
    <!-- Nucleo Icons -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nucleo-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nucleo-svg.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- Font Awesome Icons -->
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <!-- Material Icons -->
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons+Round\" rel=\"stylesheet\">
    <!-- CSS Files -->
    <link id=\"pagestyle\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/material-dashboard.css?v=3.0.0"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 87
    public function block_titlenumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlenumber"));

        echo "HOME";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 104
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 105
        echo "          
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "  <!--   Core JS Files   -->
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins/smooth-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/material-dashboard.min.js?v=3.0.0"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 133,  281 => 120,  277 => 119,  273 => 118,  269 => 117,  266 => 116,  259 => 115,  251 => 105,  244 => 104,  231 => 87,  218 => 25,  209 => 37,  200 => 31,  196 => 30,  188 => 25,  183 => 23,  178 => 22,  171 => 21,  162 => 135,  160 => 115,  150 => 107,  148 => 104,  128 => 87,  106 => 68,  91 => 56,  78 => 46,  69 => 39,  67 => 21,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  {% block stylesheets %}
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('img/apple-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/favicon.png') }}\">
   
    <title>{% block title %}Welcome!{% endblock %}</title>
  
    <!--     Fonts and icons     -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700\" />
    <!-- Nucleo Icons -->
    <link href=\"{{ asset('css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('css/nucleo-svg.css') }}\" rel=\"stylesheet\" />
    <!-- Font Awesome Icons -->
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <!-- Material Icons -->
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons+Round\" rel=\"stylesheet\">
    <!-- CSS Files -->
    <link id=\"pagestyle\" href=\"{{ asset('css/material-dashboard.css?v=3.0.0') }}\" rel=\"stylesheet\" />
  {% endblock %}
</head>

<body class=\"g-sidenav-show  bg-gray-200\">
  <aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark\" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
      <i class=\"fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
      <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/material-dashboard/pages/dashboard \" target=\"_blank\">
        <img src=\"{{ asset('img/logo-ct.png') }}\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
        <span class=\"ms-1 font-weight-bold text-white\">Gestion School</span>
      </a>
    </div>
    <hr class=\"horizontal light mt-0 mb-2\">
    <div class=\"collapse navbar-collapse  w-auto  max-height-vh-100\" id=\"sidenav-collapse-main\">
      <ul class=\"navbar-nav\">

        <!--Classe-->
        <li class=\"nav-item\">
          <a class=\"nav-link text-white\" href=\"{{path('app_classe')}}\" >
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"nav-link-text ms-1\"></i>
              <span>Classe</span>
            </div>
            
          </a>

        </li>
        
        <!--Personne-->
        <li class=\"nav-item\">
          <a class=\"nav-link text-white \" href=\"{{ path('app_professeur') }}\">
            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
              <i class=\"material-icons opacity-10\">table_view</i>
            </div>
            <span class=\"nav-link-text ms-1\">Professeur</span>
          </a>
        </li>
        

      </ul>
    </div>
    
    
  </aside>
  <main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">
    <!-- Navbar -->
    <nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl\" id=\"navbarBlur\" navbar-scroll=\"true\">
      <div class=\"container-fluid py-1 px-3\">
        <nav aria-label=\"breadcrumb\">
          <h6 class=\"font-weight-bolder mb-0\"> {% block titlenumber %}HOME{% endblock %}</h6>
        </nav>
        <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
          <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
            <div class=\"input-group input-group-outline\">
              <label class=\"form-label\">Type here...</label>
              <input type=\"text\" class=\"form-control\">
            </div>
          </div>
          
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class=\"container-fluid py-4\">
      <div class=\"row min-vh-80 h-100\">
        <div class=\"col-12\">
        {% block content %}
          
        {% endblock %}
          
        </div>
    </div>
    
  </div>
  </main>
  
  
  {% block javascripts %}
  <!--   Core JS Files   -->
    <script src=\"{{ asset('js/core/popper.min.js') }}\"></script>
    <script src=\"{{ asset('js/core/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/plugins/perfect-scrollbar.min.js') }}\"></script>
    <script src=\"{{ asset('js/plugins/smooth-scrollbar.min.js') }}\"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src=\"{{ asset('js/material-dashboard.min.js?v=3.0.0') }}\"></script>
    {% endblock %}
</body>

</html>", "base.html.twig", "/home/nouha/Bureau/Workspace/EXOSYMBAIL/symf_mae_cdsd_2024/templates/base.html.twig");
    }
}
