<?php
/**
 * WaarderingModel
 *
 * PHP version 7.4
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
 * The version of the OpenAPI document: 1.1.7
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
 * WaarderingModel Class Doc Comment
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WaarderingModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Waardering_model';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marktwaarde' => 'int',
        'marktwaardeOndergrens' => 'int',
        'marktwaardeBovengrens' => 'int',
        'confidenceLevel' => 'float',
        'waardebepalingsdatum' => '\DateTime',
        'executiewaarde' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marktwaarde' => 'int32',
        'marktwaardeOndergrens' => 'int32',
        'marktwaardeBovengrens' => 'int32',
        'confidenceLevel' => 'float',
        'waardebepalingsdatum' => 'date-time',
        'executiewaarde' => 'int32'
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
        'marktwaarde' => 'marktwaarde',
        'marktwaardeOndergrens' => 'marktwaardeOndergrens',
        'marktwaardeBovengrens' => 'marktwaardeBovengrens',
        'confidenceLevel' => 'confidenceLevel',
        'waardebepalingsdatum' => 'waardebepalingsdatum',
        'executiewaarde' => 'executiewaarde'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marktwaarde' => 'setMarktwaarde',
        'marktwaardeOndergrens' => 'setMarktwaardeOndergrens',
        'marktwaardeBovengrens' => 'setMarktwaardeBovengrens',
        'confidenceLevel' => 'setConfidenceLevel',
        'waardebepalingsdatum' => 'setWaardebepalingsdatum',
        'executiewaarde' => 'setExecutiewaarde'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marktwaarde' => 'getMarktwaarde',
        'marktwaardeOndergrens' => 'getMarktwaardeOndergrens',
        'marktwaardeBovengrens' => 'getMarktwaardeBovengrens',
        'confidenceLevel' => 'getConfidenceLevel',
        'waardebepalingsdatum' => 'getWaardebepalingsdatum',
        'executiewaarde' => 'getExecutiewaarde'
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
        $this->container['marktwaarde'] = $data['marktwaarde'] ?? null;
        $this->container['marktwaardeOndergrens'] = $data['marktwaardeOndergrens'] ?? null;
        $this->container['marktwaardeBovengrens'] = $data['marktwaardeBovengrens'] ?? null;
        $this->container['confidenceLevel'] = $data['confidenceLevel'] ?? null;
        $this->container['waardebepalingsdatum'] = $data['waardebepalingsdatum'] ?? null;
        $this->container['executiewaarde'] = $data['executiewaarde'] ?? null;
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
     * Gets marktwaarde
     *
     * @return int|null
     */
    public function getMarktwaarde()
    {
        return $this->container['marktwaarde'];
    }

    /**
     * Sets marktwaarde
     *
     * @param int|null $marktwaarde In hele euros.
     *
     * @return self
     */
    public function setMarktwaarde($marktwaarde)
    {
        $this->container['marktwaarde'] = $marktwaarde;

        return $this;
    }

    /**
     * Gets marktwaardeOndergrens
     *
     * @return int|null
     */
    public function getMarktwaardeOndergrens()
    {
        return $this->container['marktwaardeOndergrens'];
    }

    /**
     * Sets marktwaardeOndergrens
     *
     * @param int|null $marktwaardeOndergrens In hele euros.
     *
     * @return self
     */
    public function setMarktwaardeOndergrens($marktwaardeOndergrens)
    {
        $this->container['marktwaardeOndergrens'] = $marktwaardeOndergrens;

        return $this;
    }

    /**
     * Gets marktwaardeBovengrens
     *
     * @return int|null
     */
    public function getMarktwaardeBovengrens()
    {
        return $this->container['marktwaardeBovengrens'];
    }

    /**
     * Sets marktwaardeBovengrens
     *
     * @param int|null $marktwaardeBovengrens In hele euros.
     *
     * @return self
     */
    public function setMarktwaardeBovengrens($marktwaardeBovengrens)
    {
        $this->container['marktwaardeBovengrens'] = $marktwaardeBovengrens;

        return $this;
    }

    /**
     * Gets confidenceLevel
     *
     * @return float|null
     */
    public function getConfidenceLevel()
    {
        return $this->container['confidenceLevel'];
    }

    /**
     * Sets confidenceLevel
     *
     * @param float|null $confidenceLevel Op een schaal van 0 tot 7.
     *
     * @return self
     */
    public function setConfidenceLevel($confidenceLevel)
    {
        $this->container['confidenceLevel'] = $confidenceLevel;

        return $this;
    }

    /**
     * Gets waardebepalingsdatum
     *
     * @return \DateTime|null
     */
    public function getWaardebepalingsdatum()
    {
        return $this->container['waardebepalingsdatum'];
    }

    /**
     * Sets waardebepalingsdatum
     *
     * @param \DateTime|null $waardebepalingsdatum In UTC.
     *
     * @return self
     */
    public function setWaardebepalingsdatum($waardebepalingsdatum)
    {
        $this->container['waardebepalingsdatum'] = $waardebepalingsdatum;

        return $this;
    }

    /**
     * Gets executiewaarde
     *
     * @return int|null
     */
    public function getExecutiewaarde()
    {
        return $this->container['executiewaarde'];
    }

    /**
     * Sets executiewaarde
     *
     * @param int|null $executiewaarde In hele euros.
     *
     * @return self
     */
    public function setExecutiewaarde($executiewaarde)
    {
        $this->container['executiewaarde'] = $executiewaarde;

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


