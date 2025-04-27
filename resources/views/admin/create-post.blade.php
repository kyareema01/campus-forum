@extends('layouts.app')

@section('content')
<section class="section coming-soon" style="min-height: 960px; items-align:center" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
                <div class="right-content">
                  <div class="top-content">
                    <h6>Write Post or <a href="/home">Go back to Dashboard</a></h6>
                  </div>
                    <form method="POST" action="{{route('post.store')}}">
                        @csrf
                        <div class="form-group">
                          <input type="hidden" name="user_id" value="{{Auth()->user()->id}}" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                            <label for="exampleFormControlInput1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                          </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Post</label>
                            <textarea class="form-control" placeholder="Post..." id="exampleFormControlTextarea1" rows="3" name="post"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="file" class="form-control" name="file" placeholder="add file if any" id="">
                          </div>
                          <button class="btn btn-primary">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
