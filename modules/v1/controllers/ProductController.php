<?php

namespace app\modules\v1\controllers;

use yii\rest\ActiveController;

/**
 * Product controller for the `v1` module
 */
class ProductController extends ActiveController
{
    // The class of the ActiveRecord should be specified via $modelClass
    // Yii 2 RESTful APIs setup - http://localhost/projects/basic/web/v1/product
    public $modelClass = "app\models\Product";

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [

            // how to implement different authentication method with API

            // HttpBearerAuth is an action filter that supports the authentication method based on HTTP Bearer token.

            // 'class' => \yii\filters\auth\HttpBearerAuth::class,
            
            // specific actions authentication
            // 'only' => ['test'], 

            // using api except property in our api configuration
            // 'except' => ['test'], 
            
            // optional endpoint authentication
            // 'optional' => ['hello'], 

            //HttpHeaderAuth is an action filter that supports HTTP authentication through HTTP Headers

            // 'class' => \yii\filters\auth\HttpHeaderAuth::class,
            // 'header' => 'HIRU-API-KEY' 
            
            //changed the default api key in to this one
            
            // HttpBasicAuth is an action filter that supports the HTTP Basic authentication method.

            // 'class' => \yii\filters\auth\HttpBasicAuth::class,

            // authenticate users using username and password, here we should provide the $auth function
            // 'auth' => function ($username, $password) {
            //     $user = User::find()->where(['username' => $username])->one();
            //     if ($user && $user->validatePassword($password)) {
            //         return $user;
            //     }
            //     return null;
            // },

            // QueryParamAuth is an action filter that supports the authentication based on the access token passed through a query parameter.

            // 'class' => \yii\filters\auth\QueryParamAuth::class,
            //changed the default api key in to this one
            // 'tokenParam' => 'HIRU_API_KEY' 

            // CompositeAuth is an action filter that supports multiple authentication methods at the same time.
            'class' => \yii\filters\auth\CompositeAuth::class,
            'authMethods' => [
                [ 'class' => \yii\filters\auth\HttpBasicAuth::class,
                  'optional' => ['hello'],
                ],
                [
                    'class' => \yii\filters\auth\QueryParamAuth::class, //configuring individual api
                    'tokenParam' => 'HIRU_API_KEY',
                    'only' => ['test'],
                ]
            ],
        ];
        return $behaviors;
    }

    public function actionTest(){
        return ['message' => 'Hello world!'];
    }

    public function actionHello(){
        return ['message' => 'Another Hello world!'];
    }
}
