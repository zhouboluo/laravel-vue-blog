<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
  <div id="app">
    @yield('content')
  </div>

    <style>
        body {
          margin: 0;
          background-color: #f2f2f2;
          font-size: 14px;
          line-height: 24px;
        }
        #app {
          min-width: 1200px;
          margin: 0 auto;
          font-family: "Helvetica Neue",Helvetica,"PingFang SC","Hiragino Sans GB","Microsoft YaHei","微软雅黑",Arial,sans-serif;
        }
        /* 头部导航 */
        header {
          z-index: 1000;
          min-width: 1200px;
          transition: all 0.5s ease;  
          border-top: solid 4px #3091F2;  
          background-color: #fff;  
          box-shadow: 0 2px 4px 0 rgba(0,0,0,.12),0 0 6px 0 rgba(0,0,0,.04);  
        }
        header.header-fixed {
          position: fixed;
          top: 0;
          left: 0;
          right: 0;
        }
        header .el-menu-demo {
          padding-left: 300px!important;
        }
        /* 主内容区 */
        main {    
          display: -webkit-box;  
          display: -ms-flexbox;  
          display: flex;  
          width: 1140px;
          min-height: 800px;
          margin:0 auto;
          margin-top:36px;  
        }     
        .view {
          width: 100%;
        }
        /* 尾部 */
        footer {
          padding: 20px 0;
          margin-top: 20px;
          background-color: #2F4056;
          color: #fff !important;
        }
        /* 公共样式 */
        h1,h2,h3 {
          font-size: 14px;
          font-weight: 400;
        }
        .color-author,
        .color-eye,
        .color-comment {
          color: #01AAED;
        }
        .color-clock,
        .color-heart {
          color: #ED0156;
        }
        a {
          color: #474747;
          text-decoration: none;
        }
        a:hover {
          color: #10D07A;
        }
        hr {
          height: 1px;
          border: 0;
          background-color: #e2e2e2;
          clear: both;
        }
    </style>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
