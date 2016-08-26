<?php
/**
 * Created by PhpStorm.
 * User: lokisho
 * Date: 8/25/16
 * Time: 10:02 PM
 */

namespace Drupal\atlas\Plugin\resource\v1_0;
use Drupal\restful\Plugin\resource\ResourceNode;

/**
 * Class Labels__1_0
 * @package Drupal\atlas\Plugin\resource
 *
 * @Resource(
 *   name = "labels:1.0",
 *   resource = "labels",
 *   label = "labels",
 *   description = "Export the Record Labels content type.",
 *   authenticationTypes = TRUE,
 *   authenticationOptional = TRUE,
 *   dataProvider = {
 *     "entityType": "node",
 *     "bundles": {
 *       "record_label"
 *     }
 *   },
 *   formatter = "json_api",
 *   majorVersion = 1,
 *   minorVersion = 0
 * )
 */
class Labels__1_0 extends ResourceNode {

  /**
   * {@inheritdoc}
   */
  protected function publicFields() {
    $public_fields = parent::publicFields();

    // Rename label to name.
    $public_fields['name'] = $public_fields['label'];
    unset($public_fields['label']);

    $public_fields['history'] = array(
      'property' => 'body',
      // Uncomment to get only value.
//      'sub_property' => 'value',
      // Uncomment to process the value before to be sent.
//      'process_callbacks' => array(
//        'strip_tags',
//        array($this, 'replaceT'),
//      ),

    );
    $public_fields['artists'] = array('property' => 'field_managed_artists');
    $public_fields['bands'] = array('property' => 'field_managed_bands');

    return $public_fields;
  }

  /**
   * Replaces t by T.
   *
   * @param string $value
   *   Value to be replaced
   *
   * @return string
   *   Value processed.
   */
  public function replaceT ($value) {
    return str_replace("t", "T", $value);
  }

}