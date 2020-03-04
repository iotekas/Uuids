## Use UUID as primary key in Laravel

Use this package to use uuid as primary key on your model.

The package creates UUID-4 keys from the ramsey/uuid package, and automatically assigns the key to the $id field.
This is a simple package with almost no configuration. There are more advanced packages out there ex.: https://github.com/spatie/laravel-binary-uuid


```php
<?php
use iotek\UsesUuid\Uuids;

class YourModel extends Model {
  use Uuids;
```

You will also need to edit your migration. The 'id' column shall be set to uuid or string. On a fresh laravel you only 

```php
$table->uuid('id')->primary();

// OR
$table->string('id')->primary();
```
