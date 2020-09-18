@extends('layouts.app')
@section('title','发布话题')
@section('content')
        <main class="flex-1">

            <div class="box p-3">
                <ol class="inline-flex items-center">
                    <li>
                        <a href="/" class="inline-flex items-center">
          <span class="mr-2">
            <svg viewBox="0 0 576 512" class="h-4 w-4 fill-current">
              <path opacity=".4" d="M336 463.58v-95.64c0-8.837-7.163-16-16-16h-64c-8.837 0-16 7.163-16 16v95.71c0 8.806-7.115 15.956-15.92 16l-112.08.29c-8.837 0-16-7.163-16-16V300.05L280.39 148.2a12.19 12.19 0 0 1 15.3 0L480 299.94v164c0 8.837-7.164 16-16 16l-112-.31c-8.837 0-16-7.163-16-16a16 16 0 0 1 0-.05z"/><path d="M530.92 300.94L295.69 107.2a12.19 12.19 0 0 0-15.3 0L45.17 300.94c-5.117 4.21-12.679 3.476-16.89-1.64l-25.5-31c-4.218-5.11-3.497-12.67 1.61-16.89l253.1-208.47c17.72-14.581 43.28-14.581 61 0l253.13 208.47c5.122 4.205 5.866 11.767 1.66 16.89l-25.5 31c-4.209 5.097-11.748 5.83-16.86 1.64z"/>
            </svg>
          </span>
                            <span>DuNFu</span>
                        </a>
                    </li>
                    <li class="mx-2">/</li>
                    <li>发布话题</li>
                </ol>
            </div>


            <div class="box mt-5">
                <div class="inline-flex items-center w-full p-3 border-b border-primary-300">
      <span class="mr-1">
        <svg viewBox="0 0 192 512" class="h-3 w-3 fill-current">
          <path opacity=".4" d="M96 512c-44.183 0-80-35.817-80-80s35.817-80 80-80 80 35.817 80 80v-.003c-.048 44.163-35.835 79.952-79.998 80.003z"/><path d="M49.22 0h93.56c13.255-.017 24.013 10.715 24.03 23.97a24 24 0 0 1-.03 1.23l-13.63 272c-.64 12.784-11.2 22.816-24 22.8H62.84c-12.8.016-23.36-10.016-24-22.8l-13.59-272C24.587 11.962 34.782.693 48.02.03a24 24 0 0 1 1.2-.03z"/>
        </svg>
      </span>
                    <span class="text-primary-600">请填写以下表单，编辑器支持 MarkDown，请勿发布垃圾信息。</span>
                </div>

                {!! Form::open(['url' => '/t', 'method' => 'post', 'class'=>'new_post', 'id'=>'new_post', 'accept-charset'=>'UTF-8']) !!}

                @include('layouts._text')

                {!! Form::close() !!}
            </div>

        </main>
@endsection
