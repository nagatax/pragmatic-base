@extends('layouts.master')

@section("title", "")

@section("content")
    <div class="container" style="height: 300px; border: 1px solid black;">
        <div class="row align-items-center">
            <div class="col">col-sm-8</div>
            <div class="col">col-sm-4</div>
            <div class="col">col-sm-4</div>
        </div>
    </div>
    <div class="container" style="height: 300px; border: 1px solid black;">
        <div class="row align-items-end">
            <div class="col">col-sm-8</div>
            <div class="col">col-sm-4</div>
            <div class="col">col-sm-4</div>
        </div>
    </div>
@endsection
