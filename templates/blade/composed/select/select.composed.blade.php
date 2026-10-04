{{--
  This file is auto-generated.

  Select - Composed Example
  The select element represents a control for selecting amongst a set of options.

  CONTENT MODEL:
  - Can be a child of: Aside, Body, DefinitionDescription, Dialog, Division, Fieldset, Footer, Form, Header, Main, MarkedText, Paragraph, Section, Slot, Template
  - Can have children: OptionGroup, Option
--}}
@section('select')
<select class="example">
@include('blade.block.optgroup.optgroup', ['content' => 'Example content'])
@include('blade.block.optgroup.optgroup', ['content' => 'Example content'])
@include('blade.block.option.option', ['content' => 'Option 1'])
</select>
@endsection
