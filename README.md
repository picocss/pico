<p>
  <a href="https://picocss.com" target="_blank">
    <picture>
      <source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/picocss/pico/HEAD/.github/logo-dark.svg">
      <source media="(prefers-color-scheme: light)" srcset="https://raw.githubusercontent.com/picocss/pico/HEAD/.github/logo-light.svg">
      <img alt="Pico CSS" src="https://raw.githubusercontent.com/picocss/pico/HEAD/.github/logo-light.svg" width="auto" height="60">
    </picture>
  </a>
</p>

[![Github release](https://img.shields.io/github/v/release/picocss/pico?color=0172ad&logo=github&logoColor=white)](https://github.com/picocss/pico/releases/latest)
[![npm version](https://img.shields.io/npm/v/@picocss/pico?color=0172ad)](https://www.npmjs.com/package/@picocss/pico)
[![License](https://img.shields.io/badge/license-MIT-%230172ad)](https://github.com/picocss/pico/blob/master/LICENSE.md)
[![X (formerly Twitter)](https://img.shields.io/twitter/url/https/twitter.com/picocss.svg?style=social&label=Follow%20%40picocss)](https://x.com/picocss)

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

- [Quick start](#quick-start)
- [Class-less version](#class-less-version)
- [Limitations](#limitations)
- [Documentation](#documentation)
- [Browser Support](#browser-support)
- [Contributing](#contributing)
- [Copyright and license](#copyright-and-license)

## Quick start

There are 4 ways to get started with pico.css:

### Install manually

[Download Pico](https://github.com/picocss/pico/archive/refs/heads/main.zip) and link `/css/pico.min.css` in the `<head>` of your website.

```html
<link rel="stylesheet" href="css/pico.min.css">
```

### Usage from CDN

Alternatively, you can use [jsDelivr CDN](https://www.jsdelivr.com/package/npm/@picocss/pico) to link pico.css.

```html
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
```

### Install with NPM

```shell
npm install @picocss/pico
```

Or

```shell
yarn add @picocss/pico
```

Then, import Pico into your SCSS file with [@use](https://sass-lang.com/documentation/at-rules/use):

```SCSS
@use "pico";
```

### Install with Composer

```shell
composer require picocss/pico
```

### Starter HTML template

```HTML
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
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
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>
```

Or use the `.fluid.classless` version if you need a fluid container:

```html
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.fluid.classless.min.css"
>
```

Then just write pure HTML, and it should look great:

```html
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
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

If you are interested in contributing to Pico CSS, please read our [contributing guidelines](https://github.com/picocss/pico/blob/master/.github/CONTRIBUTING.md).

## Copyright and license

Licensed under the [MIT License](https://github.com/picocss/pico/blob/master/LICENSE.md).
