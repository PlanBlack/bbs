@extends('layouts.app')
@section('title','首页')
@section('content')
<main class="flex-1">
    <div class="box">
        <navbar>
            <div class="px-3 py-2 flex items-center border-t border-color">
    <span class="mr-1">
      <svg viewBox="0 0 448 512" class="svg">
        <path opacity=".4" d="M.06 160v-.13l96 .06v-32C96.12 57.35 153.57 0 224.15 0c70.58 0 128 57.49 127.92 128.07V160h-64v-32.002c.021-35.346-28.615-64.017-63.962-64.038-35.346-.021-64.017 28.615-64.038 63.962v32h64z"/><path d="M.06 159.87l-.16 272v.002c-.026 44.183 35.77 80.022 79.952 80.048l288 .16c44.183 0 80-35.817 80-80l.16-272zM128 247.94c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm192 .12c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24z"/>
      </svg>
    </span>
                <shop>
                    <ul class="inline-flex flex-wrap ml-2">
                        <li class="mr-5">
                            <a href="/shop/apple">苹果渠道店</a>
                        </li>
                        <li class="mr-5">
                            <a href="/shop/soundset">声音玄学</a>
                        </li>
                        <li class="mr-5">
                            <a href="/shop/cellphone">小众手机</a>
                        </li>
                        <li class="mr-5">
                            <a href="/shop/kbdman">KBDMan</a>
                        </li>
                        <li class="mr-5">
                            <a href="/shop/loushang">香港楼上</a>
                        </li>
                    </ul>
                </shop>
            </div>

            <div class="px-3 py-2 flex items-center border-t border-color bg-tertiary-101">
    <span class="mr-1">
      <svg viewBox="0 0 512 512" class="svg">
        <path opacity=".4" d="M128 256C57.308 256 0 313.308 0 384c0 70.692 57.308 128 128 128 70.692 0 128-57.308 128-128 0-70.692-57.308-128-128-128zm379.51-80l-95-160c-12.67-21.33-44.35-21.33-57 0l-95 160c-12.67 21.33 3.17 48 28.51 48H479c25.34 0 41.18-26.67 28.51-48z"/><path d="M512 320v160c0 17.673-14.327 32-32 32H320c-17.673 0-32-14.327-32-32V320c0-17.673 14.327-32 32-32h160c17.673 0 32 14.327 32 32z"/>
      </svg>
    </span>
                <club>
                    <ul class="inline-flex flex-wrap ml-2">
                        <li class="mr-5">
                            <a href="/club/square">中央公园</a>
                        </li>
                        <li class="mr-5">
                            <a href="/club/molecules">分子/分母</a>
                        </li>
                        <li class="mr-5">
                            <a href="/club/auction">一锤定音</a>
                        </li>
                        <li class="mr-5">
                            <a href="/club/unbox">拆箱小组</a>
                        </li>
                        <li class="mr-5">
                            <a href="/club/apple">Apple Park</a>
                        </li>
                        <li class="mr-5">
                            <a href="/club/android">安卓联盟</a>
                        </li>
                        <li class="mr-5">
                            <a href="/club/review">争议终端组</a>
                        </li>
                        <li class="mr-5">
                            <a href="/club/transaction">站务管理</a>
                        </li>
                    </ul>
                </club>
            </div>

        </navbar>
@foreach( $topics  as $topic)
        <div id="home-stikcy-feeds">
            <article id="feed-478" class="flex items-center px-2 py-3 sm:p-3 border-t border-color">
                <div>
                    <img class="object-cover h-12 w-12 mr-3 rounded" src="{{ $topic->user->avatar }}" />
                </div>
                <div class="flex-1 flex flex-col justify-between self-stretch mr-2">
                    <h3 class="flex items-center">
                        <a href="/t/{{ $topic->id }}">
                            <h4 id="t2">{{ $topic->title }}</h4>

                        </a>
                    </h3>

                    <div class="meta mt-1">
                        <a class="badge badge-sq sub" href="/club/square">中央公园</a>
                        <span class="mx-1 sm:mx-2">•</span>
                        <a href="/u/PlanZ">
                            <span class="font-medium sub">{{ $topic->user->name }}</span>
                        </a>      <span class="mx-1 sm:mx-2">•</span>
                        <span>2 小时前</span>
                        <span class="hidden sm:inline-block mx-1 sm:mx-2">•</span>
                        <span class="hidden sm:inline-block ">最后回复</span>
                        <a href="/u/kantorgong">
                            <span class="hidden sm:inline-block font-medium sub ml-1 sm:ml-2">{{ $topic->user->name }}</span>
                        </a>    </div>
                </div>


                <div class="flex flex-col items-center sm:flex-row sm:items-center">
      <span class="mb-2 sm:mb-0 sm:mr-2">
        <svg viewBox="0 0 576 512" class="svg">
          <path opacity=".4" d="M372 192h-52v-5.47c38.363-13.563 64.009-49.84 64-90.53 0-52.22-42.36-95.25-94.58-96-53.013-.851-96.678 41.434-97.529 94.447-.663 41.291 25.156 78.38 64.11 92.093V192h-52c-6.628 0-12 5.373-12 12v40c0 6.627 5.372 12 12 12h168c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12zM288 64c17.673 0 32 14.327 32 32 0 17.673-14.327 32-32 32-17.673 0-32-14.327-32-32 0-17.673 14.327-32 32-32z"/><path d="M564 352h-32.51C509.63 454.62 394.61 512 288 512c-106.41 0-221.58-57.27-243.46-160H12c-6.627.016-12.013-5.343-12.03-11.97a12 12 0 0 1 3.52-8.52l67.26-67c4.706-4.667 12.294-4.667 17 0l67.26 67c4.689 4.684 4.693 12.282.01 16.97a12 12 0 0 1-8.47 3.52h-35.26c20.37 54.34 85.47 86.62 144.61 94V288h64.22v158c59.36-7.43 124.26-39.7 144.62-94h-35.26c-6.627 0-12-5.373-12-12a12 12 0 0 1 3.52-8.49l67.26-67c4.706-4.667 12.294-4.667 17 0l67.26 67c4.689 4.684 4.693 12.282.01 16.97A12 12 0 0 1 564 352z"/>
        </svg>
      </span>


                    <span><a class="badge sub comments-count" href="/posts/{{ $topic->id }}">116</a></span>
                </div>
            </article>

        </div>
        @endforeach
        <div>

            <nav>
                <ul class="flex p-3 border-t border-color text-primary-500">
                    <div class="inline-flex">

                    </div>
                    <div class="inline-flex">
                        <li>
                            <a data-remote="false" class="px-2 py-px rounded bg-primary-300">1</a>
                        </li>

                        <li>
                            <a rel="next" class="px-1 py-px" href="/?page=2">2</a>
                        </li>

                        <li>
                            <a class="px-1 py-px" href="/?page=3">3</a>
                        </li>

                        <li>
                            <a class="px-1 py-px" href="/?page=4">4</a>
                        </li>

                        <li class='page-item disabled page-gap'>
                            <a class="page-link" href="#">&hellip;</a>
                        </li>

                        <li>
                            <a class="px-1 py-px" href="/?page=42">42</a>
                        </li>

                        <li>
                            <a class="px-1 py-px" href="/?page=43">43</a>
                        </li>

                    </div>
                    <div class="inline-flex">
                        <span class="ml-3"></span>
                        <li>
                            <a rel="next" class="" href="/?page=2">Next &rsaquo;</a>
                        </li>

                    </div>
                </ul>
            </nav>

        </div>
    </div>

</main>
@endsection
