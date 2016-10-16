<div class="panel-footer operate">
    <div class="pull-left" style="font-size:15px;">
        <a class=""
           href="http://service.weibo.com/share/share.php?url=http%3A%2F%2Fhifone.app%2Fthread%2F5&amp;type=3&amp;pic=&amp;title=测试"
           target="_blank" title="分享到微博">
            <i class="fa fa-weibo"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fhifone.app%2Fthread%2F5&amp;text=测试&amp;via=hifone.com"
           class="" target="_blank" title="分享到 Twitter">
            <i class="fa fa-twitter"></i>
        </a>
        <a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fhifone.app%2Fthread%2F5" class="" target="_blank"
           title="分享到 Facebook">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="https://plus.google.com/share?url=http%3A%2F%2Fhifone.app%2Fthread%2F5" class="" target="_blank"
           title="分享到 Google Plus">
            <i class="fa fa-google-plus"></i>
        </a>
    </div>
    <div class="pull-right">
        @if(!empty($thread->tags))
            <span class="tag-list hidden-xs">
                {{ trans('forum.tag') }}:
                @foreach($thread->tags as $tag)
                    <a href="#"><span class="tag">{{ $tag->name }}</span></a>
                @endforeach
            </span>
        @endif

        <a class="followable" data-action="follow" data-id="5" data-type="Thread" href="javascript:void(0);"
           data-url="">
            <i class="fa fa-eye"></i> <span>关注</span>
        </a>

        <a class="favoriteable" data-type="Thread" data-id="5" href="javascript:void(0);"
           data-url="">
            <i class="fa fa-bookmark"></i> <span>收藏</span>
        </a>


        <a id="thread-append-button" href="javascript:void(0);" title="备注" class="admin" data-toggle="modal"
           data-target="#exampleModal">
            <i class="fa fa-plus"></i>
        </a>

        <a id="thread-edit-button" href="" title="编辑" class="admin">
            <i class="fa fa-pencil-square-o"></i>
        </a>

    </div>
    <div class="clearfix"></div>
</div>