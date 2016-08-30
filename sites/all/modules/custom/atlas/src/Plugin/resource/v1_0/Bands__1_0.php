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
 * Class Bands__1_0
 * @package Drupal\atlas\Plugin\resource
 *
 * @Resource(
 *   name = "bands:1.0",
 *   resource = "bands",
 *   label = "bands",
 *   description = "Export the Person content type.",
 *   authenticationTypes = TRUE,
 *   authenticationOptional = TRUE,
 *   dataProvider = {
 *     "entityType": "node",
 *     "bundles": {
 *       "band"
 *     }
 *   },
 *   formatter = "json_api",
 *   majorVersion = 1,
 *   minorVersion = 0
 * )
 */
class Bands__1_0 extends ResourceNode {

  /**
   * {@inheritdoc}
   */
  protected function publicFields() {
    $public_fields = parent::publicFields();

    $public_fields['name'] = $public_fields['label'];
    unset($public_fields['label']);
    $public_fields['biography'] =  array('property' => 'body');
    $public_fields['members'] = array(
      'property' => 'field_members',
      'resource' => array(
        'name' => 'people',
        'majorVersion' => 1,
        'minorVersion' => 0,
      ),
    );


    return $public_fields;
  }

}