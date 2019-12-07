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
                The server requested authentication method unknown to the client (SQL: select * from
                information_schema.tables where table_schema = *** and table_name = migrations)
            </code>
        </div>
        <div>
            <h3>対応方法</h3>

            ユーザ認証方法を変更するために、 my.cnfに下記を追加する。
            <code>
                [mysqld]<br/>
                default-authentication-plugin = mysql_native_password
            </code>
        </div>
    </div>
@endsection
