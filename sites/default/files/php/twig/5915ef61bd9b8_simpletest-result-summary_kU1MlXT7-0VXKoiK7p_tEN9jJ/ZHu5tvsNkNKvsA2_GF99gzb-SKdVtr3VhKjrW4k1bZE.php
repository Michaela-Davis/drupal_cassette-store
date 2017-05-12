<?php

/* core/themes/stable/templates/admin/simpletest-result-summary.html.twig */
class __TwigTemplate_e99fa3dca26f788872b44a05051d05540e450ee8ba797b3423f6b889c7031c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array("join" => 19);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('join'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 18
        echo "<div class=\"simpletest-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((((((isset($context["fail"]) ? $context["fail"] : null) + (isset($context["exception"]) ? $context["exception"] : null)) == 0)) ? ("pass") : ("fail"))));
        echo "\">
  ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_join_filter((isset($context["items"]) ? $context["items"] : null), ", "), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/simpletest-result-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  43 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for simpletest result summaries.
 *
 * Available variables:
 * - label: An optional label to be rendered before the results.
 * - items: Pluralized summaries for each result type (number of passes, fails,
 *   exceptions, and debug messages).
 * - pass: The number of passes.
 * - fail: The number of fails.
 * - exception: The number of exceptions.
 * - debug: The number of debug messages.
 *
 * @see template_preprocess_simpletest_result_summary()
 */
#}
<div class=\"simpletest-{{ fail + exception == 0 ? 'pass' : 'fail' }}\">
  {{ label }} {{ items|join(', ') }}
</div>
";
    }
}
