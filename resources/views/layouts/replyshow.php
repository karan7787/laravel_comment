      @extends('layouts.master')

@section('content')

                  <div class="reply">
                          <ul class="list-group">
                              @foreach($comment->replies as $reply)
                                 <li class="list-group-item"> 
                                     <strong> 
                                          {{$reply->created_at->diffForHumans()}}:&nbsp; 

                                     </strong>

                                       {{$reply->body}}
                                 </li>
                               @endforeach
                         </ul>
                     </div>
   @endsection