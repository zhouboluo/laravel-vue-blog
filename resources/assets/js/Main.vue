<template>
  <div class="container">
    <header class="header">
      <el-row>
        <el-col :span="24">
          <el-menu theme="dark" default-active="/index" class="el-menu-demo" mode="horizontal" :router="true">
            <el-menu-item index="/index">首页</el-menu-item>
            <el-menu-item index="/about">关于本站</el-menu-item>
            <el-menu-item index="/works">我的作品</el-menu-item>
            <el-menu-item index="/message">留言墙</el-menu-item>
          </el-menu>
        </el-col>
      </el-row>
    </header>
    <main>
      <router-view class="view"></router-view>
    </main>
    <footer>
      <el-row>
        <el-col :span="24">
          <div class="text-center">
            <h3><strong>御剑江湖-小白哥</strong>简介</h3>
            <p class="am-text-sm">御剑江湖-胡丁博客定位为IT技术博客站，博客内容主要涉及编程语言、推荐算法、数据挖掘等方面，分享实用的学习和开发资料。 </p>
          </div>
          <div class="text-center">Copyright © 2016 青菜萝卜 - 胡丁  |  联系我 : 1043244432@qq.com  |  All Rights Reserved.  |  蜀ICP备16028381
          </div> 
        </el-col>
      </el-row>  
    </footer>
  </div>
</template>

<script>
import Vue from 'vue'
import Element from 'element-ui'
import 'element-ui/lib/theme-default/index.css'

Vue.use(Element)


export default {
  name: 'main'
}
</script>


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
