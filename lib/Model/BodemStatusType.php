<?php
/**
 * BodemStatusType
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
 * The version of the OpenAPI document: 1.1.4
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
 * BodemStatusType Class Doc Comment
 *
 * @category Class
 * @description | Waarde | Omschrijving | | --- | --- | | &#x60;geenData&#x60; | Er is geen data beschikbaar over deze bodem. | | &#x60;onbekend&#x60; | De status van deze bodem is niet bekend. | | &#x60;nietVervuild&#x60; | De bodem is niet vervuild. | | &#x60;nietErnstig&#x60; | De bodem is niet ernstig vervuild. | | &#x60;potentieelErnstig&#x60; | De bodem is potentieel ernstig veruild. | | &#x60;ernstig&#x60; | De bodem is ernstig veruild. |
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BodemStatusType
{
    /**
     * Possible values of this enum
     */
    const GEEN_DATA = 'geenData';

    const ONBEKEND = 'onbekend';

    const NIET_VERVUILD = 'nietVervuild';

    const NIET_ERNSTIG = 'nietErnstig';

    const POTENTIEEL_ERNSTIG = 'potentieelErnstig';

    const ERNSTIG = 'ernstig';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GEEN_DATA,
            self::ONBEKEND,
            self::NIET_VERVUILD,
            self::NIET_ERNSTIG,
            self::POTENTIEEL_ERNSTIG,
            self::ERNSTIG
        ];
    }
}


