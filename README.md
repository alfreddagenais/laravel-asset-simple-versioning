# Laravel Simple versioning Asset

Simple ways to add versioning into assets elements. Easy and simple

## Add config into .env file

Add this line into `.env` config file. Edit to your public `directory`
```
APP_FOLDER_PUBLIC=/whatis/full/path/directory/public/
```

## Edit .htaccess

Add this line into `public` `.htaccess` file
```
RewriteRule (.*)-[0-9]{10}\.(.*)$ $1.$2 [L]
```


## Add Helper functions

Add the file `file_helper.php` into `Helpers` directory. Or add PHP functions of the `file_helper.php` into your current helpers files.

## Implementation in blade files

Replace
```
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
```

With
```
<script src="{{ assetVersion('js/app.js') }}" type="text/javascript"></script>
```

## Version

1.0.0 : Init repository

## License

MIT