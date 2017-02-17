<template>
  <div class="article">
    <breadcrumb :direction="curArticle.title"></breadcrumb>
    <div class="article-content">
      <!-- blog header start -->
      <div class="article-blog-header text-center">
          <input type="hidden" id="article-blog-id" value="d8f415182fa84602a1e021a4937a22f7">
          <h1 class="article-title">{{curArticle.title}}</h1>
          <div class="article-blog-tips">
              <span><i class="el-icon-setting color-author" title="作者"></i> {{curArticle.author}} &nbsp;</span>
              <span><i class="el-icon-time color-clock" title="时间"></i> {{curArticle.clock}}</span>
              <span><i class="el-icon-message color-eye" title="阅读"></i> 阅读(<em id="blog-readNum">{{curArticle.eye}}</em>)</span>
              <span><i class="el-icon-information color-comment" title="评论"></i> 评论(<em id="blog-commentNum">{{curArticle.comment}}</em>)</span>
              <span><i class="el-icon-star-off color-heart" title="点赞"></i> 点赞(<em id="blog-heartNum">{{curArticle.heart}}</em>)</span>
          </div>
          <div class="article-blog-tag">
            <span class="el-icon-edit"> &nbsp;</span>
            <a href="#" v-for="tag in curArticle.tags">{{tag.name}}&nbsp;</a>
          </div>
      </div>
      <!-- blog header end -->
      <!-- blog summary start -->
      <div class="article-margin-top"> 
         <p></p>
         <div class="article-blog-summary" _hover-ignore="1">
           <strong>{{curArticle.content}}</strong>
         </div>
         <p></p> 
      </div>
      <!-- blog summary end -->
      <!-- blog content start -->
      <div class="article-margin-top markdown-body editormd-html-preview" id="article-editormd-view">
        {{curArticle.content}}
      </div>    
      <!-- blog content end -->
      
      <div class="article-blog-zhuanzai">
        转载请注明：
      </div>
          
      <div class="article-blog-social">
          <span class="article-blog-action article-blog-like"> 
            <i class="icon-heart"></i> 喜欢 (<span class="count">0</span>)
          </span>
          <span class="or">or</span>
          <span class="article-blog-action article-blog-share">
            <i class="icon-share-alt"></i> 分享 (<span class="bds_count" data-cmd="count" title="累计分享0次">0</span>)
            <!-- <div class="action-popover">
              <div class="popover top in">
                <div class="arrow"></div>
                <div class="popover-content">
                  <a href="#" class="sinaweibo fa fa-weibo" data-cmd="tsina" title="" data-original-title="分享到新浪微博"></a>
                  <a href="#" class="bds_qzone fa fa-star" data-cmd="qzone" title="" data-original-title="分享到QQ空间"></a>
                  <a href="#" class="tencentweibo fa fa-tencent-weibo" data-cmd="tqq" title="" data-original-title="分享到腾讯微博"></a>
                  <a href="#" class="qq fa fa-qq" data-cmd="sqq" title="" data-original-title="分享到QQ好友"></a>
                  <a href="#" class="bds_renren fa fa-renren" data-cmd="renren" title="" data-original-title="分享到人人网"></a>
                  <a href="#" class="bds_weixin fa fa-weixin" data-cmd="weixin" title="" data-original-title="分享到微信"></a>
                  <a href="#" class="bds_more fa fa-ellipsis-h" data-cmd="more" data-original-title="" title=""></a>
                </div>
              </div>
            </div> -->
          </span> 
      </div>
          
      <div class="article-blog-donate text-center">
          <p>您的支持是博主写作最大的动力，如果您喜欢我的文章，感觉我的文章对您有帮助，请狠狠点击下面的</p>
          <el-button type="danger" class="article-btn-donate">我要小额赞助</el-button>
      </div>
      
      <!-- blog tag  start -->
      <div class="article-margin-top article-blog-tag">
          <span class="el-icon-edit"> &nbsp;</span>
          <a href="#">标签</a> , <a href="#">TAG</a> , <a href="#">啦啦</a>
      </div>
          <!-- blog tag  end -->
    </div>  
  </div>
</template>

<script>

import Breadcrumb from '../components/Breadcrumb'

export default {
  name: 'article',
  data () {
    return {
      curArticle: {}
    }
  },
  components:{
    Breadcrumb
  },
   mounted: function(){
    var _this = this;
    this.$nextTick(function () {
      _this.$http.get("static/data/articleData.json").then(function(data){
        _this.curArticle = data.body.result.list[_this.$route.params.id];
      })
      
    })
  }
}
</script>

<style>
  .article-content {
    background: #FFFFFF;
    padding: 15px;
  }
  .text-center {
    text-align: center;
  }
  .article-title {
    font-size: 30px;
    line-height: 1;
    font-weight: 400;
    margin:0px;
  }
  .article-blog-tips {
    padding-top: 10px;
    font-size: 10px;
  }
  .article-blog-tag {
    font-size: 8px;
    line-height: 24px;
  }
  .article-blog-summary {
    color: #777;
  }
  .article-blog-zhuanzai {
    margin-top: 40px;
  }
  .article-blog-social {
    margin-bottom: 30px;
    padding-top: 40px;
    text-align: center;
    text-indent: 0;
  } 
  .article-blog-action {
    position: relative;
    padding: 8px 40px;
    display: inline-block;
    border-radius: 2px;
    background-color: #5FB878;
    font-size: 15px;
    margin: 0 3px;
    color: #fff;
    cursor: pointer;
  }
  .article-blog-like {
    background-color: #FF5722;
    color: #fff;
  }
  .article-blog-social .or {
    background: #fff;
    color: #455670;
    display: inline-block;
    padding: 5px 12px;
    font-size: 12px;
    position: absolute;
    z-index: 2;
    margin: 3px 0 0 -19px;
    border-radius: 100px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    -o-border-radius: 100px;
  }
  .article-blog-donate {
    margin-top: 10px;
    border-bottom: 1px solid #E2E2E2;
    padding-bottom: 10px;
  }
  .article-btn-donate {
    width: 310px;
    margin: 10px auto 0px;
    background-color: #FF5722;
    color: #ffffff;
    height: 40px;
    border: none;
    font-family: 'Microsoft Yahei';
    font-size: 16px;
    letter-spacing: 2px;
  }

</style>
