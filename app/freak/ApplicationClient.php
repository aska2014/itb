<?php

use \Kareem3d\Freak\Core\Client;
use Kareem3d\Freak\Core\Element;
use Kareem3d\Freak;

class ApplicationClient extends Client {

    /**
     * @return Element[]
     */
    public function elements()
    {
        return array(
            Element::withDefaults('video', new Video()),
            Element::withDefaults('product', new Product()),
            Element::withDefaults('category', new Category()),
        );
    }

    /**
     * Load client configurations
     *
     * @param \Kareem3d\Freak $freak
     * @return void
     */
    public function run(Freak $freak)
    {
        ClassLoader::addDirectories(__DIR__ . '/Controllers');
        View::addNamespace('panel', __DIR__ . '/views');

        $freak->modifyElement('product', function(Element $element)
        {
            $element->setController('FreakProductController');
        });

        $freak->modifyElement('category', function(Element $element)
        {
            $element->setController('FreakCategoryController');
        });
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'application';
    }
}