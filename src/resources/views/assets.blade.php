<link rel="stylesheet" type="text/css" href="{{ asset('vendor/simditor/styles/simditor.css') }}"/>

{{--<script type="text/javascript" src="{{ asset('vendor/simditor/scripts/jquery.min.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('vendor/simditor/scripts/module.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/simditor/scripts/hotkeys.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/simditor/scripts/uploader.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/simditor/scripts/simditor.js') }}"></script>
<!-- 全屏编辑器 -->
<script type="text/javascript" src="{{ asset('vendor/simditor/lib/js/simditor-fullscreen.js') }}"></script>
<!-- 拖放图像进行上传 -->
<script type="text/javascript" src="{{ asset('vendor/simditor/lib/js/simditor-dropzone.js') }}"></script>
<!-- 自动保存功能 -->
<!-- <script type="text/javascript" src="{{ asset('vendor/simditor/lib/js/simditor-autosave.js') }}"></script> -->
<script>
    Simditor.locale = "{{ config('app.locale', 'zh-CN') }}";
    let toolbarSimditor = [
        'title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol', 'ul', 'blockquote',
        'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent', 'alignment', '|', 'fullscreen'
    ];
</script>
