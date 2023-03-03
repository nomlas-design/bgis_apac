/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/modules/Navbar.js":
/*!*******************************!*\
  !*** ./src/modules/Navbar.js ***!
  \*******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
class Navbar {
  constructor() {
    this.dropdownBtn = document.querySelector('.btn-region');
    this.dropdownContent = document.querySelector('.nav-popout');
    this.search = document.querySelector('.search');
    this.searchOpen = document.querySelector('.nav__search');
    this.searchClose = document.querySelector('.search__close');
    this.body = document.querySelector('body');
    this.events();
  }
  events() {
    this.dropdownBtn.addEventListener('click', this.toggleDropdown.bind(this));
    this.dropdownContent.addEventListener('click', this.stopPropagation.bind(this));
    this.searchOpen.addEventListener('click', this.toggleSearch.bind(this));
    this.searchClose.addEventListener('click', this.toggleSearch.bind(this));
  }
  toggleDropdown() {
    this.dropdownContent.classList.contains('nav-popout--active') ? this.closeDropdown() : this.openDropdown();
  }
  openDropdown(e) {
    this.dropdownContent.classList.add('nav-popout--active');
    this.documentClickHandler = this.closeDropdown.bind(this);
    setTimeout(() => {
      document.addEventListener('click', this.documentClickHandler);
    }, 0);
  }
  closeDropdown(e) {
    if (e && e.target.closest('.nav-popout')) return;
    this.dropdownContent.classList.remove('nav-popout--active');
    document.removeEventListener('click', this.documentClickHandler);
  }
  stopPropagation(e) {
    e.stopPropagation();
  }
  toggleSearch() {
    console.log(this.search.style.display);
    if (this.search.style.display === 'none') {
      this.search.style.display = 'flex';
      this.body.overflowY = 'hidden';
    } else {
      this.search.style.display = 'none';
      this.body.overflowY = 'visible';
    }
  }
}
/* harmony default export */ __webpack_exports__["default"] = (Navbar);

/***/ }),

/***/ "./css/base.scss":
/*!***********************!*\
  !*** ./css/base.scss ***!
  \***********************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_base_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/base.scss */ "./css/base.scss");
/* harmony import */ var _modules_Navbar__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/Navbar */ "./src/modules/Navbar.js");


// Our modules / classes


// Instantiate a new object using our modules/classes
const navbar = new _modules_Navbar__WEBPACK_IMPORTED_MODULE_1__["default"]();
}();
/******/ })()
;
//# sourceMappingURL=index.js.map