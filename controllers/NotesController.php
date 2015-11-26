<?php
namespace app\controllers;

use yii\web\Controller;
use yii\db\Connection;

class NotesController extends Controller {

    public function actionIndex() {

        $db = new Connection([
            'dsn' => 'mysql:host=localhost;dbname=yii_db',
            'username' => 'root',
            'password' => 'GvSk1{@CYussHfm',
            'charset' => 'utf8',
        ]);

        $notes = $db->createCommand("SELECT * FROM notes")->queryAll();

        return $this->render('list', ['notes' => $notes]);
    }

}