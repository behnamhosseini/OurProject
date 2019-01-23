<div class="modal fade" id="comment-view">
    <div class="modal-dialog ui-block window-popup open-photo-popup open-photo-popup-v1">
        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
            <svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
        </a>


            <div >
                <ul class="comments-list" data-spy="scroll">
                @foreach($post->comments as $comment)
                    <li>
                        <div class="post__author author vcard inline-items">
                            <img src="" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="#">{{$comment->user_id}}</a>
                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        {{($comment->created_at)->diffForHumans()}}
                                    </time>
                                </div>
                            </div>

                            <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg></a>

                        </div>

                        <p>{{$comment->body}}</p>

                        <a href="#" class="post-add-icon inline-items">
                            <svg class="olymp-heart-icon"><use xlink:href="icons/icons.svg#olymp-heart-icon"></use></svg>
                            <span>{{$comment->likeCoount}}</span>
                        </a>
                    </li>
                    @endforeach()
                </ul>
                </div>


    </div>
</div>



