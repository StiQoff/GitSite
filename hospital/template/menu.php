<?php function createLink($href, $icon, $text) {
    $is_active = $_SERVER['PHP_SELF'] === '/' . $href;
    $class_name = $is_active ? 'active' : '';

    print("
        <li class='$class_name'>
            <a href='$href'>
                <i class='fa $icon'></i>
                <span>$text</span>
            </a>
        </li>
    ");
} ?>
<!-- Sidebar Menu -->
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Справочники</li>
            <?php
            createLink("list_card.php", "fa-users", "Карточки пациентов");
            createLink("list-otdel.php", "fa-users", "Пациенты");
            createLink("list-special.php", "fa-users", "Палаты");
            ?>
            <li class="header">Управление расписанием</li>
            <?php createLink("list-teacher-schedule.php", "fa-users", "Расписание и планы"); ?>
        </ul>
    </section>
</aside>
<!-- /.sidebar-menu -->