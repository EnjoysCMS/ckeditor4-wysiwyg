<?php

declare(strict_types=1);


namespace EnjoysCMS\ContentEditor\CKEditor4;

use Composer\Script\Event;

final class Composer
{
    public static function assetsInstall(Event $event)
    {
        passthru(sprintf('cd %s && yarn install', realpath(__DIR__.'/..')));
    }

}
