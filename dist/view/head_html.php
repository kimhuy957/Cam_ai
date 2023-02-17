<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots" content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css" href="assets/vendor/spinkit.css" rel="stylesheet">
        <link type="text/css" href="assets/css/preloader.css" rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css" href="assets/css/app.css" rel="stylesheet">

        <!-- Dark Mode CSS (optional) -->
        <link type="text/css" href="assets/css/dark-mode.css" rel="stylesheet">

        <!-- Vector Maps -->
        <link type="text/css" href="assets/vendor/jqvmap/jqvmap.min.css" rel="stylesheet">

    <style type="text/css">/*
 * Visual Studio 2015 dark style
 * Author: Nicolas LLOBERA <nllobera@gmail.com>
 */

.hljs {
  display: block;
  overflow-x: auto;
  color: #DCDCDC;
}

[dir] .hljs {
  padding: 0.5em;
  background: #1E1E1E;
}

.hljs-keyword,
.hljs-literal,
.hljs-symbol,
.hljs-name {
  color: #569CD6;
}
.hljs-link {
  color: #569CD6;
  text-decoration: underline;
}

.hljs-built_in,
.hljs-type {
  color: #4EC9B0;
}

.hljs-number,
.hljs-class {
  color: #B8D7A3;
}

.hljs-string,
.hljs-meta-string {
  color: #D69D85;
}

.hljs-regexp,
.hljs-template-tag {
  color: #9A5334;
}

.hljs-subst,
.hljs-function,
.hljs-title,
.hljs-params,
.hljs-formula {
  color: #DCDCDC;
}

.hljs-comment,
.hljs-quote {
  color: #57A64A;
  font-style: italic;
}

.hljs-doctag {
  color: #608B4E;
}

.hljs-meta,
.hljs-meta-keyword,
.hljs-tag {
  color: #9B9B9B;
}

.hljs-variable,
.hljs-template-variable {
  color: #BD63C5;
}

.hljs-attr,
.hljs-attribute,
.hljs-builtin-name {
  color: #9CDCFE;
}

.hljs-section {
  color: gold;
}

.hljs-emphasis {
  font-style: italic;
}

.hljs-strong {
  font-weight: bold;
}

/*.hljs-code {
  font-family:'Monospace';
}*/

.hljs-bullet,
.hljs-selector-tag,
.hljs-selector-id,
.hljs-selector-class,
.hljs-selector-attr,
.hljs-selector-pseudo {
  color: #D7BA7D;
}

.hljs-addition {
  display: inline-block;
  width: 100%;
}

[dir] .hljs-addition {
  background-color: #144212;
}

.hljs-deletion {
  display: inline-block;
  width: 100%;
}

[dir] .hljs-deletion {
  background-color: #600;
}
</style><style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style><style type="text/css">
@charset "UTF-8";
/*!
 * BootstrapVue Custom CSS (https://bootstrap-vue.org)
 */
.bv-no-focus-ring:focus {
  outline: none;
}

@media (max-width: 575.98px) {
  .bv-d-xs-down-none {
    display: none !important;
  }
}
@media (max-width: 767.98px) {
  .bv-d-sm-down-none {
    display: none !important;
  }
}
@media (max-width: 991.98px) {
  .bv-d-md-down-none {
    display: none !important;
  }
}
@media (max-width: 1199.98px) {
  .bv-d-lg-down-none {
    display: none !important;
  }
}
.bv-d-xl-down-none {
  display: none !important;
}

.form-control.focus {
  color: #495057;
  outline: 0;
}

