<div id="head">
    <h1 class="atlas_icon"><a href="/top"><img src="{{asset('images/atlas.png')}}"></a></h1>
    <div class="accordion">
        <div class="accordion_container">
            <div class="accordion_title js-accordion-title">
                {{ Auth::user()->username }}さん
            </div>
            <div class="accordion_content">
                <ul>
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
