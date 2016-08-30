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
 * Class Albums__1_0
 * @package Drupal\atlas\Plugin\resource
 *
 * @Resource(
 *   name = "albums:1.0",
 *   resource = "albums",
 *   label = "albums",
 *   description = "Export the Person content type.",
 *   authenticationTypes = TRUE,
 *   authenticationOptional = TRUE,
 *   dataProvider = {
 *     "entityType": "node",
 *     "bundles": {
 *       "album"
 *     }
 *   },
 *   formatter = "json_api",
 *   majorVersion = 1,
 *   minorVersion = 0
 * )
 */
class Albums__1_0 extends ResourceNode {

  /**
   * {@inheritdoc}
   */
  protected function publicFields() {
    $public_fields = parent::publicFields();

    $public_fields['name'] = $public_fields['label'];
    unset($public_fields['label']);
    $public_fields['sells'] =  array('property' => 'field_sells');
    $public_fields['year'] = array('property' => 'field_publication_year');

    return $public_fields;
  }

}