<?php
namespace quiz\V1\Rest\Programmingquiz;

class ProgrammingquizResourceFactory
{
    private $_adapter;


    public function __invoke($services)
    {
        $adapter = $services->get('programmingquiz');
        $this->_adapter = $adapter;
        return new ProgrammingquizResource($adapter);
    }
}

