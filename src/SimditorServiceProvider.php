<?php
/**
 * +----------------------------------------------------------------------
 * | laravel-simditor [ File Description ]
 * +----------------------------------------------------------------------
 * | Copyright (c) 2015~2019 http://www.wmt.ltd All rights reserved.
 * +----------------------------------------------------------------------
 * | 版权所有：贵州鸿宇叁柒柒科技有限公司
 * +----------------------------------------------------------------------
 * | Author: shadow <admin@hongyuvip.com>  QQ: 1527200768
 * +----------------------------------------------------------------------
 * | Version: v1.0.0  Date:2019-05-18 Time:11:40
 * +----------------------------------------------------------------------
 */

namespace Hongyukeji\LaravelSimditor;

use Illuminate\Support\ServiceProvider;

class SimditorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'Simditor');

        $this->publishes([
            realpath(__DIR__ . '/resources/views') => base_path('resources/views/vendor/simditor'),
        ], 'view');

        $this->publishes([
            realpath(__DIR__ . '/resources/assets/simditor') => public_path('vendor/simditor'),
        ], 'assets');
    }

    public function register()
    {
        //
    }
}