<?php
namespace app\models;
use app\models\entity\Employee;
use app\models\entity\Person;
use app\models\entity\Position;
use yii\base\Model;

/**
 * @author Gutsulyak Vadim <guts.vadim@gmail.com>
 */
class EmployeeModel extends Model {
    public $firstName;
    public $lastName;
    public $secondName;
    public $positionName;
    public $salary;


    public function rules()
    {
        return [
            [['firstName', 'lastName', 'secondName', 'salary'], 'required']
        ];
    }

    public function add() {
        $person = new Person();
        $person->first_name = $this->firstName;
        $person->last_name = $this->lastName;
        $person->second_name = $this->secondName;
        $person->save();

        /*$position = new Position();
        $position->name = $this->positionName;
        $position->save();*/

        $employee = new Employee();
        $employee->person_id = $person->id;
        $employee->salary = $this->salary;

        $employee->save();

    }

    public function getAll() {
        return Employee::find()->with('person')->all();
    }
}