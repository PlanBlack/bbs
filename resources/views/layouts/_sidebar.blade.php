<sidebar id="sidebar" class="flex flex-col justify-between w-full mt-5 ml-0 md:w-66 md:flex-shrink-0 md:mt-0 md:ml-5">
    <div>
        <div class="p-3 box">
            @if (Auth::check())

                <div class="flex justify-between">
                    <div class="flex">
                        <img class="object-cover w-10 h-10 mr-3 rounded-full" src="{{ Auth::user()->avatar }}">
                        <div>
                            <div class="flex items-center">
                                <h4>{{ Auth::user()->name }}</h4>
                                <div class="inline-flex items-center ml-3">
                                </div>
                            </div>
                            <span class="meta">know it then hack it</span>
                        </div>
                    </div>
                </div>

                <div class="pt-3">
                    <div class="w-full rounded shadow-inner bg-primary-300 overflow-hidden">
                        <div class="h-1 rounded bg-secondary-600" style="width: 0%;"></div>
                    </div>
                </div>

                <div class="flex items-center py-3 text-center border-b border-color">
      <span class="flex flex-col flex-1">
        <span>1</span>
        <span>店铺</span>
      </span>

                    <span class="flex flex-col flex-1 border-l border-color">
        <span>1</span>
        <span>小组</span>
      </span>

                    <span class="flex flex-col flex-1 border-l border-color">
        <span>1</span>
        <span>GR</span>
      </span>

                </div>


                <div class="py-2.5 pl-0 border-b border-color flex">
                    <a class="flex-1 inline-flex items-center mr-2 hover:text-secondary-600" href="/user_orders/buyer">
      <span class="mr-2">
        <svg viewBox="0 0 512 512" class="svg fill-current">
          <path opacity=".4" d="M512 488v.12c-.033 13.221-10.778 23.913-24 23.88H151.88c-13.221-.033-23.913-10.778-23.88-24V352h127.63v64.9c0 14.27 17.28 21.34 27.37 11.27L378.56 332c6.565-6.626 6.565-17.304 0-23.93l-95.49-96.25c-10.09-10.07-27.37-3-27.37 11.27v65H128V23.88C128.033 10.66 138.778-.033 152 0h232v112c0 8.837 7.163 16 16 16h112z"></path><path d="M505 105L407.1 7a24 24 0 0 0-17-7H384v112c0 8.837 7.163 16 16 16h112v-6.1a23.9 23.9 0 0 0-7-16.9zM283.07 211.82c-10.09-10.07-27.37-3-27.37 11.27v65H16c-8.837 0-16 7.163-16 16V336c0 8.837 7.163 16 16 16h239.63v64.9c0 14.27 17.28 21.34 27.37 11.27L378.56 332c6.565-6.626 6.565-17.304 0-23.93z"></path>
        </svg>
      </span>
                        <span>买入订单</span>
                    </a>    <a class="flex-1 inline-flex items-center ml-2 hover:text-secondary-600" href="/user_orders/seller">
      <span class="mr-2">
        <svg viewBox="0 0 576 512" class="svg fill-current">
          <path opacity=".4" d="M384 352.05v136.07c-.033 13.221-10.778 23.913-24 23.88H23.88C10.66 511.967-.033 501.222 0 488V23.88C.033 10.66 10.778-.033 24 0h232v112c0 8.837 7.163 16 16 16h112v160.05H208c-8.837 0-16 7.163-16 16v32c0 8.837 7.163 16 16 16z"></path><path d="M272 128h112v-6.1a23.9 23.9 0 0 0-7-16.9L279.1 7a24 24 0 0 0-17-7H256v112c0 8.837 7.163 16 16 16zm299 180.05l-95.61-96.5c-10.1-10.1-27.41-3-27.41 11.3v65.2H208c-8.837 0-16 7.163-16 16v32c0 8.837 7.163 16 16 16h239.93v65.1c0 14.3 17.31 21.4 27.41 11.3l95.71-96.4c6.597-6.648 6.575-17.38-.05-24z"></path>
        </svg>
      </span>
                        <span>卖出订单</span>
                    </a>  </div>

                <div class="py-2.5 pl-0 border-b border-color flex">
                    <a class="flex-1 inline-flex items-center mr-2 hover:text-secondary-600" href="/gbit_orders">
      <span class="mr-2">
        <svg viewBox="0 0 512 512" class="svg fill-current">
          <path opacity=".4" d="M192 0H32C14.327 0 0 14.327 0 32v160c0 17.673 14.327 32 32 32h160c17.673 0 32-14.327 32-32V32c0-17.673-14.327-32-32-32zm-16 120a8 8 0 0 1-8 8H56a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h112a8 8 0 0 1 8 8zm16 168H32c-17.673 0-32 14.327-32 32v160c0 17.673 14.327 32 32 32h160c17.673 0 32-14.327 32-32V320c0-17.673-14.327-32-32-32zm-29.09 140.29a8 8 0 0 1 0 11.31l-11.31 11.31a8 8 0 0 1-11.31 0L112 422.63l-28.29 28.29a8 8 0 0 1-11.31 0L61.09 439.6a8 8 0 0 1 0-11.31L89.37 400l-28.29-28.29a8 8 0 0 1 0-11.31l11.31-11.31a8 8 0 0 1 11.31 0l28.3 28.28 28.29-28.29a8 8 0 0 1 11.31 0l11.31 11.31a8 8 0 0 1 0 11.31L134.63 400zM480 0H320c-17.673 0-32 14.327-32 32v160c0 17.673 14.327 32 32 32h160c17.673 0 32-14.327 32-32V32c0-17.673-14.327-32-32-32zm-16 120a8 8 0 0 1-8 8h-40v40a8 8 0 0 1-8 8h-16a8 8 0 0 1-8-8v-40h-40a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h40V56a8 8 0 0 1 8-8h16a8 8 0 0 1 8 8v40h40a8 8 0 0 1 8 8z"></path><path d="M162.91 360.39l-11.31-11.31a8 8 0 0 0-11.31 0L112 377.37l-28.3-28.28a8 8 0 0 0-11.31 0L61.08 360.4a8 8 0 0 0 0 11.31L89.37 400l-28.28 28.29a8 8 0 0 0 0 11.31l11.31 11.32a8 8 0 0 0 11.31 0L112 422.63l28.29 28.28a8 8 0 0 0 11.31 0l11.31-11.31a8 8 0 0 0 0-11.31L134.63 400l28.28-28.3a8 8 0 0 0 0-11.31zM344 128h40v40a8 8 0 0 0 8 8h16a8 8 0 0 0 8-8v-40h40a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8h-40V56a8 8 0 0 0-8-8h-16a8 8 0 0 0-8 8v40h-40a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zM168 96H56a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h112a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8zm312 192H320c-17.673 0-32 14.327-32 32v160c0 17.673 14.327 32 32 32h160c17.673 0 32-14.327 32-32V320c0-17.673-14.327-32-32-32zm-16 152a8 8 0 0 1-8 8H344a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h112a8 8 0 0 1 8 8zm0-64a8 8 0 0 1-8 8H344a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h112a8 8 0 0 1 8 8z"></path>
        </svg>
      </span>
                        <span>福利订单</span>
                    </a>    <a class="flex-1 inline-flex items-center ml-2 hover:text-secondary-600" href="/my/tickets">
      <span class="mr-2">
        <svg viewBox="0 0 384 512" class="svg fill-current">
          <path opacity=".4" d="M360 0H24C10.778-.033.033 10.658 0 23.88V488c-.033 13.222 10.658 23.967 23.88 24H360c13.222.033 23.967-10.658 24-23.88V24c.033-13.222-10.658-23.967-23.88-24H360zM161.7 202.4l12.6 12.7a5.37 5.37 0 0 1 0 7.6l-64.2 63.6a5.37 5.37 0 0 1-7.6 0L65.6 249a5.37 5.37 0 0 1 0-7.6l12.7-12.6a5.37 5.37 0 0 1 7.6 0l20.6 20.8 47.6-47.2a5.37 5.37 0 0 1 7.6 0zM64 112c0-8.837 7.163-16 16-16h32c8.837 0 16 7.163 16 16v32c0 8.837-7.163 16-16 16H80c-8.837 0-16-7.163-16-16zm64 288c0 8.837-7.163 16-16 16H80c-8.837 0-16-7.163-16-16v-32c0-8.837 7.163-16 16-16h32c8.837 0 16 7.163 16 16zm192-8a8 8 0 0 1-8 8H168a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h144a8 8 0 0 1 8 8zm-9.6-120H170.2s29.2-30.2 30.4-32h109.7c5.3 0 9.6 3.6 9.6 8v16h.1c0 4.4-4.3 8-9.6 8zm9.6-136a8 8 0 0 1-8 8H168a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h144a8 8 0 0 1 8 8z"></path><path d="M80 160h32c8.837 0 16-7.163 16-16v-32c0-8.837-7.163-16-16-16H80c-8.837 0-16 7.163-16 16v32c0 8.837 7.163 16 16 16zm94.3 55.1l-12.6-12.7a5.37 5.37 0 0 0-7.6 0l-47.6 47.2-20.6-20.8a5.37 5.37 0 0 0-7.6 0l-12.7 12.6a5.37 5.37 0 0 0 0 7.6l36.9 37.3a5.37 5.37 0 0 0 7.6 0l64.2-63.6a5.37 5.37 0 0 0 0-7.6zM112 352H80c-8.837 0-16 7.163-16 16v32c0 8.837 7.163 16 16 16h32c8.837 0 16-7.163 16-16v-32c0-8.837-7.163-16-16-16z"></path>
        </svg>
      </span>
                        <span>我的工单</span>
                    </a>  </div>

                <div class="py-2.5 pb-0 pl-0 flex">
                    <a class="flex-1 inline-flex items-center mr-2 hover:text-secondary-600" href="/u/Hell">
      <span class="mr-2">
        <svg viewBox="0 0 640 512" class="svg fill-current">
          <path opacity=".4" d="M0 256v128c0 17.673 14.327 32 32 32h32V224H32c-17.673 0-32 14.327-32 32zm608-32h-32v192h32c17.673 0 32-14.327 32-32V256c0-17.673-14.327-32-32-32zM192 416h64v-32h-64zm192 0h64v-32h-64zm-96 0h64v-32h-64z"></path><path d="M464 96H352V32c0-17.673-14.327-32-32-32-17.673 0-32 14.327-32 32v64H176c-44.183 0-80 35.817-80 80v272-.001c.032 35.332 28.666 63.967 63.999 64h320c35.332-.032 63.966-28.667 64-64V176c0-44.182-35.818-80-80-80zM256 416h-64v-32h64zm-32-120c-22.091 0-40-17.909-40-40s17.909-40 40-40 40 17.909 40 40-17.909 40-40 40zm128 120h-64v-32h64zm96 0h-64v-32h64zm-32-120c-22.091 0-40-17.909-40-40s17.909-40 40-40 40 17.909 40 40-17.909 40-40 40z"></path>
        </svg>
      </span>
                        <span>个人中心</span>
                    </a>    <a class="flex-1 inline-flex items-center ml-2 hover:text-secondary-600" href="/settings">
      <span class="mr-2">
        <svg viewBox="0 0 640 512" class="svg fill-current">
          <path opacity=".4" d="M358.9 433.3l-6.8 61c-.983 8.737 5.303 16.617 14.04 17.6a15.92 15.92 0 0 0 3.56 0l60.9-6.8 137.9-137.9-71.7-71.7zM633 268.9L595.1 231c-9.356-9.279-24.444-9.279-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.301-9.386 9.301-24.514 0-33.9z"></path><path d="M313.6 288h-16.7a174.08 174.08 0 0 1-145.8 0h-16.7C60.18 288.017.017 348.18 0 422.4V464c0 26.51 21.49 48 48 48h274.9a48 48 0 0 1-2.6-21.3l6.8-60.9 1.2-11.1 85.2-85.2c-24.5-27.7-60-45.5-99.9-45.5zM224 256c70.692 0 128-57.308 128-128C352 57.308 294.692 0 224 0 153.308 0 96 57.307 96 128c0 70.692 57.308 128 128 128z"></path>
        </svg>
      </span>
                        <span>账号设置</span>
                    </a>  </div>
            @else
            <div class="flex justify-between">
                <div class="flex">
                    <div>
                        <h4>DuNFu</h4>
                        <span class="meta">The stuff we care about</span>
                    </div>
                </div>
            </div>
            <div class="my-5 pb-5 flex items-center border-b border-tertiary-200">
                <div class="flex-1 mr-2">
                    <a class="btn btn-blue block text-center" href="/users/sign_in">登录</a>
                </div>
                <div class="flex-1 ml-2">
                    <a class="btn btn-white block text-center" href="/users/sign_up">注册</a>
                </div>
            </div>

            <div class="flex justify-around">
                <a class="inline-flex items-center" href="/users/auth/github">
                    <svg viewBox="0 0 496 512" class="svg mr-1">
                        <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2 .6-2-1.3-4.3-4.3-5.2-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5 21.3 0 42.8 2.9 62.8 8.5 0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/>
                    </svg>
                    <span>GitHub</span>
                </a>  <span class="text-primary-300">|</span>
                <a class="inline-flex items-center" href="/users/auth/google_oauth2">
                    <svg viewBox="0 0 488 512" class="svg mr-1">
                        <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/>
                    </svg>
                    <span>Google</span>
                </a>
            </div>
            @endif
        </div>



        <div class="p-3 mt-5 box">
            <div>
                <h4>今日热门</h4>
            </div>
            <div class="flex items-center pt-3 mt-3 border-t border-color text-xs">
                <img class="h-5 w-5 object-cover rounded mr-3" src="https://img.geekhub.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBb29KIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--cc24b1f0e2b30fd00bacc6e989b28e18bfab2ba7/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9VY21WemFYcGxYM1J2WDJ4cGJXbDBXd2RwTldrMSIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--feebd2381c85a1cd4c4d6e0f199f08111bb273f9/CleanShot%202020-04-28%20at%2016.38.34.jpg" />
                <span>
          <a class="hot-feed" href="/auctions/67">
            iPhone 12 盲拍！

