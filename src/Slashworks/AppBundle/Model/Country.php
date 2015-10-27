<?php
    /**
     *
     *          _           _                       _
     *         | |         | |                     | |
     *      ___| | __ _ ___| |____      _____  _ __| | _____
     *     / __| |/ _` / __| '_ \ \ /\ / / _ \| '__| |/ / __|
     *     \__ \ | (_| \__ \ | | \ V  V / (_) | |  |   <\__ \
     *     |___/_|\__,_|___/_| |_|\_/\_/ \___/|_|  |_|\_\___/
     *                                        web development
     *
     *     http://www.slash-works.de </> hallo@slash-works.de
     *
     *
     * @author      rwollenburg
     * @copyright   rwollenburg@slashworks
     * @since       06.01.15 10:26
     * @package     Slashworks\AppBundle
     *
     */
    namespace Slashworks\AppBundle\Model;

    use Slashworks\AppBundle\Model\om\BaseCountry;

    /**
     * Class Country
     *
     * @package Slashworks\AppBundle\Model
     */
    class Country extends BaseCountry
    {

        /**
         * Get the [en] column value.
         *
         * @return string
         */
        public function getEn()
        {
            return utf8_decode(utf8_encode($this->en));
        }

        /**
         * Get the [de] column value.
         *
         * @return string
         */
        public function getDe()
        {
            return utf8_decode(utf8_encode($this->de));
        }

    }
