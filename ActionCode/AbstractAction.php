<?php


/**
 *
 */
class AbstractAction
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @var \Cookie
     */
    protected $cookie;

    /**
     * @var \Request
     */
    protected $request;

    /**
     * @var \Session
     */
    protected $session;

    /**
     * @var \Response
     */
    protected $respose;







    /**
     *
     */
    public function execute():void
    {
        // TODO: implement here
    }

    /**
     *
     */
    class Cookie
    {
        /**
         *
         */
        public function __construct()
        {
        }
    }


    /**
     *
     */
    class Request
    {
        /**
         *
         */
        public function __construct()
        {
        }
    }


    /**
     *
     */
    class Session
    {
        /**
         *
         */
        public function __construct()
        {
        }
    }


    /**
     *
     */
    class Response
    {
        /**
         *
         */
        public function __construct()
        {
        }
    }

}
