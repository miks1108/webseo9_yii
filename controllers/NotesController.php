<?php
namespace app\controllers;

use app\models\Note;
use yii\web\Controller;

class NotesController extends Controller {

    public function actionIndex() {
        $notes = Note::find()->all();
        return  $this->render('list', ['notes' => $notes]);
    }

    public function actionNew() {
        $note = new Note();
        $note->title = $_POST['title'];
        $note->text = $_POST['text'];
        $note->save();

        $this->redirect(['/notes']);
    }

    public function actionDel() {
        $id = $_GET['id'];
        Note::deleteAll(['id' => $id]);
        $this->redirect(['/notes']);
    }

}