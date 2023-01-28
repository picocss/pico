<p align="center">
  <a href="https://picocss.com/">
    <img src="https://picocss.com/img/logo.svg" width="64" height="64">
  </a>
</p>

<h3 align="center">Pico.css</h3>

<p align="center">
  <strong>Minimal CSS Framework for semantic HTML</strong><br>
  Elegant styles for all native HTML elements without <code>.classes</code> and dark mode automatically enabled.<br><br>
  <a href="https://picocss.com/#examples">Examples</a> ·
  <a href="https://picocss.com/docs/">Documentation</a>
</p>

## Pico.css
[![Standard gzipped CSS](https://img.badgesize.io/picocss/pico/master/css/pico.min.css?compression=gzip&color=1095c1&label=Standard%20CSS)](https://unpkg.com/@picocss/pico@latest/css/pico.min.css)
[![Classless gzipped CSS](https://img.badgesize.io/picocss/pico/master/css/pico.classless.min.css?compression=gzip&color=1095c1&label=Classless%20CSS)](https://unpkg.com/@picocss/pico@latest/css/pico.classless.min.css)
[![Github release](https://img.shields.io/github/v/release/picocss/pico?color=1095c1&logo=github&logoColor=white)](https://github.com/picocss/pico/releases/latest)
[![npm version](https://img.shields.io/npm/v/@picocss/pico?color=1095c1)](https://www.npmjs.com/package/@picocss/pico)
[![License](https://img.shields.io/badge/license-MIT-%231095c1)](https://github.com/picocss/pico/blob/master/LICENSE.md)
[![Twitter URL](https://img.shields.io/twitter/url/https/twitter.com/picocss.svg?style=social&label=Follow%20%40picocss)](https://twitter.com/picocss)

https://user-images.githubusercontent.com/23470684/126863110-94061cf1-36ea-4697-94bd-2e1071a95a2f.mp4

**Class-light and semantic**  
Pico uses simple native HTML tags as much as possible. Less than 10 .classes are used in Pico.

**Great styles with just one CSS file**  
No dependencies, package manager, external files, or JavaScript.

**Responsive everything**  
Elegant and consistent adaptive spacings and typography on all devices.

**Light or Dark mode**  
Shipped with two beautiful color themes, automatically enabled according to the user preference.

## Table of contents

- [Usage](#usage)
- [Class-less version](#class-less-version)
- [Examples](#examples)
- [Limitations](#limitations)
- [Documentation](#documentation)
- [Browser Support](#browser-support)
- [Contributing](#contributing)
- [Copyright and license](#copyright-and-license)

## Usage

There are 4 ways to get started with pico.css:

**Install manually**

[Download Pico](https://github.com/picocss/pico/archive/refs/heads/master.zip) and link `/css/pico.min.css` in the `<head>` of your website.

```html
<link rel="stylesheet" href="css/pico.min.css">
```

**Install from CDN**

Alternatively, you can use [unpkg CDN](https://unpkg.com/@picocss/pico@1.*/) to link pico.css.

```html
<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
```

**Install with NPM**

```shell
npm install @picocss/pico
```

**Install with Composer**

```shell
composer require picocss/pico
```

## Class-less version

Pico provides a `.classless` version ([example](https://picocss.com/examples/classless)).

In this version, `header`, `main` and `footer` act as containers.

Use the default `.classless` version if you need centered viewports:

```html
<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.classless.min.css">
```

Or use the `.fluid.classless` version if you need a fluid container:

```html
<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.fluid.classless.min.css">
```

Then just write pure HTML, and it should look great:

```html
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.classless.min.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <main>
      <h1>Hello, world!</h1>
    </main>
  </body>
</html>
```

## Examples

Minimalist templates to discover Pico in action:

[![Examples](https://picocss.com/img/examples.jpg?v1.3.3)](https://picocss.com/#examples)

- **[Preview](https://picocss.com/examples/preview/)**  
  A starter example with all elements and components used in Pico

- **[Right-to-left (RTL) preview](https://picocss.com/examples/preview-rtl/)**  
A starter example in Arabic with all the elements and components used in Pico

- **[Class-less](https://picocss.com/examples/classless/)**  
  Just a pure semantic HTML markup, without `.classes`

- **[Basic template](https://picocss.com/examples/basic-template/)**  
  A basic custom template for Pico using only CSS custom properties (variables)

- **[Company](https://picocss.com/examples/company/)**  
  A classic company or blog layout with a sidebar

- **[Google Amp](https://picocss.com/examples/google-amp/)**   
  A simple layout for Google Amp, with inlined CSS

- **[Sign in](https://picocss.com/examples/sign-in/)**  
  A minimalist layout for Login pages

- **[Pico + Bootstrap grid system](https://picocss.com/examples/bootstrap-grid/)**  
  Custom CSS build with the Bootstrap grid system to manage complex grid layouts in Pico

All examples are open-sourced in [picocss/examples](https://github.com/picocss/examples).

## Limitations

Pico can be used without custom CSS for quick or small projects. However, it’s designed as a starting point, like a “reset CSS on steroids”. As Pico does not integrate any helpers or utilities `.classes`, this minimal CSS framework requires SCSS or CSS knowledge to build large projects.

## Documentation

**Getting started**

- [Usage](https://picocss.com/docs/)
- [Themes](https://picocss.com/docs/themes.html)
- [Customization](https://picocss.com/docs/customization.html)
- [Class-less version](https://picocss.com/docs/classless.html)
- [RTL](https://picocss.com/docs/rtl.html)

**Layout**

- [Containers](https://picocss.com/docs/containers.html)
- [Grids](https://picocss.com/docs/grid.html)
- [Horizontal scroller](https://picocss.com/docs/scroller.html)

**Elements**

- [Typography](https://picocss.com/docs/typography.html)
- [Buttons](https://picocss.com/docs/buttons.html)
- [Forms](https://picocss.com/docs/forms.html)
- [Tables](https://picocss.com/docs/tables.html)

**Components**

- [Accordions](https://picocss.com/docs/accordions.html)
- [Cards](https://picocss.com/docs/cards.html)
- [Dropdowns](https://picocss.com/docs/dropdowns.html)
- [Modal](https://picocss.com/docs/modal.html)
- [Navs](https://picocss.com/docs/navs.html)
- [Progress](https://picocss.com/docs/progress.html)

**Utilities**

- [Loading](https://picocss.com/docs/loading.html)
- [Tooltips](https://picocss.com/docs/tooltips.html)

## Browser support

Pico is designed and tested for the latest stable Chrome, Firefox, Edge, and Safari releases. It does not support any version of IE, including IE 11.

## Contributing

If you are interested in contributing to Pico CSS, please read our [contributing guidelines](https://github.com/picocss/pico/blob/master/.github/CONTRIBUTING.md).

## Copyright and license

Licensed under the [MIT License](https://github.com/picocss/pico/blob/master/LICENSE.md).

**Relevant third-party tools and resources we depend on:**

Website and docs:
- [TypeIt](https://typeitjs.com/): JavaScript animated typing utility (Licensed [GPL-3.0](https://github.com/alexmacarthur/typeit/blob/master/LICENSE))
- [Font Awesome](https://fontawesome.com/): Icons (Licensed [CC BY 4.0](https://fontawesome.com/license/free))

Pico Library:
- [Feather](https://feathericons.com/) Icons (Licensed [MIT](https://github.com/feathericons/feather/blob/master/LICENSE))
- [Normalize.css](https://necolas.github.io/normalize.css/): CSS reset (Licensed [MIT](https://github.com/necolas/normalize.css/blob/master/LICENSE.md))
- [Sanitize.css](https://csstools.github.io/sanitize.css/): Cross-browser default styling (Licensed [CC0 1.0 Universal](https://github.com/csstools/sanitize.css/blob/main/LICENSE.md))
