@extends('layouts.app')

@section('content')
<section class="section coming-soon" style="min-height: 960px; items-align:center" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
                <div class="right-content">
                  <div class="top-content">
                    <h6>Recent Questions <a href="/home">Go back to Dashboard</a></h6>
                  </div>
                 
                    <tr>
                      <td>
                        <p style="color: #FFFFFE; margin:auto; font-size: 1.3rem">{{$single->body}}</p>
                      </td>
                    </tr>
                </div>
                {{-- @include('comment.comment', ['comments' => $single->comments, 'post_id' => $single->id]) --}}
                @include('comment.replys', ['comments' => $single->comments, 'post_id' => $single->id])
                <div class="card-body">
                  <h5 style="color: #FFFFFE; margin:auto;">Leave a comment</h5>
                  <form style="" method="post" action="{{ route('comment.store') }}">
                      @csrf
                      <div class="form-group">
                          <input type="text" name="comment" class="form-control" required/>
                          <input type="hidden" name="post_id" value="{{ $single->id }}" />
                      </div>
                      <div class="form-group">
                          <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Add Comment" />
                      </div>
                  </form>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
