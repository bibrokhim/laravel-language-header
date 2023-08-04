<?php

namespace Bibrokhim\LaravelLanguageHeader;

use Bibrokhim\LaravelLanguageHeader\Http\Middleware\SetAppLocale;
use Bibrokhim\LaravelLanguageHeader\Http\Middleware\SetContentLanguageHeader;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;

class LanguageHeaderServiceProvider extends ServiceProvider
{
    public function boot(Kernel $kernel): void
    {
        $kernel->pushMiddleware(SetAppLocale::class);
        $kernel->pushMiddleware(SetContentLanguageHeader::class);
    }
}