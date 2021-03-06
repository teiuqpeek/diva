@foreach ($post->blocks->where('type', 'factors') as $item)
    <div class="factors__block">
        @if ($item->name ?? $item->content)
            <div class="factors__heading">
                @if ($item->name)
                    <h2>{!! $item->name !!}</h2>
                @endif
                @if ($item->content)
                    {!! $item->content !!}
                @endif
            </div>
        @endif

        <div class="factors__list">
            @foreach ($item->repeater as $item => $element)
                <div class="factors__item fade-in">

                    <div class="factors__number">{{ $element['number'] }}</div>

                    <div class="factors__content">

                        <div class="factors__name">{{ $element['title'] }}</div>

                        <div class="factors__desc">
                            {!! $element['description'] !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endforeach
{{-- <div class="factors__block">
    <div class="factors__heading">
        <h2>Факторы успеха Гк «Дива»</h2>
        <p>Мы нацелены на долгосрочное сотрудничество и стремимся находить лучшие решения для наших партнёров.</p>
    </div>
    <div class="factors__list">
        <div class="factors__item">
            <div class="factors__number">1</div>
            <div class="factors__content">
                <div class="factors__name">Ценность полезных продуктов питания</div>
                <div class="factors__desc">
                    <p>В современном мире возрастает ценность свежей зелени, овощей и салатов. Они являются составной
                        частью
                        правильного питания, обеспечивающего нормальный рост и развитие детей, профилактику заболеваний,
                        укрепление здоровья и продление жизни людей.
                    </p>
                </div>
            </div>
        </div>
        <div class="factors__item">
            <div class="factors__number">2</div>
            <div class="factors__content">
                <div class="factors__name">Ценность логистики и дистрибуции</div>
                <div class="factors__desc">
                    <p>Вместе с ежегодным увеличением спроса на сельскохозяйственную продукцию, повышается ценность
                        качественных услуг логистики и дистрибуции, обеспечивающих взаимодействие сельхозпроизводителей
                        с компаниями продуктового ритейла и HoReCa.
                    </p>
                    <blockquote>
                        Опыт высокоразвитых стран показывает, что передача специализированным компаниям функций
                        логистики и предпродажной подготовки, является самым эффективным способом управления
                        многоуровневой цепью поставок. Сегодня в странах Европейского союза до 95% общего оборота
                        продукции фермерских хозяйств продвигается через 3PL-провайдеров.
                    </blockquote>

                </div>
            </div>
        </div>
        <div class="factors__item">
            <div class="factors__number">3</div>
            <div class="factors__content">
                <div class="factors__name">Развитие и совершенствование</div>
                <div class="factors__desc">
                    <p>ГК «ДИВА» нацелена на непрерывное совершенствование операционной эффективности и качества
                        продуктов своей деятельности для того, чтобы наши клиенты и партнёры достигали своих целей, а
                        конечные потребители получали доступные и качественные продукты.
                    </p>
                </div>
            </div>

        </div>
        <div class="factors__item">
            <div class="factors__number">4</div>
            <div class="factors__content">
                <div class="factors__name">Ответственность</div>
                <div class="factors__desc">
                    <p><span>ГК «ДИВА» принимает на себя ответственность:</span></p>
                    <ul>
                        <li>за организацию эффективного взаимодействия между всеми участниками «холодовой цепи»
                            поставок;</li>
                        <li>за управление цепью поставок таким образом, чтобы партнёры гарантированно решали свои
                            задачи, получали доход и устойчиво развивались;</li>
                        <li>за заботу о здоровье и безопасности конечных потребителей сельхозпродукции и всего
                            окружающего общества.</li>
                    </ul>

                </div>
            </div>
        </div>

    </div>
</div> --}}
