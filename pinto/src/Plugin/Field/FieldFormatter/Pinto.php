<?php

/**
 * @file
 * Contains \Drupal\pinto\Plugin\Field\FieldFormatter\Pinto.
 */

namespace Drupal\pinto\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\image\Plugin\Field\FieldFormatter\ImageFormatter;

/**
 * Plugin implementation of the 'pinto' formatter.
 *
 * @FieldFormatter(
 *   id = "pinto",
 *   label = @Translation("Pinto JS"),
 *   field_types = {
 *     "image"
 *   }
 * )
 */

class Pinto extends ImageFormatter {
  
  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items) {
     $elements = parent::viewElements($items);
     foreach ($elements as &$element) {
       $element['#theme'] = 'pinto_formatter';
    }
    return $elements;
  }
}