[dir] .form-control.focus {
  background-color: #fff;
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
[dir] .form-control.focus.is-valid {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}
[dir] .form-control.focus.is-invalid {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.b-avatar {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  vertical-align: middle;
  flex-shrink: 0;
  width: 2.5rem;
  height: 2.5rem;
  font-size: inherit;
  font-weight: 400;
  line-height: 1;
  max-width: 100%;
  max-height: auto;
  overflow: visible;
  position: relative;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

[dir] .b-avatar {
  text-align: center;
}
.b-avatar:focus {
  outline: 0;
}
[dir] .b-avatar.btn, [dir] .b-avatar[href] {
  padding: 0;
  border: 0;
}
.b-avatar.btn .b-avatar-img img, .b-avatar[href] .b-avatar-img img {
  transition: transform 0.15s ease-in-out;
}
[dir] .b-avatar.btn:not(:disabled):not(.disabled), [dir] .b-avatar[href]:not(:disabled):not(.disabled) {
  cursor: pointer;
}
.b-avatar.btn:not(:disabled):not(.disabled):hover .b-avatar-img img, .b-avatar[href]:not(:disabled):not(.disabled):hover .b-avatar-img img {
  -webkit-transform: scale(1.15);
}
[dir] .b-avatar.btn:not(:disabled):not(.disabled):hover .b-avatar-img img, [dir] .b-avatar[href]:not(:disabled):not(.disabled):hover .b-avatar-img img {
  transform: scale(1.15);
}
.b-avatar.disabled, .b-avatar:disabled, .b-avatar[disabled] {
  opacity: 0.65;
  pointer-events: none;
}
.b-avatar .b-avatar-custom,
.b-avatar .b-avatar-text,
.b-avatar .b-avatar-img {
  width: 100%;
  height: 100%;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  -webkit-mask-image: radial-gradient(white, black);
  mask-image: radial-gradient(white, black);
}
[dir] .b-avatar .b-avatar-custom, [dir] .b-avatar .b-avatar-text, [dir] .b-avatar .b-avatar-img {
  border-radius: inherit;
}
.b-avatar .b-avatar-text {
  text-transform: uppercase;
  white-space: nowrap;
}
.b-avatar[href] {
  text-decoration: none;
}
.b-avatar > .b-icon {
  width: 60%;
  height: auto;
  max-width: 100%;
}
.b-avatar .b-avatar-img img {
  width: 100%;
  height: 100%;
  max-height: auto;
  -o-object-fit: cover;
  object-fit: cover;
}
[dir] .b-avatar .b-avatar-img img {
  border-radius: inherit;
}
.b-avatar .b-avatar-badge {
  position: absolute;
  min-height: 1.5em;
  min-width: 1.5em;
  line-height: 1;
  font-size: 70%;
  font-weight: 700;
  z-index: 1;
}
[dir] .b-avatar .b-avatar-badge {
  padding: 0.25em;
  border-radius: 10em;
}

.b-avatar-sm {
  width: 1.5rem;
  height: 1.5rem;
}
.b-avatar-sm .b-avatar-text {
  font-size: calc(0.6rem);
}
.b-avatar-sm .b-avatar-badge {
  font-size: calc(0.42rem);
}

.b-avatar-lg {
  width: 3.5rem;
  height: 3.5rem;
}
.b-avatar-lg .b-avatar-text {
  font-size: calc(1.4rem);
}
.b-avatar-lg .b-avatar-badge {
  font-size: calc(0.98rem);
}

.b-avatar-group .b-avatar-group-inner {
  display: flex;
  flex-wrap: wrap;
}
[dir] .b-avatar-group .b-avatar {
  border: 1px solid #dee2e6;
}
.b-avatar-group a.b-avatar:hover:not(.disabled):not(disabled),
.b-avatar-group .btn.b-avatar:hover:not(.disabled):not(disabled) {
  z-index: 1;
}

.b-calendar {
  display: inline-flex;
}
.b-calendar .b-calendar-inner {
  min-width: 250px;
}
[dir] .b-calendar .b-calendar-header, [dir] .b-calendar .b-calendar-nav {
  margin-bottom: 0.25rem;
}
[dir] .b-calendar .b-calendar-nav .btn {
  padding: 0.25rem;
}
.b-calendar output {
  font-size: 80%;
}
[dir] .b-calendar output {
  padding: 0.25rem;
}
.b-calendar output.readonly {
  opacity: 1;
}
[dir] .b-calendar output.readonly {
  background-color: #e9ecef;
}
[dir] .b-calendar .b-calendar-footer {
  margin-top: 0.5rem;
}
.b-calendar .b-calendar-grid {
  overflow: hidden;
}
[dir] .b-calendar .b-calendar-grid {
  padding: 0;
  margin: 0;
}
.b-calendar .b-calendar-grid .row {
  flex-wrap: nowrap;
}
[dir] .b-calendar .b-calendar-grid-caption {
  padding: 0.25rem;
}
.b-calendar .b-calendar-grid-body .col[data-date] .btn {
  width: 32px;
  height: 32px;
  font-size: 14px;
  line-height: 1;
}
[dir] .b-calendar .b-calendar-grid-body .col[data-date] .btn {
  margin: 3px auto;
  padding: 9px 0;
}
.b-calendar .btn:disabled, .b-calendar .btn.disabled, .b-calendar .btn[aria-disabled=true] {
  pointer-events: none;
}
[dir] .b-calendar .btn:disabled, [dir] .b-calendar .btn.disabled, [dir] .b-calendar .btn[aria-disabled=true] {
  cursor: default;
}

[dir=ltr] .card-img-left {
  border-top-left-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

[dir=rtl] .card-img-left {
  border-top-right-radius: calc(0.25rem - 1px);
  border-bottom-right-radius: calc(0.25rem - 1px);
}

[dir=ltr] .card-img-right {
  border-top-right-radius: calc(0.25rem - 1px);
  border-bottom-right-radius: calc(0.25rem - 1px);
}

[dir=rtl] .card-img-right {
  border-top-left-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.dropdown:not(.dropleft) .dropdown-toggle.dropdown-toggle-no-caret::after {
  display: none !important;
}
.dropdown.dropleft .dropdown-toggle.dropdown-toggle-no-caret::before {
  display: none !important;
}
.dropdown .dropdown-menu:focus {
  outline: none;
}

.b-dropdown-form {
  display: inline-block;
  width: 100%;
  font-weight: 400;
}

[dir] .b-dropdown-form {
  padding: 0.25rem 1.5rem;
  clear: both;
}
.b-dropdown-form:focus {
  outline: 1px dotted !important;
  outline: 5px auto -webkit-focus-ring-color !important;
}
.b-dropdown-form.disabled, .b-dropdown-form:disabled {
  outline: 0 !important;
  color: #6c757d;
  pointer-events: none;
}

.b-dropdown-text {
  display: inline-block;
  width: 100%;
  font-weight: lighter;
}

[dir] .b-dropdown-text {
  padding: 0.25rem 1.5rem;
  margin-bottom: 0;
  clear: both;
}

.custom-checkbox.b-custom-control-lg,
.input-group-lg .custom-checkbox {
  font-size: 1.25rem;
  line-height: 1.5;
}

[dir=ltr] .custom-checkbox.b-custom-control-lg, [dir=ltr] .input-group-lg .custom-checkbox {
  padding-left: 1.875rem;
}

[dir=rtl] .custom-checkbox.b-custom-control-lg, [dir=rtl] .input-group-lg .custom-checkbox {
  padding-right: 1.875rem;
}
.custom-checkbox.b-custom-control-lg .custom-control-label::before,
.input-group-lg .custom-checkbox .custom-control-label::before {
  top: 0.3125rem;
  width: 1.25rem;
  height: 1.25rem;
}
[dir] .custom-checkbox.b-custom-control-lg .custom-control-label::before, [dir] .input-group-lg .custom-checkbox .custom-control-label::before {
  border-radius: 0.3rem;
}
[dir=ltr] .custom-checkbox.b-custom-control-lg .custom-control-label::before, [dir=ltr] .input-group-lg .custom-checkbox .custom-control-label::before {
  left: -1.875rem;
}
[dir=rtl] .custom-checkbox.b-custom-control-lg .custom-control-label::before, [dir=rtl] .input-group-lg .custom-checkbox .custom-control-label::before {
  right: -1.875rem;
}
.custom-checkbox.b-custom-control-lg .custom-control-label::after,
.input-group-lg .custom-checkbox .custom-control-label::after {
  top: 0.3125rem;
  width: 1.25rem;
  height: 1.25rem;
}
[dir] .custom-checkbox.b-custom-control-lg .custom-control-label::after, [dir] .input-group-lg .custom-checkbox .custom-control-label::after {
  background-size: 50% 50%;
}
[dir=ltr] .custom-checkbox.b-custom-control-lg .custom-control-label::after, [dir=ltr] .input-group-lg .custom-checkbox .custom-control-label::after {
  left: -1.875rem;
}
[dir=rtl] .custom-checkbox.b-custom-control-lg .custom-control-label::after, [dir=rtl] .input-group-lg .custom-checkbox .custom-control-label::after {
  right: -1.875rem;
}

.custom-checkbox.b-custom-control-sm,
.input-group-sm .custom-checkbox {
  font-size: 0.875rem;
  line-height: 1.5;
}

[dir=ltr] .custom-checkbox.b-custom-control-sm, [dir=ltr] .input-group-sm .custom-checkbox {
  padding-left: 1.3125rem;
}

[dir=rtl] .custom-checkbox.b-custom-control-sm, [dir=rtl] .input-group-sm .custom-checkbox {
  padding-right: 1.3125rem;
}
.custom-checkbox.b-custom-control-sm .custom-control-label::before,
.input-group-sm .custom-checkbox .custom-control-label::before {
  top: 0.21875rem;
  width: 0.875rem;
  height: 0.875rem;
}
[dir] .custom-checkbox.b-custom-control-sm .custom-control-label::before, [dir] .input-group-sm .custom-checkbox .custom-control-label::before {
  border-radius: 0.2rem;
}
[dir=ltr] .custom-checkbox.b-custom-control-sm .custom-control-label::before, [dir=ltr] .input-group-sm .custom-checkbox .custom-control-label::before {
  left: -1.3125rem;
}
[dir=rtl] .custom-checkbox.b-custom-control-sm .custom-control-label::before, [dir=rtl] .input-group-sm .custom-checkbox .custom-control-label::before {
  right: -1.3125rem;
}
.custom-checkbox.b-custom-control-sm .custom-control-label::after,
.input-group-sm .custom-checkbox .custom-control-label::after {
  top: 0.21875rem;
  width: 0.875rem;
  height: 0.875rem;
}
[dir] .custom-checkbox.b-custom-control-sm .custom-control-label::after, [dir] .input-group-sm .custom-checkbox .custom-control-label::after {
  background-size: 50% 50%;
}
[dir=ltr] .custom-checkbox.b-custom-control-sm .custom-control-label::after, [dir=ltr] .input-group-sm .custom-checkbox .custom-control-label::after {
  left: -1.3125rem;
}
[dir=rtl] .custom-checkbox.b-custom-control-sm .custom-control-label::after, [dir=rtl] .input-group-sm .custom-checkbox .custom-control-label::after {
  right: -1.3125rem;
}

[dir=ltr] .custom-switch.b-custom-control-lg, [dir=ltr] .input-group-lg .custom-switch {
  padding-left: 2.8125rem;
}

[dir=rtl] .custom-switch.b-custom-control-lg, [dir=rtl] .input-group-lg .custom-switch {
  padding-right: 2.8125rem;
}
.custom-switch.b-custom-control-lg .custom-control-label,
.input-group-lg .custom-switch .custom-control-label {
  font-size: 1.25rem;
  line-height: 1.5;
}
.custom-switch.b-custom-control-lg .custom-control-label::before,
.input-group-lg .custom-switch .custom-control-label::before {
  top: 0.3125rem;
  height: 1.25rem;
  width: 2.1875rem;
}
[dir] .custom-switch.b-custom-control-lg .custom-control-label::before, [dir] .input-group-lg .custom-switch .custom-control-label::before {
  border-radius: 0.625rem;
}
[dir=ltr] .custom-switch.b-custom-control-lg .custom-control-label::before, [dir=ltr] .input-group-lg .custom-switch .custom-control-label::before {
  left: -2.8125rem;
}
[dir=rtl] .custom-switch.b-custom-control-lg .custom-control-label::before, [dir=rtl] .input-group-lg .custom-switch .custom-control-label::before {
  right: -2.8125rem;
}
.custom-switch.b-custom-control-lg .custom-control-label::after,
.input-group-lg .custom-switch .custom-control-label::after {
  top: calc( 0.3125rem + 2px );
  width: calc( 1.25rem - 4px );
  height: calc( 1.25rem - 4px );
}
[dir] .custom-switch.b-custom-control-lg .custom-control-label::after, [dir] .input-group-lg .custom-switch .custom-control-label::after {
  border-radius: 0.625rem;
  background-size: 50% 50%;
}
[dir=ltr] .custom-switch.b-custom-control-lg .custom-control-label::after, [dir=ltr] .input-group-lg .custom-switch .custom-control-label::after {
  left: calc( -2.8125rem + 2px );
}
[dir=rtl] .custom-switch.b-custom-control-lg .custom-control-label::after, [dir=rtl] .input-group-lg .custom-switch .custom-control-label::after {
  right: calc( -2.8125rem + 2px );
}
[dir=ltr] .custom-switch.b-custom-control-lg .custom-control-input:checked ~ .custom-control-label::after, [dir=ltr] .input-group-lg .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  transform: translateX(0.9375rem);
}
[dir=rtl] .custom-switch.b-custom-control-lg .custom-control-input:checked ~ .custom-control-label::after, [dir=rtl] .input-group-lg .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  transform: translateX(-0.9375rem);
}

[dir=ltr] .custom-switch.b-custom-control-sm, [dir=ltr] .input-group-sm .custom-switch {
  padding-left: 1.96875rem;
}

[dir=rtl] .custom-switch.b-custom-control-sm, [dir=rtl] .input-group-sm .custom-switch {
  padding-right: 1.96875rem;
}
.custom-switch.b-custom-control-sm .custom-control-label,
.input-group-sm .custom-switch .custom-control-label {
  font-size: 0.875rem;
  line-height: 1.5;
}
.custom-switch.b-custom-control-sm .custom-control-label::before,
.input-group-sm .custom-switch .custom-control-label::before {
  top: 0.21875rem;
  width: 1.53125rem;
  height: 0.875rem;
}
[dir] .custom-switch.b-custom-control-sm .custom-control-label::before, [dir] .input-group-sm .custom-switch .custom-control-label::before {
  border-radius: 0.4375rem;
}
[dir=ltr] .custom-switch.b-custom-control-sm .custom-control-label::before, [dir=ltr] .input-group-sm .custom-switch .custom-control-label::before {
  left: -1.96875rem;
}
[dir=rtl] .custom-switch.b-custom-control-sm .custom-control-label::before, [dir=rtl] .input-group-sm .custom-switch .custom-control-label::before {
  right: -1.96875rem;
}
.custom-switch.b-custom-control-sm .custom-control-label::after,
.input-group-sm .custom-switch .custom-control-label::after {
  top: calc( 0.21875rem + 2px );
  width: calc( 0.875rem - 4px );
  height: calc( 0.875rem - 4px );
}
[dir] .custom-switch.b-custom-control-sm .custom-control-label::after, [dir] .input-group-sm .custom-switch .custom-control-label::after {
  border-radius: 0.4375rem;
  background-size: 50% 50%;
}
[dir=ltr] .custom-switch.b-custom-control-sm .custom-control-label::after, [dir=ltr] .input-group-sm .custom-switch .custom-control-label::after {
  left: calc( -1.96875rem + 2px );
}
[dir=rtl] .custom-switch.b-custom-control-sm .custom-control-label::after, [dir=rtl] .input-group-sm .custom-switch .custom-control-label::after {
  right: calc( -1.96875rem + 2px );
}
[dir=ltr] .custom-switch.b-custom-control-sm .custom-control-input:checked ~ .custom-control-label::after, [dir=ltr] .input-group-sm .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  transform: translateX(0.65625rem);
}
[dir=rtl] .custom-switch.b-custom-control-sm .custom-control-input:checked ~ .custom-control-label::after, [dir=rtl] .input-group-sm .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  transform: translateX(-0.65625rem);
}

[dir=ltr] .input-group > .input-group-prepend > .btn-group > .btn, [dir=ltr] .input-group > .input-group-append:not(:last-child) > .btn-group > .btn, [dir=ltr] .input-group > .input-group-append:last-child > .btn-group:not(:last-child):not(.dropdown-toggle) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

[dir=rtl] .input-group > .input-group-prepend > .btn-group > .btn, [dir=rtl] .input-group > .input-group-append:not(:last-child) > .btn-group > .btn, [dir=rtl] .input-group > .input-group-append:last-child > .btn-group:not(:last-child):not(.dropdown-toggle) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
[dir=ltr] .input-group > .input-group-append > .btn-group > .btn, [dir=ltr] .input-group > .input-group-prepend:not(:first-child) > .btn-group > .btn, [dir=ltr] .input-group > .input-group-prepend:first-child > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
[dir=rtl] .input-group > .input-group-append > .btn-group > .btn, [dir=rtl] .input-group > .input-group-prepend:not(:first-child) > .btn-group > .btn, [dir=rtl] .input-group > .input-group-prepend:first-child > .btn-group:not(:first-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

[dir] .b-form-btn-label-control.form-control {
  background-image: none;
  padding: 0;
}
[dir] .input-group .b-form-btn-label-control.form-control {
  padding: 0;
}

[dir=rtl] .b-form-btn-label-control.form-control, .b-form-btn-label-control.form-control[dir=rtl] {
  flex-direction: row-reverse;
}
[dir=rtl] .b-form-btn-label-control.form-control > label, .b-form-btn-label-control.form-control[dir=rtl] > label {
  text-align: right;
}

.b-form-btn-label-control.form-control > .btn {
  line-height: 1;
  font-size: inherit;
}

[dir] .b-form-btn-label-control.form-control > .btn {
  box-shadow: none !important;
  border: 0;
}
.b-form-btn-label-control.form-control > .btn:disabled {
  pointer-events: none;
}
.b-form-btn-label-control.form-control.is-valid > .btn {
  color: #28a745;
}
.b-form-btn-label-control.form-control.is-invalid > .btn {
  color: #dc3545;
}
[dir] .b-form-btn-label-control.form-control > .dropdown-menu {
  padding: 0.5rem;
}
.b-form-btn-label-control.form-control > label {
  outline: 0;
  font-size: inherit;
  min-height: calc(calc(1.5em + 0.75rem + 2px) - 2px);
}
[dir] .b-form-btn-label-control.form-control > label {
  margin: 0;
  border: 0;
  cursor: pointer;
}
[dir=ltr] .b-form-btn-label-control.form-control > label {
  padding-left: 0.25rem;
}
[dir=rtl] .b-form-btn-label-control.form-control > label {
  padding-right: 0.25rem;
}
.b-form-btn-label-control.form-control > label.form-control-sm {
  min-height: calc(calc(1.5em + 0.5rem + 2px) - 2px);
}
.b-form-btn-label-control.form-control > label.form-control-lg {
  min-height: calc(calc(1.5em + 1rem + 2px) - 2px);
}
.input-group.input-group-sm .b-form-btn-label-control.form-control > label {
  min-height: calc(calc(1.5em + 0.5rem + 2px) - 2px);
}
[dir] .input-group.input-group-sm .b-form-btn-label-control.form-control > label {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.input-group.input-group-lg .b-form-btn-label-control.form-control > label {
  min-height: calc(calc(1.5em + 1rem + 2px) - 2px);
}

[dir] .input-group.input-group-lg .b-form-btn-label-control.form-control > label {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.b-form-btn-label-control.form-control[aria-disabled=true], .b-form-btn-label-control.form-control[aria-readonly=true] {
  opacity: 1;
}

[dir] .b-form-btn-label-control.form-control[aria-disabled=true], [dir] .b-form-btn-label-control.form-control[aria-readonly=true] {
  background-color: #e9ecef;
}
.b-form-btn-label-control.form-control[aria-disabled=true] {
  pointer-events: none;
}
[dir] .b-form-btn-label-control.form-control[aria-disabled=true] > label {
  cursor: default;
}

[dir] .b-form-btn-label-control.btn-group > .dropdown-menu {
  padding: 0.5rem;
}

.custom-file-label {
  white-space: nowrap;
  overflow-x: hidden;
}

.b-custom-control-lg.custom-file,
.b-custom-control-lg .custom-file-input,
.b-custom-control-lg .custom-file-label,
.input-group-lg.custom-file,
.input-group-lg .custom-file-input,
.input-group-lg .custom-file-label {
  font-size: 1.25rem;
  height: calc(1.5em + 1rem + 2px);
}
.b-custom-control-lg .custom-file-label,
.b-custom-control-lg .custom-file-label:after,
.input-group-lg .custom-file-label,
.input-group-lg .custom-file-label:after {
  line-height: 1.5;
}
[dir] .b-custom-control-lg .custom-file-label, [dir] .b-custom-control-lg .custom-file-label:after, [dir] .input-group-lg .custom-file-label, [dir] .input-group-lg .custom-file-label:after {
  padding: 0.5rem 1rem;
}
[dir] .b-custom-control-lg .custom-file-label, [dir] .input-group-lg .custom-file-label {
  border-radius: 0.3rem;
}
.b-custom-control-lg .custom-file-label::after,
.input-group-lg .custom-file-label::after {
  font-size: inherit;
  height: calc( 1.5em + 1rem );
}
[dir=ltr] .b-custom-control-lg .custom-file-label::after, [dir=ltr] .input-group-lg .custom-file-label::after {
  border-radius: 0 0.3rem 0.3rem 0;
}
[dir=rtl] .b-custom-control-lg .custom-file-label::after, [dir=rtl] .input-group-lg .custom-file-label::after {
  border-radius: 0.3rem 0 0 0.3rem;
}

.b-custom-control-sm.custom-file,
.b-custom-control-sm .custom-file-input,
.b-custom-control-sm .custom-file-label,
.input-group-sm.custom-file,
.input-group-sm .custom-file-input,
.input-group-sm .custom-file-label {
  font-size: 0.875rem;
  height: calc(1.5em + 0.5rem + 2px);
}
.b-custom-control-sm .custom-file-label,
.b-custom-control-sm .custom-file-label:after,
.input-group-sm .custom-file-label,
.input-group-sm .custom-file-label:after {
  line-height: 1.5;
}
[dir] .b-custom-control-sm .custom-file-label, [dir] .b-custom-control-sm .custom-file-label:after, [dir] .input-group-sm .custom-file-label, [dir] .input-group-sm .custom-file-label:after {
  padding: 0.25rem 0.5rem;
}
[dir] .b-custom-control-sm .custom-file-label, [dir] .input-group-sm .custom-file-label {
  border-radius: 0.2rem;
}
.b-custom-control-sm .custom-file-label::after,
.input-group-sm .custom-file-label::after {
  font-size: inherit;
  height: calc( 1.5em + 0.5rem );
}
[dir=ltr] .b-custom-control-sm .custom-file-label::after, [dir=ltr] .input-group-sm .custom-file-label::after {
  border-radius: 0 0.2rem 0.2rem 0;
}
[dir=rtl] .b-custom-control-sm .custom-file-label::after, [dir=rtl] .input-group-sm .custom-file-label::after {
  border-radius: 0.2rem 0 0 0.2rem;
}

[dir=ltr] .was-validated .form-control:invalid, [dir=ltr] .was-validated .form-control:valid, [dir=ltr] .form-control.is-invalid, [dir=ltr] .form-control.is-valid {
  background-position: right calc(0.375em + 0.1875rem) center;
}

[dir=rtl] .was-validated .form-control:invalid, [dir=rtl] .was-validated .form-control:valid, [dir=rtl] .form-control.is-invalid, [dir=rtl] .form-control.is-valid {
  background-position: left calc(0.375em + 0.1875rem) center;
}

input[type=color].form-control {
  height: calc(1.5em + 0.75rem + 2px);
}

[dir] input[type=color].form-control {
  padding: 0.125rem 0.25rem;
}

input[type=color].form-control.form-control-sm,
.input-group-sm input[type=color].form-control {
  height: calc(1.5em + 0.5rem + 2px);
}

[dir] input[type=color].form-control.form-control-sm, [dir] .input-group-sm input[type=color].form-control {
  padding: 0.125rem 0.25rem;
}

input[type=color].form-control.form-control-lg,
.input-group-lg input[type=color].form-control {
  height: calc(1.5em + 1rem + 2px);
}

[dir] input[type=color].form-control.form-control-lg, [dir] .input-group-lg input[type=color].form-control {
  padding: 0.125rem 0.25rem;
}

input[type=color].form-control:disabled {
  opacity: 0.65;
}

[dir] input[type=color].form-control:disabled {
  background-color: #adb5bd;
}

.input-group > .custom-range {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
}

[dir] .input-group > .custom-range {
  margin-bottom: 0;
}
[dir=ltr] .input-group > .custom-range + .form-control, [dir=ltr] .input-group > .custom-range + .form-control-plaintext, [dir=ltr] .input-group > .custom-range + .custom-select, [dir=ltr] .input-group > .custom-range + .custom-range, [dir=ltr] .input-group > .custom-range + .custom-file {
  margin-left: -1px;
}
[dir=rtl] .input-group > .custom-range + .form-control, [dir=rtl] .input-group > .custom-range + .form-control-plaintext, [dir=rtl] .input-group > .custom-range + .custom-select, [dir=rtl] .input-group > .custom-range + .custom-range, [dir=rtl] .input-group > .custom-range + .custom-file {
  margin-right: -1px;
}
[dir=ltr] .input-group > .form-control + .custom-range, [dir=ltr] .input-group > .form-control-plaintext + .custom-range, [dir=ltr] .input-group > .custom-select + .custom-range, [dir=ltr] .input-group > .custom-range + .custom-range, [dir=ltr] .input-group > .custom-file + .custom-range {
  margin-left: -1px;
}
[dir=rtl] .input-group > .form-control + .custom-range, [dir=rtl] .input-group > .form-control-plaintext + .custom-range, [dir=rtl] .input-group > .custom-select + .custom-range, [dir=rtl] .input-group > .custom-range + .custom-range, [dir=rtl] .input-group > .custom-file + .custom-range {
  margin-right: -1px;
}
.input-group > .custom-range:focus {
  z-index: 3;
}
[dir=ltr] .input-group > .custom-range:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
[dir=rtl] .input-group > .custom-range:not(:last-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
[dir=ltr] .input-group > .custom-range:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
[dir=rtl] .input-group > .custom-range:not(:first-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > .custom-range {
  height: calc(1.5em + 0.75rem + 2px);
  height: calc(1.5em + 0.75rem + 2px);
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
[dir] .input-group > .custom-range {
  padding: 0 0.75rem;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}
@media (prefers-reduced-motion: reduce) {
  .input-group > .custom-range {
    transition: none;
  }
}
.input-group > .custom-range:focus {
  color: #495057;
  outline: 0;
}
[dir] .input-group > .custom-range:focus {
  background-color: #fff;
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
[dir] .input-group > .custom-range:disabled, [dir] .input-group > .custom-range[readonly] {
  background-color: #e9ecef;
}

.input-group-lg > .custom-range {
  height: calc(1.5em + 1rem + 2px);
}

[dir] .input-group-lg > .custom-range {
  padding: 0 1rem;
  border-radius: 0.3rem;
}

.input-group-sm > .custom-range {
  height: calc(1.5em + 0.5rem + 2px);
}

[dir] .input-group-sm > .custom-range {
  padding: 0 0.5rem;
  border-radius: 0.2rem;
}

[dir] .was-validated .input-group .custom-range:valid, [dir] .input-group .custom-range.is-valid {
  border-color: #28a745;
}
[dir] .was-validated .input-group .custom-range:valid:focus, [dir] .input-group .custom-range.is-valid:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

[dir] .was-validated .custom-range:valid:focus::-webkit-slider-thumb, [dir] .custom-range.is-valid:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem #9be7ac;
}
[dir] .was-validated .custom-range:valid:focus::-moz-range-thumb, [dir] .custom-range.is-valid:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem #9be7ac;
}
[dir] .was-validated .custom-range:valid:focus::-ms-thumb, [dir] .custom-range.is-valid:focus::-ms-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem #9be7ac;
}
[dir] .was-validated .custom-range:valid::-webkit-slider-thumb, [dir] .custom-range.is-valid::-webkit-slider-thumb {
  background-color: #28a745;
  background-image: none;
}
[dir] .was-validated .custom-range:valid::-webkit-slider-thumb:active, [dir] .custom-range.is-valid::-webkit-slider-thumb:active {
  background-color: #9be7ac;
  background-image: none;
}
[dir] .was-validated .custom-range:valid::-webkit-slider-runnable-track, [dir] .custom-range.is-valid::-webkit-slider-runnable-track {
  background-color: rgba(40, 167, 69, 0.35);
}
[dir] .was-validated .custom-range:valid::-moz-range-thumb, [dir] .custom-range.is-valid::-moz-range-thumb {
  background-color: #28a745;
  background-image: none;
}
[dir] .was-validated .custom-range:valid::-moz-range-thumb:active, [dir] .custom-range.is-valid::-moz-range-thumb:active {
  background-color: #9be7ac;
  background-image: none;
}
[dir] .was-validated .custom-range:valid::-moz-range-track, [dir] .custom-range.is-valid::-moz-range-track {
  background: rgba(40, 167, 69, 0.35);
}
.was-validated .custom-range:valid ~ .valid-feedback,
.was-validated .custom-range:valid ~ .valid-tooltip, .custom-range.is-valid ~ .valid-feedback,
.custom-range.is-valid ~ .valid-tooltip {
  display: block;
}
[dir] .was-validated .custom-range:valid::-ms-thumb, [dir] .custom-range.is-valid::-ms-thumb {
  background-color: #28a745;
  background-image: none;
}
[dir] .was-validated .custom-range:valid::-ms-thumb:active, [dir] .custom-range.is-valid::-ms-thumb:active {
  background-color: #9be7ac;
  background-image: none;
}
[dir] .was-validated .custom-range:valid::-ms-track-lower, [dir] .custom-range.is-valid::-ms-track-lower {
  background: rgba(40, 167, 69, 0.35);
}
[dir] .was-validated .custom-range:valid::-ms-track-upper, [dir] .custom-range.is-valid::-ms-track-upper {
  background: rgba(40, 167, 69, 0.35);
}

[dir] .was-validated .input-group .custom-range:invalid, [dir] .input-group .custom-range.is-invalid {
  border-color: #dc3545;
}
[dir] .was-validated .input-group .custom-range:invalid:focus, [dir] .input-group .custom-range.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

[dir] .was-validated .custom-range:invalid:focus::-webkit-slider-thumb, [dir] .custom-range.is-invalid:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem #f6cdd1;
}
[dir] .was-validated .custom-range:invalid:focus::-moz-range-thumb, [dir] .custom-range.is-invalid:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem #f6cdd1;
}
[dir] .was-validated .custom-range:invalid:focus::-ms-thumb, [dir] .custom-range.is-invalid:focus::-ms-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem #f6cdd1;
}
[dir] .was-validated .custom-range:invalid::-webkit-slider-thumb, [dir] .custom-range.is-invalid::-webkit-slider-thumb {
  background-color: #dc3545;
  background-image: none;
}
[dir] .was-validated .custom-range:invalid::-webkit-slider-thumb:active, [dir] .custom-range.is-invalid::-webkit-slider-thumb:active {
  background-color: #f6cdd1;
  background-image: none;
}
[dir] .was-validated .custom-range:invalid::-webkit-slider-runnable-track, [dir] .custom-range.is-invalid::-webkit-slider-runnable-track {
  background-color: rgba(220, 53, 69, 0.35);
}
[dir] .was-validated .custom-range:invalid::-moz-range-thumb, [dir] .custom-range.is-invalid::-moz-range-thumb {
  background-color: #dc3545;
  background-image: none;
}
[dir] .was-validated .custom-range:invalid::-moz-range-thumb:active, [dir] .custom-range.is-invalid::-moz-range-thumb:active {
  background-color: #f6cdd1;
  background-image: none;
}
[dir] .was-validated .custom-range:invalid::-moz-range-track, [dir] .custom-range.is-invalid::-moz-range-track {
  background: rgba(220, 53, 69, 0.35);
}
.was-validated .custom-range:invalid ~ .invalid-feedback,
.was-validated .custom-range:invalid ~ .invalid-tooltip, .custom-range.is-invalid ~ .invalid-feedback,
.custom-range.is-invalid ~ .invalid-tooltip {
  display: block;
}
[dir] .was-validated .custom-range:invalid::-ms-thumb, [dir] .custom-range.is-invalid::-ms-thumb {
  background-color: #dc3545;
  background-image: none;
}
[dir] .was-validated .custom-range:invalid::-ms-thumb:active, [dir] .custom-range.is-invalid::-ms-thumb:active {
  background-color: #f6cdd1;
  background-image: none;
}
[dir] .was-validated .custom-range:invalid::-ms-track-lower, [dir] .custom-range.is-invalid::-ms-track-lower {
  background: rgba(220, 53, 69, 0.35);
}
[dir] .was-validated .custom-range:invalid::-ms-track-upper, [dir] .custom-range.is-invalid::-ms-track-upper {
  background: rgba(220, 53, 69, 0.35);
}

.custom-radio.b-custom-control-lg,
.input-group-lg .custom-radio {
  font-size: 1.25rem;
  line-height: 1.5;
}

[dir=ltr] .custom-radio.b-custom-control-lg, [dir=ltr] .input-group-lg .custom-radio {
  padding-left: 1.875rem;
}

[dir=rtl] .custom-radio.b-custom-control-lg, [dir=rtl] .input-group-lg .custom-radio {
  padding-right: 1.875rem;
}
.custom-radio.b-custom-control-lg .custom-control-label::before,
.input-group-lg .custom-radio .custom-control-label::before {
  top: 0.3125rem;
  width: 1.25rem;
  height: 1.25rem;
}
[dir] .custom-radio.b-custom-control-lg .custom-control-label::before, [dir] .input-group-lg .custom-radio .custom-control-label::before {
  border-radius: 50%;
}
[dir=ltr] .custom-radio.b-custom-control-lg .custom-control-label::before, [dir=ltr] .input-group-lg .custom-radio .custom-control-label::before {
  left: -1.875rem;
}
[dir=rtl] .custom-radio.b-custom-control-lg .custom-control-label::before, [dir=rtl] .input-group-lg .custom-radio .custom-control-label::before {
  right: -1.875rem;
}
.custom-radio.b-custom-control-lg .custom-control-label::after,
.input-group-lg .custom-radio .custom-control-label::after {
  top: 0.3125rem;
  width: 1.25rem;
  height: 1.25rem;
}
[dir] .custom-radio.b-custom-control-lg .custom-control-label::after, [dir] .input-group-lg .custom-radio .custom-control-label::after {
  background: no-repeat 50%/50% 50%;
}
[dir=ltr] .custom-radio.b-custom-control-lg .custom-control-label::after, [dir=ltr] .input-group-lg .custom-radio .custom-control-label::after {
  left: -1.875rem;
}
[dir=rtl] .custom-radio.b-custom-control-lg .custom-control-label::after, [dir=rtl] .input-group-lg .custom-radio .custom-control-label::after {
  right: -1.875rem;
}

.custom-radio.b-custom-control-sm,
.input-group-sm .custom-radio {
  font-size: 0.875rem;
  line-height: 1.5;
}

[dir=ltr] .custom-radio.b-custom-control-sm, [dir=ltr] .input-group-sm .custom-radio {
  padding-left: 1.3125rem;
}

[dir=rtl] .custom-radio.b-custom-control-sm, [dir=rtl] .input-group-sm .custom-radio {
  padding-right: 1.3125rem;
}
.custom-radio.b-custom-control-sm .custom-control-label::before,
.input-group-sm .custom-radio .custom-control-label::before {
  top: 0.21875rem;
  width: 0.875rem;
  height: 0.875rem;
}
[dir] .custom-radio.b-custom-control-sm .custom-control-label::before, [dir] .input-group-sm .custom-radio .custom-control-label::before {
  border-radius: 50%;
}
[dir=ltr] .custom-radio.b-custom-control-sm .custom-control-label::before, [dir=ltr] .input-group-sm .custom-radio .custom-control-label::before {
  left: -1.3125rem;
}
[dir=rtl] .custom-radio.b-custom-control-sm .custom-control-label::before, [dir=rtl] .input-group-sm .custom-radio .custom-control-label::before {
  right: -1.3125rem;
}
.custom-radio.b-custom-control-sm .custom-control-label::after,
.input-group-sm .custom-radio .custom-control-label::after {
  top: 0.21875rem;
  width: 0.875rem;
  height: 0.875rem;
}
[dir] .custom-radio.b-custom-control-sm .custom-control-label::after, [dir] .input-group-sm .custom-radio .custom-control-label::after {
  background: no-repeat 50%/50% 50%;
}
[dir=ltr] .custom-radio.b-custom-control-sm .custom-control-label::after, [dir=ltr] .input-group-sm .custom-radio .custom-control-label::after {
  left: -1.3125rem;
}
[dir=rtl] .custom-radio.b-custom-control-sm .custom-control-label::after, [dir=rtl] .input-group-sm .custom-radio .custom-control-label::after {
  right: -1.3125rem;
}

[dir] .b-rating {
  text-align: center;
}
.b-rating.d-inline-flex {
  width: auto;
}
[dir] .b-rating .b-rating-star, [dir] .b-rating .b-rating-value {
  padding: 0 0.25em;
}
.b-rating .b-rating-value {
  min-width: 2.5em;
}
.b-rating .b-rating-star {
  display: inline-flex;
  justify-content: center;
  outline: 0;
}
.b-rating .b-rating-star .b-rating-icon {
  display: inline-flex;
  transition: all 0.15s ease-in-out;
}
.b-rating.disabled, .b-rating:disabled {
  color: #6c757d;
}
[dir] .b-rating.disabled, [dir] .b-rating:disabled {
  background-color: #e9ecef;
}
[dir] .b-rating:not(.disabled):not(.readonly) .b-rating-star {
  cursor: pointer;
}
.b-rating:not(.disabled):not(.readonly):focus:not(:hover) .b-rating-star.focused .b-rating-icon,
.b-rating:not(.disabled):not(.readonly) .b-rating-star:hover .b-rating-icon {
  -webkit-transform: scale(1.5);
}
[dir] .b-rating:not(.disabled):not(.readonly):focus:not(:hover) .b-rating-star.focused .b-rating-icon, [dir] .b-rating:not(.disabled):not(.readonly) .b-rating-star:hover .b-rating-icon {
  transform: scale(1.5);
}
.b-rating[dir=rtl] .b-rating-star-half {
  transform: scale(-1, 1);
}

.b-form-spinbutton {
  overflow: hidden;
}

[dir] .b-form-spinbutton {
  text-align: center;
  background-image: none;
  padding: 0;
}
[dir=rtl] .b-form-spinbutton:not(.flex-column), .b-form-spinbutton[dir=rtl]:not(.flex-column) {
  flex-direction: row-reverse;
}

.b-form-spinbutton output {
  font-size: inherit;
  outline: 0;
  width: auto;
}

[dir] .b-form-spinbutton output {
  border: 0;
  background-color: transparent;
  margin: 0;
  padding: 0 0.25rem;
}
.b-form-spinbutton output > div,
.b-form-spinbutton output > bdi {
  display: block;
  min-width: 2.25em;
  height: 1.5em;
}
.b-form-spinbutton.flex-column {
  height: auto;
  width: auto;
}
[dir] .b-form-spinbutton.flex-column output {
  margin: 0 0.25rem;
  padding: 0.25rem 0;
}
.b-form-spinbutton:not(.d-inline-flex):not(.flex-column) {
  output-width: 100%;
}
.b-form-spinbutton.d-inline-flex:not(.flex-column) {
  width: auto;
}
.b-form-spinbutton .btn {
  line-height: 1;
}
[dir] .b-form-spinbutton .btn {
  box-shadow: none !important;
}
.b-form-spinbutton .btn:disabled {
  pointer-events: none;
}
.b-form-spinbutton .btn:hover:not(:disabled) > div > .b-icon {
  -webkit-transform: scale(1.25);
}
[dir] .b-form-spinbutton .btn:hover:not(:disabled) > div > .b-icon {
  transform: scale(1.25);
}
[dir] .b-form-spinbutton.disabled, [dir] .b-form-spinbutton.readonly {
  background-color: #e9ecef;
}
.b-form-spinbutton.disabled {
  pointer-events: none;
}

[dir] .b-form-tags .b-form-tags-list {
  margin-top: -0.25rem;
}
[dir] .b-form-tags .b-form-tags-list .b-from-tags-field, [dir] .b-form-tags .b-form-tags-list .b-form-tag {
  margin-top: 0.25rem;
}
.b-form-tags.focus {
  color: #495057;
  outline: 0;
}
[dir] .b-form-tags.focus {
  background-color: #fff;
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
[dir] .b-form-tags.focus.is-valid {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}
[dir] .b-form-tags.focus.is-invalid {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}
[dir] .b-form-tags.disabled {
  background-color: #e9ecef;
}

.b-form-tag {
  font-size: 75%;
  font-weight: normal;
  line-height: 1.5;
}

[dir=ltr] .b-form-tag {
  margin-right: 0.25rem;
}

[dir=rtl] .b-form-tag {
  margin-left: 0.25rem;
}
.b-form-tag.disabled {
  opacity: 0.75;
}
.b-form-tag > button.b-form-tag-remove {
  color: inherit;
  font-size: 125%;
  line-height: 1;
}
[dir] .b-form-tag > button.b-form-tag-remove {
  float: none;
}
[dir=ltr] .b-form-tag > button.b-form-tag-remove {
  margin-left: 0.25rem;
}
[dir=rtl] .b-form-tag > button.b-form-tag-remove {
  margin-right: 0.25rem;
}

.form-control-sm .b-form-tag {
  line-height: 1.5;
}

.form-control-lg .b-form-tag {
  line-height: 1.5;
}

.media-aside {
  display: flex;
}

[dir=ltr] .media-aside {
  margin-right: 1rem;
}

[dir=rtl] .media-aside {
  margin-left: 1rem;
}

[dir=ltr] .media-aside-right {
  margin-right: 0;
  margin-left: 1rem;
}

[dir=rtl] .media-aside-right {
  margin-left: 0;
  margin-right: 1rem;
}

.modal-backdrop {
  opacity: 0.5;
}

.b-pagination-pills .page-item .page-link {
  line-height: 1;
}

[dir] .b-pagination-pills .page-item .page-link {
  border-radius: 50rem !important;
}

[dir=ltr] .b-pagination-pills .page-item .page-link {
  margin-left: 0.25rem;
}

[dir=rtl] .b-pagination-pills .page-item .page-link {
  margin-right: 0.25rem;
}
[dir=ltr] .b-pagination-pills .page-item:first-child .page-link {
  margin-left: 0;
}
[dir=rtl] .b-pagination-pills .page-item:first-child .page-link {
  margin-right: 0;
}

.popover.b-popover {
  display: block;
  opacity: 1;
  outline: 0;
}
.popover.b-popover.fade:not(.show) {
  opacity: 0;
}
.popover.b-popover.show {
  opacity: 1;
}

[dir] .b-popover-primary.popover {
  background-color: #cce5ff;
  border-color: #b8daff;
}
[dir] .b-popover-primary.bs-popover-top > .arrow::before, [dir] .b-popover-primary.bs-popover-auto[x-placement^=top] > .arrow::before {
  border-top-color: #b8daff;
}
[dir] .b-popover-primary.bs-popover-top > .arrow::after, [dir] .b-popover-primary.bs-popover-auto[x-placement^=top] > .arrow::after {
  border-top-color: #cce5ff;
}
[dir=ltr] .b-popover-primary.bs-popover-right > .arrow::before, [dir=ltr] .b-popover-primary.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-right-color: #b8daff;
}
[dir=rtl] .b-popover-primary.bs-popover-right > .arrow::before, [dir=rtl] .b-popover-primary.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-left-color: #b8daff;
}
[dir=ltr] .b-popover-primary.bs-popover-right > .arrow::after, [dir=ltr] .b-popover-primary.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-right-color: #cce5ff;
}
[dir=rtl] .b-popover-primary.bs-popover-right > .arrow::after, [dir=rtl] .b-popover-primary.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-left-color: #cce5ff;
}
[dir] .b-popover-primary.bs-popover-bottom > .arrow::before, [dir] .b-popover-primary.bs-popover-auto[x-placement^=bottom] > .arrow::before {
  border-bottom-color: #b8daff;
}
[dir] .b-popover-primary.bs-popover-bottom > .arrow::after, [dir] .b-popover-primary.bs-popover-auto[x-placement^=bottom] > .arrow::after {
  border-bottom-color: #bdddff;
}
[dir] .b-popover-primary.bs-popover-bottom .popover-header::before, [dir] .b-popover-primary.bs-popover-auto[x-placement^=bottom] .popover-header::before {
  border-bottom-color: #bdddff;
}
[dir=ltr] .b-popover-primary.bs-popover-left > .arrow::before, [dir=ltr] .b-popover-primary.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-left-color: #b8daff;
}
[dir=rtl] .b-popover-primary.bs-popover-left > .arrow::before, [dir=rtl] .b-popover-primary.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-right-color: #b8daff;
}
[dir=ltr] .b-popover-primary.bs-popover-left > .arrow::after, [dir=ltr] .b-popover-primary.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-left-color: #cce5ff;
}
[dir=rtl] .b-popover-primary.bs-popover-left > .arrow::after, [dir=rtl] .b-popover-primary.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-right-color: #cce5ff;
}
.b-popover-primary .popover-header {
  color: #212529;
}
[dir] .b-popover-primary .popover-header {
  background-color: #bdddff;
  border-bottom-color: #a3d0ff;
}
.b-popover-primary .popover-body {
  color: #004085;
}

