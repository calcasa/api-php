<?php
/**
 * Taxatiestatus
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Copyright 2023 Calcasa B.V.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * Calcasa Public API v1
 *
 * The version of the OpenAPI document: 1.3.0
 * Contact: info@calcasa.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Calcasa\Api\Model;
use \Calcasa\Api\ObjectSerializer;

/**
 * Taxatiestatus Class Doc Comment
 *
 * @category Class
 * @description | Waarde | Omschrijving | | --- | --- | | &#x60;nietGecontroleerd&#x60; | Status is onbekend of niet van toepassing. | | &#x60;goedgekeurd&#x60; | De waardering is geaccepteerd door een taxateur. | | &#x60;afgekeurd&#x60; | De waardering is afgewezen door een taxateur. |
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Taxatiestatus
{
    /**
     * Possible values of this enum
     */
    public const NIET_GECONTROLEERD = 'nietGecontroleerd';

    public const GOEDGEKEURD = 'goedgekeurd';

    public const AFGEKEURD = 'afgekeurd';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NIET_GECONTROLEERD,
            self::GOEDGEKEURD,
            self::AFGEKEURD
        ];
    }
}


