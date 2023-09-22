<?php
/**
 * Gebiedsdata
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

use \ArrayAccess;
use \Calcasa\Api\ObjectSerializer;

/**
 * Gebiedsdata Class Doc Comment
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
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
        'gemiddeldePrijsEengezinswoningen' => 'int',
        'gemiddeldePrijsMeergezinswoningen' => 'int',
        'gemiddeldeVierkantemeterPrijsEengezinswoningen' => 'int',
        'gemiddeldeVierkantemeterPrijsMeergezinswoningen' => 'int',
        'prijsveranderingAfgelopenJaar' => 'int',
        'prijsveranderingAfgelopen3Jaar' => 'int',
        'prijsveranderingAfgelopen5Jaar' => 'int',
        'prijsveranderingAfgelopen10Jaar' => 'int'
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
        'gemiddeldePrijsEengezinswoningen' => 'int32',
        'gemiddeldePrijsMeergezinswoningen' => 'int32',
        'gemiddeldeVierkantemeterPrijsEengezinswoningen' => 'int32',
        'gemiddeldeVierkantemeterPrijsMeergezinswoningen' => 'int32',
        'prijsveranderingAfgelopenJaar' => 'int32',
        'prijsveranderingAfgelopen3Jaar' => 'int32',
        'prijsveranderingAfgelopen5Jaar' => 'int32',
        'prijsveranderingAfgelopen10Jaar' => 'int32'
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
        'gemiddeldePrijsEengezinswoningen' => 'gemiddeldePrijsEengezinswoningen',
        'gemiddeldePrijsMeergezinswoningen' => 'gemiddeldePrijsMeergezinswoningen',
        'gemiddeldeVierkantemeterPrijsEengezinswoningen' => 'gemiddeldeVierkantemeterPrijsEengezinswoningen',
        'gemiddeldeVierkantemeterPrijsMeergezinswoningen' => 'gemiddeldeVierkantemeterPrijsMeergezinswoningen',
        'prijsveranderingAfgelopenJaar' => 'prijsveranderingAfgelopenJaar',
        'prijsveranderingAfgelopen3Jaar' => 'prijsveranderingAfgelopen3Jaar',
        'prijsveranderingAfgelopen5Jaar' => 'prijsveranderingAfgelopen5Jaar',
        'prijsveranderingAfgelopen10Jaar' => 'prijsveranderingAfgelopen10Jaar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'naam' => 'setNaam',
        'gemiddeldePrijsEengezinswoningen' => 'setGemiddeldePrijsEengezinswoningen',
        'gemiddeldePrijsMeergezinswoningen' => 'setGemiddeldePrijsMeergezinswoningen',
        'gemiddeldeVierkantemeterPrijsEengezinswoningen' => 'setGemiddeldeVierkantemeterPrijsEengezinswoningen',
        'gemiddeldeVierkantemeterPrijsMeergezinswoningen' => 'setGemiddeldeVierkantemeterPrijsMeergezinswoningen',
        'prijsveranderingAfgelopenJaar' => 'setPrijsveranderingAfgelopenJaar',
        'prijsveranderingAfgelopen3Jaar' => 'setPrijsveranderingAfgelopen3Jaar',
        'prijsveranderingAfgelopen5Jaar' => 'setPrijsveranderingAfgelopen5Jaar',
        'prijsveranderingAfgelopen10Jaar' => 'setPrijsveranderingAfgelopen10Jaar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'naam' => 'getNaam',
        'gemiddeldePrijsEengezinswoningen' => 'getGemiddeldePrijsEengezinswoningen',
        'gemiddeldePrijsMeergezinswoningen' => 'getGemiddeldePrijsMeergezinswoningen',
        'gemiddeldeVierkantemeterPrijsEengezinswoningen' => 'getGemiddeldeVierkantemeterPrijsEengezinswoningen',
        'gemiddeldeVierkantemeterPrijsMeergezinswoningen' => 'getGemiddeldeVierkantemeterPrijsMeergezinswoningen',
        'prijsveranderingAfgelopenJaar' => 'getPrijsveranderingAfgelopenJaar',
        'prijsveranderingAfgelopen3Jaar' => 'getPrijsveranderingAfgelopen3Jaar',
        'prijsveranderingAfgelopen5Jaar' => 'getPrijsveranderingAfgelopen5Jaar',
        'prijsveranderingAfgelopen10Jaar' => 'getPrijsveranderingAfgelopen10Jaar'
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
        $this->container['gemiddeldePrijsEengezinswoningen'] = $data['gemiddeldePrijsEengezinswoningen'] ?? null;
        $this->container['gemiddeldePrijsMeergezinswoningen'] = $data['gemiddeldePrijsMeergezinswoningen'] ?? null;
        $this->container['gemiddeldeVierkantemeterPrijsEengezinswoningen'] = $data['gemiddeldeVierkantemeterPrijsEengezinswoningen'] ?? null;
        $this->container['gemiddeldeVierkantemeterPrijsMeergezinswoningen'] = $data['gemiddeldeVierkantemeterPrijsMeergezinswoningen'] ?? null;
        $this->container['prijsveranderingAfgelopenJaar'] = $data['prijsveranderingAfgelopenJaar'] ?? null;
        $this->container['prijsveranderingAfgelopen3Jaar'] = $data['prijsveranderingAfgelopen3Jaar'] ?? null;
        $this->container['prijsveranderingAfgelopen5Jaar'] = $data['prijsveranderingAfgelopen5Jaar'] ?? null;
        $this->container['prijsveranderingAfgelopen10Jaar'] = $data['prijsveranderingAfgelopen10Jaar'] ?? null;
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
     * Gets gemiddeldePrijsEengezinswoningen
     *
     * @return int|null
     */
    public function getGemiddeldePrijsEengezinswoningen()
    {
        return $this->container['gemiddeldePrijsEengezinswoningen'];
    }

    /**
     * Sets gemiddeldePrijsEengezinswoningen
     *
     * @param int|null $gemiddeldePrijsEengezinswoningen In hele euros.
     *
     * @return self
     */
    public function setGemiddeldePrijsEengezinswoningen($gemiddeldePrijsEengezinswoningen)
    {
        $this->container['gemiddeldePrijsEengezinswoningen'] = $gemiddeldePrijsEengezinswoningen;

        return $this;
    }

    /**
     * Gets gemiddeldePrijsMeergezinswoningen
     *
     * @return int|null
     */
    public function getGemiddeldePrijsMeergezinswoningen()
    {
        return $this->container['gemiddeldePrijsMeergezinswoningen'];
    }

    /**
     * Sets gemiddeldePrijsMeergezinswoningen
     *
     * @param int|null $gemiddeldePrijsMeergezinswoningen In hele euros.
     *
     * @return self
     */
    public function setGemiddeldePrijsMeergezinswoningen($gemiddeldePrijsMeergezinswoningen)
    {
        $this->container['gemiddeldePrijsMeergezinswoningen'] = $gemiddeldePrijsMeergezinswoningen;

        return $this;
    }

    /**
     * Gets gemiddeldeVierkantemeterPrijsEengezinswoningen
     *
     * @return int|null
     */
    public function getGemiddeldeVierkantemeterPrijsEengezinswoningen()
    {
        return $this->container['gemiddeldeVierkantemeterPrijsEengezinswoningen'];
    }

    /**
     * Sets gemiddeldeVierkantemeterPrijsEengezinswoningen
     *
     * @param int|null $gemiddeldeVierkantemeterPrijsEengezinswoningen In hele euros per vierkante meter.
     *
     * @return self
     */
    public function setGemiddeldeVierkantemeterPrijsEengezinswoningen($gemiddeldeVierkantemeterPrijsEengezinswoningen)
    {
        $this->container['gemiddeldeVierkantemeterPrijsEengezinswoningen'] = $gemiddeldeVierkantemeterPrijsEengezinswoningen;

        return $this;
    }

    /**
     * Gets gemiddeldeVierkantemeterPrijsMeergezinswoningen
     *
     * @return int|null
     */
    public function getGemiddeldeVierkantemeterPrijsMeergezinswoningen()
    {
        return $this->container['gemiddeldeVierkantemeterPrijsMeergezinswoningen'];
    }

    /**
     * Sets gemiddeldeVierkantemeterPrijsMeergezinswoningen
     *
     * @param int|null $gemiddeldeVierkantemeterPrijsMeergezinswoningen In hele euros per vierkante meter.
     *
     * @return self
     */
    public function setGemiddeldeVierkantemeterPrijsMeergezinswoningen($gemiddeldeVierkantemeterPrijsMeergezinswoningen)
    {
        $this->container['gemiddeldeVierkantemeterPrijsMeergezinswoningen'] = $gemiddeldeVierkantemeterPrijsMeergezinswoningen;

        return $this;
    }

    /**
     * Gets prijsveranderingAfgelopenJaar
     *
     * @return int|null
     */
    public function getPrijsveranderingAfgelopenJaar()
    {
        return $this->container['prijsveranderingAfgelopenJaar'];
    }

    /**
     * Sets prijsveranderingAfgelopenJaar
     *
     * @param int|null $prijsveranderingAfgelopenJaar In hele procenten.
     *
     * @return self
     */
    public function setPrijsveranderingAfgelopenJaar($prijsveranderingAfgelopenJaar)
    {
        $this->container['prijsveranderingAfgelopenJaar'] = $prijsveranderingAfgelopenJaar;

        return $this;
    }

    /**
     * Gets prijsveranderingAfgelopen3Jaar
     *
     * @return int|null
     */
    public function getPrijsveranderingAfgelopen3Jaar()
    {
        return $this->container['prijsveranderingAfgelopen3Jaar'];
    }

    /**
     * Sets prijsveranderingAfgelopen3Jaar
     *
     * @param int|null $prijsveranderingAfgelopen3Jaar In hele procenten.
     *
     * @return self
     */
    public function setPrijsveranderingAfgelopen3Jaar($prijsveranderingAfgelopen3Jaar)
    {
        $this->container['prijsveranderingAfgelopen3Jaar'] = $prijsveranderingAfgelopen3Jaar;

        return $this;
    }

    /**
     * Gets prijsveranderingAfgelopen5Jaar
     *
     * @return int|null
     */
    public function getPrijsveranderingAfgelopen5Jaar()
    {
        return $this->container['prijsveranderingAfgelopen5Jaar'];
    }

    /**
     * Sets prijsveranderingAfgelopen5Jaar
     *
     * @param int|null $prijsveranderingAfgelopen5Jaar In hele procenten.
     *
     * @return self
     */
    public function setPrijsveranderingAfgelopen5Jaar($prijsveranderingAfgelopen5Jaar)
    {
        $this->container['prijsveranderingAfgelopen5Jaar'] = $prijsveranderingAfgelopen5Jaar;

        return $this;
    }

    /**
     * Gets prijsveranderingAfgelopen10Jaar
     *
     * @return int|null
     */
    public function getPrijsveranderingAfgelopen10Jaar()
    {
        return $this->container['prijsveranderingAfgelopen10Jaar'];
    }

    /**
     * Sets prijsveranderingAfgelopen10Jaar
     *
     * @param int|null $prijsveranderingAfgelopen10Jaar In hele procenten.
     *
     * @return self
     */
    public function setPrijsveranderingAfgelopen10Jaar($prijsveranderingAfgelopen10Jaar)
    {
        $this->container['prijsveranderingAfgelopen10Jaar'] = $prijsveranderingAfgelopen10Jaar;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


