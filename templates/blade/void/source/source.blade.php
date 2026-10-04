{{--
  This file is auto-generated.

  Source - The source element allows authors to specify multiple media resources for media elements. It is an empty element. It is commonly used within the picture element.

  @component source
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$attrs = [];
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($media)) $attrs[] = 'media="' . e($media) . '"';
if (isset($sizes)) $attrs[] = 'sizes="' . e($sizes) . '"';
if (isset($src)) $attrs[] = 'src="' . e($src) . '"';
if (isset($srcset)) $attrs[] = 'srcset="' . e($srcset) . '"';
if (isset($type)) $attrs[] = 'type="' . e($type) . '"';
@endphp
@section('source')
<source {!! implode(' ', $attrs) !!} />
@endsection
