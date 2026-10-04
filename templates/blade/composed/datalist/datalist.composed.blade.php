{{--
  This file is auto-generated.

  Datalist - Composed Example
  The datalist element contains a set of option elements that represent the permissible or recommended options available to users.

  CONTENT MODEL:
  - Can be a child of: Body, Fieldset, Form
  - Can have children: Option
--}}
@section('datalist')
<datalist class="example">
@include('blade.block.option.option', ['content' => 'Option 1'])
@include('blade.block.option.option', ['content' => 'Option 2'])
</datalist>
@endsection
