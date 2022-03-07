<?php
/**
 * Notitie
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Copyright 2021 Calcasa B.V.
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
 * The version of the OpenAPI document: 1.1.0
 * Contact: info@calcasa.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Calcasa\Api\Model;
use \Calcasa\Api\ObjectSerializer;

/**
 * Notitie Class Doc Comment
 *
 * @category Class
 * @description | Waarde | Omschrijving | | --- | --- | | &#x60;geen&#x60; | De input was correct. | | &#x60;gecorrigeerd&#x60; | De input was gecorrigeerd. | | &#x60;onbekend&#x60; | De input is onbekend en kon niet gevonden of gecorrigeerd worden. | | &#x60;ontbreekt&#x60; | De input was leeg en is wel nodig voor een succesvolle zoekopdracht. |
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Notitie
{
    /**
     * Possible values of this enum
     */
    const GEEN = 'geen';

    const GECORRIGEERD = 'gecorrigeerd';

    const ONBEKEND = 'onbekend';

    const ONTBREEKT = 'ontbreekt';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GEEN,
            self::GECORRIGEERD,
            self::ONBEKEND,
            self::ONTBREEKT
        ];
    }
}


