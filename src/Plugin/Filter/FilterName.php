<?php

/**
 * @file
 * Contains Drupal\name\Plugin\Filter\FilterName
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
    $result =  preg_replace('/\[name:(.*):(.*)\]/i', 'Name : $2 $1', $text);
    return new FilterProcessResult($result);
    //return Name : LASTNAME FIRSTNAME
  }

}