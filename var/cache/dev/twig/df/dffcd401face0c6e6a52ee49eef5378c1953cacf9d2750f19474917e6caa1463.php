<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f1c6fac1401d1a2ef4b0cedae02595baa12b10c512ea5ca37566e1368b943a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e522e94e792aa6563e428776b81cc159f501fa63c4d2ada60da616460749b5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e522e94e792aa6563e428776b81cc159f501fa63c4d2ada60da616460749b5aa->enter($__internal_e522e94e792aa6563e428776b81cc159f501fa63c4d2ada60da616460749b5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3c62a6c532cc110172ab9ac9f074a0b6c495f9720715aff2fd68c6a897feb652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c62a6c532cc110172ab9ac9f074a0b6c495f9720715aff2fd68c6a897feb652->enter($__internal_3c62a6c532cc110172ab9ac9f074a0b6c495f9720715aff2fd68c6a897feb652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e522e94e792aa6563e428776b81cc159f501fa63c4d2ada60da616460749b5aa->leave($__internal_e522e94e792aa6563e428776b81cc159f501fa63c4d2ada60da616460749b5aa_prof);

        
        $__internal_3c62a6c532cc110172ab9ac9f074a0b6c495f9720715aff2fd68c6a897feb652->leave($__internal_3c62a6c532cc110172ab9ac9f074a0b6c495f9720715aff2fd68c6a897feb652_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_606263d383aec6b6d1e804ed3a7f2bea7cf358368c02fb386243b581b9c82438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606263d383aec6b6d1e804ed3a7f2bea7cf358368c02fb386243b581b9c82438->enter($__internal_606263d383aec6b6d1e804ed3a7f2bea7cf358368c02fb386243b581b9c82438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e081a9e3e6f9b7cac2843ee9d3028f22afcf39c496bb67fa65eba706679ec9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e081a9e3e6f9b7cac2843ee9d3028f22afcf39c496bb67fa65eba706679ec9f1->enter($__internal_e081a9e3e6f9b7cac2843ee9d3028f22afcf39c496bb67fa65eba706679ec9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e081a9e3e6f9b7cac2843ee9d3028f22afcf39c496bb67fa65eba706679ec9f1->leave($__internal_e081a9e3e6f9b7cac2843ee9d3028f22afcf39c496bb67fa65eba706679ec9f1_prof);

        
        $__internal_606263d383aec6b6d1e804ed3a7f2bea7cf358368c02fb386243b581b9c82438->leave($__internal_606263d383aec6b6d1e804ed3a7f2bea7cf358368c02fb386243b581b9c82438_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b66f5b5249ebd51efcb41a7c77e9bb012fa63702c76fbeb3c51c577908e2f52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b66f5b5249ebd51efcb41a7c77e9bb012fa63702c76fbeb3c51c577908e2f52d->enter($__internal_b66f5b5249ebd51efcb41a7c77e9bb012fa63702c76fbeb3c51c577908e2f52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f50e568a3422807f8201d91b00a7976e196a58771547d7d887cc7659bee9078e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50e568a3422807f8201d91b00a7976e196a58771547d7d887cc7659bee9078e->enter($__internal_f50e568a3422807f8201d91b00a7976e196a58771547d7d887cc7659bee9078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f50e568a3422807f8201d91b00a7976e196a58771547d7d887cc7659bee9078e->leave($__internal_f50e568a3422807f8201d91b00a7976e196a58771547d7d887cc7659bee9078e_prof);

        
        $__internal_b66f5b5249ebd51efcb41a7c77e9bb012fa63702c76fbeb3c51c577908e2f52d->leave($__internal_b66f5b5249ebd51efcb41a7c77e9bb012fa63702c76fbeb3c51c577908e2f52d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_498fd25dc0540e711685dbe78d0e59224f1ec4c1142485edc84fcd27b4a87e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498fd25dc0540e711685dbe78d0e59224f1ec4c1142485edc84fcd27b4a87e65->enter($__internal_498fd25dc0540e711685dbe78d0e59224f1ec4c1142485edc84fcd27b4a87e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_288715ed81c55f40969fdc01c39b50a08f817afbfcf067b12ccb6b1780192902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288715ed81c55f40969fdc01c39b50a08f817afbfcf067b12ccb6b1780192902->enter($__internal_288715ed81c55f40969fdc01c39b50a08f817afbfcf067b12ccb6b1780192902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_288715ed81c55f40969fdc01c39b50a08f817afbfcf067b12ccb6b1780192902->leave($__internal_288715ed81c55f40969fdc01c39b50a08f817afbfcf067b12ccb6b1780192902_prof);

        
        $__internal_498fd25dc0540e711685dbe78d0e59224f1ec4c1142485edc84fcd27b4a87e65->leave($__internal_498fd25dc0540e711685dbe78d0e59224f1ec4c1142485edc84fcd27b4a87e65_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/ebougerolle/Sites/mooc-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