[dir] .b-popover-secondary.popover {
  background-color: #e2e3e5;
  border-color: #d6d8db;
}
[dir] .b-popover-secondary.bs-popover-top > .arrow::before, [dir] .b-popover-secondary.bs-popover-auto[x-placement^=top] > .arrow::before {
  border-top-color: #d6d8db;
}
[dir] .b-popover-secondary.bs-popover-top > .arrow::after, [dir] .b-popover-secondary.bs-popover-auto[x-placement^=top] > .arrow::after {
  border-top-color: #e2e3e5;
}
[dir=ltr] .b-popover-secondary.bs-popover-right > .arrow::before, [dir=ltr] .b-popover-secondary.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-right-color: #d6d8db;
}
[dir=rtl] .b-popover-secondary.bs-popover-right > .arrow::before, [dir=rtl] .b-popover-secondary.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-left-color: #d6d8db;
}
[dir=ltr] .b-popover-secondary.bs-popover-right > .arrow::after, [dir=ltr] .b-popover-secondary.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-right-color: #e2e3e5;
}
[dir=rtl] .b-popover-secondary.bs-popover-right > .arrow::after, [dir=rtl] .b-popover-secondary.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-left-color: #e2e3e5;
}
[dir] .b-popover-secondary.bs-popover-bottom > .arrow::before, [dir] .b-popover-secondary.bs-popover-auto[x-placement^=bottom] > .arrow::before {
  border-bottom-color: #d6d8db;
}
[dir] .b-popover-secondary.bs-popover-bottom > .arrow::after, [dir] .b-popover-secondary.bs-popover-auto[x-placement^=bottom] > .arrow::after {
  border-bottom-color: #dadbde;
}
[dir] .b-popover-secondary.bs-popover-bottom .popover-header::before, [dir] .b-popover-secondary.bs-popover-auto[x-placement^=bottom] .popover-header::before {
  border-bottom-color: #dadbde;
}
[dir=ltr] .b-popover-secondary.bs-popover-left > .arrow::before, [dir=ltr] .b-popover-secondary.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-left-color: #d6d8db;
}
[dir=rtl] .b-popover-secondary.bs-popover-left > .arrow::before, [dir=rtl] .b-popover-secondary.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-right-color: #d6d8db;
}
[dir=ltr] .b-popover-secondary.bs-popover-left > .arrow::after, [dir=ltr] .b-popover-secondary.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-left-color: #e2e3e5;
}
[dir=rtl] .b-popover-secondary.bs-popover-left > .arrow::after, [dir=rtl] .b-popover-secondary.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-right-color: #e2e3e5;
}
.b-popover-secondary .popover-header {
  color: #212529;
}
[dir] .b-popover-secondary .popover-header {
  background-color: #dadbde;
  border-bottom-color: #ccced2;
}
.b-popover-secondary .popover-body {
  color: #383d41;
}

[dir] .b-popover-success.popover {
  background-color: #d4edda;
  border-color: #c3e6cb;
}
[dir] .b-popover-success.bs-popover-top > .arrow::before, [dir] .b-popover-success.bs-popover-auto[x-placement^=top] > .arrow::before {
  border-top-color: #c3e6cb;
}
[dir] .b-popover-success.bs-popover-top > .arrow::after, [dir] .b-popover-success.bs-popover-auto[x-placement^=top] > .arrow::after {
  border-top-color: #d4edda;
}
[dir=ltr] .b-popover-success.bs-popover-right > .arrow::before, [dir=ltr] .b-popover-success.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-right-color: #c3e6cb;
}
[dir=rtl] .b-popover-success.bs-popover-right > .arrow::before, [dir=rtl] .b-popover-success.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-left-color: #c3e6cb;
}
[dir=ltr] .b-popover-success.bs-popover-right > .arrow::after, [dir=ltr] .b-popover-success.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-right-color: #d4edda;
}
[dir=rtl] .b-popover-success.bs-popover-right > .arrow::after, [dir=rtl] .b-popover-success.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-left-color: #d4edda;
}
[dir] .b-popover-success.bs-popover-bottom > .arrow::before, [dir] .b-popover-success.bs-popover-auto[x-placement^=bottom] > .arrow::before {
  border-bottom-color: #c3e6cb;
}
[dir] .b-popover-success.bs-popover-bottom > .arrow::after, [dir] .b-popover-success.bs-popover-auto[x-placement^=bottom] > .arrow::after {
  border-bottom-color: #c9e8d1;
}
[dir] .b-popover-success.bs-popover-bottom .popover-header::before, [dir] .b-popover-success.bs-popover-auto[x-placement^=bottom] .popover-header::before {
  border-bottom-color: #c9e8d1;
}
[dir=ltr] .b-popover-success.bs-popover-left > .arrow::before, [dir=ltr] .b-popover-success.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-left-color: #c3e6cb;
}
[dir=rtl] .b-popover-success.bs-popover-left > .arrow::before, [dir=rtl] .b-popover-success.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-right-color: #c3e6cb;
}
[dir=ltr] .b-popover-success.bs-popover-left > .arrow::after, [dir=ltr] .b-popover-success.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-left-color: #d4edda;
}
[dir=rtl] .b-popover-success.bs-popover-left > .arrow::after, [dir=rtl] .b-popover-success.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-right-color: #d4edda;
}
.b-popover-success .popover-header {
  color: #212529;
}
[dir] .b-popover-success .popover-header {
  background-color: #c9e8d1;
  border-bottom-color: #b7e1c1;
}
.b-popover-success .popover-body {
  color: #155724;
}

[dir] .b-popover-info.popover {
  background-color: #d1ecf1;
  border-color: #bee5eb;
}
[dir] .b-popover-info.bs-popover-top > .arrow::before, [dir] .b-popover-info.bs-popover-auto[x-placement^=top] > .arrow::before {
  border-top-color: #bee5eb;
}
[dir] .b-popover-info.bs-popover-top > .arrow::after, [dir] .b-popover-info.bs-popover-auto[x-placement^=top] > .arrow::after {
  border-top-color: #d1ecf1;
}
[dir=ltr] .b-popover-info.bs-popover-right > .arrow::before, [dir=ltr] .b-popover-info.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-right-color: #bee5eb;
}
[dir=rtl] .b-popover-info.bs-popover-right > .arrow::before, [dir=rtl] .b-popover-info.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-left-color: #bee5eb;
}
[dir=ltr] .b-popover-info.bs-popover-right > .arrow::after, [dir=ltr] .b-popover-info.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-right-color: #d1ecf1;
}
[dir=rtl] .b-popover-info.bs-popover-right > .arrow::after, [dir=rtl] .b-popover-info.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-left-color: #d1ecf1;
}
[dir] .b-popover-info.bs-popover-bottom > .arrow::before, [dir] .b-popover-info.bs-popover-auto[x-placement^=bottom] > .arrow::before {
  border-bottom-color: #bee5eb;
}
[dir] .b-popover-info.bs-popover-bottom > .arrow::after, [dir] .b-popover-info.bs-popover-auto[x-placement^=bottom] > .arrow::after {
  border-bottom-color: #c5e7ed;
}
[dir] .b-popover-info.bs-popover-bottom .popover-header::before, [dir] .b-popover-info.bs-popover-auto[x-placement^=bottom] .popover-header::before {
  border-bottom-color: #c5e7ed;
}
[dir=ltr] .b-popover-info.bs-popover-left > .arrow::before, [dir=ltr] .b-popover-info.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-left-color: #bee5eb;
}
[dir=rtl] .b-popover-info.bs-popover-left > .arrow::before, [dir=rtl] .b-popover-info.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-right-color: #bee5eb;
}
[dir=ltr] .b-popover-info.bs-popover-left > .arrow::after, [dir=ltr] .b-popover-info.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-left-color: #d1ecf1;
}
[dir=rtl] .b-popover-info.bs-popover-left > .arrow::after, [dir=rtl] .b-popover-info.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-right-color: #d1ecf1;
}
.b-popover-info .popover-header {
  color: #212529;
}
[dir] .b-popover-info .popover-header {
  background-color: #c5e7ed;
  border-bottom-color: #b2dfe7;
}
.b-popover-info .popover-body {
  color: #0c5460;
}

