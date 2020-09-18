<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts._head')

<body class="theme-light bg-primary-300">

<div>
    <script type="text/javascript">
        function switch_theme() {
            const lightButton = document.getElementById('light');
            const oceanButton = document.getElementById('ocean');
            const jadeButton = document.getElementById('jade');
            const darkButton = document.getElementById('dark');
            const solarButton = document.getElementById('solar');

            // Apply the cached theme on reload

            const body = document.body;
            const theme = localStorage.getItem('theme');
            const cls = ['theme-light','theme-ocean','theme-jade','theme-dark','theme-solar'];

            if (theme === 'theme-jade') {
                body.classList.remove(...cls);
                body.classList.add('theme-jade');

                lightButton.classList.remove('hidden');
                solarButton.classList.add('hidden');
                oceanButton.classList.add('hidden');
                jadeButton.classList.add('hidden');
                darkButton.classList.add('hidden');
            } else if (theme === 'theme-dark') {
                body.classList.remove(...cls);
                body.classList.add('theme-dark');

                lightButton.classList.add('hidden');
                solarButton.classList.remove('hidden');
                oceanButton.classList.add('hidden');
                jadeButton.classList.add('hidden');
                darkButton.classList.add('hidden');
            } else if (theme === 'theme-ocean') {
                body.classList.remove(...cls);
                body.classList.add('theme-ocean');

                lightButton.classList.add('hidden');
                solarButton.classList.add('hidden');
                oceanButton.classList.add('hidden');
                jadeButton.classList.remove('hidden');
                darkButton.classList.add('hidden');
            } else if (theme === 'theme-solar') {
                body.classList.remove(...cls);
                body.classList.add('theme-solar');

                lightButton.classList.add('hidden');
                solarButton.classList.add('hidden');
                oceanButton.classList.remove('hidden');
                jadeButton.classList.add('hidden');
                darkButton.classList.add('hidden');
            } else {
                body.classList.remove(...cls);
                body.classList.add('theme-light');

                lightButton.classList.add('hidden');
                solarButton.classList.add('hidden');
                oceanButton.classList.add('hidden');
                jadeButton.classList.add('hidden');
                darkButton.classList.remove('hidden');
            }

            // Button Event Handlers

            lightButton.onclick = () => {
                localStorage.setItem('theme', 'theme-light');
            };
            solarButton.onclick = () => {
                localStorage.setItem('theme', 'theme-solar');
            };
            oceanButton.onclick = () => {
                localStorage.setItem('theme', 'theme-ocean');
            };
            jadeButton.onclick = () => {
                localStorage.setItem('theme', 'theme-jade');
            };
            darkButton.onclick = () => {
                localStorage.setItem('theme', 'theme-dark');
            };
        }

        switch_theme();
    </script>

</div>

