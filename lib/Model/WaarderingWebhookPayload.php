<?php
/**
 * WaarderingWebhookPayload
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

use \ArrayAccess;
use \Calcasa\Api\ObjectSerializer;

/**
 * WaarderingWebhookPayload Class Doc Comment
 *
 * @category Class
 * @description De payload van de webhooks voor de waarderingen.
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WaarderingWebhookPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WaarderingWebhookPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'callback_name' => 'string',
        'event_id' => 'string',
        'waardering_id' => 'string',
        'old_status' => '\Calcasa\Api\V0\Model\WaarderingStatus',
        'new_status' => '\Calcasa\Api\V0\Model\WaarderingStatus',
        'timestamp' => '\DateTime',
        'is_test' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'callback_name' => null,
        'event_id' => 'uuid',
        'waardering_id' => 'uuid',
        'old_status' => null,
        'new_status' => null,
        'timestamp' => 'date-time',
        'is_test' => null
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
        'callback_name' => 'callbackName',
        'event_id' => 'eventId',
        'waardering_id' => 'waarderingId',
        'old_status' => 'oldStatus',
        'new_status' => 'newStatus',
        'timestamp' => 'timestamp',
        'is_test' => 'isTest'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callback_name' => 'setCallbackName',
        'event_id' => 'setEventId',
        'waardering_id' => 'setWaarderingId',
        'old_status' => 'setOldStatus',
        'new_status' => 'setNewStatus',
        'timestamp' => 'setTimestamp',
        'is_test' => 'setIsTest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callback_name' => 'getCallbackName',
        'event_id' => 'getEventId',
        'waardering_id' => 'getWaarderingId',
        'old_status' => 'getOldStatus',
        'new_status' => 'getNewStatus',
        'timestamp' => 'getTimestamp',
        'is_test' => 'getIsTest'
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
        $this->container['callback_name'] = $data['callback_name'] ?? null;
        $this->container['event_id'] = $data['event_id'] ?? null;
        $this->container['waardering_id'] = $data['waardering_id'] ?? null;
        $this->container['old_status'] = $data['old_status'] ?? null;
        $this->container['new_status'] = $data['new_status'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['is_test'] = $data['is_test'] ?? null;
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
     * Gets callback_name
     *
     * @return string|null
     */
    public function getCallbackName()
    {
        return $this->container['callback_name'];
    }

    /**
     * Sets callback_name
     *
     * @param string|null $callback_name callback_name
     *
     * @return self
     */
    public function setCallbackName($callback_name)
    {
        $this->container['callback_name'] = $callback_name;

        return $this;
    }

    /**
     * Gets event_id
     *
     * @return string|null
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param string|null $event_id Uniek Id voor deze callback.
     *
     * @return self
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets waardering_id
     *
     * @return string|null
     */
    public function getWaarderingId()
    {
        return $this->container['waardering_id'];
    }

    /**
     * Sets waardering_id
     *
     * @param string|null $waardering_id Het Id van de waardering waarop deze callback betrekking heeft.
     *
     * @return self
     */
    public function setWaarderingId($waardering_id)
    {
        $this->container['waardering_id'] = $waardering_id;

        return $this;
    }

    /**
     * Gets old_status
     *
     * @return WaarderingStatus|null
     */
    public function getOldStatus()
    {
        return $this->container['old_status'];
    }

    /**
     * Sets old_status
     *
     * @param WaarderingStatus|null $old_status De oude status van de waardering. | Waarde | Omschrijving | | --- | --- | | `onbekend` | Status onbekend. | | `initialiseren` | Deze waardering is geinitialiseerd maar moet nog bevestigd worden. | | `open` | Deze waardering is bevestigd maar moet nog uitgevoerd worden. | | `voltooid` | Deze waardering is voltooid. | | `opgewaardeerd` | Deze waardering is geupgrade naar een ander waardering type. | | `ongeldig` | Deze waardering is niet geldig, bijvoorbeeld omdat hij niet door de business rules is gekomen. | | `verlopen` | Deze waardering is verlopen omdat hij niet op tijd bevestigd is. | | `error` | Er is iets mis gegaan voor deze waardering. |
     *
     * @return self
     */
    public function setOldStatus($old_status)
    {
        $this->container['old_status'] = $old_status;

        return $this;
    }

    /**
     * Gets new_status
     *
     * @return WaarderingStatus|null
     */
    public function getNewStatus()
    {
        return $this->container['new_status'];
    }

    /**
     * Sets new_status
     *
     * @param WaarderingStatus|null $new_status De nieuwe status van de waardering. | Waarde | Omschrijving | | --- | --- | | `onbekend` | Status onbekend. | | `initialiseren` | Deze waardering is geinitialiseerd maar moet nog bevestigd worden. | | `open` | Deze waardering is bevestigd maar moet nog uitgevoerd worden. | | `voltooid` | Deze waardering is voltooid. | | `opgewaardeerd` | Deze waardering is geupgrade naar een ander waardering type. | | `ongeldig` | Deze waardering is niet geldig, bijvoorbeeld omdat hij niet door de business rules is gekomen. | | `verlopen` | Deze waardering is verlopen omdat hij niet op tijd bevestigd is. | | `error` | Er is iets mis gegaan voor deze waardering. |
     *
     * @return self
     */
    public function setNewStatus($new_status)
    {
        $this->container['new_status'] = $new_status;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp Het tijdstip van het event, in UTC.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets is_test
     *
     * @return bool|null
     */
    public function getIsTest()
    {
        return $this->container['is_test'];
    }

    /**
     * Sets is_test
     *
     * @param bool|null $is_test Geeft aan of de betreffende waardering aangevraagd is met een test token.
     *
     * @return self
     */
    public function setIsTest($is_test)
    {
        $this->container['is_test'] = $is_test;

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


