<template>
  <div class="index">
  	<el-row>
  		<el-col :span="16">
  			<div class="index-left">
  				<carousel></carousel>
  				<articles :totalArticles="totalArticleList" :pagingArticles="pagingArticleList"></articles>
          <pagination :totalArticles="totalArticleList"></pagination>
  			</div>
  		</el-col>
  		<el-col :span="8">
  			<div class="index-right">
  				
  			</div>
  		</el-col>
	</el-row>
  </div>
</template>

<script>

import Carousel from '../components/Carousel'
import Articles from '../components/Articles'
import Pagination from '../components/Pagination'

export default {
  name: 'index',
  data () {
    return {
      totalArticleList:[]
    }
  },
  computed: {
    pagingArticleList: function() {
      var curPage = this.$store.state.curPage;
      var pageSize = this.$store.state.pageSize;
      var start = (curPage - 1) * 2;
      var end = start + pageSize;
      end =  end > this.totalArticleList.length ? this.totalArticleList.length : end;
      return this.totalArticleList.slice(start,end);
    }
  },
  mounted: function() {
    var _this = this;
    this.$nextTick(function() {
      _this.$http.get("static/data/articleData.json").then(function(data){
        _this.totalArticleList = data.body.result.list;
        _this.pagingArticleList = _this.totalArticleList.slice(0,this.$store.state.pageSize);
        _this.$store.commit('setArticles',_this.totalArticleList);
        _this.$store.commit('setCurPage',1);
      })
    })
  },
  
  components: {
  	Carousel,Articles,Pagination
  }
}
</script>

<style>
  .index-left {
  	width: 100%;
  }  
</style>
