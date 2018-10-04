@extends('layouts.app')

@section('content')
<div id="app-chat" class="app-chat py-2">
    <div class="container">
        <div class="app-main d-flex">
            <div class="app-sidebar box-shadow-4dx">
                <div class="app-search py-4 px-2">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="marco-addon">
                        <div class="input-group-append">
                            <span class="input-group-text" id="marco-addon">Search</span>
                        </div>
                    </div>
                </div>
                <div class="app-sidebar-main">
                    <div class="app-user-list">
                        <div class="app-user-item active">
                            <div class="card flex-row p-4">
                                <div class="container-img user-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="app-user-item-heading d-flex justify-content-between mb-2">
                                        <span class="user-name">Elizabeth Elliott</span>
                                        <span class="user-time">4:14 AM</span>
                                    </div>
                                    <div class="app-user-item-text d-flex justify-content-between">
                                        <span class="message-sent"><i class=""></i> Okay</span>
                                        <span class="message-number">12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-user-item">
                            <div class="card flex-row p-4">
                                <div class="container-img user-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="app-user-item-heading d-flex justify-content-between mb-2">
                                        <span class="user-name">Elizabeth Elliott</span>
                                        <span class="user-time">4:14 AM</span>
                                    </div>
                                    <div class="app-user-item-text d-flex justify-content-between">
                                        <span class="message-sent"><i class=""></i> Okay</span>
                                        <span class="message-number">12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-user-item">
                            <div class="card flex-row p-4">
                                <div class="container-img user-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="app-user-item-heading d-flex justify-content-between mb-2">
                                        <span class="user-name">Elizabeth Elliott</span>
                                        <span class="user-time">4:14 AM</span>
                                    </div>
                                    <div class="app-user-item-text d-flex justify-content-between">
                                        <span class="message-sent"><i class=""></i> Okay</span>
                                        <span class="message-number">12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-user-item">
                            <div class="card flex-row p-4">
                                <div class="container-img user-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="app-user-item-heading d-flex justify-content-between mb-2">
                                        <span class="user-name">Elizabeth Elliott</span>
                                        <span class="user-time">4:14 AM</span>
                                    </div>
                                    <div class="app-user-item-text d-flex justify-content-between">
                                        <span class="message-sent"><i class=""></i> Okay</span>
                                        <span class="message-number">12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-user-item">
                            <div class="card flex-row p-4">
                                <div class="container-img user-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="app-user-item-heading d-flex justify-content-between mb-2">
                                        <span class="user-name">Elizabeth Elliott</span>
                                        <span class="user-time">4:14 AM</span>
                                    </div>
                                    <div class="app-user-item-text d-flex justify-content-between">
                                        <span class="message-sent"><i class=""></i> Okay</span>
                                        <span class="message-number">12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-user-item">
                            <div class="card flex-row p-4">
                                <div class="container-img user-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="app-user-item-heading d-flex justify-content-between mb-2">
                                        <span class="user-name">Elizabeth Elliott</span>
                                        <span class="user-time">4:14 AM</span>
                                    </div>
                                    <div class="app-user-item-text d-flex justify-content-between">
                                        <span class="message-sent"><i class=""></i> Okay</span>
                                        <span class="message-number">12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-user-item">
                            <div class="card flex-row p-4">
                                <div class="container-img user-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="app-user-item-heading d-flex justify-content-between mb-2">
                                        <span class="user-name">Elizabeth Elliott</span>
                                        <span class="user-time">4:14 AM</span>
                                    </div>
                                    <div class="app-user-item-text d-flex justify-content-between">
                                        <span class="message-sent"><i class=""></i> Okay</span>
                                        <span class="message-number">12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-user-item">
                            <div class="card flex-row p-4">
                                <div class="container-img user-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="app-user-item-heading d-flex justify-content-between mb-2">
                                        <span class="user-name">Elizabeth Elliott</span>
                                        <span class="user-time">4:14 AM</span>
                                    </div>
                                    <div class="app-user-item-text d-flex justify-content-between">
                                        <span class="message-sent"><i class=""></i> Okay</span>
                                        <span class="message-number">12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-layout box-shadow-4dx">
                <div class="app-layout-tool">
                    <div class="layout-tool py-3 px-3">
                        <div class="app-user-item">
                            <div class="card flex-row border-0">
                                <div class="container-img user-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="app-user-item-heading d-flex flex-column">
                                        <span class="user-name mb-2">Elizabeth Elliott</span>
                                        <span class="user-status">Online</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-layout-main">
                    <div class="app-layout-type"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
