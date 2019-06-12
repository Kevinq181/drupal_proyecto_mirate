<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/clinic_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_3500e04db9e45972d059703a63f7963c5505d6adda9c47594cb0dd299108e1ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 64, "for" => 118];
        $filters = ["escape" => 69, "raw" => 119, "date" => 502];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "
<div class=\"header\">

  <div class=\"top-bar\">
    ";
        // line 64
        if (($this->getAttribute(($context["page"] ?? null), "top_call", []) || $this->getAttribute(($context["page"] ?? null), "top_info", []))) {
            // line 65
            echo "      <div class=\"row\">

        ";
            // line 67
            if ($this->getAttribute(($context["page"] ?? null), "top_call", [])) {
                // line 68
                echo "          <div class=\"col-md-6 left\">
            ";
                // line 69
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_call", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 72
            echo "
        ";
            // line 73
            if ($this->getAttribute(($context["page"] ?? null), "top_info", [])) {
                // line 74
                echo "          <div class=\"col-md-6 right\">
            ";
                // line 75
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_info", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 78
            echo "
      </div>
    ";
        }
        // line 81
        echo "  </div>

  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 93
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 95
        echo "      </div>

      <!-- End: Header -->

      ";
        // line 99
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 100
            echo "        <div class=\"col-md-9\">
          <div class=\"main-menu\">
            ";
            // line 102
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 106
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 114
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 115
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 119
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 125
        echo "

<!-- Start: Top widget -->

";
        // line 129
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
            // line 130
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">
        <div class=\"row clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 135
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                // line 136
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 137
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 141
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                // line 142
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 143
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 147
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                // line 148
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 149
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 156
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 162
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 163
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 165
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 169
        echo "
<!--End: Highlighted -->

<!--Start: Title -->

";
        // line 174
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 175
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 178
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 183
        echo "
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 192
        if ( !($context["is_front"] ?? null)) {
            // line 193
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 194
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 197
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 203
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 204
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 206
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 210
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 213
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 214
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 216
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 220
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 223
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 224
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 226
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 230
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 243
        if ((($this->getAttribute(($context["page"] ?? null), "features_first", []) || $this->getAttribute(($context["page"] ?? null), "features_second", [])) || $this->getAttribute(($context["page"] ?? null), "features_third", []))) {
            // line 244
            echo "
  <div class=\"features\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 250
            if ($this->getAttribute(($context["page"] ?? null), "features_first", [])) {
                // line 251
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 252
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 255
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 258
            if ($this->getAttribute(($context["page"] ?? null), "features_second", [])) {
                // line 259
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 260
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 263
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 266
            if ($this->getAttribute(($context["page"] ?? null), "features_third", [])) {
                // line 267
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 268
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 271
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 278
        echo "
<!--End: Features -->


<!-- Start: Team widgets -->

";
        // line 284
        if (((($this->getAttribute(($context["page"] ?? null), "team_first", []) || $this->getAttribute(($context["page"] ?? null), "team_second", [])) || $this->getAttribute(($context["page"] ?? null), "team_third", [])) || $this->getAttribute(($context["page"] ?? null), "team_forth", []))) {
            // line 285
            echo "
  <div class=\"team\" id=\"team\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 291
            if ($this->getAttribute(($context["page"] ?? null), "team_first", [])) {
                // line 292
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 293
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 295
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 299
            if ($this->getAttribute(($context["page"] ?? null), "team_second", [])) {
                // line 300
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 301
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 303
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 307
            if ($this->getAttribute(($context["page"] ?? null), "team_third", [])) {
                // line 308
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 309
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 311
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 315
            if ($this->getAttribute(($context["page"] ?? null), "team_forth", [])) {
                // line 316
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 317
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "team_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 320
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 327
        echo "
<!--End: Team widgets -->



<!-- Start: Price table widgets -->

";
        // line 334
        if ((($this->getAttribute(($context["page"] ?? null), "pricetable_first", []) || $this->getAttribute(($context["page"] ?? null), "pricetable_second", [])) || $this->getAttribute(($context["page"] ?? null), "pricetable_third", []))) {
            // line 335
            echo "
  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 341
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_first", [])) {
                // line 342
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 343
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 345
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 349
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_second", [])) {
                // line 350
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 351
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 353
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 357
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_third", [])) {
                // line 358
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 359
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 361
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 365
            if ($this->getAttribute(($context["page"] ?? null), "pricetable_forth", [])) {
                // line 366
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 367
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pricetable_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 369
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 377
        echo "
<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->

";
        // line 383
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
            // line 384
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 390
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 391
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 392
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 394
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 398
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 399
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 400
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 402
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 406
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 407
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 408
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 410
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 414
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 415
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 416
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 419
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 426
        echo "
<!--End: Bottom widgets -->



<!-- Start: Footer widgets -->

";
        // line 433
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 434
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 441
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 442
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 443
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 446
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 449
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 450
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 451
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 454
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 457
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 458
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 459
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 462
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>

";
        }
        // line 470
        echo "
<!--End: Footer widgets -->

<!-- Start: Copyright -->

<div class=\"copyright\">

    <div class=\"container\">

      ";
        // line 479
        if (($context["show_social_icon"] ?? null)) {
            // line 480
            echo "        <p class=\"social-media\">
          ";
            // line 481
            if (($context["facebook_url"] ?? null)) {
                // line 482
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
          ";
            }
            // line 484
            echo "          ";
            if (($context["google_plus_url"] ?? null)) {
                // line 485
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
          ";
            }
            // line 487
            echo "          ";
            if (($context["twitter_url"] ?? null)) {
                // line 488
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
          ";
            }
            // line 490
            echo "          ";
            if (($context["linkedin_url"] ?? null)) {
                // line 491
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
          ";
            }
            // line 493
            echo "          ";
            if (($context["pinterest_url"] ?? null)) {
                // line 494
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
          ";
            }
            // line 496
            echo "          ";
            if (($context["rss_url"] ?? null)) {
                // line 497
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
          ";
            }
            // line 499
            echo "        </p>
      ";
        }
        // line 501
        echo "
      <p>Copyright © ";
        // line 502
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>

      ";
        // line 504
        if (($context["show_credit_link"] ?? null)) {
            // line 505
            echo "        <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
      ";
        }
        // line 507
        echo "
  </div>

</div>

<!-- End: Copyright -->




";
    }

    public function getTemplateName()
    {
        return "themes/clinic_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  909 => 507,  905 => 505,  903 => 504,  898 => 502,  895 => 501,  891 => 499,  885 => 497,  882 => 496,  876 => 494,  873 => 493,  867 => 491,  864 => 490,  858 => 488,  855 => 487,  849 => 485,  846 => 484,  840 => 482,  838 => 481,  835 => 480,  833 => 479,  822 => 470,  812 => 462,  806 => 459,  801 => 458,  799 => 457,  794 => 454,  788 => 451,  783 => 450,  781 => 449,  776 => 446,  770 => 443,  765 => 442,  763 => 441,  754 => 434,  752 => 433,  743 => 426,  734 => 419,  728 => 416,  723 => 415,  721 => 414,  715 => 410,  709 => 408,  704 => 407,  702 => 406,  696 => 402,  690 => 400,  685 => 399,  683 => 398,  677 => 394,  671 => 392,  666 => 391,  664 => 390,  656 => 384,  654 => 383,  646 => 377,  636 => 369,  630 => 367,  625 => 366,  623 => 365,  617 => 361,  611 => 359,  606 => 358,  604 => 357,  598 => 353,  592 => 351,  587 => 350,  585 => 349,  579 => 345,  573 => 343,  568 => 342,  566 => 341,  558 => 335,  556 => 334,  547 => 327,  538 => 320,  532 => 317,  527 => 316,  525 => 315,  519 => 311,  513 => 309,  508 => 308,  506 => 307,  500 => 303,  494 => 301,  489 => 300,  487 => 299,  481 => 295,  475 => 293,  470 => 292,  468 => 291,  460 => 285,  458 => 284,  450 => 278,  441 => 271,  435 => 268,  430 => 267,  428 => 266,  423 => 263,  417 => 260,  412 => 259,  410 => 258,  405 => 255,  399 => 252,  394 => 251,  392 => 250,  384 => 244,  382 => 243,  367 => 230,  360 => 226,  354 => 224,  352 => 223,  347 => 220,  340 => 216,  334 => 214,  332 => 213,  327 => 210,  320 => 206,  314 => 204,  312 => 203,  304 => 197,  298 => 194,  295 => 193,  293 => 192,  282 => 183,  274 => 178,  269 => 175,  267 => 174,  260 => 169,  253 => 165,  249 => 163,  247 => 162,  239 => 156,  230 => 149,  222 => 148,  220 => 147,  214 => 143,  206 => 142,  204 => 141,  198 => 137,  190 => 136,  188 => 135,  181 => 130,  179 => 129,  173 => 125,  167 => 121,  158 => 119,  154 => 118,  149 => 115,  147 => 114,  137 => 106,  130 => 102,  126 => 100,  124 => 99,  118 => 95,  112 => 93,  110 => 92,  97 => 81,  92 => 78,  86 => 75,  83 => 74,  81 => 73,  78 => 72,  72 => 69,  69 => 68,  67 => 67,  63 => 65,  61 => 64,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/clinic_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\proyectos_drupal\\proyecto_mirate\\mirate\\themes\\clinic_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
}
