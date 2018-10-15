﻿<?php

namespace Yokai\MessengerBundle\Channel;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Yokai\MessengerBundle\Delivery;interface ChannelInterface
{
    /**
     * @param mixed $recipient
     *
     * @return bool
     */
    public function supports($recipient);

    /**
     * @param OptionsResolver $resolver
     */
    public function configure(OptionsResolver $resolver);

    /**
     * @param Delivery $delivery
     */
    public function handle(Delivery $delivery);
}
