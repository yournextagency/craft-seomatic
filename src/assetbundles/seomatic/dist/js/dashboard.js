/*!
 * @project        seomatic
 * @name           dashboard.js
 * @author         Andrew Welch
 * @build          Wed Jun 22 2022 03:05:06 GMT+0000 (Coordinated Universal Time)
 * @copyright      Copyright (c) 2022 ©2020 nystudio107.com
 *
 */
"use strict";(self.webpackChunkseomatic=self.webpackChunkseomatic||[]).push([[966],{1990:function(t,e,r){var o=r(6268),a=r.n(o);Vue.use(a());var n={mounted:function(){var t=this;this.$confetti.start({shape:"rect",colors:["DodgerBlue","OliveDrab","Gold","pink","SlateBlue","lightblue","Violet","PaleGreen","SteelBlue","SandyBrown","Chocolate","Crimson"]}),setTimeout((function(){t.$confetti.stop()}),5e3)},methods:{}},s=r(1900),l=(0,s.Z)(n,(function(){var t=this.$createElement;return(this._self._c||t)("main")}),[],!1,null,null,null).exports,i=r(7166),c=r.n(i),u={components:{apexcharts:c()},props:{colors:Array,labels:Array,series:Array,showLabels:{type:Boolean,default:!1},url:{type:String,default:""}},methods:{},created:function(){},data:function(){var t=this;return{chartOptions:{chart:{toolbar:{show:!1},events:{click:function(e,r,o){window.location=t.url}}},plotOptions:{radialBar:{dataLabels:{name:{show:!0},value:{offsetY:5,fontSize:"24px",color:void 0,formatter:function(t){return t+"%"}}},hollow:{margin:0,size:"32%",background:"#fff",position:"front"},track:{background:"#EEE",strokeWidth:"98%",margin:5}}},stroke:{lineCap:"round"},legend:{verticalAlign:"middle"},colors:this.colors,labels:this.labels}}}},h=(0,s.Z)(u,(function(){var t=this,e=t.$createElement;return(t._self._c||e)("apexcharts",{staticClass:"cursor-pointer",attrs:{width:"100%",height:"310px",type:"radialBar",options:t.chartOptions,series:t.series}})}),[],!1,null,null,null).exports,d={components:{apexcharts:c()},props:{colors:Array,labels:Array,series:Array,showLabels:{type:Boolean,default:!1},url:{type:String,default:""}},methods:{},created:function(){},data:function(){var t=this;return{chartOptions:{chart:{toolbar:{show:!1},events:{click:function(e,r,o){window.location=t.url}}},plotOptions:{radialBar:{dataLabels:{name:{show:!0},value:{fontSize:"24px",offsetY:5,color:void 0,formatter:function(t){return t+"%"}}},hollow:{margin:0,size:"72%",background:"#fff",position:"front"},track:{background:"#EEE",strokeWidth:"98%",margin:5}}},stroke:{lineCap:"round"},legend:{verticalAlign:"middle"},colors:this.colors,labels:this.labels}}}},p=(0,s.Z)(d,(function(){var t=this,e=t.$createElement;return(t._self._c||e)("apexcharts",{staticClass:"cursor-pointer",attrs:{width:"100%",height:"300px",type:"radialBar",options:t.chartOptions,series:t.series}})}),[],!1,null,null,null).exports;new Vue({el:"#cp-nav-content",components:{confetti:l,"dashboard-multi-radial-chart":h,"dashboard-radial-chart":p},data:{},methods:{},mounted:function(){}})}},function(t){t.O(0,[216],(function(){return e=1990,t(t.s=e);var e}));t.O()}]);
//# sourceMappingURL=dashboard.js.map