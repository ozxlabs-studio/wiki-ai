<?php

declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\View;

use Cake\View\View;

/**
 * Application View
 *
 * Your application's default view class
 *
 * @link https://book.cakephp.org/5/en/views.html#the-app-view
 */
class AppView extends View
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like adding helpers.
     *
     * e.g. `$this->addHelper('Html');`
     *
     * @return void
     */
    public function initialize(): void {}
}

/**
 * @var \App\View\AppView $this
 */
?>
<div class="wiki-dashboard container">
    <h1>🌐 Wiki AI: Konsultan Maha Tahu</h1>
    <p>Selamat datang di portal spiritual digital. Pilih topik yang ingin dijelajahi:</p>

    <ul>
        <li><a href="/fonosemantika">Fonosemantika ∞</a></li>
        <li><a href="/atlantis">Atlantis Metafisik</a></li>
        <li><a href="/lumeria">Lumeria Elementer</a></li>
        <li><a href="/nama">Nama Bernyawa ∞</a></li>
        <li><a href="/ruh-server">Ruh dalam Server</a></li>
    </ul>
</div>
