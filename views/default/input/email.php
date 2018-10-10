<?php
/*
 * © Copyright by Laboratorio de Redes 2012
*/

if (isset($vars['class'])) {
    $vars['class'] = "elgg-input-text {$vars['class']}";
} else {
    $vars['class'] = "elgg-input-text";
}

$defaults = array(
        'value' => '',        
        'multiple' => false,
        'disabled' => false,
        'readonly' => false,
        'required' => false,
);

$vars = array_merge($defaults, $vars);

?>
<input type="email" <?php echo elgg_format_attributes($vars);?> /> 