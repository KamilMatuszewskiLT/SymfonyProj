<?php

/* EasyAdminBundle:css:easyadmin.css.twig */
class __TwigTemplate_c0b213777f9c6ca993174f3b889b10455fb4a128778cb8346178c0fa61f796c8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:css:easyadmin.css.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:css:easyadmin.css.twig"));

        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = array("dark" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"), "light" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"));
        // line 43
        echo "
";
        // line 44
        $context["colors"] = $this->getAttribute(($context["color_schemes"] ?? $this->getContext($context, "color_schemes")), ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")), array(), "array");
        // line 45
        echo "
";
        // line 52
        echo ".sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

";
        // line 60
        echo "body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
}

h1, h2, h3, h4, h5, h6 {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

";
        // line 71
        echo "a        { color: ";
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "link", array());
        echo "; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: ";
        // line 82
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "link", array());
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 86
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", array());
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

";
        // line 95
        echo "ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

";
        // line 113
        echo "div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 117
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "success", array());
        echo ";
    color: ";
        // line 118
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
}
div.flash-error {
    background: ";
        // line 121
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", array());
        echo ";
    color: ";
        // line 122
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

";
        // line 131
        echo ".label:not([class*=label-]) {
    background: ";
        // line 132
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_darker", array());
        echo ";
}
.label {
    color: ";
        // line 135
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    ";
        // line 144
        echo "    background: ";
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "success", array());
        echo " !important;
}
.label-danger {
    ";
        // line 148
        echo "    background: ";
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", array());
        echo " !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 154
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    padding: 4px 8px;
}

";
        // line 159
        echo ".boolean .label,
.toggle .label {
    min-width: 33px;
}

";
        // line 168
        echo ".toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: ";
        // line 210
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

";
        // line 226
        echo "span.badge {
    background-color: ";
        // line 227
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
}

";
        // line 232
        echo ".btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
";
        // line 249
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 250
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 251
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 252
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 254
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 257
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", array());
        echo ";
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: ";
        // line 278
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
    border-color: transparent;
    color: ";
        // line 280
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: #39a0ed;
    border-color: transparent;
    color: ";
        // line 289
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: ";
        // line 304
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 306
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 314
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "success", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 316
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
}

";
        // line 320
        echo ".btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: ";
        // line 326
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

";
        // line 355
        echo ".form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 360
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", array());
        echo ";
    border-radius: 0;
";
        // line 362
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 363
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 365
        echo "    color: ";
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 370
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 371
            echo "    border-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_dark", array());
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 373
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 374
            echo "    border-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_darker", array());
            echo ";
";
        }
        // line 376
        echo "}

.has-error .error-block {
    color: ";
        // line 379
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", array());
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 395
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text_muted", array());
        echo ";
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
";
        // line 405
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 406
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 407
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 408
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 409
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 410
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 412
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 414
        if (((array_key_exists("kernel_debug", $context)) ? (_twig_default_filter(($context["kernel_debug"] ?? $this->getContext($context, "kernel_debug")), false)) : (false))) {
            // line 415
            echo "    height: 85px;
    padding-bottom: 45px;
";
        }
        // line 418
        echo "    z-index: 9999;
}

.field-group .box-header a i {
    font-size: 21px;
}

.field-group .box-header a[aria-expanded=true] .fa-plus-square-o {
   display: none;
}
.field-group .box-header a[aria-expanded=false] .fa-minus-square-o {
   display: none;
}

";
        // line 434
        echo ".field-collection .collection-empty {
    margin: .5em 0;
}

";
        // line 440
        echo ".field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
";
        // line 445
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 446
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 447
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 448
            echo "    border-top-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
";
        }
        // line 450
        echo "}
.field-group .field-divider hr {
";
        // line 452
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 453
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 454
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 455
            echo "    border-top-color: #EEE;
";
        }
        // line 457
        echo "}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
