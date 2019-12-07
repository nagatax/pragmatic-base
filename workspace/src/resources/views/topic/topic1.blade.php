@extends('layouts.master')

@section("title", "")

@section("content")
    <div class="contents">
        <div>
            <h2>Laravel 6.0のRedis設定</h2>
        </div>
        <div>
            <h3>エラー内容</h3>
            <code>
                Please remove or rename the Redis facade alias in your "app" configuration file in order to avoid
                collision with the PHP Redis extension.
            </code>
        </div>
        <div>
            <h3>対応方法</h3>
            <code>
                apk add git \ <br/>
                && git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis \ <br/>
                && docker-php-ext-install redis
            </code>
        </div>
    </div>
@endsection
