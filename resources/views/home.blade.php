@extends('layouts.app')

@section('content')
<div id="app-chat" class="app-chat">
    <div class="container">
        <div class="app-main d-flex box-shadow-4dx">
            <div class="app-sidebar">
                <div class="app-search py-4 px-2">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="marco-addon">
                        <div class="input-group-append">
                            <span class="input-group-text" id="marco-addon">Search</span>
                        </div>
                    </div>
                </div>
                <div class="sidebar-main">
                    <div class="user-list app-scrollbar">
                        <div class="user-item active">
                            <div class="card flex-row px-4 py-3">
                                <div class="container-img user-avatar app-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="user-item-heading d-flex justify-content-between align-items-center">
                                        <span class="user-name">Elizabeth Elliott</span>
                                        <span class="badge badge-info">4</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="user-item">
                            <div class="card flex-row px-4 py-3">
                                <div class="container-img user-avatar app-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="user-item-heading d-flex justify-content-between align-items-center">
                                        <span class="user-name">Elizabeth Elliott</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="user-item">
                            <div class="card flex-row px-4 py-3">
                                <div class="container-img user-avatar app-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="user-item-heading d-flex justify-content-between align-items-center">
                                        <span class="user-name">Elizabeth Elliott</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-item">
                            <div class="card flex-row px-4 py-3">
                                <div class="container-img user-avatar app-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="user-item-heading d-flex justify-content-between align-items-center">
                                        <span class="user-name">Elizabeth Elliott</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-item">
                            <div class="card flex-row px-4 py-3">
                                <div class="container-img user-avatar app-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="user-item-heading d-flex justify-content-between align-items-center">
                                        <span class="user-name">Elizabeth Elliott</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-item">
                            <div class="card flex-row px-4 py-3">
                                <div class="container-img user-avatar app-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="user-item-heading d-flex justify-content-between align-items-center">
                                        <span class="user-name">Elizabeth Elliott</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-item">
                            <div class="card flex-row px-4 py-3">
                                <div class="container-img user-avatar app-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="user-item-heading d-flex justify-content-between align-items-center">
                                        <span class="user-name">Elizabeth Elliott</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-layout">
                <div class="app-layout-item app-layout-tool">
                    <div class="layout-tool py-3 px-3">
                        <div class="user-item">
                            <div class="card flex-row border-0">
                                <div class="container-img user-avatar mr-4">
                                    <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                </div>
                                <div class="card-body p-0">
                                    <div class="user-item-heading d-flex flex-column">
                                        <span class="user-name mb-2">Elizabeth Elliott</span>
                                        <span class="user-status">Online</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-layout-item app-layout-main parallax">
                    <div class="app-layout-chat app-scrollbar">
                        <div class="layout-chat">
                            <div class="chat-history text-center py-4 px-2">
                                <span class="badge badge-dark badge-secondary">Chat History</span>
                            </div>
                            <div class="chats-main">
                                <div class="chats">
                                    <div class="chat chat-not-mine">
                                        <div class="chat-avatar container-img app-avatar">
                                            <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                        </div>
                                        <div class="chat-messages">
                                            <div class="chat-message app-border-5">
                                                <span class="message">How can we help? We are here for you!</span>
                                                <span class="time">10:22 AM</span>
                                            </div>
                                            <div class="chat-message app-border-5">
                                                <span class="message">How can we help? We are here for you!</span>
                                                <span class="time">10:22 AM</span>
                                            </div>
                                            <div class="chat-message app-border-5">
                                                <span class="message">How can we help? We are here for you!</span>
                                                <span class="time">10:22 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat chat-mine">
                                        <div class="chat-avatar container-img app-avatar">
                                            <img src="{{asset('/images/avatar_02.jpg')}}" alt="user">
                                        </div>
                                        <div class="chat-messages">
                                            <div class="chat-message app-border-5">
                                                <span class="message">How can we help? We are here for you!</span>
                                                <span class="time">10:22 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat chat-not-mine">
                                        <div class="chat-avatar container-img app-avatar">
                                            <img src="{{asset('/images/avatar_01.jpg')}}" alt="user">
                                        </div>
                                        <div class="chat-messages">
                                            <div class="chat-message app-border-5">
                                                <span class="message">How can we help? We are here for you!</span>
                                                <span class="time">10:22 AM</span>
                                            </div>
                                            <div class="chat-message app-border-5">
                                                <span class="message">How can we help? We are here for you!</span>
                                                <span class="time">10:22 AM</span>
                                            </div>
                                            <div class="chat-message app-border-5">
                                                <span class="message">How can we help? We are here for you!</span>
                                                <span class="time">10:22 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-layout-item app-layout-typing">
                    <div class="layout-typing px-2 py-2">
                        <div class="type-message">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Message">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="send-message">
                            <button class="marco-btn btn btn-primary">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
