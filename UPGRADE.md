# LUYA ADMIN MODULE UPGRADE

This document will help you upgrading from a LUYA admin module version into another. For more detailed informations about the breaking changes **click the issue detail link**, there you can examples of how to change your code.

## from 1.2 to 2.0 (in progress)

+ The `table-responsive-wrapper` class got removed and replaced by the Bootstrap version of responsive tables: https://getbootstrap.com/docs/4.3/content/tables/#responsive-tables. Make sure to update your Markup accordingly.
+ Change version constraint as we follow semver (from `~1.2` to `^2.0`)
+ Change the ngRestRelation `apiEndpoint` to `targetModel`. From `'apiEndpoint' => Sale::ngRestApiEndpoint()` to `'targetModel' => Sale::class` inside of `ngRestRelations()`.
+ [#268](https://github.com/luyadev/luya-module-admin/issues/268) Deprecated classes and methods haven been removed.

## from 1.1 to 1.2 (17. May 2018)

+ This release contains the new migrations. The migrations are requried in order to make the admin module more secure. Therefore make sure to run the `./vendor/bin/luya migrate` command after `composer update`.
+ [#90](https://github.com/luyadev/luya-module-admin/issues/90) Due to uglification of all javascrip files, the angularjs strict di mode is enabled. Therefore change angular controllers from `.controller(function($scope) { ... })` to `.controller(['$scope', function($scope) { }])`. Read more about strict di: https://docs.angularjs.org/guide/di or https://stackoverflow.com/a/33494259 
+ [#69](https://github.com/luyadev/luya-module-admin/issues/69) Removed deprecated `luya\admin\helpers\I18n::decodeActive` use `luya\admin\helpers\I18n::decodeFindActive` instead. Removed deprecated `luya\admin\helpers\I18n::::decodeActiveArray` use `luya\admin\helpers\I18n::decodeFindActiveArray` instead.
+ [#122](https://github.com/luyadev/luya-module-admin/issues/122) Signature change of base file system. If you are using a custom file system you should take a look at the issue description!

## from 1.0 to 1.1 (26. March 2018)

+ This release contains the new migrations which are required for the user and file table. Therefore make sure to run the `./vendor/bin/luya migrate` command after `composer update`.
