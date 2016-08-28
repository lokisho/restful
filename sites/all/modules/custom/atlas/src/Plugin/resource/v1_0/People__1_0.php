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
 * Class People__1_0
 * @package Drupal\atlas\Plugin\resource
 *
 * @Resource(
 *   name = "people:1.0",
 *   resource = "people",
 *   label = "people",
 *   description = "Export the Person content type.",
 *   authenticationTypes = TRUE,
 *   authenticationOptional = TRUE,
 *   dataProvider = {
 *     "entityType": "node",
 *     "bundles": {
 *       "person"
 *     }
 *   },
 *   formatter = "json_api",
 *   majorVersion = 1,
 *   minorVersion = 0
 * )
 */
class People__1_0 extends ResourceNode {

  /**
   * {@inheritdoc}
   */
  protected function publicFields() {
    $public_fields = parent::publicFields();

    $public_fields['commonName'] = $public_fields['label'];
    unset($public_fields['label']);
    $public_fields['firstName'] =  array('property' => 'field_first_name');
    $public_fields['middelName'] = array('property' => 'field_middle_name');
    $public_fields['lastName'] = array('property' => 'field_last_name');

    return $public_fields;
  }

}