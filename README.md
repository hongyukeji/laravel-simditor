<h1 align="center"> laravel-simditor </h1>

<p align="center"> laravel simditor editor.</p>


## Installing

```shell
$ composer require hongyukeji/laravel-simditor
```

```shell
$ php artisan vendor:publish --provider='Hongyukeji\LaravelSimditor\SimditorServiceProvider'
```

## Usage

- in your <head> block just put

```
@include('Simditor::assets')
```

```html
<!-- 加载编辑器的容器 -->
<textarea id="editor" name="content" rows="6" placeholder="">
    这里写你的初始化内容
</textarea>

<!-- 实例化编辑器 -->
<script>
    $(document).ready(function() {
        var editor = new Simditor({
            textarea: $('#editor'),
            upload: {
                url: '上传图片地址',
                params: {
                    _token: 'Csrf Token'
                },
                fileKey: 'upload_file',
                connectionCount: 3,
                leaveConfirm: '文件上传中，关闭此页面将取消上传。'
            },
            pasteImage: true,
        });
    });
</script>

<!-- or -->

<!-- 加载编辑器的容器 -->
<script id="editor" name="content" type="text/plain">
    这里写你的初始化内容
</script>

<!-- 实例化编辑器 -->
<script>
    $(document).ready(function() {
      var editor = new Simditor({
        textarea: $('#editor'),
      });
    });
</script>
```

- Simditor官方文档: [https://simditor.tower.im/docs/doc-usage.html](https://simditor.tower.im/docs/doc-usage.html)

- 服务器后端返回json格式

```php
echo json_encode([
    'success' => true,
    'msg' => '图片上传错误信息',
    'file_path' => '/upload/2018_10_11/1.jpg'
]);
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/hongyukeji/laravel-simditor/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/hongyukeji/laravel-simditor/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT