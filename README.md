<p align="center">
  <a href="https://picocss.com/">
    <img src="https://picocss.com/img/logo.svg" width="64" height="64">
  </a>
</p>

<h3 align="center">Pico.css</h3>

<p align="center">
  <strong>Graceful & Minimal CSS design system in pure semantic HTML.</strong><br>
  Elegant styles for all natives HTML elements without <code>.classes</code> and dark mode automatically enabled.<br><br>
  <a href="https://picocss.com/#examples">Examples</a> ·
  <a href="https://picocss.com/docs/">Documentation</a>
</p>

## Pico.css
[![CSS Gzipped](https://img.badgesize.io/picocss/pico/master/css/pico.min.css?compression=gzip&color=1095c1&label=CSS%20gzipped)](https://unpkg.com/@picocss/pico@latest/css/pico.min.css)
[![Github release](https://img.shields.io/github/v/release/picocss/pico?color=1095c1&logo=github&logoColor=white)](https://github.com/picocss/pico/releases/latest)
[![npm version](https://img.shields.io/npm/v/@picocss/pico?color=1095c1)](https://www.npmjs.com/package/@picocss/pico)
[![License](https://img.shields.io/badge/license-MIT-%231095c1)](https://github.com/picocss/pico/blob/master/LICENSE.md)

**Class-light and semantic**  
We use simple native HTML tags as much as possible. Only 6 .classes are used in Pico.

**Great styles with just one CSS file**  
No dependencies, package manager, external files, or JavaScript.

**Responsive everything**  
Elegant and consistent adaptative spacings and typography on all devices.

**Light or Dark mode**  
Shipped with two beautiful color themes, automatically enabled according to the user preference.

## Table of contents

- [Usage](#usage)
- [Class-less version](#class-less-version)
- [Examples](#examples)
- [Documentation](#documentation)
- [Contributing](#contributing)
- [Copyright and license](#copyright-and-license)

## Usage

There are 3 ways to get started with pico.css:

**Install manually**

[Download Pico](https://github.com/picocss/pico/archive/refs/heads/master.zip) and link `/css/pico.min.css` in the `<head>` of your website.

```html
<link rel="stylesheet" href="css/pico.min.css">
```

**Install from CDN**

Alternatively, you can use [unpkg CDN](https://unpkg.com/@picocss/pico@latest/) to link pico.css.

```html
<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
```

**Install with NPM**

```shell
npm install @picocss/pico
```

## Class-less version

Pico provide a `.classless` version ([example](https://picocss.com/examples/classless)).

In this version, `header`, `main` and `footer` act as container.

Use the default `.classless` version if you need centered viewports:

```html
<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.classless.min.css">
```

Or use the `.fluid.classless` version if you need a fluid container:

```html
<link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.fluid.classless.min.css">
```

Then just write pure HTML, and it should look great:

```html
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.classless.min.css">
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

[![Examples](https://picocss.com/img/examples.jpg)](https://picocss.com/#examples)

- **[Preview](https://picocss.com/examples/preview/)**  
  A starter example with all elements and components used in Pico

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

- **[Bootstrap grid system](https://picocss.com/examples/bootstrap-grid/)**  
  Custom CSS build with the Bootstrap grid system to manage complex grid layouts in Pico

All examples are open-sourced in [picocss/examples](https://github.com/picocss/examples).

## Documentation

**Getting started**
- [Usage](https://picocss.com/docs/#start)
- [Themes](https://picocss.com/docs/#themes)
- [Customization](https://picocss.com/docs/#customization)
- [Class-less version](https://picocss.com/docs/#classless)

**Layout**
- [Containers](https://picocss.com/docs/#containers)
- [Grids](https://picocss.com/docs/#grids)
- [Horizontal scroller](https://picocss.com/docs/#scroller)

**Elements**
- [Typography](https://picocss.com/docs/#typography)
- [Buttons](https://picocss.com/docs/#buttons)
- [Forms](https://picocss.com/docs/#forms)
- [Tables](https://picocss.com/docs/#tables)

**Components**
- [Accordions](https://picocss.com/docs/#accordions)
- [Cards](https://picocss.com/docs/#cards)
- [Navs](https://picocss.com/docs/#navs)
- [Progress](https://picocss.com/docs/#progress)

**Utilities**
- [Loading](https://picocss.com/docs/#loading)
- [Tooltips](https://picocss.com/docs/#tooltips)

## Contributing

- [`dev`](https://github.com/picocss/pico/tree/dev) branch is open to pull requests.
- Do not edit [`/css`](https://github.com/picocss/pico/tree/master/css) files directly. Those files are automatically generated. You should edit the source files in [`/scss`](https://github.com/picocss/pico/tree/master/scss).

## Copyright and license

Licensed under the [MIT License](https://github.com/picocss/pico/blob/master/LICENSE.md).

Openly inspired by: [Bootstrap](https://github.com/twbs/bootstrap), [CSS Bed](https://github.com/ubershmekel/cssbed), [Normalize](https://github.com/necolas/normalize.css/), [Sanitize](https://csstools.github.io/sanitize.css/), [Spectre](https://github.com/picturepan2/spectre), [Wing](https://github.com/kbrsh/wing/).
