<section id="blog">
    <div class="flex main_in_posts">
        <div class="flex column calendar_and_tags">
            <div class="calendar">

            </div>
            <div class="tags">

            </div>
        </div>
        <div class="posts flex column">
            @foreach($last14posts as $post)
                @if ($loop->index == 0 || $loop->index == 5 || $loop->index == 9)
                    <div class="flex post_row">
                @endif
                @if ($loop->index == 7)
                    <div class="post flex column">
                        <img src="{{ asset('img/rabbit.png') }}" />
                    </div>
                @endif
                <div class="post flex column">
                    <div class="flex typeTitle">

                        <div class="flex column newType">
                            <div class="post_new">{{ $post->isTodayPost() ? 'new!' : '' }}</div>
                            <div class="post_type">{{ $post->type }}</div>
                        </div>
                        <abbr title="{{ $post->title }}">
                            <span class="post_title">{{ substr($post->title, 0, 50).'...' }}</span>
                        </abbr>
                    </div>
                    <div class="post_content">{{ $post->content }}</div>
                    <div class="flex postFooter">
                        <div class="flex comments">
                            <div class="comments_img">
                                <img src="{{ asset('img/pic/comment.png') }}" />
                            </div>
                            <div class="comments_num">{{ $post->comments_counter }}</div>
                        </div>
                        <div class="flex views">
                            <div class="views_img">
                                <img src="{{ asset('img/pic/views.png') }}" />
                            </div>
                            <div class="views_num">{{ $post->views_counter }}</div>
                        </div>
                        <div class="post_tags">{{ $post->tags }}</div>
                    </div>
                </div>
                    @if ($loop->index == 4 || $loop->index == 8 || $loop->index == 13)
                        </div>
                    @endif
            @endforeach
        </div>
    </div>
</section>