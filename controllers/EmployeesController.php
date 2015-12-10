<?php


namespace app\controllers;
use app\models\EmployeeModel;
use yii\web\Controller;

/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */
class EmployeesController extends Controller {

    public function actionList() {
        $model = new EmployeeModel();
        $employees = $model->getAll();

        return $this->render('list', [
            'employees' => $employees
        ]);
    }

    public function actionAdd() {
        $model = new EmployeeModel();
        $model->load(\Yii::$app->request->post());
        $model->add();
    }
}