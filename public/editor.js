(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["editor"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/EditorComponent.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/EditorComponent.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var ckeditor4_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ckeditor4-vue */ "./node_modules/ckeditor4-vue/dist/ckeditor.js");
/* harmony import */ var ckeditor4_vue__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(ckeditor4_vue__WEBPACK_IMPORTED_MODULE_0__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  props: {
    id: String,
    tagName: {
      type: String,
      "default": 'textarea'
    },
    name: String,
    classes: String,
    oldValue: String
  },
  components: {
    ckeditor: ckeditor4_vue__WEBPACK_IMPORTED_MODULE_0___default.a.component
  },
  data: function data() {
    var route_prefix = '/admin/filemanager';
    var csrf_token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    return {
      editorData: this.oldValue,
      editorConfig: {
        enterMode: 1,
        shiftEnterMode: 3,
        fillEmptyBlocks: false,
        disallowedContent: 'script; *[on*]',
        filebrowserImageBrowseUrl: route_prefix + '?type=Images',
        filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token=' + csrf_token,
        filebrowserBrowseUrl: route_prefix + '?type=Files',
        filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token=' + csrf_token
      }
    };
  }
});

/***/ }),

/***/ "./node_modules/ckeditor4-vue/dist/ckeditor.js":
/*!*****************************************************!*\
  !*** ./node_modules/ckeditor4-vue/dist/ckeditor.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/*!*
* @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
* For licensing, see LICENSE.md.
*/
!function(t,e){ true?module.exports=e():undefined}(window,(function(){return function(t){var e={};function n(o){if(e[o])return e[o].exports;var r=e[o]={i:o,l:!1,exports:{}};return t[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}return n.m=t,n.c=e,n.d=function(t,e,o){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:o})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)n.d(o,r,function(e){return t[e]}.bind(null,r));return o},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=1)}([function(t,e){function n(t,e){t.onload=function(){this.onerror=this.onload=null,e(null,t)},t.onerror=function(){this.onerror=this.onload=null,e(new Error("Failed to load "+this.src),t)}}function o(t,e){t.onreadystatechange=function(){"complete"!=this.readyState&&"loaded"!=this.readyState||(this.onreadystatechange=null,e(null,t))}}t.exports=function(t,e,r){var i=document.head||document.getElementsByTagName("head")[0],a=document.createElement("script");"function"==typeof e&&(r=e,e={}),e=e||{},r=r||function(){},a.type=e.type||"text/javascript",a.charset=e.charset||"utf8",a.async=!("async"in e)||!!e.async,a.src=t,e.attrs&&function(t,e){for(var n in e)t.setAttribute(n,e[n])}(a,e.attrs),e.text&&(a.text=""+e.text),("onload"in a?n:o)(a,r),a.onload||n(a,r),i.appendChild(a)}},function(t,e,n){"use strict";n.r(e);var o=n(0),r=n.n(o);let i;function a(t){if("CKEDITOR"in window)return Promise.resolve(CKEDITOR);if(t.length<1)throw new TypeError("CKEditor URL must be a non-empty string.");return i||(i=a.scriptLoader(t).then(t=>(i=void 0,t))),i}a.scriptLoader=t=>new Promise((e,n)=>{r()(t,t=>t?n(t):window.CKEDITOR?void e(CKEDITOR):n(new Error("Script loaded from editorUrl doesn't provide CKEDITOR namespace.")))});var s={name:"ckeditor",render(t){return t("div",{},[t(this.tagName)])},props:{value:{type:String,default:""},type:{type:String,default:"classic",validator:t=>["classic","inline"].includes(t)},editorUrl:{type:String,default:"https://cdn.ckeditor.com/4.14.0/standard-all/ckeditor.js"},config:{type:Object,default:()=>{}},tagName:{type:String,default:"textarea"},readOnly:{type:Boolean,default:null}},mounted(){a(this.editorUrl).then(()=>{if(this.$_destroyed)return;const t=this.config||{};null!==this.readOnly&&(t.readOnly=this.readOnly);const e="inline"===this.type?"inline":"replace",n=this.$el.firstElementChild,o=this.instance=CKEDITOR[e](n,t);o.on("instanceReady",()=>{const t=this.value;o.fire("lockSnapshot"),o.setData(t,{callback:()=>{this.$_setUpEditorEvents();const e=o.getData();t!==e?(this.$once("input",()=>{this.$emit("ready",o)}),this.$emit("input",e)):this.$emit("ready",o),o.fire("unlockSnapshot")}})})})},beforeDestroy(){this.instance&&this.instance.destroy(),this.$_destroyed=!0},watch:{value(t){this.instance.getData()!==t&&this.instance.setData(t)},readOnly(t){this.instance.setReadOnly(t)}},methods:{$_setUpEditorEvents(){const t=this.instance;t.on("change",e=>{const n=t.getData();this.value!==n&&this.$emit("input",n,e,t)}),t.on("focus",e=>{this.$emit("focus",e,t)}),t.on("blur",e=>{this.$emit("blur",e,t)})}}};const c={install(t){t.component("ckeditor",s)},component:s};e.default=c}]).default}));
//# sourceMappingURL=ckeditor.js.map

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/EditorComponent.vue?vue&type=template&id=08a9ea75&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/EditorComponent.vue?vue&type=template&id=08a9ea75& ***!
  \******************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c("ckeditor", {
        attrs: { "tag-name": _vm.tagName, config: _vm.editorConfig },
        model: {
          value: _vm.editorData,
          callback: function($$v) {
            _vm.editorData = $$v
          },
          expression: "editorData"
        }
      }),
      _vm._v(" "),
      _c("textarea", {
        directives: [
          {
            name: "show",
            rawName: "v-show",
            value: false,
            expression: "false"
          },
          {
            name: "model",
            rawName: "v-model",
            value: _vm.editorData,
            expression: "editorData"
          }
        ],
        class: _vm.classes,
        attrs: { name: _vm.name, id: _vm.id },
        domProps: { value: _vm.editorData },
        on: {
          input: function($event) {
            if ($event.target.composing) {
              return
            }
            _vm.editorData = $event.target.value
          }
        }
      })
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return normalizeComponent; });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () { injectStyles.call(this, this.$root.$options.shadowRoot) }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functional component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ "./resources/js/components/EditorComponent.vue":
/*!*****************************************************!*\
  !*** ./resources/js/components/EditorComponent.vue ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _EditorComponent_vue_vue_type_template_id_08a9ea75___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./EditorComponent.vue?vue&type=template&id=08a9ea75& */ "./resources/js/components/EditorComponent.vue?vue&type=template&id=08a9ea75&");
/* harmony import */ var _EditorComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./EditorComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/EditorComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _EditorComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _EditorComponent_vue_vue_type_template_id_08a9ea75___WEBPACK_IMPORTED_MODULE_0__["render"],
  _EditorComponent_vue_vue_type_template_id_08a9ea75___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/EditorComponent.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/EditorComponent.vue?vue&type=script&lang=js&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/EditorComponent.vue?vue&type=script&lang=js& ***!
  \******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_EditorComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./EditorComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/EditorComponent.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_EditorComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/EditorComponent.vue?vue&type=template&id=08a9ea75&":
/*!************************************************************************************!*\
  !*** ./resources/js/components/EditorComponent.vue?vue&type=template&id=08a9ea75& ***!
  \************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EditorComponent_vue_vue_type_template_id_08a9ea75___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./EditorComponent.vue?vue&type=template&id=08a9ea75& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/EditorComponent.vue?vue&type=template&id=08a9ea75&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EditorComponent_vue_vue_type_template_id_08a9ea75___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EditorComponent_vue_vue_type_template_id_08a9ea75___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);