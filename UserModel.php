<?php


namespace andreidediumxv\phpmvc;


use andreidediumxv\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}