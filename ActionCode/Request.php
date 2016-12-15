<?php


/**
 *
 */
class Request extends Variable
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @var void
     */
    protected $prefix = "request_st";


    /**
     * @param void $key
     * @param void $value
     */
    public function setParam($key, $value):void
    {
        // TODO: implement here
    }

    /**
     * @param void $key
     * @param void $value
     */
    public function getParam($key, $value = null):void
    {
        // TODO: implement here
    }

    /**
     *
     */
    public function getParams():void
    {
        // TODO: implement here
    }

    /**
     *
     */
    public function getPost():void
    {
        // TODO: implement here
    }

    /**
     * @param void $key
     */
    public function unsetParam($key):void
    {
        // TODO: implement here
    }
}
