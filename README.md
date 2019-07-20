# Yii2-start
YII 2 учебное приложение

Пришлось помучаться в разнице ядра фреймворка (на маке 2.0.2, а на PC через Composer встала 2.0.3)
Поэтому на PC под OSPanel работает только с такми УРЛменеджером:
```PHP

  'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
     '' => 'my/index',
     '<controller:[\w-]+>/<id:\d+>' => '<controller>/view',
    'POST <controller:[\w-]+>' => '<controller>/create',
    '<controller:[\w-]+>s' => '<controller>/index',
    'PUT <controller:[\w-]+>/<id:\d+>' => '<controller>/update',
    'DELETE <controller:[\w-]+>/<id:\d+>' => '<controller>/delete'
            ],
        ],     
        
```