[dir] .b-popover-warning.popover {
  background-color: #fff3cd;
  border-color: #ffeeba;
}
[dir] .b-popover-warning.bs-popover-top > .arrow::before, [dir] .b-popover-warning.bs-popover-auto[x-placement^=top] > .arrow::before {
  border-top-color: #ffeeba;
}
[dir] .b-popover-warning.bs-popover-top > .arrow::after, [dir] .b-popover-warning.bs-popover-auto[x-placement^=top] > .arrow::after {
  border-top-color: #fff3cd;
}
[dir=ltr] .b-popover-warning.bs-popover-right > .arrow::before, [dir=ltr] .b-popover-warning.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-right-color: #ffeeba;
}
[dir=rtl] .b-popover-warning.bs-popover-right > .arrow::before, [dir=rtl] .b-popover-warning.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-left-color: #ffeeba;
}
[dir=ltr] .b-popover-warning.bs-popover-right > .arrow::after, [dir=ltr] .b-popover-warning.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-right-color: #fff3cd;
}
[dir=rtl] .b-popover-warning.bs-popover-right > .arrow::after, [dir=rtl] .b-popover-warning.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-left-color: #fff3cd;
}
[dir] .b-popover-warning.bs-popover-bottom > .arrow::before, [dir] .b-popover-warning.bs-popover-auto[x-placement^=bottom] > .arrow::before {
  border-bottom-color: #ffeeba;
}
[dir] .b-popover-warning.bs-popover-bottom > .arrow::after, [dir] .b-popover-warning.bs-popover-auto[x-placement^=bottom] > .arrow::after {
  border-bottom-color: #ffefbe;
}
[dir] .b-popover-warning.bs-popover-bottom .popover-header::before, [dir] .b-popover-warning.bs-popover-auto[x-placement^=bottom] .popover-header::before {
  border-bottom-color: #ffefbe;
}
[dir=ltr] .b-popover-warning.bs-popover-left > .arrow::before, [dir=ltr] .b-popover-warning.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-left-color: #ffeeba;
}
[dir=rtl] .b-popover-warning.bs-popover-left > .arrow::before, [dir=rtl] .b-popover-warning.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-right-color: #ffeeba;
}
[dir=ltr] .b-popover-warning.bs-popover-left > .arrow::after, [dir=ltr] .b-popover-warning.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-left-color: #fff3cd;
}
[dir=rtl] .b-popover-warning.bs-popover-left > .arrow::after, [dir=rtl] .b-popover-warning.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-right-color: #fff3cd;
}
.b-popover-warning .popover-header {
  color: #212529;
}
[dir] .b-popover-warning .popover-header {
  background-color: #ffefbe;
  border-bottom-color: #ffe9a4;
}
.b-popover-warning .popover-body {
  color: #856404;
}

[dir] .b-popover-danger.popover {
  background-color: #f8d7da;
  border-color: #f5c6cb;
}
[dir] .b-popover-danger.bs-popover-top > .arrow::before, [dir] .b-popover-danger.bs-popover-auto[x-placement^=top] > .arrow::before {
  border-top-color: #f5c6cb;
}
[dir] .b-popover-danger.bs-popover-top > .arrow::after, [dir] .b-popover-danger.bs-popover-auto[x-placement^=top] > .arrow::after {
  border-top-color: #f8d7da;
}
[dir=ltr] .b-popover-danger.bs-popover-right > .arrow::before, [dir=ltr] .b-popover-danger.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-right-color: #f5c6cb;
}
[dir=rtl] .b-popover-danger.bs-popover-right > .arrow::before, [dir=rtl] .b-popover-danger.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-left-color: #f5c6cb;
}
[dir=ltr] .b-popover-danger.bs-popover-right > .arrow::after, [dir=ltr] .b-popover-danger.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-right-color: #f8d7da;
}
[dir=rtl] .b-popover-danger.bs-popover-right > .arrow::after, [dir=rtl] .b-popover-danger.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-left-color: #f8d7da;
}
[dir] .b-popover-danger.bs-popover-bottom > .arrow::before, [dir] .b-popover-danger.bs-popover-auto[x-placement^=bottom] > .arrow::before {
  border-bottom-color: #f5c6cb;
}
[dir] .b-popover-danger.bs-popover-bottom > .arrow::after, [dir] .b-popover-danger.bs-popover-auto[x-placement^=bottom] > .arrow::after {
  border-bottom-color: #f6cace;
}
[dir] .b-popover-danger.bs-popover-bottom .popover-header::before, [dir] .b-popover-danger.bs-popover-auto[x-placement^=bottom] .popover-header::before {
  border-bottom-color: #f6cace;
}
[dir=ltr] .b-popover-danger.bs-popover-left > .arrow::before, [dir=ltr] .b-popover-danger.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-left-color: #f5c6cb;
}
[dir=rtl] .b-popover-danger.bs-popover-left > .arrow::before, [dir=rtl] .b-popover-danger.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-right-color: #f5c6cb;
}
[dir=ltr] .b-popover-danger.bs-popover-left > .arrow::after, [dir=ltr] .b-popover-danger.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-left-color: #f8d7da;
}
[dir=rtl] .b-popover-danger.bs-popover-left > .arrow::after, [dir=rtl] .b-popover-danger.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-right-color: #f8d7da;
}
.b-popover-danger .popover-header {
  color: #212529;
}
[dir] .b-popover-danger .popover-header {
  background-color: #f6cace;
  border-bottom-color: #f2b4ba;
}
.b-popover-danger .popover-body {
  color: #721c24;
}

[dir] .b-popover-light.popover {
  background-color: #fefefe;
  border-color: #fdfdfe;
}
[dir] .b-popover-light.bs-popover-top > .arrow::before, [dir] .b-popover-light.bs-popover-auto[x-placement^=top] > .arrow::before {
  border-top-color: #fdfdfe;
}
[dir] .b-popover-light.bs-popover-top > .arrow::after, [dir] .b-popover-light.bs-popover-auto[x-placement^=top] > .arrow::after {
  border-top-color: #fefefe;
}
[dir=ltr] .b-popover-light.bs-popover-right > .arrow::before, [dir=ltr] .b-popover-light.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-right-color: #fdfdfe;
}
[dir=rtl] .b-popover-light.bs-popover-right > .arrow::before, [dir=rtl] .b-popover-light.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-left-color: #fdfdfe;
}
[dir=ltr] .b-popover-light.bs-popover-right > .arrow::after, [dir=ltr] .b-popover-light.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-right-color: #fefefe;
}
[dir=rtl] .b-popover-light.bs-popover-right > .arrow::after, [dir=rtl] .b-popover-light.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-left-color: #fefefe;
}
[dir] .b-popover-light.bs-popover-bottom > .arrow::before, [dir] .b-popover-light.bs-popover-auto[x-placement^=bottom] > .arrow::before {
  border-bottom-color: #fdfdfe;
}
[dir] .b-popover-light.bs-popover-bottom > .arrow::after, [dir] .b-popover-light.bs-popover-auto[x-placement^=bottom] > .arrow::after {
  border-bottom-color: #f6f6f6;
}
[dir] .b-popover-light.bs-popover-bottom .popover-header::before, [dir] .b-popover-light.bs-popover-auto[x-placement^=bottom] .popover-header::before {
  border-bottom-color: #f6f6f6;
}
[dir=ltr] .b-popover-light.bs-popover-left > .arrow::before, [dir=ltr] .b-popover-light.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-left-color: #fdfdfe;
}
[dir=rtl] .b-popover-light.bs-popover-left > .arrow::before, [dir=rtl] .b-popover-light.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-right-color: #fdfdfe;
}
[dir=ltr] .b-popover-light.bs-popover-left > .arrow::after, [dir=ltr] .b-popover-light.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-left-color: #fefefe;
}
[dir=rtl] .b-popover-light.bs-popover-left > .arrow::after, [dir=rtl] .b-popover-light.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-right-color: #fefefe;
}
.b-popover-light .popover-header {
  color: #212529;
}
[dir] .b-popover-light .popover-header {
  background-color: #f6f6f6;
  border-bottom-color: #eaeaea;
}
.b-popover-light .popover-body {
  color: #818182;
}

[dir] .b-popover-dark.popover {
  background-color: #d6d8d9;
  border-color: #c6c8ca;
}
[dir] .b-popover-dark.bs-popover-top > .arrow::before, [dir] .b-popover-dark.bs-popover-auto[x-placement^=top] > .arrow::before {
  border-top-color: #c6c8ca;
}
[dir] .b-popover-dark.bs-popover-top > .arrow::after, [dir] .b-popover-dark.bs-popover-auto[x-placement^=top] > .arrow::after {
  border-top-color: #d6d8d9;
}
[dir=ltr] .b-popover-dark.bs-popover-right > .arrow::before, [dir=ltr] .b-popover-dark.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-right-color: #c6c8ca;
}
[dir=rtl] .b-popover-dark.bs-popover-right > .arrow::before, [dir=rtl] .b-popover-dark.bs-popover-auto[x-placement^=right] > .arrow::before {
  border-left-color: #c6c8ca;
}
[dir=ltr] .b-popover-dark.bs-popover-right > .arrow::after, [dir=ltr] .b-popover-dark.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-right-color: #d6d8d9;
}
[dir=rtl] .b-popover-dark.bs-popover-right > .arrow::after, [dir=rtl] .b-popover-dark.bs-popover-auto[x-placement^=right] > .arrow::after {
  border-left-color: #d6d8d9;
}
[dir] .b-popover-dark.bs-popover-bottom > .arrow::before, [dir] .b-popover-dark.bs-popover-auto[x-placement^=bottom] > .arrow::before {
  border-bottom-color: #c6c8ca;
}
[dir] .b-popover-dark.bs-popover-bottom > .arrow::after, [dir] .b-popover-dark.bs-popover-auto[x-placement^=bottom] > .arrow::after {
  border-bottom-color: #ced0d2;
}
[dir] .b-popover-dark.bs-popover-bottom .popover-header::before, [dir] .b-popover-dark.bs-popover-auto[x-placement^=bottom] .popover-header::before {
  border-bottom-color: #ced0d2;
}
[dir=ltr] .b-popover-dark.bs-popover-left > .arrow::before, [dir=ltr] .b-popover-dark.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-left-color: #c6c8ca;
}
[dir=rtl] .b-popover-dark.bs-popover-left > .arrow::before, [dir=rtl] .b-popover-dark.bs-popover-auto[x-placement^=left] > .arrow::before {
  border-right-color: #c6c8ca;
}
[dir=ltr] .b-popover-dark.bs-popover-left > .arrow::after, [dir=ltr] .b-popover-dark.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-left-color: #d6d8d9;
}
[dir=rtl] .b-popover-dark.bs-popover-left > .arrow::after, [dir=rtl] .b-popover-dark.bs-popover-auto[x-placement^=left] > .arrow::after {
  border-right-color: #d6d8d9;
}
.b-popover-dark .popover-header {
  color: #212529;
}
[dir] .b-popover-dark .popover-header {
  background-color: #ced0d2;
  border-bottom-color: #c1c4c5;
}
.b-popover-dark .popover-body {
  color: #1b1e21;
}

.b-sidebar-outer {
  position: fixed !important;
  top: 0;
  height: 0;
  overflow: visible;
  z-index: calc(1030 + 5);
}

[dir=ltr] .b-sidebar-outer {
  left: 0;
  right: 0;
}

[dir=rtl] .b-sidebar-outer {
  right: 0;
  left: 0;
}

.b-sidebar-backdrop {
  position: fixed !important;
  top: 0;
  z-index: -1;
  width: 100vw;
  height: 100vh;
  opacity: 0.6;
}

[dir=ltr] .b-sidebar-backdrop {
  left: 0;
}

[dir=rtl] .b-sidebar-backdrop {
  right: 0;
}

.b-sidebar {
  display: flex;
  flex-direction: column;
  position: fixed !important;
  top: 0;
  height: 100vh;
  width: 320px;
  max-width: 100% !important;
  outline: 0;
  -webkit-transform: translateX(0);
}

[dir] .b-sidebar {
  margin: 0 !important;
  transform: translateX(0);
}
.b-sidebar.slide {
  transition: transform 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .b-sidebar.slide {
    transition: none;
  }
}
[dir=ltr] .b-sidebar:not(.b-sidebar-right) {
  left: 0;
  right: auto;
}
[dir=rtl] .b-sidebar:not(.b-sidebar-right) {
  right: 0;
  left: auto;
}
[dir=ltr] .b-sidebar:not(.b-sidebar-right).slide:not(.show) {
  transform: translateX(-100%);
}
[dir=rtl] .b-sidebar:not(.b-sidebar-right).slide:not(.show) {
  transform: translateX(100%);
}
[dir=ltr] .b-sidebar:not(.b-sidebar-right) > .b-sidebar-header .close {
  margin-left: auto;
}
[dir=rtl] .b-sidebar:not(.b-sidebar-right) > .b-sidebar-header .close {
  margin-right: auto;
}
[dir=ltr] .b-sidebar.b-sidebar-right {
  left: auto;
  right: 0;
}
[dir=rtl] .b-sidebar.b-sidebar-right {
  right: auto;
  left: 0;
}
[dir=ltr] .b-sidebar.b-sidebar-right.slide:not(.show) {
  transform: translateX(100%);
}
[dir=rtl] .b-sidebar.b-sidebar-right.slide:not(.show) {
  transform: translateX(-100%);
}
[dir=ltr] .b-sidebar.b-sidebar-right > .b-sidebar-header .close {
  margin-right: auto;
}
[dir=rtl] .b-sidebar.b-sidebar-right > .b-sidebar-header .close {
  margin-left: auto;
}
.b-sidebar > .b-sidebar-header {
  font-size: 1.5rem;
  display: flex;
  flex-direction: row;
  flex-grow: 0;
  align-items: center;
}
[dir] .b-sidebar > .b-sidebar-header {
  padding: 0.5rem 1rem;
}
[dir=rtl] .b-sidebar > .b-sidebar-header {
  flex-direction: row-reverse;
}

.b-sidebar > .b-sidebar-header .close {
  font-size: 1.5rem;
}

[dir] .b-sidebar > .b-sidebar-header .close {
  float: none;
}
.b-sidebar > .b-sidebar-body {
  flex-grow: 1;
  height: 100%;
  overflow-y: auto;
}
.b-sidebar > .b-sidebar-footer {
  flex-grow: 0;
}

[dir] .b-skeleton-wrapper {
  cursor: wait;
}

.b-skeleton {
  position: relative;
  overflow: hidden;
  -webkit-mask-image: radial-gradient(white, black);
  mask-image: radial-gradient(white, black);
}

[dir] .b-skeleton {
  background-color: rgba(0, 0, 0, 0.12);
  cursor: wait;
}
.b-skeleton::before {
  content: "\A0";
}

.b-skeleton-text {
  height: 1rem;
}

[dir] .b-skeleton-text {
  margin-bottom: 0.25rem;
  border-radius: 0.25rem;
}

.b-skeleton-button {
  width: 75px;
  font-size: 1rem;
  line-height: 1.5;
}

[dir] .b-skeleton-button {
  padding: 0.375rem 0.75rem;
  border-radius: 0.25rem;
}

.b-skeleton-avatar {
  width: 2.5em;
  height: 2.5em;
}

[dir] .b-skeleton-avatar {
  border-radius: 50%;
}

.b-skeleton-input {
  height: calc(1.5em + 0.75rem + 2px);
  line-height: 1.5;
}

[dir] .b-skeleton-input {
  padding: 0.375rem 0.75rem;
  border: #ced4da solid 1px;
  border-radius: 0.25rem;
}

.b-skeleton-icon-wrapper svg {
  color: rgba(0, 0, 0, 0.12);
}

.b-skeleton-img {
  height: 100%;
  width: 100%;
}

.b-skeleton-animate-wave::after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 0;
}

[dir=ltr] .b-skeleton-animate-wave::after {
  right: 0;
  left: 0;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
  -webkit-animation:  b-skeleton-animate-wave-ltr 1.75s linear infinite;
  animation:  b-skeleton-animate-wave-ltr 1.75s linear infinite;
}

[dir=rtl] .b-skeleton-animate-wave::after {
  left: 0;
  right: 0;
  background: linear-gradient(-90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
  -webkit-animation:  b-skeleton-animate-wave-rtl 1.75s linear infinite;
  animation:  b-skeleton-animate-wave-rtl 1.75s linear infinite;
}
@media (prefers-reduced-motion: reduce) {
  [dir] .b-skeleton-animate-wave::after {
    background: none;
  }
  [dir=ltr] .b-skeleton-animate-wave::after {
    -webkit-animation: none;
    animation: none;
  }
  [dir=rtl] .b-skeleton-animate-wave::after {
    -webkit-animation: none;
    animation: none;
  }
}

@-webkit-keyframes b-skeleton-animate-wave-ltr {
  from {
    transform: translateX(-100%);
  }
  to {
    transform: translateX(100%);
  }
}

@-webkit-keyframes b-skeleton-animate-wave-rtl {
  from {
    transform: translateX(100%);
  }
  to {
    transform: translateX(-100%);
  }
}

@keyframes b-skeleton-animate-wave-ltr {
  from {
    transform: translateX(-100%);
  }
  to {
    transform: translateX(100%);
  }
}

@keyframes b-skeleton-animate-wave-rtl {
  from {
    transform: translateX(100%);
  }
  to {
    transform: translateX(-100%);
  }
}
[dir=ltr] .b-skeleton-animate-fade {
  -webkit-animation: b-skeleton-animate-fade 0.875s ease-in-out alternate infinite;
  animation: b-skeleton-animate-fade 0.875s ease-in-out alternate infinite;
}
[dir=rtl] .b-skeleton-animate-fade {
  -webkit-animation: b-skeleton-animate-fade 0.875s ease-in-out alternate infinite;
  animation: b-skeleton-animate-fade 0.875s ease-in-out alternate infinite;
}
@media (prefers-reduced-motion: reduce) {
  [dir=ltr] .b-skeleton-animate-fade {
    -webkit-animation: none;
    animation: none;
  }
  [dir=rtl] .b-skeleton-animate-fade {
    -webkit-animation: none;
    animation: none;
  }
}

@-webkit-keyframes b-skeleton-animate-fade {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0.4;
  }
}

