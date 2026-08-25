<div id="head">
    <div class="atlas_icon">
        <a href="/top">
            <img src="{{asset('images/atlas.png')}}">
        </a>
    </div>
    <div class="accordion">
        <div class="accordion_title">
            <p>{{ Auth::user()->username }}さん</p>
        </div>
        <div class="accordion_container js-accordion-container">
            <div class="accordion_content">
                <ul class="accordion_group">
                    <li><a href="/top">HOME</a></li>
                    <li><a class="nav_link" href="{{route('profile')}}">プロフィール編集</a></li>
                    <li><a class="nav_link" href="{{route('logout')}}">ログアウト</a></li>
                </ul>
            </div>
        </div>
        <div class="icon_top">
            <img src="{{asset('storage/images/' . Auth::user()->icon_image)}}">
        </div>
    </div>
</div>