";
        // line 463
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 464
            echo "    border-bottom: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
            echo ";
    color: ";
            // line 465
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 466
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 467
            echo "    border-bottom: 1px solid #EEE;
    color: ";
            // line 468
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_darker", array());
            echo ";
";
        }
        // line 470
        echo "    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
";
        // line 474
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 475
            echo "    color: #555;
";
        } elseif (("light" ==         // line 476
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 477
            echo "    color: #777;
";
        }
        // line 479
        echo "    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
";
        // line 486
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 487
            echo "    border: 1px solid #DDD;
";
        } elseif (("light" ==         // line 488
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 489
            echo "    border: 1px solid #EEE;
";
        }
        // line 491
        echo "    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
";
        // line 494
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 495
            echo "    color: #555;
";
        } elseif (("light" ==         // line 496
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 497
            echo "    color: #777;
";
        }
        // line 499
        echo "    margin-right: 2px;
}
.field-group .box-header.with-border {
";
        // line 502
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 503
            echo "    background: #F0F0F0;
    border-bottom-color: #DDD;
";
        } elseif (("light" ==         // line 505
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 506
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
            echo ";
    border-bottom-color: #EEE;
    color: ";
            // line 508
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_darker", array());
            echo ";
";
        }
        // line 510
        echo "    padding: 11px 10px 9px;
}
";
        // line 512
        if (("light" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 513
            echo ".field-group .box-header .box-title {
    color: #777;
}
";
        }
        // line 517
        echo ".field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

";
        // line 527
        echo ".select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 531
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", array());
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 534
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 542
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", array());
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 549
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 553
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 556
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", array());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 559
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", array());
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 565
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_dark", array());
        echo ";
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

";
        // line 578
        echo ".easyadmin-vich-image img {
    border: 3px solid ";
        // line 579
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 580
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", array());
        echo ";
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
";
        // line 593
        echo ".easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

";
        // line 603
        echo ".easyadmin-thumbnail img {
    border: 3px solid ";
        // line 604
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 605
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", array());
        echo ";
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

";
        // line 627
        echo ".modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 635
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    border-top: 1px solid ";
        // line 636
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    margin-top: 1.5em;
}

";
        // line 642
        echo ".newrow, .new-row {
    clear: both;
    display: block;
}

";
        // line 650
        echo "
";
        // line 653
        echo ".content-wrapper {
    background: ";
        // line 654
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "page_background", array());
        echo ";
}
.fixed .content-wrapper {
    padding-top: 50px;
}

";
        // line 662
        echo ".main-header {
    background: ";
        // line 663
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
    position: relative;
}
.main-header .logo {
    color: ";
        // line 667
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; ";
        // line 669
        echo "    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: ";
        // line 694
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: ";
        // line 713
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

";
        // line 770
        echo "#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

";
        // line 786
        echo ".main-sidebar,
.wrapper {
";
        // line 788
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 789
            echo "    background-color: #333;
";
        } elseif (("light" ==         // line 790
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 791
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        }
        // line 793
        echo "}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
";
        // line 799
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 800
            echo "    color: #777;
";
        } elseif (("light" ==         // line 801
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 802
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_dark", array());
            echo ";
";
        }
        // line 804
        echo "    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
";
        // line 809
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 810
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 811
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 812
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
";
        }
        // line 814
        echo "    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
";
        // line 831
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 832
            echo "    background: #333;
    color: #CCC;
";
        } elseif (("light" ==         // line 834
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 835
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_darker", array());
            echo ";
";
        }
        // line 837
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
";
        // line 843
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 844
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 845
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 846
            echo "    background-color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
";
        }
        // line 848
        echo "    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
";
        // line 857
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 858
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
            echo ";
    background: #4D4D4D;
    border-left-color: #BBB;
