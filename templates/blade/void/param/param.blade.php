{{--
  This file is auto-generated.

  Param - The param element defines parameters for an object element.

  @component param
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$attrs = [];
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($name)) $attrs[] = 'name="' . e($name) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($value)) $attrs[] = 'value="' . e($value) . '"';
@endphp
@section('param')
<param {!! implode(' ', $attrs) !!} />
@endsection