@keyframes b-skeleton-animate-fade {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0.4;
  }
}
[dir=ltr] .b-skeleton-animate-throb {
  -webkit-animation: b-skeleton-animate-throb 0.875s ease-in alternate infinite;
  animation: b-skeleton-animate-throb 0.875s ease-in alternate infinite;
}
[dir=rtl] .b-skeleton-animate-throb {
  -webkit-animation: b-skeleton-animate-throb 0.875s ease-in alternate infinite;
  animation: b-skeleton-animate-throb 0.875s ease-in alternate infinite;
}
@media (prefers-reduced-motion: reduce) {
  [dir=ltr] .b-skeleton-animate-throb {
    -webkit-animation: none;
    animation: none;
  }
  [dir=rtl] .b-skeleton-animate-throb {
    -webkit-animation: none;
    animation: none;
  }
}

@-webkit-keyframes b-skeleton-animate-throb {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0.975);
  }
}

@keyframes b-skeleton-animate-throb {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0.975);
  }
}
.table.b-table.b-table-fixed {
  table-layout: fixed;
}
.table.b-table.b-table-no-border-collapse {
  border-collapse: separate;
  border-spacing: 0;
}
.table.b-table[aria-busy=true] {
  opacity: 0.55;
}
[dir] .table.b-table > tbody > tr.b-table-details > td {
  border-top: none !important;
}
.table.b-table > caption {
  caption-side: bottom;
}
.table.b-table.b-table-caption-top > caption {
  caption-side: top !important;
}
[dir] .table.b-table > tbody > .table-active, [dir] .table.b-table > tbody > .table-active > th, [dir] .table.b-table > tbody > .table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}
.table.b-table.table-hover > tbody > tr.table-active:hover td,
.table.b-table.table-hover > tbody > tr.table-active:hover th {
  color: #212529;
}
[dir] .table.b-table.table-hover > tbody > tr.table-active:hover td, [dir] .table.b-table.table-hover > tbody > tr.table-active:hover th {
  background-image: linear-gradient(rgba(0, 0, 0, 0.075), rgba(0, 0, 0, 0.075));
  background-repeat: no-repeat;
}
[dir] .table.b-table > tbody > .bg-active, [dir] .table.b-table > tbody > .bg-active > th, [dir] .table.b-table > tbody > .bg-active > td {
  background-color: rgba(255, 255, 255, 0.075) !important;
}
.table.b-table.table-hover.table-dark > tbody > tr.bg-active:hover td,
.table.b-table.table-hover.table-dark > tbody > tr.bg-active:hover th {
  color: #fff;
}
[dir] .table.b-table.table-hover.table-dark > tbody > tr.bg-active:hover td, [dir] .table.b-table.table-hover.table-dark > tbody > tr.bg-active:hover th {
  background-image: linear-gradient(rgba(255, 255, 255, 0.075), rgba(255, 255, 255, 0.075));
  background-repeat: no-repeat;
}

[dir] .b-table-sticky-header, [dir] .table-responsive, [dir] [class*=table-responsive-] {
  margin-bottom: 1rem;
}
[dir] .b-table-sticky-header > .table, [dir] .table-responsive > .table, [dir] [class*=table-responsive-] > .table {
  margin-bottom: 0;
}

.b-table-sticky-header {
  overflow-y: auto;
  max-height: 300px;
}

@media print {
  .b-table-sticky-header {
    overflow-y: visible !important;
    max-height: none !important;
  }
}
@supports ((position: -webkit-sticky) or (position: sticky)) {
  .b-table-sticky-header > .table.b-table > thead > tr > th {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 2;
  }

  .b-table-sticky-header > .table.b-table > thead > tr > .b-table-sticky-column,
.b-table-sticky-header > .table.b-table > tbody > tr > .b-table-sticky-column,
.b-table-sticky-header > .table.b-table > tfoot > tr > .b-table-sticky-column,
.table-responsive > .table.b-table > thead > tr > .b-table-sticky-column,
.table-responsive > .table.b-table > tbody > tr > .b-table-sticky-column,
.table-responsive > .table.b-table > tfoot > tr > .b-table-sticky-column,
[class*=table-responsive-] > .table.b-table > thead > tr > .b-table-sticky-column,
[class*=table-responsive-] > .table.b-table > tbody > tr > .b-table-sticky-column,
[class*=table-responsive-] > .table.b-table > tfoot > tr > .b-table-sticky-column {
    position: -webkit-sticky;
    position: sticky;
  }

  [dir=ltr] .b-table-sticky-header > .table.b-table > thead > tr > .b-table-sticky-column, [dir=ltr] .b-table-sticky-header > .table.b-table > tbody > tr > .b-table-sticky-column, [dir=ltr] .b-table-sticky-header > .table.b-table > tfoot > tr > .b-table-sticky-column, [dir=ltr] .table-responsive > .table.b-table > thead > tr > .b-table-sticky-column, [dir=ltr] .table-responsive > .table.b-table > tbody > tr > .b-table-sticky-column, [dir=ltr] .table-responsive > .table.b-table > tfoot > tr > .b-table-sticky-column, [dir=ltr] [class*=table-responsive-] > .table.b-table > thead > tr > .b-table-sticky-column, [dir=ltr] [class*=table-responsive-] > .table.b-table > tbody > tr > .b-table-sticky-column, [dir=ltr] [class*=table-responsive-] > .table.b-table > tfoot > tr > .b-table-sticky-column {
    left: 0;
  }

  [dir=rtl] .b-table-sticky-header > .table.b-table > thead > tr > .b-table-sticky-column, [dir=rtl] .b-table-sticky-header > .table.b-table > tbody > tr > .b-table-sticky-column, [dir=rtl] .b-table-sticky-header > .table.b-table > tfoot > tr > .b-table-sticky-column, [dir=rtl] .table-responsive > .table.b-table > thead > tr > .b-table-sticky-column, [dir=rtl] .table-responsive > .table.b-table > tbody > tr > .b-table-sticky-column, [dir=rtl] .table-responsive > .table.b-table > tfoot > tr > .b-table-sticky-column, [dir=rtl] [class*=table-responsive-] > .table.b-table > thead > tr > .b-table-sticky-column, [dir=rtl] [class*=table-responsive-] > .table.b-table > tbody > tr > .b-table-sticky-column, [dir=rtl] [class*=table-responsive-] > .table.b-table > tfoot > tr > .b-table-sticky-column {
    right: 0;
  }
  .b-table-sticky-header > .table.b-table > thead > tr > .b-table-sticky-column,
.table-responsive > .table.b-table > thead > tr > .b-table-sticky-column,
[class*=table-responsive-] > .table.b-table > thead > tr > .b-table-sticky-column {
    z-index: 5;
  }
  .b-table-sticky-header > .table.b-table > tbody > tr > .b-table-sticky-column,
.b-table-sticky-header > .table.b-table > tfoot > tr > .b-table-sticky-column,
.table-responsive > .table.b-table > tbody > tr > .b-table-sticky-column,
.table-responsive > .table.b-table > tfoot > tr > .b-table-sticky-column,
[class*=table-responsive-] > .table.b-table > tbody > tr > .b-table-sticky-column,
[class*=table-responsive-] > .table.b-table > tfoot > tr > .b-table-sticky-column {
    z-index: 2;
  }

  .table.b-table > thead > tr > .table-b-table-default,
.table.b-table > tbody > tr > .table-b-table-default,
.table.b-table > tfoot > tr > .table-b-table-default {
    color: #212529;
  }

  [dir] .table.b-table > thead > tr > .table-b-table-default, [dir] .table.b-table > tbody > tr > .table-b-table-default, [dir] .table.b-table > tfoot > tr > .table-b-table-default {
    background-color: #fff;
  }
  .table.b-table.table-dark > thead > tr > .bg-b-table-default,
.table.b-table.table-dark > tbody > tr > .bg-b-table-default,
.table.b-table.table-dark > tfoot > tr > .bg-b-table-default {
    color: #fff;
  }
  [dir] .table.b-table.table-dark > thead > tr > .bg-b-table-default, [dir] .table.b-table.table-dark > tbody > tr > .bg-b-table-default, [dir] .table.b-table.table-dark > tfoot > tr > .bg-b-table-default {
    background-color: #343a40;
  }
  [dir] .table.b-table.table-striped > tbody > tr:nth-of-type(odd) > .table-b-table-default {
    background-image: linear-gradient(rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.05));
    background-repeat: no-repeat;
  }
  [dir] .table.b-table.table-striped.table-dark > tbody > tr:nth-of-type(odd) > .bg-b-table-default {
    background-image: linear-gradient(rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.05));
    background-repeat: no-repeat;
  }
  .table.b-table.table-hover > tbody > tr:hover > .table-b-table-default {
    color: #212529;
  }
  [dir] .table.b-table.table-hover > tbody > tr:hover > .table-b-table-default {
    background-image: linear-gradient(rgba(0, 0, 0, 0.075), rgba(0, 0, 0, 0.075));
    background-repeat: no-repeat;
  }
  .table.b-table.table-hover.table-dark > tbody > tr:hover > .bg-b-table-default {
    color: #fff;
  }
  [dir] .table.b-table.table-hover.table-dark > tbody > tr:hover > .bg-b-table-default {
    background-image: linear-gradient(rgba(255, 255, 255, 0.075), rgba(255, 255, 255, 0.075));
    background-repeat: no-repeat;
  }
}
[dir] .table.b-table > thead > tr > [aria-sort], [dir] .table.b-table > tfoot > tr > [aria-sort] {
  cursor: pointer;
  background-image: none;
  background-repeat: no-repeat;
  background-size: 0.65em 1em;
}
[dir=ltr] .table.b-table > thead > tr > [aria-sort]:not(.b-table-sort-icon-left), [dir=ltr] .table.b-table > tfoot > tr > [aria-sort]:not(.b-table-sort-icon-left) {
  background-position: right calc(0.75rem / 2) center;
  padding-right: calc(0.75rem + 0.65em);
}
[dir=rtl] .table.b-table > thead > tr > [aria-sort]:not(.b-table-sort-icon-left), [dir=rtl] .table.b-table > tfoot > tr > [aria-sort]:not(.b-table-sort-icon-left) {
  background-position: left calc(0.75rem / 2) center;
  padding-left: calc(0.75rem + 0.65em);
}
[dir=ltr] .table.b-table > thead > tr > [aria-sort].b-table-sort-icon-left, [dir=ltr] .table.b-table > tfoot > tr > [aria-sort].b-table-sort-icon-left {
  background-position: left calc(0.75rem / 2) center;
  padding-left: calc(0.75rem + 0.65em);
}
[dir=rtl] .table.b-table > thead > tr > [aria-sort].b-table-sort-icon-left, [dir=rtl] .table.b-table > tfoot > tr > [aria-sort].b-table-sort-icon-left {
  background-position: right calc(0.75rem / 2) center;
  padding-right: calc(0.75rem + 0.65em);
}
[dir] .table.b-table > thead > tr > [aria-sort=none], [dir] .table.b-table > tfoot > tr > [aria-sort=none] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='101' height='101' view-box='0 0 101 101' preserveAspectRatio='none'%3e%3cpath fill='black' opacity='.3' d='M51 1l25 23 24 22H1l25-22zM51 101l25-23 24-22H1l25 22z'/%3e%3c/svg%3e");
}
[dir] .table.b-table > thead > tr > [aria-sort=ascending], [dir] .table.b-table > tfoot > tr > [aria-sort=ascending] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='101' height='101' view-box='0 0 101 101' preserveAspectRatio='none'%3e%3cpath fill='black' d='M51 1l25 23 24 22H1l25-22z'/%3e%3cpath fill='black' opacity='.3' d='M51 101l25-23 24-22H1l25 22z'/%3e%3c/svg%3e");
}
[dir] .table.b-table > thead > tr > [aria-sort=descending], [dir] .table.b-table > tfoot > tr > [aria-sort=descending] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='101' height='101' view-box='0 0 101 101' preserveAspectRatio='none'%3e%3cpath fill='black' opacity='.3' d='M51 1l25 23 24 22H1l25-22z'/%3e%3cpath fill='black' d='M51 101l25-23 24-22H1l25 22z'/%3e%3c/svg%3e");
}
[dir] .table.b-table.table-dark > thead > tr > [aria-sort=none], [dir] .table.b-table.table-dark > tfoot > tr > [aria-sort=none], [dir] .table.b-table > .thead-dark > tr > [aria-sort=none] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='101' height='101' view-box='0 0 101 101' preserveAspectRatio='none'%3e%3cpath fill='white' opacity='.3' d='M51 1l25 23 24 22H1l25-22zM51 101l25-23 24-22H1l25 22z'/%3e%3c/svg%3e");
}
[dir] .table.b-table.table-dark > thead > tr > [aria-sort=ascending], [dir] .table.b-table.table-dark > tfoot > tr > [aria-sort=ascending], [dir] .table.b-table > .thead-dark > tr > [aria-sort=ascending] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='101' height='101' view-box='0 0 101 101' preserveAspectRatio='none'%3e%3cpath fill='white' d='M51 1l25 23 24 22H1l25-22z'/%3e%3cpath fill='white' opacity='.3' d='M51 101l25-23 24-22H1l25 22z'/%3e%3c/svg%3e");
}
[dir] .table.b-table.table-dark > thead > tr > [aria-sort=descending], [dir] .table.b-table.table-dark > tfoot > tr > [aria-sort=descending], [dir] .table.b-table > .thead-dark > tr > [aria-sort=descending] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='101' height='101' view-box='0 0 101 101' preserveAspectRatio='none'%3e%3cpath fill='white' opacity='.3' d='M51 1l25 23 24 22H1l25-22z'/%3e%3cpath fill='white' d='M51 101l25-23 24-22H1l25 22z'/%3e%3c/svg%3e");
}
[dir] .table.b-table > thead > tr > .table-dark[aria-sort=none], [dir] .table.b-table > tfoot > tr > .table-dark[aria-sort=none] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='101' height='101' view-box='0 0 101 101' preserveAspectRatio='none'%3e%3cpath fill='white' opacity='.3' d='M51 1l25 23 24 22H1l25-22zM51 101l25-23 24-22H1l25 22z'/%3e%3c/svg%3e");
}
[dir] .table.b-table > thead > tr > .table-dark[aria-sort=ascending], [dir] .table.b-table > tfoot > tr > .table-dark[aria-sort=ascending] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='101' height='101' view-box='0 0 101 101' preserveAspectRatio='none'%3e%3cpath fill='white' d='M51 1l25 23 24 22H1l25-22z'/%3e%3cpath fill='white' opacity='.3' d='M51 101l25-23 24-22H1l25 22z'/%3e%3c/svg%3e");
}
[dir] .table.b-table > thead > tr > .table-dark[aria-sort=descending], [dir] .table.b-table > tfoot > tr > .table-dark[aria-sort=descending] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='101' height='101' view-box='0 0 101 101' preserveAspectRatio='none'%3e%3cpath fill='white' opacity='.3' d='M51 1l25 23 24 22H1l25-22z'/%3e%3cpath fill='white' d='M51 101l25-23 24-22H1l25 22z'/%3e%3c/svg%3e");
}
[dir=ltr] .table.b-table.table-sm > thead > tr > [aria-sort]:not(.b-table-sort-icon-left), [dir=ltr] .table.b-table.table-sm > tfoot > tr > [aria-sort]:not(.b-table-sort-icon-left) {
  background-position: right calc(0.3rem / 2) center;
  padding-right: calc(0.3rem + 0.65em);
}
[dir=rtl] .table.b-table.table-sm > thead > tr > [aria-sort]:not(.b-table-sort-icon-left), [dir=rtl] .table.b-table.table-sm > tfoot > tr > [aria-sort]:not(.b-table-sort-icon-left) {
  background-position: left calc(0.3rem / 2) center;
  padding-left: calc(0.3rem + 0.65em);
}
[dir=ltr] .table.b-table.table-sm > thead > tr > [aria-sort].b-table-sort-icon-left, [dir=ltr] .table.b-table.table-sm > tfoot > tr > [aria-sort].b-table-sort-icon-left {
  background-position: left calc(0.3rem / 2) center;
  padding-left: calc(0.3rem + 0.65em);
}
[dir=rtl] .table.b-table.table-sm > thead > tr > [aria-sort].b-table-sort-icon-left, [dir=rtl] .table.b-table.table-sm > tfoot > tr > [aria-sort].b-table-sort-icon-left {
  background-position: right calc(0.3rem / 2) center;
  padding-right: calc(0.3rem + 0.65em);
}

