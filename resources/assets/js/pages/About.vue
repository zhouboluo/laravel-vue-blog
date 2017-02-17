<template>
  <div class="about">
  	<el-row>
  		<el-col :span="24">
        <div class="about-content">
          <!-- about header start -->
          <div>
            <h1 class="text-center">关于本站</h1>
              <p class="text-center about-hint">
                  <span><i class="el-icon-setting list-author"></i> <a href="#">青菜萝卜 &nbsp;</a></span>
                  <span><i class="el-icon-time list-clock"></i> <a href="#">2016/10/21 &nbsp; </a></span>
                  <span><i class="el-icon-message list-eye"></i> <a href="#"> 阅读(19)</a></span>
              </p>
          </div>
          <!-- about header end -->
          <!-- about content start -->
          <div>
            <div>
              <h3><strong>本站简介</strong></h3>
              <p class="about-text">
                本站定位为IT技术博客站，博客内容主要涉及编程语言、机器学习、推荐算法、数据挖掘等方面，同时分享实用的学习和开发资料。嗯嗯嗯，不知道说啥了。外面的世界真精彩!
              </p>
              <hr>
            </div>
            <div>
              <h3><strong>关于我</strong></h3>
              <p class="about-text">
                一枚在校研究生，非著名程序员。主要开发语言为Java， Android，Html等。专长领域为Web开发，Android开发，服务器端开发。目前主要研究方向为海量信息处理，文本新闻挖掘等。
               </p>
              <hr>
            </div>
            <div>
              <h3><strong>初衷</strong></h3>
              <p class="about-text">写博是一个思考和沉淀的过程。
              对内：是一个solution record的地方；是自己的知识仓库。
              对外：是别人了解你的最直接方式；是交流、分享经验的平台。
              </p>
              <hr>
            </div>
            <div>
              <h3><strong>联系方式</strong></h3>
              <p class="about-text">邮箱：1043244432@qq.com</p>
              <p class="about-text">新浪微博：<a href="http://weibo.com/p/1005055576062761" target="_blank">http://weibo.com</a></p>
              <p class="about-text">GitHub：<a href="https://github.com/hujianhong" target="_blank">https://github.com</a></p>
              <hr>
            </div>
            <div>
              <h3><strong>文章版权声明</strong></h3>
              <p class="about-text">1、欢迎转载本站文章，本站文章版权归作者所有，转载请声明原文出处。 请尊重他人劳动成果,共建美好的网络环境。</p>
              <p class="about-text">2、知识共享许可协议 本站作品采用 知识共享署名-相同方式共享 3.0 中国大陆许可协议进行许可。</p>
              <p class="about-text">3、本站转载的文章都有声明作者或文章的来源。但有部分文章找不到相关作者信息，这些文章版权为原作者所有。 如有版权等问题，原作者可发邮件给我以进行处理。</p>
              <hr>
            </div>
            <div>
              <h3><strong>友链互换</strong></h3>
              <p class="about-text">想要互换友链的朋友可以联系我: 1043244432@qq.com。</p>
              <hr>
            </div>
            <div>
              <h3><strong>一句箴言</strong></h3>
              <p class="about-text">天道酬勤，比你优秀的人还在努力</p>
            </div>
          </div>
        </div>
  		</el-col>
	</el-row>
  </div>
</template>

<script>

export default {
  name: 'about',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<style>
  .about {
    background: #FFFFFF;
    width: 70%;
    margin: 0 auto;
  }
  .about-text {
    text-indent: 2em;
  }
  .about-content {
    padding: 20px;
  }
</style>