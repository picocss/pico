{{--
  This file is auto-generated.

  Form - Composed Example
  The form element represents a section of a document containing interactive controls for submitting information to a web server.

  CONTENT MODEL:
  - Can be a child of: Article, Body, DefinitionDescription, Details, Dialog, Division, Header, Main, MarkedText, Menu, Paragraph, Section, Slot, Template
  - Can have children: Button, Canvas, DataList, Details, Dialog, Fieldset, Input, Label, Legend, Meter, NoScript, Output, Progress, Script, Select, Slot, Summary, Template, Textarea
--}}
@section('form')
<form class="example">
@include('blade.inline.button.button', ['content' => 'Button 1'])
@include('blade.inline.button.button', ['content' => 'Button 2'])
@include('blade.block.fieldset.fieldset', ['content' => 'Example content'])
@include('blade.block.fieldset.fieldset', ['content' => 'Example content'])
</form>
@endsection
