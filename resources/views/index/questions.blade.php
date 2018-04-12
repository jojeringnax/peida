<section id="questions">
    <div class="modal" tabindex="-1" id="question_form" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title question">Задайте свои вопросы</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="question_create" method="get" action="">
                    <div class="modal-body question">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
                        <label style="width: 100%;" for="question">Задайте свой вопрос:</label>
                        <textarea style="width: 100%; max-width: 100%; max-height: 300px;" name="question" id="question" required></textarea>
                    </div>
                    <div class="modal-footer question">
                        <button type="submit" class="btn btn-success">Отправить вопрос</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex questions">
        <div class="flex questions_rules">
            <button class="question_form" type="button" data-toggle="modal" data-target="#question_form"><div class="ask_a_question">ЗАДАЙТЕ ВОПРОС:</div></button>
            <div class="sveta_portrait">
                <img src="img/questions.png" title="Психология Светлана Пейда Блог" alt="Психология Светлана Пейда Блог" />
            </div>
            <div class="rules">
                <span style="font-size: 12px;" ><p><i>ПРАВИЛА</i></p>
                    <i>Если Вы хотите писать, то надо:
                        <br />зачем терпеть проверка связи снова
                        <br />и теперь никогда не проходит с
                        <br />возрастом и приходится увергать
                        <br />эей эейи гей и теперь и заново
                        <br />верить...
                    </i>
                    <br />
                    <div style="text-align: right;color: #679280">Далее...</div>
                </span>
            </div>
        </div>
        <div class="flex questions_slider">
            <div class="hidden-xs arrow left" style="width:0px;">
                <img src="img/pic/left.png" />
            </div>
            <div class="viewport questions">
                <div class="questions_wrapper flex">
                @foreach($questions as $question)
                    @if ($loop->index == 0 || $loop->index%2 == 0)
                        <div class="question_window flex column first">
                            <div class="question_text">{{ $question->question }}</div>
                            <div class="answer_text">{{ $question->answer }}</div>
                        </div>
                    @else
                        <div class="hidden-xs question_window flex column second">
                            <div class="question_text">{{ $question->question }}</div>
                            <div class="answer_text">{{ $question->answer }}</div>
                        </div>
                    @endif
                @endforeach
                </div>
            </div>
            <div class="hidden-xs arrow right">
                <img src="img/pic/right.png" />
            </div>
        </div>
    </div>
</section>