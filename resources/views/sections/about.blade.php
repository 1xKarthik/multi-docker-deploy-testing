<div class="row justify-content-between">
    <div class="col-sm-6">
        <h2 id="titleName" class="sectionHead">{!! $about->full_name !!}</h2>
        <span id="course">{!! $about->title !!}</span>
    </div>
    <div class="col-sm-6">
        <div class="socialIcons">
            <a class="socialIcon" id="linkedinIcon" target="_blank" href="{!! $about->linkedin_url !!}"></a>
            <a class="socialIcon" id="githubIcon" target="_blank" href="{!! $about->github_url !!}"></a>
            <!-- <a class="socialIcon" id="twitterIcon" target="_blank" href="https://twitter.com/karthikgirraju"></a>
            <a class="socialIcon" id="gplusIcon" target="_blank" href="https://plus.google.com/+KarthikGirraju"></a> -->
        </div>
    </div>
</div>
<div class="row">
    <ul id="intro" class="sectionBody">
        @foreach($intro as $i)
            <li>{!! $i->content !!}</li>
        @endforeach
    </ul>
</div>