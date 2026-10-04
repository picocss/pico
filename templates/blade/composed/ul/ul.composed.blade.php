{{--
  This file is auto-generated.

  Ul - Composed Example
  The ul element represents an unordered list of items, namely a collection of items that do not have a numerical ordering, and their order in the list is meaningless.

  CONTENT MODEL:
  - Can be a child of: Article, Aside, Body, DefinitionDescription, Details, Dialog, Division, Footer, Header, ListItem, Main, Paragraph, Section, Slot, Template
  - Can have children: ListItem
--}}
@section('ul')
<ul class="example">
@include('blade.block.li.li', ['content' => 'Item 1'])
@include('blade.block.li.li', ['content' => 'Item 2'])
</ul>
@endsection
