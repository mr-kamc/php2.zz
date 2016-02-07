<?php

namespace App\Models;


interface HasEmail
{

    /**Метод возвращает e-mail
     * @return string Адрес электронной почты
     */
    public function getEmail ();

}