@extends('layouts.app')
@section('content')
        <main class="flex-1">
            <div class="box">
                <div class="p-3 pb-0">
                    <ol class="inline-flex items-center">
                        <li>
                            <a href="/" class="inline-flex items-center">
          <span class="mr-2">
            <svg viewBox="0 0 576 512" class="w-4 h-4 fill-current">
              <path opacity=".4" d="M336 463.58v-95.64c0-8.837-7.163-16-16-16h-64c-8.837 0-16 7.163-16 16v95.71c0 8.806-7.115 15.956-15.92 16l-112.08.29c-8.837 0-16-7.163-16-16V300.05L280.39 148.2a12.19 12.19 0 0 1 15.3 0L480 299.94v164c0 8.837-7.164 16-16 16l-112-.31c-8.837 0-16-7.163-16-16a16 16 0 0 1 0-.05z"/><path d="M530.92 300.94L295.69 107.2a12.19 12.19 0 0 0-15.3 0L45.17 300.94c-5.117 4.21-12.679 3.476-16.89-1.64l-25.5-31c-4.218-5.11-3.497-12.67 1.61-16.89l253.1-208.47c17.72-14.581 43.28-14.581 61 0l253.13 208.47c5.122 4.205 5.866 11.767 1.66 16.89l-25.5 31c-4.209 5.097-11.748 5.83-16.86 1.64z"/>
            </svg>
          </span>
                                <span>Geekhub</span>
                            </a>
                        </li>
                        <li class="mx-2">/</li>
                        <li>
                            <a href="/club/square">
                                <span>中央公园</span>
                            </a>    </li>
                    </ol>
                </div>

                <div class="p-3 text-xl heading"><h4 id="t2">{{ $topic->title }}</h4>
                </div>

                <div class="flex items-center justify-between p-3 pt-0 border-b border-primary-300">
                    <div class="mr-3">
                        <img class="object-cover w-12 h-12 rounded-full" title="{{ $topic->user->name }}" src="{{ $topic->user->avatar }}" />
                    </div>
                    <div class="flex-1 flex flex-col sm:flex-row justify-between items-start sm:items-center meta">
                        <div class="flex flex-col items-start">
                            <div class="flex items-center">
                                <div class="flex items-center mr-3">
          <span class="mr-2 text-sm font-bold text-primary-600">
            <a href="/u/{{ $topic->user->name }}">
              {{ $topic->user->name }}
