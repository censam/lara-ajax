<?php

namespace Censam\LaraAjax\Modal;

/**
 * interface ModalInterface
 *
 * @package laraAjax\Modal
 * @author Sampath Gunasekara <Censam@gmail.com>
 */
interface ModalInterface
{
    /**
     * build head of a modal
     *
     * @param $title String
     */
    public function buildHead($title);

    /**
     * build body of a modal
     *
     * @param $label String
     * @param $name String
     * @param $value String
     * @param $type String
     */
    public function buildBody($label, $name, $value, $type);

    /**
     * build footer of a modal
     *
     * @param $link String
     * @param $action String
     */
    public function buildFooter($link, $action);

    /**
     * get modal
     *
     * @return Modal
     */
    public function getResult();
}
