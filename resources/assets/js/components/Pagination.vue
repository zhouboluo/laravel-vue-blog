<template>
  <div class="pagination">
    <el-pagination layout="prev, pager, next" :page-size="2" :total="totalArticles.length" @current-change="curPageChange">
    </el-pagination>
  </div>
</template>

<script>

export default {
  name: 'pagination',
  props: {
    totalArticles: Array
  },
  data () {
    return {
      //articleList:this.$store.state.articleList
    }
  },
   mounted: function() {
    var _this = this;
    this.$nextTick(function() {
    })
  },
  methods:{
    curPageChange: function(currentPage) {
      this.$store.commit('setCurPage',currentPage);
    }
  }
}
</script>

<style>
 
</style>
