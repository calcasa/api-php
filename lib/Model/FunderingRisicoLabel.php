<?php
/**
 * FunderingRisicoLabel
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
 * Calcasa Public API v0
 *
 * The version of the OpenAPI document: 0.0.5
 * Contact: info@calcasa.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Calcasa\Api\Model;
use \Calcasa\Api\ObjectSerializer;

/**
 * FunderingRisicoLabel Class Doc Comment
 *
 * @category Class
 * @description Indicatie voor een funderingsrisico. | Waarde | Omschrijving | | --- | --- | | &#x60;onbekend&#x60; | Risico klasse onbekend. | | &#x60;laag&#x60; | Laagste risico. | | &#x60;gemiddeld&#x60; | Gemiddeld risico. | | &#x60;hoog&#x60; | Hoogste risico. |
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FunderingRisicoLabel
{
    /**
     * Possible values of this enum
     */
    const ONBEKEND = 'onbekend';

    const LAAG = 'laag';

    const GEMIDDELD = 'gemiddeld';

    const HOOG = 'hoog';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONBEKEND,
            self::LAAG,
            self::GEMIDDELD,
            self::HOOG
        ];
    }
}


