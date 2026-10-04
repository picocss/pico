{{--
  This file is auto-generated.

  Table - Composed Example
  The table element represents tabular data — that is, information presented in a two-dimensional table comprised of rows and columns of cells containing data.

  CONTENT MODEL:
  - Can be a child of: Article, Aside, Body, DefinitionDescription, Details, Dialog, Division, Footer, Header, Main, MarkedText, Paragraph, Section, Slot, Template
  - Can have children: Caption, ColumnGroup, TableBody, TableFoot, TableHead, TableRow
--}}
@section('table')
<table class="example">
@include('blade.block.caption.caption', ['content' => 'Example content'])
@include('blade.block.colgroup.colgroup', ['content' => 'Example content'])
@include('blade.block.colgroup.colgroup', ['content' => 'Example content'])
</table>
@endsection
