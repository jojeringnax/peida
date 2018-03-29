<section id="signupform">
    <div class="main signupform">
        <form action="#">
            <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
            <div class="flex signupform">
                <input type="submit" class="envelope" value="" />
                <div class="subscribe">ПОДПИСАТЬСЯ</div>
                <input class="signupform text" type="text" placeholder="Ваше имя" />
                <input class="signupform text" type="text" placeholder="Ваш e-mail" />
            </div>

        </form>
    </div>
</section>