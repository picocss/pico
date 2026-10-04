{{--
  This file is auto-generated.

  Col - The col element represents a column in a table.

  @component col
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$attrs = [];
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($span)) $attrs[] = 'span="' . e($span) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($width)) $attrs[] = 'width="' . e($width) . '"';
@endphp
@section('col')
<col {!! implode(' ', $attrs) !!} />
@endsection
