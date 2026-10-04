{{--
  This file is auto-generated.

  Track - The track element is used as a child of the media elements—audio and video. It lets you specify timed text tracks (or time-based data), for example to automatically handle subtitles. The tracks are formatted in WebVTT format (.vtt files) — Web Video Text Tracks.

  @component track
  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@php
$kindChoices = ['captions' => true, 'chapters' => true, 'descriptions' => true, 'metadata' => true, 'subtitles' => true];
$attrs = [];
if (isset($class)) $attrs[] = 'class="' . e($class) . '"';
if (isset($default)) $attrs[] = 'default="' . e($default) . '"';
if (isset($hidden) && $hidden) $attrs[] = 'hidden';
if (isset($id)) $attrs[] = 'id="' . e($id) . '"';
if (isset($kind) && isset($kindChoices[$kind])) $attrs[] = 'kind="' . e($kind) . '"';
if (isset($label)) $attrs[] = 'label="' . e($label) . '"';
if (isset($lang)) $attrs[] = 'lang="' . e($lang) . '"';
if (isset($src)) $attrs[] = 'src="' . e($src) . '"';
if (isset($srclang)) $attrs[] = 'srclang="' . e($srclang) . '"';
if (isset($style)) $attrs[] = 'style="' . e($style) . '"';
@endphp
@section('track')
<track {!! implode(' ', $attrs) !!} />
@endsection
