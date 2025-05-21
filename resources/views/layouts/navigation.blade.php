        <div id="head">
            <h1><a href="/top"><img src="images/atlas.png"></a></h1>
            <div class="accordion">
                <div class="accordion-container">
                    <h3 class="accordion-title js-accordion-title">
                        {{ Auth::user()->username }}さん
                    </h3>
                    <div class="accordion-content">
                        <ul>
                            <li><a href="/top">HOME</a></li>
                            <li><a class="nav-link" href="{{route('profile')}}">プロフィール編集</a></li>
                            <li><a class="nav-link" href="{{route('logout')}}">ログアウト</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
