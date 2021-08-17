@include('front/inc/header')
<main class="webacoders">
<video src="{{asset('video/bg2.webm')}}" class="webacoders__video-full-bg" muted="muted" loop="loop" autoplay="autoplay"></video>
    <div class="webacoders__layout-bg-container">
        <div class="layout-bg-container__center-form-block">
            <form class="loginForm center-form-block__form" action="{{route('auth')}}" method="post" id="lForm">
                {{@csrf_field()}}
                <input type="text" name="login" placeholder="Логин" class="loginForm__input-login">
                <input type="password" name="password" placeholder="Пароль" class="loginForm__input-psw">
                <label class="loginForm__label">
                    <span>Запомнить меня на несколько дней (но это неточно)</span>
                    <input type="checkbox" name="rememberMe" class="checkbox-container__checkbox" hidden="hidden">
                    <div class="checkbox-container">
                        <span></span>
                    </div>
                </label>
                <div class="loginForm__btns-row">
                    <button type="submit" class="btns-row__submit-btn">
                        <span>Войти</span>
                    </button>
                    <button type="reset" class="btns-row__reset-btn">
                        <span>Отмена</span>
                    </button>
                </div>
                @if($errors->any())
                    <div class="error-message">{{$errors->first()}}<span></span></div>

{{--                    <h4>{{$errors->first()}}</h4>--}}
                @endif
            </form>
        </div>
    </div>
</main>
@include('front/inc/footer')
