<section class="program">
    <div class="container">

        <h3 class="program__title">
            ПРОГРАММА:
        </h3>

        <div class="program__content">

            <div class="programs">
                <div class="programs__item">

                    <a class="program-block">
                        <div class="program-block__text">
                            <p class="program-block__title">
                                МОДУЛЬ №1
                            </p>
                            <p class="program-block__description">
                                Введение в курс
                            </p>
                        </div>

                        <img class="program-block__icon" src="{{ asset('/assets/icons/program-toggle.svg') }}" alt="">
                    </a>

                    <ul class="program-content">
                        <li>
                            Знакомство с преподавателем курса
                        </li>
                        <li>
                            Функциональные возможности программы Компас-3D
                        </li>
                        <li>
                            Знакомство с интерфейсом программы
                        </li>
                    </ul>
                </div>

                <div class="programs__item">

                    <a class="program-block">
                        <div class="program-block__text">
                            <p class="program-block__title">
                                МОДУЛЬ №2
                            </p>
                            <p class="program-block__description">
                                Работа с эскизами
                            </p>
                        </div>

                        <img class="program-block__icon" src="{{ asset('/assets/icons/program-toggle.svg') }}" alt="">
                    </a>

                    <ul class="program-content">
                        <li>
                            Панель «Геометрия» - часть 1
                        </li>
                        <li>
                            Панель «Геометрия» - часть 2
                        </li>
                        <li>
                            Панель «Изменение геометрии»
                        </li>
                        <li>
                            Панель «Размеры»
                        </li>
                        <li>
                            Панель настроек рабочего пространства эскиза
                        </li>
                        <li>
                            Панель «Ограничения»
                        </li>
                        <li>
                            Выполнение эскиза плоского контура
                        </li>

                    </ul>
                </div>

                <div class="programs__item">

                    <a class="program-block">
                        <div class="program-block__text">
                            <p class="program-block__title">
                                МОДУЛЬ №3
                            </p>
                            <p class="program-block__description">
                                Моделирование призматических деталей
                            </p>
                        </div>

                        <img class="program-block__icon" src="{{ asset('/assets/icons/program-toggle.svg') }}" alt="">
                    </a>

                    <ul class="program-content">
                        <li>
                            Операция «Элемент выдавливания»
                        </li>
                        <li>
                            Моделирование призматической детали - часть 1
                        </li>
                        <li>
                            Моделирование призматической детали - часть 2
                        </li>
                        <li>
                            Моделирование отверстия
                        </li>
                        <li>
                            Изучение дополнительных команд 3d-моделирования
                        </li>
                        <li>
                            Создание чертежа. Получение проекций
                        </li>
                        <li>
                            Создание чертежа. Выполнение разрезов
                        </li>
                        <li>
                            Оформление чертежа - часть 1
                        </li>
                        <li>
                            Оформление чертежа - часть 2
                        </li>

                    </ul>
                </div>

                <div class="programs__item">

                    <a class="program-block">
                        <div class="program-block__text">
                            <p class="program-block__title">
                                МОДУЛЬ №4
                            </p>
                            <p class="program-block__description">
                                Моделирование деталей типа тела вращения
                            </p>
                        </div>

                        <img class="program-block__icon" src="{{ asset('/assets/icons/program-toggle.svg') }}" alt="">
                    </a>

                    <ul class="program-content">
                        <li>
                            Выполнение эскизов для тел вращения. Операция «Элемент вращения»
                        </li>
                        <li>
                            Моделирование детали «Стержень»
                        </li>
                        <li>
                            Выполнение чертежа детали «Стержень»
                        </li>
                        <li>
                            Деталь «Клапан» и получение ее чертежа
                        </li>
                        <li>
                            Деталь «Заглушка» и получение ее чертежа
                        </li>
                        <li>
                            Деталь «Гайка» и получение ее чертежа - часть 1
                        </li>
                        <li>
                            Деталь «Гайка» и получение ее чертежа - часть 2
                        </li>
                        <li>
                            Деталь «Маховичок» и получение ее чертежа
                        </li>

                    </ul>
                </div>

                <div class="programs__item">

                    <a class="program-block">
                        <div class="program-block__text">
                            <p class="program-block__title">
                                МОДУЛЬ №5
                            </p>
                            <p class="program-block__description">
                                Моделирование деталей по сечениям
                            </p>
                        </div>

                        <img class="program-block__icon" src="{{ asset('/assets/icons/program-toggle.svg') }}" alt="">
                    </a>

                    <ul class="program-content">
                        <li>
                            Операция «Элемент по сечениям»
                        </li>
                        <li>
                            Моделирование детали по сечениям - часть 1
                        </li>
                        <li>
                            Моделирование детали по сечениям - часть 2
                        </li>
                        <li>
                            Моделирование детали по сечениям - часть 3
                        </li>
                        <li>
                            Моделирование детали по сечениям - часть 4
                        </li>

                    </ul>
                </div>

            </div>

            <div class="program-form-wrapper">
                @include('blocks.apply-form')
            </div>
        </div>
    </div>
</section>