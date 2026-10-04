{{--
  This file is auto-generated.

  Wbr - The wbr element represents a word break opportunity.

  @component wbr
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
@endphp
@section('wbr')
<wbr {!! implode(' ', $attrs) !!} />
@endsection