</a>        </span>
            </div>
            <div class="flex items-center pt-3 mt-3 border-t border-color text-xs">
                <img class="h-5 w-5 object-cover rounded mr-3" src="https://img.geekhub.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdWdKIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--6315d2aae90fc5306f939c06919c8e26554e4878/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9VY21WemFYcGxYM1J2WDJ4cGJXbDBXd2RwTldrMSIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--feebd2381c85a1cd4c4d6e0f199f08111bb273f9/CleanShot%202020-04-29%20at%2019.58.12.jpg" />
                <span>
          <a class="hot-feed" href="/posts/1639">
            福利社库存更新！

</a>        </span>
            </div>
            <div class="flex items-center pt-3 mt-3 border-t border-color text-xs">
                <img class="h-5 w-5 object-cover rounded mr-3" src="https://img.geekhub.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBb29KIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--cc24b1f0e2b30fd00bacc6e989b28e18bfab2ba7/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9VY21WemFYcGxYM1J2WDJ4cGJXbDBXd2RwTldrMSIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--feebd2381c85a1cd4c4d6e0f199f08111bb273f9/CleanShot%202020-04-28%20at%2016.38.34.jpg" />
                <span>
          <a class="hot-feed" href="/auctions/68">
            USB-C 至 USB 转换器 原厂未拆封包装，拍卖中。。

