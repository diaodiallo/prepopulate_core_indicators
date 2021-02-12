<?php
/**
 * Created by PhpStorm.
 * User: ddiallo
 * Date: 9/9/19
 * Time: 4:10 PM
 */

namespace Drupal\prepopulate_core_indicators\Util;

class PrepopulateCoreIndicatorsUtility {

  public function getGroupId($tid) {

    $map = [
      '20' => 1,
      '26' => 2,
      '30' => 3,
      '27' => 4,
      '9' => 5,
      '10' => 6,
      '28' => 7,
      '29' => 8,
      '11' => 9,
      '21' => 10,
      '12' => 11,
      '13' => 12,
      '14' => 13,
      '31' => 14,
      '15' => 15,
      '23' => 16,
      '16' => 17,
      '17' => 18,
      '25' => 19,
      '24' => 20,
      '32' => 21,
      '18' => 22,
      '19' => 23,
    ];

    return $map[$tid];
  }
}