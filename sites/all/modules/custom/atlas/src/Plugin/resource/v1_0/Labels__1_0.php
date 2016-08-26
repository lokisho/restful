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

}