";
        } elseif (("light" ==         // line 861
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 862
            echo "    background: #DCDCDC;
    border-left-color: #808080;
";
        }
        // line 865
        echo "}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

";
        // line 874
        echo ".sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
";
        // line 891
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 892
            echo "    background: #333;
";
        } elseif (("light" ==         // line 893
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 894
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        }
        // line 896
        echo "}

";
        // line 899
        echo ".sidebar-mini.sidebar-collapse .sidebar-menu li.header {
";
        // line 900
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 901
            echo "    border-bottom: 1px solid #777;
";
        } elseif (("light" ==         // line 902
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 903
            echo "    border-bottom: 1px solid #BBB;
";
        }
        // line 905
        echo "    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

";
        // line 915
        echo "body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
";
        // line 920
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 921
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 922
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 923
            echo "    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: ";
            // line 925
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text_muted", array());
            echo ";
";
        }
        // line 927
        echo "    margin: 10px 0 5px;
}

";
        // line 933
        echo "
body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

";
        // line 969
        echo "body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 982
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
";
        // line 983
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 984
            echo "    border: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 985
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 986
            echo "    border: 1px solid ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 988
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 992
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

";
        // line 1033
        echo "body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

";
        // line 1046
        echo "body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 1053
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1054
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text_muted", array());
            echo ";
";
        } elseif (("light" ==         // line 1055
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1056
            echo "    color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", array());
            echo ";
";
        }
        // line 1058
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 1060
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
    border-color: ";
        // line 1061
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    border-radius: 0;
    color: ";
        // line 1063
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", array());
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 1066
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
    color: ";
        // line 1067
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
";
        // line 1079
        echo "body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

";
        // line 1087
        echo "form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 1089
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", array());
        echo ";
    font-size: 16px;
}

";
        // line 1096
        echo "body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1118
        echo "body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1140
        echo "body.show .form-control {
";
        // line 1141
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1142
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1143
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1144
            echo "    background: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", array());
            echo ";
";
        }
        // line 1146
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

";
        // line 1160
        echo "body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: ";
        // line 1165
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
    border: 1px solid ";
        // line 1166
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 1167
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 1172
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "danger", array());
        echo ";
    color: ";
        // line 1173
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

";
        // line 1189
        echo "
";
        // line 1193
        echo "@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; ";
        // line 1217
        echo "        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    ";
        // line 1264
        echo "    body.list table {
        background: ";
        // line 1265
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
        echo ";
        border: 1px solid ";
        // line 1266
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "table_border", array());
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1272
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "table_header", array());
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1276
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray", array());
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1281
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "text", array());
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1287
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1292
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1293
            echo "        background: ";
            echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
            echo ";
        color: ";
            // line 1294
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
            echo ";
";
        }
        // line 1296
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1299
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1300
            echo "        color: ";
            echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1301
