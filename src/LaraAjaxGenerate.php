<?php

namespace Censam\LaraAjax;

use Censam\LaraAjax\Bootstrap\Builders\BootstrapDeleteConfirmationMessage;
use Censam\LaraAjax\Bootstrap\Builders\BootstrapDisplayBuilder;
use Censam\LaraAjax\Bootstrap\Builders\BootstrapModalBuilder;
use Censam\LaraAjax\Materialize\Builders\MaterializeDeleteConfirmationMessage;
use Censam\LaraAjax\Materialize\Builders\MaterializeDisplayBuilder;
use Censam\LaraAjax\Materialize\Builders\MaterializeModalBuilder;
use Censam\LaraAjax\Modal\ModalDirector;

/**
 * class LaraAjaxGenerate
 *
 * @package laraAjax
 * @author Sampath Gunasekara <wgsampath@gmail.com>
 */
class LaraAjaxGenerate
{
    /**
     * Show LaraAjax materialize form to edit specified resource.
     *
     * @param  Array $input
     * @param  String $link
     * @return String
     */
    public function MteditFormModal($input, $link)
    {
        $modalDirector = new ModalDirector();

        $modal = new MaterializeModalBuilder();

        $modalresult = $modalDirector->build('Edit', 'update', $input, $link, $modal);

        return $modalresult->modalHead . $modalresult->modalBody . $modalresult->modalFooter;
    }

    /**
     * Show LaraAjax materialize form to create specified resource.
     *
     * @param  Array $input
     * @param  String $link
     * @return String
     */
    public function MtcreateFormModal($input, $link)
    {
        $modalDirector = new ModalDirector();

        $modal = new MaterializeModalBuilder();

        $modalresult = $modalDirector->build('New', 'create', $input, $link, $modal);

        return $modalresult->modalHead . $modalresult->modalBody . $modalresult->modalFooter;
    }

    /**
     * Show materialize confirmation message to delete  specified resource.
     *
     * @param  String $title
     * @param  String $message
     * @param  String $link
     * @return String
     */
    public function MtDeleting($title, $message, $link)
    {
        $modalDirector = new ModalDirector();

        $modal = new MaterializeDeleteConfirmationMessage();

        $modal = $modalDirector->build($title, 'Delete', $message, $link, $modal);

        return $modal->modalHead . $modal->modalBody . $modal->modalFooter;
    }

    /**
     * Show materialize modal to displa specified resource.
     *
     * @param  Array $input
     * @return String
     */
    public function MtDisplay($input)
    {
        $modalDirector = new ModalDirector();

        $modal = new MaterializeDisplayBuilder();

        $modal = $modalDirector->build(null, null, $input, null, $modal);

        return $modal->modalHead . $modal->modalBody . $modal->modalFooter;
    }

    /**
     * Show bootsrap modal to delete specified resource.
     *
     * @param  String $title
     * @param  String $body
     * @param  String $link
     * @return Request
     */
    public function BtDeleting($title, $body, $link)
    {
        $director = new ModalDirector();

        $modal = new BootstrapDeleteConfirmationMessage();

        $modal = $director->build($title, 'Agree', $body, $link, $modal);

        return $modal->modalHead . $modal->modalBody . $modal->modalFooter;
    }

    /**
     * Show LaraAjax bootstrap form to create specified resource.
     *
     * @param  Array $input
     * @param  String $link
     * @return String
     */
    public function BtCreateFormModal($input, $link)
    {
        $director = new ModalDirector();

        $modal = new BootstrapModalBuilder();

        $modal = $director->build('New', 'Create', $input, $link, $modal);

        return $modal->modalHead . $modal->modalBody . $modal->modalFooter;
    }

    /**
     * Show LaraAjax bootstrap form to edite specified resource.
     * @param  Array $input
     * @param  String $link
     * @return String
     */
    public function BtEditFormModal($input, $link)
    {
        $director = new ModalDirector();

        $modal = new BootstrapModalBuilder();

        $modal = $director->build('Edit', 'update', $input, $link, $modal);

        return $modal->modalHead . $modal->modalBody . $modal->modalFooter;
    }

    /**
     * Show bootstrap modal to display specified resource.
     * @param  Array $input
     * @return String
     */
    public function BtDisplay($input)
    {
        $director = new ModalDirector();

        $modal = new BootstrapDisplayBuilder();

        $modal = $director->build('Dsiplay', 'ok', $input, null, $modal);

        return $modal->modalHead . $modal->modalBody . $modal->modalFooter;
    }
}
