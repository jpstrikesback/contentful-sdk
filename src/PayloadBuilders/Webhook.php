<?php
namespace Incraigulous\ContentfulSDK\PayloadBuilders;

class Webhook implements PayloadBuilderInterface {
    protected $url;

    function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Return the payload builder array part.
     * @return array
     */
    function make()
    {
        return ['url' => $this->url];
    }

    /**
     * Return the key.
     * @return mixed
     */
    function getKey() {
        //No key used.
    }
}