<div class="flex flex-col overflow-auto bg-primary-300">

    <div class="container flex-1 mx-auto sm:w-96">

    </div>
    @if (Session::has('user_login_failed'))
        <div class="container flex-1 mx-auto sm:w-96">
            <div class="alert alert-notice flex items-center mt-3 sm:mt-6 p-3">
    <span class="mr-3">
      <svg viewBox="0 0 512 512" class="svg fill-current">
        <path opacity=".4" d="M256 8C119 8 8 119.08 8 256c0 136.92 111 248 248 248s248-111 248-248S393 8 256 8zm0 376c-17.673 0-32-14.327-32-32 0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32 0 17.673-14.327 32-32 32zm38.24-238.41l-12.8 128c-.817 8.18-7.7 14.41-15.92 14.41h-19c-8.22 0-15.103-6.23-15.92-14.41l-12.8-128c-.878-8.793 5.538-16.633 14.33-17.51a16 16 0 0 1 1.55-.08h44.64c8.837 0 16 7.164 16 16a16 16 0 0 1-.08 1.59z"></path><path d="M278.32 128h-44.64c-8.837 0-16 7.164-16 16a16 16 0 0 0 .08 1.59l12.8 128c.817 8.18 7.7 14.41 15.92 14.41h19c8.22 0 15.103-6.23 15.92-14.41l12.8-128c.878-8.793-5.538-16.633-14.33-17.51a16 16 0 0 0-1.55-.08zM256 320c-17.673 0-32 14.327-32 32 0 17.673 14.327 32 32 32 17.673 0 32-14.327 32-32 0-17.673-14.327-32-32-32z"></path>
      </svg>
    </span>
                <span>{{ Session::get('user_login_failed', 'default') }}</span>
            </div>
        </div>
    @endif
    <div class="container flex flex-col flex-1 px-3 sm:px-5 mx-auto mt-3 sm:mt-6 md:flex-no-wrap">

        <div class="flex-1 mx-auto my-8">
            <a href="/" class="flex items-center text-primary-700 mr-5">
        <span>
          <svg width="180" height="34" viewBox="0 0 104.64 21.54" class="fill-current hover:text-secondary-600">
            <path d="M72.99 21.27h-4.11v-8.91H64.2v8.91h-4.11v-21h4.11v8.67h4.68V.27h4.11v21zM12.15 9.63V21a27.711 27.711 0 0 1-1.564.265 32.927 32.927 0 0 1-1.001.125 25.06 25.06 0 0 1-1.813.135 21.239 21.239 0 0 1-.782.015 12.431 12.431 0 0 1-1.444-.079q-.726-.085-1.346-.262a6.693 6.693 0 0 1-.435-.139 4.342 4.342 0 0 1-2.122-1.648 5.323 5.323 0 0 1-.053-.077Q.75 18.09.375 15.945a21.214 21.214 0 0 1-.213-1.618q-.081-.841-.122-1.813A50.103 50.103 0 0 1 0 10.44a36.063 36.063 0 0 1 .05-1.955q.054-.999.168-1.847A14.356 14.356 0 0 1 .51 5.07a10.853 10.853 0 0 1 .406-1.294q.261-.673.592-1.206a5.223 5.223 0 0 1 .487-.665Q2.97.78 4.41.39 5.805.012 7.594 0a17.557 17.557 0 0 1 .116 0 9.422 9.422 0 0 1 .607.021q.33.022.707.065a19.701 19.701 0 0 1 .501.064 26.471 26.471 0 0 1 1.279.211 22.079 22.079 0 0 1 .716.149v3.54a31.051 31.051 0 0 0-1.253-.207 37.245 37.245 0 0 0-.802-.108 18.276 18.276 0 0 0-1.284-.114A14.825 14.825 0 0 0 7.41 3.6q-.739 0-1.289.171a2.778 2.778 0 0 0-.271.099 1.79 1.79 0 0 0-.688.531q-.176.217-.317.504-.371.757-.522 2.117a13.214 13.214 0 0 0-.003.028 20.913 20.913 0 0 0-.079.945q-.07 1.111-.071 2.607a64.779 64.779 0 0 0 0 .048 61.638 61.638 0 0 0 .016 1.449q.03 1.291.119 2.226a14.124 14.124 0 0 0 .102.831q.131.847.348 1.404.21.54.514.847a1.397 1.397 0 0 0 .326.248 2.22 2.22 0 0 0 .589.214q.326.071.716.071h.645q.315 0 .615-.03v-4.74H6.24V9.63h5.91zm45.39 11.64h-4.59l-3.24-6.21-.63.81v5.4h-3.99v-21h3.99v10.5l3.6-4.5h4.56l-5.07 6 5.37 9zm19.35-15h3.99v9.54a7.726 7.726 0 0 0 .012.439q.025.444.105.751a2.297 2.297 0 0 0 .003.01 2.514 2.514 0 0 0 .093.285q.056.139.124.25a1.14 1.14 0 0 0 .113.155q.21.24.525.315.315.075.705.075.798 0 1.28-.353a1.514 1.514 0 0 0 .355-.367 2.818 2.818 0 0 0 .407-.863 2.545 2.545 0 0 0 .088-.667V6.27h3.99v15h-3.24l-.27-1.17q-.69.66-1.56 1.05a4.368 4.368 0 0 1-1.128.326 5.8 5.8 0 0 1-.882.064 9.113 9.113 0 0 1-.949-.046q-.469-.05-.866-.151a4.286 4.286 0 0 1-.51-.163 3.339 3.339 0 0 1-.922-.537 2.966 2.966 0 0 1-.518-.558q-.525-.735-.735-1.83a10.87 10.87 0 0 1-.144-1.03q-.066-.708-.066-1.535V6.27zm15.69 14.85V.27h3.99v6.78q.63-.48 1.425-.765a4.864 4.864 0 0 1 1.171-.257A5.983 5.983 0 0 1 99.75 6a7.429 7.429 0 0 1 1.07.073q.589.086 1.09.272.93.345 1.53 1.125a4.133 4.133 0 0 1 .468.783q.263.568.432 1.302a10.342 10.342 0 0 1 .183 1.069q.069.574.098 1.237a22.295 22.295 0 0 1 .019.949q0 1.877-.218 3.301a12.703 12.703 0 0 1-.157.839 8.457 8.457 0 0 1-.362 1.212q-.251.649-.596 1.161a4.699 4.699 0 0 1-.242.327q-.825 1.02-2.19 1.455-1.365.435-3.345.435a29.944 29.944 0 0 1-1.346-.029q-.665-.03-1.252-.091a16.968 16.968 0 0 1-.267-.03q-1.23-.148-2.065-.267a55.114 55.114 0 0 1-.02-.003zm-65.46-5.88h-7.77a8.779 8.779 0 0 0 .072.76q.107.744.337 1.192a1.625 1.625 0 0 0 .206.313 1.489 1.489 0 0 0 .563.398q.51.217 1.312.217a18.968 18.968 0 0 0 1.669-.071 16.224 16.224 0 0 0 .716-.079q1.074-.143 1.724-.286a9.304 9.304 0 0 0 .061-.014v3.36a11.265 11.265 0 0 1-.191.046q-.299.069-.696.147a29.16 29.16 0 0 1-.013.002 12.064 12.064 0 0 1-.844.132 13.846 13.846 0 0 1-.296.033 63.755 63.755 0 0 1-.875.082 56.516 56.516 0 0 1-.28.023 15.831 15.831 0 0 1-.397.027q-.315.018-.578.018a16.559 16.559 0 0 1-1.343-.052q-.662-.054-1.243-.164a9.509 9.509 0 0 1-.264-.054 4.2 4.2 0 0 1-1.379-.56 3.879 3.879 0 0 1-.676-.55 4.179 4.179 0 0 1-.701-.972q-.24-.451-.418-1.004a7.931 7.931 0 0 1-.111-.379q-.272-1.018-.361-2.489a25.604 25.604 0 0 1-.044-1.546q0-1.724.281-3.043a9.376 9.376 0 0 1 .124-.512 7.6 7.6 0 0 1 .42-1.174q.296-.644.696-1.14a4.609 4.609 0 0 1 .084-.101q.795-.93 1.935-1.365a6.451 6.451 0 0 1 1.387-.352A8.608 8.608 0 0 1 21.45 6a10.766 10.766 0 0 1 1.103.053q.569.059 1.049.182a4.985 4.985 0 0 1 .653.215 4.316 4.316 0 0 1 1.045.603 3.665 3.665 0 0 1 .68.702q.63.855.885 2.115.251 1.24.255 2.8a19.813 19.813 0 0 1 0 .05v2.52zm14.67 0h-7.77a8.779 8.779 0 0 0 .072.76q.107.744.337 1.192a1.625 1.625 0 0 0 .206.313 1.489 1.489 0 0 0 .563.398q.51.217 1.312.217a18.968 18.968 0 0 0 1.669-.071 16.224 16.224 0 0 0 .716-.079q1.074-.143 1.724-.286a9.304 9.304 0 0 0 .061-.014v3.36a11.265 11.265 0 0 1-.191.046q-.299.069-.696.147a29.16 29.16 0 0 1-.013.002 12.064 12.064 0 0 1-.844.132 13.846 13.846 0 0 1-.296.033 63.755 63.755 0 0 1-.875.082 56.516 56.516 0 0 1-.28.023 15.831 15.831 0 0 1-.397.027q-.315.018-.578.018a16.559 16.559 0 0 1-1.343-.052q-.662-.054-1.243-.164a9.509 9.509 0 0 1-.264-.054 4.2 4.2 0 0 1-1.379-.56 3.879 3.879 0 0 1-.676-.55 4.179 4.179 0 0 1-.701-.972q-.24-.451-.418-1.004a7.931 7.931 0 0 1-.111-.379q-.272-1.018-.361-2.489a25.604 25.604 0 0 1-.044-1.546q0-1.724.281-3.043a9.376 9.376 0 0 1 .124-.512 7.6 7.6 0 0 1 .42-1.174q.296-.644.696-1.14a4.609 4.609 0 0 1 .084-.101q.795-.93 1.935-1.365a6.451 6.451 0 0 1 1.387-.352A8.608 8.608 0 0 1 36.12 6a10.766 10.766 0 0 1 1.103.053q.569.059 1.049.182a4.985 4.985 0 0 1 .653.215 4.316 4.316 0 0 1 1.045.603 3.665 3.665 0 0 1 .68.702q.63.855.885 2.115.251 1.24.255 2.8a19.813 19.813 0 0 1 0 .05v2.52zm54.78-3.57v6.39a16.166 16.166 0 0 0 .469.036 13.936 13.936 0 0 0 .161.009q.3.015.6.015a5.998 5.998 0 0 0 .542-.023q.272-.025.503-.076a2.725 2.725 0 0 0 .335-.096 1.545 1.545 0 0 0 .75-.583 2.029 2.029 0 0 0 .105-.167 2.756 2.756 0 0 0 .208-.473q.083-.244.143-.537a6.625 6.625 0 0 0 .084-.52 13.438 13.438 0 0 0 .068-.739q.026-.386.039-.835a33.5 33.5 0 0 0 .013-.961 23.716 23.716 0 0 0-.011-.734q-.01-.327-.03-.608a9.686 9.686 0 0 0-.049-.518q-.09-.72-.315-1.125a1.464 1.464 0 0 0-.205-.287 1.084 1.084 0 0 0-.38-.268 1.776 1.776 0 0 0-.343-.101q-.17-.034-.368-.044a3.551 3.551 0 0 0-.189-.005 2.189 2.189 0 0 0-.709.11 1.816 1.816 0 0 0-.851.61q-.57.72-.57 1.53zm-77.19.63h3.9v-.78a4.372 4.372 0 0 0-.04-.61q-.044-.311-.136-.562a1.723 1.723 0 0 0-.274-.493q-.386-.476-1.17-.544a3.147 3.147 0 0 0-.27-.011 2.073 2.073 0 0 0-.572.074 1.476 1.476 0 0 0-.823.586 2.208 2.208 0 0 0-.242.467q-.266.679-.373 1.873zm14.67 0h3.9v-.78a4.372 4.372 0 0 0-.04-.61q-.044-.311-.136-.562a1.723 1.723 0 0 0-.274-.493q-.386-.476-1.17-.544a3.147 3.147 0 0 0-.27-.011 2.073 2.073 0 0 0-.572.074 1.476 1.476 0 0 0-.823.586 2.208 2.208 0 0 0-.242.467q-.266.679-.373 1.873z"
                  vector-effect="non-scaling-stroke"></path>
          </svg>
        </span>
                <span>
          <div class="text-base sub ml-1">beta</div>
          <div class="font-mono text-2xl mb-2">.com</div>
        </span>
            </a>
        </div>

        <main class="flex-1">
            <div class="w-full sm:w-96 mx-auto">
                <div class="box">
                    <div class="flex justify-between items-center p-5 border-b border-color">
                        <div class="inline-flex items-center">
          <span class="mr-2">
            <svg viewBox="0 0 640 512" class="h-6 w-6 fill-current">
              <path opacity=".4" d="M608 288h-32v-80c0-44.183-35.817-80-80-80s-80 35.817-80 80v80h-32c-17.673 0-32 14.327-32 32v160c0 17.673 14.327 32 32 32h224c17.673 0 32-14.327 32-32V320c0-17.673-14.327-32-32-32zM496 432c-17.673 0-32-14.327-32-32 0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32 0 17.673-14.327 32-32 32zm32-144h-64v-80c0-17.673 14.327-32 32-32 17.673 0 32 14.327 32 32z"/><path d="M224 256c70.692 0 128-57.308 128-128C352 57.308 294.692 0 224 0 153.308 0 96 57.307 96 128c0 70.692 57.308 128 128 128zm96 64a63.08 63.08 0 0 1 8.1-30.5c-4.8-.5-9.5-1.5-14.5-1.5h-16.7a174.08 174.08 0 0 1-145.8 0h-16.7C60.18 288.017.017 348.18 0 422.4V464c0 26.51 21.49 48 48 48h280.9a63.54 63.54 0 0 1-8.9-32z"/>
            </svg>
          </span>
                            <span class="text-xl">
            登录
          </span>
                        </div>
                        <span class="text-base font-light">欢迎回来！</span>
                    </div>
                    <div class="p-5">
                        {!! Form::open(['url' => 'users/sign_in', 'method' => 'post', 'novalidate' => 'novalidate', 'class' => 'simple_form new_user', 'accept-charset' => 'UTF-8', 'id'=>'new_user']) !!}
                            <div class="mb-5">
                                <input name="name" required type="text" class="form-input w-full mb-5" placeholder="用户名/Email">
                                <input name="password" type="password" class="form-input w-full" placeholder="输入密码">
                            </div>
{{--                            <div class="my-5 flex rounded-md">--}}
{{--                                <input class="form-input flex-1 block w-full px-3 py-2 rounded-none rounded-l-md sm:text-sm sm:leading-5" placeholder="输入验证码" name="_rucaptcha" type="text" autocorrect="off" autocapitalize="off" pattern="[a-zA-Z]*" autocomplete="off" maxlength="5" />--}}
{{--                                <span class="inline-flex items-center px-1 rounded-r-md border border-l-0 border-primary-300 text-primary-500 sm:text-sm"><img alt="图形验证码" class="h-8" src="/rucaptcha/" onclick="this.src = &#39;/rucaptcha/?t=&#39; + Date.now();" /></span>--}}
{{--                            </div>--}}

                            <div class="flex justify-between mb-5">
          <span class="inline-flex items-center">
            <input name="user[remember_me]" id="remember_me" type="checkbox" class="form-checkbox h-4 w-4 text-secondary-600 transition duration-150 ease-in-out" />
            <label for="remember_me" class="ml-2 block text-sm leading-5">
              记住登录状态
            </label>
          </span>
                                <a href="/users/password/new">忘记密码？</a>
                            </div>
                            <div class="flex items-center">
                                <div class="flex-1">
                                    <button type="submit" class="btn btn-big btn-blue py-2 block w-full text-center">登录</button>
                                </div>
                                <div class="w-16 ml-3">
                                    <a class="btn btn-big btn-white block text-center" href="/users/sign_up">注册</a>
                                </div>
                            </div>
                        </form>
                        {!! Form::close() !!}
                    </div>

                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-color"></div>
                        </div>
                        <div class="relative flex justify-center text-sm leading-5">
            <span class="px-2 bg-tertiary-99 sub">
              快速登录
            </span>
                        </div>
                    </div>

                    <div class="p-5 flex justify-around">
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
                </div>
            </div>
        </main>


        <div class="flex-1 flex flex-col items-center my-8">
            <span class="sub">The stuff we care about.</span>
            <a href="/">
                <svg viewBox="0 0 512 512" class="svg svg-sm mt-3">
                    <path opacity=".4" d="M448 96h-64l-64-64v134.4c0 53.02 42.98 96 96 96s96-42.98 96-96V32zm-72 80c-8.837 0-16-7.163-16-16s7.163-16 16-16 16 7.163 16 16-7.163 16-16 16zm80 0c-8.837 0-16-7.163-16-16s7.163-16 16-16 16 7.163 16 16-7.163 16-16 16zm-165.41 16a204.07 204.07 0 0 0-34.59 2.89V272l-43.15-64.73a183.93 183.93 0 0 0-44.37 26.17L192 304l-60.94-30.47L128 272v-80c-.055-52.996-43.003-95.945-96-96-17.673 0-32 14.327-32 32 0 17.673 14.327 32 32 32 17.673 0 32 14.327 32 32v256-.001C64.033 483.33 92.666 511.966 128 512h176c8.837 0 16-7.163 16-16v-16c0-17.673-14.327-32-32-32h-32l128-96v144c0 8.837 7.163 16 16 16h32c8.837 0 16-7.163 16-16V289.86a126.78 126.78 0 0 1-32 4.54c-61.81 0-113.52-44.05-125.41-102.4z"/><path d="M376 144c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zm80 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM131.06 273.53L192 304l-23.52-70.56a192.06 192.06 0 0 0-37.42 40.09zM256 272v-77.11a198.62 198.62 0 0 0-43.15 12.38z"/>
                </svg>
            </a>
        </div>

    </div>

    <div id="t1" class="c1">
        <div id="t2">
            <div id="t3">
                <div id="t4" class="table_a table_b table_c table_d tiny_text text-4xl font-extrabold text-tertiary-200 -mt-2"></div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
