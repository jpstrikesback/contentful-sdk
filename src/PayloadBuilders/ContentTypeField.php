<?php
namespace Incraigulous\ContentfulSDK\PayloadBuilders;

class ContentTypeField implements PayloadBuilderInterface {
    protected $id;
    protected $name;
    protected $type;
    protected $required;
    protected $localized;

    function __construct($id, $name, $type, $required = false, $localized = false)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->required = $required;
        $this->localized = $localized;
    }

    /**
     * Return the payload builder array part.
     * @return array
     */
    function make()
    {
        return[
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'required' => $this->required,
            'lacalized' => $this->localized
        ];
    }

    /**
     * Return the key.
     * @return mixed
     */
    function getKey() {
        //No key used.
    }
}