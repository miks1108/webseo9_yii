<?php
namespace app\controllers;

use app\models\Note;
use yii\web\Controller;

class NotesController extends Controller {

    public function actionIndex() {
        $notes = Note::find()->all();
        return $this->render('list', ['notes' => $notes]);
    }

    public function actionAdd() {
        $note = new Note();
        $note->title = $_POST['title'];
        $note->text = $_POST['text'];
        $note->save();

        $this->redirect(['notes']);
    }

}