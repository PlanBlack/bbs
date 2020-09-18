<div class="block px-3 py-5">
    <textarea rows="2" class="form-input block w-full" placeholder="输入标题" required="required" autofocus="autofocus" name="title" id="post_title">
</textarea>
</div>

<div class="p-3 bg-light-gray border-t border-b border-color">
    <div class="inline-flex items-center">
      <span class="mr-1">
        <svg viewBox="0 0 512 512" class="h-3 w-3 fill-current">
          <path opacity=".4" d="M96 352H32l-16 64 80 80 64-16v-64H96zM498 74.26l-.11-.11L437.77 14c-18.768-18.707-49.132-18.707-67.9 0l-46.1 46.1c-4.694 4.678-4.708 12.276-.03 16.97l.03.03 111 111c4.678 4.694 12.276 4.708 16.97.03l.03-.03 46.1-46.1c18.725-18.677 18.783-48.991.13-67.74z"/><path d="M.37 483.85c-2.3 13.053 6.417 25.5 19.47 27.8 2.756.48 5.574.48 8.33 0l67.32-16.16-79-79zM412.3 210.78l-111-111c-4.73-4.7-12.37-4.7-17.1 0L32 352h64v64h64v64l252.27-252.25c4.694-4.678 4.708-12.276.03-16.97z"/>
        </svg>
      </span>
        <span>详情</span>
    </div>

    <div class="block mt-1">
      <textarea class="block w-full mt-1 form-textarea" rows="6" placeholder="说出你的故事..." required="required" name="content" id="post_content">
</textarea>
        <span class="meta ml-3">Markdown</span>
    </div>

    {{--                        <div class="block mt-3">--}}
    {{--                            <select name="post[club_id]" class="form-select block w-full mt-1" required>--}}
    {{--                                <option value="">请选择小组</option>--}}
    {{--                                <option value="4">安卓联盟</option>--}}
    {{--                                <option value="2">争议终端组</option>--}}
    {{--                                <option value="6">分子/分母</option>--}}
    {{--                                <option value="3">Apple Park</option>--}}
    {{--                                <option value="8">拆箱小组</option>--}}
    {{--                                <option value="7">一锤定音</option>--}}
    {{--                                <option value="1">中央公园</option>--}}
    {{--                                <option value="10">站务管理</option>--}}
    {{--                            </select>--}}

    {{--                            <span class="meta ml-3 mb-2">选择合适的小组</span>--}}
    {{--                        </div>--}}
    {{--                        <input value="0" type="hidden" name="post[shop_id]" id="post_shop_id" />--}}
</div>

<div class="p-3">
    <button type="submit" class="btn btn-blue inline-flex items-center">
    <span class="mr-2">
      <svg viewBox="0 0 512 512" class="h-3 w-3 fill-current">
        <path opacity=".4" d="M504.5 144.42L264.75 385.5 192 312.59l240.11-241c9.912-9.996 26.052-10.064 36.048-.152l.012.012.14.14L504.5 108c9.998 10.081 9.998 26.339 0 36.42z"/><path d="M264.67 385.59l-54.57 54.87c-9.92 9.996-26.063 10.058-36.06.14l-.14-.14L7.5 273.1c-10.003-10.076-10.003-26.334 0-36.41l36.2-36.41c9.902-9.97 26.004-10.045 36-.17l.16.17z"/>
      </svg>
    </span>
        <span>提交</span>
    </button>
</div>
