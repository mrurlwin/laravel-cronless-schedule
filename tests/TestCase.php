<?php

namespace MrUrlwin\CronlessSchedule\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use MrUrlwin\CronlessSchedule\CronlessScheduleServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            CronlessScheduleServiceProvider::class,
        ];
    }
}
