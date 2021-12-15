<?php
/**
 * Aanvraagdoel
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
 * The version of the OpenAPI document: 0.0.6
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
 * Aanvraagdoel Class Doc Comment
 *
 * @category Class
 * @description English: Request Goal | Waarde | Omschrijving | | --- | --- | | &#x60;onbekend&#x60; | English: Unknown | | &#x60;aankoopNieuweWoning&#x60; | English: New Home Purchase | | &#x60;overbruggingsfinanciering&#x60; | English: Bridge Financing | | &#x60;hypotheekOversluiten&#x60; | English: Refinancing Mortgage | | &#x60;hypotheekOphogen&#x60; | English: Increasing Mortage | | &#x60;hypotheekWijziging&#x60; | English: Changing Mortgage | | &#x60;hypotheekrenteWijzigen&#x60; | English: Change Mortgage Intrest |
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Aanvraagdoel
{
    /**
     * Possible values of this enum
     */
    const ONBEKEND = 'onbekend';

    const AANKOOP_NIEUWE_WONING = 'aankoopNieuweWoning';

    const OVERBRUGGINGSFINANCIERING = 'overbruggingsfinanciering';

    const HYPOTHEEK_OVERSLUITEN = 'hypotheekOversluiten';

    const HYPOTHEEK_OPHOGEN = 'hypotheekOphogen';

    const HYPOTHEEK_WIJZIGING = 'hypotheekWijziging';

    const HYPOTHEEKRENTE_WIJZIGEN = 'hypotheekrenteWijzigen';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONBEKEND,
            self::AANKOOP_NIEUWE_WONING,
            self::OVERBRUGGINGSFINANCIERING,
            self::HYPOTHEEK_OVERSLUITEN,
            self::HYPOTHEEK_OPHOGEN,
            self::HYPOTHEEK_WIJZIGING,
            self::HYPOTHEEKRENTE_WIJZIGEN
        ];
    }
}


