<?php
/**
 * WaarderingOntwikkeling
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
 * Calcasa Public API
 *
 * The version of the OpenAPI document: v0
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

use \ArrayAccess;
use \Calcasa\Api\ObjectSerializer;

/**
 * WaarderingOntwikkeling Class Doc Comment
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WaarderingOntwikkeling implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WaarderingOntwikkeling';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'object_prijs_ontwikkeling' => '\Calcasa\Api\V0\Model\\Calcasa\Api\Model\WaarderingOntwikkelingKwartaal[]',
        'buurt_prijs_ontwikkeling' => '\Calcasa\Api\V0\Model\\Calcasa\Api\Model\WaarderingOntwikkelingKwartaal[]',
        'wijk_prijs_ontwikkeling' => '\Calcasa\Api\V0\Model\\Calcasa\Api\Model\WaarderingOntwikkelingKwartaal[]',
        'gemeente_prijs_ontwikkeling' => '\Calcasa\Api\V0\Model\\Calcasa\Api\Model\WaarderingOntwikkelingKwartaal[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'object_prijs_ontwikkeling' => null,
        'buurt_prijs_ontwikkeling' => null,
        'wijk_prijs_ontwikkeling' => null,
        'gemeente_prijs_ontwikkeling' => null
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
        'id' => 'id',
        'object_prijs_ontwikkeling' => 'objectPrijsOntwikkeling',
        'buurt_prijs_ontwikkeling' => 'buurtPrijsOntwikkeling',
        'wijk_prijs_ontwikkeling' => 'wijkPrijsOntwikkeling',
        'gemeente_prijs_ontwikkeling' => 'gemeentePrijsOntwikkeling'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'object_prijs_ontwikkeling' => 'setObjectPrijsOntwikkeling',
        'buurt_prijs_ontwikkeling' => 'setBuurtPrijsOntwikkeling',
        'wijk_prijs_ontwikkeling' => 'setWijkPrijsOntwikkeling',
        'gemeente_prijs_ontwikkeling' => 'setGemeentePrijsOntwikkeling'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'object_prijs_ontwikkeling' => 'getObjectPrijsOntwikkeling',
        'buurt_prijs_ontwikkeling' => 'getBuurtPrijsOntwikkeling',
        'wijk_prijs_ontwikkeling' => 'getWijkPrijsOntwikkeling',
        'gemeente_prijs_ontwikkeling' => 'getGemeentePrijsOntwikkeling'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['object_prijs_ontwikkeling'] = $data['object_prijs_ontwikkeling'] ?? null;
        $this->container['buurt_prijs_ontwikkeling'] = $data['buurt_prijs_ontwikkeling'] ?? null;
        $this->container['wijk_prijs_ontwikkeling'] = $data['wijk_prijs_ontwikkeling'] ?? null;
        $this->container['gemeente_prijs_ontwikkeling'] = $data['gemeente_prijs_ontwikkeling'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Id van de waardering of tracking Id.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object_prijs_ontwikkeling
     *
     * @return \Calcasa\Api\Model\WaarderingOntwikkelingKwartaal[]|null
     */
    public function getObjectPrijsOntwikkeling()
    {
        return $this->container['object_prijs_ontwikkeling'];
    }

    /**
     * Sets object_prijs_ontwikkeling
     *
     * @param \Calcasa\Api\Model\WaarderingOntwikkelingKwartaal[]|null $object_prijs_ontwikkeling object_prijs_ontwikkeling
     *
     * @return self
     */
    public function setObjectPrijsOntwikkeling($object_prijs_ontwikkeling)
    {
        $this->container['object_prijs_ontwikkeling'] = $object_prijs_ontwikkeling;

        return $this;
    }

    /**
     * Gets buurt_prijs_ontwikkeling
     *
     * @return \Calcasa\Api\Model\WaarderingOntwikkelingKwartaal[]|null
     */
    public function getBuurtPrijsOntwikkeling()
    {
        return $this->container['buurt_prijs_ontwikkeling'];
    }

    /**
     * Sets buurt_prijs_ontwikkeling
     *
     * @param \Calcasa\Api\Model\WaarderingOntwikkelingKwartaal[]|null $buurt_prijs_ontwikkeling buurt_prijs_ontwikkeling
     *
     * @return self
     */
    public function setBuurtPrijsOntwikkeling($buurt_prijs_ontwikkeling)
    {
        $this->container['buurt_prijs_ontwikkeling'] = $buurt_prijs_ontwikkeling;

        return $this;
    }

    /**
     * Gets wijk_prijs_ontwikkeling
     *
     * @return \Calcasa\Api\Model\WaarderingOntwikkelingKwartaal[]|null
     */
    public function getWijkPrijsOntwikkeling()
    {
        return $this->container['wijk_prijs_ontwikkeling'];
    }

    /**
     * Sets wijk_prijs_ontwikkeling
     *
     * @param \Calcasa\Api\Model\WaarderingOntwikkelingKwartaal[]|null $wijk_prijs_ontwikkeling wijk_prijs_ontwikkeling
     *
     * @return self
     */
    public function setWijkPrijsOntwikkeling($wijk_prijs_ontwikkeling)
    {
        $this->container['wijk_prijs_ontwikkeling'] = $wijk_prijs_ontwikkeling;

        return $this;
    }

    /**
     * Gets gemeente_prijs_ontwikkeling
     *
     * @return \Calcasa\Api\Model\WaarderingOntwikkelingKwartaal[]|null
     */
    public function getGemeentePrijsOntwikkeling()
    {
        return $this->container['gemeente_prijs_ontwikkeling'];
    }

    /**
     * Sets gemeente_prijs_ontwikkeling
     *
     * @param \Calcasa\Api\Model\WaarderingOntwikkelingKwartaal[]|null $gemeente_prijs_ontwikkeling gemeente_prijs_ontwikkeling
     *
     * @return self
     */
    public function setGemeentePrijsOntwikkeling($gemeente_prijs_ontwikkeling)
    {
        $this->container['gemeente_prijs_ontwikkeling'] = $gemeente_prijs_ontwikkeling;

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


