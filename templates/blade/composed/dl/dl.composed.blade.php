{{--
  This file is auto-generated.

  Dl - Composed Example
  The dl element represents an association list consisting of zero or more name-value groups (a description list). Each group must consist of one or more names (dt elements) followed by one or more values (dd elements). Within a single dl element, there should not be more than one dt element for each name.

  CONTENT MODEL:
  - Can be a child of: Article, Aside, Body, DefinitionDescription, Details, Dialog, Division, Footer, Header, ListItem, Main, Paragraph, Section, Slot, Template
  - Can have children: DefinitionDescription, DefinitionTerm
--}}
@section('dl')
<dl class="example">
@include('blade.block.dd.dd', ['content' => 'Definition 1'])
@include('blade.block.dt.dt', ['content' => 'Term 1'])
</dl>
@endsection