[dir] .table.b-table.b-table-selectable:not(.b-table-selectable-no-click) > tbody > tr {
  cursor: pointer;
}
.table.b-table.b-table-selectable:not(.b-table-selectable-no-click).b-table-selecting.b-table-select-range > tbody > tr {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

@media (max-width: 575.98px) {
  .table.b-table.b-table-stacked-sm {
    display: block;
    width: 100%;
  }
  .table.b-table.b-table-stacked-sm > caption,
.table.b-table.b-table-stacked-sm > tbody,
.table.b-table.b-table-stacked-sm > tbody > tr,
.table.b-table.b-table-stacked-sm > tbody > tr > td,
.table.b-table.b-table-stacked-sm > tbody > tr > th {
    display: block;
  }
  .table.b-table.b-table-stacked-sm > thead,
.table.b-table.b-table-stacked-sm > tfoot {
    display: none;
  }
  .table.b-table.b-table-stacked-sm > thead > tr.b-table-top-row,
.table.b-table.b-table-stacked-sm > thead > tr.b-table-bottom-row,
.table.b-table.b-table-stacked-sm > tfoot > tr.b-table-top-row,
.table.b-table.b-table-stacked-sm > tfoot > tr.b-table-bottom-row {
    display: none;
  }
  .table.b-table.b-table-stacked-sm > caption {
    caption-side: top !important;
  }
  .table.b-table.b-table-stacked-sm > tbody > tr > [data-label]::before {
    content: attr(data-label);
    width: 40%;
    overflow-wrap: break-word;
    font-weight: bold;
    font-style: normal;
  }
  [dir] .table.b-table.b-table-stacked-sm > tbody > tr > [data-label]::before {
    margin: 0;
  }
  [dir=ltr] .table.b-table.b-table-stacked-sm > tbody > tr > [data-label]::before {
    float: left;
    text-align: right;
    padding: 0 calc(1rem / 2) 0 0;
  }
  [dir=rtl] .table.b-table.b-table-stacked-sm > tbody > tr > [data-label]::before {
    float: right;
    text-align: left;
    padding: 0 0 0 calc(1rem / 2);
  }
  .table.b-table.b-table-stacked-sm > tbody > tr > [data-label]::after {
    display: block;
    content: "";
  }
  [dir] .table.b-table.b-table-stacked-sm > tbody > tr > [data-label]::after {
    clear: both;
  }
  .table.b-table.b-table-stacked-sm > tbody > tr > [data-label] > div {
    display: inline-block;
    width: calc(100% - 40%);
  }
  [dir] .table.b-table.b-table-stacked-sm > tbody > tr > [data-label] > div {
    margin: 0;
  }
  [dir=ltr] .table.b-table.b-table-stacked-sm > tbody > tr > [data-label] > div {
    padding: 0 0 0 calc(1rem / 2);
  }
  [dir=rtl] .table.b-table.b-table-stacked-sm > tbody > tr > [data-label] > div {
    padding: 0 calc(1rem / 2) 0 0;
  }
  .table.b-table.b-table-stacked-sm > tbody > tr.top-row, .table.b-table.b-table-stacked-sm > tbody > tr.bottom-row {
    display: none;
  }
  [dir] .table.b-table.b-table-stacked-sm > tbody > tr > :first-child {
    border-top-width: 3px;
  }
  [dir] .table.b-table.b-table-stacked-sm > tbody > tr > [rowspan] + td, [dir] .table.b-table.b-table-stacked-sm > tbody > tr > [rowspan] + th {
    border-top-width: 3px;
  }
}
@media (max-width: 767.98px) {
  .table.b-table.b-table-stacked-md {
    display: block;
    width: 100%;
  }
  .table.b-table.b-table-stacked-md > caption,
.table.b-table.b-table-stacked-md > tbody,
.table.b-table.b-table-stacked-md > tbody > tr,
.table.b-table.b-table-stacked-md > tbody > tr > td,
.table.b-table.b-table-stacked-md > tbody > tr > th {
    display: block;
  }
  .table.b-table.b-table-stacked-md > thead,
.table.b-table.b-table-stacked-md > tfoot {
    display: none;
  }
  .table.b-table.b-table-stacked-md > thead > tr.b-table-top-row,
.table.b-table.b-table-stacked-md > thead > tr.b-table-bottom-row,
.table.b-table.b-table-stacked-md > tfoot > tr.b-table-top-row,
.table.b-table.b-table-stacked-md > tfoot > tr.b-table-bottom-row {
    display: none;
  }
  .table.b-table.b-table-stacked-md > caption {
    caption-side: top !important;
  }
  .table.b-table.b-table-stacked-md > tbody > tr > [data-label]::before {
    content: attr(data-label);
    width: 40%;
    overflow-wrap: break-word;
    font-weight: bold;
    font-style: normal;
  }
  [dir] .table.b-table.b-table-stacked-md > tbody > tr > [data-label]::before {
    margin: 0;
  }
  [dir=ltr] .table.b-table.b-table-stacked-md > tbody > tr > [data-label]::before {
    float: left;
    text-align: right;
    padding: 0 calc(1rem / 2) 0 0;
  }
  [dir=rtl] .table.b-table.b-table-stacked-md > tbody > tr > [data-label]::before {
    float: right;
    text-align: left;
    padding: 0 0 0 calc(1rem / 2);
  }
  .table.b-table.b-table-stacked-md > tbody > tr > [data-label]::after {
    display: block;
    content: "";
  }
  [dir] .table.b-table.b-table-stacked-md > tbody > tr > [data-label]::after {
    clear: both;
  }
  .table.b-table.b-table-stacked-md > tbody > tr > [data-label] > div {
    display: inline-block;
    width: calc(100% - 40%);
  }
  [dir] .table.b-table.b-table-stacked-md > tbody > tr > [data-label] > div {
    margin: 0;
  }
  [dir=ltr] .table.b-table.b-table-stacked-md > tbody > tr > [data-label] > div {
    padding: 0 0 0 calc(1rem / 2);
  }
  [dir=rtl] .table.b-table.b-table-stacked-md > tbody > tr > [data-label] > div {
    padding: 0 calc(1rem / 2) 0 0;
  }
  .table.b-table.b-table-stacked-md > tbody > tr.top-row, .table.b-table.b-table-stacked-md > tbody > tr.bottom-row {
    display: none;
  }
  [dir] .table.b-table.b-table-stacked-md > tbody > tr > :first-child {
    border-top-width: 3px;
  }
  [dir] .table.b-table.b-table-stacked-md > tbody > tr > [rowspan] + td, [dir] .table.b-table.b-table-stacked-md > tbody > tr > [rowspan] + th {
    border-top-width: 3px;
  }
}
@media (max-width: 991.98px) {
  .table.b-table.b-table-stacked-lg {
    display: block;
    width: 100%;
  }
  .table.b-table.b-table-stacked-lg > caption,
.table.b-table.b-table-stacked-lg > tbody,
.table.b-table.b-table-stacked-lg > tbody > tr,
.table.b-table.b-table-stacked-lg > tbody > tr > td,
.table.b-table.b-table-stacked-lg > tbody > tr > th {
    display: block;
  }
  .table.b-table.b-table-stacked-lg > thead,
.table.b-table.b-table-stacked-lg > tfoot {
    display: none;
  }
  .table.b-table.b-table-stacked-lg > thead > tr.b-table-top-row,
.table.b-table.b-table-stacked-lg > thead > tr.b-table-bottom-row,
.table.b-table.b-table-stacked-lg > tfoot > tr.b-table-top-row,
.table.b-table.b-table-stacked-lg > tfoot > tr.b-table-bottom-row {
    display: none;
  }
  .table.b-table.b-table-stacked-lg > caption {
    caption-side: top !important;
  }
  .table.b-table.b-table-stacked-lg > tbody > tr > [data-label]::before {
    content: attr(data-label);
    width: 40%;
    overflow-wrap: break-word;
    font-weight: bold;
    font-style: normal;
  }
  [dir] .table.b-table.b-table-stacked-lg > tbody > tr > [data-label]::before {
    margin: 0;
  }
  [dir=ltr] .table.b-table.b-table-stacked-lg > tbody > tr > [data-label]::before {
    float: left;
    text-align: right;
    padding: 0 calc(1rem / 2) 0 0;
  }
  [dir=rtl] .table.b-table.b-table-stacked-lg > tbody > tr > [data-label]::before {
    float: right;
    text-align: left;
    padding: 0 0 0 calc(1rem / 2);
  }
  .table.b-table.b-table-stacked-lg > tbody > tr > [data-label]::after {
    display: block;
    content: "";
  }
  [dir] .table.b-table.b-table-stacked-lg > tbody > tr > [data-label]::after {
    clear: both;
  }
  .table.b-table.b-table-stacked-lg > tbody > tr > [data-label] > div {
    display: inline-block;
    width: calc(100% - 40%);
  }
  [dir] .table.b-table.b-table-stacked-lg > tbody > tr > [data-label] > div {
    margin: 0;
  }
  [dir=ltr] .table.b-table.b-table-stacked-lg > tbody > tr > [data-label] > div {
    padding: 0 0 0 calc(1rem / 2);
  }
  [dir=rtl] .table.b-table.b-table-stacked-lg > tbody > tr > [data-label] > div {
    padding: 0 calc(1rem / 2) 0 0;
  }
  .table.b-table.b-table-stacked-lg > tbody > tr.top-row, .table.b-table.b-table-stacked-lg > tbody > tr.bottom-row {
    display: none;
  }
  [dir] .table.b-table.b-table-stacked-lg > tbody > tr > :first-child {
    border-top-width: 3px;
  }
  [dir] .table.b-table.b-table-stacked-lg > tbody > tr > [rowspan] + td, [dir] .table.b-table.b-table-stacked-lg > tbody > tr > [rowspan] + th {
    border-top-width: 3px;
  }
}
@media (max-width: 1199.98px) {
  .table.b-table.b-table-stacked-xl {
    display: block;
    width: 100%;
  }
  .table.b-table.b-table-stacked-xl > caption,
.table.b-table.b-table-stacked-xl > tbody,
.table.b-table.b-table-stacked-xl > tbody > tr,
.table.b-table.b-table-stacked-xl > tbody > tr > td,
.table.b-table.b-table-stacked-xl > tbody > tr > th {
    display: block;
  }
  .table.b-table.b-table-stacked-xl > thead,
.table.b-table.b-table-stacked-xl > tfoot {
    display: none;
  }
  .table.b-table.b-table-stacked-xl > thead > tr.b-table-top-row,
.table.b-table.b-table-stacked-xl > thead > tr.b-table-bottom-row,
.table.b-table.b-table-stacked-xl > tfoot > tr.b-table-top-row,
.table.b-table.b-table-stacked-xl > tfoot > tr.b-table-bottom-row {
    display: none;
  }
  .table.b-table.b-table-stacked-xl > caption {
    caption-side: top !important;
  }
  .table.b-table.b-table-stacked-xl > tbody > tr > [data-label]::before {
    content: attr(data-label);
    width: 40%;
    overflow-wrap: break-word;
    font-weight: bold;
    font-style: normal;
  }
  [dir] .table.b-table.b-table-stacked-xl > tbody > tr > [data-label]::before {
    margin: 0;
  }
  [dir=ltr] .table.b-table.b-table-stacked-xl > tbody > tr > [data-label]::before {
    float: left;
    text-align: right;
    padding: 0 calc(1rem / 2) 0 0;
  }
  [dir=rtl] .table.b-table.b-table-stacked-xl > tbody > tr > [data-label]::before {
    float: right;
    text-align: left;
    padding: 0 0 0 calc(1rem / 2);
  }
  .table.b-table.b-table-stacked-xl > tbody > tr > [data-label]::after {
    display: block;
    content: "";
  }
  [dir] .table.b-table.b-table-stacked-xl > tbody > tr > [data-label]::after {
    clear: both;
  }
  .table.b-table.b-table-stacked-xl > tbody > tr > [data-label] > div {
    display: inline-block;
    width: calc(100% - 40%);
  }
  [dir] .table.b-table.b-table-stacked-xl > tbody > tr > [data-label] > div {
    margin: 0;
  }
  [dir=ltr] .table.b-table.b-table-stacked-xl > tbody > tr > [data-label] > div {
    padding: 0 0 0 calc(1rem / 2);
  }
  [dir=rtl] .table.b-table.b-table-stacked-xl > tbody > tr > [data-label] > div {
    padding: 0 calc(1rem / 2) 0 0;
  }
  .table.b-table.b-table-stacked-xl > tbody > tr.top-row, .table.b-table.b-table-stacked-xl > tbody > tr.bottom-row {
    display: none;
  }
  [dir] .table.b-table.b-table-stacked-xl > tbody > tr > :first-child {
    border-top-width: 3px;
  }
  [dir] .table.b-table.b-table-stacked-xl > tbody > tr > [rowspan] + td, [dir] .table.b-table.b-table-stacked-xl > tbody > tr > [rowspan] + th {
    border-top-width: 3px;
  }
}
.table.b-table.b-table-stacked {
  display: block;
  width: 100%;
}
.table.b-table.b-table-stacked > caption,
.table.b-table.b-table-stacked > tbody,
.table.b-table.b-table-stacked > tbody > tr,
.table.b-table.b-table-stacked > tbody > tr > td,
.table.b-table.b-table-stacked > tbody > tr > th {
  display: block;
}
.table.b-table.b-table-stacked > thead,
.table.b-table.b-table-stacked > tfoot {
  display: none;
}
.table.b-table.b-table-stacked > thead > tr.b-table-top-row,
.table.b-table.b-table-stacked > thead > tr.b-table-bottom-row,
.table.b-table.b-table-stacked > tfoot > tr.b-table-top-row,
.table.b-table.b-table-stacked > tfoot > tr.b-table-bottom-row {
  display: none;
}
.table.b-table.b-table-stacked > caption {
  caption-side: top !important;
}
.table.b-table.b-table-stacked > tbody > tr > [data-label]::before {
  content: attr(data-label);
  width: 40%;
  overflow-wrap: break-word;
  font-weight: bold;
  font-style: normal;
}
[dir] .table.b-table.b-table-stacked > tbody > tr > [data-label]::before {
  margin: 0;
}
[dir=ltr] .table.b-table.b-table-stacked > tbody > tr > [data-label]::before {
  float: left;
  text-align: right;
  padding: 0 calc(1rem / 2) 0 0;
}
[dir=rtl] .table.b-table.b-table-stacked > tbody > tr > [data-label]::before {
  float: right;
  text-align: left;
  padding: 0 0 0 calc(1rem / 2);
}
.table.b-table.b-table-stacked > tbody > tr > [data-label]::after {
  display: block;
  content: "";
}
[dir] .table.b-table.b-table-stacked > tbody > tr > [data-label]::after {
  clear: both;
}
.table.b-table.b-table-stacked > tbody > tr > [data-label] > div {
  display: inline-block;
  width: calc(100% - 40%);
}
[dir] .table.b-table.b-table-stacked > tbody > tr > [data-label] > div {
  margin: 0;
}
[dir=ltr] .table.b-table.b-table-stacked > tbody > tr > [data-label] > div {
  padding: 0 0 0 calc(1rem / 2);
}
[dir=rtl] .table.b-table.b-table-stacked > tbody > tr > [data-label] > div {
  padding: 0 calc(1rem / 2) 0 0;
}
.table.b-table.b-table-stacked > tbody > tr.top-row, .table.b-table.b-table-stacked > tbody > tr.bottom-row {
  display: none;
}
[dir] .table.b-table.b-table-stacked > tbody > tr > :first-child {
  border-top-width: 3px;
}
[dir] .table.b-table.b-table-stacked > tbody > tr > [rowspan] + td, [dir] .table.b-table.b-table-stacked > tbody > tr > [rowspan] + th {
  border-top-width: 3px;
}

.b-time {
  min-width: 150px;
}
.b-time[aria-disabled=true] output, .b-time[aria-readonly=true] output,
.b-time output.disabled {
  opacity: 1;
}
[dir] .b-time[aria-disabled=true] output, [dir] .b-time[aria-readonly=true] output, [dir] .b-time output.disabled {
  background-color: #e9ecef;
}
.b-time[aria-disabled=true] output {
  pointer-events: none;
}
[dir=rtl] .b-time > .d-flex:not(.flex-column) {
  flex-direction: row-reverse;
}

[dir] .b-time .b-time-header {
  margin-bottom: 0.5rem;
}
.b-time .b-time-header output {
  font-size: 80%;
}
[dir] .b-time .b-time-header output {
  padding: 0.25rem;
}
[dir] .b-time .b-time-footer {
  margin-top: 0.5rem;
}
[dir=ltr] .b-time .b-time-ampm {
  margin-left: 0.5rem;
}
[dir=rtl] .b-time .b-time-ampm {
  margin-right: 0.5rem;
}

.b-toast {
  display: block;
  position: relative;
  max-width: 350px;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  z-index: 1;
}

[dir] .b-toast {
  background-clip: padding-box;
  border-radius: 0.25rem;
}
[dir] .b-toast .toast {
  background-color: rgba(255, 255, 255, 0.85);
}
[dir] .b-toast:not(:last-child) {
  margin-bottom: 0.75rem;
}
[dir] .b-toast.b-toast-solid .toast {
  background-color: white;
}
.b-toast .toast {
  opacity: 1;
}
.b-toast .toast.fade:not(.show) {
  opacity: 0;
}
.b-toast .toast .toast-body {
  display: block;
}

.b-toast-primary .toast {
  color: #004085;
}

[dir] .b-toast-primary .toast {
  background-color: rgba(230, 242, 255, 0.85);
  border-color: rgba(184, 218, 255, 0.85);
}
.b-toast-primary .toast .toast-header {
  color: #004085;
}
[dir] .b-toast-primary .toast .toast-header {
  background-color: rgba(204, 229, 255, 0.85);
  border-bottom-color: rgba(184, 218, 255, 0.85);
}
[dir] .b-toast-primary.b-toast-solid .toast {
  background-color: #e6f2ff;
}

.b-toast-secondary .toast {
  color: #383d41;
}

[dir] .b-toast-secondary .toast {
  background-color: rgba(239, 240, 241, 0.85);
  border-color: rgba(214, 216, 219, 0.85);
}
.b-toast-secondary .toast .toast-header {
  color: #383d41;
}
[dir] .b-toast-secondary .toast .toast-header {
  background-color: rgba(226, 227, 229, 0.85);
  border-bottom-color: rgba(214, 216, 219, 0.85);
}
[dir] .b-toast-secondary.b-toast-solid .toast {
  background-color: #eff0f1;
}

.b-toast-success .toast {
  color: #155724;
}

[dir] .b-toast-success .toast {
  background-color: rgba(230, 245, 233, 0.85);
  border-color: rgba(195, 230, 203, 0.85);
}
.b-toast-success .toast .toast-header {
  color: #155724;
}
[dir] .b-toast-success .toast .toast-header {
  background-color: rgba(212, 237, 218, 0.85);
  border-bottom-color: rgba(195, 230, 203, 0.85);
}
[dir] .b-toast-success.b-toast-solid .toast {
  background-color: #e6f5e9;
}

.b-toast-info .toast {
  color: #0c5460;
}

[dir] .b-toast-info .toast {
  background-color: rgba(229, 244, 247, 0.85);
  border-color: rgba(190, 229, 235, 0.85);
}
.b-toast-info .toast .toast-header {
  color: #0c5460;
}
[dir] .b-toast-info .toast .toast-header {
  background-color: rgba(209, 236, 241, 0.85);
  border-bottom-color: rgba(190, 229, 235, 0.85);
}
[dir] .b-toast-info.b-toast-solid .toast {
  background-color: #e5f4f7;
}

.b-toast-warning .toast {
  color: #856404;
}

[dir] .b-toast-warning .toast {
  background-color: rgba(255, 249, 231, 0.85);
  border-color: rgba(255, 238, 186, 0.85);
}
.b-toast-warning .toast .toast-header {
  color: #856404;
}
[dir] .b-toast-warning .toast .toast-header {
  background-color: rgba(255, 243, 205, 0.85);
  border-bottom-color: rgba(255, 238, 186, 0.85);
}
[dir] .b-toast-warning.b-toast-solid .toast {
  background-color: #fff9e7;
}

.b-toast-danger .toast {
  color: #721c24;
}

[dir] .b-toast-danger .toast {
  background-color: rgba(252, 237, 238, 0.85);
  border-color: rgba(245, 198, 203, 0.85);
}
.b-toast-danger .toast .toast-header {
  color: #721c24;
}
[dir] .b-toast-danger .toast .toast-header {
  background-color: rgba(248, 215, 218, 0.85);
  border-bottom-color: rgba(245, 198, 203, 0.85);
}
[dir] .b-toast-danger.b-toast-solid .toast {
  background-color: #fcedee;
}

.b-toast-light .toast {
  color: #818182;
}

[dir] .b-toast-light .toast {
  background-color: rgba(255, 255, 255, 0.85);
  border-color: rgba(253, 253, 254, 0.85);
}
.b-toast-light .toast .toast-header {
  color: #818182;
}
[dir] .b-toast-light .toast .toast-header {
  background-color: rgba(254, 254, 254, 0.85);
  border-bottom-color: rgba(253, 253, 254, 0.85);
}
[dir] .b-toast-light.b-toast-solid .toast {
  background-color: white;
}

.b-toast-dark .toast {
  color: #1b1e21;
}

[dir] .b-toast-dark .toast {
  background-color: rgba(227, 229, 229, 0.85);
  border-color: rgba(198, 200, 202, 0.85);
}
.b-toast-dark .toast .toast-header {
  color: #1b1e21;
}
[dir] .b-toast-dark .toast .toast-header {
  background-color: rgba(214, 216, 217, 0.85);
  border-bottom-color: rgba(198, 200, 202, 0.85);
}
[dir] .b-toast-dark.b-toast-solid .toast {
  background-color: #e3e5e5;
}

.b-toaster {
  z-index: 1100;
}
.b-toaster .b-toaster-slot {
  position: relative;
  display: block;
}
.b-toaster .b-toaster-slot:empty {
  display: none !important;
}

.b-toaster.b-toaster-top-right, .b-toaster.b-toaster-top-left, .b-toaster.b-toaster-top-center, .b-toaster.b-toaster-top-full, .b-toaster.b-toaster-bottom-right, .b-toaster.b-toaster-bottom-left, .b-toaster.b-toaster-bottom-center, .b-toaster.b-toaster-bottom-full {
  position: fixed;
  height: 0;
  overflow: visible;
}

[dir] .b-toaster.b-toaster-top-right, [dir] .b-toaster.b-toaster-top-left, [dir] .b-toaster.b-toaster-top-center, [dir] .b-toaster.b-toaster-top-full, [dir] .b-toaster.b-toaster-bottom-right, [dir] .b-toaster.b-toaster-bottom-left, [dir] .b-toaster.b-toaster-bottom-center, [dir] .b-toaster.b-toaster-bottom-full {
  margin: 0;
  padding: 0;
}

[dir=ltr] .b-toaster.b-toaster-top-right, [dir=ltr] .b-toaster.b-toaster-top-left, [dir=ltr] .b-toaster.b-toaster-top-center, [dir=ltr] .b-toaster.b-toaster-top-full, [dir=ltr] .b-toaster.b-toaster-bottom-right, [dir=ltr] .b-toaster.b-toaster-bottom-left, [dir=ltr] .b-toaster.b-toaster-bottom-center, [dir=ltr] .b-toaster.b-toaster-bottom-full {
  left: 0.5rem;
  right: 0.5rem;
}

[dir=rtl] .b-toaster.b-toaster-top-right, [dir=rtl] .b-toaster.b-toaster-top-left, [dir=rtl] .b-toaster.b-toaster-top-center, [dir=rtl] .b-toaster.b-toaster-top-full, [dir=rtl] .b-toaster.b-toaster-bottom-right, [dir=rtl] .b-toaster.b-toaster-bottom-left, [dir=rtl] .b-toaster.b-toaster-bottom-center, [dir=rtl] .b-toaster.b-toaster-bottom-full {
  right: 0.5rem;
  left: 0.5rem;
}
.b-toaster.b-toaster-top-right .b-toaster-slot, .b-toaster.b-toaster-top-left .b-toaster-slot, .b-toaster.b-toaster-top-center .b-toaster-slot, .b-toaster.b-toaster-top-full .b-toaster-slot, .b-toaster.b-toaster-bottom-right .b-toaster-slot, .b-toaster.b-toaster-bottom-left .b-toaster-slot, .b-toaster.b-toaster-bottom-center .b-toaster-slot, .b-toaster.b-toaster-bottom-full .b-toaster-slot {
  position: absolute;
  max-width: 350px;
  width: 100%;
  /* IE 11 fix */
}
[dir] .b-toaster.b-toaster-top-right .b-toaster-slot, [dir] .b-toaster.b-toaster-top-left .b-toaster-slot, [dir] .b-toaster.b-toaster-top-center .b-toaster-slot, [dir] .b-toaster.b-toaster-top-full .b-toaster-slot, [dir] .b-toaster.b-toaster-bottom-right .b-toaster-slot, [dir] .b-toaster.b-toaster-bottom-left .b-toaster-slot, [dir] .b-toaster.b-toaster-bottom-center .b-toaster-slot, [dir] .b-toaster.b-toaster-bottom-full .b-toaster-slot {
  padding: 0;
  margin: 0;
}
[dir=ltr] .b-toaster.b-toaster-top-right .b-toaster-slot, [dir=ltr] .b-toaster.b-toaster-top-left .b-toaster-slot, [dir=ltr] .b-toaster.b-toaster-top-center .b-toaster-slot, [dir=ltr] .b-toaster.b-toaster-top-full .b-toaster-slot, [dir=ltr] .b-toaster.b-toaster-bottom-right .b-toaster-slot, [dir=ltr] .b-toaster.b-toaster-bottom-left .b-toaster-slot, [dir=ltr] .b-toaster.b-toaster-bottom-center .b-toaster-slot, [dir=ltr] .b-toaster.b-toaster-bottom-full .b-toaster-slot {
  left: 0;
  right: 0;
}
[dir=rtl] .b-toaster.b-toaster-top-right .b-toaster-slot, [dir=rtl] .b-toaster.b-toaster-top-left .b-toaster-slot, [dir=rtl] .b-toaster.b-toaster-top-center .b-toaster-slot, [dir=rtl] .b-toaster.b-toaster-top-full .b-toaster-slot, [dir=rtl] .b-toaster.b-toaster-bottom-right .b-toaster-slot, [dir=rtl] .b-toaster.b-toaster-bottom-left .b-toaster-slot, [dir=rtl] .b-toaster.b-toaster-bottom-center .b-toaster-slot, [dir=rtl] .b-toaster.b-toaster-bottom-full .b-toaster-slot {
  right: 0;
  left: 0;
}
.b-toaster.b-toaster-top-full .b-toaster-slot, .b-toaster.b-toaster-bottom-full .b-toaster-slot {
  width: 100%;
  max-width: 100%;
}
.b-toaster.b-toaster-top-full .b-toaster-slot .b-toast,
.b-toaster.b-toaster-top-full .b-toaster-slot .toast, .b-toaster.b-toaster-bottom-full .b-toaster-slot .b-toast,
.b-toaster.b-toaster-bottom-full .b-toaster-slot .toast {
  width: 100%;
  max-width: 100%;
}
.b-toaster.b-toaster-top-right, .b-toaster.b-toaster-top-left, .b-toaster.b-toaster-top-center, .b-toaster.b-toaster-top-full {
  top: 0;
}
.b-toaster.b-toaster-top-right .b-toaster-slot, .b-toaster.b-toaster-top-left .b-toaster-slot, .b-toaster.b-toaster-top-center .b-toaster-slot, .b-toaster.b-toaster-top-full .b-toaster-slot {
  top: 0.5rem;
}
.b-toaster.b-toaster-bottom-right, .b-toaster.b-toaster-bottom-left, .b-toaster.b-toaster-bottom-center, .b-toaster.b-toaster-bottom-full {
  bottom: 0;
}
.b-toaster.b-toaster-bottom-right .b-toaster-slot, .b-toaster.b-toaster-bottom-left .b-toaster-slot, .b-toaster.b-toaster-bottom-center .b-toaster-slot, .b-toaster.b-toaster-bottom-full .b-toaster-slot {
  bottom: 0.5rem;
}
[dir=ltr] .b-toaster.b-toaster-top-right .b-toaster-slot, [dir=ltr] .b-toaster.b-toaster-bottom-right .b-toaster-slot, [dir=ltr] .b-toaster.b-toaster-top-center .b-toaster-slot, [dir=ltr] .b-toaster.b-toaster-bottom-center .b-toaster-slot {
  margin-left: auto;
}
[dir=rtl] .b-toaster.b-toaster-top-right .b-toaster-slot, [dir=rtl] .b-toaster.b-toaster-bottom-right .b-toaster-slot, [dir=rtl] .b-toaster.b-toaster-top-center .b-toaster-slot, [dir=rtl] .b-toaster.b-toaster-bottom-center .b-toaster-slot {
  margin-right: auto;
}
[dir=ltr] .b-toaster.b-toaster-top-left .b-toaster-slot, [dir=ltr] .b-toaster.b-toaster-bottom-left .b-toaster-slot, [dir=ltr] .b-toaster.b-toaster-top-center .b-toaster-slot, [dir=ltr] .b-toaster.b-toaster-bottom-center .b-toaster-slot {
  margin-right: auto;
}
[dir=rtl] .b-toaster.b-toaster-top-left .b-toaster-slot, [dir=rtl] .b-toaster.b-toaster-bottom-left .b-toaster-slot, [dir=rtl] .b-toaster.b-toaster-top-center .b-toaster-slot, [dir=rtl] .b-toaster.b-toaster-bottom-center .b-toaster-slot {
  margin-left: auto;
}

.b-toaster.b-toaster-top-right .b-toast.b-toaster-enter-active, .b-toaster.b-toaster-top-right .b-toast.b-toaster-leave-active, .b-toaster.b-toaster-top-right .b-toast.b-toaster-move, .b-toaster.b-toaster-top-left .b-toast.b-toaster-enter-active, .b-toaster.b-toaster-top-left .b-toast.b-toaster-leave-active, .b-toaster.b-toaster-top-left .b-toast.b-toaster-move, .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-enter-active, .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-leave-active, .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-move, .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-enter-active, .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-leave-active, .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-move {
  transition: transform 0.175s;
}
[dir] .b-toaster.b-toaster-top-right .b-toast.b-toaster-enter-to .toast.fade, [dir] .b-toaster.b-toaster-top-right .b-toast.b-toaster-enter-active .toast.fade, [dir] .b-toaster.b-toaster-top-left .b-toast.b-toaster-enter-to .toast.fade, [dir] .b-toaster.b-toaster-top-left .b-toast.b-toaster-enter-active .toast.fade, [dir] .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-enter-to .toast.fade, [dir] .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-enter-active .toast.fade, [dir] .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-enter-to .toast.fade, [dir] .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-enter-active .toast.fade {
  transition-delay: 0.175s;
}
.b-toaster.b-toaster-top-right .b-toast.b-toaster-leave-active, .b-toaster.b-toaster-top-left .b-toast.b-toaster-leave-active, .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-leave-active, .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-leave-active {
  position: absolute;
}
[dir] .b-toaster.b-toaster-top-right .b-toast.b-toaster-leave-active, [dir] .b-toaster.b-toaster-top-left .b-toast.b-toaster-leave-active, [dir] .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-leave-active, [dir] .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-leave-active {
  transition-delay: 0.175s;
}
[dir] .b-toaster.b-toaster-top-right .b-toast.b-toaster-leave-active .toast.fade, [dir] .b-toaster.b-toaster-top-left .b-toast.b-toaster-leave-active .toast.fade, [dir] .b-toaster.b-toaster-bottom-right .b-toast.b-toaster-leave-active .toast.fade, [dir] .b-toaster.b-toaster-bottom-left .b-toast.b-toaster-leave-active .toast.fade {
  transition-delay: 0s;
}
.tooltip.b-tooltip {
  display: block;
  opacity: 0.9;
  outline: 0;
}
.tooltip.b-tooltip.fade:not(.show) {
  opacity: 0;
}
.tooltip.b-tooltip.show {
  opacity: 0.9;
}
.tooltip.b-tooltip.noninteractive {
  pointer-events: none;
}
[dir] .tooltip.b-tooltip .arrow {
  margin: 0 0.25rem;
}
[dir] .tooltip.b-tooltip.bs-tooltip-right .arrow, [dir] .tooltip.b-tooltip.b-tooltip-dark.bs-tooltip-auto[x-placement^=right] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-light.bs-tooltip-auto[x-placement^=right] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-danger.bs-tooltip-auto[x-placement^=right] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-warning.bs-tooltip-auto[x-placement^=right] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-info.bs-tooltip-auto[x-placement^=right] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-success.bs-tooltip-auto[x-placement^=right] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-secondary.bs-tooltip-auto[x-placement^=right] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-primary.bs-tooltip-auto[x-placement^=right] .arrow, [dir] .tooltip.b-tooltip.bs-tooltip-left .arrow, [dir] .tooltip.b-tooltip.b-tooltip-dark.bs-tooltip-auto[x-placement^=left] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-light.bs-tooltip-auto[x-placement^=left] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-danger.bs-tooltip-auto[x-placement^=left] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-warning.bs-tooltip-auto[x-placement^=left] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-info.bs-tooltip-auto[x-placement^=left] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-success.bs-tooltip-auto[x-placement^=left] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-secondary.bs-tooltip-auto[x-placement^=left] .arrow, [dir] .tooltip.b-tooltip.b-tooltip-primary.bs-tooltip-auto[x-placement^=left] .arrow {
  margin: 0.25rem 0;
}

[dir] .tooltip.b-tooltip-primary.bs-tooltip-top .arrow::before, [dir] .tooltip.b-tooltip-primary.bs-tooltip-auto[x-placement^=top] .arrow::before {
  border-top-color: #007bff;
}
[dir=ltr] .tooltip.b-tooltip-primary.bs-tooltip-right .arrow::before, [dir=ltr] .tooltip.b-tooltip-primary.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-right-color: #007bff;
}
[dir=rtl] .tooltip.b-tooltip-primary.bs-tooltip-right .arrow::before, [dir=rtl] .tooltip.b-tooltip-primary.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-left-color: #007bff;
}
[dir] .tooltip.b-tooltip-primary.bs-tooltip-bottom .arrow::before, [dir] .tooltip.b-tooltip-primary.bs-tooltip-auto[x-placement^=bottom] .arrow::before {
  border-bottom-color: #007bff;
}
[dir=ltr] .tooltip.b-tooltip-primary.bs-tooltip-left .arrow::before, [dir=ltr] .tooltip.b-tooltip-primary.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-left-color: #007bff;
}
[dir=rtl] .tooltip.b-tooltip-primary.bs-tooltip-left .arrow::before, [dir=rtl] .tooltip.b-tooltip-primary.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-right-color: #007bff;
}
.tooltip.b-tooltip-primary .tooltip-inner {
  color: #fff;
}
[dir] .tooltip.b-tooltip-primary .tooltip-inner {
  background-color: #007bff;
}

