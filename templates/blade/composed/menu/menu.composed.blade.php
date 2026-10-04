{{--
  This file is auto-generated.

  Menu - Composed Example
  The menu element represents a group of commands that a user can perform or activate. It can be used for toolbars, context menus, or listing form controls.

  CONTENT MODEL:
  - Can have children: Button, Form, ListItem, Script, Template
--}}
@section('menu')
<menu class="example">
@include('blade.inline.button.button', ['content' => 'Button 1'])
@include('blade.inline.button.button', ['content' => 'Button 2'])
@include('blade.block.form.form', ['content' => 'Example content'])
</menu>
@endsection
