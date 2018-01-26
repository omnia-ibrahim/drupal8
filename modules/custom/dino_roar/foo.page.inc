<?php

/**
 * @file
 * Contains foo.page.inc.
 *
 * Page callback for hi entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for hi templates.
 *
 * Default template: foo.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_foo(array &$variables) {
  // Fetch foo Entity Object.
  $foo = $variables['elements']['#foo'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