</a>        </span>
            </div>
            <div class="flex items-center pt-3 mt-3 border-t border-color text-xs">
                <img class="h-5 w-5 object-cover rounded mr-3" src="https://img.geekhub.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbHNMIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--f84150b76294a22f829c2c967959da1203ba9841/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9VY21WemFYcGxYM1J2WDJ4cGJXbDBXd2RwTldrMSIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--feebd2381c85a1cd4c4d6e0f199f08111bb273f9/iPhone%208.png" />
                <span>
          <a class="hot-feed" href="/auctions/72">
            续命拍卖No.1# GeekHub 定制键盘手托 绝版logo...
</a>        </span>
            </div>
            <div class="flex items-center pt-3 mt-3 border-t border-color text-xs">
                <img class="h-5 w-5 object-cover rounded mr-3" src="https://img.geekhub.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdWdKIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--6315d2aae90fc5306f939c06919c8e26554e4878/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9VY21WemFYcGxYM1J2WDJ4cGJXbDBXd2RwTldrMSIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--feebd2381c85a1cd4c4d6e0f199f08111bb273f9/CleanShot%202020-04-29%20at%2019.58.12.jpg" />
                <span>
          <a class="hot-feed" href="/posts/1635">
            新 “极客模式”，你发现了没？

</a>        </span>
            </div>
            <div class="flex items-center pt-3 mt-3 border-t border-color text-xs">
                <img class="h-5 w-5 object-cover rounded mr-3" src="https://img.geekhub.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBc0VZIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--7caaac66bf8642c101a1d8bb75aa05a8afef0f6a/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9VY21WemFYcGxYM1J2WDJ4cGJXbDBXd2RwTldrMSIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--feebd2381c85a1cd4c4d6e0f199f08111bb273f9/headimg.PNG" />
                <span>
          <a class="hot-feed" href="/posts/1632">
            Geekhub 有 Logo 吗，想推广下，找不到 Logo

