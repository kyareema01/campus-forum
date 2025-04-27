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
                  <div class="col-md-12">
                    <div class="news m-auto text-center">
                      @foreach($all as $item)
                      <tr>
                        <td>
                          <p><a href="{{route('discussion.show', $item)}} " style="color: #FFFFFE; text-align:center; margin:auto; font-size: 1.3rem; text-decoration:underline; font-family:sans-serif">{{$item->body}}</a> </p>
                      </tr>
                      @endforeach
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
