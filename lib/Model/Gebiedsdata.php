<?php
/**
 * Gebiedsdata
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
 * The version of the OpenAPI document: 1.1.1
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

use \ArrayAccess;
use \Calcasa\Api\ObjectSerializer;

/**
 * Gebiedsdata Class Doc Comment
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Gebiedsdata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Gebiedsdata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'naam' => 'string',
        'gemiddelde_prijs_eengezinswoningen' => 'int',
        'gemiddelde_prijs_meergezinswoningen' => 'int',
        'gemiddelde_vierkantemeter_prijs_eengezinswoningen' => 'int',
        'gemiddelde_vierkantemeter_prijs_meergezinswoningen' => 'int',
        'prijsverandering_afgelopen_jaar' => 'int',
        'prijsverandering_afgelopen3_jaar' => 'int',
        'prijsverandering_afgelopen5_jaar' => 'int',
        'prijsverandering_afgelopen10_jaar' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'naam' => null,
        'gemiddelde_prijs_eengezinswoningen' => 'int32',
        'gemiddelde_prijs_meergezinswoningen' => 'int32',
        'gemiddelde_vierkantemeter_prijs_eengezinswoningen' => 'int32',
        'gemiddelde_vierkantemeter_prijs_meergezinswoningen' => 'int32',
        'prijsverandering_afgelopen_jaar' => 'int32',
        'prijsverandering_afgelopen3_jaar' => 'int32',
        'prijsverandering_afgelopen5_jaar' => 'int32',
        'prijsverandering_afgelopen10_jaar' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'naam' => 'naam',
        'gemiddelde_prijs_eengezinswoningen' => 'gemiddeldePrijsEengezinswoningen',
        'gemiddelde_prijs_meergezinswoningen' => 'gemiddeldePrijsMeergezinswoningen',
        'gemiddelde_vierkantemeter_prijs_eengezinswoningen' => 'gemiddeldeVierkantemeterPrijsEengezinswoningen',
        'gemiddelde_vierkantemeter_prijs_meergezinswoningen' => 'gemiddeldeVierkantemeterPrijsMeergezinswoningen',
        'prijsverandering_afgelopen_jaar' => 'prijsveranderingAfgelopenJaar',
        'prijsverandering_afgelopen3_jaar' => 'prijsveranderingAfgelopen3Jaar',
        'prijsverandering_afgelopen5_jaar' => 'prijsveranderingAfgelopen5Jaar',
        'prijsverandering_afgelopen10_jaar' => 'prijsveranderingAfgelopen10Jaar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'naam' => 'setNaam',
        'gemiddelde_prijs_eengezinswoningen' => 'setGemiddeldePrijsEengezinswoningen',
        'gemiddelde_prijs_meergezinswoningen' => 'setGemiddeldePrijsMeergezinswoningen',
        'gemiddelde_vierkantemeter_prijs_eengezinswoningen' => 'setGemiddeldeVierkantemeterPrijsEengezinswoningen',
        'gemiddelde_vierkantemeter_prijs_meergezinswoningen' => 'setGemiddeldeVierkantemeterPrijsMeergezinswoningen',
        'prijsverandering_afgelopen_jaar' => 'setPrijsveranderingAfgelopenJaar',
        'prijsverandering_afgelopen3_jaar' => 'setPrijsveranderingAfgelopen3Jaar',
        'prijsverandering_afgelopen5_jaar' => 'setPrijsveranderingAfgelopen5Jaar',
        'prijsverandering_afgelopen10_jaar' => 'setPrijsveranderingAfgelopen10Jaar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'naam' => 'getNaam',
        'gemiddelde_prijs_eengezinswoningen' => 'getGemiddeldePrijsEengezinswoningen',
        'gemiddelde_prijs_meergezinswoningen' => 'getGemiddeldePrijsMeergezinswoningen',
        'gemiddelde_vierkantemeter_prijs_eengezinswoningen' => 'getGemiddeldeVierkantemeterPrijsEengezinswoningen',
        'gemiddelde_vierkantemeter_prijs_meergezinswoningen' => 'getGemiddeldeVierkantemeterPrijsMeergezinswoningen',
        'prijsverandering_afgelopen_jaar' => 'getPrijsveranderingAfgelopenJaar',
        'prijsverandering_afgelopen3_jaar' => 'getPrijsveranderingAfgelopen3Jaar',
        'prijsverandering_afgelopen5_jaar' => 'getPrijsveranderingAfgelopen5Jaar',
        'prijsverandering_afgelopen10_jaar' => 'getPrijsveranderingAfgelopen10Jaar'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['naam'] = $data['naam'] ?? null;
        $this->container['gemiddelde_prijs_eengezinswoningen'] = $data['gemiddelde_prijs_eengezinswoningen'] ?? null;
        $this->container['gemiddelde_prijs_meergezinswoningen'] = $data['gemiddelde_prijs_meergezinswoningen'] ?? null;
        $this->container['gemiddelde_vierkantemeter_prijs_eengezinswoningen'] = $data['gemiddelde_vierkantemeter_prijs_eengezinswoningen'] ?? null;
        $this->container['gemiddelde_vierkantemeter_prijs_meergezinswoningen'] = $data['gemiddelde_vierkantemeter_prijs_meergezinswoningen'] ?? null;
        $this->container['prijsverandering_afgelopen_jaar'] = $data['prijsverandering_afgelopen_jaar'] ?? null;
        $this->container['prijsverandering_afgelopen3_jaar'] = $data['prijsverandering_afgelopen3_jaar'] ?? null;
        $this->container['prijsverandering_afgelopen5_jaar'] = $data['prijsverandering_afgelopen5_jaar'] ?? null;
        $this->container['prijsverandering_afgelopen10_jaar'] = $data['prijsverandering_afgelopen10_jaar'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets naam
     *
     * @return string|null
     */
    public function getNaam()
    {
        return $this->container['naam'];
    }

    /**
     * Sets naam
     *
     * @param string|null $naam naam
     *
     * @return self
     */
    public function setNaam($naam)
    {
        $this->container['naam'] = $naam;

        return $this;
    }

    /**
     * Gets gemiddelde_prijs_eengezinswoningen
     *
     * @return int|null
     */
    public function getGemiddeldePrijsEengezinswoningen()
    {
        return $this->container['gemiddelde_prijs_eengezinswoningen'];
    }

    /**
     * Sets gemiddelde_prijs_eengezinswoningen
     *
     * @param int|null $gemiddelde_prijs_eengezinswoningen In hele euros.
     *
     * @return self
     */
    public function setGemiddeldePrijsEengezinswoningen($gemiddelde_prijs_eengezinswoningen)
    {
        $this->container['gemiddelde_prijs_eengezinswoningen'] = $gemiddelde_prijs_eengezinswoningen;

        return $this;
    }

    /**
     * Gets gemiddelde_prijs_meergezinswoningen
     *
     * @return int|null
     */
    public function getGemiddeldePrijsMeergezinswoningen()
    {
        return $this->container['gemiddelde_prijs_meergezinswoningen'];
    }

    /**
     * Sets gemiddelde_prijs_meergezinswoningen
     *
     * @param int|null $gemiddelde_prijs_meergezinswoningen In hele euros.
     *
     * @return self
     */
    public function setGemiddeldePrijsMeergezinswoningen($gemiddelde_prijs_meergezinswoningen)
    {
        $this->container['gemiddelde_prijs_meergezinswoningen'] = $gemiddelde_prijs_meergezinswoningen;

        return $this;
    }

    /**
     * Gets gemiddelde_vierkantemeter_prijs_eengezinswoningen
     *
     * @return int|null
     */
    public function getGemiddeldeVierkantemeterPrijsEengezinswoningen()
    {
        return $this->container['gemiddelde_vierkantemeter_prijs_eengezinswoningen'];
    }

    /**
     * Sets gemiddelde_vierkantemeter_prijs_eengezinswoningen
     *
     * @param int|null $gemiddelde_vierkantemeter_prijs_eengezinswoningen In hele euros per vierkante meter.
     *
     * @return self
     */
    public function setGemiddeldeVierkantemeterPrijsEengezinswoningen($gemiddelde_vierkantemeter_prijs_eengezinswoningen)
    {
        $this->container['gemiddelde_vierkantemeter_prijs_eengezinswoningen'] = $gemiddelde_vierkantemeter_prijs_eengezinswoningen;

        return $this;
    }

    /**
     * Gets gemiddelde_vierkantemeter_prijs_meergezinswoningen
     *
     * @return int|null
     */
    public function getGemiddeldeVierkantemeterPrijsMeergezinswoningen()
    {
        return $this->container['gemiddelde_vierkantemeter_prijs_meergezinswoningen'];
    }

    /**
     * Sets gemiddelde_vierkantemeter_prijs_meergezinswoningen
     *
     * @param int|null $gemiddelde_vierkantemeter_prijs_meergezinswoningen In hele euros per vierkante meter.
     *
     * @return self
     */
    public function setGemiddeldeVierkantemeterPrijsMeergezinswoningen($gemiddelde_vierkantemeter_prijs_meergezinswoningen)
    {
        $this->container['gemiddelde_vierkantemeter_prijs_meergezinswoningen'] = $gemiddelde_vierkantemeter_prijs_meergezinswoningen;

        return $this;
    }

    /**
     * Gets prijsverandering_afgelopen_jaar
     *
     * @return int|null
     */
    public function getPrijsveranderingAfgelopenJaar()
    {
        return $this->container['prijsverandering_afgelopen_jaar'];
    }

    /**
     * Sets prijsverandering_afgelopen_jaar
     *
     * @param int|null $prijsverandering_afgelopen_jaar In hele procenten.
     *
     * @return self
     */
    public function setPrijsveranderingAfgelopenJaar($prijsverandering_afgelopen_jaar)
    {
        $this->container['prijsverandering_afgelopen_jaar'] = $prijsverandering_afgelopen_jaar;

        return $this;
    }

    /**
     * Gets prijsverandering_afgelopen3_jaar
     *
     * @return int|null
     */
    public function getPrijsveranderingAfgelopen3Jaar()
    {
        return $this->container['prijsverandering_afgelopen3_jaar'];
    }

    /**
     * Sets prijsverandering_afgelopen3_jaar
     *
     * @param int|null $prijsverandering_afgelopen3_jaar In hele procenten.
     *
     * @return self
     */
    public function setPrijsveranderingAfgelopen3Jaar($prijsverandering_afgelopen3_jaar)
    {
        $this->container['prijsverandering_afgelopen3_jaar'] = $prijsverandering_afgelopen3_jaar;

        return $this;
    }

    /**
     * Gets prijsverandering_afgelopen5_jaar
     *
     * @return int|null
     */
    public function getPrijsveranderingAfgelopen5Jaar()
    {
        return $this->container['prijsverandering_afgelopen5_jaar'];
    }

    /**
     * Sets prijsverandering_afgelopen5_jaar
     *
     * @param int|null $prijsverandering_afgelopen5_jaar In hele procenten.
     *
     * @return self
     */
    public function setPrijsveranderingAfgelopen5Jaar($prijsverandering_afgelopen5_jaar)
    {
        $this->container['prijsverandering_afgelopen5_jaar'] = $prijsverandering_afgelopen5_jaar;

        return $this;
    }

    /**
     * Gets prijsverandering_afgelopen10_jaar
     *
     * @return int|null
     */
    public function getPrijsveranderingAfgelopen10Jaar()
    {
        return $this->container['prijsverandering_afgelopen10_jaar'];
    }

    /**
     * Sets prijsverandering_afgelopen10_jaar
     *
     * @param int|null $prijsverandering_afgelopen10_jaar In hele procenten.
     *
     * @return self
     */
    public function setPrijsveranderingAfgelopen10Jaar($prijsverandering_afgelopen10_jaar)
    {
        $this->container['prijsverandering_afgelopen10_jaar'] = $prijsverandering_afgelopen10_jaar;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


