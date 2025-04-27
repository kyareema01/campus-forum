@foreach($comments as $comment)
<div class="display-comment">
    <strong style="color: #FFFFFE;  margin-top:2px; padding-top:2px; font-size: 0.8rem">{{ $comment->user->name }}</strong>
    <p style="color: #FFFFFE; margin:auto; font-size: 1rem">{{ $comment->comment }}</p>
    <a href="" id="reply"></a>
    <form style="background: none; margin-top:2px; padding-top:2px; padding:3px;" method="post" action="{{ route('reply.add') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="comment"  placeholder="Reply to  {{$comment->user->name }} " class="form-control" required/>
            <input type="hidden" name="post_id" value="{{ $post_id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
        </div>
        <div class="form-group" style="margin-right:auto">
            <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="background-color: none; font-size: 0.8em; width:100px; height:20px; margin-right:1000px" value="Reply" />
        </div>
    </form>
    @include('comment.replys', ['comments' => $comment->replies])
</div>
@endforeach 