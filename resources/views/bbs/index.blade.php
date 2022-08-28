@extends('layouts.layouts')
　　<span class=""><span class="">@</span></span>section('title', 'board.index')
<span class="">　　@se</span>ction('contents')
　　  <span class="">@</span>foreach($boards as $board)
    　    <div class="row">
            <div class="col-md-12">
                <div class="media" style="padding:10px;"><img class="rounded-circle mr-3" style="margin:10px 0px 0px 10px;padding:0px;">
                    <div class="media-body">
                        <h5 style="margin:10px 10px 10px 0px;">{{ $boards->name }} : <b>{{ $boards->title }}</b></h5>
                        <small>投稿日時：{{ date("Y年 m月 d日",strtotime($board->created_at)) }}</small>
                        <div class="mt-1">
                            <p>{!! nl2br(e($boards->content), false) !!}</p>
                        </div>
                        <div class="col">
                            <a class="btn btn-outline-success" data-toggle="collapse" href="#post{{ $board->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">返信する</a>
                            <p>コメント数：{{ $board->comment()->count() }}件</p>
                        </div>
                        <hr>
                            <div class="collapse" id="post{{ $board->id }}">
                                <form id="commentPost" action="{{ url('/') }}/comment/{{ $board->id }}/post" method="post">
                                    {!! csrf_field() !!}
                                    <label>名前</label>
                                    <input class="form-control col col-sm-10" type="text" name="comment_user_name" value="{{ old('name') }}">
                                    <label class="d-flex" style="margin:0px 0px 15px 0px;">内容</label>
                                    <textarea class="col col-sm-10" style="height:50%;" name="comments" value="{{ old('comment') }}"></textarea>
                                    <button class="btn btn-outline-success></button>
                                </form>
                            </div>
                            @foreach( $board->comment as $comment )
                                <div class="media"><img class="rounded-circle mr-3">
                                    <div class="media-body">
                                        <h5 style="margin:10px 10px 10px 0px;">{{ $comment->comment_user_name }}</h5>
                                        <small>投稿日時{{ date("Y年 m月 d日",strtotime($comment->created_at)) }}</small>
                                        <div class="mt-1">
                                            <p>{!! nl2br(e($comment->comments), false) !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                @if($loop->iteration == 3 && $loop->remaining >= 1)
                                    {{-- ループ回数が３回時、ループ残が1以上ある場合--}}
                                    <div class="btn btn-outline-primary ml-3"><a href="{{ url('/')}}/bbs/show/{{$board->id }}">続きを読む</a></div>
                                    @break
                                @endif
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{--@endforeach--}}
    </div>
    <nav class="row justify-content-center">
        {{ $boards->appends(Request::only('keyword'))->links() }}
    </nav>
</div>
