# dc/cms

### 开发环境

使用docker来统一开发环境，[laradock v3](https://github.com/laradock/laradock)

- macOS 10.13.4
- docker for mac CE 18.05^ edge版
- php 7.1.x
- redis 4.0.x
- mariadb 10.2.x

开发目录基本是这样，workspace内可以带其他项目，每个项目需要去`laradock/nginx`下的sites添加设置
```
workspace
├── dc-cms
└── laradock
```

### 开发库

- dingo/api
- spatie/laravel-permission
- laravel/horizon