{{--
  This file is auto-generated.

  Details - Composed Example
  The details element represents a disclosure widget from which the user can obtain additional information or controls.

  CONTENT MODEL:
  - Can be a child of: Aside, Body, DefinitionDescription, Dialog, Division, Footer, Form, Header, Main, MarkedText, Paragraph, Section, Slot, Template
  - Can have children: Division, DefinitionList, Form, ListItem, OrderedList, Paragraph, PreformattedText, Summary, Table, UnorderedList
--}}
@section('details')
<details class="example">
@include('blade.block.p.p', ['content' => 'Example content'])
@include('blade.block.p.p', ['content' => 'Example content'])
@include('blade.block.summary.summary', ['content' => 'Summary'])
</details>
@endsection