</a>        </span>
            </div>
            <div class="flex items-center pt-3 mt-3 border-t border-color text-xs">
                <img class="h-5 w-5 object-cover rounded mr-3" src="https://img.geekhub.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcUFMIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--f185ce84e7415afdc97b9cc31d97b8510d05b7c4/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9VY21WemFYcGxYM1J2WDJ4cGJXbDBXd2RwTldrMSIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--feebd2381c85a1cd4c4d6e0f199f08111bb273f9/62ac1493gy1gekti3o8l6g208t09ex6q_5.png" />
                <span>
          <a class="hot-feed" href="/posts/1637">
            闹钟顽强的叫醒了我，还有人在么？

</a>        </span>
            </div>
            <div class="flex items-center pt-3 mt-3 border-t border-color text-xs">
                <img class="h-5 w-5 object-cover rounded mr-3" src="https://img.geekhub.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbHNMIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--f84150b76294a22f829c2c967959da1203ba9841/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9VY21WemFYcGxYM1J2WDJ4cGJXbDBXd2RwTldrMSIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--feebd2381c85a1cd4c4d6e0f199f08111bb273f9/iPhone%208.png" />
                <span>
          <a class="hot-feed" href="/auctions/71">
            geekhub 定制键盘手托 绝版logo 104键版本

