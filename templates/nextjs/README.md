# PicoCSS Templates - React/Next.js Components

Type-safe, auto-generated React components for all HTML5 elements with full ARIA support.

> **Universal Compatibility**: These components work in both Next.js (Server Components, Client Components) and regular React applications (CRA, Vite, etc.). They use pure functional React patterns without hooks or browser-specific APIs.

## Features

- ✅ **Type-Safe**: Full TypeScript support with comprehensive prop types
- ✅ **ARIA Compliant**: Complete ARIA attribute support with proper types
- ✅ **Universal React**: Works in Next.js (App Router, Pages Router) and regular React apps
- ✅ **Server Components**: Compatible with Next.js Server Components (no hooks, no client-side APIs)
- ✅ **Client Components**: Works as client components when needed
- ✅ **Auto-Generated**: Consistent API across all HTML5 elements
- ✅ **Tree-Shakeable**: Import only the components you need
- ✅ **Zero Dependencies**: Only requires React
- ✅ **Semantic HTML**: Direct mapping to native HTML elements
- ✅ **Data Attributes**: Support for custom `data-*` attributes via object syntax


## Quick Start

Import components from the main index or directly from category folders:

```tsx
// From main index
import { Button, Div, H1 } from './index';

// Or from category folders
import { Button } from './nextjs/inline/button';
import { Div } from './nextjs/block/div';
```

## Usage Examples

### Basic Example

```tsx
import { Button, Div, H1 } from './index';

export default function Page() {
  return (
    <Div className="container">
      <H1>Welcome</H1>
      <Button
        type="submit"
        ariaBusy="false"
        tabindex={0}
      >
        Click me
      </Button>
    </Div>
  );
}
```

### Form Example

```tsx
import { Form, Label, Input, Textarea, Button } from './index';

export default function ContactForm() {
  return (
    <Form method="post" action="/api/contact">
      <Label htmlFor="name">Name</Label>
      <Input
        id="name"
        name="name"
        type="text"
        required={true}
        autocomplete="name"
        placeholder="Enter your name"
      />

      <Label htmlFor="message">Message</Label>
      <Textarea
        id="message"
        name="message"
        rows={5}
        required={true}
        placeholder="Your message"
      />

      <Button type="submit">Send</Button>
    </Form>
  );
}
```

### Accessible Navigation

```tsx
import { Nav, Ul, Li, A } from './index';

export default function Navigation() {
  return (
    <Nav role="navigation" ariaLabel="Main navigation">
      <Ul role="list">
        <Li role="listitem">
          <A href="/" ariaCurrent="page">Home</A>
        </Li>
        <Li role="listitem">
          <A href="/about">About</A>
        </Li>
        <Li role="listitem">
          <A href="/contact">Contact</A>
        </Li>
      </Ul>
    </Nav>
  );
}
```

## Component Categories

### Block Elements
Article, Aside, Audio, Blockquote, Body, Canvas, Caption, Colgroup, Datalist, Dd, Del, Details, Dialog, Div, Dl, Dt, Embed, Fieldset, Figcaption, Figure, Footer, Form, H1-H6, Header, Hgroup, Hr, Html, Iframe, Ins, Legend, Li, Main, Map, Menu, Nav, Noscript, Object, Ol, Optgroup, Option, P, Picture, Pre, Section, Summary, Table, Tbody, Td, Template, Tfoot, Th, Thead, Tr, Ul, Video

### Inline Elements
A, Abbr, Address, B, Bdi, Bdo, Button, Cite, Code, Data, Dfn, Em, I, Img, Input, Kbd, Label, Mark, Meter, Output, Progress, Q, Rp, Rt, Ruby, S, Samp, Select, Slot, Small, Span, Strong, Sub, Sup, Svg, Textarea, Time, U, Var

### Void Elements
Area, Base, Br, Col, Head, Link, Meta, Param, Script, Source, Style, Title, Track, Wbr

## TypeScript Support

All components export their prop types:

```tsx
import type { ButtonProps, DivProps } from './index';

// Use in your own component types
interface MyComponentProps {
  buttonProps: ButtonProps;
  containerProps: DivProps;
}
```

## Server Components

All components are compatible with Next.js Server Components by default (no hooks, no browser APIs):

```tsx
// app/page.tsx (Next.js App Router - Server Component by default)
import { Article, H1, P } from './index';

export default async function Page() {
  const data = await fetchData();

  return (
    <Article>
      <H1>{data.title}</H1>
      <P>{data.content}</P>
    </Article>
  );
}
```

## Client Components

If you need client-side interactivity, add the 'use client' directive:

```tsx
'use client';

import { Button } from './index';
import { useState } from 'react';

export default function InteractiveButton() {
  const [clicked, setClicked] = useState(false);

  return (
    <Button onClick={() => setClicked(true)}>
      {clicked ? 'Clicked!' : 'Click me'}
    </Button>
  );
}
```

## Regular React (CRA, Vite)

Works seamlessly in any React application:

```tsx
import { Div, H1, P } from '@vardumper/extended-htmldocument-nextjs';

function MyComponent() {
  return (
    <Div className="container">
      <H1>Hello World</H1>
      <P>This works in any React app!</P>
    </Div>
  );
}
```## Props

All components support:
- Standard HTML attributes for their element type
- ARIA attributes (aria-* with proper typing)
- Global attributes (id, className, style, tabindex, etc.)
- Data attributes via the `data` prop (object)
- Children content (for non-void elements)

### Special Props

- `className`: Maps to the HTML `class` attribute
- `data`: Object of data attributes (e.g., `{ userId: "123" }` becomes `data-user-id="123"`)
- `htmlFor`: For Label elements (maps to `for` attribute)
- Boolean attributes: Pass `true` to include, `undefined` to omit

### Data Attributes Example

```tsx
import { Div } from './index';

<Div
  data={{
    testid: 'my-component',
    analytics: 'track-me',
    userId: '12345'
  }}
>
  // Renders: <div data-testid="my-component" data-analytics="track-me" data-user-id="12345">
</Div>
```

## Framework Compatibility

These components are **framework-agnostic** and work in:

| Framework | Compatibility | Notes |
|-----------|---------------|-------|
| **Next.js 13+** | ✅ Full | Works as Server Components (default) or Client Components |
| **Next.js 12** | ✅ Full | Works in Pages Router |
| **Create React App** | ✅ Full | Standard React components |
| **Vite + React** | ✅ Full | Standard React components |
| **Remix** | ✅ Full | Works as Server Components or Client Components |
| **Gatsby** | ✅ Full | Standard React components |
| **React Native** | ❌ No | These are DOM-based HTML components |

**Why Universal?**
- No hooks (useState, useEffect, etc.)
- No browser APIs (window, document, etc.)
- Pure functional components
- Only dependency: React
- Uses React.createElement (not JSX)

## Generation

These components are auto-generated using:

```bash
php bin/ext-html generate:all nextjs templates/nextjs --overwrite-existing=true
```

**Note**: Do not manually edit these files as they will be overwritten on regeneration.

## TypeScript Configuration

Ensure your `tsconfig.json` includes:

```json
{
  "compilerOptions": {
    "jsx": "react",
    "esModuleInterop": true,
    "strict": true
  }
}
```

## Browser Compatibility

These components generate standard HTML elements and are compatible with all modern browsers that support React.

## License

Auto-generated from ExtendedHTMLDocument package.
