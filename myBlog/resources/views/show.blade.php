@extends('layout')

@section('title',$Article->title)


@section('content')

   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{$Article->title}}</div>

               <div class="card-body">
                     {{$Article->content}}
               </div>
            </div>
         </div>
      </div>
   </div>




   @auth
       @can('update',$Article)

            <!-- The edit link -->

   <div class="container">
      <div class="row justify-content-center">
         <div class="col-auto">
            <a href="/Articles/{{$Article->id}}/edit">

               <button style="margin:10px" type="submit" class="btn btn-primary">
                  {{ __('EDIT') }}
               </button>
            </a>
         </div>


            <!-- The delete action -->
         <div class="col-auto">
            <form method="POST" action="/Articles/{{ $Article->id }}">

               @csrf

               @method('DELETE')

               <button style="margin:10px" type="submit" class="btn btn-primary">
                  {{ __('DELETE') }}
               </button>

            </form>
         </div>
       </div>
   </div>

       @endcan
   @endauth



            {{--show comments--}}

   <div style="margin-top:15px" class="container">
      <div class="row justify-content-center">
         <div class="col-8">

         <div class="card">
            <div class="card-header">Comments</div>


            @foreach($Article->comments as $comment)

               <div class="card-body">
                  {{$comment->Content}}
               </div>

             @endforeach

         </div>



            {{-- Add comments form --}}

            @auth
                 <div style="margin-top:15px" class="card">
                     <div class="card-header">Add your comment</div>

                        <form method="POST" action="/Articles/{{$Article->id}}/comments">
                        @csrf

                            <div class="card-body">
                            <input style="text-align: start; height:50px;" id="comment" type="text" class="form-control" name="comment" value="{{ old('comment') }}" required>

                            <button style="margin-top:5px" type="submit" class="btn btn-primary">
                               {{ __('ADD') }}
                            </button>
                      </div>
                </div>
            @endauth

         </div>
      </div>
   </div>

@endsection