</a>        </span>
            </div>
            <div class="flex items-center pt-3 mt-3 border-t border-color text-xs">
                <img class="h-5 w-5 object-cover rounded mr-3" src="https://img.geekhub.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBb29KIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--cc24b1f0e2b30fd00bacc6e989b28e18bfab2ba7/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9VY21WemFYcGxYM1J2WDJ4cGJXbDBXd2RwTldrMSIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--feebd2381c85a1cd4c4d6e0f199f08111bb273f9/CleanShot%202020-04-28%20at%2016.38.34.jpg" />
                <span>
          <a class="hot-feed" href="/auctions/69">
            USB 转闪电 连接线 (1 米) （拆机原装线）

</a>        </span>
            </div>
            <div class="flex items-center pt-3 mt-3 border-t border-color text-xs">
                <img class="h-5 w-5 object-cover rounded mr-3" src="https://img.geekhub.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBbHNMIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--f84150b76294a22f829c2c967959da1203ba9841/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCam9VY21WemFYcGxYM1J2WDJ4cGJXbDBXd2RwTldrMSIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--feebd2381c85a1cd4c4d6e0f199f08111bb273f9/iPhone%208.png" />
                <span>
          <a class="hot-feed" href="/auctions/70">
            geekhub 定制键盘手托 绝版logo 61键版本

