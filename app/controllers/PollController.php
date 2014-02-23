<?php

class PollController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->polls = Poll::find();
    }
    public function showAction($PollId)
    {
        $this->view->poll = Poll::findFirstById($PollId);
        //$options = Polloptions::findBypoll_id($PollId);
        $this->view->options = Polloptions::find(array(
            'poll_id = ?0',
            'bind'=>array($PollId),
            'order'=>'number_votes desc'
        ));
        //$logger = new FileAdapter("app/logs/test.log");
        //$logger->log("This is a message");
    }
    public function voteAction($optionId){
        $option = Polloptions::findFirstById($optionId);
        $option->number_votes ++;
        $option->save();
        return $this->dispatcher->forward(array(
            'action'=>'show',
            'params'=>array($option->poll_id)
        ));
    }
    public function addAction($PollId){
        if($this->request->isPost()){
            $option = new Polloptions();
            $option->poll_id = $PollId;
            $option->name = $this->request->getPost('name');
            $option->number_votes = 0;
            $option->save();
            return $this->dispatcher->forward(array(
                'action'=>'show',
                'params'=>array($option->PollId)
            ));
        }

    }


}

