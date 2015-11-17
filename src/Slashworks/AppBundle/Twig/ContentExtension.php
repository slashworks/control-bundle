<?php
    namespace Slashworks\AppBundle\Twig;

    class ContentExtension extends \Twig_Extension
    {

        protected $sAppPath;


        public function __construct($sAppPath)
        {
            $this->sAppPath = $sAppPath;
        }



        public function getFilters()
        {
            return array(
                new \Twig_SimpleFilter('content', array($this, 'contentFilter')),
            );
        }

        public function contentFilter($sFilename)
        {
            $sRoot = $this->sAppPath."/../";
            if(file_exists($sRoot.$sFilename)){
                return file_get_contents($sRoot.$sFilename);
            }
            return "";
        }

        public function getName()
        {
            return 'content_extension';
        }
    }