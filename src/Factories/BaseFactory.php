<?php

namespace Yoeunes\Notify\Factories;

abstract class BaseFactory implements NotifierFactoryInterface
{
    protected $config;

    public function __construct($config = array())
    {
        $this->setConfig($config);
    }

    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }

    public function __invoke($config)
    {
        return $this->setConfig($config);
    }

    public function error($message, $title = '', $context = array())
    {
        return $this->notification('error', $message, $title, $context);
    }

    public function info($message, $title = '', $context = array())
    {
        return $this->notification('info', $message, $title, $context);
    }

    public function success($message, $title = '', $context = array())
    {
        return $this->notification('success', $message, $title, $context);
    }

    public function warning($message, $title = '', $context = array())
    {
        return $this->notification('warning', $message, $title, $context);
    }
}