($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1302
            echo "        color: ";
            echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
            echo ";
";
        }
        // line 1304
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 1312
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1315
        echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
        echo ";
    }
    ";
        // line 1318
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1319
        if (("dark" == ($context["color_scheme"] ?? $this->getContext($context, "color_scheme")))) {
            // line 1320
            echo "        border-left: 1px solid ";
            echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
            echo ";
        border-top: 1px solid ";
            // line 1321
            echo ($context["brand_color"] ?? $this->getContext($context, "brand_color"));
            echo ";
";
        }
        // line 1323
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1325
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_light", array());
        echo ";
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 1334
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 1346
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
        border-color: ";
        // line 1347
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "table_row_border", array());
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1350
        echo $this->getAttribute(($context["colors"] ?? $this->getContext($context, "colors")), "gray_lighter", array());
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    ";
        // line 1390
        echo "    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:css:easyadmin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1870 => 1390,  1829 => 1350,  1823 => 1347,  1819 => 1346,  1804 => 1334,  1792 => 1325,  1788 => 1323,  1783 => 1321,  1778 => 1320,  1776 => 1319,  1773 => 1318,  1768 => 1315,  1762 => 1312,  1752 => 1304,  1746 => 1302,  1744 => 1301,  1739 => 1300,  1737 => 1299,  1732 => 1296,  1727 => 1294,  1722 => 1293,  1720 => 1292,  1712 => 1287,  1703 => 1281,  1695 => 1276,  1688 => 1272,  1679 => 1266,  1675 => 1265,  1672 => 1264,  1624 => 1217,  1599 => 1193,  1596 => 1189,  1580 => 1173,  1576 => 1172,  1568 => 1167,  1564 => 1166,  1560 => 1165,  1553 => 1160,  1540 => 1146,  1534 => 1144,  1532 => 1143,  1527 => 1142,  1525 => 1141,  1522 => 1140,  1501 => 1118,  1480 => 1096,  1473 => 1089,  1469 => 1087,  1462 => 1079,  1450 => 1067,  1446 => 1066,  1440 => 1063,  1435 => 1061,  1431 => 1060,  1427 => 1058,  1421 => 1056,  1419 => 1055,  1414 => 1054,  1412 => 1053,  1403 => 1046,  1390 => 1033,  1348 => 992,  1342 => 988,  1336 => 986,  1334 => 985,  1329 => 984,  1327 => 983,  1323 => 982,  1308 => 969,  1272 => 933,  1267 => 927,  1262 => 925,  1258 => 923,  1256 => 922,  1251 => 921,  1249 => 920,  1242 => 915,  1233 => 905,  1229 => 903,  1227 => 902,  1224 => 901,  1222 => 900,  1219 => 899,  1215 => 896,  1209 => 894,  1207 => 893,  1204 => 892,  1202 => 891,  1183 => 874,  1173 => 865,  1168 => 862,  1166 => 861,  1159 => 858,  1157 => 857,  1146 => 848,  1140 => 846,  1138 => 845,  1135 => 844,  1133 => 843,  1125 => 837,  1119 => 835,  1117 => 834,  1113 => 832,  1111 => 831,  1092 => 814,  1086 => 812,  1084 => 811,  1081 => 810,  1079 => 809,  1072 => 804,  1066 => 802,  1064 => 801,  1061 => 800,  1059 => 799,  1051 => 793,  1045 => 791,  1043 => 790,  1040 => 789,  1038 => 788,  1034 => 786,  1018 => 770,  960 => 713,  938 => 694,  911 => 669,  907 => 667,  900 => 663,  897 => 662,  888 => 654,  885 => 653,  882 => 650,  875 => 642,  868 => 636,  864 => 635,  854 => 627,  831 => 605,  827 => 604,  824 => 603,  814 => 593,  799 => 580,  795 => 579,  792 => 578,  778 => 565,  769 => 559,  763 => 556,  757 => 553,  750 => 549,  740 => 542,  729 => 534,  723 => 531,  717 => 527,  708 => 517,  702 => 513,  700 => 512,  696 => 510,  691 => 508,  685 => 506,  683 => 505,  679 => 503,  677 => 502,  672 => 499,  668 => 497,  666 => 496,  663 => 495,  661 => 494,  656 => 491,  652 => 489,  650 => 488,  647 => 487,  645 => 486,  636 => 479,  632 => 477,  630 => 476,  627 => 475,  625 => 474,  619 => 470,  614 => 468,  611 => 467,  609 => 466,  605 => 465,  600 => 464,  598 => 463,  590 => 457,  586 => 455,  584 => 454,  581 => 453,  579 => 452,  575 => 450,  569 => 448,  567 => 447,  564 => 446,  562 => 445,  555 => 440,  549 => 434,  533 => 418,  528 => 415,  526 => 414,  522 => 412,  517 => 410,  512 => 409,  510 => 408,  506 => 407,  501 => 406,  499 => 405,  486 => 395,  467 => 379,  462 => 376,  456 => 374,  454 => 373,  448 => 371,  446 => 370,  437 => 365,  433 => 363,  431 => 362,  426 => 360,  419 => 355,  389 => 326,  381 => 320,  375 => 316,  370 => 314,  359 => 306,  354 => 304,  336 => 289,  324 => 280,  319 => 278,  295 => 257,  290 => 254,  284 => 252,  282 => 251,  277 => 250,  275 => 249,  256 => 232,  250 => 227,  247 => 226,  230 => 210,  186 => 168,  179 => 159,  172 => 154,  162 => 148,  155 => 144,  144 => 135,  138 => 132,  135 => 131,  126 => 122,  122 => 121,  116 => 118,  112 => 117,  106 => 113,  88 => 95,  78 => 86,  71 => 82,  56 => 71,  45 => 60,  38 => 52,  35 => 45,  33 => 44,  30 => 43,  28 => 5,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#  ========================================================================
    EasyAdmin Default Theme | (c) 2015 Javier Eguiluz | MIT License
    ======================================================================== #}

