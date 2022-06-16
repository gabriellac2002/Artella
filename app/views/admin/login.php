<?php
if(!$_SESSION['usuario'])
    {
        header('Location: /login');
        exit();
    }