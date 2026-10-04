{{--
  This file is auto-generated.

  Colgroup - The colgroup element represents a group of one or more columns in the table that is its parent, if it has a parent and that is a table element.

  @component colgroup
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$attrs = [];
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($slot)) $attrs[] = 'slot="' . e($slot) . '"';
if (isset($span)) $attrs[] = 'span="' . e($span) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
@endphp
@section('colgroup')
<colgroup {!! implode(' ', $attrs) !!}>
  @yield('content')
</colgroup>
@endsection