</a>          </span>
                                    <span>Admin</span>
                                </div>
                                <div class="flex items-center">
                                    <img width="15" height="15" title="创始会员" class="mr-1" src="https://img.geekhub.com/medal/foundermember.png" />
                                    <img width="15" height="15" title="钉子户" class="mr-1" src="https://img.geekhub.com/medal/dingzihu.png" />

                                </div>
                            </div>
                            <div class="flex items-center">
        <span class="mr-1">
          <svg viewBox="0 0 496 512" class="w-3 h-3 fill-current">
            <path opacity=".4" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm24 376v16c0 8.837-7.163 16-16 16h-16c-8.837 0-16-7.163-16-16v-16.2a88.76 88.76 0 0 1-46.4-15.1c-8.7-5.9-10-18.1-2.3-25.2l12-11.3c5.4-5.1 13.3-5.4 19.7-1.6a38.91 38.91 0 0 0 19.9 5.4h45c11.3 0 20.5-10.5 20.5-23.4 0-10.6-6.3-19.9-15.2-22.7L205 268c-29-8.8-49.2-37-49.2-68.6 0-39.3 30.6-71.3 68.2-71.4v-16c0-8.837 7.163-16 16-16h16c8.837 0 16 7.163 16 16v16.2a88.76 88.76 0 0 1 46.4 15.1c8.7 5.9 10 18.1 2.3 25.2l-12 11.3c-5.4 5.1-13.3 5.4-19.7 1.6a38.91 38.91 0 0 0-19.9-5.4h-45c-11.3 0-20.5 10.5-20.5 23.4 0 10.6 6.3 19.9 15.2 22.7l72 21.9c29 8.8 49.2 37 49.2 68.6.2 39.3-30.4 71.2-68 71.4z"/><path d="M224 128v-16c0-8.837 7.163-16 16-16h16c8.837 0 16 7.163 16 16v16.2a88.76 88.76 0 0 1 46.4 15.1c8.7 5.9 10 18.1 2.3 25.2l-12 11.3c-5.4 5.1-13.3 5.4-19.7 1.6a38.91 38.91 0 0 0-19.9-5.4h-45c-11.3 0-20.5 10.5-20.5 23.4 0 10.6 6.3 19.9 15.2 22.7l72 21.9c29 8.8 49.2 37 49.2 68.6.2 39.3-30.4 71.2-68 71.4v16c0 8.837-7.163 16-16 16h-16c-8.837 0-16-7.163-16-16v-16.2a88.76 88.76 0 0 1-46.4-15.1c-8.7-5.9-10-18.1-2.3-25.2l12-11.3c5.4-5.1 13.3-5.4 19.7-1.6a38.91 38.91 0 0 0 19.9 5.4h45c11.3 0 20.5-10.5 20.5-23.4 0-10.6-6.3-19.9-15.2-22.7L205 268c-29-8.8-49.2-37-49.2-68.6 0-39.3 30.6-71.3 68.2-71.4z"/>
          </svg>
        </span>
                                <span class="mr-1">Gbit</span>
                                <span>2803</span>
                                <span class="mx-1">•</span>
                                <span class="mr-1">Star</span>
                                <span>62</span>
                                <span class="mx-1">•</span>
                                <span class="mr-1">Score</span>
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="flex flex-row flex-wrap sm:flex-col items-start sm:items-end">
                            <div class="flex items-center mr-2 sm:mr-0">
        <span class="mr-1">
          <svg viewBox="0 0 512 512" class="w-3 h-3 fill-current">
            <path opacity=".4" d="M220 116c0-6.627 5.373-12 12-12h48c6.627 0 12 5.373 12 12v137.7l63.5 46.2c5.355 3.905 6.53 11.412 2.625 16.766l-.025.034-28.2 38.8c-3.94 5.327-11.435 6.487-16.8 2.6L224.9 294a12.08 12.08 0 0 1-4.9-9.7z"/><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm102.1 308.7l-28.2 38.8c-3.94 5.327-11.435 6.487-16.8 2.6L224.9 294a12.08 12.08 0 0 1-4.9-9.7V116c0-6.627 5.373-12 12-12h48c6.627 0 12 5.373 12 12v137.7l63.5 46.2c5.355 3.905 6.53 11.412 2.625 16.766l-.025.034z"/>
          </svg>
        </span>
                                <span>发布于 5 个月前</span>
                            </div>
                            <div class="flex items-center mr-2 sm:mr-0">
        <span class="mr-1">
          <svg viewBox="0 0 512 512" class="w-3 h-3 fill-current">
            <path opacity=".4" d="M422.66 422.66c4.694 4.678 4.708 12.276.03 16.97l-.03.03-.49.46A247.11 247.11 0 0 1 256 504C119 504 8 393 8 256 8 119.19 119.65 7.76 256.46 8a247.12 247.12 0 0 1 170.85 68.69l-56.62 56.56A166.73 166.73 0 0 0 257.49 88C165.09 87.21 87.21 162 88 257.45 88.76 348 162.18 424 256 424a166.77 166.77 0 0 0 110.63-41.56A12 12 0 0 1 383 383z"/><path d="M504 57.94V192c0 13.255-10.745 24-24 24H345.94c-21.38 0-32.09-25.85-17-41L463 41c15.15-15.15 41-4.44 41 16.94z"/>
          </svg>
        </span>
                                <span>更新于 17 小时前</span>
                            </div>
                            <div class="flex items-center mr-2 sm:mr-0">
        <span class="mr-1">
          <svg viewBox="0 0 512 512" class="w-3 h-3 fill-current">
            <path opacity=".4" d="M512 400v32c0 8.837-7.163 16-16 16H32c-17.673 0-32-14.327-32-32V80c0-8.837 7.163-16 16-16h32c8.837 0 16 7.163 16 16v304h432c8.837 0 16 7.163 16 16z"/><path d="M275.2 96h-38.4c-6.4 0-12.8 6.4-12.8 12.8v198.4c0 6.4 6.4 12.8 12.8 12.8h38.4c6.4 0 12.8-6.4 12.8-12.8V108.8c0-6.4-6.4-12.8-12.8-12.8zm-96 128h-38.4c-6.4 0-12.8 6.4-12.8 12.8v70.4c0 6.4 6.4 12.8 12.8 12.8h38.4c6.4 0 12.8-6.4 12.8-12.8v-70.4c0-6.4-6.4-12.8-12.8-12.8zm288-160h-38.4c-6.4 0-12.8 6.4-12.8 12.8v230.4c0 6.4 6.4 12.8 12.8 12.8h38.4c6.4 0 12.8-6.4 12.8-12.8V76.8c0-6.4-6.4-12.8-12.8-12.8zm-96 96h-38.4c-6.4 0-12.8 6.4-12.8 12.8v134.4c0 6.4 6.4 12.8 12.8 12.8h38.4c6.4 0 12.8-6.4 12.8-12.8V172.8c0-6.4-6.4-12.8-12.8-12.8z"/>
          </svg>
        </span>
                                <span>14478 浏览</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="story p-4">
                    {!! $html !!}
                </div>




                <div class="flex items-center justify-between p-3 border-t border-primary-300">
                    <div class="inline-flex items-center">
                        <a class="inline-flex items-center mr-4" data-remote="true" rel="nofollow" data-method="post" href="/posts/{{ $topic->id }}/toggle_star">
          <span class="mr-1">
            <svg viewBox="0 0 576 512" class="svg">
              <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
            </svg>
          </span>
                            <span id="stars_count" class="mr-1">4</span>
                            <span>星标</span>
                        </a>
                        <a href="/abuse_reports/new?thing_type=Post&thing_id={{ $topic->id }}" data-remote="true" class="inline-flex items-center mr-4">
          <span class="mr-1">
            <svg viewBox="0 0 192 512" class="svg svg-sm">
              <path d="M176 432c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80zM25.26 25.199l13.6 272C39.499 309.972 50.041 320 62.83 320h66.34c12.789 0 23.331-10.028 23.97-22.801l13.6-272C167.425 11.49 156.496 0 142.77 0H49.23C35.504 0 24.575 11.49 25.26 25.199z"/>
            </svg>
          </span>
                            <span>举报</span>
                        </a>
                        <a href="/t/{{$topic->id}}/edit" class="inline-flex items-center">
          <span class="mr-1">
            <svg viewBox="0 0 512 512" class="w-3 h-3 fill-current">
                <path opacity=".4" d="M96 352H32l-16 64 80 80 64-16v-64H96zM498 74.26l-.11-.11L437.77 14c-18.768-18.707-49.132-18.707-67.9 0l-46.1 46.1c-4.694 4.678-4.708 12.276-.03 16.97l.03.03 111 111c4.678 4.694 12.276 4.708 16.97.03l.03-.03 46.1-46.1c18.725-18.677 18.783-48.991.13-67.74z"/>
                <path d="M.37 483.85c-2.3 13.053 6.417 25.5 19.47 27.8 2.756.48 5.574.48 8.33 0l67.32-16.16-79-79zM412.3 210.78l-111-111c-4.73-4.7-12.37-4.7-17.1 0L32 352h64v64h64v64l252.27-252.25c4.694-4.678 4.708-12.276.03-16.97z"/>
          </svg>
          </span>
                            <span>编辑</span>
                        </a>
                    </div>

                    <div class="inline-flex items-center">
                        <span class="mr-3 sub">Share to:</span>
                        <span class="mr-3">
          <a href="">
            <svg viewBox="0 0 512 512" class="svg">
              <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
            </svg>
          </a>
        </span>
                        <span class="mr-3">
          <a href="">
            <svg viewBox="0 0 576 512" class="svg">
              <path d="M385.2 167.6c6.4 0 12.6.3 18.8 1.1C387.4 90.3 303.3 32 207.7 32 100.5 32 13 104.8 13 197.4c0 53.4 29.3 97.5 77.9 131.6l-19.3 58.6 68-34.1c24.4 4.8 43.8 9.7 68.2 9.7 6.2 0 12.1-.3 18.3-.8-4-12.9-6.2-26.6-6.2-40.8-.1-84.9 72.9-154 165.3-154zm-104.5-52.9c14.5 0 24.2 9.7 24.2 24.4 0 14.5-9.7 24.2-24.2 24.2-14.8 0-29.3-9.7-29.3-24.2.1-14.7 14.6-24.4 29.3-24.4zm-136.4 48.6c-14.5 0-29.3-9.7-29.3-24.2 0-14.8 14.8-24.4 29.3-24.4 14.8 0 24.4 9.7 24.4 24.4 0 14.6-9.6 24.2-24.4 24.2zM563 319.4c0-77.9-77.9-141.3-165.4-141.3-92.7 0-165.4 63.4-165.4 141.3S305 460.7 397.6 460.7c19.3 0 38.9-5.1 58.6-9.9l53.4 29.3-14.8-48.6C534 402.1 563 363.2 563 319.4zm-219.1-24.5c-9.7 0-19.3-9.7-19.3-19.6 0-9.7 9.7-19.3 19.3-19.3 14.8 0 24.4 9.7 24.4 19.3 0 10-9.7 19.6-24.4 19.6zm107.1 0c-9.7 0-19.3-9.7-19.3-19.6 0-9.7 9.7-19.3 19.3-19.3 14.5 0 24.4 9.7 24.4 19.3.1 10-9.9 19.6-24.4 19.6z"/>
            </svg>
          </a>
        </span>
                        <span>
          <a href="">
            <svg viewBox="0 0 496 512" class="svg">
              <path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm121.8 169.9l-40.7 191.8c-3 13.6-11.1 16.9-22.4 10.5l-62-45.7-29.9 28.8c-3.3 3.3-6.1 6.1-12.5 6.1l4.4-63.1 114.9-103.8c5-4.4-1.1-6.9-7.7-2.5l-142 89.4-61.2-19.1c-13.3-4.2-13.6-13.3 2.8-19.7l239.1-92.2c11.1-4 20.8 2.7 17.2 19.5z"/>
            </svg>
          </a>
        </span>
                    </div>

                </div>

            </div>

            <div class="mt-5 box">
                <div id="post-189-comment-list">
                    <div class="flex items-center justify-between p-3">
                        <div class="inline-flex items-center">
        <span class="mr-1">
          <svg viewBox="0 0 576 512" class="w-4 h-4 fill-current">
            <path opacity=".4" d="M352 287.9H162.3L79.5 350c-4.294 3.203-10.372 2.32-13.575-1.975A9.7 9.7 0 0 1 64 342.2V288c-35.333-.033-63.967-28.667-64-64V64v.001C.032 28.67 28.666.034 63.999.001h288c35.332.032 63.966 28.667 64 64v160-.01c0 35.296-28.614 63.91-63.91 63.91h-.08z"/><path d="M576 224v160-.001c-.032 35.332-28.666 63.967-63.998 64.001h-32v54.3a9.7 9.7 0 1 1-15.5 7.8L381.7 448H256c-35.333-.033-63.967-28.667-64-64v-64h160c52.985-.083 95.917-43.015 96-96v-64h64c35.332.033 63.967 28.668 64 64z"/>
          </svg>
        </span>
                            <span><span id="comments-counter-num">116</span> 回复</span>
                        </div>
                        <div>
        <span>
          <svg viewBox="0 0 320 512" class="w-4 h-4 fill-current">
            <path opacity=".4" d="M124 351.93V56c0-13.255 10.745-24 24-24h24c13.255 0 24 10.745 24 24v295.93l-36 35.67z"/><path d="M313 337.46L177.48 473l-.06.06c-9.75 9.305-25.09 9.305-34.84 0l-.06-.06L7 337.46c-9.372-9.372-9.372-24.567 0-33.94l17-17c9.372-9.372 24.568-9.372 33.94 0L160 387.6l102-101.08c9.372-9.372 24.568-9.372 33.94 0l17 17c9.388 9.356 9.415 24.551.06 33.94z"/>
          </svg>
        </span>
                        </div>
                    </div>
                    @foreach($topic->comments as $comment)
                    <div class="comment-list px-2 py-3 sm:p-3 border-t border-color" id="comment_47435">
                        <div class="flex">
                            <div class="mr-4">
                                <div class="relative">
                                    <img class="object-cover w-12 h-12 rounded" src="{{ $comment->user->avatar }}" />
                                </div>
                            </div>
                            <div class="flex-1 action-list-parent">
                                <div class="flex flex-wrap items-center justify-between">
                                    <div class="inline-flex items-center">
          <span class="mr-2 font-semibold">
          <a href="/u/{{ $comment->user->name }}">
            {{ $comment->user->name }}
