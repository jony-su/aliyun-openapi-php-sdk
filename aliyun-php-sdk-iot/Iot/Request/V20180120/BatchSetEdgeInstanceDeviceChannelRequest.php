<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BatchSetEdgeInstanceDeviceChannel
 *
 * @method string getDriverId()
 * @method array getIotIdss()
 * @method string getIotInstanceId()
 * @method string getInstanceId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 * @method string getChannelId()
 */
class BatchSetEdgeInstanceDeviceChannelRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Iot',
            '2018-01-20',
            'BatchSetEdgeInstanceDeviceChannel',
            'iot'
        );
    }

    /**
     * @param string $driverId
     *
     * @return $this
     */
    public function setDriverId($driverId)
    {
        $this->requestParameters['DriverId'] = $driverId;
        $this->queryParameters['DriverId'] = $driverId;

        return $this;
    }

    /**
     * @param array $iotIds
     *
     * @return $this
     */
	public function setIotIdss(array $iotIds)
	{
	    $this->requestParameters['IotIdss'] = $iotIds;
		foreach ($iotIds as $i => $iValue) {
			$this->queryParameters['IotIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

        return $this;
    }

    /**
     * @param string $channelId
     *
     * @return $this
     */
    public function setChannelId($channelId)
    {
        $this->requestParameters['ChannelId'] = $channelId;
        $this->queryParameters['ChannelId'] = $channelId;

        return $this;
    }
}
