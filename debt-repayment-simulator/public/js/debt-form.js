/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/*!***********************************!*\
  !*** ./resources/js/debt-form.ts ***!
  \***********************************/


document.addEventListener('DOMContentLoaded', function () {
  var companyCount = 1;
  var addCompanyButton = document.getElementById('add-company');
  var debtEntries = document.getElementById('debt-entries');
  addCompanyButton.addEventListener('click', function () {
    companyCount++;
    var newCompanyForm = document.createElement('div');
    newCompanyForm.className = 'debt-entry mt-4';
    newCompanyForm.innerHTML = "\n          <h4>\u4F1A\u793E".concat(companyCount, "</h4>\n          <div class=\"form-group\">\n              <label for=\"principal\">\u501F\u5165\u91D1\u984D (\u5186):</label>\n              <input type=\"number\" class=\"form-control\" name=\"principal[]\" required>\n          </div>\n          <div class=\"form-group\">\n              <label for=\"interest_rate\">\u91D1\u5229 (%):</label>\n              <input type=\"number\" step=\"0.01\" class=\"form-control\" name=\"interest_rate[]\" required>\n          </div>\n          <div class=\"form-group\">\n              <label for=\"monthly_payment\">\u6BCE\u6708\u306E\u652F\u6255\u984D (\u5186):</label>\n              <input type=\"number\" class=\"form-control\" name=\"monthly_payment[]\" required>\n          </div>\n      ");
    debtEntries.appendChild(newCompanyForm);
  });
});
/******/ })()
;