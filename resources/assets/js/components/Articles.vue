<template>
  <div class="articles">
    <article class="entry-article" v-for="(item,index) in pagingArticles">
      <el-row class="entry-text">
        <el-col :span="24">
          <div class="list-title"> 
            <span class="category">{{item.category}}<i></i></span>
            <router-link :to="'/article/'+index">{{item.title}}</router-link>
          </div> 
          <div class="list-hint"> 
            <span><i class="el-icon-setting color-author" title="作者"></i> {{item.author}} &nbsp;</span>
            <span><i class="el-icon-time color-clock" title="时间"></i> {{item.clock}}</span> 
            <span><i class="el-icon-message color-eye" title="阅读"></i> 阅读({{item.eye}})</span> 
            <span><i class="el-icon-information color-comment" title="评论"></i> 评论({{item.comment}})</span>
            <span><i class="el-icon-star-off color-heart" title="点赞"></i> 点赞({{item.heart}})</span> 
          </div>  
          <div class="list-content">{{item.content}}
          </div>  
          <div class="list-foot">  
            <i class="el-icon-edit"></i>   
            <span class="radius" v-for="tag in item.tags">#{{tag.name}}</span>   
            <router-link :to="{ name: 'Article', params: { id: index }}">阅读全文&gt;&gt;</router-link> 
          </div>   
        </el-col>
      </el-row>
    </article>
  </div>
</template>

<script>


export default {
  name: 'articles',
  props: {
    totalArticles: Array,
    pagingArticles: Array
  },
  data () {
    return {
      msg: ''
    }
  }
}
</script>

<style>
  .entry-article {
    padding: 10px 0;
  }
  .entry-text {
    padding: 20px;
    background-color: #FFF;
    border: 1px solid;
    border-color: #eee;
    margin-bottom: 5px;
    text-align: left;
  }
  .list-title {
    font-size: 16px;
  }
  .list-hint {
    padding-top: 2px;
    font-size: 10px;
  }
  .list-content {
    padding:2px 0;
    text-indent: 2em;
    font-size: 14px;
    line-height: 22px;
    color: #777;
  }
  .list-foot {
    font-size: 8px;
    text-align: left;
  }
  .list-foot a {
    font-size: 10px;
    float: right;
    color: #009688;
  }
  .category {
    color: #fff;
    background-color: #1abc9c;
    padding: 3px 6px;
    font-size: 10px;
    position: relative;
    top: -2px;
    margin-right: 5px;
  }
  .category i {
    position: absolute;
    top: 50%;
    margin-top: -4px;
    right: -4px;
    display: inline-block;
    width: 0;
    height: 0;
    vertical-align: middle;
    border-left: 4px solid #1abc9c;
    border-top: 4px solid transparent;
    border-bottom: 4px solid transparent;
  }

</style>
