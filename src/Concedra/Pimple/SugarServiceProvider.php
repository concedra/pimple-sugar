<?php

namespace Concedra\Pimple;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Provides SugarCRM 7 REST Client integration for Pimple DI
 *
 * @author Igor Besel <besel@concedra.de>
 */
class SugarServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['sugar'] = function($c) {
            $sugar = new Rest();
            $sugar->setUrl($c['sugar.url'])
                ->setUsername($c['sugar.username'])
                ->setPassword($c['sugar.password'])
                ->connect();

            return $sugar;
        };
    }
}
