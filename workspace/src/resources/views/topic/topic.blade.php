@extends('layouts.master')

@section("title", "")

@section("content")
    <div class="contents">
        <div>
            <div>
                <h2 class="text-success">CLI Interpreterの設定</h2>
            </div>
            <dl>
                <dt>Preferencesの表示</dt>
                <dd>下記の操作でPreferencesを表示する。<br/>[Preferences] -> [Languages & Frameworks] -> [PHP]</dd>
                <dt>PHP language levelの設定</dt>
                <dd>PHP language levelを7.3に設定する。</dd>
                <dt>CLI Interpreterの設定</dt>
                <dd>
                    1. [...]を選択する。<br/>
                    2.[+]を選択し、インタプリタを追加する。<br/>
                    　[From Docker, Vagrant, VM, Remote...]を選択<br/>
                    3. Docker Compose情報欄に、PHPをインストールしたDocker Containerを選択する。<br/>
                    4. PHP executableでphpコマンドのパスを入力する。<br/>
                    5. OKボタンを選択する。<br/>
                </dd>
            </dl>
        </div>
        <div>
            <div>
                <h2>PHPUnitの設定</h2>
            </div>
            <dl>
                <dt>Preferencesの表示</dt>
                <dd>下記の操作でPreferencesを表示する。<br/>[Preferences] -> [Languages & Frameworks] -> [PHP] -> [Test Frameworks]
                </dd>
                <dt>PHPUnitの設定</dt>
                <dd>
                    1.[+]を選択し、インタプリタを追加する。<br/>
                    [PHPUnit by Remote Interpreter]を選択<br/>
                    2. [PHPUnit library] - [Use Composer autoloader]を選択する。<br/>
                    3. Path to scriptに/var/www/html/vendor/autoload.phpを設定する。<br/>
                    4. [Test Runner] - [Default configuration file]に/var/www/html/phpunit.xmlを設定する。<br/>
                    5. OKボタンを選択する。<br/>
                </dd>
            </dl>
        </div>
        <div>
            <div>
                <h2>Remote Debug</h2>
            </div>
            <dl>
                <dt>Xdebugの設定</dt>
                <dd></dd>
                <dt>PHPStormの設定</dt>
                <dd></dd>
            </dl>
        </div>
        <div>
            <div>
                <h2>参考URL</h2>
            </div>
            <dl>
                <dt>URL</dt>
                <dd>
                    <a href="https://blog.shin1x1.com/entry/setup-test-and-debug-on-phpstorm-and-docker-for-mac">link</a>
                </dd>
            </dl>
        </div>
    </div>
@endsection