[dir] .tooltip.b-tooltip-secondary.bs-tooltip-top .arrow::before, [dir] .tooltip.b-tooltip-secondary.bs-tooltip-auto[x-placement^=top] .arrow::before {
  border-top-color: #6c757d;
}
[dir=ltr] .tooltip.b-tooltip-secondary.bs-tooltip-right .arrow::before, [dir=ltr] .tooltip.b-tooltip-secondary.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-right-color: #6c757d;
}
[dir=rtl] .tooltip.b-tooltip-secondary.bs-tooltip-right .arrow::before, [dir=rtl] .tooltip.b-tooltip-secondary.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-left-color: #6c757d;
}
[dir] .tooltip.b-tooltip-secondary.bs-tooltip-bottom .arrow::before, [dir] .tooltip.b-tooltip-secondary.bs-tooltip-auto[x-placement^=bottom] .arrow::before {
  border-bottom-color: #6c757d;
}
[dir=ltr] .tooltip.b-tooltip-secondary.bs-tooltip-left .arrow::before, [dir=ltr] .tooltip.b-tooltip-secondary.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-left-color: #6c757d;
}
[dir=rtl] .tooltip.b-tooltip-secondary.bs-tooltip-left .arrow::before, [dir=rtl] .tooltip.b-tooltip-secondary.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-right-color: #6c757d;
}
.tooltip.b-tooltip-secondary .tooltip-inner {
  color: #fff;
}
[dir] .tooltip.b-tooltip-secondary .tooltip-inner {
  background-color: #6c757d;
}

[dir] .tooltip.b-tooltip-success.bs-tooltip-top .arrow::before, [dir] .tooltip.b-tooltip-success.bs-tooltip-auto[x-placement^=top] .arrow::before {
  border-top-color: #28a745;
}
[dir=ltr] .tooltip.b-tooltip-success.bs-tooltip-right .arrow::before, [dir=ltr] .tooltip.b-tooltip-success.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-right-color: #28a745;
}
[dir=rtl] .tooltip.b-tooltip-success.bs-tooltip-right .arrow::before, [dir=rtl] .tooltip.b-tooltip-success.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-left-color: #28a745;
}
[dir] .tooltip.b-tooltip-success.bs-tooltip-bottom .arrow::before, [dir] .tooltip.b-tooltip-success.bs-tooltip-auto[x-placement^=bottom] .arrow::before {
  border-bottom-color: #28a745;
}
[dir=ltr] .tooltip.b-tooltip-success.bs-tooltip-left .arrow::before, [dir=ltr] .tooltip.b-tooltip-success.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-left-color: #28a745;
}
[dir=rtl] .tooltip.b-tooltip-success.bs-tooltip-left .arrow::before, [dir=rtl] .tooltip.b-tooltip-success.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-right-color: #28a745;
}
.tooltip.b-tooltip-success .tooltip-inner {
  color: #fff;
}
[dir] .tooltip.b-tooltip-success .tooltip-inner {
  background-color: #28a745;
}

[dir] .tooltip.b-tooltip-info.bs-tooltip-top .arrow::before, [dir] .tooltip.b-tooltip-info.bs-tooltip-auto[x-placement^=top] .arrow::before {
  border-top-color: #17a2b8;
}
[dir=ltr] .tooltip.b-tooltip-info.bs-tooltip-right .arrow::before, [dir=ltr] .tooltip.b-tooltip-info.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-right-color: #17a2b8;
}
[dir=rtl] .tooltip.b-tooltip-info.bs-tooltip-right .arrow::before, [dir=rtl] .tooltip.b-tooltip-info.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-left-color: #17a2b8;
}
[dir] .tooltip.b-tooltip-info.bs-tooltip-bottom .arrow::before, [dir] .tooltip.b-tooltip-info.bs-tooltip-auto[x-placement^=bottom] .arrow::before {
  border-bottom-color: #17a2b8;
}
[dir=ltr] .tooltip.b-tooltip-info.bs-tooltip-left .arrow::before, [dir=ltr] .tooltip.b-tooltip-info.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-left-color: #17a2b8;
}
[dir=rtl] .tooltip.b-tooltip-info.bs-tooltip-left .arrow::before, [dir=rtl] .tooltip.b-tooltip-info.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-right-color: #17a2b8;
}
.tooltip.b-tooltip-info .tooltip-inner {
  color: #fff;
}
[dir] .tooltip.b-tooltip-info .tooltip-inner {
  background-color: #17a2b8;
}

[dir] .tooltip.b-tooltip-warning.bs-tooltip-top .arrow::before, [dir] .tooltip.b-tooltip-warning.bs-tooltip-auto[x-placement^=top] .arrow::before {
  border-top-color: #ffc107;
}
[dir=ltr] .tooltip.b-tooltip-warning.bs-tooltip-right .arrow::before, [dir=ltr] .tooltip.b-tooltip-warning.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-right-color: #ffc107;
}
[dir=rtl] .tooltip.b-tooltip-warning.bs-tooltip-right .arrow::before, [dir=rtl] .tooltip.b-tooltip-warning.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-left-color: #ffc107;
}
[dir] .tooltip.b-tooltip-warning.bs-tooltip-bottom .arrow::before, [dir] .tooltip.b-tooltip-warning.bs-tooltip-auto[x-placement^=bottom] .arrow::before {
  border-bottom-color: #ffc107;
}
[dir=ltr] .tooltip.b-tooltip-warning.bs-tooltip-left .arrow::before, [dir=ltr] .tooltip.b-tooltip-warning.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-left-color: #ffc107;
}
[dir=rtl] .tooltip.b-tooltip-warning.bs-tooltip-left .arrow::before, [dir=rtl] .tooltip.b-tooltip-warning.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-right-color: #ffc107;
}
.tooltip.b-tooltip-warning .tooltip-inner {
  color: #212529;
}
[dir] .tooltip.b-tooltip-warning .tooltip-inner {
  background-color: #ffc107;
}

