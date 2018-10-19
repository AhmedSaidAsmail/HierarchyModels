<?php
namespace HierarchyModels;


class ItemCollection
{
    /**
     * @var array ItemResolver[]
     */
    private $collection = [];

    /**
     * @param array $collection
     */

    public function __construct(array $collection)
    {
        $this->collection = $collection;
    }

    /**
     * replacing Collection items
     *
     * @param array $collection
     */
    public function replaceCollection(array $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return array ItemResolver[]
     */
    public function all()
    {
        return $this->collection;
    }

}