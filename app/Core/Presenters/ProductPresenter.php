<?php namespace Core\Presenters;

class ProductPresenter {


   public function compose($view)
   {
       $view->with('test', array('test1', 'test2'));
   }


}

?>
