{{--
  This file is auto-generated.

  Base - The base element specifies the base URL to use for all relative URLs in a document. There can be at maximum one <base> element in a document, and it must be inside the <head> element.

  @component base
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$targetChoices = ['_blank' => true, '_parent' => true, '_self' => true, '_top' => true];
$attrs = [];
if (isset($href)) $attrs[] = 'href="' . e($href) . '"';
if (isset($target) && isset($targetChoices[$target])) $attrs[] = 'target="' . e($target) . '"';
@endphp
@section('base')
<base {!! implode(' ', $attrs) !!} />
@endsection
