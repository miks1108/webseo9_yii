<h1>Departments list</h1>

<form action="/department/add" method="POST">
    <input class="form-control" type="text" name="name">
    <br>
    <input class="form-control" type="text" name="districtName">
    <br>
    <textarea class="form-control" name="description"></textarea>
    <br>

    <input class="btn btn-success" type="submit" value="Add">
</form>

<br>

<div class="panel panel-default">
    <div class="panel-heading">Notes List</div>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>District</th>
        </tr>

        <? foreach($departments as $department) { ?>
            <tr>
                <td><?=$department->name?></td>
                <td><?=$department->district->name?></td>
            </tr>
        <? } ?>
    </table>
</div>
