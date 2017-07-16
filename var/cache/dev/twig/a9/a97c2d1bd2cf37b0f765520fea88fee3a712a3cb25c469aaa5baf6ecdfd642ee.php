<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7e30fb8dbde3c16ac07c4da8606687e576a0b996b5cd25b5de7852d7d88eb313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0453085de23b6d4aa4f0f430ab4823e380aca66929a2472f3f96da6df0ad5cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0453085de23b6d4aa4f0f430ab4823e380aca66929a2472f3f96da6df0ad5cea->enter($__internal_0453085de23b6d4aa4f0f430ab4823e380aca66929a2472f3f96da6df0ad5cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e9f008ae2634d48192982899b78f7bd37233c303accfb29baa48aa0114b04ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f008ae2634d48192982899b78f7bd37233c303accfb29baa48aa0114b04ff9->enter($__internal_e9f008ae2634d48192982899b78f7bd37233c303accfb29baa48aa0114b04ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0453085de23b6d4aa4f0f430ab4823e380aca66929a2472f3f96da6df0ad5cea->leave($__internal_0453085de23b6d4aa4f0f430ab4823e380aca66929a2472f3f96da6df0ad5cea_prof);

        
        $__internal_e9f008ae2634d48192982899b78f7bd37233c303accfb29baa48aa0114b04ff9->leave($__internal_e9f008ae2634d48192982899b78f7bd37233c303accfb29baa48aa0114b04ff9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b2293e1e248999bd86dda7da466e9f65e6c14f832ac2e38cb88eb7b5d2b0c3f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2293e1e248999bd86dda7da466e9f65e6c14f832ac2e38cb88eb7b5d2b0c3f7->enter($__internal_b2293e1e248999bd86dda7da466e9f65e6c14f832ac2e38cb88eb7b5d2b0c3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e32a3bcf2d08f7e62bcfa81f4f7e0a2ae3f1b33a764d0916bdec7d873176e6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32a3bcf2d08f7e62bcfa81f4f7e0a2ae3f1b33a764d0916bdec7d873176e6ec->enter($__internal_e32a3bcf2d08f7e62bcfa81f4f7e0a2ae3f1b33a764d0916bdec7d873176e6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e32a3bcf2d08f7e62bcfa81f4f7e0a2ae3f1b33a764d0916bdec7d873176e6ec->leave($__internal_e32a3bcf2d08f7e62bcfa81f4f7e0a2ae3f1b33a764d0916bdec7d873176e6ec_prof);

        
        $__internal_b2293e1e248999bd86dda7da466e9f65e6c14f832ac2e38cb88eb7b5d2b0c3f7->leave($__internal_b2293e1e248999bd86dda7da466e9f65e6c14f832ac2e38cb88eb7b5d2b0c3f7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00de62844e128ff41fbc00d03f88886b08f1fe0abd347c24c16d2295b527e379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00de62844e128ff41fbc00d03f88886b08f1fe0abd347c24c16d2295b527e379->enter($__internal_00de62844e128ff41fbc00d03f88886b08f1fe0abd347c24c16d2295b527e379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a6addbbb549cf232dcaca29d9d62f8b8e868da57068173406df6e90a52061c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6addbbb549cf232dcaca29d9d62f8b8e868da57068173406df6e90a52061c38->enter($__internal_a6addbbb549cf232dcaca29d9d62f8b8e868da57068173406df6e90a52061c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a6addbbb549cf232dcaca29d9d62f8b8e868da57068173406df6e90a52061c38->leave($__internal_a6addbbb549cf232dcaca29d9d62f8b8e868da57068173406df6e90a52061c38_prof);

        
        $__internal_00de62844e128ff41fbc00d03f88886b08f1fe0abd347c24c16d2295b527e379->leave($__internal_00de62844e128ff41fbc00d03f88886b08f1fe0abd347c24c16d2295b527e379_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96a647daacd5df470755c8ff711dfadbc8be5537ed3b3454564fc80819efbd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a647daacd5df470755c8ff711dfadbc8be5537ed3b3454564fc80819efbd1a->enter($__internal_96a647daacd5df470755c8ff711dfadbc8be5537ed3b3454564fc80819efbd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d831eb7d171dd05eca3e3200770868da58dfd6bc6dda1012d1226814e003a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d831eb7d171dd05eca3e3200770868da58dfd6bc6dda1012d1226814e003a0a->enter($__internal_7d831eb7d171dd05eca3e3200770868da58dfd6bc6dda1012d1226814e003a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_7d831eb7d171dd05eca3e3200770868da58dfd6bc6dda1012d1226814e003a0a->leave($__internal_7d831eb7d171dd05eca3e3200770868da58dfd6bc6dda1012d1226814e003a0a_prof);

        
        $__internal_96a647daacd5df470755c8ff711dfadbc8be5537ed3b3454564fc80819efbd1a->leave($__internal_96a647daacd5df470755c8ff711dfadbc8be5537ed3b3454564fc80819efbd1a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/ebougerolle/Sites/mooc-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
