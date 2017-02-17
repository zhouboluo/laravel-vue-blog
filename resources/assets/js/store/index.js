import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const state = {
	articleList: [],
	pageSize: 2,
	curPage: 1,
}

const mutations = {
	setArticles(state, data) {
		Object.assign(state.articleList, data);
	},
	setCurPage(state, data) {
		state.curPage = data;
	}
}

export default new Vuex.Store({
	state,
	mutations
})