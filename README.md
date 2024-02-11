<p align="center" style="padding: 1rem;">
  <a href="https://v2.picocss.com/">
    <img src=".github/logo.svg" width="auto" height="60">
  </a>
</p>

<p align="center">
 <strong>A minimalist and lightweight starter kit that prioritizes semantic syntax, making every HTML element responsive and elegant by default.</strong>
</p>

<p align="center">
 Write HTML, Add Pico CSS, and Voilà!
</p>

<p align="center">
  <a href="https://v2.picocss.com/docs">Documentation</a>
</p>

# Pico.css

**Class-light and Semantic**  
Thriving on simplicity, Pico directly styles your HTML tags, using fewer than 10 `.classes`` overall. It also comes with a class-less version for wild HTML purists.

**Great Styles with Just CSS**  
No extra baggage needed. Pico works seamlessly without dependencies, package managers, external files, or JavaScript, achieving elegant and straightforward styles with pure HTML markup.

**Responsive Everything**  
Effortless elegance on every device. Pico natively scales font sizes and spacings with screen widths, resulting in a consistent and elegant look across devices. No extra classes or configuration needed.

**Light or Dark Mode**  
Pico comes with two accessible, neutral color schemes out of the box: light and dark. The best part? It automatically adapts to users' `prefers-color-scheme``, all without the use of JavaScript.

**Easy Customization**  
Customize Pico with over 130 CSS variables, or dive deeper by using SASS. Switch between 20 handcrafted color themes and compose with 30+ modular components to tailor the UI to your brand's look and feel.

**Optimized Performance**  
Speed meets elegance. Unlike bulky and overcomplicated frameworks that demand extensive class overrides and JavaScript, Pico keeps your HTML lean, decreases memory usage by avoiding excessive CSS specificity, and reduces loaded files.

# Table of contents

- [Quick start](#quick-start)
- [Class-less version](#class-less-version)
- [Limitations](#limitations)
- [Documentation](#documentation)
- [Browser Support](#browser-support)
- [Contributing](#contributing)
- [Copyright and license](#copyright-and-license)

# Quick start

There are 4 ways to get started with pico.css:

**Install manually**

[Download Pico](https://github.com/picocss/pico/archive/refs/heads/v2.zip) and link `/css/pico.min.css` in the `<head>` of your website.

```html
<link rel="stylesheet" href="css/pico.min.css" />
```

**Usage from CDN**

Alternatively, you can use [jsDelivr CDN](https://www.jsdelivr.com/package/npm/@picocss/pico) to link pico.css.

```html
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@next/css/pico.min.css" />
```

**Install with NPM**

```shell
npm install @picocss/pico@next
```

```shell
yarn add @picocss/pico@next
```

**Install with Composer**

```shell
composer require picocss/pico
```

# Class-less version

Pico provides a `.classless` version ([example](https://picocss.com/examples/classless)).

In this version, `header`, `main` and `footer` act as containers.

Use the default `.classless` version if you need centered viewports:

```html
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@next/css/pico.classless.min.css"
/>
```

Or use the `.fluid.classless` version if you need a fluid container:

```html
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@next/css/pico.fluid.classless.min.css"
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
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@next/css/pico.classless.min.css"
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

# Limitations

Pico can be used without custom CSS for quick or small projects. However, it’s designed as a starting point, like a “reset CSS on steroids”. As Pico does not integrate any helpers or utilities `.classes`, this minimal CSS framework requires SCSS or CSS knowledge to build large projects.

# Documentation

**Getting started**

- [Quick start](https://v2.picocss.com/docs)
- [Version picker `New`](https://v2.picocss.com/docs/version-picker)
- [Color schemes](https://v2.picocss.com/docs/color-schemes)
- [Class-less version](https://v2.picocss.com/docs/classless)
- [RTL](https://v2.picocss.com/docs/rtl)

**Customization**

- [CSS Variables](https://v2.picocss.com/docs/css-variables)
- [Sass](https://v2.picocss.com/docs/sass)
- [Colors `New`](https://v2.picocss.com/docs/colors)

**Layout**

- [Container](https://v2.picocss.com/docs/container)
- [Landmarks & section](https://v2.picocss.com/docs/landmarks-section)
- [Grid](https://v2.picocss.com/docs/grid)
- [Overflow auto `New`](https://v2.picocss.com/docs/overflow-auto)

**Content**

- [Typography](https://v2.picocss.com/docs/typography)
- [Link](https://v2.picocss.com/docs/link)
- [Button](https://v2.picocss.com/docs/button)
- [Table](https://v2.picocss.com/docs/table)

**Forms**

- [Overview](https://v2.picocss.com/docs/forms)
- [Input](https://v2.picocss.com/docs/forms/input)
- [Textarea](https://v2.picocss.com/docs/forms/textarea)
- [Select](https://v2.picocss.com/docs/forms/select)
- [Checkboxes](https://v2.picocss.com/docs/forms/checkboxes)
- [Radios](https://v2.picocss.com/docs/forms/radios)
- [Switch](https://v2.picocss.com/docs/forms/switch)
- [Range](https://v2.picocss.com/docs/forms/range)

**Components**

- [Accordion](https://v2.picocss.com/docs/accordion)
- [Card](https://v2.picocss.com/docs/card)
- [Dropdown](https://v2.picocss.com/docs/dropdown)
- [Group `New`](https://v2.picocss.com/docs/group)
- [Loading](https://v2.picocss.com/docs/loading)
- [Modal](https://v2.picocss.com/docs/modal)
- [Nav](https://v2.picocss.com/docs/nav)
- [Progress](https://v2.picocss.com/docs/progress)
- [Tooltip](https://v2.picocss.com/docs/tooltip)

**About**

- [What’s new in v2?](https://v2.picocss.com/docs/v2)
- [Mission](https://v2.picocss.com/docs/mission)
- [Usage scenarios](https://v2.picocss.com/docs/usage-scenarios)
- [Brand](https://v2.picocss.com/docs/brand)

# Browser Support

Pico is designed and tested for the latest stable Chrome, Firefox, Edge, and Safari releases. It does not support any version of IE, including IE 11.

# Contributing

If you are interested in contributing to Pico CSS, please read our [contributing guidelines](https://github.com/picocss/pico/blob/master/.github/CONTRIBUTING.md).

# Copyright and license

Licensed under the [MIT License](https://github.com/picocss/pico/blob/master/LICENSE.md).
