<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/resources.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A group of information for attaching an input resource to this channel.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.InputAttachment</code>
 */
class InputAttachment extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique key for this input attachment. The key must be 1-63
     * characters in length. The key must begin and end with a letter (regardless
     * of case) or a number, but can contain dashes or underscores in between.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     */
    protected $key = '';
    /**
     * The resource name of an existing input, in the form of:
     * `projects/{project}/locations/{location}/inputs/{inputId}`.
     *
     * Generated from protobuf field <code>string input = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $input = '';
    /**
     * Automatic failover configurations.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.InputAttachment.AutomaticFailover automatic_failover = 3;</code>
     */
    protected $automatic_failover = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           A unique key for this input attachment. The key must be 1-63
     *           characters in length. The key must begin and end with a letter (regardless
     *           of case) or a number, but can contain dashes or underscores in between.
     *     @type string $input
     *           The resource name of an existing input, in the form of:
     *           `projects/{project}/locations/{location}/inputs/{inputId}`.
     *     @type \Google\Cloud\Video\LiveStream\V1\InputAttachment\AutomaticFailover $automatic_failover
     *           Automatic failover configurations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique key for this input attachment. The key must be 1-63
     * characters in length. The key must begin and end with a letter (regardless
     * of case) or a number, but can contain dashes or underscores in between.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * A unique key for this input attachment. The key must be 1-63
     * characters in length. The key must begin and end with a letter (regardless
     * of case) or a number, but can contain dashes or underscores in between.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * The resource name of an existing input, in the form of:
     * `projects/{project}/locations/{location}/inputs/{inputId}`.
     *
     * Generated from protobuf field <code>string input = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * The resource name of an existing input, in the form of:
     * `projects/{project}/locations/{location}/inputs/{inputId}`.
     *
     * Generated from protobuf field <code>string input = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkString($var, True);
        $this->input = $var;

        return $this;
    }

    /**
     * Automatic failover configurations.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.InputAttachment.AutomaticFailover automatic_failover = 3;</code>
     * @return \Google\Cloud\Video\LiveStream\V1\InputAttachment\AutomaticFailover|null
     */
    public function getAutomaticFailover()
    {
        return $this->automatic_failover;
    }

    public function hasAutomaticFailover()
    {
        return isset($this->automatic_failover);
    }

    public function clearAutomaticFailover()
    {
        unset($this->automatic_failover);
    }

    /**
     * Automatic failover configurations.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.InputAttachment.AutomaticFailover automatic_failover = 3;</code>
     * @param \Google\Cloud\Video\LiveStream\V1\InputAttachment\AutomaticFailover $var
     * @return $this
     */
    public function setAutomaticFailover($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\LiveStream\V1\InputAttachment\AutomaticFailover::class);
        $this->automatic_failover = $var;

        return $this;
    }

}

