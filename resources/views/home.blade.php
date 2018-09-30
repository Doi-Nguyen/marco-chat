@extends('layouts.app')

@section('content')
<div id="app-chat">
    <div class="container">
        <div class="app-main">
            <div class="app-sidebar">
                <div class="app-search mb-3">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="marco-addon">
                        <div class="input-group-append">
                            <span class="input-group-text" id="marco-addon">Search</span>
                        </div>
                    </div>
                </div>
                <div class="app-user-list">

                </div>
            </div>
            <div class="app-layout">
                <div class="app-layout-tool"></div>
                <div class="app-layout-main"></div>
                <div class="app-layout-type"></div>
            </div>
        </div>
    </div>
</div>
@endsection
