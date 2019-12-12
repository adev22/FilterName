<?php

/**
 * @file
 * Contains Drupal\name\Plugin\Filter\FilterCelebrate
 */

namespace Drupal\name\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;

/**
 * @Filter(
 *   id = "filter_name",
 *   title = @Translation("Name Filter"),
 *   description = @Translation("Replace firstname and lastname"),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_REVERSIBLE,
 * )
 */
class FilterName extends FilterBase {

  public function process($text, $langcode) {

    //$text = "[name:FIRSTNAME:LASTNAME]";
    $lastname =  preg_replace('/\[name:(.*):(.*)\]/i', '$2', $text);
    $firstname = preg_replace('/\[name:(.*):(.*)\]/i', '$1', $text );
    $result = "Name : $lastname $firstname";

    return new FilterProcessResult($result);
    //return Name : LASTNAME FIRSTNAME
  }

}