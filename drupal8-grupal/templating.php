
Drupal 7's PHP Template

Multiple ways to display content


// Object
<?php print $node->nid ?>


// String
<?php print $attributes ?>


// Array
<?php print render($content) ?>



Drupal 8's Twig

// Array key.
$foo['bar'];

// Object property.
$foo->bar;

// Object method.
$foo->bar();

// Object get method convention.
$foo->getBar();

// Object is method convention.
$foo->isBar();

// Object dynamic object property is set and get property.
`$foo->__isset('bar');`
`$foo->__get('bar');`
