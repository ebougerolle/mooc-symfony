<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f858510bd3191b37665041f11f975f32be17740210d87eccdb81b8a798b06fdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bd076330f84420b9b3b78c9e82eed0d6f1daa1d0fd32ffbb828913db022eb4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd076330f84420b9b3b78c9e82eed0d6f1daa1d0fd32ffbb828913db022eb4f->enter($__internal_4bd076330f84420b9b3b78c9e82eed0d6f1daa1d0fd32ffbb828913db022eb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7eeee68bd31733849a65926c4ec5bd27b22a7b159fd61820598eac905689b2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eeee68bd31733849a65926c4ec5bd27b22a7b159fd61820598eac905689b2f7->enter($__internal_7eeee68bd31733849a65926c4ec5bd27b22a7b159fd61820598eac905689b2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bd076330f84420b9b3b78c9e82eed0d6f1daa1d0fd32ffbb828913db022eb4f->leave($__internal_4bd076330f84420b9b3b78c9e82eed0d6f1daa1d0fd32ffbb828913db022eb4f_prof);

        
        $__internal_7eeee68bd31733849a65926c4ec5bd27b22a7b159fd61820598eac905689b2f7->leave($__internal_7eeee68bd31733849a65926c4ec5bd27b22a7b159fd61820598eac905689b2f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af05f86ee54e7b67a79fddef2417b70590c445e536511fc49907642d9407045b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af05f86ee54e7b67a79fddef2417b70590c445e536511fc49907642d9407045b->enter($__internal_af05f86ee54e7b67a79fddef2417b70590c445e536511fc49907642d9407045b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eeff75fe2d0090c3a9c00bac58c1e2299af1889a16c1f0f78e936f8287037d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeff75fe2d0090c3a9c00bac58c1e2299af1889a16c1f0f78e936f8287037d63->enter($__internal_eeff75fe2d0090c3a9c00bac58c1e2299af1889a16c1f0f78e936f8287037d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_eeff75fe2d0090c3a9c00bac58c1e2299af1889a16c1f0f78e936f8287037d63->leave($__internal_eeff75fe2d0090c3a9c00bac58c1e2299af1889a16c1f0f78e936f8287037d63_prof);

        
        $__internal_af05f86ee54e7b67a79fddef2417b70590c445e536511fc49907642d9407045b->leave($__internal_af05f86ee54e7b67a79fddef2417b70590c445e536511fc49907642d9407045b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/ebougerolle/Sites/mooc-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
