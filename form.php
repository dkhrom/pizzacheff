<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
	{
    if (isset($_POST["first_name"]) && isset($_POST["address"]) && isset($_POST["phone"])) 
	{ 
    if ($_POST['first_name'] == '') 
    {
        echo 'Не заполнено поле Имя';
        return;
    }
    if ($_POST['address'] == '') 
    {
        echo 'Не заполнено поле E-mail';
        return;
    } 
    if ($_POST['phone'] == '') 
    {
        echo 'Не заполнено поле Телефон';
        return;
    }
        echo 'Заявка отправлена!';
    	return;
    }
    }
?>