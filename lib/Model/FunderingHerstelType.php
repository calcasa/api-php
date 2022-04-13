<?php
/**
 * FunderingHerstelType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Copyright 2022 Calcasa B.V.
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
 * The version of the OpenAPI document: 1.1.5
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
 * FunderingHerstelType Class Doc Comment
 *
 * @category Class
 * @description Herstel-types voor funderingen. | Waarde | Omschrijving | | --- | --- | | &#x60;onbekendHerstelType&#x60; | Hersteltype is onbekend. | | &#x60;vergunning&#x60; | O.b.v. vergunning. | | &#x60;funderingRapport&#x60; | O.b.v. fundering-rapport. | | &#x60;archiefRapport&#x60; | O.b.v. archief-rapport. | | &#x60;eigenaarBewijs&#x60; | O.b.v. bewijs van eigenaar. |
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FunderingHerstelType
{
    /**
     * Possible values of this enum
     */
    const ONBEKEND_HERSTEL_TYPE = 'onbekendHerstelType';

    const VERGUNNING = 'vergunning';

    const FUNDERING_RAPPORT = 'funderingRapport';

    const ARCHIEF_RAPPORT = 'archiefRapport';

    const EIGENAAR_BEWIJS = 'eigenaarBewijs';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONBEKEND_HERSTEL_TYPE,
            self::VERGUNNING,
            self::FUNDERING_RAPPORT,
            self::ARCHIEF_RAPPORT,
            self::EIGENAAR_BEWIJS
        ];
    }
}


