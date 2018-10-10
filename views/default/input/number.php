<?php
/*
 * © Copyright by Laboratorio de Redes 2010-2013
 */

if (isset($vars['class'])) {
    $vars['class'] = "elgg-input-text {$vars['class']}";
} else {
    $vars['class'] = "elgg-input-text";
}

$defaults = array(
	'value' => '',
	'min' => '',
	'max' => '',
	'step' => 1,
	'disabled' => false,
);

$vars = array_merge($defaults, $vars);

?>
<input type="number" <?php echo elgg_format_attributes($vars);?> />