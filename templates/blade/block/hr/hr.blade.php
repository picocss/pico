{{--
  This file is auto-generated.

  Hr - The hr element represents a thematic break between paragraph-level elements. It is typically a horizontal rule or line.

  @component hr
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$alignChoices = ['center' => true, 'justify' => true, 'left' => true, 'right' => true];
$dirChoices = ['ltr' => true, 'rtl' => true, 'auto' => true];
$attrs = [];
if (isset($align) && isset($alignChoices[$align])) $attrs[] = 'align="' . e($align) . '"';
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($color)) $attrs[] = 'color="' . e($color) . '"';
if (isset($dir) && isset($dirChoices[$dir])) $attrs[] = 'dir="' . e($dir) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($noshade)) $attrs[] = 'noshade="' . e($noshade) . '"';
if (isset($size)) $attrs[] = 'size="' . e($size) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
if (isset($title)) $attrs[] = 'title="' . e($title) . '"';
if (isset($width)) $attrs[] = 'width="' . e($width) . '"';
@endphp
@section('hr')
<hr {!! implode(' ', $attrs) !!} />
@endsection
