<?php
/**
 * Created by PhpStorm.
 * User: faizalami
 * Date: 14/01/19
 * Time: 9:05
 */
?>

{{ '<?'.'php' }}

$menu = {{ $menu }};

$menu[ explode('.', Request::route()->getName())[0] ]['active'] = 'active';

{{ '?>' }}

{{ '@' }}foreach($menu as $id => $item)

<li class="{{ '{'.'{' }} $menu[$id]['active'] {{ '}'.'}' }}">
    <a href="{{ '{'.'{' }} route($item['route']) {{ '}'.'}' }}"><span>{{ '{'.'{' }} $item['title'] {{ '}'.'}' }}</span></a>
</li>

{{ '@' }}endforeach
