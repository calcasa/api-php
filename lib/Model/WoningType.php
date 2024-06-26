<?php
/**
 * WoningType
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
 * The version of the OpenAPI document: 1.3.1
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
 * WoningType Class Doc Comment
 *
 * @category Class
 * @description Woningtypes zoals gedefinieerd in het Calcasa-model. | Waarde | Omschrijving | | --- | --- | | &#x60;onbekend&#x60; | Onbekend woning type. | | &#x60;vrijstaand&#x60; | Vrijstaande woning. | | &#x60;halfVrijstaand&#x60; | Half-vrijstaande woning / twee-onder-een-kap.&lt;br&gt;            Heel speciaal type. | | &#x60;hoekwoning&#x60; | Hoekwoning. | | &#x60;tussenwoning&#x60; | Tussenwoning. | | &#x60;galerijflat&#x60; | Galerijflat. | | &#x60;portiekflat&#x60; | Portiekflat. | | &#x60;maisonnette&#x60; | Maisonette. | | &#x60;bovenwoning&#x60; | Bovenwoning. | | &#x60;benedenwoning&#x60; | Benedenwoning. |
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WoningType
{
    /**
     * Possible values of this enum
     */
    public const ONBEKEND = 'onbekend';

    public const VRIJSTAAND = 'vrijstaand';

    public const HALF_VRIJSTAAND = 'halfVrijstaand';

    public const HOEKWONING = 'hoekwoning';

    public const TUSSENWONING = 'tussenwoning';

    public const GALERIJFLAT = 'galerijflat';

    public const PORTIEKFLAT = 'portiekflat';

    public const MAISONNETTE = 'maisonnette';

    public const BOVENWONING = 'bovenwoning';

    public const BENEDENWONING = 'benedenwoning';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONBEKEND,
            self::VRIJSTAAND,
            self::HALF_VRIJSTAAND,
            self::HOEKWONING,
            self::TUSSENWONING,
            self::GALERIJFLAT,
            self::PORTIEKFLAT,
            self::MAISONNETTE,
            self::BOVENWONING,
            self::BENEDENWONING
        ];
    }
}


