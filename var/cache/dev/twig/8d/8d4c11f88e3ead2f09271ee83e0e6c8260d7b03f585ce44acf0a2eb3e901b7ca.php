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

/* user/dashboard.html.twig */
class __TwigTemplate_9a442658f02fc1e308f10f91f0365d6377b4b54b4836bd26f5fa77f02be28b28 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta http-equiv=\"Content-Language\" content=\"en\"/>
    <meta name=\"msapplication-TileColor\" content=\"#2d89ef\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <meta name=\"HandheldFriendly\" content=\"True\">
    <meta name=\"MobileOptimized\" content=\"320\">
    <link rel=\"icon\" href=\"/admin/assets/images/favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./favicon.ico\"/>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\"
          integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,700\" rel=\"stylesheet\">

    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Admin</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext\">

    <!-- Dashboard Core -->
    <link href=\"/admin/assets/css/dashboard.css\" rel=\"stylesheet\"/>
    <!-- c3.js Charts Plugin -->
    <link href=\"/admin/assets/plugins/charts-c3/plugin.css\" rel=\"stylesheet\"/>
    <!-- Google Maps Plugin -->
    <link href=\"/admin/assets/plugins/maps-google/plugin.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"/css/main.css\">
    <link rel=\"stylesheet\" href=\"css/navbar.css\">
    <style>
        body {
            padding-top: 0 !important;
        }

        .nav-menu a {
            color: #FFF !important;
        }

        #nav-menu-container {
            display: flex;
            align-items: center;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "
    <div class=\"page\">
        <div class=\"page-main\">
            <div class=\"header py-4\" style=\"background: #ed4638\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-between d-flex\">
                        <div id=\"logo\">
                            <a href=\"index.html\"><img height=\"35px\" src=\"img/logo.png\" alt=\"\" title=\"\" /></a>
                        </div>
                        <nav id=\"nav-menu-container\">
                            <ul class=\"nav-menu\">
                                <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                                ";
        // line 66
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 67
            echo "                                    <li><a href=\"/films/favorite/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\">Favorites</a></li>
                                    <li><a href=\"/films/lists\">My list</a></li>
                                    <li><a href=\"/editProfile/";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">Profile</a></li>
                                    <a> <img id=\"logout\"><a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" style=\"color: white;\">logout</a></a>

                                    ";
            // line 72
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 73
                echo "                                        <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>
                                    ";
            }
            // line 75
            echo "
                                ";
        } else {
            // line 77
            echo "                                    <a> <img id=\"logout\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" style=\"color: white;\">login</a></a>
                                    <a> <img id=\"logout\"><a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" style=\"color: white;\">Inscription</a></a>
                                ";
        }
        // line 80
        echo "
                            </ul>
                        </nav><!-- #nav-menu-container -->
                    </div>
                </div>
            </div>
            <div class=\"header collapse d-lg-flex p-0\" id=\"headerMenuCollapse\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg order-lg-first\">
                            <ul class=\"nav nav-tabs border-0 flex-column flex-lg-row\">
                                <li class=\"nav-item\">
                                    <a href=\"/usersAdmin\" class=\"nav-link \">Users</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"admin/mostFavorite\"
                                       class=\"nav-link \">Most popular Films</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"my-3 my-md-5\">
                <div class=\"container\">
                    <div class=\"page-header\">
                        <h1 class=\"page-title\">Dashboard</h1>
                    </div>
                    <div class=\"row row-cards\">

                        <div class=\"col-6 col-sm-4 col-lg-2\">
                            <div class=\"card\">
                                <div class=\"card-body p-3 text-center\">
                                    <div class=\"text-right text-primary\">
                                        <i class=\"fa fa-user\"></i>
                                    </div>
                                    <div class=\"h1 m-0\">8765</div>
                                    <div class=\"text-muted mb-4\">Films</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-6 col-sm-4 col-lg-2\">
                            <div class=\"card\">
                                <div class=\"card-body p-3 text-center\">
                                    <div class=\"text-right text-primary\">
                                        <i class=\"fa fa-forward\"></i>
                                    </div>
                                    <div class=\"h1 m-0\">7654</div>
                                    <div class=\"text-muted mb-4\">favorites</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-6 col-sm-4 col-lg-2\">
                            <div class=\"card\">
                                <div class=\"card-body p-3 text-center\">
                                    <div class=\"text-right text-primary\">
                                        <i class=\"fa fa-envelope\"></i>
                                    </div>
                                    <div class=\"h1 m-0\">";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["userCount"]) || array_key_exists("userCount", $context) ? $context["userCount"] : (function () { throw new RuntimeError('Variable "userCount" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "</div>
                                    <div class=\"text-muted mb-4\">users</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-6 col-sm-4 col-lg-2\">
                            <div class=\"card\">
                                <div class=\"card-body p-3 text-center\">
                                    <div class=\"text-right text-primary\">
                                        <i class=\"fa fa-child\"></i>
                                    </div>
                                    <div class=\"h1 m-0\">765</div>
                                    <div class=\"text-muted mb-4\">Students</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-6 col-sm-4 col-lg-2\">
                            <div class=\"card\">
                                <div class=\"card-body p-3 text-center\">
                                    <div class=\"text-right text-primary\">
                                        <i class=\"fa fa-group\"></i>
                                    </div>
                                    <div class=\"h1 m-0\">6543</div>
                                    <div class=\"text-muted mb-4\">Groups</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-6 col-sm-4 col-lg-2\">
                            <div class=\"card\">
                                <div class=\"card-body p-3 text-center\">
                                    <div class=\"text-right text-primary\">
                                        <i class=\"fa fa-facebook-square\"></i>
                                    </div>
                                    <div class=\"h1 m-0\">4323</div>
                                    <div class=\"text-muted mb-4\">FB Groups</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- start footer Area -->
            <footer class=\"footer-area section-gap\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-5 col-md-6 col-sm-6\">
                            <div class=\"single-footer-widget\">
                                <h6>About Us</h6>
                                <p>
                                    Top readers here.
                                </p>
                                <p class=\"footer-text\">
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                    All rights reserved
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-5  col-md-6 col-sm-6\">
                            <div class=\"single-footer-widget\">
                                <h6>Newsletter</h6>
                                <p>Stay update with our latest</p>
                                <div class=\"\" id=\"mc_embed_signup\">
                                    <form target=\"_blank\" novalidate=\"true\"
                                          action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                          method=\"get\" class=\"form-inline\">
                                        <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\"
                                               onfocus=\"this.placeholder = ''\"
                                               onblur=\"this.placeholder = 'Enter Email '\"
                                               required=\"\" type=\"email\">
                                        <button class=\"click-btn btn btn-default\"><i
                                                    class=\"fa fa-long-arrow-right\"
                                                    aria-hidden=\"true\"></i></button>
                                        <div style=\"position: absolute; left: -5000px;\">
                                            <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\"
                                                   value=\"\"
                                                   type=\"text\">
                                        </div>

                                        <div class=\"info\"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-md-6 col-sm-6 social-widget\">
                            <div class=\"single-footer-widget\">
                                <h6>Follow Us</h6>
                                <p>Let us be social</p>
                                <div class=\"footer-social d-flex align-items-center\">
                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-behance\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 141,  186 => 80,  181 => 78,  176 => 77,  172 => 75,  168 => 73,  166 => 72,  161 => 70,  157 => 69,  151 => 67,  149 => 66,  135 => 54,  125 => 53,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta http-equiv=\"Content-Language\" content=\"en\"/>
    <meta name=\"msapplication-TileColor\" content=\"#2d89ef\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <meta name=\"HandheldFriendly\" content=\"True\">
    <meta name=\"MobileOptimized\" content=\"320\">
    <link rel=\"icon\" href=\"/admin/assets/images/favicon.ico\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./favicon.ico\"/>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\"
          integrity=\"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,700\" rel=\"stylesheet\">

    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Admin</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext\">

    <!-- Dashboard Core -->
    <link href=\"/admin/assets/css/dashboard.css\" rel=\"stylesheet\"/>
    <!-- c3.js Charts Plugin -->
    <link href=\"/admin/assets/plugins/charts-c3/plugin.css\" rel=\"stylesheet\"/>
    <!-- Google Maps Plugin -->
    <link href=\"/admin/assets/plugins/maps-google/plugin.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"/css/main.css\">
    <link rel=\"stylesheet\" href=\"css/navbar.css\">
    <style>
        body {
            padding-top: 0 !important;
        }

        .nav-menu a {
            color: #FFF !important;
        }

        #nav-menu-container {
            display: flex;
            align-items: center;
        }
    </style>

{% endblock %}


{% block body %}

    <div class=\"page\">
        <div class=\"page-main\">
            <div class=\"header py-4\" style=\"background: #ed4638\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-between d-flex\">
                        <div id=\"logo\">
                            <a href=\"index.html\"><img height=\"35px\" src=\"img/logo.png\" alt=\"\" title=\"\" /></a>
                        </div>
                        <nav id=\"nav-menu-container\">
                            <ul class=\"nav-menu\">
                                <li class=\"menu-active\"><a href=\"/home\">Home</a></li>
                                {% if is_granted('ROLE_USER') %}
                                    <li><a href=\"/films/favorite/{{ app.user.id }}\">Favorites</a></li>
                                    <li><a href=\"/films/lists\">My list</a></li>
                                    <li><a href=\"/editProfile/{{ app.user.id }}\">Profile</a></li>
                                    <a> <img id=\"logout\"><a href=\"{{ path('app_logout') }}\" style=\"color: white;\">logout</a></a>

                                    {% if is_granted('ROLE_ADMIN') %}
                                        <a href=\"/admin\" class=\"login-panel\"><i class=\"fa fa-user\"></i> Admin Pannel</a>
                                    {% endif %}

                                {% else %}
                                    <a> <img id=\"logout\"><a href=\"{{ path('app_login') }}\" style=\"color: white;\">login</a></a>
                                    <a> <img id=\"logout\"><a href=\"{{ path('app_register') }}\" style=\"color: white;\">Inscription</a></a>
                                {% endif %}

                            </ul>
                        </nav><!-- #nav-menu-container -->
                    </div>
                </div>
            </div>
            <div class=\"header collapse d-lg-flex p-0\" id=\"headerMenuCollapse\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg order-lg-first\">
                            <ul class=\"nav nav-tabs border-0 flex-column flex-lg-row\">
                                <li class=\"nav-item\">
                                    <a href=\"/usersAdmin\" class=\"nav-link \">Users</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"admin/mostFavorite\"
                                       class=\"nav-link \">Most popular Films</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"my-3 my-md-5\">
                <div class=\"container\">
                    <div class=\"page-header\">
                        <h1 class=\"page-title\">Dashboard</h1>
                    </div>
                    <div class=\"row row-cards\">

                        <div class=\"col-6 col-sm-4 col-lg-2\">
                            <div class=\"card\">
                                <div class=\"card-body p-3 text-center\">
                                    <div class=\"text-right text-primary\">
                                        <i class=\"fa fa-user\"></i>
                                    </div>
                                    <div class=\"h1 m-0\">8765</div>
                                    <div class=\"text-muted mb-4\">Films</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-6 col-sm-4 col-lg-2\">
                            <div class=\"card\">
                                <div class=\"card-body p-3 text-center\">
                                    <div class=\"text-right text-primary\">
                                        <i class=\"fa fa-forward\"></i>
                                    </div>
                                    <div class=\"h1 m-0\">7654</div>
                                    <div class=\"text-muted mb-4\">favorites</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-6 col-sm-4 col-lg-2\">
                            <div class=\"card\">
                                <div class=\"card-body p-3 text-center\">
                                    <div class=\"text-right text-primary\">
                                        <i class=\"fa fa-envelope\"></i>
                                    </div>
                                    <div class=\"h1 m-0\">{{ userCount }}</div>
                                    <div class=\"text-muted mb-4\">users</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-6 col-sm-4 col-lg-2\">
                            <div class=\"card\">
                                <div class=\"card-body p-3 text-center\">
                                    <div class=\"text-right text-primary\">
                                        <i class=\"fa fa-child\"></i>
                                    </div>
                                    <div class=\"h1 m-0\">765</div>
                                    <div class=\"text-muted mb-4\">Students</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-6 col-sm-4 col-lg-2\">
                            <div class=\"card\">
                                <div class=\"card-body p-3 text-center\">
                                    <div class=\"text-right text-primary\">
                                        <i class=\"fa fa-group\"></i>
                                    </div>
                                    <div class=\"h1 m-0\">6543</div>
                                    <div class=\"text-muted mb-4\">Groups</div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-6 col-sm-4 col-lg-2\">
                            <div class=\"card\">
                                <div class=\"card-body p-3 text-center\">
                                    <div class=\"text-right text-primary\">
                                        <i class=\"fa fa-facebook-square\"></i>
                                    </div>
                                    <div class=\"h1 m-0\">4323</div>
                                    <div class=\"text-muted mb-4\">FB Groups</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- start footer Area -->
            <footer class=\"footer-area section-gap\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-5 col-md-6 col-sm-6\">
                            <div class=\"single-footer-widget\">
                                <h6>About Us</h6>
                                <p>
                                    Top readers here.
                                </p>
                                <p class=\"footer-text\">
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                    All rights reserved
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-5  col-md-6 col-sm-6\">
                            <div class=\"single-footer-widget\">
                                <h6>Newsletter</h6>
                                <p>Stay update with our latest</p>
                                <div class=\"\" id=\"mc_embed_signup\">
                                    <form target=\"_blank\" novalidate=\"true\"
                                          action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                          method=\"get\" class=\"form-inline\">
                                        <input class=\"form-control\" name=\"EMAIL\" placeholder=\"Enter Email\"
                                               onfocus=\"this.placeholder = ''\"
                                               onblur=\"this.placeholder = 'Enter Email '\"
                                               required=\"\" type=\"email\">
                                        <button class=\"click-btn btn btn-default\"><i
                                                    class=\"fa fa-long-arrow-right\"
                                                    aria-hidden=\"true\"></i></button>
                                        <div style=\"position: absolute; left: -5000px;\">
                                            <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\"
                                                   value=\"\"
                                                   type=\"text\">
                                        </div>

                                        <div class=\"info\"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-md-6 col-sm-6 social-widget\">
                            <div class=\"single-footer-widget\">
                                <h6>Follow Us</h6>
                                <p>Let us be social</p>
                                <div class=\"footer-social d-flex align-items-center\">
                                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                                    <a href=\"#\"><i class=\"fa fa-behance\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->
        </div>
    </div>

{% endblock %}", "user/dashboard.html.twig", "/home/coding/Rendu/symfony_project/templates/user/dashboard.html.twig");
    }
}
