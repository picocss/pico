{{--
  This file is auto-generated.

  Br - The br element represents a line break.

  @component br
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
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
@endphp
@section('br')
<br {!! implode(' ', $attrs) !!} />
@endsection