</a>        </span>
            </div>
        </div>
        <div class="p-3 mt-5 box">
            <div>
                <h4>快捷操作</h4>
                <span class="meta">为什么不用 Ctrl？因为 Ctrl 都被浏览器占用了</span>
            </div>
            <div class="pt-3 mt-3 sub border-t border-color">
                <ul>
                    <li class="flex items-center"><span class="w-1/2 mr-3">快捷回复</span><span class="flex-1 text-xs sub">⌘ + Enter</span></li>
                    <li class="flex items-center"><span class="w-1/2 mr-3">回到首页</span><span class="flex-1 text-xs sub">Opt+a, Alt+a</span></li>
                    <li class="flex items-center"><span class="w-1/2 mr-3">定位到页头</span><span class="flex-1 text-xs sub">Opt+v, Alt+v</span></li>
                    <li class="flex items-center"><span class="w-1/2 mr-3">定位到页尾</span><span class="flex-1 text-xs sub">Opt+b, Alt+b</span></li>
                    <li class="flex items-center"><span class="w-1/2 mr-3">发布新主题</span><span class="flex-1 text-xs sub">Opt+w, Alt+w</span></li>
                    <li class="flex items-center"><span class="w-1/2 mr-3">福利社</span><span class="flex-1 text-xs sub">Opt+g, Alt+g</span></li>
                    <li class="flex items-center"><span class="w-1/2 mr-3">消息通知</span><span class="flex-1 text-xs sub">Opt+e, Alt+e</span></li>
                </ul>
            </div>
        </div>
        <div class="p-3 mt-5 box">
            <div>
                <h4>在 GeekHub 你可以做什么？</h4>
                <span class="meta">GH 行动指南</span>
            </div>
            <div class="pt-3 mt-3 border-t border-color">
                <ul>
                    <li class="flex items-center"><span class="w-6 text-xs text-orange-600 italic mr-3">0001</span><span class="flex-1 text-xs sub">你可以合适的价格买到靠谱的 Apple 产品，服务接近官网；</span></li>
                    <li class="flex items-center"><span class="w-6 text-xs  text-orange-600 italic mr-3">0010</span><span class="flex-1 text-xs sub">会有更多的优质个性的商家加入进来;</span></li>
                    <li class="flex items-center"><span class="w-6 text-xs  text-orange-600 italic mr-3">0011</span><span class="flex-1 text-xs sub">可以参加各种分子和拍卖活动，活动一直会持续;</span></li>
                    <li class="flex items-center"><span class="w-6 text-xs  text-orange-600 italic mr-3">0100</span><span class="flex-1 text-xs sub">可以发布分子,拍卖,二手,拼车,优惠信息;</span></li>
                    <li class="flex items-center"><span class="w-6 text-xs  text-orange-600 italic mr-3">0101</span><span class="flex-1 text-xs sub">交流讨论我们都喜欢的产品;</span></li>
                    <li class="flex items-center"><span class="w-6 text-xs  text-orange-600 italic mr-3">0110</span><span class="flex-1 text-xs sub">这里是个 '互信,好玩' 的社区，还在不断迭代、进化，欢迎常来！</span></li>
                </ul>
                <div class=" mt-3">
                    <a href="/posts/189" class="ml-6 btn btn-white btn-sm meta">可以做什么？</a>
                </div>
            </div>
        </div>
        <div class="p-3 mt-5 box">
            <div>
                <h4>Apple 渠道店</h4>
                <span class="meta">平台服务样板店</span>
            </div>
            <div class="pt-3 mt-3 border-t border-color">
                <ul>
                    <li class="flex items-center"><span class="w-3 text-lg font-bold text-orange-600 italic mr-3">1</span><span class="flex-1 text-xs sub">Macbook 全原厂未拆封国行;</span></li>
                    <li class="flex items-center"><span class="w-3 text-lg font-bold text-orange-600 italic mr-3">2</span><span class="flex-1 text-xs sub">iPhone,iPad,AirPods 原厂整箱采购，杜绝换配件,换屏幕,升内存机等后封机的可能;</span></li>
                    <li class="flex items-center"><span class="w-3 text-lg font-bold text-orange-600 italic mr-3">3</span><span class="flex-1 text-xs sub">售后支持至签收起 24 小时内，已拆封已激活，没问题也可退换（下单时 + 99元）;</span></li>
                    <li class="flex items-center"><span class="w-3 text-lg font-bold text-orange-600 italic mr-3">4</span><span class="flex-1 text-xs sub">退换回来的机子，将在平台拍卖折价出售;</span></li>
                    <li class="flex items-center"><span class="w-3 text-lg font-bold text-orange-600 italic mr-3">5</span><span class="flex-1 text-xs sub">价格也许不是最便宜（需要一点微薄的利润保证服务，其实我们的利润跟卖菜差不多），但买起来跟在官网一样放心。</span></li>
                </ul>
                <div class=" mt-3">
                    <a href="/posts/1623" class="ml-4 btn btn-white btn-sm meta">售后条例</a>
                </div>
            </div>
        </div>
        <div class="p-3 mt-5 box flex justify-between items-center">
            <span class="sub">go to</span>
            <a href="https://v2ex.com" target="_blank" rel="noreferrer">V2EX →</a>
        </div>
    </div>
    <div>
        <div class="p-3 mt-5 box flex items-center">
            <img class="p-2 w-28 h-28 border border-color rounded-lg mr-4 flex-shrink-0" src="https://i.loli.net/2020/04/24/qysN1k4oDfMSFnO.png">
            <div>
                <h3>咨询客服</h3>
                <div class="meta">扫二维码</div>
                <div class="meta">联系企业微信</div>
                <div class="meta">客服小姐姐</div>
            </div>
        </div>
    </div>
</sidebar>
