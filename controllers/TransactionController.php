<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Transaction;

class TransactionController extends Controller
{
    public function actionIndex()
    {
        // Fetch all transactions from the database
        $transactions = Transaction::find()->all();

        // Pass the data to the view
        return $this->render('index', ['transactions' => $transactions]);
    }

    public function actionView($id)
    {
        // Fetch a single transaction by its ID
        $transaction = Transaction::findOne($id);

        // Render a view to display the transaction details
        return $this->render('view', ['transaction' => $transaction]);
    }
}
