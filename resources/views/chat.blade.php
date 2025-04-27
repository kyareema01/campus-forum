<!-- resources/views/chat.blade.php -->

@extends('layouts.app')

@section('content')

<section class="section coming-soon" style="min-height: 960px; items-align:center" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col">
            <div class="right-content d-flex">
                <div class="container">
                    <div class="">
                        <div class="">
                            <chat-messages :messages="messages"></chat-messages>
                        </div>
                        <div class="card-footer">
                            <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection