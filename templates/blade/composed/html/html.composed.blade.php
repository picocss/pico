{{--
  This file is auto-generated.

  Html - Composed Example
  The root element of an HTML document. It represents the top-level of the HTML structure.

  CONTENT MODEL:
  - Can have children: Body, Head
--}}
@section('html')
<html class="example">
@include('blade.block.body.body', ['content' => 'Example content'])
@include('blade.void.head.head', ['content' => 'Example content'])
</html>
@endsection
