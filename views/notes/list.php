<h1>Notes list</h1>

<form action="/notes/new" method="POST">
    <input class="form-control" type="text" name="title">
    <br>
    <textarea class="form-control" name="text"></textarea>
    <br>

    <input class="btn btn-success" type="submit" value="Add">
</form>

<br>

<div class="panel panel-default">
    <div class="panel-heading">Notes List</div>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Title</th>
        </tr>

        <? foreach($notes as $note) { ?>
            <tr>
                <td class="col-md-1"><?=$note->id?></td>
                <td><?=$note->title?></td>
                <td class="col-md-1">
                    <a href="/notes/del?id=<?=$note->id?>" class="label label-warning">
                        Delete
                    </a>
                </td>
            </tr>
        <? } ?>
    </table>
</div>