[dir] .tooltip.b-tooltip-danger.bs-tooltip-top .arrow::before, [dir] .tooltip.b-tooltip-danger.bs-tooltip-auto[x-placement^=top] .arrow::before {
  border-top-color: #dc3545;
}
[dir=ltr] .tooltip.b-tooltip-danger.bs-tooltip-right .arrow::before, [dir=ltr] .tooltip.b-tooltip-danger.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-right-color: #dc3545;
}
[dir=rtl] .tooltip.b-tooltip-danger.bs-tooltip-right .arrow::before, [dir=rtl] .tooltip.b-tooltip-danger.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-left-color: #dc3545;
}
[dir] .tooltip.b-tooltip-danger.bs-tooltip-bottom .arrow::before, [dir] .tooltip.b-tooltip-danger.bs-tooltip-auto[x-placement^=bottom] .arrow::before {
  border-bottom-color: #dc3545;
}
[dir=ltr] .tooltip.b-tooltip-danger.bs-tooltip-left .arrow::before, [dir=ltr] .tooltip.b-tooltip-danger.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-left-color: #dc3545;
}
[dir=rtl] .tooltip.b-tooltip-danger.bs-tooltip-left .arrow::before, [dir=rtl] .tooltip.b-tooltip-danger.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-right-color: #dc3545;
}
.tooltip.b-tooltip-danger .tooltip-inner {
  color: #fff;
}
[dir] .tooltip.b-tooltip-danger .tooltip-inner {
  background-color: #dc3545;
}

[dir] .tooltip.b-tooltip-light.bs-tooltip-top .arrow::before, [dir] .tooltip.b-tooltip-light.bs-tooltip-auto[x-placement^=top] .arrow::before {
  border-top-color: #f8f9fa;
}
[dir=ltr] .tooltip.b-tooltip-light.bs-tooltip-right .arrow::before, [dir=ltr] .tooltip.b-tooltip-light.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-right-color: #f8f9fa;
}
[dir=rtl] .tooltip.b-tooltip-light.bs-tooltip-right .arrow::before, [dir=rtl] .tooltip.b-tooltip-light.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-left-color: #f8f9fa;
}
[dir] .tooltip.b-tooltip-light.bs-tooltip-bottom .arrow::before, [dir] .tooltip.b-tooltip-light.bs-tooltip-auto[x-placement^=bottom] .arrow::before {
  border-bottom-color: #f8f9fa;
}
[dir=ltr] .tooltip.b-tooltip-light.bs-tooltip-left .arrow::before, [dir=ltr] .tooltip.b-tooltip-light.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-left-color: #f8f9fa;
}
[dir=rtl] .tooltip.b-tooltip-light.bs-tooltip-left .arrow::before, [dir=rtl] .tooltip.b-tooltip-light.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-right-color: #f8f9fa;
}
.tooltip.b-tooltip-light .tooltip-inner {
  color: #212529;
}
[dir] .tooltip.b-tooltip-light .tooltip-inner {
  background-color: #f8f9fa;
}

[dir] .tooltip.b-tooltip-dark.bs-tooltip-top .arrow::before, [dir] .tooltip.b-tooltip-dark.bs-tooltip-auto[x-placement^=top] .arrow::before {
  border-top-color: #343a40;
}
[dir=ltr] .tooltip.b-tooltip-dark.bs-tooltip-right .arrow::before, [dir=ltr] .tooltip.b-tooltip-dark.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-right-color: #343a40;
}
[dir=rtl] .tooltip.b-tooltip-dark.bs-tooltip-right .arrow::before, [dir=rtl] .tooltip.b-tooltip-dark.bs-tooltip-auto[x-placement^=right] .arrow::before {
  border-left-color: #343a40;
}
[dir] .tooltip.b-tooltip-dark.bs-tooltip-bottom .arrow::before, [dir] .tooltip.b-tooltip-dark.bs-tooltip-auto[x-placement^=bottom] .arrow::before {
  border-bottom-color: #343a40;
}
[dir=ltr] .tooltip.b-tooltip-dark.bs-tooltip-left .arrow::before, [dir=ltr] .tooltip.b-tooltip-dark.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-left-color: #343a40;
}
[dir=rtl] .tooltip.b-tooltip-dark.bs-tooltip-left .arrow::before, [dir=rtl] .tooltip.b-tooltip-dark.bs-tooltip-auto[x-placement^=left] .arrow::before {
  border-right-color: #343a40;
}
.tooltip.b-tooltip-dark .tooltip-inner {
  color: #fff;
}
[dir] .tooltip.b-tooltip-dark .tooltip-inner {
  background-color: #343a40;
}

.b-icon.bi {
  display: inline-block;
  overflow: visible;
  vertical-align: -0.15em;
}
.b-icon.b-icon-animation-cylon, .b-icon.b-iconstack .b-icon-animation-cylon > g {
  -webkit-transform-origin: center;
}
[dir] .b-icon.b-icon-animation-cylon, [dir] .b-icon.b-iconstack .b-icon-animation-cylon > g {
  transform-origin: center;
}
[dir=ltr] .b-icon.b-icon-animation-cylon, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-cylon > g {
  -webkit-animation: 0.75s infinite ease-in-out alternate b-icon-animation-cylon-ltr ;
  animation: 0.75s infinite ease-in-out alternate b-icon-animation-cylon-ltr ;
}
[dir=rtl] .b-icon.b-icon-animation-cylon, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-cylon > g {
  -webkit-animation: 0.75s infinite ease-in-out alternate b-icon-animation-cylon-rtl ;
  animation: 0.75s infinite ease-in-out alternate b-icon-animation-cylon-rtl ;
}
@media (prefers-reduced-motion: reduce) {
  [dir=ltr] .b-icon.b-icon-animation-cylon, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-cylon > g {
    -webkit-animation: none;
    animation: none;
  }
  [dir=rtl] .b-icon.b-icon-animation-cylon, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-cylon > g {
    -webkit-animation: none;
    animation: none;
  }
}
.b-icon.b-icon-animation-cylon-vertical, .b-icon.b-iconstack .b-icon-animation-cylon-vertical > g {
  -webkit-transform-origin: center;
}
[dir] .b-icon.b-icon-animation-cylon-vertical, [dir] .b-icon.b-iconstack .b-icon-animation-cylon-vertical > g {
  transform-origin: center;
}
[dir=ltr] .b-icon.b-icon-animation-cylon-vertical, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-cylon-vertical > g {
  -webkit-animation: 0.75s infinite ease-in-out alternate b-icon-animation-cylon-vertical;
  animation: 0.75s infinite ease-in-out alternate b-icon-animation-cylon-vertical;
}
[dir=rtl] .b-icon.b-icon-animation-cylon-vertical, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-cylon-vertical > g {
  -webkit-animation: 0.75s infinite ease-in-out alternate b-icon-animation-cylon-vertical;
  animation: 0.75s infinite ease-in-out alternate b-icon-animation-cylon-vertical;
}
@media (prefers-reduced-motion: reduce) {
  [dir=ltr] .b-icon.b-icon-animation-cylon-vertical, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-cylon-vertical > g {
    -webkit-animation: none;
    animation: none;
  }
  [dir=rtl] .b-icon.b-icon-animation-cylon-vertical, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-cylon-vertical > g {
    -webkit-animation: none;
    animation: none;
  }
}
.b-icon.b-icon-animation-fade, .b-icon.b-iconstack .b-icon-animation-fade > g {
  -webkit-transform-origin: center;
}
[dir] .b-icon.b-icon-animation-fade, [dir] .b-icon.b-iconstack .b-icon-animation-fade > g {
  transform-origin: center;
}
[dir=ltr] .b-icon.b-icon-animation-fade, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-fade > g {
  -webkit-animation: 0.75s infinite ease-in-out alternate b-icon-animation-fade;
  animation: 0.75s infinite ease-in-out alternate b-icon-animation-fade;
}
[dir=rtl] .b-icon.b-icon-animation-fade, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-fade > g {
  -webkit-animation: 0.75s infinite ease-in-out alternate b-icon-animation-fade;
  animation: 0.75s infinite ease-in-out alternate b-icon-animation-fade;
}
@media (prefers-reduced-motion: reduce) {
  [dir=ltr] .b-icon.b-icon-animation-fade, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-fade > g {
    -webkit-animation: none;
    animation: none;
  }
  [dir=rtl] .b-icon.b-icon-animation-fade, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-fade > g {
    -webkit-animation: none;
    animation: none;
  }
}
.b-icon.b-icon-animation-spin, .b-icon.b-iconstack .b-icon-animation-spin > g {
  -webkit-transform-origin: center;
}
[dir] .b-icon.b-icon-animation-spin, [dir] .b-icon.b-iconstack .b-icon-animation-spin > g {
  transform-origin: center;
}
[dir=ltr] .b-icon.b-icon-animation-spin, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-spin > g {
  -webkit-animation: 2s infinite linear normal b-icon-animation-spin-ltr ;
  animation: 2s infinite linear normal b-icon-animation-spin-ltr ;
}
[dir=rtl] .b-icon.b-icon-animation-spin, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-spin > g {
  -webkit-animation: 2s infinite linear normal b-icon-animation-spin-rtl ;
  animation: 2s infinite linear normal b-icon-animation-spin-rtl ;
}
@media (prefers-reduced-motion: reduce) {
  [dir=ltr] .b-icon.b-icon-animation-spin, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-spin > g {
    -webkit-animation: none;
    animation: none;
  }
  [dir=rtl] .b-icon.b-icon-animation-spin, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-spin > g {
    -webkit-animation: none;
    animation: none;
  }
}
.b-icon.b-icon-animation-spin-reverse, .b-icon.b-iconstack .b-icon-animation-spin-reverse > g {
  -webkit-transform-origin: center;
}
[dir] .b-icon.b-icon-animation-spin-reverse, [dir] .b-icon.b-iconstack .b-icon-animation-spin-reverse > g {
  transform-origin: center;
}
[dir=ltr] .b-icon.b-icon-animation-spin-reverse, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-spin-reverse > g {
  animation: 2s infinite linear reverse b-icon-animation-spin-ltr ;
}
[dir=rtl] .b-icon.b-icon-animation-spin-reverse, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-spin-reverse > g {
  animation: 2s infinite linear reverse b-icon-animation-spin-rtl ;
}
@media (prefers-reduced-motion: reduce) {
  [dir=ltr] .b-icon.b-icon-animation-spin-reverse, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-spin-reverse > g {
    -webkit-animation: none;
    animation: none;
  }
  [dir=rtl] .b-icon.b-icon-animation-spin-reverse, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-spin-reverse > g {
    -webkit-animation: none;
    animation: none;
  }
}
.b-icon.b-icon-animation-spin-pulse, .b-icon.b-iconstack .b-icon-animation-spin-pulse > g {
  -webkit-transform-origin: center;
}
[dir] .b-icon.b-icon-animation-spin-pulse, [dir] .b-icon.b-iconstack .b-icon-animation-spin-pulse > g {
  transform-origin: center;
}
[dir=ltr] .b-icon.b-icon-animation-spin-pulse, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-spin-pulse > g {
  -webkit-animation: 1s infinite steps(8) normal b-icon-animation-spin-ltr ;
  animation: 1s infinite steps(8) normal b-icon-animation-spin-ltr ;
}
[dir=rtl] .b-icon.b-icon-animation-spin-pulse, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-spin-pulse > g {
  -webkit-animation: 1s infinite steps(8) normal b-icon-animation-spin-rtl ;
  animation: 1s infinite steps(8) normal b-icon-animation-spin-rtl ;
}
@media (prefers-reduced-motion: reduce) {
  [dir=ltr] .b-icon.b-icon-animation-spin-pulse, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-spin-pulse > g {
    -webkit-animation: none;
    animation: none;
  }
  [dir=rtl] .b-icon.b-icon-animation-spin-pulse, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-spin-pulse > g {
    -webkit-animation: none;
    animation: none;
  }
}
.b-icon.b-icon-animation-spin-reverse-pulse, .b-icon.b-iconstack .b-icon-animation-spin-reverse-pulse > g {
  -webkit-transform-origin: center;
}
[dir] .b-icon.b-icon-animation-spin-reverse-pulse, [dir] .b-icon.b-iconstack .b-icon-animation-spin-reverse-pulse > g {
  transform-origin: center;
}
[dir=ltr] .b-icon.b-icon-animation-spin-reverse-pulse, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-spin-reverse-pulse > g {
  animation: 1s infinite steps(8) reverse b-icon-animation-spin-ltr ;
}
[dir=rtl] .b-icon.b-icon-animation-spin-reverse-pulse, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-spin-reverse-pulse > g {
  animation: 1s infinite steps(8) reverse b-icon-animation-spin-rtl ;
}
@media (prefers-reduced-motion: reduce) {
  [dir=ltr] .b-icon.b-icon-animation-spin-reverse-pulse, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-spin-reverse-pulse > g {
    -webkit-animation: none;
    animation: none;
  }
  [dir=rtl] .b-icon.b-icon-animation-spin-reverse-pulse, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-spin-reverse-pulse > g {
    -webkit-animation: none;
    animation: none;
  }
}
.b-icon.b-icon-animation-throb, .b-icon.b-iconstack .b-icon-animation-throb > g {
  -webkit-transform-origin: center;
}
[dir] .b-icon.b-icon-animation-throb, [dir] .b-icon.b-iconstack .b-icon-animation-throb > g {
  transform-origin: center;
}
[dir=ltr] .b-icon.b-icon-animation-throb, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-throb > g {
  -webkit-animation: 0.75s infinite ease-in-out alternate b-icon-animation-throb;
  animation: 0.75s infinite ease-in-out alternate b-icon-animation-throb;
}
[dir=rtl] .b-icon.b-icon-animation-throb, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-throb > g {
  -webkit-animation: 0.75s infinite ease-in-out alternate b-icon-animation-throb;
  animation: 0.75s infinite ease-in-out alternate b-icon-animation-throb;
}
@media (prefers-reduced-motion: reduce) {
  [dir=ltr] .b-icon.b-icon-animation-throb, [dir=ltr] .b-icon.b-iconstack .b-icon-animation-throb > g {
    -webkit-animation: none;
    animation: none;
  }
  [dir=rtl] .b-icon.b-icon-animation-throb, [dir=rtl] .b-icon.b-iconstack .b-icon-animation-throb > g {
    -webkit-animation: none;
    animation: none;
  }
}

@-webkit-keyframes b-icon-animation-cylon-ltr {
  0% {
    transform: translateX(-25%);
  }
  100% {
    transform: translateX(25%);
  }
}

@-webkit-keyframes b-icon-animation-cylon-rtl {
  0% {
    transform: translateX(25%);
  }
  100% {
    transform: translateX(-25%);
  }
}

@keyframes b-icon-animation-cylon-ltr {
  0% {
    transform: translateX(-25%);
  }
  100% {
    transform: translateX(25%);
  }
}

@keyframes b-icon-animation-cylon-rtl {
  0% {
    transform: translateX(25%);
  }
  100% {
    transform: translateX(-25%);
  }
}
@-webkit-keyframes b-icon-animation-cylon-vertical {
  0% {
    transform: translateY(25%);
  }
  100% {
    transform: translateY(-25%);
  }
}
@keyframes b-icon-animation-cylon-vertical {
  0% {
    transform: translateY(25%);
  }
  100% {
    transform: translateY(-25%);
  }
}
@-webkit-keyframes b-icon-animation-fade {
  0% {
    opacity: 0.1;
  }
  100% {
    opacity: 1;
  }
}
@keyframes b-icon-animation-fade {
  0% {
    opacity: 0.1;
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes b-icon-animation-spin-ltr {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(359deg);
  }
}
@-webkit-keyframes b-icon-animation-spin-rtl {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(-359deg);
  }
}
@keyframes b-icon-animation-spin-ltr {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(359deg);
  }
}
@keyframes b-icon-animation-spin-rtl {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(-359deg);
  }
}
@-webkit-keyframes b-icon-animation-throb {
  0% {
    opacity: 0.5;
    transform: scale(0.5);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
@keyframes b-icon-animation-throb {
  0% {
    opacity: 0.5;
    transform: scale(0.5);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
.btn .b-icon.bi,
.nav-link .b-icon.bi,
.dropdown-toggle .b-icon.bi,
.dropdown-item .b-icon.bi,
.input-group-text .b-icon.bi {
  font-size: 125%;
  vertical-align: text-bottom;
}</style><style type="text/css">@use '@material/elevation/mixins' as mdc-elevation-mixins;.form-image-group{position:relative}.form-image-group .custom-control{margin:0;padding:0}.form-image-group .custom-control-inline .custom-control-input{position:absolute;z-index:-1;opacity:0}.form-image-group label{cursor:pointer;margin:0;padding:4px;border:1px solid #E9EDF2;border-radius:.25rem}.form-image-group label::before,.form-image-group label::after{display:none}.form-image-group :checked ~ label{padding:2px;border:3px solid #4AA2EE}.is-valid .form-image-group :checked ~ label{border-color:#77c13a}.is-invalid .form-image-group label{border-color:#d9534f}.app-settings-button{top:200px !important}#settings .form-image-group{flex-wrap:wrap !important}#settings .form-image-group:focus{outline:none}#settings .form-image-group .col{margin-left:0 !important}#settings .form-image-group .col:nth-child(even){margin-left:.5rem !important}#settings .form-image-group .col:nth-child(1n+3){margin-top:.5rem !important}#settings .form-image-group img{width:110px}
</style><style type="text/css">.app-settings-button[data-v-a69951d2]{position:fixed;top:100px}.app-settings-button--right[data-v-a69951d2]{right:0;border-top-right-radius:0;border-bottom-right-radius:0}.app-settings-button--left[data-v-a69951d2]{left:0;border-top-left-radius:0;border-bottom-left-radius:0}</style><style type="text/css">#settings .mdk-drawer__content{width:300px}#settings .mdk-drawer__scrim{background-color:rgba(56,59,61,.5)}#settings .col-form-label{font-size:.75rem;text-transform:uppercase;color:#b8bdc2;line-height:1rem;font-weight:500}</style></head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Analytics</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="assets/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="assets/vendor/spinkit.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/preloader.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">

        <!-- Dark Mode CSS (optional) -->
        <link type="text/css"
              href="assets/css/dark-mode.css"
              rel="stylesheet">
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>