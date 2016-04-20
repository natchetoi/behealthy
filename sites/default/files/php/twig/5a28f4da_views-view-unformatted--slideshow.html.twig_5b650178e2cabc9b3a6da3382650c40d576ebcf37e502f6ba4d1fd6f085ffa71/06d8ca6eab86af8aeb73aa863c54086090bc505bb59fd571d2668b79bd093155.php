<?php

/* themes/zircon/templates/views/views-view-unformatted--slideshow.html.twig */
class __TwigTemplate_21f80ea65656fe35cdff9ce60e8da6aa617f42a10b313917216dcfda7f96c7a4 extends Twig_Template
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
        $tags = array("if" => 1, "for" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array(),
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

        // line 1
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 2
            echo "  <h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
";
        }
        // line 4
        echo "
<div id=\"slideshow_container\" style=\"position: relative; top: 0px; left: 0px; width: 1170px; height: 390px; overflow: hidden; \">
      <div u=\"loading\" style=\"position: absolute; top: 0px; left: 0px;\">
          <div style=\"filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
              background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;\">
          </div>
          <div style=\"position: absolute; display: block; background: url(themes/zircon/jssor/img/loading.gif) no-repeat center center;
              top: 0px; left: 0px;width: 100%;height:100%;\">
          </div>
      </div>

      <div u=\"slides\" style=\"cursor: move; position: absolute; left: 0px; top: 0px; width: 1170px; height: 390px; overflow: hidden;\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 17
            echo "          <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo ">
            ";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    
      </div>
      <div u=\"navigator\" class=\"jssorb05\" style=\"position: absolute; bottom: 16px; right: 6px;\">
          <div u=\"prototype\" style=\"POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;\"></div>
      </div>
      <span u=\"arrowleft\" class=\"jssora12l\" style=\"width: 30px; height: 46px; top: 123px; left: 0px;\">
      </span>
      <span u=\"arrowright\" class=\"jssora12r\" style=\"width: 30px; height: 46px; top: 123px; right: 0px\">
      </span>
  </div>";
    }

    public function getTemplateName()
    {
        return "themes/zircon/templates/views/views-view-unformatted--slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  74 => 18,  69 => 17,  65 => 16,  51 => 4,  45 => 2,  43 => 1,);
    }
}
/* {% if title %}*/
/*   <h3>{{ title }}</h3>*/
/* {% endif %}*/
/* */
/* <div id="slideshow_container" style="position: relative; top: 0px; left: 0px; width: 1170px; height: 390px; overflow: hidden; ">*/
/*       <div u="loading" style="position: absolute; top: 0px; left: 0px;">*/
/*           <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;*/
/*               background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">*/
/*           </div>*/
/*           <div style="position: absolute; display: block; background: url(themes/zircon/jssor/img/loading.gif) no-repeat center center;*/
/*               top: 0px; left: 0px;width: 100%;height:100%;">*/
/*           </div>*/
/*       </div>*/
/* */
/*       <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1170px; height: 390px; overflow: hidden;">*/
/*         {% for row in rows %}*/
/*           <div{{ row.attributes }}>*/
/*             {{ row.content }}*/
/*           </div>*/
/*         {% endfor %}    */
/*       </div>*/
/*       <div u="navigator" class="jssorb05" style="position: absolute; bottom: 16px; right: 6px;">*/
/*           <div u="prototype" style="POSITION: absolute; WIDTH: 16px; HEIGHT: 16px;"></div>*/
/*       </div>*/
/*       <span u="arrowleft" class="jssora12l" style="width: 30px; height: 46px; top: 123px; left: 0px;">*/
/*       </span>*/
/*       <span u="arrowright" class="jssora12r" style="width: 30px; height: 46px; top: 123px; right: 0px">*/
/*       </span>*/
/*   </div>*/
