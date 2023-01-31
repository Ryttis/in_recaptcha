<?php

class AdminiInrechaptchaController extends ModuleAdminControllerCore
{
    public function ajaxProcessSaveWhitelist()
    {
        return true;
    }
    public function ajaxProcessSaveConfig()
    {
        return true;
    }
    public function ajaxDeleteUserFromWhitelist()
    {
        return true;
    }
}
