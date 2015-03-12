<?php
namespace quiz\V1\Rest\Programmingquiz;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

//use quiz\V1\Rest\Programmingquiz\ProgrammingquizResourceFactory as factory;
//use Zend\Db\Adapter\AdapterInterface;
//use Zend\Db\Sql\Sql;
//use Zend\Paginator\Adapter\ArrayAdapter;
//use Zend\Paginator\Paginator;


class ProgrammingquizResource extends AbstractResourceListener
{
    private $_adapter;

    public function __construct($adapter)
    {
        $this->_adapter = $adapter;
    }

    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        return new ApiProblem(405, 'The POST method has not been defined');
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
//        return factory::fetchOne($id);
        return $this->fetchOne($id);

//        return new ApiProblem(405, 'The GET method has not been defined for individual resources');
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = array())
    {
        return new ApiProblem(405, 'The GET method has not been defined for collections');
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for individual resources');
    }



    public function fetchOne($id)
    {
        //Get the hash
        $sql = 'SELECT * FROM programming WHERE id = ?';
        $resultset = $this->_adapter->query($sql, array($id));
        $result = $resultset->toArray();
        if (!$result) {
            var_dump("false login 1");
            return false;
        }

            $entity = new ProgrammingquizEntity();
            $entity->id = $result[0]['id'];
            $entity->question = $result[0]['question'];
            $entity->code = $result[0]['code'];
            $entity->answer1 = $result[0]['answer1'];
            $entity->answer2 = $result[0]['answer2'];
            $entity->answer3 = $result[0]['answer3'];
            $entity->answer4 = $result[0]['answer4'];
            $entity->answer5 = $result[0]['answer5'];
            $entity->programminglanguage = $result[0]['language'];
            $entity->correct_answers = $result[0]['correct_answers'];
            $entity->discussion = $result[0]['discussion'];
            return $entity;

    }
}
