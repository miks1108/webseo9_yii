<?php
namespace app\controllers;

use app\models\Note;
use yii\web\Controller;

class NotesController extends Controller {

    public function actionIndex() {
        $notes = Note::findAll();
        return $this->render('list', ['notes' => $notes]);
    }

}