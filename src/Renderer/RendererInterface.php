<?php

namespace Yoeunes\Notify\Renderer;

interface RendererInterface
{
    /**
     * @param array<string, \Yoeunes\Notify\Envelope\Envelope> $notifications
     *
     * @return string
     */
    public function render($notifications);
}
