# WP Custom Query Widget

任意のWPクエリをサイドバーウィジェットとして表示するプラグイン

## USAGE

### HTML テンプレートの変更

custom_query_get_template フックを呼び出す。

```php
add_filter("custom_query_get_template", function ($template) {
    return $new_template;
});
```

ファイルは、 STYLESHEETPATH, TEMPLATEPATH, の順検索される。
HTMLのカスタマイズは widget-html.php を参照。
