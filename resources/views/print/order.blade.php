<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Halaman Print A4</title>
<style>
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        min-height: 297mm;
        padding: 20mm;
        margin: 5mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        
    }
    
    @page {
        size: A4;
        margin: 0;
        font-size: 10pt "Tahoma";
    }
    
</style>
<style>
    @charset "UTF-8";
/*
=========================================================
* Dash UI - Bootstrap 5 Admin & Dashboard Theme
=========================================================
* Product Page: https://codescandy.com/dashui/index.html
* Copyright 2020 Codescandy (https://codescandy.com/)
* Designed and coded by https://codescandy.com
========================================================= */
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap");
.filter-invert-white {
  -webkit-filter: brightness(0) invert(1);
  filter: brightness(0) invert(1);
}
.filter-invert-dark {
  -webkit-filter: brightness(0) invert(0);
  filter: brightness(0) invert(0);
}
.bg-gray-400 {
  background-color: #C4CDD5;
}
.smooth-shadow-sm {
  box-shadow: 0px 2px 4px rgba(0, 0, 20, 0.08), 0px 1px 2px rgba(0, 0, 20, 0.08) !important;
}
.smooth-shadow-md {
  box-shadow: 0 1px 2px rgba(21, 30, 40, 0.07), 0 2px 4px rgba(21, 30, 40, 0.07), 0 4px 8px rgba(21, 30, 40, 0.07), 0 8px 16px rgba(21, 30, 40, 0.07), 0 16px 32px rgba(21, 30, 40, 0.07), 0 32px 64px rgba(21, 30, 40, 0.07) !important;
}
.smooth-shadow-lg {
  box-shadow: 0 1px 1px rgba(21, 30, 40, 0.11), 0 2px 2px rgba(21, 30, 40, 0.11), 0 4px 4px rgba(21, 30, 40, 0.11), 0 8px 8px rgba(21, 30, 40, 0.11), 0 16px 16px rgba(21, 30, 40, 0.11), 0 32px 32px rgba(21, 30, 40, 0.11) !important;
}
.top-0 {
  top: 0;
}
.right-0 {
  right: 0;
}
.bottom-0 {
  bottom: 0;
}
.left-0 {
  left: 0;
}
.top-1 {
  top: 1;
}
.right-1 {
  right: 1;
}
.bottom-1 {
  bottom: 1;
}
.left-1 {
  left: 1;
}
.top-2 {
  top: 2;
}
.right-2 {
  right: 2;
}
.bottom-2 {
  bottom: 2;
}
.left-2 {
  left: 2;
}
.top-50 {
  top: 50%;
}
.right-50 {
  right: 50%;
}
.bottom-50 {
  bottom: 50%;
}
.left-50 {
  left: 50%;
}
.top-100 {
  top: 100%;
}
.right-100 {
  right: 100%;
}
.bottom-100 {
  bottom: 100%;
}
.left-100 {
  left: 100%;
}
.z-index-1030 {
  z-index: 1030;
}
.border-white-color-40 {
  border-color: rgba(233, 236, 239, 0.4) !important;
}
.border-dashed {
  border: 1px dashed #DFE3E8 !important;
}
.divider {
  display: flex;
  align-items: center;
}
.divider::after, .divider::before {
  flex: 1 1 0%;
  border-top: 0.0625rem solid #C4CDD5;
  content: "";
  margin-top: 0.0625rem;
}
.divider::before {
  margin-right: 1.5rem;
}
.divider::after {
  margin-left: 1.5rem;
}
.icon-xxs {
  width: 0.875rem;
  height: 0.875rem;
  line-height: 0.875rem;
}
.icon-xs {
  width: 1rem;
  height: 1rem;
  line-height: 1rem;
}
.icon-sm {
  width: 1.5rem;
  height: 1.5rem;
  line-height: 1.5rem;
}
.icon-md {
  width: 2.5rem;
  height: 2.5rem;
  line-height: 2.5rem;
}
.icon-lg {
  width: 3rem;
  height: 3rem;
  line-height: 3rem;
}
.icon-xl {
  width: 3.5rem;
  height: 3.5rem;
  line-height: 3.5rem;
}
.icon-xxl {
  width: 4rem;
  height: 4rem;
  line-height: 4rem;
}
.icon-shape {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  vertical-align: middle;
}
h1,
h2,
h3,
h4,
.h1,
.h2,
.h3,
.h4 {
  letter-spacing: -0.02rem;
}
.text-inherit {
  color: #161C24;
}
.text-primary-hover:hover {
  color: #624BFF !important;
}
/*!
 * Bootstrap v5.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
:root {
  --bs-blue: #0d6efd;
  --bs-indigo: #6610f2;
  --bs-purple: #6f42c1;
  --bs-pink: #d63384;
  --bs-red: #dc3545;
  --bs-orange: #fd7e14;
  --bs-yellow: #ffc107;
  --bs-green: #198754;
  --bs-teal: #20c997;
  --bs-cyan: #0dcaf0;
  --bs-white: #fff;
  --bs-gray: #637381;
  --bs-gray-dark: #212B36;
  --bs-gray-100: #F9FAFB;
  --bs-gray-200: #F4F6F8;
  --bs-gray-300: #DFE3E8;
  --bs-gray-400: #C4CDD5;
  --bs-gray-500: #919EAB;
  --bs-gray-600: #637381;
  --bs-gray-700: #454F5B;
  --bs-gray-800: #212B36;
  --bs-gray-900: #161C24;
  --bs-primary: #624BFF;
  --bs-secondary: #637381;
  --bs-success: #198754;
  --bs-info: #0dcaf0;
  --bs-warning: #ffc107;
  --bs-danger: #dc3545;
  --bs-light: #F9FAFB;
  --bs-dark: #212B36;
  --bs-white: #fff;
  --bs-light-primary: #E0DCFE;
  --bs-light-danger: #FBEBEC;
  --bs-light-info: #E7FAFE;
  --bs-light-warning: #FFF3CD;
  --bs-light-secondary: #e9ecef;
  --bs-light-success: #EAF6EC;
  --bs-light-dark: #d1cfd8;
  --bs-dark-primary: #593cc1;
  --bs-dark-warning: #c28135;
  --bs-dark-info: #51a0c2;
  --bs-dark-danger: #ae302e;
  --bs-dark-success: #139a74;
  --bs-dark-secondary: #5c596d;
  --bs-primary-rgb: 98, 75, 255;
  --bs-secondary-rgb: 99, 115, 129;
  --bs-success-rgb: 25, 135, 84;
  --bs-info-rgb: 13, 202, 240;
  --bs-warning-rgb: 255, 193, 7;
  --bs-danger-rgb: 220, 53, 69;
  --bs-light-rgb: 249, 250, 251;
  --bs-dark-rgb: 33, 43, 54;
  --bs-white-rgb: 255, 255, 255;
  --bs-light-primary-rgb: 224, 220, 254;
  --bs-light-danger-rgb: 251, 235, 236;
  --bs-light-info-rgb: 231, 250, 254;
  --bs-light-warning-rgb: 255, 243, 205;
  --bs-light-secondary-rgb: 233, 236, 239;
  --bs-light-success-rgb: 234, 246, 236;
  --bs-light-dark-rgb: 209, 207, 216;
  --bs-dark-primary-rgb: 89, 60, 193;
  --bs-dark-warning-rgb: 194, 129, 53;
  --bs-dark-info-rgb: 81, 160, 194;
  --bs-dark-danger-rgb: 174, 48, 46;
  --bs-dark-success-rgb: 19, 154, 116;
  --bs-dark-secondary-rgb: 92, 89, 109;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-body-color-rgb: 99, 115, 129;
  --bs-body-bg-rgb: 255, 255, 255;
  --bs-font-sans-serif: "Inter", "sans-serif";
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-body-font-family: Inter, sans-serif;
  --bs-body-font-size: 0.9375rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.5;
  --bs-body-color: #637381;
  --bs-body-bg: #fff;
}
*,
*::before,
*::after {
  box-sizing: border-box;
}
@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}
body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
hr {
  margin: 1rem 0;
  color: inherit;
  background-color: currentColor;
  border: 0;
  opacity: 0.25;
}
hr:not([size]) {
  height: 1px;
}
h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
  color: #212B36;
}
h1, .h1 {
  font-size: calc(1.35rem + 1.2vw);
}
@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2.25rem;
  }
}
h2, .h2 {
  font-size: calc(1.3125rem + 0.75vw);
}
@media (min-width: 1200px) {
  h2, .h2 {
    font-size: 1.875rem;
  }
}
h3, .h3 {
  font-size: calc(1.275rem + 0.3vw);
}
@media (min-width: 1200px) {
  h3, .h3 {
    font-size: 1.5rem;
  }
}
h4, .h4 {
  font-size: 1.125rem;
}
h5, .h5 {
  font-size: 0.938rem;
}
h6, .h6 {
  font-size: 0.75rem;
}
p {
  margin-top: 0;
  margin-bottom: 1rem;
}
abbr[title],
abbr[data-bs-original-title] {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
  cursor: help;
  -webkit-text-decoration-skip-ink: none;
          text-decoration-skip-ink: none;
}
address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}
ol,
ul {
  padding-left: 2rem;
}
ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}
ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}
dt {
  font-weight: 700;
}
dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}
blockquote {
  margin: 0 0 1rem;
}
b,
strong {
  font-weight: bolder;
}
small, .small {
  font-size: 0.875em;
}
mark, .mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}
sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}
sub {
  bottom: -0.25em;
}
sup {
  top: -0.5em;
}
a {
  color: #624BFF;
  text-decoration: none;
}
a:hover {
  color: #4e3ccc;
  text-decoration: none;
}
a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}
pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
  direction: ltr /* rtl:ignore */;
  unicode-bidi: bidi-override;
}
pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875em;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}
code {
  font-size: 0.875em;
  color: #d63384;
  word-wrap: break-word;
}
a > code {
  color: inherit;
}
kbd {
  padding: 0.2rem 0.4rem;
  font-size: 0.875em;
  color: #fff;
  background-color: #161C24;
  border-radius: 0.2rem;
}
kbd kbd {
  padding: 0;
  font-size: 1em;
  font-weight: 700;
}
figure {
  margin: 0 0 1rem;
}
img,
svg {
  vertical-align: middle;
}
table {
  caption-side: bottom;
  border-collapse: collapse;
}
caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #637381;
  text-align: left;
}
th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}
thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}
label {
  display: inline-block;
}
button {
  border-radius: 0;
}
button:focus:not(:focus-visible) {
  outline: 0;
}
input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
button,
select {
  text-transform: none;
}
[role=button] {
  cursor: pointer;
}
select {
  word-wrap: normal;
}
select:disabled {
  opacity: 1;
}
[list]::-webkit-calendar-picker-indicator {
  display: none;
}
button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}
button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}
::-moz-focus-inner {
  padding: 0;
  border-style: none;
}
textarea {
  resize: vertical;
}
fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}
legend + * {
  clear: left;
}
::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}
::-webkit-inner-spin-button {
  height: auto;
}
[type=search] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
}
/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}
::-webkit-color-swatch-wrapper {
  padding: 0;
}
::-webkit-file-upload-button {
  font: inherit;
}
::file-selector-button {
  font: inherit;
}
::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}
output {
  display: inline-block;
}
iframe {
  border: 0;
}
summary {
  display: list-item;
  cursor: pointer;
}
progress {
  vertical-align: baseline;
}
[hidden] {
  display: none !important;
}
.lead {
  font-size: 1.171875rem;
  font-weight: 300;
}
.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-1 {
    font-size: 5rem;
  }
}
.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-2 {
    font-size: 4.5rem;
  }
}
.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-3 {
    font-size: 4rem;
  }
}
.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-4 {
    font-size: 3.5rem;
  }
}
.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-5 {
    font-size: 3rem;
  }
}
.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-6 {
    font-size: 2.5rem;
  }
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
}
.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}
.initialism {
  font-size: 0.875em;
  text-transform: uppercase;
}
.blockquote {
  margin-bottom: 1rem;
  font-size: 1.171875rem;
}
.blockquote > :last-child {
  margin-bottom: 0;
}
.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.875em;
  color: #637381;
}
.blockquote-footer::before {
  content: "— ";
}
.img-fluid {
  max-width: 100%;
  height: auto;
}
.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #DFE3E8;
  border-radius: 0.375rem;
  max-width: 100%;
  height: auto;
}
.figure {
  display: inline-block;
}
.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}
.figure-caption {
  font-size: 0.875em;
  color: #637381;
}
.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  width: 100%;
  padding-right: var(--bs-gutter-x, 16px);
  padding-left: var(--bs-gutter-x, 16px);
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}
@media (min-width: 1400px) {
  .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1320px;
  }
}
.row {
  --bs-gutter-x: 32px;
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-0.5 * var(--bs-gutter-x));
  margin-left: calc(-0.5 * var(--bs-gutter-x));
}
.row > * {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-top: var(--bs-gutter-y);
}
.col {
  flex: 1 0 0%;
}
.row-cols-auto > * {
  flex: 0 0 auto;
  width: auto;
}
.row-cols-1 > * {
  flex: 0 0 auto;
  width: 100%;
}
.row-cols-2 > * {
  flex: 0 0 auto;
  width: 50%;
}
.row-cols-3 > * {
  flex: 0 0 auto;
  width: 33.3333333333%;
}
.row-cols-4 > * {
  flex: 0 0 auto;
  width: 25%;
}
.row-cols-5 > * {
  flex: 0 0 auto;
  width: 20%;
}
.row-cols-6 > * {
  flex: 0 0 auto;
  width: 16.6666666667%;
}
.col-auto {
  flex: 0 0 auto;
  width: auto;
}
.col-1 {
  flex: 0 0 auto;
  width: 8.33333333%;
}
.col-2 {
  flex: 0 0 auto;
  width: 16.66666667%;
}
.col-3 {
  flex: 0 0 auto;
  width: 25%;
}
.col-4 {
  flex: 0 0 auto;
  width: 33.33333333%;
}
.col-5 {
  flex: 0 0 auto;
  width: 41.66666667%;
}
.col-6 {
  flex: 0 0 auto;
  width: 50%;
}
.col-7 {
  flex: 0 0 auto;
  width: 58.33333333%;
}
.col-8 {
  flex: 0 0 auto;
  width: 66.66666667%;
}
.col-9 {
  flex: 0 0 auto;
  width: 75%;
}
.col-10 {
  flex: 0 0 auto;
  width: 83.33333333%;
}
.col-11 {
  flex: 0 0 auto;
  width: 91.66666667%;
}
.col-12 {
  flex: 0 0 auto;
  width: 100%;
}
.offset-1 {
  margin-left: 8.33333333%;
}
.offset-2 {
  margin-left: 16.66666667%;
}
.offset-3 {
  margin-left: 25%;
}
.offset-4 {
  margin-left: 33.33333333%;
}
.offset-5 {
  margin-left: 41.66666667%;
}
.offset-6 {
  margin-left: 50%;
}
.offset-7 {
  margin-left: 58.33333333%;
}
.offset-8 {
  margin-left: 66.66666667%;
}
.offset-9 {
  margin-left: 75%;
}
.offset-10 {
  margin-left: 83.33333333%;
}
.offset-11 {
  margin-left: 91.66666667%;
}
.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}
.g-0,
.gy-0 {
  --bs-gutter-y: 0;
}
.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem;
}
.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem;
}
.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem;
}
.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem;
}
.g-3,
.gx-3 {
  --bs-gutter-x: 1rem;
}
.g-3,
.gy-3 {
  --bs-gutter-y: 1rem;
}
.g-4,
.gx-4 {
  --bs-gutter-x: 1.25rem;
}
.g-4,
.gy-4 {
  --bs-gutter-y: 1.25rem;
}
.g-5,
.gx-5 {
  --bs-gutter-x: 1.5rem;
}
.g-5,
.gy-5 {
  --bs-gutter-y: 1.5rem;
}
.g-6,
.gx-6 {
  --bs-gutter-x: 2rem;
}
.g-6,
.gy-6 {
  --bs-gutter-y: 2rem;
}
.g-7,
.gx-7 {
  --bs-gutter-x: 2.5rem;
}
.g-7,
.gy-7 {
  --bs-gutter-y: 2.5rem;
}
.g-8,
.gx-8 {
  --bs-gutter-x: 3rem;
}
.g-8,
.gy-8 {
  --bs-gutter-y: 3rem;
}
.g-9,
.gx-9 {
  --bs-gutter-x: 3.5rem;
}
.g-9,
.gy-9 {
  --bs-gutter-y: 3.5rem;
}
.g-10,
.gx-10 {
  --bs-gutter-x: 4rem;
}
.g-10,
.gy-10 {
  --bs-gutter-y: 4rem;
}
.g-11,
.gx-11 {
  --bs-gutter-x: 4.5rem;
}
.g-11,
.gy-11 {
  --bs-gutter-y: 4.5rem;
}
.g-12,
.gx-12 {
  --bs-gutter-x: 5rem;
}
.g-12,
.gy-12 {
  --bs-gutter-y: 5rem;
}
.g-13,
.gx-13 {
  --bs-gutter-x: 5.5rem;
}
.g-13,
.gy-13 {
  --bs-gutter-y: 5.5rem;
}
.g-14,
.gx-14 {
  --bs-gutter-x: 6rem;
}
.g-14,
.gy-14 {
  --bs-gutter-y: 6rem;
}
.g-15,
.gx-15 {
  --bs-gutter-x: 6.5rem;
}
.g-15,
.gy-15 {
  --bs-gutter-y: 6.5rem;
}
.g-16,
.gx-16 {
  --bs-gutter-x: 7rem;
}
.g-16,
.gy-16 {
  --bs-gutter-y: 7rem;
}
.g-17,
.gx-17 {
  --bs-gutter-x: 7.5rem;
}
.g-17,
.gy-17 {
  --bs-gutter-y: 7.5rem;
}
.g-18,
.gx-18 {
  --bs-gutter-x: 8rem;
}
.g-18,
.gy-18 {
  --bs-gutter-y: 8rem;
}
.g-19,
.gx-19 {
  --bs-gutter-x: 8.5rem;
}
.g-19,
.gy-19 {
  --bs-gutter-y: 8.5rem;
}
.g-20,
.gx-20 {
  --bs-gutter-x: 9rem;
}
.g-20,
.gy-20 {
  --bs-gutter-y: 9rem;
}
.g-21,
.gx-21 {
  --bs-gutter-x: 9.5rem;
}
.g-21,
.gy-21 {
  --bs-gutter-y: 9.5rem;
}
.g-22,
.gx-22 {
  --bs-gutter-x: 10rem;
}
.g-22,
.gy-22 {
  --bs-gutter-y: 10rem;
}
.g-23,
.gx-23 {
  --bs-gutter-x: 12rem;
}
.g-23,
.gy-23 {
  --bs-gutter-y: 12rem;
}
@media (min-width: 576px) {
  .col-sm {
    flex: 1 0 0%;
  }
  .row-cols-sm-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-sm-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-sm-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-sm-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-sm-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-sm-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-sm-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-sm-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-sm-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-sm-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333333%;
  }
  .offset-sm-2 {
    margin-left: 16.66666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333333%;
  }
  .offset-sm-5 {
    margin-left: 41.66666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333333%;
  }
  .offset-sm-8 {
    margin-left: 66.66666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333333%;
  }
  .offset-sm-11 {
    margin-left: 91.66666667%;
  }
  .g-sm-0,
.gx-sm-0 {
    --bs-gutter-x: 0;
  }
  .g-sm-0,
.gy-sm-0 {
    --bs-gutter-y: 0;
  }
  .g-sm-1,
.gx-sm-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-sm-1,
.gy-sm-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-sm-2,
.gx-sm-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-sm-2,
.gy-sm-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-sm-3,
.gx-sm-3 {
    --bs-gutter-x: 1rem;
  }
  .g-sm-3,
.gy-sm-3 {
    --bs-gutter-y: 1rem;
  }
  .g-sm-4,
.gx-sm-4 {
    --bs-gutter-x: 1.25rem;
  }
  .g-sm-4,
.gy-sm-4 {
    --bs-gutter-y: 1.25rem;
  }
  .g-sm-5,
.gx-sm-5 {
    --bs-gutter-x: 1.5rem;
  }
  .g-sm-5,
.gy-sm-5 {
    --bs-gutter-y: 1.5rem;
  }
  .g-sm-6,
.gx-sm-6 {
    --bs-gutter-x: 2rem;
  }
  .g-sm-6,
.gy-sm-6 {
    --bs-gutter-y: 2rem;
  }
  .g-sm-7,
.gx-sm-7 {
    --bs-gutter-x: 2.5rem;
  }
  .g-sm-7,
.gy-sm-7 {
    --bs-gutter-y: 2.5rem;
  }
  .g-sm-8,
.gx-sm-8 {
    --bs-gutter-x: 3rem;
  }
  .g-sm-8,
.gy-sm-8 {
    --bs-gutter-y: 3rem;
  }
  .g-sm-9,
.gx-sm-9 {
    --bs-gutter-x: 3.5rem;
  }
  .g-sm-9,
.gy-sm-9 {
    --bs-gutter-y: 3.5rem;
  }
  .g-sm-10,
.gx-sm-10 {
    --bs-gutter-x: 4rem;
  }
  .g-sm-10,
.gy-sm-10 {
    --bs-gutter-y: 4rem;
  }
  .g-sm-11,
.gx-sm-11 {
    --bs-gutter-x: 4.5rem;
  }
  .g-sm-11,
.gy-sm-11 {
    --bs-gutter-y: 4.5rem;
  }
  .g-sm-12,
.gx-sm-12 {
    --bs-gutter-x: 5rem;
  }
  .g-sm-12,
.gy-sm-12 {
    --bs-gutter-y: 5rem;
  }
  .g-sm-13,
.gx-sm-13 {
    --bs-gutter-x: 5.5rem;
  }
  .g-sm-13,
.gy-sm-13 {
    --bs-gutter-y: 5.5rem;
  }
  .g-sm-14,
.gx-sm-14 {
    --bs-gutter-x: 6rem;
  }
  .g-sm-14,
.gy-sm-14 {
    --bs-gutter-y: 6rem;
  }
  .g-sm-15,
.gx-sm-15 {
    --bs-gutter-x: 6.5rem;
  }
  .g-sm-15,
.gy-sm-15 {
    --bs-gutter-y: 6.5rem;
  }
  .g-sm-16,
.gx-sm-16 {
    --bs-gutter-x: 7rem;
  }
  .g-sm-16,
.gy-sm-16 {
    --bs-gutter-y: 7rem;
  }
  .g-sm-17,
.gx-sm-17 {
    --bs-gutter-x: 7.5rem;
  }
  .g-sm-17,
.gy-sm-17 {
    --bs-gutter-y: 7.5rem;
  }
  .g-sm-18,
.gx-sm-18 {
    --bs-gutter-x: 8rem;
  }
  .g-sm-18,
.gy-sm-18 {
    --bs-gutter-y: 8rem;
  }
  .g-sm-19,
.gx-sm-19 {
    --bs-gutter-x: 8.5rem;
  }
  .g-sm-19,
.gy-sm-19 {
    --bs-gutter-y: 8.5rem;
  }
  .g-sm-20,
.gx-sm-20 {
    --bs-gutter-x: 9rem;
  }
  .g-sm-20,
.gy-sm-20 {
    --bs-gutter-y: 9rem;
  }
  .g-sm-21,
.gx-sm-21 {
    --bs-gutter-x: 9.5rem;
  }
  .g-sm-21,
.gy-sm-21 {
    --bs-gutter-y: 9.5rem;
  }
  .g-sm-22,
.gx-sm-22 {
    --bs-gutter-x: 10rem;
  }
  .g-sm-22,
.gy-sm-22 {
    --bs-gutter-y: 10rem;
  }
  .g-sm-23,
.gx-sm-23 {
    --bs-gutter-x: 12rem;
  }
  .g-sm-23,
.gy-sm-23 {
    --bs-gutter-y: 12rem;
  }
}
@media (min-width: 768px) {
  .col-md {
    flex: 1 0 0%;
  }
  .row-cols-md-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-md-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-md-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-md-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-md-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-md-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-md-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-md-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-md-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-md-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-md-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-md-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-md-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-md-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-md-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-md-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-md-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-md-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-md-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333333%;
  }
  .offset-md-2 {
    margin-left: 16.66666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333333%;
  }
  .offset-md-5 {
    margin-left: 41.66666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333333%;
  }
  .offset-md-8 {
    margin-left: 66.66666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333333%;
  }
  .offset-md-11 {
    margin-left: 91.66666667%;
  }
  .g-md-0,
.gx-md-0 {
    --bs-gutter-x: 0;
  }
  .g-md-0,
.gy-md-0 {
    --bs-gutter-y: 0;
  }
  .g-md-1,
.gx-md-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-md-1,
.gy-md-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-md-2,
.gx-md-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-md-2,
.gy-md-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-md-3,
.gx-md-3 {
    --bs-gutter-x: 1rem;
  }
  .g-md-3,
.gy-md-3 {
    --bs-gutter-y: 1rem;
  }
  .g-md-4,
.gx-md-4 {
    --bs-gutter-x: 1.25rem;
  }
  .g-md-4,
.gy-md-4 {
    --bs-gutter-y: 1.25rem;
  }
  .g-md-5,
.gx-md-5 {
    --bs-gutter-x: 1.5rem;
  }
  .g-md-5,
.gy-md-5 {
    --bs-gutter-y: 1.5rem;
  }
  .g-md-6,
.gx-md-6 {
    --bs-gutter-x: 2rem;
  }
  .g-md-6,
.gy-md-6 {
    --bs-gutter-y: 2rem;
  }
  .g-md-7,
.gx-md-7 {
    --bs-gutter-x: 2.5rem;
  }
  .g-md-7,
.gy-md-7 {
    --bs-gutter-y: 2.5rem;
  }
  .g-md-8,
.gx-md-8 {
    --bs-gutter-x: 3rem;
  }
  .g-md-8,
.gy-md-8 {
    --bs-gutter-y: 3rem;
  }
  .g-md-9,
.gx-md-9 {
    --bs-gutter-x: 3.5rem;
  }
  .g-md-9,
.gy-md-9 {
    --bs-gutter-y: 3.5rem;
  }
  .g-md-10,
.gx-md-10 {
    --bs-gutter-x: 4rem;
  }
  .g-md-10,
.gy-md-10 {
    --bs-gutter-y: 4rem;
  }
  .g-md-11,
.gx-md-11 {
    --bs-gutter-x: 4.5rem;
  }
  .g-md-11,
.gy-md-11 {
    --bs-gutter-y: 4.5rem;
  }
  .g-md-12,
.gx-md-12 {
    --bs-gutter-x: 5rem;
  }
  .g-md-12,
.gy-md-12 {
    --bs-gutter-y: 5rem;
  }
  .g-md-13,
.gx-md-13 {
    --bs-gutter-x: 5.5rem;
  }
  .g-md-13,
.gy-md-13 {
    --bs-gutter-y: 5.5rem;
  }
  .g-md-14,
.gx-md-14 {
    --bs-gutter-x: 6rem;
  }
  .g-md-14,
.gy-md-14 {
    --bs-gutter-y: 6rem;
  }
  .g-md-15,
.gx-md-15 {
    --bs-gutter-x: 6.5rem;
  }
  .g-md-15,
.gy-md-15 {
    --bs-gutter-y: 6.5rem;
  }
  .g-md-16,
.gx-md-16 {
    --bs-gutter-x: 7rem;
  }
  .g-md-16,
.gy-md-16 {
    --bs-gutter-y: 7rem;
  }
  .g-md-17,
.gx-md-17 {
    --bs-gutter-x: 7.5rem;
  }
  .g-md-17,
.gy-md-17 {
    --bs-gutter-y: 7.5rem;
  }
  .g-md-18,
.gx-md-18 {
    --bs-gutter-x: 8rem;
  }
  .g-md-18,
.gy-md-18 {
    --bs-gutter-y: 8rem;
  }
  .g-md-19,
.gx-md-19 {
    --bs-gutter-x: 8.5rem;
  }
  .g-md-19,
.gy-md-19 {
    --bs-gutter-y: 8.5rem;
  }
  .g-md-20,
.gx-md-20 {
    --bs-gutter-x: 9rem;
  }
  .g-md-20,
.gy-md-20 {
    --bs-gutter-y: 9rem;
  }
  .g-md-21,
.gx-md-21 {
    --bs-gutter-x: 9.5rem;
  }
  .g-md-21,
.gy-md-21 {
    --bs-gutter-y: 9.5rem;
  }
  .g-md-22,
.gx-md-22 {
    --bs-gutter-x: 10rem;
  }
  .g-md-22,
.gy-md-22 {
    --bs-gutter-y: 10rem;
  }
  .g-md-23,
.gx-md-23 {
    --bs-gutter-x: 12rem;
  }
  .g-md-23,
.gy-md-23 {
    --bs-gutter-y: 12rem;
  }
}
@media (min-width: 992px) {
  .col-lg {
    flex: 1 0 0%;
  }
  .row-cols-lg-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-lg-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-lg-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-lg-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-lg-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-lg-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-lg-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-lg-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-lg-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-lg-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-lg-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-lg-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-lg-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-lg-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-lg-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333333%;
  }
  .offset-lg-2 {
    margin-left: 16.66666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333333%;
  }
  .offset-lg-5 {
    margin-left: 41.66666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333333%;
  }
  .offset-lg-8 {
    margin-left: 66.66666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333333%;
  }
  .offset-lg-11 {
    margin-left: 91.66666667%;
  }
  .g-lg-0,
.gx-lg-0 {
    --bs-gutter-x: 0;
  }
  .g-lg-0,
.gy-lg-0 {
    --bs-gutter-y: 0;
  }
  .g-lg-1,
.gx-lg-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-lg-1,
.gy-lg-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-lg-2,
.gx-lg-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-lg-2,
.gy-lg-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-lg-3,
.gx-lg-3 {
    --bs-gutter-x: 1rem;
  }
  .g-lg-3,
.gy-lg-3 {
    --bs-gutter-y: 1rem;
  }
  .g-lg-4,
.gx-lg-4 {
    --bs-gutter-x: 1.25rem;
  }
  .g-lg-4,
.gy-lg-4 {
    --bs-gutter-y: 1.25rem;
  }
  .g-lg-5,
.gx-lg-5 {
    --bs-gutter-x: 1.5rem;
  }
  .g-lg-5,
.gy-lg-5 {
    --bs-gutter-y: 1.5rem;
  }
  .g-lg-6,
.gx-lg-6 {
    --bs-gutter-x: 2rem;
  }
  .g-lg-6,
.gy-lg-6 {
    --bs-gutter-y: 2rem;
  }
  .g-lg-7,
.gx-lg-7 {
    --bs-gutter-x: 2.5rem;
  }
  .g-lg-7,
.gy-lg-7 {
    --bs-gutter-y: 2.5rem;
  }
  .g-lg-8,
.gx-lg-8 {
    --bs-gutter-x: 3rem;
  }
  .g-lg-8,
.gy-lg-8 {
    --bs-gutter-y: 3rem;
  }
  .g-lg-9,
.gx-lg-9 {
    --bs-gutter-x: 3.5rem;
  }
  .g-lg-9,
.gy-lg-9 {
    --bs-gutter-y: 3.5rem;
  }
  .g-lg-10,
.gx-lg-10 {
    --bs-gutter-x: 4rem;
  }
  .g-lg-10,
.gy-lg-10 {
    --bs-gutter-y: 4rem;
  }
  .g-lg-11,
.gx-lg-11 {
    --bs-gutter-x: 4.5rem;
  }
  .g-lg-11,
.gy-lg-11 {
    --bs-gutter-y: 4.5rem;
  }
  .g-lg-12,
.gx-lg-12 {
    --bs-gutter-x: 5rem;
  }
  .g-lg-12,
.gy-lg-12 {
    --bs-gutter-y: 5rem;
  }
  .g-lg-13,
.gx-lg-13 {
    --bs-gutter-x: 5.5rem;
  }
  .g-lg-13,
.gy-lg-13 {
    --bs-gutter-y: 5.5rem;
  }
  .g-lg-14,
.gx-lg-14 {
    --bs-gutter-x: 6rem;
  }
  .g-lg-14,
.gy-lg-14 {
    --bs-gutter-y: 6rem;
  }
  .g-lg-15,
.gx-lg-15 {
    --bs-gutter-x: 6.5rem;
  }
  .g-lg-15,
.gy-lg-15 {
    --bs-gutter-y: 6.5rem;
  }
  .g-lg-16,
.gx-lg-16 {
    --bs-gutter-x: 7rem;
  }
  .g-lg-16,
.gy-lg-16 {
    --bs-gutter-y: 7rem;
  }
  .g-lg-17,
.gx-lg-17 {
    --bs-gutter-x: 7.5rem;
  }
  .g-lg-17,
.gy-lg-17 {
    --bs-gutter-y: 7.5rem;
  }
  .g-lg-18,
.gx-lg-18 {
    --bs-gutter-x: 8rem;
  }
  .g-lg-18,
.gy-lg-18 {
    --bs-gutter-y: 8rem;
  }
  .g-lg-19,
.gx-lg-19 {
    --bs-gutter-x: 8.5rem;
  }
  .g-lg-19,
.gy-lg-19 {
    --bs-gutter-y: 8.5rem;
  }
  .g-lg-20,
.gx-lg-20 {
    --bs-gutter-x: 9rem;
  }
  .g-lg-20,
.gy-lg-20 {
    --bs-gutter-y: 9rem;
  }
  .g-lg-21,
.gx-lg-21 {
    --bs-gutter-x: 9.5rem;
  }
  .g-lg-21,
.gy-lg-21 {
    --bs-gutter-y: 9.5rem;
  }
  .g-lg-22,
.gx-lg-22 {
    --bs-gutter-x: 10rem;
  }
  .g-lg-22,
.gy-lg-22 {
    --bs-gutter-y: 10rem;
  }
  .g-lg-23,
.gx-lg-23 {
    --bs-gutter-x: 12rem;
  }
  .g-lg-23,
.gy-lg-23 {
    --bs-gutter-y: 12rem;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    flex: 1 0 0%;
  }
  .row-cols-xl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xl-11 {
    margin-left: 91.66666667%;
  }
  .g-xl-0,
.gx-xl-0 {
    --bs-gutter-x: 0;
  }
  .g-xl-0,
.gy-xl-0 {
    --bs-gutter-y: 0;
  }
  .g-xl-1,
.gx-xl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xl-1,
.gy-xl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xl-2,
.gx-xl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xl-2,
.gy-xl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xl-3,
.gx-xl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xl-3,
.gy-xl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xl-4,
.gx-xl-4 {
    --bs-gutter-x: 1.25rem;
  }
  .g-xl-4,
.gy-xl-4 {
    --bs-gutter-y: 1.25rem;
  }
  .g-xl-5,
.gx-xl-5 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xl-5,
.gy-xl-5 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xl-6,
.gx-xl-6 {
    --bs-gutter-x: 2rem;
  }
  .g-xl-6,
.gy-xl-6 {
    --bs-gutter-y: 2rem;
  }
  .g-xl-7,
.gx-xl-7 {
    --bs-gutter-x: 2.5rem;
  }
  .g-xl-7,
.gy-xl-7 {
    --bs-gutter-y: 2.5rem;
  }
  .g-xl-8,
.gx-xl-8 {
    --bs-gutter-x: 3rem;
  }
  .g-xl-8,
.gy-xl-8 {
    --bs-gutter-y: 3rem;
  }
  .g-xl-9,
.gx-xl-9 {
    --bs-gutter-x: 3.5rem;
  }
  .g-xl-9,
.gy-xl-9 {
    --bs-gutter-y: 3.5rem;
  }
  .g-xl-10,
.gx-xl-10 {
    --bs-gutter-x: 4rem;
  }
  .g-xl-10,
.gy-xl-10 {
    --bs-gutter-y: 4rem;
  }
  .g-xl-11,
.gx-xl-11 {
    --bs-gutter-x: 4.5rem;
  }
  .g-xl-11,
.gy-xl-11 {
    --bs-gutter-y: 4.5rem;
  }
  .g-xl-12,
.gx-xl-12 {
    --bs-gutter-x: 5rem;
  }
  .g-xl-12,
.gy-xl-12 {
    --bs-gutter-y: 5rem;
  }
  .g-xl-13,
.gx-xl-13 {
    --bs-gutter-x: 5.5rem;
  }
  .g-xl-13,
.gy-xl-13 {
    --bs-gutter-y: 5.5rem;
  }
  .g-xl-14,
.gx-xl-14 {
    --bs-gutter-x: 6rem;
  }
  .g-xl-14,
.gy-xl-14 {
    --bs-gutter-y: 6rem;
  }
  .g-xl-15,
.gx-xl-15 {
    --bs-gutter-x: 6.5rem;
  }
  .g-xl-15,
.gy-xl-15 {
    --bs-gutter-y: 6.5rem;
  }
  .g-xl-16,
.gx-xl-16 {
    --bs-gutter-x: 7rem;
  }
  .g-xl-16,
.gy-xl-16 {
    --bs-gutter-y: 7rem;
  }
  .g-xl-17,
.gx-xl-17 {
    --bs-gutter-x: 7.5rem;
  }
  .g-xl-17,
.gy-xl-17 {
    --bs-gutter-y: 7.5rem;
  }
  .g-xl-18,
.gx-xl-18 {
    --bs-gutter-x: 8rem;
  }
  .g-xl-18,
.gy-xl-18 {
    --bs-gutter-y: 8rem;
  }
  .g-xl-19,
.gx-xl-19 {
    --bs-gutter-x: 8.5rem;
  }
  .g-xl-19,
.gy-xl-19 {
    --bs-gutter-y: 8.5rem;
  }
  .g-xl-20,
.gx-xl-20 {
    --bs-gutter-x: 9rem;
  }
  .g-xl-20,
.gy-xl-20 {
    --bs-gutter-y: 9rem;
  }
  .g-xl-21,
.gx-xl-21 {
    --bs-gutter-x: 9.5rem;
  }
  .g-xl-21,
.gy-xl-21 {
    --bs-gutter-y: 9.5rem;
  }
  .g-xl-22,
.gx-xl-22 {
    --bs-gutter-x: 10rem;
  }
  .g-xl-22,
.gy-xl-22 {
    --bs-gutter-y: 10rem;
  }
  .g-xl-23,
.gx-xl-23 {
    --bs-gutter-x: 12rem;
  }
  .g-xl-23,
.gy-xl-23 {
    --bs-gutter-y: 12rem;
  }
}
@media (min-width: 1400px) {
  .col-xxl {
    flex: 1 0 0%;
  }
  .row-cols-xxl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xxl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xxl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xxl-3 > * {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xxl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xxl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xxl-6 > * {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xxl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xxl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xxl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xxl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xxl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xxl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xxl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xxl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xxl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xxl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xxl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xxl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xxl-0 {
    margin-left: 0;
  }
  .offset-xxl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xxl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xxl-3 {
    margin-left: 25%;
  }
  .offset-xxl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xxl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xxl-6 {
    margin-left: 50%;
  }
  .offset-xxl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xxl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xxl-9 {
    margin-left: 75%;
  }
  .offset-xxl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xxl-11 {
    margin-left: 91.66666667%;
  }
  .g-xxl-0,
.gx-xxl-0 {
    --bs-gutter-x: 0;
  }
  .g-xxl-0,
.gy-xxl-0 {
    --bs-gutter-y: 0;
  }
  .g-xxl-1,
.gx-xxl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xxl-1,
.gy-xxl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xxl-2,
.gx-xxl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xxl-2,
.gy-xxl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xxl-3,
.gx-xxl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xxl-3,
.gy-xxl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xxl-4,
.gx-xxl-4 {
    --bs-gutter-x: 1.25rem;
  }
  .g-xxl-4,
.gy-xxl-4 {
    --bs-gutter-y: 1.25rem;
  }
  .g-xxl-5,
.gx-xxl-5 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xxl-5,
.gy-xxl-5 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xxl-6,
.gx-xxl-6 {
    --bs-gutter-x: 2rem;
  }
  .g-xxl-6,
.gy-xxl-6 {
    --bs-gutter-y: 2rem;
  }
  .g-xxl-7,
.gx-xxl-7 {
    --bs-gutter-x: 2.5rem;
  }
  .g-xxl-7,
.gy-xxl-7 {
    --bs-gutter-y: 2.5rem;
  }
  .g-xxl-8,
.gx-xxl-8 {
    --bs-gutter-x: 3rem;
  }
  .g-xxl-8,
.gy-xxl-8 {
    --bs-gutter-y: 3rem;
  }
  .g-xxl-9,
.gx-xxl-9 {
    --bs-gutter-x: 3.5rem;
  }
  .g-xxl-9,
.gy-xxl-9 {
    --bs-gutter-y: 3.5rem;
  }
  .g-xxl-10,
.gx-xxl-10 {
    --bs-gutter-x: 4rem;
  }
  .g-xxl-10,
.gy-xxl-10 {
    --bs-gutter-y: 4rem;
  }
  .g-xxl-11,
.gx-xxl-11 {
    --bs-gutter-x: 4.5rem;
  }
  .g-xxl-11,
.gy-xxl-11 {
    --bs-gutter-y: 4.5rem;
  }
  .g-xxl-12,
.gx-xxl-12 {
    --bs-gutter-x: 5rem;
  }
  .g-xxl-12,
.gy-xxl-12 {
    --bs-gutter-y: 5rem;
  }
  .g-xxl-13,
.gx-xxl-13 {
    --bs-gutter-x: 5.5rem;
  }
  .g-xxl-13,
.gy-xxl-13 {
    --bs-gutter-y: 5.5rem;
  }
  .g-xxl-14,
.gx-xxl-14 {
    --bs-gutter-x: 6rem;
  }
  .g-xxl-14,
.gy-xxl-14 {
    --bs-gutter-y: 6rem;
  }
  .g-xxl-15,
.gx-xxl-15 {
    --bs-gutter-x: 6.5rem;
  }
  .g-xxl-15,
.gy-xxl-15 {
    --bs-gutter-y: 6.5rem;
  }
  .g-xxl-16,
.gx-xxl-16 {
    --bs-gutter-x: 7rem;
  }
  .g-xxl-16,
.gy-xxl-16 {
    --bs-gutter-y: 7rem;
  }
  .g-xxl-17,
.gx-xxl-17 {
    --bs-gutter-x: 7.5rem;
  }
  .g-xxl-17,
.gy-xxl-17 {
    --bs-gutter-y: 7.5rem;
  }
  .g-xxl-18,
.gx-xxl-18 {
    --bs-gutter-x: 8rem;
  }
  .g-xxl-18,
.gy-xxl-18 {
    --bs-gutter-y: 8rem;
  }
  .g-xxl-19,
.gx-xxl-19 {
    --bs-gutter-x: 8.5rem;
  }
  .g-xxl-19,
.gy-xxl-19 {
    --bs-gutter-y: 8.5rem;
  }
  .g-xxl-20,
.gx-xxl-20 {
    --bs-gutter-x: 9rem;
  }
  .g-xxl-20,
.gy-xxl-20 {
    --bs-gutter-y: 9rem;
  }
  .g-xxl-21,
.gx-xxl-21 {
    --bs-gutter-x: 9.5rem;
  }
  .g-xxl-21,
.gy-xxl-21 {
    --bs-gutter-y: 9.5rem;
  }
  .g-xxl-22,
.gx-xxl-22 {
    --bs-gutter-x: 10rem;
  }
  .g-xxl-22,
.gy-xxl-22 {
    --bs-gutter-y: 10rem;
  }
  .g-xxl-23,
.gx-xxl-23 {
    --bs-gutter-x: 12rem;
  }
  .g-xxl-23,
.gy-xxl-23 {
    --bs-gutter-y: 12rem;
  }
}
.table {
  --bs-table-bg: transparent;
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: #637381;
  --bs-table-striped-bg: #f9fafb;
  --bs-table-active-color: #637381;
  --bs-table-active-bg: #f9fafb;
  --bs-table-hover-color: #637381;
  --bs-table-hover-bg: rgba(249, 250, 251, 0.7);
  width: 100%;
  margin-bottom: 1rem;
  color: #637381;
  vertical-align: top;
  border-color: #DFE3E8;
}
.table > :not(caption) > * > * {
  padding: 0.75rem 1.5rem;
  background-color: var(--bs-table-bg);
  border-bottom-width: 1px;
  box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}
.table > tbody {
  vertical-align: inherit;
}
.table > thead {
  vertical-align: bottom;
}
.table > :not(:first-child) {
  border-top: 2px solid #F4F6F8;
}
.caption-top {
  caption-side: top;
}
.table-sm > :not(caption) > * > * {
  padding: 0.3rem 0.6rem;
}
.table-bordered > :not(caption) > * {
  border-width: 1px 0;
}
.table-bordered > :not(caption) > * > * {
  border-width: 0 1px;
}
.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0;
}
.table-borderless > :not(:first-child) {
  border-top-width: 0;
}
.table-striped > tbody > tr:nth-of-type(odd) > * {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color);
}
.table-active {
  --bs-table-accent-bg: var(--bs-table-active-bg);
  color: var(--bs-table-active-color);
}
.table-hover > tbody > tr:hover > * {
  --bs-table-accent-bg: var(--bs-table-hover-bg);
  color: var(--bs-table-hover-color);
}
.table-primary {
  --bs-table-bg: #e0dbff;
  --bs-table-striped-bg: black;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: black;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #cfcbec;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #cac5e6;
}
.table-secondary {
  --bs-table-bg: #e0e3e6;
  --bs-table-striped-bg: black;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: black;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #cfd2d5;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #cacccf;
}
.table-success {
  --bs-table-bg: #d1e7dd;
  --bs-table-striped-bg: black;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: black;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #c1d6cc;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bcd0c7;
}
.table-info {
  --bs-table-bg: #cff4fc;
  --bs-table-striped-bg: black;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: black;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #bfe2e9;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #badce3;
}
.table-warning {
  --bs-table-bg: #fff3cd;
  --bs-table-striped-bg: black;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: black;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #ece1be;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #e6dbb9;
}
.table-danger {
  --bs-table-bg: #f8d7da;
  --bs-table-striped-bg: black;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: black;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #e5c7ca;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfc2c4;
}
.table-light {
  --bs-table-bg: #F9FAFB;
  --bs-table-striped-bg: black;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: black;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #e6e7e8;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #e0e1e2;
}
.table-dark {
  --bs-table-bg: #212B36;
  --bs-table-striped-bg: white;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: white;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #323b45;
  --bs-table-hover-color: #fff;
  color: #fff;
  border-color: #37404a;
}
.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}
@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
.form-label {
  margin-bottom: 0.5rem;
  color: #161C24;
}
.col-form-label {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
  color: #161C24;
}
.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.171875rem;
}
.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.8203125rem;
}
.form-text {
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #637381;
}
.form-control {
  display: block;
  width: 100%;
  padding: 0.5rem 1rem;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #637381;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #C4CDD5;
  -webkit-appearance: none;
          appearance: none;
  border-radius: 0.375rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}
.form-control[type=file] {
  overflow: hidden;
}
.form-control[type=file]:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control:focus {
  color: #637381;
  background-color: #fff;
  border-color: #b1a5ff;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(98, 75, 255, 0.25);
}
.form-control::-webkit-date-and-time-value {
  height: 1.5em;
}
.form-control::-webkit-input-placeholder {
  color: #637381;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #637381;
  opacity: 1;
}
.form-control::placeholder {
  color: #637381;
  opacity: 1;
}
.form-control:disabled, .form-control[readonly] {
  background-color: #F4F6F8;
  opacity: 1;
}
.form-control::-webkit-file-upload-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  -webkit-margin-end: 1rem;
          margin-inline-end: 1rem;
  color: #637381;
  background-color: #F4F6F8;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.form-control::file-selector-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  -webkit-margin-end: 1rem;
          margin-inline-end: 1rem;
  color: #637381;
  background-color: #F4F6F8;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control::-webkit-file-upload-button {
    -webkit-transition: none;
    transition: none;
  }
  .form-control::file-selector-button {
    transition: none;
  }
}
.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
  background-color: #e8eaec;
}
.form-control:hover:not(:disabled):not([readonly])::file-selector-button {
  background-color: #e8eaec;
}
.form-control::-webkit-file-upload-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  -webkit-margin-end: 1rem;
          margin-inline-end: 1rem;
  color: #637381;
  background-color: #F4F6F8;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control::-webkit-file-upload-button {
    -webkit-transition: none;
    transition: none;
  }
}
.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
  background-color: #e8eaec;
}
.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.5rem 0;
  margin-bottom: 0;
  line-height: 1.5;
  color: #637381;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}
.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}
.form-control-sm {
  min-height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.8203125rem;
  border-radius: 0.2rem;
}
.form-control-sm::-webkit-file-upload-button {
  padding: 0.25rem 0.5rem;
  margin: -0.25rem -0.5rem;
  -webkit-margin-end: 0.5rem;
          margin-inline-end: 0.5rem;
}
.form-control-sm::file-selector-button {
  padding: 0.25rem 0.5rem;
  margin: -0.25rem -0.5rem;
  -webkit-margin-end: 0.5rem;
          margin-inline-end: 0.5rem;
}
.form-control-sm::-webkit-file-upload-button {
  padding: 0.25rem 0.5rem;
  margin: -0.25rem -0.5rem;
  -webkit-margin-end: 0.5rem;
          margin-inline-end: 0.5rem;
}
.form-control-lg {
  min-height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.171875rem;
  border-radius: 0.5rem;
}
.form-control-lg::-webkit-file-upload-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  -webkit-margin-end: 1rem;
          margin-inline-end: 1rem;
}
.form-control-lg::file-selector-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  -webkit-margin-end: 1rem;
          margin-inline-end: 1rem;
}
.form-control-lg::-webkit-file-upload-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  -webkit-margin-end: 1rem;
          margin-inline-end: 1rem;
}
textarea.form-control {
  min-height: calc(1.5em + 1rem + 2px);
}
textarea.form-control-sm {
  min-height: calc(1.5em + 0.5rem + 2px);
}
textarea.form-control-lg {
  min-height: calc(1.5em + 1rem + 2px);
}
.form-control-color {
  width: 3rem;
  height: auto;
  padding: 0.5rem;
}
.form-control-color:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control-color::-moz-color-swatch {
  height: 1.5em;
  border-radius: 0.375rem;
}
.form-control-color::-webkit-color-swatch {
  height: 1.5em;
  border-radius: 0.375rem;
}
.form-select {
  display: block;
  width: 100%;
  padding: 0.5rem 3rem 0.5rem 1rem;
  -moz-padding-start: calc(1rem - 3px);
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #637381;
  background-color: #fff;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23212B36' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 1rem center;
  background-size: 16px 12px;
  border: 1px solid #C4CDD5;
  border-radius: 0.375rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
          appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-select {
    transition: none;
  }
}
.form-select:focus {
  border-color: #b1a5ff;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(98, 75, 255, 0.25);
}
.form-select[multiple], .form-select[size]:not([size="1"]) {
  padding-right: 1rem;
  background-image: none;
}
.form-select:disabled {
  background-color: #F4F6F8;
}
.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #637381;
}
.form-select-sm {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.8203125rem;
  border-radius: 0.2rem;
}
.form-select-lg {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.171875rem;
  border-radius: 0.5rem;
}
.form-check {
  display: block;
  min-height: 1.40625rem;
  padding-left: 1.5em;
  margin-bottom: 0.125rem;
}
.form-check .form-check-input {
  float: left;
  margin-left: -1.5em;
}
.form-check-input {
  width: 1em;
  height: 1em;
  margin-top: 0.25em;
  vertical-align: top;
  background-color: #fff;
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: 1px solid rgba(0, 0, 0, 0.25);
  -webkit-appearance: none;
          appearance: none;
  -webkit-print-color-adjust: exact;
          color-adjust: exact;
}
.form-check-input[type=checkbox] {
  border-radius: 0.25em;
}
.form-check-input[type=radio] {
  border-radius: 50%;
}
.form-check-input:active {
  -webkit-filter: brightness(90%);
          filter: brightness(90%);
}
.form-check-input:focus {
  border-color: #b1a5ff;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(98, 75, 255, 0.25);
}
.form-check-input:checked {
  background-color: #624BFF;
  border-color: #624BFF;
}
.form-check-input:checked[type=checkbox] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
}
.form-check-input:checked[type=radio] {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
}
.form-check-input[type=checkbox]:indeterminate {
  background-color: #624BFF;
  border-color: #624BFF;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
}
.form-check-input:disabled {
  pointer-events: none;
  -webkit-filter: none;
          filter: none;
  opacity: 0.5;
}
.form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
  opacity: 0.5;
}
.form-switch {
  padding-left: 2.5em;
}
.form-switch .form-check-input {
  width: 2em;
  margin-left: -2.5em;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
  background-position: left center;
  border-radius: 2em;
  transition: background-position 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-switch .form-check-input {
    transition: none;
  }
}
.form-switch .form-check-input:focus {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23b1a5ff'/%3e%3c/svg%3e");
}
.form-switch .form-check-input:checked {
  background-position: right center;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}
.form-check-inline {
  display: inline-block;
  margin-right: 1rem;
}
.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.btn-check[disabled] + .btn, .btn-check:disabled + .btn {
  pointer-events: none;
  -webkit-filter: none;
          filter: none;
  opacity: 0.65;
}
.form-range {
  width: 100%;
  height: 1.5rem;
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
          appearance: none;
}
.form-range:focus {
  outline: 0;
}
.form-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(98, 75, 255, 0.25);
}
.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(98, 75, 255, 0.25);
}
.form-range::-moz-focus-outer {
  border: 0;
}
.form-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #624BFF;
  border: 0;
  border-radius: 1rem;
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
          appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none;
  }
}
.form-range::-webkit-slider-thumb:active {
  background-color: #d0c9ff;
}
.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #DFE3E8;
  border-color: transparent;
  border-radius: 1rem;
}
.form-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #624BFF;
  border: 0;
  border-radius: 1rem;
  -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-moz-range-thumb {
    -moz-transition: none;
    transition: none;
  }
}
.form-range::-moz-range-thumb:active {
  background-color: #d0c9ff;
}
.form-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #DFE3E8;
  border-color: transparent;
  border-radius: 1rem;
}
.form-range:disabled {
  pointer-events: none;
}
.form-range:disabled::-webkit-slider-thumb {
  background-color: #919EAB;
}
.form-range:disabled::-moz-range-thumb {
  background-color: #919EAB;
}
.form-floating {
  position: relative;
}
.form-floating > .form-control,
.form-floating > .form-select {
  height: calc(3.5rem + 2px);
  line-height: 1.25;
}
.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  padding: 1rem 1rem;
  pointer-events: none;
  border: 1px solid transparent;
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
  transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-floating > label {
    transition: none;
  }
}
.form-floating > .form-control {
  padding: 1rem 1rem;
}
.form-floating > .form-control::-webkit-input-placeholder {
  color: transparent;
}
.form-floating > .form-control:-ms-input-placeholder {
  color: transparent;
}
.form-floating > .form-control::placeholder {
  color: transparent;
}
.form-floating > .form-control:not(:-ms-input-placeholder) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-ms-input-placeholder) ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select ~ label {
  opacity: 0.65;
  -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
          transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:-webkit-autofill ~ label {
  opacity: 0.65;
  -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
          transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}
.input-group > .form-control,
.input-group > .form-select {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}
.input-group > .form-control:focus,
.input-group > .form-select:focus {
  z-index: 3;
}
.input-group .btn {
  position: relative;
  z-index: 2;
}
.input-group .btn:focus {
  z-index: 3;
}
.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.5rem 1rem;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #637381;
  text-align: center;
  white-space: nowrap;
  background-color: #F4F6F8;
  border: 1px solid #C4CDD5;
  border-radius: 0.375rem;
}
.input-group-lg > .form-control,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text,
.input-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.171875rem;
  border-radius: 0.5rem;
}
.input-group-sm > .form-control,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text,
.input-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.8203125rem;
  border-radius: 0.2rem;
}
.input-group-lg > .form-select,
.input-group-sm > .form-select {
  padding-right: 4rem;
}
.input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n+3) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation > :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu),
.input-group.has-validation > .dropdown-toggle:nth-last-child(n+4) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -1px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #198754;
}
.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.8203125rem;
  color: #fff;
  background-color: rgba(25, 135, 84, 0.9);
  border-radius: 0.375rem;
}
.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}
.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #198754;
  padding-right: calc(1.5em + 1rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.25rem) center;
  background-size: calc(0.75em + 0.5rem) calc(0.75em + 0.5rem);
}
.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: #198754;
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}
.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 1rem);
  background-position: top calc(0.375em + 0.25rem) right calc(0.375em + 0.25rem);
}
.was-validated .form-select:valid, .form-select.is-valid {
  border-color: #198754;
}
.was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"] {
  padding-right: 5.5rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23212B36' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-position: right 1rem center, center right 3rem;
  background-size: 16px 12px, calc(0.75em + 0.5rem) calc(0.75em + 0.5rem);
}
.was-validated .form-select:valid:focus, .form-select.is-valid:focus {
  border-color: #198754;
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}
.was-validated .form-check-input:valid, .form-check-input.is-valid {
  border-color: #198754;
}
.was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
  background-color: #198754;
}
.was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}
.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #198754;
}
.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: 0.5em;
}
.was-validated .input-group .form-control:valid, .input-group .form-control.is-valid,
.was-validated .input-group .form-select:valid,
.input-group .form-select.is-valid {
  z-index: 1;
}
.was-validated .input-group .form-control:valid:focus, .input-group .form-control.is-valid:focus,
.was-validated .input-group .form-select:valid:focus,
.input-group .form-select.is-valid:focus {
  z-index: 3;
}
.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #dc3545;
}
.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.8203125rem;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.375rem;
}
.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}
.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #dc3545;
  padding-right: calc(1.5em + 1rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.25rem) center;
  background-size: calc(0.75em + 0.5rem) calc(0.75em + 0.5rem);
}
.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}
.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 1rem);
  background-position: top calc(0.375em + 0.25rem) right calc(0.375em + 0.25rem);
}
.was-validated .form-select:invalid, .form-select.is-invalid {
  border-color: #dc3545;
}
.was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"] {
  padding-right: 5.5rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23212B36' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-position: right 1rem center, center right 3rem;
  background-size: 16px 12px, calc(0.75em + 0.5rem) calc(0.75em + 0.5rem);
}
.was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}
.was-validated .form-check-input:invalid, .form-check-input.is-invalid {
  border-color: #dc3545;
}
.was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
  background-color: #dc3545;
}
.was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}
.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}
.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: 0.5em;
}
.was-validated .input-group .form-control:invalid, .input-group .form-control.is-invalid,
.was-validated .input-group .form-select:invalid,
.input-group .form-select.is-invalid {
  z-index: 2;
}
.was-validated .input-group .form-control:invalid:focus, .input-group .form-control.is-invalid:focus,
.was-validated .input-group .form-select:invalid:focus,
.input-group .form-select.is-invalid:focus {
  z-index: 3;
}
.btn {
  display: inline-block;
  font-weight: 500;
  line-height: 1.5;
  color: #637381;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.5rem 1rem;
  font-size: 0.9375rem;
  border-radius: 0.375rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}
.btn:hover {
  color: #637381;
}
.btn-check:focus + .btn, .btn:focus {
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(98, 75, 255, 0.25);
}
.btn:disabled, .btn.disabled, fieldset:disabled .btn {
  pointer-events: none;
  opacity: 0.65;
}
.btn-primary {
  color: #fff;
  background-color: #624BFF;
  border-color: #624BFF;
}
.btn-primary:hover {
  color: #fff;
  background-color: #5340d9;
  border-color: #4e3ccc;
}
.btn-check:focus + .btn-primary, .btn-primary:focus {
  color: #fff;
  background-color: #5340d9;
  border-color: #4e3ccc;
  box-shadow: 0 0 0 0.25rem rgba(122, 102, 255, 0.5);
}
.btn-check:checked + .btn-primary, .btn-check:active + .btn-primary, .btn-primary:active, .btn-primary.active, .show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #4e3ccc;
  border-color: #4a38bf;
}
.btn-check:checked + .btn-primary:focus, .btn-check:active + .btn-primary:focus, .btn-primary:active:focus, .btn-primary.active:focus, .show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(122, 102, 255, 0.5);
}
.btn-primary:disabled, .btn-primary.disabled {
  color: #fff;
  background-color: #624BFF;
  border-color: #624BFF;
}
.btn-secondary {
  color: #fff;
  background-color: #637381;
  border-color: #637381;
}
.btn-secondary:hover {
  color: #fff;
  background-color: #54626e;
  border-color: #4f5c67;
}
.btn-check:focus + .btn-secondary, .btn-secondary:focus {
  color: #fff;
  background-color: #54626e;
  border-color: #4f5c67;
  box-shadow: 0 0 0 0.25rem rgba(122, 136, 148, 0.5);
}
.btn-check:checked + .btn-secondary, .btn-check:active + .btn-secondary, .btn-secondary:active, .btn-secondary.active, .show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #4f5c67;
  border-color: #4a5661;
}
.btn-check:checked + .btn-secondary:focus, .btn-check:active + .btn-secondary:focus, .btn-secondary:active:focus, .btn-secondary.active:focus, .show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(122, 136, 148, 0.5);
}
.btn-secondary:disabled, .btn-secondary.disabled {
  color: #fff;
  background-color: #637381;
  border-color: #637381;
}
.btn-success {
  color: #fff;
  background-color: #198754;
  border-color: #198754;
}
.btn-success:hover {
  color: #fff;
  background-color: #157347;
  border-color: #146c43;
}
.btn-check:focus + .btn-success, .btn-success:focus {
  color: #fff;
  background-color: #157347;
  border-color: #146c43;
  box-shadow: 0 0 0 0.25rem rgba(60, 153, 110, 0.5);
}
.btn-check:checked + .btn-success, .btn-check:active + .btn-success, .btn-success:active, .btn-success.active, .show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #146c43;
  border-color: #13653f;
}
.btn-check:checked + .btn-success:focus, .btn-check:active + .btn-success:focus, .btn-success:active:focus, .btn-success.active:focus, .show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(60, 153, 110, 0.5);
}
.btn-success:disabled, .btn-success.disabled {
  color: #fff;
  background-color: #198754;
  border-color: #198754;
}
.btn-info {
  color: #000;
  background-color: #0dcaf0;
  border-color: #0dcaf0;
}
.btn-info:hover {
  color: #000;
  background-color: #31d2f2;
  border-color: #25cff2;
}
.btn-check:focus + .btn-info, .btn-info:focus {
  color: #000;
  background-color: #31d2f2;
  border-color: #25cff2;
  box-shadow: 0 0 0 0.25rem rgba(11, 172, 204, 0.5);
}
.btn-check:checked + .btn-info, .btn-check:active + .btn-info, .btn-info:active, .btn-info.active, .show > .btn-info.dropdown-toggle {
  color: #000;
  background-color: #3dd5f3;
  border-color: #25cff2;
}
.btn-check:checked + .btn-info:focus, .btn-check:active + .btn-info:focus, .btn-info:active:focus, .btn-info.active:focus, .show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(11, 172, 204, 0.5);
}
.btn-info:disabled, .btn-info.disabled {
  color: #000;
  background-color: #0dcaf0;
  border-color: #0dcaf0;
}
.btn-warning {
  color: #000;
  background-color: #ffc107;
  border-color: #ffc107;
}
.btn-warning:hover {
  color: #000;
  background-color: #ffca2c;
  border-color: #ffc720;
}
.btn-check:focus + .btn-warning, .btn-warning:focus {
  color: #000;
  background-color: #ffca2c;
  border-color: #ffc720;
  box-shadow: 0 0 0 0.25rem rgba(217, 164, 6, 0.5);
}
.btn-check:checked + .btn-warning, .btn-check:active + .btn-warning, .btn-warning:active, .btn-warning.active, .show > .btn-warning.dropdown-toggle {
  color: #000;
  background-color: #ffcd39;
  border-color: #ffc720;
}
.btn-check:checked + .btn-warning:focus, .btn-check:active + .btn-warning:focus, .btn-warning:active:focus, .btn-warning.active:focus, .show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(217, 164, 6, 0.5);
}
.btn-warning:disabled, .btn-warning.disabled {
  color: #000;
  background-color: #ffc107;
  border-color: #ffc107;
}
.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}
.btn-danger:hover {
  color: #fff;
  background-color: #bb2d3b;
  border-color: #b02a37;
}
.btn-check:focus + .btn-danger, .btn-danger:focus {
  color: #fff;
  background-color: #bb2d3b;
  border-color: #b02a37;
  box-shadow: 0 0 0 0.25rem rgba(225, 83, 97, 0.5);
}
.btn-check:checked + .btn-danger, .btn-check:active + .btn-danger, .btn-danger:active, .btn-danger.active, .show > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #b02a37;
  border-color: #a52834;
}
.btn-check:checked + .btn-danger:focus, .btn-check:active + .btn-danger:focus, .btn-danger:active:focus, .btn-danger.active:focus, .show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(225, 83, 97, 0.5);
}
.btn-danger:disabled, .btn-danger.disabled {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}
.btn-light {
  color: #000;
  background-color: #F9FAFB;
  border-color: #F9FAFB;
}
.btn-light:hover {
  color: #000;
  background-color: #fafbfc;
  border-color: #fafbfb;
}
.btn-check:focus + .btn-light, .btn-light:focus {
  color: #000;
  background-color: #fafbfc;
  border-color: #fafbfb;
  box-shadow: 0 0 0 0.25rem rgba(212, 213, 213, 0.5);
}
.btn-check:checked + .btn-light, .btn-check:active + .btn-light, .btn-light:active, .btn-light.active, .show > .btn-light.dropdown-toggle {
  color: #000;
  background-color: #fafbfc;
  border-color: #fafbfb;
}
.btn-check:checked + .btn-light:focus, .btn-check:active + .btn-light:focus, .btn-light:active:focus, .btn-light.active:focus, .show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(212, 213, 213, 0.5);
}
.btn-light:disabled, .btn-light.disabled {
  color: #000;
  background-color: #F9FAFB;
  border-color: #F9FAFB;
}
.btn-dark {
  color: #fff;
  background-color: #212B36;
  border-color: #212B36;
}
.btn-dark:hover {
  color: #fff;
  background-color: #1c252e;
  border-color: #1a222b;
}
.btn-check:focus + .btn-dark, .btn-dark:focus {
  color: #fff;
  background-color: #1c252e;
  border-color: #1a222b;
  box-shadow: 0 0 0 0.25rem rgba(66, 75, 84, 0.5);
}
.btn-check:checked + .btn-dark, .btn-check:active + .btn-dark, .btn-dark:active, .btn-dark.active, .show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #1a222b;
  border-color: #192029;
}
.btn-check:checked + .btn-dark:focus, .btn-check:active + .btn-dark:focus, .btn-dark:active:focus, .btn-dark.active:focus, .show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(66, 75, 84, 0.5);
}
.btn-dark:disabled, .btn-dark.disabled {
  color: #fff;
  background-color: #212B36;
  border-color: #212B36;
}
.btn-white {
  color: #000;
  background-color: #fff;
  border-color: #fff;
}
.btn-white:hover {
  color: #000;
  background-color: white;
  border-color: white;
}
.btn-check:focus + .btn-white, .btn-white:focus {
  color: #000;
  background-color: white;
  border-color: white;
  box-shadow: 0 0 0 0.25rem rgba(217, 217, 217, 0.5);
}
.btn-check:checked + .btn-white, .btn-check:active + .btn-white, .btn-white:active, .btn-white.active, .show > .btn-white.dropdown-toggle {
  color: #000;
  background-color: white;
  border-color: white;
}
.btn-check:checked + .btn-white:focus, .btn-check:active + .btn-white:focus, .btn-white:active:focus, .btn-white.active:focus, .show > .btn-white.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(217, 217, 217, 0.5);
}
.btn-white:disabled, .btn-white.disabled {
  color: #000;
  background-color: #fff;
  border-color: #fff;
}
.btn-light-primary {
  color: #000;
  background-color: #E0DCFE;
  border-color: #E0DCFE;
}
.btn-light-primary:hover {
  color: #000;
  background-color: #e5e1fe;
  border-color: #e3e0fe;
}
.btn-check:focus + .btn-light-primary, .btn-light-primary:focus {
  color: #000;
  background-color: #e5e1fe;
  border-color: #e3e0fe;
  box-shadow: 0 0 0 0.25rem rgba(190, 187, 216, 0.5);
}
.btn-check:checked + .btn-light-primary, .btn-check:active + .btn-light-primary, .btn-light-primary:active, .btn-light-primary.active, .show > .btn-light-primary.dropdown-toggle {
  color: #000;
  background-color: #e6e3fe;
  border-color: #e3e0fe;
}
.btn-check:checked + .btn-light-primary:focus, .btn-check:active + .btn-light-primary:focus, .btn-light-primary:active:focus, .btn-light-primary.active:focus, .show > .btn-light-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(190, 187, 216, 0.5);
}
.btn-light-primary:disabled, .btn-light-primary.disabled {
  color: #000;
  background-color: #E0DCFE;
  border-color: #E0DCFE;
}
.btn-light-danger {
  color: #000;
  background-color: #FBEBEC;
  border-color: #FBEBEC;
}
.btn-light-danger:hover {
  color: #000;
  background-color: #fceeef;
  border-color: #fbedee;
}
.btn-check:focus + .btn-light-danger, .btn-light-danger:focus {
  color: #000;
  background-color: #fceeef;
  border-color: #fbedee;
  box-shadow: 0 0 0 0.25rem rgba(213, 200, 201, 0.5);
}
.btn-check:checked + .btn-light-danger, .btn-check:active + .btn-light-danger, .btn-light-danger:active, .btn-light-danger.active, .show > .btn-light-danger.dropdown-toggle {
  color: #000;
  background-color: #fceff0;
  border-color: #fbedee;
}
.btn-check:checked + .btn-light-danger:focus, .btn-check:active + .btn-light-danger:focus, .btn-light-danger:active:focus, .btn-light-danger.active:focus, .show > .btn-light-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(213, 200, 201, 0.5);
}
.btn-light-danger:disabled, .btn-light-danger.disabled {
  color: #000;
  background-color: #FBEBEC;
  border-color: #FBEBEC;
}
.btn-light-info {
  color: #000;
  background-color: #E7FAFE;
  border-color: #E7FAFE;
}
.btn-light-info:hover {
  color: #000;
  background-color: #ebfbfe;
  border-color: #e9fbfe;
}
.btn-check:focus + .btn-light-info, .btn-light-info:focus {
  color: #000;
  background-color: #ebfbfe;
  border-color: #e9fbfe;
  box-shadow: 0 0 0 0.25rem rgba(196, 213, 216, 0.5);
}
.btn-check:checked + .btn-light-info, .btn-check:active + .btn-light-info, .btn-light-info:active, .btn-light-info.active, .show > .btn-light-info.dropdown-toggle {
  color: #000;
  background-color: #ecfbfe;
  border-color: #e9fbfe;
}
.btn-check:checked + .btn-light-info:focus, .btn-check:active + .btn-light-info:focus, .btn-light-info:active:focus, .btn-light-info.active:focus, .show > .btn-light-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(196, 213, 216, 0.5);
}
.btn-light-info:disabled, .btn-light-info.disabled {
  color: #000;
  background-color: #E7FAFE;
  border-color: #E7FAFE;
}
.btn-light-warning {
  color: #000;
  background-color: #FFF3CD;
  border-color: #FFF3CD;
}
.btn-light-warning:hover {
  color: #000;
  background-color: #fff5d5;
  border-color: #fff4d2;
}
.btn-check:focus + .btn-light-warning, .btn-light-warning:focus {
  color: #000;
  background-color: #fff5d5;
  border-color: #fff4d2;
  box-shadow: 0 0 0 0.25rem rgba(217, 207, 174, 0.5);
}
.btn-check:checked + .btn-light-warning, .btn-check:active + .btn-light-warning, .btn-light-warning:active, .btn-light-warning.active, .show > .btn-light-warning.dropdown-toggle {
  color: #000;
  background-color: #fff5d7;
  border-color: #fff4d2;
}
.btn-check:checked + .btn-light-warning:focus, .btn-check:active + .btn-light-warning:focus, .btn-light-warning:active:focus, .btn-light-warning.active:focus, .show > .btn-light-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(217, 207, 174, 0.5);
}
.btn-light-warning:disabled, .btn-light-warning.disabled {
  color: #000;
  background-color: #FFF3CD;
  border-color: #FFF3CD;
}
.btn-light-secondary {
  color: #000;
  background-color: #e9ecef;
  border-color: #e9ecef;
}
.btn-light-secondary:hover {
  color: #000;
  background-color: #eceff1;
  border-color: #ebeef1;
}
.btn-check:focus + .btn-light-secondary, .btn-light-secondary:focus {
  color: #000;
  background-color: #eceff1;
  border-color: #ebeef1;
  box-shadow: 0 0 0 0.25rem rgba(198, 201, 203, 0.5);
}
.btn-check:checked + .btn-light-secondary, .btn-check:active + .btn-light-secondary, .btn-light-secondary:active, .btn-light-secondary.active, .show > .btn-light-secondary.dropdown-toggle {
  color: #000;
  background-color: #edf0f2;
  border-color: #ebeef1;
}
.btn-check:checked + .btn-light-secondary:focus, .btn-check:active + .btn-light-secondary:focus, .btn-light-secondary:active:focus, .btn-light-secondary.active:focus, .show > .btn-light-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(198, 201, 203, 0.5);
}
.btn-light-secondary:disabled, .btn-light-secondary.disabled {
  color: #000;
  background-color: #e9ecef;
  border-color: #e9ecef;
}
.btn-light-success {
  color: #000;
  background-color: #EAF6EC;
  border-color: #EAF6EC;
}
.btn-light-success:hover {
  color: #000;
  background-color: #edf7ef;
  border-color: #ecf7ee;
}
.btn-check:focus + .btn-light-success, .btn-light-success:focus {
  color: #000;
  background-color: #edf7ef;
  border-color: #ecf7ee;
  box-shadow: 0 0 0 0.25rem rgba(199, 209, 201, 0.5);
}
.btn-check:checked + .btn-light-success, .btn-check:active + .btn-light-success, .btn-light-success:active, .btn-light-success.active, .show > .btn-light-success.dropdown-toggle {
  color: #000;
  background-color: #eef8f0;
  border-color: #ecf7ee;
}
.btn-check:checked + .btn-light-success:focus, .btn-check:active + .btn-light-success:focus, .btn-light-success:active:focus, .btn-light-success.active:focus, .show > .btn-light-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(199, 209, 201, 0.5);
}
.btn-light-success:disabled, .btn-light-success.disabled {
  color: #000;
  background-color: #EAF6EC;
  border-color: #EAF6EC;
}
.btn-light-dark {
  color: #000;
  background-color: #d1cfd8;
  border-color: #d1cfd8;
}
.btn-light-dark:hover {
  color: #000;
  background-color: #d8d6de;
  border-color: #d6d4dc;
}
.btn-check:focus + .btn-light-dark, .btn-light-dark:focus {
  color: #000;
  background-color: #d8d6de;
  border-color: #d6d4dc;
  box-shadow: 0 0 0 0.25rem rgba(178, 176, 184, 0.5);
}
.btn-check:checked + .btn-light-dark, .btn-check:active + .btn-light-dark, .btn-light-dark:active, .btn-light-dark.active, .show > .btn-light-dark.dropdown-toggle {
  color: #000;
  background-color: #dad9e0;
  border-color: #d6d4dc;
}
.btn-check:checked + .btn-light-dark:focus, .btn-check:active + .btn-light-dark:focus, .btn-light-dark:active:focus, .btn-light-dark.active:focus, .show > .btn-light-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(178, 176, 184, 0.5);
}
.btn-light-dark:disabled, .btn-light-dark.disabled {
  color: #000;
  background-color: #d1cfd8;
  border-color: #d1cfd8;
}
.btn-dark-primary {
  color: #fff;
  background-color: #593cc1;
  border-color: #593cc1;
}
.btn-dark-primary:hover {
  color: #fff;
  background-color: #4c33a4;
  border-color: #47309a;
}
.btn-check:focus + .btn-dark-primary, .btn-dark-primary:focus {
  color: #fff;
  background-color: #4c33a4;
  border-color: #47309a;
  box-shadow: 0 0 0 0.25rem rgba(114, 89, 202, 0.5);
}
.btn-check:checked + .btn-dark-primary, .btn-check:active + .btn-dark-primary, .btn-dark-primary:active, .btn-dark-primary.active, .show > .btn-dark-primary.dropdown-toggle {
  color: #fff;
  background-color: #47309a;
  border-color: #432d91;
}
.btn-check:checked + .btn-dark-primary:focus, .btn-check:active + .btn-dark-primary:focus, .btn-dark-primary:active:focus, .btn-dark-primary.active:focus, .show > .btn-dark-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(114, 89, 202, 0.5);
}
.btn-dark-primary:disabled, .btn-dark-primary.disabled {
  color: #fff;
  background-color: #593cc1;
  border-color: #593cc1;
}
.btn-dark-warning {
  color: #000;
  background-color: #c28135;
  border-color: #c28135;
}
.btn-dark-warning:hover {
  color: #000;
  background-color: #cb9453;
  border-color: #c88e49;
}
.btn-check:focus + .btn-dark-warning, .btn-dark-warning:focus {
  color: #000;
  background-color: #cb9453;
  border-color: #c88e49;
  box-shadow: 0 0 0 0.25rem rgba(165, 110, 45, 0.5);
}
.btn-check:checked + .btn-dark-warning, .btn-check:active + .btn-dark-warning, .btn-dark-warning:active, .btn-dark-warning.active, .show > .btn-dark-warning.dropdown-toggle {
  color: #000;
  background-color: #ce9a5d;
  border-color: #c88e49;
}
.btn-check:checked + .btn-dark-warning:focus, .btn-check:active + .btn-dark-warning:focus, .btn-dark-warning:active:focus, .btn-dark-warning.active:focus, .show > .btn-dark-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(165, 110, 45, 0.5);
}
.btn-dark-warning:disabled, .btn-dark-warning.disabled {
  color: #000;
  background-color: #c28135;
  border-color: #c28135;
}
.btn-dark-info {
  color: #000;
  background-color: #51a0c2;
  border-color: #51a0c2;
}
.btn-dark-info:hover {
  color: #000;
  background-color: #6baecb;
  border-color: #62aac8;
}
.btn-check:focus + .btn-dark-info, .btn-dark-info:focus {
  color: #000;
  background-color: #6baecb;
  border-color: #62aac8;
  box-shadow: 0 0 0 0.25rem rgba(69, 136, 165, 0.5);
}
.btn-check:checked + .btn-dark-info, .btn-check:active + .btn-dark-info, .btn-dark-info:active, .btn-dark-info.active, .show > .btn-dark-info.dropdown-toggle {
  color: #000;
  background-color: #74b3ce;
  border-color: #62aac8;
}
.btn-check:checked + .btn-dark-info:focus, .btn-check:active + .btn-dark-info:focus, .btn-dark-info:active:focus, .btn-dark-info.active:focus, .show > .btn-dark-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(69, 136, 165, 0.5);
}
.btn-dark-info:disabled, .btn-dark-info.disabled {
  color: #000;
  background-color: #51a0c2;
  border-color: #51a0c2;
}
.btn-dark-danger {
  color: #fff;
  background-color: #ae302e;
  border-color: #ae302e;
}
.btn-dark-danger:hover {
  color: #fff;
  background-color: #942927;
  border-color: #8b2625;
}
.btn-check:focus + .btn-dark-danger, .btn-dark-danger:focus {
  color: #fff;
  background-color: #942927;
  border-color: #8b2625;
  box-shadow: 0 0 0 0.25rem rgba(186, 79, 77, 0.5);
}
.btn-check:checked + .btn-dark-danger, .btn-check:active + .btn-dark-danger, .btn-dark-danger:active, .btn-dark-danger.active, .show > .btn-dark-danger.dropdown-toggle {
  color: #fff;
  background-color: #8b2625;
  border-color: #832423;
}
.btn-check:checked + .btn-dark-danger:focus, .btn-check:active + .btn-dark-danger:focus, .btn-dark-danger:active:focus, .btn-dark-danger.active:focus, .show > .btn-dark-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(186, 79, 77, 0.5);
}
.btn-dark-danger:disabled, .btn-dark-danger.disabled {
  color: #fff;
  background-color: #ae302e;
  border-color: #ae302e;
}
.btn-dark-success {
  color: #000;
  background-color: #139a74;
  border-color: #139a74;
}
.btn-dark-success:hover {
  color: #000;
  background-color: #36a989;
  border-color: #2ba482;
}
.btn-check:focus + .btn-dark-success, .btn-dark-success:focus {
  color: #000;
  background-color: #36a989;
  border-color: #2ba482;
  box-shadow: 0 0 0 0.25rem rgba(16, 131, 99, 0.5);
}
.btn-check:checked + .btn-dark-success, .btn-check:active + .btn-dark-success, .btn-dark-success:active, .btn-dark-success.active, .show > .btn-dark-success.dropdown-toggle {
  color: #000;
  background-color: #42ae90;
  border-color: #2ba482;
}
.btn-check:checked + .btn-dark-success:focus, .btn-check:active + .btn-dark-success:focus, .btn-dark-success:active:focus, .btn-dark-success.active:focus, .show > .btn-dark-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(16, 131, 99, 0.5);
}
.btn-dark-success:disabled, .btn-dark-success.disabled {
  color: #000;
  background-color: #139a74;
  border-color: #139a74;
}
.btn-dark-secondary {
  color: #fff;
  background-color: #5c596d;
  border-color: #5c596d;
}
.btn-dark-secondary:hover {
  color: #fff;
  background-color: #4e4c5d;
  border-color: #4a4757;
}
.btn-check:focus + .btn-dark-secondary, .btn-dark-secondary:focus {
  color: #fff;
  background-color: #4e4c5d;
  border-color: #4a4757;
  box-shadow: 0 0 0 0.25rem rgba(116, 114, 131, 0.5);
}
.btn-check:checked + .btn-dark-secondary, .btn-check:active + .btn-dark-secondary, .btn-dark-secondary:active, .btn-dark-secondary.active, .show > .btn-dark-secondary.dropdown-toggle {
  color: #fff;
  background-color: #4a4757;
  border-color: #454352;
}
.btn-check:checked + .btn-dark-secondary:focus, .btn-check:active + .btn-dark-secondary:focus, .btn-dark-secondary:active:focus, .btn-dark-secondary.active:focus, .show > .btn-dark-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.25rem rgba(116, 114, 131, 0.5);
}
.btn-dark-secondary:disabled, .btn-dark-secondary.disabled {
  color: #fff;
  background-color: #5c596d;
  border-color: #5c596d;
}
.btn-outline-primary {
  color: #624BFF;
  border-color: #624BFF;
}
.btn-outline-primary:hover {
  color: #fff;
  background-color: #624BFF;
  border-color: #624BFF;
}
.btn-check:focus + .btn-outline-primary, .btn-outline-primary:focus {
  box-shadow: 0 0 0 0.25rem rgba(98, 75, 255, 0.5);
}
.btn-check:checked + .btn-outline-primary, .btn-check:active + .btn-outline-primary, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.dropdown-toggle.show {
  color: #fff;
  background-color: #624BFF;
  border-color: #624BFF;
}
.btn-check:checked + .btn-outline-primary:focus, .btn-check:active + .btn-outline-primary:focus, .btn-outline-primary:active:focus, .btn-outline-primary.active:focus, .btn-outline-primary.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(98, 75, 255, 0.5);
}
.btn-outline-primary:disabled, .btn-outline-primary.disabled {
  color: #624BFF;
  background-color: transparent;
}
.btn-outline-secondary {
  color: #637381;
  border-color: #637381;
}
.btn-outline-secondary:hover {
  color: #fff;
  background-color: #637381;
  border-color: #637381;
}
.btn-check:focus + .btn-outline-secondary, .btn-outline-secondary:focus {
  box-shadow: 0 0 0 0.25rem rgba(99, 115, 129, 0.5);
}
.btn-check:checked + .btn-outline-secondary, .btn-check:active + .btn-outline-secondary, .btn-outline-secondary:active, .btn-outline-secondary.active, .btn-outline-secondary.dropdown-toggle.show {
  color: #fff;
  background-color: #637381;
  border-color: #637381;
}
.btn-check:checked + .btn-outline-secondary:focus, .btn-check:active + .btn-outline-secondary:focus, .btn-outline-secondary:active:focus, .btn-outline-secondary.active:focus, .btn-outline-secondary.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(99, 115, 129, 0.5);
}
.btn-outline-secondary:disabled, .btn-outline-secondary.disabled {
  color: #637381;
  background-color: transparent;
}
.btn-outline-success {
  color: #198754;
  border-color: #198754;
}
.btn-outline-success:hover {
  color: #fff;
  background-color: #198754;
  border-color: #198754;
}
.btn-check:focus + .btn-outline-success, .btn-outline-success:focus {
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.5);
}
.btn-check:checked + .btn-outline-success, .btn-check:active + .btn-outline-success, .btn-outline-success:active, .btn-outline-success.active, .btn-outline-success.dropdown-toggle.show {
  color: #fff;
  background-color: #198754;
  border-color: #198754;
}
.btn-check:checked + .btn-outline-success:focus, .btn-check:active + .btn-outline-success:focus, .btn-outline-success:active:focus, .btn-outline-success.active:focus, .btn-outline-success.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.5);
}
.btn-outline-success:disabled, .btn-outline-success.disabled {
  color: #198754;
  background-color: transparent;
}
.btn-outline-info {
  color: #0dcaf0;
  border-color: #0dcaf0;
}
.btn-outline-info:hover {
  color: #000;
  background-color: #0dcaf0;
  border-color: #0dcaf0;
}
.btn-check:focus + .btn-outline-info, .btn-outline-info:focus {
  box-shadow: 0 0 0 0.25rem rgba(13, 202, 240, 0.5);
}
.btn-check:checked + .btn-outline-info, .btn-check:active + .btn-outline-info, .btn-outline-info:active, .btn-outline-info.active, .btn-outline-info.dropdown-toggle.show {
  color: #000;
  background-color: #0dcaf0;
  border-color: #0dcaf0;
}
.btn-check:checked + .btn-outline-info:focus, .btn-check:active + .btn-outline-info:focus, .btn-outline-info:active:focus, .btn-outline-info.active:focus, .btn-outline-info.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(13, 202, 240, 0.5);
}
.btn-outline-info:disabled, .btn-outline-info.disabled {
  color: #0dcaf0;
  background-color: transparent;
}
.btn-outline-warning {
  color: #ffc107;
  border-color: #ffc107;
}
.btn-outline-warning:hover {
  color: #000;
  background-color: #ffc107;
  border-color: #ffc107;
}
.btn-check:focus + .btn-outline-warning, .btn-outline-warning:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.5);
}
.btn-check:checked + .btn-outline-warning, .btn-check:active + .btn-outline-warning, .btn-outline-warning:active, .btn-outline-warning.active, .btn-outline-warning.dropdown-toggle.show {
  color: #000;
  background-color: #ffc107;
  border-color: #ffc107;
}
.btn-check:checked + .btn-outline-warning:focus, .btn-check:active + .btn-outline-warning:focus, .btn-outline-warning:active:focus, .btn-outline-warning.active:focus, .btn-outline-warning.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.5);
}
.btn-outline-warning:disabled, .btn-outline-warning.disabled {
  color: #ffc107;
  background-color: transparent;
}
.btn-outline-danger {
  color: #dc3545;
  border-color: #dc3545;
}
.btn-outline-danger:hover {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}
.btn-check:focus + .btn-outline-danger, .btn-outline-danger:focus {
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5);
}
.btn-check:checked + .btn-outline-danger, .btn-check:active + .btn-outline-danger, .btn-outline-danger:active, .btn-outline-danger.active, .btn-outline-danger.dropdown-toggle.show {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}
.btn-check:checked + .btn-outline-danger:focus, .btn-check:active + .btn-outline-danger:focus, .btn-outline-danger:active:focus, .btn-outline-danger.active:focus, .btn-outline-danger.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5);
}
.btn-outline-danger:disabled, .btn-outline-danger.disabled {
  color: #dc3545;
  background-color: transparent;
}
.btn-outline-light {
  color: #F9FAFB;
  border-color: #F9FAFB;
}
.btn-outline-light:hover {
  color: #000;
  background-color: #F9FAFB;
  border-color: #F9FAFB;
}
.btn-check:focus + .btn-outline-light, .btn-outline-light:focus {
  box-shadow: 0 0 0 0.25rem rgba(249, 250, 251, 0.5);
}
.btn-check:checked + .btn-outline-light, .btn-check:active + .btn-outline-light, .btn-outline-light:active, .btn-outline-light.active, .btn-outline-light.dropdown-toggle.show {
  color: #000;
  background-color: #F9FAFB;
  border-color: #F9FAFB;
}
.btn-check:checked + .btn-outline-light:focus, .btn-check:active + .btn-outline-light:focus, .btn-outline-light:active:focus, .btn-outline-light.active:focus, .btn-outline-light.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(249, 250, 251, 0.5);
}
.btn-outline-light:disabled, .btn-outline-light.disabled {
  color: #F9FAFB;
  background-color: transparent;
}
.btn-outline-dark {
  color: #212B36;
  border-color: #212B36;
}
.btn-outline-dark:hover {
  color: #fff;
  background-color: #212B36;
  border-color: #212B36;
}
.btn-check:focus + .btn-outline-dark, .btn-outline-dark:focus {
  box-shadow: 0 0 0 0.25rem rgba(33, 43, 54, 0.5);
}
.btn-check:checked + .btn-outline-dark, .btn-check:active + .btn-outline-dark, .btn-outline-dark:active, .btn-outline-dark.active, .btn-outline-dark.dropdown-toggle.show {
  color: #fff;
  background-color: #212B36;
  border-color: #212B36;
}
.btn-check:checked + .btn-outline-dark:focus, .btn-check:active + .btn-outline-dark:focus, .btn-outline-dark:active:focus, .btn-outline-dark.active:focus, .btn-outline-dark.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(33, 43, 54, 0.5);
}
.btn-outline-dark:disabled, .btn-outline-dark.disabled {
  color: #212B36;
  background-color: transparent;
}
.btn-outline-white {
  color: #fff;
  border-color: #fff;
}
.btn-outline-white:hover {
  color: #000;
  background-color: #fff;
  border-color: #fff;
}
.btn-check:focus + .btn-outline-white, .btn-outline-white:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.5);
}
.btn-check:checked + .btn-outline-white, .btn-check:active + .btn-outline-white, .btn-outline-white:active, .btn-outline-white.active, .btn-outline-white.dropdown-toggle.show {
  color: #000;
  background-color: #fff;
  border-color: #fff;
}
.btn-check:checked + .btn-outline-white:focus, .btn-check:active + .btn-outline-white:focus, .btn-outline-white:active:focus, .btn-outline-white.active:focus, .btn-outline-white.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.5);
}
.btn-outline-white:disabled, .btn-outline-white.disabled {
  color: #fff;
  background-color: transparent;
}
.btn-outline-light-primary {
  color: #E0DCFE;
  border-color: #E0DCFE;
}
.btn-outline-light-primary:hover {
  color: #000;
  background-color: #E0DCFE;
  border-color: #E0DCFE;
}
.btn-check:focus + .btn-outline-light-primary, .btn-outline-light-primary:focus {
  box-shadow: 0 0 0 0.25rem rgba(224, 220, 254, 0.5);
}
.btn-check:checked + .btn-outline-light-primary, .btn-check:active + .btn-outline-light-primary, .btn-outline-light-primary:active, .btn-outline-light-primary.active, .btn-outline-light-primary.dropdown-toggle.show {
  color: #000;
  background-color: #E0DCFE;
  border-color: #E0DCFE;
}
.btn-check:checked + .btn-outline-light-primary:focus, .btn-check:active + .btn-outline-light-primary:focus, .btn-outline-light-primary:active:focus, .btn-outline-light-primary.active:focus, .btn-outline-light-primary.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(224, 220, 254, 0.5);
}
.btn-outline-light-primary:disabled, .btn-outline-light-primary.disabled {
  color: #E0DCFE;
  background-color: transparent;
}
.btn-outline-light-danger {
  color: #FBEBEC;
  border-color: #FBEBEC;
}
.btn-outline-light-danger:hover {
  color: #000;
  background-color: #FBEBEC;
  border-color: #FBEBEC;
}
.btn-check:focus + .btn-outline-light-danger, .btn-outline-light-danger:focus {
  box-shadow: 0 0 0 0.25rem rgba(251, 235, 236, 0.5);
}
.btn-check:checked + .btn-outline-light-danger, .btn-check:active + .btn-outline-light-danger, .btn-outline-light-danger:active, .btn-outline-light-danger.active, .btn-outline-light-danger.dropdown-toggle.show {
  color: #000;
  background-color: #FBEBEC;
  border-color: #FBEBEC;
}
.btn-check:checked + .btn-outline-light-danger:focus, .btn-check:active + .btn-outline-light-danger:focus, .btn-outline-light-danger:active:focus, .btn-outline-light-danger.active:focus, .btn-outline-light-danger.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(251, 235, 236, 0.5);
}
.btn-outline-light-danger:disabled, .btn-outline-light-danger.disabled {
  color: #FBEBEC;
  background-color: transparent;
}
.btn-outline-light-info {
  color: #E7FAFE;
  border-color: #E7FAFE;
}
.btn-outline-light-info:hover {
  color: #000;
  background-color: #E7FAFE;
  border-color: #E7FAFE;
}
.btn-check:focus + .btn-outline-light-info, .btn-outline-light-info:focus {
  box-shadow: 0 0 0 0.25rem rgba(231, 250, 254, 0.5);
}
.btn-check:checked + .btn-outline-light-info, .btn-check:active + .btn-outline-light-info, .btn-outline-light-info:active, .btn-outline-light-info.active, .btn-outline-light-info.dropdown-toggle.show {
  color: #000;
  background-color: #E7FAFE;
  border-color: #E7FAFE;
}
.btn-check:checked + .btn-outline-light-info:focus, .btn-check:active + .btn-outline-light-info:focus, .btn-outline-light-info:active:focus, .btn-outline-light-info.active:focus, .btn-outline-light-info.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(231, 250, 254, 0.5);
}
.btn-outline-light-info:disabled, .btn-outline-light-info.disabled {
  color: #E7FAFE;
  background-color: transparent;
}
.btn-outline-light-warning {
  color: #FFF3CD;
  border-color: #FFF3CD;
}
.btn-outline-light-warning:hover {
  color: #000;
  background-color: #FFF3CD;
  border-color: #FFF3CD;
}
.btn-check:focus + .btn-outline-light-warning, .btn-outline-light-warning:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 243, 205, 0.5);
}
.btn-check:checked + .btn-outline-light-warning, .btn-check:active + .btn-outline-light-warning, .btn-outline-light-warning:active, .btn-outline-light-warning.active, .btn-outline-light-warning.dropdown-toggle.show {
  color: #000;
  background-color: #FFF3CD;
  border-color: #FFF3CD;
}
.btn-check:checked + .btn-outline-light-warning:focus, .btn-check:active + .btn-outline-light-warning:focus, .btn-outline-light-warning:active:focus, .btn-outline-light-warning.active:focus, .btn-outline-light-warning.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(255, 243, 205, 0.5);
}
.btn-outline-light-warning:disabled, .btn-outline-light-warning.disabled {
  color: #FFF3CD;
  background-color: transparent;
}
.btn-outline-light-secondary {
  color: #e9ecef;
  border-color: #e9ecef;
}
.btn-outline-light-secondary:hover {
  color: #000;
  background-color: #e9ecef;
  border-color: #e9ecef;
}
.btn-check:focus + .btn-outline-light-secondary, .btn-outline-light-secondary:focus {
  box-shadow: 0 0 0 0.25rem rgba(233, 236, 239, 0.5);
}
.btn-check:checked + .btn-outline-light-secondary, .btn-check:active + .btn-outline-light-secondary, .btn-outline-light-secondary:active, .btn-outline-light-secondary.active, .btn-outline-light-secondary.dropdown-toggle.show {
  color: #000;
  background-color: #e9ecef;
  border-color: #e9ecef;
}
.btn-check:checked + .btn-outline-light-secondary:focus, .btn-check:active + .btn-outline-light-secondary:focus, .btn-outline-light-secondary:active:focus, .btn-outline-light-secondary.active:focus, .btn-outline-light-secondary.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(233, 236, 239, 0.5);
}
.btn-outline-light-secondary:disabled, .btn-outline-light-secondary.disabled {
  color: #e9ecef;
  background-color: transparent;
}
.btn-outline-light-success {
  color: #EAF6EC;
  border-color: #EAF6EC;
}
.btn-outline-light-success:hover {
  color: #000;
  background-color: #EAF6EC;
  border-color: #EAF6EC;
}
.btn-check:focus + .btn-outline-light-success, .btn-outline-light-success:focus {
  box-shadow: 0 0 0 0.25rem rgba(234, 246, 236, 0.5);
}
.btn-check:checked + .btn-outline-light-success, .btn-check:active + .btn-outline-light-success, .btn-outline-light-success:active, .btn-outline-light-success.active, .btn-outline-light-success.dropdown-toggle.show {
  color: #000;
  background-color: #EAF6EC;
  border-color: #EAF6EC;
}
.btn-check:checked + .btn-outline-light-success:focus, .btn-check:active + .btn-outline-light-success:focus, .btn-outline-light-success:active:focus, .btn-outline-light-success.active:focus, .btn-outline-light-success.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(234, 246, 236, 0.5);
}
.btn-outline-light-success:disabled, .btn-outline-light-success.disabled {
  color: #EAF6EC;
  background-color: transparent;
}
.btn-outline-light-dark {
  color: #d1cfd8;
  border-color: #d1cfd8;
}
.btn-outline-light-dark:hover {
  color: #000;
  background-color: #d1cfd8;
  border-color: #d1cfd8;
}
.btn-check:focus + .btn-outline-light-dark, .btn-outline-light-dark:focus {
  box-shadow: 0 0 0 0.25rem rgba(209, 207, 216, 0.5);
}
.btn-check:checked + .btn-outline-light-dark, .btn-check:active + .btn-outline-light-dark, .btn-outline-light-dark:active, .btn-outline-light-dark.active, .btn-outline-light-dark.dropdown-toggle.show {
  color: #000;
  background-color: #d1cfd8;
  border-color: #d1cfd8;
}
.btn-check:checked + .btn-outline-light-dark:focus, .btn-check:active + .btn-outline-light-dark:focus, .btn-outline-light-dark:active:focus, .btn-outline-light-dark.active:focus, .btn-outline-light-dark.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(209, 207, 216, 0.5);
}
.btn-outline-light-dark:disabled, .btn-outline-light-dark.disabled {
  color: #d1cfd8;
  background-color: transparent;
}
.btn-outline-dark-primary {
  color: #593cc1;
  border-color: #593cc1;
}
.btn-outline-dark-primary:hover {
  color: #fff;
  background-color: #593cc1;
  border-color: #593cc1;
}
.btn-check:focus + .btn-outline-dark-primary, .btn-outline-dark-primary:focus {
  box-shadow: 0 0 0 0.25rem rgba(89, 60, 193, 0.5);
}
.btn-check:checked + .btn-outline-dark-primary, .btn-check:active + .btn-outline-dark-primary, .btn-outline-dark-primary:active, .btn-outline-dark-primary.active, .btn-outline-dark-primary.dropdown-toggle.show {
  color: #fff;
  background-color: #593cc1;
  border-color: #593cc1;
}
.btn-check:checked + .btn-outline-dark-primary:focus, .btn-check:active + .btn-outline-dark-primary:focus, .btn-outline-dark-primary:active:focus, .btn-outline-dark-primary.active:focus, .btn-outline-dark-primary.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(89, 60, 193, 0.5);
}
.btn-outline-dark-primary:disabled, .btn-outline-dark-primary.disabled {
  color: #593cc1;
  background-color: transparent;
}
.btn-outline-dark-warning {
  color: #c28135;
  border-color: #c28135;
}
.btn-outline-dark-warning:hover {
  color: #000;
  background-color: #c28135;
  border-color: #c28135;
}
.btn-check:focus + .btn-outline-dark-warning, .btn-outline-dark-warning:focus {
  box-shadow: 0 0 0 0.25rem rgba(194, 129, 53, 0.5);
}
.btn-check:checked + .btn-outline-dark-warning, .btn-check:active + .btn-outline-dark-warning, .btn-outline-dark-warning:active, .btn-outline-dark-warning.active, .btn-outline-dark-warning.dropdown-toggle.show {
  color: #000;
  background-color: #c28135;
  border-color: #c28135;
}
.btn-check:checked + .btn-outline-dark-warning:focus, .btn-check:active + .btn-outline-dark-warning:focus, .btn-outline-dark-warning:active:focus, .btn-outline-dark-warning.active:focus, .btn-outline-dark-warning.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(194, 129, 53, 0.5);
}
.btn-outline-dark-warning:disabled, .btn-outline-dark-warning.disabled {
  color: #c28135;
  background-color: transparent;
}
.btn-outline-dark-info {
  color: #51a0c2;
  border-color: #51a0c2;
}
.btn-outline-dark-info:hover {
  color: #000;
  background-color: #51a0c2;
  border-color: #51a0c2;
}
.btn-check:focus + .btn-outline-dark-info, .btn-outline-dark-info:focus {
  box-shadow: 0 0 0 0.25rem rgba(81, 160, 194, 0.5);
}
.btn-check:checked + .btn-outline-dark-info, .btn-check:active + .btn-outline-dark-info, .btn-outline-dark-info:active, .btn-outline-dark-info.active, .btn-outline-dark-info.dropdown-toggle.show {
  color: #000;
  background-color: #51a0c2;
  border-color: #51a0c2;
}
.btn-check:checked + .btn-outline-dark-info:focus, .btn-check:active + .btn-outline-dark-info:focus, .btn-outline-dark-info:active:focus, .btn-outline-dark-info.active:focus, .btn-outline-dark-info.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(81, 160, 194, 0.5);
}
.btn-outline-dark-info:disabled, .btn-outline-dark-info.disabled {
  color: #51a0c2;
  background-color: transparent;
}
.btn-outline-dark-danger {
  color: #ae302e;
  border-color: #ae302e;
}
.btn-outline-dark-danger:hover {
  color: #fff;
  background-color: #ae302e;
  border-color: #ae302e;
}
.btn-check:focus + .btn-outline-dark-danger, .btn-outline-dark-danger:focus {
  box-shadow: 0 0 0 0.25rem rgba(174, 48, 46, 0.5);
}
.btn-check:checked + .btn-outline-dark-danger, .btn-check:active + .btn-outline-dark-danger, .btn-outline-dark-danger:active, .btn-outline-dark-danger.active, .btn-outline-dark-danger.dropdown-toggle.show {
  color: #fff;
  background-color: #ae302e;
  border-color: #ae302e;
}
.btn-check:checked + .btn-outline-dark-danger:focus, .btn-check:active + .btn-outline-dark-danger:focus, .btn-outline-dark-danger:active:focus, .btn-outline-dark-danger.active:focus, .btn-outline-dark-danger.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(174, 48, 46, 0.5);
}
.btn-outline-dark-danger:disabled, .btn-outline-dark-danger.disabled {
  color: #ae302e;
  background-color: transparent;
}
.btn-outline-dark-success {
  color: #139a74;
  border-color: #139a74;
}
.btn-outline-dark-success:hover {
  color: #000;
  background-color: #139a74;
  border-color: #139a74;
}
.btn-check:focus + .btn-outline-dark-success, .btn-outline-dark-success:focus {
  box-shadow: 0 0 0 0.25rem rgba(19, 154, 116, 0.5);
}
.btn-check:checked + .btn-outline-dark-success, .btn-check:active + .btn-outline-dark-success, .btn-outline-dark-success:active, .btn-outline-dark-success.active, .btn-outline-dark-success.dropdown-toggle.show {
  color: #000;
  background-color: #139a74;
  border-color: #139a74;
}
.btn-check:checked + .btn-outline-dark-success:focus, .btn-check:active + .btn-outline-dark-success:focus, .btn-outline-dark-success:active:focus, .btn-outline-dark-success.active:focus, .btn-outline-dark-success.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(19, 154, 116, 0.5);
}
.btn-outline-dark-success:disabled, .btn-outline-dark-success.disabled {
  color: #139a74;
  background-color: transparent;
}
.btn-outline-dark-secondary {
  color: #5c596d;
  border-color: #5c596d;
}
.btn-outline-dark-secondary:hover {
  color: #fff;
  background-color: #5c596d;
  border-color: #5c596d;
}
.btn-check:focus + .btn-outline-dark-secondary, .btn-outline-dark-secondary:focus {
  box-shadow: 0 0 0 0.25rem rgba(92, 89, 109, 0.5);
}
.btn-check:checked + .btn-outline-dark-secondary, .btn-check:active + .btn-outline-dark-secondary, .btn-outline-dark-secondary:active, .btn-outline-dark-secondary.active, .btn-outline-dark-secondary.dropdown-toggle.show {
  color: #fff;
  background-color: #5c596d;
  border-color: #5c596d;
}
.btn-check:checked + .btn-outline-dark-secondary:focus, .btn-check:active + .btn-outline-dark-secondary:focus, .btn-outline-dark-secondary:active:focus, .btn-outline-dark-secondary.active:focus, .btn-outline-dark-secondary.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.25rem rgba(92, 89, 109, 0.5);
}
.btn-outline-dark-secondary:disabled, .btn-outline-dark-secondary.disabled {
  color: #5c596d;
  background-color: transparent;
}
.btn-link {
  font-weight: 400;
  color: #624BFF;
  text-decoration: none;
}
.btn-link:hover {
  color: #4e3ccc;
  text-decoration: none;
}
.btn-link:focus {
  text-decoration: none;
}
.btn-link:disabled, .btn-link.disabled {
  color: #637381;
}
.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.171875rem;
  border-radius: 0.5rem;
}
.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.8203125rem;
  border-radius: 0.2rem;
}
.fade {
  transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}
.collapse:not(.show) {
  display: none;
}
.collapsing {
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}
.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing.collapse-horizontal {
    transition: none;
  }
}
.dropup,
.dropend,
.dropdown,
.dropstart {
  position: relative;
}
.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropdown-menu {
  position: absolute;
  z-index: 1000;
  display: none;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0;
  font-size: 0.9375rem;
  color: #637381;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.375rem;
}
.dropdown-menu[data-bs-popper] {
  top: 100%;
  left: 0;
  margin-top: 0.125rem;
}
.dropdown-menu-start {
  --bs-position: start;
}
.dropdown-menu-start[data-bs-popper] {
  right: auto;
  left: 0;
}
.dropdown-menu-end {
  --bs-position: end;
}
.dropdown-menu-end[data-bs-popper] {
  right: 0;
  left: auto;
}
@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start;
  }
  .dropdown-menu-sm-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-end {
    --bs-position: end;
  }
  .dropdown-menu-sm-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start;
  }
  .dropdown-menu-md-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-end {
    --bs-position: end;
  }
  .dropdown-menu-md-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start;
  }
  .dropdown-menu-lg-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-end {
    --bs-position: end;
  }
  .dropdown-menu-lg-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start;
  }
  .dropdown-menu-xl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-end {
    --bs-position: end;
  }
  .dropdown-menu-xl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start;
  }
  .dropdown-menu-xxl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xxl-end {
    --bs-position: end;
  }
  .dropdown-menu-xxl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}
.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}
.dropend .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropend .dropdown-toggle::after {
  vertical-align: 0;
}
.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}
.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}
.dropstart .dropdown-toggle::after {
  display: none;
}
.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}
.dropstart .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle::before {
  vertical-align: 0;
}
.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid rgba(0, 0, 0, 0.15);
}
.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1rem;
  clear: both;
  font-weight: 400;
  color: #161C24;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}
.dropdown-item:hover, .dropdown-item:focus {
  color: #141920;
  background-color: #F4F6F8;
}
.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #624BFF;
}
.dropdown-item.disabled, .dropdown-item:disabled {
  color: #919EAB;
  pointer-events: none;
  background-color: transparent;
}
.dropdown-menu.show {
  display: block;
}
.dropdown-header {
  display: block;
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 0.8203125rem;
  color: #637381;
  white-space: nowrap;
}
.dropdown-item-text {
  display: block;
  padding: 0.25rem 1rem;
  color: #161C24;
}
.dropdown-menu-dark {
  color: #DFE3E8;
  background-color: #212B36;
  border-color: rgba(0, 0, 0, 0.15);
}
.dropdown-menu-dark .dropdown-item {
  color: #DFE3E8;
}
.dropdown-menu-dark .dropdown-item:hover, .dropdown-menu-dark .dropdown-item:focus {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.15);
}
.dropdown-menu-dark .dropdown-item.active, .dropdown-menu-dark .dropdown-item:active {
  color: #fff;
  background-color: #624BFF;
}
.dropdown-menu-dark .dropdown-item.disabled, .dropdown-menu-dark .dropdown-item:disabled {
  color: #919EAB;
}
.dropdown-menu-dark .dropdown-divider {
  border-color: rgba(0, 0, 0, 0.15);
}
.dropdown-menu-dark .dropdown-item-text {
  color: #DFE3E8;
}
.dropdown-menu-dark .dropdown-header {
  color: #919EAB;
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  flex: 1 1 auto;
}
.btn-group > .btn-check:checked + .btn,
.btn-group > .btn-check:focus + .btn,
.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn-check:checked + .btn,
.btn-group-vertical > .btn-check:focus + .btn,
.btn-group-vertical > .btn:hover,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}
.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}
.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}
.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:nth-child(n+3),
.btn-group > :not(.btn-check) + .btn,
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}
.dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropend .dropdown-toggle-split::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle-split::before {
  margin-right: 0;
}
.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem;
}
.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}
.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn ~ .btn,
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.nav-link {
  display: block;
  padding: 0.5rem 1rem;
  color: #624BFF;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .nav-link {
    transition: none;
  }
}
.nav-link:hover, .nav-link:focus {
  color: #4e3ccc;
}
.nav-link.disabled {
  color: #637381;
  pointer-events: none;
  cursor: default;
}
.nav-tabs {
  border-bottom: 1px solid #DFE3E8;
}
.nav-tabs .nav-link {
  margin-bottom: -1px;
  background: none;
  border: 1px solid transparent;
  border-top-left-radius: 0.375rem;
  border-top-right-radius: 0.375rem;
}
.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #F4F6F8 #F4F6F8 #DFE3E8;
  isolation: isolate;
}
.nav-tabs .nav-link.disabled {
  color: #637381;
  background-color: transparent;
  border-color: transparent;
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #454F5B;
  background-color: #fff;
  border-color: #DFE3E8 #DFE3E8 #fff;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.nav-pills .nav-link {
  background: none;
  border: 0;
  border-radius: 0.375rem;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #624BFF;
}
.nav-fill > .nav-link,
.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}
.nav-justified > .nav-link,
.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}
.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%;
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.navbar > .container,
.navbar > .container-fluid,
.navbar > .container-sm,
.navbar > .container-md,
.navbar > .container-lg,
.navbar > .container-xl,
.navbar > .container-xxl {
  display: flex;
  flex-wrap: inherit;
  align-items: center;
  justify-content: space-between;
}
.navbar-brand {
  padding-top: 0.32421875rem;
  padding-bottom: 0.32421875rem;
  margin-right: 1rem;
  font-size: 1.171875rem;
  white-space: nowrap;
}
.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}
.navbar-nav .dropdown-menu {
  position: static;
}
.navbar-text {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}
.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.171875rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.375rem;
  transition: box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .navbar-toggler {
    transition: none;
  }
}
.navbar-toggler:hover {
  text-decoration: none;
}
.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  box-shadow: 0 0 0 0.25rem;
}
.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}
.navbar-nav-scroll {
  max-height: var(--bs-scroll-height, 75vh);
  overflow-y: auto;
}
@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
  .navbar-expand-sm .offcanvas-header {
    display: none;
  }
  .navbar-expand-sm .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    -webkit-transform: none;
            transform: none;
  }
  .navbar-expand-sm .offcanvas-top,
.navbar-expand-sm .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-sm .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
  .navbar-expand-md .offcanvas-header {
    display: none;
  }
  .navbar-expand-md .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    -webkit-transform: none;
            transform: none;
  }
  .navbar-expand-md .offcanvas-top,
.navbar-expand-md .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-md .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
  .navbar-expand-lg .offcanvas-header {
    display: none;
  }
  .navbar-expand-lg .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    -webkit-transform: none;
            transform: none;
  }
  .navbar-expand-lg .offcanvas-top,
.navbar-expand-lg .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-lg .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xl .offcanvas-header {
    display: none;
  }
  .navbar-expand-xl .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    -webkit-transform: none;
            transform: none;
  }
  .navbar-expand-xl .offcanvas-top,
.navbar-expand-xl .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-xl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1400px) {
  .navbar-expand-xxl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xxl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xxl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xxl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xxl .offcanvas-header {
    display: none;
  }
  .navbar-expand-xxl .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    transition: none;
    -webkit-transform: none;
            transform: none;
  }
  .navbar-expand-xxl .offcanvas-top,
.navbar-expand-xxl .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0;
  }
  .navbar-expand-xxl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
.navbar-expand {
  flex-wrap: nowrap;
  justify-content: flex-start;
}
.navbar-expand .navbar-nav {
  flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}
.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}
.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}
.navbar-expand .offcanvas-header {
  display: none;
}
.navbar-expand .offcanvas {
  position: inherit;
  bottom: 0;
  z-index: 1000;
  flex-grow: 1;
  visibility: visible !important;
  background-color: transparent;
  border-right: 0;
  border-left: 0;
  transition: none;
  -webkit-transform: none;
          transform: none;
}
.navbar-expand .offcanvas-top,
.navbar-expand .offcanvas-bottom {
  height: auto;
  border-top: 0;
  border-bottom: 0;
}
.navbar-expand .offcanvas-body {
  display: flex;
  flex-grow: 0;
  padding: 0;
  overflow-y: visible;
}
.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.55);
}
.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}
.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}
.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.55);
  border-color: rgba(0, 0, 0, 0.1);
}
.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.55);
}
.navbar-light .navbar-text a,
.navbar-light .navbar-text a:hover,
.navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-dark .navbar-brand {
  color: #fff;
}
.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}
.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.55);
}
.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}
.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}
.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.55);
  border-color: rgba(255, 255, 255, 0.1);
}
.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.55);
}
.navbar-dark .navbar-text a,
.navbar-dark .navbar-text a:hover,
.navbar-dark .navbar-text a:focus {
  color: #fff;
}
.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.375rem;
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}
.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: 0.5rem;
  border-bottom-left-radius: 0.5rem;
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}
.card-body {
  flex: 1 1 auto;
  padding: 1.5rem 1.5rem;
}
.card-title {
  margin-bottom: 1.5rem;
}
.card-subtitle {
  margin-top: -0.75rem;
  margin-bottom: 0;
}
.card-text:last-child {
  margin-bottom: 0;
}
.card-link + .card-link {
  margin-left: 1.5rem;
}
.card-header {
  padding: 0.75rem 1.5rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
.card-header:first-child {
  border-radius: 0.5rem 0.5rem 0 0;
}
.card-footer {
  padding: 0.75rem 1.5rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}
.card-footer:last-child {
  border-radius: 0 0 0.5rem 0.5rem;
}
.card-header-tabs {
  margin-right: -0.75rem;
  margin-bottom: -0.75rem;
  margin-left: -0.75rem;
  border-bottom: 0;
}
.card-header-pills {
  margin-right: -0.75rem;
  margin-left: -0.75rem;
}
.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  border-radius: 0.5rem;
}
.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%;
}
.card-img,
.card-img-top {
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}
.card-img,
.card-img-bottom {
  border-bottom-right-radius: 0.5rem;
  border-bottom-left-radius: 0.5rem;
}
.card-group > .card {
  margin-bottom: 16px;
}
@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }
  .card-group > .card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
.card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
.card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
.card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
.card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}
.accordion-button {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  padding: 1rem 1.25rem;
  font-size: 0.9375rem;
  color: #637381;
  text-align: left;
  background-color: #fff;
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button {
    transition: none;
  }
}
.accordion-button:not(.collapsed) {
  color: #5844e6;
  background-color: #efedff;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
}
.accordion-button:not(.collapsed)::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%235844e6'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
}
.accordion-button::after {
  flex-shrink: 0;
  width: 1.25rem;
  height: 1.25rem;
  margin-left: auto;
  content: "";
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23637381'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-size: 1.25rem;
  transition: -webkit-transform 0.2s ease-in-out;
  transition: transform 0.2s ease-in-out;
  transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button::after {
    transition: none;
  }
}
.accordion-button:hover {
  z-index: 2;
}
.accordion-button:focus {
  z-index: 3;
  border-color: #b1a5ff;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(98, 75, 255, 0.25);
}
.accordion-header {
  margin-bottom: 0;
}
.accordion-item {
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}
.accordion-item:first-of-type {
  border-top-left-radius: 0.375rem;
  border-top-right-radius: 0.375rem;
}
.accordion-item:first-of-type .accordion-button {
  border-top-left-radius: calc(0.375rem - 1px);
  border-top-right-radius: calc(0.375rem - 1px);
}
.accordion-item:not(:first-of-type) {
  border-top: 0;
}
.accordion-item:last-of-type {
  border-bottom-right-radius: 0.375rem;
  border-bottom-left-radius: 0.375rem;
}
.accordion-item:last-of-type .accordion-button.collapsed {
  border-bottom-right-radius: calc(0.375rem - 1px);
  border-bottom-left-radius: calc(0.375rem - 1px);
}
.accordion-item:last-of-type .accordion-collapse {
  border-bottom-right-radius: 0.375rem;
  border-bottom-left-radius: 0.375rem;
}
.accordion-body {
  padding: 1rem 1.25rem;
}
.accordion-flush .accordion-collapse {
  border-width: 0;
}
.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}
.accordion-flush .accordion-item:first-child {
  border-top: 0;
}
.accordion-flush .accordion-item:last-child {
  border-bottom: 0;
}
.accordion-flush .accordion-item .accordion-button {
  border-radius: 0;
}
.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0 0;
  margin-bottom: 1rem;
  list-style: none;
}
.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}
.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: 0.5rem;
  color: #637381;
  content: var(--bs-breadcrumb-divider, "/") /* rtl: var(--bs-breadcrumb-divider, "/") */;
}
.breadcrumb-item.active {
  color: #637381;
}
.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
}
.page-link {
  position: relative;
  display: block;
  color: #624BFF;
  background-color: #fff;
  border: 1px solid #DFE3E8;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .page-link {
    transition: none;
  }
}
.page-link:hover {
  z-index: 2;
  color: #4e3ccc;
  background-color: #F4F6F8;
  border-color: #DFE3E8;
}
.page-link:focus {
  z-index: 3;
  color: #4e3ccc;
  background-color: #F4F6F8;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(98, 75, 255, 0.25);
}
.page-item:not(:first-child) .page-link {
  margin-left: -1px;
}
.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #624BFF;
  border-color: #624BFF;
}
.page-item.disabled .page-link {
  color: #637381;
  pointer-events: none;
  background-color: #fff;
  border-color: #DFE3E8;
}
.page-link {
  padding: 0.375rem 0.75rem;
}
.page-item:first-child .page-link {
  border-top-left-radius: 0.375rem;
  border-bottom-left-radius: 0.375rem;
}
.page-item:last-child .page-link {
  border-top-right-radius: 0.375rem;
  border-bottom-right-radius: 0.375rem;
}
.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.171875rem;
}
.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.5rem;
  border-bottom-left-radius: 0.5rem;
}
.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.5rem;
  border-bottom-right-radius: 0.5rem;
}
.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.8203125rem;
}
.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}
.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}
.badge {
  display: inline-block;
  padding: 0.35em 0.65em;
  font-size: 0.75em;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.375rem;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.alert {
  position: relative;
  padding: 1rem 1rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.375rem;
}
.alert-heading {
  color: inherit;
}
.alert-link {
  font-weight: 700;
}
.alert-dismissible {
  padding-right: 3rem;
}
.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.25rem 1rem;
}
.alert-primary {
  color: #3b2d99;
  background-color: #e0dbff;
  border-color: #d0c9ff;
}
.alert-primary .alert-link {
  color: #2f247a;
}
.alert-secondary {
  color: #3b454d;
  background-color: #e0e3e6;
  border-color: #d0d5d9;
}
.alert-secondary .alert-link {
  color: #2f373e;
}
.alert-success {
  color: #0f5132;
  background-color: #d1e7dd;
  border-color: #badbcc;
}
.alert-success .alert-link {
  color: #0c4128;
}
.alert-info {
  color: #055160;
  background-color: #cff4fc;
  border-color: #b6effb;
}
.alert-info .alert-link {
  color: #04414d;
}
.alert-warning {
  color: #664d03;
  background-color: #fff3cd;
  border-color: #ffecb5;
}
.alert-warning .alert-link {
  color: #523e02;
}
.alert-danger {
  color: #842029;
  background-color: #f8d7da;
  border-color: #f5c2c7;
}
.alert-danger .alert-link {
  color: #6a1a21;
}
.alert-light {
  color: #646464;
  background-color: #fefefe;
  border-color: #fdfefe;
}
.alert-light .alert-link {
  color: #505050;
}
.alert-dark {
  color: #141a20;
  background-color: #d3d5d7;
  border-color: #bcbfc3;
}
.alert-dark .alert-link {
  color: #10151a;
}
.alert-white {
  color: #666666;
  background-color: white;
  border-color: white;
}
.alert-white .alert-link {
  color: #525252;
}
.alert-light-primary {
  color: #5a5866;
  background-color: #f9f8ff;
  border-color: #f6f5ff;
}
.alert-light-primary .alert-link {
  color: #484652;
}
.alert-light-danger {
  color: #645e5e;
  background-color: #fefbfb;
  border-color: #fef9f9;
}
.alert-light-danger .alert-link {
  color: #504b4b;
}
.alert-light-info {
  color: #5c6466;
  background-color: #fafeff;
  border-color: #f8feff;
}
.alert-light-info .alert-link {
  color: #4a5052;
}
.alert-light-warning {
  color: #666152;
  background-color: #fffdf5;
  border-color: #fffbf0;
}
.alert-light-warning .alert-link {
  color: #524e42;
}
.alert-light-secondary {
  color: #5d5e60;
  background-color: #fbfbfc;
  border-color: #f8f9fa;
}
.alert-light-secondary .alert-link {
  color: #4a4b4d;
}
.alert-light-success {
  color: #5e625e;
  background-color: #fbfdfb;
  border-color: #f9fcf9;
}
.alert-light-success .alert-link {
  color: #4b4e4b;
}
.alert-light-dark {
  color: #545356;
  background-color: #f6f5f7;
  border-color: #f1f1f3;
}
.alert-light-dark .alert-link {
  color: #434245;
}
.alert-dark-primary {
  color: #352474;
  background-color: #ded8f3;
  border-color: #cdc5ec;
}
.alert-dark-primary .alert-link {
  color: #2a1d5d;
}
.alert-dark-warning {
  color: #744d20;
  background-color: #f3e6d7;
  border-color: #edd9c2;
}
.alert-dark-warning .alert-link {
  color: #5d3e1a;
}
.alert-dark-info {
  color: #316074;
  background-color: #dcecf3;
  border-color: #cbe3ed;
}
.alert-dark-info .alert-link {
  color: #274d5d;
}
.alert-dark-danger {
  color: #681d1c;
  background-color: #efd6d5;
  border-color: #e7c1c0;
}
.alert-dark-danger .alert-link {
  color: #531716;
}
.alert-dark-success {
  color: #0b5c46;
  background-color: #d0ebe3;
  border-color: #b8e1d5;
}
.alert-dark-success .alert-link {
  color: #094a38;
}
.alert-dark-secondary {
  color: #373541;
  background-color: #dedee2;
  border-color: #cecdd3;
}
.alert-dark-secondary .alert-link {
  color: #2c2a34;
}
@-webkit-keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem;
  }
}
@keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem;
  }
}
.progress {
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.703125rem;
  background-color: #F4F6F8;
  border-radius: 0.375rem;
}
.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #624BFF;
  transition: width 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}
.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}
.progress-bar-animated {
  -webkit-animation: 1s linear infinite progress-bar-stripes;
          animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    -webkit-animation: none;
            animation: none;
  }
}
.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0.375rem;
}
.list-group-numbered {
  list-style-type: none;
  counter-reset: section;
}
.list-group-numbered > li::before {
  content: counters(section, ".") ". ";
  counter-increment: section;
}
.list-group-item-action {
  width: 100%;
  color: #454F5B;
  text-align: inherit;
}
.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: #454F5B;
  text-decoration: none;
  background-color: #F9FAFB;
}
.list-group-item-action:active {
  color: #637381;
  background-color: #F4F6F8;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 0.5rem 1rem;
  color: #161C24;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}
.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.list-group-item.disabled, .list-group-item:disabled {
  color: #637381;
  pointer-events: none;
  background-color: #fff;
}
.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #624BFF;
  border-color: #624BFF;
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
.list-group-item + .list-group-item.active {
  margin-top: -1px;
  border-top-width: 1px;
}
.list-group-horizontal {
  flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child {
  border-bottom-left-radius: 0.375rem;
  border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child {
  border-top-right-radius: 0.375rem;
  border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: 1px;
  border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: -1px;
  border-left-width: 1px;
}
@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child {
    border-bottom-left-radius: 0.375rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child {
    border-top-right-radius: 0.375rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child {
    border-bottom-left-radius: 0.375rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child {
    border-top-right-radius: 0.375rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child {
    border-bottom-left-radius: 0.375rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child {
    border-top-right-radius: 0.375rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child {
    border-bottom-left-radius: 0.375rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child {
    border-top-right-radius: 0.375rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    flex-direction: row;
  }
  .list-group-horizontal-xxl > .list-group-item:first-child {
    border-bottom-left-radius: 0.375rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item:last-child {
    border-top-right-radius: 0.375rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
.list-group-flush {
  border-radius: 0;
}
.list-group-flush > .list-group-item {
  border-width: 0 0 1px;
}
.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}
.list-group-item-primary {
  color: #3b2d99;
  background-color: #e0dbff;
}
.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #3b2d99;
  background-color: #cac5e6;
}
.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #3b2d99;
  border-color: #3b2d99;
}
.list-group-item-secondary {
  color: #3b454d;
  background-color: #e0e3e6;
}
.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #3b454d;
  background-color: #cacccf;
}
.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #3b454d;
  border-color: #3b454d;
}
.list-group-item-success {
  color: #0f5132;
  background-color: #d1e7dd;
}
.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #0f5132;
  background-color: #bcd0c7;
}
.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #0f5132;
  border-color: #0f5132;
}
.list-group-item-info {
  color: #055160;
  background-color: #cff4fc;
}
.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #055160;
  background-color: #badce3;
}
.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #055160;
  border-color: #055160;
}
.list-group-item-warning {
  color: #664d03;
  background-color: #fff3cd;
}
.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #664d03;
  background-color: #e6dbb9;
}
.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #664d03;
  border-color: #664d03;
}
.list-group-item-danger {
  color: #842029;
  background-color: #f8d7da;
}
.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #842029;
  background-color: #dfc2c4;
}
.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #842029;
  border-color: #842029;
}
.list-group-item-light {
  color: #646464;
  background-color: #fefefe;
}
.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #646464;
  background-color: #e5e5e5;
}
.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #646464;
  border-color: #646464;
}
.list-group-item-dark {
  color: #141a20;
  background-color: #d3d5d7;
}
.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #141a20;
  background-color: #bec0c2;
}
.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #141a20;
  border-color: #141a20;
}
.list-group-item-white {
  color: #666666;
  background-color: white;
}
.list-group-item-white.list-group-item-action:hover, .list-group-item-white.list-group-item-action:focus {
  color: #666666;
  background-color: #e6e6e6;
}
.list-group-item-white.list-group-item-action.active {
  color: #fff;
  background-color: #666666;
  border-color: #666666;
}
.list-group-item-light-primary {
  color: #5a5866;
  background-color: #f9f8ff;
}
.list-group-item-light-primary.list-group-item-action:hover, .list-group-item-light-primary.list-group-item-action:focus {
  color: #5a5866;
  background-color: #e0dfe6;
}
.list-group-item-light-primary.list-group-item-action.active {
  color: #fff;
  background-color: #5a5866;
  border-color: #5a5866;
}
.list-group-item-light-danger {
  color: #645e5e;
  background-color: #fefbfb;
}
.list-group-item-light-danger.list-group-item-action:hover, .list-group-item-light-danger.list-group-item-action:focus {
  color: #645e5e;
  background-color: #e5e2e2;
}
.list-group-item-light-danger.list-group-item-action.active {
  color: #fff;
  background-color: #645e5e;
  border-color: #645e5e;
}
.list-group-item-light-info {
  color: #5c6466;
  background-color: #fafeff;
}
.list-group-item-light-info.list-group-item-action:hover, .list-group-item-light-info.list-group-item-action:focus {
  color: #5c6466;
  background-color: #e1e5e6;
}
.list-group-item-light-info.list-group-item-action.active {
  color: #fff;
  background-color: #5c6466;
  border-color: #5c6466;
}
.list-group-item-light-warning {
  color: #666152;
  background-color: #fffdf5;
}
.list-group-item-light-warning.list-group-item-action:hover, .list-group-item-light-warning.list-group-item-action:focus {
  color: #666152;
  background-color: #e6e4dd;
}
.list-group-item-light-warning.list-group-item-action.active {
  color: #fff;
  background-color: #666152;
  border-color: #666152;
}
.list-group-item-light-secondary {
  color: #5d5e60;
  background-color: #fbfbfc;
}
.list-group-item-light-secondary.list-group-item-action:hover, .list-group-item-light-secondary.list-group-item-action:focus {
  color: #5d5e60;
  background-color: #e2e2e3;
}
.list-group-item-light-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #5d5e60;
  border-color: #5d5e60;
}
.list-group-item-light-success {
  color: #5e625e;
  background-color: #fbfdfb;
}
.list-group-item-light-success.list-group-item-action:hover, .list-group-item-light-success.list-group-item-action:focus {
  color: #5e625e;
  background-color: #e2e4e2;
}
.list-group-item-light-success.list-group-item-action.active {
  color: #fff;
  background-color: #5e625e;
  border-color: #5e625e;
}
.list-group-item-light-dark {
  color: #545356;
  background-color: #f6f5f7;
}
.list-group-item-light-dark.list-group-item-action:hover, .list-group-item-light-dark.list-group-item-action:focus {
  color: #545356;
  background-color: #ddddde;
}
.list-group-item-light-dark.list-group-item-action.active {
  color: #fff;
  background-color: #545356;
  border-color: #545356;
}
.list-group-item-dark-primary {
  color: #352474;
  background-color: #ded8f3;
}
.list-group-item-dark-primary.list-group-item-action:hover, .list-group-item-dark-primary.list-group-item-action:focus {
  color: #352474;
  background-color: #c8c2db;
}
.list-group-item-dark-primary.list-group-item-action.active {
  color: #fff;
  background-color: #352474;
  border-color: #352474;
}
.list-group-item-dark-warning {
  color: #744d20;
  background-color: #f3e6d7;
}
.list-group-item-dark-warning.list-group-item-action:hover, .list-group-item-dark-warning.list-group-item-action:focus {
  color: #744d20;
  background-color: #dbcfc2;
}
.list-group-item-dark-warning.list-group-item-action.active {
  color: #fff;
  background-color: #744d20;
  border-color: #744d20;
}
.list-group-item-dark-info {
  color: #316074;
  background-color: #dcecf3;
}
.list-group-item-dark-info.list-group-item-action:hover, .list-group-item-dark-info.list-group-item-action:focus {
  color: #316074;
  background-color: #c6d4db;
}
.list-group-item-dark-info.list-group-item-action.active {
  color: #fff;
  background-color: #316074;
  border-color: #316074;
}
.list-group-item-dark-danger {
  color: #681d1c;
  background-color: #efd6d5;
}
.list-group-item-dark-danger.list-group-item-action:hover, .list-group-item-dark-danger.list-group-item-action:focus {
  color: #681d1c;
  background-color: #d7c1c0;
}
.list-group-item-dark-danger.list-group-item-action.active {
  color: #fff;
  background-color: #681d1c;
  border-color: #681d1c;
}
.list-group-item-dark-success {
  color: #0b5c46;
  background-color: #d0ebe3;
}
.list-group-item-dark-success.list-group-item-action:hover, .list-group-item-dark-success.list-group-item-action:focus {
  color: #0b5c46;
  background-color: #bbd4cc;
}
.list-group-item-dark-success.list-group-item-action.active {
  color: #fff;
  background-color: #0b5c46;
  border-color: #0b5c46;
}
.list-group-item-dark-secondary {
  color: #373541;
  background-color: #dedee2;
}
.list-group-item-dark-secondary.list-group-item-action:hover, .list-group-item-dark-secondary.list-group-item-action:focus {
  color: #373541;
  background-color: #c8c8cb;
}
.list-group-item-dark-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #373541;
  border-color: #373541;
}
.btn-close {
  box-sizing: content-box;
  width: 1em;
  height: 1em;
  padding: 0.25em 0.25em;
  color: #000;
  background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
  border: 0;
  border-radius: 0.375rem;
  opacity: 0.5;
}
.btn-close:hover {
  color: #000;
  text-decoration: none;
  opacity: 0.75;
}
.btn-close:focus {
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(98, 75, 255, 0.25);
  opacity: 1;
}
.btn-close:disabled, .btn-close.disabled {
  pointer-events: none;
  -webkit-user-select: none;
      -ms-user-select: none;
          user-select: none;
  opacity: 0.25;
}
.btn-close-white {
  -webkit-filter: invert(1) grayscale(100%) brightness(200%);
          filter: invert(1) grayscale(100%) brightness(200%);
}
.toast {
  width: 350px;
  max-width: 100%;
  font-size: 0.875rem;
  pointer-events: auto;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  border-radius: 0.375rem;
}
.toast.showing {
  opacity: 0;
}
.toast:not(.show) {
  display: none;
}
.toast-container {
  width: -webkit-max-content;
  width: max-content;
  max-width: 100%;
  pointer-events: none;
}
.toast-container > :not(:last-child) {
  margin-bottom: 16px;
}
.toast-header {
  display: flex;
  align-items: center;
  padding: 0.5rem 0.75rem;
  color: #637381;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  border-top-left-radius: calc(0.375rem - 1px);
  border-top-right-radius: calc(0.375rem - 1px);
}
.toast-header .btn-close {
  margin-right: -0.375rem;
  margin-left: 0.75rem;
}
.toast-body {
  padding: 0.75rem;
  word-wrap: break-word;
}
.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1055;
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}
.modal.fade .modal-dialog {
  transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  -webkit-transform: translate(0, -50px);
          transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}
.modal.show .modal-dialog {
  -webkit-transform: none;
          transform: none;
}
.modal.modal-static .modal-dialog {
  -webkit-transform: scale(1.02);
          transform: scale(1.02);
}
.modal-dialog-scrollable {
  height: calc(100% - 1rem);
}
.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}
.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - 1rem);
}
.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.5rem;
  outline: 0;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: 0.5;
}
.modal-header {
  display: flex;
  flex-shrink: 0;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #DFE3E8;
  border-top-left-radius: calc(0.5rem - 1px);
  border-top-right-radius: calc(0.5rem - 1px);
}
.modal-header .btn-close {
  padding: 0.5rem 0.5rem;
  margin: -0.5rem -0.5rem -0.5rem auto;
}
.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}
.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 1rem;
}
.modal-footer {
  display: flex;
  flex-wrap: wrap;
  flex-shrink: 0;
  align-items: center;
  justify-content: flex-end;
  padding: 0.75rem;
  border-top: 1px solid #DFE3E8;
  border-bottom-right-radius: calc(0.5rem - 1px);
  border-bottom-left-radius: calc(0.5rem - 1px);
}
.modal-footer > * {
  margin: 0.25rem;
}
@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }
  .modal-dialog-scrollable {
    height: calc(100% - 3.5rem);
  }
  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem);
  }
  .modal-sm {
    max-width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg,
.modal-xl {
    max-width: 800px;
  }
}
@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}
.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}
.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
}
.modal-fullscreen .modal-header {
  border-radius: 0;
}
.modal-fullscreen .modal-body {
  overflow-y: auto;
}
.modal-fullscreen .modal-footer {
  border-radius: 0;
}
@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-sm-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-md-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-lg-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-xl-down .modal-footer {
    border-radius: 0;
  }
}
@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xxl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-header {
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-body {
    overflow-y: auto;
  }
  .modal-fullscreen-xxl-down .modal-footer {
    border-radius: 0;
  }
}
.tooltip {
  position: absolute;
  z-index: 1080;
  display: block;
  margin: 0;
  font-family: "Inter", "sans-serif";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.8203125rem;
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: 0.9;
}
.tooltip .tooltip-arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}
.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}
.bs-tooltip-top, .bs-tooltip-auto[data-popper-placement^=top] {
  padding: 0.4rem 0;
}
.bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
  bottom: 0;
}
.bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
  top: -1px;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}
.bs-tooltip-end, .bs-tooltip-auto[data-popper-placement^=right] {
  padding: 0 0.4rem;
}
.bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
  right: -1px;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}
.bs-tooltip-bottom, .bs-tooltip-auto[data-popper-placement^=bottom] {
  padding: 0.4rem 0;
}
.bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
  top: 0;
}
.bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
  bottom: -1px;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}
.bs-tooltip-start, .bs-tooltip-auto[data-popper-placement^=left] {
  padding: 0 0.4rem;
}
.bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
  left: -1px;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}
.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.375rem;
}
.popover {
  position: absolute;
  top: 0;
  left: 0 /* rtl:ignore */;
  z-index: 1070;
  display: block;
  max-width: 276px;
  font-family: "Inter", "sans-serif";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.8203125rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.5rem;
}
.popover .popover-arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
}
.popover .popover-arrow::before, .popover .popover-arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}
.bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow {
  bottom: calc(-0.5rem - 1px);
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before {
  bottom: 0;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
  bottom: 1px;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #fff;
}
.bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow {
  left: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before {
  left: 0;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
  left: 1px;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #fff;
}
.bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow {
  top: calc(-0.5rem - 1px);
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before {
  top: 0;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
  top: 1px;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #fff;
}
.bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f0f0f0;
}
.bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow {
  right: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before {
  right: 0;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
  right: 1px;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #fff;
}
.popover-header {
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 0.9375rem;
  color: #212B36;
  background-color: #f0f0f0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  border-top-left-radius: calc(0.5rem - 1px);
  border-top-right-radius: calc(0.5rem - 1px);
}
.popover-header:empty {
  display: none;
}
.popover-body {
  padding: 1rem 1rem;
  color: #637381;
}
.carousel {
  position: relative;
}
.carousel.pointer-event {
  touch-action: pan-y;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}
.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  transition: -webkit-transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}
.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}
/* rtl:begin:ignore */
.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}
.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}
/* rtl:end:ignore */
.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  -webkit-transform: none;
          transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
    transition: none;
  }
}
.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
.carousel-control-next {
    transition: none;
  }
}
.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}
.carousel-control-prev {
  left: 0;
}
.carousel-control-next {
  right: 0;
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
}
/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}
.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}
.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: flex;
  justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
  list-style: none;
}
.carousel-indicators [data-bs-target] {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-indicators [data-bs-target] {
    transition: none;
  }
}
.carousel-indicators .active {
  opacity: 1;
}
.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center;
}
.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  -webkit-filter: invert(1) grayscale(100);
          filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #000;
}
.carousel-dark .carousel-caption {
  color: #000;
}
@-webkit-keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg) /* rtl:ignore */;
            transform: rotate(360deg) /* rtl:ignore */;
  }
}
@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg) /* rtl:ignore */;
            transform: rotate(360deg) /* rtl:ignore */;
  }
}
.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  -webkit-animation: 0.75s linear infinite spinner-border;
          animation: 0.75s linear infinite spinner-border;
}
.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}
@-webkit-keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  50% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
@keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  50% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  -webkit-animation: 0.75s linear infinite spinner-grow;
          animation: 0.75s linear infinite spinner-grow;
}
.spinner-grow-sm {
  width: 1rem;
  height: 1rem;
}
@media (prefers-reduced-motion: reduce) {
  .spinner-border,
.spinner-grow {
    -webkit-animation-duration: 1.5s;
            animation-duration: 1.5s;
  }
}
.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: 1045;
  display: flex;
  flex-direction: column;
  max-width: 100%;
  visibility: hidden;
  background-color: #fff;
  background-clip: padding-box;
  outline: 0;
  transition: -webkit-transform 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .offcanvas {
    transition: none;
  }
}
.offcanvas-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}
.offcanvas-backdrop.fade {
  opacity: 0;
}
.offcanvas-backdrop.show {
  opacity: 0.5;
}
.offcanvas-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 1rem;
}
.offcanvas-header .btn-close {
  padding: 0.5rem 0.5rem;
  margin-top: -0.5rem;
  margin-right: -0.5rem;
  margin-bottom: -0.5rem;
}
.offcanvas-title {
  margin-bottom: 0;
  line-height: 1.5;
}
.offcanvas-body {
  flex-grow: 1;
  padding: 1rem 1rem;
  overflow-y: auto;
}
.offcanvas-start {
  top: 0;
  left: 0;
  width: 400px;
  border-right: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}
.offcanvas-end {
  top: 0;
  right: 0;
  width: 400px;
  border-left: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}
.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
}
.offcanvas-bottom {
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-top: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}
.offcanvas.show {
  -webkit-transform: none;
          transform: none;
}
.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentColor;
  opacity: 0.5;
}
.placeholder.btn::before {
  display: inline-block;
  content: "";
}
.placeholder-xs {
  min-height: 0.6em;
}
.placeholder-sm {
  min-height: 0.8em;
}
.placeholder-lg {
  min-height: 1.2em;
}
.placeholder-glow .placeholder {
  -webkit-animation: placeholder-glow 2s ease-in-out infinite;
          animation: placeholder-glow 2s ease-in-out infinite;
}
@-webkit-keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}
@keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}
.placeholder-wave {
  -webkit-mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
          mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
  -webkit-mask-size: 200% 100%;
          mask-size: 200% 100%;
  -webkit-animation: placeholder-wave 2s linear infinite;
          animation: placeholder-wave 2s linear infinite;
}
@-webkit-keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
            mask-position: -200% 0%;
  }
}
@keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
            mask-position: -200% 0%;
  }
}
.clearfix::after {
  display: block;
  clear: both;
  content: "";
}
.link-primary {
  color: #624BFF;
}
.link-primary:hover, .link-primary:focus {
  color: #4e3ccc;
}
.link-secondary {
  color: #637381;
}
.link-secondary:hover, .link-secondary:focus {
  color: #4f5c67;
}
.link-success {
  color: #198754;
}
.link-success:hover, .link-success:focus {
  color: #146c43;
}
.link-info {
  color: #0dcaf0;
}
.link-info:hover, .link-info:focus {
  color: #3dd5f3;
}
.link-warning {
  color: #ffc107;
}
.link-warning:hover, .link-warning:focus {
  color: #ffcd39;
}
.link-danger {
  color: #dc3545;
}
.link-danger:hover, .link-danger:focus {
  color: #b02a37;
}
.link-light {
  color: #F9FAFB;
}
.link-light:hover, .link-light:focus {
  color: #fafbfc;
}
.link-dark {
  color: #212B36;
}
.link-dark:hover, .link-dark:focus {
  color: #1a222b;
}
.link-white {
  color: #fff;
}
.link-white:hover, .link-white:focus {
  color: white;
}
.link-light-primary {
  color: #E0DCFE;
}
.link-light-primary:hover, .link-light-primary:focus {
  color: #e6e3fe;
}
.link-light-danger {
  color: #FBEBEC;
}
.link-light-danger:hover, .link-light-danger:focus {
  color: #fceff0;
}
.link-light-info {
  color: #E7FAFE;
}
.link-light-info:hover, .link-light-info:focus {
  color: #ecfbfe;
}
.link-light-warning {
  color: #FFF3CD;
}
.link-light-warning:hover, .link-light-warning:focus {
  color: #fff5d7;
}
.link-light-secondary {
  color: #e9ecef;
}
.link-light-secondary:hover, .link-light-secondary:focus {
  color: #edf0f2;
}
.link-light-success {
  color: #EAF6EC;
}
.link-light-success:hover, .link-light-success:focus {
  color: #eef8f0;
}
.link-light-dark {
  color: #d1cfd8;
}
.link-light-dark:hover, .link-light-dark:focus {
  color: #dad9e0;
}
.link-dark-primary {
  color: #593cc1;
}
.link-dark-primary:hover, .link-dark-primary:focus {
  color: #47309a;
}
.link-dark-warning {
  color: #c28135;
}
.link-dark-warning:hover, .link-dark-warning:focus {
  color: #ce9a5d;
}
.link-dark-info {
  color: #51a0c2;
}
.link-dark-info:hover, .link-dark-info:focus {
  color: #74b3ce;
}
.link-dark-danger {
  color: #ae302e;
}
.link-dark-danger:hover, .link-dark-danger:focus {
  color: #8b2625;
}
.link-dark-success {
  color: #139a74;
}
.link-dark-success:hover, .link-dark-success:focus {
  color: #42ae90;
}
.link-dark-secondary {
  color: #5c596d;
}
.link-dark-secondary:hover, .link-dark-secondary:focus {
  color: #4a4757;
}
.ratio {
  position: relative;
  width: 100%;
}
.ratio::before {
  display: block;
  padding-top: var(--bs-aspect-ratio);
  content: "";
}
.ratio > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.ratio-1x1 {
  --bs-aspect-ratio: 100%;
}
.ratio-4x3 {
  --bs-aspect-ratio: 75%;
}
.ratio-16x9 {
  --bs-aspect-ratio: 56.25%;
}
.ratio-21x9 {
  --bs-aspect-ratio: 42.8571428571%;
}
.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}
.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}
.sticky-top {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  z-index: 1020;
}
@media (min-width: 576px) {
  .sticky-sm-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
@media (min-width: 768px) {
  .sticky-md-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
@media (min-width: 992px) {
  .sticky-lg-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
@media (min-width: 1200px) {
  .sticky-xl-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}
.hstack {
  display: flex;
  flex-direction: row;
  align-items: center;
  align-self: stretch;
}
.vstack {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  align-self: stretch;
}
.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}
.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}
.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.vr {
  display: inline-block;
  align-self: stretch;
  width: 1px;
  min-height: 1em;
  background-color: currentColor;
  opacity: 0.25;
}
.align-baseline {
  vertical-align: baseline !important;
}
.align-top {
  vertical-align: top !important;
}
.align-middle {
  vertical-align: middle !important;
}
.align-bottom {
  vertical-align: bottom !important;
}
.align-text-bottom {
  vertical-align: text-bottom !important;
}
.align-text-top {
  vertical-align: text-top !important;
}
.float-start {
  float: left !important;
}
.float-end {
  float: right !important;
}
.float-none {
  float: none !important;
}
.opacity-0 {
  opacity: 0 !important;
}
.opacity-25 {
  opacity: 0.25 !important;
}
.opacity-50 {
  opacity: 0.5 !important;
}
.opacity-75 {
  opacity: 0.75 !important;
}
.opacity-100 {
  opacity: 1 !important;
}
.overflow-auto {
  overflow: auto !important;
}
.overflow-hidden {
  overflow: hidden !important;
}
.overflow-visible {
  overflow: visible !important;
}
.overflow-scroll {
  overflow: scroll !important;
}
.d-inline {
  display: inline !important;
}
.d-inline-block {
  display: inline-block !important;
}
.d-block {
  display: block !important;
}
.d-grid {
  display: grid !important;
}
.d-table {
  display: table !important;
}
.d-table-row {
  display: table-row !important;
}
.d-table-cell {
  display: table-cell !important;
}
.d-flex {
  display: flex !important;
}
.d-inline-flex {
  display: inline-flex !important;
}
.d-none {
  display: none !important;
}
.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}
.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}
.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}
.shadow-none {
  box-shadow: none !important;
}
.position-static {
  position: static !important;
}
.position-relative {
  position: relative !important;
}
.position-absolute {
  position: absolute !important;
}
.position-fixed {
  position: fixed !important;
}
.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important;
}
.top-0 {
  top: 0 !important;
}
.top-1 {
  top: 1 !important;
}
.top-2 {
  top: 2 !important;
}
.top-50 {
  top: 50% !important;
}
.top-100 {
  top: 100% !important;
}
.bottom-0 {
  bottom: 0 !important;
}
.bottom-1 {
  bottom: 1 !important;
}
.bottom-2 {
  bottom: 2 !important;
}
.bottom-50 {
  bottom: 50% !important;
}
.bottom-100 {
  bottom: 100% !important;
}
.start-0 {
  left: 0 !important;
}
.start-1 {
  left: 1 !important;
}
.start-2 {
  left: 2 !important;
}
.start-50 {
  left: 50% !important;
}
.start-100 {
  left: 100% !important;
}
.end-0 {
  right: 0 !important;
}
.end-1 {
  right: 1 !important;
}
.end-2 {
  right: 2 !important;
}
.end-50 {
  right: 50% !important;
}
.end-100 {
  right: 100% !important;
}
.translate-middle {
  -webkit-transform: translate(-50%, -50%) !important;
          transform: translate(-50%, -50%) !important;
}
.translate-middle-x {
  -webkit-transform: translateX(-50%) !important;
          transform: translateX(-50%) !important;
}
.translate-middle-y {
  -webkit-transform: translateY(-50%) !important;
          transform: translateY(-50%) !important;
}
.border {
  border: 1px solid #DFE3E8 !important;
}
.border-0 {
  border: 0 !important;
}
.border-top {
  border-top: 1px solid #DFE3E8 !important;
}
.border-top-0 {
  border-top: 0 !important;
}
.border-end {
  border-right: 1px solid #DFE3E8 !important;
}
.border-end-0 {
  border-right: 0 !important;
}
.border-bottom {
  border-bottom: 1px solid #DFE3E8 !important;
}
.border-bottom-0 {
  border-bottom: 0 !important;
}
.border-start {
  border-left: 1px solid #DFE3E8 !important;
}
.border-start-0 {
  border-left: 0 !important;
}
.border-primary {
  border-color: #624BFF !important;
}
.border-secondary {
  border-color: #637381 !important;
}
.border-success {
  border-color: #198754 !important;
}
.border-info {
  border-color: #0dcaf0 !important;
}
.border-warning {
  border-color: #ffc107 !important;
}
.border-danger {
  border-color: #dc3545 !important;
}
.border-light {
  border-color: #F9FAFB !important;
}
.border-dark {
  border-color: #212B36 !important;
}
.border-white {
  border-color: #fff !important;
}
.border-light-primary {
  border-color: #E0DCFE !important;
}
.border-light-danger {
  border-color: #FBEBEC !important;
}
.border-light-info {
  border-color: #E7FAFE !important;
}
.border-light-warning {
  border-color: #FFF3CD !important;
}
.border-light-secondary {
  border-color: #e9ecef !important;
}
.border-light-success {
  border-color: #EAF6EC !important;
}
.border-light-dark {
  border-color: #d1cfd8 !important;
}
.border-dark-primary {
  border-color: #593cc1 !important;
}
.border-dark-warning {
  border-color: #c28135 !important;
}
.border-dark-info {
  border-color: #51a0c2 !important;
}
.border-dark-danger {
  border-color: #ae302e !important;
}
.border-dark-success {
  border-color: #139a74 !important;
}
.border-dark-secondary {
  border-color: #5c596d !important;
}
.border-1 {
  border-width: 1px !important;
}
.border-2 {
  border-width: 2px !important;
}
.border-3 {
  border-width: 3px !important;
}
.border-4 {
  border-width: 4px !important;
}
.border-5 {
  border-width: 5px !important;
}
.w-15 {
  width: 15% !important;
}
.w-25 {
  width: 25% !important;
}
.w-30 {
  width: 30% !important;
}
.w-40 {
  width: 40% !important;
}
.w-50 {
  width: 50% !important;
}
.w-65 {
  width: 65% !important;
}
.w-75 {
  width: 75% !important;
}
.w-100 {
  width: 100% !important;
}
.w-auto {
  width: auto !important;
}
.mw-25 {
  max-width: 25% !important;
}
.mw-30 {
  max-width: 30% !important;
}
.mw-40 {
  max-width: 40% !important;
}
.mw-50 {
  max-width: 50% !important;
}
.mw-65 {
  max-width: 65% !important;
}
.mw-75 {
  max-width: 75% !important;
}
.mw-100 {
  max-width: 100% !important;
}
.mw-auto {
  max-width: auto !important;
}
.vw-100 {
  width: 100vw !important;
}
.min-vw-100 {
  min-width: 100vw !important;
}
.h-25 {
  height: 25% !important;
}
.h-30 {
  height: 30% !important;
}
.h-40 {
  height: 40% !important;
}
.h-50 {
  height: 50% !important;
}
.h-65 {
  height: 65% !important;
}
.h-75 {
  height: 75% !important;
}
.h-100 {
  height: 100% !important;
}
.h-auto {
  height: auto !important;
}
.mh-25 {
  max-height: 25% !important;
}
.mh-30 {
  max-height: 30% !important;
}
.mh-40 {
  max-height: 40% !important;
}
.mh-50 {
  max-height: 50% !important;
}
.mh-65 {
  max-height: 65% !important;
}
.mh-75 {
  max-height: 75% !important;
}
.mh-100 {
  max-height: 100% !important;
}
.mh-auto {
  max-height: auto !important;
}
.vh-100 {
  height: 100vh !important;
}
.min-vh-100 {
  min-height: 100vh !important;
}
.flex-fill {
  flex: 1 1 auto !important;
}
.flex-row {
  flex-direction: row !important;
}
.flex-column {
  flex-direction: column !important;
}
.flex-row-reverse {
  flex-direction: row-reverse !important;
}
.flex-column-reverse {
  flex-direction: column-reverse !important;
}
.flex-grow-0 {
  flex-grow: 0 !important;
}
.flex-grow-1 {
  flex-grow: 1 !important;
}
.flex-shrink-0 {
  flex-shrink: 0 !important;
}
.flex-shrink-1 {
  flex-shrink: 1 !important;
}
.flex-wrap {
  flex-wrap: wrap !important;
}
.flex-nowrap {
  flex-wrap: nowrap !important;
}
.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}
.gap-0 {
  gap: 0 !important;
}
.gap-1 {
  gap: 0.25rem !important;
}
.gap-2 {
  gap: 0.5rem !important;
}
.gap-3 {
  gap: 1rem !important;
}
.gap-4 {
  gap: 1.25rem !important;
}
.gap-5 {
  gap: 1.5rem !important;
}
.gap-6 {
  gap: 2rem !important;
}
.gap-7 {
  gap: 2.5rem !important;
}
.gap-8 {
  gap: 3rem !important;
}
.gap-9 {
  gap: 3.5rem !important;
}
.gap-10 {
  gap: 4rem !important;
}
.gap-11 {
  gap: 4.5rem !important;
}
.gap-12 {
  gap: 5rem !important;
}
.gap-13 {
  gap: 5.5rem !important;
}
.gap-14 {
  gap: 6rem !important;
}
.gap-15 {
  gap: 6.5rem !important;
}
.gap-16 {
  gap: 7rem !important;
}
.gap-17 {
  gap: 7.5rem !important;
}
.gap-18 {
  gap: 8rem !important;
}
.gap-19 {
  gap: 8.5rem !important;
}
.gap-20 {
  gap: 9rem !important;
}
.gap-21 {
  gap: 9.5rem !important;
}
.gap-22 {
  gap: 10rem !important;
}
.gap-23 {
  gap: 12rem !important;
}
.justify-content-start {
  justify-content: flex-start !important;
}
.justify-content-end {
  justify-content: flex-end !important;
}
.justify-content-center {
  justify-content: center !important;
}
.justify-content-between {
  justify-content: space-between !important;
}
.justify-content-around {
  justify-content: space-around !important;
}
.justify-content-evenly {
  justify-content: space-evenly !important;
}
.align-items-start {
  align-items: flex-start !important;
}
.align-items-end {
  align-items: flex-end !important;
}
.align-items-center {
  align-items: center !important;
}
.align-items-baseline {
  align-items: baseline !important;
}
.align-items-stretch {
  align-items: stretch !important;
}
.align-content-start {
  align-content: flex-start !important;
}
.align-content-end {
  align-content: flex-end !important;
}
.align-content-center {
  align-content: center !important;
}
.align-content-between {
  align-content: space-between !important;
}
.align-content-around {
  align-content: space-around !important;
}
.align-content-stretch {
  align-content: stretch !important;
}
.align-self-auto {
  align-self: auto !important;
}
.align-self-start {
  align-self: flex-start !important;
}
.align-self-end {
  align-self: flex-end !important;
}
.align-self-center {
  align-self: center !important;
}
.align-self-baseline {
  align-self: baseline !important;
}
.align-self-stretch {
  align-self: stretch !important;
}
.order-first {
  order: -1 !important;
}
.order-0 {
  order: 0 !important;
}
.order-1 {
  order: 1 !important;
}
.order-2 {
  order: 2 !important;
}
.order-3 {
  order: 3 !important;
}
.order-4 {
  order: 4 !important;
}
.order-5 {
  order: 5 !important;
}
.order-last {
  order: 6 !important;
}
.m-0 {
  margin: 0 !important;
}
.m-1 {
  margin: 0.25rem !important;
}
.m-2 {
  margin: 0.5rem !important;
}
.m-3 {
  margin: 1rem !important;
}
.m-4 {
  margin: 1.25rem !important;
}
.m-5 {
  margin: 1.5rem !important;
}
.m-6 {
  margin: 2rem !important;
}
.m-7 {
  margin: 2.5rem !important;
}
.m-8 {
  margin: 3rem !important;
}
.m-9 {
  margin: 3.5rem !important;
}
.m-10 {
  margin: 4rem !important;
}
.m-11 {
  margin: 4.5rem !important;
}
.m-12 {
  margin: 5rem !important;
}
.m-13 {
  margin: 5.5rem !important;
}
.m-14 {
  margin: 6rem !important;
}
.m-15 {
  margin: 6.5rem !important;
}
.m-16 {
  margin: 7rem !important;
}
.m-17 {
  margin: 7.5rem !important;
}
.m-18 {
  margin: 8rem !important;
}
.m-19 {
  margin: 8.5rem !important;
}
.m-20 {
  margin: 9rem !important;
}
.m-21 {
  margin: 9.5rem !important;
}
.m-22 {
  margin: 10rem !important;
}
.m-23 {
  margin: 12rem !important;
}
.m-auto {
  margin: auto !important;
}
.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}
.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}
.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}
.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}
.mx-4 {
  margin-right: 1.25rem !important;
  margin-left: 1.25rem !important;
}
.mx-5 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}
.mx-6 {
  margin-right: 2rem !important;
  margin-left: 2rem !important;
}
.mx-7 {
  margin-right: 2.5rem !important;
  margin-left: 2.5rem !important;
}
.mx-8 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}
.mx-9 {
  margin-right: 3.5rem !important;
  margin-left: 3.5rem !important;
}
.mx-10 {
  margin-right: 4rem !important;
  margin-left: 4rem !important;
}
.mx-11 {
  margin-right: 4.5rem !important;
  margin-left: 4.5rem !important;
}
.mx-12 {
  margin-right: 5rem !important;
  margin-left: 5rem !important;
}
.mx-13 {
  margin-right: 5.5rem !important;
  margin-left: 5.5rem !important;
}
.mx-14 {
  margin-right: 6rem !important;
  margin-left: 6rem !important;
}
.mx-15 {
  margin-right: 6.5rem !important;
  margin-left: 6.5rem !important;
}
.mx-16 {
  margin-right: 7rem !important;
  margin-left: 7rem !important;
}
.mx-17 {
  margin-right: 7.5rem !important;
  margin-left: 7.5rem !important;
}
.mx-18 {
  margin-right: 8rem !important;
  margin-left: 8rem !important;
}
.mx-19 {
  margin-right: 8.5rem !important;
  margin-left: 8.5rem !important;
}
.mx-20 {
  margin-right: 9rem !important;
  margin-left: 9rem !important;
}
.mx-21 {
  margin-right: 9.5rem !important;
  margin-left: 9.5rem !important;
}
.mx-22 {
  margin-right: 10rem !important;
  margin-left: 10rem !important;
}
.mx-23 {
  margin-right: 12rem !important;
  margin-left: 12rem !important;
}
.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}
.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}
.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}
.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}
.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}
.my-4 {
  margin-top: 1.25rem !important;
  margin-bottom: 1.25rem !important;
}
.my-5 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}
.my-6 {
  margin-top: 2rem !important;
  margin-bottom: 2rem !important;
}
.my-7 {
  margin-top: 2.5rem !important;
  margin-bottom: 2.5rem !important;
}
.my-8 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}
.my-9 {
  margin-top: 3.5rem !important;
  margin-bottom: 3.5rem !important;
}
.my-10 {
  margin-top: 4rem !important;
  margin-bottom: 4rem !important;
}
.my-11 {
  margin-top: 4.5rem !important;
  margin-bottom: 4.5rem !important;
}
.my-12 {
  margin-top: 5rem !important;
  margin-bottom: 5rem !important;
}
.my-13 {
  margin-top: 5.5rem !important;
  margin-bottom: 5.5rem !important;
}
.my-14 {
  margin-top: 6rem !important;
  margin-bottom: 6rem !important;
}
.my-15 {
  margin-top: 6.5rem !important;
  margin-bottom: 6.5rem !important;
}
.my-16 {
  margin-top: 7rem !important;
  margin-bottom: 7rem !important;
}
.my-17 {
  margin-top: 7.5rem !important;
  margin-bottom: 7.5rem !important;
}
.my-18 {
  margin-top: 8rem !important;
  margin-bottom: 8rem !important;
}
.my-19 {
  margin-top: 8.5rem !important;
  margin-bottom: 8.5rem !important;
}
.my-20 {
  margin-top: 9rem !important;
  margin-bottom: 9rem !important;
}
.my-21 {
  margin-top: 9.5rem !important;
  margin-bottom: 9.5rem !important;
}
.my-22 {
  margin-top: 10rem !important;
  margin-bottom: 10rem !important;
}
.my-23 {
  margin-top: 12rem !important;
  margin-bottom: 12rem !important;
}
.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}
.mt-0 {
  margin-top: 0 !important;
}
.mt-1 {
  margin-top: 0.25rem !important;
}
.mt-2 {
  margin-top: 0.5rem !important;
}
.mt-3 {
  margin-top: 1rem !important;
}
.mt-4 {
  margin-top: 1.25rem !important;
}
.mt-5 {
  margin-top: 1.5rem !important;
}
.mt-6 {
  margin-top: 2rem !important;
}
.mt-7 {
  margin-top: 2.5rem !important;
}
.mt-8 {
  margin-top: 3rem !important;
}
.mt-9 {
  margin-top: 3.5rem !important;
}
.mt-10 {
  margin-top: 4rem !important;
}
.mt-11 {
  margin-top: 4.5rem !important;
}
.mt-12 {
  margin-top: 5rem !important;
}
.mt-13 {
  margin-top: 5.5rem !important;
}
.mt-14 {
  margin-top: 6rem !important;
}
.mt-15 {
  margin-top: 6.5rem !important;
}
.mt-16 {
  margin-top: 7rem !important;
}
.mt-17 {
  margin-top: 7.5rem !important;
}
.mt-18 {
  margin-top: 8rem !important;
}
.mt-19 {
  margin-top: 8.5rem !important;
}
.mt-20 {
  margin-top: 9rem !important;
}
.mt-21 {
  margin-top: 9.5rem !important;
}
.mt-22 {
  margin-top: 10rem !important;
}
.mt-23 {
  margin-top: 12rem !important;
}
.mt-auto {
  margin-top: auto !important;
}
.me-0 {
  margin-right: 0 !important;
}
.me-1 {
  margin-right: 0.25rem !important;
}
.me-2 {
  margin-right: 0.5rem !important;
}
.me-3 {
  margin-right: 1rem !important;
}
.me-4 {
  margin-right: 1.25rem !important;
}
.me-5 {
  margin-right: 1.5rem !important;
}
.me-6 {
  margin-right: 2rem !important;
}
.me-7 {
  margin-right: 2.5rem !important;
}
.me-8 {
  margin-right: 3rem !important;
}
.me-9 {
  margin-right: 3.5rem !important;
}
.me-10 {
  margin-right: 4rem !important;
}
.me-11 {
  margin-right: 4.5rem !important;
}
.me-12 {
  margin-right: 5rem !important;
}
.me-13 {
  margin-right: 5.5rem !important;
}
.me-14 {
  margin-right: 6rem !important;
}
.me-15 {
  margin-right: 6.5rem !important;
}
.me-16 {
  margin-right: 7rem !important;
}
.me-17 {
  margin-right: 7.5rem !important;
}
.me-18 {
  margin-right: 8rem !important;
}
.me-19 {
  margin-right: 8.5rem !important;
}
.me-20 {
  margin-right: 9rem !important;
}
.me-21 {
  margin-right: 9.5rem !important;
}
.me-22 {
  margin-right: 10rem !important;
}
.me-23 {
  margin-right: 12rem !important;
}
.me-auto {
  margin-right: auto !important;
}
.mb-0 {
  margin-bottom: 0 !important;
}
.mb-1 {
  margin-bottom: 0.25rem !important;
}
.mb-2 {
  margin-bottom: 0.5rem !important;
}
.mb-3 {
  margin-bottom: 1rem !important;
}
.mb-4 {
  margin-bottom: 1.25rem !important;
}
.mb-5 {
  margin-bottom: 1.5rem !important;
}
.mb-6 {
  margin-bottom: 2rem !important;
}
.mb-7 {
  margin-bottom: 2.5rem !important;
}
.mb-8 {
  margin-bottom: 3rem !important;
}
.mb-9 {
  margin-bottom: 3.5rem !important;
}
.mb-10 {
  margin-bottom: 4rem !important;
}
.mb-11 {
  margin-bottom: 4.5rem !important;
}
.mb-12 {
  margin-bottom: 5rem !important;
}
.mb-13 {
  margin-bottom: 5.5rem !important;
}
.mb-14 {
  margin-bottom: 6rem !important;
}
.mb-15 {
  margin-bottom: 6.5rem !important;
}
.mb-16 {
  margin-bottom: 7rem !important;
}
.mb-17 {
  margin-bottom: 7.5rem !important;
}
.mb-18 {
  margin-bottom: 8rem !important;
}
.mb-19 {
  margin-bottom: 8.5rem !important;
}
.mb-20 {
  margin-bottom: 9rem !important;
}
.mb-21 {
  margin-bottom: 9.5rem !important;
}
.mb-22 {
  margin-bottom: 10rem !important;
}
.mb-23 {
  margin-bottom: 12rem !important;
}
.mb-auto {
  margin-bottom: auto !important;
}
.ms-0 {
  margin-left: 0 !important;
}
.ms-1 {
  margin-left: 0.25rem !important;
}
.ms-2 {
  margin-left: 0.5rem !important;
}
.ms-3 {
  margin-left: 1rem !important;
}
.ms-4 {
  margin-left: 1.25rem !important;
}
.ms-5 {
  margin-left: 1.5rem !important;
}
.ms-6 {
  margin-left: 2rem !important;
}
.ms-7 {
  margin-left: 2.5rem !important;
}
.ms-8 {
  margin-left: 3rem !important;
}
.ms-9 {
  margin-left: 3.5rem !important;
}
.ms-10 {
  margin-left: 4rem !important;
}
.ms-11 {
  margin-left: 4.5rem !important;
}
.ms-12 {
  margin-left: 5rem !important;
}
.ms-13 {
  margin-left: 5.5rem !important;
}
.ms-14 {
  margin-left: 6rem !important;
}
.ms-15 {
  margin-left: 6.5rem !important;
}
.ms-16 {
  margin-left: 7rem !important;
}
.ms-17 {
  margin-left: 7.5rem !important;
}
.ms-18 {
  margin-left: 8rem !important;
}
.ms-19 {
  margin-left: 8.5rem !important;
}
.ms-20 {
  margin-left: 9rem !important;
}
.ms-21 {
  margin-left: 9.5rem !important;
}
.ms-22 {
  margin-left: 10rem !important;
}
.ms-23 {
  margin-left: 12rem !important;
}
.ms-auto {
  margin-left: auto !important;
}
.m-n1 {
  margin: -0.25rem !important;
}
.m-n2 {
  margin: -0.5rem !important;
}
.m-n3 {
  margin: -1rem !important;
}
.m-n4 {
  margin: -1.25rem !important;
}
.m-n5 {
  margin: -1.5rem !important;
}
.m-n6 {
  margin: -2rem !important;
}
.m-n7 {
  margin: -2.5rem !important;
}
.m-n8 {
  margin: -3rem !important;
}
.m-n9 {
  margin: -3.5rem !important;
}
.m-n10 {
  margin: -4rem !important;
}
.m-n11 {
  margin: -4.5rem !important;
}
.m-n12 {
  margin: -5rem !important;
}
.m-n13 {
  margin: -5.5rem !important;
}
.m-n14 {
  margin: -6rem !important;
}
.m-n15 {
  margin: -6.5rem !important;
}
.m-n16 {
  margin: -7rem !important;
}
.m-n17 {
  margin: -7.5rem !important;
}
.m-n18 {
  margin: -8rem !important;
}
.m-n19 {
  margin: -8.5rem !important;
}
.m-n20 {
  margin: -9rem !important;
}
.m-n21 {
  margin: -9.5rem !important;
}
.m-n22 {
  margin: -10rem !important;
}
.m-n23 {
  margin: -12rem !important;
}
.mx-n1 {
  margin-right: -0.25rem !important;
  margin-left: -0.25rem !important;
}
.mx-n2 {
  margin-right: -0.5rem !important;
  margin-left: -0.5rem !important;
}
.mx-n3 {
  margin-right: -1rem !important;
  margin-left: -1rem !important;
}
.mx-n4 {
  margin-right: -1.25rem !important;
  margin-left: -1.25rem !important;
}
.mx-n5 {
  margin-right: -1.5rem !important;
  margin-left: -1.5rem !important;
}
.mx-n6 {
  margin-right: -2rem !important;
  margin-left: -2rem !important;
}
.mx-n7 {
  margin-right: -2.5rem !important;
  margin-left: -2.5rem !important;
}
.mx-n8 {
  margin-right: -3rem !important;
  margin-left: -3rem !important;
}
.mx-n9 {
  margin-right: -3.5rem !important;
  margin-left: -3.5rem !important;
}
.mx-n10 {
  margin-right: -4rem !important;
  margin-left: -4rem !important;
}
.mx-n11 {
  margin-right: -4.5rem !important;
  margin-left: -4.5rem !important;
}
.mx-n12 {
  margin-right: -5rem !important;
  margin-left: -5rem !important;
}
.mx-n13 {
  margin-right: -5.5rem !important;
  margin-left: -5.5rem !important;
}
.mx-n14 {
  margin-right: -6rem !important;
  margin-left: -6rem !important;
}
.mx-n15 {
  margin-right: -6.5rem !important;
  margin-left: -6.5rem !important;
}
.mx-n16 {
  margin-right: -7rem !important;
  margin-left: -7rem !important;
}
.mx-n17 {
  margin-right: -7.5rem !important;
  margin-left: -7.5rem !important;
}
.mx-n18 {
  margin-right: -8rem !important;
  margin-left: -8rem !important;
}
.mx-n19 {
  margin-right: -8.5rem !important;
  margin-left: -8.5rem !important;
}
.mx-n20 {
  margin-right: -9rem !important;
  margin-left: -9rem !important;
}
.mx-n21 {
  margin-right: -9.5rem !important;
  margin-left: -9.5rem !important;
}
.mx-n22 {
  margin-right: -10rem !important;
  margin-left: -10rem !important;
}
.mx-n23 {
  margin-right: -12rem !important;
  margin-left: -12rem !important;
}
.my-n1 {
  margin-top: -0.25rem !important;
  margin-bottom: -0.25rem !important;
}
.my-n2 {
  margin-top: -0.5rem !important;
  margin-bottom: -0.5rem !important;
}
.my-n3 {
  margin-top: -1rem !important;
  margin-bottom: -1rem !important;
}
.my-n4 {
  margin-top: -1.25rem !important;
  margin-bottom: -1.25rem !important;
}
.my-n5 {
  margin-top: -1.5rem !important;
  margin-bottom: -1.5rem !important;
}
.my-n6 {
  margin-top: -2rem !important;
  margin-bottom: -2rem !important;
}
.my-n7 {
  margin-top: -2.5rem !important;
  margin-bottom: -2.5rem !important;
}
.my-n8 {
  margin-top: -3rem !important;
  margin-bottom: -3rem !important;
}
.my-n9 {
  margin-top: -3.5rem !important;
  margin-bottom: -3.5rem !important;
}
.my-n10 {
  margin-top: -4rem !important;
  margin-bottom: -4rem !important;
}
.my-n11 {
  margin-top: -4.5rem !important;
  margin-bottom: -4.5rem !important;
}
.my-n12 {
  margin-top: -5rem !important;
  margin-bottom: -5rem !important;
}
.my-n13 {
  margin-top: -5.5rem !important;
  margin-bottom: -5.5rem !important;
}
.my-n14 {
  margin-top: -6rem !important;
  margin-bottom: -6rem !important;
}
.my-n15 {
  margin-top: -6.5rem !important;
  margin-bottom: -6.5rem !important;
}
.my-n16 {
  margin-top: -7rem !important;
  margin-bottom: -7rem !important;
}
.my-n17 {
  margin-top: -7.5rem !important;
  margin-bottom: -7.5rem !important;
}
.my-n18 {
  margin-top: -8rem !important;
  margin-bottom: -8rem !important;
}
.my-n19 {
  margin-top: -8.5rem !important;
  margin-bottom: -8.5rem !important;
}
.my-n20 {
  margin-top: -9rem !important;
  margin-bottom: -9rem !important;
}
.my-n21 {
  margin-top: -9.5rem !important;
  margin-bottom: -9.5rem !important;
}
.my-n22 {
  margin-top: -10rem !important;
  margin-bottom: -10rem !important;
}
.my-n23 {
  margin-top: -12rem !important;
  margin-bottom: -12rem !important;
}
.mt-n1 {
  margin-top: -0.25rem !important;
}
.mt-n2 {
  margin-top: -0.5rem !important;
}
.mt-n3 {
  margin-top: -1rem !important;
}
.mt-n4 {
  margin-top: -1.25rem !important;
}
.mt-n5 {
  margin-top: -1.5rem !important;
}
.mt-n6 {
  margin-top: -2rem !important;
}
.mt-n7 {
  margin-top: -2.5rem !important;
}
.mt-n8 {
  margin-top: -3rem !important;
}
.mt-n9 {
  margin-top: -3.5rem !important;
}
.mt-n10 {
  margin-top: -4rem !important;
}
.mt-n11 {
  margin-top: -4.5rem !important;
}
.mt-n12 {
  margin-top: -5rem !important;
}
.mt-n13 {
  margin-top: -5.5rem !important;
}
.mt-n14 {
  margin-top: -6rem !important;
}
.mt-n15 {
  margin-top: -6.5rem !important;
}
.mt-n16 {
  margin-top: -7rem !important;
}
.mt-n17 {
  margin-top: -7.5rem !important;
}
.mt-n18 {
  margin-top: -8rem !important;
}
.mt-n19 {
  margin-top: -8.5rem !important;
}
.mt-n20 {
  margin-top: -9rem !important;
}
.mt-n21 {
  margin-top: -9.5rem !important;
}
.mt-n22 {
  margin-top: -10rem !important;
}
.mt-n23 {
  margin-top: -12rem !important;
}
.me-n1 {
  margin-right: -0.25rem !important;
}
.me-n2 {
  margin-right: -0.5rem !important;
}
.me-n3 {
  margin-right: -1rem !important;
}
.me-n4 {
  margin-right: -1.25rem !important;
}
.me-n5 {
  margin-right: -1.5rem !important;
}
.me-n6 {
  margin-right: -2rem !important;
}
.me-n7 {
  margin-right: -2.5rem !important;
}
.me-n8 {
  margin-right: -3rem !important;
}
.me-n9 {
  margin-right: -3.5rem !important;
}
.me-n10 {
  margin-right: -4rem !important;
}
.me-n11 {
  margin-right: -4.5rem !important;
}
.me-n12 {
  margin-right: -5rem !important;
}
.me-n13 {
  margin-right: -5.5rem !important;
}
.me-n14 {
  margin-right: -6rem !important;
}
.me-n15 {
  margin-right: -6.5rem !important;
}
.me-n16 {
  margin-right: -7rem !important;
}
.me-n17 {
  margin-right: -7.5rem !important;
}
.me-n18 {
  margin-right: -8rem !important;
}
.me-n19 {
  margin-right: -8.5rem !important;
}
.me-n20 {
  margin-right: -9rem !important;
}
.me-n21 {
  margin-right: -9.5rem !important;
}
.me-n22 {
  margin-right: -10rem !important;
}
.me-n23 {
  margin-right: -12rem !important;
}
.mb-n1 {
  margin-bottom: -0.25rem !important;
}
.mb-n2 {
  margin-bottom: -0.5rem !important;
}
.mb-n3 {
  margin-bottom: -1rem !important;
}
.mb-n4 {
  margin-bottom: -1.25rem !important;
}
.mb-n5 {
  margin-bottom: -1.5rem !important;
}
.mb-n6 {
  margin-bottom: -2rem !important;
}
.mb-n7 {
  margin-bottom: -2.5rem !important;
}
.mb-n8 {
  margin-bottom: -3rem !important;
}
.mb-n9 {
  margin-bottom: -3.5rem !important;
}
.mb-n10 {
  margin-bottom: -4rem !important;
}
.mb-n11 {
  margin-bottom: -4.5rem !important;
}
.mb-n12 {
  margin-bottom: -5rem !important;
}
.mb-n13 {
  margin-bottom: -5.5rem !important;
}
.mb-n14 {
  margin-bottom: -6rem !important;
}
.mb-n15 {
  margin-bottom: -6.5rem !important;
}
.mb-n16 {
  margin-bottom: -7rem !important;
}
.mb-n17 {
  margin-bottom: -7.5rem !important;
}
.mb-n18 {
  margin-bottom: -8rem !important;
}
.mb-n19 {
  margin-bottom: -8.5rem !important;
}
.mb-n20 {
  margin-bottom: -9rem !important;
}
.mb-n21 {
  margin-bottom: -9.5rem !important;
}
.mb-n22 {
  margin-bottom: -10rem !important;
}
.mb-n23 {
  margin-bottom: -12rem !important;
}
.ms-n1 {
  margin-left: -0.25rem !important;
}
.ms-n2 {
  margin-left: -0.5rem !important;
}
.ms-n3 {
  margin-left: -1rem !important;
}
.ms-n4 {
  margin-left: -1.25rem !important;
}
.ms-n5 {
  margin-left: -1.5rem !important;
}
.ms-n6 {
  margin-left: -2rem !important;
}
.ms-n7 {
  margin-left: -2.5rem !important;
}
.ms-n8 {
  margin-left: -3rem !important;
}
.ms-n9 {
  margin-left: -3.5rem !important;
}
.ms-n10 {
  margin-left: -4rem !important;
}
.ms-n11 {
  margin-left: -4.5rem !important;
}
.ms-n12 {
  margin-left: -5rem !important;
}
.ms-n13 {
  margin-left: -5.5rem !important;
}
.ms-n14 {
  margin-left: -6rem !important;
}
.ms-n15 {
  margin-left: -6.5rem !important;
}
.ms-n16 {
  margin-left: -7rem !important;
}
.ms-n17 {
  margin-left: -7.5rem !important;
}
.ms-n18 {
  margin-left: -8rem !important;
}
.ms-n19 {
  margin-left: -8.5rem !important;
}
.ms-n20 {
  margin-left: -9rem !important;
}
.ms-n21 {
  margin-left: -9.5rem !important;
}
.ms-n22 {
  margin-left: -10rem !important;
}
.ms-n23 {
  margin-left: -12rem !important;
}
.p-0 {
  padding: 0 !important;
}
.p-1 {
  padding: 0.25rem !important;
}
.p-2 {
  padding: 0.5rem !important;
}
.p-3 {
  padding: 1rem !important;
}
.p-4 {
  padding: 1.25rem !important;
}
.p-5 {
  padding: 1.5rem !important;
}
.p-6 {
  padding: 2rem !important;
}
.p-7 {
  padding: 2.5rem !important;
}
.p-8 {
  padding: 3rem !important;
}
.p-9 {
  padding: 3.5rem !important;
}
.p-10 {
  padding: 4rem !important;
}
.p-11 {
  padding: 4.5rem !important;
}
.p-12 {
  padding: 5rem !important;
}
.p-13 {
  padding: 5.5rem !important;
}
.p-14 {
  padding: 6rem !important;
}
.p-15 {
  padding: 6.5rem !important;
}
.p-16 {
  padding: 7rem !important;
}
.p-17 {
  padding: 7.5rem !important;
}
.p-18 {
  padding: 8rem !important;
}
.p-19 {
  padding: 8.5rem !important;
}
.p-20 {
  padding: 9rem !important;
}
.p-21 {
  padding: 9.5rem !important;
}
.p-22 {
  padding: 10rem !important;
}
.p-23 {
  padding: 12rem !important;
}
.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}
.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}
.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}
.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}
.px-4 {
  padding-right: 1.25rem !important;
  padding-left: 1.25rem !important;
}
.px-5 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}
.px-6 {
  padding-right: 2rem !important;
  padding-left: 2rem !important;
}
.px-7 {
  padding-right: 2.5rem !important;
  padding-left: 2.5rem !important;
}
.px-8 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}
.px-9 {
  padding-right: 3.5rem !important;
  padding-left: 3.5rem !important;
}
.px-10 {
  padding-right: 4rem !important;
  padding-left: 4rem !important;
}
.px-11 {
  padding-right: 4.5rem !important;
  padding-left: 4.5rem !important;
}
.px-12 {
  padding-right: 5rem !important;
  padding-left: 5rem !important;
}
.px-13 {
  padding-right: 5.5rem !important;
  padding-left: 5.5rem !important;
}
.px-14 {
  padding-right: 6rem !important;
  padding-left: 6rem !important;
}
.px-15 {
  padding-right: 6.5rem !important;
  padding-left: 6.5rem !important;
}
.px-16 {
  padding-right: 7rem !important;
  padding-left: 7rem !important;
}
.px-17 {
  padding-right: 7.5rem !important;
  padding-left: 7.5rem !important;
}
.px-18 {
  padding-right: 8rem !important;
  padding-left: 8rem !important;
}
.px-19 {
  padding-right: 8.5rem !important;
  padding-left: 8.5rem !important;
}
.px-20 {
  padding-right: 9rem !important;
  padding-left: 9rem !important;
}
.px-21 {
  padding-right: 9.5rem !important;
  padding-left: 9.5rem !important;
}
.px-22 {
  padding-right: 10rem !important;
  padding-left: 10rem !important;
}
.px-23 {
  padding-right: 12rem !important;
  padding-left: 12rem !important;
}
.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}
.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}
.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}
.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}
.py-4 {
  padding-top: 1.25rem !important;
  padding-bottom: 1.25rem !important;
}
.py-5 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}
.py-6 {
  padding-top: 2rem !important;
  padding-bottom: 2rem !important;
}
.py-7 {
  padding-top: 2.5rem !important;
  padding-bottom: 2.5rem !important;
}
.py-8 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}
.py-9 {
  padding-top: 3.5rem !important;
  padding-bottom: 3.5rem !important;
}
.py-10 {
  padding-top: 4rem !important;
  padding-bottom: 4rem !important;
}
.py-11 {
  padding-top: 4.5rem !important;
  padding-bottom: 4.5rem !important;
}
.py-12 {
  padding-top: 5rem !important;
  padding-bottom: 5rem !important;
}
.py-13 {
  padding-top: 5.5rem !important;
  padding-bottom: 5.5rem !important;
}
.py-14 {
  padding-top: 6rem !important;
  padding-bottom: 6rem !important;
}
.py-15 {
  padding-top: 6.5rem !important;
  padding-bottom: 6.5rem !important;
}
.py-16 {
  padding-top: 7rem !important;
  padding-bottom: 7rem !important;
}
.py-17 {
  padding-top: 7.5rem !important;
  padding-bottom: 7.5rem !important;
}
.py-18 {
  padding-top: 8rem !important;
  padding-bottom: 8rem !important;
}
.py-19 {
  padding-top: 8.5rem !important;
  padding-bottom: 8.5rem !important;
}
.py-20 {
  padding-top: 9rem !important;
  padding-bottom: 9rem !important;
}
.py-21 {
  padding-top: 9.5rem !important;
  padding-bottom: 9.5rem !important;
}
.py-22 {
  padding-top: 10rem !important;
  padding-bottom: 10rem !important;
}
.py-23 {
  padding-top: 12rem !important;
  padding-bottom: 12rem !important;
}
.pt-0 {
  padding-top: 0 !important;
}
.pt-1 {
  padding-top: 0.25rem !important;
}
.pt-2 {
  padding-top: 0.5rem !important;
}
.pt-3 {
  padding-top: 1rem !important;
}
.pt-4 {
  padding-top: 1.25rem !important;
}
.pt-5 {
  padding-top: 1.5rem !important;
}
.pt-6 {
  padding-top: 2rem !important;
}
.pt-7 {
  padding-top: 2.5rem !important;
}
.pt-8 {
  padding-top: 3rem !important;
}
.pt-9 {
  padding-top: 3.5rem !important;
}
.pt-10 {
  padding-top: 4rem !important;
}
.pt-11 {
  padding-top: 4.5rem !important;
}
.pt-12 {
  padding-top: 5rem !important;
}
.pt-13 {
  padding-top: 5.5rem !important;
}
.pt-14 {
  padding-top: 6rem !important;
}
.pt-15 {
  padding-top: 6.5rem !important;
}
.pt-16 {
  padding-top: 7rem !important;
}
.pt-17 {
  padding-top: 7.5rem !important;
}
.pt-18 {
  padding-top: 8rem !important;
}
.pt-19 {
  padding-top: 8.5rem !important;
}
.pt-20 {
  padding-top: 9rem !important;
}
.pt-21 {
  padding-top: 9.5rem !important;
}
.pt-22 {
  padding-top: 10rem !important;
}
.pt-23 {
  padding-top: 12rem !important;
}
.pe-0 {
  padding-right: 0 !important;
}
.pe-1 {
  padding-right: 0.25rem !important;
}
.pe-2 {
  padding-right: 0.5rem !important;
}
.pe-3 {
  padding-right: 1rem !important;
}
.pe-4 {
  padding-right: 1.25rem !important;
}
.pe-5 {
  padding-right: 1.5rem !important;
}
.pe-6 {
  padding-right: 2rem !important;
}
.pe-7 {
  padding-right: 2.5rem !important;
}
.pe-8 {
  padding-right: 3rem !important;
}
.pe-9 {
  padding-right: 3.5rem !important;
}
.pe-10 {
  padding-right: 4rem !important;
}
.pe-11 {
  padding-right: 4.5rem !important;
}
.pe-12 {
  padding-right: 5rem !important;
}
.pe-13 {
  padding-right: 5.5rem !important;
}
.pe-14 {
  padding-right: 6rem !important;
}
.pe-15 {
  padding-right: 6.5rem !important;
}
.pe-16 {
  padding-right: 7rem !important;
}
.pe-17 {
  padding-right: 7.5rem !important;
}
.pe-18 {
  padding-right: 8rem !important;
}
.pe-19 {
  padding-right: 8.5rem !important;
}
.pe-20 {
  padding-right: 9rem !important;
}
.pe-21 {
  padding-right: 9.5rem !important;
}
.pe-22 {
  padding-right: 10rem !important;
}
.pe-23 {
  padding-right: 12rem !important;
}
.pb-0 {
  padding-bottom: 0 !important;
}
.pb-1 {
  padding-bottom: 0.25rem !important;
}
.pb-2 {
  padding-bottom: 0.5rem !important;
}
.pb-3 {
  padding-bottom: 1rem !important;
}
.pb-4 {
  padding-bottom: 1.25rem !important;
}
.pb-5 {
  padding-bottom: 1.5rem !important;
}
.pb-6 {
  padding-bottom: 2rem !important;
}
.pb-7 {
  padding-bottom: 2.5rem !important;
}
.pb-8 {
  padding-bottom: 3rem !important;
}
.pb-9 {
  padding-bottom: 3.5rem !important;
}
.pb-10 {
  padding-bottom: 4rem !important;
}
.pb-11 {
  padding-bottom: 4.5rem !important;
}
.pb-12 {
  padding-bottom: 5rem !important;
}
.pb-13 {
  padding-bottom: 5.5rem !important;
}
.pb-14 {
  padding-bottom: 6rem !important;
}
.pb-15 {
  padding-bottom: 6.5rem !important;
}
.pb-16 {
  padding-bottom: 7rem !important;
}
.pb-17 {
  padding-bottom: 7.5rem !important;
}
.pb-18 {
  padding-bottom: 8rem !important;
}
.pb-19 {
  padding-bottom: 8.5rem !important;
}
.pb-20 {
  padding-bottom: 9rem !important;
}
.pb-21 {
  padding-bottom: 9.5rem !important;
}
.pb-22 {
  padding-bottom: 10rem !important;
}
.pb-23 {
  padding-bottom: 12rem !important;
}
.ps-0 {
  padding-left: 0 !important;
}
.ps-1 {
  padding-left: 0.25rem !important;
}
.ps-2 {
  padding-left: 0.5rem !important;
}
.ps-3 {
  padding-left: 1rem !important;
}
.ps-4 {
  padding-left: 1.25rem !important;
}
.ps-5 {
  padding-left: 1.5rem !important;
}
.ps-6 {
  padding-left: 2rem !important;
}
.ps-7 {
  padding-left: 2.5rem !important;
}
.ps-8 {
  padding-left: 3rem !important;
}
.ps-9 {
  padding-left: 3.5rem !important;
}
.ps-10 {
  padding-left: 4rem !important;
}
.ps-11 {
  padding-left: 4.5rem !important;
}
.ps-12 {
  padding-left: 5rem !important;
}
.ps-13 {
  padding-left: 5.5rem !important;
}
.ps-14 {
  padding-left: 6rem !important;
}
.ps-15 {
  padding-left: 6.5rem !important;
}
.ps-16 {
  padding-left: 7rem !important;
}
.ps-17 {
  padding-left: 7.5rem !important;
}
.ps-18 {
  padding-left: 8rem !important;
}
.ps-19 {
  padding-left: 8.5rem !important;
}
.ps-20 {
  padding-left: 9rem !important;
}
.ps-21 {
  padding-left: 9.5rem !important;
}
.ps-22 {
  padding-left: 10rem !important;
}
.ps-23 {
  padding-left: 12rem !important;
}
.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}
.fs-1 {
  font-size: calc(1.35rem + 1.2vw) !important;
}
.fs-2 {
  font-size: calc(1.3125rem + 0.75vw) !important;
}
.fs-3 {
  font-size: calc(1.275rem + 0.3vw) !important;
}
.fs-4 {
  font-size: 1.125rem !important;
}
.fs-5 {
  font-size: 0.938rem !important;
}
.fs-6 {
  font-size: 0.75rem !important;
}
.fst-italic {
  font-style: italic !important;
}
.fst-normal {
  font-style: normal !important;
}
.fw-light {
  font-weight: 300 !important;
}
.fw-lighter {
  font-weight: lighter !important;
}
.fw-normal {
  font-weight: 400 !important;
}
.fw-semi-bold {
  font-weight: 500 !important;
}
.fw-medium {
  font-weight: 500 !important;
}
.fw-bold {
  font-weight: 700 !important;
}
.fw-bolder {
  font-weight: bolder !important;
}
.lh-1 {
  line-height: 1 !important;
}
.lh-2 {
  line-height: 1.5 !important;
}
.lh-3 {
  line-height: 1.8 !important;
}
.lh-sm {
  line-height: 1.2 !important;
}
.lh-base {
  line-height: 1.5 !important;
}
.lh-md {
  line-height: 1.6 !important;
}
.lh-lg {
  line-height: 1.8 !important;
}
.text-start {
  text-align: left !important;
}
.text-end {
  text-align: right !important;
}
.text-center {
  text-align: center !important;
}
.text-decoration-none {
  text-decoration: none !important;
}
.text-decoration-underline {
  text-decoration: underline !important;
}
.text-decoration-line-through {
  text-decoration: line-through !important;
}
.text-lowercase {
  text-transform: lowercase !important;
}
.text-uppercase {
  text-transform: uppercase !important;
}
.text-capitalize {
  text-transform: capitalize !important;
}
.text-wrap {
  white-space: normal !important;
}
.text-nowrap {
  white-space: nowrap !important;
}
/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}
/* rtl:end:remove */
.text-primary {
  color: #624BFF !important;
}
.text-secondary {
  color: #637381 !important;
}
.text-success {
  color: #198754 !important;
}
.text-info {
  color: #0dcaf0 !important;
}
.text-warning {
  color: #ffc107 !important;
}
.text-danger {
  color: #dc3545 !important;
}
.text-light {
  color: #F9FAFB !important;
}
.text-dark {
  color: #212B36 !important;
}
.text-white {
  color: #fff !important;
}
.text-light-primary {
  color: #E0DCFE !important;
}
.text-light-danger {
  color: #FBEBEC !important;
}
.text-light-info {
  color: #E7FAFE !important;
}
.text-light-warning {
  color: #FFF3CD !important;
}
.text-light-secondary {
  color: #e9ecef !important;
}
.text-light-success {
  color: #EAF6EC !important;
}
.text-light-dark {
  color: #d1cfd8 !important;
}
.text-dark-primary {
  color: #593cc1 !important;
}
.text-dark-warning {
  color: #c28135 !important;
}
.text-dark-info {
  color: #51a0c2 !important;
}
.text-dark-danger {
  color: #ae302e !important;
}
.text-dark-success {
  color: #139a74 !important;
}
.text-dark-secondary {
  color: #5c596d !important;
}
.text-gray-100 {
  color: #F9FAFB !important;
}
.text-gray-200 {
  color: #F4F6F8 !important;
}
.text-gray-300 {
  color: #DFE3E8 !important;
}
.text-gray-400 {
  color: #C4CDD5 !important;
}
.text-gray-500 {
  color: #919EAB !important;
}
.text-gray-600 {
  color: #637381 !important;
}
.text-gray-700 {
  color: #454F5B !important;
}
.text-gray-800 {
  color: #212B36 !important;
}
.text-gray-900 {
  color: #161C24 !important;
}
.text-body {
  color: #637381 !important;
}
.text-muted {
  color: #637381 !important;
}
.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}
.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}
.text-reset {
  color: inherit !important;
}
.text-opacity-25 {
  --bs-text-opacity: 0.25;
}
.text-opacity-50 {
  --bs-text-opacity: 0.5;
}
.text-opacity-75 {
  --bs-text-opacity: 0.75;
}
.text-opacity-100 {
  --bs-text-opacity: 1;
}
.bg-primary {
  background-color: #624BFF !important;
}
.bg-secondary {
  background-color: #637381 !important;
}
.bg-success {
  background-color: #198754 !important;
}
.bg-info {
  background-color: #0dcaf0 !important;
}
.bg-warning {
  background-color: #ffc107 !important;
}
.bg-danger {
  background-color: #dc3545 !important;
}
.bg-light {
  background-color: #F9FAFB !important;
}
.bg-dark {
  background-color: #212B36 !important;
}
.bg-white {
  background-color: #fff !important;
}
.bg-light-primary {
  background-color: #E0DCFE !important;
}
.bg-light-danger {
  background-color: #FBEBEC !important;
}
.bg-light-info {
  background-color: #E7FAFE !important;
}
.bg-light-warning {
  background-color: #FFF3CD !important;
}
.bg-light-secondary {
  background-color: #e9ecef !important;
}
.bg-light-success {
  background-color: #EAF6EC !important;
}
.bg-light-dark {
  background-color: #d1cfd8 !important;
}
.bg-dark-primary {
  background-color: #593cc1 !important;
}
.bg-dark-warning {
  background-color: #c28135 !important;
}
.bg-dark-info {
  background-color: #51a0c2 !important;
}
.bg-dark-danger {
  background-color: #ae302e !important;
}
.bg-dark-success {
  background-color: #139a74 !important;
}
.bg-dark-secondary {
  background-color: #5c596d !important;
}
.bg-gray-100 {
  background-color: #F9FAFB !important;
}
.bg-gray-200 {
  background-color: #F4F6F8 !important;
}
.bg-gray-300 {
  background-color: #DFE3E8 !important;
}
.bg-gray-400 {
  background-color: #C4CDD5 !important;
}
.bg-gray-500 {
  background-color: #919EAB !important;
}
.bg-gray-600 {
  background-color: #637381 !important;
}
.bg-gray-700 {
  background-color: #454F5B !important;
}
.bg-gray-800 {
  background-color: #212B36 !important;
}
.bg-gray-900 {
  background-color: #161C24 !important;
}
.bg-body {
  background-color: #fff !important;
}
.bg-transparent {
  background-color: transparent !important;
}
.bg-opacity-10 {
  --bs-bg-opacity: 0.1;
}
.bg-opacity-25 {
  --bs-bg-opacity: 0.25;
}
.bg-opacity-50 {
  --bs-bg-opacity: 0.5;
}
.bg-opacity-75 {
  --bs-bg-opacity: 0.75;
}
.bg-opacity-100 {
  --bs-bg-opacity: 1;
}
.bg-gradient {
  background-image: var(--bs-gradient) !important;
}
.user-select-all {
  -webkit-user-select: all !important;
          user-select: all !important;
}
.user-select-auto {
  -webkit-user-select: auto !important;
      -ms-user-select: auto !important;
          user-select: auto !important;
}
.user-select-none {
  -webkit-user-select: none !important;
      -ms-user-select: none !important;
          user-select: none !important;
}
.pe-none {
  pointer-events: none !important;
}
.pe-auto {
  pointer-events: auto !important;
}
.rounded {
  border-radius: 0.375rem !important;
}
.rounded-0 {
  border-radius: 0 !important;
}
.rounded-1 {
  border-radius: 0.2rem !important;
}
.rounded-2 {
  border-radius: 0.375rem !important;
}
.rounded-3 {
  border-radius: 0.5rem !important;
}
.rounded-circle {
  border-radius: 50% !important;
}
.rounded-pill {
  border-radius: 50rem !important;
}
.rounded-top {
  border-top-left-radius: 0.375rem !important;
  border-top-right-radius: 0.375rem !important;
}
.rounded-end {
  border-top-right-radius: 0.375rem !important;
  border-bottom-right-radius: 0.375rem !important;
}
.rounded-bottom {
  border-bottom-right-radius: 0.375rem !important;
  border-bottom-left-radius: 0.375rem !important;
}
.rounded-start {
  border-bottom-left-radius: 0.375rem !important;
  border-top-left-radius: 0.375rem !important;
}
.visible {
  visibility: visible !important;
}
.invisible {
  visibility: hidden !important;
}
.ls-xs {
  letter-spacing: -0.08em !important;
}
.ls-sm {
  letter-spacing: -0.04em !important;
}
.ls-base {
  letter-spacing: 0em !important;
}
.ls-md {
  letter-spacing: 0.1em !important;
}
.ls-lg {
  letter-spacing: 0.15em !important;
}
.ls-xl {
  letter-spacing: 0.2em !important;
}
.ls-xxl {
  letter-spacing: 0.25em !important;
}
.z-0 {
  z-index: 0 !important;
}
.z-1 {
  z-index: 1 !important;
}
.z-2 {
  z-index: 2 !important;
}
.z-3 {
  z-index: 3 !important;
}
.z-4 {
  z-index: 4 !important;
}
.z-5 {
  z-index: 5 !important;
}
@media (min-width: 576px) {
  .float-sm-start {
    float: left !important;
  }
  .float-sm-end {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-grid {
    display: grid !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
  .d-sm-none {
    display: none !important;
  }
  .w-sm-15 {
    width: 15% !important;
  }
  .w-sm-25 {
    width: 25% !important;
  }
  .w-sm-30 {
    width: 30% !important;
  }
  .w-sm-40 {
    width: 40% !important;
  }
  .w-sm-50 {
    width: 50% !important;
  }
  .w-sm-65 {
    width: 65% !important;
  }
  .w-sm-75 {
    width: 75% !important;
  }
  .w-sm-100 {
    width: 100% !important;
  }
  .w-sm-auto {
    width: auto !important;
  }
  .mw-sm-25 {
    max-width: 25% !important;
  }
  .mw-sm-30 {
    max-width: 30% !important;
  }
  .mw-sm-40 {
    max-width: 40% !important;
  }
  .mw-sm-50 {
    max-width: 50% !important;
  }
  .mw-sm-65 {
    max-width: 65% !important;
  }
  .mw-sm-75 {
    max-width: 75% !important;
  }
  .mw-sm-100 {
    max-width: 100% !important;
  }
  .mw-sm-auto {
    max-width: auto !important;
  }
  .vw-sm-100 {
    width: 100vw !important;
  }
  .min-vw-sm-100 {
    min-width: 100vw !important;
  }
  .h-sm-25 {
    height: 25% !important;
  }
  .h-sm-30 {
    height: 30% !important;
  }
  .h-sm-40 {
    height: 40% !important;
  }
  .h-sm-50 {
    height: 50% !important;
  }
  .h-sm-65 {
    height: 65% !important;
  }
  .h-sm-75 {
    height: 75% !important;
  }
  .h-sm-100 {
    height: 100% !important;
  }
  .h-sm-auto {
    height: auto !important;
  }
  .mh-sm-25 {
    max-height: 25% !important;
  }
  .mh-sm-30 {
    max-height: 30% !important;
  }
  .mh-sm-40 {
    max-height: 40% !important;
  }
  .mh-sm-50 {
    max-height: 50% !important;
  }
  .mh-sm-65 {
    max-height: 65% !important;
  }
  .mh-sm-75 {
    max-height: 75% !important;
  }
  .mh-sm-100 {
    max-height: 100% !important;
  }
  .mh-sm-auto {
    max-height: auto !important;
  }
  .vh-sm-100 {
    height: 100vh !important;
  }
  .min-vh-sm-100 {
    min-height: 100vh !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-sm-0 {
    gap: 0 !important;
  }
  .gap-sm-1 {
    gap: 0.25rem !important;
  }
  .gap-sm-2 {
    gap: 0.5rem !important;
  }
  .gap-sm-3 {
    gap: 1rem !important;
  }
  .gap-sm-4 {
    gap: 1.25rem !important;
  }
  .gap-sm-5 {
    gap: 1.5rem !important;
  }
  .gap-sm-6 {
    gap: 2rem !important;
  }
  .gap-sm-7 {
    gap: 2.5rem !important;
  }
  .gap-sm-8 {
    gap: 3rem !important;
  }
  .gap-sm-9 {
    gap: 3.5rem !important;
  }
  .gap-sm-10 {
    gap: 4rem !important;
  }
  .gap-sm-11 {
    gap: 4.5rem !important;
  }
  .gap-sm-12 {
    gap: 5rem !important;
  }
  .gap-sm-13 {
    gap: 5.5rem !important;
  }
  .gap-sm-14 {
    gap: 6rem !important;
  }
  .gap-sm-15 {
    gap: 6.5rem !important;
  }
  .gap-sm-16 {
    gap: 7rem !important;
  }
  .gap-sm-17 {
    gap: 7.5rem !important;
  }
  .gap-sm-18 {
    gap: 8rem !important;
  }
  .gap-sm-19 {
    gap: 8.5rem !important;
  }
  .gap-sm-20 {
    gap: 9rem !important;
  }
  .gap-sm-21 {
    gap: 9.5rem !important;
  }
  .gap-sm-22 {
    gap: 10rem !important;
  }
  .gap-sm-23 {
    gap: 12rem !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .justify-content-sm-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
  .order-sm-first {
    order: -1 !important;
  }
  .order-sm-0 {
    order: 0 !important;
  }
  .order-sm-1 {
    order: 1 !important;
  }
  .order-sm-2 {
    order: 2 !important;
  }
  .order-sm-3 {
    order: 3 !important;
  }
  .order-sm-4 {
    order: 4 !important;
  }
  .order-sm-5 {
    order: 5 !important;
  }
  .order-sm-last {
    order: 6 !important;
  }
  .m-sm-0 {
    margin: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.25rem !important;
  }
  .m-sm-5 {
    margin: 1.5rem !important;
  }
  .m-sm-6 {
    margin: 2rem !important;
  }
  .m-sm-7 {
    margin: 2.5rem !important;
  }
  .m-sm-8 {
    margin: 3rem !important;
  }
  .m-sm-9 {
    margin: 3.5rem !important;
  }
  .m-sm-10 {
    margin: 4rem !important;
  }
  .m-sm-11 {
    margin: 4.5rem !important;
  }
  .m-sm-12 {
    margin: 5rem !important;
  }
  .m-sm-13 {
    margin: 5.5rem !important;
  }
  .m-sm-14 {
    margin: 6rem !important;
  }
  .m-sm-15 {
    margin: 6.5rem !important;
  }
  .m-sm-16 {
    margin: 7rem !important;
  }
  .m-sm-17 {
    margin: 7.5rem !important;
  }
  .m-sm-18 {
    margin: 8rem !important;
  }
  .m-sm-19 {
    margin: 8.5rem !important;
  }
  .m-sm-20 {
    margin: 9rem !important;
  }
  .m-sm-21 {
    margin: 9.5rem !important;
  }
  .m-sm-22 {
    margin: 10rem !important;
  }
  .m-sm-23 {
    margin: 12rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-sm-4 {
    margin-right: 1.25rem !important;
    margin-left: 1.25rem !important;
  }
  .mx-sm-5 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-sm-6 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-sm-7 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-sm-8 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-sm-9 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-sm-10 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-sm-11 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-sm-12 {
    margin-right: 5rem !important;
    margin-left: 5rem !important;
  }
  .mx-sm-13 {
    margin-right: 5.5rem !important;
    margin-left: 5.5rem !important;
  }
  .mx-sm-14 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-sm-15 {
    margin-right: 6.5rem !important;
    margin-left: 6.5rem !important;
  }
  .mx-sm-16 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-sm-17 {
    margin-right: 7.5rem !important;
    margin-left: 7.5rem !important;
  }
  .mx-sm-18 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-sm-19 {
    margin-right: 8.5rem !important;
    margin-left: 8.5rem !important;
  }
  .mx-sm-20 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-sm-21 {
    margin-right: 9.5rem !important;
    margin-left: 9.5rem !important;
  }
  .mx-sm-22 {
    margin-right: 10rem !important;
    margin-left: 10rem !important;
  }
  .mx-sm-23 {
    margin-right: 12rem !important;
    margin-left: 12rem !important;
  }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-sm-4 {
    margin-top: 1.25rem !important;
    margin-bottom: 1.25rem !important;
  }
  .my-sm-5 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-sm-6 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-sm-7 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-sm-8 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-sm-9 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-sm-10 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-sm-11 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-sm-12 {
    margin-top: 5rem !important;
    margin-bottom: 5rem !important;
  }
  .my-sm-13 {
    margin-top: 5.5rem !important;
    margin-bottom: 5.5rem !important;
  }
  .my-sm-14 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-sm-15 {
    margin-top: 6.5rem !important;
    margin-bottom: 6.5rem !important;
  }
  .my-sm-16 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-sm-17 {
    margin-top: 7.5rem !important;
    margin-bottom: 7.5rem !important;
  }
  .my-sm-18 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-sm-19 {
    margin-top: 8.5rem !important;
    margin-bottom: 8.5rem !important;
  }
  .my-sm-20 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-sm-21 {
    margin-top: 9.5rem !important;
    margin-bottom: 9.5rem !important;
  }
  .my-sm-22 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }
  .my-sm-23 {
    margin-top: 12rem !important;
    margin-bottom: 12rem !important;
  }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-sm-0 {
    margin-top: 0 !important;
  }
  .mt-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mt-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mt-sm-3 {
    margin-top: 1rem !important;
  }
  .mt-sm-4 {
    margin-top: 1.25rem !important;
  }
  .mt-sm-5 {
    margin-top: 1.5rem !important;
  }
  .mt-sm-6 {
    margin-top: 2rem !important;
  }
  .mt-sm-7 {
    margin-top: 2.5rem !important;
  }
  .mt-sm-8 {
    margin-top: 3rem !important;
  }
  .mt-sm-9 {
    margin-top: 3.5rem !important;
  }
  .mt-sm-10 {
    margin-top: 4rem !important;
  }
  .mt-sm-11 {
    margin-top: 4.5rem !important;
  }
  .mt-sm-12 {
    margin-top: 5rem !important;
  }
  .mt-sm-13 {
    margin-top: 5.5rem !important;
  }
  .mt-sm-14 {
    margin-top: 6rem !important;
  }
  .mt-sm-15 {
    margin-top: 6.5rem !important;
  }
  .mt-sm-16 {
    margin-top: 7rem !important;
  }
  .mt-sm-17 {
    margin-top: 7.5rem !important;
  }
  .mt-sm-18 {
    margin-top: 8rem !important;
  }
  .mt-sm-19 {
    margin-top: 8.5rem !important;
  }
  .mt-sm-20 {
    margin-top: 9rem !important;
  }
  .mt-sm-21 {
    margin-top: 9.5rem !important;
  }
  .mt-sm-22 {
    margin-top: 10rem !important;
  }
  .mt-sm-23 {
    margin-top: 12rem !important;
  }
  .mt-sm-auto {
    margin-top: auto !important;
  }
  .me-sm-0 {
    margin-right: 0 !important;
  }
  .me-sm-1 {
    margin-right: 0.25rem !important;
  }
  .me-sm-2 {
    margin-right: 0.5rem !important;
  }
  .me-sm-3 {
    margin-right: 1rem !important;
  }
  .me-sm-4 {
    margin-right: 1.25rem !important;
  }
  .me-sm-5 {
    margin-right: 1.5rem !important;
  }
  .me-sm-6 {
    margin-right: 2rem !important;
  }
  .me-sm-7 {
    margin-right: 2.5rem !important;
  }
  .me-sm-8 {
    margin-right: 3rem !important;
  }
  .me-sm-9 {
    margin-right: 3.5rem !important;
  }
  .me-sm-10 {
    margin-right: 4rem !important;
  }
  .me-sm-11 {
    margin-right: 4.5rem !important;
  }
  .me-sm-12 {
    margin-right: 5rem !important;
  }
  .me-sm-13 {
    margin-right: 5.5rem !important;
  }
  .me-sm-14 {
    margin-right: 6rem !important;
  }
  .me-sm-15 {
    margin-right: 6.5rem !important;
  }
  .me-sm-16 {
    margin-right: 7rem !important;
  }
  .me-sm-17 {
    margin-right: 7.5rem !important;
  }
  .me-sm-18 {
    margin-right: 8rem !important;
  }
  .me-sm-19 {
    margin-right: 8.5rem !important;
  }
  .me-sm-20 {
    margin-right: 9rem !important;
  }
  .me-sm-21 {
    margin-right: 9.5rem !important;
  }
  .me-sm-22 {
    margin-right: 10rem !important;
  }
  .me-sm-23 {
    margin-right: 12rem !important;
  }
  .me-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-sm-3 {
    margin-bottom: 1rem !important;
  }
  .mb-sm-4 {
    margin-bottom: 1.25rem !important;
  }
  .mb-sm-5 {
    margin-bottom: 1.5rem !important;
  }
  .mb-sm-6 {
    margin-bottom: 2rem !important;
  }
  .mb-sm-7 {
    margin-bottom: 2.5rem !important;
  }
  .mb-sm-8 {
    margin-bottom: 3rem !important;
  }
  .mb-sm-9 {
    margin-bottom: 3.5rem !important;
  }
  .mb-sm-10 {
    margin-bottom: 4rem !important;
  }
  .mb-sm-11 {
    margin-bottom: 4.5rem !important;
  }
  .mb-sm-12 {
    margin-bottom: 5rem !important;
  }
  .mb-sm-13 {
    margin-bottom: 5.5rem !important;
  }
  .mb-sm-14 {
    margin-bottom: 6rem !important;
  }
  .mb-sm-15 {
    margin-bottom: 6.5rem !important;
  }
  .mb-sm-16 {
    margin-bottom: 7rem !important;
  }
  .mb-sm-17 {
    margin-bottom: 7.5rem !important;
  }
  .mb-sm-18 {
    margin-bottom: 8rem !important;
  }
  .mb-sm-19 {
    margin-bottom: 8.5rem !important;
  }
  .mb-sm-20 {
    margin-bottom: 9rem !important;
  }
  .mb-sm-21 {
    margin-bottom: 9.5rem !important;
  }
  .mb-sm-22 {
    margin-bottom: 10rem !important;
  }
  .mb-sm-23 {
    margin-bottom: 12rem !important;
  }
  .mb-sm-auto {
    margin-bottom: auto !important;
  }
  .ms-sm-0 {
    margin-left: 0 !important;
  }
  .ms-sm-1 {
    margin-left: 0.25rem !important;
  }
  .ms-sm-2 {
    margin-left: 0.5rem !important;
  }
  .ms-sm-3 {
    margin-left: 1rem !important;
  }
  .ms-sm-4 {
    margin-left: 1.25rem !important;
  }
  .ms-sm-5 {
    margin-left: 1.5rem !important;
  }
  .ms-sm-6 {
    margin-left: 2rem !important;
  }
  .ms-sm-7 {
    margin-left: 2.5rem !important;
  }
  .ms-sm-8 {
    margin-left: 3rem !important;
  }
  .ms-sm-9 {
    margin-left: 3.5rem !important;
  }
  .ms-sm-10 {
    margin-left: 4rem !important;
  }
  .ms-sm-11 {
    margin-left: 4.5rem !important;
  }
  .ms-sm-12 {
    margin-left: 5rem !important;
  }
  .ms-sm-13 {
    margin-left: 5.5rem !important;
  }
  .ms-sm-14 {
    margin-left: 6rem !important;
  }
  .ms-sm-15 {
    margin-left: 6.5rem !important;
  }
  .ms-sm-16 {
    margin-left: 7rem !important;
  }
  .ms-sm-17 {
    margin-left: 7.5rem !important;
  }
  .ms-sm-18 {
    margin-left: 8rem !important;
  }
  .ms-sm-19 {
    margin-left: 8.5rem !important;
  }
  .ms-sm-20 {
    margin-left: 9rem !important;
  }
  .ms-sm-21 {
    margin-left: 9.5rem !important;
  }
  .ms-sm-22 {
    margin-left: 10rem !important;
  }
  .ms-sm-23 {
    margin-left: 12rem !important;
  }
  .ms-sm-auto {
    margin-left: auto !important;
  }
  .m-sm-n1 {
    margin: -0.25rem !important;
  }
  .m-sm-n2 {
    margin: -0.5rem !important;
  }
  .m-sm-n3 {
    margin: -1rem !important;
  }
  .m-sm-n4 {
    margin: -1.25rem !important;
  }
  .m-sm-n5 {
    margin: -1.5rem !important;
  }
  .m-sm-n6 {
    margin: -2rem !important;
  }
  .m-sm-n7 {
    margin: -2.5rem !important;
  }
  .m-sm-n8 {
    margin: -3rem !important;
  }
  .m-sm-n9 {
    margin: -3.5rem !important;
  }
  .m-sm-n10 {
    margin: -4rem !important;
  }
  .m-sm-n11 {
    margin: -4.5rem !important;
  }
  .m-sm-n12 {
    margin: -5rem !important;
  }
  .m-sm-n13 {
    margin: -5.5rem !important;
  }
  .m-sm-n14 {
    margin: -6rem !important;
  }
  .m-sm-n15 {
    margin: -6.5rem !important;
  }
  .m-sm-n16 {
    margin: -7rem !important;
  }
  .m-sm-n17 {
    margin: -7.5rem !important;
  }
  .m-sm-n18 {
    margin: -8rem !important;
  }
  .m-sm-n19 {
    margin: -8.5rem !important;
  }
  .m-sm-n20 {
    margin: -9rem !important;
  }
  .m-sm-n21 {
    margin: -9.5rem !important;
  }
  .m-sm-n22 {
    margin: -10rem !important;
  }
  .m-sm-n23 {
    margin: -12rem !important;
  }
  .mx-sm-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-sm-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-sm-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-sm-n4 {
    margin-right: -1.25rem !important;
    margin-left: -1.25rem !important;
  }
  .mx-sm-n5 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-sm-n6 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-sm-n7 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-sm-n8 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-sm-n9 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-sm-n10 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-sm-n11 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-sm-n12 {
    margin-right: -5rem !important;
    margin-left: -5rem !important;
  }
  .mx-sm-n13 {
    margin-right: -5.5rem !important;
    margin-left: -5.5rem !important;
  }
  .mx-sm-n14 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-sm-n15 {
    margin-right: -6.5rem !important;
    margin-left: -6.5rem !important;
  }
  .mx-sm-n16 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-sm-n17 {
    margin-right: -7.5rem !important;
    margin-left: -7.5rem !important;
  }
  .mx-sm-n18 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-sm-n19 {
    margin-right: -8.5rem !important;
    margin-left: -8.5rem !important;
  }
  .mx-sm-n20 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-sm-n21 {
    margin-right: -9.5rem !important;
    margin-left: -9.5rem !important;
  }
  .mx-sm-n22 {
    margin-right: -10rem !important;
    margin-left: -10rem !important;
  }
  .mx-sm-n23 {
    margin-right: -12rem !important;
    margin-left: -12rem !important;
  }
  .my-sm-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-sm-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-sm-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-sm-n4 {
    margin-top: -1.25rem !important;
    margin-bottom: -1.25rem !important;
  }
  .my-sm-n5 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-sm-n6 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-sm-n7 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-sm-n8 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-sm-n9 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-sm-n10 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-sm-n11 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-sm-n12 {
    margin-top: -5rem !important;
    margin-bottom: -5rem !important;
  }
  .my-sm-n13 {
    margin-top: -5.5rem !important;
    margin-bottom: -5.5rem !important;
  }
  .my-sm-n14 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-sm-n15 {
    margin-top: -6.5rem !important;
    margin-bottom: -6.5rem !important;
  }
  .my-sm-n16 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-sm-n17 {
    margin-top: -7.5rem !important;
    margin-bottom: -7.5rem !important;
  }
  .my-sm-n18 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-sm-n19 {
    margin-top: -8.5rem !important;
    margin-bottom: -8.5rem !important;
  }
  .my-sm-n20 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-sm-n21 {
    margin-top: -9.5rem !important;
    margin-bottom: -9.5rem !important;
  }
  .my-sm-n22 {
    margin-top: -10rem !important;
    margin-bottom: -10rem !important;
  }
  .my-sm-n23 {
    margin-top: -12rem !important;
    margin-bottom: -12rem !important;
  }
  .mt-sm-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-sm-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-sm-n3 {
    margin-top: -1rem !important;
  }
  .mt-sm-n4 {
    margin-top: -1.25rem !important;
  }
  .mt-sm-n5 {
    margin-top: -1.5rem !important;
  }
  .mt-sm-n6 {
    margin-top: -2rem !important;
  }
  .mt-sm-n7 {
    margin-top: -2.5rem !important;
  }
  .mt-sm-n8 {
    margin-top: -3rem !important;
  }
  .mt-sm-n9 {
    margin-top: -3.5rem !important;
  }
  .mt-sm-n10 {
    margin-top: -4rem !important;
  }
  .mt-sm-n11 {
    margin-top: -4.5rem !important;
  }
  .mt-sm-n12 {
    margin-top: -5rem !important;
  }
  .mt-sm-n13 {
    margin-top: -5.5rem !important;
  }
  .mt-sm-n14 {
    margin-top: -6rem !important;
  }
  .mt-sm-n15 {
    margin-top: -6.5rem !important;
  }
  .mt-sm-n16 {
    margin-top: -7rem !important;
  }
  .mt-sm-n17 {
    margin-top: -7.5rem !important;
  }
  .mt-sm-n18 {
    margin-top: -8rem !important;
  }
  .mt-sm-n19 {
    margin-top: -8.5rem !important;
  }
  .mt-sm-n20 {
    margin-top: -9rem !important;
  }
  .mt-sm-n21 {
    margin-top: -9.5rem !important;
  }
  .mt-sm-n22 {
    margin-top: -10rem !important;
  }
  .mt-sm-n23 {
    margin-top: -12rem !important;
  }
  .me-sm-n1 {
    margin-right: -0.25rem !important;
  }
  .me-sm-n2 {
    margin-right: -0.5rem !important;
  }
  .me-sm-n3 {
    margin-right: -1rem !important;
  }
  .me-sm-n4 {
    margin-right: -1.25rem !important;
  }
  .me-sm-n5 {
    margin-right: -1.5rem !important;
  }
  .me-sm-n6 {
    margin-right: -2rem !important;
  }
  .me-sm-n7 {
    margin-right: -2.5rem !important;
  }
  .me-sm-n8 {
    margin-right: -3rem !important;
  }
  .me-sm-n9 {
    margin-right: -3.5rem !important;
  }
  .me-sm-n10 {
    margin-right: -4rem !important;
  }
  .me-sm-n11 {
    margin-right: -4.5rem !important;
  }
  .me-sm-n12 {
    margin-right: -5rem !important;
  }
  .me-sm-n13 {
    margin-right: -5.5rem !important;
  }
  .me-sm-n14 {
    margin-right: -6rem !important;
  }
  .me-sm-n15 {
    margin-right: -6.5rem !important;
  }
  .me-sm-n16 {
    margin-right: -7rem !important;
  }
  .me-sm-n17 {
    margin-right: -7.5rem !important;
  }
  .me-sm-n18 {
    margin-right: -8rem !important;
  }
  .me-sm-n19 {
    margin-right: -8.5rem !important;
  }
  .me-sm-n20 {
    margin-right: -9rem !important;
  }
  .me-sm-n21 {
    margin-right: -9.5rem !important;
  }
  .me-sm-n22 {
    margin-right: -10rem !important;
  }
  .me-sm-n23 {
    margin-right: -12rem !important;
  }
  .mb-sm-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-sm-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-sm-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-sm-n4 {
    margin-bottom: -1.25rem !important;
  }
  .mb-sm-n5 {
    margin-bottom: -1.5rem !important;
  }
  .mb-sm-n6 {
    margin-bottom: -2rem !important;
  }
  .mb-sm-n7 {
    margin-bottom: -2.5rem !important;
  }
  .mb-sm-n8 {
    margin-bottom: -3rem !important;
  }
  .mb-sm-n9 {
    margin-bottom: -3.5rem !important;
  }
  .mb-sm-n10 {
    margin-bottom: -4rem !important;
  }
  .mb-sm-n11 {
    margin-bottom: -4.5rem !important;
  }
  .mb-sm-n12 {
    margin-bottom: -5rem !important;
  }
  .mb-sm-n13 {
    margin-bottom: -5.5rem !important;
  }
  .mb-sm-n14 {
    margin-bottom: -6rem !important;
  }
  .mb-sm-n15 {
    margin-bottom: -6.5rem !important;
  }
  .mb-sm-n16 {
    margin-bottom: -7rem !important;
  }
  .mb-sm-n17 {
    margin-bottom: -7.5rem !important;
  }
  .mb-sm-n18 {
    margin-bottom: -8rem !important;
  }
  .mb-sm-n19 {
    margin-bottom: -8.5rem !important;
  }
  .mb-sm-n20 {
    margin-bottom: -9rem !important;
  }
  .mb-sm-n21 {
    margin-bottom: -9.5rem !important;
  }
  .mb-sm-n22 {
    margin-bottom: -10rem !important;
  }
  .mb-sm-n23 {
    margin-bottom: -12rem !important;
  }
  .ms-sm-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-sm-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-sm-n3 {
    margin-left: -1rem !important;
  }
  .ms-sm-n4 {
    margin-left: -1.25rem !important;
  }
  .ms-sm-n5 {
    margin-left: -1.5rem !important;
  }
  .ms-sm-n6 {
    margin-left: -2rem !important;
  }
  .ms-sm-n7 {
    margin-left: -2.5rem !important;
  }
  .ms-sm-n8 {
    margin-left: -3rem !important;
  }
  .ms-sm-n9 {
    margin-left: -3.5rem !important;
  }
  .ms-sm-n10 {
    margin-left: -4rem !important;
  }
  .ms-sm-n11 {
    margin-left: -4.5rem !important;
  }
  .ms-sm-n12 {
    margin-left: -5rem !important;
  }
  .ms-sm-n13 {
    margin-left: -5.5rem !important;
  }
  .ms-sm-n14 {
    margin-left: -6rem !important;
  }
  .ms-sm-n15 {
    margin-left: -6.5rem !important;
  }
  .ms-sm-n16 {
    margin-left: -7rem !important;
  }
  .ms-sm-n17 {
    margin-left: -7.5rem !important;
  }
  .ms-sm-n18 {
    margin-left: -8rem !important;
  }
  .ms-sm-n19 {
    margin-left: -8.5rem !important;
  }
  .ms-sm-n20 {
    margin-left: -9rem !important;
  }
  .ms-sm-n21 {
    margin-left: -9.5rem !important;
  }
  .ms-sm-n22 {
    margin-left: -10rem !important;
  }
  .ms-sm-n23 {
    margin-left: -12rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.25rem !important;
  }
  .p-sm-5 {
    padding: 1.5rem !important;
  }
  .p-sm-6 {
    padding: 2rem !important;
  }
  .p-sm-7 {
    padding: 2.5rem !important;
  }
  .p-sm-8 {
    padding: 3rem !important;
  }
  .p-sm-9 {
    padding: 3.5rem !important;
  }
  .p-sm-10 {
    padding: 4rem !important;
  }
  .p-sm-11 {
    padding: 4.5rem !important;
  }
  .p-sm-12 {
    padding: 5rem !important;
  }
  .p-sm-13 {
    padding: 5.5rem !important;
  }
  .p-sm-14 {
    padding: 6rem !important;
  }
  .p-sm-15 {
    padding: 6.5rem !important;
  }
  .p-sm-16 {
    padding: 7rem !important;
  }
  .p-sm-17 {
    padding: 7.5rem !important;
  }
  .p-sm-18 {
    padding: 8rem !important;
  }
  .p-sm-19 {
    padding: 8.5rem !important;
  }
  .p-sm-20 {
    padding: 9rem !important;
  }
  .p-sm-21 {
    padding: 9.5rem !important;
  }
  .p-sm-22 {
    padding: 10rem !important;
  }
  .p-sm-23 {
    padding: 12rem !important;
  }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-sm-4 {
    padding-right: 1.25rem !important;
    padding-left: 1.25rem !important;
  }
  .px-sm-5 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-sm-6 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-sm-7 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-sm-8 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-sm-9 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-sm-10 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-sm-11 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-sm-12 {
    padding-right: 5rem !important;
    padding-left: 5rem !important;
  }
  .px-sm-13 {
    padding-right: 5.5rem !important;
    padding-left: 5.5rem !important;
  }
  .px-sm-14 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-sm-15 {
    padding-right: 6.5rem !important;
    padding-left: 6.5rem !important;
  }
  .px-sm-16 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-sm-17 {
    padding-right: 7.5rem !important;
    padding-left: 7.5rem !important;
  }
  .px-sm-18 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-sm-19 {
    padding-right: 8.5rem !important;
    padding-left: 8.5rem !important;
  }
  .px-sm-20 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-sm-21 {
    padding-right: 9.5rem !important;
    padding-left: 9.5rem !important;
  }
  .px-sm-22 {
    padding-right: 10rem !important;
    padding-left: 10rem !important;
  }
  .px-sm-23 {
    padding-right: 12rem !important;
    padding-left: 12rem !important;
  }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-sm-4 {
    padding-top: 1.25rem !important;
    padding-bottom: 1.25rem !important;
  }
  .py-sm-5 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-sm-6 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-sm-7 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-sm-8 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-sm-9 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-sm-10 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-sm-11 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-sm-12 {
    padding-top: 5rem !important;
    padding-bottom: 5rem !important;
  }
  .py-sm-13 {
    padding-top: 5.5rem !important;
    padding-bottom: 5.5rem !important;
  }
  .py-sm-14 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-sm-15 {
    padding-top: 6.5rem !important;
    padding-bottom: 6.5rem !important;
  }
  .py-sm-16 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-sm-17 {
    padding-top: 7.5rem !important;
    padding-bottom: 7.5rem !important;
  }
  .py-sm-18 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-sm-19 {
    padding-top: 8.5rem !important;
    padding-bottom: 8.5rem !important;
  }
  .py-sm-20 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-sm-21 {
    padding-top: 9.5rem !important;
    padding-bottom: 9.5rem !important;
  }
  .py-sm-22 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }
  .py-sm-23 {
    padding-top: 12rem !important;
    padding-bottom: 12rem !important;
  }
  .pt-sm-0 {
    padding-top: 0 !important;
  }
  .pt-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pt-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pt-sm-3 {
    padding-top: 1rem !important;
  }
  .pt-sm-4 {
    padding-top: 1.25rem !important;
  }
  .pt-sm-5 {
    padding-top: 1.5rem !important;
  }
  .pt-sm-6 {
    padding-top: 2rem !important;
  }
  .pt-sm-7 {
    padding-top: 2.5rem !important;
  }
  .pt-sm-8 {
    padding-top: 3rem !important;
  }
  .pt-sm-9 {
    padding-top: 3.5rem !important;
  }
  .pt-sm-10 {
    padding-top: 4rem !important;
  }
  .pt-sm-11 {
    padding-top: 4.5rem !important;
  }
  .pt-sm-12 {
    padding-top: 5rem !important;
  }
  .pt-sm-13 {
    padding-top: 5.5rem !important;
  }
  .pt-sm-14 {
    padding-top: 6rem !important;
  }
  .pt-sm-15 {
    padding-top: 6.5rem !important;
  }
  .pt-sm-16 {
    padding-top: 7rem !important;
  }
  .pt-sm-17 {
    padding-top: 7.5rem !important;
  }
  .pt-sm-18 {
    padding-top: 8rem !important;
  }
  .pt-sm-19 {
    padding-top: 8.5rem !important;
  }
  .pt-sm-20 {
    padding-top: 9rem !important;
  }
  .pt-sm-21 {
    padding-top: 9.5rem !important;
  }
  .pt-sm-22 {
    padding-top: 10rem !important;
  }
  .pt-sm-23 {
    padding-top: 12rem !important;
  }
  .pe-sm-0 {
    padding-right: 0 !important;
  }
  .pe-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pe-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pe-sm-3 {
    padding-right: 1rem !important;
  }
  .pe-sm-4 {
    padding-right: 1.25rem !important;
  }
  .pe-sm-5 {
    padding-right: 1.5rem !important;
  }
  .pe-sm-6 {
    padding-right: 2rem !important;
  }
  .pe-sm-7 {
    padding-right: 2.5rem !important;
  }
  .pe-sm-8 {
    padding-right: 3rem !important;
  }
  .pe-sm-9 {
    padding-right: 3.5rem !important;
  }
  .pe-sm-10 {
    padding-right: 4rem !important;
  }
  .pe-sm-11 {
    padding-right: 4.5rem !important;
  }
  .pe-sm-12 {
    padding-right: 5rem !important;
  }
  .pe-sm-13 {
    padding-right: 5.5rem !important;
  }
  .pe-sm-14 {
    padding-right: 6rem !important;
  }
  .pe-sm-15 {
    padding-right: 6.5rem !important;
  }
  .pe-sm-16 {
    padding-right: 7rem !important;
  }
  .pe-sm-17 {
    padding-right: 7.5rem !important;
  }
  .pe-sm-18 {
    padding-right: 8rem !important;
  }
  .pe-sm-19 {
    padding-right: 8.5rem !important;
  }
  .pe-sm-20 {
    padding-right: 9rem !important;
  }
  .pe-sm-21 {
    padding-right: 9.5rem !important;
  }
  .pe-sm-22 {
    padding-right: 10rem !important;
  }
  .pe-sm-23 {
    padding-right: 12rem !important;
  }
  .pb-sm-0 {
    padding-bottom: 0 !important;
  }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pb-sm-4 {
    padding-bottom: 1.25rem !important;
  }
  .pb-sm-5 {
    padding-bottom: 1.5rem !important;
  }
  .pb-sm-6 {
    padding-bottom: 2rem !important;
  }
  .pb-sm-7 {
    padding-bottom: 2.5rem !important;
  }
  .pb-sm-8 {
    padding-bottom: 3rem !important;
  }
  .pb-sm-9 {
    padding-bottom: 3.5rem !important;
  }
  .pb-sm-10 {
    padding-bottom: 4rem !important;
  }
  .pb-sm-11 {
    padding-bottom: 4.5rem !important;
  }
  .pb-sm-12 {
    padding-bottom: 5rem !important;
  }
  .pb-sm-13 {
    padding-bottom: 5.5rem !important;
  }
  .pb-sm-14 {
    padding-bottom: 6rem !important;
  }
  .pb-sm-15 {
    padding-bottom: 6.5rem !important;
  }
  .pb-sm-16 {
    padding-bottom: 7rem !important;
  }
  .pb-sm-17 {
    padding-bottom: 7.5rem !important;
  }
  .pb-sm-18 {
    padding-bottom: 8rem !important;
  }
  .pb-sm-19 {
    padding-bottom: 8.5rem !important;
  }
  .pb-sm-20 {
    padding-bottom: 9rem !important;
  }
  .pb-sm-21 {
    padding-bottom: 9.5rem !important;
  }
  .pb-sm-22 {
    padding-bottom: 10rem !important;
  }
  .pb-sm-23 {
    padding-bottom: 12rem !important;
  }
  .ps-sm-0 {
    padding-left: 0 !important;
  }
  .ps-sm-1 {
    padding-left: 0.25rem !important;
  }
  .ps-sm-2 {
    padding-left: 0.5rem !important;
  }
  .ps-sm-3 {
    padding-left: 1rem !important;
  }
  .ps-sm-4 {
    padding-left: 1.25rem !important;
  }
  .ps-sm-5 {
    padding-left: 1.5rem !important;
  }
  .ps-sm-6 {
    padding-left: 2rem !important;
  }
  .ps-sm-7 {
    padding-left: 2.5rem !important;
  }
  .ps-sm-8 {
    padding-left: 3rem !important;
  }
  .ps-sm-9 {
    padding-left: 3.5rem !important;
  }
  .ps-sm-10 {
    padding-left: 4rem !important;
  }
  .ps-sm-11 {
    padding-left: 4.5rem !important;
  }
  .ps-sm-12 {
    padding-left: 5rem !important;
  }
  .ps-sm-13 {
    padding-left: 5.5rem !important;
  }
  .ps-sm-14 {
    padding-left: 6rem !important;
  }
  .ps-sm-15 {
    padding-left: 6.5rem !important;
  }
  .ps-sm-16 {
    padding-left: 7rem !important;
  }
  .ps-sm-17 {
    padding-left: 7.5rem !important;
  }
  .ps-sm-18 {
    padding-left: 8rem !important;
  }
  .ps-sm-19 {
    padding-left: 8.5rem !important;
  }
  .ps-sm-20 {
    padding-left: 9rem !important;
  }
  .ps-sm-21 {
    padding-left: 9.5rem !important;
  }
  .ps-sm-22 {
    padding-left: 10rem !important;
  }
  .ps-sm-23 {
    padding-left: 12rem !important;
  }
  .text-sm-start {
    text-align: left !important;
  }
  .text-sm-end {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}
@media (min-width: 768px) {
  .float-md-start {
    float: left !important;
  }
  .float-md-end {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-grid {
    display: grid !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
  .d-md-none {
    display: none !important;
  }
  .w-md-15 {
    width: 15% !important;
  }
  .w-md-25 {
    width: 25% !important;
  }
  .w-md-30 {
    width: 30% !important;
  }
  .w-md-40 {
    width: 40% !important;
  }
  .w-md-50 {
    width: 50% !important;
  }
  .w-md-65 {
    width: 65% !important;
  }
  .w-md-75 {
    width: 75% !important;
  }
  .w-md-100 {
    width: 100% !important;
  }
  .w-md-auto {
    width: auto !important;
  }
  .mw-md-25 {
    max-width: 25% !important;
  }
  .mw-md-30 {
    max-width: 30% !important;
  }
  .mw-md-40 {
    max-width: 40% !important;
  }
  .mw-md-50 {
    max-width: 50% !important;
  }
  .mw-md-65 {
    max-width: 65% !important;
  }
  .mw-md-75 {
    max-width: 75% !important;
  }
  .mw-md-100 {
    max-width: 100% !important;
  }
  .mw-md-auto {
    max-width: auto !important;
  }
  .vw-md-100 {
    width: 100vw !important;
  }
  .min-vw-md-100 {
    min-width: 100vw !important;
  }
  .h-md-25 {
    height: 25% !important;
  }
  .h-md-30 {
    height: 30% !important;
  }
  .h-md-40 {
    height: 40% !important;
  }
  .h-md-50 {
    height: 50% !important;
  }
  .h-md-65 {
    height: 65% !important;
  }
  .h-md-75 {
    height: 75% !important;
  }
  .h-md-100 {
    height: 100% !important;
  }
  .h-md-auto {
    height: auto !important;
  }
  .mh-md-25 {
    max-height: 25% !important;
  }
  .mh-md-30 {
    max-height: 30% !important;
  }
  .mh-md-40 {
    max-height: 40% !important;
  }
  .mh-md-50 {
    max-height: 50% !important;
  }
  .mh-md-65 {
    max-height: 65% !important;
  }
  .mh-md-75 {
    max-height: 75% !important;
  }
  .mh-md-100 {
    max-height: 100% !important;
  }
  .mh-md-auto {
    max-height: auto !important;
  }
  .vh-md-100 {
    height: 100vh !important;
  }
  .min-vh-md-100 {
    min-height: 100vh !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-md-0 {
    gap: 0 !important;
  }
  .gap-md-1 {
    gap: 0.25rem !important;
  }
  .gap-md-2 {
    gap: 0.5rem !important;
  }
  .gap-md-3 {
    gap: 1rem !important;
  }
  .gap-md-4 {
    gap: 1.25rem !important;
  }
  .gap-md-5 {
    gap: 1.5rem !important;
  }
  .gap-md-6 {
    gap: 2rem !important;
  }
  .gap-md-7 {
    gap: 2.5rem !important;
  }
  .gap-md-8 {
    gap: 3rem !important;
  }
  .gap-md-9 {
    gap: 3.5rem !important;
  }
  .gap-md-10 {
    gap: 4rem !important;
  }
  .gap-md-11 {
    gap: 4.5rem !important;
  }
  .gap-md-12 {
    gap: 5rem !important;
  }
  .gap-md-13 {
    gap: 5.5rem !important;
  }
  .gap-md-14 {
    gap: 6rem !important;
  }
  .gap-md-15 {
    gap: 6.5rem !important;
  }
  .gap-md-16 {
    gap: 7rem !important;
  }
  .gap-md-17 {
    gap: 7.5rem !important;
  }
  .gap-md-18 {
    gap: 8rem !important;
  }
  .gap-md-19 {
    gap: 8.5rem !important;
  }
  .gap-md-20 {
    gap: 9rem !important;
  }
  .gap-md-21 {
    gap: 9.5rem !important;
  }
  .gap-md-22 {
    gap: 10rem !important;
  }
  .gap-md-23 {
    gap: 12rem !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .justify-content-md-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
  .order-md-first {
    order: -1 !important;
  }
  .order-md-0 {
    order: 0 !important;
  }
  .order-md-1 {
    order: 1 !important;
  }
  .order-md-2 {
    order: 2 !important;
  }
  .order-md-3 {
    order: 3 !important;
  }
  .order-md-4 {
    order: 4 !important;
  }
  .order-md-5 {
    order: 5 !important;
  }
  .order-md-last {
    order: 6 !important;
  }
  .m-md-0 {
    margin: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .m-md-4 {
    margin: 1.25rem !important;
  }
  .m-md-5 {
    margin: 1.5rem !important;
  }
  .m-md-6 {
    margin: 2rem !important;
  }
  .m-md-7 {
    margin: 2.5rem !important;
  }
  .m-md-8 {
    margin: 3rem !important;
  }
  .m-md-9 {
    margin: 3.5rem !important;
  }
  .m-md-10 {
    margin: 4rem !important;
  }
  .m-md-11 {
    margin: 4.5rem !important;
  }
  .m-md-12 {
    margin: 5rem !important;
  }
  .m-md-13 {
    margin: 5.5rem !important;
  }
  .m-md-14 {
    margin: 6rem !important;
  }
  .m-md-15 {
    margin: 6.5rem !important;
  }
  .m-md-16 {
    margin: 7rem !important;
  }
  .m-md-17 {
    margin: 7.5rem !important;
  }
  .m-md-18 {
    margin: 8rem !important;
  }
  .m-md-19 {
    margin: 8.5rem !important;
  }
  .m-md-20 {
    margin: 9rem !important;
  }
  .m-md-21 {
    margin: 9.5rem !important;
  }
  .m-md-22 {
    margin: 10rem !important;
  }
  .m-md-23 {
    margin: 12rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-md-4 {
    margin-right: 1.25rem !important;
    margin-left: 1.25rem !important;
  }
  .mx-md-5 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-md-6 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-md-7 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-md-8 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-md-9 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-md-10 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-md-11 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-md-12 {
    margin-right: 5rem !important;
    margin-left: 5rem !important;
  }
  .mx-md-13 {
    margin-right: 5.5rem !important;
    margin-left: 5.5rem !important;
  }
  .mx-md-14 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-md-15 {
    margin-right: 6.5rem !important;
    margin-left: 6.5rem !important;
  }
  .mx-md-16 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-md-17 {
    margin-right: 7.5rem !important;
    margin-left: 7.5rem !important;
  }
  .mx-md-18 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-md-19 {
    margin-right: 8.5rem !important;
    margin-left: 8.5rem !important;
  }
  .mx-md-20 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-md-21 {
    margin-right: 9.5rem !important;
    margin-left: 9.5rem !important;
  }
  .mx-md-22 {
    margin-right: 10rem !important;
    margin-left: 10rem !important;
  }
  .mx-md-23 {
    margin-right: 12rem !important;
    margin-left: 12rem !important;
  }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-md-4 {
    margin-top: 1.25rem !important;
    margin-bottom: 1.25rem !important;
  }
  .my-md-5 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-md-6 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-md-7 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-md-8 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-md-9 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-md-10 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-md-11 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-md-12 {
    margin-top: 5rem !important;
    margin-bottom: 5rem !important;
  }
  .my-md-13 {
    margin-top: 5.5rem !important;
    margin-bottom: 5.5rem !important;
  }
  .my-md-14 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-md-15 {
    margin-top: 6.5rem !important;
    margin-bottom: 6.5rem !important;
  }
  .my-md-16 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-md-17 {
    margin-top: 7.5rem !important;
    margin-bottom: 7.5rem !important;
  }
  .my-md-18 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-md-19 {
    margin-top: 8.5rem !important;
    margin-bottom: 8.5rem !important;
  }
  .my-md-20 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-md-21 {
    margin-top: 9.5rem !important;
    margin-bottom: 9.5rem !important;
  }
  .my-md-22 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }
  .my-md-23 {
    margin-top: 12rem !important;
    margin-bottom: 12rem !important;
  }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-md-0 {
    margin-top: 0 !important;
  }
  .mt-md-1 {
    margin-top: 0.25rem !important;
  }
  .mt-md-2 {
    margin-top: 0.5rem !important;
  }
  .mt-md-3 {
    margin-top: 1rem !important;
  }
  .mt-md-4 {
    margin-top: 1.25rem !important;
  }
  .mt-md-5 {
    margin-top: 1.5rem !important;
  }
  .mt-md-6 {
    margin-top: 2rem !important;
  }
  .mt-md-7 {
    margin-top: 2.5rem !important;
  }
  .mt-md-8 {
    margin-top: 3rem !important;
  }
  .mt-md-9 {
    margin-top: 3.5rem !important;
  }
  .mt-md-10 {
    margin-top: 4rem !important;
  }
  .mt-md-11 {
    margin-top: 4.5rem !important;
  }
  .mt-md-12 {
    margin-top: 5rem !important;
  }
  .mt-md-13 {
    margin-top: 5.5rem !important;
  }
  .mt-md-14 {
    margin-top: 6rem !important;
  }
  .mt-md-15 {
    margin-top: 6.5rem !important;
  }
  .mt-md-16 {
    margin-top: 7rem !important;
  }
  .mt-md-17 {
    margin-top: 7.5rem !important;
  }
  .mt-md-18 {
    margin-top: 8rem !important;
  }
  .mt-md-19 {
    margin-top: 8.5rem !important;
  }
  .mt-md-20 {
    margin-top: 9rem !important;
  }
  .mt-md-21 {
    margin-top: 9.5rem !important;
  }
  .mt-md-22 {
    margin-top: 10rem !important;
  }
  .mt-md-23 {
    margin-top: 12rem !important;
  }
  .mt-md-auto {
    margin-top: auto !important;
  }
  .me-md-0 {
    margin-right: 0 !important;
  }
  .me-md-1 {
    margin-right: 0.25rem !important;
  }
  .me-md-2 {
    margin-right: 0.5rem !important;
  }
  .me-md-3 {
    margin-right: 1rem !important;
  }
  .me-md-4 {
    margin-right: 1.25rem !important;
  }
  .me-md-5 {
    margin-right: 1.5rem !important;
  }
  .me-md-6 {
    margin-right: 2rem !important;
  }
  .me-md-7 {
    margin-right: 2.5rem !important;
  }
  .me-md-8 {
    margin-right: 3rem !important;
  }
  .me-md-9 {
    margin-right: 3.5rem !important;
  }
  .me-md-10 {
    margin-right: 4rem !important;
  }
  .me-md-11 {
    margin-right: 4.5rem !important;
  }
  .me-md-12 {
    margin-right: 5rem !important;
  }
  .me-md-13 {
    margin-right: 5.5rem !important;
  }
  .me-md-14 {
    margin-right: 6rem !important;
  }
  .me-md-15 {
    margin-right: 6.5rem !important;
  }
  .me-md-16 {
    margin-right: 7rem !important;
  }
  .me-md-17 {
    margin-right: 7.5rem !important;
  }
  .me-md-18 {
    margin-right: 8rem !important;
  }
  .me-md-19 {
    margin-right: 8.5rem !important;
  }
  .me-md-20 {
    margin-right: 9rem !important;
  }
  .me-md-21 {
    margin-right: 9.5rem !important;
  }
  .me-md-22 {
    margin-right: 10rem !important;
  }
  .me-md-23 {
    margin-right: 12rem !important;
  }
  .me-md-auto {
    margin-right: auto !important;
  }
  .mb-md-0 {
    margin-bottom: 0 !important;
  }
  .mb-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-md-3 {
    margin-bottom: 1rem !important;
  }
  .mb-md-4 {
    margin-bottom: 1.25rem !important;
  }
  .mb-md-5 {
    margin-bottom: 1.5rem !important;
  }
  .mb-md-6 {
    margin-bottom: 2rem !important;
  }
  .mb-md-7 {
    margin-bottom: 2.5rem !important;
  }
  .mb-md-8 {
    margin-bottom: 3rem !important;
  }
  .mb-md-9 {
    margin-bottom: 3.5rem !important;
  }
  .mb-md-10 {
    margin-bottom: 4rem !important;
  }
  .mb-md-11 {
    margin-bottom: 4.5rem !important;
  }
  .mb-md-12 {
    margin-bottom: 5rem !important;
  }
  .mb-md-13 {
    margin-bottom: 5.5rem !important;
  }
  .mb-md-14 {
    margin-bottom: 6rem !important;
  }
  .mb-md-15 {
    margin-bottom: 6.5rem !important;
  }
  .mb-md-16 {
    margin-bottom: 7rem !important;
  }
  .mb-md-17 {
    margin-bottom: 7.5rem !important;
  }
  .mb-md-18 {
    margin-bottom: 8rem !important;
  }
  .mb-md-19 {
    margin-bottom: 8.5rem !important;
  }
  .mb-md-20 {
    margin-bottom: 9rem !important;
  }
  .mb-md-21 {
    margin-bottom: 9.5rem !important;
  }
  .mb-md-22 {
    margin-bottom: 10rem !important;
  }
  .mb-md-23 {
    margin-bottom: 12rem !important;
  }
  .mb-md-auto {
    margin-bottom: auto !important;
  }
  .ms-md-0 {
    margin-left: 0 !important;
  }
  .ms-md-1 {
    margin-left: 0.25rem !important;
  }
  .ms-md-2 {
    margin-left: 0.5rem !important;
  }
  .ms-md-3 {
    margin-left: 1rem !important;
  }
  .ms-md-4 {
    margin-left: 1.25rem !important;
  }
  .ms-md-5 {
    margin-left: 1.5rem !important;
  }
  .ms-md-6 {
    margin-left: 2rem !important;
  }
  .ms-md-7 {
    margin-left: 2.5rem !important;
  }
  .ms-md-8 {
    margin-left: 3rem !important;
  }
  .ms-md-9 {
    margin-left: 3.5rem !important;
  }
  .ms-md-10 {
    margin-left: 4rem !important;
  }
  .ms-md-11 {
    margin-left: 4.5rem !important;
  }
  .ms-md-12 {
    margin-left: 5rem !important;
  }
  .ms-md-13 {
    margin-left: 5.5rem !important;
  }
  .ms-md-14 {
    margin-left: 6rem !important;
  }
  .ms-md-15 {
    margin-left: 6.5rem !important;
  }
  .ms-md-16 {
    margin-left: 7rem !important;
  }
  .ms-md-17 {
    margin-left: 7.5rem !important;
  }
  .ms-md-18 {
    margin-left: 8rem !important;
  }
  .ms-md-19 {
    margin-left: 8.5rem !important;
  }
  .ms-md-20 {
    margin-left: 9rem !important;
  }
  .ms-md-21 {
    margin-left: 9.5rem !important;
  }
  .ms-md-22 {
    margin-left: 10rem !important;
  }
  .ms-md-23 {
    margin-left: 12rem !important;
  }
  .ms-md-auto {
    margin-left: auto !important;
  }
  .m-md-n1 {
    margin: -0.25rem !important;
  }
  .m-md-n2 {
    margin: -0.5rem !important;
  }
  .m-md-n3 {
    margin: -1rem !important;
  }
  .m-md-n4 {
    margin: -1.25rem !important;
  }
  .m-md-n5 {
    margin: -1.5rem !important;
  }
  .m-md-n6 {
    margin: -2rem !important;
  }
  .m-md-n7 {
    margin: -2.5rem !important;
  }
  .m-md-n8 {
    margin: -3rem !important;
  }
  .m-md-n9 {
    margin: -3.5rem !important;
  }
  .m-md-n10 {
    margin: -4rem !important;
  }
  .m-md-n11 {
    margin: -4.5rem !important;
  }
  .m-md-n12 {
    margin: -5rem !important;
  }
  .m-md-n13 {
    margin: -5.5rem !important;
  }
  .m-md-n14 {
    margin: -6rem !important;
  }
  .m-md-n15 {
    margin: -6.5rem !important;
  }
  .m-md-n16 {
    margin: -7rem !important;
  }
  .m-md-n17 {
    margin: -7.5rem !important;
  }
  .m-md-n18 {
    margin: -8rem !important;
  }
  .m-md-n19 {
    margin: -8.5rem !important;
  }
  .m-md-n20 {
    margin: -9rem !important;
  }
  .m-md-n21 {
    margin: -9.5rem !important;
  }
  .m-md-n22 {
    margin: -10rem !important;
  }
  .m-md-n23 {
    margin: -12rem !important;
  }
  .mx-md-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-md-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-md-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-md-n4 {
    margin-right: -1.25rem !important;
    margin-left: -1.25rem !important;
  }
  .mx-md-n5 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-md-n6 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-md-n7 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-md-n8 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-md-n9 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-md-n10 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-md-n11 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-md-n12 {
    margin-right: -5rem !important;
    margin-left: -5rem !important;
  }
  .mx-md-n13 {
    margin-right: -5.5rem !important;
    margin-left: -5.5rem !important;
  }
  .mx-md-n14 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-md-n15 {
    margin-right: -6.5rem !important;
    margin-left: -6.5rem !important;
  }
  .mx-md-n16 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-md-n17 {
    margin-right: -7.5rem !important;
    margin-left: -7.5rem !important;
  }
  .mx-md-n18 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-md-n19 {
    margin-right: -8.5rem !important;
    margin-left: -8.5rem !important;
  }
  .mx-md-n20 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-md-n21 {
    margin-right: -9.5rem !important;
    margin-left: -9.5rem !important;
  }
  .mx-md-n22 {
    margin-right: -10rem !important;
    margin-left: -10rem !important;
  }
  .mx-md-n23 {
    margin-right: -12rem !important;
    margin-left: -12rem !important;
  }
  .my-md-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-md-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-md-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-md-n4 {
    margin-top: -1.25rem !important;
    margin-bottom: -1.25rem !important;
  }
  .my-md-n5 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-md-n6 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-md-n7 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-md-n8 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-md-n9 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-md-n10 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-md-n11 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-md-n12 {
    margin-top: -5rem !important;
    margin-bottom: -5rem !important;
  }
  .my-md-n13 {
    margin-top: -5.5rem !important;
    margin-bottom: -5.5rem !important;
  }
  .my-md-n14 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-md-n15 {
    margin-top: -6.5rem !important;
    margin-bottom: -6.5rem !important;
  }
  .my-md-n16 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-md-n17 {
    margin-top: -7.5rem !important;
    margin-bottom: -7.5rem !important;
  }
  .my-md-n18 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-md-n19 {
    margin-top: -8.5rem !important;
    margin-bottom: -8.5rem !important;
  }
  .my-md-n20 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-md-n21 {
    margin-top: -9.5rem !important;
    margin-bottom: -9.5rem !important;
  }
  .my-md-n22 {
    margin-top: -10rem !important;
    margin-bottom: -10rem !important;
  }
  .my-md-n23 {
    margin-top: -12rem !important;
    margin-bottom: -12rem !important;
  }
  .mt-md-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-md-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-md-n3 {
    margin-top: -1rem !important;
  }
  .mt-md-n4 {
    margin-top: -1.25rem !important;
  }
  .mt-md-n5 {
    margin-top: -1.5rem !important;
  }
  .mt-md-n6 {
    margin-top: -2rem !important;
  }
  .mt-md-n7 {
    margin-top: -2.5rem !important;
  }
  .mt-md-n8 {
    margin-top: -3rem !important;
  }
  .mt-md-n9 {
    margin-top: -3.5rem !important;
  }
  .mt-md-n10 {
    margin-top: -4rem !important;
  }
  .mt-md-n11 {
    margin-top: -4.5rem !important;
  }
  .mt-md-n12 {
    margin-top: -5rem !important;
  }
  .mt-md-n13 {
    margin-top: -5.5rem !important;
  }
  .mt-md-n14 {
    margin-top: -6rem !important;
  }
  .mt-md-n15 {
    margin-top: -6.5rem !important;
  }
  .mt-md-n16 {
    margin-top: -7rem !important;
  }
  .mt-md-n17 {
    margin-top: -7.5rem !important;
  }
  .mt-md-n18 {
    margin-top: -8rem !important;
  }
  .mt-md-n19 {
    margin-top: -8.5rem !important;
  }
  .mt-md-n20 {
    margin-top: -9rem !important;
  }
  .mt-md-n21 {
    margin-top: -9.5rem !important;
  }
  .mt-md-n22 {
    margin-top: -10rem !important;
  }
  .mt-md-n23 {
    margin-top: -12rem !important;
  }
  .me-md-n1 {
    margin-right: -0.25rem !important;
  }
  .me-md-n2 {
    margin-right: -0.5rem !important;
  }
  .me-md-n3 {
    margin-right: -1rem !important;
  }
  .me-md-n4 {
    margin-right: -1.25rem !important;
  }
  .me-md-n5 {
    margin-right: -1.5rem !important;
  }
  .me-md-n6 {
    margin-right: -2rem !important;
  }
  .me-md-n7 {
    margin-right: -2.5rem !important;
  }
  .me-md-n8 {
    margin-right: -3rem !important;
  }
  .me-md-n9 {
    margin-right: -3.5rem !important;
  }
  .me-md-n10 {
    margin-right: -4rem !important;
  }
  .me-md-n11 {
    margin-right: -4.5rem !important;
  }
  .me-md-n12 {
    margin-right: -5rem !important;
  }
  .me-md-n13 {
    margin-right: -5.5rem !important;
  }
  .me-md-n14 {
    margin-right: -6rem !important;
  }
  .me-md-n15 {
    margin-right: -6.5rem !important;
  }
  .me-md-n16 {
    margin-right: -7rem !important;
  }
  .me-md-n17 {
    margin-right: -7.5rem !important;
  }
  .me-md-n18 {
    margin-right: -8rem !important;
  }
  .me-md-n19 {
    margin-right: -8.5rem !important;
  }
  .me-md-n20 {
    margin-right: -9rem !important;
  }
  .me-md-n21 {
    margin-right: -9.5rem !important;
  }
  .me-md-n22 {
    margin-right: -10rem !important;
  }
  .me-md-n23 {
    margin-right: -12rem !important;
  }
  .mb-md-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-md-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-md-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-md-n4 {
    margin-bottom: -1.25rem !important;
  }
  .mb-md-n5 {
    margin-bottom: -1.5rem !important;
  }
  .mb-md-n6 {
    margin-bottom: -2rem !important;
  }
  .mb-md-n7 {
    margin-bottom: -2.5rem !important;
  }
  .mb-md-n8 {
    margin-bottom: -3rem !important;
  }
  .mb-md-n9 {
    margin-bottom: -3.5rem !important;
  }
  .mb-md-n10 {
    margin-bottom: -4rem !important;
  }
  .mb-md-n11 {
    margin-bottom: -4.5rem !important;
  }
  .mb-md-n12 {
    margin-bottom: -5rem !important;
  }
  .mb-md-n13 {
    margin-bottom: -5.5rem !important;
  }
  .mb-md-n14 {
    margin-bottom: -6rem !important;
  }
  .mb-md-n15 {
    margin-bottom: -6.5rem !important;
  }
  .mb-md-n16 {
    margin-bottom: -7rem !important;
  }
  .mb-md-n17 {
    margin-bottom: -7.5rem !important;
  }
  .mb-md-n18 {
    margin-bottom: -8rem !important;
  }
  .mb-md-n19 {
    margin-bottom: -8.5rem !important;
  }
  .mb-md-n20 {
    margin-bottom: -9rem !important;
  }
  .mb-md-n21 {
    margin-bottom: -9.5rem !important;
  }
  .mb-md-n22 {
    margin-bottom: -10rem !important;
  }
  .mb-md-n23 {
    margin-bottom: -12rem !important;
  }
  .ms-md-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-md-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-md-n3 {
    margin-left: -1rem !important;
  }
  .ms-md-n4 {
    margin-left: -1.25rem !important;
  }
  .ms-md-n5 {
    margin-left: -1.5rem !important;
  }
  .ms-md-n6 {
    margin-left: -2rem !important;
  }
  .ms-md-n7 {
    margin-left: -2.5rem !important;
  }
  .ms-md-n8 {
    margin-left: -3rem !important;
  }
  .ms-md-n9 {
    margin-left: -3.5rem !important;
  }
  .ms-md-n10 {
    margin-left: -4rem !important;
  }
  .ms-md-n11 {
    margin-left: -4.5rem !important;
  }
  .ms-md-n12 {
    margin-left: -5rem !important;
  }
  .ms-md-n13 {
    margin-left: -5.5rem !important;
  }
  .ms-md-n14 {
    margin-left: -6rem !important;
  }
  .ms-md-n15 {
    margin-left: -6.5rem !important;
  }
  .ms-md-n16 {
    margin-left: -7rem !important;
  }
  .ms-md-n17 {
    margin-left: -7.5rem !important;
  }
  .ms-md-n18 {
    margin-left: -8rem !important;
  }
  .ms-md-n19 {
    margin-left: -8.5rem !important;
  }
  .ms-md-n20 {
    margin-left: -9rem !important;
  }
  .ms-md-n21 {
    margin-left: -9.5rem !important;
  }
  .ms-md-n22 {
    margin-left: -10rem !important;
  }
  .ms-md-n23 {
    margin-left: -12rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .p-md-4 {
    padding: 1.25rem !important;
  }
  .p-md-5 {
    padding: 1.5rem !important;
  }
  .p-md-6 {
    padding: 2rem !important;
  }
  .p-md-7 {
    padding: 2.5rem !important;
  }
  .p-md-8 {
    padding: 3rem !important;
  }
  .p-md-9 {
    padding: 3.5rem !important;
  }
  .p-md-10 {
    padding: 4rem !important;
  }
  .p-md-11 {
    padding: 4.5rem !important;
  }
  .p-md-12 {
    padding: 5rem !important;
  }
  .p-md-13 {
    padding: 5.5rem !important;
  }
  .p-md-14 {
    padding: 6rem !important;
  }
  .p-md-15 {
    padding: 6.5rem !important;
  }
  .p-md-16 {
    padding: 7rem !important;
  }
  .p-md-17 {
    padding: 7.5rem !important;
  }
  .p-md-18 {
    padding: 8rem !important;
  }
  .p-md-19 {
    padding: 8.5rem !important;
  }
  .p-md-20 {
    padding: 9rem !important;
  }
  .p-md-21 {
    padding: 9.5rem !important;
  }
  .p-md-22 {
    padding: 10rem !important;
  }
  .p-md-23 {
    padding: 12rem !important;
  }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-md-4 {
    padding-right: 1.25rem !important;
    padding-left: 1.25rem !important;
  }
  .px-md-5 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-md-6 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-md-7 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-md-8 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-md-9 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-md-10 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-md-11 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-md-12 {
    padding-right: 5rem !important;
    padding-left: 5rem !important;
  }
  .px-md-13 {
    padding-right: 5.5rem !important;
    padding-left: 5.5rem !important;
  }
  .px-md-14 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-md-15 {
    padding-right: 6.5rem !important;
    padding-left: 6.5rem !important;
  }
  .px-md-16 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-md-17 {
    padding-right: 7.5rem !important;
    padding-left: 7.5rem !important;
  }
  .px-md-18 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-md-19 {
    padding-right: 8.5rem !important;
    padding-left: 8.5rem !important;
  }
  .px-md-20 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-md-21 {
    padding-right: 9.5rem !important;
    padding-left: 9.5rem !important;
  }
  .px-md-22 {
    padding-right: 10rem !important;
    padding-left: 10rem !important;
  }
  .px-md-23 {
    padding-right: 12rem !important;
    padding-left: 12rem !important;
  }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-md-4 {
    padding-top: 1.25rem !important;
    padding-bottom: 1.25rem !important;
  }
  .py-md-5 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-md-6 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-md-7 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-md-8 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-md-9 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-md-10 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-md-11 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-md-12 {
    padding-top: 5rem !important;
    padding-bottom: 5rem !important;
  }
  .py-md-13 {
    padding-top: 5.5rem !important;
    padding-bottom: 5.5rem !important;
  }
  .py-md-14 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-md-15 {
    padding-top: 6.5rem !important;
    padding-bottom: 6.5rem !important;
  }
  .py-md-16 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-md-17 {
    padding-top: 7.5rem !important;
    padding-bottom: 7.5rem !important;
  }
  .py-md-18 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-md-19 {
    padding-top: 8.5rem !important;
    padding-bottom: 8.5rem !important;
  }
  .py-md-20 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-md-21 {
    padding-top: 9.5rem !important;
    padding-bottom: 9.5rem !important;
  }
  .py-md-22 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }
  .py-md-23 {
    padding-top: 12rem !important;
    padding-bottom: 12rem !important;
  }
  .pt-md-0 {
    padding-top: 0 !important;
  }
  .pt-md-1 {
    padding-top: 0.25rem !important;
  }
  .pt-md-2 {
    padding-top: 0.5rem !important;
  }
  .pt-md-3 {
    padding-top: 1rem !important;
  }
  .pt-md-4 {
    padding-top: 1.25rem !important;
  }
  .pt-md-5 {
    padding-top: 1.5rem !important;
  }
  .pt-md-6 {
    padding-top: 2rem !important;
  }
  .pt-md-7 {
    padding-top: 2.5rem !important;
  }
  .pt-md-8 {
    padding-top: 3rem !important;
  }
  .pt-md-9 {
    padding-top: 3.5rem !important;
  }
  .pt-md-10 {
    padding-top: 4rem !important;
  }
  .pt-md-11 {
    padding-top: 4.5rem !important;
  }
  .pt-md-12 {
    padding-top: 5rem !important;
  }
  .pt-md-13 {
    padding-top: 5.5rem !important;
  }
  .pt-md-14 {
    padding-top: 6rem !important;
  }
  .pt-md-15 {
    padding-top: 6.5rem !important;
  }
  .pt-md-16 {
    padding-top: 7rem !important;
  }
  .pt-md-17 {
    padding-top: 7.5rem !important;
  }
  .pt-md-18 {
    padding-top: 8rem !important;
  }
  .pt-md-19 {
    padding-top: 8.5rem !important;
  }
  .pt-md-20 {
    padding-top: 9rem !important;
  }
  .pt-md-21 {
    padding-top: 9.5rem !important;
  }
  .pt-md-22 {
    padding-top: 10rem !important;
  }
  .pt-md-23 {
    padding-top: 12rem !important;
  }
  .pe-md-0 {
    padding-right: 0 !important;
  }
  .pe-md-1 {
    padding-right: 0.25rem !important;
  }
  .pe-md-2 {
    padding-right: 0.5rem !important;
  }
  .pe-md-3 {
    padding-right: 1rem !important;
  }
  .pe-md-4 {
    padding-right: 1.25rem !important;
  }
  .pe-md-5 {
    padding-right: 1.5rem !important;
  }
  .pe-md-6 {
    padding-right: 2rem !important;
  }
  .pe-md-7 {
    padding-right: 2.5rem !important;
  }
  .pe-md-8 {
    padding-right: 3rem !important;
  }
  .pe-md-9 {
    padding-right: 3.5rem !important;
  }
  .pe-md-10 {
    padding-right: 4rem !important;
  }
  .pe-md-11 {
    padding-right: 4.5rem !important;
  }
  .pe-md-12 {
    padding-right: 5rem !important;
  }
  .pe-md-13 {
    padding-right: 5.5rem !important;
  }
  .pe-md-14 {
    padding-right: 6rem !important;
  }
  .pe-md-15 {
    padding-right: 6.5rem !important;
  }
  .pe-md-16 {
    padding-right: 7rem !important;
  }
  .pe-md-17 {
    padding-right: 7.5rem !important;
  }
  .pe-md-18 {
    padding-right: 8rem !important;
  }
  .pe-md-19 {
    padding-right: 8.5rem !important;
  }
  .pe-md-20 {
    padding-right: 9rem !important;
  }
  .pe-md-21 {
    padding-right: 9.5rem !important;
  }
  .pe-md-22 {
    padding-right: 10rem !important;
  }
  .pe-md-23 {
    padding-right: 12rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0 !important;
  }
  .pb-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-md-3 {
    padding-bottom: 1rem !important;
  }
  .pb-md-4 {
    padding-bottom: 1.25rem !important;
  }
  .pb-md-5 {
    padding-bottom: 1.5rem !important;
  }
  .pb-md-6 {
    padding-bottom: 2rem !important;
  }
  .pb-md-7 {
    padding-bottom: 2.5rem !important;
  }
  .pb-md-8 {
    padding-bottom: 3rem !important;
  }
  .pb-md-9 {
    padding-bottom: 3.5rem !important;
  }
  .pb-md-10 {
    padding-bottom: 4rem !important;
  }
  .pb-md-11 {
    padding-bottom: 4.5rem !important;
  }
  .pb-md-12 {
    padding-bottom: 5rem !important;
  }
  .pb-md-13 {
    padding-bottom: 5.5rem !important;
  }
  .pb-md-14 {
    padding-bottom: 6rem !important;
  }
  .pb-md-15 {
    padding-bottom: 6.5rem !important;
  }
  .pb-md-16 {
    padding-bottom: 7rem !important;
  }
  .pb-md-17 {
    padding-bottom: 7.5rem !important;
  }
  .pb-md-18 {
    padding-bottom: 8rem !important;
  }
  .pb-md-19 {
    padding-bottom: 8.5rem !important;
  }
  .pb-md-20 {
    padding-bottom: 9rem !important;
  }
  .pb-md-21 {
    padding-bottom: 9.5rem !important;
  }
  .pb-md-22 {
    padding-bottom: 10rem !important;
  }
  .pb-md-23 {
    padding-bottom: 12rem !important;
  }
  .ps-md-0 {
    padding-left: 0 !important;
  }
  .ps-md-1 {
    padding-left: 0.25rem !important;
  }
  .ps-md-2 {
    padding-left: 0.5rem !important;
  }
  .ps-md-3 {
    padding-left: 1rem !important;
  }
  .ps-md-4 {
    padding-left: 1.25rem !important;
  }
  .ps-md-5 {
    padding-left: 1.5rem !important;
  }
  .ps-md-6 {
    padding-left: 2rem !important;
  }
  .ps-md-7 {
    padding-left: 2.5rem !important;
  }
  .ps-md-8 {
    padding-left: 3rem !important;
  }
  .ps-md-9 {
    padding-left: 3.5rem !important;
  }
  .ps-md-10 {
    padding-left: 4rem !important;
  }
  .ps-md-11 {
    padding-left: 4.5rem !important;
  }
  .ps-md-12 {
    padding-left: 5rem !important;
  }
  .ps-md-13 {
    padding-left: 5.5rem !important;
  }
  .ps-md-14 {
    padding-left: 6rem !important;
  }
  .ps-md-15 {
    padding-left: 6.5rem !important;
  }
  .ps-md-16 {
    padding-left: 7rem !important;
  }
  .ps-md-17 {
    padding-left: 7.5rem !important;
  }
  .ps-md-18 {
    padding-left: 8rem !important;
  }
  .ps-md-19 {
    padding-left: 8.5rem !important;
  }
  .ps-md-20 {
    padding-left: 9rem !important;
  }
  .ps-md-21 {
    padding-left: 9.5rem !important;
  }
  .ps-md-22 {
    padding-left: 10rem !important;
  }
  .ps-md-23 {
    padding-left: 12rem !important;
  }
  .text-md-start {
    text-align: left !important;
  }
  .text-md-end {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}
@media (min-width: 992px) {
  .float-lg-start {
    float: left !important;
  }
  .float-lg-end {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-grid {
    display: grid !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
  .d-lg-none {
    display: none !important;
  }
  .w-lg-15 {
    width: 15% !important;
  }
  .w-lg-25 {
    width: 25% !important;
  }
  .w-lg-30 {
    width: 30% !important;
  }
  .w-lg-40 {
    width: 40% !important;
  }
  .w-lg-50 {
    width: 50% !important;
  }
  .w-lg-65 {
    width: 65% !important;
  }
  .w-lg-75 {
    width: 75% !important;
  }
  .w-lg-100 {
    width: 100% !important;
  }
  .w-lg-auto {
    width: auto !important;
  }
  .mw-lg-25 {
    max-width: 25% !important;
  }
  .mw-lg-30 {
    max-width: 30% !important;
  }
  .mw-lg-40 {
    max-width: 40% !important;
  }
  .mw-lg-50 {
    max-width: 50% !important;
  }
  .mw-lg-65 {
    max-width: 65% !important;
  }
  .mw-lg-75 {
    max-width: 75% !important;
  }
  .mw-lg-100 {
    max-width: 100% !important;
  }
  .mw-lg-auto {
    max-width: auto !important;
  }
  .vw-lg-100 {
    width: 100vw !important;
  }
  .min-vw-lg-100 {
    min-width: 100vw !important;
  }
  .h-lg-25 {
    height: 25% !important;
  }
  .h-lg-30 {
    height: 30% !important;
  }
  .h-lg-40 {
    height: 40% !important;
  }
  .h-lg-50 {
    height: 50% !important;
  }
  .h-lg-65 {
    height: 65% !important;
  }
  .h-lg-75 {
    height: 75% !important;
  }
  .h-lg-100 {
    height: 100% !important;
  }
  .h-lg-auto {
    height: auto !important;
  }
  .mh-lg-25 {
    max-height: 25% !important;
  }
  .mh-lg-30 {
    max-height: 30% !important;
  }
  .mh-lg-40 {
    max-height: 40% !important;
  }
  .mh-lg-50 {
    max-height: 50% !important;
  }
  .mh-lg-65 {
    max-height: 65% !important;
  }
  .mh-lg-75 {
    max-height: 75% !important;
  }
  .mh-lg-100 {
    max-height: 100% !important;
  }
  .mh-lg-auto {
    max-height: auto !important;
  }
  .vh-lg-100 {
    height: 100vh !important;
  }
  .min-vh-lg-100 {
    min-height: 100vh !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-lg-0 {
    gap: 0 !important;
  }
  .gap-lg-1 {
    gap: 0.25rem !important;
  }
  .gap-lg-2 {
    gap: 0.5rem !important;
  }
  .gap-lg-3 {
    gap: 1rem !important;
  }
  .gap-lg-4 {
    gap: 1.25rem !important;
  }
  .gap-lg-5 {
    gap: 1.5rem !important;
  }
  .gap-lg-6 {
    gap: 2rem !important;
  }
  .gap-lg-7 {
    gap: 2.5rem !important;
  }
  .gap-lg-8 {
    gap: 3rem !important;
  }
  .gap-lg-9 {
    gap: 3.5rem !important;
  }
  .gap-lg-10 {
    gap: 4rem !important;
  }
  .gap-lg-11 {
    gap: 4.5rem !important;
  }
  .gap-lg-12 {
    gap: 5rem !important;
  }
  .gap-lg-13 {
    gap: 5.5rem !important;
  }
  .gap-lg-14 {
    gap: 6rem !important;
  }
  .gap-lg-15 {
    gap: 6.5rem !important;
  }
  .gap-lg-16 {
    gap: 7rem !important;
  }
  .gap-lg-17 {
    gap: 7.5rem !important;
  }
  .gap-lg-18 {
    gap: 8rem !important;
  }
  .gap-lg-19 {
    gap: 8.5rem !important;
  }
  .gap-lg-20 {
    gap: 9rem !important;
  }
  .gap-lg-21 {
    gap: 9.5rem !important;
  }
  .gap-lg-22 {
    gap: 10rem !important;
  }
  .gap-lg-23 {
    gap: 12rem !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .justify-content-lg-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
  .order-lg-first {
    order: -1 !important;
  }
  .order-lg-0 {
    order: 0 !important;
  }
  .order-lg-1 {
    order: 1 !important;
  }
  .order-lg-2 {
    order: 2 !important;
  }
  .order-lg-3 {
    order: 3 !important;
  }
  .order-lg-4 {
    order: 4 !important;
  }
  .order-lg-5 {
    order: 5 !important;
  }
  .order-lg-last {
    order: 6 !important;
  }
  .m-lg-0 {
    margin: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.25rem !important;
  }
  .m-lg-5 {
    margin: 1.5rem !important;
  }
  .m-lg-6 {
    margin: 2rem !important;
  }
  .m-lg-7 {
    margin: 2.5rem !important;
  }
  .m-lg-8 {
    margin: 3rem !important;
  }
  .m-lg-9 {
    margin: 3.5rem !important;
  }
  .m-lg-10 {
    margin: 4rem !important;
  }
  .m-lg-11 {
    margin: 4.5rem !important;
  }
  .m-lg-12 {
    margin: 5rem !important;
  }
  .m-lg-13 {
    margin: 5.5rem !important;
  }
  .m-lg-14 {
    margin: 6rem !important;
  }
  .m-lg-15 {
    margin: 6.5rem !important;
  }
  .m-lg-16 {
    margin: 7rem !important;
  }
  .m-lg-17 {
    margin: 7.5rem !important;
  }
  .m-lg-18 {
    margin: 8rem !important;
  }
  .m-lg-19 {
    margin: 8.5rem !important;
  }
  .m-lg-20 {
    margin: 9rem !important;
  }
  .m-lg-21 {
    margin: 9.5rem !important;
  }
  .m-lg-22 {
    margin: 10rem !important;
  }
  .m-lg-23 {
    margin: 12rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-lg-4 {
    margin-right: 1.25rem !important;
    margin-left: 1.25rem !important;
  }
  .mx-lg-5 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-lg-6 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-lg-7 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-lg-8 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-lg-9 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-lg-10 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-lg-11 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-lg-12 {
    margin-right: 5rem !important;
    margin-left: 5rem !important;
  }
  .mx-lg-13 {
    margin-right: 5.5rem !important;
    margin-left: 5.5rem !important;
  }
  .mx-lg-14 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-lg-15 {
    margin-right: 6.5rem !important;
    margin-left: 6.5rem !important;
  }
  .mx-lg-16 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-lg-17 {
    margin-right: 7.5rem !important;
    margin-left: 7.5rem !important;
  }
  .mx-lg-18 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-lg-19 {
    margin-right: 8.5rem !important;
    margin-left: 8.5rem !important;
  }
  .mx-lg-20 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-lg-21 {
    margin-right: 9.5rem !important;
    margin-left: 9.5rem !important;
  }
  .mx-lg-22 {
    margin-right: 10rem !important;
    margin-left: 10rem !important;
  }
  .mx-lg-23 {
    margin-right: 12rem !important;
    margin-left: 12rem !important;
  }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-lg-4 {
    margin-top: 1.25rem !important;
    margin-bottom: 1.25rem !important;
  }
  .my-lg-5 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-lg-6 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-lg-7 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-lg-8 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-lg-9 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-lg-10 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-lg-11 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-lg-12 {
    margin-top: 5rem !important;
    margin-bottom: 5rem !important;
  }
  .my-lg-13 {
    margin-top: 5.5rem !important;
    margin-bottom: 5.5rem !important;
  }
  .my-lg-14 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-lg-15 {
    margin-top: 6.5rem !important;
    margin-bottom: 6.5rem !important;
  }
  .my-lg-16 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-lg-17 {
    margin-top: 7.5rem !important;
    margin-bottom: 7.5rem !important;
  }
  .my-lg-18 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-lg-19 {
    margin-top: 8.5rem !important;
    margin-bottom: 8.5rem !important;
  }
  .my-lg-20 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-lg-21 {
    margin-top: 9.5rem !important;
    margin-bottom: 9.5rem !important;
  }
  .my-lg-22 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }
  .my-lg-23 {
    margin-top: 12rem !important;
    margin-bottom: 12rem !important;
  }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-lg-0 {
    margin-top: 0 !important;
  }
  .mt-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mt-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mt-lg-3 {
    margin-top: 1rem !important;
  }
  .mt-lg-4 {
    margin-top: 1.25rem !important;
  }
  .mt-lg-5 {
    margin-top: 1.5rem !important;
  }
  .mt-lg-6 {
    margin-top: 2rem !important;
  }
  .mt-lg-7 {
    margin-top: 2.5rem !important;
  }
  .mt-lg-8 {
    margin-top: 3rem !important;
  }
  .mt-lg-9 {
    margin-top: 3.5rem !important;
  }
  .mt-lg-10 {
    margin-top: 4rem !important;
  }
  .mt-lg-11 {
    margin-top: 4.5rem !important;
  }
  .mt-lg-12 {
    margin-top: 5rem !important;
  }
  .mt-lg-13 {
    margin-top: 5.5rem !important;
  }
  .mt-lg-14 {
    margin-top: 6rem !important;
  }
  .mt-lg-15 {
    margin-top: 6.5rem !important;
  }
  .mt-lg-16 {
    margin-top: 7rem !important;
  }
  .mt-lg-17 {
    margin-top: 7.5rem !important;
  }
  .mt-lg-18 {
    margin-top: 8rem !important;
  }
  .mt-lg-19 {
    margin-top: 8.5rem !important;
  }
  .mt-lg-20 {
    margin-top: 9rem !important;
  }
  .mt-lg-21 {
    margin-top: 9.5rem !important;
  }
  .mt-lg-22 {
    margin-top: 10rem !important;
  }
  .mt-lg-23 {
    margin-top: 12rem !important;
  }
  .mt-lg-auto {
    margin-top: auto !important;
  }
  .me-lg-0 {
    margin-right: 0 !important;
  }
  .me-lg-1 {
    margin-right: 0.25rem !important;
  }
  .me-lg-2 {
    margin-right: 0.5rem !important;
  }
  .me-lg-3 {
    margin-right: 1rem !important;
  }
  .me-lg-4 {
    margin-right: 1.25rem !important;
  }
  .me-lg-5 {
    margin-right: 1.5rem !important;
  }
  .me-lg-6 {
    margin-right: 2rem !important;
  }
  .me-lg-7 {
    margin-right: 2.5rem !important;
  }
  .me-lg-8 {
    margin-right: 3rem !important;
  }
  .me-lg-9 {
    margin-right: 3.5rem !important;
  }
  .me-lg-10 {
    margin-right: 4rem !important;
  }
  .me-lg-11 {
    margin-right: 4.5rem !important;
  }
  .me-lg-12 {
    margin-right: 5rem !important;
  }
  .me-lg-13 {
    margin-right: 5.5rem !important;
  }
  .me-lg-14 {
    margin-right: 6rem !important;
  }
  .me-lg-15 {
    margin-right: 6.5rem !important;
  }
  .me-lg-16 {
    margin-right: 7rem !important;
  }
  .me-lg-17 {
    margin-right: 7.5rem !important;
  }
  .me-lg-18 {
    margin-right: 8rem !important;
  }
  .me-lg-19 {
    margin-right: 8.5rem !important;
  }
  .me-lg-20 {
    margin-right: 9rem !important;
  }
  .me-lg-21 {
    margin-right: 9.5rem !important;
  }
  .me-lg-22 {
    margin-right: 10rem !important;
  }
  .me-lg-23 {
    margin-right: 12rem !important;
  }
  .me-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-0 {
    margin-bottom: 0 !important;
  }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 1.25rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 1.5rem !important;
  }
  .mb-lg-6 {
    margin-bottom: 2rem !important;
  }
  .mb-lg-7 {
    margin-bottom: 2.5rem !important;
  }
  .mb-lg-8 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-9 {
    margin-bottom: 3.5rem !important;
  }
  .mb-lg-10 {
    margin-bottom: 4rem !important;
  }
  .mb-lg-11 {
    margin-bottom: 4.5rem !important;
  }
  .mb-lg-12 {
    margin-bottom: 5rem !important;
  }
  .mb-lg-13 {
    margin-bottom: 5.5rem !important;
  }
  .mb-lg-14 {
    margin-bottom: 6rem !important;
  }
  .mb-lg-15 {
    margin-bottom: 6.5rem !important;
  }
  .mb-lg-16 {
    margin-bottom: 7rem !important;
  }
  .mb-lg-17 {
    margin-bottom: 7.5rem !important;
  }
  .mb-lg-18 {
    margin-bottom: 8rem !important;
  }
  .mb-lg-19 {
    margin-bottom: 8.5rem !important;
  }
  .mb-lg-20 {
    margin-bottom: 9rem !important;
  }
  .mb-lg-21 {
    margin-bottom: 9.5rem !important;
  }
  .mb-lg-22 {
    margin-bottom: 10rem !important;
  }
  .mb-lg-23 {
    margin-bottom: 12rem !important;
  }
  .mb-lg-auto {
    margin-bottom: auto !important;
  }
  .ms-lg-0 {
    margin-left: 0 !important;
  }
  .ms-lg-1 {
    margin-left: 0.25rem !important;
  }
  .ms-lg-2 {
    margin-left: 0.5rem !important;
  }
  .ms-lg-3 {
    margin-left: 1rem !important;
  }
  .ms-lg-4 {
    margin-left: 1.25rem !important;
  }
  .ms-lg-5 {
    margin-left: 1.5rem !important;
  }
  .ms-lg-6 {
    margin-left: 2rem !important;
  }
  .ms-lg-7 {
    margin-left: 2.5rem !important;
  }
  .ms-lg-8 {
    margin-left: 3rem !important;
  }
  .ms-lg-9 {
    margin-left: 3.5rem !important;
  }
  .ms-lg-10 {
    margin-left: 4rem !important;
  }
  .ms-lg-11 {
    margin-left: 4.5rem !important;
  }
  .ms-lg-12 {
    margin-left: 5rem !important;
  }
  .ms-lg-13 {
    margin-left: 5.5rem !important;
  }
  .ms-lg-14 {
    margin-left: 6rem !important;
  }
  .ms-lg-15 {
    margin-left: 6.5rem !important;
  }
  .ms-lg-16 {
    margin-left: 7rem !important;
  }
  .ms-lg-17 {
    margin-left: 7.5rem !important;
  }
  .ms-lg-18 {
    margin-left: 8rem !important;
  }
  .ms-lg-19 {
    margin-left: 8.5rem !important;
  }
  .ms-lg-20 {
    margin-left: 9rem !important;
  }
  .ms-lg-21 {
    margin-left: 9.5rem !important;
  }
  .ms-lg-22 {
    margin-left: 10rem !important;
  }
  .ms-lg-23 {
    margin-left: 12rem !important;
  }
  .ms-lg-auto {
    margin-left: auto !important;
  }
  .m-lg-n1 {
    margin: -0.25rem !important;
  }
  .m-lg-n2 {
    margin: -0.5rem !important;
  }
  .m-lg-n3 {
    margin: -1rem !important;
  }
  .m-lg-n4 {
    margin: -1.25rem !important;
  }
  .m-lg-n5 {
    margin: -1.5rem !important;
  }
  .m-lg-n6 {
    margin: -2rem !important;
  }
  .m-lg-n7 {
    margin: -2.5rem !important;
  }
  .m-lg-n8 {
    margin: -3rem !important;
  }
  .m-lg-n9 {
    margin: -3.5rem !important;
  }
  .m-lg-n10 {
    margin: -4rem !important;
  }
  .m-lg-n11 {
    margin: -4.5rem !important;
  }
  .m-lg-n12 {
    margin: -5rem !important;
  }
  .m-lg-n13 {
    margin: -5.5rem !important;
  }
  .m-lg-n14 {
    margin: -6rem !important;
  }
  .m-lg-n15 {
    margin: -6.5rem !important;
  }
  .m-lg-n16 {
    margin: -7rem !important;
  }
  .m-lg-n17 {
    margin: -7.5rem !important;
  }
  .m-lg-n18 {
    margin: -8rem !important;
  }
  .m-lg-n19 {
    margin: -8.5rem !important;
  }
  .m-lg-n20 {
    margin: -9rem !important;
  }
  .m-lg-n21 {
    margin: -9.5rem !important;
  }
  .m-lg-n22 {
    margin: -10rem !important;
  }
  .m-lg-n23 {
    margin: -12rem !important;
  }
  .mx-lg-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-lg-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-lg-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-lg-n4 {
    margin-right: -1.25rem !important;
    margin-left: -1.25rem !important;
  }
  .mx-lg-n5 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-lg-n6 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-lg-n7 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-lg-n8 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-lg-n9 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-lg-n10 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-lg-n11 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-lg-n12 {
    margin-right: -5rem !important;
    margin-left: -5rem !important;
  }
  .mx-lg-n13 {
    margin-right: -5.5rem !important;
    margin-left: -5.5rem !important;
  }
  .mx-lg-n14 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-lg-n15 {
    margin-right: -6.5rem !important;
    margin-left: -6.5rem !important;
  }
  .mx-lg-n16 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-lg-n17 {
    margin-right: -7.5rem !important;
    margin-left: -7.5rem !important;
  }
  .mx-lg-n18 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-lg-n19 {
    margin-right: -8.5rem !important;
    margin-left: -8.5rem !important;
  }
  .mx-lg-n20 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-lg-n21 {
    margin-right: -9.5rem !important;
    margin-left: -9.5rem !important;
  }
  .mx-lg-n22 {
    margin-right: -10rem !important;
    margin-left: -10rem !important;
  }
  .mx-lg-n23 {
    margin-right: -12rem !important;
    margin-left: -12rem !important;
  }
  .my-lg-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-lg-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-lg-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-lg-n4 {
    margin-top: -1.25rem !important;
    margin-bottom: -1.25rem !important;
  }
  .my-lg-n5 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-lg-n6 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-lg-n7 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-lg-n8 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-lg-n9 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-lg-n10 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-lg-n11 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-lg-n12 {
    margin-top: -5rem !important;
    margin-bottom: -5rem !important;
  }
  .my-lg-n13 {
    margin-top: -5.5rem !important;
    margin-bottom: -5.5rem !important;
  }
  .my-lg-n14 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-lg-n15 {
    margin-top: -6.5rem !important;
    margin-bottom: -6.5rem !important;
  }
  .my-lg-n16 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-lg-n17 {
    margin-top: -7.5rem !important;
    margin-bottom: -7.5rem !important;
  }
  .my-lg-n18 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-lg-n19 {
    margin-top: -8.5rem !important;
    margin-bottom: -8.5rem !important;
  }
  .my-lg-n20 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-lg-n21 {
    margin-top: -9.5rem !important;
    margin-bottom: -9.5rem !important;
  }
  .my-lg-n22 {
    margin-top: -10rem !important;
    margin-bottom: -10rem !important;
  }
  .my-lg-n23 {
    margin-top: -12rem !important;
    margin-bottom: -12rem !important;
  }
  .mt-lg-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-lg-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-lg-n3 {
    margin-top: -1rem !important;
  }
  .mt-lg-n4 {
    margin-top: -1.25rem !important;
  }
  .mt-lg-n5 {
    margin-top: -1.5rem !important;
  }
  .mt-lg-n6 {
    margin-top: -2rem !important;
  }
  .mt-lg-n7 {
    margin-top: -2.5rem !important;
  }
  .mt-lg-n8 {
    margin-top: -3rem !important;
  }
  .mt-lg-n9 {
    margin-top: -3.5rem !important;
  }
  .mt-lg-n10 {
    margin-top: -4rem !important;
  }
  .mt-lg-n11 {
    margin-top: -4.5rem !important;
  }
  .mt-lg-n12 {
    margin-top: -5rem !important;
  }
  .mt-lg-n13 {
    margin-top: -5.5rem !important;
  }
  .mt-lg-n14 {
    margin-top: -6rem !important;
  }
  .mt-lg-n15 {
    margin-top: -6.5rem !important;
  }
  .mt-lg-n16 {
    margin-top: -7rem !important;
  }
  .mt-lg-n17 {
    margin-top: -7.5rem !important;
  }
  .mt-lg-n18 {
    margin-top: -8rem !important;
  }
  .mt-lg-n19 {
    margin-top: -8.5rem !important;
  }
  .mt-lg-n20 {
    margin-top: -9rem !important;
  }
  .mt-lg-n21 {
    margin-top: -9.5rem !important;
  }
  .mt-lg-n22 {
    margin-top: -10rem !important;
  }
  .mt-lg-n23 {
    margin-top: -12rem !important;
  }
  .me-lg-n1 {
    margin-right: -0.25rem !important;
  }
  .me-lg-n2 {
    margin-right: -0.5rem !important;
  }
  .me-lg-n3 {
    margin-right: -1rem !important;
  }
  .me-lg-n4 {
    margin-right: -1.25rem !important;
  }
  .me-lg-n5 {
    margin-right: -1.5rem !important;
  }
  .me-lg-n6 {
    margin-right: -2rem !important;
  }
  .me-lg-n7 {
    margin-right: -2.5rem !important;
  }
  .me-lg-n8 {
    margin-right: -3rem !important;
  }
  .me-lg-n9 {
    margin-right: -3.5rem !important;
  }
  .me-lg-n10 {
    margin-right: -4rem !important;
  }
  .me-lg-n11 {
    margin-right: -4.5rem !important;
  }
  .me-lg-n12 {
    margin-right: -5rem !important;
  }
  .me-lg-n13 {
    margin-right: -5.5rem !important;
  }
  .me-lg-n14 {
    margin-right: -6rem !important;
  }
  .me-lg-n15 {
    margin-right: -6.5rem !important;
  }
  .me-lg-n16 {
    margin-right: -7rem !important;
  }
  .me-lg-n17 {
    margin-right: -7.5rem !important;
  }
  .me-lg-n18 {
    margin-right: -8rem !important;
  }
  .me-lg-n19 {
    margin-right: -8.5rem !important;
  }
  .me-lg-n20 {
    margin-right: -9rem !important;
  }
  .me-lg-n21 {
    margin-right: -9.5rem !important;
  }
  .me-lg-n22 {
    margin-right: -10rem !important;
  }
  .me-lg-n23 {
    margin-right: -12rem !important;
  }
  .mb-lg-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-lg-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-lg-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-lg-n4 {
    margin-bottom: -1.25rem !important;
  }
  .mb-lg-n5 {
    margin-bottom: -1.5rem !important;
  }
  .mb-lg-n6 {
    margin-bottom: -2rem !important;
  }
  .mb-lg-n7 {
    margin-bottom: -2.5rem !important;
  }
  .mb-lg-n8 {
    margin-bottom: -3rem !important;
  }
  .mb-lg-n9 {
    margin-bottom: -3.5rem !important;
  }
  .mb-lg-n10 {
    margin-bottom: -4rem !important;
  }
  .mb-lg-n11 {
    margin-bottom: -4.5rem !important;
  }
  .mb-lg-n12 {
    margin-bottom: -5rem !important;
  }
  .mb-lg-n13 {
    margin-bottom: -5.5rem !important;
  }
  .mb-lg-n14 {
    margin-bottom: -6rem !important;
  }
  .mb-lg-n15 {
    margin-bottom: -6.5rem !important;
  }
  .mb-lg-n16 {
    margin-bottom: -7rem !important;
  }
  .mb-lg-n17 {
    margin-bottom: -7.5rem !important;
  }
  .mb-lg-n18 {
    margin-bottom: -8rem !important;
  }
  .mb-lg-n19 {
    margin-bottom: -8.5rem !important;
  }
  .mb-lg-n20 {
    margin-bottom: -9rem !important;
  }
  .mb-lg-n21 {
    margin-bottom: -9.5rem !important;
  }
  .mb-lg-n22 {
    margin-bottom: -10rem !important;
  }
  .mb-lg-n23 {
    margin-bottom: -12rem !important;
  }
  .ms-lg-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-lg-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-lg-n3 {
    margin-left: -1rem !important;
  }
  .ms-lg-n4 {
    margin-left: -1.25rem !important;
  }
  .ms-lg-n5 {
    margin-left: -1.5rem !important;
  }
  .ms-lg-n6 {
    margin-left: -2rem !important;
  }
  .ms-lg-n7 {
    margin-left: -2.5rem !important;
  }
  .ms-lg-n8 {
    margin-left: -3rem !important;
  }
  .ms-lg-n9 {
    margin-left: -3.5rem !important;
  }
  .ms-lg-n10 {
    margin-left: -4rem !important;
  }
  .ms-lg-n11 {
    margin-left: -4.5rem !important;
  }
  .ms-lg-n12 {
    margin-left: -5rem !important;
  }
  .ms-lg-n13 {
    margin-left: -5.5rem !important;
  }
  .ms-lg-n14 {
    margin-left: -6rem !important;
  }
  .ms-lg-n15 {
    margin-left: -6.5rem !important;
  }
  .ms-lg-n16 {
    margin-left: -7rem !important;
  }
  .ms-lg-n17 {
    margin-left: -7.5rem !important;
  }
  .ms-lg-n18 {
    margin-left: -8rem !important;
  }
  .ms-lg-n19 {
    margin-left: -8.5rem !important;
  }
  .ms-lg-n20 {
    margin-left: -9rem !important;
  }
  .ms-lg-n21 {
    margin-left: -9.5rem !important;
  }
  .ms-lg-n22 {
    margin-left: -10rem !important;
  }
  .ms-lg-n23 {
    margin-left: -12rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.25rem !important;
  }
  .p-lg-5 {
    padding: 1.5rem !important;
  }
  .p-lg-6 {
    padding: 2rem !important;
  }
  .p-lg-7 {
    padding: 2.5rem !important;
  }
  .p-lg-8 {
    padding: 3rem !important;
  }
  .p-lg-9 {
    padding: 3.5rem !important;
  }
  .p-lg-10 {
    padding: 4rem !important;
  }
  .p-lg-11 {
    padding: 4.5rem !important;
  }
  .p-lg-12 {
    padding: 5rem !important;
  }
  .p-lg-13 {
    padding: 5.5rem !important;
  }
  .p-lg-14 {
    padding: 6rem !important;
  }
  .p-lg-15 {
    padding: 6.5rem !important;
  }
  .p-lg-16 {
    padding: 7rem !important;
  }
  .p-lg-17 {
    padding: 7.5rem !important;
  }
  .p-lg-18 {
    padding: 8rem !important;
  }
  .p-lg-19 {
    padding: 8.5rem !important;
  }
  .p-lg-20 {
    padding: 9rem !important;
  }
  .p-lg-21 {
    padding: 9.5rem !important;
  }
  .p-lg-22 {
    padding: 10rem !important;
  }
  .p-lg-23 {
    padding: 12rem !important;
  }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-lg-4 {
    padding-right: 1.25rem !important;
    padding-left: 1.25rem !important;
  }
  .px-lg-5 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-lg-6 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-lg-7 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-lg-8 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-lg-9 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-lg-10 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-lg-11 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-lg-12 {
    padding-right: 5rem !important;
    padding-left: 5rem !important;
  }
  .px-lg-13 {
    padding-right: 5.5rem !important;
    padding-left: 5.5rem !important;
  }
  .px-lg-14 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-lg-15 {
    padding-right: 6.5rem !important;
    padding-left: 6.5rem !important;
  }
  .px-lg-16 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-lg-17 {
    padding-right: 7.5rem !important;
    padding-left: 7.5rem !important;
  }
  .px-lg-18 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-lg-19 {
    padding-right: 8.5rem !important;
    padding-left: 8.5rem !important;
  }
  .px-lg-20 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-lg-21 {
    padding-right: 9.5rem !important;
    padding-left: 9.5rem !important;
  }
  .px-lg-22 {
    padding-right: 10rem !important;
    padding-left: 10rem !important;
  }
  .px-lg-23 {
    padding-right: 12rem !important;
    padding-left: 12rem !important;
  }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-lg-4 {
    padding-top: 1.25rem !important;
    padding-bottom: 1.25rem !important;
  }
  .py-lg-5 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-lg-6 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-lg-7 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-lg-8 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-lg-9 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-lg-10 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-lg-11 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-lg-12 {
    padding-top: 5rem !important;
    padding-bottom: 5rem !important;
  }
  .py-lg-13 {
    padding-top: 5.5rem !important;
    padding-bottom: 5.5rem !important;
  }
  .py-lg-14 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-lg-15 {
    padding-top: 6.5rem !important;
    padding-bottom: 6.5rem !important;
  }
  .py-lg-16 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-lg-17 {
    padding-top: 7.5rem !important;
    padding-bottom: 7.5rem !important;
  }
  .py-lg-18 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-lg-19 {
    padding-top: 8.5rem !important;
    padding-bottom: 8.5rem !important;
  }
  .py-lg-20 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-lg-21 {
    padding-top: 9.5rem !important;
    padding-bottom: 9.5rem !important;
  }
  .py-lg-22 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }
  .py-lg-23 {
    padding-top: 12rem !important;
    padding-bottom: 12rem !important;
  }
  .pt-lg-0 {
    padding-top: 0 !important;
  }
  .pt-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pt-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pt-lg-3 {
    padding-top: 1rem !important;
  }
  .pt-lg-4 {
    padding-top: 1.25rem !important;
  }
  .pt-lg-5 {
    padding-top: 1.5rem !important;
  }
  .pt-lg-6 {
    padding-top: 2rem !important;
  }
  .pt-lg-7 {
    padding-top: 2.5rem !important;
  }
  .pt-lg-8 {
    padding-top: 3rem !important;
  }
  .pt-lg-9 {
    padding-top: 3.5rem !important;
  }
  .pt-lg-10 {
    padding-top: 4rem !important;
  }
  .pt-lg-11 {
    padding-top: 4.5rem !important;
  }
  .pt-lg-12 {
    padding-top: 5rem !important;
  }
  .pt-lg-13 {
    padding-top: 5.5rem !important;
  }
  .pt-lg-14 {
    padding-top: 6rem !important;
  }
  .pt-lg-15 {
    padding-top: 6.5rem !important;
  }
  .pt-lg-16 {
    padding-top: 7rem !important;
  }
  .pt-lg-17 {
    padding-top: 7.5rem !important;
  }
  .pt-lg-18 {
    padding-top: 8rem !important;
  }
  .pt-lg-19 {
    padding-top: 8.5rem !important;
  }
  .pt-lg-20 {
    padding-top: 9rem !important;
  }
  .pt-lg-21 {
    padding-top: 9.5rem !important;
  }
  .pt-lg-22 {
    padding-top: 10rem !important;
  }
  .pt-lg-23 {
    padding-top: 12rem !important;
  }
  .pe-lg-0 {
    padding-right: 0 !important;
  }
  .pe-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pe-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pe-lg-3 {
    padding-right: 1rem !important;
  }
  .pe-lg-4 {
    padding-right: 1.25rem !important;
  }
  .pe-lg-5 {
    padding-right: 1.5rem !important;
  }
  .pe-lg-6 {
    padding-right: 2rem !important;
  }
  .pe-lg-7 {
    padding-right: 2.5rem !important;
  }
  .pe-lg-8 {
    padding-right: 3rem !important;
  }
  .pe-lg-9 {
    padding-right: 3.5rem !important;
  }
  .pe-lg-10 {
    padding-right: 4rem !important;
  }
  .pe-lg-11 {
    padding-right: 4.5rem !important;
  }
  .pe-lg-12 {
    padding-right: 5rem !important;
  }
  .pe-lg-13 {
    padding-right: 5.5rem !important;
  }
  .pe-lg-14 {
    padding-right: 6rem !important;
  }
  .pe-lg-15 {
    padding-right: 6.5rem !important;
  }
  .pe-lg-16 {
    padding-right: 7rem !important;
  }
  .pe-lg-17 {
    padding-right: 7.5rem !important;
  }
  .pe-lg-18 {
    padding-right: 8rem !important;
  }
  .pe-lg-19 {
    padding-right: 8.5rem !important;
  }
  .pe-lg-20 {
    padding-right: 9rem !important;
  }
  .pe-lg-21 {
    padding-right: 9.5rem !important;
  }
  .pe-lg-22 {
    padding-right: 10rem !important;
  }
  .pe-lg-23 {
    padding-right: 12rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0 !important;
  }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 1.25rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 1.5rem !important;
  }
  .pb-lg-6 {
    padding-bottom: 2rem !important;
  }
  .pb-lg-7 {
    padding-bottom: 2.5rem !important;
  }
  .pb-lg-8 {
    padding-bottom: 3rem !important;
  }
  .pb-lg-9 {
    padding-bottom: 3.5rem !important;
  }
  .pb-lg-10 {
    padding-bottom: 4rem !important;
  }
  .pb-lg-11 {
    padding-bottom: 4.5rem !important;
  }
  .pb-lg-12 {
    padding-bottom: 5rem !important;
  }
  .pb-lg-13 {
    padding-bottom: 5.5rem !important;
  }
  .pb-lg-14 {
    padding-bottom: 6rem !important;
  }
  .pb-lg-15 {
    padding-bottom: 6.5rem !important;
  }
  .pb-lg-16 {
    padding-bottom: 7rem !important;
  }
  .pb-lg-17 {
    padding-bottom: 7.5rem !important;
  }
  .pb-lg-18 {
    padding-bottom: 8rem !important;
  }
  .pb-lg-19 {
    padding-bottom: 8.5rem !important;
  }
  .pb-lg-20 {
    padding-bottom: 9rem !important;
  }
  .pb-lg-21 {
    padding-bottom: 9.5rem !important;
  }
  .pb-lg-22 {
    padding-bottom: 10rem !important;
  }
  .pb-lg-23 {
    padding-bottom: 12rem !important;
  }
  .ps-lg-0 {
    padding-left: 0 !important;
  }
  .ps-lg-1 {
    padding-left: 0.25rem !important;
  }
  .ps-lg-2 {
    padding-left: 0.5rem !important;
  }
  .ps-lg-3 {
    padding-left: 1rem !important;
  }
  .ps-lg-4 {
    padding-left: 1.25rem !important;
  }
  .ps-lg-5 {
    padding-left: 1.5rem !important;
  }
  .ps-lg-6 {
    padding-left: 2rem !important;
  }
  .ps-lg-7 {
    padding-left: 2.5rem !important;
  }
  .ps-lg-8 {
    padding-left: 3rem !important;
  }
  .ps-lg-9 {
    padding-left: 3.5rem !important;
  }
  .ps-lg-10 {
    padding-left: 4rem !important;
  }
  .ps-lg-11 {
    padding-left: 4.5rem !important;
  }
  .ps-lg-12 {
    padding-left: 5rem !important;
  }
  .ps-lg-13 {
    padding-left: 5.5rem !important;
  }
  .ps-lg-14 {
    padding-left: 6rem !important;
  }
  .ps-lg-15 {
    padding-left: 6.5rem !important;
  }
  .ps-lg-16 {
    padding-left: 7rem !important;
  }
  .ps-lg-17 {
    padding-left: 7.5rem !important;
  }
  .ps-lg-18 {
    padding-left: 8rem !important;
  }
  .ps-lg-19 {
    padding-left: 8.5rem !important;
  }
  .ps-lg-20 {
    padding-left: 9rem !important;
  }
  .ps-lg-21 {
    padding-left: 9.5rem !important;
  }
  .ps-lg-22 {
    padding-left: 10rem !important;
  }
  .ps-lg-23 {
    padding-left: 12rem !important;
  }
  .text-lg-start {
    text-align: left !important;
  }
  .text-lg-end {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important;
  }
  .float-xl-end {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-grid {
    display: grid !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
  .d-xl-none {
    display: none !important;
  }
  .w-xl-15 {
    width: 15% !important;
  }
  .w-xl-25 {
    width: 25% !important;
  }
  .w-xl-30 {
    width: 30% !important;
  }
  .w-xl-40 {
    width: 40% !important;
  }
  .w-xl-50 {
    width: 50% !important;
  }
  .w-xl-65 {
    width: 65% !important;
  }
  .w-xl-75 {
    width: 75% !important;
  }
  .w-xl-100 {
    width: 100% !important;
  }
  .w-xl-auto {
    width: auto !important;
  }
  .mw-xl-25 {
    max-width: 25% !important;
  }
  .mw-xl-30 {
    max-width: 30% !important;
  }
  .mw-xl-40 {
    max-width: 40% !important;
  }
  .mw-xl-50 {
    max-width: 50% !important;
  }
  .mw-xl-65 {
    max-width: 65% !important;
  }
  .mw-xl-75 {
    max-width: 75% !important;
  }
  .mw-xl-100 {
    max-width: 100% !important;
  }
  .mw-xl-auto {
    max-width: auto !important;
  }
  .vw-xl-100 {
    width: 100vw !important;
  }
  .min-vw-xl-100 {
    min-width: 100vw !important;
  }
  .h-xl-25 {
    height: 25% !important;
  }
  .h-xl-30 {
    height: 30% !important;
  }
  .h-xl-40 {
    height: 40% !important;
  }
  .h-xl-50 {
    height: 50% !important;
  }
  .h-xl-65 {
    height: 65% !important;
  }
  .h-xl-75 {
    height: 75% !important;
  }
  .h-xl-100 {
    height: 100% !important;
  }
  .h-xl-auto {
    height: auto !important;
  }
  .mh-xl-25 {
    max-height: 25% !important;
  }
  .mh-xl-30 {
    max-height: 30% !important;
  }
  .mh-xl-40 {
    max-height: 40% !important;
  }
  .mh-xl-50 {
    max-height: 50% !important;
  }
  .mh-xl-65 {
    max-height: 65% !important;
  }
  .mh-xl-75 {
    max-height: 75% !important;
  }
  .mh-xl-100 {
    max-height: 100% !important;
  }
  .mh-xl-auto {
    max-height: auto !important;
  }
  .vh-xl-100 {
    height: 100vh !important;
  }
  .min-vh-xl-100 {
    min-height: 100vh !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-xl-0 {
    gap: 0 !important;
  }
  .gap-xl-1 {
    gap: 0.25rem !important;
  }
  .gap-xl-2 {
    gap: 0.5rem !important;
  }
  .gap-xl-3 {
    gap: 1rem !important;
  }
  .gap-xl-4 {
    gap: 1.25rem !important;
  }
  .gap-xl-5 {
    gap: 1.5rem !important;
  }
  .gap-xl-6 {
    gap: 2rem !important;
  }
  .gap-xl-7 {
    gap: 2.5rem !important;
  }
  .gap-xl-8 {
    gap: 3rem !important;
  }
  .gap-xl-9 {
    gap: 3.5rem !important;
  }
  .gap-xl-10 {
    gap: 4rem !important;
  }
  .gap-xl-11 {
    gap: 4.5rem !important;
  }
  .gap-xl-12 {
    gap: 5rem !important;
  }
  .gap-xl-13 {
    gap: 5.5rem !important;
  }
  .gap-xl-14 {
    gap: 6rem !important;
  }
  .gap-xl-15 {
    gap: 6.5rem !important;
  }
  .gap-xl-16 {
    gap: 7rem !important;
  }
  .gap-xl-17 {
    gap: 7.5rem !important;
  }
  .gap-xl-18 {
    gap: 8rem !important;
  }
  .gap-xl-19 {
    gap: 8.5rem !important;
  }
  .gap-xl-20 {
    gap: 9rem !important;
  }
  .gap-xl-21 {
    gap: 9.5rem !important;
  }
  .gap-xl-22 {
    gap: 10rem !important;
  }
  .gap-xl-23 {
    gap: 12rem !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .justify-content-xl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
  .order-xl-first {
    order: -1 !important;
  }
  .order-xl-0 {
    order: 0 !important;
  }
  .order-xl-1 {
    order: 1 !important;
  }
  .order-xl-2 {
    order: 2 !important;
  }
  .order-xl-3 {
    order: 3 !important;
  }
  .order-xl-4 {
    order: 4 !important;
  }
  .order-xl-5 {
    order: 5 !important;
  }
  .order-xl-last {
    order: 6 !important;
  }
  .m-xl-0 {
    margin: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.25rem !important;
  }
  .m-xl-5 {
    margin: 1.5rem !important;
  }
  .m-xl-6 {
    margin: 2rem !important;
  }
  .m-xl-7 {
    margin: 2.5rem !important;
  }
  .m-xl-8 {
    margin: 3rem !important;
  }
  .m-xl-9 {
    margin: 3.5rem !important;
  }
  .m-xl-10 {
    margin: 4rem !important;
  }
  .m-xl-11 {
    margin: 4.5rem !important;
  }
  .m-xl-12 {
    margin: 5rem !important;
  }
  .m-xl-13 {
    margin: 5.5rem !important;
  }
  .m-xl-14 {
    margin: 6rem !important;
  }
  .m-xl-15 {
    margin: 6.5rem !important;
  }
  .m-xl-16 {
    margin: 7rem !important;
  }
  .m-xl-17 {
    margin: 7.5rem !important;
  }
  .m-xl-18 {
    margin: 8rem !important;
  }
  .m-xl-19 {
    margin: 8.5rem !important;
  }
  .m-xl-20 {
    margin: 9rem !important;
  }
  .m-xl-21 {
    margin: 9.5rem !important;
  }
  .m-xl-22 {
    margin: 10rem !important;
  }
  .m-xl-23 {
    margin: 12rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xl-4 {
    margin-right: 1.25rem !important;
    margin-left: 1.25rem !important;
  }
  .mx-xl-5 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xl-6 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-xl-7 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-xl-8 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xl-9 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-xl-10 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-xl-11 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-xl-12 {
    margin-right: 5rem !important;
    margin-left: 5rem !important;
  }
  .mx-xl-13 {
    margin-right: 5.5rem !important;
    margin-left: 5.5rem !important;
  }
  .mx-xl-14 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-xl-15 {
    margin-right: 6.5rem !important;
    margin-left: 6.5rem !important;
  }
  .mx-xl-16 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-xl-17 {
    margin-right: 7.5rem !important;
    margin-left: 7.5rem !important;
  }
  .mx-xl-18 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-xl-19 {
    margin-right: 8.5rem !important;
    margin-left: 8.5rem !important;
  }
  .mx-xl-20 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-xl-21 {
    margin-right: 9.5rem !important;
    margin-left: 9.5rem !important;
  }
  .mx-xl-22 {
    margin-right: 10rem !important;
    margin-left: 10rem !important;
  }
  .mx-xl-23 {
    margin-right: 12rem !important;
    margin-left: 12rem !important;
  }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xl-4 {
    margin-top: 1.25rem !important;
    margin-bottom: 1.25rem !important;
  }
  .my-xl-5 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xl-6 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-xl-7 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-xl-8 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xl-9 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-xl-10 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-xl-11 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-xl-12 {
    margin-top: 5rem !important;
    margin-bottom: 5rem !important;
  }
  .my-xl-13 {
    margin-top: 5.5rem !important;
    margin-bottom: 5.5rem !important;
  }
  .my-xl-14 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-xl-15 {
    margin-top: 6.5rem !important;
    margin-bottom: 6.5rem !important;
  }
  .my-xl-16 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-xl-17 {
    margin-top: 7.5rem !important;
    margin-bottom: 7.5rem !important;
  }
  .my-xl-18 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-xl-19 {
    margin-top: 8.5rem !important;
    margin-bottom: 8.5rem !important;
  }
  .my-xl-20 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-xl-21 {
    margin-top: 9.5rem !important;
    margin-bottom: 9.5rem !important;
  }
  .my-xl-22 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }
  .my-xl-23 {
    margin-top: 12rem !important;
    margin-bottom: 12rem !important;
  }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xl-0 {
    margin-top: 0 !important;
  }
  .mt-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xl-3 {
    margin-top: 1rem !important;
  }
  .mt-xl-4 {
    margin-top: 1.25rem !important;
  }
  .mt-xl-5 {
    margin-top: 1.5rem !important;
  }
  .mt-xl-6 {
    margin-top: 2rem !important;
  }
  .mt-xl-7 {
    margin-top: 2.5rem !important;
  }
  .mt-xl-8 {
    margin-top: 3rem !important;
  }
  .mt-xl-9 {
    margin-top: 3.5rem !important;
  }
  .mt-xl-10 {
    margin-top: 4rem !important;
  }
  .mt-xl-11 {
    margin-top: 4.5rem !important;
  }
  .mt-xl-12 {
    margin-top: 5rem !important;
  }
  .mt-xl-13 {
    margin-top: 5.5rem !important;
  }
  .mt-xl-14 {
    margin-top: 6rem !important;
  }
  .mt-xl-15 {
    margin-top: 6.5rem !important;
  }
  .mt-xl-16 {
    margin-top: 7rem !important;
  }
  .mt-xl-17 {
    margin-top: 7.5rem !important;
  }
  .mt-xl-18 {
    margin-top: 8rem !important;
  }
  .mt-xl-19 {
    margin-top: 8.5rem !important;
  }
  .mt-xl-20 {
    margin-top: 9rem !important;
  }
  .mt-xl-21 {
    margin-top: 9.5rem !important;
  }
  .mt-xl-22 {
    margin-top: 10rem !important;
  }
  .mt-xl-23 {
    margin-top: 12rem !important;
  }
  .mt-xl-auto {
    margin-top: auto !important;
  }
  .me-xl-0 {
    margin-right: 0 !important;
  }
  .me-xl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xl-3 {
    margin-right: 1rem !important;
  }
  .me-xl-4 {
    margin-right: 1.25rem !important;
  }
  .me-xl-5 {
    margin-right: 1.5rem !important;
  }
  .me-xl-6 {
    margin-right: 2rem !important;
  }
  .me-xl-7 {
    margin-right: 2.5rem !important;
  }
  .me-xl-8 {
    margin-right: 3rem !important;
  }
  .me-xl-9 {
    margin-right: 3.5rem !important;
  }
  .me-xl-10 {
    margin-right: 4rem !important;
  }
  .me-xl-11 {
    margin-right: 4.5rem !important;
  }
  .me-xl-12 {
    margin-right: 5rem !important;
  }
  .me-xl-13 {
    margin-right: 5.5rem !important;
  }
  .me-xl-14 {
    margin-right: 6rem !important;
  }
  .me-xl-15 {
    margin-right: 6.5rem !important;
  }
  .me-xl-16 {
    margin-right: 7rem !important;
  }
  .me-xl-17 {
    margin-right: 7.5rem !important;
  }
  .me-xl-18 {
    margin-right: 8rem !important;
  }
  .me-xl-19 {
    margin-right: 8.5rem !important;
  }
  .me-xl-20 {
    margin-right: 9rem !important;
  }
  .me-xl-21 {
    margin-right: 9.5rem !important;
  }
  .me-xl-22 {
    margin-right: 10rem !important;
  }
  .me-xl-23 {
    margin-right: 12rem !important;
  }
  .me-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 1.25rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xl-6 {
    margin-bottom: 2rem !important;
  }
  .mb-xl-7 {
    margin-bottom: 2.5rem !important;
  }
  .mb-xl-8 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-9 {
    margin-bottom: 3.5rem !important;
  }
  .mb-xl-10 {
    margin-bottom: 4rem !important;
  }
  .mb-xl-11 {
    margin-bottom: 4.5rem !important;
  }
  .mb-xl-12 {
    margin-bottom: 5rem !important;
  }
  .mb-xl-13 {
    margin-bottom: 5.5rem !important;
  }
  .mb-xl-14 {
    margin-bottom: 6rem !important;
  }
  .mb-xl-15 {
    margin-bottom: 6.5rem !important;
  }
  .mb-xl-16 {
    margin-bottom: 7rem !important;
  }
  .mb-xl-17 {
    margin-bottom: 7.5rem !important;
  }
  .mb-xl-18 {
    margin-bottom: 8rem !important;
  }
  .mb-xl-19 {
    margin-bottom: 8.5rem !important;
  }
  .mb-xl-20 {
    margin-bottom: 9rem !important;
  }
  .mb-xl-21 {
    margin-bottom: 9.5rem !important;
  }
  .mb-xl-22 {
    margin-bottom: 10rem !important;
  }
  .mb-xl-23 {
    margin-bottom: 12rem !important;
  }
  .mb-xl-auto {
    margin-bottom: auto !important;
  }
  .ms-xl-0 {
    margin-left: 0 !important;
  }
  .ms-xl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xl-3 {
    margin-left: 1rem !important;
  }
  .ms-xl-4 {
    margin-left: 1.25rem !important;
  }
  .ms-xl-5 {
    margin-left: 1.5rem !important;
  }
  .ms-xl-6 {
    margin-left: 2rem !important;
  }
  .ms-xl-7 {
    margin-left: 2.5rem !important;
  }
  .ms-xl-8 {
    margin-left: 3rem !important;
  }
  .ms-xl-9 {
    margin-left: 3.5rem !important;
  }
  .ms-xl-10 {
    margin-left: 4rem !important;
  }
  .ms-xl-11 {
    margin-left: 4.5rem !important;
  }
  .ms-xl-12 {
    margin-left: 5rem !important;
  }
  .ms-xl-13 {
    margin-left: 5.5rem !important;
  }
  .ms-xl-14 {
    margin-left: 6rem !important;
  }
  .ms-xl-15 {
    margin-left: 6.5rem !important;
  }
  .ms-xl-16 {
    margin-left: 7rem !important;
  }
  .ms-xl-17 {
    margin-left: 7.5rem !important;
  }
  .ms-xl-18 {
    margin-left: 8rem !important;
  }
  .ms-xl-19 {
    margin-left: 8.5rem !important;
  }
  .ms-xl-20 {
    margin-left: 9rem !important;
  }
  .ms-xl-21 {
    margin-left: 9.5rem !important;
  }
  .ms-xl-22 {
    margin-left: 10rem !important;
  }
  .ms-xl-23 {
    margin-left: 12rem !important;
  }
  .ms-xl-auto {
    margin-left: auto !important;
  }
  .m-xl-n1 {
    margin: -0.25rem !important;
  }
  .m-xl-n2 {
    margin: -0.5rem !important;
  }
  .m-xl-n3 {
    margin: -1rem !important;
  }
  .m-xl-n4 {
    margin: -1.25rem !important;
  }
  .m-xl-n5 {
    margin: -1.5rem !important;
  }
  .m-xl-n6 {
    margin: -2rem !important;
  }
  .m-xl-n7 {
    margin: -2.5rem !important;
  }
  .m-xl-n8 {
    margin: -3rem !important;
  }
  .m-xl-n9 {
    margin: -3.5rem !important;
  }
  .m-xl-n10 {
    margin: -4rem !important;
  }
  .m-xl-n11 {
    margin: -4.5rem !important;
  }
  .m-xl-n12 {
    margin: -5rem !important;
  }
  .m-xl-n13 {
    margin: -5.5rem !important;
  }
  .m-xl-n14 {
    margin: -6rem !important;
  }
  .m-xl-n15 {
    margin: -6.5rem !important;
  }
  .m-xl-n16 {
    margin: -7rem !important;
  }
  .m-xl-n17 {
    margin: -7.5rem !important;
  }
  .m-xl-n18 {
    margin: -8rem !important;
  }
  .m-xl-n19 {
    margin: -8.5rem !important;
  }
  .m-xl-n20 {
    margin: -9rem !important;
  }
  .m-xl-n21 {
    margin: -9.5rem !important;
  }
  .m-xl-n22 {
    margin: -10rem !important;
  }
  .m-xl-n23 {
    margin: -12rem !important;
  }
  .mx-xl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-xl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-xl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-xl-n4 {
    margin-right: -1.25rem !important;
    margin-left: -1.25rem !important;
  }
  .mx-xl-n5 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-xl-n6 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-xl-n7 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-xl-n8 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-xl-n9 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-xl-n10 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-xl-n11 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-xl-n12 {
    margin-right: -5rem !important;
    margin-left: -5rem !important;
  }
  .mx-xl-n13 {
    margin-right: -5.5rem !important;
    margin-left: -5.5rem !important;
  }
  .mx-xl-n14 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-xl-n15 {
    margin-right: -6.5rem !important;
    margin-left: -6.5rem !important;
  }
  .mx-xl-n16 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-xl-n17 {
    margin-right: -7.5rem !important;
    margin-left: -7.5rem !important;
  }
  .mx-xl-n18 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-xl-n19 {
    margin-right: -8.5rem !important;
    margin-left: -8.5rem !important;
  }
  .mx-xl-n20 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-xl-n21 {
    margin-right: -9.5rem !important;
    margin-left: -9.5rem !important;
  }
  .mx-xl-n22 {
    margin-right: -10rem !important;
    margin-left: -10rem !important;
  }
  .mx-xl-n23 {
    margin-right: -12rem !important;
    margin-left: -12rem !important;
  }
  .my-xl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-xl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-xl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-xl-n4 {
    margin-top: -1.25rem !important;
    margin-bottom: -1.25rem !important;
  }
  .my-xl-n5 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-xl-n6 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-xl-n7 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-xl-n8 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-xl-n9 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-xl-n10 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-xl-n11 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-xl-n12 {
    margin-top: -5rem !important;
    margin-bottom: -5rem !important;
  }
  .my-xl-n13 {
    margin-top: -5.5rem !important;
    margin-bottom: -5.5rem !important;
  }
  .my-xl-n14 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-xl-n15 {
    margin-top: -6.5rem !important;
    margin-bottom: -6.5rem !important;
  }
  .my-xl-n16 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-xl-n17 {
    margin-top: -7.5rem !important;
    margin-bottom: -7.5rem !important;
  }
  .my-xl-n18 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-xl-n19 {
    margin-top: -8.5rem !important;
    margin-bottom: -8.5rem !important;
  }
  .my-xl-n20 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-xl-n21 {
    margin-top: -9.5rem !important;
    margin-bottom: -9.5rem !important;
  }
  .my-xl-n22 {
    margin-top: -10rem !important;
    margin-bottom: -10rem !important;
  }
  .my-xl-n23 {
    margin-top: -12rem !important;
    margin-bottom: -12rem !important;
  }
  .mt-xl-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-xl-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-xl-n3 {
    margin-top: -1rem !important;
  }
  .mt-xl-n4 {
    margin-top: -1.25rem !important;
  }
  .mt-xl-n5 {
    margin-top: -1.5rem !important;
  }
  .mt-xl-n6 {
    margin-top: -2rem !important;
  }
  .mt-xl-n7 {
    margin-top: -2.5rem !important;
  }
  .mt-xl-n8 {
    margin-top: -3rem !important;
  }
  .mt-xl-n9 {
    margin-top: -3.5rem !important;
  }
  .mt-xl-n10 {
    margin-top: -4rem !important;
  }
  .mt-xl-n11 {
    margin-top: -4.5rem !important;
  }
  .mt-xl-n12 {
    margin-top: -5rem !important;
  }
  .mt-xl-n13 {
    margin-top: -5.5rem !important;
  }
  .mt-xl-n14 {
    margin-top: -6rem !important;
  }
  .mt-xl-n15 {
    margin-top: -6.5rem !important;
  }
  .mt-xl-n16 {
    margin-top: -7rem !important;
  }
  .mt-xl-n17 {
    margin-top: -7.5rem !important;
  }
  .mt-xl-n18 {
    margin-top: -8rem !important;
  }
  .mt-xl-n19 {
    margin-top: -8.5rem !important;
  }
  .mt-xl-n20 {
    margin-top: -9rem !important;
  }
  .mt-xl-n21 {
    margin-top: -9.5rem !important;
  }
  .mt-xl-n22 {
    margin-top: -10rem !important;
  }
  .mt-xl-n23 {
    margin-top: -12rem !important;
  }
  .me-xl-n1 {
    margin-right: -0.25rem !important;
  }
  .me-xl-n2 {
    margin-right: -0.5rem !important;
  }
  .me-xl-n3 {
    margin-right: -1rem !important;
  }
  .me-xl-n4 {
    margin-right: -1.25rem !important;
  }
  .me-xl-n5 {
    margin-right: -1.5rem !important;
  }
  .me-xl-n6 {
    margin-right: -2rem !important;
  }
  .me-xl-n7 {
    margin-right: -2.5rem !important;
  }
  .me-xl-n8 {
    margin-right: -3rem !important;
  }
  .me-xl-n9 {
    margin-right: -3.5rem !important;
  }
  .me-xl-n10 {
    margin-right: -4rem !important;
  }
  .me-xl-n11 {
    margin-right: -4.5rem !important;
  }
  .me-xl-n12 {
    margin-right: -5rem !important;
  }
  .me-xl-n13 {
    margin-right: -5.5rem !important;
  }
  .me-xl-n14 {
    margin-right: -6rem !important;
  }
  .me-xl-n15 {
    margin-right: -6.5rem !important;
  }
  .me-xl-n16 {
    margin-right: -7rem !important;
  }
  .me-xl-n17 {
    margin-right: -7.5rem !important;
  }
  .me-xl-n18 {
    margin-right: -8rem !important;
  }
  .me-xl-n19 {
    margin-right: -8.5rem !important;
  }
  .me-xl-n20 {
    margin-right: -9rem !important;
  }
  .me-xl-n21 {
    margin-right: -9.5rem !important;
  }
  .me-xl-n22 {
    margin-right: -10rem !important;
  }
  .me-xl-n23 {
    margin-right: -12rem !important;
  }
  .mb-xl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-xl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-xl-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-xl-n4 {
    margin-bottom: -1.25rem !important;
  }
  .mb-xl-n5 {
    margin-bottom: -1.5rem !important;
  }
  .mb-xl-n6 {
    margin-bottom: -2rem !important;
  }
  .mb-xl-n7 {
    margin-bottom: -2.5rem !important;
  }
  .mb-xl-n8 {
    margin-bottom: -3rem !important;
  }
  .mb-xl-n9 {
    margin-bottom: -3.5rem !important;
  }
  .mb-xl-n10 {
    margin-bottom: -4rem !important;
  }
  .mb-xl-n11 {
    margin-bottom: -4.5rem !important;
  }
  .mb-xl-n12 {
    margin-bottom: -5rem !important;
  }
  .mb-xl-n13 {
    margin-bottom: -5.5rem !important;
  }
  .mb-xl-n14 {
    margin-bottom: -6rem !important;
  }
  .mb-xl-n15 {
    margin-bottom: -6.5rem !important;
  }
  .mb-xl-n16 {
    margin-bottom: -7rem !important;
  }
  .mb-xl-n17 {
    margin-bottom: -7.5rem !important;
  }
  .mb-xl-n18 {
    margin-bottom: -8rem !important;
  }
  .mb-xl-n19 {
    margin-bottom: -8.5rem !important;
  }
  .mb-xl-n20 {
    margin-bottom: -9rem !important;
  }
  .mb-xl-n21 {
    margin-bottom: -9.5rem !important;
  }
  .mb-xl-n22 {
    margin-bottom: -10rem !important;
  }
  .mb-xl-n23 {
    margin-bottom: -12rem !important;
  }
  .ms-xl-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-xl-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-xl-n3 {
    margin-left: -1rem !important;
  }
  .ms-xl-n4 {
    margin-left: -1.25rem !important;
  }
  .ms-xl-n5 {
    margin-left: -1.5rem !important;
  }
  .ms-xl-n6 {
    margin-left: -2rem !important;
  }
  .ms-xl-n7 {
    margin-left: -2.5rem !important;
  }
  .ms-xl-n8 {
    margin-left: -3rem !important;
  }
  .ms-xl-n9 {
    margin-left: -3.5rem !important;
  }
  .ms-xl-n10 {
    margin-left: -4rem !important;
  }
  .ms-xl-n11 {
    margin-left: -4.5rem !important;
  }
  .ms-xl-n12 {
    margin-left: -5rem !important;
  }
  .ms-xl-n13 {
    margin-left: -5.5rem !important;
  }
  .ms-xl-n14 {
    margin-left: -6rem !important;
  }
  .ms-xl-n15 {
    margin-left: -6.5rem !important;
  }
  .ms-xl-n16 {
    margin-left: -7rem !important;
  }
  .ms-xl-n17 {
    margin-left: -7.5rem !important;
  }
  .ms-xl-n18 {
    margin-left: -8rem !important;
  }
  .ms-xl-n19 {
    margin-left: -8.5rem !important;
  }
  .ms-xl-n20 {
    margin-left: -9rem !important;
  }
  .ms-xl-n21 {
    margin-left: -9.5rem !important;
  }
  .ms-xl-n22 {
    margin-left: -10rem !important;
  }
  .ms-xl-n23 {
    margin-left: -12rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.25rem !important;
  }
  .p-xl-5 {
    padding: 1.5rem !important;
  }
  .p-xl-6 {
    padding: 2rem !important;
  }
  .p-xl-7 {
    padding: 2.5rem !important;
  }
  .p-xl-8 {
    padding: 3rem !important;
  }
  .p-xl-9 {
    padding: 3.5rem !important;
  }
  .p-xl-10 {
    padding: 4rem !important;
  }
  .p-xl-11 {
    padding: 4.5rem !important;
  }
  .p-xl-12 {
    padding: 5rem !important;
  }
  .p-xl-13 {
    padding: 5.5rem !important;
  }
  .p-xl-14 {
    padding: 6rem !important;
  }
  .p-xl-15 {
    padding: 6.5rem !important;
  }
  .p-xl-16 {
    padding: 7rem !important;
  }
  .p-xl-17 {
    padding: 7.5rem !important;
  }
  .p-xl-18 {
    padding: 8rem !important;
  }
  .p-xl-19 {
    padding: 8.5rem !important;
  }
  .p-xl-20 {
    padding: 9rem !important;
  }
  .p-xl-21 {
    padding: 9.5rem !important;
  }
  .p-xl-22 {
    padding: 10rem !important;
  }
  .p-xl-23 {
    padding: 12rem !important;
  }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xl-4 {
    padding-right: 1.25rem !important;
    padding-left: 1.25rem !important;
  }
  .px-xl-5 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xl-6 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-xl-7 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-xl-8 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-xl-9 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-xl-10 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-xl-11 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-xl-12 {
    padding-right: 5rem !important;
    padding-left: 5rem !important;
  }
  .px-xl-13 {
    padding-right: 5.5rem !important;
    padding-left: 5.5rem !important;
  }
  .px-xl-14 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-xl-15 {
    padding-right: 6.5rem !important;
    padding-left: 6.5rem !important;
  }
  .px-xl-16 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-xl-17 {
    padding-right: 7.5rem !important;
    padding-left: 7.5rem !important;
  }
  .px-xl-18 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-xl-19 {
    padding-right: 8.5rem !important;
    padding-left: 8.5rem !important;
  }
  .px-xl-20 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-xl-21 {
    padding-right: 9.5rem !important;
    padding-left: 9.5rem !important;
  }
  .px-xl-22 {
    padding-right: 10rem !important;
    padding-left: 10rem !important;
  }
  .px-xl-23 {
    padding-right: 12rem !important;
    padding-left: 12rem !important;
  }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xl-4 {
    padding-top: 1.25rem !important;
    padding-bottom: 1.25rem !important;
  }
  .py-xl-5 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xl-6 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-xl-7 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-xl-8 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-xl-9 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-xl-10 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-xl-11 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-xl-12 {
    padding-top: 5rem !important;
    padding-bottom: 5rem !important;
  }
  .py-xl-13 {
    padding-top: 5.5rem !important;
    padding-bottom: 5.5rem !important;
  }
  .py-xl-14 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-xl-15 {
    padding-top: 6.5rem !important;
    padding-bottom: 6.5rem !important;
  }
  .py-xl-16 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-xl-17 {
    padding-top: 7.5rem !important;
    padding-bottom: 7.5rem !important;
  }
  .py-xl-18 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-xl-19 {
    padding-top: 8.5rem !important;
    padding-bottom: 8.5rem !important;
  }
  .py-xl-20 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-xl-21 {
    padding-top: 9.5rem !important;
    padding-bottom: 9.5rem !important;
  }
  .py-xl-22 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }
  .py-xl-23 {
    padding-top: 12rem !important;
    padding-bottom: 12rem !important;
  }
  .pt-xl-0 {
    padding-top: 0 !important;
  }
  .pt-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xl-3 {
    padding-top: 1rem !important;
  }
  .pt-xl-4 {
    padding-top: 1.25rem !important;
  }
  .pt-xl-5 {
    padding-top: 1.5rem !important;
  }
  .pt-xl-6 {
    padding-top: 2rem !important;
  }
  .pt-xl-7 {
    padding-top: 2.5rem !important;
  }
  .pt-xl-8 {
    padding-top: 3rem !important;
  }
  .pt-xl-9 {
    padding-top: 3.5rem !important;
  }
  .pt-xl-10 {
    padding-top: 4rem !important;
  }
  .pt-xl-11 {
    padding-top: 4.5rem !important;
  }
  .pt-xl-12 {
    padding-top: 5rem !important;
  }
  .pt-xl-13 {
    padding-top: 5.5rem !important;
  }
  .pt-xl-14 {
    padding-top: 6rem !important;
  }
  .pt-xl-15 {
    padding-top: 6.5rem !important;
  }
  .pt-xl-16 {
    padding-top: 7rem !important;
  }
  .pt-xl-17 {
    padding-top: 7.5rem !important;
  }
  .pt-xl-18 {
    padding-top: 8rem !important;
  }
  .pt-xl-19 {
    padding-top: 8.5rem !important;
  }
  .pt-xl-20 {
    padding-top: 9rem !important;
  }
  .pt-xl-21 {
    padding-top: 9.5rem !important;
  }
  .pt-xl-22 {
    padding-top: 10rem !important;
  }
  .pt-xl-23 {
    padding-top: 12rem !important;
  }
  .pe-xl-0 {
    padding-right: 0 !important;
  }
  .pe-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xl-3 {
    padding-right: 1rem !important;
  }
  .pe-xl-4 {
    padding-right: 1.25rem !important;
  }
  .pe-xl-5 {
    padding-right: 1.5rem !important;
  }
  .pe-xl-6 {
    padding-right: 2rem !important;
  }
  .pe-xl-7 {
    padding-right: 2.5rem !important;
  }
  .pe-xl-8 {
    padding-right: 3rem !important;
  }
  .pe-xl-9 {
    padding-right: 3.5rem !important;
  }
  .pe-xl-10 {
    padding-right: 4rem !important;
  }
  .pe-xl-11 {
    padding-right: 4.5rem !important;
  }
  .pe-xl-12 {
    padding-right: 5rem !important;
  }
  .pe-xl-13 {
    padding-right: 5.5rem !important;
  }
  .pe-xl-14 {
    padding-right: 6rem !important;
  }
  .pe-xl-15 {
    padding-right: 6.5rem !important;
  }
  .pe-xl-16 {
    padding-right: 7rem !important;
  }
  .pe-xl-17 {
    padding-right: 7.5rem !important;
  }
  .pe-xl-18 {
    padding-right: 8rem !important;
  }
  .pe-xl-19 {
    padding-right: 8.5rem !important;
  }
  .pe-xl-20 {
    padding-right: 9rem !important;
  }
  .pe-xl-21 {
    padding-right: 9.5rem !important;
  }
  .pe-xl-22 {
    padding-right: 10rem !important;
  }
  .pe-xl-23 {
    padding-right: 12rem !important;
  }
  .pb-xl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xl-4 {
    padding-bottom: 1.25rem !important;
  }
  .pb-xl-5 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xl-6 {
    padding-bottom: 2rem !important;
  }
  .pb-xl-7 {
    padding-bottom: 2.5rem !important;
  }
  .pb-xl-8 {
    padding-bottom: 3rem !important;
  }
  .pb-xl-9 {
    padding-bottom: 3.5rem !important;
  }
  .pb-xl-10 {
    padding-bottom: 4rem !important;
  }
  .pb-xl-11 {
    padding-bottom: 4.5rem !important;
  }
  .pb-xl-12 {
    padding-bottom: 5rem !important;
  }
  .pb-xl-13 {
    padding-bottom: 5.5rem !important;
  }
  .pb-xl-14 {
    padding-bottom: 6rem !important;
  }
  .pb-xl-15 {
    padding-bottom: 6.5rem !important;
  }
  .pb-xl-16 {
    padding-bottom: 7rem !important;
  }
  .pb-xl-17 {
    padding-bottom: 7.5rem !important;
  }
  .pb-xl-18 {
    padding-bottom: 8rem !important;
  }
  .pb-xl-19 {
    padding-bottom: 8.5rem !important;
  }
  .pb-xl-20 {
    padding-bottom: 9rem !important;
  }
  .pb-xl-21 {
    padding-bottom: 9.5rem !important;
  }
  .pb-xl-22 {
    padding-bottom: 10rem !important;
  }
  .pb-xl-23 {
    padding-bottom: 12rem !important;
  }
  .ps-xl-0 {
    padding-left: 0 !important;
  }
  .ps-xl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xl-3 {
    padding-left: 1rem !important;
  }
  .ps-xl-4 {
    padding-left: 1.25rem !important;
  }
  .ps-xl-5 {
    padding-left: 1.5rem !important;
  }
  .ps-xl-6 {
    padding-left: 2rem !important;
  }
  .ps-xl-7 {
    padding-left: 2.5rem !important;
  }
  .ps-xl-8 {
    padding-left: 3rem !important;
  }
  .ps-xl-9 {
    padding-left: 3.5rem !important;
  }
  .ps-xl-10 {
    padding-left: 4rem !important;
  }
  .ps-xl-11 {
    padding-left: 4.5rem !important;
  }
  .ps-xl-12 {
    padding-left: 5rem !important;
  }
  .ps-xl-13 {
    padding-left: 5.5rem !important;
  }
  .ps-xl-14 {
    padding-left: 6rem !important;
  }
  .ps-xl-15 {
    padding-left: 6.5rem !important;
  }
  .ps-xl-16 {
    padding-left: 7rem !important;
  }
  .ps-xl-17 {
    padding-left: 7.5rem !important;
  }
  .ps-xl-18 {
    padding-left: 8rem !important;
  }
  .ps-xl-19 {
    padding-left: 8.5rem !important;
  }
  .ps-xl-20 {
    padding-left: 9rem !important;
  }
  .ps-xl-21 {
    padding-left: 9.5rem !important;
  }
  .ps-xl-22 {
    padding-left: 10rem !important;
  }
  .ps-xl-23 {
    padding-left: 12rem !important;
  }
  .text-xl-start {
    text-align: left !important;
  }
  .text-xl-end {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}
@media (min-width: 1400px) {
  .float-xxl-start {
    float: left !important;
  }
  .float-xxl-end {
    float: right !important;
  }
  .float-xxl-none {
    float: none !important;
  }
  .d-xxl-inline {
    display: inline !important;
  }
  .d-xxl-inline-block {
    display: inline-block !important;
  }
  .d-xxl-block {
    display: block !important;
  }
  .d-xxl-grid {
    display: grid !important;
  }
  .d-xxl-table {
    display: table !important;
  }
  .d-xxl-table-row {
    display: table-row !important;
  }
  .d-xxl-table-cell {
    display: table-cell !important;
  }
  .d-xxl-flex {
    display: flex !important;
  }
  .d-xxl-inline-flex {
    display: inline-flex !important;
  }
  .d-xxl-none {
    display: none !important;
  }
  .w-xxl-15 {
    width: 15% !important;
  }
  .w-xxl-25 {
    width: 25% !important;
  }
  .w-xxl-30 {
    width: 30% !important;
  }
  .w-xxl-40 {
    width: 40% !important;
  }
  .w-xxl-50 {
    width: 50% !important;
  }
  .w-xxl-65 {
    width: 65% !important;
  }
  .w-xxl-75 {
    width: 75% !important;
  }
  .w-xxl-100 {
    width: 100% !important;
  }
  .w-xxl-auto {
    width: auto !important;
  }
  .mw-xxl-25 {
    max-width: 25% !important;
  }
  .mw-xxl-30 {
    max-width: 30% !important;
  }
  .mw-xxl-40 {
    max-width: 40% !important;
  }
  .mw-xxl-50 {
    max-width: 50% !important;
  }
  .mw-xxl-65 {
    max-width: 65% !important;
  }
  .mw-xxl-75 {
    max-width: 75% !important;
  }
  .mw-xxl-100 {
    max-width: 100% !important;
  }
  .mw-xxl-auto {
    max-width: auto !important;
  }
  .vw-xxl-100 {
    width: 100vw !important;
  }
  .min-vw-xxl-100 {
    min-width: 100vw !important;
  }
  .h-xxl-25 {
    height: 25% !important;
  }
  .h-xxl-30 {
    height: 30% !important;
  }
  .h-xxl-40 {
    height: 40% !important;
  }
  .h-xxl-50 {
    height: 50% !important;
  }
  .h-xxl-65 {
    height: 65% !important;
  }
  .h-xxl-75 {
    height: 75% !important;
  }
  .h-xxl-100 {
    height: 100% !important;
  }
  .h-xxl-auto {
    height: auto !important;
  }
  .mh-xxl-25 {
    max-height: 25% !important;
  }
  .mh-xxl-30 {
    max-height: 30% !important;
  }
  .mh-xxl-40 {
    max-height: 40% !important;
  }
  .mh-xxl-50 {
    max-height: 50% !important;
  }
  .mh-xxl-65 {
    max-height: 65% !important;
  }
  .mh-xxl-75 {
    max-height: 75% !important;
  }
  .mh-xxl-100 {
    max-height: 100% !important;
  }
  .mh-xxl-auto {
    max-height: auto !important;
  }
  .vh-xxl-100 {
    height: 100vh !important;
  }
  .min-vh-xxl-100 {
    min-height: 100vh !important;
  }
  .flex-xxl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xxl-row {
    flex-direction: row !important;
  }
  .flex-xxl-column {
    flex-direction: column !important;
  }
  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xxl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xxl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xxl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .gap-xxl-0 {
    gap: 0 !important;
  }
  .gap-xxl-1 {
    gap: 0.25rem !important;
  }
  .gap-xxl-2 {
    gap: 0.5rem !important;
  }
  .gap-xxl-3 {
    gap: 1rem !important;
  }
  .gap-xxl-4 {
    gap: 1.25rem !important;
  }
  .gap-xxl-5 {
    gap: 1.5rem !important;
  }
  .gap-xxl-6 {
    gap: 2rem !important;
  }
  .gap-xxl-7 {
    gap: 2.5rem !important;
  }
  .gap-xxl-8 {
    gap: 3rem !important;
  }
  .gap-xxl-9 {
    gap: 3.5rem !important;
  }
  .gap-xxl-10 {
    gap: 4rem !important;
  }
  .gap-xxl-11 {
    gap: 4.5rem !important;
  }
  .gap-xxl-12 {
    gap: 5rem !important;
  }
  .gap-xxl-13 {
    gap: 5.5rem !important;
  }
  .gap-xxl-14 {
    gap: 6rem !important;
  }
  .gap-xxl-15 {
    gap: 6.5rem !important;
  }
  .gap-xxl-16 {
    gap: 7rem !important;
  }
  .gap-xxl-17 {
    gap: 7.5rem !important;
  }
  .gap-xxl-18 {
    gap: 8rem !important;
  }
  .gap-xxl-19 {
    gap: 8.5rem !important;
  }
  .gap-xxl-20 {
    gap: 9rem !important;
  }
  .gap-xxl-21 {
    gap: 9.5rem !important;
  }
  .gap-xxl-22 {
    gap: 10rem !important;
  }
  .gap-xxl-23 {
    gap: 12rem !important;
  }
  .justify-content-xxl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xxl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xxl-center {
    justify-content: center !important;
  }
  .justify-content-xxl-between {
    justify-content: space-between !important;
  }
  .justify-content-xxl-around {
    justify-content: space-around !important;
  }
  .justify-content-xxl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xxl-start {
    align-items: flex-start !important;
  }
  .align-items-xxl-end {
    align-items: flex-end !important;
  }
  .align-items-xxl-center {
    align-items: center !important;
  }
  .align-items-xxl-baseline {
    align-items: baseline !important;
  }
  .align-items-xxl-stretch {
    align-items: stretch !important;
  }
  .align-content-xxl-start {
    align-content: flex-start !important;
  }
  .align-content-xxl-end {
    align-content: flex-end !important;
  }
  .align-content-xxl-center {
    align-content: center !important;
  }
  .align-content-xxl-between {
    align-content: space-between !important;
  }
  .align-content-xxl-around {
    align-content: space-around !important;
  }
  .align-content-xxl-stretch {
    align-content: stretch !important;
  }
  .align-self-xxl-auto {
    align-self: auto !important;
  }
  .align-self-xxl-start {
    align-self: flex-start !important;
  }
  .align-self-xxl-end {
    align-self: flex-end !important;
  }
  .align-self-xxl-center {
    align-self: center !important;
  }
  .align-self-xxl-baseline {
    align-self: baseline !important;
  }
  .align-self-xxl-stretch {
    align-self: stretch !important;
  }
  .order-xxl-first {
    order: -1 !important;
  }
  .order-xxl-0 {
    order: 0 !important;
  }
  .order-xxl-1 {
    order: 1 !important;
  }
  .order-xxl-2 {
    order: 2 !important;
  }
  .order-xxl-3 {
    order: 3 !important;
  }
  .order-xxl-4 {
    order: 4 !important;
  }
  .order-xxl-5 {
    order: 5 !important;
  }
  .order-xxl-last {
    order: 6 !important;
  }
  .m-xxl-0 {
    margin: 0 !important;
  }
  .m-xxl-1 {
    margin: 0.25rem !important;
  }
  .m-xxl-2 {
    margin: 0.5rem !important;
  }
  .m-xxl-3 {
    margin: 1rem !important;
  }
  .m-xxl-4 {
    margin: 1.25rem !important;
  }
  .m-xxl-5 {
    margin: 1.5rem !important;
  }
  .m-xxl-6 {
    margin: 2rem !important;
  }
  .m-xxl-7 {
    margin: 2.5rem !important;
  }
  .m-xxl-8 {
    margin: 3rem !important;
  }
  .m-xxl-9 {
    margin: 3.5rem !important;
  }
  .m-xxl-10 {
    margin: 4rem !important;
  }
  .m-xxl-11 {
    margin: 4.5rem !important;
  }
  .m-xxl-12 {
    margin: 5rem !important;
  }
  .m-xxl-13 {
    margin: 5.5rem !important;
  }
  .m-xxl-14 {
    margin: 6rem !important;
  }
  .m-xxl-15 {
    margin: 6.5rem !important;
  }
  .m-xxl-16 {
    margin: 7rem !important;
  }
  .m-xxl-17 {
    margin: 7.5rem !important;
  }
  .m-xxl-18 {
    margin: 8rem !important;
  }
  .m-xxl-19 {
    margin: 8.5rem !important;
  }
  .m-xxl-20 {
    margin: 9rem !important;
  }
  .m-xxl-21 {
    margin: 9.5rem !important;
  }
  .m-xxl-22 {
    margin: 10rem !important;
  }
  .m-xxl-23 {
    margin: 12rem !important;
  }
  .m-xxl-auto {
    margin: auto !important;
  }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xxl-4 {
    margin-right: 1.25rem !important;
    margin-left: 1.25rem !important;
  }
  .mx-xxl-5 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xxl-6 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-xxl-7 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-xxl-8 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xxl-9 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-xxl-10 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-xxl-11 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-xxl-12 {
    margin-right: 5rem !important;
    margin-left: 5rem !important;
  }
  .mx-xxl-13 {
    margin-right: 5.5rem !important;
    margin-left: 5.5rem !important;
  }
  .mx-xxl-14 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-xxl-15 {
    margin-right: 6.5rem !important;
    margin-left: 6.5rem !important;
  }
  .mx-xxl-16 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-xxl-17 {
    margin-right: 7.5rem !important;
    margin-left: 7.5rem !important;
  }
  .mx-xxl-18 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-xxl-19 {
    margin-right: 8.5rem !important;
    margin-left: 8.5rem !important;
  }
  .mx-xxl-20 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-xxl-21 {
    margin-right: 9.5rem !important;
    margin-left: 9.5rem !important;
  }
  .mx-xxl-22 {
    margin-right: 10rem !important;
    margin-left: 10rem !important;
  }
  .mx-xxl-23 {
    margin-right: 12rem !important;
    margin-left: 12rem !important;
  }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xxl-4 {
    margin-top: 1.25rem !important;
    margin-bottom: 1.25rem !important;
  }
  .my-xxl-5 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xxl-6 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-xxl-7 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-xxl-8 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xxl-9 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-xxl-10 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-xxl-11 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-xxl-12 {
    margin-top: 5rem !important;
    margin-bottom: 5rem !important;
  }
  .my-xxl-13 {
    margin-top: 5.5rem !important;
    margin-bottom: 5.5rem !important;
  }
  .my-xxl-14 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-xxl-15 {
    margin-top: 6.5rem !important;
    margin-bottom: 6.5rem !important;
  }
  .my-xxl-16 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-xxl-17 {
    margin-top: 7.5rem !important;
    margin-bottom: 7.5rem !important;
  }
  .my-xxl-18 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-xxl-19 {
    margin-top: 8.5rem !important;
    margin-bottom: 8.5rem !important;
  }
  .my-xxl-20 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-xxl-21 {
    margin-top: 9.5rem !important;
    margin-bottom: 9.5rem !important;
  }
  .my-xxl-22 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }
  .my-xxl-23 {
    margin-top: 12rem !important;
    margin-bottom: 12rem !important;
  }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xxl-0 {
    margin-top: 0 !important;
  }
  .mt-xxl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xxl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xxl-3 {
    margin-top: 1rem !important;
  }
  .mt-xxl-4 {
    margin-top: 1.25rem !important;
  }
  .mt-xxl-5 {
    margin-top: 1.5rem !important;
  }
  .mt-xxl-6 {
    margin-top: 2rem !important;
  }
  .mt-xxl-7 {
    margin-top: 2.5rem !important;
  }
  .mt-xxl-8 {
    margin-top: 3rem !important;
  }
  .mt-xxl-9 {
    margin-top: 3.5rem !important;
  }
  .mt-xxl-10 {
    margin-top: 4rem !important;
  }
  .mt-xxl-11 {
    margin-top: 4.5rem !important;
  }
  .mt-xxl-12 {
    margin-top: 5rem !important;
  }
  .mt-xxl-13 {
    margin-top: 5.5rem !important;
  }
  .mt-xxl-14 {
    margin-top: 6rem !important;
  }
  .mt-xxl-15 {
    margin-top: 6.5rem !important;
  }
  .mt-xxl-16 {
    margin-top: 7rem !important;
  }
  .mt-xxl-17 {
    margin-top: 7.5rem !important;
  }
  .mt-xxl-18 {
    margin-top: 8rem !important;
  }
  .mt-xxl-19 {
    margin-top: 8.5rem !important;
  }
  .mt-xxl-20 {
    margin-top: 9rem !important;
  }
  .mt-xxl-21 {
    margin-top: 9.5rem !important;
  }
  .mt-xxl-22 {
    margin-top: 10rem !important;
  }
  .mt-xxl-23 {
    margin-top: 12rem !important;
  }
  .mt-xxl-auto {
    margin-top: auto !important;
  }
  .me-xxl-0 {
    margin-right: 0 !important;
  }
  .me-xxl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xxl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xxl-3 {
    margin-right: 1rem !important;
  }
  .me-xxl-4 {
    margin-right: 1.25rem !important;
  }
  .me-xxl-5 {
    margin-right: 1.5rem !important;
  }
  .me-xxl-6 {
    margin-right: 2rem !important;
  }
  .me-xxl-7 {
    margin-right: 2.5rem !important;
  }
  .me-xxl-8 {
    margin-right: 3rem !important;
  }
  .me-xxl-9 {
    margin-right: 3.5rem !important;
  }
  .me-xxl-10 {
    margin-right: 4rem !important;
  }
  .me-xxl-11 {
    margin-right: 4.5rem !important;
  }
  .me-xxl-12 {
    margin-right: 5rem !important;
  }
  .me-xxl-13 {
    margin-right: 5.5rem !important;
  }
  .me-xxl-14 {
    margin-right: 6rem !important;
  }
  .me-xxl-15 {
    margin-right: 6.5rem !important;
  }
  .me-xxl-16 {
    margin-right: 7rem !important;
  }
  .me-xxl-17 {
    margin-right: 7.5rem !important;
  }
  .me-xxl-18 {
    margin-right: 8rem !important;
  }
  .me-xxl-19 {
    margin-right: 8.5rem !important;
  }
  .me-xxl-20 {
    margin-right: 9rem !important;
  }
  .me-xxl-21 {
    margin-right: 9.5rem !important;
  }
  .me-xxl-22 {
    margin-right: 10rem !important;
  }
  .me-xxl-23 {
    margin-right: 12rem !important;
  }
  .me-xxl-auto {
    margin-right: auto !important;
  }
  .mb-xxl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xxl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xxl-4 {
    margin-bottom: 1.25rem !important;
  }
  .mb-xxl-5 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xxl-6 {
    margin-bottom: 2rem !important;
  }
  .mb-xxl-7 {
    margin-bottom: 2.5rem !important;
  }
  .mb-xxl-8 {
    margin-bottom: 3rem !important;
  }
  .mb-xxl-9 {
    margin-bottom: 3.5rem !important;
  }
  .mb-xxl-10 {
    margin-bottom: 4rem !important;
  }
  .mb-xxl-11 {
    margin-bottom: 4.5rem !important;
  }
  .mb-xxl-12 {
    margin-bottom: 5rem !important;
  }
  .mb-xxl-13 {
    margin-bottom: 5.5rem !important;
  }
  .mb-xxl-14 {
    margin-bottom: 6rem !important;
  }
  .mb-xxl-15 {
    margin-bottom: 6.5rem !important;
  }
  .mb-xxl-16 {
    margin-bottom: 7rem !important;
  }
  .mb-xxl-17 {
    margin-bottom: 7.5rem !important;
  }
  .mb-xxl-18 {
    margin-bottom: 8rem !important;
  }
  .mb-xxl-19 {
    margin-bottom: 8.5rem !important;
  }
  .mb-xxl-20 {
    margin-bottom: 9rem !important;
  }
  .mb-xxl-21 {
    margin-bottom: 9.5rem !important;
  }
  .mb-xxl-22 {
    margin-bottom: 10rem !important;
  }
  .mb-xxl-23 {
    margin-bottom: 12rem !important;
  }
  .mb-xxl-auto {
    margin-bottom: auto !important;
  }
  .ms-xxl-0 {
    margin-left: 0 !important;
  }
  .ms-xxl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xxl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xxl-3 {
    margin-left: 1rem !important;
  }
  .ms-xxl-4 {
    margin-left: 1.25rem !important;
  }
  .ms-xxl-5 {
    margin-left: 1.5rem !important;
  }
  .ms-xxl-6 {
    margin-left: 2rem !important;
  }
  .ms-xxl-7 {
    margin-left: 2.5rem !important;
  }
  .ms-xxl-8 {
    margin-left: 3rem !important;
  }
  .ms-xxl-9 {
    margin-left: 3.5rem !important;
  }
  .ms-xxl-10 {
    margin-left: 4rem !important;
  }
  .ms-xxl-11 {
    margin-left: 4.5rem !important;
  }
  .ms-xxl-12 {
    margin-left: 5rem !important;
  }
  .ms-xxl-13 {
    margin-left: 5.5rem !important;
  }
  .ms-xxl-14 {
    margin-left: 6rem !important;
  }
  .ms-xxl-15 {
    margin-left: 6.5rem !important;
  }
  .ms-xxl-16 {
    margin-left: 7rem !important;
  }
  .ms-xxl-17 {
    margin-left: 7.5rem !important;
  }
  .ms-xxl-18 {
    margin-left: 8rem !important;
  }
  .ms-xxl-19 {
    margin-left: 8.5rem !important;
  }
  .ms-xxl-20 {
    margin-left: 9rem !important;
  }
  .ms-xxl-21 {
    margin-left: 9.5rem !important;
  }
  .ms-xxl-22 {
    margin-left: 10rem !important;
  }
  .ms-xxl-23 {
    margin-left: 12rem !important;
  }
  .ms-xxl-auto {
    margin-left: auto !important;
  }
  .m-xxl-n1 {
    margin: -0.25rem !important;
  }
  .m-xxl-n2 {
    margin: -0.5rem !important;
  }
  .m-xxl-n3 {
    margin: -1rem !important;
  }
  .m-xxl-n4 {
    margin: -1.25rem !important;
  }
  .m-xxl-n5 {
    margin: -1.5rem !important;
  }
  .m-xxl-n6 {
    margin: -2rem !important;
  }
  .m-xxl-n7 {
    margin: -2.5rem !important;
  }
  .m-xxl-n8 {
    margin: -3rem !important;
  }
  .m-xxl-n9 {
    margin: -3.5rem !important;
  }
  .m-xxl-n10 {
    margin: -4rem !important;
  }
  .m-xxl-n11 {
    margin: -4.5rem !important;
  }
  .m-xxl-n12 {
    margin: -5rem !important;
  }
  .m-xxl-n13 {
    margin: -5.5rem !important;
  }
  .m-xxl-n14 {
    margin: -6rem !important;
  }
  .m-xxl-n15 {
    margin: -6.5rem !important;
  }
  .m-xxl-n16 {
    margin: -7rem !important;
  }
  .m-xxl-n17 {
    margin: -7.5rem !important;
  }
  .m-xxl-n18 {
    margin: -8rem !important;
  }
  .m-xxl-n19 {
    margin: -8.5rem !important;
  }
  .m-xxl-n20 {
    margin: -9rem !important;
  }
  .m-xxl-n21 {
    margin: -9.5rem !important;
  }
  .m-xxl-n22 {
    margin: -10rem !important;
  }
  .m-xxl-n23 {
    margin: -12rem !important;
  }
  .mx-xxl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-xxl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-xxl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-xxl-n4 {
    margin-right: -1.25rem !important;
    margin-left: -1.25rem !important;
  }
  .mx-xxl-n5 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-xxl-n6 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-xxl-n7 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-xxl-n8 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-xxl-n9 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-xxl-n10 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-xxl-n11 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-xxl-n12 {
    margin-right: -5rem !important;
    margin-left: -5rem !important;
  }
  .mx-xxl-n13 {
    margin-right: -5.5rem !important;
    margin-left: -5.5rem !important;
  }
  .mx-xxl-n14 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-xxl-n15 {
    margin-right: -6.5rem !important;
    margin-left: -6.5rem !important;
  }
  .mx-xxl-n16 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-xxl-n17 {
    margin-right: -7.5rem !important;
    margin-left: -7.5rem !important;
  }
  .mx-xxl-n18 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-xxl-n19 {
    margin-right: -8.5rem !important;
    margin-left: -8.5rem !important;
  }
  .mx-xxl-n20 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-xxl-n21 {
    margin-right: -9.5rem !important;
    margin-left: -9.5rem !important;
  }
  .mx-xxl-n22 {
    margin-right: -10rem !important;
    margin-left: -10rem !important;
  }
  .mx-xxl-n23 {
    margin-right: -12rem !important;
    margin-left: -12rem !important;
  }
  .my-xxl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-xxl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-xxl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-xxl-n4 {
    margin-top: -1.25rem !important;
    margin-bottom: -1.25rem !important;
  }
  .my-xxl-n5 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-xxl-n6 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-xxl-n7 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-xxl-n8 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-xxl-n9 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-xxl-n10 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-xxl-n11 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-xxl-n12 {
    margin-top: -5rem !important;
    margin-bottom: -5rem !important;
  }
  .my-xxl-n13 {
    margin-top: -5.5rem !important;
    margin-bottom: -5.5rem !important;
  }
  .my-xxl-n14 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-xxl-n15 {
    margin-top: -6.5rem !important;
    margin-bottom: -6.5rem !important;
  }
  .my-xxl-n16 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-xxl-n17 {
    margin-top: -7.5rem !important;
    margin-bottom: -7.5rem !important;
  }
  .my-xxl-n18 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-xxl-n19 {
    margin-top: -8.5rem !important;
    margin-bottom: -8.5rem !important;
  }
  .my-xxl-n20 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-xxl-n21 {
    margin-top: -9.5rem !important;
    margin-bottom: -9.5rem !important;
  }
  .my-xxl-n22 {
    margin-top: -10rem !important;
    margin-bottom: -10rem !important;
  }
  .my-xxl-n23 {
    margin-top: -12rem !important;
    margin-bottom: -12rem !important;
  }
  .mt-xxl-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-xxl-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-xxl-n3 {
    margin-top: -1rem !important;
  }
  .mt-xxl-n4 {
    margin-top: -1.25rem !important;
  }
  .mt-xxl-n5 {
    margin-top: -1.5rem !important;
  }
  .mt-xxl-n6 {
    margin-top: -2rem !important;
  }
  .mt-xxl-n7 {
    margin-top: -2.5rem !important;
  }
  .mt-xxl-n8 {
    margin-top: -3rem !important;
  }
  .mt-xxl-n9 {
    margin-top: -3.5rem !important;
  }
  .mt-xxl-n10 {
    margin-top: -4rem !important;
  }
  .mt-xxl-n11 {
    margin-top: -4.5rem !important;
  }
  .mt-xxl-n12 {
    margin-top: -5rem !important;
  }
  .mt-xxl-n13 {
    margin-top: -5.5rem !important;
  }
  .mt-xxl-n14 {
    margin-top: -6rem !important;
  }
  .mt-xxl-n15 {
    margin-top: -6.5rem !important;
  }
  .mt-xxl-n16 {
    margin-top: -7rem !important;
  }
  .mt-xxl-n17 {
    margin-top: -7.5rem !important;
  }
  .mt-xxl-n18 {
    margin-top: -8rem !important;
  }
  .mt-xxl-n19 {
    margin-top: -8.5rem !important;
  }
  .mt-xxl-n20 {
    margin-top: -9rem !important;
  }
  .mt-xxl-n21 {
    margin-top: -9.5rem !important;
  }
  .mt-xxl-n22 {
    margin-top: -10rem !important;
  }
  .mt-xxl-n23 {
    margin-top: -12rem !important;
  }
  .me-xxl-n1 {
    margin-right: -0.25rem !important;
  }
  .me-xxl-n2 {
    margin-right: -0.5rem !important;
  }
  .me-xxl-n3 {
    margin-right: -1rem !important;
  }
  .me-xxl-n4 {
    margin-right: -1.25rem !important;
  }
  .me-xxl-n5 {
    margin-right: -1.5rem !important;
  }
  .me-xxl-n6 {
    margin-right: -2rem !important;
  }
  .me-xxl-n7 {
    margin-right: -2.5rem !important;
  }
  .me-xxl-n8 {
    margin-right: -3rem !important;
  }
  .me-xxl-n9 {
    margin-right: -3.5rem !important;
  }
  .me-xxl-n10 {
    margin-right: -4rem !important;
  }
  .me-xxl-n11 {
    margin-right: -4.5rem !important;
  }
  .me-xxl-n12 {
    margin-right: -5rem !important;
  }
  .me-xxl-n13 {
    margin-right: -5.5rem !important;
  }
  .me-xxl-n14 {
    margin-right: -6rem !important;
  }
  .me-xxl-n15 {
    margin-right: -6.5rem !important;
  }
  .me-xxl-n16 {
    margin-right: -7rem !important;
  }
  .me-xxl-n17 {
    margin-right: -7.5rem !important;
  }
  .me-xxl-n18 {
    margin-right: -8rem !important;
  }
  .me-xxl-n19 {
    margin-right: -8.5rem !important;
  }
  .me-xxl-n20 {
    margin-right: -9rem !important;
  }
  .me-xxl-n21 {
    margin-right: -9.5rem !important;
  }
  .me-xxl-n22 {
    margin-right: -10rem !important;
  }
  .me-xxl-n23 {
    margin-right: -12rem !important;
  }
  .mb-xxl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-xxl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-xxl-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-xxl-n4 {
    margin-bottom: -1.25rem !important;
  }
  .mb-xxl-n5 {
    margin-bottom: -1.5rem !important;
  }
  .mb-xxl-n6 {
    margin-bottom: -2rem !important;
  }
  .mb-xxl-n7 {
    margin-bottom: -2.5rem !important;
  }
  .mb-xxl-n8 {
    margin-bottom: -3rem !important;
  }
  .mb-xxl-n9 {
    margin-bottom: -3.5rem !important;
  }
  .mb-xxl-n10 {
    margin-bottom: -4rem !important;
  }
  .mb-xxl-n11 {
    margin-bottom: -4.5rem !important;
  }
  .mb-xxl-n12 {
    margin-bottom: -5rem !important;
  }
  .mb-xxl-n13 {
    margin-bottom: -5.5rem !important;
  }
  .mb-xxl-n14 {
    margin-bottom: -6rem !important;
  }
  .mb-xxl-n15 {
    margin-bottom: -6.5rem !important;
  }
  .mb-xxl-n16 {
    margin-bottom: -7rem !important;
  }
  .mb-xxl-n17 {
    margin-bottom: -7.5rem !important;
  }
  .mb-xxl-n18 {
    margin-bottom: -8rem !important;
  }
  .mb-xxl-n19 {
    margin-bottom: -8.5rem !important;
  }
  .mb-xxl-n20 {
    margin-bottom: -9rem !important;
  }
  .mb-xxl-n21 {
    margin-bottom: -9.5rem !important;
  }
  .mb-xxl-n22 {
    margin-bottom: -10rem !important;
  }
  .mb-xxl-n23 {
    margin-bottom: -12rem !important;
  }
  .ms-xxl-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-xxl-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-xxl-n3 {
    margin-left: -1rem !important;
  }
  .ms-xxl-n4 {
    margin-left: -1.25rem !important;
  }
  .ms-xxl-n5 {
    margin-left: -1.5rem !important;
  }
  .ms-xxl-n6 {
    margin-left: -2rem !important;
  }
  .ms-xxl-n7 {
    margin-left: -2.5rem !important;
  }
  .ms-xxl-n8 {
    margin-left: -3rem !important;
  }
  .ms-xxl-n9 {
    margin-left: -3.5rem !important;
  }
  .ms-xxl-n10 {
    margin-left: -4rem !important;
  }
  .ms-xxl-n11 {
    margin-left: -4.5rem !important;
  }
  .ms-xxl-n12 {
    margin-left: -5rem !important;
  }
  .ms-xxl-n13 {
    margin-left: -5.5rem !important;
  }
  .ms-xxl-n14 {
    margin-left: -6rem !important;
  }
  .ms-xxl-n15 {
    margin-left: -6.5rem !important;
  }
  .ms-xxl-n16 {
    margin-left: -7rem !important;
  }
  .ms-xxl-n17 {
    margin-left: -7.5rem !important;
  }
  .ms-xxl-n18 {
    margin-left: -8rem !important;
  }
  .ms-xxl-n19 {
    margin-left: -8.5rem !important;
  }
  .ms-xxl-n20 {
    margin-left: -9rem !important;
  }
  .ms-xxl-n21 {
    margin-left: -9.5rem !important;
  }
  .ms-xxl-n22 {
    margin-left: -10rem !important;
  }
  .ms-xxl-n23 {
    margin-left: -12rem !important;
  }
  .p-xxl-0 {
    padding: 0 !important;
  }
  .p-xxl-1 {
    padding: 0.25rem !important;
  }
  .p-xxl-2 {
    padding: 0.5rem !important;
  }
  .p-xxl-3 {
    padding: 1rem !important;
  }
  .p-xxl-4 {
    padding: 1.25rem !important;
  }
  .p-xxl-5 {
    padding: 1.5rem !important;
  }
  .p-xxl-6 {
    padding: 2rem !important;
  }
  .p-xxl-7 {
    padding: 2.5rem !important;
  }
  .p-xxl-8 {
    padding: 3rem !important;
  }
  .p-xxl-9 {
    padding: 3.5rem !important;
  }
  .p-xxl-10 {
    padding: 4rem !important;
  }
  .p-xxl-11 {
    padding: 4.5rem !important;
  }
  .p-xxl-12 {
    padding: 5rem !important;
  }
  .p-xxl-13 {
    padding: 5.5rem !important;
  }
  .p-xxl-14 {
    padding: 6rem !important;
  }
  .p-xxl-15 {
    padding: 6.5rem !important;
  }
  .p-xxl-16 {
    padding: 7rem !important;
  }
  .p-xxl-17 {
    padding: 7.5rem !important;
  }
  .p-xxl-18 {
    padding: 8rem !important;
  }
  .p-xxl-19 {
    padding: 8.5rem !important;
  }
  .p-xxl-20 {
    padding: 9rem !important;
  }
  .p-xxl-21 {
    padding: 9.5rem !important;
  }
  .p-xxl-22 {
    padding: 10rem !important;
  }
  .p-xxl-23 {
    padding: 12rem !important;
  }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xxl-4 {
    padding-right: 1.25rem !important;
    padding-left: 1.25rem !important;
  }
  .px-xxl-5 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xxl-6 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-xxl-7 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-xxl-8 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-xxl-9 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-xxl-10 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-xxl-11 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-xxl-12 {
    padding-right: 5rem !important;
    padding-left: 5rem !important;
  }
  .px-xxl-13 {
    padding-right: 5.5rem !important;
    padding-left: 5.5rem !important;
  }
  .px-xxl-14 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-xxl-15 {
    padding-right: 6.5rem !important;
    padding-left: 6.5rem !important;
  }
  .px-xxl-16 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-xxl-17 {
    padding-right: 7.5rem !important;
    padding-left: 7.5rem !important;
  }
  .px-xxl-18 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-xxl-19 {
    padding-right: 8.5rem !important;
    padding-left: 8.5rem !important;
  }
  .px-xxl-20 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-xxl-21 {
    padding-right: 9.5rem !important;
    padding-left: 9.5rem !important;
  }
  .px-xxl-22 {
    padding-right: 10rem !important;
    padding-left: 10rem !important;
  }
  .px-xxl-23 {
    padding-right: 12rem !important;
    padding-left: 12rem !important;
  }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xxl-4 {
    padding-top: 1.25rem !important;
    padding-bottom: 1.25rem !important;
  }
  .py-xxl-5 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xxl-6 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-xxl-7 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-xxl-8 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-xxl-9 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-xxl-10 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-xxl-11 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-xxl-12 {
    padding-top: 5rem !important;
    padding-bottom: 5rem !important;
  }
  .py-xxl-13 {
    padding-top: 5.5rem !important;
    padding-bottom: 5.5rem !important;
  }
  .py-xxl-14 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-xxl-15 {
    padding-top: 6.5rem !important;
    padding-bottom: 6.5rem !important;
  }
  .py-xxl-16 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-xxl-17 {
    padding-top: 7.5rem !important;
    padding-bottom: 7.5rem !important;
  }
  .py-xxl-18 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-xxl-19 {
    padding-top: 8.5rem !important;
    padding-bottom: 8.5rem !important;
  }
  .py-xxl-20 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-xxl-21 {
    padding-top: 9.5rem !important;
    padding-bottom: 9.5rem !important;
  }
  .py-xxl-22 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }
  .py-xxl-23 {
    padding-top: 12rem !important;
    padding-bottom: 12rem !important;
  }
  .pt-xxl-0 {
    padding-top: 0 !important;
  }
  .pt-xxl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xxl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xxl-3 {
    padding-top: 1rem !important;
  }
  .pt-xxl-4 {
    padding-top: 1.25rem !important;
  }
  .pt-xxl-5 {
    padding-top: 1.5rem !important;
  }
  .pt-xxl-6 {
    padding-top: 2rem !important;
  }
  .pt-xxl-7 {
    padding-top: 2.5rem !important;
  }
  .pt-xxl-8 {
    padding-top: 3rem !important;
  }
  .pt-xxl-9 {
    padding-top: 3.5rem !important;
  }
  .pt-xxl-10 {
    padding-top: 4rem !important;
  }
  .pt-xxl-11 {
    padding-top: 4.5rem !important;
  }
  .pt-xxl-12 {
    padding-top: 5rem !important;
  }
  .pt-xxl-13 {
    padding-top: 5.5rem !important;
  }
  .pt-xxl-14 {
    padding-top: 6rem !important;
  }
  .pt-xxl-15 {
    padding-top: 6.5rem !important;
  }
  .pt-xxl-16 {
    padding-top: 7rem !important;
  }
  .pt-xxl-17 {
    padding-top: 7.5rem !important;
  }
  .pt-xxl-18 {
    padding-top: 8rem !important;
  }
  .pt-xxl-19 {
    padding-top: 8.5rem !important;
  }
  .pt-xxl-20 {
    padding-top: 9rem !important;
  }
  .pt-xxl-21 {
    padding-top: 9.5rem !important;
  }
  .pt-xxl-22 {
    padding-top: 10rem !important;
  }
  .pt-xxl-23 {
    padding-top: 12rem !important;
  }
  .pe-xxl-0 {
    padding-right: 0 !important;
  }
  .pe-xxl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xxl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xxl-3 {
    padding-right: 1rem !important;
  }
  .pe-xxl-4 {
    padding-right: 1.25rem !important;
  }
  .pe-xxl-5 {
    padding-right: 1.5rem !important;
  }
  .pe-xxl-6 {
    padding-right: 2rem !important;
  }
  .pe-xxl-7 {
    padding-right: 2.5rem !important;
  }
  .pe-xxl-8 {
    padding-right: 3rem !important;
  }
  .pe-xxl-9 {
    padding-right: 3.5rem !important;
  }
  .pe-xxl-10 {
    padding-right: 4rem !important;
  }
  .pe-xxl-11 {
    padding-right: 4.5rem !important;
  }
  .pe-xxl-12 {
    padding-right: 5rem !important;
  }
  .pe-xxl-13 {
    padding-right: 5.5rem !important;
  }
  .pe-xxl-14 {
    padding-right: 6rem !important;
  }
  .pe-xxl-15 {
    padding-right: 6.5rem !important;
  }
  .pe-xxl-16 {
    padding-right: 7rem !important;
  }
  .pe-xxl-17 {
    padding-right: 7.5rem !important;
  }
  .pe-xxl-18 {
    padding-right: 8rem !important;
  }
  .pe-xxl-19 {
    padding-right: 8.5rem !important;
  }
  .pe-xxl-20 {
    padding-right: 9rem !important;
  }
  .pe-xxl-21 {
    padding-right: 9.5rem !important;
  }
  .pe-xxl-22 {
    padding-right: 10rem !important;
  }
  .pe-xxl-23 {
    padding-right: 12rem !important;
  }
  .pb-xxl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xxl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xxl-4 {
    padding-bottom: 1.25rem !important;
  }
  .pb-xxl-5 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xxl-6 {
    padding-bottom: 2rem !important;
  }
  .pb-xxl-7 {
    padding-bottom: 2.5rem !important;
  }
  .pb-xxl-8 {
    padding-bottom: 3rem !important;
  }
  .pb-xxl-9 {
    padding-bottom: 3.5rem !important;
  }
  .pb-xxl-10 {
    padding-bottom: 4rem !important;
  }
  .pb-xxl-11 {
    padding-bottom: 4.5rem !important;
  }
  .pb-xxl-12 {
    padding-bottom: 5rem !important;
  }
  .pb-xxl-13 {
    padding-bottom: 5.5rem !important;
  }
  .pb-xxl-14 {
    padding-bottom: 6rem !important;
  }
  .pb-xxl-15 {
    padding-bottom: 6.5rem !important;
  }
  .pb-xxl-16 {
    padding-bottom: 7rem !important;
  }
  .pb-xxl-17 {
    padding-bottom: 7.5rem !important;
  }
  .pb-xxl-18 {
    padding-bottom: 8rem !important;
  }
  .pb-xxl-19 {
    padding-bottom: 8.5rem !important;
  }
  .pb-xxl-20 {
    padding-bottom: 9rem !important;
  }
  .pb-xxl-21 {
    padding-bottom: 9.5rem !important;
  }
  .pb-xxl-22 {
    padding-bottom: 10rem !important;
  }
  .pb-xxl-23 {
    padding-bottom: 12rem !important;
  }
  .ps-xxl-0 {
    padding-left: 0 !important;
  }
  .ps-xxl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xxl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xxl-3 {
    padding-left: 1rem !important;
  }
  .ps-xxl-4 {
    padding-left: 1.25rem !important;
  }
  .ps-xxl-5 {
    padding-left: 1.5rem !important;
  }
  .ps-xxl-6 {
    padding-left: 2rem !important;
  }
  .ps-xxl-7 {
    padding-left: 2.5rem !important;
  }
  .ps-xxl-8 {
    padding-left: 3rem !important;
  }
  .ps-xxl-9 {
    padding-left: 3.5rem !important;
  }
  .ps-xxl-10 {
    padding-left: 4rem !important;
  }
  .ps-xxl-11 {
    padding-left: 4.5rem !important;
  }
  .ps-xxl-12 {
    padding-left: 5rem !important;
  }
  .ps-xxl-13 {
    padding-left: 5.5rem !important;
  }
  .ps-xxl-14 {
    padding-left: 6rem !important;
  }
  .ps-xxl-15 {
    padding-left: 6.5rem !important;
  }
  .ps-xxl-16 {
    padding-left: 7rem !important;
  }
  .ps-xxl-17 {
    padding-left: 7.5rem !important;
  }
  .ps-xxl-18 {
    padding-left: 8rem !important;
  }
  .ps-xxl-19 {
    padding-left: 8.5rem !important;
  }
  .ps-xxl-20 {
    padding-left: 9rem !important;
  }
  .ps-xxl-21 {
    padding-left: 9.5rem !important;
  }
  .ps-xxl-22 {
    padding-left: 10rem !important;
  }
  .ps-xxl-23 {
    padding-left: 12rem !important;
  }
  .text-xxl-start {
    text-align: left !important;
  }
  .text-xxl-end {
    text-align: right !important;
  }
  .text-xxl-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .fs-1 {
    font-size: 2.25rem !important;
  }
  .fs-2 {
    font-size: 1.875rem !important;
  }
  .fs-3 {
    font-size: 1.5rem !important;
  }
}
@media print {
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-grid {
    display: grid !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
  .d-print-none {
    display: none !important;
  }
}
.navbar-vertical {
  margin-left: -17rem;
  display: block;
  position: fixed;
  top: 0;
  bottom: 0;
  width: 100%;
  max-width: 250px;
  padding: 0rem;
  background-color: #212B36;
  border-right: 1px solid #212B36;
  transition: margin 0.25s ease-out;
}
.navbar-vertical .slimScrollDiv {
  height: 100% !important;
  overflow-y: auto;
}
.navbar-vertical .nav-scroller {
  height: 100% !important;
  overflow-y: auto;
}
.navbar-vertical .navbar-brand {
  padding: 1rem 1.5rem 1.5rem;
  margin-right: 0px;
  display: block;
}
.navbar-vertical .navbar-brand img {
  height: 1.875rem;
}
.navbar-vertical .navbar-heading {
  color: #454F5B;
  padding: 1rem 1.5rem;
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 0.08rem;
  font-weight: 700;
}
.navbar-vertical .navbar-nav .nav-item .nav-link {
  padding: 0.5rem 1.5rem;
  display: flex;
  align-items: center;
  color: #919EAB;
  font-weight: 500;
  line-height: 1.8;
  -webkit-transition: all 0.5s;
  white-space: nowrap;
  transition: all 0.5s;
}
.navbar-vertical .navbar-nav .nav-item .nav-link:hover {
  color: #F4F6F8;
}
.navbar-vertical .navbar-nav .nav-item .nav-link:hover .nav-icon {
  color: #F4F6F8;
  opacity: 1;
}
.navbar-vertical .navbar-nav .nav-item .nav-link.active {
  color: #F4F6F8;
}
.navbar-vertical .navbar-nav .nav-item .nav-link.active .nav-icon {
  color: #F4F6F8;
  opacity: 1;
}
.navbar-vertical .navbar-nav .nav-item .nav-link[data-bs-toggle=collapse] {
  position: relative;
}
.navbar-vertical .navbar-nav .nav-item .nav-link[data-bs-toggle=collapse]:after {
  display: block;
  content: "";
  background: url(../fonts/feather-icons/icons/chevron-down.svg);
  font-family: Feather;
  margin-left: auto;
  transition: 0.5s ease;
  position: absolute;
  right: 1.5rem;
  height: 24px;
  width: 24px;
  -webkit-filter: brightness(0) invert(1);
  filter: brightness(0) invert(1);
  -webkit-transform: scale(0.7);
          transform: scale(0.7);
}
.navbar-vertical .navbar-nav .nav-icon {
  opacity: 0.6;
  font-size: 0.875rem;
  transition: all 0.5s;
}
.navbar-vertical .navbar-nav .sub-nav-icon {
  font-size: 0.35rem;
  margin-right: 0.5rem;
}
.navbar-vertical .navbar-nav .nav .nav-item .nav-link {
  color: #919EAB;
  padding: 0.25rem 3rem;
}
.navbar-vertical .navbar-nav .nav .nav-item .nav-link:hover {
  color: #fff;
}
.navbar-vertical .navbar-nav .nav .nav-item .nav-link.active {
  color: #fff;
}
.navbar-vertical .navbar-nav .nav .nav-item .nav .nav-item .nav-link {
  color: #919EAB;
  padding: 0.25rem 3.5rem;
}
.navbar-vertical .navbar-nav .nav .nav-item .nav .nav-item .nav-link:hover {
  color: #fff;
}
.navbar-vertical .navbar-nav .nav .nav-item .nav .nav-item .nav-link.active {
  color: #fff;
}
.navbar-vertical .navbar-nav .nav .nav-item .nav .nav-item .nav .nav-item .nav-link {
  color: #919EAB;
  padding: 0.25rem 4.2rem;
}
.navbar-vertical .navbar-nav .nav .nav-item .nav .nav-item .nav .nav-item .nav-link:hover {
  color: #fff;
}
.navbar-vertical .navbar-nav .nav .nav-item .nav .nav-item .nav .nav-item .nav-link.active {
  color: #fff;
}
.collapse.in {
  display: block;
}
.navbar-classic {
  background-color: #fff;
  box-shadow: 0px 2px 4px rgba(0, 0, 20, 0.08), 0px 1px 2px rgba(0, 0, 20, 0.08);
}
.navbar-classic .navbar-right-wrap .list-group-item {
  padding: 1rem 1.25rem;
}
.navbar-classic .nav-badge {
  position: absolute;
  top: -9px;
  right: 3px;
}
@media (min-width: 1200px) {
  .navbar-classic .dropdown-menu-end {
    right: 0;
    left: auto;
  }
  .navbar-classic .dropdown-menu-start {
    right: auto;
    left: 0;
  }
  .navbar-classic .dropdown-menu {
    display: block;
    visibility: hidden;
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
    transition: all 0.3s ease-in;
  }
  .navbar-classic .dropdown:hover > .dropdown-menu {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
    opacity: 1;
    visibility: visible;
  }
  .navbar-classic .dropdown-submenu:hover > .dropdown-menu {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
    opacity: 1;
    visibility: visible;
  }
}
@media (max-width: 992px) {
  .navbar-classic .navbar-nav .dropdown-menu {
    margin: 0px;
  }
  .navbar-classic .navbar-nav .dropdown-menu .dropdown-submenu .dropdown-menu {
    box-shadow: none;
    margin: 0;
  }
  .navbar-classic .nav-top-wrap {
    flex-direction: row;
  }
  .navbar-classic .nav-top-wrap .dropdown {
    position: static;
  }
  .navbar-classic .nav-top-wrap .dropdown-menu {
    position: absolute;
    margin: 0.25rem 0.75rem !important;
  }
  .navbar-classic .nav-top-wrap .dropdown-menu .dropdown-submenu .dropdown-menu {
    position: relative;
    top: -7px !important;
    padding: 0px !important;
  }
}
.header .navbar {
  padding: 0.625rem 1.5rem;
}
.header .navbar #nav-toggle {
  font-size: 20px;
  color: #454F5B;
  line-height: 0.5;
}
@media (max-width: 576px) {
  .header .navbar .navbar-nav {
    flex-direction: row;
  }
}
@media (min-width: 576px) and (max-width: 767.98px) {
  .header .navbar .navbar-nav {
    flex-direction: row;
  }
}
@media (min-width: 768px) and (max-width: 991.98px) {
  .header .navbar .navbar-nav {
    flex-direction: row;
  }
}
#db-wrapper {
  overflow-x: hidden;
  display: flex;
}
#page-content {
  min-height: 100vh;
  min-width: 100vw;
  margin-left: 15.625rem;
  transition: margin 0.25s ease-out;
}
#db-wrapper.toggled .navbar-vertical {
  margin-left: 0;
}
#db-wrapper.toggled #page-content {
  margin-left: 0;
}
#db-wrapper.toggled #page-content .inner-wrapper-sticky {
  left: 20px !important;
}
#db-wrapper.toggled #page-content .inner-wrapper-sticky .setting-nav {
  width: 354px;
}
@media (max-width: 1024px) {
  #db-wrapper.toggled #page-content .inner-wrapper-sticky .setting-nav {
    width: 204px;
  }
}
@media (max-width: 576px) {
  #page-content {
    margin-left: 0rem;
  }
  #db-wrapper.toggled #page-content {
    margin-left: 15.6875rem;
  }
}
@media (min-width: 768px) {
  .navbar-vertical {
    margin-left: 0rem;
  }
  #page-content {
    min-width: 0rem;
    width: 100%;
  }
  #db-wrapper.toggled .navbar-vertical {
    margin-left: -16rem;
  }
}
@media (min-width: 576px) and (max-width: 767.98px) {
  #page-content {
    margin-left: 0rem;
  }
  #db-wrapper.toggled #page-content {
    margin-left: 15.6875rem;
  }
}
.nav-line-bottom {
  border-bottom: 1px solid #F4F6F8;
}
.nav-line-bottom .nav-item .nav-link {
  color: #637381;
  border-radius: 0px;
  margin-bottom: -1px;
  padding: 0.875rem 1.25rem;
  font-weight: 500;
}
@media (max-width: 576px) {
  .nav-line-bottom .nav-item .nav-link {
    padding: 0.8rem;
  }
}
.nav-line-bottom .nav-item .nav-link.active {
  color: #624BFF;
  background-color: transparent;
  border-bottom: 1px solid #624BFF;
}
@media (max-width: 576px) {
  .nav-line-bottom .nav-item .nav-link.active {
    padding: 0.747rem;
  }
}
.nav-line-bottom .nav-item .nav-link:hover {
  color: #624BFF;
  background-color: transparent;
  border-bottom: 1px solid #624BFF;
}
.nav-line-bottom .nav-item .nav-link .badge {
  line-height: 1.4;
}
@media (max-width: 576px) {
  .nav-line-bottom {
    overflow-x: scroll;
    flex-wrap: nowrap;
    overflow-y: hidden;
  }
  .nav-line-bottom::-webkit-scrollbar {
    display: none;
  }
}
.nav-lb-tab {
  border-bottom: 1px solid #DFE3E8;
}
@media (max-width: 576px) {
  .nav-lb-tab {
    overflow-x: scroll;
    flex-wrap: nowrap;
    overflow-y: hidden;
  }
  .nav-lb-tab::-webkit-scrollbar {
    display: none;
  }
}
.nav-lb-tab .nav-item {
  margin: 0rem 1.5rem;
}
.nav-lb-tab .nav-item .nav-link {
  border-bottom: 2px solid transparent;
  border-radius: 0px;
  padding: 16px 0px;
  margin-bottom: -1px;
  font-weight: 500;
  color: #637381;
  white-space: nowrap;
}
.nav-lb-tab .nav-item .nav-link.active {
  background-color: transparent;
  border-bottom: 2px solid #624BFF;
  color: #624BFF;
}
.nav-lb-tab .nav-item .nav-link:hover {
  background-color: transparent;
  border-bottom: 2px solid #624BFF;
  color: #624BFF;
}
.nav-lt-tab {
  border-top: 1px solid #DFE3E8;
}
@media (max-width: 768px) {
  .nav-lt-tab {
    overflow-x: scroll;
    flex-wrap: nowrap;
    overflow-y: hidden;
  }
  .nav-lt-tab::-webkit-scrollbar {
    display: none;
  }
}
.nav-lt-tab .nav-item {
  margin: 0rem 1rem;
  margin-top: -0.0625rem;
}
.nav-lt-tab .nav-item .nav-link {
  border-top: 2px solid transparent;
  border-radius: 0px;
  padding: 1rem 0rem;
  font-weight: 500;
  color: #637381;
}
.nav-lt-tab .nav-item .nav-link.active {
  background-color: transparent;
  border-top: 2px solid #624BFF;
  color: #624BFF;
}
.nav-lt-tab .nav-item .nav-link:hover {
  background-color: transparent;
  border-top: 2px solid #624BFF;
  color: #624BFF;
}
.nav-email-list .nav-item .nav-link {
  color: #637381;
  padding: 6px 10px;
  border-radius: 8px;
  margin-bottom: 4px;
  font-weight: 500;
}
.nav-email-list .nav-item .nav-link:hover {
  background-color: #F9FAFB;
  color: #624BFF;
}
.nav-email-list .nav-item .nav-link.active {
  background-color: #F9FAFB;
  color: #624BFF;
}
.nav-email-list .nav-text {
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 500;
}
.scrollspy-example {
  position: relative;
  height: 12.5rem;
  margin-top: 0.5rem;
  overflow: auto;
}
.scrollspy-example-2 {
  position: relative;
  height: 21.875rem;
  overflow: auto;
}
body {
  -webkit-font-smoothing: antialiased;
}
.docs-header .docs-header-btn {
  display: flex;
  align-items: center;
}
.docs-header .navbar {
  margin-left: 15.625rem;
  padding: 0.5rem 0.625rem;
  border-bottom: 1px solid #F4F6F8;
}
@media (max-width: 576px) {
  .docs-header .navbar {
    margin-left: 0rem;
  }
}
.docs-header .navbar .dropdown-menu {
  margin: 0rem;
  border: 1px solid #efeef1;
}
.docs-header .navbar .navbar-nav .nav-item .nav-link {
  font-size: 1rem;
  line-height: 1.75rem;
  padding: 0.875rem;
  margin-bottom: 0rem;
  color: #454F5B;
}
.docs-header .navbar .navbar-nav .nav-item .nav-link:hover {
  color: #000;
}
.docs-main-wrapper {
  min-height: 100%;
  position: relative;
}
.docs-wrapper {
  position: relative;
  left: 0;
  margin-left: 15.625rem;
  background-color: #F9FAFB;
  top: 35px;
}
.docs-content {
  margin: 4.0625rem 0rem;
}
.docs-content-head {
  padding: 4.375rem 0rem;
}
.docs-example-border-utils [class^=border] {
  display: inline-block;
  width: 5rem;
  height: 5rem;
  margin: 0.25rem;
  background-color: #f5f4f8;
}
.gd-example-modal.modal {
  position: relative;
  top: auto;
  right: auto;
  bottom: auto;
  left: auto;
  z-index: 1;
  display: block;
}
.docs-example-border-utils-0 [class^=border] {
  border: 1px solid #efeef1;
}
.color-swatch {
  margin-bottom: 1.875rem;
}
.color-swatch-header {
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
  height: 5.5rem;
}
.color-swatch-body {
  border: 1px solid #F4F6F8;
  background-color: #fff;
  border-bottom-left-radius: 0.5rem;
  border-bottom-right-radius: 0.5rem;
  padding: 0.625rem 1rem;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.color-swatch-body-label {
  font-size: 1rem;
  line-height: 1.625rem;
  margin-bottom: 0.1875rem;
}
.color-swatch-body-value {
  font-size: 0.875rem;
  line-height: 1.375rem;
  margin-bottom: 0rem;
}
.setting-nav {
  position: absolute;
  top: 60px;
  width: 95%;
  overflow-y: auto;
}
@media (max-width: 768px) {
  .setting-nav {
    position: relative;
  }
}
.setting-nav a {
  font-size: 14px;
  color: #161C24;
  font-weight: 500;
  display: block;
  background-color: #fff;
  line-height: 26px;
  text-decoration: none;
  transition: 0.5s ease;
}
.setting-nav a:hover {
  color: #624BFF;
}
.setting-nav a.active {
  display: block;
  color: #624BFF;
  transition: 0.5s ease;
}
.ratio {
  display: inline-block;
  width: 10rem;
  color: #637381;
  background-color: #F9FAFB;
  border: 1px solid #F4F6F8;
}
.card {
  box-shadow: 0px 2px 4px rgba(0, 0, 20, 0.08), 0px 1px 2px rgba(0, 0, 20, 0.08);
  border: 0px;
  border-radius: 0.5rem;
}
.avatar {
  position: relative;
  display: inline-block;
  width: 3rem;
  height: 3rem;
}
.avatar-xs {
  width: 1.5rem;
  height: 1.5rem;
}
.avatar-sm {
  width: 2rem;
  height: 2rem;
}
.avatar-md {
  width: 2.5rem;
  height: 2.5rem;
}
.avatar-lg {
  width: 3.5rem;
  height: 3.5rem;
}
.avatar-xl {
  width: 5rem;
  height: 5rem;
}
.avatar-xxl {
  width: 7.5rem;
  height: 7.5rem;
}
.avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.avatar-indicators {
  position: relative;
}
.avatar-indicators:before {
  content: "";
  position: absolute;
  bottom: 0px;
  right: 5%;
  width: 30%;
  height: 30%;
  border-radius: 50%;
  border: 2px solid #fff;
  display: table;
}
.avatar-xxl.avatar-indicators:before {
  bottom: 5px;
  right: 17%;
  width: 16%;
  height: 16%;
}
.avatar-offline:before {
  background-color: #C4CDD5;
}
.avatar-online:before {
  background-color: #198754;
}
.avatar-away:before {
  background-color: #ffc107;
}
.avatar-busy:before {
  background-color: #dc3545;
}
.avatar-info:before {
  background-color: #0dcaf0;
}
.avatar-initials {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  pointer-events: none;
  text-transform: uppercase;
}
.avatar-primary .avatar-initials {
  color: #fff;
  background-color: #624BFF;
}
.avatar-secondary .avatar-initials {
  color: #fff;
  background-color: #637381;
}
.avatar-success .avatar-initials {
  color: #fff;
  background-color: #198754;
}
.avatar-warning .avatar-initials {
  color: #fff;
  background-color: #ffc107;
}
.avatar-info .avatar-initials {
  color: #fff;
  background-color: #0dcaf0;
}
.avatar-danger .avatar-initials {
  color: #fff;
  background-color: #dc3545;
}
.avatar-light .avatar-initials {
  color: #fff;
  background-color: #F9FAFB;
}
.avatar-dark .avatar-initials {
  color: #fff;
  background-color: #212B36;
}
.avatar-group .avatar + .avatar {
  margin-left: -1.2rem;
}
.avatar-group .avatar:hover {
  z-index: 2;
}
.avatar-group img,
.avatar-group .avatar .avatar-initials {
  border: 2px solid #fff;
}
.btn-outline-white {
  border-color: #DFE3E8;
  color: #637381;
}
.btn-outline-white:hover, .btn-outline-white:focus {
  background-color: #F9FAFB;
  border-color: #C4CDD5;
  color: #637381;
}
.btn-outline-white.active {
  background-color: #F9FAFB;
  border-color: #C4CDD5;
  color: #637381;
}
.btn-icon {
  position: relative;
  display: inline-flex;
  flex-shrink: 0;
  justify-content: center;
  align-items: center;
  font-size: 0.92969rem;
  font-weight: 400;
  width: 2.5rem;
  height: 2.5rem;
  padding: 0;
}
.btn-icon.btn-xs {
  font-size: 0.75rem;
  width: 1.53125rem;
  height: 1.53125rem;
}
.btn-icon.btn-sm, .btn-group-sm > .btn-icon.btn {
  font-size: 0.875rem;
  width: 2.1875rem;
  height: 2.1875rem;
}
.btn-icon.btn-lg, .btn-group-lg > .btn-icon.btn {
  font-size: 1rem;
  width: 3.36875rem;
  height: 3.36875rem;
}
.color-facebook {
  color: #4267B2;
}
.color-twitter {
  color: #1DA1F2;
}
.color-github {
  color: #000000;
}
.color-google {
  color: #db3236;
}
.color-slack {
  color: #ce375c;
}
.color-linkedin {
  color: #0077b5;
}
.dropdown-menu {
  font-size: 0.875rem;
  line-height: 1.375rem;
  color: #454F5B;
  border: none;
  box-shadow: 0px 0px 1px rgba(60, 66, 87, 0.05), 0px 3px 6px rgba(60, 66, 87, 0.1), 0px 9px 24px rgba(60, 66, 87, 0.2);
  border-radius: 0.5rem;
  z-index: 1040;
}
.dropdown-header {
  color: #919EAB;
  padding: 0.25rem 1.2rem;
  margin-bottom: 0.2rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 0.6875rem;
  font-weight: 500;
}
.dropdown-text {
  padding: 0.25rem 1.2rem;
  color: #919EAB;
  font-size: 0.75rem;
  line-height: 1.4;
}
.dropdown-item {
  font-size: 0.875rem;
  line-height: 28px;
  font-weight: 500;
  color: #161C24;
  padding: 0.125rem 1.2rem;
}
.dropdown-item:hover {
  color: #624BFF;
  text-decoration: none;
  background-color: #F9FAFB;
  border-radius: 0rem;
}
.dropdown-item.active {
  color: #624BFF;
  text-decoration: none;
  background-color: #F9FAFB;
}
.dropdown-item:last-child {
  border-bottom: 0rem;
}
.dropdown-item:focus {
  color: #624BFF;
  text-decoration: none;
  background-color: #DFE3E8;
  border-radius: 0rem;
  color: #624BFF;
  text-decoration: none;
  background-color: #F9FAFB;
  border-radius: 0rem;
}
.dropdown-item:focus .dropdown-toggle::after {
  color: #624BFF;
}
.dropdown-item:focus:hover {
  color: #624BFF;
  text-decoration: none;
  background-color: #F9FAFB;
  border-radius: 0rem;
}
.dropdown-item:focus:active {
  color: #000;
  text-decoration: none;
  background-color: #F9FAFB;
  border-radius: 0.25rem;
}
.dropdown-item:hover.dropdown-toggle::after {
  color: #624BFF;
}
.dropdown-item:hover {
  color: #624BFF;
  text-decoration: none;
  background-color: #F9FAFB;
  border-radius: 0px;
}
.dropdown-menu-xs {
  min-width: 8rem !important;
  border-radius: 0.5rem;
}
.dropdown-menu-md {
  min-width: 17rem !important;
  border-radius: 0.5rem;
}
.dropdown-menu-lg {
  min-width: 22rem !important;
  border-radius: 0.5rem;
}
.dropdown-menu-xl {
  min-width: 24rem !important;
  border-radius: 0.5rem;
}
.dropdown-toggle::after {
  margin-left: 0.255em;
  vertical-align: 0.255em;
  font-family: "Material Design Icons" !important;
  content: "\f0140";
  border-top: 0rem;
  border-right: 0rem;
  border-bottom: 0;
  border-left: 0rem;
  float: right;
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  font-family: "Material Design Icons" !important;
  content: "\f0143";
  border-top: 0rem;
  border-right: 0rem;
  border-bottom: 0;
  border-left: 0rem;
}
.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  font-family: "Material Design Icons" !important;
  content: "\f0142";
  border-top: 0rem;
  border-right: 0rem;
  border-bottom: 0;
  border-left: 0rem;
}
.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  font-family: "Material Design Icons" !important;
  content: "\f0141";
  border-top: 0rem;
  border-right: 0rem;
  border-bottom: 0;
  border-left: 0rem;
}
.dropdown-item-icon {
  display: inline-block;
  opacity: 0.7;
  font-size: 1rem;
  width: 1.5rem;
  color: #637381;
}
@media (min-width: 990px) {
  .dropstart-lg {
    position: relative;
  }
  .dropstart-lg .dropdown-menu {
    top: 0;
    right: 100%;
    margin-top: 0;
    margin-right: 0.125rem;
  }
  .dropstart-toggle-none.dropstart .dropdown-toggle::before {
    display: none;
  }
}
.dropdown-toggle-none .dropdown-toggle::before {
  display: none;
}
.dropdown-animation.dropdown-submenu .dropdown-menu {
  top: 0;
  right: 100%;
  margin-top: 0;
  margin-right: 0.125rem;
}
.dropdown-animation.dropdown-submenu .dropdown-menu {
  display: block;
  visibility: hidden;
  opacity: 0;
  -webkit-transform: translateY(20px);
  transform: translateY(20px);
  transition: all 0.3s ease-in;
}
.dropdown-animation.dropdown-submenu:hover > .dropdown-menu {
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
  opacity: 1;
  visibility: visible;
}
.form-control-flush {
  border-top: 0px;
  border-left: 0px;
  border-right: 0px;
  padding-left: 0px;
  border-radius: 0px;
}
.form-control-flush:focus {
  color: #495057;
  background-color: #fff;
  border-bottom-color: #C4CDD5;
  outline: 0;
  box-shadow: none;
}
.badge-dot {
  font-size: 0;
  vertical-align: middle;
  padding: 0;
  border-radius: 50%;
  line-height: 1;
  height: 0.5rem;
  min-height: 0.5rem;
  width: 0.5rem;
  min-width: 0.5rem;
  display: inline-block !important;
}
.table .thead-light th {
  color: #637381;
}
.table thead th {
  font-weight: 500;
  padding: 0.75rem 1.5rem;
  text-transform: capitalize;
  font-size: 0.875rem;
  color: #637381;
}
@media (max-width: 768px) {
  .docs-content {
    padding: 3.75rem 1.25rem 8.75rem 1.25rem;
  }
}
@media (max-width: 768px) {
  .docs-nav-sidebar {
    width: 100%;
    position: relative;
    right: 0rem;
    top: 0;
  }
  .docs-nav-sidebar .navbar-toggler {
    background-color: #fff;
  }
  .docs-wrapper {
    margin-left: 0rem;
  }
  .docs-main-wrapper .main-content {
    margin-left: 0rem;
    width: auto;
  }
  .docs-content {
    padding: 0rem;
  }
}
.doc-sidebar {
  z-index: 2;
  width: 13.625rem;
  border-right: 1px solid #DFE3E8;
  position: fixed;
  height: 100%;
  overflow: auto;
}
@media (max-width: 990px) {
  .doc-sidebar {
    width: 100%;
    position: relative;
    border: 0;
    height: auto;
  }
}
@media (min-width: 990px) and (max-width: 1200px) {
  .doc-sidebar {
    width: 10rem;
  }
}
.doc-sidebar .navbar-nav {
  padding-top: 1rem;
}
.doc-sidebar .navbar-nav .navbar-header {
  margin-bottom: 0.5rem;
  padding: 0rem 1rem;
  margin-top: 2rem;
  font-size: 0.75rem;
}
.doc-sidebar .navbar-nav .navbar-header .heading {
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 600;
  color: #C4CDD5;
  margin-bottom: 0rem;
}
.doc-sidebar .navbar-nav .navbar-header span {
  color: #637381;
}
.doc-sidebar .navbar-nav .nav-item .nav-link {
  color: #212B36;
  font-size: 0.875rem;
  line-height: 1.25rem;
  padding: 0.25rem 1rem;
  font-family: "Inter", "sans-serif";
  font-weight: 500;
}
.doc-sidebar .navbar-nav .nav-item .nav-link:hover {
  color: #624BFF;
}
.doc-sidebar .navbar-nav .nav-item .nav-link.active {
  color: #624BFF;
}
.apexcharts-tooltip {
  border-radius: 0.5rem !important;
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}
.apexcharts-tooltip .apexcharts-tooltip-series-group {
  background: #fff !important;
  color: #212B36;
  padding: 3px 16px 6px 16px !important;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
  line-height: 1 !important;
}
.apexcharts-tooltip-marker {
  width: 8px !important;
  height: 8px !important;
  position: relative;
  top: 0px;
  margin-right: 6px !important;
  border-radius: 50%;
}
.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #F4F6F8 !important;
  background-color: #F9FAFB !important;
  background: #fff !important;
}
.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #fff !important;
  border-bottom: 1px solid #F4F6F8 !important;
}
.apexcharts-tooltip-title {
  padding: 8px 16px !important;
  font-size: 14px !important;
  margin-bottom: 4px;
  font-weight: 600 !important;
}
/* Code blocks */
code[class*=language-], pre[class*=language-] {
  font-family: "Inter", "sans-serif";
}
pre[class*=language-] {
  padding: 1em;
  overflow: auto;
  border-radius: 0.5rem !important;
  margin: 0;
}
:not(pre) > code[class*=language-],
pre[class*=language-] {
  background: #161C24;
}
div.code-toolbar {
  position: relative;
}
div.code-toolbar > .toolbar {
  position: absolute;
  top: 0;
  right: 0;
  transition: opacity 0.3s ease-in-out;
  opacity: 0;
  padding: 0.5rem;
}
div.code-toolbar:hover > .toolbar, div.code-toolbar:focus-within > .toolbar {
  opacity: 1;
}
div.code-toolbar > .toolbar > .toolbar-item {
  display: inline-block;
}
div.code-toolbar > .toolbar > .toolbar-item > a {
  cursor: pointer;
}
div.code-toolbar > .toolbar > .toolbar-item > button {
  background: none;
  border: 0;
  color: #212B36;
  font: inherit;
  line-height: normal;
  overflow: visible;
  padding: 0;
}
div.code-toolbar > .toolbar > .toolbar-item > a, div.code-toolbar > .toolbar > .toolbar-item > button, div.code-toolbar > .toolbar > .toolbar-item > span {
  color: #212B36;
  font-size: 0.75rem;
  padding: 0.25rem 0.5rem;
  background: #fff;
  font-weight: 600;
  border-radius: 0.25rem;
}
div.code-toolbar > .toolbar > .toolbar-item > a:hover, div.code-toolbar > .toolbar > .toolbar-item > a:focus {
  color: #212B36;
  text-decoration: none;
}
div.code-toolbar > .toolbar > .toolbar-item > button:hover, div.code-toolbar > .toolbar > .toolbar-item > button:focus {
  color: #212B36;
  text-decoration: none;
}
div.code-toolbar > .toolbar > .toolbar-item > span:hover, div.code-toolbar > .toolbar > .toolbar-item > span:focus {
  color: inherit;
  text-decoration: none;
}
/* Separate line b/c rules are thrown out if selector is invalid.
   IE11 and old Edge versions don't support :focus-within. */
.heading-permalink {
  color: transparent;
  margin-left: -2rem;
}
.heading-permalink:hover {
  color: transparent;
}
.heading-permalink::before {
  color: rgba(82, 95, 127, 0);
  content: "#";
}
.heading-permalink:hover:before {
  color: #624BFF;
}
</style>
</head>
<div class="book">
    <div class="page">
        
        <div class="subpage">
        <p class="text-right">Date: {{$order->created_at}}
        <br>To : PT. ANGKASA AKBAR TARUNA (AAT)
        <br>From : JAPAN TUNA FISHERIES CORPORATION (JTFC)
        
        </p>
        <h4 class="text-center mt-6 mb-6">CREW ARRANGEMENT REQUEST</h4>
        <div class="row">
            <p class="mb-0">Request No    : {{$order->inv}}
                <br>Ship Owner   : {{$order->shipowner}}
                <br>Ship Name    : {{$order->shipname}}
            </p>
            
            <div class="col mt-0" >
            
            <p>
                Fishing Area : {{$order->fishingarea}}
                <br>Nationaly    : {{$order->nationaly}}
            </p>
            
            
            </div>
            <div class="col">
                <p>Number of Crew Member : {{$order->member}}
            <br>Periode of Employment : {{$order->periode}} Months </p>
            </div>
        </div>
        <div class="row">
            <p style="margin-left: 25px;" class="mb-3">Estimated Date of Embarkation   : {{$order->start}}     port : {{$order->portstart}}</p>
            <p style="margin-left: 25px;" class="mb-3">Estimate Date of Disembarkation : {{$order->end}}     port : {{$order->portend}}</p>
            
            <div class="form-group mt-3">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase fs-6">No.</th>
                            <th class="text-uppercase word-wrap fs-6">Class of Crew</th>
                            <th class="text-uppercase fs-6">Age</th>
                            <th class="text-uppercase fs-6">Experience</th>
                            <th class="text-uppercase fs-6">Number</th>
                            <th class="text-uppercase fs-6">Remark</th>
                
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orderjob as $index => $job )
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $job->job }}</td>
                                <td>{{ $job->age }}</td>
                                <td>{{ $job->exp }}</td>
                                <td>{{ $job->number }}</td>
                                <td>{{ $job->remark }}</td>
                                
                            </tr>
                        @endforeach
                
                
                
                    </tbody>
                    <tfoot class="font-weight-bold small">
                
                
                    </tfoot>
                </table>
                
                    <label for="">Remark Notes</label>
                    <textarea class="form-control" rows="5" disabled></textarea>
                    
                    
                    <p><strong>Notes:</strong></p> 
                <p  class="mb-0">Thank you for choosing our service.We look forward to meet you again</p>
                <p  class="mb-0">Money once paid will not we refunded. However, it can be abjected towards any services</p>
                <p class="font-weight-bold small mt-0">Other T &C Apply</p>
                </div>
            </div>
        </div>
        </div>    <!--pages-->
    </div>
    <div class="page">
        <header class="row mb-3 d-flex justify-content-center">
            
            <div class="col-2">
                <img src="/img/profile.jpg" class="img-thumbnail">
            </div>
            <div class="col-10">
                <h3>PT. ANGKASA AKBAR TARUNA (AAT)</h3>
                <h5>SHIP & MANNING MANAGEMENT</h5>
                <p>Jl. Kebon Bawang II No. 13, Jakarta 14320. Indonesia
                <br><i class="bi bi-telephone"></i> +62 21-435-2042 <i class="bi bi-printer"></i> +62 21-435-2043 <i class="bi bi-envelope"></i> hello@japantuna.id</p>
            </div>
            <hr>
        </header>
        <div class="subpage">
        <p>{{$order->created_at}}
        <br>From : PT. ANGKASA AKBAR TARUNA (AAT)
        <br>To : JAPAN TUNA FISHERIES CORPORATION (JTFC)
                
        </p>
        </div>    
    </div>
</div>
<script>
    // window.print();
</script>
</body>
</html>