</a>          </span>
                                        <span class="hidden sm:flex items-center mr-2">
          </span>
                                        <span class="mr-2 meta">STAR: 13</span>
                                        <span class="hidden sm:inline-block mr-2 meta">Gbit: 1261</span>
                                        <span class="mr-2 meta">4 个月前</span>
                                        <a href="/abuse_reports/new?thing_type=Comment&thing_id=47435" data-remote="true" class="mr-3 meta">举报</a>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span class="mr-2 meta">#101</span>

                                        <a data-author="Ultraman" data-comment-id="47435" class="reply-to-author mr-2 minor" href="javascript:void(0);">
                                            <svg viewBox="0 0 512 512" class="w-3 h-3 fill-current">
                                                <path d="M8.309 189.836L184.313 37.851C199.719 24.546 224 35.347 224 56.015v80.053c160.629 1.839 288 34.032 288 186.258 0 61.441-39.581 122.309-83.333 154.132-13.653 9.931-33.111-2.533-28.077-18.631 45.344-145.012-21.507-183.51-176.59-185.742V360c0 20.7-24.3 31.453-39.687 18.164l-176.004-152c-11.071-9.562-11.086-26.753 0-36.328z"/>
                                            </svg>
                                        </a>
                                        <a class="inline-flex items-center" data-remote="true" rel="nofollow" data-method="patch" href="/comments/47435/toggle_star">
            <span class="mr-1 minor">
              <svg viewBox="0 0 576 512" class="w-3 h-3 fill-current">
                <path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/>
              </svg>
              </span>
                                            <span class="star-count meta">0</span>
                                        </a>        </div>
                                </div>
                                <div class="mt-2 text-primary-700">
          <span class="break-all max-h-screen overflow-y-auto">
            <p>{{ $comment->text }}</p>

          </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>


                <nav>
                    <ul class="flex p-3 border-t border-color text-primary-500">
                        <div class="inline-flex">
                            <li>
                                <a rel="prev" class="" href="/posts/189?page=1">&lsaquo; Prev</a>
                            </li>
                            <span class=""></span>
                        </div>
                        <div class="inline-flex">
                            <li>
                                <a rel="prev" class="px-1 py-px" href="/posts/189?page=1">1</a>
                            </li>

                            <li>
                                <a data-remote="false" class="px-2 py-px rounded bg-primary-300">2</a>
                            </li>

                        </div>
                        <div class="inline-flex">

                        </div>
                    </ul>
                </nav>

            </div>

            <div class="box mt-5 p-3">
                @if (Auth::check())
                    {!! Form::open(['url' => '/comment', 'method' => 'post', 'id'=>'comment-box-form', 'accept-charset'=>'UTF-8' ]) !!}
                    <input value="{{ $topic->id }}" type="hidden" name="topic_id">
{{--                    <input value="100" type="hidden" name="comment[counter_base]" id="comment_counter_base">--}}
{{--                    <input value="0" class="reply-to-id" type="hidden" name="comment[reply_to_id]" id="comment_reply_to_id">--}}

                    <div class="inline-flex items-center">
        <span class="mr-1">
          <svg viewBox="0 0 512 512" class="w-3 h-3 fill-current">
            <path opacity=".4" d="M96 352H32l-16 64 80 80 64-16v-64H96zM498 74.26l-.11-.11L437.77 14c-18.768-18.707-49.132-18.707-67.9 0l-46.1 46.1c-4.694 4.678-4.708 12.276-.03 16.97l.03.03 111 111c4.678 4.694 12.276 4.708 16.97.03l.03-.03 46.1-46.1c18.725-18.677 18.783-48.991.13-67.74z"></path><path d="M.37 483.85c-2.3 13.053 6.417 25.5 19.47 27.8 2.756.48 5.574.48 8.33 0l67.32-16.16-79-79zM412.3 210.78l-111-111c-4.73-4.7-12.37-4.7-17.1 0L32 352h64v64h64v64l252.27-252.25c4.694-4.678 4.708-12.276.03-16.97z"></path>
          </svg>
        </span>
                        <span>回复</span>

                        <span class="reply-author-name ml-2 text-secondary-600"></span>
                        <a href="javascript:void(0);" class="clear-reply-to ml-2 sub hidden">X</a>
                    </div>

                    <div class="mt-2 mb-4">
                        <textarea id="comment-box" name="text" class="block w-full mt-1 form-textarea placeholder-tertiary-300" rows="5" placeholder="说点什么呢..." required="" style="overflow: hidden; height: 119px;"></textarea>
                        <div style="position: absolute; display: none; overflow-wrap: break-word; white-space: pre-wrap; border-color: rgb(218,228,241); border-style: solid; border-width: 1px; font-weight: 400; width: 744px; font-family: system-ui, -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; line-height: 21px; font-size: 14px; padding: 6px 12px;">&nbsp;</div></div>

                    <div class="flex items-center">
                        <button type="submit" class="btn btn-blue inline-flex items-center create_comment">
          <span class="mr-1">
            <svg viewBox="0 0 512 512" class="h-3 w-3 fill-current">
              <path opacity=".4" d="M504.5 144.42L264.75 385.5 192 312.59l240.11-241c9.912-9.996 26.052-10.064 36.048-.152l.012.012.14.14L504.5 108c9.998 10.081 9.998 26.339 0 36.42z"></path><path d="M264.67 385.59l-54.57 54.87c-9.92 9.996-26.063 10.058-36.06.14l-.14-.14L7.5 273.1c-10.003-10.076-10.003-26.334 0-36.41l36.2-36.41c9.902-9.97 26.004-10.045 36-.17l.16.17z"></path>
            </svg>
          </span>
                            <span>提交</span>
                        </button>
                        <span class="ml-5">
          <svg viewBox="0 0 768 768" class="svg svg-sm sub">
            <path d="M608 768c-88.224 0-160-71.776-160-160v-96H320v96c0 88.224-71.776 160-160 160S0 696.224 0 608s71.776-160 160-160h96V320h-96C71.776 320 0 248.224 0 160S71.776 0 160 0s160 71.776 160 160v96h128v-96C448 71.776 519.776 0 608 0s160 71.776 160 160-71.776 160-160 160h-96v128h96c88.224 0 160 71.776 160 160s-71.774 160-160 160zm-96-256v96c0 52.934 43.066 96 96 96s96-43.066 96-96-43.066-96-96-96h-96zm-352 0c-52.934 0-96 43.066-96 96s43.066 96 96 96 96-43.066 96-96v-96h-96zm160-64h128V320H320v128zm192-192h96c52.934 0 96-43.066 96-96s-43.066-96-96-96-96 43.066-96 96v96zM160 64c-52.934 0-96 43.066-96 96s43.066 96 96 96h96v-96c0-52.934-43.064-96-96-96z"></path>
          </svg>
        </span>
                        <span class="ml-2">
          <svg viewBox="0 0 776 716" class="svg svg-sm sub">
            <path d="M776 232V40c0-11.333-3.833-20.833-11.5-28.5-7.667-7.667-17-11.5-28-11.5S716 3.833 708 11.5 696 28.667 696 40v192c0 61.333-21.667 113.667-65 157s-95.667 65-157 65H134l113-112c7.333-8 11-17.5 11-28.5s-3.833-20.333-11.5-28c-7.667-7.667-17-11.5-28-11.5s-20.5 4-28.5 12L12 464c-8 8-12 17.5-12 28.5S4 513 12 521l183 183c8 8 17.5 12 28.5 12s20.5-3.833 28.5-11.5 12-17 12-28-4-20.5-12-28.5L138 534h336c83.333 0 154.5-29.5 213.5-88.5S776 315.333 776 232z"></path>
          </svg>
        </span>
                        <a href="https://sm.ms" class="badge badge-sq ml-5" target="_blank">sm.ms</a>
                    </div>
                    {!! Form::close() !!}
                @else
                <div class="p-3 pb-0 inline-flex items-center">
      <span class="mr-1">
        <svg viewBox="0 0 512 512" class="w-3 h-3 fill-current">
          <path opacity=".4" d="M96 352H32l-16 64 80 80 64-16v-64H96zM498 74.26l-.11-.11L437.77 14c-18.768-18.707-49.132-18.707-67.9 0l-46.1 46.1c-4.694 4.678-4.708 12.276-.03 16.97l.03.03 111 111c4.678 4.694 12.276 4.708 16.97.03l.03-.03 46.1-46.1c18.725-18.677 18.783-48.991.13-67.74z"/><path d="M.37 483.85c-2.3 13.053 6.417 25.5 19.47 27.8 2.756.48 5.574.48 8.33 0l67.32-16.16-79-79zM412.3 210.78l-111-111c-4.73-4.7-12.37-4.7-17.1 0L32 352h64v64h64v64l252.27-252.25c4.694-4.678 4.708-12.276.03-16.97z"/>
        </svg>
      </span>
                    <span>回复</span>
                </div>
                <div class="m-3 mb-5 p-3 h-32 border border-color rounded">
                    <a href="/users/sign_in" class="mr-2 btn btn-white">登录</a><span>后再评论</span>
                </div>
            </div>

@endif


        </main>
@endsection
