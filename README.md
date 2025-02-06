<p>
  <a href="https://picocss.com" target="_blank">
    <picture>
      <source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/Yohn/PicoCSS/HEAD/.github/logo-dark.svg">
      <source media="(prefers-color-scheme: light)" srcset="https://raw.githubusercontent.com/Yohn/PicoCSS/HEAD/.github/logo-light.svg">
      <img alt="Pico CSS" src="https://raw.githubusercontent.com/Yohn/PicoCSS/HEAD/.github/logo-light.svg" width="auto" height="60">
    </picture>
  </a>
</p>

[![Github release](https://img.shields.io/github/v/release/Yohn/PicoCSS?color=0172.ad&logo=github&logoColor=white)](https://github.com/Yohn/PicoCSS/releases/latest)
[![npm version](https://img.shields.io/npm/v/@yohns/picocss?color=0172ad)](https://www.npmjs.com/package/@yohns/picocss)
[![License](https://img.shields.io/badge/license-MIT-%230172ad)](https://github.com/Yohn/PicoCSS/blob/master/LICENSE.md)
<!-- [![Twitter URL](https://img.shields.io/twitter/url/https/twitter.com/picocss.svg?style=social&label=Follow%20%40picocss)](https://twitter.com/picocss) -->

## Yohns Updated Version
I'm not sure if the original [Pico CSS](https://github.com/picocss/pico) repository is abandoned or not, but I really liked what they had to offer, and wanted to help not let this awesomely simple and easy to use front end framework disappear, so I merged as many of open pull requests that fixed some issues, and / or enhanced the project that were available at the time. I'll try to help keep it viable and do some bug fixes if any arise, and would alway appreciate anyone elses help to continue keeping this alive!

You can see the new features I, and many others have created pull requests for by going to [Yohns Pico CSS](https://yohn.github.io/PicoCSS). This page just has the demos of most of the features I have merged, or added to the project.

## Extras Built on top of PicoCSS
 - [Alert, Confirm, and Prompt Dialogs](https://github.com/Yohn/PicoCSS-Datatables/blob/main/src/CustomDialog.js) (Will work on that more later, but it works good!)
 - [YoSelect](https://github.com/Yohn/YoSelect) Searchable `<select>` options, with tagging, image support, and a lot more!
 - [PicoCSS-WYSIWYG](https://github.com/Yohn/PicoCSS-WYSIWYG) Simple editor wih card, accordion, image, links, lists, headers and more
 - [PicoCSS-Datatables](https://github.com/Yohn/PicoCSS-Datatables) Searchable, sortable, editable, filterable table data helper.

## Minimal CSS Framework for Semantic HTML

A minimalist and lightweight starter kit that prioritizes semantic syntax, making every HTML element responsive and elegant by default.

Write HTML, Add Pico CSS, and Voilà!

## What’s new in v2?

Pico v2.0 features better accessibility, easier customization with SASS, a complete color palette, a new group component, and 20 precompiled color themes totaling over 100 combinations accessible via CDN.

[Read more](https://picocss.com/docs/v2)

## A Superpowered HTML Reset

With just the right amount of everything, Pico is great starting point for a clean and lightweight design system.

- Class-light and Semantic
- Great Styles with Just CSS
- Responsive Everything
- Light or Dark Mode
- Easy Customization
- Optimized Performance

## Table of contents

1. [Yohns Updated Version](#yohns-updated-version)
2. [Extras Built on top of PicoCSS](#extras-built-on-top-of-picocss)
3. [Minimal CSS Framework for Semantic HTML](#minimal-css-framework-for-semantic-html)
4. [What’s new in v2?](#whats-new-in-v2)
5. [A Superpowered HTML Reset](#a-superpowered-html-reset)
6. [Table of contents](#table-of-contents)
7. [Quick start](#quick-start)
   1. [Install manually](#install-manually)
   2. [Usage from CDN](#usage-from-cdn)
   3. [Install with NPM](#install-with-npm)
   4. [Starter HTML template](#starter-html-template)
8. [Class-less version](#class-less-version)
9. [Limitations](#limitations)
10. [Documentation](#documentation)
11. [Browser Support](#browser-support)
12. [Contributing](#contributing)
13. [Copyright and license](#copyright-and-license)

## Quick start

There are 4 ways to get started with pico.css:

### Install manually

[Download Pico](https://github.com/Yohn/PicoCSS/archive/refs/heads/main.zip) and link `/css/pico.min.css` in the `<head>` of your website.

```html
<link rel="stylesheet" href="css/pico.min.css" />
```

### Usage from CDN

Alternatively, you can use [jsDelivr CDN](https://www.jsdelivr.com/package/npm/@yohns/picocss) to link pico.css.

```html
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yohns/picocss@2.2.10/css/pico.min.css" />
```

### Install with NPM

```shell
npm i @yohns/picocss
```
<!--
Or

```shell
yarn add @picocss/pico
```-->

Then, import Pico into your SCSS file with [@use](https://sass-lang.com/documentation/at-rules/use):

```SCSS
@use "pico";
```

<!--### Install with Composer

```shell
composer require picocss/pico
```-->

### Starter HTML template

```HTML
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark" />
    <link rel="stylesheet" href="css/pico.min.css">
    <title>Hello world!</title>
  </head>
  <body>
    <main class="container">
      <h1>Hello world!</h1>
    </main>
  </body>
</html>
```

## Class-less version

Pico provides a `.classless` version.

In this version, `<header>`, `<main>`, and `<footer>` inside `<body>` act as containers to define a centered or a fluid viewport.

Use the default `.classless` version if you need centered viewports:

```html
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@yohns/picocss@2.2.10/css/pico.classless.min.css"
/>
```

Or use the `.fluid.classless` version if you need a fluid container:

```html
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@yohns/picocss@2.2.10/css/pico.fluid.classless.min.css"
/>
```

Then just write pure HTML, and it should look great:

```html
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="color-scheme" content="light dark" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@yohns/picocss@2.2.10/css/pico.classless.min.css"
    />
    <title>Hello, world!</title>
  </head>
  <body>
    <main>
      <h1>Hello, world!</h1>
    </main>
  </body>
</html>
```

## Limitations

Pico CSS can be used without custom CSS for quick or small projects. However, it’s designed as a starting point, like a “reset CSS on steroids”. As Pico does not integrate any helpers or utilities `.classes`, this minimal CSS framework requires SCSS or CSS knowledge to build large projects.

[Read more](https://picocss.com/docs/usage-scenarios)

## Documentation

**Getting started**

- [Yohns Pico CSS Additions](https://yohn.github.io/PicoCSS/)
- [Quick start](https://picocss.com/docs)
- [Version picker `New`](https://picocss.com/docs/version-picker)
- [Color schemes](https://picocss.com/docs/color-schemes)
- [Class-less version](https://picocss.com/docs/classless)
- [Conditional styling `New`](https://picocss.com/docs/conditional)
- [RTL](https://picocss.com/docs/rtl)

**Customization**

- [CSS Variables](https://picocss.com/docs/css-variables)
- [Sass](https://picocss.com/docs/sass)
- [Colors `New`](https://picocss.com/docs/colors)

**Layout**

- [Container](https://picocss.com/docs/container)
- [Landmarks & section](https://picocss.com/docs/landmarks-section)
- [Grid](https://picocss.com/docs/grid)
- [Overflow auto `New`](https://picocss.com/docs/overflow-auto)

**Content**

- [Typography](https://picocss.com/docs/typography)
- [Link](https://picocss.com/docs/link)
- [Button](https://picocss.com/docs/button)
- [Table](https://picocss.com/docs/table)

**Forms**

- [Overview](https://picocss.com/docs/forms)
- [Input](https://picocss.com/docs/forms/input)
- [Textarea](https://picocss.com/docs/forms/textarea)
- [Select](https://picocss.com/docs/forms/select)
- [Checkboxes](https://picocss.com/docs/forms/checkboxes)
- [Radios](https://picocss.com/docs/forms/radios)
- [Switch](https://picocss.com/docs/forms/switch)
- [Range](https://picocss.com/docs/forms/range)

**Components**

- [Accordion](https://picocss.com/docs/accordion)
- [Card](https://picocss.com/docs/card)
- [Dropdown](https://picocss.com/docs/dropdown)
- [Group `New`](https://picocss.com/docs/group)
- [Loading](https://picocss.com/docs/loading)
- [Modal](https://picocss.com/docs/modal)
- [Nav](https://picocss.com/docs/nav)
- [Progress](https://picocss.com/docs/progress)
- [Tooltip](https://picocss.com/docs/tooltip)

**About**

- [What’s new in v2?](https://picocss.com/docs/v2)
- [Mission](https://picocss.com/docs/mission)
- [Usage scenarios](https://picocss.com/docs/usage-scenarios)
- [Brand](https://picocss.com/docs/brand)
- [Built With](https://picocss.com/docs/built-with)

## Browser Support

Pico CSS is designed and tested for the latest stable Chrome, Firefox, Edge, and Safari releases. It does not support any version of IE, including IE 11.

## Contributing

If you are interested in contributing to Pico CSS, please read our [contributing guidelines](https://github.com/Yohn/PicoCSS/blob/master/.github/CONTRIBUTING.md).

## Copyright and license

Licensed under the [MIT License](https://github.com/Yohn/PicoCSS/blob/master/LICENSE.md).
