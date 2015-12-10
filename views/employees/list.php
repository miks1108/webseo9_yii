<h1>Список сотрудников</h1>

<form class="form-horizontal" action="/employees/add" method="POST">
    <div class="form-group">
        <label for="firstName" class="col-sm-2 control-label">
            Имя:
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="EmployeeModel[firstName]" id="firstName" placeholder="Имя">
        </div>
    </div>
    <div class="form-group">
        <label for="lastName" class="col-sm-2 control-label">
            Фамилия:
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="EmployeeModel[lastName]" id="lastName" placeholder="Фамилия">
        </div>
    </div>
    <div class="form-group">
        <label for="secondName" class="col-sm-2 control-label">
            Отчество:
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="EmployeeModel[secondName]" id="secondName" placeholder="Отчество">
        </div>
    </div>
    <div class="form-group">
        <label for="salary" class="col-sm-2 control-label">
            Оклад:
        </label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="EmployeeModel[salary]" id="salary" placeholder="Оклад">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Добавить</button>
        </div>
    </div>
</form>

<br>

<div class="panel panel-default">
    <div class="panel-heading">Notes List</div>
    <table class="table">
        <tr>
            <th>ФИО</th>
            <th>Оклад</th>
        </tr>

        <? foreach($employees as $employee) { ?>
            <tr>
                <td>

                </td>
                <td>
                    <?=$employee->salary?>
                </td>
            </tr>
        <? } ?>
    </table>
</div>
