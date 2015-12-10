<?php


namespace app\controllers;
use yii\web\Controller;

/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */
class EmployeesController extends Controller {

    public function actionList() {

        return $this->render('list');
    }
}