{% set color_schemes = {
    'dark': {
        danger: '#D42124',
        success: '#006B2E',
        text: '#222222',
        text_muted: '#737373',
        link: '#205081',
        black: '#111111',
        white: '#FFFFFF',
        gray_darker: '#252525',
        gray_dark: '#444',
        gray: '#AAA',
        gray_light: '#CCC',
        gray_lighter: '#F5F5F5',
        page_background: '#F5F5F5',
        table_header: '#EEE',
        table_border: '#CCC',
        table_row_border: '#DDD',
    },
    'light': {
        danger: '#D42124',
        success: '#006B2E',
        text: '#444444',
        text_muted: '#737373',
        link: '#205081',
        black: '#333333',
        white: '#FFFFFF',
        gray_darker: '#444',
        gray_dark: '#AAA',
        gray: '#CCC',
        gray_light: '#F5F5F5',
        gray_lighter: '#FAFAFA',
        page_background: '#FFFFFF',
        table_header: '#FAFAFA',
        table_border: '#FFFFFF',
        table_row_border: '#E5E5E5',
    }
} %}

{% set colors = color_schemes[color_scheme] %}

{% autoescape false %}
{# -------------------------------------------------------------------------
   RESET STYLES
   ------------------------------------------------------------------------- #}
{# make the Symfony Web Toolbar look nice by neutralizing the aliasing applied
   globally by the AdminLTE template styles #}
.sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

{# -------------------------------------------------------------------------
   BASIC STYLES
   ------------------------------------------------------------------------- #}
body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
}

h1, h2, h3, h4, h5, h6 {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

{# Links
   ------------------------------------------------------------------------- #}
a        { color: {{ colors.link }}; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: {{ colors.link }};
}
a.text-danger,
a.text-danger:focus {
    color: {{ colors.danger }};
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

{# Lists
   ------------------------------------------------------------------------- #}
ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

{# Flash messages
   ------------------------------------------------------------------------- #}
div.flash {
    padding: .5em;
}
div.flash-success {
    background: {{ colors.success }};
    color: {{ colors.white }};
}
div.flash-error {
    background: {{ colors.danger }};
    color: {{ colors.white }};
}
div.flash-error strong {
    padding-right: .5em;
}

{# Labels
   ------------------------------------------------------------------------- #}
{# this prevents overriding default styles for labels (label-info, label-primary, etc.) #}
.label:not([class*=label-]) {
    background: {{ colors.gray_darker }};
}
.label {
    color: {{ colors.white }};
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    {# !important is required to override AdminLTE styles #}
    background: {{ colors.success }} !important;
}
.label-danger {
    {# !important is required to override AdminLTE styles #}
    background: {{ colors.danger }} !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: {{ colors.gray_light }};
    padding: 4px 8px;
}

{# this makes boolean labels to be of the same width for most languages #}
.boolean .label,
.toggle .label {
    min-width: 33px;
}

{# Switches / toggles
   ------------------------------------------------------------------------- #}
{# needed to neutralize the default .toggle styles applied by Bootstrap Toggle
   which collide with the .toggle class applied to <th> too #}
.toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: {{ colors.gray_lighter }};
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

{# Badges
   ------------------------------------------------------------------------- #}
span.badge {
    background-color: {{ brand_color }};
}

{# Buttons
   ------------------------------------------------------------------------- #}
.btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
{% if 'dark' == color_scheme %}
    background: {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray }};
{% endif %}
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: {{ colors.text }};
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: {{ brand_color }};
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: #39a0ed;
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: {{ colors.danger }};
    border-color: transparent;
    color: {{ colors.white }};
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: {{ colors.success }};
    border-color: transparent;
    color: {{ colors.white }};
}

{# .bnt-secondary is for 'buttons' displayed as text links #}
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: {{ brand_color }};
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

{# Forms
   ------------------------------------------------------------------------- #}
.form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid {{ colors.gray }};
    border-radius: 0;
{% if 'dark' == color_scheme %}
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
{% endif %}
    color: {{ colors.text }};
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
{% if 'dark' == color_scheme %}
    border-color: {{ colors.gray_dark }};
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
{% elseif 'light' == color_scheme %}
    border-color: {{ colors.gray_darker }};
{% endif %}
}

.has-error .error-block {
    color: {{ colors.danger }};
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: {{ colors.text_muted }};
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
{% if 'dark' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
    box-shadow: 0 -1px 4px {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_light }};
    box-shadow: 0 -1px 4px {{ colors.gray }};
{% endif %}
    height: 52px;
    padding-top: 10px;
{% if kernel_debug|default(false) %}
    height: 85px;
    padding-bottom: 45px;
{% endif %}
    z-index: 9999;
}

.field-group .box-header a i {
    font-size: 21px;
}

.field-group .box-header a[aria-expanded=true] .fa-plus-square-o {
   display: none;
}
.field-group .box-header a[aria-expanded=false] .fa-minus-square-o {
   display: none;
}

{# Field: collection
   ------------------------------------------------------------------------- #}
.field-collection .collection-empty {
    margin: .5em 0;
}

{# Field: special Form Fields (dividers, groups, sections)
   ------------------------------------------------------------------------- #}
.field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
{% if 'dark' == color_scheme %}
    border-top-color: #DDD;
{% elseif 'light' == color_scheme %}
    border-top-color: {{ colors.gray_lighter }};
{% endif %}
}
.field-group .field-divider hr {
{% if 'dark' == color_scheme %}
    border-top-color: #DDD;
{% elseif 'light' == color_scheme %}
    border-top-color: #EEE;
{% endif %}
}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
{% if 'dark' == color_scheme %}
    border-bottom: 1px solid {{ colors.gray_light }};
    color: {{ colors.gray_dark }};
{% elseif 'light' == color_scheme %}
    border-bottom: 1px solid #EEE;
    color: {{ colors.gray_darker }};
{% endif %}
    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
{% if 'dark' == color_scheme %}
    color: #555;
{% elseif 'light' == color_scheme %}
    color: #777;
{% endif %}
    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
{% if 'dark' == color_scheme %}
    border: 1px solid #DDD;
{% elseif 'light' == color_scheme %}
    border: 1px solid #EEE;
{% endif %}
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
{% if 'dark' == color_scheme %}
    color: #555;
{% elseif 'light' == color_scheme %}
    color: #777;
{% endif %}
    margin-right: 2px;
}
.field-group .box-header.with-border {
{% if 'dark' == color_scheme %}
    background: #F0F0F0;
    border-bottom-color: #DDD;
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_light }};
    border-bottom-color: #EEE;
    color: {{ colors.gray_darker }};
{% endif %}
    padding: 11px 10px 9px;
}
{% if 'light' == color_scheme %}
.field-group .box-header .box-title {
    color: #777;
}
{% endif %}
.field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

{# Select2 widget
   ------------------------------------------------------------------------- #}
{# these styles must be applied after loading the default select2 styles #}
.select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid {{ colors.gray }};
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: {{ colors.text }};
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: {{ colors.text }};
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: {{ colors.gray_light }};
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: {{ brand_color }};
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: {{ colors.text }};
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: {{ colors.danger }};
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid {{ colors.gray_dark }};
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

{# VichUploaderBundle files and images
   ------------------------------------------------------------------------- #}
.easyadmin-vich-image img {
    border: 3px solid {{ colors.white }};
    box-shadow: 0 0 3px {{ colors.gray }};
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
{# the checkbox to delete the image/file #}
.easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

{# Thumbnails and image lightbox
   ------------------------------------------------------------------------- #}
.easyadmin-thumbnail img {
    border: 3px solid {{ colors.white }};
    box-shadow: 0 0 3px {{ colors.gray }};
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

{# Modal windows
   ------------------------------------------------------------------------- #}
.modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: {{ colors.gray_lighter }};
    border-top: 1px solid {{ colors.gray_light }};
    margin-top: 1.5em;
}

{# Utils
   ------------------------------------------------------------------------- #}
.newrow, .new-row {
    clear: both;
    display: block;
}

{# -------------------------------------------------------------------------
   LAYOUT
   ------------------------------------------------------------------------- #}

{# Wrapper
   ------------------------------------------------------------------------- #}
.content-wrapper {
    background: {{ colors.page_background }};
}
.fixed .content-wrapper {
    padding-top: 50px;
}

{# Header
   ------------------------------------------------------------------------- #}
.main-header {
    background: {{ brand_color }};
    position: relative;
}
.main-header .logo {
    color: {{ colors.white }};
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; {# needed to override AdminLTE styles #}
    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: {{ brand_color }};
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: {{ colors.white }};
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

{# Main body
   ------------------------------------------------------------------------- #}
#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

{# Sidebar
   ------------------------------------------------------------------------- #}
.main-sidebar,
.wrapper {
{% if 'dark' == color_scheme %}
    background-color: #333;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_light }};
{% endif %}
}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
{% if 'dark' == color_scheme %}
    color: #777;
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray_dark }};
{% endif %}
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
{% if 'dark' == color_scheme %}
    background: #404040;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
{% endif %}
    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
{% if 'dark' == color_scheme %}
    background: #333;
    color: #CCC;
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray_darker }};
{% endif %}
    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
{% if 'dark' == color_scheme %}
    background: #404040;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
{% endif %}
    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
{% if 'dark' == color_scheme %}
    color: {{ colors.white }};
    background: #4D4D4D;
    border-left-color: #BBB;
{% elseif 'light' == color_scheme %}
    background: #DCDCDC;
    border-left-color: #808080;
{% endif %}
}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

{# when the sidebar is collapsed #}
.sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
{% if 'dark' == color_scheme %}
    background: #333;
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_light }};
{% endif %}
}

{# when collapsed, menu dividers are displayed as a straight line #}
.sidebar-mini.sidebar-collapse .sidebar-menu li.header {
{% if 'dark' == color_scheme %}
    border-bottom: 1px solid #777;
{% elseif 'light' == color_scheme %}
    border-bottom: 1px solid #BBB;
{% endif %}
    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

{# -------------------------------------------------------------------------
   COMMON ADMIN PAGES
   ------------------------------------------------------------------------- #}
body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
{% if 'dark' == color_scheme %}
    color: {{ colors.gray_dark }};
{% elseif 'light' == color_scheme %}
    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: {{ colors.text_muted }};
{% endif %}
    margin: 10px 0 5px;
}

{# -------------------------------------------------------------------------
   LIST PAGE
   ------------------------------------------------------------------------- #}

body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

{# Responsive tables
   ------------------------------------------------------------------------- #}
body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: {{ colors.white }};
{% if 'dark' == color_scheme %}
    border: 1px solid {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    border: 1px solid {{ colors.gray }};
{% endif %}
    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid {{ colors.table_row_border }};
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

{# Search results
   ------------------------------------------------------------------------- #}
body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

{# Pagination
   ------------------------------------------------------------------------- #}
body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
{% if 'dark' == color_scheme %}
    color: {{ colors.text_muted }};
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray }};
{% endif %}
}
body.list .pagination > li > a {
    background: {{ colors.white }};
    border-color: {{ colors.gray_light }};
    border-radius: 0;
    color: {{ colors.text }};
}
body.list .pagination > li > a:hover {
    background: {{ brand_color }};
    color: {{ colors.white }};
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
{# this hack is needed to avoid the last pagination page from showing wrong
   borders for the second pagination element (we need to put this element above
   the third element) #}
body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

{# -------------------------------------------------------------------------
   FORM PAGE
   ------------------------------------------------------------------------- #}
form label.control-label.required:after {
    content: \"\\00a0*\";
    color: {{ colors.danger }};
    font-size: 16px;
}

{# -------------------------------------------------------------------------
   NEW PAGE
   ------------------------------------------------------------------------- #}
body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

{# -------------------------------------------------------------------------
   EDIT PAGE
   ------------------------------------------------------------------------- #}
body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

{# -------------------------------------------------------------------------
   SHOW PAGE
   ------------------------------------------------------------------------- #}
body.show .form-control {
{% if 'dark' == color_scheme %}
    background: {{ colors.white }};
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_lighter }};
{% endif %}
    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

{# -------------------------------------------------------------------------
   ERROR PAGES
   ------------------------------------------------------------------------- #}
body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: {{ colors.white }};
    border: 1px solid {{ colors.gray_lighter }};
    box-shadow: 0 0 3px {{ colors.gray_light }};
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: {{ colors.danger }};
    color: {{ colors.white }};
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

{# =========================================================================
   RESPONSIVE
   ========================================================================= #}

{# -------------------------------------------------------------------------
   VERTICAL TABLETS and LANDSCAPE SMARTPHONES
   ------------------------------------------------------------------------- #}
@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; {# neutralizes AdminLTE styles #}
        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    {# these table styles are needed to override the \"responsive tables\" styles #}
    body.list table {
        background: {{ colors.white }};
        border: 1px solid {{ colors.table_border }};
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: {{ colors.table_header }};
        padding: 0;
    }
    body.list table thead th i {
        color: {{ colors.gray }};
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: {{ colors.text }};
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: {{ colors.gray_light }};
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
{% if 'dark' == color_scheme %}
        background: {{ brand_color }};
        color: {{ colors.white }};
{% endif %}
    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
{% if 'dark' == color_scheme %}
        color: {{ colors.white }};
{% elseif 'light' == color_scheme %}
        color: {{ brand_color }};
{% endif %}
    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid {{ colors.gray_light }};
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset {{ brand_color }};
    }
    {# these styles are needed to fix some visual glitches when the sort field is the first column #}
    body.list .table thead tr th:first-child.sorted {
{% if 'dark' == color_scheme %}
        border-left: 1px solid {{ brand_color }};
        border-top: 1px solid {{ brand_color }};
{% endif %}
    }
    body.list .table tbody {
        border-bottom: 2px double {{ colors.gray_light }};
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid {{ colors.table_row_border }};
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: {{ colors.gray_lighter }};
        border-color: {{ colors.table_row_border }};
    }
    body.list .table tbody tr:hover td {
        background: {{ colors.gray_lighter }};
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    {# Field: checkbox
       ------------------------------------------------------------------------- #}
    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
{% endautoescape %}
", "EasyAdminBundle:css:easyadmin.css.twig", "C:\\wamp64\\bin\\php\\php7.2.4\\DBExample\\vendor\\easycorp\\easyadmin-bundle\\src/Resources/views/css/easyadmin.css.twig");
    }
}
