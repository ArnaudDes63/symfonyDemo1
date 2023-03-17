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

/* blog/home.html.twig */
class __TwigTemplate_6ea4d22275add4a4254e255e0e3548bc4fe73f0f90c6a6f148415dead87ab071 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>Bienvenue dans ce blog</h1>

<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt nostrum ratione rerum est, aut hic officia eum consectetur distinctio ipsa adipisci obcaecati, accusamus maxime nisi eligendi quaerat quibusdam aspernatur! Dignissimos, odio ullam deleniti minima consequuntur quas eveniet libero doloribus inventore.</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt nostrum ratione rerum est, aut hic officia eum consectetur distinctio ipsa adipisci obcaecati, accusamus maxime nisi eligendi quaerat quibusdam aspernatur! Dignissimos, odio ullam deleniti minima consequuntur quas eveniet libero doloribus inventore.</p>


<br>
<br>
<a class=\"btn btn-danger\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Pages Articles</a>
<br>
<br>
<a class=\"btn btn-primary\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_create");
        echo "\">Créer un article</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<h1>Bienvenue dans ce blog</h1>

<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt nostrum ratione rerum est, aut hic officia eum consectetur distinctio ipsa adipisci obcaecati, accusamus maxime nisi eligendi quaerat quibusdam aspernatur! Dignissimos, odio ullam deleniti minima consequuntur quas eveniet libero doloribus inventore.</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt nostrum ratione rerum est, aut hic officia eum consectetur distinctio ipsa adipisci obcaecati, accusamus maxime nisi eligendi quaerat quibusdam aspernatur! Dignissimos, odio ullam deleniti minima consequuntur quas eveniet libero doloribus inventore.</p>


<br>
<br>
<a class=\"btn btn-danger\" href=\"{{ path('blog') }}\">Pages Articles</a>
<br>
<br>
<a class=\"btn btn-primary\" href=\"{{ path('blog_create') }}\">Créer un article</a>

{% endblock %}", "blog/home.html.twig", "C:\\Users\\Utilisateur\\Desktop\\youtubeSymfony\\demo1\\templates\\blog\\home.html.twig");
    }
}
