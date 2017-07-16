<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7a10c5a041bf74eb893ebf93fb680bba153791df4ebc401c9739d8c9e1f3b032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7eb8c5d63aaf26a0da76bed46c602550c441131789611bfa30106f9acf477dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb8c5d63aaf26a0da76bed46c602550c441131789611bfa30106f9acf477dc2->enter($__internal_7eb8c5d63aaf26a0da76bed46c602550c441131789611bfa30106f9acf477dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2a335c2b5427b814d496cfaae98b99c2c3cb2c9bc1e0768d82d9afe34862a0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a335c2b5427b814d496cfaae98b99c2c3cb2c9bc1e0768d82d9afe34862a0fa->enter($__internal_2a335c2b5427b814d496cfaae98b99c2c3cb2c9bc1e0768d82d9afe34862a0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eb8c5d63aaf26a0da76bed46c602550c441131789611bfa30106f9acf477dc2->leave($__internal_7eb8c5d63aaf26a0da76bed46c602550c441131789611bfa30106f9acf477dc2_prof);

        
        $__internal_2a335c2b5427b814d496cfaae98b99c2c3cb2c9bc1e0768d82d9afe34862a0fa->leave($__internal_2a335c2b5427b814d496cfaae98b99c2c3cb2c9bc1e0768d82d9afe34862a0fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a68c4286796bbcd9156309e9f2888fcf426925a84d73c8ff1208b65e8e2ba1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a68c4286796bbcd9156309e9f2888fcf426925a84d73c8ff1208b65e8e2ba1b->enter($__internal_0a68c4286796bbcd9156309e9f2888fcf426925a84d73c8ff1208b65e8e2ba1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a56200ee20e7309e3a9ad37b99afddea62fa700ecedbced504a07e15111d6447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56200ee20e7309e3a9ad37b99afddea62fa700ecedbced504a07e15111d6447->enter($__internal_a56200ee20e7309e3a9ad37b99afddea62fa700ecedbced504a07e15111d6447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a56200ee20e7309e3a9ad37b99afddea62fa700ecedbced504a07e15111d6447->leave($__internal_a56200ee20e7309e3a9ad37b99afddea62fa700ecedbced504a07e15111d6447_prof);

        
        $__internal_0a68c4286796bbcd9156309e9f2888fcf426925a84d73c8ff1208b65e8e2ba1b->leave($__internal_0a68c4286796bbcd9156309e9f2888fcf426925a84d73c8ff1208b65e8e2ba1b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0511399dfc2904c2b532116ee4fa1ced87c4649c7943bf61a76d50620ed0f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0511399dfc2904c2b532116ee4fa1ced87c4649c7943bf61a76d50620ed0f3b->enter($__internal_a0511399dfc2904c2b532116ee4fa1ced87c4649c7943bf61a76d50620ed0f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_927bc810800da9fc563c864354220c63407815f1b98faf230984be29dc63d0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927bc810800da9fc563c864354220c63407815f1b98faf230984be29dc63d0b0->enter($__internal_927bc810800da9fc563c864354220c63407815f1b98faf230984be29dc63d0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_927bc810800da9fc563c864354220c63407815f1b98faf230984be29dc63d0b0->leave($__internal_927bc810800da9fc563c864354220c63407815f1b98faf230984be29dc63d0b0_prof);

        
        $__internal_a0511399dfc2904c2b532116ee4fa1ced87c4649c7943bf61a76d50620ed0f3b->leave($__internal_a0511399dfc2904c2b532116ee4fa1ced87c4649c7943bf61a76d50620ed0f3b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d29f03b602110420b32b7f31e82dc71e11a5d2038f0a57233d7dce8ea839bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d29f03b602110420b32b7f31e82dc71e11a5d2038f0a57233d7dce8ea839bd4->enter($__internal_8d29f03b602110420b32b7f31e82dc71e11a5d2038f0a57233d7dce8ea839bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac0033e3bce36760d50f85095e4c5bb64028a144ef93e9c854e15ab5f1794f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0033e3bce36760d50f85095e4c5bb64028a144ef93e9c854e15ab5f1794f2a->enter($__internal_ac0033e3bce36760d50f85095e4c5bb64028a144ef93e9c854e15ab5f1794f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ac0033e3bce36760d50f85095e4c5bb64028a144ef93e9c854e15ab5f1794f2a->leave($__internal_ac0033e3bce36760d50f85095e4c5bb64028a144ef93e9c854e15ab5f1794f2a_prof);

        
        $__internal_8d29f03b602110420b32b7f31e82dc71e11a5d2038f0a57233d7dce8ea839bd4->leave($__internal_8d29f03b602110420b32b7f31e82dc71e11a5d2038f0a57233d7dce8ea839bd4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/ebougerolle/Sites/mooc-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
