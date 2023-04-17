<?php
/**
 * WaarderingWebhookPayload
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
 * The version of the OpenAPI document: 1.2.1
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
 * WaarderingWebhookPayload Class Doc Comment
 *
 * @category Class
 * @description De payload van de webhooks voor de waarderingen.
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
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
        'callbackName' => 'string',
        'eventId' => 'string',
        'waarderingId' => 'string',
        'oldStatus' => '\Calcasa\Api\Model\WaarderingStatus',
        'newStatus' => '\Calcasa\Api\Model\WaarderingStatus',
        'timestamp' => '\DateTime',
        'isTest' => 'bool',
        'externeReferentie' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'callbackName' => null,
        'eventId' => 'uuid',
        'waarderingId' => 'uuid',
        'oldStatus' => null,
        'newStatus' => null,
        'timestamp' => 'date-time',
        'isTest' => null,
        'externeReferentie' => null
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
        'callbackName' => 'callbackName',
        'eventId' => 'eventId',
        'waarderingId' => 'waarderingId',
        'oldStatus' => 'oldStatus',
        'newStatus' => 'newStatus',
        'timestamp' => 'timestamp',
        'isTest' => 'isTest',
        'externeReferentie' => 'externeReferentie'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callbackName' => 'setCallbackName',
        'eventId' => 'setEventId',
        'waarderingId' => 'setWaarderingId',
        'oldStatus' => 'setOldStatus',
        'newStatus' => 'setNewStatus',
        'timestamp' => 'setTimestamp',
        'isTest' => 'setIsTest',
        'externeReferentie' => 'setExterneReferentie'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callbackName' => 'getCallbackName',
        'eventId' => 'getEventId',
        'waarderingId' => 'getWaarderingId',
        'oldStatus' => 'getOldStatus',
        'newStatus' => 'getNewStatus',
        'timestamp' => 'getTimestamp',
        'isTest' => 'getIsTest',
        'externeReferentie' => 'getExterneReferentie'
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
        $this->container['callbackName'] = $data['callbackName'] ?? null;
        $this->container['eventId'] = $data['eventId'] ?? null;
        $this->container['waarderingId'] = $data['waarderingId'] ?? null;
        $this->container['oldStatus'] = $data['oldStatus'] ?? null;
        $this->container['newStatus'] = $data['newStatus'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['isTest'] = $data['isTest'] ?? null;
        $this->container['externeReferentie'] = $data['externeReferentie'] ?? null;
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
     * Gets callbackName
     *
     * @return string|null
     */
    public function getCallbackName()
    {
        return $this->container['callbackName'];
    }

    /**
     * Sets callbackName
     *
     * @param string|null $callbackName callbackName
     *
     * @return self
     */
    public function setCallbackName($callbackName)
    {
        $this->container['callbackName'] = $callbackName;

        return $this;
    }

    /**
     * Gets eventId
     *
     * @return string|null
     */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
     * Sets eventId
     *
     * @param string|null $eventId Uniek Id voor deze callback.
     *
     * @return self
     */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;

        return $this;
    }

    /**
     * Gets waarderingId
     *
     * @return string|null
     */
    public function getWaarderingId()
    {
        return $this->container['waarderingId'];
    }

    /**
     * Sets waarderingId
     *
     * @param string|null $waarderingId Het Id van de waardering waarop deze callback betrekking heeft.
     *
     * @return self
     */
    public function setWaarderingId($waarderingId)
    {
        $this->container['waarderingId'] = $waarderingId;

        return $this;
    }

    /**
     * Gets oldStatus
     *
     * @return WaarderingStatus|null
     */
    public function getOldStatus()
    {
        return $this->container['oldStatus'];
    }

    /**
     * Sets oldStatus
     *
     * @param WaarderingStatus|null $oldStatus De oude status van de waardering. | Waarde | Omschrijving | | --- | --- | | `onbekend` | Status onbekend. | | `initialiseren` | Deze waardering is geinitialiseerd maar moet nog bevestigd worden. | | `open` | Deze waardering is bevestigd maar moet nog uitgevoerd worden. | | `voltooid` | Deze waardering is voltooid. | | `opgewaardeerd` | Deze waardering is geupgrade naar een ander waardering type. | | `ongeldig` | Deze waardering is niet geldig, bijvoorbeeld omdat hij niet door de business rules is gekomen. | | `verlopen` | Deze waardering is verlopen omdat hij niet op tijd bevestigd is. | | `error` | Er is iets mis gegaan voor deze waardering. | | `inBehandeling` | Deze waardering is in behandeling door het systeem. |
     *
     * @return self
     */
    public function setOldStatus($oldStatus)
    {
        $this->container['oldStatus'] = $oldStatus;

        return $this;
    }

    /**
     * Gets newStatus
     *
     * @return WaarderingStatus|null
     */
    public function getNewStatus()
    {
        return $this->container['newStatus'];
    }

    /**
     * Sets newStatus
     *
     * @param WaarderingStatus|null $newStatus De nieuwe status van de waardering. | Waarde | Omschrijving | | --- | --- | | `onbekend` | Status onbekend. | | `initialiseren` | Deze waardering is geinitialiseerd maar moet nog bevestigd worden. | | `open` | Deze waardering is bevestigd maar moet nog uitgevoerd worden. | | `voltooid` | Deze waardering is voltooid. | | `opgewaardeerd` | Deze waardering is geupgrade naar een ander waardering type. | | `ongeldig` | Deze waardering is niet geldig, bijvoorbeeld omdat hij niet door de business rules is gekomen. | | `verlopen` | Deze waardering is verlopen omdat hij niet op tijd bevestigd is. | | `error` | Er is iets mis gegaan voor deze waardering. | | `inBehandeling` | Deze waardering is in behandeling door het systeem. |
     *
     * @return self
     */
    public function setNewStatus($newStatus)
    {
        $this->container['newStatus'] = $newStatus;

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
     * Gets isTest
     *
     * @return bool|null
     */
    public function getIsTest()
    {
        return $this->container['isTest'];
    }

    /**
     * Sets isTest
     *
     * @param bool|null $isTest Geeft aan of de betreffende waardering aangevraagd is met een test token.
     *
     * @return self
     */
    public function setIsTest($isTest)
    {
        $this->container['isTest'] = $isTest;

        return $this;
    }

    /**
     * Gets externeReferentie
     *
     * @return string|null
     */
    public function getExterneReferentie()
    {
        return $this->container['externeReferentie'];
    }

    /**
     * Sets externeReferentie
     *
     * @param string|null $externeReferentie Dit is de externe referentie opgegeven bij de callback inschrijving of als dit een normale API waardering is waarvoor geen callback inschrijving was dit veld null.
     *
     * @return self
     */
    public function setExterneReferentie($externeReferentie)
    {
        $this->container['externeReferentie'] = $externeReferentie;

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


