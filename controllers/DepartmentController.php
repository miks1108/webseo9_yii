<?php
namespace app\controllers;

use app\models\entity\District;
use app\models\entity\Department;
use yii\web\Controller;

/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */
class DepartmentController extends Controller {

    public function actionList() {
        $departments = Department::find()->all();

        return $this->render('list', [
            'departments' => $departments
        ]);
    }

    public function actionAdd() {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $districtName = $_POST['districtName'];

        $district = new District();
        $district->name = $districtName;
        $district->save();

        $department = new Department();
        $department->name = $name;
        $department->description = $description;

        $department->district_id = $district->id;

        $department->save();

        $this->redirect(['/department/list']);
    }

}