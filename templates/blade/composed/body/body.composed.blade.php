{{--
  This file is auto-generated.

  Body - Composed Example
  The body element represents the content of an HTML document. All the contents such as text, images, headings, links, tables, etc. are placed between the body tags.

  CONTENT MODEL:
  - Can be a child of: HTML
  - Can have children: Anchor, Abbreviation, Address, Area, Article, Aside, Audio, Bold, BidirectionalIsolation, BidirectionalOverride, Blockquote, BreakElement, Button, Canvas, Citation, Code, Data, DataList, DeletedText, Details, Definition, Dialog, Division, DefinitionList, Emphasis, Embed, Fieldset, Figure, Footer, Form, Heading1, Heading2, Heading3, Heading4, Heading5, Heading6, Header, HorizontalRule, Italic, InlineFrame, Image, Input, InsertedText, KeyboardInput, Label, Main, Map, MarkedText, Meter, Navigation, NoScript, ObjectElement, OrderedList, Output, Paragraph, Picture, PreformattedText, Progress, Quotation, Ruby, Strikethrough, SampleOutput, Script, Section, Select, Small, Span, Strong, Subscript, Superscript, Table, Template, Textarea, Time, Underline, UnorderedList, Variable, Video, WordBreakOpportunity
--}}
@section('body')
<body class="example">
@include('blade.inline.a.a', ['content' => 'Example content'])
@include('blade.inline.a.a', ['content' => 'Example content'])
@include('blade.inline.abbr.abbr', ['content' => 'Example content'])
@include('blade.inline.abbr.abbr', ['content' => 'Example content'])
</body>
@endsection
