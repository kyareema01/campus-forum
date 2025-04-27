@extends('layouts.app')

@section('content')
<section class="section coming-soon" style="min-height: 960px; items-align:center" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col">
            <div class="right-content d-flex">
                <a href="/chat" style="">
                    <div class="card text-white bg-success mb-3 mr-3" style="max-width: 28rem;">
                        <div class="card-header">Campus Chat <i class="bi bi-chat-dots"></i></div>
                        <div class="card-body">
                        {{-- <h5 class="card-title">Success card title</h5> --}}
                        <p class="card-text">Join the discussion with fellow students of Al-Hikmah University</p>
                        </div>
                    </div>
                </a>
                <a href="discussion/create" style="">
                    <div class="card text-white bg-primary mb-3 mr-3" style="max-width: 28rem;">
                        <div class="card-header">Questions <i class="bi bi-chat-dots"></i></div>
                        <div class="card-body">
                        {{-- <h5 class="card-title">Success card title</h5> --}}
                        <p class="card-text">Join the discussion with fellow students of Al-Hikmah University</p>
                        </div>
                    </div>
                </a>
                
                {{-- <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="right-content d-flex">
                <a href="/discussion">
                    <div class="card text-white bg-info mb-3" style="max-width: 28rem;">
                        <div class="card-header">View Questions Asked <i class="bi bi-pencil-square"></i></div>
                        <div class="card-body">
                        {{-- <h5 class="card-title">Info card title</h5> --}}
                        <p class="card-text">Check your questions or answer a question asked by a fellow Student </p>
                        </div>
                    </div>
                </a>
                    {{-- <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>


        <div class="row">
            <div class="col">
                <div class="right-content d-flex">
                    @if(Auth::user()->hasRole('superadministrator','administrator'))
                <a href="/post/create">
                    <div class="card text-white bg-info mb-3" style="max-width: 28rem;">
                        <div class="card-header">Make a New Post <i class="bi bi-pencil-square"></i></div>
                        <div class="card-body">
                        {{-- <h5 class="card-title">Info card title</h5> --}}
                        <p class="card-text">Post can be what's happening in the institution and benefiary updates to students of Al-Hikmah university </p>
                        </div>
                    </div>
                </a>
                @endif
                    
                    <a href="/">
                        @if(Auth::user()->hasRole('superadministrator','administrator'))
                        <div class="card text-white bg-info mb-3" style="max-width: 28rem;">
                            <div class="card-header">Make a New Post <i class="bi bi-pencil-square"></i></div>
                            <div class="card-body">
                            {{-- <h5 class="card-title">Info card title</h5> --}}
                            <p class="card-text">Post can be what's happening in the institution and benefiary updates to students of Al-Hikmah university </p>
                            </div>
                        </div>
                    </a>
                    {{-- <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div> --}}
                    </div>
                    @endif
                </div>
            </div>

    </div>
</section>
@endsection