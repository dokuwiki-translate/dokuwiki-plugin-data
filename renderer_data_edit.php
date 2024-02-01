<?php

use dokuwiki\Form\Form;

/**
 * Dummy renderer for data entry editing
 *
 * @author     Adrian Lang <lang@cosmocode.de>
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

class Doku_Renderer_plugin_data_edit extends Doku_Renderer
{
    /**
     * @var Doku_Form|Form
     */
    public $form;

    public function getFormat()
    {
        return 'plugin_data_edit';
    }
}
