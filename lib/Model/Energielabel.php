<?php
/**
 * Energielabel
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
 * The version of the OpenAPI document: 1.0.2
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
 * Energielabel Class Doc Comment
 *
 * @category Class
 * @description | Waarde | Omschrijving | | --- | --- | | &#x60;onbekend&#x60; |  | | &#x60;g&#x60; |  | | &#x60;f&#x60; |  | | &#x60;e&#x60; |  | | &#x60;d&#x60; |  | | &#x60;c&#x60; |  | | &#x60;b&#x60; |  | | &#x60;a&#x60; |  | | &#x60;a1&#x60; | A+ | | &#x60;a2&#x60; | A++ | | &#x60;a3&#x60; | A+++ | | &#x60;a4&#x60; | A++++ |
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Energielabel
{
    /**
     * Possible values of this enum
     */
    const ONBEKEND = 'onbekend';

    const G = 'g';

    const F = 'f';

    const E = 'e';

    const D = 'd';

    const C = 'c';

    const B = 'b';

    const A = 'a';

    const A1 = 'a1';

    const A2 = 'a2';

    const A3 = 'a3';

    const A4 = 'a4';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONBEKEND,
            self::G,
            self::F,
            self::E,
            self::D,
            self::C,
            self::B,
            self::A,
            self::A1,
            self::A2,
            self::A3,
            self::A4
        ];
    }
}


