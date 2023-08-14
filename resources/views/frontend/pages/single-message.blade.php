@extends('frontend.layouts.app')


@section('content')
    <div class="content-page-box-area">
        <div class="all-messages-body">
            <div class="all-messages-header d-flex justify-content-between align-items-center">
                <h3>Messages</h3>

                <div class="dropdown">

                </div>
            </div>

            <div class="messages-profile-box">
                <div class="row">
                    <div class="col-1">
                        <a href="#"><img src={{ asset('frontend/assets/images/user/user-1.jpg') }}
                                class="rounded-circle" alt="image"></a>
                    </div>
                    <div class="col-2">
                        <h3><a href="#">William Chandler</a></h3>
                    </div>
                </div>
            </div>

            <div class="messages-chat-container">
                <div class="chat-content">
                    <div class="chat">
                        <div class="chat-avatar">
                            <a routerLink="/profile" class="d-inline-block">
                                <img src={{ asset('frontend/assets/images/user/user-1.jpg') }} width="50" height="50"
                                    class="rounded-circle" alt="image">
                            </a>
                        </div>

                        <div class="chat-body">
                            <div class="chat-message">
                                <p>Hello, dear I want talk to you?</p>
                                <span class="time d-block">7:45 AM</span>
                            </div>
                        </div>
                    </div>

                    <div class="chat chat-left">
                        <div class="chat-avatar">
                            <a routerLink="/profile" class="d-inline-block">
                                <img src={{ asset('frontend/assets/images/user/user-2.jpg') }} width="50" height="50"
                                    class="rounded-circle" alt="image">
                            </a>
                        </div>

                        <div class="chat-body">
                            <div class="chat-message">
                                <p>Said how can I cooperate with you?</p>
                                <span class="time d-block">7:45 AM</span>
                            </div>
                        </div>
                    </div>

                    <div class="chat">
                        <div class="chat-avatar">
                            <a routerLink="/profile" class="d-inline-block">
                                <img src={{ asset('frontend/assets/images/user/user-1.jpg') }} width="50" height="50"
                                    class="rounded-circle" alt="image">
                            </a>
                        </div>

                        <div class="chat-body">
                            <div class="chat-message">
                                <p>I need some ideas from you about my design</p>
                                <span class="time d-block">7:45 AM</span>
                            </div>
                        </div>
                    </div>

                    <div class="chat chat-left">
                        <div class="chat-avatar">
                            <a routerLink="/profile" class="d-inline-block">
                                <img src={{ asset('frontend/assets/images/user/user-2.jpg') }} width="50" height="50"
                                    class="rounded-circle" alt="image">
                            </a>
                        </div>

                        <div class="chat-body">
                            <div class="chat-message">
                                <p>What you want to know about design</p>
                                <span class="time d-block">7:45 AM</span>
                            </div>
                        </div>
                    </div>

                    <div class="chat">
                        <div class="chat-avatar">
                            <a routerLink="/profile" class="d-inline-block">
                                <img src={{ asset('frontend/assets/images/user/user-1.jpg') }} width="50" height="50"
                                    class="rounded-circle" alt="image">
                            </a>
                        </div>

                        <div class="chat-body">
                            <div class="chat-message">
                                <p>With everything I know about design, I can help you in many ways</p>
                                <span class="time d-block">7:45 AM</span>
                            </div>
                        </div>
                    </div>

                    <div class="chat chat-left">
                        <div class="chat-avatar">
                            <a routerLink="/profile" class="d-inline-block">
                                <img src={{ asset('frontend/assets/images/user/user-2.jpg') }} width="50" height="50"
                                    class="rounded-circle" alt="image">
                            </a>
                        </div>

                        <div class="chat-body">
                            <div class="chat-message">
                                <p>Ok, I'm taking note I'm telling you everything I need</p>
                                <span class="time d-block">7:45 AM</span>
                            </div>
                        </div>
                    </div>

                    <div class="chat">
                        <div class="chat-avatar">
                            <a routerLink="/profile" class="d-inline-block">
                                <img src={{ asset('frontend/assets/images/user/user-1.jpg') }} width="50" height="50"
                                    class="rounded-circle" alt="image">
                            </a>
                        </div>

                        <div class="chat-body">
                            <div class="chat-message">
                                <p>I am waiting for your note</p>
                                <span class="time d-block">7:45 AM</span>
                            </div>
                        </div>
                    </div>

                    <div class="chat chat-left">
                        <div class="chat-avatar">
                            <a routerLink="/profile" class="d-inline-block">
                                <img src={{ asset('frontend/assets/images/user/user-2.jpg') }} width="50" height="50"
                                    class="rounded-circle" alt="image">
                            </a>
                        </div>

                        <div class="chat-body">
                            <div class="chat-message">
                                <p>What makes you different from other learning platforms?</p>
                                <span class="time d-block">7:45 AM</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chat-list-footer">
                    <form class="d-flex align-items-center">
                        <div class="btn-box d-flex align-items-center me-3">
                            <button class="file-attachment-btn d-inline-block me-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="File Attachment" type="button"><i
                                    class="ri-attachment-2"></i></button>

                            <button class="emoji-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Emoji" type="button"><i class="ri-user-smile-line"></i></button>
                        </div>

                        <input type="text" class="form-control" placeholder="Type your message...">

                        <button type="submit" class="send-btn d-inline-block">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
