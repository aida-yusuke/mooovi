@extends('layout')

@section('content')
<div class="user_page">
  <header class="user_page-header">
    <div class="yjContainer">
      <a href="">
         <div class="user_image"><img alt="Fix" src="/images/{{ Auth::user()->avatar }}"></div>
        <h2>{{ Auth::user()->name }}<span>さんのマイページ</span></h2>
      </a>
    </div>
  </header>
  <div class="pt1em pb1em" id="contents">  <div id="main_cnt_wrapper">
    <div id="yjContentsBody">
      <div class="yjContainer">
        <ul class="user_page-contents">
          <li style="background-image: url('http://image.eiga.k-img.com/images/movie/80704/poster2/200.jpg?1407203842')">
            <div class="meta">
              <header>
                <div class="title">6才のボクが、大人になるまで。</div>
                <span class="star"><span class="rating-star"><i class="star-actived rate-100"></i></span></span>
              </header>
              <div class="user_review">感動した！久々に名作に出会った感じ</div>
            </div>
          </li>
          <li style="background-image: url('http://image.eiga.k-img.com/images/movie/80704/poster2/200.jpg?1407203842')">
            <div class="meta">
              <header>
                <div class="title">6才のボクが、大人になるまで。</div>
                <span class="star"><span class="rating-star"><i class="star-actived rate-100"></i></span></span>
              </header>
              <div class="user_review">感動した！久々に名作に出会った感じ</div>
            </div>
          </li>
          <li style="background-image: url('http://image.eiga.k-img.com/images/movie/80704/poster2/200.jpg?1407203842')">
            <div class="meta">
              <header>
                <div class="title">6才のボクが、大人になるまで。</div>
                <span class="star"><span class="rating-star"><i class="star-actived rate-100"></i></span></span>
              </header>
              <div class="user_review">感動した！久々に名作に出会った感じ</div>
            </div>
          </li>
          <li style="background-image: url('http://image.eiga.k-img.com/images/movie/80704/poster2/200.jpg?1407203842')">
            <div class="meta">
              <header>
                <div class="title">6才のボクが、大人になるまで。</div>
                <span class="star"><span class="rating-star"><i class="star-actived rate-100"></i></span></span>
              </header>
              <div class="user_review">感動した！久々に名作に出会った感じ</div>
            </div>
          </li>
          <li style="background-image: url('http://image.eiga.k-img.com/images/movie/80704/poster2/200.jpg?1407203842')">
            <div class="meta">
              <header>
                <div class="title">6才のボクが、大人になるまで。</div>
                <span class="star"><span class="rating-star"><i class="star-actived rate-100"></i></span></span>
              </header>
              <div class="user_review">感動した！久々に名作に出会った感じ</div>
            </div>
          </li>
          <li style="background-image: url('http://image.eiga.k-img.com/images/movie/80704/poster2/200.jpg?1407203842')">
            <div class="meta">
              <header>
                <div class="title">6才のボクが、大人になるまで。</div>
                <span class="star"><span class="rating-star"><i class="star-actived rate-100"></i></span></span>
              </header>
              <div class="user_review">感動した！久々に名作に出会った感じ</div>
            </div>
          </li>
          <li style="background-image: url('http://image.eiga.k-img.com/images/movie/80704/poster2/200.jpg?1407203842')">
            <div class="meta">
              <header>
                <div class="title">6才のボクが、大人になるまで。</div>
                <span class="star"><span class="rating-star"><i class="star-actived rate-100"></i></span></span>
              </header>
              <div class="user_review">感動した！久々に名作に出会った感じ</div>
            </div>
          </li>
          <li style="background-image: url('http://image.eiga.k-img.com/images/movie/80704/poster2/200.jpg?1407203842')">
            <div class="meta">
              <header>
                <div class="title">6才のボクが、大人になるまで。</div>
                <span class="star"><span class="rating-star"><i class="star-actived rate-100"></i></span></span>
              </header>
              <div class="user_review">感動した！久々に名作に出会った感じ</div>
            </div>
          </li>
        </ul>
      </div>
     </div>
    </div>
  </div>
</div>
@endsection
