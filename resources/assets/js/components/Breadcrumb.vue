<template>
  <div class="breadcrumb">
    <el-breadcrumb separator="/">
      <el-breadcrumb-item :to="{ path: '/index' }">首页</el-breadcrumb-item>
      <el-breadcrumb-item>{{direction}}</el-breadcrumb-item>
    </el-breadcrumb>
</template>

<script>

export default {
  name: 'breadcrumb',
  props: ['direction'],
  data () {
    return {
      msg: ''
    }
  }
}
</script>

<style>
  .breadcrumb{
    background: #FFFFFF;
    padding: 15px;
    margin-bottom: 20px;
  }
</style>
