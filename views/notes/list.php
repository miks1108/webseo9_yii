<h1>Notes list</h1>

<form action="/notes/new" method="POST">
    <input class="form-control" type="text" name="title">
    <br>
    <textarea class="form-control" name="text"></textarea>
    <br>

    <input class="btn btn-success" type="submit" value="Add">
</form>

<br>

<ul>
    <? foreach($notes as $note) { ?>
        <li><?=$note->title?></li>
    <? } ?>
</ul>