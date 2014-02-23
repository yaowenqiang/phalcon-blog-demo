<?php


class Polloptions extends \Phalcon\Mvc\Model
{

    /**
     * @var integer
     *
     */
    public $id;

    /**
     * @var integer
     *
     */
    public $poll_id;

    /**
     * @var string
     *
     */
    public $name;
    /**
     * @var string
     *
     */
    public $url;


    /**
     * @var integer
     *
     */
    public $number_votes;


}
